FROM php:8.0.3-fpm-buster

RUN docker-php-ext-install bcmath pdo_mysql

RUN apt-get update
RUN apt-get install curl php-cli php-mbstring git unzip -y
RUN curl –sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . .

CMD [ "php", "artisan" , "serve", "--host", "--host=0.0.0.0"]