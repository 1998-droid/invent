<?php
$sql = mysqli_query($koneksi, "SELECT * FROM tb_peren")
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