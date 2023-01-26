<?php

include 'config/connection.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: berhasil_login.php");
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: berhasil_login.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?php echo asset('/assets/modules/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo asset('/assets/modules/fontawesome/css/all.min.css') ?>">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo asset('/assets/css/style.min.css') ?>">
    <link rel="stylesheet" href="<?php echo asset('/assets/css/components.min.css') ?>">
    <link rel="stylesheet" href="<?php echo asset('/assets/css/custom.css') ?>">

    <title>Manajement Kepegawaian</title>
</head>

<body>
    <div class="    " role="alert">
        <?php echo $_SESSION['error'] ?>
    </div>
    <div id="app">

        <div class="page-loader">
            <div class="page-loader-wrapper">
                <img class="spinner" src="<?= asset('/assets/img/spinner-primary.svg') ?>" alt="Spinner">
            </div>
        </div>

        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 mt-5">

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Login</h4>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="" class="needs-validation" novalidate="">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email" tabindex="1" value="<?php echo $email; ?>" required autofocus>
                                        <div class="invalid-feedback">
                                            Please fill in your email
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                            <div class="float-right">
                                                <a href="auth-forgot-password.html" class="text-small">
                                                    Forgot Password?
                                                </a>
                                            </div>
                                        </div>
                                        <input id="password" type="password" class="form-control" name="password" tabindex="2" value="<?php echo $_POST['password']; ?>" required>
                                        <div class="invalid-feedback">
                                            please fill in your password
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                                            <label class="custom-control-label" for="remember-me">Remember Me</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Login
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="simple-footer">
                    Copyright &copy; Fauzan Achmad
                </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="<?php echo asset('/assets/modules/jquery.min.js') ?>"></script>
    <script src="<?php echo asset('/assets/modules/popper.js') ?>"></script>
    <script src="<?php echo asset('/assets/modules/tooltip.js') ?>"></script>
    <script src="<?php echo asset('/assets/modules/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo asset('/assets/modules/nicescroll/jquery.nicescroll.min.js') ?>"></script>
    <script src="<?php echo asset('/assets/modules/moment.min.js') ?>"></script>
    <script src="<?php echo asset('/assets/js/stisla.js') ?>"></script>

    <!-- Template JS File -->
    <script src="<?php echo asset('/assets/js/scripts.js') ?>"></script>
    <script src="<?php echo asset('/assets/js/custom.js') ?>"></script>

</body>

</html>