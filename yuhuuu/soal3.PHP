//soal3.php

<?php
if (isset($_GET['username']) AND
isset($_GET['password']))
{
$nama=$_GET['username'];
$password=$_GET['password'];
$nama=htmlspecialchars($nama);
$password=strip_tags($password);
}
else
{
die("Maaf, anda harus mengakses
halaman ini dari soal3.html");
}

if(empty($username))
{
die("Maaf, anda harus mengisi nama");
}
else
{
if (is_numeric($password))
{
die("Maaf, password harus berupa

huruf");
}
else
{
echo "Nama: $nama <br /> password:

$password";
}
}
?>