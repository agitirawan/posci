<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan Penjualan</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/adminlte/plugins/sweetalert2/sweetalert2.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/adminlte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') ?>">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col">
                            <h1 class="m-0 text-dark">laporan masuk</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <table class="table w-100 table-bordered table-hover" id="laporanmasuk">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Nama Makanan dan Minuman</th>
                                        <th>Total Bayar</th>
                                        <th>Jumlah Uang</th>
                                        <th>jumlah total</th>
                                        <th>Pelanggan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="modal fade" id="modal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Add Data</h5>
                                        <button class="close" data-dismiss="modal">
                                            <span>&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="form">
                                            <input type="hidden" name="id">
                                            <div class="form-group">
                                                <label>Tanggal </label>
                                                <input type="date" class="form-control" placeholder="Tanggal" name="Tanggal" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Makanan Dan Minuman</label>
                                                <select name="jumlah" class="form-control">
                                                    <input type="text" class="form-control" placeholder="nama_makanan_dan_minuman" name="nama_makanan_dan_minuman" required>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>total_bayar</label>
                                                <input type="number" class="form-control" placeholder="total_bayar" name="total_bayar" required>
                                            </div>
                                            <div class="form-group">
                                                <label>jumlah uang</label>
                                                <input type="number" class="form-control" placeholder="jumalh_uang" name="jumlah_uang" required>
                                            </div>
                                            <div class="form-group">
                                                <label>jumlah total</label>
                                                <input type="number" class="form-control" placeholder="jumalh_total" name="jumlah_total" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Pelanggan</label>
                                                <input type="text" class="form-control" placeholder="pelanggan" name="pelangganj" required>
                                            </div>

                                            <button class="btn btn-success" type="submit">Add</button>
                                            <button class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


    </div>
    <!-- ./wrapper -->
    <script src="<?php echo base_url('assets/vendor/adminlte/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/adminlte/plugins/sweetalert2/sweetalert2.min.js') ?>"></script>
    <script>
    </script>
    <script src="<?php echo base_url('assets/js/laporanpen.min.js') ?>"></script>
</body>

</html>