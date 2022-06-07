<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">tabel
                <a href="<?php base_url('pesanan_masuk/tambah_data_pesananmasuk') ?>" class="btn btn-primary btn-sma float-right">tambah data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>jumlah</th>
                            <th>Tanggal Pesanan</th>
                            <th>Telepon</th>
                            <th>Detail Makanan</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php
                        $no = 1;
                        foreach ($pesanan_masuk as $pesanan_masuk) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $pesanan_masuk['nama'] ?></td>
                                <td><?= $pesanan_masuk['alamat'] ?></td>
                                <td><?= $pesanan_masuk['jumlah'] ?></td>
                                <td><?= $pesanan_masuk['tgl_pesanan'] ?></td>
                                <td><?= $pesanan_masuk['telepon'] ?></td>
                                <td><?= $pesanan_masuk['detail_makanan'] ?></td>
                                <td>
                                    <a href="<?php echo base_url() ?>pesanan_masuk/edit_data/<?php echo $pesanan_masuk['id']; ?>" class="badge badge-success">Edit</a>
                                    <a href="<?php echo base_url() ?>pesanan_masuk/hapus_data/<?php echo $pesanan_masuk['id']; ?>" class="badge badge-danger">Hapus</a>
                                    <a href="<?php echo base_url() ?>pesanan_masuk/add_data/<?php echo $pesanan_masuk['id']; ?>" class="badge badge-success">add</a>
                                </td>
                            </tr>
                    </tbody>

                <?php  } ?>
                </table>
            </div>
            <!-- /.container-fluid -->
        </div>
    </div>
</div>
</div>
<!-- End of Main Content -->