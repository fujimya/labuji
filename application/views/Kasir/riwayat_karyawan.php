  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Uji Lab</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- right column -->
          <div class="col-md-12">
            <!-- general form elements disabled -->
            
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Data Uji Lab</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <a href="<?php echo base_url(); ?>regis"><button class="btn btn-primary btn-sucses">Pengujian <span class="fas fa-plus"></span></button></a>
                <br>
                <br>
                <table id="example1" class="display nowrap" width="100%">
                  <thead>
                    <tr>
                      <th>No Pengujian</th>
                      <th>Tanggal Uji</th>
                      <th>Nama Pelanggan</th>
                      <th>NO HP</th>
                      <th>Kategori Pengujian</th>
                      <th>Nama Pengujian</th>
                      <th>Harga</th>
                      <th>Keterangan</th>
                      <!-- <th>Pembayaran</th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($uji as $uj) {?>
                      <tr>
                        <td><?php echo $uj->faktur; ?></td>
                        <td><?php echo $uj->tanggal_uji; ?></td>
                        <td><?php echo $uj->nama; ?></td>
                        <td><?php echo $uj->nope; ?></td>
                        <td><?php echo $uj->kategori; ?></td>
                        <td><?php echo $uj->item_uji; ?></td>
                        <td>Rp <?php echo number_format($uj->harga,0,',','.'); ?></td>
                        <td><?php echo $uj->keterangan; ?></td>
                        <!-- <td>
                          <?php if(!empty($uj->bukti_bayar)){?>
                            <a target="_blank" href="<?php echo $uj->bukti_bayar; ?>">Lihat Bukti <span class="fas fa-list"></span></a>
                          <?php }else{ echo "Belum Bayar";}?>
                        </td> -->                        
                      </tr>
                    <?php } ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>No Pengujian</th>
                      <th>Tanggal Uji</th>
                      <th>Nama Pelanggan</th>
                      <th>NO HP</th>
                      <th>Jenis Pengujian</th>
                      <th>Nama Pengujian</th>
                      <th>Harga</th>
                      <th>Keterangan</th>
                      <!-- <th>Pembayaran</th> -->
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>


          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

