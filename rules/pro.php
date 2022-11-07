<?php 
include '../koneksi.php';
if(isset($_POST['simpan'])){
        $tipe_file = $_FILES['file']['type']; //mendapatkan mime type
        if ($tipe_file == "application/pdf") //mengecek apakah file tersebu pdf atau bukan
        {
        $nama     = trim($_POST['n_dok']);
        $nomor    = trim($_POST['subag']);
        $file 	= trim($_FILES['file']['name']);

        $sql = "INSERT INTO tb_aturan  (n_dok, subag) VALUES ('$nama', '$nomor')";
        mysqli_query($koneksi,$sql); //simpan data judul dahulu untuk mendapatkan id

        //dapatkan id terkahir
        $query = mysqli_query($koneksi,"SELECT n_dok, subag FROM tb_aturan  ORDER BY id_dok DESC LIMIT 1");
        $data  = mysqli_fetch_array($query);

        //mengganti nama pdf
        $nama_baru = $data['subag']."_".$data['n_dok'].".pdf"; //hasil contoh: file_1.pdf
        $file_temp = $_FILES['file']['tmp_name']; //data temp yang di upload
        $folder    = "file"; //folder tujuan

        move_uploaded_file($file_temp, "$folder/$nama_baru"); //fungsi upload
        //update nama file di database
        mysqli_query($koneksi,"UPDATE tb_aturan  SET file='$nama_baru' WHERE n_dok='$data[n_dok]' ");
        
        // header('location:../ep/data.php?alert=upload-berhasil');
        echo"
        <script language='JavaScript'>
                alert('Dokumen berhasil ditambahkan');
                document.location='data.php';
        </script>";

        } else
        {
        echo "Gagal Upload File Bukan PDF! <a href='data.php'> Kembali </a>";
        }
}
else if (isset($_POST['edit']))
{
        $tipe_file = $_FILES['file']['type']; //mendapatkan mime type
        if ($tipe_file == "application/pdf") //mengecek apakah file tersebu pdf atau bukan
        {
        $id = trim($_POST);
        $nama     = trim($_POST['n_dok']);
        $thn     = trim($_POST['tahun']);
        $ten     = trim($_POST['tentang']);
        $subag    = trim($_POST['subag']);
        $file 	= trim($_FILES['file']['name']);

        mysqli_query($koneksi,"UPDATE tb_aturan  SET n_dok='$nama', tahun='$thn', tentang='$ten' WHERE id_aturan='$id' ");
        //dapatkan id terkahir
        $query = mysqli_query($koneksi,"SELECT n_dok, subag FROM tb_aturan  ORDER BY id_aturan DESC LIMIT 1");
        $data  = mysqli_fetch_array($query);
        $nama_baru = $data['subag']."_".$data['n_dok'].".pdf"; //hasil contoh: file_1.pdf
        $file_temp = $_FILES['file']['tmp_name']; //data temp yang di upload
        $folder    = "file"; //folder tujuan
        move_uploaded_file($file_temp, "$folder/$nama_baru"); //fungsi upload
        mysqli_query($koneksi,"UPDATE tb_aturan  SET file='$nama_baru' WHERE n_dok='$data[n_dok]' ");
        } 
}


//pengecekan tipe harus pdf

?>