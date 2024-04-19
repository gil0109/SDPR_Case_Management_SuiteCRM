# Use PHP Apache image as the base
FROM php:7.4-apache

# Install required PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    zlib1g-dev \
    libicu-dev \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd pdo_mysql mysqli zip intl

# Set recommended PHP configurations for SuiteCRM
RUN { \
        echo 'memory_limit = 256M'; \
        echo 'upload_max_filesize = 100M'; \
        echo 'post_max_size = 100M'; \
        echo 'max_execution_time = 600'; \
        echo 'date.timezone = "UTC"'; \
    } > /usr/local/etc/php/conf.d/suitecrm.ini

# Set up Apache configuration for SuiteCRM
RUN a2enmod rewrite
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Set SuiteCRM installation directory
ENV SUITECRM_HOME /var/www/html

# Download and extract SuiteCRM
WORKDIR $SUITECRM_HOME
RUN curl -o suitecrm.zip -L https://suitecrm.com/files/176/SuiteCRM-8.0.0.zip \
    && unzip suitecrm.zip \
    && rm suitecrm.zip \
    && chown -R www-data:www-data $SUITECRM_HOME

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]