<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style13 {color: #FFFFFF}
-->
</style>
</head>
<?
  $dpn_nl1=$_GET['dpn_nl1'];
  $dpn_nl2=$_GET['dpn_nl2'];
  $dpn_nl3=$_GET['dpn_nl3'];
  $dpn_nl4=$_GET['dpn_nl4'];
  $dpn_nl5=$_GET['dpn_nl5'];
  $dpn_nl6=$_GET['dpn_nl6'];
  $dpn_nl7=$_GET['dpn_nl7'];
  $dpn_nl8=$_GET['dpn_nl8'];
  $dpn_nl9=$_GET['dpn_nl9'];
  $dpn_n20=$_GET['dpn_n20'];
  $dpn_n21=$_GET['dpn_n21'];
  $dpn_n22=$_GET['dpn_n22'];
  $dpn_n23=$_GET['dpn_n23'];
  $dpn_n24=$_GET['dpn_n24'];
  $dpn_n25=$_GET['dpn_n25'];
  $dpn_n26=$_GET['dpn_n26'];
?>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#99CC66">
  
  <tr>
    <td height="31" background="images/suckerfish_green.png" bgcolor="#B3CF70"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="4%"><div align="center"><img src="images/StartingRecord.gif" width="18" height="18" /></div></td>
        <td width="96%"><font size="3" color="#CCFFCC"><? if($dpn_nl1=="n1"){ echo"NILAI  MATA  PELAJARAN"; } 
		if($dpn_nl2=="n2"){ echo"Rekap Kehadiran Santri"; }
		if($dpn_nl3=="n3"){ echo"Nilai Extra Kurikuler Santri"; }
		if($dpn_nl4=="n4"){ echo"Nilai Lisan Santri"; }
		if($dpn_nl5=="n5"){ echo"Nilai Keterampilan Santri"; }
		if($dpn_nl6=="n6"){ echo"Nilai Organisasi Sekolah Santri"; }
		if($dpn_nl7=="n7"){ echo"Catatan Wali Kelas"; }
		if($dpn_nl8=="n8"){ echo"Catatan Guru Mata Pelajaran"; }
		if($dpn_nl9=="n9"){ echo"Nilai Karakter di Sekolah"; }
		if($dpn_n20=="n20"){ echo"Nilai Karakter di Asrama"; }
		if($dpn_n21=="n21"){ echo"Catatan Wali Fiah"; }
		if($dpn_n22=="n22"){ echo"Rangking Nilai Karakter"; }
		if($dpn_n24=="n24"){ echo"Nilai Statistik"; }
		if($dpn_n26=="n26"){ echo"Nilai KI"; }
		if($dpn_n26=="1" or $dpn_n26=="2" or $dpn_n26=="3" or $dpn_n26=="4"){  echo"Nilai Kopetensi Dasar"; }
		?> <span class="style13">&nbsp;&nbsp;&nbsp; Tahun Ajaran <? echo $thaj; ?> - Semester <? echo $sem; if($sem=='I')echo " (Satu)";else echo " (Dua) ";  ?></span></font></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="7"></td>
  </tr>
  <tr>
    <td height="37" bgcolor="#336666"><?
	if($dpn_nl1=="n1"){ include("nilai_santri.php"); }
	if($dpn_nl2=="n2"){ include("ipt_nilai_santri.php"); }
	if($dpn_nl3=="n3"){ include("ipt_nilai_eskul.php"); }
	if($dpn_nl4=="n4"){ include("ipt_nilai_lisan.php"); }
	if($dpn_nl5=="n5"){ include("ipt_nilai_praktik.php"); }
	if($dpn_nl6=="n6"){ include("ipt_nilai_organisasi.php"); }
	if($dpn_nl7=="n7"){ include("ipt_catatan_wk.php"); }
	if($dpn_nl8=="n8"){ include("ipt_catatan_guru_mpl.php"); }
	if($dpn_nl9=="n9"){ include("ipt_nilai_karakter_sekolah.php"); }
	if($dpn_n20=="n20"){ include("ipt_nilai_karakter_asrama.php"); }
	if($dpn_n21=="n21"){ include("ipt_catatan_wf.php"); }
	if($dpn_n22=="n22"){ include("rangking_karakter.php"); } 
	if($dpn_n23=="n23"){ include("sortir_nilai_karakter_santri.php"); }
	if($dpn_n24=="n24"){ include("nilai_statistik_karakter.php"); }
	if($dpn_n25=="n25"){ include("nilai_k13.php"); }
	if($dpn_n26=="n26"){ include("ipt_nilai_kti.php"); }
	if($dpn_n26=="3"){ include("ipt_nilai_kd3.php"); }
	if($dpn_n26=="4"){ include("ipt_nilai_kd4.php"); }
	if($dpn_n26=="1"){ include("ipt_nilai_kd1.php"); }
	if($dpn_n26=="2"){ include("ipt_nilai_kd2.php"); }
	if($dpn_n26=="5"){ include("ipt_nilai_ujianK13.php"); }
	if($dpn_n26=="6"){ include("list_cetak_raport.php"); }
	
	?></td>
  </tr>
</table>

</body>
</html>
