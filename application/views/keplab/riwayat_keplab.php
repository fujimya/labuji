  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Uji Riwayat Lab</h1>
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
                <h3 class="card-title">Data Riwayat Uji Lab</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
               
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
                      <th>Hasil Uji</th>
                      <th>Timeline</th>
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
                        <td>
                            <a target="_blank" href="<?php echo $uj->hasil_uji; ?>">Lihat Hasil <span class="fas fa-list"></span></a>
                        </td> 
                        <td>
                           <?php 
                      $time = $this->db->query("select * from tbl_timeline where faktur = '".$uj->faktur."';")->result();
                      foreach ($time as $m) {
                      ?>
                      <p><span class="fas fa-circle"></span> <br> <?php echo $m->status; ?> <br> Tanggal : <?PHP echo date_format(date_create($m->waktu),"d-m-Y h:i:sa");?></p>

                    <?php }?>
                        </td>                      
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
                      <th>Hasil Uji</th>
                      <th>Timeline</th>
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

