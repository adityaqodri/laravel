<?php
//koneksi server dr database
$servername="localhost";
$username="root";
$password="";
$dbname="mydataearth";
$con=new mysqli($servername,$username,$password,$dbname);

if ($con->connect_error)
{
	die("koneksi gagal".$con->connect_error);
}

//koneksi tabel
$sql=" DELETE FROM mscountry WHERE countryid='$_GET[id]' ";
$result=$con->query($sql);

if ($result) 
{

	?>
		<script>
		alert("data udah dihapus");
		window.location.href="countryview.php"; 
		</script>
	<?php

}

?>