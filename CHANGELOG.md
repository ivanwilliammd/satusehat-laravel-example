## Change Log

### Step by step to initialize 
1. Initialize Laravel : <br>```composer create-project laravel/laravel satusehat-laravel-example```
2. Install [SATUSEHAT Integration Library](https://github.com/ivanwilliammd/satusehat-integration) : <br>```composer require ivanwilliammd/satusehat-integration```
3. Publish config from SATUSEHAT Integration Library : <br>```php artisan vendor:publish --provider="Satusehat\Integration\SatusehatIntegrationServiceProvider" --tag=config```
4. Publish migrations from SATUSEHAT Integration Library : <br>```php artisan vendor:publish --provider="Satusehat\Integration\SatusehatIntegrationServiceProvider" --tag=migrations```
5. Setup .env from database, if you're using SQlite, create ```database.sqlite``` at database project folder
6. Migrate database from Laravel : <br>```php artisan migrate```


### Optional step to create UI and authentication
1. Revert Laravel 10 to support Bootstrap Laravel/UI & AdminLTE using Larastarter : <br>```composer require laraveldaily/larastarters --dev``` followed-by <br>```php artisan larastarters:install```
2. Optional if starting from zero - Install Buildable Laravel-AdminLTE using <br>```composer require jeroennoten/laravel-adminlte``` <br>```php artisan adminlte:install --force``` <br>```php artisan adminlte:install --type=full --with=main_views --with=basic_views --with=basic_routes --with=main_views --force```

### Create FHIR Controller and Add to Route
1. Add desired route to  ```routes/web.php```
2. Configure side menu at ```config/adminlte.php```
3. Create FHIR Controller at ```app/Http/Controllers/FhirController.php```
4. Using FHIR library model from SATUSEHAT Integration Library <br>
```php
// OAuth2 Client
use Satusehat\Integration\OAuth2Client; 

// FHIR Client
use Satusehat\Integration\FHIR\Encounter;
use Satusehat\Integration\FHIR\Condition;
use Satusehat\Integration\FHIR\Organization;
use Satusehat\Integration\FHIR\Location;

// KYC Client
use Satusehat\Integration\KYC;

```
