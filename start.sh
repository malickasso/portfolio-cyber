#!/usr/bin/env bash

echo "Running composer"
composer install --no-dev --optimize-autoloader --working-dir=/var/www/html

echo "Caching config..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "Linking storage..."
php artisan storage:link

echo "Starting Nginx/PHP-FPM..."
/start.sh