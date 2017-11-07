<?php 
    include_once("Asus/Smartphone.php");
    include_once("Xiaomi/Smartphone.php");
    
    //Cara Pertama --> Sangat Di Rekomendasikan
    // use Xiaomi\Smartphone as Xiaomi; 
    // use Asus\Smartphone as Asus;

    // $xiaomi = new Xiaomi();
    // echo $xiaomi->tampilMerk();

    // echo "<br>";

    // $asusz6 = new Asus();
    // echo $asusz6->tampilMerk();

    // Cara Kedua
    // $xiaomi = new Xiaomi\Smartphone();
    // echo $xiaomi->tampilMerk();

    // echo "<br>";

    // $asusz6 = new Asus\Smartphone();
    // echo $asusz6->tampilMerk();

    // Cara Ketiga -- > Tidak Di Rekomendasikan 
    echo (new Xiaomi\Smartphone())->tampilMerk();
    echo "<br>";
    echo (new Asus\Smartphone())->tampilMerk();

?>