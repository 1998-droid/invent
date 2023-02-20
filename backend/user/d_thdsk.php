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
    <td><a href="../d_thdsk/unduh.php?file=<?php echo $data['file']; ?>" class="btn btn-warning btn-sm"
            data-toggle="tooltip" data-placement="top" title="Unduh"><i class="fa fa-cloud-download fa-fw"
                aria-hidden="true"></i></a>
    </td>
    <?php
}
?>