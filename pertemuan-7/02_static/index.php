<?php 
    include_once("Pesawat.php");
    
    // Tidak Static
    $pesawat = new Pesawat();
    echo $pesawat->typeNoStatic()."<br>"; 


    // Method Static
    echo Pesawat::type()." ";

    // Method Property
    echo Pesawat::getHarga()." ";

?>

