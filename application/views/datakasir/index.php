<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tabel Data kasir</title>

    <!-- Custom fonts for this template-->
    <link href="<?php base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?php base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>
<!-- Page Heading -->
<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Tabel Data Kasir</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">tabel data</h6>
                <a href="<?php base_url() ?>transksi/tambah_transaksi" class="btn btn-primary btn-sm float-right">tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <td>id transaksi</td>
                                <td>id user</td>
                                <td>type</td>
                                <td>status</td>
                                <td>tanggal</td>
                                <td>setting</td>


                            </tr>
                        </thead>
                        <tbody>
                        <tfoot>
                            <?php
                            $no = 1;
                            foreach ($transksi as $transksi) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <!-- <td><?= $transksi['id_transaksi'] ?></td> -->
                                    <td><?= $transksi['id_user'] ?></td>
                                    <!-- <td><?= $transksi['telepon'] ?></td> -->
                                    <td><?= $transksi['type'] ?></td>
                                    <td><?= $transksi['status'] ?></td>
                                    <td><?= $transksi['tanggal'] ?></td>
                                    <td>
                                        <a href="<?php echo base_url() ?>Kasir/proses_edit_datakasir/<?php echo $transksi['id_transaksi']; ?>" class=" budge badge-primary">edit</a>
                                        <a href="<?php echo base_url() ?>Kasir/proses_hapus_datakasir/<?php echo $transksi['id_transaksi']; ?>" class="budge badge-primary">hapus</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tfoot>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?php base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php base_url() ?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>