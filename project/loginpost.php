<?php 	
	session_start();

	//cek cookie
	if(isset($_COOKIE['login'])){
	if($_COOKIE['login'] == 'true'){
		$_SESSION['login'] = true;
	}
	}

	include "koneksinya.php";
	
	$userid=$_POST['userid'];
	$password=$_POST['password'];
	
	//handling error yang syslogin ganti table lain di db lain
	$result= $con->query("select*from sysuser");
	
	if($con->errno){
		die('query error :'.$con->errno.'-'.$con->error);
	}
	
	$sql="SELECT * FROM sysuser WHERE userid='$userid' AND password='$password'";
	$result=$con->query($sql);
	$row=$result->fetch_assoc();
	
	if(isset($_POST['userid']) || isset($_POST['password']))
	{
		$userid=$_POST['userid'];
		$password=$_POST['password'];
	}
	else
	{
		die("anda harus membuka file dalam file HTML");
	}
	if ($row['userid']==$_POST['userid'] && $row['password']==$_POST['password']) 
	{
	//session
	$_SESSION["login"] = true;
	//cek cookie
		if(isset($_POST['remember'])){
			setcookie('login', 'true', time()+60);
		}
	header("location: home.php");
	}
	else if(empty($_POST['userid']) || empty($_POST['password']))
	{
		?>
			<script>
			alert("User id atau password tidak boleh kosong");
			window.location.href="index.php";
			</script>
		<?php
	}else if (ctype_alpha($userid) == false){
		?>
		<script>
		alert("User hanya boleh menggunakan huruf");
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
		?>
		<script>
		alert("User atau password salah");
		window.location.href="index.php";
		</script>
		<?php
	}
?>