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
                <?php foreach ($uji as $uj) {?>
                  <div class="card text-center">
                    <div class="card-header">
                     No Uji: <?php echo $uj->faktur; ?>
                   </div>
                   <div class="card-body">
                    <h4 class="text-center"><b><?php echo $uj->nama; ?> <br> (<?php echo $uj->nama_perusahaan; ?>)</b></h4>
                    <p class="text-left"><b><?php echo $uj->kategori; ?></b> - <?php echo $uj->item_uji; ?> ( <?php echo $uj->keterangan; ?>)</p>

                    <?php if($uj->status_uji == 'process'){?>
                     <button class="btn btn-primary btn-sucses bukti_bayar" type="button" data-toggle="modal" data-target="#modal-default" data-faktur="<?php echo $uj->faktur; ?>">Upload Hasil Uji <span class="fas fa-upload"></span></button>
                   <?php }?>
                   
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
      <?php echo form_open_multipart('MTeknisi/upload_hasil'); ?>
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Upload Hasil Uji</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="faktur" id="faktur" class="faktur">
          <div class="form-group">
            <!-- <label for="customFile">Custom File</label> -->
            <label for="customRange1">Silahkan upload hasil uji</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="bukti" name="bukti" accept="/*">
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