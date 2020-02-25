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
                <a href="<?php echo base_url(); ?>mregis"><button class="btn btn-primary btn-sucses">Pengujian <span class="fas fa-plus"></span></button></a>
                <br>
                <br>
                <!-- <table id="example1" class="display nowrap" width="100%">
                  <thead>
                    <tr>
                      <th>No Pengujian</th>
                      <th>Tanggal Uji</th>
                      <th>Kategori Pengujian</th>
                      <th>Nama Pengujian</th>
                      <th>Harga</th>
                      <th>Keterangan</th>
                      <th>Pembayaran</th>
                      <th>Hasil Uji</th>
                      <th> </th>
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
                        <td>
                          <?php if($uj->jenis_bayar == 'transfer'){if($uj->bukti_bayar != '-'){?>
                            <a target="_blank" href="<?php echo $uj->bukti_bayar; ?>">Lihat Bukti <span class="fas fa-list"></span></a>
                          <?php }else{?>
                            <button class="btn btn-primary btn-sucses bukti_bayar" type="button" data-toggle="modal" data-target="#modal-default" data-faktur="<?php echo $uj->faktur; ?>">Upload <span class="fas fa-upload"></span></button>
                          <?php }}else{ echo "-";}?>
                        </td>
                        <td>
                          <?php if($uj->hasil_uji != '-'){?>
                            <a href="">hasil_uji.pdf <span class="fas fa-download"></span></a></td>
                          <?php }else{ echo $uj->status_uji;}?>
                          <td>
                            <a target="_blank" href="<?php echo base_url(); ?>/invoice/<?php echo $uj->faktur; ?>">Invoice <span class="fas fa-print"></span></a>
                          </td>
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
                        <th>Pembayaran</th>
                        <th>Hasil Uji</th>
                        <th></th>
                      </tr>
                    </tfoot>
                  </table> -->
                  <?php foreach ($uji as $uj) {?>
                    <div class="card text-center">
                      <div class="card-header">
                       No Uji: <?php echo $uj->faktur; ?> <br>
                      <!--  Status Uji: <?php echo $uj->status_uji; ?> -->
                     </div>
                     <div class="card-body">
                      <h4 class="text-left"><b>Rp <?php echo number_format($uj->harga,0,',','.'); ?></b></h4>
                      <p class="text-left"><b><?php echo $uj->kategori; ?></b> - <?php echo $uj->item_uji; ?> ( <?php echo $uj->keterangan; ?>)</p>
                      <?php if($uj->jenis_bayar == 'transfer' || $uj->status_uji == 'pending'){?>
                        <a target="_blank" href="<?php echo base_url(); ?>/invoice/<?php echo $uj->faktur; ?>">Invoice <span class="fas fa-print"></span></a>
                        <hr>
                        <?php if($uj->bukti_bayar == '-'){?>
                        <button class="btn btn-primary btn-sucses bukti_bayar" type="button" data-toggle="modal" data-target="#modal-default" data-faktur="<?php echo $uj->faktur; ?>">Upload Bukti Bayar <span class="fas fa-upload"></span></button>

                      <?php } if($uj->bukti_bayar != '-' && $uj->jenis_bayar == 'transfer'){ ?>
                        <a target="_blank" href="<?php echo $uj->bukti_bayar; ?>">Lihat Bukti <span class="fas fa-list"></span></a>
                      <?php } }?>
                      <?php if($uj->jenis_bayar == 'transfer' && $uj->status_uji == 'process'){?>
                        <a target="_blank" href="<?php echo $uj->bukti_bayar; ?>">Lihat Bukti <span class="fas fa-list"></span></a>
                      <?php }?>
                      <?php if($uj->status_periksa == 'done'){?>
                        <a target="_blank" href="<?php echo $uj->hasil_uji; ?>">Hasil Uji <span class="fas fa-download"></span></a>
                      <?php }?>
                    </div>
                    <div class="card-body">
                      <label>Timeline :</label>
                     <select class="form-control select2"   style="width: 100%;" name="tanggal_uji" id="tanggal_uji">
                    <?php 
                      $time = $this->db->query("select * from tbl_timeline where faktur = '".$uj->faktur."';")->result();
                      foreach ($time as $m) {
                      ?>
                       <option value=""><?php echo $m->status; ?> Tanggal : <?PHP echo date_format(date_create($m->waktu),"d-m-Y h:i:sa");?> </option>
                    <?php }?>
                  </select>
                    </div>
                    <div class="card-footer text-muted">
                      Tanggal : <?PHP echo date_format(date_create($uj->tanggal_uji),"d-m-Y");?>
                    </div>
                  </div>
                <?php } ?>
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
      <?php echo form_open_multipart('Pelanggan/mupload_bukti'); ?>
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