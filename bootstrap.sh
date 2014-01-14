#!/usr/bin/env bash

# set timezone
ln -sf /usr/share/zoneinfo/Europe/Zurich /etc/localtime

# mysql settings
debconf-set-selections <<< 'mysql-server-5.5 mysql-server/root_password password root'
debconf-set-selections <<< 'mysql-server-5.5 mysql-server/root_password_again password root'

# phpmyadmin settings
debconf-set-selections <<< 'phpmyadmin phpmyadmin/reconfigure-webserver multiselect apache2'
debconf-set-selections <<< 'phpmyadmin phpmyadmin/dbconfig-install boolean true'
debconf-set-selections <<< 'phpmyadmin phpmyadmin/mysql/admin-pass password root'
debconf-set-selections <<< 'phpmyadmin phpmyadmin/mysql/app-pass password root'
debconf-set-selections <<< 'phpmyadmin phpmyadmin/app-password-confirm password root'

apt-get update
apt-get install -y apache2-mpm-prefork php5 mysql-server php5-curl php5-dev php5-gd php5-idn php5-imagick php5-imap php5-mysql
a2enmod suexec rewrite ssl actions include vhost_alias

# show php errors
sudo sed -i '/display_errors = Off/c display_errors = On' /etc/php5/apache2/php.ini

rm -rf /var/www
ln -fs /www /var/www
sudo cp -f /vagrant/data/default /etc/apache2/sites-available/default 
# from www.thisprogrammingthing.com/2013/getting-started-with-vagrant/
if [ ! -f /var/log/databasesetup ];
then
        echo "CREATE USER 'wordpressuser'@'localhost' IDENTIFIED BY 'wordpresspass'" | mysql -uroot -prootpass
        echo "CREATE DATABASE wordpress" | mysql -uroot -prootpass
        echo "GRANT ALL ON wordpress.* TO 'wordpressuser'@'localhost'" | mysql -uroot -prootpass
        echo "flush privileges" | mysql -uroot -prootpass

        touch /var/log/databasesetup

        if [ -f /vagrant/data/initial.sql ];
        then
                mysql -uroot -prootpass wordpress < /vagrant/data/initial.sql
        fi
fi

# phpmyadmin
sudo apt-get install -y phpmyadmin
echo 'Include /etc/phpmyadmin/apache2.conf' >> /etc/apache2/apache.conf

# restart apache
service apache2 restart
apt-get -y install mysql-client-core-5.5
mysql -u root --password=root -e "create database startrack"
mysql -u root --password=root -e "create database testdrive"
mysql -u root --password=root startrack < /vagrant/data/startrack.sql 
