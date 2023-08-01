FROM ubuntu:22.04

COPY --from=composer:2.5.8 /usr/bin/composer /usr/local/bin/composer

ENV COMPOSER_HOME=/composer
ENV COMPOSER_CACHE_DIR=/app/var/composer
ENV PHPSTAN_BIN_PATH=/usr/local/bin/phpstan

COPY docker/ci/composer.json ${COMPOSER_HOME}/composer.json

RUN \
    apt-get update \
    # To add add-apt-repository
    && apt-get install -y software-properties-common \
    && LC_ALL=C.UTF-8 add-apt-repository ppa:ondrej/php \
    && apt-get install -y \
        bash \
        shellcheck \
        php8.1-cli \
        php8.1-simplexml \
        php8.2-cli \
        php8.2-simplexml \
        # For Composer
        curl zip php8.1-curl php8.1-zip \
        # For unused-scanner and phpunit
        php8.1-mbstring php8.2-mbstring \
        # For coverage
        php8.1-xdebug \
    && update-alternatives --set php /usr/bin/php8.1 \

    # Install CI tools
    && cd ${COMPOSER_HOME} \
    && composer up \
    && ln -s ${COMPOSER_HOME}/vendor/bin/composer-require-checker /usr/local/bin/composer-require-checker \
    && ln -s ${COMPOSER_HOME}/vendor/bin/phpdd /usr/local/bin/phpdd \
    && ln -s ${COMPOSER_HOME}/vendor/bin/phpcs /usr/local/bin/phpcs \
    && ln -s ${COMPOSER_HOME}/vendor/bin/phpstan /usr/local/bin/phpstan \
    && ln -s ${COMPOSER_HOME}/vendor/bin/unused_scanner /usr/local/bin/unused-scanner \

    # Purge
    && apt-get purge -y software-properties-common \
    && apt-get autoremove -y \
    && apt-get clean \
    && apt-get autoclean \
    && rm -rf /tmp/* \
    && rm -rf ${COMPOSER_CACHE_DIR}

WORKDIR /app
