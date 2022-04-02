<?php
	if(!empty($this->session->g_email))
	{
		redirect('index.php/welcome/'.$this->session->g_level);
		exit();
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Design App Versi 1</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--===============================================================================================-->	
		<link rel="icon" type="image/png" href="<?=base_url();?>assets/images/icons/favicon.ico"/>
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/vendor/animate/animate.css">
		<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/vendor/css-hamburgers/hamburgers.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/vendor/select2/select2.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/util.css">
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/main.css">
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/fab.css">
		
		
		<link href="<?=base_url();?>assets/vendor/table-sortable/table-sortable.css" rel="stylesheet"/>
		<link href="<?=base_url();?>assets/vendor/loading/loading.css" rel="stylesheet"/>
		<!--===============================================================================================-->
		<!--===============================================================================================-->	
		<script src="<?=base_url();?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
		<!--===============================================================================================-->
		<script src="<?=base_url();?>assets/js/notifyjs/notify.js" type="text/javascript"></script>
		<script src="<?=base_url();?>assets/js/jquery.ajax-cross-origin.min.js" type="text/javascript"></script>
		<script src="<?=base_url();?>assets/vendor/table-sortable/table-sortable.js" type="text/javascript"></script>
		
 
	</head>
	<body>
		<div class="limiter">
	<div class="container-login100" style="background-image: url('<?=base_url();?>assets/images/img-01.jpg');">
		<div class="wrap-login100 p-t-100 p-b-30">
			<span class="text-center"><?php echo $this->session->flashdata('message'); ?></span>
			<form class="login100-form validate-form" method="POST" action="<?=base_url();?>index.php/welcome/login">
				
				<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
					<input class="input100" type="text" name="email" placeholder="email">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-user"></i>
					</span>
				</div>
				
				<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
					<input class="input100" type="password" name="password" placeholder="Password">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-lock"></i>
					</span>
				</div>
				
				<div class="container-login100-form-btn p-t-10">
					<button type="submit" class="login100-form-btn" name="btn-login" id="btn-login">
						Login
					</button>
				</div>
				
				<div class="text-center w-full p-t-30">
					<strong><a href="https://sayuti.com" target="_blank">sayuti.com</a></strong>
					<?php $copyYear = 2020;
						$curYear = date('Y');
					echo '&#169;&#160;' . $copyYear . (($copyYear != $curYear) ? ' - ' . $curYear : ''); ?> all rights reserved
				</div>
			</form>
		</div>
	</div>
</div>
			<script src="<?=base_url();?>assets/vendor/bootstrap/js/popper.js"></script>
			<script src="<?=base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
			<!--===============================================================================================-->
			<script src="<?=base_url();?>assets/vendor/select2/select2.min.js"></script>
			<!--===============================================================================================-->
			<script src="<?=base_url();?>assets/js/main.js"></script>
			
		</body>
	</html>	