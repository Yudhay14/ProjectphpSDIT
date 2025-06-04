<?php
session_start();

if(!isset($_SESSION['ssLogin'])){
    header ("location:../Project_sekolah_SDIT/loginpage/login.php");
    exit;
}
require_once "../config.php";
$title = "Tambah User | SDIT As-Salam";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";


if(isset($_GET['msg'])){
    $msg = $_GET['msg'];
} else{
    $msg = '';
}

$alert = '';
if($msg == 'cancel'){
    $alert ='<div class="alert alert-warning alert-dismissible fade show" role="alert">
  
    <i class="fa-solid fa-triangle-exclamation"></i> Tambah user gagal, username sudah ada!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if($msg == 'notimage'){
    $alert ='<div class="alert alert-warning alert-dismissible fade show" role="alert">
    
    <i class="fa-solid fa-triangle-exclamation"></i> Tambah user gagal, file yang di upload bukan gambar..
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

}
if($msg == 'oversize'){
    $alert ='<div class="alert alert-warning alert-dismissible fade show" role="alert">
    
    <i class="fa-solid fa-triangle-exclamation"></i> Tambah user gagal, ukuran lebih dari 1MB!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

}
if($msg == 'added'){
    $alert ='<div class="alert alert-success alert-dismissible fade show" role="alert">
    
    <i class="fa-solid fa-circle-check"></i> Tambah user berhasil, segera ganti password anda
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

}
?>

<div id="layoutSidenav_content">
    <main class="main-countainer">
        <div class="container-fluid px-4">
            <h1 class="mt-4 pt-5">Tambah User</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"><a href="<?= $main_url  ?>">Home</a> / Dashboard</li>
            </ol>
            <form action="proses-user.php" method="POST" enctype="multipart/form-data">
                <?php
                if($msg !== ''){
                    echo $alert;
                }
                ?>
                <div class="card">
                    <div class="card-header">
                        <span class="h5"><i class="fa-solid fa-person-circle-plus"></i> Tambah User</span>
                        <button type="submit" name="simpan" class="btn btn-primary float-end"><i
                                class="fa-solid fa-floppy-disk"></i> Simpan</button>
                        <button type="reset" name="reset" class="btn btn-danger float-end me-3"><i
                                class="fa-solid fa-xmark"></i> Reset</button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="mb-3 row">
                                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                                    <label for="" class="col-sm-1 col-form-label">:</label>

                                    <div class="col-sm-9" style="margin-left: -80px;">
                                        <input type="text" pattern="[A-Z-z0-9]{3,}"
                                            title="minimal 3 character kombinasi huruf, kecil & angka"
                                            class="form-control border-0 border-bottom" id="username" name="username"
                                            maxlength="20" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="name" class="col-sm-2 col-form-label">Nama</label>
                                    <label for="" class="col-sm-1 col-form-label">:</label>

                                    <div class="col-sm-9" style="margin-left: -80px;">
                                        <input type="text" class="form-control border-0 border-bottom" id="nama"
                                            name="nama" maxlength="20" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="name" class="col-sm-2 col-form-label">Jabatan</label>
                                    <label for="" class="col-sm-1 col-form-label">:</label>

                                    <div class="col-sm-9" style="margin-left: -80px;">
                                        <select name="jabatan" id="jabatan" class="form-select border-0 border-bottom"
                                            required>
                                            <option value="" selected>--Pilih Jabatan--</option>
                                            <option value="Kepsek">Kepsek</option>
                                            <option value="Staff TU">Staff TU</option>
                                            <option value="Guru">Guru</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                    <label for="" class="col-sm-1 col-form-label">:</label>

                                    <div class="col-sm-9" style="margin-left: -80px;">
                                        <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control"
                                            required placeholder="alamat lengkap / domisili"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 text-center px-5 mt-5">
                                <img src="../asset/image/default.png" alt="" width="30%">
                                <input type="file" name="image" class="form-control form-control-sm w-50 mt-3"
                                    style="margin-left: 120px;">
                                <small class="color : #6c757d">Pilih foto dengan max 1mb</small>
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