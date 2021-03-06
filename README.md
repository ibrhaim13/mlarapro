<p align="center">
laravel admin panel base mongodb
Requirements
------------
- PHP >= 7.0.0
- Laravel >= 5.5.0
- Fileinfo PHP Extension
- jenssegers/mongodb >= 3

Installation
------------

First, install laravel 5.5 and up, and make sure that the database connection settings are correct.

```
composer require ibrhaim13/mlarapro
```

Then run these commands to publish assets and config：

```
php artisan vendor:publish --provider="Ibrahim13\Admin\AdminServiceProvider"
```
After run command you can find config file in `config/admin.php`, in this file you can change the installation directory,db connection or table names.

At last run following command to finish install.
```
php artisan admin:install
```

Open `http://localhost/admin/` in browser,use username `admin` and password `admin` to login.

Configurations
------------
The file `config/admin.php` contains an array of configurations, you can find the default configurations in there.

License
------------
`ibrhaim13/larapro` is licensed under [The MIT License (MIT)](LICENSE).

