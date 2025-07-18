<?php

session_start();

if(!isset($_SESSION['ssLogin'])){
    header ("location : ../loginpage/login.php");
    exit;
}

require_once "../config.php";
$title = "Tambah Guru | SDIT As-Salam IGS";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";

$idGuru = mysqli_query($koneksi, "SELECT max(id_guru) as maxid FROM guru");
$data = mysqli_fetch_array($idGuru);
$maxID = $data['maxid'];

$noUrut = (int) substr ($maxID,3, 4);
$noUrut++;

//gabung ID dengan nomor dan kita buat 03 / 3 nomor yang di ambil dari no urut
$maxID = "IGS".sprintf("%04s", $noUrut);

?>
<div id="layoutSidenav_content">
    <main class="main-countainer">
        <div class="container-fluid px-4">
            <h1 class="mt-4 pt-5">Tambah Data Guru</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"><a href="<?=$main_url?>">Home</a></li>
                <li class="breadcrumb-item active"><a href="<?=$main_url?>guru/guru.php">Guru</a></li>
                <li class="breadcrumb-item active">Tambah Guru</li>
            </ol>
            <form action="proses-guru.php" method="POST" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <span>
                            <i class="fa-solid fa-list"></i> Guru
                        </span>
                        <div class="ms-auto">
                            <button type="submit" name="simpan" class="btn btn-primary float-end"><i
                                    class="fa-solid fa-floppy-disk"></i> Simpan</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="mb-3 row">
                                    <label for="idguru" class="col-sm-2 col-form-label">ID Guru</label>
                                    <label for="idguru" class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9 " style="margin-left: -71px;">
                                        <input type="text" readonly class="form-control border-0 border-bottom"
                                            id="idguru" name="idguru" maxlength="10" value="<?=$maxID?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                    <label for="nama" class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9 " style="margin-left: -71px;">
                                        <input type="text" class="form-control border-0 border-bottom" id="nama"
                                            name="nama" value="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan</label>
                                    <label for="pendidikan" class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9 " style="margin-left: -71px;">
                                        <input type="text" class="form-control border-0 border-bottom" id="pendidikan"
                                            name="pendidikan" maxlength="10" value="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                                    <label for="agama" class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9 " style="margin-left: -71px;">
                                        <input type="text" class="form-control border-0 border-bottom" id="agama"
                                            name="agama" value="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="notelp" class="col-sm-2 col-form-label">No Telp</label>
                                    <label for="notelp" class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9 " style="margin-left: -71px;">
                                        <input type="text" class="form-control border-0 border-bottom" id="notelp"
                                            name="notelp" maxlength="14" value="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                    <label for="alamat" class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9" style="margin-left: -70px;">
                                        <textarea name="alamat" id="alamat" cols="30" rows="3" placeholder="Alamat Guru"
                                            class="form-control" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 text-center px-5">
                                <img src="../asset/image/default.png" alt="" width="30%" class="mt-4">
                                <input type="file" name="image" class="form-control form-control-sm w-50 mt-3"
                                    style="margin-left: 120px;">
                                <small style="color : #6c757d">Pilih foto dengan max 1mb</small>
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