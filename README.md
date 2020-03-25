<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## ABOUT XMEN EVIDENCE
### Setup Steps
Fetch dependencies
```
composer install
npm install
```

Database setup
```
cp .env.example .env
```
* Fill up below information within the `.env` file
    -   DB_DATABASE
    -   DB_USERNAME
    -   DB_PASSWORD (if any)
    -   APP_KEY (Run below code to generate the key)
```
php artisan key:generate
```

Run migration to generate the table within your database & run seed to seed an admin user
```
php artisan migrate
php artisan db:seed
composer dump
```
Admin Login Details
```
Username: wolverine@marvel.com
Password: xmenisthebest
```
### PREVIEW
<a href="https://github.com/vincent659/xmenevidence"><img src="https://i.ibb.co/MMFz5wk/screencapture-127-0-0-1-8000-2020-03-25-11-25-10.png" alt="x-men"></a>

<a href="https://github.com/vincent659/xmenevidence"><img src="https://i.ibb.co/Swm0LH3/screencapture-127-0-0-1-8000-admin-2020-03-25-11-27-16.png" alt="x-men"></a>

<a href="https://github.com/vincent659/xmenevidence"><img src="https://i.ibb.co/CbHH7Cx/screencapture-127-0-0-1-8000-login-2020-03-25-11-26-47.png" alt="x-men"></a>

<a href="https://github.com/vincent659/xmenevidence"><img src="https://i.ibb.co/prYHxrL/screencapture-127-0-0-1-8000-submission-2020-03-25-11-26-39.png" alt="x-men"></a>

