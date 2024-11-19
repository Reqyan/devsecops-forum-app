# Use PHP with Apache as the base image
FROM php:8.3-apache as web

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    curl \
    git \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql zip

# Configure Apache DocumentRoot
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Copy application code
COPY . /var/www/html

# Set working directory
WORKDIR /var/www/html

# Add dynamic user and group setup
ARG WWWUSER
ARG WWWGROUP
RUN groupadd --gid ${WWWGROUP} sail \
    && useradd -ms /bin/bash --uid ${WWWUSER} --gid ${WWWGROUP} sail \
    && chown -R sail:sail /var/www/html/storage /var/www/html/bootstrap/cache

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Laravel dependencies
RUN composer install

# Permissions for storage and cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache
