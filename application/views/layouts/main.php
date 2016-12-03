<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Penjualan Apotek</title>

	<!-- CSS core -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap.min.css">

	<!-- style -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/layout.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/skin-themes.min.css">

	<!-- Fontawesome -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/font-awesome.min.css">

	<!-- Jquery core -->
	<script src="<?= base_url() ?>assets/js/jquery-1.11.1.min.js"></script>
	<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>assets/js/app.js"></script>
</head>
<body class="sidebar-mini skin-red fixed">
	<div class="wrapper">
		<header class="main-header">
            <!-- Logo -->
            <a href="#" class="logo"><span class="logo-lg"><b>Logo Here</b></span></a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
            	<div class="navbar-custom-menu">
            		<a href="#" class="btn btn-default"><i class="fa fa-sign-out"></i> Logout</a>
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
						<h2>Sistem Informasi Penjualan Apotek</h2>
					</div>
				</div>
				<div class="content">
					<div class="row">

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