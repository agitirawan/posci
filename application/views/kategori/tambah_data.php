<div class="container-fluid">
    <h3>Halaman Tambah Kategori</h3>
    <hr>
    <br>

    <form method="post" action="<?php echo base_url() ?>kategori/proses_tambah_kategori">

        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama Kategori</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nama" placeholder="Nama Kategori">
            </div>
        </div>
        <div class="row mb-3">
            <label for="create_at" class="col-sm-2 col-form-label">Created At</label>
            <div class="col-sm-5">
                <input type="date" class="form-control date" name="create_at">
                <br>
                <button type="submit" class="btn btn-primary">Tambah</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </div>
    </form>
</div>
</div>