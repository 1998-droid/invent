<?php
include_once "../_header2.php";
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table THDSK</h1>
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
                    <!-- <?php include_once "data/peren.php";?> -->
                </div>
            </div>
    </main>
    <script>
    $(function() {

        $('.table').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "ajax/ajax_kontak.php?action=table_data",
                "dataType": "json",
                "type": "POST"
            },
            "columns": [{
                    "data": "no"
                },
                {
                    "data": "nama"
                },
                {
                    "data": "no_hp"
                },
                {
                    "data": "aksi"
                },
            ]

        });
    });
    </script>

    <?php
include_once "../_footer3.php";
?>