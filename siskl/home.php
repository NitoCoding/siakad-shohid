<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistem Informasi Sekolah PPMI Shohwatul Is'ad</title>

<style type="text/css">
<!--
.style1 {font-size: 14px}
td {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000066;
	font-style: normal;
	font-variant: small-caps;
}
.lk2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-style: oblique;
	color: #000033;
	text-decoration: none;
	cursor: auto;
}
-->
</style>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="25" colspan="3" bgcolor="#B3CF70"><div align="center" class="style1">Santri PPMI Shohwatul Is'ad <? echo date("Y"); ?></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="35%">Kelas VII A </td>
    <td width="34%">Kelas VIII A </td>
    <td width="31%">Kelas IX A </td>
  </tr>
  
  <tr>
    <td valign="top" bgcolor="#DCF3AF"><table width="333" border="1" cellpadding="1" cellspacing="0" bordercolor="#FFFFFF">
      <tr>
        <td bgcolor="#B3CF70" width="80"><div align="center">Nis</div></td>
        <td bgcolor="#B3CF70" ><div align="center">Nama</div></td>
        </tr>
	  <? 
   $tst1=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st FROM tb_santri WHERE kelas_st='VIIA' ");
       while($tp1=mysqli_fetch_assoc($tst1)){
	   $msk=mysqli_query($koneksi, "SELECT kd_kls FROM master_kelas WHERE kelas='VIIA' ");
       $cms=mysqli_fetch_assoc($msk);
      ?>
      <tr>
        <td width="80"><div align="center"><a href="login.php?hal=dts&id_str=<? echo"$tp1[id_santri]&nisk=$tp1[nis]&idkls=$cms[kd_kls]"; ?>" class="lk2"><? echo $tp1['nis']; ?></a></div></td>
        <td><? echo $tp1['nama']; ?></td>
      </tr>
	<? } ?>	
    </table></td>
    <td valign="top" bgcolor="#DCF3AF"><table width="333" border="1" cellpadding="1" cellspacing="0" bordercolor="#FFFFFF">
      <tr>
        <td bgcolor="#B3CF70" width="80"><div align="center">Nis</div></td>
        <td bgcolor="#B3CF70"><div align="center">Nama</div></td>
      </tr>
      <? 
   $tst1=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st FROM tb_santri WHERE kelas_st='VIIIA' ");
       while($tp1=mysqli_fetch_assoc($tst1)){
	   $msk=mysqli_query($koneksi, "SELECT kd_kls FROM master_kelas WHERE kelas='VIIIA' ");
       $cms=mysqli_fetch_assoc($msk);
      ?>
      <tr>
        <td width="80"><div align="center"><a href="login.php?hal=dts&id_str=<? echo"$tp1[id_santri]&nisk=$tp1[nis]&idkls=$cms[kd_kls]"; ?>" class="lk2"><? echo $tp1['nis']; ?></a></div></td>
        <td><? echo $tp1['nama']; ?></td>
      </tr>
      <? } ?>
    </table></td>
    <td valign="top" bgcolor="#DCF3AF"><table width="333" border="1" cellpadding="1" cellspacing="0" bordercolor="#FFFFFF">
      <tr>
        <td bgcolor="#B3CF70" width="80"><div align="center">Nis</div></td>
        <td bgcolor="#B3CF70"><div align="center">Nama</div></td>
      </tr>
      <? 
   $tst1=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st FROM tb_santri WHERE kelas_st='IXA' ");
       while($tp1=mysqli_fetch_assoc($tst1)){
	   $msk=mysqli_query($koneksi, "SELECT kd_kls FROM master_kelas WHERE kelas='IXA' ");
       $cms=mysqli_fetch_assoc($msk);
      ?>
      <tr>
        <td width="80"><div align="center"><a href="login.php?hal=dts&amp;id_str=<? echo"$tp1[id_santri]&nisk=$tp1[nis]&idkls=$cms[kd_kls]"; ?>" class="lk2"><? echo $tp1['nis']; ?></a></div></td>
        <td><? echo $tp1['nama']; ?></td>
      </tr>
      <? } ?>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Kelas VII B </td>
    <td>Kelas VIII B </td>
    <td>Kelas IX B </td>
  </tr>
  <tr>
    <td height="39" valign="top" bgcolor="#DCF3AF"><table width="333" border="1" cellpadding="1" cellspacing="0" bordercolor="#FFFFFF">
      <tr>
        <td bgcolor="#B3CF70" width="80"><div align="center">Nis</div></td>
        <td bgcolor="#B3CF70"><div align="center">Nama</div></td>
      </tr>
      <? 
   $tst1=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st FROM tb_santri WHERE kelas_st='VIIB' ");
       while($tp1=mysqli_fetch_assoc($tst1)){
	   $msk=mysqli_query($koneksi, "SELECT kd_kls FROM master_kelas WHERE kelas='VIIB' ");
       $cms=mysqli_fetch_assoc($msk);
      ?>
      <tr>
        <td width="80"><div align="center"><a href="login.php?hal=dts&id_str=<? echo"$tp1[id_santri]&nisk=$tp1[nis]&idkls=$cms[kd_kls]"; ?>" class="lk2"><? echo $tp1['nis']; ?></a></div></td>
        <td><? echo $tp1['nama']; ?></td>
      </tr>
      <? } ?>
    </table></td>
    <td valign="top" bgcolor="#DCF3AF"><table width="333" border="1" cellpadding="1" cellspacing="0" bordercolor="#FFFFFF">
      <tr>
        <td bgcolor="#B3CF70" width="80"><div align="center">Nis</div></td>
        <td bgcolor="#B3CF70"><div align="center">Nama</div></td>
      </tr>
      <? 
   $tst1=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st FROM tb_santri WHERE kelas_st='VIIB' ");
       while($tp1=mysqli_fetch_assoc($tst1)){
	   $msk=mysqli_query($koneksi, "SELECT kd_kls FROM master_kelas WHERE kelas='VIIB' ");
       $cms=mysqli_fetch_assoc($msk);
      ?>
      <tr>
        <td width="80"><div align="center"><a href="login.php?hal=dts&amp;id_str=<? echo"$tp1[id_santri]&nisk=$tp1[nis]&idkls=$cms[kd_kls]"; ?>" class="lk2"><? echo $tp1['nis']; ?></a></div></td>
        <td><? echo $tp1['nama']; ?></td>
      </tr>
      <? } ?>
    </table></td>
    <td valign="top" bgcolor="#DCF3AF"><table width="333" border="1" cellpadding="1" cellspacing="0" bordercolor="#FFFFFF">
      <tr>
        <td bgcolor="#B3CF70" width="80"><div align="center">Nis</div></td>
        <td bgcolor="#B3CF70"><div align="center">Nama</div></td>
      </tr>
      <? 
   $tst1=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st FROM tb_santri WHERE kelas_st='IXB' ");
       while($tp1=mysqli_fetch_assoc($tst1)){
	   $msk=mysqli_query($koneksi, "SELECT kd_kls FROM master_kelas WHERE kelas='IXB' ");
       $cms=mysqli_fetch_assoc($msk);
      ?>
      <tr>
        <td width="80"><div align="center"><a href="login.php?hal=dts&amp;id_str=<? echo"$tp1[id_santri]&nisk=$tp1[nis]&idkls=$cms[kd_kls]"; ?>" class="lk2"><? echo $tp1['nis']; ?></a></div></td>
        <td><? echo $tp1['nama']; ?></td>
      </tr>
      <? } ?>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#B3CF70">&nbsp;</td>
    <td bgcolor="#B3CF70">&nbsp;</td>
    <td bgcolor="#B3CF70">&nbsp;</td>
  </tr>
</table>

</body>
</html>
