<?php

session_start();

if(!isset($_SESSION['ssLogin'])){
    header("location: ../loginpage/login.php");
    exit;
}

require_once "../config.php";
$title = "Siswa | SDIT As-Salam IGS";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";

?>
<div id="layoutSidenav_content">
    <main class="main-countainer">
        <div class="container-fluid px-4">
            <h1 class="mt-4 pt-5">Siswa</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"><a href="<?= $main_url  ?>">Home</a> / Siswa</li>
            </ol>
            <div class="card">
                <div class="card-header">
                    <i class="fa-solid fa-list"></i> Siswa
                    <a href="<?=$main_url?>siswa/add-siswa.php" class="btn btn-sm - btn-primary float-end"><i
                            class="fa-solid fa-plus"></i>Tambah Siswa</a>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">
                                    <center>Foto</center>
                                </th>
                                <th scope="col">
                                    <center>nis</center>
                                </th>
                                <th scope="col">
                                    <center>NISN</center>
                                </th>
                                <th scope="col">
                                    <center>Nama</center>
                                </th>
                                <th scope="col">
                                    <center>Kelas</center>
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
                            $querrySiswa = mysqli_query($koneksi, "SELECT * FROM tbl_siswa");
                            while($data = mysqli_fetch_array($querrySiswa)){ ?>
                            <tr>
                                <th scope="row"><?=$no++?></th>
                                <td align="center"><img src="../asset/image/<?=$data['foto']?>" class="rounded-circle"
                                        alt="foto siswa" width="60px" height="60px"></td>
                                <td align="center"><?=$data['nis']?></td>
                                <td align="center"><?=$data['nisn']?></td>
                                <td align="center"><?=$data['nama']?></td>
                                <td align="center"><?=$data['kelas']?></td>
                                <td align="center"><?=$data['notelp']?></td>
                                <td align="center"><?=$data['alamat']?></td>
                                <td align="center">
                                    <a href="" class="btn btn-sm btn-warning" title="Update-siswa"><i
                                            class="fa-solid fa-pen"></i></a>
                                    <a href="" class="btn btn-sm btn-danger" title="Hapus-siswa"><i
                                            class="fa-solid fa-trash-can"></i></i></a>
                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>








    <?php
require_once "../template/footer.php";
?>