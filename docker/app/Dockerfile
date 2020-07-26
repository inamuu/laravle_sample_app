FROM php:7.4-apache

ENV TZ: Asia/Tokyo
ENV LANG: ja_JP.UTF-8

RUN apt update \
    && \
    apt install -y \
    default-mysql-client \
    git \
    npm \
    tcpdump \
    vim \
    && \
    rm -rf /var/cache/apt/*

COPY . /var/www/html/
RUN chown -R www-data: /var/www/html/

RUN rm -f /etc/apache2/sites-available/000-default.conf
RUN unlink /etc/apache2/sites-enabled/000-default.conf
COPY docker/app/laravel.conf /etc/apache2/sites-enabled/laravel.conf

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php && \
    php -r "unlink('composer-setup.php');" && \
    mv composer.phar /usr/local/bin/composer && \
    chmod +x /usr/local/bin/composer

RUN docker-php-ext-install pdo_mysql
RUN a2enmod rewrite

CMD [ "apachectl", "-D", "FOREGROUND" ]
