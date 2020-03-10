FROM alpine:3.11
RUN apk update && apk upgrade
RUN apk add nginx openrc
#Adding "www" user
RUN mkdir /www && adduser -D -g 'www' www && chown -R www:www /var/lib/nginx && chown -R www:www /www
##
#RUN rc-update add nginx default && mkdir -p /run/nginx && rm /etc/nginx/nginx.conf
RUN rc-update add nginx default && mkdir -p /run/nginx
RUN sed -i 's/user nginx;/user www;/' /etc/nginx/nginx.conf
#ADD nginx.conf /etc/nginx/
#ADD index.html /www
#VOLUME ["/home/cloud_user/wordpress-exercise-containers/wordpress/espocrm/install"]
CMD ["nginx", "-g", "daemon off;"]
