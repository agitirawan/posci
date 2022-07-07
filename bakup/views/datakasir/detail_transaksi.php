<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Info Pemesanan Detail</h1>

    <div class="row">
        <div class="col-md-4">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <h4>Informasi Pemesanan</h4>
                    <b>Tanggal Pemesanan pada <br><?php echo date('d M Y H.i A', strtotime($transaksi['tanggal'])) ?></b>

                    <hr>

                    <div class="form-group">
                        <small>Nama</small>
                        <h4><?php echo $nama ?></h4>
                    </div>

                    <div class="form-group">
                        <small>Status Pembayaran</small>
                        <h4>
                            <?php if ($transaksi['status'] == "proses") {

                                if ($transaksi['jenis_pesanan'] == "online") {

                                    echo "Menunggu Pembayaran";
                                } else {

                                    echo "Menyiapkan Pesanan";
                                }
                            } else if ($transaksi['status'] == "selesai") {

                                echo "Pesanan Selesai";
                            } else {

                                echo "Pesanan Dibatalkan";
                            }

                            ?>
                        </h4>
                    </div>

                    <?php if ($transaksi['jenis_pesanan'] == "online") : ?>

                        <div class="form-group">
                            <small>Alamat</small>
                            <h4><?php echo $user['alamat'] ?></h4>
                        </div>

                        <div class="form-group">
                            <small>Telepon</small>
                            <h4><?php echo $user['telepon'] ?></h4>
                        </div>

                        <div class="form-group">
                            <small>Email</small>
                            <h4><?php echo $user['email'] ?></h4>
                        </div>

                    <?php endif; ?>

                    <small>Informasi Jenis Pemesanan Dine In atau Take Away</small>
                    <h4><?php echo $transaksi['type'] ?></h4>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-body">

                    <small>Jenis Pesanan</small><br>
                    <?php

                    if ($transaksi['jenis_pesanan'] == "online") {

                        echo '<label style="font-size: 18px" class="badge badge-success">Pemesanan Secara Online</label>';
                    } else {

                        echo '<label style="font-size: 18px" class="badge badge-info">Pesanan dari Kasir</label>';
                    }
                    ?>


                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Kategori</th>
                                <th>Nama Menu</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $total = 0;
                            foreach ($transaksi_detail as $nomor => $detail) :


                                $subtotal = $detail['harga'] * $detail['jumlah'];

                                $total = $total + $subtotal;
                            ?>
                                <tr>
                                    <td><?php echo $nomor + 1 ?></td>
                                    <td><?php echo $detail['nama'] ?></td>
                                    <td><?php echo $detail['nam_menu'] ?></td>
                                    <td><?php echo $detail['harga'] ?></td>
                                    <td><?php echo $detail['jumlah'] ?></td>
                                    <td><?php echo number_format($subtotal) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    <div class="row">
                        <div class="col-md-6">
                            <small>Rincian Pembelian</small><br>
                            <b>Sehingga Total Keseluruhan : </b>
                            <h3><?php echo number_format($total, 2) ?></h3>
                        </div>
                        <div class="col-md-6">
                            <small>Pengoperasian</small><br>

                            <?php

                            if ($transaksi['jenis_pesanan'] == "online") {


                            ?>
                                <a href="" onclick="return confirm('Pastikkan pemesanan sudah terbayar')" class="btn btn-warning">Selesaikan Pesanan</a>


                            <?php } // endif 
                            ?>
                            <a href="" class="btn btn-primary">Cetak Struk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>