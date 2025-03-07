FROM php:8.4.4-fpm-alpine

ARG user
ARG uid

RUN apk update && apk add --no-cache \
    curl \
    libpng-dev \
    libxml2-dev \
    zip \
    unzip \
    shadow \
    libzip-dev \
    procps \
    git

RUN docker-php-ext-install pdo pdo_mysql \
    && apk --no-cache add nodejs npm

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

#USER root

#RUN chmod 777 -R /var/www/

RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user
WORKDIR /var/www
USER $user    