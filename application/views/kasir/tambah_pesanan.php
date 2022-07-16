<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tabel Tambah Pesanan</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Tambah Pesanan</h6>
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
                                </td></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tfoot>
                    <tbody>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>