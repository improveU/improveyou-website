<p align="center">
   <img align="center" src="./public/svg/logo.svg" height="250px">
</p>
<h1 align="center">
   IPT -Im.ProveYou
</h1>
<p align="center">
   Demian, Elija, Tim, Yannic & Xavier
</p>

## 💻Installation

Used Technologies:

* Laragon
* Laravel
* MySQL Database

### Debug it locally

Execute in Laragon-Console, step for step:

1. Install [Laragon](https://laragon.org/download/index.html)
2. Clone this repository to your machine (safe it in the laragon folder)
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

Copy .env.example to your .env file

```
cp .env.example .env
```

Generate a Key

```
php artisan key:generate
```

Migrate and seed the database

```
php artisan migrate --seed
```

> seed the db with the spesific CourseSeeder
>  ```
>  php artisan db:seed --class=CourseSeeder
>  ```

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
