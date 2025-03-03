<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
}
.style3 {font-size: 16px}
td {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	text-decoration: none;
}
.style4 {font-size: 12px}
.style5 {
	font-size: 14px;
	font-weight: bold;
}
-->
</style>
</head>
<?
include("../koneksi.php");
 $klsk=$_GET['klsk'];
 $thaj=$_COOKIE['thaj'];
 $sem=$_COOKIE['sem'];
 $idstr=$_GET['idstr'];
?>
<body>
<table width="800" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td height="95" colspan="6" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td height="95" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td width="11%" height="95" valign="top"><img src="../images/LOGO-SHOID2.jpg" width="82" height="93" /></td>
                <td width="89%" valign="top"><span class="style3"><font size="2">YAYASAN 
                  SHOHWATUL IS'AD</font></span><br /> <span class="style1"><font size="4">SMP 
                  IT SHOHWATUL IS'AD</font></span><br /> <br /> <br /> <span class="style4">Alamat: 
                  Jl. Poros Padanglampe&nbsp; KM . 3&nbsp; Ma'rang&nbsp; Pangkep&nbsp; 
                  Sulawesi -Selatan 90645 P.O. Box 300<br />
                  http://www.shohwatulisad.com e-mail : shohwatulisad@gmail.com</span></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td colspan="6"><hr /></td>
  </tr>
  <tr> 
    <td colspan="6">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="6"><div align="center" class="style5"><font size="3">REKAP PRESTASI/PELANGGARAN 
        SANTRI </font></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
      <?
	      $tmpkls=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st FROM tb_santri WHERE id_santri='$idstr' ");
          $ct=mysqli_fetch_assoc($tmpkls);
	   ?>
  <tr> 
    <td width="7%">Nis</td>
    <td width="1%">:</td>
    <td width="61%"><? echo $ct['nis']; ?></td>
    <td width="9%">Semester</td>
    <td width="1%">:</td>
    <td width="21%"><? echo $sem; ?></td>
  </tr>
  <tr> 
    <td>Nama</td>
    <td>:</td>
    <td><? echo $ct['nama']; ?></td>
    <td>Tahun Ajaran</td>
    <td>:</td>
    <td><? echo $thaj; ?></td>
  </tr>
  <tr> 
    <td>Kelas</td>
    <td>:</td>
    <td><? echo $ct['kelas_st']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr valign="top"> 
    <td colspan="6">&nbsp;</td>
  </tr>
  <tr valign="top"> 
    <td height="38" colspan="6"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
        <tr bgcolor="#CCCCCC"> 
          <td width="4%"><div align="center">No</div></td>
          <td width="14%"><div align="center">Tanggal</div></td>
          <td width="40%"><div align="center">Prestasi/Pelanggaran</div></td>
          <td width="33%"><div align="center">Ganjaran</div></td>
          <td width="9%"><div align="center">Keterangan</div></td>
        </tr>
		<? $no=1;
		  $tmpkls=mysqli_query($koneksi, "SELECT * FROM tb_prpl  WHERE kd_st='$ct[id_santri]' ");
          while($ct2=mysqli_fetch_assoc($tmpkls)){
		?>
        <tr> 
          <td> 
            <div align="center"><? echo $no; ?></div></td>
          <td> 
            <div align="center"><? echo $ct2['hari'].", ".$ct2['tgl']."-".$ct2['bln']."-".$ct2['thn']; ?></div></td>
          <td>&nbsp;<? echo $ct2['perihal']; ?></td>
          <td> &nbsp;<? echo $ct2['hkuman']; ?></td>
          <td> <div align="center">
            <? if($ct2['ket']=='s'){ echo "Prestasi"; }else{ echo "Pelanggaran"; } ?>
            </div></td>
        </tr>
		<?
		$no+=1; }
		?>
      </table></td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</body>
</html>
