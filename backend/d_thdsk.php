<?php
$sql = mysqli_query($koneksi, "SELECT * FROM tb_thdsk")
or die(mysqli_error($koneksi));
while ($data = mysqli_fetch_array($sql)) {
    $tgl = $data['tgl_lahir'];
    $umur = new DateTime($tgl);
    $sekarang = new DateTime();
    $usia = $sekarang->diff($umur);
    ?>

<tr>
    <td><?php echo $data['nama']; ?></td>
    <td><?php echo $data['nik']; ?></td>
    <td><?php echo date('d M Y', strtotime($data['tgl_lahir'])); ?></td>
    <td><?php echo $usia->y . " Tahun"; ?></td>
    <td><?php echo $data['file']; ?></td>
    <td><a href="preview.php?id=<?php echo $data['id_thdsk']; ?>" class="btn btn-primary btn-sm" data-toggle="tooltip"
            data-placement="top" title="Detail"><i class="fa-solid fa-circle-info" aria-hidden="true"></i></a>
        <a href="edit.php?id=<?php echo $data['id_thdsk']; ?>" class="btn btn-info btn-sm" data-toggle="tooltip"
            data-placement="top" title="Edit"><i class="fa-solid fa-pen-to-square" aria-hidden="true"></i></a>
        <a href="hps.php?id=<?php echo $data['id_thdsk']; ?>" onclick="return confirm('Yakin Hapus?')"
            class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Hapus"><i
                class="fa fa-trash fa-fw" aria-hidden="true"></i></a>
        <a href="unduh.php?file=<?php echo $data['file']; ?>" class="btn btn-warning btn-sm"><i
                class="fa fa-cloud-download fa-fw" aria-hidden="true" data-toggle="tooltip" data-placement="top"
                title="Unduh"></i></a>
        <?php
}
?>