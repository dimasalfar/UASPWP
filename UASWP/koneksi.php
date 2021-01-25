<?php 
$conn = mysqli_connect("uktfik.my03.com","uktfik_userukt","@#userukt@#","uktfik_userukt");
 
// Check connection
if (mysqli_connect_error()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>