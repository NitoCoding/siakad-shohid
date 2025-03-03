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
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>
<?
$klsk=$_GET['klsk'];
$blnk=$_GET['blnk'];
$thn=$_GET['thn'];
$pgr=$_GET['pgr'];
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
          <td width="95%">Prestasi &amp; Pelanggaran Santri di &nbsp; <font color="#FF0000" size="-1"><b><? if($pgr=='2'){ echo"Sekolah";}else{ echo"Asrama"; } ?></b></font></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td colspan="3" height="7"></td>
    </tr>
    <tr>
      <td width="2%" valign="top" bgcolor="#ACD75E">&nbsp;</td>
      <td width="42%" valign="top" bgcolor="#ACD75E">&nbsp;</td>
      <td valign="top" bgcolor="#ACD75E">&nbsp;</td>
    </tr>
    <tr>
      <td height="35" colspan="2" bgcolor="#DCF3AF">&nbsp;&nbsp;Kelas
        <select name="menu1" onchange="MM_jumpMenu('parent',this,0)">
          <option value="home.php?home=prpl&klsk=">-</option>
          <?
	      $tampi3=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas ");
          while($tp3=mysqli_fetch_assoc($tampi3)){
	    ?>
          <option value="home.php?home=prpl&klsk=<? echo $tp3['kelas']."&pgr=$pgr"; ?>" <? if($klsk=="$tp3[kelas]"){ echo"selected='selected'"; } ?>><? echo $tp3['kelas']; ?></option>
          <? } ?>
      </select></td>
      <td width="54%" bgcolor="#DCF3AF"><label>Rekapan Bulan
          <select name="select" onchange="MM_jumpMenu('parent',this,0)">
            <option value="home.php?home=prpl&klsk=<? echo $klsk; ?>" <? if($blnk==""){ echo"selected='selected'"; } ?>>Pilih</option>
            <option value="home.php?home=prpl&blnk=Januari&klsk=<? echo "$klsk&pgr=$pgr"; ?>" <? if($blnk=="Januari"){ echo"selected='selected'"; } ?>>Januari</option>
            <option value="home.php?home=prpl&blnk=Februari&klsk=<? echo "$klsk&pgr=$pgr"; ?>" <? if($blnk=="Februari"){ echo"selected='selected'"; } ?>>Februari</option>
            <option value="home.php?home=prpl&blnk=Maret&klsk=<? echo "$klsk&pgr=$pgr"; ?>" <? if($blnk=="Maret"){ echo"selected='selected'"; } ?>>Maret</option>
            <option value="home.php?home=prpl&blnk=April&klsk=<? echo "$klsk&pgr=$pgr"; ?>" <? if($blnk=="April"){ echo"selected='selected'"; } ?>>April</option>
            <option value="home.php?home=prpl&blnk=Mei&klsk=<? echo "$klsk&pgr=$pgr"; ?>" <? if($blnk=="Mei"){ echo"selected='selected'"; } ?>>Mei</option>
            <option value="home.php?home=prpl&blnk=Juni&klsk=<? echo "$klsk&pgr=$pgr"; ?>" <? if($blnk=="Juni"){ echo"selected='selected'"; } ?>>Juni</option>
            <option value="home.php?home=prpl&blnk=Juli&klsk=<? echo "$klsk&pgr=$pgr"; ?>" <? if($blnk=="Juli"){ echo"selected='selected'"; } ?>>Juli</option>
            <option value="home.php?home=prpl&blnk=Agustus&klsk=<? echo "$klsk&pgr=$pgr"; ?>" <? if($blnk=="Agustus"){ echo"selected='selected'"; } ?>>Agustus</option>
            <option value="home.php?home=prpl&blnk=September&klsk=<? echo "$klsk&pgr=$pgr"; ?>" <? if($blnk=="September"){ echo"selected='selected'"; } ?>>September</option>
            <option value="home.php?home=prpl&blnk=Oktober&klsk=<? echo "$klsk&pgr=$pgr"; ?>" <? if($blnk=="Oktober"){ echo"selected='selected'"; } ?>>Oktober</option>
            <option value="home.php?home=prpl&blnk=Nopember&klsk=<? echo "$klsk&pgr=$pgr"; ?>" <? if($blnk=="Nopember"){ echo"selected='selected'"; } ?>>Nopember</option>
            <option value="home.php?home=prpl&blnk=Desember&klsk=<? echo "$klsk&pgr=$pgr"; ?>" <? if($blnk=="Desember"){ echo"selected='selected'"; } ?>>Desember</option>
          </select>
      Tahun <? $tthn=date("Y"); echo $tthn; ?> | &nbsp;&nbsp;<a href="page/report_pelanggaran_perbulan.php?<? echo"blnk=$blnk"; ?>" class="lk" target="_blank">Rekap Pelanggaran / Bulan </a>&nbsp; </label></td>
    </tr>
    
    <tr>
      <td valign="top" bgcolor="#ACD75E">&nbsp;</td>
      <td valign="top" bgcolor="#ACD75E">&nbsp;</td>
      <td valign="top" bgcolor="#ACD75E">&nbsp;</td>
    </tr>
    
    <tr>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" valign="top">
	  <?
	      if($klsk!=""){$klst="WHERE kelas='$klsk'";}
	      $tampil=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas $klst ");
          while($tp=mysqli_fetch_assoc($tampil)){
	  ?>
	    <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#B3CF70">
          <tr> 
            <td colspan="6" bordercolor="#99CC66" bgcolor="#FFFFFF"><div align="left" class="style4">&nbsp;Kelas 
                : <? echo $tp['kelas']; ?></div></td>
          </tr>
          <tr> 
            <td width="6%" bgcolor="#B3CF70"><div align="center"><span class="style3">NIS</span></div></td>
            <td width="24%" bgcolor="#B3CF70"><div align="center"><span class="style3">Nama 
                Lengkap </span></div></td>
            <td width="5%" bgcolor="#B3CF70"><div align="center"><span class="style3">Kelas</span></div></td>
            <td width="32%" bgcolor="#B3CF70"><div align="center"><span class="style3">Prestasi 
                </span></div></td>
            <td width="30%" bgcolor="#B3CF70"><div align="center"><span class="style3">Pelanggaran</span></div></td>
            <td width="3%" bgcolor="#B3CF70"><div align="center"><font color="#FFFFFF"><strong>P</strong></font></div></td>
          </tr>
          <?
	      $tmpkls=mysqli_query($koneksi, "SELECT * FROM tb_santri WHERE kelas_st='$tp[kelas]' AND status='a' ORDER BY nama");
          while($ct=mysqli_fetch_assoc($tmpkls)){
	   ?>
          <tr> 
            <td bgcolor="#FFFFFF"><div align="center"><a href="home.php?home=lspr&id_k=<? echo"$ct[id_santri]&pgr=$pgr"; ?>"><? echo"$ct[nis]"; ?></a></div></td>
            <td bgcolor="#FFFFFF"><div align="left">&nbsp;<? echo"$ct[nama]"; ?></div></td>
            <td bgcolor="#FFFFFF"><div align="center"><? echo"$ct[kelas_st]"; ?></div></td>
            <td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <? $no=1;
		  $tpr=mysqli_query($koneksi, "SELECT * FROM tb_prpl WHERE kd_st='$ct[id_santri]' and ket='s' AND ket2='$pgr'");
          while($cpr=mysqli_fetch_assoc($tpr)){
		   
		 
		  ?>
                <tr> 
                  <td width="7%" ><div align="center"><? echo $no."."; ?></div></td>
                  <td width="93%"><a href="home.php?home=lspr&edt=y&ed_k=<? echo"$cpr[id_prpl]&pgr=$pgr"; ?>">
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
		  $tpr=mysqli_query($koneksi, "SELECT * FROM tb_prpl WHERE kd_st='$ct[id_santri]' and ket='p' AND ket2='$pgr'");
          while($cpr=mysqli_fetch_assoc($tpr)){
		   
		 
		  ?>
                <tr> 
                  <td width="7%" ><div align="center"><? echo $no."."; ?></div></td>
                  <td width="93%"><a href="home.php?home=lspr&amp;edt=y&amp;ed_k=<? echo"$cpr[id_prpl]&pgr=$pgr"; ?>"> 
                    <?  echo $cpr['hari'].",".$cpr['tgl']."-".$cpr['bln']."-".$cpr['thn']; ?>
                    </a></td>
                </tr>
                <tr> 
                  <td>&nbsp;</td>
                  <td><? echo $cpr['perihal']; ?></td>
                </tr>
                <? $no+=1; } ?>
              </table></td>
            <td valign="middle" bgcolor="#FFFFFF"><div align="center"><a href="page/report_prpl_st.php?idstr=<? echo $ct['id_santri']; ?>" target="_blank"><img src="images/text.gif" width="16" height="16" border="0" /></a></div></td>
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
        </table>
	  <? echo "<br>"; } ?></td>
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
