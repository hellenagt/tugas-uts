<!DOCTYPE html>
<html>
<head>
	<title>koneksi database MySQL</title>
</head>
<body>
	<h1>Koneksi database MySQL</h1>
	<?php
	$conn=mysqli_connect("localhost","root","","uts");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL : " . mysqli_connect_error();
		exit();
	}
	?>
</body>
</html>