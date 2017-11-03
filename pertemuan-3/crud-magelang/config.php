<?php 

$host = 'localhost';
$username = 'root';
$password = 1;
$database = 'crudmagelang';


$mysqli = mysqli_connect($host, 
                         $username, 
                         $password, 
                         $database) or die('Not Connected to sql');


?>