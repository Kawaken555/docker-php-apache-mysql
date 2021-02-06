FROM php:8.0.2-apache
COPY php.ini /usr/local/etc/php/

RUN sed -i 's@archive.ubuntu.com@ftp.jaist.ac.jp/pub/Linux@g' /etc/apt/sources.list \
  && apt-get update \
  && apt-get install -y libzip-dev mariadb-client libonig-dev \
  && docker-php-ext-install zip pdo_mysql mysqli  \
  && apt-get autoremove -y \
  && rm -rf /var/lib/apt/lists/*

