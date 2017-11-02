# Pertemuan 1 
## Mas Budi

### Autaran Penulisan PHP

- echo  : Penampilan Layar
- pembuatan Variabel Mengguanakan Dollar `$` , Berfungsi Untuk Menampung Nilai

###Type Data PHP
- String
    > String Untuk Nampung data `Text`, `Kata`, `Huruf`.

    ex : 
    ```php
        $string = "ini string";
    ```

- Boolean
    > untuk nampung nilai true or false

    ex: 
    ```php
    $boolean = true == 1 || false == 0;
    $boolean = 0; 
    ```
- Integer
    > buat nampung angka 

    ex:
    ```php
    $angka = 100;
    ```
- Float
    > Buat Nampung nilai decimal

    ```php
    $float = 3.14;
    ```


### casting = Penyingkatan fungsi 
ex : 
```php
$angka = (bool)1; //--> di singkat boolean = bool 
```

### Array pada PHP

- Bisa Menampung Semua data
ex :
```php
<?php 
    $array = [11, 'string', true, 3.14];
    // Tetapi tidak boleh membuat dalam satu array berbeda variabel
?>
```

```php
<?php 

   $arraysantri = ['dapp' => ['asds', 'asdas', 'asdasd']];

    echo $arraysantri['dapp'][1];

?>
```

### Perulangan 

- for 

    ex : 
    ```php 
    <?php 
        for($i=0; $i<10; $i++) {
            echo $i;
        }
    ?>
    ```

- foreach

    ex : 
    ```php 
    <?php 
    $data =['dappcode', 'ibnukholil', 'muamar'];

    foreach($data as $nama) {
        echo $nama."<br>";
    }

    // untuk Menampilkan nilainya dan keynya
    foreach ($data as $key => $value) {
        echo $key.":".$value;
    }
    ?>
    ```

- while
    ex : 
    ```php
    <?php 
    $awal = 0;
    while($awal < 10>){
        echo "Bla";
        $awal++;
    } 
    ?>

    ```


- do while
    - dia akan melooping sekali walaupun nilainya false

    ex :
    ```php
    $awal2 = 0;
    
    do {
        echo $awal2;
        $awal2++;
    } while($awal2 < 10)

    ```


### Function 
- Sekumpulan Perintah yang fungsinya menyelesaikan tugas tertetntu
    ex1 : 
    ```php
    <?php

        function tambah2Angka() {
            echo "Kereeen!!!!!";   
        }

        tambah2Angka();
    ?>
    ```
    ex2:
    ```php
    <?php
    // Untuk Menampilkan error
    ini_set('display_errors', 1);
    error_reporting(E_ALL);


        function tambah2Angka($angka1 = 0, $angka2 = 0) {
            echo $angka1."<br>";
            echo $angka2."<br>";   
        }

        tambah2Angka();

    ?>
    ```

    ex3 :
    ```php 
    <?php
        function tambah2Angka($angka1 = 0, $angka2 = 0) {
            echo $angka1 + $angka2."<br>";
        }

        tambah2Angka(10, 2);
        tambah2Angka(10, 25);

    ?>

    ```



