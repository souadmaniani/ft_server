FROM debian:buster

RUN apt-get update 
RUN apt-get install -y nginx
RUN apt-get install -y wget
RUN apt-get install -y unzip
RUN apt-get install -y vim
RUN apt-get install -y php7.3-fpm mariadb-server mariadb-client php7.3-mysql php7.3-json php7.3-mbstring 
COPY srcs/script.sh /var/www/html/
COPY srcs/wordpress_db.sql /var/
RUN /bin/bash /var/www/html/script.sh
COPY srcs/nginx.key /etc/nginx/ssl
COPY srcs/nginx.crt /etc/nginx/ssl
COPY srcs/default /etc/nginx/sites-enabled/ 
COPY srcs/wp-config.php /var/www/html/wordpress/
RUN mv /var/www/html/wordpress/* /var/www/html/
COPY srcs/start.sh /start.sh
ENTRYPOINT bash /start.sh
EXPOSE 80 443 3306