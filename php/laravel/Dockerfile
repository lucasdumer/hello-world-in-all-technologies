FROM php:8.1.6-cli

EXPOSE 8000

RUN apt-get update && apt-get upgrade -y
RUN apt-get install -y git
RUN apt-get install -y zip unzip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html

ENV APP_ENV dev
ENV APP_DEBUG 0

COPY composer.json composer.json

COPY . .

RUN composer install --verbose

RUN php artisan key:generate

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
