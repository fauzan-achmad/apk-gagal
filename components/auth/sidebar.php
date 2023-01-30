<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?php echo env('APP_URL') . '?page=dashboard' ?>">
                <img src="<?php echo asset('/assets/img/management-employee.png') ?>" class="sidebar-logo" alt="Logo">
            </a>
        </div>

        <ul class="sidebar-menu mt-5">

            <li class="dropdown">
                <a href="<?php echo env('APP_URL') . '?page=dashboard' ?>">
                    <i class="fas fa-fire"></i>
                    <span>Dashboard</span>
                </a>

            </li>

            <li class="menu-header">Menu / Item</li>
            <li class="dropdown">
                <a href="<?php echo env('APP_URL') . '?page=presence' ?>">
                    <i class="fas bi bi-calendar3"></i>
                    <span>Absensi</span>
                </a>

            </li>

            <li class="dropdown">
                <a href="<?php echo env('APP_URL') . '?page=paid-leave' ?>">
                    <i class="fas bi bi-calendar-minus-fill"></i>
                    <span>Cuti</span>
                </a>

            </li>

            <li class="dropdown">
                <a href="<?php echo env('APP_URL') . '?page=dashboard' ?>" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-file"></i> <span>Reports</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo env('APP_URL') . '?page=employees' ?>">Report Daily</a></li>
                    <li><a class="nav-link" href="<?php echo env('APP_URL') . '?page=dashboard' ?>">Report Monthly</a></li>

                </ul>
            </li>

            <li class="menu-header">Akun</li>
            <li class="dropdown">
                <a href="<?php echo env('APP_URL') . '?page=dashboard' ?>" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-user"></i> <span>Pegawai</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo env('APP_URL') . '?page=employees' ?>">Pegawai</a></li>
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