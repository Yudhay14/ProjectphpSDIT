<?php

$koneksi = mysqli_connect("localhost", "root", "", "db_sekolah");

//cek koneksi
// if (mysqli_connect_errno()) {
//     # code...
//     echo "Gagal koneksi";
// } else{
//     echo "Berhasil";
// }

//simpan url 
$main_url = "http://localhost/Project_sekolah_SDIT/";

function uploadimg($url){
    $namafile = $_FILES['image']['name'];
    $ukuran   = $_FILES['image']['size'];
    $error    = $_FILES['image']['error'];
    $tmp      = $_FILES['image']['tmp_name'];


    //cekfileyang di upload 
    $validextension = ['jpg', 'jpeg', 'png'];
    $fileExtension  = explode('.', $namafile);
    $fileExtension  = strtolower(end($fileExtension));
    if (!in_array ($fileExtension, $validextension)){
        header("location:" . $url . '?msg=notimage');
        die;
    }

    //cek ukuran gambar
    if($ukuran > 1000000) {
        header("location:". $url . '?msg=oversize');
        die;
    }
    //generate nama file gMBr
    if($url = 'profile-sekolah.php'){
        $namafilebaru = rand(10, 50) . '-bgSkLogin' . $fileExtension;
    } else {
        $namafilebaru = rand(10, 1000) . '-' . $namafile;

    }

    //upload gmbar
    move_uploaded_file($tmp, "../asset/image/" . $namafilebaru);
    return $namafilebaru;



}

?>