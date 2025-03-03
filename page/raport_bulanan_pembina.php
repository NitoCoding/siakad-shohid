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
.style5 {font-size: 14px}
.style7 {font-size: 36px}
.style8 {font-size: 18px; }
.style9 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
</head>
<? include("../koneksi.php"); ?>
<body>
<table width="1000" border="0" cellpadding="0" cellspacing="0">

<tr>
  <td colspan="2"><table width="100%" border="1" cellpadding="0" cellspacing="0">
  <tr>
  <td height="92"><table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
  <td width="9%" rowspan="2" align="center"><img src="../images/logo2.jpg" width="70" height="83" /></td>
  <td width="91%" height="45" valign="bottom"><span class="style7">REKAP HASIL </span></td>
  </tr>
  <tr>
  <td height="16" valign="top"><span class="style5">PENILAIAN KINERJA PEMBINA PPMI SHOHWATUL IS'AD </span></td>
  </tr>
  </table></td>
  </tr>
  </table></td>
  </tr>
<tr>
  <td width="927">&nbsp;</td>
  <td width="73">&nbsp;</td>
</tr>
<tr>
  <td colspan="2"><table width="100%" border="1" cellpadding="0" cellspacing="0">
    <tr>
      <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="19%" height="25">&nbsp;Waktu Penilaian Bulan </td>
          <td width="81%">: <?
		   $idgp=$_GET['idgp'];
		   $tkt=$_GET['tkt'];
	      $thaj=$_COOKIE['thaj'];
          $qbln=$_GET['qbln']; 
		  
   if($qbln=="1"){ echo "Januari"; }
   if($qbln=="2"){  echo "Februari";}
   if($qbln=="3"){  echo "Maret"; }
   if($qbln=="4"){  echo "April"; }
   if($qbln=="5"){  echo "Mei"; }
   if($qbln=="6"){  echo "Juni"; }
   if($qbln=="7"){  echo "Juli"; }
   if($qbln=="8"){  echo "Agustus"; }
   if($qbln=="9"){  echo "September";}
   if($qbln=="10"){ echo "Oktober";}
   if($qbln=="11"){ echo "Nopember";}
   if($qbln=="12"){ echo "Desember";}
   
   echo " ".$thaj;
		  ?></td>
        </tr>
      </table></td>
    </tr>
  </table></td>
</tr>
<tr>
  <td colspan="2">&nbsp;</td>
</tr>
<?
         
		  
	      $tampi3=mysqli_query($koneksi, "SELECT * FROM guru_pegawai WHERE id_gp='$idgp' ");
          $tp3=mysqli_fetch_assoc($tampi3);
	  ?>
<tr>
  <td colspan="2"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
    <tr>
      <td height="33" colspan="4" bordercolor="#FFFFFF" bgcolor="#CCCCCC"><strong>&nbsp;&nbsp;<span class="style8">A. IDENTITAS PEMBINA ASRAMA </span></strong></td>
      </tr>
    <tr>
      <td width="19%" height="33" bordercolor="#FFFFFF">&nbsp;Nama Lengkap </td>
      <td width="43%" bordercolor="#FFFFFF">&nbsp;<? echo $tp3['nama_gp']; ?></td>
      <td width="14%" bordercolor="#FFFFFF">&nbsp;</td>
      <td width="24%" bordercolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td height="30" bordercolor="#FFFFFF">&nbsp;NIY</td>
      <td bordercolor="#FFFFFF">&nbsp;<? echo $tp3['nip']; ?></td>
      <td bordercolor="#FFFFFF">&nbsp;</td>
      <td bordercolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td height="30" bordercolor="#FFFFFF">&nbsp;Jabatan</td>
      <td bordercolor="#FFFFFF">&nbsp;<? echo $tp3['ket_jabatan']; ?></td>
      <td bordercolor="#FFFFFF">&nbsp;TMT Guru </td>
      <td bordercolor="#FFFFFF">&nbsp;<? echo $tp3['thn_trdaftar']; ?></td>
    </tr>
    <tr>
      <td height="30" bordercolor="#FFFFFF">&nbsp;Pendidikan</td>
      <td bordercolor="#FFFFFF">&nbsp;<? echo $tp3['pendidikan']; ?></td>
      <td bordercolor="#FFFFFF">&nbsp;Masa Kerja </td>
      <td bordercolor="#FFFFFF">&nbsp;<? $tmt=date(Y)-$tp3['thn_trdaftar'];
		      echo $tmt; ?>
&nbsp;Tahun </td>
    </tr>
    <tr>
      <td height="30" bordercolor="#FFFFFF">&nbsp;Tempat, Tgl. lahir </td>
      <td bordercolor="#FFFFFF">&nbsp;<? echo $tp3['tempat_ttl'].",".$tp3['tgl_ttl']." ".$tp3['bln_ttl']." ".$tp3['thn_ttl']; ?></td>
      <td bordercolor="#FFFFFF">&nbsp;</td>
      <td bordercolor="#FFFFFF">&nbsp;</td>
    </tr>
    
  </table></td>
  </tr>
