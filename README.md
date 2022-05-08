<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<h2>Required Programs</h2>

<ul>
  <li>PHP 8.0</li>
  <li>Laravel 8</li>
  <li>MySql</li>
  <li>Composer</li>
</ul> 

<h2 align="center">Follow these steps in order to install the project</h2>

1. Git Clone
```
git clone https://github.com/HHvis/NFQ.git
```
2. In terminal, go to the project folder - cd NFQ, and type
```
composer install
```
3. Create MySql databse named 'nfq' or just copy this into terminal
```
php artisan db
create database nfq
```
4. Initial migrations and seeders for testing purposes
```
php artisan migrate --seed
```
6. Run the project
```
php artisan serve
```
