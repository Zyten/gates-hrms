### Dev Guide for Linux

**Step 1. App-specific Installation**

1. ```cd /var/www```
2. ```git clone git@github.com:Zyten/gates-hrms.git```
1. ```cd gates-hrms```
2. Rename **.env.example** to **.env** and fill in your database credentials <sup>[Step 5]</sup>
3. ```**composer install**```
4. ```**php artisan key:generate**```
5. ~~Run ```**php artisan migrate --seed**```~~ Import **gates-hrms.sql** <sup>[Step 5]</sup>

**Step 2. Apache2 Virtual Hosts Configuration**

1. ```cd /etc/apache2/sites-available```
2. ```nano gates.conf```
3. Paste the following:

```xml
<Directory /var/www/gates-hrms>
    Options Indexes FollowSymLinks
    AllowOverride All
    Require all granted
</Directory>

<VirtualHost *:80>
    DocumentRoot /var/www/gates-hrms
    ServerName hrms.gates.localhost
	  ServerAlias hrms.gates.localhost
	  ErrorLog ${APACHE_LOG_DIR}/gates-hrms-error.log
	  CustomLog ${APACHE_LOG_DIR}/gates-hrms-access.log combined
</VirtualHost>
<VirtualHost *:80>
    DocumentRoot /var/www/gates-hrms
    ServerName gates.localhost
	  ServerAlias gates.localhost
	  ErrorLog ${APACHE_LOG_DIR}/gates-hrms-error.log
	  CustomLog ${APACHE_LOG_DIR}/gates-hrms-access.log combined
</VirtualHost>
```
4. Save and exit
5. ``a2ensite performa.conf``

**Step 3. Prep serve folder for Apache**

```bash
sudo a2enmod rewrite
sudo chown -R zyten:www-data /var/www/gates-hrms
sudo find /var/www/gates-hrms -type f -exec chmod 664 {} \;
sudo find /var/www/gates-hrms -type d -exec chmod 775 {} \;
sudo chgrp -R www-data /var/www/gates-hrms/storage bootstrap/cache
sudo chmod -R ug+rwx /var/www/gates-hrms/storage bootstrap/cache
sudo chmod 755 -R /var/www/gates-hrms/vendor/cossou/jasperphp/src/JasperStarter
sudo service apache2 restart
```
**Step 4. Prep dev folder for me**

Simply pointing vhost to dev folder in home dir (or shared mount dir in my case) is not practical:

- All parent directories up to the dev dir needs to allow access to www-data, for it to exec JasperStarter

Working on the serve folder directly is not too practical for me:
- I don't always use Apache for my PHP projects (I use [Hotel](https://github.com/typicode/hotel) with ``php -S``)
- Thus, most of my projects reside in my dev folder and I want to keep it that way

Therefore, I just point Apache to /var/www/gates-hrms then create a symlink to dev folder: 

``sudo ln -s /var/www/gates-hrms /media/storage/home/dev/personal/.``

The folder is inaccessible when I boot Windows though. (ಥ﹏ಥ)

**Step 5 Prep database**

[Mysql 5.7]

  `` sudo mysql``

  ```sql
  -- Create database user
  CREATE USER 'gates-hrms'@'localhost' IDENTIFIED BY 'Hunter2!';

  -- Import database dump
  CREATE DATABASE `gates-hrms`; --Backtick since db name has a dash
  use gates-hrms
  source gates-hrms-20181212.sql;

  -- Grant privileges
  GRANT ALL ON `gates-hrms`.* TO 'gates-hrms'@'localhost';
  FLUSH PRIVILEGES;
  ```
  <small>Alternatively, import using bash ``mysql gates-hrms < gates-hrms-20181212.sql``</small>

**Step 6 Prep for Jasper**

This particular project's report does not use [Jasper Font Extensions](https://stackoverflow.com/a/35549391) but the report was designed on Windows and thus:

``sudo apt install msttcorefonts``

- <small>Jasper plugin does no work on Java11 (openjdk version "11.0.3" 2019-04-16).</small>
- <small>Use ``sudo update-alternatives --config java`` to switch to Java8 / install Java8</small>
- <small>Tested on openjdk version "1.8.0_212"</small>

