<?php
    include_once "../_header2.php";
?>

<div id="layoutSidenav_content">
   <main>
       <div class="container-fluid px-4">
           <h1 class="mt-4">Table Dokumen Manajemen</h1>
           <ol class="breadcrumb mb-4">
           </ol>
           <div class="card mb-4">
               <div class="card-body">
                    <!-- DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the -->
                    <!-- <a target="_blank" href="https://datatables.net/">official DataTables documentation</a> -->
                </div>
                </div>
                    <div class="card mb-4">
                    <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Example
                        </div>
                            <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless" id="datatablesSimple" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Dokumen</th>
                                            <th>Subag</th>
                                            <th>File</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $sql = mysqli_query($koneksi, "SELECT * FROM tb_dok") 
                                    or die (mysqli_error($koneksi));
                                    while($data = mysqli_fetch_array($sql)){
                                    ?>
                                    
                                        <tr>
                                        <td><?php echo $data['n_dok']; ?></td>
                                            <td><?php echo $data['subag']; ?></td>
                                            <td><?php echo $data['file']; ?></td>
                                            <td><a href="preview.php?id=<?php echo $data['id_dok'];?>" class="btn btn-primary btn-sm" ><i class="fa fa-info fa-fw" aria-hidden="true"></i></a>
                                            <a href="hps.php?id=<?php echo $data['id_dok'];?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger btn-sm" ><i class="fa fa-trash fa-fw" aria-hidden="true"></i></a>
                                            <a href="unduh.php?file=<?php echo $data['file'];?>" class="btn btn-warning btn-sm" ><i class="fa fa-cloud-download fa-fw" aria-hidden="true"></i></a>
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
                        </div>
                        </div>
                </main>
                
<?php
    include_once "../_footer2.php";
?>