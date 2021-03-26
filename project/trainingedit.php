<?php 
//koneksi server dr database
$servername="localhost";
$username="root";
$password="";
$dbname="training";
$con=new mysqli($servername,$username,$password,$dbname);

if ($con->connect_error)
{
	die("koneksi gagal".$con->connect_error);
}
//koneksi tabel
$sql="SELECT*FROM mstraining WHERE trainingid='$_GET[id]'";
$result=$con->query($sql);

//koneksifield
$row=$result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<body>

<form name="dataedit" id="dataedit" action="trainingeditpost.php" method="post">
<table width="430" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td height="31" colspan="3" align="center" valign="middle">EDIT DATA </td>
  </tr>
  <tr>
    <td height="29" colspan="2" align="right" valign="middle">trainingID : </td>
    <td width="282" align="left" valign="middle"><input name="trainingid" type="hidden" id="trainingid" value="<?php echo $row['trainingid']?>" size="5" maxlength="3"> <?php echo$row['trainingid']?> </td>
  </tr>
  <tr>
    <td height="36" colspan="2" align="right" valign="middle">trainingName : </td>
    <td align="left" valign="middle"><input name="trainingnama" type="text" value="<?php echo $row['trainingnama']?>" id="trainingnama" size="35" maxlength="30"></td>
  </tr>
  <tr>
    <td height="36" colspan="2" align="right" valign="middle">Jadwal</td>
    <td align="left" valign="middle"><input name="trainingjadwal" type="text" value="<?php echo $row['trainingjadwal']?>"  id="trainingjadwal" size="10" maxlength="10"> 
      (yyyy-mm-dd) </td>
  </tr>
  <tr>
    <td height="36" colspan="2" align="right" valign="middle">Tempat</td>
    <td align="left" valign="middle"><input name="trainingtempat" type="text" value="<?php echo $row['trainingtempat']?>"  id="trainingtempat" size="20" maxlength="20"></td>
  </tr>
  <tr>
    <td height="36" colspan="2" align="right" valign="middle">Harga</td>
    <td align="left" valign="middle"><input name="trainingharga" type="text" value="<?php echo $row['trainingharga']?>"  id="trainingharga" size="10" maxlength="7"></td>
  </tr>
    <tr>
    <td height="38" colspan="2" align="right" valign="middle"> Upload Gambar Ruangan </td>
   <td><input name="gambar" type="file" id="gambar"/></td>
  </tr>
  <tr>
  <tr>
    <td width="63" height="26" align="center" valign="middle"><input type="submit" name="Submit" value="Submit"></td>
    <td width="19"></td>
    <td></td>
  </tr>
</table>
</form>

</body>
</html>