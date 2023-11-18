<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="shortcut icon" href="siswa/assets/img/favicon.png">
</head>
<body>
	<!-- <h1>Membuat login multi user level dengan php dan mysqli</h1> -->

	<?php 
	
	if (isset($_GET['pesan'])) {
		if ($_GET['pesan']=="gagal") {
			echo "<div class='alert'>Username dan Pasword tidak sesuai !</div>";
		}
	}
	?>
	<div class="header">
		<div class="inner flex">
			<div class="kontak_login">
				<p class="tulisan_login"> LOG IN </p>
				
				<form action="cek_login.php" method="post">
					<label>Username</label>
					<input type="text" name="username" class="form_login" placeholder="Username .." required="required">

					<label>Password</label>
					<input type="password" name="password" class="form_login" placeholder="Password .." required="required">

					<input type="submit" class="tombol_login" value="MASUK">

					<br/>
					<br/>
<!-- 				<center>
					<a href="#" class="link">Kembali</a>
				</center> -->
			</form>


		</div>
	</div>

	<!--Waves Container-->
	<div>
		<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
		viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
		<defs>
			<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
		</defs>
		<g class="parallax">
			<use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
			<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
			<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
			<use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
		</g>
	</svg>
</div>
<!--Waves end-->

</div>
<!--Content ends-->
<!-- partial -->

</body>
</html>