<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href=<?php echo base_url() . "/aset/plugins/fontawesome-free/css/all.min.css"; ?>>
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href=<?php echo base_url() . "/aset/plugins/icheck-bootstrap/icheck-bootstrap.min.css"; ?>>
    <!-- Theme style -->
    <link rel="stylesheet" href=<?php echo base_url() . "/aset/dist/css/adminlte.min.css"; ?>>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Register akun baru simPT</p>

                <form action="../../pages" method="post">
                    <div class="input-group mb-3">
                        <input type="Nama Lengkap" class="form-control" placeholder="Nama Lengkap">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="Nomer Induk Mahasiswa" class="form-control" placeholder="Nomer Induk Mahasiswa">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="Password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="Retype Password" class="form-control" placeholder="Retype Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <p class="mb-0">
                                <a href="pages" class="text-center">sudah memiliki akun </a>
                            </p>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <!-- /.social-auth-links -->


            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src=<?php echo base_url() . "/aset/plugins/jquery/jquery.min.js"; ?>></script>
    <!-- Bootstrap 4 -->
    <script src=<?php echo base_url() . "/aset/plugins/bootstrap/js/bootstrap.bundle.min.js"; ?>></script>
    <!-- AdminLTE App -->
    <script src=<?php echo base_url() . "/aset/dist/js/adminlte.min.js"; ?>></script>
</body>

</html>