# Pertemuan 2
## Mas Budy

### function
- return = untuk pengembalian
- Return itu akhir dari proses pada php, jadi dia tidak akan memproses kodignan yang di bawah nya lagi
- echo = output terakhir

    ex : 
    ```php
    <?php 
        function perkalian2Angka($angka1 = 0, $angka2 = 0) {
        return $angka1 * $angka2;
    }

        echo perkalian2Angka(10, 10);
    ?>

    ```

#### Kita Bisa Melooping function menggunakan `foreach` 

ex : 
```php
    function returnArray() {
        return [10, 20, 30, 40];
    }

    foreach(returnArray() as $nomor) {
        echo $nomor."<br>"
    }

```
















