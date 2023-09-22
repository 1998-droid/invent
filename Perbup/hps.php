<?php
include "../koneksi.php";
$id = mysqli_real_escape_string($koneksi, $_GET['id']);

$pilih = mysqli_query($koneksi, "SELECT * FROM tb_perbup  where id_perbup ='$id'");

$data = mysqli_fetch_array($pilih);

$foto = $data['file'];

unlink("file/" . $foto);

$query = mysqli_query($koneksi, "DELETE FROM tb_perbup WHERE id_perda ='$id' ");
header('location:data.php?pesan=hapus-berhasil');
