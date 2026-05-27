FROM php:8.2-apache

# Installer les extensions PHP nécessaires pour se connecter à MySQL
RUN docker-php-ext-install pdo pdo_mysql mysqli
# Activer le module rewrite d'Apache pour pouvoir utiliser les URLs personnalisées dans notre application web (dans le cas d'un MVC par exemple)
RUN a2enmod rewrite

# Copier le code source de notre application web dans le dossier racine du serveur Apache à l'intérieur du conteneur
COPY . /var/www/html/
EXPOSE 80