FROM php:8.3.0-apache

COPY --from=composer:2.6.6 /usr/bin/composer /usr/local/bin/composer

RUN apt update -y &&\
    apt-get install -y curl &&\
    curl -1sLf 'https://dl.cloudsmith.io/public/symfony/stable/setup.deb.sh' |  bash &&\
    apt-get install symfony-cli -y

COPY ./src /var/www/html

