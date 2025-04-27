FROM php:8.3-fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && composer config --global github-oauth.github.com "376e7517018729f03e1d5c0af02ca725870c45ae"

WORKDIR /var/www/laravel

