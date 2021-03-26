<?php 
$con = @mysqli_connect('localhost','root','','spmii');

if (!$con) {
	echo "error:" .mysqli_connect_error();
	exit();
}
?>



<table width="499" border="0" cellpadding="0" cellspacing="0" background="../images/form_login_spmi.jpg">
  <!--DWLayoutTable-->
  <tr>
    <td width="282" rowspan="8" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td height="76" colspan="2" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td width="8"></td>
  </tr>
  <tr>
    <td height="27" colspan="2" valign="middle"><input name="userid" type="text" id="userid" size="20" maxlength="20" /></td>
    <td></td>
  </tr>
  <tr>
    <td height="27" colspan="2" valign="middle"><input name="textfield2" type="text" size="20" maxlength="20" /></td>
    <td></td>
  </tr>
  <tr>
    <td height="30" colspan="2" valign="middle"><select name="select">
    </select>    </td>
    <td></td>
  </tr>
  <tr>
    <td height="13" colspan="2" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td></td>
  </tr>
  
  <tr>
    <td width="90" height="32" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td width="119" valign="middle"><input type="submit" name="Submit" value="Submit" /></td>
    <td></td>
  </tr>
  
  <tr>
    <td height="35" colspan="2" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td height="44">&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  
</table>
