<?php
	$host = "uktfik.my03.com";
	$user = "uktfik_uktfik";
	$pass = "@#server@#";
	$dbnm = "uktfik_uktmahasiswaupnvj";
	$conn = mysqli_connect ($host, $user, $pass, $dbnm);

//ini buat create connection
	$conn = new mysqli($host, $user, $pass, $dbnm);

//ini buat check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

?>