<? if($idkusr=="d" || $idkusr=="m"){  ?>
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
$usr1=$_GET['usr1'];
$usr2=$_GET['usr2'];
?>
<body>
<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
  <tr>
    <td width="95%" height="27" colspan="4" bgcolor="#B3CF70" <? if($rst1=="k1"){ echo "bgcolor='#99CC66'"; }else{ echo "bgcolor='#336600'"; } ?>><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="57%">&nbsp;</td>
        <td width="4%"><img src="images/collapsed.gif" width="16" height="12" /></td>
        <td width="19%"><a href="home.php?home=usr&usr1=k1" class="lk">User Guru &amp; Pegawai </a></td>
        <td width="3%"><img src="images/collapsed.gif" width="16" height="12" /></td>
        <td width="17%"><a href="home.php?home=usr&usr2=k2" class="lk">User Santri </a></td>
      </tr>
    </table></td>
  </tr>
  
  
  <tr>
    <td colspan="4" height="7"></td>
  </tr>
  
  <tr>
    <td colspan="4"><?
	if($usr1=="k1"){ include("ipt_mst_usr.php"); }
	if($usr2=="k2"){ include("ipt_mst_usr2.php"); }
	?></td>
  </tr>
</table>

</body>
</html>
<? } ?>