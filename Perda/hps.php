<?php
include "../koneksi.php";
$id = mysqli_real_escape_string($koneksi, $_GET['id']);

$pilih = mysqli_query($koneksi, "SELECT * FROM uu  where id_uu ='$id'");

$data = mysqli_fetch_array($pilih);

$foto = $data['file'];

unlink("file/" . $foto);

$query = mysqli_query($koneksi, "DELETE FROM uu WHERE id_uu ='$id' ");
header('location:data.php?pesan=hapus-berhasil');
