FROM phpdockerio/php72-fpm:latest
WORKDIR "/var/www"

# Fix debconf warnings upon build
ARG DEBIAN_FRONTEND=noninteractive

# Install selected extensions and other stuff
RUN apt-get update \
    && apt-get -y --no-install-recommends install php-mongodb \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

COPY images/php-fpm/php-ini-overrides.ini /etc/php/7.2/fpm/conf.d/99-overrides.ini
COPY images/php-fpm/z-overrides.conf /etc/php/7.2/fpm/pool.d/z-overrides.conf
COPY . /var/www/

RUN composer install && rm -rf /var/www/var/cache/* && bin/console cache:warmup --env=prod \
    && chmod -R 777 /var/www/var/cache && chown -R www-data:www-data /var/www/var/cache

CMD [ "/usr/bin/php-fpm" ]
