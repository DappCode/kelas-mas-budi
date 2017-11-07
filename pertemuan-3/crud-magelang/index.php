<?php
session_start();
// echo $_SESSION['email'];  // --> Email Yang Login
include_once('config.php');  //--> Menghubunngkan dengan file "config.php"

if(! isset($_SESSION['email'])) {
    header("Location:../../pertemuan-5/login.php");
}

$results = mysqli_query($mysqli, "SELECT * FROM users"); // --> Menghubungkan dengan Query yang ada di database

// $users = mysqli_fetch_array($results); //--> Menjadikannya manjadi array

// echo "<pre>".print_r($users, 1)."</pre>";  //--> Menjalankan Query database

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar CRUD</title>
</head>
<body>
    <h3><a href="add.php">Tambah data</a></h3>
    <h3><a href="../../pertemuan-5/logout.php">Logout</a></h3>
    <table border="5" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Address</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                while($res = mysqli_fetch_array($results)) { ?>
                    <tr>
                        <td> <?php echo $res['id'] ?></td>
                        <td> <?php echo $res['nama'] ?></td>
                        <td> <?php echo $res['email'] ?></td>
                        <td> <?php echo $res['alamat'] ?></td>
                        <td> <?php echo $res['password'] ?></td>
                        <td> 
                        <a onclick="return confirm('Delete data?')" href="delete.php?id=<?php echo $res['id'] ?>"> deleted </a>
                        <a href="edit.php?id=<?php echo $res['id'] ?>"> Edit </a> </td>
                    </tr>
                <?php }?>
        </tbody>
    </table>
    
</body>
</html>
















