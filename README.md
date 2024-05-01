## ILLUMINATE/DATABASE + PHINX EXAMPLE

### Installation
Create a database and fill connection options in `bootstrap.php`
```php
$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => '', // <-- Change me!
    'username' => '', // <-- Change me!
    'password' => '', // <-- Change me!
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);
```
Install dependencies
```sh
composer intall
```
Run migrations
```sh
php vendor/bin/phinx migrate
```
### Utilization
Start local php server
```sh
php -S localhost:8000
```
Navigate to `localhost:8000` and view the result.<br>
Have fun editing `index.php` and enjoy Eloquent.