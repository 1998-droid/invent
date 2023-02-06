<?php
include "../koneksi.php";
$id = mysqli_real_escape_string($koneksi, $_GET['id']);

$pilih = mysqli_query($koneksi, "SELECT * FROM tb_peren  where peren ='$id'");

$data = mysqli_fetch_array($pilih);

$foto = $data['file'];

unlink("file/" . $foto);

$query = mysqli_query($koneksi, "DELETE FROM tb_peren WHERE peren ='$id' ");
header('location:data.php?pesan=hapus-berhasil');