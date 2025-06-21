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
                <div class="card-body">
                    <table class="table table-light table-striped text-center" id="datatablesSimple">
                        <thead class="table-primary text-center">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">
                                    <center>Foto</center>
                                </th>
                                <th scope="col">
                                    <center>ID Guru</center>
                                </th>
                                <th scope="col">
                                    <center>Nama</center>
                                </th>
                                <th scope="col">
                                    <center>Pendidikan</center>
                                </th>
                                <th scope="col">
                                    <center>Agama</center>
                                </th>
                                <th scope="col">
                                    <center>No Telp</center>
                                </th>
                                <th scope="col">
                                    <center>Alamat</center>
                                </th>
                                <th scope="col">
                                    <center>Operasi</center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $querryGuru = mysqli_query($koneksi, "SELECT * FROM guru");
                            while($data = mysqli_fetch_array($querryGuru)){ ?>
                            <tr>
                                <th scope="row"><?=$no++?></th>
                                <td align="center"><img src="../asset/image/<?=$data['foto']?>" class="rounded-circle"
                                        alt="foto guru" width="60px" height="60px"></td>
                                <td align="center"><?=$data['id_guru']?></td>
                                <td align="center"><?=$data['nama']?></td>
                                <td align="center"><?=$data['pendidikan']?></td>
                                <td align="center"><?=$data['agama']?></td>
                                <td align="center"><?=$data['no_tlp']?></td>
                                <td align="center"><?=$data['alamat']?></td>
                                <td align="center">
                                    <a href="edit-guru.php?id_guru=<?=$data['id_guru']?>" class="btn btn-sm btn-warning"
                                        title="Update-guru"><i class="fa-solid fa-pen"></i></a>
                                    <a href="#" class="btn btn-sm btn-danger btn-hapus" data-id="<?=$data['id_guru']?>"
                                        data-foto="<?=$data['foto']?>" data-bs-toggle="modal"
                                        data-bs-target="#modalKonfrm" title="Hapus-guru">
                                        <i class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
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
                    <p>Anda Yakin ingin hapus data guru ini?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="btnConfirmHapus">Hapus</button>
                </div>
            </div>
        </div>
    </div>
    <script>
    let idGuru = '';
    let fotoGuru = '';

    document.querySelectorAll('.btn-hapus').forEach(function(el) {
        el.addEventListener('click', function() {
            idGuru = this.getAttribute('data-id');
            fotoGuru = this.getAttribute('data-foto');
        });
    });

    document.getElementById('btnConfirmHapus').addEventListener('click', function() {
        if (idGuru && fotoGuru !== null) {
            window.location.href = `hapus-guru.php?id_guru=${idGuru}&foto=${fotoGuru}`;
        } else {
            alert("Data tidak lengkap!");
        }
    });
    </script>
    <?php 

require_once "../template/footer.php";
?>