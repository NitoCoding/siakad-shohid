<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<style type="text/css">
td {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	text-decoration: none;
	color: #333333;
}
</style>
<body>
<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
  <tr>
    <td width="100%" height="27" colspan="2" bgcolor="#B3CF70"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td width="24">&nbsp;</td>
          <td width="27"><img src="images/actionEdit.gif" width="18" height="18" /></td>
          <td width="280">&nbsp;<a href="home.php?home=gjk&dpn_pg=id" class="lk">Gaji Pokok  Guru dan Pegawai</a></td>
          <td width="20"> <img src="images/text.gif" width="16" height="16" /></td>
          <td width="235">&nbsp;<a href="home.php?home=gjk&dpn_pg=ld" class="lk">Tunjangan - Tunjangan </a></td>
          <td width="19"><img src="images/text.gif" width="16" height="16" /></td>
          <td width="196"><a href="home.php?home=gjk&amp;dpn_pg=pp" class="lk">Potongan </a></td>
          <td width="19"><img src="images/text.gif" width="16" height="16" /></td>
          <td width="241"><a href="home.php?home=gjk&dpn_pg=rg" class="lk">Rekap Gaji </a></td>
          <td width="252">&nbsp;</td>
        </tr>
      </table></td>
  </tr>
  
  <tr>
    <td height="7" colspan="2"></td>
  </tr>
  <tr>
    <td height="33" colspan="2" bgcolor="#DCF3AF"><?
	if($dpn_pg=="id" || $dpn_pg==""){ include("ipt_mst_gapok.php"); }
	if($dpn_pg=="ld"){ include("ipt_mst_tunjangan.php"); }
	if($dpn_pg=="pp"){ include("ipt_mst_potongan.php"); }
	if($dpn_pg=="rg"){ include("rekap_gaji.php"); }
	?></td>
  </tr>
  <tr>
    <td height="7" colspan="2"></td>
  </tr>
  <tr>
    <td height="24" colspan="2" bgcolor="#B3CF70">&nbsp;</td>
  </tr>
</table>

</body>
</html>
