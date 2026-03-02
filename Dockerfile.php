FROM php:8.2-fpm

# O comando mágico que instala extensões oficiais do PHP no Docker
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli