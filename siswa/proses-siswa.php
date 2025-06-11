<?php

session_start();
if(!isset($_SESSION['ssLogin'])){
    header("location: ../loginpage/login.php");
    exit;
}

require_once "../config.php";

if(isset($_POST['simpan'])){
    $nis = $_POST['nis'];
    $nisn = $_POST['nisn'];
    $nama = trim(htmlspecialchars($_POST['nama']));
    $kelas = $_POST['kelas'];
    $notlp = $_POST['notelp'];
    $alamat = htmlspecialchars($_POST['alamat']);
    $foto = htmlspecialchars($_FILES['image']['name']);


    if($foto != null){
        $url="add-siswa.php";
        $foto = uploadimg($url);
    } else {
        $foto = 'default.png';
    }

    mysqli_query($koneksi, "INSERT INTO tbl_siswa VALUES ('$nis','$nisn','$nama','$alamat','$kelas','$notlp','$foto')");

    echo "<script> 
        alert('Data Siswa berhasil disimpan');
        document.location.href= 'siswa.php';
        
    </script>";
    return;

}

?>