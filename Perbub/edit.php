<?php
include_once "../_header/kepeg.php";
?>
<script src="pdf.js"></script>
<script src="pdf.worker.js"></script>
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
                                <?php
$id = mysqli_real_escape_string($koneksi, $_GET['id']);
$query = mysqli_query($koneksi, "SELECT * FROM tb_perbup
        WHERE id_perbup='$id' ");
$data = mysqli_fetch_array($query);
?>
                                <div class="row g-2">
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="hidden" name="id" value="<?=($data['id_perbup'])?>">
                                            <input type="text" class="form-control" name="nama" id="floatingInputGrid"
                                                value="<?=($data['nama'])?>" placeholder="nama" required readonly>
                                            <label for="floatingInputGrid">nama</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="date" class="form-control" name="tahun" id="floatingInputGrid"
                                                value="<?=($data['tahun'])?>" placeholder="Tahun" required>
                                            <label for="floatingInputGrid">Tahun</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="subag" id="floatingInputGrid"
                                                placeholder="nomor" value="<?=($data['subag'])?>" required readonly>
                                            <label for="floatingSelectGrid">Sub. Bagian</label>
                                        </div>
                                    </div>

                                    <div class="row g-2">
                                        <div class="col-md-4 mt-4">
                                            <div class="form-floating">
                                                <input type="file" id="pdf-file" value="<?php echo $data['file']; ?>"
                                                    name="file" accept="application/pdf">
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-md-4 mt-4">
                                                <div class="form-floating">
                                                    <embed src="file/<?php echo $data['file']; ?>" name="id_2"
                                                        type="application/pdf" width="250" height="250">
                                                </div>
                                            </div>

                                            <div class="col-md-1 mt-1">
                                                <button class="w-100 btn btn-primary btn-xs"
                                                    onclick="return confirm('File sudah benar ?')" type="submit"
                                                    name="edit"><i class="fa fa-check-circle fa-lg"
                                                        aria-hidden="true"></i>
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
include_once "../_footer/_footer2.php";
?>