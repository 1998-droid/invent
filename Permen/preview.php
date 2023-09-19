<?php
include_once "../_header/kepeg.php";

?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="col-lg-12">

                <?php
$id = mysqli_real_escape_string($koneksi, $_GET['id']);
$query = mysqli_query($koneksi, "SELECT a.id_permen , a.nama, a.tahun, a.tgl_upload, a.subag, a.file FROM uu a
    WHERE id_permen='$id' ");
$data = mysqli_fetch_array($query);

?>

                <h1>Judul Document: <?php echo $data['nama']; ?></h1>
                <hr>
                <b>Nama:</b> <?php echo $data['nama']; ?>| | <a href="javascript:history.go(-1)"><B>KEMBALI</B></a>
                <b>Nomor:</b> <?php echo $data['subag']; ?>
                <b>Jenis Dokumen:</b>
                <hr>

                <embed src="file/<?php echo $data['file']; ?>" type="application/pdf" width="1000" height="600">

            </div>
        </div>
    </main>

    <?php
include_once "../_footer/_footer2.php";
?>