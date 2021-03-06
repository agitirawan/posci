    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">History Pembelian</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Menu</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Product Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end justify-content-center">
                <div class="col-lg-10">
                    <table class="table table-stripe" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tanggal Pembelian</th>
                                <th>Total</th>
                                <th>Tipe Pesanan</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $no = 1;
                            foreach ($transaksi as $isi) : ?>

                                <tr>
                                    <td rowspan="2" style="border-bottom: 5px solid #e0e0e0"><?php echo $no ?></td>
                                    <td rowspan="2" style="border-bottom: 5px solid #e0e0e0"><?php echo $isi['info']['tanggal'] ?></td>
                                    <td><?php echo number_format($isi['total']) ?></td>
                                    <td><?php echo $isi['info']['type'] ?></td>
                                    <td><?php echo $isi['info']['status'] ?></td>
                                </tr>
                                <tr>
                                    <td colspan="4" style="border-bottom: 5px solid #e0e0e0">
                                        <?php foreach ( $isi['detail'] AS $detail ) : ?>
                                            - <?php echo $detail['nam_menu'] ?> (<?php echo $detail['jumlah'] ?> item) <br>
                                        <?php endforeach; ?>
                                    </td>
                                </tr>

                            <?php
                                $no++;
                            endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->