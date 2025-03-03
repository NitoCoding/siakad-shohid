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
    <td colspan="3"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
      <tr>
        <td width="4%" height="34" bgcolor="#CCCCFF"><div align="center"><strong>NO</strong></div></td>
        <td width="12%" bgcolor="#CCCCFF"><div align="center"><strong>TANGGAL </strong></div></td>
        <td width="54%" bgcolor="#CCCCFF"><div align="center"><strong>PENGELUARAN</strong></div></td>
        <td width="16%" bgcolor="#CCCCFF"><div align="center"><strong>SUMBER DANA </strong></div></td>
        <td width="14%" bgcolor="#CCCCFF"><div align="center"><strong>JUMLAH</strong></div></td>
      </tr>
      <?       
	  		   $no=1;
			   $tot=0;
			   $tpg=mysqli_query($koneksi, "SELECT * FROM tb_pengeluaran ");
			   while($ctpms=mysqli_fetch_assoc($tpg)){
			   
			  ?>
      <tr>
        <td height="28"><div align="center"><? echo $no; ?></div></td>
        <td><div align="center"><? echo $ctpms['tgl_k']."-".$ctpms['bln_k']."-".$ctpms['thn_k']; ?></div></td>
        <td><? echo $ctpms['nama_transaksi']; ?></td>
        <td><div align="center">
          <? 
		echo $ctpms['mata_anggaran']; ?>
        </div></td>
        <td><div align="right">
            <? 
		$bs=format_agk($ctpms['jumlah_k']); 
		echo $bs; ?>
        </div></td>
      </tr>
      <? 
	  $tot=$tot+$ctpms['jumlah_k'];
	  $no+=1; } ?>
      <tr>
        <td bgcolor="#CCCCFF">&nbsp;</td>
        <td colspan="3" bgcolor="#CCCCFF"><div align="center"><strong>TOTAL PENGELUARAN </strong></div>          <div align="center"></div>          <div align="center"></div></td>
        <td bgcolor="#CCCCFF"><div align="right"><strong>
          <? 
		$tk=format_agk($tot); 
		echo $tk; ?>
        </strong></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
