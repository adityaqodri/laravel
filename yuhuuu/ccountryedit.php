<?php 

//Koneksi Server dan Database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_bebas";

$con = new mysqli ($servername,$username,$password,$dbname);

if ($con->connect_error) {
	die("Koneksi Gagal". $con -> connect_error);
}

//Koneksi Tabel
$sql = "SELECT * FROM mscountry WHERE countryid='$_GET[id]'";
$result = $con -> query($sql);

//Koneksi Field
$row = $result -> fetch_assoc();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form name="dataadd" id="dataadd" method="post" action="countryedit_post.php">
	<table width="503" border="0" cellpadding="0" cellspacing="0">
	  <!--DWLayoutTable-->
	  <tr>
		<td height="40" colspan="3" align="center" valign="middle">EDIT  DATA </td>
      </tr>
	  <tr>
		<td width="149" height="35" align="right" valign="middle">Country id </td>
		<td width="29" align="center" valign="middle">:</td>
        <td width="325" align="left" valign="middle"><input name="countryid" type="hidden" id="countryid" value="<?php echo $row['countryid']?>" size="10" maxlength="3" required /> <?php echo $row['countryid'];  ?></td>
      </tr>
	  <tr>
		<td height="35" align="right" valign="middle">Country Name </td>
		<td align="center" valign="middle">:</td>
	    <td align="left" valign="middle"><input name="countryname" type="text" id="countryname" value="<?php echo $row['countryname']?>" size="30" maxlength="30" required /></td>
      </tr>
	  <tr>
		<td height="18" colspan="3" valign="top"><hr></td>
      </tr>
	  <tr>
	    <td height="31" colspan="2" align="center" valign="middle"><input type="submit" name="Submit" value="Submit" /></td>
		<td valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
      </tr>
	</table>
</form>
</body>
</html>
