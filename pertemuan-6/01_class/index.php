<?php 
    include_once("IbuKucing.php");
    include_once("Kucing.php");

    $kucing = new Kucing('ucup', 'Siti');  // --> untuk membuat di menjadi object dengan keyword "new"

    echo "<h3>1. ".$kucing->makan()."</h3>";  // --> untuk memanggil method di dalma class menggunaan tanda "panah"
    echo "<h3>2. ".$kucing->getAyahKucing()."</h3>";
    echo "<h3>3. Nama Kucing : ".$kucing->getNamaKucing()."</h3>";
    echo "<h3>4. Nama Istri : ".$kucing->getIstri()."</h3>";

?>