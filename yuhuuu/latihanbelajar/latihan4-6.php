<?php
$con = @mysqli_connect('localhost','root','','myearth');

if(!$con){
	echo "Error nih gan :(" . mysqli_connect_error();
	exit();
	}

$sql = 'select*from mscity';
$query = mysqli_query($con,$sql);
while($row=mysqli_fetch_array($query))
{ 
	echo $row ['cityid'];
	echo " - ";
	echo $row['cityname'];
	echo "<br>";

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
<table width="541" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td height="37" colspan="4" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="541" height="37"><div align="center">CITY DATA </div></td>
      </tr>
    </table>    </td>
  </tr>
  <tr>
    <td width="91" height="33" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="91" height="33"><div align="center">City ID </div></td>
        </tr>
    </table></td>
    <td width="348" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="348" height="33"><div align="center">City Name </div></td>
      </tr>
    </table>    </td>
    <td colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="102" height="33"><div align="center">Add</div></td>
      </tr>
    </table>    </td>
  </tr>
<?php  
$sql = 'select*from mscity';
$query = mysqli_query($con,$sql);
while($row=mysqli_fetch_array($query))
{ 
?>
  <tr>
    <td height="33" valign="top"><?php echo $row ['cityid'];?></td>
    <td valign="top"><?php echo $row ['cityname'];?></td>
    <td width="51" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td width="51" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
  </tr>
<?php
}
?>
</table>
</body>
</html>


<?php
mysqli_close($con);
?>