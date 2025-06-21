<?php

session_start();
if(!isset($_SESSION['ssLogin'])){
    header ("location :../loginpage/login.php");
    exit;
}

require_once "../config.php";

if(isset($_POST['simpan'])){
    $idguru = $_POST['idguru'];
    $nama   = trim(htmlspecialchars($_POST['nama']));
    $pddk   = trim(htmlspecialchars($_POST['pendidikan']));
    $agama  = trim(htmlspecialchars($_POST['agama']));
    $notelp = $_POST['notelp'];
    $alamat = htmlspecialchars($_POST['alamat']);
    $foto = htmlspecialchars($_FILES['image']['name']);

    if($foto != null){
        $url = 'add-guru.php';
        $foto = uploadimg($url);
    } else{
        $foto = 'default.png';
    }

    mysqli_query($koneksi, "INSERT INTO guru VALUES ('$idguru','$nama','$pddk','$agama','$notelp','$alamat','$foto')");

    echo "<script> 
        alert('Data Guru berhasil disimpan');
        document.location.href= 'guru.php';
        
    </script>";
    return;
    

} else if(isset($_POST['update'])){
    $idguru = $_POST['idguru'];
    $nama   = trim(htmlspecialchars($_POST['nama']));
    $pddk   = trim(htmlspecialchars($_POST['pendidikan']));
    $agama  = trim(htmlspecialchars($_POST['agama']));
    $notelp = $_POST['notelp'];
    $alamat = htmlspecialchars($_POST['alamat']);
    $foto = htmlspecialchars($_POST['fotolama']);

    if($_FILES['image']['error'] === 4){
        $fotoGuru = $foto;
    } else{
        $url = "guru.php";
        $fotoGuru = uploadimg($url);
        if($foto != 'default.png'){
            unlink('../asset/image/' . $foto);
        }
    }

    mysqli_query($koneksi, "UPDATE guru SET	

                            id_guru     = '$idguru',
                            nama        = '$nama',
                            pendidikan  = '$pddk',
                            agama       = '$agama',
                            no_tlp      = '$notelp',
                            alamat      = '$alamat',
                            foto        = '$fotoGuru'
                            WHERE id_guru = '$idguru'
                                ");

     echo "<script> 
        alert('Data Guru berhasil di perbaharui..');
        document.location.href= 'guru.php';
        
    </script>";
    return;

}
?>