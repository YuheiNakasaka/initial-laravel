# Initial-Laravel is customized for my development
## Installed

- Smarty3.1

## How to install

- required php >= 5.3.7
- MCrypt PHP Extension
- git,subversion

1. curl -sS https://getcomposer.org/installer | php
2. cp composer.phar /usr/local/bin/composer
3. Move to your document root
4. git clone https://github.com/YuheiNakasaka/initial-laravel.git
5. cd initial-laravel
6. composer install
7. chmod -R 777 app/storage
8. $composer dump-autoload
9. Access http://< your setting hosts name >/

## Custom function

### _display($template_path, $key_valueset)

- smarty custom function

ex)bind some data to /app/views/test/index.tpl.html

```
class TestController extends My_Controller {
    public function __construct()
    {
        parent::construct();//load My_Controller
    }
    
    public function index()
    {
        $data['key1'] = "val1";
        $data['key2'] = "val2";
        $data['key3'] = "val3";
        return $this->_display("test/index", $data);
    }
}
```
In test/index.tpl.html

```
<html>
<body>
    <p>key1 is {$key1}</p>
    <p>key2 is {$key2}</p>
    <p>key3 is {$key3}</p>
</body>
</html>
```

# Notice

- if "SQLSTATE[HY000] [2002] No such file or directory" message occured, you should add path to  your php.ini file like:
pdo_mysql.default_socket=/tmp/mysql.sock
