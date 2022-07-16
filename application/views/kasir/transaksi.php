<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tabel Transaksi</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Transaksi</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Pesanan</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                            <th>Tanggal Selesai </th>
                        </tr>
                    </thead>
                    <tfoot>
                        <?php
                        $no = 1;
                        foreach ($transaksi as $row) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $row['nama']; ?></td>
                                <td><?php echo $row['jenis_pesanan']; ?></td>
                                <td><?php echo $row['type']; ?></td>
                                <td><?php echo $row['status']; ?></td>
                                <td><?php echo $row['tanggal']; ?></td>
                                <td><?php echo $row['tanggal_selesai']; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tfoot>
                    <tbody>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>