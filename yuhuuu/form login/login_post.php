<?php
//koneksi server dan database
$servername="localhost";
$username="root";
$password="";
$dbname="project";
$con=new mysqli($servername,$username,$password,$dbname);

if($con->connect_error)
	{
		die ("Koneksi Gagal".$con->connect_error);
	}	

$username = $_POST['username'];
$password = $_POST['password'];

//koneksi table
$sql = "SELECT*FROM login WHERE username='$username' AND password='$password'";
$result = $con->query($sql);

//koneksi field
$row = $result->fetch_assoc();
/*
if($row['username']==$_POST['username'] AND $row['password']=$_POST['password'])
	{
		echo "benar";
	}
else 
	{
		echo "salah";
	}
*/
?>

<?php
if (isset($_POST['username']) AND isset($_POST['password']))
	{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$username=htmlspecialchars($username);
	$password=strip_tags($password);
}
else
{
die("Maaf, anda harus mengakses halaman ini dari form.html");
}

if(empty($username))
{
die("Maaf, anda harus mengisi nama");
}
else
{
if (is_numeric($username))
{
die("Maaf, nama harus berupa huruf");
}
else
{
echo "Username: $username <br /> Password: $password";
}
}
?>