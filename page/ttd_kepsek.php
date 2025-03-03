<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" enctype="multipart/form-data" method="post" action="act_dt_kls.php">
<? include("../koneksi.php");
   $sem=$_COOKIE['sem']; 
   
		  $tampil=mysqli_query($koneksi, "SELECT * FROM tb_ttd WHERE ket='b' AND semester='$sem' ");
          $tp=mysqli_fetch_assoc($tampil);
		?>
  <table width="100%" border="0" cellspacing="3" cellpadding="0">
    <tr>
      <td colspan="3" bgcolor="#996600">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="3%">&nbsp;</td>
      <td width="19%">&nbsp;</td>
      <td width="31%">&nbsp;</td>
      <td width="47%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>TINGKAT </td>
      <td>SMP
      <input type="hidden" name="tingkat" value="a" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>NAMA KEPALA SEKOLAH </td>
      <td><input name="kepsek" type="text" size="55" value="<? echo $tp['nama_kepek']; ?>" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>NIY KEPALA SEKOLAH </td>
      <td><input name="niy" type="text" size="55" value="<? echo $tp['niy']; ?>" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>TANDA TANGAN </td>
      <td><input name="foto" type="file" />
      <img src="raport/<? echo "$tp[ttd]"; ?>" width="130" height="90" align="absmiddle" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>TANGGAL RAPORT SEMSETER </td>
      <td><input name="sms" type="text" size="55" value="<? echo $tp['tgl_semester']; ?>" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>TANGGAL RAPORT MID </td>
      <td><input name="mid" type="text" size="55" value="<? echo $tp['tgl_mid']; ?>" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>TANGGAL BIO DATA </td>
      <td><input name="bio" type="text" size="55" value="<? echo $tp['tgl_biodata']; ?>" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" bgcolor="#996600">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
   <?
		  $tampil=mysqli_query($koneksi, "SELECT * FROM tb_ttd WHERE ket='a' AND semester='$sem' ");
          $tp=mysqli_fetch_assoc($tampil);
		?>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>TINGKAT</td>
      <td>SMA
      <input type="hidden" name="tingkat2" value="a" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>NAMA KEPALA SEKOLAH </td>
      <td><input name="kepsek2" type="text" size="55" value="<? echo $tp['nama_kepek']; ?>" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>NIY KEPALA SEKOLAH </td>
      <td><input name="niy2" type="text" size="55" value="<? echo $tp['niy']; ?>" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>TANDA TANGAN </td>
      <td><input name="foto2" type="file" />
      <img src="raport/<? echo "$tp[ttd]"; ?>" width="130" height="90" align="absmiddle" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>TANGGAL RAPORT SEMSETER </td>
      <td><input name="sms2" type="text" size="55" value="<? echo $tp['tgl_semester']; ?>" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>TANGGAL RAPORT MID </td>
      <td><input name="mid2" type="text" size="55" value="<? echo $tp['tgl_mid']; ?>" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>TANGGAL BIO DATA </td>
      <td><input name="bio2" type="text" size="55" value="<? echo $tp['tgl_biodata']; ?>" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit2" value="Submit" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" bgcolor="#996600">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
