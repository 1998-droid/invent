<?php
$sql = mysqli_query($koneksi, "SELECT a.id_dok, a.n_dok, a.subag, a.file, a.tgl,
a.tentang, a.nomor FROM tb_dok a JOIN tb_user b ON a.subag=b.subag WHERE user='$_SESSION[username]' ")
or die(mysqli_error($koneksi));
while ($data = mysqli_fetch_array($sql)) {
    ?>

<tr>
    <td><?php echo $data['n_dok']; ?></td>
    <td><?php echo $data['tgl']; ?></td>
    <td><?php echo $data['nomor']; ?></td>
    <td><?php echo $data['tentang']; ?></td>
    <td><?php echo $data['subag']; ?></td>
    <td><?php echo $data['file']; ?></td>
    <td><a href="preview.php?id=<?php echo $data['id_dok']; ?>" class="btn btn-primary btn-sm"><i
                class="fa fa-info fa-fw" aria-hidden="true"></i></a>
        <a href="edit.php?id=<?php echo $data['id_dok']; ?>" class="btn btn-info btn-sm"><i
                class="fa-solid fa-pen-to-square" aria-hidden="true"></i></a>
        <a href="hps.php?id=<?php echo $data['id_dok']; ?>" onclick="return confirm('Yakin Hapus?')"
            class="btn btn-danger btn-sm"><i class="fa fa-trash fa-fw" aria-hidden="true"></i></a>
        <a href="unduh.php?file=<?php echo $data['file']; ?>" class="btn btn-warning btn-sm"><i
                class="fa fa-cloud-download fa-fw" aria-hidden="true"></i></a>
        <?php
}
?>