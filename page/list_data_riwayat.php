<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<style type="text/css">
<!--
.lk {	text-decoration: none;
}
-->
</style>
</head>
<script language="JavaScript" type="text/javascript">
function konfirmasi(pesan) { 
  var is_confirmed=confirm(pesan);      
  if(!is_confirmed){    
   return false;
	}	
}
</script>
<body><br />
<? 
     
     $jst=mysqli_query($koneksi, "SELECT * FROM tb_santri WHERE status='a' or status='p' ");
     $tjst=mysqli_num_rows($jst);
  ?>
<strong>Total Santri Saat ini :</strong> <? echo $tjst; ?>
 Orang <strong>&nbsp;|&nbsp;</strong>  <strong>Kelas</strong> 
<select name="select" onchange="MM_jumpMenu('parent',this,0)">
  <option value="home.php?home=st&dpn_st=riwayat&klsk=s" <? if($klsk=="s"){ echo"selected='selected'"; } ?>>Semua Kelas</option>
  <?
	      $tampi=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas ");
          while($tpk=mysqli_fetch_assoc($tampi)){
	    ?>
  <option value="home.php?home=st&dpn_st=riwayat&klsk=<? echo "$tpk[kelas]"; ?>" <? if($klsk=="$tpk[kelas]"){ echo"selected='selected'"; } ?>><? echo $tpk['kelas']; ?></option>
  <? } ?>
</select>
 &nbsp;<br />
<?  
	      if($klsk!='' and $klsk!='s'){ $klsx="WHERE kelas='$klsk' "; }
		  if($klsk=='s'){ $klsx=""; }
	      $tampil=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas $klsx");
          while($tp=mysqli_fetch_assoc($tampil)){
		  echo"<br><b>Kelas : $tp[kelas]</b><br>";
?>
<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#B3CF70">
  
  <tr>
    <td width="3%" bgcolor="#B3CF70"><div align="center">No</div></td>
    <td width="11%" bgcolor="#B3CF70"><div align="center">Nis </div></td>
    <td width="24%" bgcolor="#B3CF70"><div align="center">Nama</div></td>
    <td width="11%" bgcolor="#B3CF70"><div align="center">Kelas </div></td>
    <td width="22%" bgcolor="#B3CF70"><div align="center">Tahun Ajaran Masuk </div></td>
    <td width="13%" bgcolor="#B3CF70"><div align="center">Status </div></td>
    <td width="8%" height="26" bgcolor="#B3CF70"><div align="center">Edit</div></td>
  </tr>
  
    <tr>
      <td colspan="7" height="2"></td>
    </tr>
	<? $no=1;
     $tampil2=mysqli_query($koneksi, "SELECT * FROM tb_santri WHERE kelas_st='$tp[kelas]' AND status='a' ORDER BY nama ");
     while($tp=mysqli_fetch_assoc($tampil2)){
  ?>
  <tr>
    <td bgcolor="#DCF3AF"><div align="center"><? echo"$no"; ?></div>    </td>
    <td bgcolor="#DCF3AF"><div align="center"><? echo"$tp[nis]"; ?></div>    </td>
    <td bgcolor="#DCF3AF"><? echo"$tp[nama]"; ?></td>
    <td bgcolor="#DCF3AF"><div align="center"><? echo"$tp[kelas_st]"; ?></div>    </td>
    <td bgcolor="#DCF3AF"><div align="center"><? echo"$tp[thn_ajaranmsk]"; ?></div></td>
    <td bgcolor="#DCF3AF"><div align="center">
      <? if($tp['status']=='a')echo"Aktif"; 
	       if($tp['status']=='p')echo"Pindahan"; 
		   if($tp['status']=='d')echo"Pindah"; 
		   if($tp['status']=='l')echo"Alumni"; 
	?>
    </div></td>
    <td bgcolor="#DCF3AF"><div align="center"><a href="home.php?home=st&dpn_st=ipt_ryt&idk_dst=<? echo"$tp[id_santri]"; ?>"><img src="images/image1.gif" width="20" height="22" border="0" align="absmiddle" /></a></div></td>
  </tr>
  <? $no+=1; } ?>
</table>
<? } ?>

</body>
</html>
