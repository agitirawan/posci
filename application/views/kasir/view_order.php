<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Antrian Terkini</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>

          <div class="row mb-3">
            
            <?php

                if ( count($pemesanan) > 1 ) :
                foreach ( $pemesanan AS $urutan => $row ) :
            ?>


            <?php if ( $urutan == 0 ) : ?>

            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-md-8 mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">#<?php echo date('d F Y H.i s', strtotime($row['tanggal'])) ?> dtk</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">#KD-<?php echo $row['id_transaksi'] ?></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> Pemesanan dengan Eksekusi <br><?php echo $row['total_eksekusi'] / 60 ?> menit</span>
                        <br>
                        <h5>Total Menu : <span class="text-primary"><?php echo $row['total_pesan'] ?> Item</span></h5>
                        <span class="badge badge-warning">Menunggu Pesanan</span>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <!-- <i class="fas fa-calendar fa-2x text-primary"></i> -->
                      <img src="<?php echo base_url('assets/img/loader2.gif') ?>" alt="" style="width: 90px; height: 75px; object-fit: cover">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <?php elseif ( $urutan == 1 ) : ?>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card" style="font-size: 9px">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-md-8 mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">#<?php echo date('d F Y H.i s', strtotime($row['tanggal'])) ?></div>
                      <div class="h6 mb-0 font-weight-bold text-gray-800">#KD-<?php echo $row['id_transaksi'] ?></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> Pemesanan dengan Eksekusi <?php echo $row['total_eksekusi'] / 60 ?> menit</span>
                        <br>
                        <h6>Total Menu : <span class="text-primary"><?php echo $row['total_pesan'] ?> Item</span></h6>
                        <span class="badge badge-warning">Menunggu Pesanan</span>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <!-- <i class="fas fa-calendar fa-2x text-primary"></i> -->
                      <img src="<?php echo base_url('assets/img/loader2.gif') ?>" alt="" style="width: 65px; height: 65px; object-fit: cover">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <?php elseif ( $urutan == 2 ) : ?>

            <div class="col-xl-3 col-md-6 mb-4" style="vertical-align: middle !important;">
                <br>
              <div class="card" style="font-size: 9px">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-md-8 mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">#<?php echo date('d F Y H.i s', strtotime($row['tanggal'])) ?></div>
                      <div class="h6 mb-0 font-weight-bold text-gray-800">#KD-<?php echo $row['id_transaksi'] ?></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> Pemesanan dengan Eksekusi <?php echo $row['total_eksekusi'] / 60 ?> menit</span>
                        <br>
                        <small>Total Menu : <span class="text-primary"><?php echo $row['total_pesan'] ?> Item</span></small>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <!-- <i class="fas fa-calendar fa-2x text-primary"></i> -->
                      <img src="<?php echo base_url('assets/img/loader2.gif') ?>" alt="" style="width: 65px; height: 65px; object-fit: cover">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <?php elseif ( $urutan == 3 ) : ?>
            <div class="col-xl-2 col-md-6 mb-4" style="vertical-align: middle !important;">
              <br>
              <br>
              <div class="card" style="font-size: 9px">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-md-8 mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">#<?php echo date('d M Y H.i', strtotime($row['tanggal'])) ?></div>
                      <div class="mb-0 font-weight-bold text-gray-800"><small>#KD-<?php echo $row['id_transaksi'] ?></small></div>
                      
                    </div>
                    <div class="col-md-3">
                      <!-- <i class="fas fa-calendar fa-2x text-primary"></i> -->
                      <img src="<?php echo base_url('assets/img/loader2.gif') ?>" alt="" style="width: 35px; height: 15px; object-fit: cover">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endif; ?>


            <?php endforeach;
            endif; ?>
            

            <!-- Invoice Example -->
            <div class="col-xl-12 col-lg-7 mb-4">
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Antrian Keseluruhan</h6>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>Urutan Antrian</th>
                        <th>Waktu Eksekusi</th>
                        <th>Order</th>
                        <th>Nama</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ( $pemesanan AS $urutan => $row ) : ?>
                      <tr>
                        <td><a href="#">Urutan - <?php echo $urutan + 1 ?></a></td>
                        <td><?php echo $row['total_eksekusi'] / 60 ?> menit</td>
                        <td>#KD-<?php echo $row['id_transaksi'] ?></td>
                        <td><?php echo $row['nama'] ?></td>
                        <td><?php echo date('d M Y H.i.s', strtotime( $row['tanggal'] )) ?> dtk</td>
                        <td>
                            <a href="javascript:void(0);" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#detail-<?php echo $row['id_transaksi'] ?>">Selesaikan</a>
                            <!-- Modal Logout -->
                            <div class="modal fade" id="detail-<?php echo $row['id_transaksi'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
                                aria-hidden="true">
                                <div class="modal-dialog modal-sm" role="document">
                                <div class="modal-content">
                                    
                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4>Selesaikan Pemesanan</h4>
                                        <p>Konfirmasi untuk menyelesaikan pemesanan ini</p>
                                        <br>
                                        <small>
                                            <b>Catatan : </b>
                                            Dengan menekan tombol ini status pemesanan akan selesai
                                        </small>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Tutup</button>
                                    <a href="<?php echo base_url('kasir/keputusan/batal?id_transaksi='. $row['id_transaksi']) ?>" class="btn btn-outline-danger">Batalkan</a>
                                    <a href="<?php echo base_url('kasir/keputusan/selesai?id_transaksi='. $row['id_transaksi']) ?>" class="btn btn-primary">Selesai</a>
                                    </div>
                                </div>
                                </div>
                            </div>

                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
           
          </div>
          <!--Row-->

          

        </div>
        <!---Container Fluid-->