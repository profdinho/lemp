FROM php:fpm-alpine

LABEL maintainer="Dinho Zanardi <prof.dinho.ti@gmail.com>"

RUN apk add --no-cache openssl bash postgresql-dev

RUN docker-php-ext-install pgsql mysqli pdo pdo_pgsql pdo_mysql

CMD ["php-fpm"]

EXPOSE 9000
