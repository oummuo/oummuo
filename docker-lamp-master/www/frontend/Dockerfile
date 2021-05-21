FROM php:7.2.5-apache
RUN docker-php-ext-install mysqli
COPY ./config.php /var/www/html/config.php
COPY . /var/www/html
