<!DOCTYPE html>
<html>
	<head>
		<title>Form Login</title>
		<?php
	
		//ambil nilai variabel error
		if (isset($_GET['error']))
		{
			$error=$_GET['error'];
		}
		
		else
		{
			$error="";
		}
		//siapkan pesan kesalahan
		$pesan="";
		
		if ($error=="variabel_belum_diset")
		{
			$pesan="Maaf, harus mengakses halaman ini
		dari 3soal.php";
		}
		
		if ($error=="username_kosong")
		{
			$pesan="Maaf, anda harus mengisi usernamenya";
		}
		
		if ($error=="password_kosong")
		{
			$pesan="Maaf, password harus diisi";
		}

		if ($error=="username_harus_huruf")
		{
			$pesan="Maaf, username harus berupa huruf";
		}
		//Siapkan isian form jika terjadi kesalahan
		if (isset($_GET['username']) AND isset($_GET['password']))
		{
			$username=$_GET['username'];
			$password=$_GET['password'];
		}
		else
		{
			$username="";
			$password="";
		}
	?>
	</head>

	<body>
		<div align='center'>
		<form action="3soalpost.php" method="get">
		<?php 
			echo $pesan;
		?>
		 <h1>Masuk</h1>
		<table>
			<tr><td>Username</td><td> : <input type="text" name="username"/> </td></tr>
			<br />
			<tr><td>Password</td><td> : <input type="text" name="password" /></td></tr>
			<br />
			<tr><td colspan="2" align="right"><input value="Login" type="submit"> <input value="Batal" type="reset"></td></tr>
					 
		</table>
		</form>
		</div>
	</body>
</html