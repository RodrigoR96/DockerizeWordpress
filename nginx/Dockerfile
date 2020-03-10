FROM alpine:3.11
RUN apk update && apk upgrade
RUN apk add nginx openrc
RUN mkdir /www && adduser -D -g 'www' www && chown -R www:www /var/lib/nginx && chown -R www:www /www
RUN rc-update add nginx default && mkdir -p /run/nginx
RUN sed -i 's/user nginx;/user www;/' /etc/nginx/nginx.conf
CMD ["nginx", "-g", "daemon off;"]
