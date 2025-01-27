<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('template') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>template/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-white">

<div class="row justify-content-center">


        <!-- Outer Row -->
        <div class="row justify-content-center align-items-center" style="min-height: 100vh; background-color: #f8f9fc;">
            <div class="col-xl-12 col-lg-14 col-md-10">
                <div class="card o-hidden shadow-lg" style="border: 2px solid black; background-color: white;">
                <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-2 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                <img src="<?= base_url('template/images/logo.png'); ?>" alt="Logo" class="mb-4" style="width: 100px;">
                                <h1 class="h4 text-gray-900 mb-4">Sistem Ujian Online</h1>
                                <h2 class="h5 text-gray-900 mb-4">Halaman Login</h2>
                                    </div>
                                    <form action="<?= base_url('autentikasi'); ?>" method="POST">
                                        <?php if (session()->getFlashdata('error')) : ?>
                                            <div class="alert alert-danger">
                                                <?= session()->getFlashdata('error') ?>
                                            </div>
                                    <?php endif; ?>
                                        <div class="form-group d-flex align-items-center">
                                            <label for="exampleInputUsername" class="mr-3">Username:</label>
                                            <input type="username" class="form-control form-control-user"
                                                id="exampleInputUsername" aria-describedby="emailHelp"
                                                value="<?php echo session()->getFlashdata('username'); ?>"
                                                placeholder="Masukan Username" name='username' required>

                                        </div>
                                        <div class="form-group d-flex align-items-center">
                                        <label for="exampleInputPassword" class="mr-3">Password:</label>
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" name="password" placeholder="Masukan Password" required>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary btn-user">Login</button>
                                        </div>

                                        <hr>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('template') ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('template') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('template') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('template') ?>/js/sb-admin-2.min.js"></script>

</body>

</html>