<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add User</title>
</head>
<body>
    <form action="add.php" method="POST">
        <label for="nama"> name : </label>
        <input type="text" name="nama"> <br/>

        <label for="alamat"> Address : </label>
        <input type="text" name="alamat"> <br/>

        <label for="email">Email : </label>
        <input type="text" name="email"> <br/>

        <label for="password">Password : </label>
        <input type="password" name="password"> <br/>

        <input type="submit" name="submit" value="Save">
    </form>
    
</body>
</html>

<?php 
    include_once("config.php");
    include_once("helper.php");

    if(isset($_POST['submit'])) {
        $nama = filterData($_POST['nama']);  //--> filterData = Memfilter jika ada yang memasukkan script kedalam form
        $email = filterData($_POST['email']); 
        $password = filterData(md5($_POST['password'])); // --> md5 = Mengenkripsi Password yang di input
        $alamat = filterData($_POST['alamat']);


        mysqli_query($mysqli, "INSERT INTO users(email, password, nama, alamat) VALUES('$email','$password', '$nama', '$alamat')");

        header("Location:index.php"); // --> ngelink ke file yang di location kan
    }

?>