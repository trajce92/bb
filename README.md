# bb
Buildermind Buddies

## Installing

* Step 1. Go in you www directory.

* Step 2. Open cmd in current directory and run the following command
```
git clone https://github.com/trajce92/bb
```
* Step 3. Move in bb directory in cmd and run the following command
```
composer install
```
* Step 4. Rename .env.example to .env and set up the following lines
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=builderbuddies
DB_USERNAME=root
DB_PASSWORD=[whatever your password is]
```
* Step 5. Create a mysql database in phpmyadmin (or whatever used) named 'builderbuddies'

* Step 6. Run the migrations
```
php artisan migrate
```

* Step 6. Enter http://localhost/bb/public/ in browser and enjoy

### Prerequisites

```
PHP >= 7.1.3
OpenSSL PHP Extension
PDO PHP Extension
Mbstring PHP Extension
Tokenizer PHP Extension
XML PHP Extension
Ctype PHP Extension
JSON PHP Extension
```

## Built With

* [Laravel](http://www.laravel.com/) - The web framework used
* [Composer](http://www.composer.com/) - Dependency Manager for PHP

## Authors

See list of [contributors](https://github.com/trajce92/bb/contributors) who participated in this project.

## License

None yet

## Acknowledgments

* None yet
