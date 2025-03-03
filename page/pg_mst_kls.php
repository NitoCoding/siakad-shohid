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
$dpn_kls1=$_GET['dpn_kls1'];
$dpn_kls2=$_GET['dpn_kls2'];
$dpn_kls3=$_GET['dpn_kls3'];
$dpn_kls4=$_GET['dpn_kls4'];
?>
<body>
<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
  <tr>
    <td width="112%" height="21" colspan="5" bgcolor="#B3CF70" <? if($dpn_kls1=="k1"){ echo "bgcolor='#99CC66'"; }else{ echo "bgcolor='#336600'"; } ?>><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="51%">&nbsp;</td>
        <td width="3%"><img src="images/collapsed.gif" width="16" height="12" /></td>
        <td width="15%"><a href="<? if($idkusr=="a" || $idkusr=="m" || $idkusr=="k" || $idkusr=="d"){ echo "home.php?home=kls&dpn_kls1=k1"; }else{ echo"home.php?phk=1"; } ?>" class="lk">Master Kelas</a></td>
        <td width="3%"><img src="images/collapsed.gif" width="16" height="12" /></td>
        <td width="13%"><a href="<? if($idkusr=="a" || $idkusr=="m" || $idkusr=="k" || $idkusr=="d"){ echo "home.php?home=kls&dpn_kls2=k2"; }else{ echo"home.php?phk=1"; } ?>" class="lk">Pembagian Kelas Santri</a></td>
        <td width="3%"><img src="images/collapsed.gif" width="16" height="12" /></td>
        <td width="12%"><a href="<? if($idkusr=="r" || $idkusr=="m" || $idkusr=="k" || $idkusr=="d"){ echo "home.php?home=kls&dpn_kls3=k3"; }else{ echo"home.php?phk=1"; } ?>" class="lk">Wali Kelas</a></td>
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <td colspan="5" height="7"></td>
  </tr>
  <tr>
    <td colspan="5" bgcolor="#DCF3AF"><?
	if($dpn_kls1=="k1"){ include("ipt_mst_kls.php"); }
	if($dpn_kls2=="k2"){ include("ipt_mst_rbg.php"); }
	if($dpn_kls3=="k3"){ include("ipt_mst_wkls.php"); }
	if($dpn_kls4=="k4"){ include("edt_mst_kls.php"); }
	?></td>
  </tr>
  <tr>
    <td height="7" colspan="5"></td>
  </tr>
  <tr>
    <td height="24" colspan="5" bgcolor="#B3CF70">&nbsp;&nbsp;</td>
  </tr>
</table>

</body>
</html>
