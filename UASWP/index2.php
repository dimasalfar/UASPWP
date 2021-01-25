<!DOCTYPE html>
<html>
<head>
	<title>Login UKT</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background: rgb(221,99,18); background: linear-gradient(122deg, rgba(221,99,18,1) 3%, rgba(213,173,24,1) 43%, rgba(236,110,64,1) 100%);">
 	<center><img src="images/5201.jpg" alt="Logo UPN" ></center>
	<h1 style="color:white;"><b>Selamat Datang di Pembayaran UKT Fakultas Ilmu Komputer<br>
	Universitas Pembangunan Nasional Veteran Jakarta</b></h1>
 
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username" required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password" required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="index2.php">Kembali</a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>