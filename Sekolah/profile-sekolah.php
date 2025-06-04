<?php

require_once "../config.php";
$title = "Profile Sekolah | SDIT As-Salam";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";

if(isset($_GET['msg'])){
    $msg = $_GET['msg'];
} else{
    $msg = '';
}

$alert = '';
if($msg == 'notimage'){
    $alert ='<div class="alert alert-warning alert-dismissible fade show" role="alert">
    
    <i class="fa-solid fa-triangle-exclamation"></i>Update data sekolah gagal, file yang di upload bukan gambar..
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

}
if($msg == 'oversize'){
    $alert ='<div class="alert alert-warning alert-dismissible fade show" role="alert">
    
    <i class="fa-solid fa-triangle-exclamation"></i> Update data sekolah gagal, ukuran lebih dari 1MB!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

}
if($msg == 'updateddatasekolah'){
    $alert ='<div class="alert alert-success alert-dismissible fade show" role="alert">
    
    <i class="fa-solid fa-circle-check"></i> Data Sekolah Berhasil diperbaharui..
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

}

$sekolah = mysqli_query($koneksi, "SELECT * FROM tbl_sekolah WHERE id = 1");
$data = mysqli_fetch_array($sekolah);

?>

<div id="layoutSidenav_content">
    <main class="main-countainer">
        <div class="container-fluid px-4">
            <h1 class="mt-4 pt-5">Data Profile Sekolah</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"><a href="<?= $main_url  ?>">Home</a> / Profile Sekolah</li>
            </ol>
            <form action="proses-sekolah.php" method="POST" enctype="multipart/form-data">
                <?php
                if($msg !== ''){
                    echo $alert;
                }
                ?>
                <div class="card">
                    <div class="card-header">
                        <span class="h5"><i class="fa-solid fa-school-flag"></i> Data
                            Sekolah</span>
                        <button type="submit" name="simpan" class="btn btn-primary float-end"><i
                                class="fa-solid fa-floppy-disk"></i> Simpan</button>
                        <button type="reset" name="reset" class="btn btn-danger float-end me-3"><i
                                class="fa-solid fa-xmark"></i> Reset</button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 text-center px-5">
                                <input type="hidden" name="gbrlama" value="<?= $data ['gambar'] ?>">

                                <img src="../asset/image/<?=$data ['gambar'] ?>" alt="gambar sekolah" class="mb-2"
                                    width="100%">
                                <input type="file" name="image" class="form-control form-control-sm">
                                <small class="text-secondary">Pilih Gambar dengan ukuran max 1MB</small>
                            </div>
                            <div class="col-8">
                                <input type="hidden" name="id" value="<?= $data ['id'] ?>">

                                <div class="mb-3 row">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama Sekolah</label>
                                    <label for="nama" class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9" style="margin-left: -60px;">
                                        <input type="text" class="form-control border-0 border-bottom" id="nama"
                                            name="nama" value="<?= $data ['nama'] ?>" placeholder="Nama Sekolah">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <label for="email" class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9" style="margin-left: -60px;">
                                        <input type="text" class="form-control border-0 border-bottom" id="nama"
                                            name="email" value="<?= $data ['email'] ?>" placeholder="Email Sekolah">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9" style="margin-left: -60px;">
                                        <select name="status" id="status" required
                                            class="form-select border-0 border-bottom">
                                            <option value="">--Pilih Status--</option>
                                            <option value="Negeri"
                                                <?= ($data['status'] === 'Negeri') ? 'selected' : '' ?>>Negeri</option>
                                            <option value="Swasta"
                                                <?= ($data['status'] === 'Swasta') ? 'selected' : '' ?>>Swasta</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="akreditasi" class="col-sm-2 col-form-label">Akreditasi</label>
                                    <label for="akreditasi" class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9" style="margin-left: -60px;">
                                        <select name="akreditasi" id="akreditasi" required
                                            class="form-select border-0 border-bottom">
                                            <option value="A" <?= ($data['akreditasi'] === 'A') ? 'selected' : '' ?>>A
                                            </option>
                                            <option value="B" <?= ($data['akreditasi'] === 'B') ? 'selected' : '' ?>>B
                                            </option>
                                            <option value="C" <?= ($data['akreditasi'] === 'C') ? 'selected' : '' ?>>C
                                            </option>
                                            <option value="D" <?= ($data['akreditasi'] === 'C') ? 'selected' : '' ?>>D
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                    <label for="alamat" class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9" style="margin-left: -60px;">
                                        <textarea name="alamat" id="alamat" cols="30" rows="4" class="form-control"
                                            required><?= $data ['alamat'] ?></textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="visimisi" class="col-sm-2 col-form-label">Visi Misi</label>
                                    <label for="visimisi" class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9" style="margin-left: -60px;">
                                        <textarea name="visimisi" id="visimisi" cols="30" rows="3" class="form-control"
                                            required><?= $data ['visimisi'] ?></textarea>
                                    </div>
                                </div>
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