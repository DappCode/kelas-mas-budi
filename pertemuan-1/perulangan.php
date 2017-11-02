<?php 

// Pengulangan
$data =['dappcode', 'ibnukholil', 'muamar'];

    foreach($data as $nama) {
        echo $nama."<br>";
    }

    foreach ($data as $key => $value) {
        echo $key.":"." ".$value."<br>";
    }
 
    $awal = 0;
    while($awal < 10){
        echo "Bla". "<br>";
        $awal++;
    } 


    $awal2 = 10;
    
    do {
        echo "<br> do while"." ".$awal2;
        $awal2++;
    } while($awal2 < 10)


?>