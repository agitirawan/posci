 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col">
                     <h1 class="m-0 text-dark">Pelanggan</h1>
                 </div><!-- /.col -->
             </div><!-- /.row -->
         </div><!-- /.container-fluid -->
     </div>
     <!-- /.content-header -->

     <!-- Main content -->
     <section class="content">
         <div class="container-fluid">
             <!-- <form id="form"> -->
             <form action="<?= base_url('pelanggan/proses_edit_data') ?>" method="post">
                 <input type="hidden" name="id" value="<?php echo $pelanggan['id'] ?>">
                 <div class="form-group">
                     <label>Nama</label>
                     <input type="text" class="form-control" placeholder="Nama" name="nama" value=" <?php echo $pelanggan['nama'] ?>" required>
                 </div>
                 <div class="form-group">
                     <label>Jenis Kelamin</label>
                     <select name='jenis_kelamin' class='form-control'>
                         <?php
                            if ($pelanggan['jenis_kelamin'] == 'Pria') { ?>
                             <option value='Pria' selected>Pria</option>
                             <option value='Wanita'>Wanita</option>;
                         <?php } else { ?>
                             <option value='Pria'>Pria</option>
                             <option value='Wanita' selected>Wanita</option>;
                         <?php
                            }
                            ?>
                     </select>
                 </div>
                 <div class="form-group">
                     <label>Alamat</label>
                     <input type="text" class="form-control" placeholder="Alamat" name="alamat" value=" <?php echo $pelanggan['alamat'] ?>" required>
                 </div>
                 <div class="form-group">
                     <label>Telepon</label>
                     <input type="number" class="form-control" placeholder="Telepon" name="telepon" value=" <?php echo $pelanggan['telepon'] ?>" required>
                 </div>
                 <button class="btn btn-success" type="submit">Add</button>
                 <button class="btn btn-danger" data-dismiss="modal">Close</button>
             </form>