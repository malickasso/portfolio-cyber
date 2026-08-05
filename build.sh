#!/usr/bin/env bash
# Sortir immédiatement si une commande échoue
set -o errexit

# Installation des dépendances PHP et JS
composer install --no-dev --optimize-autoloader
npm install
npm run build

# Caches Laravel
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Migrations de la base de données
php artisan migrate --force
