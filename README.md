<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Mini Chat Template Tutorial

link youtube : [tutorial](https://youtu.be/uFrE7RzXPcc)

## ERD
![url](https://res.cloudinary.com/dk0053zbe/image/upload/v1658935067/chat-erd_lnsnvt.jpg)

## How to install
- clone this project
- install vendor laravel
```bash
composer install
```
- make env
```bash
cp .env.example .env
```
- generate key
```bash
php artisan key:generate
```
- run migrations
```bash
php artisan migrate --seed
```
- install vendor javascript
```bash
npm install
```
- build manifest
```bash
npm run build
```
## Run project
- start server
```bash
php artisan server
```
- start websocket
```bash
php artisan websockets:serve
```
- check connection websocket <br>
http://localhost:8000/laravel-websockets
## NOTE
- Learn how install laravel websockets free no paid service : 
[Tutorial Install Laravel Websockets](https://www.youtube.com/watch?v=w8rj1C0fLgw)
- Default Password user : <br>
```php
password
```
