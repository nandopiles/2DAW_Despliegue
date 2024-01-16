FROM php:8.2-apache

RUN apt update
RUN apt install wget
RUN wget -O phpunit https://phar.phpunit.de/phpunit-10.phar
RUN chmod +x phpunit
RUN mv phpunit /usr/local/bin/phpunit