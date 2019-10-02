#
#--------------------------------------------------------------------------
# Official Composer Image
#--------------------------------------------------------------------------
#
FROM composer:1.8 as composer

#
# Author
#
LABEL maintainer="Gilberto Junior <olamundo@gmail.com>"

#
# Copy files
#
COPY composer.json composer.json

#
# Download php deps
#
RUN composer install \
    --ignore-platform-reqs \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --prefer-dist

#
#--------------------------------------------------------------------------
# Official PHP Image
#--------------------------------------------------------------------------
#
FROM php:7.3-cli-alpine3.9

#
#--------------------------------------------------------------------------
# CUSTOMIZATION
#--------------------------------------------------------------------------
#
COPY --from=composer /app/vendor/ /usr/src/app/vendor/

WORKDIR /usr/src/app

ENV LD_PRELOAD /usr/lib/preloadable_libiconv.so php

RUN set -ex \
    && apk --no-cache add --virtual .build-deps $PHPIZE_DEPS \
    && pecl install \
        xdebug \
    && docker-php-ext-enable \
        xdebug \
    && apk del .build-deps \
    && { find /usr/local/lib -type f -print0 | xargs -0r strip --strip-all -p 2>/dev/null || true; } \
    && rm -rf /var/cache/apk/* /tmp/* /usr/share/man /usr/local/lib/php/doc/*

#
#--------------------------------------------------------------------------
# Add source
#--------------------------------------------------------------------------
#
COPY . /usr/src/app
