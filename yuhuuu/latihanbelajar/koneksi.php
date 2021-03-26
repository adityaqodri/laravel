<?php
$con = @mysqli_connect('localhost','root','','myearth');

if(!$con){
	echo "Error nih gan :(" . mysqli_connect_error();
	exit();
	}
echo 'koneksi berhasil gan';

?>