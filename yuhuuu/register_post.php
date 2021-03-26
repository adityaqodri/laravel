<?php
	//koneksi server
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="siam";
	
	$conn=new mysqli($servername, $username, $password, $dbname);
	
	if($conn->connect_error)
	{
	die("Koneksi Gagal :".$conn->connect_error);
	}
	
	
	$userid=$_POST['userid'];
	$password=$_POST['password'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	
	if(isset($_POST['userid']) || isset($_POST['password']) || isset($_POST['name']) || isset($_POST['email']))
	{
		$userid=$_POST['userid'];
		$password=$_POST['password'];
		$name=$_POST['name'];
		$email=$_POST['email'];
	}
	else
	{
		die("anda harus membuka file dalam file HTML");
	}
	
	if(empty($userid) || empty($password) || empty($name) || empty($email)){
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
	
	