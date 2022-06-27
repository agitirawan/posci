<div clas="container-fluid">

    <h3>Halaman Edit Data Kasir </h3>
    <hr>
    <br>
    <form method="post" action="<?php base_url() ?>data_kasir/proses_tambah_transaksi">
        <div class="row mb-3">
            <input type="hidden" name="id_transaksi" value="<?php echo $transksi['id_transaksi'] ?>">
            <label for="id_transaksi" class="col-sm-2 col-form-label">Id Transaksi</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" placeholder="id_transaksi" name="id_transaksi">
            </div>
        </div>
        <div class="row mb-3">
            <label for="id_user" class="col-sm-2 col-form-label">Id User</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="id_user">
            </div>
        </div>
        <div class="form-group">
            <label>type</label>
            <select name='type' class='form-control'>
                <?php
                if ($pelanggan['type'] == 'Dine_in') { ?>
                    <option value='Dine_in' selected>Dine In</option>
                    <option value='Take_away'>Take Away</option>;
                <?php } else { ?>
                    <option value='Dine_in'>Dine In</option>
                    <option value='Take_away' selected>Take_away</option>;
                <?php
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label>Status</label>
            <select name='status' class='form-control'>
                <?php
                if ($status['status'] == 'Proses') { ?>
                    <option value='Proses' selected>Proses</option>
                    <option value='Selesai'>Selesai</option>;
                    <option value='batal'>batal</option>;
                <?php } else { ?>
                    <option value='Proses'>Proses</option>
                    <option value='selesai' selected>selesai</option>;
                    <option value='batal' selected>batal</option>;
                <?php
                }
                ?>
            </select>
        </div>

        <div class="row mb-3">
            <div class="row mb-3">
                <label for="tanggal" class="col-sm-2 col-form-label">tanggal</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control" name="tanggal">
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">ubah</button>
            <button type="reset" class="btn btn-danger">Reset</button>
            <div></div>
    </form>
    <div>
        <div>
            <div></div>
        </div>
    </div>
</div>