# Ecommerce_project
![Laravel Ecommerce Example](https://user-images.githubusercontent.com/4316355/36414878-d41987b2-15f1-11e8-9f2c-6c3a68e4a14b.gif)
## Installation
1. Clone the repo and `cd` into it
1. `composer install`
1. Rename or copy `.env.example` file to `.env`
1. `php artisan key:generate`
1. Set your database credentials in your `.env` file
1. Set `ADMIN_PASSWORD` in your `.env` file if you want to specify an admin password. If not, the default password is 'password'
1. `php artisan migrate --seed`. This will migrate the database and run any seeders necessary.
1. `npm install`
1. `npm run dev`
1. `php artisan serve` or use Laravel laravel_test
1. Visit `localhost:8000` in your browser
1. Visit `/admin` if you want to access the Voyager admin backend. Admin User/Password: `admin@admin.com/password`. Admin Web User/Password: `adminweb@adminweb.com/password`
1. Clone the repo and `cd` into it
