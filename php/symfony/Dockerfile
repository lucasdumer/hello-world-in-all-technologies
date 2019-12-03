FROM php:7.3-cli

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /code

ENV APP_ENV dev
ENV APP_DEBUG 0

COPY composer.json composer.json

RUN composer install

COPY . .

RUN ["php", "-S", "localhost:8000", "src/index.php"]