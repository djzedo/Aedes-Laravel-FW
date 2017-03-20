FROM php:5-apache

RUN apt-get update 
RUN apt-get install -y git unzip wget
RUN docker-php-ext-install pdo_mysql mysqli mysql pdo
RUN wget https://dl-ssl.google.com/dl/linux/direct/mod-pagespeed-stable_current_amd64.deb
RUN dpkg -i mod-pagespeed-*.deb
RUN apt-get -f install
WORKDIR /var/www/html
RUN git clone https://github.com/djzedo/Aedes-Laravel-FW.git ./Aedes
RUN cp Aedes/Aedes.conf /etc/apache2/sites-available
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php --quiet --install-dir=/bin/ --filename=composer
RUN rm composer-setup.php

RUN chgrp -R www-data /var/www/html/Aedes
RUN chmod -R 775 /var/www/html/Aedes/storage
RUN chmod -R 775 /var/www/html/Aedes/bootstrap
RUN cd Aedes && composer update --no-scripts

RUN a2dissite 000-default.conf
RUN a2ensite Aedes.conf
RUN a2enmod rewrite

