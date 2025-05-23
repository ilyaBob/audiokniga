FROM php:8.3-fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && composer config --global github-oauth.github.com

WORKDIR /var/www/laravel

