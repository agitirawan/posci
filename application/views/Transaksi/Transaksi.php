<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col">
                    <h1 class="m-0 text-dark">Transaksi</h1>
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
                </div>

                <div class="card-body">
                    <table class="table w-100 table-bordered table-hover" id="transaksi">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>tanggal</th>
                                <th>qty</th>
                                <th>total bayar</th>
                                <th>jumlah tunai</th>
                                <th>pelanggan</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($Transaksi as $Transaksi) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $Transaksi['tangggal'] ?></td>
                                    <td><?= $Transaksi['qty'] ?></td>
                                    <td><?= $Transaksi['total_bayar'] ?></td>
                                    <td><?= $Transaksi['jumlah_tunai'] ?></td>
                                    <td><?= $Transaksi['pelanggan'] ?></td>
                                    <td>
                                        <a href="<?php echo base_url() ?>Transaksi/edit_data/<?php echo $Transaksi['id']; ?>" class="badge badge-success">Edit</a>
                                        <a href="<?php echo base_url() ?>Transaksi/hapus_data/<?php echo $Transaksi['id']; ?>" class="badge badge-danger">Hapus</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
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
                <?php echo form_open_multipart('transaksi/proses_tambah_data'); ?>
                <!-- <form id="form"> -->
                <input type="hidden" name="id">
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" class="form-control" placeholder="tangggal" name="tangggal" required>
                </div>
                <div class="form-group">
                    <label>qty</label>
                    <input type="number" class="form-control" placeholder="qty" name="qty" required>
                </div>
                <div class="form-group">
                    <label>total bayar</label>
                    <input type="text" class="form-control" placeholder="total_bayar" name="qty" required>
                </div>
                <div class="form-group">
                    <label>jumlah tunai</label>
                    <input type="text" class="form-control" placeholder="jumlah_tunai" name="jumlah_tunai" required>
                </div>
                <div class="form-group">
                    <label>pelanggan</label>
                    <input type="text" class="form-control" placeholder="pelanggan" name="pelanggan" required>
                </div>
                <button class="btn btn-success" type="submit">Add</button>
                <button class="btn btn-danger" data-dismiss="modal">Close</button>
                <?php echo form_close() ?>
                <!-- </form> -->
            </div>
        </div>
    </div>
</div>
<!-- ./wrapper -->