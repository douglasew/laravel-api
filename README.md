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
Run server
```sh
php artisan serve
```
## API Client
Open [http://localhost/example-api/public/api/](http://localhost/example-api/public/api/) to view

### APIs endpoints

GET  [/clientes](http://localhost:8080/pacientes)  [all clients]  
GET  [/cliente/{id}](http://localhost:8080/paciente/{id})  [single client]  
POST  [/cliente](http://localhost:8080/paciente/cadastro)  [create a new client]  
PUT  [/cliente/{id}](http://localhost:8080/paciente/{id}/editar)  [update a client]  
DELETE  [/cliente/{id}](http://localhost:8080/paciente/{id}/delete)  [delete a client]
