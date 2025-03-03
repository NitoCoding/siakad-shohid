<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style3 {color: #FFFFFF; font-weight: bold; }
.style4 {
	color: #FF3300;
	font-weight: bold;
}
-->
</style>
</head>
<?
$klsk=$_GET['klsk'];
?>
<body>
<form id="form1" name="form1" method="post" action="page/act_dt_rbg.php">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr> 
      <td colspan="3"></td>
    </tr>
    <tr> 
      <td colspan="3" bgcolor="#B3CF70"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td width="2%" height="27">&nbsp;</td>
            <td width="3%"><img src="images/collapsed.gif" width="16" height="12" /></td>
            <td width="95%">Prestasi / Pelanggaran Guru &amp; Pegawai</td>
          </tr>
        </table></td>
    </tr>
    <tr> 
      <td colspan="3" height="7"></td>
    </tr>
    <tr> 
      <td width="2%" valign="top" bgcolor="#ACD75E">&nbsp;</td>
      <td width="42%" valign="top" bgcolor="#ACD75E">&nbsp;</td>
      <td width="54%" valign="top" bgcolor="#ACD75E">&nbsp;</td>
    </tr>
    <tr> 
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr> 
      <td height="104" colspan="3" valign="top"> <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#B3CF70">
          <tr> 
            <td colspan="6" bordercolor="#99CC66" bgcolor="#FFFFFF"><div align="left" class="style4"></div></td>
          </tr>
          <tr> 
            <td width="9%" bgcolor="#B3CF70"><div align="center"><span class="style3">NIK</span></div></td>
            <td width="22%" bgcolor="#B3CF70"><div align="center"><span class="style3">Nama 
                Lengkap </span></div></td>
            <td width="12%" bgcolor="#B3CF70"><div align="center"><span class="style3">Jabatan</span></div></td>
            <td width="29%" bgcolor="#B3CF70"><div align="center"><span class="style3">Prestasi 
                </span></div></td>
            <td width="25%" bgcolor="#B3CF70"><div align="center"><span class="style3">Pelanggaran</span></div></td>
            <td width="3%" bgcolor="#B3CF70"><div align="center"><font color="#FFFFFF"><strong>P</strong></font></div></td>
          </tr>
          <?
	      $tmpkls=mysqli_query($koneksi, "SELECT nip,nama_gp,jabatan_gp,id_gp,status FROM guru_pegawai ");
          while($ct=mysqli_fetch_assoc($tmpkls)){
	   ?>
          <tr> 
            <td bgcolor="#FFFFFF"><div align="center"><a href="home.php?home=gp&dpn_pg=ip&id_k=<? echo"$ct[id_gp]"; ?>"><? echo"$ct[nip]"; ?></a></div></td>
            <td bgcolor="#FFFFFF"><div align="left">&nbsp;<? echo"$ct[nama_gp]"; ?></div></td>
            <td bgcolor="#FFFFFF"><div align="center"><? echo"$ct[jabatan_gp]"; ?></div></td>
            <td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <? $no=1;
		  $tpr=mysqli_query($koneksi, "SELECT * FROM tb_prpl WHERE kd_st='$ct[id_gp]' and ket='s' AND ket2='1'");
          while($cpr=mysqli_fetch_assoc($tpr)){
		  ?>
                <tr> 
                  <td width="7%" ><div align="center"><? echo $no."."; ?></div></td>
                  <td width="93%"><a href="home.php?home=gp&dpn_pg=ip&edt=y&ed_k=<? echo"$cpr[id_prpl]"; ?>"> 
                    <?  echo $cpr['hari'].",".$cpr['tgl']."-".$cpr['bln']."-".$cpr['thn']; ?>
                    </a></td>
                </tr>
                <tr> 
                  <td>&nbsp;</td>
                  <td><? echo $cpr['perihal']; ?></td>
                </tr>
                <? $no+=1; } ?>
              </table></td>
            <td valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <? $no=1;
		  $tpr=mysqli_query($koneksi, "SELECT * FROM tb_prpl WHERE kd_st='$ct[id_gp]' and ket='p' AND ket2='1'");
          while($cpr=mysqli_fetch_assoc($tpr)){
		   
		 
		  ?>
                <tr> 
                  <td width="7%" ><div align="center"><? echo $no."."; ?></div></td>
                  <td width="93%"><a href="home.php?home=gp&dpn_pg=ip&edt=y&amp;ed_k=<? echo"$cpr[id_prpl]"; ?>"> 
                    <?  echo $cpr['hari'].",".$cpr['tgl']."-".$cpr['bln']."-".$cpr['thn']; ?>
                    </a></td>
                </tr>
                <tr> 
                  <td>&nbsp;</td>
                  <td><? echo $cpr['perihal']; ?></td>
                </tr>
                <? $no+=1; } ?>
              </table></td>
            <td valign="middle" bgcolor="#FFFFFF"><div align="center"><a href="page/report_prpl_gp.php?idstr=<? echo $ct['id_gp']; ?>" target="_blank"><img src="images/text.gif" width="16" height="16" border="0" /></a></div></td>
          </tr>
          <? } ?>
          <tr> 
            <td bgcolor="#B3CF70">&nbsp;</td>
            <td bgcolor="#B3CF70">&nbsp;</td>
            <td bgcolor="#B3CF70">&nbsp;</td>
            <td bgcolor="#B3CF70">&nbsp;</td>
            <td bgcolor="#B3CF70">&nbsp;</td>
            <td bgcolor="#B3CF70">&nbsp;</td>
          </tr>
        </table></td>
    </tr>
    <tr> 
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
    </tr>
  </table>
</form>

</body>
</html>
