FROM php:7.0-apache

RUN docker-php-ext-install pdo_mysql
RUN mkdir /var/www/html/Aedes
ADD . /var/www/html/Aedes
ADD ./Aedes.conf /etc/apache2/sites-available

RUN chgrp -R www-data /var/www/html/Aedes
RUN chmod -R 775 /var/www/html/Aedes/storage

RUN a2dissite 000-default.conf
RUN a2ensite Aedes.conf
RUN a2enmod rewrite

