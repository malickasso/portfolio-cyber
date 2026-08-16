FROM serversideup/php:8.4-fpm-nginx

ENV AUTORUN_ENABLED=true
ENV PHP_OPCACHE_ENABLE=1

COPY --chown=www-data:www-data . /var/www/html
COPY --from=vendor --chown=www-data:www-data /app/vendor /var/www/html/vendor
COPY --from=assets --chown=www-data:www-data /app/public/build /var/www/html/public/build

RUN mkdir -p /var/www/html/bootstrap/cache \
        /var/www/html/storage/framework/cache/data \
        /var/www/html/storage/framework/sessions \
        /var/www/html/storage/framework/views \
        /var/www/html/storage/logs \
    && rm -f /var/www/html/bootstrap/cache/*.php \
    && chown -R www-data:www-data /var/www/html/bootstrap/cache /var/www/html/storage \
    && chmod -R 775 /var/www/html/bootstrap/cache /var/www/html/storage

USER www-data