<tr>
  <td height="310" colspan="2" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
    
    <tr>
      <td height="31" colspan="2" bordercolor="#CCCCCC" bgcolor="#CCCCCC">&nbsp; &nbsp; <span class="style9">B. Hasil Penilaian </span></td>
    </tr>
    
    
    <tr>
      <td height="31" bordercolor="#EEEEEE"><span class="style10">Akhlak dan Keperibadian </span></td>
      <td width="239" bordercolor="#CCCCCC"><div align="center"><? 
	  $tamp2=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_bulanan_pegawai WHERE id_guru='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
      $kp2=mysqli_fetch_assoc($tamp2);
	  $hn1=$kp2['akhlak'];
	  if($kp2['akhlak']=='4') {echo"A" ; }
			if($kp2['akhlak']=='3') {echo "B"; }
			if($kp2['akhlak']=='2') {echo "C"; }
			if($kp2['akhlak']=='1') {echo "D"; }
	  
	   ?></div></td>
    </tr>
    
    <tr>
      <td height="30" bordercolor="#EEEEEE" bgcolor="#EEEEEE"><span class="style11">Kedisiplinan</span></td>
      <td bordercolor="#999999" bgcolor="#EEEEEE"><div align="center">
        <? 
	  $tamp2=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_bulanan_pegawai WHERE id_guru='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
      $kp2=mysqli_fetch_assoc($tamp2);
	  $hn2=$kp2['kedisiplinan'];
	  if($kp2['kedisiplinan']=='4') {echo"A" ; }
			if($kp2['kedisiplinan']=='3') {echo "B"; }
			if($kp2['kedisiplinan']=='2') {echo "C"; }
			if($kp2['kedisiplinan']=='1') {echo "D"; }
	   ?>
      </div></td>
    </tr>
    <?
		  
		?>
    
    <tr>
      <td height="32" bordercolor="#EEEEEE">Tepat Waktu Dalam Menyelesaikan Tugas </td>
      <td bordercolor="#CCCCCC"><div align="center">
        <? 
	  $tamp2=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_bulanan_pegawai WHERE id_guru='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
      $kp2=mysqli_fetch_assoc($tamp2);
	  $hn3=$kp2['tepat_waktu_meyelesaikan_tugas'];
	  if($kp2['tepat_waktu_meyelesaikan_tugas']=='4') {echo"A" ; }
			if($kp2['tepat_waktu_meyelesaikan_tugas']=='3') {echo "B"; }
			if($kp2['tepat_waktu_meyelesaikan_tugas']=='2') {echo "C"; }
			if($kp2['tepat_waktu_meyelesaikan_tugas']=='1') {echo "D"; }
	   ?>
      </div></td>
    </tr>
    <?
		 
		?>
    
    <tr>
      <td height="31" bordercolor="#EEEEEE" bgcolor="#EEEEEE"><span class="style11">Tanggung Jawab </span></td>
      <td bordercolor="#CCCCCC" bgcolor="#EEEEEE"><div align="center">
        <? 
	  $tamp2=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_bulanan_pegawai WHERE id_guru='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
      $kp2=mysqli_fetch_assoc($tamp2);
	  $hn4=$kp2['tanggung_jawab'];
	  if($kp2['tanggung_jawab']=='4') {echo"A" ; }
			if($kp2['tanggung_jawab']=='3') {echo "B"; }
			if($kp2['tanggung_jawab']=='2') {echo "C"; }
			if($kp2['tanggung_jawab']=='1') {echo "D"; }
	   ?>
      </div></td>
    </tr>
    
	  <?
		 
		?>
      <tr>
        <td height="32" bordercolor="#EEEEEE" bgcolor="#FFFFFF"><span class="style10">Kereatif</span></td>
        <td bordercolor="#CCCCCC"><div align="center">
          <? 
	  $tamp2=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_bulanan_pegawai WHERE id_guru='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
      $kp2=mysqli_fetch_assoc($tamp2);
	  $hn5=$kp2['kereatif'];
	  if($kp2['kereatif']=='4') {echo"A" ; }
			if($kp2['kereatif']=='3') {echo "B"; }
			if($kp2['kereatif']=='2') {echo "C"; }
			if($kp2['kereatif']=='1') {echo "D"; }
	   ?>
        </div></td>
      </tr>
      <tr>
        <td height="30" bordercolor="#EEEEEE" bgcolor="#EEEEEE"><span class="style11">Komunikasi yang baik ke santri, orang tua wali, sesama pembina dan Pimpinan</span></td>
        <td bordercolor="#CCCCCC" bgcolor="#EEEEEE"><div align="center">
          <? 
	  $tamp2=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_bulanan_pegawai WHERE id_guru='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
      $kp2=mysqli_fetch_assoc($tamp2);
	  $hn6=$kp2['komunikasi'];
	  if($kp2['komunikasi']=='4') {echo"A" ; }
			if($kp2['komunikasi']=='3') {echo "B"; }
			if($kp2['komunikasi']=='2') {echo "C"; }
			if($kp2['komunikasi']=='1') {echo "D"; }
	   ?>
        </div></td>
      </tr>
      <tr>
        <td height="26" bordercolor="#EEEEEE"><span class="style11"><span class="style10">Patuh dan taat terhadap intruksi Pimpinan</span></span></td>
        <td bordercolor="#CCCCCC"><div align="center">
          <? 
	  $tamp2=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_bulanan_pegawai WHERE id_guru='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
      $kp2=mysqli_fetch_assoc($tamp2);
	  $hn7=$kp2['kepatuhan'];
	  if($kp2['kepatuhan']=='4') {echo"A" ; }
			if($kp2['kepatuhan']=='3') {echo "B"; }
			if($kp2['kepatuhan']=='2') {echo "C"; }
			if($kp2['kepatuhan']=='1') {echo "D"; }
	   ?>
        </div></td>
      </tr>
      <tr>
        <td height="31" bordercolor="#EEEEEE" bgcolor="#EEEEEE">Kemampuan mencapai target dari standar tugas</td>
        <td bordercolor="#CCCCCC" bgcolor="#EEEEEE"><div align="center">
          <? 
	  $tamp2=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_bulanan_pegawai WHERE id_guru='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
      $kp2=mysqli_fetch_assoc($tamp2);
	  $hn8=$kp2['capai_target'];
	  if($kp2['capai_target']=='4') {echo"A" ; }
			if($kp2['capai_target']=='3') {echo "B"; }
			if($kp2['capai_target']=='2') {echo "C"; }
			if($kp2['capai_target']=='1') {echo "D"; }
	   ?>
        </div></td>
      </tr>
      <tr>
        <td height="31" bordercolor="#EEEEEE"><span class="style10">Tertib administrasi Pembina (Laporan perkembangan santri) </span></td>
        <td bordercolor="#CCCCCC"><div align="center">
        <? 
	  $tamp2=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_bulanan_pegawai WHERE id_guru='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
      $kp2=mysqli_fetch_assoc($tamp2);
	  $hn9=$kp2['administrasi'];
	  if($kp2['administrasi']=='4') {echo"A" ; }
			if($kp2['administrasi']=='3') {echo "B"; }
			if($kp2['administrasi']=='2') {echo "C"; }
			if($kp2['administrasi']=='1') {echo "D"; }
	   ?>
      </div></td>
    </tr>
    
    <tr>
      <td height="38" bordercolor="#999999" bgcolor="#CCCCCC"><div align="right" class="style8">Nilai Rata-rata  Penilaian Kinerja Anda &nbsp;&nbsp;</div></td>
      <td bordercolor="#999999" bgcolor="#CCCCCC"><div align="center"><b><? 
	  $tot_n=round(($hn1+$hn2+$hn3+$hn4+$hn5+$hn6+$hn7+$hn8+$hn9)/9); 
	
	  
	  if($tot_n==4){ $nak="A"; }
	  if($tot_n==3){ $nak="B"; }
	  if($tot_n==2){ $nak="C"; }
	  if($tot_n==1){ $nak="D"; }
	  echo" $nak "; ?></b></div></td>
    </tr>
    
  </table></td>
  </tr>

<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>

<tr>
  <td height="19" colspan="2">&nbsp;</td>
</tr>
<tr>
  <td height="156" colspan="2" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
    <tr>
      <td width="34%" height="146" valign="top"><p align="center">&nbsp;Kepala Kesantrian <? if($tkt=="KSP") {echo "Putra";}else{echo "Putri";} ?> PPMI Shohwatul Is'ad,</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
		<?
		if($tkt=="KSP"){
        echo"<p align='center'><u>(Abdul Wajid, S.S.) </u><br />
        NIY. 201612 1 2 060</p>";
		}else{
		echo"<p align='center'><u>(Muthoharoh, Lc.,M.Pd.I.) </u><br />
        NIY. 201506 1 2 029</p>";
		}
		?>
		</td>
      <td width="30%" valign="top"><p align="center">Pembina yang dinilai,</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p align="center">(<u><? echo $tp3['nama_gp']; ?></u>)<br />
          NIY. <? echo $tp3['nip']; ?></p></td>
    </tr>
    
  </table></td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
</table>
</body>
</html>
