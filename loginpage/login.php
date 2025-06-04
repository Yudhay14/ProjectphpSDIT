<?php

require_once "../config.php";
$title = "Login | SDIT As-Salam IGS";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login | SDIT As-Salam IGS</title>
    <link href="<?= $main_url ?>asset/sb_admin/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="icon" type="icon/x-icon" href="<?= $main_url ?>asset/image/logohome.png">
</head>
<style>
.bg-body-login {
    background-image: url("../asset/image/bg-test.jpg");
}
</style>

<body class="sb-nav-fixed bg-body-login">
    <nav class="sb-topnav navbar navbar-dark">
        <!-- Navbar Brand-->
        <a href="" class="m-3"><input type="image" src="<?= $main_url ?>asset/image/logohome.png" alt=""></a>
        <a class="navbar-brand text-start fw-bold text-primary">SDIT As-Salam IGS</a>
        <!-- Sidebar Toggle-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <a href="" style="text-decoration: none;" class="fw-bold px-3">Informasi Sekolah</a>
            <a href="" style="text-decoration: none;" class="fw-bold px-3">PPDB</a>
        </form>
    </nav>

    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center" style="min-height: 100vh; align-items: center;">
                        <div class="col-7">
                            <img src="../asset/image/Logo.png" class="w-50" alt="">
                            <img src="../asset/image/bg-sekolah.jpg" class="w-50 rounded-pill shadow-lg" alt="">
                        </div>
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-7" style="height: 600px;">
                                <div class="card-header">
                                    <h3 class="text-center text-primary font-weight-light my-4"
                                        style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                                        Login SDIT As-Salam</h3>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="form-floating mb-4 mt-5">
                                            <input class="form-control" id="username" type="text" name="username"
                                                placeholder="Username" pattern="[A-Za-z0-9]{3,}"
                                                title="Kombinasi angka dan huruf minimal 3 Karakter" />
                                            <label for="username">Username</label>
                                        </div>
                                        <div class="form-floating mb-4">
                                            <input class="form-control" id="inputPassword" type="password"
                                                placeholder="Password" minlength="4" name="password" require />
                                            <label for="inputPassword">Password</label>
                                        </div>
                                        <button type="submit" name="login"
                                            class="btn btn-primary rounded-pill col-12 my-2 mt-5">Login </button>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="text-muted">Copyright &copy; SDIT As-Salam IGS <?= date('Y') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
        </div>
        </footer>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="<?= $main_url ?>asset/sb_admin/js/scripts.js"></script>
</body>

</html>