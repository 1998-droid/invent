<?php
include_once "../_header/_header.php";
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
                        <?php
include_once "data_table.php";
?>
                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                            <a class="btn btn-success" href="upload.php"><i class="fa fa-cloud-upload fa-fw"
                                    aria-hidden="true"></i></a>
                        </div>


                    </div>
                </div>
            </div>
    </main>

    <?php
include_once "../_footer/_footer.php";
?>