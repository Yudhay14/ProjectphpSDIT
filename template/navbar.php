<?php



?>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-custom">
        <!-- Navbar Brand-->
        <a href="" class="m-3"><input type="image" src="<?= $main_url ?>asset/image/logohome.png" alt=""></a>
        <a class="navbar-brand text-start fw-bold" href="<?= $main_url ?>index.php">SDIT As-Salam</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars fa-2x"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <span class="text-white text-capitalize"><?= $_SESSION['ssUser']  ?></span>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" data-bs-toggle="modal" href="#mdlProfile">Profile User</a></li>
                    <li><a class="dropdown-item" href="<?= $main_url ?>Sekolah/profile-sekolah.php">Profile Sekolah</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="<?= $main_url?>loginpage/logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
        <?php
        $username = $_SESSION["ssUser"];
        $queryUser = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username = '$username'");
        $profile = mysqli_fetch_array($queryUser);

        ?>

    </nav>
    <div class="modal" tabindex="-1" id="mdlProfile">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?= $main_url?>asset/image/<?=$profile['foto'] ?>"
                                    class="img-fluid rounded-start" alt="gambaruser">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>