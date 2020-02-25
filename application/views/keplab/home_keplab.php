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

                <table id="example1" class="display nowrap" width="100%">
                  <thead>
                    <tr>
                      <th>No Pengujian</th>
                      <th>Tanggal Uji</th>
                      <th>Kategori Pengujian</th>
                      <th>Nama Perusahaan</th>
                      <th>Pengujian</th>
                      
                      <th>Hasil Uji</th>
                      <th>Teknisi</th>
                      <th>Konfirmasi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($uji as $uj) {?>
                      <tr>
                        <td><?php echo $uj->faktur; ?></td>
                        <td><?php echo $uj->tanggal_uji; ?></td>
                        <td><?php echo $uj->kategori; ?></td>
                        <td><?php echo $uj->nama_perusahaan; ?></td>
                        <td><?php echo $uj->item_uji; ?></td>
                        
                        <td>
                          <a href="<?php echo $uj->hasil_uji; ?>" target="_blank" >Hasil Uji <span class="fas fa-download"></span></a></td>
                        </td>
                        <td>
                          <?php if(empty($uj->teknisi)){ ?>
                            <button class="btn btn-primary btn-sucses bukti_bayar" type="button" data-toggle="modal" data-target="#modal-default" data-faktur="<?php echo $uj->faktur; ?>">Pilih <span class="fas fa-list"></span></button>
                          <?php }else{$te = $this->db->query("select * from tbl_karyawan where id='".$uj->teknisi."'")->result(); foreach ($te as $t) {echo $t->nama;   }}?>
                        </td>
                        <td>
                          <a onclick="return confirm('Apakah laporan sudah benar ?')" href="<?php echo base_url(); ?>/KepalaLab/konfirmasi/<?php echo $uj->faktur; ?>"><button class="btn btn-success">Konfirmasi <span class="fas fa-check"></span></button></a>

                          <a onclick="return confirm('Apakah anda yakin menolak ?')" href="<?php echo base_url(); ?>/KepalaLab/tolak/<?php echo $uj->faktur; ?>"><button class="btn btn-danger">Tolak <span class="fas fa-trash"></span></button></a>

                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>No Pengujian</th>
                      <th>Tanggal Uji</th>
                      <th>Kategori Pengujian</th>
                      <th>Nama Perusahaan</th>
                      <th>Pengujian</th>
                      
                      <th>Hasil Uji</th>
                      <th>Teknisi</th>
                      <th>Konfirmasi</th>
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
      <?php echo form_open_multipart('Penyelia/pilih_teknisi'); ?>
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Pilih Teknisi Uji</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="faktur" id="faktur" class="faktur">
          <div class="form-group">
            <label for="exampleInputselect">Pilih Teknisi</label>
            <select class="form-control select2"  name="teknisi" id="teknisi" style="width: 100%;">
              <option value="">Pilih Teknisi Uji</option>
              <?php foreach ($teknisi as $u) {?>
                <option value="<?php echo $u->id; ?>"><?PHP echo $u->nama; ?></option>
              <?php }?>
            </select>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Pilih</button>
        </div>
      </div>
      <?php echo form_close();?>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
      <!-- /.modal -->