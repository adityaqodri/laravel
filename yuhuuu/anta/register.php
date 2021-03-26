<?php
	session_start();
	if(!isset($_SESSION["login"])){
	//kalo ga ada session login atau ga ada proses login dia tetep di login ga bisa masuk
		header("location: index.php");
	}
	include "koneksi.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Untitled Document</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include "header.php" ?>
<form name="register" id="register" action="register_post.php" method="post">
<table width="258" height="217" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#008B8B">
  <tr>
    <td align="center"><a href="index.php" class="back">Back</td>
  </tr>
  <tr>
    <td align="center">REGISTER</td>
  </tr>
  <tr>
    <td align="center" bgcolor="5F9EA0"><input name="name" type="text" id="name" size="30" maxlength="30" placeholder="name" /></td>
  </tr>
  <tr>
    <td align="center" bgcolor="5F9EA0"><input name="userid" type="text" id="userid" size="30" maxlength="10" placeholder="userid"/></td>
  </tr>
  <tr>
    <td align="center" bgcolor="5F9EA0"><input name="password" type="password" id="password" size="30" maxlength="30" placeholder="password"/></td>
  </tr>
  <tr>
    <td align="center" bgcolor="5F9EA0"><input name="email" type="text" id="email" size="30" maxlength="30" placeholder="email"/></td>
  </tr>
  <tr>
    <td align="center" bgcolor="5F9EA0"><input name="Create" type="submit" id="Create" value="Create" class="btn btn-primary"/></td>
  </tr>
</table>
</form>
<?php include "footer.php" ?>
</body>
</html>
