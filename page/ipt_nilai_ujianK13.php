<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style16 {color: #000000; }
.style17 {color: #FFFFFF}
-->
</style>
</head>
<?
     $ki=$_GET['ki'];
	 $klsk2=$_GET['klsk2'];
	 $klsk=$_GET['klsk'];
	 $kd=$_GET['kd'];
     $mapel=$_GET['mapel'];
    $id_kik=$_GET['id_kik'];
?>
<body>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td colspan="2">&nbsp;</td>
  <td></td>
</tr>
<tr>
  <td><font size="3" color="#CCFFCC"><span class="style17"><a href="home.php?home=nilai&amp;dpn_n25=n25&amp;<? echo"klsk=$klsk&ki=$ki&mpl=$mapel&klsk2=$klsk2"; ?>"><img src="images/back.jpg" width="33" height="34" border="0" /></a></span></font></td>
  <td>&nbsp;</td>
  <td colspan="2">&nbsp;</td>
  <td></td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td colspan="2">&nbsp;</td>
  <td></td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td colspan="2">&nbsp;</td>
  <td></td>
</tr>
<tr>
  <td height="30" bgcolor="#CCCCCC"><span class="style16">&nbsp;Kelas : <? 
     echo"$klsk2"; ?> </span></td>
  <td bgcolor="#CCCCCC"><span class="style16">Mata Pelajaran :
      <?
$tampi5=mysqli_query($koneksi, "SELECT kd_mp,nama_mp FROM mata_pelajaran WHERE kd_mp='$mapel' ");
$tp5=mysqli_fetch_assoc($tampi5);
echo"$tp5[nama_mp]";
?>
  </span></td>
  <td colspan="2" bgcolor="#CCCCCC">&nbsp;</td>
  <td bgcolor="#CCCCCC"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td colspan="2">&nbsp;</td><td></td>
</tr>
  <tr>
    <td rowspan="2" bgcolor="#CCCCCC"><div align="center"><strong>Nis</strong></div></td>
    <td rowspan="2" bgcolor="#CCCCCC"><div align="center"><strong> Nama 
      Santri</strong></div></td>
    <td height="29" colspan="2" bgcolor="#CCCCCC"><div align="center" class="style16"><strong>NILAI</strong> <strong>UJIAN</strong> </div></td>
    <td rowspan="2" bgcolor="#CCCCCC"><div align="center"><strong>Action</strong></div></td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC"><div align="center" class="style16"><strong>Tengah Semster</strong></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style16"><strong>Akhir Semester</strong></div></td>
  </tr>
 <? 
	 $tmp5=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='$klsk2' AND status='a' ORDER BY nama ");
     while($tp=mysqli_fetch_assoc($tmp5)){
	 
  	  $qku7=mysqli_query($koneksi, "SELECT * FROM tb_ujian_k13,tb_komptensi_inti WHERE tb_ujian_k13.id_kompetensi=tb_komptensi_inti.id_ki and   
	                     tb_ujian_k13.id_santri='$tp[id_santri]' and  tb_komptensi_inti.mapel='$mapel' and 
						 tb_komptensi_inti.tahun_ajaran='$thaj' and tb_komptensi_inti.semester='$sem' and    
						 tb_komptensi_inti.kd_kompetensi='$ki' AND tb_komptensi_inti.guru='$idgurp'");
      $cqk7=mysqli_fetch_assoc($qku7);
	 ?>
  <form id="form1" name="form1" method="post" action="page/act_nilai_k13.php">
   
    <tr bgcolor="#FFFFCC">
      <td width="6%" height="39" valign="middle" bgcolor="#FFFFFF"><div align="center"><? echo"$tp[nis]"; ?></div></td>
      <td width="27%" valign="middle" bgcolor="#FFFFFF">&nbsp;<? echo"$tp[nama]"; ?>
          <input type="hidden" name="id_santri" value="<? echo"$tp[id_santri]"; ?>" />
          <input type="hidden" name="id_k41k" value="<? echo $cqk7['id_nu']; ?>" />
      <input type="hidden" name="klsk2" value="<? echo"$klsk2"; ?>"/>
      <input type="hidden" name="kd_mapel" value="<? echo"$mapel"; ?>"/>
      <input type="hidden" name="id_kik" value="<? echo $id_kik; ?>" />
      <input type="hidden" name="klsk" value="<? echo"$klsk"; ?>" />
      <input type="hidden" name="ki" value="<? echo"$ki"; ?>" /></td>
      <td width="4%" valign="middle" bgcolor="#FFFFFF"><div align="center">
        <input name="nt" type="text"  value="<? echo $cqk7['uts']; ?>" size="1" maxlength="3" />
      </div></td>
      <td width="3%" valign="middle" bgcolor="#FFFFFF"><div align="center">
        <input name="tg" type="text"  value="<? echo $cqk7['us']; ?>" size="1" maxlength="3"/>
      </div></td>
      <td width="6%" valign="middle" bgcolor="#FFFFFF"><div align="center">
        <input type="submit" name="rekam" value="SaveU" />
      </div></td>
    </tr>
  </form> <?   } ?>
  <a name="kembali" id="kembali"></a>
  <tr height="2" bgcolor="#B3CF70">
    <td height="3"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
