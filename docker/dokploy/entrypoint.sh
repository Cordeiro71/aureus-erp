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
# 3. Run DB migrations in the BACKGROUND so nginx starts immediately
# ---------------------------------------------------------------------------
(
    log "[background] Waiting for database at ${DB_HOST}:${DB_PORT}..."
    for i in $(seq 1 120); do
        if php -r "try { new PDO('${DB_CONNECTION}:host=${DB_HOST};port=${DB_PORT}', '${DB_USERNAME}', '${DB_PASSWORD}'); } catch (Throwable \$e) { exit(1); }" 2>/dev/null; then
            log "[background] Database is reachable."
            break
        fi
        if [ "$i" -eq 120 ]; then
            log "[background] WARNING: cannot reach database after 120s — app will retry on next restart."
            exit 0
        fi
        sleep 1
    done

    log "[background] Ensuring database '${DB_DATABASE}' exists..."
    php -r "\$pdo = new PDO('${DB_CONNECTION}:host=${DB_HOST};port=${DB_PORT}', '${DB_USERNAME}', '${DB_PASSWORD}'); \$pdo->exec(\"CREATE DATABASE IF NOT EXISTS \`${DB_DATABASE}\` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci\");" 2>/dev/null || true

    log "[background] Clearing cache..."
    php artisan optimize:clear --no-interaction 2>/dev/null || true

    INSTALL_FLAG="/var/www/aureuserp/storage/app/.installed"
    if [ ! -f "$INSTALL_FLAG" ]; then
        log "[background] First boot — running erp:install..."
        APP_ENV=local php artisan erp:install --force --no-interaction \
            --admin-name="${ADMIN_NAME:-Administrator}" \
            --admin-email="${ADMIN_EMAIL:-admin@example.com}" \
            --admin-password="${ADMIN_PASSWORD:-password}" \
            2>&1 || log "[background] WARNING: erp:install failed — check DB connection."
        touch "$INSTALL_FLAG"
    else
        log "[background] Running migrations..."
        php artisan migrate --force --no-interaction 2>&1 || true
    fi

    log "[background] Caching config..."
    php artisan config:cache --no-interaction 2>/dev/null || true
    php artisan event:cache --no-interaction 2>/dev/null || true
    php artisan view:cache --no-interaction 2>/dev/null || true

    log "[background] Database setup complete."
) &

# ---------------------------------------------------------------------------
# 4. Start Supervisor (nginx + php-fpm + queue + scheduler) IMMEDIATELY
#    The web server is up right away; migrations continue in the background.
# ---------------------------------------------------------------------------
log "Starting services via Supervisor (nginx on port 8091)..."
exec "$@"
