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
        <td width="79"><a href="home.php?home=st&dpn_st=id" class="lk">Data Santri</a></td>
        <td width="23"><img src="images/BD14981_.GIF" width="15" height="15" /></td>
          <td width="109"> <a href="home.php?home=st&dpn_st=riwayat" class="lk">Riwayat Santri</a> </td>
          <td width="21"><img src="images/BD14981_.GIF" width="15" height="15" /></td>
          <td width="112"><a href="home.php?home=st&dpn_st=" class="lk">Data Keluarga</a></td>
          <td width="24"><img src="images/BD14981_.GIF" width="15" height="15" /></td>
          <td width="174"><a href="#" class="lk">Prestasi Santri</a> </td>
          <td width="25">&nbsp;</td>
          <td width="172"></td>
          <td width="23">&nbsp;</td>
          <td width="244"></td>
          <td width="27"><img src="images/text.gif" width="16" height="16" /></td>
          <td width="244"><a href="#" class="lk"></a> <a href="home.php?home=st&dpn_st=ld" class="lk">Lihat 
          Data Santri</a></td>
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <td colspan="5" height="2"></td>
  </tr>
  <tr>
    <td colspan="5" bgcolor="#DCF3AF"><?
	if($dpn_st=="id" || $dpn_st==""){ include("ipt_mst_st.php"); }
	if($dpn_st=="ld"){ include("list_dt_st.php"); }
	if($dpn_st=="edt"){ include("edt_mst_st.php"); }
	if($dpn_st=="riwayat"){ include("list_data_riwayat.php"); } 
	if($dpn_st=="ipt_ryt"){ include("ipt_data_riwayat.php"); }
	?></td>
  </tr>
  <tr>
    <td colspan="5" height="7"></td>
  </tr>
</table>

</body>
</html>

