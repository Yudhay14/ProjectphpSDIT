<?php

session_start();

if(!isset($_SESSION['ssLogin'])){
    header("location: ../loginpage/login.php");
    exit;
}

require_once "../config.php";
$title= "Update Guru | SDIT As-Salam IGS";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";

$idguru = $_GET['id_guru'];

$guru = mysqli_query($koneksi, "SELECT * FROM guru WHERE id_guru = '$idguru'");
$data = mysqli_fetch_array($guru);

?>
<div id="layoutSidenav_content">
    <main class="main-countainer">
        <div class="container-fluid px-4">
            <h1 class="mt-4 pt-5">Guru</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item "><a href="../index.php">Home</a></li>
                <li class="breadcrumb-item "><a href="guru.php">Guru</a></li>
                <li class="breadcrumb-item active">Update Data Guru</li>
            </ol>
            <form action="proses-guru.php" method="POST" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header">
                        <span class="h5 my-2"><i class="fa-solid fa-square-plus"></i> Update Guru</span>
                        <button type="submit" name="update" class="btn btn-primary float-end"><i
                                class="fa-solid fa-pen-to-square"></i> Update</button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="mb-3 row">
                                    <label for="idguru" class="col-sm-2 col-form-label">ID Guru</label>
                                    <label for="idguru" class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9 " style="margin-left: -71px;">
                                        <input type="text" readonly class="form-control border-0 border-bottom"
                                            id="idguru" name="idguru" maxlength="10" value="<?=$data['id_guru']?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                    <label for="nama" class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9 " style="margin-left: -71px;">
                                        <input type="text" class="form-control border-0 border-bottom" id="nama"
                                            name="nama" value="<?=$data['nama']?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan</label>
                                    <label for="pendidikan" class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9 " style="margin-left: -71px;">
                                        <input type="text" class="form-control border-0 border-bottom" id="pendidikan"
                                            name="pendidikan" maxlength="10" value="<?=$data['pendidikan']?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                                    <label for="agama" class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9 " style="margin-left: -71px;">
                                        <input type="text" class="form-control border-0 border-bottom" id="agama"
                                            name="agama" value="<?=$data['agama']?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="notelp" class="col-sm-2 col-form-label">No Telp</label>
                                    <label for="notelp" class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9 " style="margin-left: -71px;">
                                        <input type="text" class="form-control border-0 border-bottom" id="notelp"
                                            name="notelp" maxlength="14" value="<?=$data['no_tlp']?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                    <label for="alamat" class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9" style="margin-left: -70px;">
                                        <textarea name="alamat" id="alamat" cols="30" rows="3" placeholder="Alamat Guru"
                                            class="form-control" required value=""><?=$data['alamat']?></textarea>
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