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
    <td><a href="../peren/unduh.php?file=<?php echo $data['file']; ?>" class="btn btn-warning btn-sm"
            data-toggle="tooltip" data-placement="top" title="Unduh"><i class="fa fa-cloud-download fa-fw"
                aria-hidden="true"></i></a>
    </td>
</tr>
<?php
}
?>