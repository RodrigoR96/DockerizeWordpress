Execute commands from root folder.

Create images:
- docker build -t [container-name]:[tag] [folder-with-Dockerfile]/

create containers:
- [mariadb]
  - docker run --name [container-name] -d -p 3306:3306 --network [network-name] --mount type=bind,source=$(pwd)/wordpress,target=/www [mariadb-image]:[tag]

- [php-fpm7]
  - docker run --name [container-name] -d -p 9000:9000 --network crm-net --mount type=bind,source=$(pwd)/wordpress-exercise containers/wordpress,target=/www [php-fpm-image]:[tag]
  
- [nginx]
  - docker run --name [container-name] -d -p 8080:80 --network crm-net --mount type=bind,source=$(pwd)/nginx/espocrm.conf,target=/etc/nginx/conf.d/default.conf --mount type=bind,source=$(pwd)/wordpress,target=/www [nginx-image]:[tag]

For Wordpress database connection use same variables from "mariadb/Dockerfile".

Create "wp-config.php" after wordpress installation requires it and add the following lines replacing "example.com" with correct server:
- define( 'WP_HOME', 'http://example.com' );
- define( 'WP_SITEURL', 'http://example.com' );
