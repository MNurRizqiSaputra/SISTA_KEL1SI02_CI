<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login Form</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/CSS/style2.css') ?>">
		<script type="text/javascript" src="<?php echo base_url('public/JS/otentikasi.js"') ?>"></script>
		<link rel="shortcut icon" href="<?php echo base_url('public/images/logosista2.ico') ?>">

	</head>
         
         
	<body>

		<center><img src="<?php echo base_url('public/images/sistalogo2.png') ?>" alt=""></center>
		<center><h1 style="color: rgb(255, 255, 255); font-family: Arial, Helvetica, sans-serif;">LOGIN SEBAGAI ADMIN<b></b></h1></center>
		<center><h1 style="color:  rgb(255, 255, 255); font-family: Arial, Helvetica, sans-serif;">UNTUK DAPAT MENGELOLA SISTEM SISTA</h1></center>
		
		<div id="body">
			<div id="judul">
    				<h1>LOGIN</h1>
    				<div class="underline-title"></div>
  			</div>
		
			
                                <form class="user" method="POST" action="<?=base_url()?>index.php/login/aksi_login">	
				<input type="text" id="username" name="username" class="form_login form-control form-control-user" placeholder=" Masukan Username Anda">
				<input type="password" id="password" name="password" class="form_login form-control form-control-user" placeholder=" Masukan Password Anda ">
				
				<button type="submit" class="tombol_login"> Login </button>
				<button type="button" class="tombol_out" ><a href="<?=base_url()?>" style="color: white;">Cancel </button>
			</form>	

			<center><p style="color: rgb(0, 0, 0); font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Jika Anda Belum Punya Akun</p></center>
			<center><p style="color: rgb(0, 0, 0); font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Silahkan Mendaftar</p></center>
			<center><button type="button"  class="tombol_login" ><a href="<?= base_url()?>index.php/login/halregister/" style="color:white">REGISTER</a></button>
		
		</div>
		
		
	</body>
	
</html>

