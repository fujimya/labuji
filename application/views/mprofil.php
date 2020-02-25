  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profil & Riwayat</h1>
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
                <h3 class="card-title">Profil Pelanggan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php foreach ($profil as $p) {?>
                  <form role="form">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Nama</label>
                          <input type="text" class="form-control" placeholder="Nama" id="nama" name="nama" value="<?php echo $p->nama ?>" disabled>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>NO Telp / HP</label>
                          <input type="text" class="form-control" placeholder="No Telp / HP" name="nope" id="nope" value="<?php echo $p->nope ?>" disabled>
                        </div>

                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Nama Perusahaan</label>
                          <input type="text" class="form-control" placeholder="Nama Perusahaan" name="nama_perusahaan" id="nama_perusahaan" value="<?php echo $p->nama_perusahaan ?>" disabled>
                        </div>
                        <div class="form-group">
                          <label>Email</label>
                          <input type="text" class="form-control" placeholder="Email" name="email" id="email" value="<?php echo $p->email ?>"disabled>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Alamat</label>
                          <textarea class="form-control" rows="5" placeholder="Alamat" name="alamat" id="alamat" disabled><?php echo $p->alamat ?></textarea>
                        </div>
                      </div>
                    </div>
                  </form>
                <?php }?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            
  

         </div>
         <!--/.col (right) -->
       </div>
       <!-- /.row -->
     </div><!-- /.container-fluid -->
   </section>
   <!-- /.content -->
 </div>
