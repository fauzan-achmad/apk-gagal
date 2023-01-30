<div class="row">

    <div class="col-12">

        <div class="card card-success">
            <div class="card-header">
                <h4>Dashboard</h4>
            </div>
            <div class="card-body">
                <p>Selamat datang kembali,<?php echo $_SESSION['user']['name'] ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-4 col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Absensi</h4>
                        <div class="card-header-action">
                            <a href="<?php echo env('APP_URL') . '?page=presence' ?>" class="btn btn-primary">
                                View All
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-4 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-info">
                                <i class="fas bi bi-calendar3"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Total Absensi</h4>
                                </div>
                                <div class="card-body">
                                    10
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-4 col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Cuti</h4>
                        <div class="card-header-action">
                            <a href="#" class="btn btn-primary">
                                View All
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-4 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                                <i class="fas bi bi-calendar-minus-fill"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Total Cuti</h4>
                                </div>
                                <div class="card-body">
                                    42
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-4 col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Reports</h4>
                        <div class="card-header-action">
                            <a href="#" class="btn btn-primary">
                                View All
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-4 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-warning">
                                <i class="far fa-file"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Laporan</h4>
                                </div>
                                <div class="card-body">
                                    65
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>