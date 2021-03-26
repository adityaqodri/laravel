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
$countryid=$_POST['countryid'];
$countryname=$_POST['countryname'];
$sql="UPDATE mscountry SET countryname='$countryname' WHERE countryid='$countryid' ";
$result=$con->query($sql);
if ($result) 
{

	?>
		<script>
		alert("data keedit gan");
		window.location.href="countryview.php"; 
		</script>
	<?php

} 
else
{
	?>
		<script>
		alert("data gagal diedit gan");
		window.location.href="countryview.php"; 
		</script>
	<?php
}

?>