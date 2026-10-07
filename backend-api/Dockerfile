FROM dunglas/frankenphp:php8.3-bookworm

RUN install-php-extensions \
    pdo_mysql \
    pdo_pgsql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd \
    opcache

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . .

RUN composer install --no-dev --optimize-autoloader --no-interaction

RUN chown -R www-data:www-data /app/storage /app/bootstrap/cache

ENV SERVER_NAME=:80

EXPOSE 80

CMD ["frankenphp", "php-server", "--listen", ":80", "--root", "/app/public"]
