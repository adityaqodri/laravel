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

//koneksi table
$sql = "SELECT*FROM login WHERE username='$username' AND password='$password'";
$result = $con->query($sql);

//koneksi field
$result=$con->query($sql);


	if (isset($_POST['username']) AND isset($_POST['password']))
	 {
		$username=$_POST['username'];
		$password=$_POST['password'];
		$username=htmlspecialchars($username);
		$password=strip_tags($password);
	 }
	else
	 {
		header("location:login.php?error=variabel_belum_diset");
	 }
	
	if ($row['username'] == $_POST['username'] AND $row['password'] == $_POST['password'])
	 {
		header("location: login.php");
	 }
	elseif(empty($username) || empty($password))
	 {
?>
	
	<script>
		header("location:login.php?error=userid_atau_password_kosong");
		//window.location.href="login.php";
	</script>

<?php
	 }
	elseif (ctype_alpha($password) == false)
	 {
?>

	<script>
		alert("password hanya boleh menggunakan huruf");
		window.location.href="login.php";
	</script>
	
<?php
	 }
	else if(is_int($username) == false)
	 {
?>

	<script>
		alert("username hanya boleh menggunakan huruf");
		window.location.href="login.php";
	</script>
	
<?php
	 }
	else
	 {
?>

	<script>
		echo "username: $username <br/> password= $password";
		window.location.href="login.php";
	</script>
	
<?php
	 }
?>