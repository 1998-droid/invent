<?php
    include_once "../_header.php";
    
?>
<div id="layoutSidenav_content">
<main>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit File</h3></div>
                <div class="card-body">
<form action="pro.php" method="post" enctype="multipart/form-data">
    <?php
        $id    = mysqli_real_escape_string($koneksi,$_GET['id']);
        $query = mysqli_query($koneksi,"SELECT * , file FROM tb_aturan
        WHERE id_aturan='$id' ");
        $data  = mysqli_fetch_array($query);
    ?>
    <div class="row g-2">
    <div class="col-md-4">
        <div class="form-floating">
        <input type="hidden" name="id" value="<?=($data['id_aturan'])?>">
        <input type="text" class="form-control" name="n_dok" id="floatingInputGrid" placeholder="nama dokumen" value="<?=($data['n_dok'])?>" required>
        <label for="floatingInputGrid">Nama Dokumen</label>
    </div>
    </div>
    <div class="col-md-4">
        <div class="form-floating">
        <input type="text" class="form-control" name="tahun" id="floatingInputGrid" placeholder="nama dokumen" value="<?=($data['tahun'])?>" required>
        <label for="floatingInputGrid">Tahun Dokumen</label>
    </div>
    </div>
    <div class="col-md-4">
        <div class="form-floating">
        <input type="text" class="form-control" name="tentang" id="floatingInputGrid" placeholder="tentang" value="<?=($data['tentang'])?>" required>
        <label for="floatingInputGrid">Tentang</label>
    </div>
    </div>
    <div class="col-md-4">
        <div class="form-floating">
        <input type="text" class="form-control" name="subag" id="floatingInputGrid" placeholder="nomor"  value="<?=($data['subag'])?>" required readonly>
        <label for="floatingSelectGrid">Sub. Bagian</label>
        </div>
    </div>
    
    <div class="row g-2">
    <div class="col-md-4 mt-4">
        <div class="form-floating">
        <input type="file" name="file" accept="application/pdf" value ="<?php ($data['file'])?>" required>
    </div>
    </div>
    <div class="row g-2">
    <div class="col-md-4 mt-4">
        <div class="form-floating">
        <embed src="file/<?php echo $data['file'];?>" name="id_2" type="application/pdf" width="400" height="400">
    </div>
    </div>
    
    <div class="col-md-1 mt-1">
    <button class="w-100 btn btn-primary btn-xs"  type="submit" name="edit"><i class="fa fa-check-circle fa-lg" aria-hidden="true"></i>
     </button>
     </div>
     
</form>

</div>

</div>
</div>
</div>
</div>
</main>

<?php
    include_once "../_footer.php";
?>