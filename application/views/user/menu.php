    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">Menu</h1>
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
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                        <h1 class="display-5 mb-3">Menu Kami</h1>
                        <p>Menyediakan kategori makanan, minuman, dan juga paket</p>
                    </div>
                </div>
                <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary border-2" href="<?php echo base_url('user/menu') ?>">Keseluruhan</a>
                        </li>
                        <?php foreach ($kategori as $kategori) { ?>
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-<?php echo $kategori['id_kategori'] ?>"><?= $kategori['nama'] ?></a>
                            </li>
                        <?php } ?>

                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <?php echo $this->session->flashdata('msg') ?>
                <?php foreach ($tampil as $isi) { ?>
                
                <hr>
                
                <div id="tab-<?php echo $isi['kategori']['id_kategori'] ?>" class="tab-pane fade show p-0 active">
                    <div class="row g-4">

                        <?php foreach ($isi['menu'] as $menu) { ?>
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="product-item">
                                    <div class="position-relative bg-light overflow-hidden">
                                        <img class="img-fluid w-100" style="width:550px;height:195px;object-fit:cover;" src="<?= base_url() . '/assets/gambar/' . $menu['gambar'] ?>" alt="">
                                        <!-- <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div> -->
                                    </div>
                                    <div class="text-center p-4">
                                        <a class="d-block h5 mb-2" href=""><?= $menu['nam_menu'] ?></a>
                                        <span class="text-primary me-1"><?= number_format($menu['harga']) ?></span>
                                        <!-- <span class="text-body text-decoration-line-through">$29.00</span> -->
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="w-50 text-center border-end py-2">
                                            <a button class="text-body" href="<?php echo base_url() ?>"></ii class="fa fa-shopping-bag text-primary me-2">View detail</a>
                                        </small>
                                        <small class="w-50 text-center py-2">
                                            <a button class="text-body" href="<?php echo base_url('menu/proses_tambah_keranjang/' . $menu['id_menu']) ?>"><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <hr>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Product End -->
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
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