
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Daftar Pengujian Lab</h1>
        </div>

      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Silahkan Isi Data Dibawah Ini</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <form role="form" id="quickForm" action="<?php echo base_url(); ?>Pelanggan/ujilab_tambah" method="post" >
              <div class="card-body">
                <input type="hidden" name="id_uji" id="id_uji" value="<?php echo $id_uji; ?>">
                <input type="hidden" name="jenis_uji" id="jenis_uji" value="Lapangan">

                <div class="form-group">
                  <label for="exampleInputselect">Jadwal Uji</label>
                  <select class="form-control select2"   style="width: 100%;" name="tanggal_uji" id="tanggal_uji">
                    <option value="">Pilih Jadwal Uji</option>
                    <?php foreach ($jadwal as $u) {?>
                      <option value="<?php echo $u->id; ?>"><?PHP echo date_format(date_create($u->tanggal),"d-m-Y");?> (Kuota : <?php echo $u->kuota; ?> )</option>
                    <?php }?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputselect">Jenis Pembayaran</label>
                  <select class="form-control"  name="jenis_bayar" id="jenis_bayar">
                    <option value="">Pilih Jenis Pembayaran</option>
                    <option value="transfer">Tranfer (Bank-001030400)</option>
                    <option value="cash">Cash</option>
                  </select>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>

          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

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
