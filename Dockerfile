# Imagen base con PHP y Apache
FROM php:8.1-apache

# Instalación de extensiones necesarias
RUN apt-get update && apt-get install -y \
    libzip-dev unzip git curl \
    && docker-php-ext-install pdo pdo_mysql zip

# Habilitar mod_rewrite para Laravel
RUN a2enmod rewrite

# Configuración del directorio de trabajo
WORKDIR /var/www/html

# Copiar archivos del proyecto
COPY . .

# Instalar Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Instalar dependencias PHP del proyecto
RUN composer install \
    --ignore-platform-reqs \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --prefer-dist

# Instalar Node.js y dependencias JS
RUN npm install
RUN npm run build


# Exponer el puerto 80 para Apache
EXPOSE 80

# Comando por defecto para Apache
CMD ["apache2-foreground"]
