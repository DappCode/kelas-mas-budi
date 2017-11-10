# Pertemuan 12
## Mas Budy

### Migration

- cara membuat tabel di laravel :

ex:
```php
public function up()  // --> Untuk Membuat Tabel
    {
        Schema::create('students', function(Blueprint $table){
            $table->increments('id');
            $table->string('nama');    // -> Varchar
            $table->string('address');  // -> Varchars
            $table->integer('age');     // -> Integer
            $table->string('email')->unique();  //-> Jika dia unik 
            $table->timestamps();
        });
    }
```

- Cara penghapusan Tabel di laravel

ex: 
```php
public function down()
    {
        Schema::drop('students');
    }
}
```

#### untuk mengembalikan tabel kemabali
- `migrate:rollback` = fungsinya ketika ada perubahan dalam pembuatan tabel tidak akan bisa langsung di `migrate` , jikalau belum di rollback

- bisa juga menggunakan `migrate:refresh` untuk menjalankan fungsi `migrate` & `migrate:rollback` 
