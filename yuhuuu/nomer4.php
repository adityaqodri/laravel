<!DOCTYPE html>
<html>
<head>
<title>Regist</title>
</head>
<body>
<?php
session_start();
if(isset($_POST['submit']) )
{
$nama = $_POST['username'];
$nim = $_POST['nim'];
if ($_POST['username'] == $nama && $_POST['nim'] == $nim)
{
setcookie('username', $_POST['username'], time()+ 86400); setcookie('nim', $_POST['nim'], time()+ 86400);
$_SESSION['username'] = $_POST['username'];
$_SESSION['nim'] = $_POST['nim'];
}
if(!empty(trim($nama)) && !empty(trim($nim)))
{
header('location: profil.php?username,nim='.$nama, $nim);
}else{
echo "harus diisi";
}
}
?>

<form action="regis.php" method="post">
<label for="">Nama</label>
<input type="text" name="username">
<label for="">Nim</label>
<input type="text" name="nim">
<input type="submit" name="submit" value="masuk">
</form>

//untuk hapus
<?php
setcookie("regis", "", time()- 86400);
?>


</body>
</html

