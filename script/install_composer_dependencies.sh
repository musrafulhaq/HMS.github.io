#!/bin/bash
cd /var/www/html
yum install wget -y
wget https://getcomposer.org/composer.phar
curl -Ss https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
chmod +x /usr/local/bin/composer
