<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col">
                    <h1 class="m-0 text-dark">Pelanggan</h1>
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
                    <table class="table w-100 table-bordered table-hover" id="pelanggan">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Telepon</th>
                                <th>Actions</th>
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
                <?php echo form_open_multipart('pelanggan/proses_tambah_data'); ?>
                <!-- <form id="form"> -->
                <input type="hidden" name="id">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" placeholder="Nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control">
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" placeholder="Alamat" name="alamat" required>
                </div>
                <div class="form-group">
                    <label>Telepon</label>
                    <input type="number" class="form-control" placeholder="Telepon" name="telepon" required>
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