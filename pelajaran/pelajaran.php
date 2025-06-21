<?php
session_start();

if (!isset($_SESSION['ssLogin'])) {
    header("location: ../loginpage/login.php");
    exit;
}

require_once "../config.php";
$title = "Pelajaran | SDIT As-Salam IGS";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";
?>


<div id="layoutSidenav_content">
    <main class="main-countainer">
        <div class="container-fluid px-4">
            <h1 class="mt-4 pt-5">Mata Pelajaran</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"><a href="<?=$main_url?>">Home</a> / Pelajaran</li>
            </ol>
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa-solid fa-plus"></i> Tambah Pelajaran
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="mb-3">
                                    <label for="pelajaran" class="form-label">Nama Pelajaran</label>
                                    <input type="text" class="form-control" id="pelajaran" name="pelajaran"
                                        placeholder="Mata Pelajaran" require>
                                </div>
                                <div class="mb-3">
                                    <label for="guru" class="form-label">Nama Guru</label>
                                    <select name="guru" id="guru" class="form-select" required>
                                        <option value="" selected>---Pilih Guru---</option>
                                        <?php
                                            $querryGuru = mysqli_query($koneksi, "SELECT * FROM guru");
                                            while($dataGur = mysqli_fetch_array($querryGuru)){ ?>
                                        <option value="<?=$dataGur['nama']?>" data-id="<?=$dataGur['id_guru']?>">
                                            <?=$dataGur['nama']?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="kelas" class="form-label">Kelas</label>
                                    <select name="kelas" id="kelas" class="form-select" required>
                                        <option value="" selected>---Pilih Kelas---</option>
                                        <option value="1A">1A</option>
                                        <option value="1B">1B</option>
                                        <option value="2A">2A</option>
                                        <option value="2B">2B</option>
                                        <option value="3A">3A</option>
                                        <option value="3B">3B</option>
                                        <option value="4A">4A</option>
                                        <option value="4B">4B</option>
                                        <option value="5A">5A</option>
                                        <option value="5B">5B</option>
                                        <option value="6A">6A</option>
                                        <option value="6B">6B</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="kelas" class="form-label">Hari</label>
                                    <select name="kelas" id="kelas" class="form-select" required>
                                        <option value="" selected>---Pilih Hari---</option>
                                        <option value="senin">Senin</option>
                                        <option value="selasa">Selasa</option>
                                        <option value="rabu">Rabu</option>
                                        <option value="kamis">Kamis</option>
                                        <option value="Jumat">Jumat</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="kelas" class="form-label">Jam Pelajaran</label>
                                    <select name="kelas" id="kelas" class="form-select" required>
                                        <option value="" selected>---Pilih Jam---</option>
                                        <option value="jam1">07:00 - 08:00</option>
                                        <option value="jam2">08:00 - 09:00</option>
                                        <option value="jam3">09:20 - 10:20</option>
                                        <option value="jam4">10:20 - 11:20</option>
                                        <option value="jam5">12:40 - 14:00</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class=" col-8">
                    <div class="card-body">
                        <table class="table table-light table-striped text-center" id="datatablesSimple">
                            <thead class="table-primary text-center">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">
                                        <center>Pelajaran</center>
                                    </th>
                                    <th scope="col">
                                        <center>Guru</center>
                                    </th>
                                    <th scope="col">
                                        <center>ID Guru</center>
                                    </th>
                                    <th scope="col">
                                        <center>Kelas</center>
                                    </th>
                                    <th scope="col">
                                        <center>Operasi</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                            $no = 1;
                            $querryPel = mysqli_query($koneksi, "SELECT * FROM tbl_pelajaran");
                            while($data = mysqli_fetch_array($querryPel)){ ?>
                                <tr>
                                    <th scope="row"><?=$no++?></th>
                                    <td align="center"><?=$data['pelajaran']?></td>
                                    <td align="center"><?=$data['guru']?></td>
                                    <td align="center"><?=$data['id_guru']?></td>
                                    <td align="center"><?=$data['kelas']?></td>
                                    <td align="center">
                                        <a href="edit-pelajaran.php?id_guru=<?=$data['id_guru']?>"
                                            class="btn btn-sm btn-warning" title="Update-pelajaran"><i
                                                class="fa-solid fa-pen"></i></a>
                                        <a href="#" class="btn btn-sm btn-danger btn-hapus"
                                            data-id="<?=$data['id_guru']?>" data-foto="<?=$data['foto']?>"
                                            data-bs-toggle="modal" data-bs-target="#modalKonfrm"
                                            title="Hapus-pelajaran">
                                            <i class="fa-solid fa-trash-can"></i></a>
                                    </td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php

require_once "../template/footer.php";

?>