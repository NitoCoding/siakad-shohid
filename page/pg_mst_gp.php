<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
  <tr>
    <td width="100%" height="27" colspan="2" bgcolor="#B3CF70"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td width="32">&nbsp;</td>
          <td width="18"><img src="images/actionEdit.gif" width="18" height="18" /></td>
          <td width="222">&nbsp;<a href="home.php?home=gp&dpn_pg=id" class="lk">Input 
            Data Guru dan Pegawai</a></td>
          <td width="17"> <img src="images/text.gif" width="16" height="16" /></td>
          <td width="228">&nbsp;<a href="home.php?home=gp&dpn_pg=ld" class="lk">List 
            Data Guru dan Pegawai</a></td>
          <td width="20"><img src="images/index.gif" width="16" height="16" /></td>
          <td width="229"><a href="page/report_gp.php" class="lk" target="_blank">Priview Data 
            Guru &amp; Pegawai </a></td>
          <td width="23"><img src="images/BD14980_.GIF" width="15" height="15" /></td>
          <td width="200"><a href="home.php?home=gp&dpn_pg=pp" class="lk">Prestasi/Pelanggaran</a></td>
        </tr>
      </table></td>
  </tr>
  
  <tr>
    <td height="7" colspan="2"></td>
  </tr>
  <tr>
    <td height="33" colspan="2" bgcolor="#DCF3AF"><?
	if($dpn_pg=="id" || $dpn_pg==""){ include("ipt_mst_gp.php"); }
	if($dpn_pg=="ld"){ include("list_dt_gp.php"); }
	if($dpn_pg=="edt"){ include("edt_mst_gp.php"); }
	if($dpn_pg=="pp"){ include("ipt_mst_prpl_gp.php"); }
	if($dpn_pg=="ip"){ include("ipt_prpl_gp.php"); }
	?></td>
  </tr>
  <tr>
    <td height="7" colspan="2"></td>
  </tr>
  <tr>
    <td height="24" colspan="2" bgcolor="#B3CF70">&nbsp;</td>
  </tr>
</table>

</body>
</html>
