#!/usr/bin/env bash

composer install --no-interaction --no-progress



php artisan migrate:fresh
#Get data from external api
php artisan fetch-exercises
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan serve --port=$PORT --host=0.0.0.0


#exec docker-php-entrypoint '$@'
