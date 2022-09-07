FROM php:8.1-fpm

RUN apt-get update && \
apt-get install -y \
apt-utils \
g++

# Use the default production configuration
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Install intl extension
RUN apt-get install -y libicu-dev
RUN docker-php-ext-configure intl \
&& docker-php-ext-install intl

# Install ext-zip
RUN apt-get install -y zip unzip zlib1g-dev libzip-dev libicu-dev 
RUN docker-php-ext-install zip

# Enable opcache
RUN docker-php-ext-enable opcache

# Install pdo extension
RUN docker-php-ext-install pdo

# Install postgres driver extension
RUN apt-get install -y libpq-dev
RUN docker-php-ext-install pdo pdo_pgsql

# Install composer
RUN apt-get install -y git
RUN curl -sS https://getcomposer.org/installer \
  | php -- --install-dir=/usr/local/bin --filename=composer

# Setup workdir
WORKDIR /opt/app