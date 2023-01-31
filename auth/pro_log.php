<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include '../koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['user'];
$password = $_POST['pass'];

// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE user='$username' and pass='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai admin
    if ($data['role'] == "admin") {

        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "admin";
        $_SESSION['nama'] = $data['nama'];
        // alihkan ke halaman dashboard admin
        header("location:../dashboard");

        // cek jika user login sebagai pegawai
    } else if ($data['role'] == "manage") {
        // buat session login dan username
        $_SESSION['username'] = $data['user'];
        $_SESSION['role'] = $data['role'];
        $_SESSION['nama'] = $data['n_user'];
        $_SESSION['subag'] = $data['subag'];
        // alihkan ke halaman dashboard pegawai
        header("location:../manage");

        // cek jika user login sebagai pengurus
    } else if ($data['role'] == "kepeg") {
        // buat session login dan username
        $_SESSION['username'] = $data['user'];
        $_SESSION['role'] = $data['role'];
        $_SESSION['nama'] = $data['n_user'];
        $_SESSION['subag'] = $data['subag'];
        // alihkan ke halaman dashboard pegawai
        header("location:../kepeg");

        // cek jika user login sebagai pengurus
    } else if ($data['role'] == "izin") {
        // buat session login dan username
        $_SESSION['username'] = $data['user'];
        $_SESSION['role'] = $data['role'];
        $_SESSION['nama'] = $data['n_user'];
        $_SESSION['subag'] = $data['subag'];
        // alihkan ke halaman dashboard pegawai
        header("location:../izin");

        // cek jika user login sebagai pengurus
    } else {

        // alihkan ke halaman login kembali
        header("location:login.php?pesan=gagal");
    }
} else {
    header("location:login.php?pesan=gagal");
}
