<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
//setcookie
		setcookie(“training”, $totalhargabeli, time()+15);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Sistem Penjualan Tiekt Training</title>
	<link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<table width="1046" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#FFFFFF">
  <!--DWLayoutTable-->
  <tr>
    <td height="165" colspan="3" valign="top"><img src="images/headerindexfix.jpg" width="1284" height="165" /></td>
  </tr>
  <tr>
    <td height="35" colspan="3" valign="middle"><marquee> SELAMAT DATANG DI WEB TRAINING ESQ by adityaqodri</marquee> </td>
  </tr>
  <tr>
    <td width="109" height="128" align="left" valign="top"><?php include"menu.php"?>&nbsp;</td>
    <td width="889" align="middle" valign="top" width="955" height="535" align="" valign="top" align="center"> <?php include"tiketcek.php" ?> </td>
    <td width="48" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
  </tr>
  
  <tr>
    <td height="117" colspan="3" valign="top"><img src="images/footerindexfix.jpg" width="1282" height="117" /></td>
  </tr>
</table>
</body>
</html>
