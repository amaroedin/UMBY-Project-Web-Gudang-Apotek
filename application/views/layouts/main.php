<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Gudang Apotek</title>

	<!-- CSS core -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap.min.css">

	<!-- style -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/layout.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/skin-themes.min.css">

	<!-- Jquery core -->
	<script src="<?= base_url() ?>assets/js/jquery-1.11.1.min.js"></script>
	<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>assets/js/slimscroll.js"></script>
	<script src="<?= base_url() ?>assets/js/app.js"></script>

	<!-- Datepicker -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datepicker/jquery-ui-datepicker-1.10.4.min.css">
	<script type="text/javascript" src="<?= base_url()?>assets/plugins/datepicker/jquery-ui-datepicker-1.10.4.min.js"></script>

	<!-- Fontawesome -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/font-awesome/css/font-awesome.min.css">
	
	<!-- Form-Validation -->
	<script type="text/javascript" src="<?= base_url()?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>

	<!-- Jquery-Confirm -->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/plugins/jquery-confirm/jquery-confirm.min.css">
	<script type="text/javascript" src="<?= base_url()?>assets/plugins/jquery-confirm/jquery-confirm.min.js"></script>
	<!-- Jquery-notif -->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/plugins/lobibox/css/lobibox.css">
	<script type="text/javascript" src="<?= base_url()?>assets/plugins/lobibox/js/lobibox.js"></script>
	<style type="text/css">
		.lobibox-delay-indicator {
			display: none;
		}
	</style>

	<!-- Select2 -->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/plugins/select2/css/select2.min.css">
	<script type="text/javascript" src="<?= base_url()?>assets/plugins/select2/js/select2.full.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$("#<?= $cls_name?>_form").validate();

			$(".required").each(function(){
				$(this).rules('add', {
		            required: true,
		            messages: {
		            	required: 'harus diisi'
		            }
		        });
			});

			$('select').select2();
		});

		$(function(){
			$('.confirmation').click(function(e){
				e.preventDefault();
				$(this).each(function(){
					href = $(this).attr('href');
					show_delete(href);
				});
			});

			<?php if($message = $this->session->flashdata('success')){ ?>
				Lobibox.notify('success', {
					size: 'mini',
					sound: false,
					delay: 1500,
					title: 'Success',
					msg: '<?= $message;?>'
				});
			<?php }if($message = $this->session->flashdata('info')) { ?>
				Lobibox.notify('info', {
					size: 'mini',
					sound: false,
					delay: 1500,
					title: 'Information',
					msg: '<?= $message;?>'
				});
			<?php } ?>
		});
	</script>
</head>
<body class="sidebar-mini skin-red fixed">
	<div class="wrapper">
		<header class="main-header">
            <!-- Logo -->
            <a href="#" class="logo"><span class="logo-lg"><b>Logo Here</b></span></a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
            	<div class="navbar-custom-menu">
            		<a href="<?= base_url('site/logout'); ?>" class="btn btn-default"><i class="fa fa-sign-out"></i> Logout</a>
            	</div>
            </nav>
		</header>

		<!-- Begin-sidebar -->
		<div class="main-sidebar">
			<div class="slimScrollDiv">
				<div class="sidebar">
					<!-- Sidebar user -->
					<div class="user-panel">
						<div class="profile_pic">
							<img src="<?= base_url() ?>assets/images/default.jpg" class="img-circle profile_img">
						</div>
						<div class="profile_info">
							<span>Admin</span>
							<h2>Administrator</h2>
						</div>
					</div>

					<!-- Sidebar menu -->
					<?php $this->load->view('layouts/sidebar') ?>
				</div>
			</div>
		</div>
		<!-- / .End-sidebar -->

		<!-- Begin-content -->
		<div class="content-wrapper">
			<div class="slimScrollDiv">
				<div class="content-header">
					<div id="page-title">
						<h2><?= isset($current_icon) ? $current_icon : '';?> <?= isset($current_page) ? $current_page : '';?></h2>
					</div>
					<!-- Breadcrumbs -->
					<?= $this->breadcrumbs->show();?>
				</div>
				<div class="content">
					<div class="row">
						<?php $this->load->view($content); ?>
					</div>
				</div>
			</div>
		</div>
		<!-- / .End-content -->

		<footer class="main-footer">
			<strong>Copyright &copy; 2016 || UMB Yogyakarta :: <a href="mailto:amarudhien@gmail.com">Amarudin</a></strong>
		</footer>
	</div>
</body>
</html>