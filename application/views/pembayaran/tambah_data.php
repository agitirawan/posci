<div class="container-fluid">
    <h3>Halaman Tambah Pembayaran</h3>
    <hr>
    <br>
    <form method="post" action="<?php echo base_url() ?>pembayaran/proses_tambah_pembayaran">
        <div class="row mb-3">
            <label for="id_pembayaran" class="col-sm-2 col-form-label">Id Pembayaran</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="id_pembayaran">
            </div>
        </div>
        <div class="row mb-3">
            <label for="id_transaksi" class="col-sm-2 col-form-label">Id Transaksi</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="id_transaksi">
            </div>
        </div>
        <div class="row mb-3">
            <label for="tyep" class="col-sm-2 col-form-label">Type</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="type">
            </div>
        </div>
        <div class="row mb-3">
            <label for="nominal" class="col-sm-2 col-form-label">nominal</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="nominal" required="">
                <div class="row mb-3">
                    <label for="tanggal" class="col-sm-2 col-form-label">Tangggal</label>
                    <div class="col-sm-5">
                        <input type="date" class="form-control" name="tanggal" required="">
                        <br>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </div>
    </form>
</div>
</div>