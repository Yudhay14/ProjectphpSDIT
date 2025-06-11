<?php

session_start();

if(isset($_SESSION['ssLogin'])){
    header("location: ../loginpage/login.php");
}


require_once "../config.php";

if(isset($_POST['simpan'])){
    $passLama = trim(htmlspecialchars($_POST['curPass']));
    $passBar = trim(htmlspecialchars($_POST['newPass']));
    $conPass = trim(htmlspecialchars($_POST['confPass']));

    //panggil data dari database, tapi buat var dulu untuk nyimpen session user siapa yang aktif 
    $userName = $_SESSION['ssUser'];
    $queryUser = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username = '$userName'");
    $data = mysqli_fetch_assoc($queryUser);

    // cek dulu pass barunya sama gak sama conf pass
    if($passBar !== $conPass){
        header("location: gantipass.php?msg=err1");
        exit;
    }

    if(!password_verify($passLama, $data['password'])){
        header("location: gantipass.php?msg=err2");
        exit;
    } else {
        //enkripsi dulu passwordnya
        $pass = password_hash($passBar, PASSWORD_DEFAULT);
        //baru sql nya
        mysqli_query($koneksi, "UPDATE tbl_user SET password = '$pass' WHERE username = '$userName'");
        header("location: gantipass.php?msg=updatepass");
        exit;
    }
}
?>