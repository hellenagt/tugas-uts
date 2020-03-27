<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "UTS";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die ("Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE TABLE regis (
NAMA VARCHAR(200) NOT NULL,
PHONE INT(15),
EMAIL VARCHAR(50) NOT NULL,
ADDRESS TEXT NOT NULL,
CODE INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY)"; 
if (mysqli_query($conn, $sql)){
	echo "Created successfuly";
} else {
	echo "Error creating" . mysqli_error($conn);
}
mysqli_close($conn);
?>