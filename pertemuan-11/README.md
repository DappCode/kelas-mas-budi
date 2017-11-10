# Pertemuan 11 
## Mas Budy

### MVC

- MODEL = Berkaitan dengan Database
- VIEW = Menyimpan tampilan
- CONTROLLER = dia yang melaksanakan Logic nya, Menjadi jembatan antara MODEL dan VIEW

```php

    VIEW <--> CONTROLLER <--> MODEL

```

### untuk memanggil nama method di `web.php`
```php

Route::get('/login', 'LoginController@index');

```

### CRUD laravel

- Pertama Setting dulu database nya yang berada di `.env`





