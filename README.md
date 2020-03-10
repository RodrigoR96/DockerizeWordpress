Create images:
docker build -t nginx-alpine:v1 nginx/

create containers:
[mariadb]
docker run --name mariadb -d -p 3306:3306 --network crm-net --mount type=bind,source=wordpress,target=/www mariadb:v1

[php-fpm7]
docker run --name php-fpm7-alpine -d -p 9000:9000 --network crm-net --mount type=bind,source=wordpress-exercise-containers/wordpress,target=/www php-fpm7:v1

[nginx]
docker run --name nginx-alpine -d -p 8080:80 --network crm-net --mount type=bind,source=nginx/espocrm.conf,target=/etc/nginx/conf.d/default.conf --mount type=bind,source=wordpress,target=/www nginx-alpine:v1
