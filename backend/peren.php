<?php
$sql = mysqli_query($koneksi, "SELECT a.id_peren , a.n_dok, a.subag, a.file, a.tahun,
a.tentang FROM tb_peren a JOIN tb_user b ON a.subag=b.subag WHERE user='$_SESSION[username]' ")
or die(mysqli_error($koneksi));
while ($data = mysqli_fetch_array($sql)) {
    ?>

<tr>
    <td><?php echo $data['n_dok']; ?></td>
    <td><?php echo date('Y', strtotime($data['tahun'])); ?></td>
    <td><?php echo $data['tentang']; ?></td>
    <td><?php echo $data['subag']; ?></td>
    <td><?php echo $data['file']; ?></td>
    <td><a href="preview.php?id=<?php echo $data['id_peren']; ?>" class="btn btn-primary btn-sm" data-toggle="tooltip"
            data-placement="top" title="Detail"><i class="fa-solid fa-circle-info" aria-hidden="true"></i></a>
        <a href="edit.php?id=<?php echo $data['id_peren']; ?>" class="btn btn-info btn-sm" data-toggle="tooltip"
            data-placement="top" title="Edit"><i class="fa-solid fa-pen-to-square" aria-hidden="true"></i></a>
        <a href="hps.php?id=<?php echo $data['id_peren']; ?>" onclick="return confirm('Yakin Hapus?')"
            class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Hapus"><i
                class="fa fa-trash fa-fw" aria-hidden="true"></i></a>
        <a href="unduh.php?file=<?php echo $data['file']; ?>" class="btn btn-warning btn-sm" data-toggle="tooltip"
            data-placement="top" title="Unduh"><i class="fa fa-cloud-download fa-fw" aria-hidden="true"></i></a>
</tr>
<?php
}
?>