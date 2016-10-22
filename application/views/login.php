<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Info Dosen | Login</title>

<link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>/assets/css/AdminLTE.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  
 
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body class="hold-transition login-page">		
	
	<div class="login-box">
	  <div class="login-logo">
	    <b>INFO</b>DOSEN</a>
	  </div>
	  
	  <!-- /.login-logo -->
	  <div class="login-box-body">
	    <p class="login-box-msg">Masukkan username dan password</p>
		<?php echo  validation_errors(); ?>
		<?php echo  form_open('Welcome/validasi'); ?>
	    <!-- <form role="form" name="form" method="POST" action="<?php echo site_url('Welcome/validasi'); ?>"> -->
	      <div class="form-group has-feedback">
	        <input type="text" class="form-control" placeholder="Username" name="username" id="username" required autofocus>
	        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
	      </div>
	      <div class="form-group has-feedback">
	        <input type="password" class="form-control" placeholder="Password" name="password" id="password" required autofocus>
	        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
	      </div>
	      <br/>
	      <div class="row">
	        <!-- /.col -->
	        <div class="col-xs-8"></div>
	        <div class="col-xs-4">
	          <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
	        </div>
	        <!-- /.col -->
	      </div>
	    </form>

	  </div>
	  <!-- /.login-box-body -->
	</div>
<!-- /.login-box -->
</body>

</html>
