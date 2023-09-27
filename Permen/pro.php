<?php
include '../koneksi.php';
if (isset($_POST['simpan'])) {
    $tipe_file = $_FILES['file']['type']; //mendapatkan mime type
    if ($tipe_file == "application/pdf") {
        $nama = trim($_POST['nama']);
        $tahun = trim($_POST['tahun']);
        $subag = trim($_POST['subag']);
        $file = trim($_FILES['file']['name']);

        $sql = "INSERT INTO tb_permen  (nama, tahun, subag) VALUES ('$nama', '$tahun','$subag')";
        mysqli_query($koneksi, $sql); //simpan data judul dahulu untuk mendapatkan id

        //dapatkan id terkahir
        $query = mysqli_query($koneksi, "SELECT nama, tgl_upload FROM tb_permen  ORDER BY id_permen DESC LIMIT 1");
        $data = mysqli_fetch_array($query);

        //mengganti nama pdf
        $nama_baru = $data['nama'] . "_" . date('Y-m-d', strtotime($data['tgl_upload'])) . ".pdf"; //hasil contoh: file_1.pdf
        $file_temp = $_FILES['file']['tmp_name']; //data temp yang di upload
        $folder = "file"; //folder tujuan

        move_uploaded_file($file_temp, "$folder/$nama_baru"); //fungsi upload
        //update nama file di database
        mysqli_query($koneksi, "UPDATE tb_permen  SET file='$nama_baru' WHERE nama='$data[nama]' ");
//ganti nama file
        $query = mysqli_query($koneksi, "SELECT nama, tgl_upload FROM tb_permen  ORDER BY id_permen DESC LIMIT 1");
        $data = mysqli_fetch_array($query);
        $nama_baru = date('d-m-Y', strtotime($data['tgl_upload'])) . "-" . $data['nama'];
        mysqli_query($koneksi, "UPDATE uu  SET nama='$nama_baru' WHERE nama='$data[nama]' ");
        // header('location:../ep/data.php?alert=upload-berhasil');
        echo "
        <script language='JavaScript'>
                alert('Dokumen berhasil ditambahkan');
                document.location='data.php';
        </script>";

    } else {
        echo "Gagal Upload File Bukan PDF! <a href='data.php'> Kembali </a>";
    }
} elseif (isset($_POST['edit'])) {
    $tipe_file = $_FILES['file']['type']; //mendapatkan mime type
    if ($tipe_file == "application/pdf") //mengecek apakah file tersebu pdf atau bukan
    {
        $id = trim($_POST['id']);
        $nama = trim($_POST['nama']);
        $tahun = trim($_POST['tahun']);
        $subag = trim($_POST['subag']);
        $file = trim($_FILES['file']['name']);

        mysqli_query($koneksi, "UPDATE uu  SET nama='$nama', tahun='$tahun', subag='$subag' WHERE id_uu='$id' ");
        //dapatkan id terkahir
        $query = mysqli_query($koneksi, "SELECT nama FROM uu  ORDER BY id_uu DESC LIMIT 1");
        $data = mysqli_fetch_array($query);
        $nama_baru = $data['nama'] . ".pdf"; //hasil contoh: file_1.pdf
        $file_temp = $_FILES['file']['tmp_name']; //data temp yang di upload
        $folder = "file"; //folder tujuan
        move_uploaded_file($file_temp, "$folder/$nama_baru"); //fungsi upload
        mysqli_query($koneksi, "UPDATE uu  SET file='$nama_baru' WHERE nama='$data[nama]' ");
        header('location:data.php?alert=upload-berhasil');
    } else {
        echo "Gagal Upload File Bukan PDF! <a href='data.php'> Kembali </a>";
    }
}
//pengecekan tipe harus pdf