FROM php:7.2-apache
COPY php.ini /usr/local/etc/php/

RUN sed -i 's@archive.ubuntu.com@ftp.jaist.ac.jp/pub/Linux@g' /etc/apt/sources.list \
  && apt-get update \
  && apt-get install -y zlib1g-dev mariadb-client \
  && docker-php-ext-install zip pdo_mysql mysqli mbstring \
  && apt-get autoremove -y \
  && rm -rf /var/lib/apt/lists/*

