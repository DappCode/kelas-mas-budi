<?php 
    session_start();
    if(! isset($_SESSION['email'])) {
        header("Location:../../pertemuan-5/login.php");
    }
    

    include_once("config.php");

    $id = $_GET['id'];

    // Deleted data berdasarkan id
    mysqli_query($mysqli, "DELETE FROM users WHERE id='$id'");

    header("Location:index.php");

?>