<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col">
                    <h1 class="m-0 text-dark">Menusaji</h1>
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
                    <table class="table w-100 table-bordered table-hover" id="MenuSaji">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Menu Makanan</th>
                                <th>Menu Minuman</th>
                                <th>Harga</th>
                                <th>Gambar</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($MenuSaji as $MenuSaji) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $MenuSaji['nama_makanan'] ?></td>
                                    <td><?= $MenuSaji['nama_minuman'] ?></td>
                                    <td><?= $MenuSaji['harga'] ?></td>
                                    <td>
                                        <a href="<?php echo base_url() ?>MenuSaji/edit_data/<?php echo $MenuSaji['id']; ?>" class="badge badge-success">Edit</a>
                                        <a href="<?php echo base_url() ?>MenuSaji/hapus_data/<?php echo $MenuSaji['id']; ?>" class="badge badge-danger">Hapus</a>
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

<div class="modal fade" id="modal">
    <div class="modal-dialog">
        <div class="modal-content">
        </div>
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
                            <label>Nama Makanan </label>
                            <input type="text" class="form-control" placeholder="nama_makanan" name="nama makanan" required>
                        </div>
                        <div class="form-group">
                            <label>Nama Minuman</label>
                            <input type="text" class="form-control" placeholder="nama_minuman" name="nama minuman" required>
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" class="form-control" placeholder="harga" name="harga" required>
                        </div>
                        <button class="btn btn-success" type="submit">Add</button>
                        <button class="btn btn-danger" data-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
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
    var readUrl = '<?php echo site_url('MenuSaji/read') ?>';
    var addUrl = '<?php echo site_url('MenuSaji/add') ?>';
    var deleteUrl = '<?php echo site_url('MenuSaji/delete') ?>';
    var editUrl = '<?php echo site_url('MenuSaji/edit') ?>';
    var get_pelangganUrl = '<?php echo site_url('MenuSaji/get_id') ?>';
</script>
<script src="<?php echo base_url('assets/pages/MenuSaji.min.js') ?>"></script>
</body>

</html>