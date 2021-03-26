<?php
	//koneksi server
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="training";
	
	$conn=new mysqli($servername, $username, $password, $dbname);
	
	if($conn->connect_error)
	{
	die("Koneksi Gagal :".$conn->connect_error);
	}

	$userid=$_POST['userid'];
	$password=$_POST['password'];
	$sql="SELECT * FROM syslogin WHERE userid='$userid' AND password='$password'";
	$result=$conn->query($sql);
	$row=$result->fetch_assoc();
	
	if ($row['userid']==$_POST['userid'] AND $row['password']=$_POST['password']) 
	{
		header("location: home.php");
	}
	elseif(empty($userid) || empty($password))
	{
		?>
			<script>
			alert("User id atau password tidak boleh kosong");
			window.location.href="index.php";
			</script>
		<?php
	}elseif (ctype_alpha($userid) == false){
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
