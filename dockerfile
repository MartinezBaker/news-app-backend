FROM php:7.4-apache

RUN docker-php-ext-install pdo_mysql

COPY . /var/www/html

WORKDIR /var/www/html

EXPOSE 80