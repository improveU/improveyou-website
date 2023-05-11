<p align="center">
   <img align="center" src="./public/svg/logo.svg" height="250px">
</p>
<h1 align="center">
   IPT -Im.ProveYou
</h1>
<p align="center">
   Demian, Elija, Tim, Yannic & Xavier
</p>

## Status

[![Laravel](https://github.com/improveU/improveyou-website/actions/workflows/laravel.yml/badge.svg?branch=main)](https://github.com/improveU/improveyou-website/actions/workflows/laravel.yml)

## 💻Installation

Used Technologies:

* Laragon
* Laravel
* MySQL Database on Laragon

### Debug it locally

Execute in Laragon-Console, step for step:

1. Install [Laragon](https://laragon.org/download/index.html)
2. Clone this repository to your machine (save it in the laragon folder)
3. Start Laragon services
4. Open the integrated Laragon-Terminal (Cmder)
5. Navigate to the repository
6. Run the following commands to get it to work

Install all used composer packages

```
composer install
```

Install node modules

```
npm install
```

Enter your own database and mail-credentials

Database:

````
DB_CONNECTION= mysql
DB_HOST= 127.0.0.1
DB_PORT= 3306
DB_DATABASE= YourDB
DB_USERNAME= YourUsername
DB_PASSWORD= YourPW
````

Mail-Service:

````
MAIL_MAILER= smtp
MAIL_HOST= YourMailHost
MAIL_PORT= YourMailPort
MAIL_USERNAME= YourMailUsername
MAIL_PASSWORD= YourMailPW
MAIL_ENCRYPTION= null
MAIL_FROM_ADDRESS= "YourMailAdress"
MAIL_FROM_NAME= "${APP_NAME}"
````

Generate a Key

```
php artisan key:generate
```

Migrate and seed the database

```
php artisan migrate --seed
```

> seed the db with the spesific CourseSeeder
>
> ```
> php artisan db:seed --class=CourseSeeder
> ```

Create a link between the public and the storage folder

```
php artisan storage:link
```

### Debug on phone:

First make sure your Phone and Computer are on the same network

Find the local IP-Address of the Computer

Start hosting the server using your IP

```
php artisan serve --host=192.168.X.X
````

Open the address shown on the terminal on your phone
