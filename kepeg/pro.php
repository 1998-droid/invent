<?php
include '../koneksi.php';
if (isset($_POST['simpan'])) {
    $tipe_file = $_FILES['file']['type']; //mendapatkan mime type
    if ($tipe_file == "application/pdf") {
        $nama = trim($_POST['n_dok']);
        $tgl = trim($_POST['tgl']);
        $nomor = trim($_POST['nomor']);
        $tentang = trim($_POST['tentang']);
        $type_doc = trim($_POST['type_doc']);
        $subag = trim($_POST['subag']);
        $file = trim($_FILES['file']['name']);

        $sql = "INSERT INTO tb_dok  (n_dok, tgl, nomor, tentang, type_doc, subag) VALUES ('$nama', '$tgl', '$nomor', '$tentang', '$type_doc', '$subag')";
        mysqli_query($koneksi, $sql); //simpan data judul dahulu untuk mendapatkan id

        //dapatkan id terkahir
        $query = mysqli_query($koneksi, "SELECT n_dok, subag FROM tb_dok  ORDER BY id_dok DESC LIMIT 1");
        $data = mysqli_fetch_array($query);

        //mengganti nama pdf
        $nama_baru = $data['subag'] . "_" . $data['n_dok'] . ".pdf"; //hasil contoh: file_1.pdf
        $file_temp = $_FILES['file']['tmp_name']; //data temp yang di upload
        $folder = "file"; //folder tujuan

        move_uploaded_file($file_temp, "$folder/$nama_baru"); //fungsi upload
        //update nama file di database
        mysqli_query($koneksi, "UPDATE tb_dok  SET file='$nama_baru' WHERE n_dok='$data[n_dok]' ");

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
