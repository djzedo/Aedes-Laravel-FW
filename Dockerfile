FROM php:7.0-apache

RUN apt-get update 
RUN apt-get install -y git
RUN docker-php-ext-install pdo_mysql
WORKDIR /var/www/html
RUN git clone https://github.com/djzedo/Aedes-Laravel-FW.git ./Aedes
RUN cp Aedes/Aedes.conf /etc/apache2/sites-available

RUN chgrp -R www-data /var/www/html/Aedes
RUN chmod -R 775 /var/www/html/Aedes/storage
RUN chmod -R 775 /var/www/html/Aedes/bootstrap

RUN a2dissite 000-default.conf
RUN a2ensite Aedes.conf
RUN a2enmod rewrite

