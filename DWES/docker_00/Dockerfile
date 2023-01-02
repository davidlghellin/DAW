FROM php:7.4.9-apache 

RUN docker-php-ext-install mysqli 
RUN docker-php-ext-install pdo pdo_mysql && docker-php-ext-enable pdo_mysql

COPY ./web /var/www/html/

EXPOSE 80
