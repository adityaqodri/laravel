<?php
	session_start();
	
	if(isset($_SESSION["login"])){
	header("location: home.php");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Untitled Document</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="1000" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="1000" height="250" valign="top" align="center"><img src="../image/header1.png"/></td>
  </tr>
  <tr>
    <td height="238" valign="middle" align="right"><?php include "login.php" ?></td>
  </tr>
  <tr>
    <td height="125" valign="top" align="center"><?php include "footer.php" ?></td>
  </tr>
</table>

</body>
</html>
