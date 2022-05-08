<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<h2>Required Programs</h2>

<ul>
  <li>PHP 8.0</li>
  <li>Laravel 8</li>
  <li>MySql</li>
  <li>Composer</li>
</ul> 

<h2 align="center">Follow these steps in order to install the project</h2>

1. Firstly Clone the project and install all needed files
```
git clone https://github.com/HHvis/NFQ.git
composer install
```
2. Create MySql databse named 'laravel' or just copy this into terminal. I kept .env file public in case anyone want to change database:
```
php artisan db
create database laravel;
```
3. Initial migrations and seeders for testing purposes
```
php artisan migrate --seed
```
4. Run the project
```
php artisan serve
```
![Project](public/images/end.png?raw=true "Title")
