<div class="container-fluid">
    <h3>Halaman Tambah Menu</h3>
    <hr>
    <br>
    <form method="post" action="<?php echo base_url() ?>menu/proses_tambah_menu" enctype="multipart/form-data">

        <div class="row mb-3">
            <label for="nam_menu" class="col-sm-2 col-form-label">Nama Menu</label>
            <div class="col-sm-5">
                <select name='id_ketergori' class='form-control'>

                    <?php foreach ($kategori as $isi) : ?>
                        <option value='<?php echo $isi['id_kategori'] ?>'><?php echo $isi['nama'] ?></option>
                    <?php endforeach; ?>

                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="nam_menu" class="col-sm-2 col-form-label">Nama Menu</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nam_menu">
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
                <input type="file" class="form-control" name="userfile" required="">
                <br>
                <button type="submit" class="btn btn-primary">Tambah</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
            <div class="form-group">
                <label>status</label>
                <select name='status' class='form-control'>
                    <?php
                    if ($status['status'] == 'dijual') { ?>
                        <option value='dijual' selected>dijual</option>
                        <option value='disimpan'>disimpan</option>;
                    <?php } else { ?>
                        <option value='dijual'>dijual</option>
                        <option value='disimpan' selected>disimpan</option>;
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>
    </form>
</div>
</div>