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
.style9 {font-size: 9px}
.style10 {
	font-size: 18px;
	font-weight: bold;
}
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
              <br />
              <span class="style8">NSS : 202190205004&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NPSN : 40314482<br />
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
        <td colspan="7" height="5"></td>
      </tr>
      <tr>
        <td colspan="7" bgcolor="#CCCCCC"><div align="center" class="style10">R A P O R T&nbsp;&nbsp; P O N D O K </div></td>
      </tr>
      <tr>
        <td colspan="7" height="10"><div align="center"></div></td>
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
          <? if($sem=='I') { echo "GANJIL"; }else{ echo"GENAP"; }?></font></td>
        <td>:</td>
        <td><div align="right"><img src="Copy of Arab rapor.jpg" width="134" height="19" /></div></td>
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
          <?    $rtt=0; $j1=0; $j2=0; $j3=0; $j4=0; $j5=0; $j6=0; $j7=0; $j8=0; $j9=0; $j10=0; $j11=0; $j12=0; $j13=0; $j14=0; $j15=0; $j16=0; $j17=0; $j18=0; $j19=0; $j20=0; $j21=0; $j22=0;
		         $tampi1=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP006' and thn_ajaran='$thaj' and semester='$sem' ");
                 $tpk1=mysqli_fetch_assoc($tampi1); 
				 
				 $p1=substr($tpk1['raport'],0,2);
				 $p2=substr($tpk1['raport'],3,2);
				 
				 //echo $tpk1['raport'];
		         $nl_fiqi=$tpk1['raport'];  
		
		
		         $tampi1=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP006' and thn_ajaran='$thaj' and semester='$sem' ");
                 $tpk1=mysqli_fetch_assoc($tampi1); 
				 
				 $p1=substr($tpk1['raport'],0,2);
				 $p2=substr($tpk1['raport'],3,2);
				 //echo $tpk1['raport'];
		         $nl_aqidah=$tpk1['raport'];
				 $j1=$nl_fiqi;
			if($nl_fiqi >=1){	 
			$a=angka_huruf($nl_fiqi); echo $a; 
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
		 	
		         //$j1=ceil(($nl_fiqi+$nl_aqidah)/2);
				 echo $j1; 
				
		 
		
		 
		 ?>
        </div></td>
        <td><div align="center">
          <? 
			 
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo "75"; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='VIIID') { echo "78"; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='IXD') { echo "80"; }
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
			  
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='VIIID') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='IXD') { echo $tpk3['kkm3']; }
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
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='VIIID') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='IXD') { echo $tpk3['kkm3']; } 
			  
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
			 if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='VIIID') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='IXD') { echo $tpk3['kkm3']; }
			  
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
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='VIIID') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='IXD') { echo $tpk3['kkm3']; } 
			  
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
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD006' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j6=$tpk['raport'];
		  
		  
		  if($tpk['raport'] >=1){	 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD006' and tahun_ajaran='$thaj' 
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
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD006' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='VIIID') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='IXD') { echo $tpk3['kkm3']; } 
			  
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Ilmu Pengetahuan Alam </td>
            <td width="50%"><div align="right"><img src="Copy (23) of Arab rapor.jpg" width="84" height="20" />&nbsp;&nbsp;</div></td>
          </tr>
        </table></td>
        <td><div align="center">6.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <? 
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD007' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j7=$tpk['raport'];
		  
		  if($tpk['raport'] >=1){	 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD007' and tahun_ajaran='$thaj' 
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
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD007' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='VIIID') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='IXD') { echo $tpk3['kkm3']; }
			  
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Ilmu Pengetahuan Sosial </td>
            <td width="50%"><div align="right"><img src="Copy (24) of Arab rapor.jpg" width="117" height="25" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">7.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD012' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j8=$tpk['raport'];
		  
		  if($tpk['raport'] >=1){	 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD012' and tahun_ajaran='$thaj' 
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
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD012' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			 if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='VIIID') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='IXD') { echo $tpk3['kkm3']; }
			  
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Ilmu Seni Budaya/Kaligrafi </td>
            <td width="50%"><div align="right"><img src="Copy (25) of Arab rapor.jpg" width="90" height="18" />&nbsp;&nbsp;</div></td>
          </tr>
        </table></td>
        <td><div align="center">8.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <?
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD009' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j9=$tpk['raport'];
		   
		   if($tpk['raport'] >=1){	 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD009' and tahun_ajaran='$thaj' 
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
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD009' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			 if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='VIIID') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='IXD') { echo $tpk3['kkm3']; }
			  
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Pendidikan Jasmani dan Kesehatan </td>
            <td width="50%"><div align="right"><img src="Copy (26) of Arab rapor.jpg" width="73" height="20" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">9.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD010' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j10=$tpk['raport'];
		  
		  if($tpk['raport'] >=1){	 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD010' and tahun_ajaran='$thaj' 
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
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD010' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='VIIID') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='IXD') { echo $tpk3['kkm3']; }
			  
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Teknologi Informasi dan Komunikasi </td>
            <td width="50%"><div align="right"><img src="Copy of Arab rapor 2.jpg" width="132" height="46" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">10.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD011' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j11=$tpk['raport'];
		  
		  if($tpk['raport'] >=1){	 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD011' and tahun_ajaran='$thaj' 
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
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD011' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='VIIID') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='IXD') { echo $tpk3['kkm3']; }
			  
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Kewirausahaan dan Agrobisnis </td>
            <td width="50%"><div align="right"><img src="agrobisnis.JPG" width="236" height="27" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">11.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <? 
		 
		  
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP014' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j12=$tpk['raport'];
		  
		  if($tpk['raport'] >=1){	 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MP014' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j12=$ck13['nir'];
		$a=angka_huruf($ck13['nir']); echo $a; } ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	      
		  if($tpk['raport']!="0"){
		  echo $tpk['raport'];} ?>
        </div></td>
        <td><div align="center">
          <?  if($tpk['raport']!=""){
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MP014' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='VIIID') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='IXD') { echo $tpk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Membaca Al Qur'an/Tajwid </td>
            <td width="50%"><div align="right"><img src="Copy (2) of Arab rapor 2.jpg" width="119" height="26" />&nbsp;&nbsp;&nbsp;</div></td>
          </tr>
        </table></td>
        <td><div align="center">12.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP001' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j13=$tpk['raport'];
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
			 if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='VIIID') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='IXD') { echo $tpk3['kkm3']; }
			  
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;
              Menghafal Al Qur'an </td>
            <td width="50%"><div align="right"><img src="Copy (3) of Arab rapor 2.jpg" width="76" height="19" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">13.</div></td>
      </tr>
      <tr>
        <td height="27"><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP003' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j14=$tpk['raport'];
		  
		  if($tpk['raport'] >=1){	 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MP003' and tahun_ajaran='$thaj' 
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
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MP003' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			 if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='VIIID') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='IXD') { echo $tpk3['kkm3']; }
			  
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%" height="25">&nbsp;Bahasa Arab </td>
            <td width="50%"><div align="right"><img src="Copy (4) of Arab rapor 2.jpg" width="85" height="21" align="absmiddle" />&nbsp;&nbsp;</div></td>
          </tr>
        </table></td>
        <td><div align="center">14.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP004' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j15=$tpk['raport'];
		  $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	      
		  
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
          <?  if($tpk['raport']!=""){
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MP004' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='VIIID') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='IXD') { echo $tpk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Dikte Bahasa Arab </td>
            <td width="50%"><div align="right"><img src="Copy (5) of Arab rapor 2.jpg" width="59" height="26" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">15.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP009' and thn_ajaran='$thaj' and semester='$sem' ");
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
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MP009' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			 if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='VIIID') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='IXD') { echo $tpk3['kkm3']; }
			  
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Nahwu</td>
            <td width="50%"><div align="right"><img src="Copy (6) of Arab rapor 2.jpg" width="52" height="26" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">16.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP010' and thn_ajaran='$thaj' and semester='$sem' ");
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
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MP010' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			 if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='VIIID') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='IXD') { echo $tpk3['kkm3']; }
			  
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Shorof</td>
            <td width="50%"><div align="right"><img src="Copy (7) of Arab rapor 2.jpg" width="75" height="23" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">17.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP008' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j18=$tpk['raport'];
		  $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	      
		  
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MP008' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			 if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='VIIID') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='IXD') { echo $tpk3['kkm3']; }
			  
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;&nbsp;Muhadatsah</td>
            <td width="50%"><div align="right"><img src="muhadazah.jpg" width="52" height="20" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">18.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP006' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j19=$tpk['raport'];
		  
		   if($tpk['raport'] >=1){	 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MP006' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j19=$ck13['nir'];
		$a=angka_huruf($ck13['nir']); echo $a; 
			} 
		   ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	      
		  
		  echo $j19; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MP006' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			 if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='VIIID') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='IXD') { echo $tpk3['kkm3']; }
			  
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Aqidah Akhlaq </td>
            <td width="50%"><div align="right"><img src="Copy (9) of Arab rapor 2.jpg" width="103" height="22" />&nbsp;</div></td>
          </tr>
        </table></td>
        <td><div align="center">19.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP005' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j20=$tpk['raport'];
		  $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	      
		  
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
          <?   if($tpk['raport']!=""){
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MP005' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			 if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='VIIID') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='IXD') { echo $tpk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Fiqh</td>
            <td width="50%"><div align="right"><img src="Copy (10) of Arab rapor 2.jpg" width="32" height="25" />&nbsp;&nbsp;&nbsp;</div></td>
          </tr>
        </table></td>
        <td><div align="center">20.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP007' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j21=$tpk['raport'];
		  $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	      
		  
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
          <?  if($tpk['raport']!=""){
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MP007' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='VIIID') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='IXD') { echo $tpk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Sejarah Kebudayaan Islam </td>
            <td width="50%"><div align="right"><img src="Copy (11) of Arab rapor 2.jpg" width="142" height="26" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">21.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP013' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j22=$tpk['raport'];
		  $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	      
		  
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
          <?  if($tpk['raport']!=""){
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MP013' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='VIIID') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='IXD') { echo $tpk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Qira'atul Kutub </td>
            <td width="50%"><div align="right"><img src="Copy of Arab rapor 3.jpg" width="86" height="25" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">22.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP022' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j23=$tpk['raport'];
		  $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	      
		  
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
          <?  if($tpk['raport']!=""){
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MP022' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='VIIID') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='IXD') { echo $tpk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Tafsir</td>
            <td width="50%"><div align="right"><img src="tafsir.jpg" width="54" height="28" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">23.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP020' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j24=$tpk['raport'];
		  $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	      
		  
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
          <?  if($tpk['raport']!=""){
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MP020' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='VIIID') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='IXD') { echo $tpk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Mahfudhot</td>
            <td width="50%"><div align="right"><img src="Copy (8) of Arab rapor 2.jpg" width="86" height="23" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">24.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP004' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j25=$tpk['raport'];
		  $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	      
		  
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
          <?  if($tpk['raport']!=""){
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MP004' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='VIIID') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='IXD') { echo $tpk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Imla'</td>
            <td width="50%"><div align="right"><img src="Copy (5) of Arab rapor 2.jpg" width="59" height="26" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">25.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP011' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j26=$tpk['raport'];
		  $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	      
		  
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
          <?  if($tpk['raport']!=""){
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MP011' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='VIIID') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='IXD') { echo $tpk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Hadist</td>
            <td width="50%"><div align="right"><img src="hadits.png" width="65" height="22" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">26.</div></td>
      </tr>
      <tr>
        <td colspan="5" bgcolor="#000000" height="1"><div align="center"></div></td>
        </tr>
      <tr>
        <td><div align="center"></div></td>
        <td><div align="center">
          <? 
		 	
	      $rtt=$j1+$j2+$j3+$j4+$j5+$j6+$j7+$j8+$j9+$j10+$j11+$j12+$j13+$j14+$j15+$j16+$j17+$j18+$j19+$j20+$j21+$j22+$j23+$j24+$j25+$j26; 
		  
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
			      if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID'){ $pbg=17;}
				 if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='VIIID'){ $pbg=17;}
				 if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC'){ $pbg=19;} 
				 $rt=$rtt/$pbg;
				  
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
      
      
    </table></td>
  </tr>
  <?
            $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ext WHERE kd_santri='$ct[nis]' and kelas='$ct[kelas_st]' and thn_ajar='$thaj' and semester='$sem' and hafalan_qr!='' ORDER BY id_ext DESC");
            $chq=mysqli_fetch_assoc($ktr);  
			
			?>
  <tr>
    <td height="133"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
        <tr>
          <td height="33"><div align="center"><? echo $chq['hafalan_qr']; ?></div></td>
          <td colspan="3"><div align="center">Capaian Hafalan </div></td>
          <td width="17%" rowspan="4"><div align="center">Pengembangan Diri <img src="Copy (3) of c1.JPG" width="89" height="27" /><br />
          </div></td>
        </tr>
        <tr>
        <td width="34%" bgcolor="#CCCCCC"><div align="center">Keterangan</div></td>
        <td width="7%" bgcolor="#CCCCCC"><div align="center">Nilai</div></td>
        <td width="18%" bgcolor="#CCCCCC"><div align="center">Jenis Kegiatan </div></td>
        <td width="24%" bgcolor="#CCCCCC"><div align="center"><img src="b1.jpg" width="82" height="26" /></div></td>
        </tr>
      <?
	  $pbk=mysqli_query($koneksi, "SELECT * FROM tb_pbakat WHERE kd_santri='$ct[id_santri]'  ");
          $tpbk=mysqli_fetch_assoc($pbk); 
		  
		  $pbk1=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='$tpbk[kd_mp]'  ");
          $tpbk1=mysqli_fetch_assoc($pbk1);
		  
		  $tnils=mysqli_query($koneksi, "SELECT * FROM tb_nilai_eskul WHERE thn_eskl='$thaj' AND sms_eskl='$sem' AND nis_eskl='$ct[nis]' AND 
		                      kls_eskl='$ct[kelas_st]' AND kd_eskl1='$tpbk1[kd_mp]'   ");
        $cnils=mysqli_fetch_assoc($tnils);
	  ?>
      <tr>
        <td height="34"><div align="center"><? echo $tpbk1['nama_mp']; ?></div></td>
        <td><div align="center"><? echo $cnils['nil_eskl1']; ?></div></td>
        <td><div align="left">Ekstrakurikuler Pilihan 1 </div></td>
        <td><div align="right"><img src="extrakur_pil1.jpg" width="176" height="22" /></div></td>
        </tr>
		<?
	   	  $pbk=mysqli_query($koneksi, "SELECT * FROM tb_pbakat WHERE kd_santri='$ct[id_santri]' limit 1,1 ");
          $tpbk=mysqli_fetch_assoc($pbk); 
		  
		  $pbk2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='$tpbk[kd_mp]'  ");
          $tpbk2=mysqli_fetch_assoc($pbk2);
		  
		  $tnils=mysqli_query($koneksi, "SELECT * FROM tb_nilai_eskul WHERE thn_eskl='$thaj' AND sms_eskl='$sem' AND nis_eskl='$ct[nis]' AND 
		                       kls_eskl='$ct[kelas_st]' AND kd_eskl2='$tpbk2[kd_mp]'  ");
        $cnils=mysqli_fetch_assoc($tnils);
	  ?>
      <tr>
        <td height="34"><div align="center"><? echo $tpbk2['nama_mp']; ?></div></td>
        <td><div align="center"><? echo $cnils['nil_eskl2']; ?></div></td>
        <td><div align="left">Ekstrakurikuler Pilihan 2 </div></td>
        <td><div align="right"><img src="extrakur_pil2.jpg" width="185" height="23" /></div></td>
        </tr>
      
    </table></td>
  </tr>
  <tr>
    <td><? if($ct['kelas_st']=='IXA' || $ct['kelas_st']=='IXB' || $ct['kelas_st']=='IXC' || $ct['kelas_st']=='IXD'){?><div align="center">
      <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
        <tr>
          <td width="83%" bgcolor="#CCCCCC"><div align="center">Judul Karya Tulis Ilmiah (KTI) </div></td>
          <td width="17%" bgcolor="#CCCCCC"> <div align="center">Nilai </div></td>
        </tr>
		<?
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kti WHERE id_santri=$ct[id_santri] and semester='$sem' and thn_ajaran='$thaj'  ");
	    $cnt=mysqli_fetch_assoc($ntgs);
		?>
        <tr>
          <td height="33"><div align="justify">
            <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td><? echo $cnt['judul'];  ?></td>
              </tr>
            </table>
          </div></td>
          <td><div align="center"><? echo $cnt['nilai'];  ?></div></td>
        </tr>
      </table>
    </div><? } ?></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="67%"><div align="left"><img src="untitled.JPG" width="647" height="97" /></div></td>
        <td width="1%">&nbsp;</td>
        <td width="32%" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
          <tr>
            <td><span class="style9"><span class="style8">Keputusan :<br />
Berdasarkan hasil yang dicapai pada semester 1 dan 2 maka<br />
peserta didik ditetapkan<br />
Lulus &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;............(....................)<br />
Tidak Lulus ............(....................)</span><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="49%"><div align="center"><img src="ttd1.jpg" width="67" height="28" /></div></td>
        <td width="11%">&nbsp;</td>
        <td width="40%"><div align="center"><img src="ttd2.jpg" width="75" height="28" /></div></td>
      </tr>
    </table></td>
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
	
	$tampil5=mysqli_query($koneksi, "SELECT * FROM wali_kelas WHERE kd_gp='$tpk3[kd_gp]' ");
    $tp4=mysqli_fetch_assoc($tampil5);
	
	?>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="49%" valign="bottom">&nbsp;&nbsp;&nbsp;<div align="center">__________________</div></td>
          <td width="11%">&nbsp;</td>
          <td width="40%"><div align="center">
            <? if(!empty($tp4['ttd'])){ ?>
            <img src="<? echo "$tp4[ttd]"; ?>" height="90" width="130" />
            <? }else{ ?> &nbsp;&nbsp;&nbsp;&nbsp; <? } ?>
</div>
          <div align="center"><? echo $tpk4['nama_gp']; ?></div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>
</body>
</html>
