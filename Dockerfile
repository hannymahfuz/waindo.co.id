FROM php:7.4-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql && \
    a2enmod rewrite

COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html/uploads \
    && chmod -R 755 /var/www/html/uploads

COPY docker/apache.conf /etc/apache2/sites-available/000-default.conf
