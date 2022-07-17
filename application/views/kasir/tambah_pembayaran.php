<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Pembayaran</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-body">
                <table class="table table-border">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Qty</th>
                            <th>Subtotal</th>
                        </tr>

                        <?php
                        $total = 0;
                        foreach ($this->cart->contents() as $nomor => $cart) :

                            $total += $cart['subtotal'];
                        ?>

                            <form action="<?php echo base_url('kasir/update/' . $cart['rowid']) ?>" method="POST">
                                <tr>
                                    <td>
                                        <img src="<?php echo base_url('assets/gambar/' . $cart['coupon']) ?>" alt="foto" style="width: 100px">
                                        <h4><?php echo $cart['name'] ?></h4>
                                    </td>
                                    <td style="vertical-align: middle;">
                                        <small>Harga paket</small>
                                        <h5><?php echo number_format($cart['price']) ?></h5>
                                    </td>
                                    <td style="vertical-align: middle;">
                                        <small>Jumlah</small>
                                        <input id="demoInput-<?php echo $cart['rowid'] ?>" name="permintaan" type=number min="0" max="110" value="<?php echo $cart['qty'] ?>">

                                    </td>
                                    <td style="vertical-align: middle;">
                                        <small>Total</small>
                                        <h5>Rp. <?php echo number_format($cart['subtotal']) ?></h5>
                                    </td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">Update</button>
                                        <a class="btn btn-danger btn-sm" href="<?php echo base_url('menu/remove/' . $cart['rowid']) ?>" onclick="return confirm('Yakin Data ini akan dihapus ?')">Delete</a>
                                    </td>
                                </tr>
                            </form>
                        <?php endforeach; ?>
                    </thead>
                </table>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-body">
                <form action="<?php echo base_url('kasir/tambahpemesanan') ?>" method="POST">

                    <div class="form-group">
                        <label for="">Total</label>
                        <h5><?php echo number_format($total) ?></h5>
                        <input type="hidden" name="total" value="<?php echo $total ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Atas Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Atas Nama . . ." />
                    </div>
                    <div class="form-group">
                        <label for="">Nominal Pembayaran</label>
                        <input type="number" class="form-control" name="pembayaran" placeholder=" . . . " />
                    </div>
                    <div class="form-group">
                        <label for="">Tipe Pesanan</label><br><br>

                        <small for="dine_in">Dine In</small>
                        <input type="radio" name="tipe" id="dine_in" value="dine_in" />

                        <small for="dine_in">Take Away</small>
                        <input type="radio" name="tipe" id="take_away" value="take_away" />
                    </div>

                    <div class="form-group">
                        <label for="">Kembalian</label>
                        <h5 id="text-kembalian">Rp 0</h5>
                        <input type="hidden" name="kembalian" />
                    </div>

                    <hr>

                    <div class="form-group">
                        <button class="btn btn-block btn-primary">Selesaikan Pemesanan</button>
                    </div>
                    <small>Klik tombol diatas untuk menyelesaikan pemesanan dan pembayaran</small>
                </form>
            </div>
        </div>
    </div>

</div>


<script>
    $(function() {


        $('input[name="pembayaran"]').keyup(function() {

            var nilai = $(this).val();
            var kembalian;
            var total = $('input[name="total"]').val();


            kembalian = nilai - total;

            if (nilai > 0) {

                $('#text-kembalian').text(kembalian);
                $('input[name="kembalian"]').val(kembalian);
            }




        })
    })
</script>