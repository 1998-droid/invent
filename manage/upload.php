<?php
    include_once "../_header.php";
?>
<script src="pdf.js"></script>
<script src="pdf.worker.js"></script>
<div id="layoutSidenav_content">
<main>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Upload File</h3></div>
                <div class="card-body">
<form action="pro.php" method="post" enctype="multipart/form-data">
    <div class="row g-2">
    <div class="col-md-4">
        <div class="form-floating">
        <input type="text" class="form-control" name="n_dok" id="floatingInputGrid" placeholder="nama" required>
        <label for="floatingInputGrid">nama</label>
    </div>
    </div>
    <div class="col-md-4">
        <div class="form-floating">
        <input type="text" class="form-control" name="subag" id="floatingInputGrid" placeholder="nomor"  value="<?=($_SESSION['subag'])?>" required readonly>
        <label for="floatingSelectGrid">Sub. Bagian</label>
        </div>
    </div>
    
    <div class="row g-2">
    <div class="col-md-4 mt-4">
        <div class="form-floating">
        <input type="file" id="pdf-file" name="file" accept="application/pdf" required>
    </div>
    </div>
    
    <div class="col-md-1 mt-1">
    <button class="w-100 btn btn-primary btn-xs"  type="submit" name="simpan"><i class="fa fa-check-circle fa-lg" aria-hidden="true"></i>
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