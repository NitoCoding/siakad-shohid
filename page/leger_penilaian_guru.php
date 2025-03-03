<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<? include("../koneksi.php"); 
$tkt=$_GET['tkt'];
$thaj=$_COOKIE['thaj'];
$qbln=$_GET['qbln']; 
?>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="23" colspan="10">Rekap Penilaian Guru <? echo $tkt; ?> Bulan <? if($qbln=="1"){ echo "Januari"; }
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
   
    echo " ".date("Y");
   ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="48" bgcolor="#CCCCCC"><div align="center"><strong>NO.</strong></div></td>
    <td bgcolor="#CCCCCC"><div align="center">Nama Guru </div></td>
    <td bgcolor="#CCCCCC"><div align="center"><strong>Akhlak</strong></div></td>
    <td bgcolor="#CCCCCC"><div align="center"><strong>Kedisiplinan</strong></div></td>
    <td bgcolor="#CCCCCC"><div align="center"><strong>Penguasaan Materi </strong></div></td>
    <td bgcolor="#CCCCCC"><div align="center"><strong>Pengembangan Materi </strong></div></td>
    <td bgcolor="#CCCCCC"><div align="center"><strong>Pemamfaatan Teknologi </strong></div></td>
    <td bgcolor="#CCCCCC"><div align="center"><strong>Komunikasi</strong></div></td>
    <td bgcolor="#CCCCCC"><div align="center"><strong>Kepatuhan Terhadap intruksi </strong></div></td>
    <td bgcolor="#CCCCCC"><div align="center"><strong>Ketepatan waktu menyelesaikan tugas </strong></div></td>
    <td bgcolor="#CCCCCC"><div align="center"><strong>Tertib Administrasi </strong></div></td>
    <td bgcolor="#CCCCCC"><div align="center"><strong>Point</strong></div></td>
    <td bgcolor="#CCCCCC"><div align="center"><strong>Nilai</strong></div></td>
  </tr>
  <? 
  $no=1;
  $tampi3=mysqli_query($koneksi, "SELECT * FROM guru_pegawai WHERE unit='$tkt' and status_kp='G' ");
  while($tp3=mysqli_fetch_assoc($tampi3)){
  $idgp=$tp3['id_gp'];
  ?>
  <tr>
    <td colspan="13" height="3"></td>
  </tr>
  <tr>
    <td bgcolor="#EEEEEE"><div align="center"><? echo $no; ?></div></td>
    <td bgcolor="#EEEEEE"><? echo $tp3['nama_gp']; ?></td>
    <td bgcolor="#EEEEEE"><div align="center">
      <? 
	  $tamp2=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_bulanan_guru WHERE id_guru='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
      $kp2=mysqli_fetch_assoc($tamp2);
	  $hn1=$kp2['akhlak'];
	  if($kp2['akhlak']=='4') {echo"A" ; }
			if($kp2['akhlak']=='3') {echo "B"; }
			if($kp2['akhlak']=='2') {echo "C"; }
			if($kp2['akhlak']=='1') {echo "D"; }
	  
	   ?>
    </div></td>
    <td bgcolor="#EEEEEE"><div align="center">
      <? 
	  $tamp2=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_bulanan_guru WHERE id_guru='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
      $kp2=mysqli_fetch_assoc($tamp2);
	  $hn2=$kp2['kedisiplinan'];
	  if($kp2['kedisiplinan']=='4') {echo"A" ; }
			if($kp2['kedisiplinan']=='3') {echo "B"; }
			if($kp2['kedisiplinan']=='2') {echo "C"; }
			if($kp2['kedisiplinan']=='1') {echo "D"; }
	   ?>
    </div></td>
    <td bgcolor="#EEEEEE"><div align="center">
      <? 
	  $tamp2=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_bulanan_guru WHERE id_guru='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
      $kp2=mysqli_fetch_assoc($tamp2);
	  $hn3=$kp2['penguasaan_materi'];
	  if($kp2['penguasaan_materi']=='4') {echo"A" ; }
			if($kp2['penguasaan_materi']=='3') {echo "B"; }
			if($kp2['penguasaan_materi']=='2') {echo "C"; }
			if($kp2['penguasaan_materi']=='1') {echo "D"; }
	   ?>
    </div></td>
    <td bgcolor="#EEEEEE"><div align="center">
      <? 
	  $tamp2=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_bulanan_guru WHERE id_guru='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
      $kp2=mysqli_fetch_assoc($tamp2);
	  $hn4=$kp2['pengembangan_materi'];
	  if($kp2['pengembangan_materi']=='4') {echo"A" ; }
			if($kp2['pengembangan_materi']=='3') {echo "B"; }
			if($kp2['pengembangan_materi']=='2') {echo "C"; }
			if($kp2['pengembangan_materi']=='1') {echo "D"; }
	   ?>
    </div></td>
    <td bgcolor="#EEEEEE"><div align="center">
      <? 
	  $tamp2=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_bulanan_guru WHERE id_guru='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
      $kp2=mysqli_fetch_assoc($tamp2);
	  $hn5=$kp2['pemamfaatan_teknologi'];
	  if($kp2['pemamfaatan_teknologi']=='4') {echo"A" ; }
			if($kp2['pemamfaatan_teknologi']=='3') {echo "B"; }
			if($kp2['pemamfaatan_teknologi']=='2') {echo "C"; }
			if($kp2['pemamfaatan_teknologi']=='1') {echo "D"; }
	   ?>
    </div></td>
    <td bgcolor="#EEEEEE"><div align="center">
      <? 
	  $tamp2=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_bulanan_guru WHERE id_guru='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
      $kp2=mysqli_fetch_assoc($tamp2);
	  $hn6=$kp2['komunikasi'];
	  if($kp2['komunikasi']=='4') {echo"A" ; }
			if($kp2['komunikasi']=='3') {echo "B"; }
			if($kp2['komunikasi']=='2') {echo "C"; }
			if($kp2['komunikasi']=='1') {echo "D"; }
	   ?>
    </div></td>
    <td bgcolor="#EEEEEE"><div align="center">
      <? 
	  $tamp2=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_bulanan_guru WHERE id_guru='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
      $kp2=mysqli_fetch_assoc($tamp2);
	  $hn7=$kp2['kepatuhan'];
	  if($kp2['kepatuhan']=='4') {echo"A" ; }
			if($kp2['kepatuhan']=='3') {echo "B"; }
			if($kp2['kepatuhan']=='2') {echo "C"; }
			if($kp2['kepatuhan']=='1') {echo "D"; }
	   ?>
    </div></td>
    <td bgcolor="#EEEEEE"><div align="center">
      <? 
	  $tamp2=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_bulanan_guru WHERE id_guru='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
      $kp2=mysqli_fetch_assoc($tamp2);
	  $hn8=$kp2['tepat_waktu'];
	  if($kp2['tepat_waktu']=='4') {echo"A" ; }
			if($kp2['tepat_waktu']=='3') {echo "B"; }
			if($kp2['tepat_waktu']=='2') {echo "C"; }
			if($kp2['tepat_waktu']=='1') {echo "D"; }
	   ?>
    </div></td>
    <td bgcolor="#EEEEEE"><div align="center">
      <? 
	  $tamp2=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_bulanan_guru WHERE id_guru='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
      $kp2=mysqli_fetch_assoc($tamp2);
	  $hn9=$kp2['administrasi'];
	  if($kp2['administrasi']=='4') {echo"A" ; }
			if($kp2['administrasi']=='3') {echo "B"; }
			if($kp2['administrasi']=='2') {echo "C"; }
			if($kp2['administrasi']=='1') {echo "D"; }
	   ?>
    </div></td>
    <td bgcolor="#EEEEEE"><div align="center"><?
	 $tot_n=round(($hn1+$hn2+$hn3+$hn4+$hn5+$hn6+$hn7+$hn8+$hn9)/9); 
	 $point=$hn1+$hn2+$hn3+$hn4+$hn5+$hn6+$hn7+$hn8+$hn9;
	 echo $point;
	?></div></td>
    <td bgcolor="#EEEEEE"><div align="center"><b>
      <? 
	 
	
	  
	  if($tot_n==4){ $nak="A"; }
	  if($tot_n==3){ $nak="B"; }
	  if($tot_n==2){ $nak="C"; }
	  if($tot_n==1){ $nak="D"; }
	  echo" $nak "; ?>
    </b></div></td>
  </tr>
  <?  $no+=1; }?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
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
