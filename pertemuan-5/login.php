<?php 
    session_start();

    if(isset($_SESSION['email'])) {
        header("Location:../pertemuan-3/crud-magelang/index.php");
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="POST">
        <label for="email">Email : </label>
        <input type="text" name="email"> <br>

        <label for="password">Password : </label>
        <input type="password" name="password"> <br>

        <input type="submit" name="submit" value="login">
    </form>

    
</body>
</html>

<?php 

    // Bikin Koneksi
    // Bikin Form
    // Bikin Query untuk membandingkan data inputan dengan data yang ada di table users
    // Jika ada ita masukin kedalam session datanya dan redirect ke index
    // jika tidak ada kita kasih pesan error

    include_once("../pertemuan-3/crud-magelang/config.php");
    include_once("../pertemuan-3/crud-magelang/helper.php");

    if(isset($_POST['submit'])) {

        // Memvalidasi Email & Passwordnya
        $email = filterData($_POST['email']);
        $password = md5(filterData($_POST['password']));
        // Menghubungkan dengan Query
        $login = mysqli_query($mysqli, "SELECT * FROM users WHERE email= '$email' AND password = '$password' ");

        // Menampilkan Arraynya
        $data = mysqli_fetch_array($login);
        // echo "<pre>".print_r($data, 1)."</pre>";
        // die;

        $row  = mysqli_num_rows($login);

        if($row > 0) {
            $_SESSION['id'] = $data['id'];
            $_SESSION['email'] = $data['email'];
        
            header("Location:../pertemuan-3/crud-magelang/index.php");
        } else {
            echo "<h1> GAGAL GAN! </h1>";
        }
    }

?>