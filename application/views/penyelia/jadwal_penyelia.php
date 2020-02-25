  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Jadwal</h1>
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
            <button class="btn btn-primary btn-sucses" type="button" data-toggle="modal" data-target="#modal-default" >Tambah <span class="fas fa-plus"></span></button>
            <br><br>
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Data Jadwal</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class=" display nowrap" width="100%">
                  <thead>
                    <tr>
                      <th>Tanggal</th>
                      <th>Kuota</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($jadwal as $k) {?>
                      <tr>
                        <td><?php echo date_format(date_create($k->tanggal),"d-m-Y"); ?></td>
                        <td><?php echo $k->kuota; ?> Uji</td>
                        <td>
                          <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" href="<?php echo base_url(); ?>Penyelia/hapus_Jadwal/<?php echo $k->id; ?>"><button class="btn btn-danger">Hapus <span class="fas fa-trash"></span></button></a></td>
                        </tr>
                      <?php } ?>
                    </tbody>
                    <tfoot>
                      <tr>
                       <th>Tanggal</th>
                       <th>Kuota</th>
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
   <!-- /.content-wrapper -->
   <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.3-pre
    </div>
    <strong>Copyright &copy; <?php echo date('Y') ?> <a href="">Lab</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/LTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/LTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>assets/LTE/plugins/select2/js/select2.full.min.js"></script>

<!-- jquery-validation -->
<script src="<?php echo base_url(); ?>assets/LTE/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>assets/LTE/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/LTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/LTE/dist/js/demo.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url(); ?>assets/LTE/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/LTE/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>

<!-- date-range-picker -->
<script src="<?php echo base_url(); ?>assets/LTE/plugins/daterangepicker/daterangepicker.js"></script>

<script type="text/javascript">
  $(document).ready(function () {
  // $.validator.setDefaults({
  //   submitHandler: function () {
  //     alert( "Form successful submitted!" );
  //   }
  // });
  $('#quickForm').validate({
    rules: {
      jenis_uji: {
        required: true
      },
      nama_uji: {
        required: true
      },
      tanggal: {
        required: true,
      },
    },
    messages: {
      jenis_uji: "Silahkan masukan jenis uji",
      nama_uji: "Silahkan masukan nama uji",
      password: "Silahkan masukan tanggal uji",
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
<script>
  $(function () {

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
     //Timepicker
     $('[data-mask]').inputmask()



   })
 </script>

 
 <script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2() 
  })
</script>


</body>
</html>


modals -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <?php echo form_open_multipart('Penyelia/tambah_jadwal'); ?>
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Jadwal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Tanggal Uji :</label>

          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
            </div>
            <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask name="tanggal" id="tanggal">
          </div>
        </div>
        <div class="form-group">
          <label>Kuota Uji :</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-list"></i></span>
            </div>
            <input type="text" class="form-control" name="kuota" id="kuota">
          </div>
          <!-- /.input group -->
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
    <?php echo form_close();?>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

