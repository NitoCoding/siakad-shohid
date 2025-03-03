<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistem Informasi Sekolah PPMI Shohwatul Is'ad</title>
<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
	cursor: auto;
}
.style2 {
	font-size: 10px;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
	color: #999900;
}
.style5 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.style6 {color: #99CC33}
-->
</style>
</head>
<script language="JavaScript" type="text/JavaScript">

</script>
<? include ("koneksi.php");?>
<body>
<form id="form1" name="form1" method="post" action="act_login.php">
  <table width="574" height="276" border="2" align="center" cellpadding="0" cellspacing="0" bordercolor="#EEEEEE">
    
    <tr>
      <td width="499" height="272" valign="top" background="images/depan.jpg"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="3" >
        <? $psnu=$_GET['psnu'];
	   if($psnu==1){ ?>
        <tr>
          <td colspan="2"><div align="center" class="style1">Pasword Anda Salah</div></td>
        </tr>
        <? } ?>
        <tr>
          <td height="19" colspan="2" valign="top"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="31">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td width="23%"><div align="right"><img src="images/vmonth.gif" />&nbsp;</div></td>
          <td width="77%"><select name="user">
              <option>-</option>
              <?
	      $tampil2=mysqli_query($koneksi, "SELECT * FROM guru_pegawai");
        // print_r($kp);
        if (!$tampil2) {
          die("Query gagal: " . mysqli_error($koneksi)); // Debugging jika query gagal
      }
          while($tp=mysqli_fetch_assoc($tampil2)){
	      ?>
              <option value="<? echo $tp['id_gp']; ?>"><? echo $tp['nama_gp']; ?></option>
              <? } ?>   
          </select></td>
        </tr>
        <tr>
          <td><div align="right"><img src="images/Cflock.gif" width="18" height="18" /></div></td>
          <td><input type="password" name="pasusr" /></td>
        </tr>
        <tr>
          <td><div align="right"><img src="images/dateBtn.gif" width="18" height="18" /></div></td>
          <td><select name="thna">
              <option>-</option>
              <option value="2024/2025"><? echo "2024/2025"; ?></option>
          </select></td>
        </tr>
        <tr>
          <td><div align="right"><img src="images/DATE_D.gif" width="16" height="14" /></div></td>
          <td><select name="smester">
              <option>-</option>
              <option value="I">I (Satu)</option>
              <option value="II">II (Dua)</option>
          </select></td>
        </tr>
        <tr>
          <td colspan="2" height="10"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="masuk" value="login" /></td>
        </tr>
        
        <tr>
          <td colspan="2"></td>
        </tr>
      </table></td>
    </tr>
  </table>
</form>

</body>
</html>
