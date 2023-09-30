# SATUSEHAT EMR with SATUSEHAT Integration Library
Status : In Progress

## Step by step to initialize 
1. Initialize Laravel : ```composer create-project laravel/laravel satusehat-laravel-example```
2. Install [SATUSEHAT Integration Library](https://github.com/ivanwilliammd/satusehat-integration) : ```composer require ivanwilliammd/satusehat-integration```
3. Revert Laravel 10 to support Bootstrap Laravel/UI & AdminLTE using Larastarter : ```composer require laraveldaily/larastarters --dev && php artisan larastarters:install```
4. Install Buildable Laravel-AdminLTE using ```composer require jeroennoten/laravel-adminlte && php artisan adminlte:install --force && php artisan adminlte:install --type=full --with=main_views --with=basic_views --with=basic_routes --with=main_views --force```

## How to use
1. Clone this repository ```git clone```
2. Install dependencies by running ```composer install```
3. Create composer autoload by running ```composer dumpauto```
