<?php
    if(isset($_POST["submit"])){
        // Ngecek affkh username dan pasoworodo berisi
        if(!empty($_POST["username"]) && !empty($_POST["password"])){
            // akun siswa
            if($_POST["username"] == "siswa1" &&
            $_POST["password"] == "siswa1"){
                header("Location: datasiswa.php");
                exit;
            } 
            // akun admin
            else if($_POST["username"] == "admin1" &&
            $_POST["password"] == "admin1"){
                header("Location: datasiswaadmin.php");
            } else {
                $error = true;
            }
        }else{
            $kosong = true;
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Login User</h1>
        <form action="" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
            <br>
            <br>

            <label for="password">Password</label>
            <input type="password" name="password"id="password">
            <br>

            <?php
                if(isset($error)){
                    echo "Username atau Password salah!";
                }
                if(isset($kosong)){
                    echo "Isi kolom!";
                }
            ?>
            <br>
            <button type="submit" name="submit">Login</button>
        </form>

    </body>
</html>