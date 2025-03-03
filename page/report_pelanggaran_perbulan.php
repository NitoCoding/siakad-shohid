<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {	font-size: 24px;
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
 $blnk=$_GET['blnk'];
 $thaj=$_COOKIE['thaj'];
 $sem=$_COOKIE['sem'];
?>
<body>
<table width="908" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="850" height="190" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="14" colspan="6" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="7%" valign="top"><img src="../images/LOGO-SHOID2.jpg" width="95" height="108" /></td>
                    <td width="1%">&nbsp;</td>
                    <td width="92%"><div align="center"><span class="style3">YAYASAN SHOHWATUL IS'AD</span><br />
                            <span class="style1">SMP - SMA IT   SHOHWATUL IS'AD</span><br />
                            <br />
                            <span class="style4">Alamat:  Jl. Poros Padanglampe&nbsp; KM  . 3&nbsp; Ma&rsquo;rang&nbsp;  Pangkep&nbsp; Sulawesi -Selatan<br />
                              http://www.shohwatulisad.sch.id - e-mail : info@shohwatulisad.sch.id </span></div></td>
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
        <td colspan="6"><div align="center" class="style5">REKAP PELANGGARAN SANTRI PERBULAN </div></td>
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
        <td width="10%">Tahun Ajaran </td>
        <td width="1%">:</td>
        <td width="64%"><? echo $thaj; ?></td>
        <td width="8%">Bulan</td>
        <td width="1%">:</td>
        <td width="16%"><? echo $blnk; ?></td>
      </tr>
      <tr>
        <td>Semester</td>
        <td>:</td>
        <td><? echo $sem; ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td width="2%" height="24" bgcolor="#999999"><div align="center"><strong>NO.</strong></div></td>
        <td width="26%" bgcolor="#999999"><div align="center"><strong>NAMA SANTRI </strong></div></td>
        <td width="4%" bgcolor="#999999"><div align="center">Kelas</div></td>
        <td width="31%" bgcolor="#999999"><div align="center"><strong>JENIS PELANGGARAN </strong></div></td>
        <td width="10%" bgcolor="#999999"><div align="center"><strong>TERJADI TANGGAL </strong></div></td>
        <td width="27%" bgcolor="#999999"><div align="center"><strong>HUKUMAN YANG DIBERIKAN </strong></div></td>
        </tr>
      
      <? $no=1;  $tthn=date("Y");
   $tam=mysqli_query($koneksi, "SELECT * FROM tb_prpl WHERE bln='$blnk' AND thn='$tthn'");
   while($tp=mysqli_fetch_assoc($tam)){
      
    $tmpkls=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st,status FROM tb_santri WHERE id_santri='$tp[kd_st]' AND status='a' ");
    $ct=mysqli_fetch_assoc($tmpkls);
		         
  ?>
      <tr>
        <td><div align="center"><? echo $no; ?></div></td>
        <td><? echo $ct['nama']; ?></td>
        <td><div align="center"><? echo $ct['kelas_st']; ?></div></td>
        <td><? echo $tp['perihal']; ?></td>
        <td><div align="center">
          <? 
		$waktu=$tp['hari'].",".$tp['tgl']." ".$tp['bln']." ".$tp['thn'];
		
		echo $waktu; ?>
        </div></td>
        <td><? echo $tp['hkuman']; ?></td>
        </tr>
      <?
    $no+=1;
    }
  ?>
    </table></td>
  </tr>
  <tr>
    <td height="15" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td height="15" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td height="15" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>&nbsp;</td>
        <td>Kesiswaan,</td>
        <td>&nbsp;</td>
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
      <tr>
        <td width="74%">&nbsp;</td>
        <td width="23%">( Adnan, S.Pd.)</td>
        <td width="3%">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>

</body>
</html>
