FROM alpine:3.11
RUN apk update && apk upgrade
RUN apk add php7 php7-fpm php7-opcache php7-gd php7-mysqli php7-zlib php7-curl php7-json
RUN mkdir /www && adduser -D -g 'www' www && chown -R www:www /www
COPY php-fpm.conf /etc/php7/php-fpm.conf
EXPOSE 9000

CMD ["php-fpm7", "-F"]
