#html
PHP + GULP + BROWSERSYNC

For start you must add file `config.php` into `folder admin/api/` like this:
```php
<?php
define("DB_HOST", "your_db_host");
define("DB_USER", "your_db_user");
define("DB_PASS", "your_db_pass");
define("DB_NAME", "your_db_name");
?>
```

You also must install apache, php, mysql-server, etc. For this follow the video:
[How To Install Linux, Apache, MySQL, PHP (LAMP) stack on Ubuntu 16.04 And Ubuntu 16.10](https://youtu.be/AQPoVHPboiA)
or this instructions:
`sudo su`
`apt-get install apache2`

`apache2ctl configtest`
`ifconfig`
`vim /etc/apache2/apache2.conf`
Add this line
```
ServerName YOUR_IP 
```
`apache2ctl configtest`

`apt-get install mysql-server`

`apt-get install php libapache2-mod-php php-mcrypt php-mysql`

`systemctl restart apache2`

Replace this code:
```
<IfModule mod_dir.c>
  DirectoryIndex index.html index.cgi index.pl index.php index.xhtml index.htm
</IfModule>
```
with this code:
```
<IfModule mod_dir.c>
  DirectoryIndex index.php index.html index.cgi index.pl index.xhtml index.htm
</IfModule>

```

`systemctl restart apache2`


For install node_modules type:
`npm i`

For run the project type:
`gulp`

If you have `External error 500` use this issue:
[rewriterule-creating-500-internal-server-error](https://stackoverflow.com/questions/17107940/rewriterule-creating-500-internal-server-error)
```
sudo a2enmod rewrite
sudo service apache2 restart
```


