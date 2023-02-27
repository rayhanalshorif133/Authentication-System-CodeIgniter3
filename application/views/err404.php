<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php
$ci = new CI_Controller();
$ci = &get_instance();
$ci->load->helper('url');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AdminLTE 3 | 404</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/custom.css" type="text/css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/adminlte/plugins/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/adminlte/plugins/jqvmap/jqvmap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/adminlte/dist/css/adminlte.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/adminlte/plugins/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/adminlte/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">

		<!-- Preloader -->
		<div class="preloader flex-column justify-content-center align-items-center">
			<img class="animation__shake" src="<?php echo base_url(); ?>public/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
		</div>
		<?php $this->view('templates/_partials/sidebar'); ?>
		<div class="content-wrapper">
			<?php $this->view('templates/_partials/header'); ?>
			<!-- Main content -->
			<section class="content">
				<div class="error-page">
					<h2 class="headline text-warning"> 404</h2>
					<div class="error-content">
						<h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>
						<p>
							We could not find the page you were looking for.
							Meanwhile, you may <a href="<?php echo base_url() ?>">return to dashboard</a> or try using the search form.
						</p>
						<form class="search-form">
							<div class="input-group">
								<input type="text" name="search" class="form-control" placeholder="Search">
								<div class="input-group-append">
									<button type="submit" name="submit" class="btn btn-warning"><i class="fas fa-search"></i>
									</button>
								</div>
							</div>

						</form>
					</div>

				</div>
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
		<?php $this->view('templates/_partials/footer'); ?>


		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>

	<script src="<?php echo base_url(); ?>public/adminlte/plugins/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>public/adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script>
		$.widget.bridge('uibutton', $.ui.button)
	</script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo base_url(); ?>public/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- ChartJS -->
	<script src="<?php echo base_url(); ?>public/adminlte/plugins/chart.js/Chart.min.js"></script>
	<!-- Sparkline -->
	<script src="<?php echo base_url(); ?>public/adminlte/plugins/sparklines/sparkline.js"></script>
	<!-- JQVMap -->
	<script src="<?php echo base_url(); ?>public/adminlte/plugins/jqvmap/jquery.vmap.min.js"></script>
	<script src="<?php echo base_url(); ?>public/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
	<!-- jQuery Knob Chart -->
	<script src="<?php echo base_url(); ?>public/adminlte/plugins/jquery-knob/jquery.knob.min.js"></script>
	<!-- daterangepicker -->
	<script src="<?php echo base_url(); ?>public/adminlte/plugins/moment/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>public/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- Tempusdominus Bootstrap 4 -->
	<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
	<!-- Summernote -->
	<script src="<?php echo base_url(); ?>public/adminlte/plugins/summernote/summernote-bs4.min.js"></script>
	<!-- overlayScrollbars -->
	<script src="<?php echo base_url(); ?>public/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url(); ?>public/adminlte/dist/js/adminlte.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?php echo base_url(); ?>public/adminlte/dist/js/demo.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="<?php echo base_url(); ?>public/adminlte/dist/js/pages/dashboard.js"></script>
</body>

</html>
