<div class="container-fluid">




    <?php foreach ($tampil as $isi) { ?>

        <!-- Page Heading -->
        <small>Kategori Menu</small>
        <h1 class="h3 mb-2 text-gray-800"><?php echo $isi['kategori']['nama'] ?></h1>
        <div class="row">




            <?php foreach ($isi['menu'] as $menu) { ?>
                <div class="col-md-3" style="margin-bottom: 20px">

                    <div class="card">
                        <a href="<?php echo base_url('kasir/proses_tambah_keranjang/' . $menu['id_menu']) ?>">
                            <img class="card-img-top" style="width:100%;height:195px;object-fit:cover;" src="<?= base_url() . '/assets/gambar/' . $menu['gambar'] ?>" alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <h4><?php echo number_format($menu['harga']) ?></h4>
                            <b><?= $menu['nam_menu'] ?></b>
                        </div>
                    </div>


                </div>
            <?php } ?>
        </div>


        <hr>

    <?php } ?>


</div>