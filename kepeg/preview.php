<?php
    include_once "../_header.php";

?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
<div class="col-lg-12">
    
    <?php
    $id    = mysqli_real_escape_string($koneksi,$_GET['id']);
    $query = mysqli_query($koneksi,"SELECT a.id_dok,a.n_dok, a.subag, a.file FROM tb_dok a 
    WHERE id_dok='$id' ");
    $data  = mysqli_fetch_array($query);


    ?>
            
            <h1>Judul Document: <?php echo $data['n_dok'];?></h1>
<hr>
<b>Nama:</b> <?php echo $data['n_dok'];?>| | <a href="javascript:history.go(-1)"><B>KEMBALI</B></a>
<b>Nomor:</b> <?php echo $data['subag'];?>
<hr>
            
            <embed src="file/<?php echo $data['file'];?>" type="application/pdf" width="1000" height="600">

    </div>
    </div>
    </main>

<?php
    include_once "../_footer.php";
?>