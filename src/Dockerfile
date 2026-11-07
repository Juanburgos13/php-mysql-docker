
FROM php:8.3-apache

# Instalar la extensión para conectar PHP con MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Copiar el código de nuestra aplicación
COPY . /var/www/html/

# Exponer el puerto 80
EXPOSE 80
