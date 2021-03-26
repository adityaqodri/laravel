<?php 

//Koneksi Server dan Database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_bebas";

$con = new mysqli ($servername,$username,$password,$dbname);

if ($con->connect_error) {
	die("Koneksi Gagal". $con -> connect_error);
}

//Koneksi Tabel
$countryid = $_POST['countryid'];
$countryname = $_POST['countryname'];
$sql = "UPDATE mscountry SET countryname = '$countryname' WHERE countryid = '$countryid' ";
$result = $con -> query($sql);

if ($result) {
	?>
	<script>
		window.location.href="countryview.php";
	</script>
	<?php
} else {
	?>
	<script>
		alert ("Data disimpan");
		window.location.href="countryview.php";
	</script>
	<?php
}
?>