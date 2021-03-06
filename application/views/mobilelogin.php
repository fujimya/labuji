<!DOCTYPE html>
<html>
<head>
	<?php $status = $this->session->userdata('status');
	?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Log in</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/LTE/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/LTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/LTE/dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page" style="background-image: linear-gradient(#5151f7, #00d4ff);">
	<?php if($status['status'] == '1'){ ?>
		<div class="alert alert-success alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<h5><i class="icon fas fa-check"></i> Selamat !</h5>
			Pendaftaran anda berhasil, silahkan login.
		</div>
	<?php } $this->session->unset_userdata('status');?>
	<?php if($status['status'] == '2'){ ?>
		<div class="alert alert-warning alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<h5><i class="icon fas fa-exclamation-triangle"></i> Gagal Login</h5>
			Pastikan Email,Password dan Capthcha kamu benar!
		</div>
	<?php } $this->session->unset_userdata('status');?>
	<div class="login-box">
		<div class="login-logo">
			<i class="fa fa-users text-white" style="font-size:68px;"></i>
			<h1 class="text-white">LOGIN</h1>
		</div>
		<!-- /.login-logo -->
		<div class="card">
			<div class="card-body login-card-body">
				<p class="login-box-msg">Silahkan Login Terlebih Dahulu</p>
				<form  action="<?php echo base_url(); ?>MobileLogin/login" method="post"  >
					<div class="input-group mb-3">
						<input type="email" class="form-control" placeholder="Email" id="email" name="email" required>
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="checkbox" onclick="myFunction()">Show Password
						<script type="text/javascript">
							function myFunction() {
								var x = document.getElementById("password");
								if (x.type === "password") {
									x.type = "text";
								} else {
									x.type = "password";
								}
							}
						</script>
					</div>
					<div class="input-group mb-3">
						<?php echo $image; ?>
					</div>
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="Captcha" id="captchatxt" name="captchatxt" required>
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-8">
							<div class="icheck-primary">
								<a href="<?php echo base_url(); ?>Pelanggan/daftar"><span class="fas fa-user"></span> Daftar Sekarang</a>
							</div>
						</div>
						<!-- /.col -->
						<div class="col-4">
							<button type="submit" class="btn btn-primary btn-block">Masuk</button>
						</div>
						<!-- /.col -->
					</div>
				</form>

				<!-- /.social-auth-links -->

			</div>
			<!-- /.login-card-body -->
		</div>
	</div>
	<!-- /.login-box -->

	<!-- jQuery -->
	<script src="<?php echo base_url(); ?>/assets/LTE/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo base_url(); ?>/assets/LTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url(); ?>/assets/LTE/dist/js/adminlte.min.js"></script>

</body>
</html>
