########################################################################
# AureusERP — Dokploy-ready production image
#
# Builds from the LOCAL repository source (so your custom translations,
# plugins and modifications are included). Designed to run behind
# Dokploy's Traefik reverse proxy with a Dokploy-managed MySQL database.
#
# Dokploy auto-detects this Dockerfile at the repository root.
# Port: 80 (HTTP) — Dokploy terminates TLS at Traefik.
########################################################################

FROM ubuntu:24.04

ARG PHP_VERSION=8.4
ARG NODE_VERSION=22

ENV DEBIAN_FRONTEND=noninteractive
ENV TZ=UTC

# ---------------------------------------------------------------------------
# System packages: PHP 8.4 + extensions, Nginx, Supervisor, Node
# ---------------------------------------------------------------------------
RUN apt-get update && apt-get install -y \
        apt-transport-https \
        ca-certificates \
        curl \
        git \
        gnupg \
        software-properties-common \
        unzip \
    && add-apt-repository ppa:ondrej/php -y \
    && apt-get update && apt-get install -y \
        imagemagick \
        libmagickwand-dev \
        nginx \
        supervisor \
    && rm -rf /var/lib/apt/lists/*

RUN apt-get update && apt-get install -y \
        php${PHP_VERSION}-bcmath \
        php${PHP_VERSION}-cli \
        php${PHP_VERSION}-curl \
        php${PHP_VERSION}-dev \
        php${PHP_VERSION}-exif \
        php${PHP_VERSION}-fpm \
        php${PHP_VERSION}-gd \
        php${PHP_VERSION}-gmp \
        php${PHP_VERSION}-intl \
        php${PHP_VERSION}-mbstring \
        php${PHP_VERSION}-mysql \
        php${PHP_VERSION}-redis \
        php${PHP_VERSION}-soap \
        php${PHP_VERSION}-xml \
        php${PHP_VERSION}-zip \
        php-pear \
    && rm -rf /var/lib/apt/lists/*

RUN pecl channel-update pecl.php.net \
    && mkdir -p /tmp/imagick-build && cd /tmp/imagick-build \
    && pecl download imagick \
    && tar xzf imagick-*.tgz \
    && cd imagick-*/ \
    && phpize${PHP_VERSION} \
    && ./configure --with-php-config=/usr/bin/php-config${PHP_VERSION} \
    && make -j"$(nproc)" \
    && make install \
    && echo "extension=imagick.so" > /etc/php/${PHP_VERSION}/mods-available/imagick.ini \
    && phpenmod -v ${PHP_VERSION} imagick \
    && rm -rf /tmp/imagick-build

RUN curl -fsSL https://deb.nodesource.com/setup_${NODE_VERSION}.x | bash - \
    && apt-get install -y nodejs \
    && rm -rf /var/lib/apt/lists/*

RUN apt-get purge -y php${PHP_VERSION}-dev php-pear \
    && apt-get autoremove -y \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer

# ---------------------------------------------------------------------------
# Application source (LOCAL — includes your translations & customisations)
# ---------------------------------------------------------------------------
WORKDIR /var/www/aureuserp

COPY . .

RUN composer install \
        --no-dev \
        --no-interaction \
        --prefer-dist \
        --optimize-autoloader \
        --no-scripts \
    && rm -rf /root/.composer/cache

# ---------------------------------------------------------------------------
# Environment + front-end build
# ---------------------------------------------------------------------------
RUN cp .env.example .env \
    && sed -i 's/^APP_DEBUG=.*/APP_DEBUG=false/' .env \
    && sed -i 's/^DB_CONNECTION=.*/DB_CONNECTION=mysql/' .env \
    && sed -i 's/^CACHE_STORE=.*/CACHE_STORE=file/' .env \
    && sed -i 's/^SESSION_DRIVER=.*/SESSION_DRIVER=database/' .env \
    && sed -i 's/^QUEUE_CONNECTION=.*/QUEUE_CONNECTION=database/' .env \
    && sed -i 's|^APP_URL=.*|APP_URL=http://localhost|' .env

RUN npm ci --no-audit --no-fund \
    && npm run build \
    && rm -rf node_modules /root/.npm \
    && php artisan package:discover --ansi \
    && php artisan filament:assets \
    && php artisan vendor:publish --tag=laravel-assets --force --ansi

# ---------------------------------------------------------------------------
# PHP / Nginx / Supervisor config (reused from docker/production)
# ---------------------------------------------------------------------------
COPY docker/production/php.ini /etc/php/${PHP_VERSION}/fpm/conf.d/99-aureus.ini
COPY docker/production/php.ini /etc/php/${PHP_VERSION}/cli/conf.d/99-aureus.ini
COPY docker/production/php-fpm.conf /etc/php/${PHP_VERSION}/fpm/pool.d/www.conf

RUN rm -f /etc/nginx/sites-enabled/default /etc/nginx/conf.d/default.conf
COPY docker/production/nginx.conf /etc/nginx/conf.d/aureus.conf

COPY docker/dokploy/supervisord.conf /etc/supervisor/conf.d/aureus.conf

RUN mkdir -p /run/php /var/log/supervisor /var/log/aureus

RUN chown -R www-data:www-data /var/www/aureuserp /var/log/aureus \
    && chmod -R 775 storage bootstrap/cache \
    && find storage bootstrap/cache -type d -exec chmod g+s {} +

# ---------------------------------------------------------------------------
# Entrypoint — waits for DB, runs migrations, hands off to Supervisor
# ---------------------------------------------------------------------------
COPY docker/dokploy/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

EXPOSE 80

HEALTHCHECK --interval=30s --timeout=5s --start-period=90s --retries=3 \
    CMD curl -fsS http://127.0.0.1/health || exit 1

ENTRYPOINT ["bash", "/usr/local/bin/entrypoint.sh"]
CMD ["/usr/bin/supervisord", "-n", "-c", "/etc/supervisor/supervisord.conf"]
