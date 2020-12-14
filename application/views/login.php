<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>lte/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url(); ?>lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>lte/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>Reklame</b>App</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Login</p>
                <?= $this->session->flashdata('pesan'); ?>

                <form action="<?= base_url('auth/login'); ?>" method="post">

                    <label for="email">Email</label>
                    <input class="form-control" type="text" name="email" id="email">
                    <?= form_error('email', '<small class="text-sm text-danger mt-2 mb-3" role="alert">', '</small>'); ?>
                    <br>
                    <label for="password" class="mt-1">Password</label>
                    <input class="form-control" type="text" name="password" id="password">
                    <?= form_error('password', '<small class="text-sm text-danger mt-2 mb-2" role="alert">', '</small>'); ?>
                    <br>
                    <div class="row col-3 mx-auto">
                        <button type="submit" class="btn btn-primary mb-1 mt-2" name="login">Login</button></div>
                </form>

                <!--     <p class="mb-1">
                    <a href="forgot-password.html">I forgot my password</a>
                </p> -->
                <p class="mb-0" style="text-align: center;">
                    <a href="<?= base_url('auth/regis'); ?>" class="text-center mt-3">Bila belum memiliki akun, klik untuk daftar</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= base_url(); ?>lte/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url(); ?>lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url(); ?>lte/dist/js/adminlte.min.js"></script>

</body>

</html>