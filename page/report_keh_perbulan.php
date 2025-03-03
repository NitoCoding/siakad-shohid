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
 $pknk=$_GET['pknk'];
 $klsk=$_GET['klsk'];
 $thaj=$_COOKIE['thaj'];
 $sem=$_COOKIE['sem'];
?>
<body>
<table width="850" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="850" height="190" valign="top"><table width="850" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="14" colspan="6" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="7%" valign="top"><img src="../images/LOGO-SHOID2.jpg" width="95" height="108" /></td>
                  <td width="1%">&nbsp;</td>
                  <td width="92%"><div align="center"><span class="style3">YAYASAN SHOHWATUL IS'AD</span><br />
                    <span class="style1">SMP / SMA IT SHOHWATUL IS'AD</span><br />
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
        <td colspan="6"><div align="center" class="style5">REKAP ABSENSI KEHADIRAN SANTRI PERBULAN </div></td>
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
        <td width="10%">Kelas</td>
        <td width="1%">:</td>
        <td width="64%"><? echo $klsk; ?></td>
        <td width="8%">Semester</td>
        <td width="1%">:</td>
        <td width="16%"><? echo $sem; ?></td>
      </tr>
      <tr>
        <td>Tahun Ajaran </td>
        <td>:</td>
        <td><? echo $thaj; ?></td>
        <td>Bulan</td>
        <td>:</td>
        <td><? echo $blnk; ?></td>
      </tr>
      
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="850" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td width="4%" rowspan="2" bgcolor="#999999"><div align="center">NO.</div></td>
        <td width="8%" rowspan="2" bgcolor="#999999"><div align="center">NIS</div></td>
        <td width="60%" rowspan="2" bgcolor="#999999"><div align="center">NAMA SANTRI </div></td>
        <td colspan="3" bgcolor="#999999"><div align="center">K E H A D I R A N </div></td>
      </tr>
      <tr>
        <td width="6%" bgcolor="#999999"><div align="center">I</div></td>
        <td width="6%" bgcolor="#999999"><div align="center">S</div></td>
        <td width="6%" bgcolor="#999999"><div align="center">A</div></td>
        </tr>
      <? $no=1;
   $tam=mysqli_query($koneksi, "SELECT id_santri,kelas_st,nama,nis FROM tb_santri WHERE kelas_st='$klsk' AND status='a'  ORDER BY nama  ");
   while($tp=mysqli_fetch_assoc($tam)){
             
  ?>
      <tr>
        <td><div align="center"><? echo $no; ?></div></td>
        <td><div align="center"><? echo $tp['nis']; ?></div></td>
        <td>&nbsp;<? echo $tp['nama']; ?></td>
        <td><div align="center">
            <?
   $tdth=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ext WHERE thn_ajar='$thaj' and semester='$sem' and bulan='$blnk' and kd_santri='$tp[nis]' and kelas='$klsk' ");
   $tdh=mysqli_fetch_assoc($tdth);
   echo $tdh['izin'];
   
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ext WHERE thn_ajar='$thaj' and semester='$sem' and bulan='$blnk' and kd_santri='$tp[nis]' and kelas='$klsk' ");
   $tdh=mysqli_fetch_assoc($tdth);
   echo $tdh['sakit'];
   
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ext WHERE thn_ajar='$thaj' and semester='$sem' and bulan='$blnk' and kd_santri='$tp[nis]' and kelas='$klsk' ");
   $tdh=mysqli_fetch_assoc($tdth);
   echo $tdh['alpa'];
   
  ?>
        </div></td>
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
        <td>Wali Kelas, </td>
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
        <td width="23%">(
          <?
	$tampi=mysqli_query($koneksi, "SELECT * FROM master_kelas WHERE kelas='$klsk' ");
    $tpk=mysqli_fetch_assoc($tampi);
	
	$tampi2=mysqli_query($koneksi, "SELECT * FROM wali_kelas WHERE kd_kls='$tpk[kd_kls]' ");
    $tpk3=mysqli_fetch_assoc($tampi2);
	
	$tampi4=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$tpk3[kd_gp]' ");
    $tpk4=mysqli_fetch_assoc($tampi4);
	echo $tpk4['nama_gp'];
	?>
          )</td>
        <td width="3%">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>

</body>
</html>
