<?php

//koneksi server dan database
$servername="localhost";
$username="root";
$password="";
$dbname="training";
$con=new mysqli($servername,$username,$password,$dbname);

if ($con->connect_error)
{
	die("koneksi gagal".$con->connect_error);
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>HOMEofTRAINING</title>
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	left:9px;
	top:10px;
	width:540px;
	height:742px;
	z-index:1;
}
#Layer2 {
	position:absolute;
	left:25px;
	top:27px;
	width:526px;
	height:248px;
	z-index:1;
}
-->
</style>
</head>
<body>

<table width="1191" border="1" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="81" height="39" align="center" valign="middle">Training ID </td>
    <td width="196" align="center" valign="middle">Nama Training </td>
    <td width="160" align="center" valign="middle">Jadwal Training </td>
    <td width="160" align="center" valign="middle">Tempat</td>
    <td width="180" align="center" valign="middle">Harga</td>
    <td width="209" align="center" valign="middle">Foto Suasana Ruangan </td>
    <td colspan="2" align="center" valign="bottom"><a href="homejadwaltrainingadd.php">Add</a></td>
  </tr>
  
<?php
//koneksi tabel
$sql=" SELECT * FROM mstraining";
$result=$con->query($sql);

//koneksi field
while($row=$result->fetch_assoc())
	{

?>  
  <tr>
    <td height="40" align="center" valign="middle"><?php echo $row['trainingid'];?></td>
    <td align="center" valign="middle"><?php echo $row['trainingnama'];?></td>
    <td align="center" valign="middle"><?php echo $row['trainingjadwal'];?></td>
    <td align="center" valign="middle"><?php echo $row['trainingtempat'];?></td>
    <td align="center" valign="middle"><?php echo $row['trainingharga'];?></td>
    <td align-"center" valign="middle"><?php echo $row['trainingfoto'];?> </td>
    <td width="79" align="center" valign="middle">
	  <?php
	echo "<a href='homejadwaltrainingedit.php?id=$row[trainingid]'>Edit</a></td>";
    ?>
    <td width="84" align="center" valign="middle">
	  <?php
	echo "<a href='trainingdelete.php?id=$row[trainingid]'>Delete</a>";
	?>	</td>
  </tr>
  
<?php
}
?>  
  
  <tr>
    <td height="4"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>

