<?php

session_start();

if(!isset($_SESSION['ssLogin'])){
    header("location: ../loginpage/login.php");
    exit;
}

require_once "../config.php";
$title= "Update Siswa | SDIT As-Salam IGS";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";

$nis = $_GET['nis'];

$siswa = mysqli_query($koneksi, "SELECT * FROM tbl_siswa WHERE nis = '$nis'");
$data = mysqli_fetch_array($siswa);


?>
<div id="layoutSidenav_content">
    <main class="main-countainer">
        <div class="container-fluid px-4">
            <h1 class="mt-4 pt-5">Siswa</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item "><a href="../index.php">Home</a></li>
                <li class="breadcrumb-item "><a href="siswa.php">Siswa</a></li>
                <li class="breadcrumb-item active">Update Siswa</li>
            </ol>
            <form action="proses-siswa.php" method="POST" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header">
                        <span class="h5 my-2"><i class="fa-solid fa-square-plus"></i> Update Siswa</span>
                        <button type="submit" name="update" class="btn btn-primary float-end"><i
                                class="fa-solid fa-pen-to-square"></i> Update</button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="mb-3 row">
                                    <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                                    <label for="nis" class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9">
                                        <input type="text" readonly name="nis"
                                            class="form-control-plaintext border-bottom" style="margin-left: -70px;"
                                            id="nis" value="<?= $nis ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                                    <label for="nisn" class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nisn" class="form-control-plaintext border-bottom"
                                            style="margin-left: -70px;" id="nisn" value="<?= $data['nisn']?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="nis" class="col-sm-2 col-form-label">Nama</label>
                                    <label for="nis" class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama" class="form-control-plaintext border-bottom"
                                            style="margin-left: -70px;" id="nama" value="<?= $data['nama']?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                                    <label for="kelas" class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9">
                                        <select name="kelas" id="kelas" class="form-select border-0 border-bottom"
                                            style="margin-left: -70px;" required>
                                            <option value="" selected>--Pilih Kelas--</option>
                                            <option value="A1" <?= ($data['kelas'] === 'A1') ? 'selected' : '' ?>>A1
                                            </option>
                                            <option value="A2" <?= ($data['kelas'] === 'A2') ? 'selected' : '' ?>>A2
                                            </option>
                                            <option value="A3" <?= ($data['kelas'] === 'A3') ? 'selected' : '' ?>>A3
                                            </option>
                                            <option value="B1" <?= ($data['kelas'] === 'B1') ? 'selected' : '' ?>>B1
                                            </option>
                                            <option value="B2" <?= ($data['kelas'] === 'B2') ? 'selected' : '' ?>>B2
                                            </option>
                                            <option value="B3" <?= ($data['kelas'] === 'B3') ? 'selected' : '' ?>>B3
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="notlp" class="col-sm-2 col-form-label">No Telp</label>
                                    <label for="notlp" class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="notelp"
                                            class="form-control-plaintext border-bottom ps-2"
                                            style="margin-left: -70px;" id="notelp" value="<?= $data['notelp']?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                    <label for="alamat" class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9" style="margin-left: -70px;">
                                        <textarea name="alamat" id="alamat" cols="30" rows="3"
                                            placeholder="Alamat Siswa" class="form-control"
                                            required><?= $data['alamat']?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 text-center px-5">
                                <input type="hidden" name="fotolama" value="<?=$data['foto']?>">
                                <img src="../asset/image/<?=$data['foto']?>" alt="" width="40%" height="40%"
                                    class="mt-4 rounded-circle">
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