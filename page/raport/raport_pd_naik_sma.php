<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style2 {font-size: 24px}
.style3 {font-size: 24px; font-family: "Courier New", Courier, monospace; }
.style1 {	font-size: 36px;
	font-weight: bold;
}
.style8 {font-size: 14px}
.style9 {font-size: 24px; font-weight: bold; }
.style10 {font-size: 9px}
-->
</style>
</head>
<?
include("../../koneksi.php");
 include("../../function.php");
 $klsk=$_GET['klsk'];
 $thaj=$_COOKIE['thaj'];
 $sem=$_COOKIE['sem'];
 $idstr=$_GET['idstr'];
?>
<body>
<table width="965" border="0">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="11%" height="95" valign="top"><img src="../../images/LOGO-SHOID2.jpg" width="105" height="109" /></td>
        <td width="89%" valign="top"><div align="center"><span class="style2">YAYASAN 
              SHOHWATUL IS'AD</span><br />
              <span class="style1">PPMI 
                                 SHOHWATUL IS'AD</span><br />
                                 <span class="style9">SMA IT SHOHWATUL IS'AD </span><br />
              <span class="style8"><br />
              Alamat: Jl. Poros Padanglampe&nbsp;KM . 3&nbsp;Ma'rang&nbsp;Pangkep&nbsp;Sulawesi -Selatan 90645 P.O. Box 300 <br />
http://www.shohwatulisad.com e-mail : shohwatulisad@gmail.com </span></div></td>
      </tr>
      <tr>
        <td height="1" colspan="2" valign="top" bgcolor="#000000"></td>
        </tr>
    </table></td>
  </tr>
  <tr>
      <?
	      $tmpkls=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st FROM tb_santri WHERE id_santri='$idstr' ");
          $ct=mysqli_fetch_assoc($tmpkls);
	   ?>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="31%"><? echo $ct['kelas_st']; ?></td>
        <td width="1%">:</td>
        <td width="16%"><div align="right"><img src="Copy (2) of Arab rapor.jpg" width="84" height="19" /></div></td>
        <td width="8%">&nbsp;</td>
        <td width="28%"><? echo $ct['nama']; ?></td>
        <td width="1%">:</td>
        <td width="15%"><div align="right" class="style3"><img src="Arab rapor.jpg" width="136" height="24" /></div></td>
      </tr>
      <tr>
        <td><font size="2"><? echo $thaj; ?></font></td>
        <td>:</td>
        <td><div align="right"><img src="Copy (3) of Arab rapor.jpg" width="125" height="18" /></div></td>
        <td>&nbsp;</td>
        <td><font size="2">
          <? if($sem=='I') { echo "GANJIL"; }else{ echo"GENAP"; }?>
        </font></td>
        <td>:</td>
        <td><div align="right"><img src="Copy of Arab rapor.jpg" width="134" height="19" /></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="right" class="style2"></div></td>
      </tr>
      
    </table></td>
  </tr>
  <tr>
    <td height="752"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td height="30" colspan="2"><div align="center">Nilai / <img src="Copy (7) of Arab rapor.jpg" width="38" height="21" align="absmiddle" /></div></td>
        <td width="7%"><div align="center"><img src="arab rapor 4.jpg" width="40" height="36" align="absmiddle" /></div></td>
        <td width="55%"><div align="center"><img src="Copy (4) of Arab rapor.jpg" width="101" height="25" /></div></td>
        <td width="4%" rowspan="3"><div align="center"><img src="Copy (6) of Arab rapor.jpg" width="23" height="49" /></div></td>
      </tr>
      <tr>
        <td width="17%"><div align="center"><img src="Copy (8) of Arab rapor.jpg" width="96" height="19" /></div></td>
        <td width="17%"><div align="center"><img src="Copy (18) of Arab rapor.jpg" width="51" height="17" /></div></td>
        <td rowspan="2"><div align="center">KKM</div></td>
        <td rowspan="2"><div align="center">Mata Pelajaran </div></td>
        </tr>
      <tr>
        <td><div align="center">Huruf</div></td>
        <td><div align="center">Angka</div></td>
        </tr>
      <tr>
        <td><div align="center">
          <?    $rtt=0; $j1=0; $j2=0; $j3=0; $j4=0; $j5=0; $j6=0; $j7=0; $j8=0; $j9=0; $j10=0; $j11=0; $j12=0; $j13=0; $j14=0; $j15=0; $j16=0; $j17=0; 
		  $tampi1=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP006' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk1=mysqli_fetch_assoc($tampi1); 
				 
		
				 
		$tampi3=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP005' and thn_ajaran='$thaj' and semester='$sem' ");
        $tpk3=mysqli_fetch_assoc($tampi3); 
				 
		$nagm=($tpk1['raport']+$tpk3['raport'])/2;
		 $j1=nagm;		 
				 		    
			
			if($nagm >=1){	 
			$a=angka_huruf($nagm); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MP006' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j1=$ck13['nir'];
		$a=angka_huruf($ck13['nir']); echo $a; 
			}
			 ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
		 echo $j1; 
		 
		 ?>
        </div></td>
        <td><div align="center">
          <? 
			 
			 /*  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB') { echo "65"; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB') { echo "70"; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB') { echo "75"; } */
			  if($ct['kelas_st']=='X') { echo $tpk3['kkm']; } { echo "75"; }
			   ?>
