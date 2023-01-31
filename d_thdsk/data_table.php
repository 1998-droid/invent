<div class="table-responsive">
     <table class="table table-borderless" id="datatablesSimple" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Nama Pegawai</th>
                <th>NIkA</th>
                <th>Tgl. Lahir</th>
                <th>File</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
$sql = mysqli_query($koneksi, "SELECT *, date('Y-m-d', strtotime('tgl_lahir')) as umur FROM tb_thdsk")
or die(mysqli_error($koneksi));
while ($data = mysqli_fetch_array($sql)) {
    ?>

        <tr>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['nik']; ?></td>
        <td><?php echo $data['tgl_lahir']; ?></td>
        <td><?php echo $data['umur']; ?></td>
        <td><?php echo $data['file']; ?></td>
            <td><a href="preview.php?id=<?php echo $data['id_thdsk']; ?>" class="btn btn-primary btn-sm" ><i class="fa fa-info fa-fw" aria-hidden="true"></i></a>
            <a href="hps.php?id=<?php echo $data['id_thdsk']; ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger btn-sm" ><i class="fa fa-trash fa-fw" aria-hidden="true"></i></a>
            <a href="unduh.php?file=<?php echo $data['file']; ?>" class="btn btn-warning btn-sm" ><i class="fa fa-cloud-download fa-fw" aria-hidden="true"></i></a>
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