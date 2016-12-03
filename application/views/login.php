<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Penjualan Apotek</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap.min.css">
	
	<!-- style -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/login.css">

	<!-- Fontawesome -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/font-awesome.min.css">
</head>
<body>
	<div class="login-box">
		<div class="login-logo">
			<strong>Sistem Informasi Penjualan Apotek</strong>
		</div>
		<div class="login-box-body">
			<h4 class="login-box-msg">Administrator Login</h4>
			<form action="#" method="post" role="form">
				<div class="form-group">
					<div class="input-bg">
						<i class="fa fa-user icon"></i>
						<input type="text" id="loginform-username" class="form-control" name="username" value="" placeholder="Username">
					</div>
				</div>
				<div class="form-group">
					<div class="input-bg">
						<i class="fa fa-lock icon"></i>
						<input type="password" id="loginform-password" class="form-control" name="password" value="" placeholder="Password">
					</div>
				</div>                
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-danger btn-block">Sign In <i class="go go-arrow-forward"></i></button>
                </div>
			</form>
		</div>
	</div>
</body>
</html>