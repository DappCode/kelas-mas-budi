<?php 
    include_once("config.php");

    $id = $_GET['id'];

    // Deleted data berdasarkan id
    mysqli_query($mysqli, "DELETE FROM users WHERE id='$id'");

    header("Location:index.php");

?>