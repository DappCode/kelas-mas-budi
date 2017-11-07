# Pertemuan 7
## Mas Budy

### Static & Static Method
> adalah property dan method yanng melekat kepada class, bukan kepada objek, bedanya dengan yang tidak static dia hanya bisa panggil jika sudah memiliki objek nya

#### Cara Penulisan & pemanggilan method Static, di beri nama class dengan tanda `namaClass::function()`
- Penulisan 

ex:
```php
<?php

    class Pesawat {

        // Method Static
        public static function type() 
        {
            return 'Sukhoi';
        }
?>
```
- Pemanggilan

ex :
```php 
<?php 
    include_once("Pesawat.php");

    echo Pesawat::type(); //--> Cara Penulisan di beri :: setelah nama class
?>
```

#### Cara Penulisan & Pemanggilan property static,
- Penulisan 
ex: 
```php
<?php

    class Pesawat {

        // Property static
        private static $harga = 1000;
?>
```

- Pemanggilan di luar class

ex : 
```php
<?php
     include_once("Pesawat.php");

     echo Pesawat::$harga;

?>

```

- Pemanggilan di dalam class, menggunkana keyword `self` & `static`

    -penulisannya :
        
        ex:
        ```php
        <?php

            class Pesawat {

                // Property static
                private static $harga = 1000;

                public static function getHarga() 
                {
                    return self::$harga;  //--> untuk memanggil yang static
                }

        ?>
        ```

    - Pemanggilan 
        
        ex :
        ```php
        <?php
            include_once("Pesawat.php");

            echo Pesawat::getHarga();

        ?>

        ```

### Namespace
> Buat Membedain nama file dalam satu folder, maksudnya agar kamu bisa membuat nama class yang sama dan di bedakan dengan nameclass dan di letak dalam beda folder

#### - Cara penulisan Namespace

- Class Yang Pertama :

```php
<?php
    namespace Asus;

    class Smartphone {

        public function tampilMerk()
        {
            return 'Asus z6';
        }

    }

?>
```
- Class yang kedua : 

```php
<?php
    namespace Xiaomi;

    class Smartphone {

        public function tampilMerk()
        {
            return 'Xiaomi';
        }

    }

?>

```

di atas tersebut memiliki nama class yang sama jadi sebelum di `namespace` maka tidak akan bisa di panggil atau di tampilkan

##### - Cara Pemanggilan 

- Cara Pertama, Sangat Di rekomendasi kan
```php
<?php
    use Xiaomi\Smartphone as Xiaomi; 
    use Asus\Smartphone as Asus;

    $xiaomi = new Xiaomi();
    echo $xiaomi->tampilMerk();

    echo "<br>";

    $asusz6 = new Asus();
    echo $asusz6->tampilMerk();
?>
```

- Cara Kedua, tidak di Rekomendasikan 

```php
<?php 
    $xiaomi = new Xiaomi\Smartphone();
    echo $xiaomi->tampilMerk();

    echo "<br>";

    $asusz6 = new Asus\Smartphone();
    echo $asusz6->tampilMerk();
?>
```

- Cara Ketiga, Sangat tidak di rekomendasikan 

```php
<?php 
    echo (new Xiaomi\Smartphone())->tampilMerk();
    echo "<br>";
    echo (new Asus\Smartphone())->tampilMerk();
?>
```

