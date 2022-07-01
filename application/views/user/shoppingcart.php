 <!-- Page Header Start -->
 <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
     <div class="container">
         <h1 class="display-3 mb-3 animated slideInDown">Keranjang</h1>
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
     <div class="container text-center">
         <div class="row justify-content-center">
             <div class="col-lg-12">
                 <i class=" display-1 text-primary"></i>
                 <table class="table table-bordered">
                     <tr>
                         <th>Nama</th>
                         <th>Harga</th>
                         <th>Qty</th>
                         <th>Subtotal</th>
                     </tr>

                     <?php
                        $total = 0;
                        foreach ($this->cart->contents() as $cart) :

                            $total += ($cart['subtotal'] * $cart['qty']);
                        ?>
                         <tr>
                             <td>
                                 <img src="<?php echo base_url('assets/gambar/' . $cart['coupon']) ?>" alt="foto" style="width: 100px">
                                 <h4><?php echo $cart['name'] ?></h4>
                             </td>
                             <td style="vertical-align: middle;">
                                 <small>Harga paket</small>
                                 <h4><?php echo number_format($cart['price'], 2) ?></h4>
                             </td>
                             <td style="vertical-align: middle;">
                                 <small>Jumlah</small>
                                 <input id=demoInput type=number min="0" max="110" value="<?php echo $cart['qty'] ?>">
                                 <button onclick="increment()">+</button>
                                 <button onclick="decrement()">-</button>
                                 <script>
                                     function increment() {
                                         document.getElementById('demoInput').stepUp();
                                     }

                                     function decrement() {
                                         document.getElementById('demoInput').stepDown();
                                     }
                                 </script>
                             </td>
                             <td style="vertical-align: middle;">
                                 <small>Total</small>
                                 <h4>Rp. <?php echo number_format($cart['subtotal'], 2) ?></h4>
                             </td>
                             <td><a href="<?php echo base_url('menu/remove/' . $cart['rowid']) ?>" class="" onclick="return confirm('Yakin Data ini akan dihapus ?')">Delete</a></td>
                         </tr>
                     <?php endforeach; ?>
                 </table>

                 <hr>
                 <small>Total</small>
                 <h2><?php echo number_format($total) ?></h2>
                 <a class="btn btn-primary rounded-pill py-3 px-5" href="<?php echo base_url('user/pembayaran') ?>">lanjut pembayaran</a>
             </div>
         </div>
     </div>
 </div>
 <!-- 404 End -->
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