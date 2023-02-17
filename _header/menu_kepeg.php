<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>

            <a class="nav-link" href="#">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            <?php
if ($_SESSION["role"] == "kepeg") {?>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Data Utama
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="../kepeg"><i class="fa-solid fa-file"></i>&nbsp; Data
                        Kepegawaian</a>
                    <a class="nav-link" href="../d_thdsk"><i class="fa-solid fa-file"></i>&nbsp; Data
                        THDSK</a>
                    <a class="nav-link" href="layout-sidenav-light.html"><i class="fa-solid fa-file"></i>&nbsp; Data
                        STR</a>
                </nav>
            </div>
            <?php } elseif ($_SESSION["role"] == "peren") {?>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Data Utama
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="../peren"><i class="fa-solid fa-file"></i>&nbsp; Data
                        Perencanaan</a>
                </nav>
            </div>
            <?php }?>
            <div class="sb-sidenav-menu-heading">Interface</div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#rule"
                aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Peraturan RS
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="rule" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="../rules"><i class="fa fa-book fa-fw"></i>&nbsp; Perdir</a>
                    <a class="nav-link" href="layout-sidenav-light.html"><i class="fa fa-book fa-fw"></i>&nbsp;
                        Perbup</a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#semuadata"
                aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Semua Data
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="semuadata" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="../all_data/d_thdsk.php"><i class="fa-solid fa-person"></i>&nbsp;
                        THDSK</a>
                    <a class="nav-link" href="../all_data/kepeg.php"><i class="fa-solid fa-building"></i>&nbsp;
                        Kepegawaian</a>
                    <a class="nav-link" href="../all_data/management.php"><i class="fa-solid fa-street-view"></i>&nbsp;
                        Managemen</a>
                    <a class="nav-link" href="../all_data/peren.php"><i
                            class="fa-solid fa-ruler"></i>&nbsp;Perencanaan</a>
                </nav>
            </div>

            <!-- <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Peraturan RS
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="../rules"><i class="fa fa-book fa-fw"></i>&nbsp; Perdir</a>
                                    <a class="nav-link" href="layout-sidenav-light.html"><i class="fa fa-book fa-fw"></i>&nbsp; Perbup</a>
                                </nav>
                            </div> -->
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as</div>
        <b><?=($_SESSION['role'])?></b>
    </div>
</nav>