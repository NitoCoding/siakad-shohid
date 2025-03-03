<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
.style2 {color: #FFFFFF}
.style10 {color: #FFFFFF; font-size: 16; }
.style11 {font-size: 16}
-->
</style>
</head>
<?
include("../koneksi.php");
include("../function.php");
 $idgp=$_GET['idgp'];
	      $thaj=$_COOKIE['thaj'];
          $qbln=$_GET['qbln']; 
		  $tkt=$_GET['tkt']; 
?>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
  <td bgcolor="#993300">&nbsp;</td>
  <td bgcolor="#993300">&nbsp;</td>
  <td bgcolor="#993300">&nbsp;</td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td><strong>PENILAIAN STRUKTURAL PPMI SHOHWATUL IS'AD </strong></td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td height="31">&nbsp;</td>
  <td colspan="2" valign="middle" bgcolor="#663300"><span class="style1">&nbsp;&nbsp; Struktural</span> &nbsp; <select name="menu1" onchange="MM_jumpMenu('parent',this,0)">
      <option value="penilaian_struktural.php">-</option>
      <? 
	      
		  $tampil2=mysqli_query($koneksi, "SELECT * FROM guru_pegawai WHERE status_kp='p'  and unit='STR'");
          while($tp=mysqli_fetch_assoc($tampil2)){
	    ?>
      <option value="penilaian_struktural.php?idgp=<? echo $tp['id_gp']; ?>" <? if($idgp=="$tp[id_gp]"){ echo"selected='selected'"; } ?>><? echo $tp['nama_gp']; ?></option>
      <? } ?>
    </select> 
    &nbsp;<span class="style2">Bulan </span>
    <select name="select" onchange="MM_jumpMenu('parent',this,0)">
      <option value="penilaian_struktural.php?idgp=<? echo $idgp; ?>">-</option>
      <?  
	      
		 for($i=1;$i<=12;$i++){
	    ?>
      <option value="penilaian_struktural.php?idgp=<? echo $idgp; ?>&qbln=<? echo $i; ?>" <? if($qbln=="$i"){ echo"selected='selected'"; } ?>><? echo $i; ?></option>
      <? } ?>
    </select>     &nbsp;&nbsp;<a href="raport_bulanan_struktural.php?idgp=<? echo $idgp; ?>&qbln=<? echo $qbln; ?>" class="lk4" target="_blank">Cetak Raport</a></td>
  </tr>
<tr>
  <td width="21">&nbsp;</td>
  <td width="591">&nbsp;</td>
  <td width="388">&nbsp;</td>
</tr>
<tr>
  <td height="382">&nbsp;</td>
  <td colspan="2"><form id="form1" name="form1" method="post" action="act_penilaian_guru.php">
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="4" bgcolor="#CCCCCC">&nbsp;&nbsp; <strong>A. IDENTITAS PEMBINA </strong></td>
        </tr>
      <tr>
        <td width="120">&nbsp;</td>
        <td colspan="3">&nbsp;</td>
      </tr>
	  <?
	      $tampi3=mysqli_query($koneksi, "SELECT * FROM guru_pegawai WHERE id_gp='$idgp' ");
          $tp3=mysqli_fetch_assoc($tampi3);
	  ?>
      <tr>
        <td>NIY</td>
        <td colspan="3" bgcolor="#EEEEEE"><input type="hidden" name="id_guru" value="<? echo $idgp; ?>" />
          <input type="hidden" name="qbln" value="<? echo $qbln; ?>" />          <? echo $tp3['nip']; ?></td>
      </tr>
      <tr>
        <td>Nama Lengkap </td>
        <td colspan="3" bgcolor="#EEEEEE">&nbsp;<? echo $tp3['nama_gp']; ?></td>
      </tr>
      <tr>
        <td>Jabatan </td>
        <td colspan="3" bgcolor="#EEEEEE">&nbsp;<? echo $tp3['ket_jabatan']; ?></td>
      </tr>
      <tr>
        <td>Pendidikan</td>
        <td colspan="3" bgcolor="#EEEEEE">&nbsp;<? echo $tp3['pendidikan']; ?></td>
      </tr>
      <tr>
        <td>Tempat, Tgl. Lahir</td>
        <td colspan="3" bgcolor="#EEEEEE">&nbsp;<? echo $tp3['tempat_ttl'].",".$tp3['tgl_ttl']." ".$tp3['bln_ttl']." ".$tp3['thn_ttl']; ?></td>
        </tr>
      <tr>
        <td>TMT Guru</td>
        <td colspan="3" bgcolor="#EEEEEE">&nbsp;<? echo $tp3['thn_trdaftar']; ?></td>
        </tr>
      <tr>
        <td>Masa Kerja</td>
        <td colspan="3" bgcolor="#EEEEEE">&nbsp;<? $tmt=date(Y)-$tp3['thn_trdaftar'];
		      echo $tmt; ?> Tahun </td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td width="674">&nbsp;</td>
        <td width="73">&nbsp;</td>
        <td width="112">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="4" bgcolor="#CCCCCC">&nbsp; &nbsp; <strong>B.  Penilaian </strong></td>
        </tr>
		<?
		  $tampi4=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_bulanan_struktural WHERE id_guru='$idgp' and thn_ajaran='$thaj' and bulan='$qbln'");
          $tp4=mysqli_fetch_assoc($tampi4);
		?>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td rowspan="12" align="center" bgcolor="#EEEEEE"><input type="submit" name="psp" value="Simpan" <? if($qbln==NULL){ echo "disabled='disabled'"; }  ?>/></td>
      </tr>
      <tr>
        <td height="29" bgcolor="#999999">&nbsp;</td>
        <td bgcolor="#999999"><span class="style10">Akhlak dan Keperibadian </span></td>
        <td bgcolor="#999999"><label>
          <select name="select2">
            <option value="<? echo $tp4['akhlak']; ?>">
		 <? if($tp4['akhlak']=='4') {echo"A" ; }
			if($tp4['akhlak']=='3') {echo "B"; }
			if($tp4['akhlak']=='2') {echo "C"; }
			if($tp4['akhlak']=='1') {echo "D"; }
			 ?></option>
			<option value="-">-</option>
            <option value="4">A</option>
            <option value="3">B</option>
            <option value="2">C</option>
            <option value="1">D</option>
          </select>
        </label></td>
        </tr>
      <tr>
        <td height="36" bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE"><span class="style11">Kedisiplinan</span></td>
        <td bgcolor="#EEEEEE"><select name="select3">
		<option value="<? echo $tp4['kedisiplinan']; ?>"><? 
		    if($tp4['kedisiplinan']=='4') {echo"A" ; }
			if($tp4['kedisiplinan']=='3') {echo "B"; }
			if($tp4['kedisiplinan']=='2') {echo "C"; }
			if($tp4['kedisiplinan']=='1') {echo "D"; }
		 ?></option>
          <option value="-">-</option>
          <option value="4">A</option>
          <option value="3">B</option>
          <option value="2">C</option>
          <option value="1">D</option>
        </select></td>
        </tr>
      <tr>
        <td height="32" bgcolor="#999999">&nbsp;</td>
        <td bgcolor="#999999"><span class="style10">Tepat waktu dalam menyelesaikan tugas  </span></td>
        <td bgcolor="#999999"><select name="select4">
		<option value="<? echo $tp4['tepat_waktu_meyelesaikan_tugas']; ?>"><? 
		if($tp4['tepat_waktu_meyelesaikan_tugas']=='4') {echo"A" ; }
			if($tp4['tepat_waktu_meyelesaikan_tugas']=='3') {echo "B"; }
			if($tp4['tepat_waktu_meyelesaikan_tugas']=='2') {echo "C"; }
			if($tp4['tepat_waktu_meyelesaikan_tugas']=='1') {echo "D"; }
		 ?></option>
          <option value="-">-</option>
          <option value="4">A</option>
          <option value="3">B</option>
          <option value="2">C</option>
          <option value="1">D</option>
        </select></td>
        </tr>
      <tr>
        <td height="35" bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE"><span class="style11">Tanggung Jawab dan loyalitas </span></td>
        <td bgcolor="#EEEEEE"><select name="select5">
		<option value="<? echo $tp4['tanggung_jawab']; ?>"><? 
		if($tp4['tanggung_jawab']=='4') {echo"A" ; }
			if($tp4['tanggung_jawab']=='3') {echo "B"; }
			if($tp4['tanggung_jawab']=='2') {echo "C"; }
			if($tp4['tanggung_jawab']=='1') {echo "D"; }
		 ?></option>
          <option value="-">-</option>
          <option value="4">A</option>
          <option value="3">B</option>
          <option value="2">C</option>
          <option value="1">D</option>
        </select></td>
        </tr>
      <tr>
        <td height="31" bgcolor="#999999">&nbsp;</td>
        <td bgcolor="#999999"><span class="style10">Kereatif</span></td>
        <td bgcolor="#999999"><select name="select6">
		<option value="<? echo $tp4['kereatif']; ?>"><? 
		if($tp4['kereatif']=='4') {echo"A" ; }
			if($tp4['kereatif']=='3') {echo "B"; }
			if($tp4['kereatif']=='2') {echo "C"; }
			if($tp4['kereatif']=='1') {echo "D"; }
		 ?></option>
          <option value="-">-</option>
          <option value="4">A</option>
          <option value="3">B</option>
          <option value="2">C</option>
          <option value="1">D</option>
        </select></td>
        </tr>
      <tr>
        <td height="33" bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Komunikasi yang baik ke Bawahan, Sesama Struktural dan Pimpinan</td>
        <td bgcolor="#EEEEEE"><select name="select7">
		<option value="<? echo $tp4['komunikasi']; ?>"><? 
		if($tp4['komunikasi']=='4') {echo"A" ; }
			if($tp4['komunikasi']=='3') {echo "B"; }
			if($tp4['komunikasi']=='2') {echo "C"; }
			if($tp4['komunikasi']=='1') {echo "D"; }
		 ?></option>
          <option value="-">-</option>
          <option value="4">A</option>
          <option value="3">B</option>
          <option value="2">C</option>
          <option value="1">D</option>
        </select></td>
      </tr>
      <tr>
        <td height="32" bgcolor="#999999">&nbsp;</td>
        <td bgcolor="#999999"><span class="style10">Patuh dan taat terhadap intruksi Pimpinan </span></td>
        <td bgcolor="#999999"><select name="select8">
		<option value="<? echo $tp4['kepatuhan']; ?>"><? 
		if($tp4['kepatuhan']=='4') {echo"A" ; }
			if($tp4['kepatuhan']=='3') {echo "B"; }
			if($tp4['kepatuhan']=='2') {echo "C"; }
			if($tp4['kepatuhan']=='1') {echo "D"; }
		 ?></option>
          <option value="-">-</option>
          <option value="4">A</option>
          <option value="3">B</option>
          <option value="2">C</option>
          <option value="1">D</option>
        </select></td>
      </tr>
      <tr>
        <td height="35" bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Kemampuan mencapai target dari standar tugas</td>
        <td bgcolor="#EEEEEE"><select name="select9">
		<option value="<? echo $tp4['capai_target']; ?>"><? 
		if($tp4['capai_target']=='4') {echo"A" ; }
			if($tp4['capai_target']=='3') {echo "B"; }
			if($tp4['capai_target']=='2') {echo "C"; }
			if($tp4['capai_target']=='1') {echo "D"; }
		 ?></option>
          <option value="-">-</option>
          <option value="4">A</option>
          <option value="3">B</option>
          <option value="2">C</option>
          <option value="1">D</option>
        </select></td>
      </tr>
      <tr>
        <td height="34" bgcolor="#999999">&nbsp;</td>
        <td bgcolor="#999999"><span class="style10">Mampu Mengkoordinasi Anggota  </span></td>
        <td bgcolor="#999999"><select name="select10">
		<option value="<? echo $tp4['koordinasi_anggota']; ?>"><? 
		if($tp4['koordinasi_anggota']=='4') {echo"A" ; }
			if($tp4['koordinasi_anggota']=='3') {echo "B"; }
			if($tp4['koordinasi_anggota']=='2') {echo "C"; }
			if($tp4['koordinasi_anggota']=='1') {echo "D"; }
		 ?></option>
          <option value="-">-</option>
          <option value="4">A</option>
          <option value="3">B</option>
          <option value="2">C</option>
          <option value="1">D</option>
        </select></td>
      </tr>
      <tr>
        <td height="36" bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Kecepatan dan Ketepatan dalam Pemngambilan Keputusan</td>
        <td bgcolor="#EEEEEE"><select name="select11">
          <option value="<? echo $tp4['pengambilan_keputusan']; ?>">
            <? 
		if($tp4['pengambilan_keputusan']=='4') {echo"A" ; }
			if($tp4['pengambilan_keputusan']=='3') {echo "B"; }
			if($tp4['pengambilan_keputusan']=='2') {echo "C"; }
			if($tp4['pengambilan_keputusan']=='1') {echo "D"; }
		 ?>
            </option>
          <option value="-">-</option>
          <option value="4">A</option>
          <option value="3">B</option>
          <option value="2">C</option>
          <option value="1">D</option>
        </select></td>
      </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE"><span class="style11"></span></td>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        </tr>
		<?
		  $tampi5=mysqli_query($koneksi, "SELECT * FROM tb_kp_keperibadian WHERE id_guru='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
          $tp5=mysqli_fetch_assoc($tampi5);
		?>
		<?
		  $tampi6=mysqli_query($koneksi, "SELECT * FROM tb_kp_sosial WHERE id_guru='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
          $tp6=mysqli_fetch_assoc($tampi6);
		?>
		<?
		  $tampi7=mysqli_query($koneksi, "SELECT * FROM tb_kp_profesional WHERE id_guru='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
          $tp7=mysqli_fetch_assoc($tampi7);
		?>
	  <?
		  $tampi8=mysqli_query($koneksi, "SELECT * FROM tb_administratif_g WHERE id_guru='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
          $tp8=mysqli_fetch_assoc($tampi8);
		?>
    </table>
    </form>  </td>
  </tr>
<tr>
  <td bgcolor="#663300">&nbsp;</td>
  <td bgcolor="#663300">&nbsp;</td>
  <td bgcolor="#663300">&nbsp;</td>
</tr>
</table>
</body>
</html>
