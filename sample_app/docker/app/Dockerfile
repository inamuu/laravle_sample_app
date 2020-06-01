FROM php:7.4-apache

ENV TZ: Asia/Tokyo
ENV LANG: ja_JP.UTF-8

RUN apt update \
    && \
    apt install -y \
    tcpdump \
    vim \
    && \
    rm -rf /var/cache/apt/*

COPY . /var/www/html/
RUN chown -R www-data: /var/www/html/

RUN rm -f /etc/apache2/sites-available/000-default.conf
RUN unlink /etc/apache2/sites-enabled/000-default.conf
COPY docker/app/laravel.conf /etc/apache2/sites-enabled/laravel.conf

CMD [ "apachectl", "-D", "FOREGROUND" ]
