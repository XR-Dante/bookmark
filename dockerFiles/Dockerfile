FROM php:8.4-fpm-alpine

RUN apt-get update && apt-get install -y \
    libpq-dev \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && docker-php-ext-install pdo pdo_pgsql


WORKDIR /var/www/html/

COPY xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini
