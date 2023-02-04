<?php
include '../koneksi.php';
if (isset($_POST['simpan'])) {
    $tipe_file = $_FILES['file']['type']; //mendapatkan mime type
    if ($tipe_file == "application/pdf") {
        $nama = trim($_POST['nama']);
        $nik = trim($_POST['nik']);
        $tgl = trim($_POST['tgl']);
        $file = trim($_FILES['file']['name']);

        $sql_cek_rek = mysqli_query($koneksi, "SELECT * FROM tb_thdsk WHERE  nik='$nik'") or die(mysqli_error($koneksi));
        if (mysqli_num_rows($sql_cek_rek) > 0) {
            echo "<script>window.location='upload.php';alert('NIK dan nama Sudah Ada'); </script>";
        } else {
            $sql = "INSERT INTO tb_thdsk  (nama, nik, tgl_lahir) VALUES ('$nama', '$nik', '$tgl')";
            mysqli_query($koneksi, $sql); //simpan data judul dahulu untuk mendapatkan id

            //dapatkan id terkahir
            $query = mysqli_query($koneksi, "SELECT nama, nik FROM tb_thdsk  ORDER BY id_thdsk DESC LIMIT 1");
            $data = mysqli_fetch_array($query);

            //mengganti nama pdf
            $nama_baru = $data['nik'] . "_" . $data['nama'] . ".pdf"; //hasil contoh: file_1.pdf
            $file_temp = $_FILES['file']['tmp_name']; //data temp yang di upload
            $folder = "file"; //folder tujuan

            move_uploaded_file($file_temp, "$folder/$nama_baru"); //fungsi upload
            //update nama file di database
            mysqli_query($koneksi, "UPDATE tb_thdsk  SET file='$nama_baru' WHERE nama='$data[nama]' ");

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
