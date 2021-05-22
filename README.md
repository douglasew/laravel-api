## Installation

Clone repository:
```sh
https://github.com/douglasew/laravel-api.git
```
Install dependencies:
```sh
composer install
```
Command to generate your app key:
```sh
php artisan key:generate
```
## Database
Create your database and add the name in ".env"

![settings of connection with database](https://cdn.discordapp.com/attachments/331545069423165440/845492439191126047/unknown.png)

Command to generate a migrate:
```sh
php artisan migrate
```
Run server:
```sh
php artisan serve
```
## API Client
Open [http://localhost/example-api/public/api/](http://localhost/example-api/public/api/) to view

### APIs endpoints

GET  [/clientes](http://localhost/example-api/public/api/clientes)  [all clients]  
GET  [/cliente/{id}](http://localhost/example-api/public/api/clientes/id)  [single client]  
POST  [/cliente](http://localhost/example-api/public/api/cliente)  [create a new client]  
PUT  [/cliente/{id}](http://localhost/example-api/public/api/clientes/id)  [update a client]  
DELETE  [/cliente/{id}](http://localhost/example-api/public/api/clientes/id)  [delete a client]
