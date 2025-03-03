<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistem Informasi Sekolah PPMI Shohwatul Is'ad</title>
<style type="text/css">
<!--
.style6 {font-size: 16px;
	color: #336600;
}
.style8 {font-size: 18px; color: #336600; }
td {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #003333;
}
.lk {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #666666;
	text-decoration: none;
	cursor: auto;
	font-weight: bold;
}
a:hover {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #CCCCCC;
	text-decoration: none;
}
.style9 {font-size: 12px}
-->
</style>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<? include("../koneksi.php"); 
   $hal=$_GET['hal'];
   $pg1=$_GET['pg1'];
   $id_santri=$_COOKIE['id_santri']; 
   $bulan=$_COOKIE['bulan']; 
   $semester=$_COOKIE['semester']; 
   $pekan=$_COOKIE['pekan']; 
   $thn_ajaran=$_COOKIE['thn_ajaran'];
   $niss=$_COOKIE['niss'];
   $id_kk=$_COOKIE['id_kk'];
   $bulan_ak=$_COOKIE['bulan_ak'];
?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="86" colspan="3" valign="top" bgcolor="#B7CE86"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      
      <tr>
        <td colspan="4" height="2"></td>
        </tr>
      <tr>
        <td width="4" height="82">&nbsp;</td>
        <td width="70" valign="top"><div align="center"><img src="../images/LOGO SHOID.jpg" width="69" height="82" /></div></td>
        <td width="10">&nbsp;</td>
        <td width="874" valign="top"> <span class="style6">Sistem Informasi Sekolah  PPMI Shohwatul Is'ad </span><br />
          <font color="#FFFFFF">
          Pondok Pesantren Modern Islam Shohwatul Is'ad Jl. Sipitto Ma'rang 
                  Kabupaten Pangkep Sulawesi Selatan<br /> 
            Telp.(0410)2315599, Fax(0410)2317977, 
    www.shohwatulisad.com </font></td>
      </tr>
      <tr>
        <td colspan="4" height="2"></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" valign="top"><? 
	if($hal==""){ include("home.php"); }
	if($hal=="dts"){ include("pg_dt_santri.php"); }
	?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" bgcolor="#B7CE86"><div align="center">Copy Right @Adnlook 2010 </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</body>
</html>
