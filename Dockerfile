FROM richarvey/nginx-php-fpm:1.10.3

ENV WEBROOT /var/www/html/src
ENV HIDE_NGINX_HEADERS 1

RUN pecl channel-update pecl.php.net

COPY ./config/nginx/ /var/www/html/conf/nginx/
COPY ./config/supervisord/laravel-worker.conf /etc/supervisor/conf.d/laravel-worker.conf
COPY . /var/www/html/src
