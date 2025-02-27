FROM bitnami/laravel:11

WORKDIR /app

COPY . .

RUN composer install --no-interaction --prefer-dist
RUN chmod -R 777 storage bootstrap/cache

EXPOSE 8080

CMD ["php", "artisan", "serve"]