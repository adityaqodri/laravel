<?php
	
	include "koneksi.php";
	
	$userid=$_POST['userid'];
	$password=$_POST['password'];
	
	$result= $conn->query("select*from syslogin");
	
	if($conn->errno){
		die('query error :'.$conn->errno.'-'.$conn->error);
	}
	
	if(isset($_POST['userid']) AND isset($_POST['password']))
	{
		$userid=$_POST['userid'];
		$password=$_POST['password'];
	}
	else
	{
		die("anda harus membuka file dalam file HTML");
	}
	if(empty($userid) || empty($password)){
		?>
		<script>
		alert("Data harus diisi");
		window.location.href="register.php";
		</script>
		<?php
	}
	else if(ctype_alpha($userid) == false){
		?>
		<script>
		alert("User hanya boleh menggunakan huruf");
		window.location.href="register.php";
		</script>
		<?php
	}
	else if(is_numeric ($password) == false){
		?>
		<script>
		alert("Pasword hanya boleh menggunakan angka");
		window.location.href="register.php";
		</script>
		<?php
	}else{
		$sql="INSERT INTO syslogin(userid,password) VALUES ('$userid','$password')";
		$result=$conn->query($sql);

		if($result)
		{
		?>
		<script>
		alert("Data sudah disimpan");
		window.location.href="index.php";
		</script>
		<?php
		}
		else
		{
		?>
		<script>
		alert("Data tidak bisa disimpan");
		window.location.href="register.php";
		</script>
		<?php
		}
	}
	

?>
	
	