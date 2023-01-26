<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?php echo env('APP_URL') . '?page=dashboard' ?>"><?php echo env('APP_NAME') ?> </a>
        </div>



        <ul class="sidebar-menu">


            <li class="dropdown">
                <a href="<?php echo env('APP_URL') . '?page=dashboard' ?>">
                    <i class="fas fa-fire"></i>
                    <span>Dashboard</span>
                </a>

            </li>

            <li class="menu-header">Menu / Item</li>
            <li class="dropdown">
                <a href="<?php echo env('APP_URL') . '?page=presence' ?>">
                    <i class="fas fa-columns"></i>
                    <span>Absensi</span>
                </a>

            </li>

            <li class="dropdown">
                <a href="<?php echo env('APP_URL') . '?page=dashboard' ?>">
                    <i class="fas fa-columns"></i>
                    <span>Cuti</span>
                </a>

            </li>

            <li class="dropdown">
                <a href="<?php echo env('APP_URL') . '?page=dashboard' ?>">
                    <i class="fas fa-fire"></i>
                    <span>Laporan</span>
                </a>

            </li>

            <li class="menu-header">Akun</li>
            <li class="dropdown">
                <a href="<?php echo env('APP_URL') . '?page=dashboard' ?>" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-user"></i> <span>Pegawai</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo env('APP_URL') . '?page=dashboard' ?>">Pegawai</a></li>
                    <li><a class="nav-link" href="<?php echo env('APP_URL') . '?page=dashboard' ?>">Akun</a></li>
                    <li><a class="nav-link" href="<?php echo env('APP_URL') . '?page=dashboard' ?>">Jabatan</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo env('APP_URL') . '?page=logout' ?>" class=" nav-link has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> <span>Logout</span>
                </a>
            </li>

        </ul>

    </aside>
</div>