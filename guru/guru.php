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
            <h1 class="mt-4 pt-5">Data Guru</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"><a href="<?= $main_url  ?>">Home</a> / Guru</li>
            </ol>
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <span>
                        <i class="fa-solid fa-list"></i> Guru
                    </span>
                    <div class="ms-auto">
                        <a href="<?=$main_url?>guru/add-guru.php" class="btn btn-sm - btn-primary float-end"><i
                                class="fa-solid fa-plus"></i> Tambah Data</a>
                    </div>
                </div>
                <table class="table table-light table-striped">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Foto</th>
                            <th scope="col">ID Guru</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Pendidikan</th>
                            <th scope="col">Agama</th>
                            <th scope="col">No Telp</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Operator</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Foto</td>
                            <td>ID Guru</td>
                            <td>Nama</td>
                            <td>Pendidikan</td>
                            <td>Agama</td>
                            <td>No Telp</td>
                            <td>Alamat</td>
                            <td>
                                <a href="" class="btn btn-sm btn-warning" title="Update-guru"><i
                                        class="fa-solid fa-pen"></i></a>
                                <!-- Modal Trigger -->
                                <a href="#" class="btn btn-sm btn-danger" title="Hapus Siswa" data-bs-toggle="modal"
                                    data-bs-target="#modalKonfrm">
                                    <i class="fa-solid fa-trash-can"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <div class="modal" tabindex="-1" id="modalKonfrm">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Konfirmasi Penghapusan Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Anda Yakin ingin hapus data ini?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary">Hapus</button>
                </div>
            </div>
        </div>
    </div>

    <?php 

require_once "../template/footer.php";
?>