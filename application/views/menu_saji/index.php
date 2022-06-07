<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">tabel
                <a href="<?php base_url('menu_saji/tambah_data') ?>" class="btn btn-primary btn-sma float-right">tambah data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>no</th>
                            <th>Nama makanan</th>
                            <th>Nama Minuman</th>

                            <th>harga</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php
                        $no = 1;
                        foreach ($menusaji as $menusaji) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $menusaji['nama_makanan'] ?></td>
                                <td><?= $menusaji['nama_minuman'] ?></td>

                                <td><?= $menusaji['harga'] ?></td>
                                <td>
                                    <a href="<?php echo base_url() ?>menusaji/edit_data/<?php echo $menusaji['id']; ?>" class="badge badge-success">Edit</a>
                                    <a href="<?php echo base_url() ?>menusaji/hapus_data/<?php echo $menusaji['id']; ?>" class="badge badge-danger">Hapus</a>
                                    <a href="<?php echo base_url() ?>menusaji/hapus_data/<?php echo $menusaji['id']; ?>" class="badge badge-success">add</a>
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