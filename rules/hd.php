<?php
include "../koneksi.php";
$id    = mysqli_real_escape_string($koneksi,$_GET['id']);

$pilih = mysqli_query($koneksi,"SELECT * FROM tb_aturan  where id_aturan ='$id'");

$data = mysqli_fetch_array($pilih);

$foto = $data['file'];

unlink("file/".$foto);

$query = mysqli_query($koneksi,"DELETE FROM tb_aturan WHERE id_aturan ='$id' ");
header('location:../rules/pro.php');
?>