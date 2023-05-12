<!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div >
                    <i class="fa fa-map" aria-hidden="true"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SIG Peternakan</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <!--<li class="nav-item <?php /*if ((isset($_GET['halaman']) && $_GET['halaman'] == 'dashboard') || isset($_GET['halaman']) == false) :*/?> active <?php /*endif;*/?>">
                <a class="nav-link" href="index.php?halaman=dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>-->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?php if ((isset($_GET['halaman']) && $_GET['halaman'] == 'beranda') || isset($_GET['halaman']) == false) :?> active <?php endif;?>">
                <a class="nav-link" href="index.php?halaman=beranda">
                    <span>Beranda</span>
                </a>
            </li>

            <!-- nav untuk non admin -->
            <li class="nav-item <?php if ((isset($_GET['halaman']) && $_GET['halaman'] == 'peternakan') || isset($_GET['halaman']) == false) :?> active <?php endif;?>">
                <a class="nav-link" href="peternakan.php?halaman=peternakan">
                    <span>Peternakan</span>
                </a>
            </li>

            <li class="nav-item <?php if ((isset($_GET['halaman']) && $_GET['halaman'] == 'peternakan') || isset($_GET['halaman']) == false) :?> active <?php endif;?>">
                <a class="nav-link" href="grafis.php?halaman=peternakan">
                    <span>Peternakan</span>
                </a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->