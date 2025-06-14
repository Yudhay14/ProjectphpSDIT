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
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <span>
                        <i class="fa-solid fa-list"></i> Guru
                    </span>
                    <div class="ms-auto">
                        <a href="<?=$main_url?>guru/guru.php" class="btn btn-sm btn-primary float-end"><i
                                class="fa-solid fa-plus"></i> Simpan</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <div class="mb-3 row">
                                <label for="idguru" class="col-sm-2 col-form-label">ID Guru</label>
                                <label for="idguru" class="col-sm-1 col-form-label">:</label>
                                <div class="col-sm-9 " style="margin-left: -71px;">
                                    <input type="text" class="form-control border-0 border-bottom" id="idguru"
                                        name="idguru" maxlength="10" value="">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                <label for="nama" class="col-sm-1 col-form-label">:</label>
                                <div class="col-sm-9 " style="margin-left: -71px;">
                                    <input type="text" class="form-control border-0 border-bottom" id="nama" name="nama"
                                        maxlength="10" value="">
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
                                        name="agama" maxlength="10" value="">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="notelp" class="col-sm-2 col-form-label">No Telp</label>
                                <label for="notelp" class="col-sm-1 col-form-label">:</label>
                                <div class="col-sm-9 " style="margin-left: -71px;">
                                    <input type="text" class="form-control border-0 border-bottom" id="notelp"
                                        name="notelp" maxlength="10" value="">
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
                        <div class="col-4">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <?php 

require_once "../template/footer.php";
?>