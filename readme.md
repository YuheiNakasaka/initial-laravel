# Initial-Laravel is customized for my development
## Installed

- Smarty3.1

## How to use

- required php >= 5.3.7
- MCrypt PHP Extension

1. curl -sS https://getcomposer.org/installer | php
2. cp composer.phar /usr/local/bin/composer
3. Move to your document root
4. git clone https://github.com/YuheiNakasaka/initial-laravel.git
5. cd initial-laravel
6. composer install
7. chmod -R 777 app/storage
8. Access http://< your setting hosts name >/

- Notes
*if "SQLSTATE[HY000] [2002] No such file or directory" message occured, you should add path to  your php.ini file like:
pdo_mysql.default_socket=/tmp/mysql.sock
