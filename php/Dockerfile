FROM php:7.3-fpm

RUN apt-get update && \
    apt-get install -qq -y \
      curl \
      git \
      libbz2-dev \
      zip \ 
      unzip \
      libpng-dev \
      libicu-dev \
      libxml2-dev \
      libzip-dev
    
RUN docker-php-ext-install \
      bcmath \
      bz2 \
      calendar \
      exif \
      gd \
      intl \
      mysqli \
      pdo \
      pdo_mysql \
      opcache \
      soap \
      zip \
      sockets

RUN docker-php-ext-enable \
      pdo_mysql