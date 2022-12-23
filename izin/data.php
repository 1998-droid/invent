<?php
    include_once "../_header.php";
?>

<div id="layoutSidenav_content">
   <main>
       <div class="container-fluid px-4">
           <h1 class="mt-4">Tables</h1>
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
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $sql = mysqli_query($koneksi, "SELECT *, DATE_ADD(tgl_masuk, INTERVAL 5 year) 
                                    as jatuh_tempo, DATEDIFF(DATE_ADD(tgl_masuk, INTERVAL 5 year), CURRENT_DATE())  FROM tb_izin");
                                    while($data = mysqli_fetch_array($sql)){
                                    ?>
                                    
                                        <tr>
                                        <td><?php echo $data['n_ijin']; ?></td>
                                            <td><?php echo $data['tgl_masuk']; ?></td>
                                            <td><?php echo $data['jatuh_tempo']; ?></td>
                                            <td><a href="preview.php?id=<?php echo $data['id_izin'];?>" class="btn btn-primary btn-sm" ><i class="fa fa-info fa-fw" aria-hidden="true"></i></a>
                                            <a href="edit.php?id=<?php echo $data['id_izin'];?>" class="btn btn-info btn-sm" ><i class="fa-solid fa-pen-to-square" aria-hidden="true"></i></a>
                                            <a href="hps.php?id=<?php echo $data['id_izin'];?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger btn-sm" ><i class="fa fa-trash fa-fw" aria-hidden="true"></i></a>
                                            
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
    include_once "../_footer.php";
?>