 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col">
                     <h1 class="m-0 text-dark">Pesanan_masuk</h1>
                 </div><!-- /.col -->
             </div><!-- /.row -->
         </div><!-- /.container-fluid -->
     </div>
     <!-- /.content-header -->


     <!-- Main content -->
     <section class="content">
         <div class="container-fluid">
             <!-- <form id="form"> -->
             <form action="<?= base_url('pesanan_masuk/proses_edit_data') ?>" method="post">
                 <input type="hidden" name="id" value="<?php echo $pesanan_masuk['id'] ?>">
                 <div class="form-group">
                     <label>Nama</label>
                     <input type="text" class="form-control" placeholder="Nama" name="nama" value=" <?php echo $pesanan_masuk['nama'] ?>" required>
                 </div>
                 <div class="form-group">
                     <label>Alamat</label>
                     <input type="text" class="form-control" placeholder="Alamat" name="Alamat" value=" <?php echo $pesanan_masuk['alamat'] ?>" required>
                 </div>
                 <div class="form-group">
                     <label>tanggal Pesanan</label>
                     <input type="date" class="form-control" placeholder="tgl_pesanan" name="tgl_pesanan" value=" <?php echo $pesanan_masuk['tgl_pesanan'] ?>" required>
                 </div>
                 <div class="form-group">
                     <label>jumlah</label>
                     <input type="number" class="form-control" placeholder="jumlah" name="jumlah" value=" <?php echo $pesanan_masuk['jumlah'] ?>" required>
                 </div>
                 <div class="form-group">
                     <label>Telepon</label>
                     <input type="number" class="form-control" placeholder="Telepon" name="Telepon" value=" <?php echo $pesanan_masuk['telepon'] ?>" required>
                 </div>
                 <div class="form-group">
                     <label>detail Makanan</label>
                     <input type="text" class="form-control" placeholder="Detail_makanan" name="Detail_makanan" value=" <?php echo $pesana_masuk['detail_makanan'] ?>" required>
                 </div>
                 <button class="btn btn-success" type="submit">Add</button>
                 <button class="btn btn-danger" data-dismiss="modal">Close</button>
             </form>