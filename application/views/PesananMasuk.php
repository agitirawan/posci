<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Orderan</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/adminlte/plugins/sweetalert2/sweetalert2.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/adminlte.min.css') ?>">
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
                            <h1 class="m-0 text-dark">PesananMasuk</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-success" data-toggle="modal" data-target="#modal" onclick="add()">Add</button>
                            <button class="btn btn-success" data-toggle="modal" data-target="#modal" onclick="add()">search</button>
                        </div>
                        <div class="card-body">
                            <table class="table w-100 table-bordered table-hover" id="pelanggan">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>jumlah</th>
                                        <th>Tanggal Pesanan</th>
                                        <th>Telepon</th>
                                        <th>Detail Pesanan</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

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
                            <label>Nama</label>
                            <input type="text" class="form-control" placeholder="Nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label>jumlah</label>
                            <select name="jumlah" class="form-control">
                                <input type="number" class="form-control" placeholder="jumlah" name="jumlah" required>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" placeholder="Alamat" name="alamat" required>
                        </div>
                        <div class="form-group">
                            <label>detail Pesanan</label>
                            <input type="number" class="form-control" placeholder="detail Pesanan" name="detail pesanan" required>
                            <input type="text" class="form-control" placeholder="detail Pesanan" name="detail pesanan" required>
                        </div>
                        <button class="btn btn-success" type="submit">Add</button>
                        <button class="btn btn-danger" data-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ./wrapper -->
    <script src="<?php echo base_url('assets/vendor/adminlte/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/adminlte/plugins/jquery-validation/jquery.validate.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/adminlte/plugins/sweetalert2/sweetalert2.min.js') ?>"></script>
    <script>
        var readUrl = '<?php echo site_url('PesananMasuk/read') ?>';
        var addUrl = '<?php echo site_url('PesananMasuk/add') ?>';
        var deleteUrl = '<?php echo site_url('PesananMasuk/delete') ?>';
        var editUrl = '<?php echo site_url('PesananMasuk/edit') ?>';
        var get_pelangganUrl = '<?php echo site_url('PesananMasuk/get_PesananMasuk') ?>';
    </script>
    <script src="<? base_url('assets/pages/PesananMasuk.min.js') ?>"></script>
</body>

</html>