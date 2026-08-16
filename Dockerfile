# --- Étape 1 : installer les dépendances PHP ---
FROM composer:2 AS vendor
WORKDIR /app
COPY composer.json composer.lock ./
RUN composer install --no-dev --no-scripts --no-interaction --prefer-dist --optimize-autoloader

# --- Étape 2 : builder les assets front (Tailwind/Vite) ---
FROM node:20-alpine AS assets
WORKDIR /app
COPY package.json package-lock.json ./
RUN npm ci
COPY . .
RUN npm run build

# --- Étape 3 : image finale ---
FROM serversideup/php:8.4-fpm-nginx

ENV AUTORUN_ENABLED=true
ENV PHP_OPCACHE_ENABLE=1

COPY --chown=www-data:www-data . /var/www/html
COPY --from=vendor --chown=www-data:www-data /app/vendor /var/www/html/vendor
COPY --from=assets --chown=www-data:www-data /app/public/build /var/www/html/public/build

USER www-data