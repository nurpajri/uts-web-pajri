
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$databasename = "utswebservicepajri";
	
	$conn = mysqli_connect($servername, $username, $password, $databasename);
	if(!$conn){
		die("koneksi gagal");
	}
?>