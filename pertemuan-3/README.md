# Pertemuan 3
## Mas Budy

### CRUD ( Creed Read Update Deleted )

ex : 

```php
<?php
    include_once('config.php');  //--> Menghubunngkan dengan file "config.php"

    $results = mysqli_query($mysqli, "SELECT * FROM users"); // --> Menghubungkan dengan Query yang ada di database

    $users = mysqli_fetch_array($results); //--> Menjadikannya manjadi array

    echo "<pre>".print_r($users, 1)."</pre>";  //--> Menjalankan Query database
?>
```

### Mengelurakan Inputan dengan PHP

ex: 
```php
<?php 
    while($res = mysqli_fetch_array($results)) { ?>
        <tr>
            <td> <?php echo $res['id'] ?></td>
            <td> <?php echo $res['nama'] ?></td>
            <td> <?php echo $res['email'] ?></td>
            <td> <?php echo $res['alamat'] ?></td>
            <td> <?php echo $res['password'] ?></td>
        </tr>
    <?php }?>
```

# SELENGKAPNYA PAHAMI KODINGANNYA !!

