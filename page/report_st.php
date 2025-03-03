<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style5 {
	font-size: 16px;
	font-family: Arial, Helvetica, sans-serif;
}
.style23 {
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
.style24 {font-size: 18px}
.style26 {font-size: 30px}
td {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	text-decoration: none;
}
.style27 {font-size: 12px}
-->
</style>
</head>
<? include("../koneksi.php"); 
   $klsk=$_GET['klsk'];
?>
<body>
<table width="2000" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="10%" height="89" valign="top"><img src="../images/LOGO-SHOID2.jpg" width="76" height="89" /></td>
        <td width="90%" valign="top"><div align="left"><span class="style5"><span class="style24">Pondok Pesantren Modern Islam </span><br />
                  <span class="style26">SHOHWATUL IS'AD </span><br />
                  <br />
            </span><span class="style23">Jl. Sipitto Ma'rang Kabupaten Pangkep Sulawesi Selatan Telp.(0410)2315599,   Fax(0410)2317977, www.shohwatulisad.com</span></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="center"><strong><span class="style27">DAFTAR NAMA SANTRI PPMI SHOHWATUL IS'AD KELAS</span> <? echo $klsk; ?></strong></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="275">&nbsp;</td>
    <td width="1122">&nbsp;</td>
    <td width="403">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" valign="top"><table width="2000" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr><font size="1">
        <td width="1%" bgcolor="#CCCCCC"><div align="center"><strong>No</strong></div></td>
        </font><td width="3%" bgcolor="#CCCCCC"><div align="center"><font size="1"><strong>Nis</strong>/NISN</font></div></td>
        <font size="1"><td width="9%" bgcolor="#CCCCCC"><div align="center"><strong>Nama</strong> Santri </div></td>
        <td width="8%" bgcolor="#CCCCCC"><div align="center"><strong>Tempat/Tanggal Lahir </strong></div></td>
        <td width="12%" bgcolor="#CCCCCC"><div align="center"><strong>Alamat</strong></div></td>
        <td width="7%" bgcolor="#CCCCCC"><div align="center"><font size="1"><strong>Asal Sekolah </strong></font></div></td>
        <td width="7%" bgcolor="#CCCCCC"><div align="center"><font size="1"><strong>Nama Ayah </strong></font></div></td>
      </font><td width="7%" bgcolor="#CCCCCC"><div align="center"><font size="1"><strong>Nama Ibu </strong></font></div></td>
        <td width="6%" bgcolor="#CCCCCC"><div align="center"><strong><font size="1">Pekerjaan Ayah </font></strong></div></td>
        <td width="5%" bgcolor="#CCCCCC"><div align="center"><strong><font size="1">Pekerjaan Ibu </font></strong></div></td>
        <td width="4%" bgcolor="#CCCCCC"><div align="center">Penghasilan Ayah </div></td>
        <td width="4%" bgcolor="#CCCCCC"><font size="1">&nbsp;
          </font>
          <div align="center">Penghasilan Ibu </div>        </td>
        <font size="1"><td width="4%" bgcolor="#CCCCCC"><div align="center"><font size="1"><strong>Telpon</strong></font></div></td>
        <td width="10%" bgcolor="#CCCCCC"><div align="center">Penyakit </div></td>
        <td width="13%" bgcolor="#CCCCCC"><div align="center"><strong>Asal</strong></div></td>
        </font>      </tr>
	  <?   
	    $no=1;
	    $tampil2=mysqli_query($koneksi, "SELECT * FROM tb_santri WHERE kelas_st='$klsk' AND status='a' ORDER BY nama");
        while($tp=mysqli_fetch_assoc($tampil2)){
	  ?>
      <tr>
        <td><div align="center"><? echo $no; ?></div></td>
        <td><div align="center"><? echo $tp['nis']." / ".$tp['nis_nasional']; ?></div></td>
        <td><? echo $tp['nama']; ?></td>
        <td><? $ttl=$tp['tempat_lahir'].",".$tp['tgl_lahir']."-".$tp['bln_lahir']."-".$tp['tahun_lahir']; 
		       echo $ttl; ?></td>
        <td><div align="center"><? echo $tp['alamat']; if($tp['alamat']==''){ echo"-"; }?></div></td>
        <td><div align="center"><? echo $tp['asal_sekolah']; if($tp['asal_sekolah']==''){ echo"-"; }?></div></td>
        <td><div align="center"><? echo $tp['nama_ort']; ?></div></td>
        <td><div align="center"><? echo $tp['nama_ibu']; ?></div></td>
        <td><div align="center"><? echo $tp['pekerjaan_ayah']; if($tp['pekerjaan_ayah']==''){ echo"-"; }?></div></td>
        <td><div align="center"><? echo $tp['pekerjaan_ibu']; if($tp['pekerjaan_ibu']==''){ echo"-"; }?></div></td>
        <td><div align="center"><? echo $tp['phasil_ayah']; ?></div></td>
        <td><div align="center"><? echo $tp['phasil_ibu']; ?></div></td>
        <td><div align="center"><? echo $tp['telpon']; if($tp['telpon']==''){ echo"-"; }?></div></td>
        <td><div align="center"><? echo $tp['penyakit']; ?></div></td>
        <td><div align="center"><? echo $tp['kota']." - ".$tp['propinsi']; ?></div></td>
      </tr>
	  <? $no+=1; } ?>
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
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Ma'rang, ........................................... 20... </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Bag. Tata Usaha, </td>
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
    <td>(Sunandar, S.Pd.I.)</td>
  </tr>
</table>

</body>
</html>
