<style>
.color-palette {
  height: 35px;
  line-height: 35px;
  text-align: right;
  padding-right: .75rem;
}

.color-palette.disabled {
  text-align: center;
  padding-right: 0;
  display: block;
}

.color-palette-set {
  margin-bottom: 15px;
}

.color-palette span {
  display: none;
  font-size: 12px;
}

.color-palette:hover span {
  display: block;
}

.color-palette.disabled span {
  display: block;
  text-align: left;
  padding-left: .75rem;
}

.color-palette-box h4 {
  position: absolute;
  left: 1.25rem;
  margin-top: .75rem;
  color: rgba(255, 255, 255, 0.8);
  font-size: 12px;
  display: block;
  z-index: 7;
}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="card card-default color-palette-box" style="background-image: url('https://cdn1.vectorstock.com/i/1000x1000/09/20/city-and-nature-flat-design-background-vector-21370920.jpg');">
      <div class="card-header bg-success">
        <h3 class="card-title">
          <i class="fas fa-list"></i>
          PILIH UJI
        </h3>
      </div>
      <div class="card-body">
        <!-- /.col-12 -->
        <div class="row">
          <?php foreach ($list as $ls){ ?>
          <div class="col-sm-4 col-md-4">
            <div class="card">
              <div class="card-body">
                <h1 class="card-title"><b>Rp <?php echo number_format($ls->harga,0,',','.'); ?></b></h1>
                <p class="card-text"><?php echo $ls->item_uji; ?></p>
                <a href="<?php echo base_url(); ?>Pelanggan/ujilab_isi/<?php echo$ls->id; ?>" class="btn btn-primary">LAKUKAN UJI <i class="fa fa-arrow-alt-circle-right"></i></a>
              </div>
            </div>
          </div>
          <?php } ?>

        </div>

      </div>

    </div>
    <!-- /.row -->
  </div>
  <!-- /.card-body -->
</div>
</section>

<!-- Main content -->
<section class="content">
</div>


</div>
<!--/.col (right) -->
</div>
<!-- /.row -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
