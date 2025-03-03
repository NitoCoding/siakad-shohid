<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="1200" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#99CC66">
      <tr>
        <td width="4%" height="34" bgcolor="#99CC66"><div align="center"><strong>NO</strong></div></td>
        <td width="70%" bgcolor="#99CC66"><div align="center"><strong>PEMASUKAN</strong></div></td>
        <td width="26%" bgcolor="#99CC66"><div align="center"><strong>JUMLAH</strong></div></td>
      </tr>
      <?       
	  		   $no2=1;
			   $tot=0;
			   $tpms=mysqli_query($koneksi, "SELECT * FROM tb_saldo ");
			   while($ctpms=mysqli_fetch_assoc($tpms)){
			   
			  ?>
      <tr>
        <td height="28" bgcolor="#CCFFCC"><div align="center"><? echo $no2; ?></div></td>
        <td bgcolor="#CCFFCC"><? echo $ctpms['ket']; ?></td>
        <td bgcolor="#CCFFCC"><div align="right">
            <? 
		$bs=format_agk($ctpms['jumlah_total']); 
		echo $bs; ?>
        </div></td>
      </tr>
      <?
	   $tot=$tot+$ctpms['jumlah_total'];
	   $no2+=1; } ?>
      <tr>
        <td bgcolor="#99CC66">&nbsp;</td>
        <td bgcolor="#99CC66"><div align="center"><strong>TOTAL PEMASUKAN </strong></div></td>
        <td bgcolor="#99CC66"><div align="right"><strong>
            <? 
		$tm=format_agk($tot); 
		echo $tm; ?>
        </strong></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
