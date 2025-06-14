<?php

session_start();

if(!isset($_SESSION['ssLogin'])){
    header("location: ../loginpage/login.php");
    exit;
}

require_once "../config.php";

$id = $_GET['nis'];
$foto = $_GET['foto'];

mysqli_query($koneksi, "DELETE FROM tbl_siswa WHERE nis = '$id'");
if ($foto != 'default.png'){
    //unlimk untuk hapus file gambar
    unlink('../asset/image/' . $foto);
}
echo "<script> 
        alert('Data Siswa dengan nis berhasil dihapus');
document.location.href= 'siswa.php';

</script>";
return;