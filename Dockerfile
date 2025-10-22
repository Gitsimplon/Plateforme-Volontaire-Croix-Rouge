# Utiliser une image PHP avec Composer
FROM php:8.2-cli

# Installer les dépendances système
RUN apt-get update && apt-get install -y unzip git libpng-dev libonig-dev libxml2-dev zip curl

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copier les fichiers du projet
WORKDIR /app
COPY . .

# Installer les dépendances Laravel
RUN composer install --no-dev --optimize-autoloader

# ✅ Créer le fichier .env à partir de l’exemple
RUN cp .env.example .env

# Générer la clé d'application
RUN php artisan key:generate

# Mettre en cache la config et les routes
RUN php artisan config:cache
RUN php artisan route:cache

# Exposer le port
EXPOSE 8000

# Lancer le serveur Laravel
CMD php artisan serve --host=0.0.0.0 --port=8000
