<?php
//koneksi server dan database
$servername="localhost";
$username="root";
$password="";
$dbname="training";
$con=new mysqli($servername,$username,$password,$dbname);

if($con->connect_error)
	{
		die ("Koneksi Gagal".$con->connect_error);
	}
	
function registrasi($data){
	global $con;

	$userid = strtolower(stripslashes($data["userid"]));
	$password = $data["password"];
	$email = $data["email"];
	$telepon = $data["telepon"];
	$tgllahir = $data["tgllahir"];
	$alamat = $data["alamat"];

	$result = mysqli_query($con, "SELECT userid FROM sysuser WHERE userid = '$userid'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>alert('username yang dipilih sudah terdaftar')</script>";
		return false;
	}

	else if(is_numeric ($password) == false){
		echo "<script>alert('Password harus menggunakan angka');
            </script>";
            echo "<script>window.location.href='daftar.php';
			</script>";
			return false;
	}

	else if(is_numeric ($password) == false){
		echo "<script>alert('Telepon harus menggunakan angka');
            </script>";
            echo "<script>window.location.href='daftar.php';
			</script>";
			return false;
	}

	mysqli_query($con, "INSERT INTO sysuser VALUES('$userid','','$password','$email','$telepon', '$tgllahir', '$alamat')");

	return mysqli_affected_rows($con);
}


?>
