<?php
session_start();

if (!isset($_SESSION['ssLogin'])) {
    header("location: ../loginpage/login.php");
    exit;
}

require_once "../config.php";
$title = "Siswa | SDIT As-Salam IGS";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";
?>
<style>
#datatablesSimple th {
    text-align: center !important;
}
</style>
<div id="layoutSidenav_content">
    <main class="main-countainer">
        <div class="container-fluid px-4">
            <h1 class="mt-4 pt-5">Siswa</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"><a href="<?= $main_url ?>">Home</a> / Siswa</li>
            </ol>

            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <span><i class="fa-solid fa-list"></i> Siswa</span>
                    <div class="ms-auto">
                        <a href="<?= $main_url ?>siswa/add-siswa.php" class="btn btn-sm btn-primary">
                            <i class="fa-solid fa-plus"></i> Tambah Siswa
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-hover text-center" id="datatablesSimple">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Foto</th>
                                <th scope="col">NIS</th>
                                <th scope="col">NISN</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">No Telp</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Operasi</th>
                            </tr>
                        </thead>
                        <tbody id="datatbody">
                            <?php
                            $no = 1;
                            $querrySiswa = mysqli_query($koneksi, "SELECT * FROM tbl_siswa");
                            while ($data = mysqli_fetch_array($querrySiswa)) { ?>
                            <tr>
                                <th scope="row"><?= $no++ ?></th>
                                <td>
                                    <img src="../asset/image/<?= $data['foto'] ?>" class="rounded-circle"
                                        alt="foto siswa" width="60" height="60">
                                </td>
                                <td><?= $data['nis'] ?></td>
                                <td><?= $data['nisn'] ?></td>
                                <td><?= $data['nama'] ?></td>
                                <td><?= $data['kelas'] ?></td>
                                <td><?= $data['notelp'] ?></td>
                                <td><?= $data['alamat'] ?></td>
                                <td>
                                    <a href="edit-siswa.php?nis=<?= $data['nis'] ?>" class="btn btn-sm btn-warning"
                                        title="Update-siswa">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <a href="hapus-siswa.php?nis=<?= $data['nis'] ?>&foto=<?= $data['foto'] ?>"
                                        class="btn btn-sm btn-danger" title="Hapus-siswa"
                                        onclick="return confirm('Anda Yakin ingin hapus data ini?')">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>

    <?php
require_once "../template/footer.php";
?>