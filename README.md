# IPT -Im.ProveYou

## 💻Installation

Used Technologies:

* Laragon
* Laravel
* MySQL Database

Execute in Laragon-Console, step for step:

1. Start Laragon services
2. Install Composer Packages

```
composer install
```

3. Copy .env.example to your .env file

```
cp .env.example .env
```

4. Generate a Key

```
php artisan key:generate
```

6. Migrate the database

```
php artisan migrate
```

7. Seed the database

```
php artisan db:seed
```

> php artisan db:seed --class=CourseSeeder

8. Install node modules

```
npm install
```

9. Run the node package manager server

```
npm run dev
```

10. Create a link between the public and the storage folder

```
php artisan storage:link
```

11. Install intervention

```
composer require intervention/image
```



Debugg on handy:

```
php artisan serve --host=192.168.X.X
````

192.168.1.1 is mostly the router so you need to find your own ip via ipconfig