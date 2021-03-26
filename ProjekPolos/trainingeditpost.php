<?php 

//koneksi server dr database
$servername="localhost";
$username="root";
$password="";
$dbname="training";
$con=new mysqli($servername,$username,$password,$dbname);

if ($con->connect_error)
{
	die("koneksi gagal".$con->connect_error);
}
//koneksi tabel
$trainingid=$_POST['trainingid'];
$trainingnama=$_POST['trainingnama'];
$trainingjadwal=$_POST['trainingjadwal'];
$trainingtempat=$_POST['trainingtempat'];
$trainingharga=$_POST['trainingharga'];
$sql="UPDATE mstraining SET trainingnama='$trainingnama', trainingjadwal='$trainingjadwal', trainingtempat='$trainingtempat', trainingharga='$trainingharga' WHERE trainingid='$trainingid' ";
$result=$con->query($sql);
//if ($result)
 	if (isset($_POST['trainingid']) || isset($_POST['trainingnama']) || isset($_POST['trainingjadwal'] || isset($_POST['trainingtempat'] || isset($_POST['trainingharga'])) 
	
	{
	elseif(empty($trainingid) || empty($trainingnama) || empty($trainingjadwal) || empty($trainingtempat) || empty($trainingharga)
	} 
{

	?>
		<script>
		alert("data keedit gan");
		window.location.href="homejadwaltraining.php"; 
		</script>
	<?php

} 
else
{
	?>
		<script>
		alert("data gagal diedit gan");
		window.location.href="homejadwaltrainingedit.php"; 
		</script>
	<?php
}

?>