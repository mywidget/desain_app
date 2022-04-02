<?php
	if(empty($this->session->g_email))
	{
		redirect('index.php/login');
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
		
		<?=$contents;?>
			
			
			<script src="<?=base_url();?>assets/vendor/bootstrap/js/popper.js"></script>
			<script src="<?=base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
			<!--===============================================================================================-->
			<script src="<?=base_url();?>assets/vendor/select2/select2.min.js"></script>
			<!--===============================================================================================-->
			<script src="<?=base_url();?>assets/js/main.js"></script>
			
		</body>
	</html>	