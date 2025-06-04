<?php

require_once "../config.php";

//jika tombol simpan ditekan 
if(isset($_POST['simpan'])){
    //ambil value yang di post 
    $id         = $_POST['id'];
    $nama       = trim(htmlspecialchars($_POST['nama']));
    $email      = trim(htmlspecialchars($_POST['email']));
    $status     = $_POST['status'];
    $akreditasi = $_POST['akreditasi'];
    $alamat     = trim(htmlspecialchars(string: $_POST['alamat']));
    $visismisi     = trim(htmlspecialchars(string: $_POST['visimisi']));
    $gbr        = trim(htmlspecialchars(string: $_POST['gbrlama']));

    //cek dulu gambarnya ada gak 
    if($_FILES['image']['error'] === 4){
        $gbrSekolah = $gbr;
    } else {
        $url = 'profile-sekolah.php';
        $gbrSekolah = uploadimg($url);
        @unlink('../asset/image/' . $gbr);
    }

    //update data
    mysqli_query($koneksi, "UPDATE tbl_sekolah SET 
                            nama    = '$nama',
                            email   = '$email',
                            status  = '$status',
                            akreditasi  = '$akreditasi',
                            alamat  = '$alamat',
                            visimisi    = '$visismisi',
                            gambar  = '$gbrSekolah'
                            WHERE id =  $id ");
    header("location:profile-sekolah.php?msg=updateddatasekolah");
    return;
}
?>