<?php
include '../koneksi.php';
if (isset($_POST['simpan'])) {
    $tipe_file = $_FILES['file']['type']; //mendapatkan mime type
    if ($tipe_file == "application/pdf") {
        $nama = trim($_POST['nama']);
        $tahun = trim($_POST['tahun']);
        $subag = trim($_POST['subag']);
        $jenis_dok = trim($_POST['jenis_dok']);
        $file = trim($_FILES['file']['name']);

        $sql = "INSERT INTO tb_dok  (nama, tahun, subag, jenis_dok) VALUES
        ('$nama', '$tahun', '$subag', '$jenis_dok')";
        mysqli_query($koneksi, $sql); //simpan data judul dahulu untuk mendapatkan id

        //dapatkan id terkahir
        $query = mysqli_query($koneksi, "SELECT nama, tgl_upload FROM tb_dok  ORDER BY id_dok DESC LIMIT 1");
        $data = mysqli_fetch_array($query);

        //mengganti nama pdf
        $nama_baru = date('Y-m-d', strtotime($data['tgl_upload'])) . "_" . $data['nama'] . ".pdf"; //hasil contoh: file_1.pdf
        $file_temp = $_FILES['file']['tmp_name']; //data temp yang di upload
        $folder = "file"; //folder tujuan

        move_uploaded_file($file_temp, "$folder/$nama_baru"); //fungsi upload
        //update nama file di database
        mysqli_query($koneksi, "UPDATE tb_dok  SET file='$nama_baru' WHERE nama='$data[nama]' ");
//ganti nama file
        $query = mysqli_query($koneksi, "SELECT nama, tgl_upload FROM tb_dok  ORDER BY id_dok DESC LIMIT 1");
        $data = mysqli_fetch_array($query);
        $nama_baru = date('d-m-Y', strtotime($data['tgl_upload'])) . "-" . $data['nama'];
        mysqli_query($koneksi, "UPDATE tb_dok  SET nama='$nama_baru' WHERE nama='$data[nama]' ");
        // header('location:../ep/data.php?alert=upload-berhasil');
        echo "
       <script language='JavaScript'>
               alert('Dokumen berhasil ditambahkan');
               document.location='data.php';
       </script>";

    } else {
        echo "Gagal Upload File Bukan PDF! <a href='data.php'> Kembali </a>";
    }
}
//pengecekan tipe harus pdf
