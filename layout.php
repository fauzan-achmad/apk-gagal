<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?php echo asset('/assets/modules/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo asset('/assets/modules/fontawesome/css/all.min.css') ?>">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?php echo asset('/assets/modules/bootstrap-daterangepicker/daterangepicker.css') ?>">
    <link rel="stylesheet" href="<?php echo asset('/assets/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') ?>">
    <link rel="stylesheet" href="<?php echo asset('/assets/modules/select2/dist/css/select2.min.css') ?>">
    <link rel="stylesheet" href="<?php echo asset('/assets/modules/jquery-selectric/selectric.css') ?>">
    <link rel="stylesheet" href="<?php echo asset('/assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css') ?>">
    <link rel="stylesheet" href="<?php echo asset('/assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') ?>">

    <!-- CSS ICONS -->
    <link rel="stylesheet" href="<?php echo asset('/assets/modules/ionicons/css/ionicons.min.css') ?>">
    <link rel="stylesheet" href="<?php echo asset('/assets/modules/bootstrap-icons/font/bootstrap-icons.css') ?>">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo asset('/assets/css/style.min.css') ?>">
    <link rel="stylesheet" href="<?php echo asset('/assets/css/components.min.css') ?>">
    <link rel="stylesheet" href="<?php echo asset('/assets/css/custom.css') ?>">

    <title>Manajement Kepegawaian</title>
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">

            <div class="page-loader">
                <div class="page-loader-wrapper">
                    <img class="spinner" src="<?= asset('/assets/img/spinner-primary.svg') ?>" alt="Spinner">
                </div>
            </div>

            <div class="navbar-bg"></div>

            <!-- Topbar -->

            <?php require __DIR__ . '/components/auth/topbar.php' ?>

            <!-- Sidebar -->
            <?php require __DIR__ . '/components/auth/sidebar.php' ?>

            <!-- Main Content -->
            <div class="main-content">

                <section class="section">

                    <?php

                    if (file_exists(__DIR__ . '/views/' . $page . '.php')) {

                        require_once __DIR__ . '/views/' . $page . '.php';
                    } else {

                        require_once __DIR__ . '/views/404.php';
                    }

                    ?>

                </section>

            </div>

            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; <?php echo date('Y') ?>
                    <div class="bullet"></div> <a href="#" target="_blank">Fauzan Achmad</a>
                </div>
                <div class="footer-right">

                </div>
            </footer>


            <!-- General JS Scripts -->
            <script src="<?php echo asset('/assets/modules/jquery.min.js') ?>"></script>
            <script src="<?php echo asset('/assets/modules/popper.js') ?>"></script>
            <script src="<?php echo asset('/assets/modules/tooltip.js') ?>"></script>
            <script src="<?php echo asset('/assets/modules/bootstrap/js/bootstrap.min.js') ?>"></script>
            <script src="<?php echo asset('/assets/modules/nicescroll/jquery.nicescroll.min.js') ?>"></script>
            <script src="<?php echo asset('/assets/modules/moment.min.js') ?>"></script>
            <script src="<?php echo asset('/assets/js/stisla.js') ?>"></script>

            <!-- JS Libraies -->
            <script src="<?php echo asset('/assets/modules/cleave-js/dist/cleave.min.js') ?>"></script>
            <script src="<?php echo asset('/assets/modules/cleave-js/dist/addons/cleave-phone.us.js') ?>"></script>
            <script src="<?php echo asset('/assets/modules/jquery-pwstrength/jquery.pwstrength.min.js') ?>"></script>
            <script src="<?php echo asset('/assets/modules/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>
            <script src="<?php echo asset('/assets/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') ?>"></script>
            <script src="<?php echo asset('/assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js') ?>"></script>
            <script src="<?php echo asset('/assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') ?>"></script>
            <script src="<?php echo asset('/assets/modules/select2/dist/js/select2.full.min.js') ?>"></script>
            <script src="<?php echo asset('/assets/modules/jquery-selectric/jquery.selectric.min.js') ?>"></script>

            <!-- Template JS File -->
            <script src="<?php echo asset('/assets/js/scripts.js') ?>"></script>
            <script src="<?php echo asset('/assets/js/custom.js') ?>"></script>

</body>

</html>