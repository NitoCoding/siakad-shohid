<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="1320" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="53" bgcolor="#99CC66"><div align="center"><strong>NO</strong></div></td>
    <td width="311" bgcolor="#99CC66"><div align="center"><strong>NAMA</strong></div></td>
    <td width="316" bgcolor="#99CC66"><div align="center"><strong>ASAL SEKOLAH </strong></div></td>
    <td width="320" bgcolor="#99CC66"><div align="center"><strong>ALAMAT</strong></div></td>
    <td width="320" bgcolor="#99CC66"><div align="center">Cetak</div></td>
  </tr>
  <? 
     include("../koneksi.php");
	 $no=1;
     $jst=mysqli_query($koneksi, "SELECT * FROM tb_santri WHERE status='c'  ORDER BY id_santri DESC");
     while($tp=mysqli_fetch_assoc($jst)){
  ?>
  <tr>
    <td align="center"><? echo $no; ?></td>
    <td><? echo $tp['nama']; ?></td>
    <td><? echo $tp['asal_sekolah']; ?></td>
    <td><? echo $tp['alamat']; ?></td>
    <td><div align="center"><a href="report_formulir.php?idk=<? echo"$tp[id_santri]"; ?>" target="_blank">Cetak Formulir</a></div></td>
  </tr> <? $no+=1; } ?>
  <tr>
    <td bgcolor="#99CC66">&nbsp;</td>
    <td bgcolor="#99CC66">&nbsp;</td>
    <td bgcolor="#99CC66">&nbsp;</td>
    <td bgcolor="#99CC66">&nbsp;</td>
    <td bgcolor="#99CC66">&nbsp;</td>
  </tr>
</table>
</body>
</html>
