FROM php:8.2-apache

RUN docker-php-ext-install pdo pdo_mysql sockets

WORKDIR /app
COPY . /app
RUN composer install
RUN chown -R www-data:www-data /var/www/html 
# RUN chown -R www-data:www-data boostrap/cache

