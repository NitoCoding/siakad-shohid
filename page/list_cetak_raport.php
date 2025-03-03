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
</head>
<?
 $klsk=$_GET['klsk'];
 $klsk2=$_GET['klsk2'];
 $thaj=$_COOKIE['thaj'];
 $sem=$_COOKIE['sem'];
 $idgurp=$_COOKIE['idgurp'];
 
?>
<body>
<table width="1185" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><font size="3" color="#CCFFCC"><a href="home.php?home=nilai&dpn_n25=n25&<? echo"klsk=$klsk&ki=3&klsk2=$klsk2"; ?>"><img src="images/back.jpg" width="33" height="34" border="0" /></a></font></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="95">&nbsp;</td>
    <td width="164">&nbsp;</td>
    <td width="834">&nbsp;</td>
    <td width="92">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="26">&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp; SEMSTER</td>
    <td bgcolor="#FFFFCC">: <? echo $sem; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="27">&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp; TAHUN PELAJARAN</td>
    <td bgcolor="#FFFFCC">: <? echo $thaj; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="27">&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp; KELAS</td>
    <td bgcolor="#FFFFCC">:
    <? 
		
		echo $klsk2;
		 ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4"><table width="1000" border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <td width="34" rowspan="2" bgcolor="#666600"><div align="center" class="style1">NO</div></td>
        <td width="105" rowspan="2" bgcolor="#666600"><div align="center" class="style1">NIS</div></td>
        <td width="515" rowspan="2" bgcolor="#666600"><div align="center" class="style1">NAMA SANTRI </div></td>
        <td colspan="4" bgcolor="#666600"><div align="center" class="style1">RAPORT</div></td>
        </tr>
      <tr>
        <td width="71" height="34" bgcolor="#666600"><div align="center" class="style1"> MID1  </div></td>
        <td width="101" bgcolor="#666600"><div align="center" class="style1">K13 SMS 1</div></td>
        <td width="54" bgcolor="#666600"><div align="center"><span class="style1"></span><span class="style1">MID2</span></div></td>
        <td width="104" bgcolor="#666600"><div align="center"><span class="style1"></span><span class="style1">K13 SMS 2</span></div></td>
      </tr>
	  <?
	    $no=1;
		$ntgs=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='$klsk2' AND status='a' ORDER BY nama");
	    while($cnt=mysqli_fetch_assoc($ntgs)){
	  ?>
      <tr>
        <td height="30"><div align="center"><? echo $no; ?></div></td>
        <td><div align="center"><? echo $cnt['nis']; ?></div></td>
        <td><? echo $cnt['nama']; ?></td>
		<? if($klsk2=="XA" or $klsk2=="XB" or $klsk2=="XC" or $klsk2=="XD" or $klsk2=="XI" or $klsk2=="XIA" or $klsk2=="XIB" or $klsk2=="XIC" or $klsk2=="XII" or $klsk2=="XIIA" or $klsk2=="XIIB" or $klsk2=="XIIC") { 
		$lkr="page/raport_k13_sma_sms1_new.php?idstr=$cnt[id_santri]"; 
		$lkr2="page/raport/raport_pd_midk13_sma.php?idstr=$cnt[id_santri]"; 
		
		$rps="page/raport_k13_sma_sms2_new.php?idstr=$cnt[id_santri]"; 
		}else{ 
		$lkr2="page/raport/raport_pd_midk13_smp.php?idstr=$cnt[id_santri]"; 
		$lkr="page/raport_k13_smp_sms1_new.php?idstr=$cnt[id_santri]"; 
		$rps="page/raport_k13_smp_sms2_new.php?idstr=$cnt[id_santri]";
		} 
		
		
		?>
        <td><div align="center">
          <? if($sem=='I'){ ?>
          <a href="<? echo $lkr2; ?>" target="_blank"><img src="images/layout.gif" width="20" height="22" border="0" align="absmiddle" /></a>
          <? } ?>
        </div></td>
        <td><div align="center"><? if($sem=='I'){ ?><a href="<? echo $lkr; ?>" target="_blank"><img src="images/layout.gif" width="20" height="22" border="0" align="absmiddle" /></a><? } ?></div></td>
        <td><div align="center"><? if($sem=='II'){ ?><a href="<? echo $lkr2; ?>" target="_blank"><img src="images/layout.gif" width="20" height="22" border="0" align="absmiddle" /></a><? } ?></div></td>
        <td><div align="center"><? if($sem=='II'){ ?><a href="<? echo $rps; ?>" target="_blank"><img src="images/layout.gif" width="20" height="22" border="0" align="absmiddle" /></a><? } ?></div></td>
      </tr>
     <? $no+=1; } ?>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
