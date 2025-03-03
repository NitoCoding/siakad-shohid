FROM php:7.1-apache

RUN docker-php-ext-install pdo_mysql mysqli

# RUN cp /apache/httpd.conf /etc/apache2/httpd.conf

COPY apache.conf /etc/apache2/httpd.conf

COPY . /var/www/html/

EXPOSE 80

CMD ["apache2-foreground"]
