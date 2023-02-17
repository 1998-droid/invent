<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <?php
if ($_SESSION["role"] == "peren") {?>
            <a class="nav-link" href="../dashboard">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            <a class="nav-link" href="../manage/data_all.php">
                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                Data All
            </a>
            <?php } else { ?>
            <a class="nav-link" href="../manage/data.php">
                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                Data
            </a>
            <div class="sb-sidenav-menu-heading">Interface</div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Peraturan RS
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="../rules"><i class="fa fa-book fa-fw"></i>&nbsp; Perdir</a>
                    <a class="nav-link" href="layout-sidenav-light.html"><i class="fa fa-book fa-fw"></i>&nbsp;
                        Perbup</a>
                </nav>
                <?php }
?>
            </div>
        </div>
    </div>

    <div class="sb-sidenav-footer">
        <div class="small">Logged in as</div>
        <b><?=($_SESSION['role'])?></b>
    </div>
</nav>