FROM php:8.1-apache

EXPOSE 80
EXPOSE 7077


COPY . /var/www/html


RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli
RUN chown -R www-data:www-data /var/www/html
RUN chmod o-wx /var/www/html

