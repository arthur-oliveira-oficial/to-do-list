FROM php:8.2-fpm

# Instalar dependências
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    libpq-dev \
    libicu-dev

# Instalar extensões PHP
RUN docker-php-ext-install pdo pdo_mysql intl

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Permitir Composer rodar como root
ENV COMPOSER_ALLOW_SUPERUSER=1

# Copiar composer.json e composer.lock primeiro
COPY composer.json composer.lock ./

# Instalar dependências
RUN composer install --prefer-dist --no-scripts --no-progress --no-interaction

# Copiar resto da aplicação
COPY . .

# Configurar permissões
RUN chown -R www-data:www-data var/
RUN chmod -R 777 var/

# Executar scripts do Symfony
RUN composer run-script post-install-cmd --no-interaction

EXPOSE 9000