<?php
include_once "../koneksi.php";
// session_start();
//     if($_SESSION['user']){
//         header("location: ../auth");
//     }
//     if(!isset($_SESSION['user'])){
//        die("<b>Oops!</b> Access Failed.
//            <p>Sistem Logout. Anda harus melakukan Login kembali.</p>
//            <button type='button' onclick=location.href='./'>Back</button>");
//    }
//    if($_SESSION['hak_akses']!="kepeg"){
//        die("<b>Oops!</b> Access Failed.
//            <p>Anda Bukan Pegawai.</p>
//            <button type='button' onclick=location.href='./'>Back</button>");}

session_start();

//cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['role'] == "") {
    header("location:../auth/login.php?pesan=gagal");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Repository</title>
    <link rel="icon" type="image/png" href="../assets/img/rsud.ico" />
    <link href="../assets/css/styles.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" type="text/css" href="../assets/datatables/datatables.min.css"/>
        <link rel="stylesheet" type="text/css" href="../assets/datatables/datatables.css"/> -->
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="../index.html"><b>Repository</b></a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><?=($_SESSION['nama'])?><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <!-- <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li> -->
                    <li><a class="dropdown-item" href="../auth/logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php
include_once "menu_kepeg.php";
?>
        </div>