<div class="content-wrapper">
    <!-- Main content -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col">
                        <h1 class="m-0 text-dark">Halaman Menu</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3 id="transaksi_hari">0</h3>
                                <p>Transaksi Hari Ini</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3 id="transaksi_terakhir">0</h3>
                                <p> Transaksi Terakhir</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-money-bill"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3 id="stok_hari">0</h3>
                                <p>Stok Masuk Hari Ini</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-archive"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <h1 class="mt-2 mb-3 h2 text-dark">Grafik</h1>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Menu Terlaris</h3>
                            </div>
                            <div class="card-body">
                                <div class="chart">
                                    <canvas id="produkTerlaris" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">Stok Produk</h3>
                            </div>
                            <div class="card-body">
                                <div class="chart" style="height: 250px;max-height: 250px; overflow-y: scroll;">
                                    <ul class="list-group" id="stok_produk">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Penjualan Bulan Ini</h3>
                            </div>
                            <div class="card-body">
                                <div class="chart">
                                    <canvas id="bulanIni" style="min-height: 250px; height: 450px; max-height: 450px; max-width: 100%"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">

            <!-- Default box -->
            <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!-- Content Wrapper. Contains page content -->


    <!-- /.content-header -->

    <!-- /.content -->
</div>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/js/select2.full.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script>
    $(function() {
        $('.select2').select2()
    });
</script>
</body>

</html>