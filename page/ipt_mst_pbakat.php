<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
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
  $kpb=$_GET['kpb'];
  $klsk=$_GET['klsk'];
?>
<body>
<form id="form1" name="form1" method="post" action="page/act_dt_wkls.php">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
	  <td colspan="3" bgcolor="#B3CF70"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="2%" height="31">&nbsp;</td>
          <td width="3%"><img src="images/collapsed.gif" width="16" height="12" /></td>
          <td width="95%">Pengembangan Bakat Santri </td>
        </tr>
      </table></td>
    </tr>
	<tr>
	  <td colspan="3" height="7"></td>
    </tr>
	<tr>
	  <td bgcolor="#ACD75E">&nbsp;</td>
	  <td width="77%" bgcolor="#ACD75E">&nbsp;</td>
	  <td width="21%" bgcolor="#ACD75E">&nbsp;</td>
    </tr>
	<tr>
	  <td height="30" bgcolor="#DCF3AF">&nbsp;</td>
	  <td colspan="2" bgcolor="#DCF3AF">Pengembangan Bakat  
	    <select name="menu1" onchange="MM_jumpMenu('parent',this,0)">
        <option value="home.php?home=pbk">-</option>
        <?
	      $tmpa=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE ket='PB' ");
          while($tma=mysqli_fetch_assoc($tmpa)){
	    ?>
        <option value="home.php?home=pbk&kpb=<? echo "$tma[kd_mp]&klsk=$klsk"; ?>" <? if($kpb==$tma['kd_mp']){ echo"selected='selected'"; } ?>><? echo $tma['nama_mp']; ?></option>
        <? } ?>
      </select> 
	  &nbsp;&nbsp;&nbsp;&nbsp;Kelas 
	  <select name="select" onchange="MM_jumpMenu('parent',this,0)">
	    <option value="home.php?home=pbk">-</option>
	    <?
	      $tmpa2=mysqli_query($koneksi, "SELECT kelas FROM master_kelas  ");
          while($tma2=mysqli_fetch_assoc($tmpa2)){
	    ?>
	    <option value="home.php?home=pbk&klsk=<? echo "$tma2[kelas]&kpb=$kpb"; ?>" <? if($klsk==$tma2['kelas']){ echo"selected='selected'"; } ?>><? echo $tma2['kelas']; ?></option>
	    <? } ?>
      </select></td>
    </tr>
	
	<tr>
	  <td colspan="3" bgcolor="#ACD75E">&nbsp;</td>
    </tr>
	
	<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
    </tr>
	<tr>
	  <td height="25" bgcolor="#DCF3AF">&nbsp;</td>
	  <td bgcolor="#DCF3AF"><? if($klsk!=""){ echo"Kelas : $klsk"; }else{ echo"Semua Kelas"; } ?></td>
	  <td bgcolor="#DCF3AF">&nbsp;</td>
    </tr>
	
	<tr>
      <td width="2%" height="65" bgcolor="#DCF3AF">&nbsp;</td>
      <td colspan="2" valign="top" bgcolor="#DCF3AF"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#B3CF70">
        <tr>
          <td width="4%" bordercolor="#B3CF70" bgcolor="#B3CF70"><div align="center" class="style1">No</div></td>
          <td width="12%" bordercolor="#B3CF70" bgcolor="#B3CF70"><div align="center"><span class="style1 style1">Nis</span></div></td>
          <td width="36%" bordercolor="#B3CF70" bgcolor="#B3CF70"><div align="center"><span class="style1">Nama</span></div></td>
          <td width="48%" bordercolor="#B3CF70" bgcolor="#B3CF70"><div align="center"><span class="style1">Pegembangan Bakat yang Diikuti </span></div></td>
        </tr>
        <?  $no=1;
		  if($klsk!=""){ $kl="WHERE kelas_st='$klsk' AND status='a' ORDER BY nama"; } 
		  $tampil3=mysqli_query($koneksi, "SELECT id_santri,nama,nis,kelas_st FROM tb_santri $kl ");
          while($tp3=mysqli_fetch_assoc($tampil3)){
		?>
        <tr>
          <td bgcolor="#FFFFFF"><div align="center"><? echo $no; ?></div></td>
          <td height="21" bgcolor="#FFFFFF"><div align="center"><a href="page/act_dt_pbakat.php?rekam=Simpan&amp;<? echo"kpb=$kpb&klsk=$klsk&idsk=$tp3[id_santri]"; ?>">
              <? 
		  echo $tp3['nis']; ?>
          </a></div></td>
          <td bgcolor="#FFFFFF">&nbsp; <?  echo $tp3['nama']; ?>  </td>
          <td bgcolor="#FFFFFF"><? $no2=1;
		  $pb=mysqli_query($koneksi, "SELECT * FROM tb_pbakat WHERE kd_santri='$tp3[id_santri]' ");
          while($tpb=mysqli_fetch_assoc($pb)){
		  
		  $pb2=mysqli_query($koneksi, "SELECT kd_mp,nama_mp FROM mata_pelajaran WHERE kd_mp='$tpb[kd_mp]' ");
          $tpb2=mysqli_fetch_assoc($pb2);
		  echo "&nbsp; $no2. "."<a href='page/act_dt_pbakat.php?hapus=del&kpb=$kpb&klsk=$klsk&idpbk=$tpb[id_pbakat]'>$tpb2[nama_mp]</a>"."<br>"; 
		$no2+=1;  }
		  ?></td>
        </tr>
        <? $no+=1; } ?>
        <tr>
          <td bordercolor="#B3CF70" bgcolor="#B3CF70">&nbsp;</td>
          <td bordercolor="#B3CF70" bgcolor="#B3CF70">&nbsp;</td>
          <td bordercolor="#B3CF70" bgcolor="#B3CF70">&nbsp;</td>
          <td bordercolor="#B3CF70" bgcolor="#B3CF70">&nbsp;</td>
        </tr>
      </table></td>
    </tr>
    

    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF"><div align="left"></div></td>
      <td bgcolor="#DCF3AF" <? if($wrna3==1)echo"bgcolor='#FF0000'"; ?>><div align="left"></div></td>
    </tr>
  </table>
</form>

</body>
</html> 
