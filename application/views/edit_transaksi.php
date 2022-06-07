 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col">
                     <h1 class="m-0 text-dark">Transaksi</h1>
                 </div><!-- /.col -->
             </div><!-- /.row -->
         </div><!-- /.container-fluid -->
     </div>
     <!-- /.content-header -->

     <!-- Main content -->
     <section class="content">
         <div class="container-fluid">
             <!-- <form id="form"> -->
             <form action="<?= base_url('Transaksi/proses_edit_data') ?>" method="post">
                 <input type="hidden" name="id" value="<?php echo $Transaksi['id'] ?>">
                 <div class="form-group">
                     <label>tanggal</label>
                     <input type="date" class="form-control" placeholder="tanggal" name="tanggal" value=" <?php echo $Transaksi['tanggal'] ?>" required>
                 </div>
                 <div class="form-group">
                     <label>qty</label>
                     <input type="number" class="form-control" placeholder="qty" name="qty" value=" <?php echo $Transaksi['qty'] ?>" required>
                     </select>
                 </div>
                 <div class="form-group">
                     <label>gambar</label>
                     <input type="file" name="userfile" size="20" name="gambar" value=" <?php echo $Transaksi['gambar'] ?>" required>
                 </div>
                 <div class="form-group">
                     <label>total bayar</label>
                     <input type="number" class="form-control" placeholder="total_bayar" name="total_bayar" value=" <?php echo $Transaksi['total_bayar'] ?>" required>
                 </div>
                 <div class="form-group">
                     <label>jumlah tunai</label>
                     <input type="number" class="form-control" placeholder="jumlah tunai" name="jumlah tunai" value=" <?php echo $Transaksi['jumlah_tunai'] ?>" required>
                 </div>
                 <div class="form-group">
                     <label>pelanggan</label>
                     <input type="text" class="form-control" placeholder="pelanggan" name="pelanggan" value=" <?php echo $Transaksi['pelanggan'] ?>" required>
                 </div>
                 <button class="btn btn-success" type="submit">Add</button>
                 <button class="btn btn-danger" data-dismiss="modal">Close</button>
             </form>