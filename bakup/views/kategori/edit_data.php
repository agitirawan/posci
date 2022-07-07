<div class="container-fluid">
    <h3>Halaman edit Kategori</h3>
    <hr>
    <br>

    <form method="post" action="<?php echo base_url() ?>kategori/proses_edit_data">
        <div class="row mb-3">
            <input type="hidden" name="id_kategori" value="<?php echo $kategori['id_kategori'] ?>">
            <label for="nama" class="col-sm-2 col-form-label">Nama Kategori</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nama" placeholder="Nama Kategori" value=" <?php echo $kategori['nama'] ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="create_at" class="col-sm-2 col-form-label">Created At</label>
            <div class="col-sm-5">
                <input type="date" class="form-control date" name="create_at" value=" <?php echo $kategori['create_at'] ?>">
                <br>
                <button type="submit" class="btn btn-primary">ubah</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </div>
    </form>
</div>
</div>