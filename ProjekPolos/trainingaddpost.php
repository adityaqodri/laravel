<?php

//koneksi server dan dbase
$servername="localhost";
$username="root";
$password="";
$dbname="training";
$con=new mysqli($servername,$username,$password,$dbname);

if ($con->connect_error)
{
	die("coba lagi deh, gagal soalnya. coba buka dari form".$con->connect_error);
}

//koneksitabel
$trainingid= $_POST['trainingid'];
$trainingnama= $_POST['trainingnama'];
$trainingjadwal= $_POST['trainingjadwal'];
$trainingtempat= $_POST['trainingtempat'];
$trainingharga= $_POST['trainingharga'];
$sql=" INSERT INTO mstraining(trainingid, trainingnama, trainingjadwal, trainingtempat, trainingharga) VALUES('$trainingid','$trainingnama','$trainingjadwal','$trainingtempat','$trainingharga')";
$result= $con->query($sql);
 
 
 //if ($result)
 	if (isset($_POST['trainingid']) || isset($_POST['trainingnama']) || isset($_POST['trainingjadwal'] || isset($_POST['trainingtempat'] || isset($_POST['trainingharga'])) 
	//else(empty($trainingid) || empty($trainingnama) || empty($trainingjadwal) || empty($trainingtempat) || empty($trainingharga))
?>
		<script>
		alert("data kesimpan gan");
		window.location.href="homejadwaltraining.php"
		</script>
	<?php

} 
else
{
	?>
		<script>
		alert("data gagal simpan gan");
		window.location.href="lihatjadwaltr.php"
		</script>
	<?php
}
?>
