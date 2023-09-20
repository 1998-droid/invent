<div class="table-responsive">
    <table class="table table-borderless" id="datatablesSimple" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Nama Dokumen</th>
                <th>Tahun</th>
                <th>Subag</th>
                <th>Tgl Upload</th>
                <th>File</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
$sql = mysqli_query($koneksi, "SELECT a.id_perda , a.nama, a.tahun, a.tgl_upload, a.subag, a.file FROM tb_perda a JOIN tb_user b ON a.subag=b.subag WHERE user='$_SESSION[username]' ")
or die(mysqli_error($koneksi));
while ($data = mysqli_fetch_array($sql)) {
    ?>

            <tr>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['tahun']; ?></td>
                <td><?php echo $data['subag']; ?></td>
                <td><?php echo date('Y-m-d', strtotime($data['tgl_upload'])); ?></td>
                <td><?php echo $data['file']; ?></td>
                <td><a href="preview.php?id=<?php echo $data['id_perda']; ?>" class="btn btn-primary btn-sm"
                        data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa-solid fa-circle-info"
                            aria-hidden="true"></i></a>
                    <a href="edit.php?id=<?php echo $data['id_perda']; ?>" class="btn btn-info btn-sm"
                        data-toggle="tooltip" data-placement="top" title="Edit dokumen"><i
                            class="fa-solid fa-pen-to-square" aria-hidden="true"></i></a>
                    <a href="hps.php?id=<?php echo $data['id_perda']; ?>" onclick="return confirm('Yakin Hapus?')"
                        class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Hapus"><i
                            class="fa fa-trash fa-fw" aria-hidden="true"></i></a>
                    <a href="unduh.php?file=<?php echo $data['file']; ?>" class="btn btn-warning btn-sm"><i
                            class="fa fa-cloud-download fa-fw" aria-hidden="true" data-toggle="tooltip"
                            data-placement="top" title="Unduh"></i></a>
                    <?php
}
?>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
        <a class="btn btn-success" href="upload.php"><i class="fa fa-cloud-upload fa-fw" aria-hidden="true"></i></a>
    </div>
</div>