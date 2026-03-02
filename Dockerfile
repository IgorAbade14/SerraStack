FROM php:8.2-fpm

# Instala a extensão mysqli que o seu código precisa
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli