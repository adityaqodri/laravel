<?php

//koneksi server dan dbase
$servername="localhost";
$username="root";
$password="";
$dbname="mydataearth";
$con=new mysqli($servername,$username,$password,$dbname);

if ($con->connect_error)
{
	die("koneksi gagal".$con->connect_error);
}

//koneksitabel
$countryid=$_POST['countryid'];
$countryname=$_POST['countryname'];
$sql=" INSERT INTO mscountry(countryid, countryname) VALUES('$countryid','$countryname')";
$result=$con->query($sql);
 
 if ($result) 
{

	?>
		<script>
		alert("data kesimpan gan");
		window.location.href="countryview.php"; 
		</script>
	<?php

} 
else
{
	?>
		<script>
		alert("data gagal simpan gan");
		window.location.href="countryview.php"; 
		</script>
	<?php
}
?>
