<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Data Menu</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Menu</h6>
            <a href="<?php echo base_url() ?>Menu/tambah_menu" class="btn btn-primary btn-sm float-right">Tambah Menu</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>Id Kategori</td>
                            <td>Nama Menu</td>
                            <td>Harga</td>
                            <td>Jumlah</td>
                            <td>Gambar</td>
                            <td>Status</td>
                            <td colspan="2">Setting</td>

                        </tr>
                    </thead>
                    <tbody>
                    <tfoot>
                        <?php
                        $no = 1;
                        foreach ($menu as $menu) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <!-- <td><?= $menu['id_kategori'] ?></td> -->
                                <td><?= $menu['nam_menu'] ?></td>
                                <td><?= $menu['harga'] ?></td>
                                <td><?= $menu['jumlah'] ?></td>
                                <td><img src="<?php echo base_url() . '/assets/gambar/' . $menu['gambar'] ?>" style="width:75px"></td>
                                <td><?= $menu['status'] ?></td>
                                <td>
                                    <a href="<?php echo base_url() ?>menu/edit_data/<?php echo $menu['id_menu']; ?>" class="badge badge-success">Edit</a></a>
                                    <a href="<?php echo base_url() ?>menu/proses_hapus_data/<?php echo $menu['id_menu']; ?>" class="badge badge-danger" onclick="return confirm('Yakin Data ini akan dihapus ?')">Delete</a>
                                </td></a>
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
                    <span aria-hidden="true">×</span>
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
</body>

</html>