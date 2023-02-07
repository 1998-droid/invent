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
</tr>
<?php
}
?>