<div clas="container-fluid">

    <h3>Halaman Edit Data</h3>
    <hr>
    <br>
    <form method="post" action="<?php base_url() ?>Makanan/proses_edit_data">
        <div class="row mb-3">
            <label for="nam_menu" class="col-sm-2 col-form-label">nama makanan</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" placeholder="nam_menu" name="nam_menu" value=" <?php echo $menu['nam_menu'] ?>" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="harga" class="col-sm-2 col-form-label">harga</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="harga">
            </div>
        </div>
        <div class="row mb-3">
            <label for="jumlah" class="col-sm-2 col-form-label">jumlah</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="jumlah">
            </div>
        </div>
        <div class="row mb-3">
            <label for="gambar" class="col-sm-2 col-form-label">gambar</label>
            <div class="col-sm-5">
                <input type="file" class="form-control" name="userfile">
            </div>
        </div>
        <div class="row mb-3">
            <button type="submit" class="btn btn-primary">tambah</button>
            <button type="submit" class="btn btn-denger">reset</button>
        </div>
    </form>
</div>