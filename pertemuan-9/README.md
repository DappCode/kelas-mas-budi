# Pertemuan 9
## Mas Budy 

### Composer
> Tempat orang orang menyimpan library meereka, atau pulginnya
> Umumnya ketika Anda sedang membangun sebuah aplikasi web dan membutuhkan library tertentu misal PHPMailer, maka langkah awal yang akan Anda lakukan ialah men-download library tersebut terlebih dahulu. Kemudian meletakkannya kedalam direktori proyek web Anda. Selanjutnya Anda akan memanggil class dari library tersebut untuk digunakan pada aplikasi yang sedang dibangun.


#### Penginstalan

```bash
curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
```


- Setelah itu composer init = mebuat file composer.json
- composer install = membuat folder vendor
- composer require = 


##### untuk Memanipulasi waktu
- ketikan `composer install -vvv --profile`  = untuk membuat folder vendor 
- `-vvv --prolfe` = untuk melihat log / progress downloadan nya

##### Penginstallan nesbot/carbon
- ketikan perintah `composer require nesbot/carbon` 
- jika ingin melihat log nya maka jangan lupa di tambah `-vvv --profile`

##### Membuat Autoload = supaya automatis ngeload filenya

ex :
```json
 "autoload": {
        "psr-4": {
            "Portal\\": "src/"         //--> membuat namespacenya, jadi setiap namespace yang berada di foldernya harus memiliki namaspcaenya sama.
        }
    }
```

- `composer update` = Menambah Repositori yang baru di tambahkan


