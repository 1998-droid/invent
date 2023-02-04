<div class="table-responsive">
     <table class="table table-borderless" id="datatablesSimple" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Nama Pegawai</th>
                <th>Nika</th>
                <th>Tgl. Lahir</th>
                <th>Umur</th>
                <th>File</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
$sql = mysqli_query($koneksi, "SELECT * FROM tb_user")
or die(mysqli_error($koneksi));
while ($data = mysqli_fetch_array($sql)) {

    ?>

        <tr>
        <td><?php echo $data['user']; ?></td>
        <td><?php echo $data['pass']; ?></td>
        <td><?php echo $data['n_user']; ?></td>
        <td><?php echo $data['role']; ?></td>
        <td><?php echo $data['status']; ?></td>
        <td><?php echo $data['subag']; ?></td>
            <td><a href="preview.php?id=<?php echo $data['id_user']; ?>" class="btn btn-primary btn-sm" ><i class="fa fa-info fa-fw" aria-hidden="true"></i></a>
            <a href="hps.php?id=<?php echo $data['id_user']; ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger btn-sm" ><i class="fa fa-trash fa-fw" aria-hidden="true"></i></a>
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