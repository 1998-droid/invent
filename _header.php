<?php
include_once "../koneksi.php";
// session_start();
// 	if($_SESSION['user']){
// 		header("location: ../auth");
// 	}
// 	if(!isset($_SESSION['user'])){
// 	   die("<b>Oops!</b> Access Failed.
// 		   <p>Sistem Logout. Anda harus melakukan Login kembali.</p>
// 		   <button type='button' onclick=location.href='./'>Back</button>");
//    }
//    if($_SESSION['hak_akses']!="kepeg"){
// 	   die("<b>Oops!</b> Access Failed.
// 		   <p>Anda Bukan Pegawai.</p>
// 		   <button type='button' onclick=location.href='./'>Back</button>");}

           session_start();
 
	 //cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['role']==""){
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
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../assets/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="../index.html">Start Bootstrap</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?=($_SESSION['nama'])?><i class="fas fa-user fa-fw"></i></a>
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
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="../dashboard">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="../kepeg/data.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Data All
                            </a>
                            <a class="nav-link" href="../ep">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Data EP
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Peraturan RS
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html"><i class="fa fa-book fa-fw"></i>&nbsp; Perdir</a>
                                    <a class="nav-link" href="layout-sidenav-light.html"><i class="fa fa-book fa-fw"></i>&nbsp; Perbup</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as</div>
                        <b><?=($_SESSION['role'])?></b>
                    </div>
                </nav>
            </div>