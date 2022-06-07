<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">tabel
                <a href="<?php base_url('pelanggan/tambah_data') ?>" class="btn btn-primary btn-sma float-right">tambah data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>no</td>
                            <td>nama</td>
                            <td>jenis kelamin</td>
                            <td>alamat</td>
                            <td>telepon</td>
                            <td>action</td>
                        </tr>
                    </thead>
                    <tbody>


                        <?php
                        $no = 1;
                        foreach ($pelanggan as $pelanggan) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $pelanggan['nama'] ?></td>
                                <td><?= $pelanggan['jenis_kelamin'] ?></td>
                                <td><?= $pelanggan['alamat'] ?></td>
                                <td><?= $pelanggan['telepon'] ?></td>
                                <td>
                                    <a href="<?php echo base_url() ?>pelanggan/edit_data/<?php echo $pelanggan['id']; ?>" class="badge badge-success">Edit</a>
                                    <a href="<?php echo base_url() ?>pelanggan/hapus_data/<?php echo $pelanggan['id']; ?>" class="badge badge-danger">Hapus</a>
                                    <a href="<?php echo base_url() ?>pelanggan/hapus_data/<?php echo $pelanggan['id']; ?>" class="badge badge-success">add</a>
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