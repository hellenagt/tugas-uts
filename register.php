<!DOCTYPE html>
<html>
<head>
	<title>Planta Decor</title>
		<link rel="stylesheet" type="text/css" href="REAL.css">
</head>
<body>
	<script type="javascript"></script>
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
		<form class="input" method="POST" action="regisdata.php">
			<div class="hihi"><center>REGISTER</center></div>
			<input type="text" class="ip" name="name" placeholder="Name" required>
			<input type="text" class="ip" name="phone" placeholder="Phone" required>
			<input type="text" class="ip" name="email" placeholder="Email" required>
			<input type="text" class="ip" name="address" placeholder="Address" required>
			<input type="text" class="ip" name="code" placeholder="Your last invoice code" required>
			<br>
			<input type="submit" class="btn" value="Register" onclick="confirm('Have you entered the correct data?')">
			<input type="Reset" class="btn" value="Reset">
		</form>
	</div>
	
</body>
</html>
