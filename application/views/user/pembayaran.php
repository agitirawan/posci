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


 <!-- 404 Start -->
 <div class="container-xxl py-6 wow fadeInUp" data-wow-delay="0.1s">
     <div class="container">
         <div class="row">
             <div class="col-lg-8">

                 <div class="card card-body">

                     <h3>Identitas Pelanggan</h3>
                     <div class="form-group">
                         <label for="">Nama</label>
                         <input type="text" class="form-control" name="nama">
                         <small>Masukkan nama lengkap anda</small>
                     </div>
                     <div class="form-group">
                         <label for="">Telpon</label>
                         <input type="text" class="form-control" name="telp">
                         <small>telepon</small>
                     </div>
                     <div class="form-group">
                         <label for="">Email</label>
                         <input type="text" class="form-control" name="email">
                         <small>Email</small>
                     </div>
                     <div class="form-group">
                         <label for="">Alamat</label>
                         <input type="text" class="form-control" name="Alamat">
                         <small>Alamat</small>
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
                         <?php for ($i = 0; $i < 3; $i++) { ?>
                             <tr>
                                 <td style="width: 20%">
                                     <img src="<?php echo base_url('assets/gambar/PaketA.jpg.') ?>" alt="foto" style="width: 100px; border-radius: 10px; border: 3px solid #e4e4e4">
                                 </td>
                                 <td>
                                     <h4>Paket A</h4>
                                     <small>Jumlah Pembelian</small><br>
                                     <b>2 item |</b>
                                     <b for=""><?php echo number_format(3000000, 2) ?></b>
                                 </td>
                             </tr>
                         <?php } ?>
                     </table>
                     <table class="table table-border">
                         <tr>
                             <td>
                                 <b>Total Pembelian</b>
                                 <h2>Rp. <?php echo number_format(60000000) ?></h2>

                                 <hr>
                                 <button style="width: 100%" class="btn btn-primary rounded-pill py-3 px-5" href="<?php echo base_url('user/pembayaran') ?>">selesai</button>
                             </td>
                         </tr>
                     </table>
                 </div>
             </div>
         </div>
     </div>
     <!-- 404 End -->