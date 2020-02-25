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
                      <th>Kategori Pengujian</th>
                      <th>Nama Pengujian</th>
                      <th>Harga</th>
                      <th>Keterangan</th>
                      <th>Jenis Bayar</th>
                      <th>Pembayaran</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($uji as $uj) {?>
                      <tr>
                        <td><?php echo $uj->faktur; ?></td>
                        <td><?php echo $uj->tanggal_uji; ?></td>
                        <td><?php echo $uj->kategori; ?></td>
                        <td><?php echo $uj->item_uji; ?></td>
                        <td>Rp <?php echo number_format($uj->harga,0,',','.'); ?></td>
                        <td><?php echo $uj->keterangan; ?></td>
                        <td><?php echo $uj->jenis_bayar; ?></td>
                        <td>
                          <?php if($uj->jenis_bayar == 'transfer'){
                           if($uj->bukti_bayar != '-'){  ?>
                            <a target="_blank" href="<?php echo $uj->bukti_bayar; ?>">Lihat Bukti <span class="fas fa-list"></span></a>
                            <?php 
                          }if($uj->bukti_bayar == '-'){
                            echo "Belum";
                          }
                        } 
                        if($uj->jenis_bayar == 'cash') { 
                          echo "Tunai";
                        } 
                        ?>
                      </td>
                      <td>
                        <?php if($uj->jenis_bayar == 'transfer'){
                         if($uj->bukti_bayar != '-'){?>
                         <a onclick="return confirm('Apakah bukti bayar sudah benar ?')" href="<?php echo base_url(); ?>/Karyawan/konfirmasi/<?php echo $uj->faktur; ?>"><button class="btn btn-success">Konfirmasi <span class="fas fa-check"></span></button></a>
                       <?php }else{ echo "Belum Bayar";} } if($uj->jenis_bayar == 'cash'){?>
                        <a onclick="return confirm('Apakah bukti bayar sudah benar ?')" href="<?php echo base_url(); ?>/Karyawan/konfirmasi/<?php echo $uj->faktur; ?>"><button class="btn btn-success">Konfirmasi <span class="fas fa-check"></span></button></a>
                      <?php } ?>
                    </tr>
                  <?php } ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>No Pengujian</th>
                    <th>Tanggal Uji</th>
                    <th>Jenis Pengujian</th>
                    <th>Nama Pengujian</th>
                    <th>Harga</th>
                    <th>Keterangan</th>
                    <th>Jenis Bayar</th>
                    <th>Pembayaran</th>
                    <th></th>
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

<!-- 
  modals -->
  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <?php echo form_open_multipart('Pelanggan/upload_bukti'); ?>
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Upload Bukti Bayar</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="faktur" id="faktur" class="faktur">
          <div class="form-group">
            <!-- <label for="customFile">Custom File</label> -->
            <label for="customRange1">Silahkan upload bukti bayar</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="bukti" name="bukti" accept="image/*">
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Upload</button>
        </div>
      </div>
      <?php echo form_close();?>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
      <!-- /.modal -->