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
<body>
<strong><br />
&nbsp;Alumni Tahun Ajaran </strong> 
<select name="select" onchange="MM_jumpMenu('parent',this,0)">
  <option value="home.php?home=al">-</option>
  <?
	   for($b=-5;$b<=5;$b++){ $th2=(date("Y")+$b)+1;
	   $thtm=date("Y")+$b."/".$th2;
  ?>
  <option value="home.php?home=al&taj=<? echo "$thtm"; ?>" <? if($taj=="$thtm"){ echo"selected='selected'"; } ?>><? echo $thtm; ?></option>
  <? } ?>
  </select>
&nbsp;<strong>|</strong>&nbsp;&nbsp;<img src="images/index.gif" width="16" height="16" /> 
&nbsp;<a href="page/report_rekap_dt_alumni.php?thrj=<? echo $taj; ?>" class="lk" target="_blank">Priview Data Alumni</a><br />
&nbsp; 

<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#B3CF70">
  <tr> 
    <td width="3%" height="26" bgcolor="#B3CF70"><div align="center">No</div></td>
    <td width="6%" bgcolor="#B3CF70"><div align="center">Nis </div></td>
    <td width="22%" bgcolor="#B3CF70"><div align="center">Nama</div></td>
    <td width="7%" bgcolor="#B3CF70"><div align="center">Kelas </div></td>
    <td width="9%" bgcolor="#B3CF70"><div align="center">TA Masuk </div></td>
    <td width="8%" bgcolor="#B3CF70"><div align="center">TA Tamat</div></td>
    <td width="36%" bgcolor="#B3CF70"><div align="center">Lanjut ke/Tidak Lanjut/Kerja</div></td>
  </tr>
  <tr> 
    <td colspan="7" height="2"></td>
  </tr>
  <? $no=1;
     $tampil2=mysqli_query($koneksi, "SELECT * FROM tb_santri WHERE status='l' AND ta_tamat='$taj'  ORDER BY nis ");
     while($tp=mysqli_fetch_assoc($tampil2)){
  ?>
  <tr> 
    <td bgcolor="#DCF3AF"><div align="center"><? echo"$no"; ?></div></td>
    <td bgcolor="#DCF3AF"><div align="center"><a href="home.php?home=st&dpn_st=edt&idk_dst=<? echo"$tp[id_santri]"; ?>"><? echo"$tp[nis]"; ?></a></div></td>
    <td bgcolor="#DCF3AF"><? echo"$tp[nama]"; ?></td>
    <td bgcolor="#DCF3AF"><div align="center"><? echo"$tp[kelas_st]"; ?></div></td>
    <td bgcolor="#DCF3AF"><div align="center"><? echo"$tp[thn_ajaranmsk]"; ?></div></td>
    <td bgcolor="#DCF3AF"><div align="center"><? echo"$tp[ta_tamat]"; ?></div></td>
    <td bgcolor="#DCF3AF"> &nbsp;<? echo"$tp[lanjut_ke]"; ?> </td>
  </tr>
  <? $no+=1; } ?>
</table>


</body>
</html>
