<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav pt-5">
                    <div class="sb-sidenav-menu-heading">Home</div>
                    <a class="nav-link" href="<?= $main_url  ?>">
                        <div class="sb-nav-link-icon text-primary"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <hr class="mb-0">
                    <div class="sb-sidenav-menu-heading fw-bold">Admin</div>
                    <a class="nav-link" href="<?= $main_url  ?>user/add-user.php">
                        <div class="sb-nav-link-icon text-primary"><i class="fa-solid fa-user"></i></div>
                        User
                    </a>
                    <a class="nav-link" href="<?= $main_url  ?>user/gantipass.php">
                        <div class="sb-nav-link-icon text-primary"><i class="fa-solid fa-key"></i></div>
                        Ganti Password
                    </a>
                    <hr class="mb-0">
                    <div class="sb-sidenav-menu-heading">Data</div>
                    <a class="nav-link" href="<?= $main_url  ?>siswa/siswa.php">
                        <div class="sb-nav-link-icon text-primary"><i class="fa-solid fa-users"></i></div>
                        Siswa
                    </a>
                    <a class="nav-link" href="<?= $main_url  ?>guru/guru.php">
                        <div class="sb-nav-link-icon text-primary"><i class="fa-solid fa-chalkboard-user"></i></div>
                        Guru
                    </a>
                    <a class="nav-link" href="<?= $main_url  ?>pelajaran/pelajaran.php">
                        <div class="sb-nav-link-icon text-primary"><i class="fa-solid fa-book"></i></div>
                        Mata Pelajaran
                    </a>
                    <a class="nav-link" href="<?= $main_url  ?>">
                        <div class="sb-nav-link-icon text-primary"><i class="fa-solid fa-user-graduate"></i></div>
                        Ujian
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer border">
                <div class="small">Logged in as:</div>
                <?= "Admin" ?>
            </div>
        </nav>
    </div>