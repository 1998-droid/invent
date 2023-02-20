<?php
include_once "../_header/kepeg.php";

?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="col-lg-12">

                <?php
$id = mysqli_real_escape_string($koneksi, $_GET['id']);
$query = mysqli_query($koneksi, "SELECT a.id_thdsk, a.nama, a.nik, a.file FROM tb_thdsk a
    WHERE id_thdsk='$id' ");
$data = mysqli_fetch_array($query);

?>
                <h1>Judul Document: <?php echo $data['nama']; ?></h1>
                <hr>
                <b>Nama:</b> <?php echo $data['nama']; ?>| | <a href="javascript:history.go(-1)"><B>KEMBALI</B></a>
                <hr>
                <div class="box">
                    <div class="container-fluid px-7">
                        <div class="col-lg-12">
                            <embed src="file/<?php echo $data['file']; ?>" type="application/pdf" width="700"
                                height="700">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php
include_once "../_footer/_footer2.php";
?>