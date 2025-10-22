# Étape 1 : Construction de l'application
FROM php:8.2-cli as build

# Installer les extensions PHP nécessaires
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    libzip-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Installer Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copier le code source
WORKDIR /app
COPY . .

# Installer les dépendances Laravel
RUN composer install --no-dev --optimize-autoloader
RUN php artisan key:generate
RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan view:cache

# Étape 2 : Conteneur final
FROM php:8.2-cli

WORKDIR /app
COPY --from=build /app /app

EXPOSE 10000
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=10000"]
