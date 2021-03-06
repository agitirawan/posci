<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Data Kasir</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Data transaksi</h6>
            <a href="<?php base_url() ?>data_kasir/tambah_transaksi" class="btn btn-primary btn-sm float-right">tambah</a>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <td>No</td>
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
                            foreach ($transaksi as $nomor => $transaksi) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <!-- <td><?= $nomor + 1 ?></td> -->
                                    <td><?= $transaksi['user'] ?></td>
                                    <!-- <td><?= $transaksi['jenis_pesanan'] ?></td> -->
                                    <td><?= $transaksi['transaksi']['type'] ?></td>
                                    <td><?= $transaksi['transaksi']['status'] ?></td>
                                    <td><?= $transaksi['transaksi']['tanggal'] ?></td>
                                    <td>

                                        <a href="<?php echo base_url() ?>datakasir/detail/<?php echo $transaksi['transaksi']['id_transaksi']; ?>" class="badge badge-info">Detail Pemesanan</a>
                                        <a href="<?php echo base_url() ?>datakasir/selesaikan/<?php echo $transaksi['transaksi']['id_transaksi']; ?>" class="badge badge-danger" onclick="return confirm('Yakin Data ini akan dihapus ?')">Selesaikan Pesanan</a>
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
                    <span aria-hidden="true">??</span>
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
<div>
    <div>

    </div>
</div>
</body>

</html>