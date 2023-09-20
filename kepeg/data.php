<?php
include_once "../_header/kepeg.php";
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table Dokumen</h1>
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
                    <?php
include_once "../backend/kepegawaian/database.php";
?>
                </div>
            </div>
    </main>

    <?php
include_once "../_footer/_footer2.php";
?>