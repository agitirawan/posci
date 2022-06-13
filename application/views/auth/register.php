<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>assets/admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
    <br> <br>

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <?=
                            form_open('auth/proses_register');
                            ?>
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="email" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control" name="password" id="pw" placeholder="password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" name="telepon" id="telepon" placeholder="telepon" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="alamat" class="form-control" name="alamat" id="alamat" placeholder="alamat" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="nama" class="form-control" name="nama" id="nama" placeholder="nama" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Register</button>
                            </form>
                            <?= form_close();
                            ?>
                            <hr>
                            <div class="social-auth-links text-center">
                                <p class="mb-0">
                                    Already Have an Account? <a href="<?= base_url('auth/login') ?>" class="small">Login Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url() ?>assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url() ?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url() ?>assets/admin/js/sb-admin-2.min.js"></script>

</body>

</html>