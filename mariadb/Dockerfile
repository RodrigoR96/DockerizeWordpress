FROM alpine:3.11
ENV MYSQL_DATABASE=wordpress
ENV MYSQL_USER=wordpressuser
ENV MYSQL_PASSWORD=wordpresspass
ENV MYSQL_ROOT_PASSWORD=hguyFtgfR4r9R4r76
RUN apk update && apk upgrade
RUN apk add mariadb mariadb-client mariadb-server-utils openrc
ADD run.sh /scripts/run.sh
COPY wp-config.php /code/wp-config.php 
RUN mkdir /docker-entrypoint-initdb.d && \
    mkdir /scripts/pre-exec.d && \
    mkdir /scripts/pre-init.d && \
    chmod -R 755 /scripts
EXPOSE 3306
ENTRYPOINT ["/scripts/run.sh"]
