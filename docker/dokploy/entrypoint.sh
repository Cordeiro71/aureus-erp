#!/bin/bash
set -e

APP_DIR="/var/www/aureuserp"
cd "$APP_DIR"

log() { echo "[aureus-dokploy] $(date '+%Y-%m-%d %H:%M:%S') $*"; }

# ---------------------------------------------------------------------------
# Defaults — Dokploy injects DB_* env vars from its managed database service.
# ---------------------------------------------------------------------------
DB_CONNECTION="${DB_CONNECTION:-mysql}"
DB_HOST="${DB_HOST:-127.0.0.1}"
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
# 1. Write the .env from environment variables
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

# Redis (optional — Dokploy can provision a Redis service)
[ -n "$REDIS_HOST" ]     && set_env REDIS_HOST     "$REDIS_HOST"
[ -n "$REDIS_PORT" ]     && set_env REDIS_PORT     "$REDIS_PORT"
[ -n "$REDIS_PASSWORD" ] && set_env REDIS_PASSWORD "$REDIS_PASSWORD"

# Mail (optional)
[ -n "$MAIL_MAILER" ]      && set_env MAIL_MAILER      "$MAIL_MAILER"
[ -n "$MAIL_HOST" ]        && set_env MAIL_HOST        "$MAIL_HOST"
[ -n "$MAIL_PORT" ]        && set_env MAIL_PORT        "$MAIL_PORT"
[ -n "$MAIL_USERNAME" ]    && set_env MAIL_USERNAME    "$MAIL_USERNAME"
[ -n "$MAIL_PASSWORD" ]    && set_env MAIL_PASSWORD    "$MAIL_PASSWORD"
[ -n "$MAIL_FROM_ADDRESS" ] && set_env MAIL_FROM_ADDRESS "\"$MAIL_FROM_ADDRESS\""

# Session/cache via Redis when available
if [ -n "$REDIS_HOST" ]; then
    set_env CACHE_STORE    "redis"
    set_env SESSION_DRIVER "redis"
    set_env QUEUE_CONNECTION "redis"
fi

# ---------------------------------------------------------------------------
# 2. Generate APP_KEY if missing
# ---------------------------------------------------------------------------
if ! grep -q "^APP_KEY=base64:" .env || [ -z "$(grep '^APP_KEY=' .env | cut -d= -f2)" ]; then
    log "Generating APP_KEY..."
    php artisan key:generate --force --no-interaction
fi

# ---------------------------------------------------------------------------
# 3. Wait for the external database (Dokploy managed)
# ---------------------------------------------------------------------------
log "Waiting for database at ${DB_HOST}:${DB_PORT}..."
for i in $(seq 1 60); do
    if php -r "try { new PDO('${DB_CONNECTION}:host=${DB_HOST};port=${DB_PORT}', '${DB_USERNAME}', '${DB_PASSWORD}'); } catch (Throwable \$e) { exit(1); }" 2>/dev/null; then
        log "Database is reachable."
        break
    fi
    if [ "$i" -eq 60 ]; then
        log "ERROR: cannot reach database at ${DB_HOST}:${DB_PORT} after 60s."
        log "Check that the Dokploy database service is running and the env vars are correct."
        exit 1
    fi
    sleep 1
done

# ---------------------------------------------------------------------------
# 4. Run installer / migrations (idempotent)
# ---------------------------------------------------------------------------
log "Refreshing cached configuration..."
php artisan optimize:clear --no-interaction 2>/dev/null || true
php artisan config:cache --no-interaction 2>/dev/null || true
php artisan event:cache --no-interaction 2>/dev/null || true
php artisan view:cache --no-interaction 2>/dev/null || true

# Create the database if it does not exist yet
log "Ensuring database '${DB_DATABASE}' exists..."
php -r "\$pdo = new PDO('${DB_CONNECTION}:host=${DB_HOST};port=${DB_PORT}', '${DB_USERNAME}', '${DB_PASSWORD}'); \$pdo->exec(\"CREATE DATABASE IF NOT EXISTS \`${DB_DATABASE}\` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci\");" 2>/dev/null || true

# Run the ERP installer on first boot (creates tables, seeders, roles, admin)
# The --force flag makes erp:install idempotent/safe to re-run.
INSTALL_FLAG="/var/www/aureuserp/storage/app/.installed"
if [ ! -f "$INSTALL_FLAG" ]; then
    log "First boot — running erp:install..."
    APP_ENV=local php artisan erp:install --force --no-interaction \
        --admin-name="${ADMIN_NAME:-Administrator}" \
        --admin-email="${ADMIN_EMAIL:-admin@example.com}" \
        --admin-password="${ADMIN_PASSWORD:-password}" \
        || log "WARNING: erp:install returned a non-zero code (tables may already exist)."
    touch "$INSTALL_FLAG"
else
    log "Already installed — running migrations only..."
    php artisan migrate --force --no-interaction || true
fi

# Re-cache config after env is finalised
php artisan config:cache --no-interaction 2>/dev/null || true

log "Starting services via Supervisor..."
exec "$@"
