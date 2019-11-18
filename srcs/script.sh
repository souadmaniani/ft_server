wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.zip
unzip phpMyAdmin-4.9.0.1-all-languages.zip
mv phpMyAdmin-4.9.0.1-all-languages  /var/www/html/phpmyadmin
rm phpMyAdmin-4.9.0.1-all-languages.zip
mkdir /var/www/html/phpmyadmin/tmp
chmod 777 /var/www/html/phpmyadmin/tmp

service mysql restart

mysql -u root -e "CREATE DATABASE wordpress_db;"
mysql -u root -e "CREATE USER 'souad'@'localhost' IDENTIFIED BY 'souad';"
mysql -u root -e "GRANT ALL PRIVILEGES ON *.* TO 'souad'@'localhost';"
mysql -u root -e "FLUSH PRIVILEGES;"

service nginx restart

wget https://wordpress.org/latest.zip
unzip latest.zip
mv wordpress /var/www/html/wordpress
rm latest.zip

mysql -u souad -p'souad' wordpress_db < /var/wordpress_db.sql

mkdir /etc/nginx/ssl