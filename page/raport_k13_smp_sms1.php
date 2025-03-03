<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
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
.style6 {font-size: 14px}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
</head>
<?
include("../koneksi.php");
 include("../function.php");
 $klsk=$_GET['klsk'];
 $thaj=$_COOKIE['thaj'];
 $sem=$_COOKIE['sem'];
 $idstr=$_GET['idstr'];
 
?>
<body>
<table width="692" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td height="95" colspan="4" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td height="95" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td valign="top">&nbsp;</td>
                <td valign="top">&nbsp;</td>
              </tr>
              <tr> 
                <td width="11%" height="95" valign="top"><img src="../images/LOGO-SHOID2.jpg" width="82" height="93" /></td>
                <td width="89%" valign="top"><div align="center">
                  <p><span class="style3"><font size="2">YAYASAN 
                    SHOHWATUL IS'AD</font></span><br /> 
                    <span class="style1"><font size="4">SMP 
                      IT SHOHWATUL IS'AD</font></span><br /> 
                      <br /> 
                      <span class="style6">NSS : 202190205004</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="style6">NPSN : 40314482</span><span class="style4"><br />
                      Alamat: Jl. Poros Padanglampe�KM . 3�Ma'rang�Pangkep�Sulawesi -Selatan 90645 P.O. Box 300
                    <br>
                    http://www.shohwatulisad.sch.id - e-mail : info@shohwatulisad.sch.id </span></p>
                  </div></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td colspan="4"><hr /></td>
  </tr>
  <tr> 
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="4"><div align="center" class="style5"><font size="3">LAPORAN HASIL BELAJAR SISWA </font></div></td>
  </tr>
  <tr>
    <td colspan="4"><div align="center"><font size="2">SEMESTER 
      <? if($sem=='I') { echo "GANJIL"; }else{ echo"GENAP"; }?>
    TAHUN AJARAN <? echo $thaj; ?></font></div>    </td>
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
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
      <?
	      $tmpkls=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st,nis_nasional FROM tb_santri WHERE id_santri='$idstr' ");
          $ct=mysqli_fetch_assoc($tmpkls);
	   ?>
  <tr> 
    <td width="2%">&nbsp;</td>
    <td width="7%">NIS/NISN</td>
    <td width="60%">: <? echo $ct['nis']." / ". $ct['nis_nasional']; ?></td>
    <td width="31%">&nbsp;</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td>Nama</td>
    <td>: <? echo $ct['nama']; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td>Kelas</td>
    <td>: <? echo $ct['kelas_st']; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr valign="top"> 
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr valign="top">
    <td height="280" colspan="4"><table width="882" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="2" rowspan="2"><div align="center">MATA PELAJARAN </div></td>
        <td colspan="2" rowspan="2"><div align="center">Pengetahuan<br />(KI 3)</div></td>
        <td colspan="2" rowspan="2"><div align="center">Keterampilan<br />(KI 4)</div></td>
        <td colspan="2"><div align="center">Sikap Spritual dan Sosial <br />
          (KI 1 dan KI 2)</div></td>
        </tr>
      <tr>
        <td width="69" rowspan="2"><div align="center">Dalam Mapel</div></td>
        <td width="177" rowspan="2"><div align="center">Antarmapel</div></td>
      </tr>
      
      <tr>
        <td colspan="2">&nbsp;</td>
        <td width="64"><div align="center">Angka</div></td>
        <td width="64"><div align="center">Predikat</div></td>
        <td width="64"><div align="center">Angka</div></td>
        <td width="64"><div align="center">Predikat</div></td>
        </tr>
      <tr>
        <td colspan="2">Kelompok A (Wajib) </td>
        <td><div align="center">1-4</div></td>
        <td><div align="center"></div></td>
        <td><div align="center">1-4</div></td>
        <td><div align="center"></div></td>
        <td><div align="center">SB/B/C/K</div></td>
        <td rowspan="15" valign="top"><table width="100%" border="0" cellspacing="2" cellpadding="0">
          <tr>
            <td><?
			$cw=mysqli_query($koneksi, "SELECT * FROM tb_catatan_wk WHERE nis='$ct[nis]' and thn_ajaran='$thaj' and semester='$sem' and kelas='$ct[kelas_st]' ");
            $ccw=mysqli_fetch_assoc($cw);
				
			echo $ccw['catatan'];
			?></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td width="21"><div align="center">1.</div></td>
        <td width="341">Pendidikan Agama dan Budi Pekerti <br />
        Nama Guru : 
          <? 
		  $tpk2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
          $ctk2=mysqli_fetch_assoc($tpk2);
		  
		  $nmg=mysqli_query($koneksi, "SELECT * FROM tb_pengajar WHERE thn_ajaran='$thaj' and semester='$sem' and kd_mapel='MP005' and kd_kelas='$ctk2[kd_kls]' "); 
          $c_nmg=mysqli_fetch_assoc($nmg);
		  
		  $tpk5=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$c_nmg[kd_guru]' ");
          $ctk5=mysqli_fetch_assoc($tpk5);
		  echo $ctk5['nama_gp'];
		 ?></td>
        <td><div align="center">
          <?    
	$rtt=0; $j1=0; $j2=0; $j3=0; $j4=0; $j5=0; $j6=0; $j7=0; $j8=0; $j9=0; $j10=0; $j11=0; $j12=0; $j13=0; $j14=0; $j15=0; $j16=0; $j17=0; $j18=0; $j19=0; $j20=0; $j21=0; $j22=0;
		       
		  		  	  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP005' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j1=$tpk['raport'];
		  $hrf=$j1/25;	  
		  echo $hrf; 
			
			?>
        </div></td>
        <td><div align="center"><?
		  if($hrf >=3.83){ echo"A"; } 
		  if($hrf <=3.83 and $hrf >3.50){ echo"-A"; }
		  if($hrf <=3.50 and $hrf >3.17){ echo"B+"; } 
		  if($hrf <=3.17 and $hrf >2.83){ echo"B"; } 
		  if($hrf <=2.83 and $hrf >2.50){ echo"B-"; } 
		  if($hrf <=2.50 and $hrf >2.17){ echo"C+"; }
		  if($hrf <=2.17 and $hrf >1.83){ echo"C"; }
		  if($hrf <=1.83 and $hrf >1.50){ echo"C-"; } 
		  if($hrf <=1.50 and $hrf >1.17){ echo"D+"; }
		  if($hrf <=1.17 and $hrf >=1.00){ echo"D"; }
		?></div></td>
        <td><div align="center"><?
		$kt1=$tpk['keterampilan'];
		$hkt=$kt1/25;
		echo $hkt;
		?></div></td>
        <td><div align="center"><? 
		if($hkt >=3.83){ echo"A"; } 
		  if($hkt <=3.83 and $hkt >3.50){ echo"-A"; }
		  if($hkt <=3.50 and $hkt >3.17){ echo"B+"; } 
		  if($hkt <=3.17 and $hkt >2.83){ echo"B"; } 
		  if($hkt <=2.83 and $hkt >2.50){ echo"B-"; } 
		  if($hkt <=2.50 and $hkt >2.17){ echo"C+"; }
		  if($hkt <=2.17 and $hkt >1.83){ echo"C"; }
		  if($hkt <=1.83 and $hkt >1.50){ echo"C-"; } 
		  if($hkt <=1.50 and $hkt >1.17){ echo"D+"; }
		  if($hkt <=1.17 and $hkt >=1.00){ echo"D"; }
		 ?></div></td>
        <td><div align="center"><? echo $tpk['sikap']; ?></div></td>
        </tr>
      <tr>
        <td><div align="center">2.</div></td>
        <td>Pendidikan Pancasila dan Kewarganegaraan <br />
        Nama Guru : 
          <? 
		  $tpk2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
          $ctk2=mysqli_fetch_assoc($tpk2);
		  
		  $nmg=mysqli_query($koneksi, "SELECT * FROM tb_pengajar WHERE thn_ajaran='$thaj' and semester='$sem' and kd_mapel='MD013' and kd_kelas='$ctk2[kd_kls]' "); 
          $c_nmg=mysqli_fetch_assoc($nmg);
		  
		  $tpk5=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$c_nmg[kd_guru]' ");
          $ctk5=mysqli_fetch_assoc($tpk5);
		  echo $ctk5['nama_gp'];
		 ?></td>
        <td><div align="center">
          <?    
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD013' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j1=$tpk['raport'];
		  $hrf=$j1/25;	  
		  echo $hrf; 
			
			?>
        </div></td>
        <td><div align="center">
          <?
		  if($hrf >=3.83){ echo"A"; } 
		  if($hrf <=3.83 and $hrf >3.50){ echo"-A"; }
		  if($hrf <=3.50 and $hrf >3.17){ echo"B+"; } 
		  if($hrf <=3.17 and $hrf >2.83){ echo"B"; } 
		  if($hrf <=2.83 and $hrf >2.50){ echo"B-"; } 
		  if($hrf <=2.50 and $hrf >2.17){ echo"C+"; }
		  if($hrf <=2.17 and $hrf >1.83){ echo"C"; }
		  if($hrf <=1.83 and $hrf >1.50){ echo"C-"; } 
		  if($hrf <=1.50 and $hrf >1.17){ echo"D+"; }
		  if($hrf <=1.17 and $hrf >=1.00){ echo"D"; }
		?>
        </div></td>
        <td><div align="center">
          <?
		$kt1=$tpk['keterampilan'];
		$hkt=$kt1/25;
		echo $hkt;
		?>
        </div></td>
        <td><div align="center">
          <? 
		if($hkt >=3.83){ echo"A"; } 
		  if($hkt <=3.83 and $hkt >3.50){ echo"-A"; }
		  if($hkt <=3.50 and $hkt >3.17){ echo"B+"; } 
		  if($hkt <=3.17 and $hkt >2.83){ echo"B"; } 
		  if($hkt <=2.83 and $hkt >2.50){ echo"B-"; } 
		  if($hkt <=2.50 and $hkt >2.17){ echo"C+"; }
		  if($hkt <=2.17 and $hkt >1.83){ echo"C"; }
		  if($hkt <=1.83 and $hkt >1.50){ echo"C-"; } 
		  if($hkt <=1.50 and $hkt >1.17){ echo"D+"; }
		  if($hkt <=1.17 and $hkt >=1.00){ echo"D"; }
		 ?>
        </div></td>
        <td><div align="center"><? echo $tpk['sikap']; ?></div></td>
        </tr>
      <tr>
        <td><div align="center">3.</div></td>
        <td>Bahasa Indonesia <br />
        Nama Guru : 
          <? 
		  $tpk2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
          $ctk2=mysqli_fetch_assoc($tpk2);
		  
		  $nmg=mysqli_query($koneksi, "SELECT * FROM tb_pengajar WHERE thn_ajaran='$thaj' and semester='$sem' and kd_mapel='MD003' and kd_kelas='$ctk2[kd_kls]' "); 
          $c_nmg=mysqli_fetch_assoc($nmg);
		  
		  $tpk5=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$c_nmg[kd_guru]' ");
          $ctk5=mysqli_fetch_assoc($tpk5);
		  echo $ctk5['nama_gp'];
		 ?></td>
        <td><div align="center">
          <?    
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD003' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j1=$tpk['raport'];
		  $hrf=$j1/25;	  
		  echo $hrf; 
			
			?>
        </div></td>
        <td><div align="center">
          <?
		  if($hrf >=3.83){ echo"A"; } 
		  if($hrf <=3.83 and $hrf >3.50){ echo"-A"; }
		  if($hrf <=3.50 and $hrf >3.17){ echo"B+"; } 
		  if($hrf <=3.17 and $hrf >2.83){ echo"B"; } 
		  if($hrf <=2.83 and $hrf >2.50){ echo"B-"; } 
		  if($hrf <=2.50 and $hrf >2.17){ echo"C+"; }
		  if($hrf <=2.17 and $hrf >1.83){ echo"C"; }
		  if($hrf <=1.83 and $hrf >1.50){ echo"C-"; } 
		  if($hrf <=1.50 and $hrf >1.17){ echo"D+"; }
		  if($hrf <=1.17 and $hrf >=1.00){ echo"D"; }
		?>
        </div></td>
        <td><div align="center">
          <?
		$kt1=$tpk['keterampilan'];
		$hkt=$kt1/25;
		echo $hkt;
		?>
        </div></td>
        <td><div align="center">
          <? 
		if($hkt >=3.83){ echo"A"; } 
		  if($hkt <=3.83 and $hkt >3.50){ echo"-A"; }
		  if($hkt <=3.50 and $hkt >3.17){ echo"B+"; } 
		  if($hkt <=3.17 and $hkt >2.83){ echo"B"; } 
		  if($hkt <=2.83 and $hkt >2.50){ echo"B-"; } 
		  if($hkt <=2.50 and $hkt >2.17){ echo"C+"; }
		  if($hkt <=2.17 and $hkt >1.83){ echo"C"; }
		  if($hkt <=1.83 and $hkt >1.50){ echo"C-"; } 
		  if($hkt <=1.50 and $hkt >1.17){ echo"D+"; }
		  if($hkt <=1.17 and $hkt >=1.00){ echo"D"; }
		 ?>
        </div></td>
        <td><div align="center"><? echo $tpk['sikap']; ?></div></td>
        </tr>
      <tr>
        <td><div align="center">4.</div></td>
        <td>Matematika<br />
        Nama Guru : 
          <? 
		  $tpk2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
          $ctk2=mysqli_fetch_assoc($tpk2);
		  
		  $nmg=mysqli_query($koneksi, "SELECT * FROM tb_pengajar WHERE thn_ajaran='$thaj' and semester='$sem' and kd_mapel='MD005' and kd_kelas='$ctk2[kd_kls]' "); 
          $c_nmg=mysqli_fetch_assoc($nmg);
		  
		  $tpk5=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$c_nmg[kd_guru]' ");
          $ctk5=mysqli_fetch_assoc($tpk5);
		  echo $ctk5['nama_gp'];
		 ?></td>
        <td><div align="center">
          <?    
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD005' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j1=$tpk['raport'];
		  $hrf=$j1/25;	  
		  echo $hrf; 
			
			?>
        </div></td>
        <td><div align="center">
          <?
		  if($hrf >=3.83){ echo"A"; } 
		  if($hrf <=3.83 and $hrf >3.50){ echo"-A"; }
		  if($hrf <=3.50 and $hrf >3.17){ echo"B+"; } 
		  if($hrf <=3.17 and $hrf >2.83){ echo"B"; } 
		  if($hrf <=2.83 and $hrf >2.50){ echo"B-"; } 
		  if($hrf <=2.50 and $hrf >2.17){ echo"C+"; }
		  if($hrf <=2.17 and $hrf >1.83){ echo"C"; }
		  if($hrf <=1.83 and $hrf >1.50){ echo"C-"; } 
		  if($hrf <=1.50 and $hrf >1.17){ echo"D+"; }
		  if($hrf <=1.17 and $hrf >=1.00){ echo"D"; }
		?>
        </div></td>
        <td><div align="center">
          <?
		$kt1=$tpk['keterampilan'];
		$hkt=$kt1/25;
		echo $hkt;
		?>
        </div></td>
        <td><div align="center">
          <? 
		if($hkt >=3.83){ echo"A"; } 
		  if($hkt <=3.83 and $hkt >3.50){ echo"-A"; }
		  if($hkt <=3.50 and $hkt >3.17){ echo"B+"; } 
		  if($hkt <=3.17 and $hkt >2.83){ echo"B"; } 
		  if($hkt <=2.83 and $hkt >2.50){ echo"B-"; } 
		  if($hkt <=2.50 and $hkt >2.17){ echo"C+"; }
		  if($hkt <=2.17 and $hkt >1.83){ echo"C"; }
		  if($hkt <=1.83 and $hkt >1.50){ echo"C-"; } 
		  if($hkt <=1.50 and $hkt >1.17){ echo"D+"; }
		  if($hkt <=1.17 and $hkt >=1.00){ echo"D"; }
		 ?>
        </div></td>
        <td><div align="center"><? echo $tpk['sikap']; ?></div></td>
        </tr>
      <tr>
        <td><div align="center">5.</div></td>
        <td>Ilmu Pengetahuan Alam <br />
        Nama Guru : 
          <? 
		  $tpk2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
          $ctk2=mysqli_fetch_assoc($tpk2);
		  
		  $nmg=mysqli_query($koneksi, "SELECT * FROM tb_pengajar WHERE thn_ajaran='$thaj' and semester='$sem' and kd_mapel='MD006' and kd_kelas='$ctk2[kd_kls]' "); 
          $c_nmg=mysqli_fetch_assoc($nmg);
		  
		  $tpk5=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$c_nmg[kd_guru]' ");
          $ctk5=mysqli_fetch_assoc($tpk5);
		  echo $ctk5['nama_gp'];
		 ?></td>
        <td><div align="center">
          <?    
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD006' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j1=$tpk['raport'];
		  $hrf=$j1/25;	  
		  echo $hrf; 
			
			?>
        </div></td>
        <td><div align="center">
          <?
		  if($hrf >=3.83){ echo"A"; } 
		  if($hrf <=3.83 and $hrf >3.50){ echo"-A"; }
		  if($hrf <=3.50 and $hrf >3.17){ echo"B+"; } 
		  if($hrf <=3.17 and $hrf >2.83){ echo"B"; } 
		  if($hrf <=2.83 and $hrf >2.50){ echo"B-"; } 
		  if($hrf <=2.50 and $hrf >2.17){ echo"C+"; }
		  if($hrf <=2.17 and $hrf >1.83){ echo"C"; }
		  if($hrf <=1.83 and $hrf >1.50){ echo"C-"; } 
		  if($hrf <=1.50 and $hrf >1.17){ echo"D+"; }
		  if($hrf <=1.17 and $hrf >=1.00){ echo"D"; }
		?>
        </div></td>
        <td><div align="center">
          <?
		$kt1=$tpk['keterampilan'];
		$hkt=$kt1/25;
		echo $hkt;
		?>
        </div></td>
        <td><div align="center">
          <? 
		if($hkt >=3.83){ echo"A"; } 
		  if($hkt <=3.83 and $hkt >3.50){ echo"-A"; }
		  if($hkt <=3.50 and $hkt >3.17){ echo"B+"; } 
		  if($hkt <=3.17 and $hkt >2.83){ echo"B"; } 
		  if($hkt <=2.83 and $hkt >2.50){ echo"B-"; } 
		  if($hkt <=2.50 and $hkt >2.17){ echo"C+"; }
		  if($hkt <=2.17 and $hkt >1.83){ echo"C"; }
		  if($hkt <=1.83 and $hkt >1.50){ echo"C-"; } 
		  if($hkt <=1.50 and $hkt >1.17){ echo"D+"; }
		  if($hkt <=1.17 and $hkt >=1.00){ echo"D"; }
		 ?>
        </div></td>
        <td><div align="center"><? echo $tpk['sikap']; ?></div></td>
        </tr>
      <tr>
        <td><div align="center">6.</div></td>
        <td>Ilmu Pengetahua Sosial <br />
        Nama Guru : 
          <? 
		  $tpk2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
          $ctk2=mysqli_fetch_assoc($tpk2);
		  
		  $nmg=mysqli_query($koneksi, "SELECT * FROM tb_pengajar WHERE thn_ajaran='$thaj' and semester='$sem' and kd_mapel='MD007' and kd_kelas='$ctk2[kd_kls]' "); 
          $c_nmg=mysqli_fetch_assoc($nmg);
		  
		  $tpk5=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$c_nmg[kd_guru]' ");
          $ctk5=mysqli_fetch_assoc($tpk5);
		  echo $ctk5['nama_gp'];
		 ?></td>
        <td><div align="center">
          <?    
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD007' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j1=$tpk['raport'];
		  $hrf=$j1/25;	  
		  echo $hrf; 
			
			?>
        </div></td>
        <td><div align="center">
          <?
		  if($hrf >=3.83){ echo"A"; } 
		  if($hrf <=3.83 and $hrf >3.50){ echo"-A"; }
		  if($hrf <=3.50 and $hrf >3.17){ echo"B+"; } 
		  if($hrf <=3.17 and $hrf >2.83){ echo"B"; } 
		  if($hrf <=2.83 and $hrf >2.50){ echo"B-"; } 
		  if($hrf <=2.50 and $hrf >2.17){ echo"C+"; }
		  if($hrf <=2.17 and $hrf >1.83){ echo"C"; }
		  if($hrf <=1.83 and $hrf >1.50){ echo"C-"; } 
		  if($hrf <=1.50 and $hrf >1.17){ echo"D+"; }
		  if($hrf <=1.17 and $hrf >=1.00){ echo"D"; }
		?>
        </div></td>
        <td><div align="center">
          <?
		$kt1=$tpk['keterampilan'];
		$hkt=$kt1/25;
		echo $hkt;
		?>
        </div></td>
        <td><div align="center">
          <? 
		if($hkt >=3.83){ echo"A"; } 
		  if($hkt <=3.83 and $hkt >3.50){ echo"-A"; }
		  if($hkt <=3.50 and $hkt >3.17){ echo"B+"; } 
		  if($hkt <=3.17 and $hkt >2.83){ echo"B"; } 
		  if($hkt <=2.83 and $hkt >2.50){ echo"B-"; } 
		  if($hkt <=2.50 and $hkt >2.17){ echo"C+"; }
		  if($hkt <=2.17 and $hkt >1.83){ echo"C"; }
		  if($hkt <=1.83 and $hkt >1.50){ echo"C-"; } 
		  if($hkt <=1.50 and $hkt >1.17){ echo"D+"; }
		  if($hkt <=1.17 and $hkt >=1.00){ echo"D"; }
		 ?>
        </div></td>
        <td><div align="center"><? echo $tpk['sikap']; ?></div></td>
        </tr>
      <tr>
        <td><div align="center">7.</div></td>
        <td>Bahasa Inggris <br />
        Nama Guru : 
          <? 
		  $tpk2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
          $ctk2=mysqli_fetch_assoc($tpk2);
		  
		  $nmg=mysqli_query($koneksi, "SELECT * FROM tb_pengajar WHERE thn_ajaran='$thaj' and semester='$sem' and kd_mapel='MD004' and kd_kelas='$ctk2[kd_kls]' "); 
          $c_nmg=mysqli_fetch_assoc($nmg);
		  
		  $tpk5=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$c_nmg[kd_guru]' ");
          $ctk5=mysqli_fetch_assoc($tpk5);
		  echo $ctk5['nama_gp'];
		 ?></td>
        <td><div align="center">
          <?    
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD004' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j1=$tpk['raport'];
		  $hrf=$j1/25;	  
		  echo $hrf; 
			
			?>
        </div></td>
        <td><div align="center">
          <?
		  if($hrf >=3.83){ echo"A"; } 
		  if($hrf <=3.83 and $hrf >3.50){ echo"-A"; }
		  if($hrf <=3.50 and $hrf >3.17){ echo"B+"; } 
		  if($hrf <=3.17 and $hrf >2.83){ echo"B"; } 
		  if($hrf <=2.83 and $hrf >2.50){ echo"B-"; } 
		  if($hrf <=2.50 and $hrf >2.17){ echo"C+"; }
		  if($hrf <=2.17 and $hrf >1.83){ echo"C"; }
		  if($hrf <=1.83 and $hrf >1.50){ echo"C-"; } 
		  if($hrf <=1.50 and $hrf >1.17){ echo"D+"; }
		  if($hrf <=1.17 and $hrf >=1.00){ echo"D"; }
		?>
        </div></td>
        <td><div align="center">
          <?
		$kt1=$tpk['keterampilan'];
		$hkt=$kt1/25;
		echo $hkt;
		?>
        </div></td>
        <td><div align="center">
          <? 
		if($hkt >=3.83){ echo"A"; } 
		  if($hkt <=3.83 and $hkt >3.50){ echo"-A"; }
		  if($hkt <=3.50 and $hkt >3.17){ echo"B+"; } 
		  if($hkt <=3.17 and $hkt >2.83){ echo"B"; } 
		  if($hkt <=2.83 and $hkt >2.50){ echo"B-"; } 
		  if($hkt <=2.50 and $hkt >2.17){ echo"C+"; }
		  if($hkt <=2.17 and $hkt >1.83){ echo"C"; }
		  if($hkt <=1.83 and $hkt >1.50){ echo"C-"; } 
		  if($hkt <=1.50 and $hkt >1.17){ echo"D+"; }
		  if($hkt <=1.17 and $hkt >=1.00){ echo"D"; }
		 ?>
        </div></td>
        <td><div align="center"><? echo $tpk['sikap']; ?></div></td>
        </tr>
      
      <tr>
        <td colspan="7">Kelompok B (Wajib) </td>
        </tr>
      <tr>
        <td><div align="center">8.</div></td>
        <td>Seni Budaya <br />
        Nama Guru : 
          <? 
		  $tpk2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
          $ctk2=mysqli_fetch_assoc($tpk2);
		  
		  $nmg=mysqli_query($koneksi, "SELECT * FROM tb_pengajar WHERE thn_ajaran='$thaj' and semester='$sem' and kd_mapel='MD012' and kd_kelas='$ctk2[kd_kls]' "); 
          $c_nmg=mysqli_fetch_assoc($nmg);
		  
		  $tpk5=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$c_nmg[kd_guru]' ");
          $ctk5=mysqli_fetch_assoc($tpk5);
		  echo $ctk5['nama_gp'];
		 ?></td>
        <td><div align="center">
          <?    
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD008' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j1=$tpk['raport'];
		  $hrf=$j1/25;	  
		  echo $hrf; 
			
			?>
        </div></td>
        <td><div align="center">
          <?
		  if($hrf >=3.83){ echo"A"; } 
		  if($hrf <=3.83 and $hrf >3.50){ echo"-A"; }
		  if($hrf <=3.50 and $hrf >3.17){ echo"B+"; } 
		  if($hrf <=3.17 and $hrf >2.83){ echo"B"; } 
		  if($hrf <=2.83 and $hrf >2.50){ echo"B-"; } 
		  if($hrf <=2.50 and $hrf >2.17){ echo"C+"; }
		  if($hrf <=2.17 and $hrf >1.83){ echo"C"; }
		  if($hrf <=1.83 and $hrf >1.50){ echo"C-"; } 
		  if($hrf <=1.50 and $hrf >1.17){ echo"D+"; }
		  if($hrf <=1.17 and $hrf >=1.00){ echo"D"; }
		?>
        </div></td>
        <td><div align="center">
          <?
		$kt1=$tpk['keterampilan'];
		$hkt=$kt1/25;
		echo $hkt;
		?>
        </div></td>
        <td><div align="center">
          <? 
		if($hkt >=3.83){ echo"A"; } 
		  if($hkt <=3.83 and $hkt >3.50){ echo"-A"; }
		  if($hkt <=3.50 and $hkt >3.17){ echo"B+"; } 
		  if($hkt <=3.17 and $hkt >2.83){ echo"B"; } 
		  if($hkt <=2.83 and $hkt >2.50){ echo"B-"; } 
		  if($hkt <=2.50 and $hkt >2.17){ echo"C+"; }
		  if($hkt <=2.17 and $hkt >1.83){ echo"C"; }
		  if($hkt <=1.83 and $hkt >1.50){ echo"C-"; } 
		  if($hkt <=1.50 and $hkt >1.17){ echo"D+"; }
		  if($hkt <=1.17 and $hkt >=1.00){ echo"D"; }
		 ?>
        </div></td>
        <td><div align="center"><? echo $tpk['sikap']; ?></div></td>
        </tr>
      <tr>
        <td><div align="center">9.</div></td>
        <td>Pendidikan Jasmani, Olah Raga dan Kesehatan <br />
        Nama Guru : 
          <? 
		  $tpk2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
          $ctk2=mysqli_fetch_assoc($tpk2);
		  
		  $nmg=mysqli_query($koneksi, "SELECT * FROM tb_pengajar WHERE thn_ajaran='$thaj' and semester='$sem' and kd_mapel='MD009' and kd_kelas='$ctk2[kd_kls]' "); 
          $c_nmg=mysqli_fetch_assoc($nmg);
		  
		  $tpk5=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$c_nmg[kd_guru]' ");
          $ctk5=mysqli_fetch_assoc($tpk5);
		  echo $ctk5['nama_gp'];
		 ?></td>
        <td><div align="center">
          <?    
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD009' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j1=$tpk['raport'];
		  $hrf=$j1/25;	  
		  echo $hrf; 
			
			?>
        </div></td>
        <td><div align="center">
          <?
		  if($hrf >=3.83){ echo"A"; } 
		  if($hrf <=3.83 and $hrf >3.50){ echo"-A"; }
		  if($hrf <=3.50 and $hrf >3.17){ echo"B+"; } 
		  if($hrf <=3.17 and $hrf >2.83){ echo"B"; } 
		  if($hrf <=2.83 and $hrf >2.50){ echo"B-"; } 
		  if($hrf <=2.50 and $hrf >2.17){ echo"C+"; }
		  if($hrf <=2.17 and $hrf >1.83){ echo"C"; }
		  if($hrf <=1.83 and $hrf >1.50){ echo"C-"; } 
		  if($hrf <=1.50 and $hrf >1.17){ echo"D+"; }
		  if($hrf <=1.17 and $hrf >=1.00){ echo"D"; }
		?>
        </div></td>
        <td><div align="center">
          <?
		$kt1=$tpk['keterampilan'];
		$hkt=$kt1/25;
		echo $hkt;
		?>
        </div></td>
        <td><div align="center">
          <? 
		if($hkt >=3.83){ echo"A"; } 
		  if($hkt <=3.83 and $hkt >3.50){ echo"-A"; }
		  if($hkt <=3.50 and $hkt >3.17){ echo"B+"; } 
		  if($hkt <=3.17 and $hkt >2.83){ echo"B"; } 
		  if($hkt <=2.83 and $hkt >2.50){ echo"B-"; } 
		  if($hkt <=2.50 and $hkt >2.17){ echo"C+"; }
		  if($hkt <=2.17 and $hkt >1.83){ echo"C"; }
		  if($hkt <=1.83 and $hkt >1.50){ echo"C-"; } 
		  if($hkt <=1.50 and $hkt >1.17){ echo"D+"; }
		  if($hkt <=1.17 and $hkt >=1.00){ echo"D"; }
		 ?>
        </div></td>
        <td><div align="center"><? echo $tpk['sikap']; ?></div></td>
        </tr>
      <tr>
        <td><div align="center">10.</div></td>
        <td>Prakarya<br />Nama Guru :</td>
        <td><div align="center">
          <?    
		 /*  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD009' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j1=$tpk['raport'];
		  $hrf=$j1/25;	  
		  echo $hrf; 
			 */
			?>
        </div></td>
        <td><div align="center">
          <?
		  /* if($hrf >=3.83){ echo"A"; } 
		  if($hrf <=3.83 and $hrf >3.50){ echo"-A"; }
		  if($hrf <=3.50 and $hrf >3.17){ echo"B+"; } 
		  if($hrf <=3.17 and $hrf >2.83){ echo"B"; } 
		  if($hrf <=2.83 and $hrf >2.50){ echo"B-"; } 
		  if($hrf <=2.50 and $hrf >2.17){ echo"C+"; }
		  if($hrf <=2.17 and $hrf >1.83){ echo"C"; }
		  if($hrf <=1.83 and $hrf >1.50){ echo"C-"; } 
		  if($hrf <=1.50 and $hrf >1.17){ echo"D+"; }
		  if($hrf <=1.17 and $hrf >=1.00){ echo"D"; } */
		?>
        </div></td>
        <td><div align="center">
          <?
		/* $kt1=$tpk['keterampilan'];
		$hkt=$kt1/25;
		echo $hkt; */
		?>
        </div></td>
        <td><div align="center">
          <? 
		/* if($hkt >=3.83){ echo"A"; } 
		  if($hkt <=3.83 and $hkt >3.50){ echo"-A"; }
		  if($hkt <=3.50 and $hkt >3.17){ echo"B+"; } 
		  if($hkt <=3.17 and $hkt >2.83){ echo"B"; } 
		  if($hkt <=2.83 and $hkt >2.50){ echo"B-"; } 
		  if($hkt <=2.50 and $hkt >2.17){ echo"C+"; }
		  if($hkt <=2.17 and $hkt >1.83){ echo"C"; }
		  if($hkt <=1.83 and $hkt >1.50){ echo"C-"; } 
		  if($hkt <=1.50 and $hkt >1.17){ echo"D+"; }
		  if($hkt <=1.17 and $hkt >=1.00){ echo"D"; } */
		 ?>
        </div></td>
        <td><div align="center"><? // echo $tpk['sikap']; ?></div></td>
        </tr>
      
      <tr>
        <td colspan="7">Kelompok B (Muatan Lokal) </td>
        </tr>
      <tr>
        <td><div align="center">11.</div></td>
        <td>TIK<br />
        Nama Guru : <? 
		  $tpk2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
          $ctk2=mysqli_fetch_assoc($tpk2);
		  
		  $nmg=mysqli_query($koneksi, "SELECT * FROM tb_pengajar WHERE thn_ajaran='$thaj' and semester='$sem' and kd_mapel='MD010' and kd_kelas='$ctk2[kd_kls]' "); 
          $c_nmg=mysqli_fetch_assoc($nmg);
		  
		  $tpk5=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$c_nmg[kd_guru]' ");
          $ctk5=mysqli_fetch_assoc($tpk5);
		  echo $ctk5['nama_gp'];
		 ?></td>
        <td><div align="center">
          <?    
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD010' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j1=$tpk['raport'];
		  $hrf=$j1/25;	  
		  echo $hrf; 
			
			?>
        </div></td>
        <td><div align="center">
          <?
		  if($hrf >=3.83){ echo"A"; } 
		  if($hrf <=3.83 and $hrf >3.50){ echo"-A"; }
		  if($hrf <=3.50 and $hrf >3.17){ echo"B+"; } 
		  if($hrf <=3.17 and $hrf >2.83){ echo"B"; } 
		  if($hrf <=2.83 and $hrf >2.50){ echo"B-"; } 
		  if($hrf <=2.50 and $hrf >2.17){ echo"C+"; }
		  if($hrf <=2.17 and $hrf >1.83){ echo"C"; }
		  if($hrf <=1.83 and $hrf >1.50){ echo"C-"; } 
		  if($hrf <=1.50 and $hrf >1.17){ echo"D+"; }
		  if($hrf <=1.17 and $hrf >=1.00){ echo"D"; }
		?>
        </div></td>
        <td><div align="center">
          <?
		$kt1=$tpk['keterampilan'];
		$hkt=$kt1/25;
		echo $hkt;
		?>
        </div></td>
        <td><div align="center">
          <? 
		if($hkt >=3.83){ echo"A"; } 
		  if($hkt <=3.83 and $hkt >3.50){ echo"-A"; }
		  if($hkt <=3.50 and $hkt >3.17){ echo"B+"; } 
		  if($hkt <=3.17 and $hkt >2.83){ echo"B"; } 
		  if($hkt <=2.83 and $hkt >2.50){ echo"B-"; } 
		  if($hkt <=2.50 and $hkt >2.17){ echo"C+"; }
		  if($hkt <=2.17 and $hkt >1.83){ echo"C"; }
		  if($hkt <=1.83 and $hkt >1.50){ echo"C-"; } 
		  if($hkt <=1.50 and $hkt >1.17){ echo"D+"; }
		  if($hkt <=1.17 and $hkt >=1.00){ echo"D"; }
		 ?>
        </div></td>
        <td><div align="center"><? echo $tpk['sikap']; ?></div></td>
        </tr>
      <tr>
        <td><div align="center">12</div></td>
        <td>Kewirausahaan dan Agrobisnis<br />
		  Nama Guru : 
          <? 
		  $tpk2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
          $ctk2=mysqli_fetch_assoc($tpk2);
		  
		  $nmg=mysqli_query($koneksi, "SELECT * FROM tb_pengajar WHERE thn_ajaran='$thaj' and semester='$sem' and kd_mapel='MD011' and kd_kelas='$ctk2[kd_kls]' "); 
          $c_nmg=mysqli_fetch_assoc($nmg);
		  
		  $tpk5=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$c_nmg[kd_guru]' ");
          $ctk5=mysqli_fetch_assoc($tpk5);
		  echo $ctk5['nama_gp'];
		 ?>		</td>
        <td><div align="center">
          <?    
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD011' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j1=$tpk['raport'];
		  $hrf=$j1/25;	  
		  echo $hrf; 
			
			?>
        </div></td>
        <td><div align="center">
          <?
		  if($hrf >=3.83){ echo"A"; } 
		  if($hrf <=3.83 and $hrf >3.50){ echo"-A"; }
		  if($hrf <=3.50 and $hrf >3.17){ echo"B+"; } 
		  if($hrf <=3.17 and $hrf >2.83){ echo"B"; } 
		  if($hrf <=2.83 and $hrf >2.50){ echo"B-"; } 
		  if($hrf <=2.50 and $hrf >2.17){ echo"C+"; }
		  if($hrf <=2.17 and $hrf >1.83){ echo"C"; }
		  if($hrf <=1.83 and $hrf >1.50){ echo"C-"; } 
		  if($hrf <=1.50 and $hrf >1.17){ echo"D+"; }
		  if($hrf <=1.17 and $hrf >=1.00){ echo"D"; }
		?>
        </div></td>
        <td><div align="center">
          <?
		$kt1=$tpk['keterampilan'];
		$hkt=$kt1/25;
		echo $hkt;
		?>
        </div></td>
        <td><div align="center">
          <? 
		if($hkt >=3.83){ echo"A"; } 
		  if($hkt <=3.83 and $hkt >3.50){ echo"-A"; }
		  if($hkt <=3.50 and $hkt >3.17){ echo"B+"; } 
		  if($hkt <=3.17 and $hkt >2.83){ echo"B"; } 
		  if($hkt <=2.83 and $hkt >2.50){ echo"B-"; } 
		  if($hkt <=2.50 and $hkt >2.17){ echo"C+"; }
		  if($hkt <=2.17 and $hkt >1.83){ echo"C"; }
		  if($hkt <=1.83 and $hkt >1.50){ echo"C-"; } 
		  if($hkt <=1.50 and $hkt >1.17){ echo"D+"; }
		  if($hkt <=1.17 and $hkt >=1.00){ echo"D"; }
		 ?>
        </div></td>
        <td><div align="center"><? echo $tpk['sikap']; ?></div></td>
        </tr>
    </table></td>
  </tr>
  
  <tr height="12">
    <td height="11" colspan="4" valign="top"></td>
  </tr>
  <?
            $akh=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='ML017' and thn_ajaran='$thaj' and semester='$sem' ");
            $cakh=mysqli_fetch_assoc($akh);  
			
			$kep=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='ML018' and thn_ajaran='$thaj' and semester='$sem' ");
            $ckep=mysqli_fetch_assoc($kep);
			
			$nck1=0;
			$nck2=0;
			$nck3=0;
			$nck4=0;
			$ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ext WHERE kd_santri='$ct[nis]' and thn_ajar='$thaj' and semester='$sem' ");
            while($cktr=mysqli_fetch_assoc($ktr)){
			   $nck1=$cktr['sakit']+$nck1;  
			   $nck2=$cktr['izin']+$nck2; 
			   $nck3=$cktr['alpa']+$nck3; 
			   $nck4=$cktr['t_solat']+$nck4; 
			}  
			
			?>
  <tr>
    <td colspan="4" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td width="28%" bgcolor="#FFFFFF"><div align="center">Kegiatan</div></td>
        <td width="23%" bgcolor="#FFFFFF"><div align="center">Jenis</div></td>
        <td width="8%" bgcolor="#FFFFFF"><div align="center">Nilai</div></td>
        <td width="41%" bgcolor="#FFFFFF"><div align="center">Keterangan</div></td>
      </tr>
      
	  <?
              $pbk=mysqli_query($koneksi, "SELECT * FROM tb_pbakat WHERE kd_santri='$ct[id_santri]' limit 0,1  ");
          $tpbk=mysqli_fetch_assoc($pbk); 
		  
		  $pbk1=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='$tpbk[kd_mp]'  ");
          $tpbk1=mysqli_fetch_assoc($pbk1);
		  
		  $tnils=mysqli_query($koneksi, "SELECT * FROM tb_nilai_eskul WHERE thn_eskl='$thaj' AND sms_eskl='$sem' AND nis_eskl='$ct[nis]' AND 
		                      kls_eskl='$ct[kelas_st]' AND kd_eskl1='$tpbk1[kd_mp]'   ");
        $cnils=mysqli_fetch_assoc($tnils); 
			
			?>
	  
      <tr>
        <td rowspan="3"><div align="center">Pengembangan Diri </div></td>
        <td>&nbsp;1. Pramuka </td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;2. <? echo $tpbk1['nama_mp']; ?></td>
        <td><div align="center"><? echo $cnils['nil_eskl1']; ?></div></td>
        <td><div align="center">
            <? 
		if($cexk['nil_eskl1']=="A"){ echo"Sangat Baik"; }
		if($cexk['nil_eskl1']=="B"){ echo"Baik"; }
		if($cexk['nil_eskl1']=="C"){ echo"Cukup"; }
		if($cexk['nil_eskl1']=="D"){ echo"Kurang"; }
		 ?>
        </div></td>
      </tr>
	<?  $pbk=mysqli_query($koneksi, "SELECT * FROM tb_pbakat WHERE kd_santri='$ct[id_santri]' limit 1,1 ");
          $tpbk=mysqli_fetch_assoc($pbk); 
		  
		  $pbk2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='$tpbk[kd_mp]'  ");
          $tpbk2=mysqli_fetch_assoc($pbk2);
		  
		  $tnils=mysqli_query($koneksi, "SELECT * FROM tb_nilai_eskul WHERE thn_eskl='$thaj' AND sms_eskl='$sem' AND nis_eskl='$ct[nis]' AND 
		                       kls_eskl='$ct[kelas_st]' AND kd_eskl2='$tpbk2[kd_mp]'  ");
        $cnils=mysqli_fetch_assoc($tnils); ?>
      <tr>
        <td>&nbsp;3.  <? echo $tpbk2['nama_mp']; ?></td>
        <td><div align="center"><? echo $cnils['nil_eskl2']; ?></div></td>
        <td><div align="center">
          <? 
		if($cexk['nil_eskl2']=="A"){ echo"Sangat Baik"; }
		if($cexk['nil_eskl2']=="B"){ echo"Baik"; }
		if($cexk['nil_eskl2']=="C"){ echo"Cukup"; }
		if($cexk['nil_eskl2']=="D"){ echo"Kurang"; }
		 ?>
        </div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="48%" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
          <tr>
            <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td colspan="3" bgcolor="#FFFFFF"><div align="center">
                      <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
                        <tr>
                          <td bordercolor="#FFFFFF"><div align="center">Ketidak hadiran </div></td>
                        </tr>
                      </table>
                  </div></td>
                </tr>
                <tr>
                  <td width="31%">&nbsp;Sakit</td>
                  <td width="3%">:</td>
                  <td width="66%"><? if(empty($nck1)){ echo "-"; }else{ echo"$nck1"; } ?>
                    Hari</td>
                </tr>
                <tr>
                  <td>&nbsp;Izin</td>
                  <td>:</td>
                  <td><? if(empty($nck2)){ echo "-"; }else{ echo"$nck2";}  ?>
                    Hari</td>
                </tr>
                <tr>
                  <td>&nbsp;Tanpa Keterangan </td>
                  <td>:</td>
                  <td><? if(empty($nck3)){ echo "-"; }else{ echo"$nck3";}  ?>
                    Hari</td>
                </tr>
            </table></td>
          </tr>
        </table></td>
        <td width="4%">&nbsp;</td>
        <td width="48%">&nbsp;</td>
      </tr>
    </table></td>
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
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td colspan="4"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><div align="center"></div></td>
        <td>Mengetahui : </td>
        <td><div align="left">Pangkep,................................... 2017 </div></td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
        <td><div align="left">Orang Tua Wali</div></td>
        <td><div align="left">Wali Kelas</div></td>
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
        <td width="2%">&nbsp;</td>
        <td width="62%"><div align="center">
          <div align="center">
            <p align="left">(______________________________)</p>
          </div>
        </div></td>
        <td width="36%"><div align="center">
          <p align="left"><br />
            <?
		  
	$tampi=mysqli_query($koneksi, "SELECT * FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
    $tpk=mysqli_fetch_assoc($tampi);
	
	$tampi2=mysqli_query($koneksi, "SELECT * FROM wali_kelas WHERE kd_kls='$tpk[kd_kls]' ");
    $tpk3=mysqli_fetch_assoc($tampi2);
	
	$tampi4=mysqli_query($koneksi, "SELECT id_gp,nip,nama_gp FROM guru_pegawai WHERE id_gp='$tpk3[kd_gp]' ");
    $tpk4=mysqli_fetch_assoc($tampi4);
	
	echo $tpk4['nama_gp'];
	?><br />NIY : <? echo $tpk4['nip']; ?></p>
          </div></td>
      </tr>
    </table></td>
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
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td colspan="4" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="11%" height="95" valign="top"><img src="../images/LOGO-SHOID2.jpg" width="82" height="93" /></td>
        <td width="89%" valign="top"><div align="center">
            <p><span class="style3"><font size="2">YAYASAN 
              SHOHWATUL IS'AD</font></span><br />
                              <span class="style1"><font size="4">SMP 
                                IT SHOHWATUL IS'AD</font></span><br />
                                <br />
                                <span class="style6">NSS : 202190205004</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="style6">NPSN : 40314482</span><span class="style4"><br />
                                  Alamat: Jl. Poros Padanglampe&nbsp;KM . 3&nbsp;Ma'rang&nbsp;Pangkep&nbsp;Sulawesi -Selatan 90645 P.O. Box 300 <br />
                                  http://www.shohwatulisad.sch.id - e-mail : info@shohwatulisad.sch.id </span></p>
        </div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="4" valign="top"><HR /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td colspan="4"><div align="center" class="style5"><font size="3">LAPORAN HASIL BELAJAR SISWA </font></div></td>
  </tr>
  <tr>
    <td colspan="4"><div align="center"><font size="2">SEMESTER
      <? if($sem=='I') { echo "GANJIL"; }else{ echo"GENAP"; }?>
      TAHUN AJARAN <? echo $thaj; ?></font></div></td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  
  <tr>
    <td width="2%">&nbsp;</td>
    <td width="7%">NIS/NISN</td>
    <td colspan="2"><div align="left">: <? echo $ct['nis']." / ". $ct['nis_nasional']; ?></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>NAMA</td>
    <td colspan="2"><div align="left">: <? echo $ct['nama']; ?></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>KELAS</td>
    <td colspan="2"><div align="left">: <? echo $ct['kelas_st']; ?></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="350" colspan="4" valign="top"><table width="881" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td height="31" colspan="2" bgcolor="#FFFFFF"><div align="center"><strong>MATA PELAJARAN </strong></div></td>
        <td width="16%" bgcolor="#FFFFFF"><div align="center"><strong>KOMPETENSI</strong></div></td>
        <td width="55%" bgcolor="#FFFFFF"><div align="center"><strong>CATATAN</strong></div></td>
        </tr>
       <tr>
        <td colspan="2"> Kelompok A </td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
		
      <tr>
        <td width="3%" rowspan="3"><div align="center">1.</div>          <div align="center"></div>          <div align="center"></div></td>
        <td width="26%" rowspan="3">Pendidikan Agama dan Budi Pekerti </td>
        <td>Pengetahuan</td>
        <td>
		<?
 $ntgs=mysqli_query($koneksi, "SELECT * FROM  catatan_mapel WHERE kd_santri='$ct[id_santri]' and kelas='$ctk2[kd_kls]' and kd_mapel='MP005' and semester='$sem' and tahun_ajaran='$thaj' ");
 $cnt=mysqli_fetch_assoc($ntgs);
 echo $cnt['pengetahuan'];
		?>		</td>
        </tr>   
	  <tr>
        <td>Keterampilan</td>
        <td><? echo $cnt['keterampilan']; ?></td>
        </tr>
	  <tr>
	    <td>Sikap Spritual dan Sosial </td>
	    <td><? echo $cnt['sikap_spritual']; ?></td>
	    </tr>
	  <tr>
	    <td rowspan="3"><div align="center">2.</div>	      <div align="center"></div>	      <div align="center"></div></td>
	    <td rowspan="3">Pendidikan PancasIla dan Kewarganegaraan </td>
	    <td>Pengetahuan</td>
	    <td><?
 $ntgs=mysqli_query($koneksi, "SELECT * FROM  catatan_mapel WHERE kd_santri='$ct[id_santri]' and kelas='$ctk2[kd_kls]' and kd_mapel='MD013' and semester='$sem' and tahun_ajaran='$thaj' ");
 $cnt=mysqli_fetch_assoc($ntgs);
 echo $cnt['pengetahuan'];
		?></td>
	    </tr>
	  <tr>
	    <td>Keterampilan</td>
	    <td><? echo $cnt['keterampilan']; ?></td>
	    </tr>
	  <tr>
	    <td>Sikap Spritual dan Sosial </td>
	    <td><? echo $cnt['sikap_spritual']; ?></td>
	    </tr>
	  <tr>
	    <td rowspan="3"><div align="center">3.</div>	      <div align="center"></div>	      <div align="center"></div></td>
	    <td rowspan="3">Bahasa Indonesia </td>
	    <td>Pengetahuan</td>
	    <td><?
 $ntgs=mysqli_query($koneksi, "SELECT * FROM  catatan_mapel WHERE kd_santri='$ct[id_santri]' and kelas='$ctk2[kd_kls]' and kd_mapel='MD003' and semester='$sem' and tahun_ajaran='$thaj' ");
 $cnt=mysqli_fetch_assoc($ntgs);
 echo $cnt['pengetahuan'];
		?></td>
	    </tr>
	  <tr>
	    <td>Keterampilan</td>
	    <td><? echo $cnt['keterampilan']; ?></td>
	    </tr>
	  <tr>
	    <td>Sikap Spritual dan Sosial </td>
	    <td><? echo $cnt['sikap_spritual']; ?></td>
	    </tr>
	  <tr>
	    <td rowspan="3"><div align="center">4.</div></td>
	    <td rowspan="3">Matematika</td>
	    <td>Pengetahuan</td>
	    <td><?
 $ntgs=mysqli_query($koneksi, "SELECT * FROM  catatan_mapel WHERE kd_santri='$ct[id_santri]' and kelas='$ctk2[kd_kls]' and kd_mapel='MD005' and semester='$sem' and tahun_ajaran='$thaj' ");
 $cnt=mysqli_fetch_assoc($ntgs);
 echo $cnt['pengetahuan'];
		?></td>
	    </tr>
	  <tr>
	    <td>Keterampilan</td>
	    <td><? echo $cnt['keterampilan']; ?></td>
	    </tr>
	  <tr>
	    <td>Sikap Spritual dan Sosial </td>
	    <td><? echo $cnt['sikap_spritual']; ?></td>
	    </tr>
	  <tr>
	    <td rowspan="3"><div align="center">5.</div>	      <div align="center"></div>	      <div align="center"></div></td>
	    <td rowspan="3">Ilmu Pengetahuan Alam </td>
	    <td>Pengetahuan</td>
	    <td><?
 $ntgs=mysqli_query($koneksi, "SELECT * FROM  catatan_mapel WHERE kd_santri='$ct[id_santri]' and kelas='$ctk2[kd_kls]' and kd_mapel='MD006' and semester='$sem' and tahun_ajaran='$thaj' ");
 $cnt=mysqli_fetch_assoc($ntgs);
 echo $cnt['pengetahuan'];
		?></td>
	    </tr>
	  <tr>
	    <td>Keterampilan</td>
	    <td><? echo $cnt['keterampilan']; ?></td>
	    </tr>
	  <tr>
	    <td>Sikap Spritual dan Sosial </td>
	    <td><? echo $cnt['sikap_spritual']; ?></td>
	    </tr>
	  <tr>
	    <td rowspan="3"><div align="center">6.</div>	      <div align="center"></div>	      <div align="center"></div></td>
	    <td rowspan="3">Ilmu Pengetahuan Sosial </td>
	    <td>Pengetahuan</td>
	    <td><?
 $ntgs=mysqli_query($koneksi, "SELECT * FROM  catatan_mapel WHERE kd_santri='$ct[id_santri]' and kelas='$ctk2[kd_kls]' and kd_mapel='MD007' and semester='$sem' and tahun_ajaran='$thaj' ");
 $cnt=mysqli_fetch_assoc($ntgs);
 echo $cnt['pengetahuan'];
		?></td>
	    </tr>
	  <tr>
	    <td>Keterampilan</td>
	    <td><? echo $cnt['keterampilan']; ?></td>
	    </tr>
	  <tr>
	    <td>Sikap Spritual dan Sosial </td>
	    <td><? echo $cnt['sikap_spritual']; ?></td>
	    </tr>
	  <tr>
	    <td rowspan="3"><div align="center">7.</div>	      
	      <div align="center"></div></td>
	    <td rowspan="3">Bahasa Inggris </td>
	    <td>Pengetahuan</td>
	    <td><?
 $ntgs=mysqli_query($koneksi, "SELECT * FROM  catatan_mapel WHERE kd_santri='$ct[id_santri]' and kelas='$ctk2[kd_kls]' and kd_mapel='MD004' and semester='$sem' and tahun_ajaran='$thaj' ");
 $cnt=mysqli_fetch_assoc($ntgs);
 echo $cnt['pengetahuan'];
		?></td>
	    </tr>
	  <tr>
	    <td>Keterampilan</td>
	    <td><? echo $cnt['keterampilan']; ?></td>
	    </tr>
	  <tr>
	    <td>Sikap Spritual dan Sosial </td>
	    <td><? echo $cnt['sikap_spritual']; ?></td>
	    </tr>
	  <tr>
	    <td colspan="4">&nbsp;</td>
	    </tr>
	  <tr>
	    <td colspan="4">Kelompok B </td>
	    </tr>
	  <tr>
	    <td rowspan="4"><div align="center">8.</div>	      <div align="center"></div>	      <div align="center"></div></td>
	    <td rowspan="4">Seni Budaya </td>
	    <td>&nbsp;</td>
	    <td>&nbsp;</td>
	    </tr>
	  <tr>
	    <td>Pengetahuan</td>
	    <td>&nbsp;</td>
	    </tr>
	  <tr>
	    <td>Keterampilan</td>
	    <td>&nbsp;</td>
	    </tr>
	  <tr>
	    <td>Sikap Spritual dan Sosial </td>
	    <td>&nbsp;</td>
	    </tr>
	  <tr>
	    <td rowspan="3"><div align="center">9.</div>	      <div align="center"></div></td>
	    <td rowspan="3">Pendidikan Jasmani, Olah Raga, dan Kesehatan </td>
	    <td>Pengetahuan</td>
	    <td><?
 $ntgs=mysqli_query($koneksi, "SELECT * FROM  catatan_mapel WHERE kd_santri='$ct[id_santri]' and kelas='$ctk2[kd_kls]' and kd_mapel='MD009' and semester='$sem' and tahun_ajaran='$thaj' ");
 $cnt=mysqli_fetch_assoc($ntgs);
 echo $cnt['pengetahuan'];
		?></td>
	    </tr>
	  <tr>
	    <td>Keterampilan</td>
	    <td><? echo $cnt['keterampilan']; ?></td>
	    </tr>
	  <tr>
	    <td>Sikap Spritual dan Sosial </td>
	    <td><? echo $cnt['sikap_spritual']; ?></td>
	    </tr>
	  <tr>
	    <td rowspan="3"><div align="center">10.</div></td>
	    <td rowspan="3">Prakarya</td>
	    <td>Pengetahuan</td>
	    <td>&nbsp;</td>
	    </tr>
	  <tr>
	    <td>Keterampilan</td>
	    <td>&nbsp;</td>
	    </tr>
	  <tr>
	    <td>Sikap Spritual dan Sosial </td>
	    <td>&nbsp;</td>
	    </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td height="220" colspan="4" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
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
        <td>Mengetahui : </td>
        <td>Pangkep, ..................................... 2017 </td>
      </tr>
      <tr>
        <td><div align="left"></div></td>
        <td><div align="left">Orang Tua Wali </div></td>
        <td><div align="left">Wali Kelas </div></td>
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
        <td width="2%">&nbsp;</td>
        <td width="68%">&nbsp;</td>
        <td width="30%">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="left">(__________________________________)</div></td>
        <td>
          <div align="left">
            <?
		  
	$tampi=mysqli_query($koneksi, "SELECT * FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
    $tpk=mysqli_fetch_assoc($tampi);
	
	$tampi2=mysqli_query($koneksi, "SELECT * FROM wali_kelas WHERE kd_kls='$tpk[kd_kls]' ");
    $tpk3=mysqli_fetch_assoc($tampi2);
	
	$tampi4=mysqli_query($koneksi, "SELECT id_gp,nip,nama_gp FROM guru_pegawai WHERE id_gp='$tpk3[kd_gp]' ");
    $tpk4=mysqli_fetch_assoc($tampi4);
	
	echo $tpk4['nama_gp'];
	?> 
            <br />
          NIY : <? echo $tpk4['nip']; ?>            </div></td>
      </tr>
    </table></td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</body>
</html>
