<?php

//koneksi server dan dbase
$servername="localhost";
$username="root";
$password="";
$dbname="training";
$con=new mysqli($servername,$username,$password,$dbname);

if ($con->connect_error)
{
	die("koneksi gagal".$con->connect_error);
}

//koneksitabel
/*$userid=$_POST['userid'];
$password=$_POST['password'];
$sql="SELECT * FROM sysuser WHERE userid='$userid' AND password='$password'";
$result=$con->query($sql);
$row=$result->fetch_assoc();

	if (isset($_POST['username']) || isset($_POST['password'])) 
	{
		header("location: home.php");
	}
	elseif(empty($userid) || empty($password))
	{
		?>
			<script>
			alert("User id atau password Harus Diisi");
			window.location.href="index.php";
			</script>
		<?php
	}elseif (ctype_alpha($userid) == false){
		?>
		<script>
		alert("Userid hanya boleh menggunakan huruf");
		window.location.href="index.php";
		</script>
		<?php
	}else if(is_numeric ($password) == false){
		?>
		<script>
		alert("Pasword hanya boleh menggunakan angka");
		window.location.href="index.php";
		</script>
		<?php
	}else{
		$sql="SELECT * FROM sysuser WHERE userid='$userid' AND password='$password'";
		$result=$con->query($sql);
		 if ($con->errno) {
  die('query error : '.$con-errno.' - '.$mysqli->error);
 }
		?>
		<script>
		alert("Login galgal");
		window.location.href="index.php";
		</script>
		<?php
	}*/
	
?>