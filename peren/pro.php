<?php
include '../koneksi.php';
if (isset($_POST['simpan'])) {
    $tipe_file = $_FILES['file']['type']; //mendapatkan mime type
    if ($tipe_file == "application/pdf") {
        $nama = trim($_POST['nama']);
        $tahun = trim($_POST['tahun']);
        $tentang = trim($_POST['tentang']);
        $subag = trim($_POST['subag']);
        $file = trim($_FILES['file']['name']);

        $sql_cek_rek = mysqli_query($koneksi, "SELECT * FROM tb_peren WHERE  n_dok='$nama'") or die(mysqli_error($koneksi));
        if (mysqli_num_rows($sql_cek_rek) > 0) {
            echo "<script>window.location='upload.php';alert('Nama Sudah Ada'); </script>";
        } else {
            $sql = "INSERT INTO tb_peren  (n_dok, tahun, tentang, subag) VALUES ('$nama', '$tahun', '$tentang', '$subag')";
            mysqli_query($koneksi, $sql); //simpan data judul dahulu untuk mendapatkan id

            //dapatkan id terkahir
            $query = mysqli_query($koneksi, "SELECT n_dok FROM tb_peren  ORDER BY id_peren DESC LIMIT 1");
            $data = mysqli_fetch_array($query);

            //mengganti nama pdf
            $nama_baru = $data['n_dok'] . ".pdf"; //hasil contoh: file_1.pdf
            $file_temp = $_FILES['file']['tmp_name']; //data temp yang di upload
            $folder = "file"; //folder tujuan

            move_uploaded_file($file_temp, "$folder/$nama_baru"); //fungsi upload
            //update nama file di database
            mysqli_query($koneksi, "UPDATE tb_peren  SET file='$nama_baru' WHERE n_dok='$data[n_dok]' ");

            // header('location:../ep/data.php?alert=upload-berhasil');
            echo "
        <script language='JavaScript'>
                alert('Dokumen berhasil ditambahkan');
                document.location='data.php';
        </script>";
        }

    } else {
        echo "Gagal Upload File Bukan PDF! <a href='data.php'> Kembali </a>";
    }
}
//pengecekan tipe harus pdf