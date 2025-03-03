<? if($idkusr=="m" || $idkusr=="d" || $idkusr=="g"){  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</head>
<?
$pmb=$_GET['pmb'];

?>
<body>
<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
  <tr>
    <td width="95%" height="29" colspan="4" bgcolor="#B3CF70" <? if($rst1=="k1"){ echo "bgcolor='#99CC66'"; }else{ echo "bgcolor='#336600'"; } ?>><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="4%">&nbsp;</td>
        <td width="3%"><img src="images/collapsed.gif" width="16" height="12" /></td>
        <td width="16%"><a href="home.php?home=lkeu&pmb=1" class="lk">Laporan Transaksi Harian</a></td>
        <td width="3%"><img src="images/collapsed.gif" width="16" height="12" /></td>
        <td width="16%"><a href="home.php?home=lkeu&pmb=2" class="lk">Laporan Pemasukan </a> </td>
        <td width="3%"><img src="images/collapsed.gif" width="16" height="12" /></td>
        <td width="14%"><a href="home.php?home=lkeu&pmb=3" class="lk">Laporan Pengeluaran</a></td>
        <td width="3%"><img src="images/collapsed.gif" width="16" height="12" /></td>
        <td width="17%"><a href="home.php?home=byr&pmb=5" class="lk"></a></td>
        <td width="3%"><img src="images/collapsed.gif" width="16" height="12" /></td>
        <td width="18%"><a href="home.php?home=byr&pmb=6" class="lk"></a></td>
        </tr>
    </table></td>
  </tr>
  
  
  <tr>
    <td colspan="4" height="7"></td>
  </tr>
  
  <tr>
    <td colspan="4"><?
	if($pmb=="1" || $pmb==""){ include("lap_transaksi_keuangan.php"); }
	if($pmb=="2"){ include("lap_transaksi_pemasukan.php"); }
	if($pmb=="3"){ include("lap_transaksi_pengeluaran.php"); }
	
	?></td>
  </tr>
</table>

</body>
</html>
<?  } ?>