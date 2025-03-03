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
$rst1=$_GET['rst1'];
$rst2=$_GET['rst2'];
$rst3=$_GET['rst3'];
$rst4=$_GET['rst4'];
$thaj=$_COOKIE['thaj'];
$sem=$_COOKIE['sem']; 
?>
<body>
<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
  <tr>
    <td width="95%" height="27" colspan="4" bgcolor="#B3CF70" <? if($rst1=="k1"){ echo "bgcolor='#99CC66'"; }else{ echo "bgcolor='#336600'"; } ?>><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="46%">&nbsp;</td>
        <td width="2%"><img src="images/collapsed.gif" width="16" height="12" /></td>
        <td width="8%"><a href="home.php?home=rst&amp;rst1=k1" class="lk">Kelas</a></td>
        <td width="2%"><img src="images/collapsed.gif" width="16" height="12" /></td>
        <td width="12%"><a href="home.php?home=rst&amp;rst2=k2" class="lk">Jam Roster</a></td>
        <td width="2%"><img src="images/collapsed.gif" width="16" height="12" /></td>
        <td width="11%"><a href="home.php?home=rst&amp;rst3=k3" class="lk">Roster</a></td>
        <td width="2%"><div align="center"><img src="images/collapsed.gif" width="16" height="12" /></div></td>
        <td width="15%"><a href="home.php?home=rst&amp;rst4=k4" class="lk">Guru Mapel</a></td>
      </tr>
    </table></td>
  </tr>
  
  
  <tr>
    <td colspan="4" height="7"></td>
  </tr>
  
  <tr>
    <td colspan="4"><?
	if($rst1=="k1"){ include("ipt_mst_rkls.php"); }
	if($rst2=="k2"){ include("ipt_mst_jam.php"); }
	if($rst3=="k3"){ include("ipt_mst_drst.php"); }
	if($rst4=="k4"){ include("ipt_mst_guru_mapel.php"); }
	?></td>
  </tr>
</table>

</body>
</html>
