<?php

    function tambah2Angka($angka1=0, $angka2=0){
        return $angka1 + $angka2 + returnAngka10(); 
    }

    function perkalian2Angka($angka1 = 0, $angka2 = 0) {
        return $angka1 * $angka2;
    }

    perkalian2Angka(10, 10);

    function returnAngka10() {
        return 10;
    }

    function returnArray() {
        return [10, 20, 30, 40];
    }

    foreach(returnArray() as $nomor) {
        echo $nomor."<br>";
    }

    $hasil = tambah2Angka(5, 10) + perkalian2Angka(10,10);
    echo $hasil;

?>