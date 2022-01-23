// Instalar dependencias de composer.
composer install

// es necesario solicitar via correo el archivo .env

// Levantar el proyecto en artisan
php artisan serve


// Migrar tablas  a la bd.
php artisan migrate


// Si hay error hay que hacer migrate
composer update

 php artisan key:generate

php artisan migrate

php artisan serve