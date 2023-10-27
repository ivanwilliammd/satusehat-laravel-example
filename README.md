# SATUSEHAT EMR with SATUSEHAT Integration Library
Status : In Progress

See [SATUSEHAT Integration Library](https://github.com/ivanwilliammd/satusehat-integration) for more detailed feature or direct installation

## Fitur SATUSEHAT Fase 1 Rawat Jalan
Based on : SATUSEHAT Mandate PMK 24 tahun 2022 (Deadline December 2023) : 
- [x] OAuth2 (POST)
- [x] KYC SATUSEHAT Platform

- [ ] Organization POST
- [ ] Organization PUT
- [ ] Organization GET

- [ ] Location POST
- [ ] Location PUT
- [ ] Location GET

- [ ] Patient GET by NIK
- [ ] Patient GET by ID

- [ ] Practitioner GET by NIK
- [ ] Practitioner GET by ID

- [ ] Encounter POST
- [ ] Encounter PUT
- [ ] Encounter GET

- [ ] Condition POST
- [ ] Condition PUT
- [ ] Condition GET


## How to use

## Option 1 : Use the library
1. Install the library by running ```composer require ivanwilliammd/satusehat-integration```
2. Setup your .env based on .env.example template
3. See [SATUSEHAT Integration Library](https://github.com/ivanwilliammd/satusehat-integration) for more detailed feature or direct installation

## Option 2 : Use this project as-is

### Installation steps (optional for new project)
1. Clone this repository ```git clone```
2. Install dependencies by running ```composer install```
3. Create composer autoload by running ```composer dumpauto```
4. Setup your .env based on .env.example template <br>
- If setting up **sqlite**, create database.sqlite at database folder
- If setting up **mysql**, create database and setup .env based on your database configuration
- If setting up **postgres**, create database and setup .env based on your database configuration
- Don't forget to setup your SATUSEHAT environment variable configuration at .env
5. Run migration ```php artisan migrate:fresh --seed```
6. Run the project ```php artisan serve```
7. Access the main URL and kogin with first main  user : <br>
```
Email : admin@satusehatlaravel.com	
Password : satueshatindonesia
```
8. Change the email and password of main master user from menu ```Ubah Kata Sandi```

### Get the most updated code and library
1. Pull the latest change ```git pull```
2. Update the library ```composer update```

### KYC Feature (SATUSEHAT Production Only)
1. Ensure that you have set your ```SATUSEHAT_ENV``` at .env file with ```PROD```
2. Add new user from menu ```Daftar Pengguna``` and create new user using valid ```NIK``` and ```Nama``` to be recorded as verificator SATUSEHAT Platform
3. Login with the user you create, and you could access the KYC menu right now


### Tips for setting up in local (Windows)
1. Ensure your ```php.ini``` already enabled ```php_openssl``` extension
2. Ensure you already have your ```OPENSSL_CONF``` pointing to ```openssl.cnf``` 
3. XAMPP openssl.cnf path ```{XAMPP_INSTALLATION_DIRECTORY}\php\extras\ssl\openssl.cnf```


