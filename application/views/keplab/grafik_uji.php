  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
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
            <!-- BAR CHART -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Pendapatan Per Item Uji</h3>

              </div>

              <div class="card-body">
                <form action="<?php echo base_url(); ?>Grafik/FilterUji" method="post" >
                  <table>
                    <tr>
                      <td>
                        <div class="input-group mb-3">
                         <div class="form-group">
                          <label>Tanggal Mulai:</label>

                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask id="tanggal_mulai" name="tanggal_mulai">
                          </div>
                          <!-- /.input group -->
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="input-group mb-3">
                       <div class="form-group">
                        <label>Tanggal Selesai:</label>

                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                          </div>
                          <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask id="tanggal_selesai" name="tanggal_selesai">
                        </div>
                        <!-- /.input group -->
                      </div>
                    </div>
                  </td>
                  <td><button type="submit" class="btn btn-primary">Filter</button></td>
                </tr></table>

              </form>
              <div class="chart">
                <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
            </div>
            <!-- /.card-body -->
          </div>


        </div>
        <!--/.col (right) -->

        <!-- right column -->
        <div class="col-md-6" >
          <!-- general form elements disabled -->
          <!-- BAR CHART -->
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Kategori Uji</h3>

            </div>

            <div class="card-body">
             
            <div class="chart">
              <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
          </div>
          <!-- /.card-body -->
        </div>


      </div>
      <!--/.col (right) -->

      <!-- right column -->
        <div class="col-md-6" >
          <!-- general form elements disabled -->
          <!-- BAR CHART -->
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Perusahaan Uji</h3>

            </div>

            <div class="card-body">
             
            <div class="chart">
              <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
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
  <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
  reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Add Content Here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/LTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/LTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url(); ?>assets/LTE/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/LTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/LTE/dist/js/demo.js"></script>
<!-- page script -->
<!-- InputMask -->
<script src="<?php echo base_url(); ?>assets/LTE/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/LTE/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>

<!-- date-range-picker -->
<script src="<?php echo base_url(); ?>assets/LTE/plugins/daterangepicker/daterangepicker.js"></script>
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

    var areaChartData = {
      labels  : [<?php foreach ($uji as $id) {
        $nama = $this->db->query("select * from tbl_harga_uji where id = '".$id."';")->result();
        //print_r($nama);
        $getnama = "";
        foreach ($nama as $nm) {
          $getnama = $nm->kategori;
        }
        echo "'".$getnama."',";
      } ?>],
      datasets: [
      {
        label               : 'Data Pendapatan Uji',
        backgroundColor     : 'rgba(60,141,188,0.9)',
        borderColor         : 'rgba(60,141,188,0.8)',
        pointRadius          : false,
        pointColor          : '#3b8bba',
        pointStrokeColor    : 'rgba(60,141,188,1)',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgba(60,141,188,1)',
        data                : [<?php $a = 0; foreach ($uji as $id) {
          $total = $this->db->query("select * from tbl_harga_uji where id = '".$id."';")->result();
        //print_r($nama);
          $gettotal = "";
          foreach ($nama as $nm) {
            $gettotal = $nm->harga * $jumlah[$a];
          }
          echo $gettotal.",";
          $a++;
        } ?>]
      },
      // {
      //   label               : 'Electronics',
      //   backgroundColor     : 'rgba(210, 214, 222, 1)',
      //   borderColor         : 'rgba(210, 214, 222, 1)',
      //   pointRadius         : false,
      //   pointColor          : 'rgba(210, 214, 222, 1)',
      //   pointStrokeColor    : '#c1c7d1',
      //   pointHighlightFill  : '#fff',
      //   pointHighlightStroke: 'rgba(220,220,220,1)',
      //   data                : [65, 59, 80, 81, 56, 55, 40]
      // },
      ]
    }

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = jQuery.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    // var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp0
    // barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var barChart = new Chart(barChartCanvas, {
      type: 'line', 
      data: barChartData,
      options: barChartOptions
    });

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.

    var donutData        = {
      labels: [<?php foreach ($uji as $id) {
        $nama = $this->db->query("select * from tbl_harga_uji where id = '".$id."';")->result();
        //print_r($nama);
        $getnama = "";
        foreach ($nama as $nm) {
          $getnama = $nm->kategori;
        }
        echo "'".$getnama."',";
      } ?>],
      datasets: [
        {
          data: [<?php $a = 0; foreach ($uji as $id) {
          $total = $this->db->query("select * from tbl_harga_uji where id = '".$id."';")->result();
        //print_r($nama);
          $gettotal = "";
          foreach ($nama as $nm) {
            $gettotal = $jumlah[$a];
          }
          echo $gettotal.",";
          $a++;
        } ?>],
        backgroundColor : [<?php $a = 0; foreach ($uji as $id) {
          echo "'#" . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT)."',";
        } ?>],
        }
      ]
    }

    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = donutData;
    var pieOptions     = {
      maintainAspectRatio : true,
      responsive : true,
      legend: {
            display: true,
            position: 'bottom',
            labels: {
                fontColor: 'rgb(255, 99, 132)'

            }
        }
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions      
    })


     //-------------
    //- LINE CHART -
    //--------------

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
    var lineChartOptions = jQuery.extend(true, {}, areaChartOptions)
    var lineChartData = jQuery.extend(true, {}, areaChartData)
    lineChartData.datasets[0].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, { 
      type: 'line',
      data: lineChartData, 
      options: lineChartOptions
    })

    
  })
</script>
</body>
</html>
