 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col">
                     <h1 class="m-0 text-dark">Menu Saji</h1>
                 </div><!-- /.col -->
             </div><!-- /.row -->
         </div><!-- /.container-fluid -->
     </div>
     <!-- /.content-header -->

     <!-- Main content -->
     <section class="content">
         <div class="container-fluid">
             <!-- <form id="form"> -->
             <form action="<?= base_url('Menusaji/proses_edit_data') ?>" method="post">
                 <input type="hidden" name="id" value="<?php echo $menu_saji['id'] ?>">
                 <div class="form-group">
                     <label>Nama Makanan</label>
                     <input type="text" class="form-control" placeholder="Nama_makanan" name="nama_makanan" value=" <?php echo $menu_saji['nama_makanan'] ?>" required>
                 </div>
                 <div class="form-group">
                     <label>Nama Minumuman</label>
                     <select name='nama_minuman' class='form-control'>
                         <input type="text" class="form-control" placeholder="Nama_minuman" name="nama_minuman" value=" <?php echo $menu_saji['nama_minuman'] ?>" required>
                     </select>
                 </div>
                 <div class="form-group">
                     <label>harga</label>
                     <input type="number" class="form-control" placeholder="" name="harga" value=" <?php echo $menu_saji['harga'] ?>" required>
                 </div>

                 <button class="btn btn-success" type="submit">Add</button>
                 <button class="btn btn-danger" data-dismiss="modal">Close</button>
             </form>