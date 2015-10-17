## Review Places in New York

### Installation

> 1) clone this git <br>
> 2) install composer and run composer install <br>
> 3) run php artisan migrate


### Administrator Login

First Run

> php artisan db:seed --class=UsersSeeder

Enter below details for Administrative Account

> email : info@admin.com <br>
> password : admin

#### Extra

Run below artisan to seed reviews

> php artisan db:seed --class=ReviewsSeeder

#### Features

Anyone case register and add reviews <br>
Admin check reviews and decides whether to approve or delete
