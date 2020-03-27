<!DOCTYPE html>
<html>
<head>
	<title>Planta Decor</title>
		<link rel="stylesheet" type="text/css" href="REAL.css">
</head>
<body>

	<div class="huhu">
		<div class="navbar">
			<img src="MHCM1421.JPEG" height="80px">
			<ul>
			<li><a href="homee.php">Home</a></li>
			<li><a href="portofolio.php">Portofolio</a></li>
			<li><a href="service.php">Service</a></li>
			<li><a href="register.php">Register</a></li>
			<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
		<br></br>
	</div>
	
</body>
</html>
	<?php
		include 'koneksi.php';
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$code = $_POST['code'];

		$sql=mysqli_query($conn,"INSERT INTO regis VALUES ('$name','$phone', '$email', '$address', '$code')"); 
		if ($sql){
			header("location: member.php");
			
		} else {
			header("location: register.php");
		}
		?>