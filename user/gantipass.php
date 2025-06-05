<?php

session_start();

if(!isset($_SESSION['ssLogin'])){
    header ("location:../loginpage/login.php");
    exit;
}

require_once "../config.php";
$title = "Ganti Password | SDIT As-Salam";
require_once "../template/header.php";
require_once "../template/sidebar.php";
require_once "../template/navbar.php";

?>
<div id="layoutSidenav_content">
    <main class="main-countainer">
        <div class="container-fluid px-4">
            <h1 class="mt-4 pt-5">Ganti Password</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"><a href="<?= $main_url  ?>">Home</a> / Ganti Password</li>
            </ol>