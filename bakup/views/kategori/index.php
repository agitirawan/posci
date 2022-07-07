<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Kategori</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Kategori</h6>
            <a href="<?php echo base_url() ?>kategori/tambah_kategori" class="btn btn-primary btn-sm float-right">Tambah Kategori</a>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Kategori</th>
                            <th>Created_at</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tfoot>
                        <?php
                        $no = 1;
                        foreach ($kategori as $kategori) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $kategori['nama'] ?></td>
                                <td><?= $kategori['create_at'] ?></td>
                                <td>
                                    <a href="<?php echo base_url() ?>kategori/edit_data/<?= $kategori['id_kategori']; ?>" class="badge badge-success" onclick="return confirm('Yakin Data ini mau di edit ?')">Edit</a>
                                    <a href="<?php echo base_url() ?>kategori/proses_hapus_data/<?= $kategori['id_kategori']; ?>" class="badge badge-danger" onclick="return confirm('Yakin Data ini akan dihapus ?')">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tfoot>
                    <tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
</div>
<!-- Button trigger modal -->