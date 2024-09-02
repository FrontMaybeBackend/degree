FROM php:8.3

RUN apt-get update -y
RUN docker-php-ext-install pdo pdo_mysql

WORKDIR /var/www
COPY . .

COPY --from=composer:2.7.7 /usr/bin/composer /usr/bin/composer


ENV PORT=8000
ENTRYPOINT ["docker/entrypoint.sh"]