</div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Pendidikan Agama Islam </td>
            <td width="50%"><div align="right"><img src="Copy (9) of Arab rapor.jpg" width="120" height="25" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">1.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD013' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j2=$tpk['raport'];
		  
		  if($tpk['raport'] >=1){	 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD013' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j2=$ck13['nir'];
		$a=angka_huruf($ck13['nir']); echo $a; 
			}
		   ?>
        </div></td>
        <td><div align="center">
          <? 
		  echo $j2; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD013' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB') { echo $tpk3['kkm3']; }
			  if($ct['kelas_st']=='X') { echo $tpk3['kkm']; }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Pendidikan Kewarganegaraan </td>
            <td width="50%"><div align="right"><img src="Copy (19) of Arab rapor.jpg" width="113" height="19" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">2.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD003' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j3=$tpk['raport'];
		  
		  
		  if($tpk['raport'] >=1){	 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD003' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j3=$ck13['nir'];
		$a=angka_huruf($ck13['nir']); echo $a; 
			} 
		  
		  
		  ?>
        </div></td>
        <td><div align="center">
            <? 
		 	
	     
		  
		  echo $j3; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD003' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB') { echo $tpk3['kkm3']; } 
			  if($ct['kelas_st']=='X') { echo $tpk3['kkm']; }
			  
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Bahasa dan Sastra Indonesia </td>
            <td width="50%"><div align="right"><img src="Copy (20) of Arab rapor.jpg" width="166" height="21" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">3.</div></td>
      </tr>
      <tr>
        <td height="26"><div align="center">
            <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD004' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j4=$tpk['raport'];
		  
		  if($tpk['raport'] >=1){	 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD004' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j4=$ck13['nir'];
		$a=angka_huruf($ck13['nir']); echo $a; 
			} 
		   ?>
        </div></td>
        <td><div align="center">
            <? 
		 	
	      
		  
		  echo $j4; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD004' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB') { echo $tpk3['kkm3']; }
			  if($ct['kelas_st']=='X') { echo $tpk3['kkm']; } 
			  
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Bahasa Inggris </td>
            <td width="50%"><div align="right"><img src="Copy (21) of Arab rapor.jpg" width="112" height="17" align="absmiddle" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">4.</div></td>
      </tr>
      <tr>
        <td height="28"><div align="center">
            <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD005' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j5=$tpk['raport'];
		  
		  if($tpk['raport'] >=1){	 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD005' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j5=$ck13['nir'];
		$a=angka_huruf($ck13['nir']); echo $a; 
			} 
		   ?>
        </div></td>
        <td><div align="center">
            <? 
		 	
	      
		  
		  echo $j5; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD005' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB') { echo $tpk3['kkm3']; } 
			  if($ct['kelas_st']=='X') { echo $tpk3['kkm']; }
			  
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Matematika</td>
            <td width="50%"><div align="right"><img src="Copy (22) of Arab rapor.jpg" width="85" height="20" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">5.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <? 
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD020' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j6=$tpk['raport'];
		  
		  if($tpk['raport'] >=1){	 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD020' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j6=$ck13['nir'];
		$a=angka_huruf($ck13['nir']); echo $a; 
			}
		   ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	     
		  
		  echo $j6; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD020' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB') { echo $tpk3['kkm3']; } 
			  if($ct['kelas_st']=='X') { echo $tpk3['kkm']; }
			  
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Biologi</td>
            <td width="50%"><div align="right">&nbsp;&nbsp;</div></td>
          </tr>
        </table></td>
        <td><div align="center">6.</div></td>
      </tr>
      <tr>
        <td height="21"><div align="center">
          <? 
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD022' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j7=$tpk['raport'];
		  
		  if($tpk['raport'] >=1){	 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD022' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j7=$ck13['nir'];
		$a=angka_huruf($ck13['nir']); echo $a; 
			}
		   ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	     
		  
		  echo $j7; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD022' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB') { echo $tpk3['kkm3']; } 
			  if($ct['kelas_st']=='X') { echo $tpk3['kkm']; }
			  
			  ?>
        </div></td>
        <td> &nbsp;Fisika</td>
        <td><div align="center">7.</div></td>
      </tr>
      <tr>
        <td height="27"><div align="center">
          <? 
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD015' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j8=$tpk['raport'];
		  
		  if($tpk['raport'] >=1){	 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD015' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j8=$ck13['nir'];
		$a=angka_huruf($ck13['nir']); echo $a; 
			}
		   ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	     
		  
		  echo $j8; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD015' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB') { echo $tpk3['kkm3']; } 
			  if($ct['kelas_st']=='X') { echo $tpk3['kkm']; }
			  
			  ?>
        </div></td>
        <td>&nbsp;Kimia</td>
        <td><div align="center">8.</div></td>
      </tr>
      <tr>
        <td height="27"><div align="center">
          <? 
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD016' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j9=$tpk['raport'];
		  
		  if($tpk['raport'] >=1){	 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD016' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j9=$ck13['nir'];
		$a=angka_huruf($ck13['nir']); echo $a; 
			}
		   ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	     
		  
		  echo $j9; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD016' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB') { echo $tpk3['kkm3']; } 
			  if($ct['kelas_st']=='X') { echo $tpk3['kkm']; }
			  
			  ?>
        </div></td>
        <td>&nbsp;Ekonomi</td>
        <td><div align="center">9.</div></td>
      </tr>
      <tr>
        <td height="27"><div align="center">
          <? 
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD017' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j10=$tpk['raport'];
		  
		   if($tpk['raport'] >=1){	 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD017' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j10=$ck13['nir'];
		$a=angka_huruf($ck13['nir']); echo $a; 
			}
		   ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	     
		  
		  echo $j10; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD017' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB') { echo $tpk3['kkm3']; } 
			  if($ct['kelas_st']=='X') { echo $tpk3['kkm']; }
			  
			  ?>
        </div></td>
        <td>&nbsp;Geografi</td>
        <td><div align="center">10.</div></td>
      </tr>
      <tr>
        <td height="27"><div align="center">
          <? 
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD018' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j11=$tpk['raport'];
		  
		   if($tpk['raport'] >=1){	 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD018' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j11=$ck13['nir'];
		$a=angka_huruf($ck13['nir']); echo $a; 
			}
		   ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	     
		  
		  echo $j11; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD018' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB') { echo $tpk3['kkm3']; } 
			  if($ct['kelas_st']=='X') { echo $tpk3['kkm']; }
			  
			  ?>
        </div></td>
        <td>&nbsp;Sejarah</td>
        <td><div align="center">11.</div></td>
      </tr>
      <tr>
        <td height="27"><div align="center">
          <? 
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD019' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j12=$tpk['raport'];
		  
		  if($tpk['raport'] >=1){	 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD019' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j12=$ck13['nir'];
		$a=angka_huruf($ck13['nir']); echo $a; 
			}
		   ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	     
		  
		  echo $j12; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD019' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB') { echo $tpk3['kkm3']; } 
			  if($ct['kelas_st']=='X') { echo $tpk3['kkm']; }
			  
			  ?>
        </div></td>
        <td>&nbsp;Sosiologi</td>
        <td><div align="center">12.</div></td>
      </tr>
      
      <tr>
        <td><div align="center">
          <?
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD009' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j13=$tpk['raport'];
		  
		  if($tpk['raport'] >=1){	 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD009' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j13=$ck13['nir'];
		$a=angka_huruf($ck13['nir']); echo $a; 
			}
		   ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	      
		  
		  echo $j13; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD009' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB') { echo $tpk3['kkm3']; } 
			  if($ct['kelas_st']=='X') { echo $tpk3['kkm']; }
			  
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Pendidikan Jasmani dan Kesehatan </td>
            <td width="50%"><div align="right"><img src="Copy (26) of Arab rapor.jpg" width="73" height="20" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">13</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD010' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j14=$tpk['raport'];
		  
		  if($tpk['raport'] >=1){	 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD010' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j14=$ck13['nir'];
		$a=angka_huruf($ck13['nir']); echo $a; 
			}
		   ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	      
		  
		  echo $j14; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD010' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB') { echo $tpk3['kkm3']; } 
			  if($ct['kelas_st']=='X') { echo $tpk3['kkm']; }
			  
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Teknologi Informasi dan Komunikasi </td>
            <td width="50%"><div align="right"><img src="Copy of Arab rapor 2.jpg" width="132" height="46" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">14.</div></td>
      </tr>
      
      <tr>
        <td><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP001' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j15=$tpk['raport'];
		  $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
          <? 
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MP001' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB') { echo $tpk3['kkm3']; } 
			  if($ct['kelas_st']=='X') { echo $tpk3['kkm']; }
			  
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Membaca Al Qur'an/Tahfidz</td>
            <td width="50%"><div align="right"><img src="Copy (2) of Arab rapor 2.jpg" width="119" height="26" />&nbsp;&nbsp;&nbsp;</div></td>
          </tr>
        </table></td>
        <td><div align="center">15.</div></td>
      </tr>
      
      <tr>
        <td height="27"><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP003' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j16=$tpk['raport'];
		  $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	      
		  
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MP003' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB') { echo $tpk3['kkm3']; } 
			  if($ct['kelas_st']=='X') { echo $tpk3['kkm']; }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%" height="25">&nbsp;Bahasa Arab </td>
            <td width="50%"><div align="right"><img src="Copy (4) of Arab rapor 2.jpg" width="85" height="21" align="absmiddle" />&nbsp;&nbsp;</div></td>
          </tr>
        </table></td>
        <td><div align="center">16.</div></td>
      </tr>
      
      <tr>
        <td><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP005' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j17=$tpk['raport'];
		  $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	      
		  
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MP005' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			 /*  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB') { echo $tpk3['kkm3']; }  */
			  if($ct['kelas_st']=='X') { echo $tpk3['kkm']; }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Fiqh</td>
            <td width="50%"><div align="right"><img src="Copy (10) of Arab rapor 2.jpg" width="32" height="25" />&nbsp;&nbsp;&nbsp;</div></td>
          </tr>
        </table></td>
        <td><div align="center">17.</div></td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
        <td>&nbsp;</td>
        <td><div align="center"></div></td>
      </tr>
      
      <tr>
        <td colspan="5" bgcolor="#000000" height="1"><div align="center"></div></td>
        </tr>
      <tr>
        <td><div align="center"></div></td>
        <td><div align="center">
          <? 
		 	
	      $rtt=$j1+$j2+$j3+$j4+$j5+$j6+$j7+$j8+$j9+$j10+$j11+$j12+$j13+$j14+$j15+$j16+$j17; 
		  
		  echo $rtt; ?>
        </div></td>
        <td><div align="center"></div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%"> &nbsp;Jumlah</td>
            <td width="50%"><div align="right"><img src="Copy (2) of Arab rapor 3.jpg" width="72" height="33" /></div></td>
          </tr>
        </table></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
        <td><div align="center">
          <? 
			     /* if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB'){ $pbg=19;}
				 if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB'){ $pbg=19;}
				 if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB'){ $pbg=19;} */
				 $rt=$rtt/17;
				  
				 $p1=substr($rt,0,2);
				 $p2=substr($rt,3,2);
				 if($p2>=50){ echo $p1+1; }else{ echo $p1; }
				 
				   
			 // }
			  ?>
        </div></td>
        <td><div align="center"></div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Nilai Rata-rata </td>
            <td width="50%"><div align="right"><img src="Copy (3) of Arab rapor 3.jpg" width="94" height="32" /></div></td>
          </tr>
        </table></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
        <td><div align="center"><?
		$tmp=mysqli_query($koneksi, "SELECT * FROM tb_rangking WHERE nis='$ct[nis]' and thn_plj='$thaj' and sem_plj='$sem' ");
            $ct2=mysqli_fetch_assoc($tmp); // rangking
			echo $ct2['rangking'];
		
		?></div></td>
        <td><div align="center"></div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Peringkat</td>
            <td width="50%"><div align="right"><img src="Copy (4) of Arab rapor 3.jpg" width="53" height="28" /></div></td>
          </tr>
        </table></td>
        <td>&nbsp;</td>
      </tr>
      
    </table></td>
  </tr>
  <tr>
    <td height="149"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td width="34%"><div align="center">Keterangan</div></td>
        <td width="7%"><div align="center">Nilai</div></td>
        <td width="18%"><div align="center">Jenis Kegiatan </div></td>
        <td width="24%"><div align="center"><img src="b1.jpg" width="82" height="26" /></div></td>
        <td width="17%" rowspan="5"><div align="center">Pengembangan Diri <img src="Copy (3) of c1.JPG" width="89" height="27" /><br />
        </div></td>
      </tr>
      <tr>
        <td height="21"><div align="center">
          <? 
		         if($ct['kelas_st']=='IXA' || $ct['kelas_st']=='IXB'){ echo "-"; } 
				 if($ct['kelas_st']=='VIIA' || $ct['kelas_st']=='VIIB'){  echo "Baik"; } 
				 if($ct['kelas_st']=='VIIIA' || $ct['kelas_st']=='VIIIB'){ echo "Baik"; } 
		 ?>
        </div></td>
        <td><div align="center">
          <? 
		         if($ct['kelas_st']=='IXA' || $ct['kelas_st']=='IXB'){ echo "-"; } 
				 if($ct['kelas_st']=='VIIA' || $ct['kelas_st']=='VIIB'){ echo "B"; } 
				 if($ct['kelas_st']=='VIIIA' || $ct['kelas_st']=='VIIIB'){ echo "B"; } 
		 ?>
        </div></td>
        <td>1. Pramuka </td>
        <td><div align="right"><img src="b2.jpg" width="74" height="24" /></div></td>
        </tr>
      <tr>
        <td><div align="center">
          <? 
		         if($ct['kelas_st']=='IXA' || $ct['kelas_st']=='IXB'){ echo "Sangat Baik"; } 
				 if($ct['kelas_st']=='VIIA' || $ct['kelas_st']=='VIIB'){ echo "Baik"; } 
				 if($ct['kelas_st']=='VIIIA' || $ct['kelas_st']=='VIIIB'){ echo "Baik"; } 
		 ?>
        </div></td>
        <td><div align="center">
          <? 
		         if($ct['kelas_st']=='IXA' || $ct['kelas_st']=='IXB'){ echo "A"; } 
				 if($ct['kelas_st']=='VIIA' || $ct['kelas_st']=='VIIB'){ echo "B"; } 
				 if($ct['kelas_st']=='VIIIA' || $ct['kelas_st']=='VIIIB'){ echo "B"; } 
		 ?>
        </div></td>
        <td>2. Pidato Bahasa Indonesia </td>
        <td><div align="center"><img src="Copy (2) of c1.JPG" width="212" height="26" /></div></td>
        </tr>
      <tr>
        <td height="29"><div align="center">
          <? 
		         if($ct['kelas_st']=='IXA' || $ct['kelas_st']=='IXB'){ echo "Baik"; } 
				 if($ct['kelas_st']=='VIIA' || $ct['kelas_st']=='VIIB'){ echo "Baik"; } 
				 if($ct['kelas_st']=='VIIIA' || $ct['kelas_st']=='VIIIB'){ echo "Baik"; } 
		 ?>
        </div></td>
        <td><div align="center">
          <? 
		         if($ct['kelas_st']=='IXA' || $ct['kelas_st']=='IXB'){ echo "B"; } 
				 if($ct['kelas_st']=='VIIA' || $ct['kelas_st']=='VIIB'){ echo "B"; } 
				 if($ct['kelas_st']=='VIIIA' || $ct['kelas_st']=='VIIIB'){ echo "B"; } 
		 ?>
        </div></td>
        <td>3. Pidato Bahasa Inggris </td>
        <td><div align="right"><img src="b4.jpg" width="182" height="21" align="absmiddle" />&nbsp;</div></td>
        </tr>
      <tr>
        <td height="34"><div align="center">
          <? 
		         if($ct['kelas_st']=='IXA' || $ct['kelas_st']=='IXB'){ echo "Baik"; } 
				 if($ct['kelas_st']=='VIIA' || $ct['kelas_st']=='VIIB'){ echo "Baik"; } 
				 if($ct['kelas_st']=='VIIIA' || $ct['kelas_st']=='VIIIB'){ echo "Baik"; } 
		 ?>
        </div></td>
        <td><div align="center">
          <? 
		         if($ct['kelas_st']=='IXA' || $ct['kelas_st']=='IXB'){ echo "B"; } 
				 if($ct['kelas_st']=='VIIA' || $ct['kelas_st']=='VIIB'){ echo "B"; } 
				 if($ct['kelas_st']=='VIIIA' || $ct['kelas_st']=='VIIIB'){ echo "B"; } 
		 ?>
        </div></td>
        <td>4. Pidato Bahasa Arab </td>
        <td><div align="right"><img src="b5.jpg" width="174" height="32" /></div></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td><div align="center">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="67%"><div align="left"><img src="untitled.JPG" width="647" height="97" /></div></td>
          <td width="1%">&nbsp;</td>
          <td width="32%" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
              <tr>
                <td><span class="style10"><span class="style8">Keputusan :<br />
                  Berdasarkan hasil yang dicapai pada semester 1 dan 2 maka<br />
                  peserta didik ditetapkan<br />
                  naik ke kelas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;............(....................)<br />
                  Tinggal di Kelas ............(....................)</span><br />
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
              </tr>
          </table></td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><div align="center"><img src="ttd1.jpg" width="67" height="28" /></div></td>
        <td>&nbsp;</td>
        <td><div align="center"><img src="ttd2.jpg" width="75" height="28" /></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center">
	<?
	$tampi=mysqli_query($koneksi, "SELECT * FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
    $tpk=mysqli_fetch_assoc($tampi);
	
	$tampi2=mysqli_query($koneksi, "SELECT * FROM wali_kelas WHERE kd_kls='$tpk[kd_kls]' ");
    $tpk3=mysqli_fetch_assoc($tampi2);
	
	$tampi4=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$tpk3[kd_gp]' ");
    $tpk4=mysqli_fetch_assoc($tampi4);
	
	?>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><div align="center"></div></td>
        </tr>
        <tr>
          <td width="47%"><div align="center">__________________</div></td>
          <td width="5%">&nbsp;</td>
          <td width="48%"><div align="center"><? echo $tpk4['nama_gp']; ?></div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>
</body>
</html>
