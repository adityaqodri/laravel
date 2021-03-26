<?php
//Koneksi server dan database
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="teman";
	
	$conn=new mysqli($servername, $username, $password, $dbname);
	
	if($conn->connect_error)
	{
		die("koneksi gagal".$conn->connect_error);
	}
	
//koneksi table
	$sql="SELECT * FROM formlogin WHERE userid='$_POST[userid]'";
	$result=$conn->query($sql);
	
//Koneksi field
	$row=$result->fetch_assoc();
	
//Mengambil data
	/*echo $row['userid'];
	echo "<br>";
	echo $row['password'];*/
	
	if ($row['userid'] == $_POST['userid'] AND $row['password'] == $_POST['password'])
	{
	?>
	<script>
	alert("Selamat Datang di Sistem Manajemen Organisasi BEM ESQ Business School");
	window.location.href="studentview.php";
	</script>
	<?php
	}
	else
	{
	?>
	<script>
	alert("Username atau Password anda tidak terdaftar, silahkan login ulang atau hubungi pengelola sistem.");
	window.location.href="loginfix.php";
	</script>
	<?php
	}

