<?php

session_start();

require_once "../config.php";

if(isset($_POST['login'])){ 
    $username = trim(htmlspecialchars($_POST['username']));
    $password = trim(htmlspecialchars($_POST['password']));

    $result = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username = '$username'");
    //cek username 
    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['password'])){
            $_SESSION['ssLogin'] = true;
            $_SESSION['ssUser'] = $username;
            header("location: ../index.php");
            exit;
        } else{
            echo "<script>
                    alert('Password Belum Sesuai..');
                    document.location.href= 'login.php';
                    </script>";
        }
    } else{
            echo "<script>
                    alert('Username Tidak terdaftar..');
                    document.location.href= 'login.php';
                    </script>";
        }

}   


?>