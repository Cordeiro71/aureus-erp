#!/bin/bash
set -e

APP_DIR="/var/www/aureuserp"
cd "$APP_DIR"

log() { echo "[aureus-dokploy] $(date '+%Y-%m-%d %H:%M:%S') $*"; }

DB_CONNECTION="${DB_CONNECTION:-mysql}"
DB_HOST="${DB_HOST:-db}"
DB_PORT="${DB_PORT:-3306}"
DB_DATABASE="${DB_DATABASE:-aureus}"
DB_USERNAME="${DB_USERNAME:-aureus}"
DB_PASSWORD="${DB_PASSWORD:-aureus}"

sed_escape() { printf '%s' "$1" | sed -e 's/[\\&|]/\\&/g'; }

set_env() {
    local key="$1" val
    val=$(sed_escape "$2")
    sed -i "s|^${key}=.*|${key}=${val}|" .env
}

# ---------------------------------------------------------------------------
# 1. Write .env from environment variables
# ---------------------------------------------------------------------------
log "Applying runtime environment overrides..."
set_env DB_CONNECTION "$DB_CONNECTION"
set_env DB_HOST       "$DB_HOST"
set_env DB_PORT       "$DB_PORT"
set_env DB_DATABASE   "$DB_DATABASE"
set_env DB_USERNAME   "$DB_USERNAME"
set_env DB_PASSWORD   "$DB_PASSWORD"

set_env APP_ENV    "${APP_ENV:-production}"
set_env APP_DEBUG  "${APP_DEBUG:-false}"

[ -n "$APP_URL" ]      && set_env APP_URL      "$APP_URL"
[ -n "$APP_NAME" ]     && set_env APP_NAME     "\"${APP_NAME}\""
[ -n "$APP_LOCALE" ]   && set_env APP_LOCALE   "$APP_LOCALE"
[ -n "$APP_CURRENCY" ] && set_env APP_CURRENCY "$APP_CURRENCY"
[ -n "$APP_TIMEZONE" ] && set_env APP_TIMEZONE "$APP_TIMEZONE"

[ -n "$REDIS_HOST" ]     && set_env REDIS_HOST     "$REDIS_HOST"
[ -n "$REDIS_PORT" ]     && set_env REDIS_PORT     "$REDIS_PORT"
[ -n "$REDIS_PASSWORD" ] && set_env REDIS_PASSWORD "$REDIS_PASSWORD"

if [ -n "$REDIS_HOST" ]; then
    set_env CACHE_STORE    "redis"
    set_env SESSION_DRIVER "redis"
    set_env QUEUE_CONNECTION "redis"
fi

# ---------------------------------------------------------------------------
# 2. Generate APP_KEY if missing
# ---------------------------------------------------------------------------
if ! grep -q "^APP_KEY=base64:" .env 2>/dev/null || [ -z "$(grep '^APP_KEY=' .env | cut -d= -f2)" ]; then
    log "Generating APP_KEY..."
    php artisan key:generate --force --no-interaction || true
fi

# ---------------------------------------------------------------------------
# 3. Run DB setup in the BACKGROUND so nginx starts immediately.
#    Key fixes vs. previous version:
#    - Wait up to 180s for MySQL (was 120)
#    - Run erp:install with up to 3 retries (was 1 attempt)
#    - ONLY create .installed flag if install SUCCEEDS (was always created)
#    - On failure, retry on next container restart
# ---------------------------------------------------------------------------
(
    # ---- 3a. Wait for database to be truly ready ----
    log "[setup] Waiting for database at ${DB_HOST}:${DB_PORT}..."
    DB_READY=false
    for i in $(seq 1 180); do
        if php -r "
            try {
                \$pdo = new PDO(
                    '${DB_CONNECTION}:host=${DB_HOST};port=${DB_PORT}',
                    '${DB_USERNAME}',
                    '${DB_PASSWORD}',
                    [PDO::ATTR_TIMEOUT => 3]
                );
                \$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                \$pdo->exec('SELECT 1');
                exit(0);
            } catch (Throwable \$e) {
                exit(1);
            }
        " 2>/dev/null; then
            log "[setup] Database is ready and accepting queries."
            DB_READY=true
            break
        fi
        if [ "$((i % 15))" -eq 0 ]; then
            log "[setup] Still waiting for database... (${i}s elapsed)"
        fi
        sleep 1
    done

    if [ "$DB_READY" = false ]; then
        log "[setup] ERROR: Database not reachable after 180s. Will retry on next restart."
        exit 1
    fi

    # ---- 3b. Ensure the database exists ----
    log "[setup] Ensuring database '${DB_DATABASE}' exists..."
    php -r "
        \$pdo = new PDO(
            '${DB_CONNECTION}:host=${DB_HOST};port=${DB_PORT}',
            '${DB_USERNAME}',
            '${DB_PASSWORD}'
        );
        \$pdo->exec(\"CREATE DATABASE IF NOT EXISTS \`${DB_DATABASE}\` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci\");
    " 2>/dev/null || true

    # ---- 3c. Clear caches before install ----
    log "[setup] Clearing caches..."
    php artisan optimize:clear --no-interaction 2>/dev/null || true

    # ---- 3d. Run erp:install (with retries) or just migrate ----
    INSTALL_FLAG="/var/www/aureuserp/storage/app/.installed"

    if [ ! -f "$INSTALL_FLAG" ]; then
        log "[setup] First boot — running erp:install with retry logic..."

        MAX_RETRIES=5
        INSTALL_SUCCESS=false

        for attempt in $(seq 1 $MAX_RETRIES); do
            log "[setup] erp:install attempt ${attempt}/${MAX_RETRIES}..."

            if APP_ENV=local php artisan erp:install \
                --force \
                --no-interaction \
                --admin-name="${ADMIN_NAME:-Administrador}" \
                --admin-email="${ADMIN_EMAIL:-admin@example.com}" \
                --admin-password="${ADMIN_PASSWORD:-password}" \
                2>&1; then

                log "[setup] erp:install SUCCEEDED on attempt ${attempt}."
                INSTALL_SUCCESS=true
                touch "$INSTALL_FLAG"
                break
            else
                log "[setup] erp:install FAILED on attempt ${attempt}/${MAX_RETRIES}."

                if [ "$attempt" -lt "$MAX_RETRIES" ]; then
                    log "[setup] Waiting 15s before retry..."
                    sleep 15

                    log "[setup] Flushing caches before retry..."
                    php artisan optimize:clear --no-interaction 2>/dev/null || true
                fi
            fi
        done

        if [ "$INSTALL_SUCCESS" = false ]; then
            log "[setup] ERROR: erp:install failed after ${MAX_RETRIES} attempts."
            log "[setup] NOT creating .installed flag — will retry full install on next restart."
            log "[setup] Check that the MySQL service is healthy and env vars are correct."
        fi
    else
        log "[setup] Already installed — running pending migrations..."
        php artisan migrate --force --no-interaction 2>&1 || log "[setup] WARNING: migrate returned non-zero."
    fi

    # ---- 3e. Cache config after setup ----
    log "[setup] Caching configuration..."
    php artisan config:cache --no-interaction 2>/dev/null || true
    php artisan event:cache --no-interaction 2>/dev/null || true
    php artisan view:cache --no-interaction 2>/dev/null || true

    log "[setup] Background setup complete."
) &

# ---------------------------------------------------------------------------
# 4. Start Supervisor (nginx + php-fpm + queue + scheduler) IMMEDIATELY
# ---------------------------------------------------------------------------
log "Starting services via Supervisor (nginx on port 8091)..."
exec "$@"
