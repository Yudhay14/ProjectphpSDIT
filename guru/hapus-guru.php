<?php

session_start();

if(!isset($_SESSION['ssLogin'])){
    header("location: ../loginpage/login.php");
    exit;
}

require_once "../config.php";

$id = $_GET['id_guru'];
$foto = $_GET['foto'];

mysqli_query($koneksi, "DELETE FROM guru WHERE id_guru = '$id'");
if ($foto != 'default.png'){
    //unlimk untuk hapus file gambar
    unlink('../asset/image/' . $foto);
}
echo "<script> 
        alert('Data Guru dengan id $id berhasil dihapus');
        document.location.href= 'guru.php';
</script>";
return;