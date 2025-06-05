<?php

session_start();
if(isset($_SESSION['ssLogin'])){
    header("location: ../index.php");
    exit;
}

require_once "../config.php";

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
    background-image: url("../asset/image/bg-test2.jpg");
}

.form-control {
    background-color: transparent !important;
    border: 2px solid rgba(0, 123, 255, 1);
    color: white;
    font-size: 16px;
    border-radius: 8px;
}

.form-control:focus {
    background-color: transparent !important;
    border-color: #007bff;
    box-shadow: 0 0 6px rgba(0, 123, 255, 0.7);
    color: white;
    outline: none;
}

.form-control::placeholder {
    color: rgba(255, 255, 255, 0.6);
}

input:-webkit-autofill {
    -webkit-box-shadow: 0 0 0 1000px transparent inset !important;
    -webkit-text-fill-color: white !important;
    transition: background-color 9999s ease-in-out 0s;
    caret-color: white;
}
</style>

<body class="sb-nav-fixed bg-body-login">
    <nav class="sb-topnav navbar navbar-dark">
        <!-- Navbar Brand-->
        <a href="" class="m-3"><input type="image" src="<?= $main_url ?>asset/image/logohome.png" alt=""></a>
        <a class="navbar-brand text-start fw-bold text-primary">SDIT As-Salam IGS</a>
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
                            <img src="../asset/image/logologin.png" class="w-55" style="margin-right: 20px;" alt="">
                        </div>
                        <div class="col-lg-5">
                            <div class="card-header">
                                <h2 class="text-center text-primary fw-bold font-weight-light my-4"
                                    style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                                    LOGIN</h2>
                            </div>
                            <div class="card-body">
                                <form action="proses-login.php" method="POST">
                                    <div class="form-floating mb-4 mt-5">
                                        <input class="form-control rounded-pill" id="username" type="text"
                                            name="username" placeholder="Username" pattern="[A-Za-z0-9]{3,}"
                                            title="Kombinasi angka dan huruf minimal 3 Karakter" />
                                        <label for="username">Username</label>
                                    </div>
                                    <div class="form-floating mb-4 mt-4">
                                        <input class="form-control rounded-pill" id="inputPassword" type="password"
                                            placeholder="Password" minlength="4" name="password" require />
                                        <label for="inputPassword">Password</label>
                                    </div>
                                    <a class="d-block text-center" href="">Forgot Password</a>
                                    <button type="submit" name="login"
                                        class="btn btn-primary rounded-pill col-12 my-2 mt-5">Login </button>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="text-primary fw-bold">Copyright &copy; SDIT As-Salam IGS <?= date('Y') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="<?= $main_url ?>asset/sb_admin/js/scripts.js"></script>
</body>

</html>