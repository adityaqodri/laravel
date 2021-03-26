<!DOCTYPE html>
<html>
<body>

<form name="dataadd" id="dataadd" action="trainingaddpost.php" method="post">
<table height="300" width="500" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td height="25" colspan="3" align="center" valign="middle">ADD DATA TRAINING </td>
    </tr>
  <tr>
    <td height="43" colspan="2" align="right" valign="middle">trainingID : </td>
    <td width="366" align="left" valign="middle"><input name="trainingid" type="text" id="trainingid" size="5" maxlength="3"></td>
  </tr>
  <tr>
    <td height="43" colspan="2" align="right" valign="middle">Nama Training  : </td>
    <td align="left" valign="middle"><input name="trainingnama" type="text" id="trainingnama" size="35" maxlength="30"></td>
    </tr>
  <tr>
    <td height="39" colspan="2" align="right" valign="middle">Jadwal</td>
    <td align="left" valign="middle"><input name="trainingjadwal" type="text" id="trainingjadwal" size="10" maxlength="10"> 
      (yyyy-mm-dd) </td>
    </tr>
  <tr>
    <td height="37" colspan="2" align="right" valign="middle">Tempat</td>
    <td align="left" valign="middle"><input name="trainingtempat" type="text" id="trainingtempat" size="20" maxlength="20"></td>
    </tr>
  <tr>
    <td height="36" colspan="2" align="right" valign="middle">Harga</td>
    <td align="left" valign="middle"><input name="trainingharga" type="text" id="trainingharga" size="10" maxlength="7"></td>
    </tr>
  <tr>
    <td height="38" colspan="2" align="right" valign="middle"> Upload Gambar Ruangan </td>
    <td valign="top"><?php include"fileupload.html"?></td>
  </tr>
  <tr>
    <td width="112" height="15"></td>
    <td width="22"></td>
    <td></td>
  </tr>
  <tr>
    <td height="2" colspan="3" valign="top"><hr></td>
    </tr>
  <tr>
    <td height="20"></td>
    <td></td>
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