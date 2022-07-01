 <!-- Page Header Start -->
 <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
     <div class="container">
         <h1 class="display-3 mb-3 animated slideInDown">Pembayaran</h1>
         <nav aria-label="breadcrumb animated slideInDown">
             <ol class="breadcrumb mb-0">
                 <li class="breadcrumb-item"><a class="text-body" href="#">home</a></li>
                 <li class="breadcrumb-item"><a class="text-body" href="#">Shopping Cart</a></li>
             </ol>
         </nav>
     </div>
 </div>
 <!-- Page Header End -->



 <form action="<?php echo base_url('pembayaran/transaksi') ?>" method="post">
 <!-- 404 Start -->
 <div class="container-xxl py-6 wow fadeInUp" data-wow-delay="0.1s">
     <div class="container">
         <div class="row">
             <div class="col-lg-8">

                 <div class="card card-body">

                     <h3>Identitas Pelanggan</h3>
                     <div class="form-group">
                         <label for="">Nama</label>
                         <input type="text" class="form-control" name="nama" value="<?php echo $this->session->userdata('nama') ?>">
                         <small>Masukkan nama lengkap anda</small>

                         <br><br>
                     </div>
                     <div class="form-group">
                         <label for="">Telpon</label>
                         <input type="text" class="form-control" name="telp">
                         <small>telepon</small>
                         <br><br>
                     </div>
                     <div class="form-group">
                         <label for="">Email</label>
                         <input type="text" class="form-control" name="email">
                         <small>Email</small>
                         <br><br>
                     </div>
                     <div class="form-group">
                         <label for="">Alamat</label>
                         <input type="text" class="form-control" name="Alamat">
                         <small>Alamat</small>
                         <br><br>
                     </div>
                     <div class="form-group">
                         <label for="">Catatan</label>
                         <textarea name="catatan" class="form-control"></textarea>
                         <small>Catatan</small>
                     </div>
                 </div>

             </div>
             <div class="col-lg-4">
                 <div class="card card-body">
                     <table class="table table-hover">
                     <?php
                        $total = 0;
                        foreach ($this->cart->contents() as $cart) :

                            $total += $cart['subtotal'];
                        ?>
                             <tr>
                                 <td style="width: 20%">
                                     <img src="<?php echo base_url('assets/gambar/' . $cart['coupon']) ?>" alt="foto" style="width: 100px; border-radius: 10px; border: 3px solid #e4e4e4">
                                 </td>
                                 <td>
                                     <h4><?php echo $cart['name'] ?></h4>
                                     <small>Jumlah Pembelian</small><br>
                                     <b><?php echo $cart['qty'] ?> item |</b>
                                     <b for=""><?php echo number_format($cart['price'], 2) ?></b>
                                 </td>
                             </tr>
                        <?php endforeach; ?>
                     </table>
                     <table class="table table-border">
                         <tr>
                             <td>
                                 <b>Total Pembelian</b>
                                 <h2>Rp. <?php echo number_format($total) ?></h2>

                                 <hr>

                                 <div class="form-group">
                                    <small><b>Informasi Pemesanan</b> <br>
                                        Tersedia 2 pilihan yaitu Dine In atau Take Away, seperti pada form dibawah ini
                                    </small>

                                    <br><br>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type" id="inlineRadio1" value="dine_in">
                                            <label class="form-check-label" for="inlineRadio1">Dine In</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type" id="inlineRadio2" value="take_away">
                                            <label class="form-check-label" for="inlineRadio2">Take Away</label>
                                        </div>
                                 </div>

                                 <hr>
                                 <button style="width: 100%" class="btn btn-primary rounded-pill py-3 px-5" href="<?php echo base_url('user/pembayaran') ?>">selesai</button>
                                 <small>Klik untuk menyelesaikan pemesanan</small>
                             </td>
                         </tr>
                     </table>
                 </div>
             </div>
         </div>
     </div>
     <!-- 404 End -->
</form>