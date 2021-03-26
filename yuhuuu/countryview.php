<?php

//koneksi server dan database
$servername="localhost";
$username="root";
$password="";
$dbname="mydataearth";
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
<title>Untitled Document</title>
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

<table width="551" border="1" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="92" height="39" align="center" valign="middle">Country ID </td>
    <td width="348" align="center" valign="middle">Country Name </td>
    <td colspan="2" align="center" valign="bottom"><a href="countryadd.php">Add</a></td>
  </tr>
  
<?php
//koneksi tabel
$sql=" SELECT * FROM mscountry";
$result=$con->query($sql);

//koneksi field
while($row=$result->fetch_assoc())
	{

?>  
  <tr>
    <td height="40" align="center" valign="middle"><?php echo $row['countryid'];?></td>
    <td align="center" valign="middle"><?php echo $row['countryname'];?></td>
    <td width="53" align="center" valign="middle">
	<?php
	echo "<a href='countryedit.php?id=$row[countryid]'>Edit</a></td>";
    ?>
	<td width="58" align="center" valign="middle">
	<?php
	echo "<a href='countrydelete.php?id=$row[countryid]'>Delete</a>";
	?>
	</td>
  </tr>
  
<?php
}
?>  
  
  <tr>
    <td height="4"></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>

