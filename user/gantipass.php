<?php

session_start();

if(!isset($_SESSION['ssLogin'])){
    header ("location:../loginpage/login.php");
    exit;
}

require_once "../config.php";
$title = "Ganti Password | SDIT As-Salam";
require_once "../template/header.php";
require_once "../template/sidebar.php";
require_once "../template/navbar.php";

//jika ada pesan yang di kirim
if(isset($_GET['msg'])){
    //maka kita ambil
    $msg = $_GET['msg'];
}else{
    $msg = ''; 
}

$alert = '';
if($msg == 'updatepass'){
    $alert ='<div class="alert alert-success alert-dismissible fade show" role="alert">
    
    <i class="fa-solid fa-circle-check"></i> Ganti Password berhasil
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

}
if($msg == 'err1'){
    $alert ='<div class="alert alert-warning alert-dismissible fade show" role="alert">
  
    <i class="fa-solid fa-triangle-exclamation"></i> Ganti Password gagal, password baru dan konfirmasi password tidak sama
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if($msg == 'err2'){
    $alert ='<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <i class="fa-solid fa-triangle-exclamation"></i> Ganti Password gagal, password lama tidak sesuai
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}


?>
<div id="layoutSidenav_content">
    <main class="main-countainer">
        <div class="container-fluid px-4">
            <h1 class="mt-4 pt-5">Ganti Password</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"><a href="<?= $main_url  ?>">Home</a> / Ganti Password</li>
            </ol>
            <form action="proses-password.php" method="POST">
                <?php
                if($msg !== ''){
                    echo $alert;
                }
                ?>
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h5 class="mb-0">
                            <i class="fa-solid fa-key me-2"></i> Ganti Password
                        </h5>
                        <div class="ms-auto">
                            <button type="submit" name="simpan" class="btn btn-primary me-2">
                                <i class="fa-solid fa-floppy-disk"></i> Simpan
                            </button>
                            <button type="reset" name="reset" class="btn btn-danger">
                                <i class="fa-solid fa-xmark"></i> Reset
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="mb-3">
                                    <label for="password" class="form-label">*Password Lama</label>
                                    <input type="password" class="form-control" id="curPass" name="curPass"
                                        placeholder="Masukan Password Lama Anda">
                                </div>
                                <div class="mb-3">
                                    <label for="newPass" class="form-label">*Password Baru</label>
                                    <input type="password" class="form-control" id="newPass" name="newPass"
                                        placeholder="Masukan Password Baru Anda">
                                </div>
                                <div class="mb-3">
                                    <label for="confPass" class="form-label">*Konfirmasi Password</label>
                                    <input type="password" class="form-control" id="confPass" name="confPass"
                                        placeholder="Ulangi Password baru Anda">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <?php
    require_once "../template/footer.php";
?>