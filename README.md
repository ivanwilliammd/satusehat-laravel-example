# SATUSEHAT EMR with SATUSEHAT Integration Library
Status : In Progress

## Step by step to initialize 
1. Initialize Laravel : <br>```composer create-project laravel/laravel satusehat-laravel-example```
2. Install [SATUSEHAT Integration Library](https://github.com/ivanwilliammd/satusehat-integration) : <br>```composer require ivanwilliammd/satusehat-integration```
3. Publish config from SATUSEHAT Integration Library : <br>```php artisan vendor:publish --provider="Satusehat\Integration\SatusehatIntegrationServiceProvider" --tag=config```
4. Publish migrations from SATUSEHAT Integration Library : <br>```php artisan vendor:publish --provider="Satusehat\Integration\SatusehatIntegrationServiceProvider" --tag=migrations```
5. Setup .env from database, if you're using SQlite, create ```database.sqlite``` at database project folder
6. Migrate database from Laravel : <br>```php artisan migrate```


## Optional step to create UI and authentication
1. Revert Laravel 10 to support Bootstrap Laravel/UI & AdminLTE using Larastarter : <br>```composer require laraveldaily/larastarters --dev``` followed-by <br>```php artisan larastarters:install```
2. Optional if starting from zero - Install Buildable Laravel-AdminLTE using <br>```composer require jeroennoten/laravel-adminlte``` <br>```php artisan adminlte:install --force``` <br>```php artisan adminlte:install --type=full --with=main_views --with=basic_views --with=basic_routes --with=main_views --force```


## How to use
1. Clone this repository ```git clone```
2. Install dependencies by running ```composer install```
3. Create composer autoload by running ```composer dumpauto```
