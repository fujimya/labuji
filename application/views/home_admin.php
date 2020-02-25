  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Karyawan</h1>
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
            <a href="<?php echo base_url(); ?>Admin/tambah"><button class="btn btn-primary btn-sucses">Tambah <span class="fas fa-plus"></span></button></a>
            <br><br>
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Data Karyawan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class=" display nowrap" width="100%">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($karyawan as $k) {?>
                      <tr>
                        <td><?php echo $k->id; ?></td>
                        <td><?php echo $k->nama; ?></td>
                        <td><?php echo $k->email; ?></td>
                        <td><?php echo $this->encryption->decrypt($k->password) ?></td>
                        <td>
                          <?php if($k->jabatan != 'su'){?>
                            <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" href="<?php echo base_url(); ?>/Admin/hapus_karyawan/<?php echo $k->id; ?>"><button class="btn btn-danger">Hapus <span class="fas fa-trash"></span></button></a></td>
                          <?php } ?>
                        </tr>
                      <?php } ?>
                    </tbody>
                    <tfoot>
                      <tr>
                       <th>ID</th>
                       <th>Nama</th>
                       <th>Email</th>
                       <th>Password</th>
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
