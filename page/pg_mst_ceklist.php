<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.lk {
	text-decoration: none;
}
-->
</style>
</head>
<? $klsk=$_GET['klsk']; 
   $taj=$_GET['taj']; ?>
<body>
<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
  <tr>
    <td width="100%" height="18" colspan="5" bgcolor="#B3CF70"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="12" height="34">&nbsp;</td>  <td width="24"><img src="images/actionEdit.gif" width="18" height="18" /></td>  
        <td width="149"><a href="home.php?home=ceklst&dpn_st=lkcek" class="lk">Lokasi Ceklist </a></td>
        <td width="24"><img src="images/BD14981_.GIF" width="15" height="15" /></td>
          <td width="201"> <a href="home.php?home=ceklst&dpn_st=lscek" class="lk">List Lokasi Ceklist</a> </td>
          <td width="23"><img src="images/BD14981_.GIF" width="15" height="15" /></td>
          <td width="147"><a href="home.php?home=ceklst&dpn_st=pg_dckl" class="lk">Ceklist</a></td>
          <td width="34">&nbsp;</td>
          <td width="58"><a href="#" class="lk"></a> </td>
          <td width="23">&nbsp;</td>
          <td width="80"></td>
          <td width="23">&nbsp;</td>
          <td width="244"></td>
          <td width="27">&nbsp;</td>
          <td width="244"></td>
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <td colspan="5" height="2"></td>
  </tr>
  <tr>
    <td colspan="5" bgcolor="#DCF3AF"><?
	if($dpn_st=="lkcek" || $dpn_st==""){ include("ipt_mst_lokasi_ceklist.php"); }
	if($dpn_st=="lscek"){ include("ipt_list_lokasi_ceklist.php"); }
	if($dpn_st=="pg_dckl"){ include("pg_daerah_ceklist.php"); } 
	
	?></td>
  </tr>
  <tr>
    <td colspan="5" height="7"></td>
  </tr>
</table>

</body>
</html>

