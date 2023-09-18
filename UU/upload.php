<?php
include_once "../_header/kepeg.php";
?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
function PreviewImage() {
    pdffile = document.getElementById("uploadPDF").files[0];
    pdffile_url = URL.createObjectURL(pdffile);
    $('#viewer').attr('src', pdffile_url);
}
</script>

<div id="layoutSidenav_content">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Upload File</h3>
                        </div>
                        <div class="card-body">
                            <form action="pro.php" method="post" enctype="multipart/form-data">
                                <div class="row g-2">
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="nama" id="floatingInputGrid"
                                                placeholder="Nama" required>
                                            <label for="floatingInputGrid">Nama Dokumen</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="date" class="form-control" name="tahun" id="floatingInputGrid"
                                                placeholder="Tahun" required>
                                            <label for="floatingInputGrid">Tahun</label>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="subag" id="floatingInputGrid"
                                                placeholder="nomor" value="<?=($_SESSION['subag'])?>" required readonly>
                                            <label for="floatingSelectGrid">Sub. Bagian</label>
                                        </div>
                                    </div>

                                    <div class="row g-2">
                                        <div class="col-md-4 mt-4">
                                            <div class="form-floating">
                                                <input type="file" id="uploadPDF" name="file" accept="application/pdf"
                                                    required>
                                            </div>
                                        </div>

                                        <div class="col-md-1 mt-1">
                                            <button class="w-100 btn btn-primary btn-xs"
                                                onclick="return confirm('File Sudah Benar ?')" type="submit"
                                                name="simpan"><i class="fa fa-check-circle fa-lg"
                                                    aria-hidden="true"></i>

                                        </div>

                                        <div class="col-md-1 mt-1">
                                            <button class="w-100 btn btn-primary btn-xs" type="button"
                                                onclick="PreviewImage();">
                                                <i class="fa fa-eye fa-lg" aria-hidden="true"></i>
                                            </button>
                                        </div>

                                        <div style="clear:both">
                                            <iframe id="viewer" frameborder="0" scrolling="no" width="400"
                                                height="400"></iframe>
                                        </div>
                                    </div>

                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php
include_once "../_footer/_footer2.php";
?>