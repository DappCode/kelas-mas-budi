<?php
// Untuk Menampilkan error
ini_set('display_errors', 1);
error_reporting(E_ALL);


    function tambah2Angka($angka1 = 0, $angka2 = 0) {
        echo $angka1."<br>";
        echo $angka2."<br>";   
    }

    tambah2Angka();

// Perjumlahan

function tambah2Angka($angka1=0, $angka2=0){
    echo $angka1+$angka2."<br>"; 
}

    tambah2Angka(10, 2);
    tambah2Angka(10, 25);

?>