FROM php:7.4-apache

# Instala extensões necessárias (como mysqli para MySQL)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Ativa o mod_rewrite do Apache
RUN a2enmod rewrite

# Copia o arquivo de configuração do VirtualHost
COPY vhost.conf /etc/apache2/sites-available/000-default.conf

# Define diretório raiz (não obrigatório aqui)
WORKDIR /var/www/html
