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

} else if(isset($_POST['update'])){
    $nis = $_POST['nis'];
    $nisn = $_POST['nisn'];
    $nama = trim(htmlspecialchars($_POST['nama']));
    $kelas = $_POST['kelas'];
    $notlp = $_POST['notelp'];
    $alamat = htmlspecialchars($_POST['alamat']);
    $foto = htmlspecialchars($_POST['fotolama']);

    if($_FILES['image']['error'] === 4){
        $fotoSiswa = $foto;
    } else{
        $url = "siswa.php";
        $fotoSiswa = uploadimg($url);
        if($foto != 'default.png'){
            unlink('../asset/image/' . $foto);
        }
    }

    mysqli_query($koneksi, "UPDATE tbl_siswa SET 
                            nisn    = '$nisn',
                            nama    = '$nama',
                            alamat  = '$alamat',
                            kelas   = '$kelas',
                            notelp  = '$notlp',
                            foto    = '$fotoSiswa'
                            WHERE nis = '$nis'
                                ");

     echo "<script> 
        alert('Data Siswa berhasil di perbaharui..');
        document.location.href= 'siswa.php';
        
    </script>";
    return;

}


?>