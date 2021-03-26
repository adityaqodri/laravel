<?php 
//koneksi server dr database
$servername="localhost";
$username="root";
$password="";
$dbname="mydataearth";
$con=new mysqli($servername,$username,$password,$dbname);

if ($con->connect_error)
{
	die("koneksi gagal".$con->connect_error);
}
//koneksi tabel
$sql="SELCET*FROM mscountry WHERE countryid='$_GET[id]'";
$result=$con->query($sql);

//koneksifield
$row=$result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<body>

<form name="dataedit" id="dataedit" action="countryedit_post.php" method="post">
<table width="430" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td height="31" colspan="3" align="center" valign="middle">EDIT DATA </td>
  </tr>
  <tr>
    <td height="29" colspan="2" align="right" valign="middle">CountryID : </td>
    <td width="314" align="left" valign="middle"><input name="countryid" type="hidden" id="countryid" value="<?php echo $row['countryid']?>" size="5" maxlength="3"> <?php echo$row['countryid']?> </td>
  </tr>
  <tr>
    <td height="36" colspan="2" align="right" valign="middle">CountryName : </td>
    <td align="left" valign="middle"><input name="countryname" type="text" value="<?php echo $row['countryname']?>" id="countryname" size="35" maxlength="30"></td>
  </tr>
  <tr>
    <td height="2" colspan="3" valign="top"><hr></td>
  </tr>
  <tr>
    <td width="97" height="17"></td>
    <td width="19"></td>
    <td></td>
  </tr>
  <tr>
    <td height="26" align="center" valign="middle"><input type="submit" name="Submit" value="Submit"></td>
    <td></td>
    <td></td>
  </tr>
</table>
</form>

</body>
</html>