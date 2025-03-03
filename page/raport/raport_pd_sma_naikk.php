<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style2 {font-size: 24px}
.style3 {font-size: 24px; font-family: "Courier New", Courier, monospace; }
.style8 {font-size: 14px}
.style9 {font-size: 24px; font-weight: bold; }
.style10 {font-size: 18px}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style12 {	font-size: 18px;
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
        <td width="89%" valign="top"><div align="center"><span class="style10">YAYASAN 
              SHOHWATUL IS'AD</span><br />
              <span class="style9 style2">PPMI 
                                 SHOHWATUL IS'AD</span><br />
                                 <span class="style10">SMA IT SHOHWATUL IS'AD </span><br />
              <span class="style8"><br />
Alamat: Jl. Poros Padanglampe&nbsp;KM . 3&nbsp;Ma'rang&nbsp;Pangkep&nbsp;Sulawesi -Selatan Hp. 081242518637 <br />
http://www.shohwatulisad.sch.id e-mail : info@shohwatulisad.sch.id </span></div></td>
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
		  
		   $tmpkls2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
          $ctk2=mysqli_fetch_assoc($tmpkls2);
	   ?>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
      
      <tr>
        <td colspan="7" bgcolor="#CCCCCC"><div align="center"><span class="style12">R A P O R T&nbsp;&nbsp; P O N D O K </span></div></td>
        </tr>
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
        <td colspan="7" height="3"></td>
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
		        $j18=0; $j19=0; $j20=0; $j21=0; $j22=0;  $j23=0; $j24=0; $j25=0; $j26=0; $j27=0;
		        
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP006' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk1=mysqli_fetch_assoc($tampi); 
		  
		  $j1=$tpk1['raport'];
		  if($j1 >=1){ $tn1=1; }
		  
		  if($nl_pai >=1){	 
		  $tn=1;  
			$a=angka_huruf($j1); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MP006' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j1=$ck13['nir'];
		$tn=1; 
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
		$ntu3=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MP006'");
	    $ctk3=mysqli_fetch_assoc($ntu3);
		
		if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC') { echo $ctk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC') { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB')  { echo $ctk3['kkm3']; }
		 
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
		  $tn2=1;  
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD013' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j2=$ck13['nir'];
		if($j2 >=1){ $tn2=1; }
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
			  if($j2 >=1){
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC') { echo $ctk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC') { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB')  { echo $ctk3['kkm3']; }
			  }
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
		  $tn3=1;
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD003' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j3=$ck13['nir'];
		if($j3 >=1){ $tn3=1; }
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
			  if($j3 >=1){
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC') { echo $ctk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC') { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB')  { echo $ctk3['kkm3']; }
			  }
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
		   $tn4=1;  
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD004' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j4=$ck13['nir'];
		 if($j4 >=1){ $tn4=1; }
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
			  if($j4 >=1){
			 if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC') { echo $ctk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC') { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB')  { echo $ctk3['kkm3']; }
			  }
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
		   $tn5=1;  
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD005' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j5=$ck13['nir'];
		 if($j5 >=1){ $tn5=1; }
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
			  if($j5 >=1){
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC') { echo $ctk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC') { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB')  { echo $ctk3['kkm3']; }
			  }
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
		  $tn6=1;
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD020' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j6=$ck13['nir'];
		if($j6 >=1){ $tn6=1; }
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
			  if($j6 >=1){
			 if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC') { echo $ctk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC') { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%" height="26">&nbsp;Biologi</td>
            <td width="50%"><div align="right"><img src="biologi.jpg" width="74" height="22" />&nbsp;&nbsp;</div></td>
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
		  $tn7=1; 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD022' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j7=$ck13['nir'];
		if($j7 >=1){ $tn7=1; } 
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
			  if($j7 >=1){
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC') { echo $ctk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC') { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%" height="26"> &nbsp;Fisika</td>
            <td width="50%"><div align="right"><img src="fisika.jpg" width="57" height="26" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">7.</div></td>
      </tr>
      <tr>
        <td height="27"><div align="center">
            <? 
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD015' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j8=$tpk['raport'];
		  
		  
		  if($tpk['raport'] >=1){	 
		   $tn8=1; 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD015' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j8=$ck13['nir'];
		 if($j8 >=1){ $tn8=1; }
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
			  if($j8 >=1){
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC') { echo $ctk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC') { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%" height="26">&nbsp;Kimia</td>
            <td width="50%"><div align="right"><img src="kimia.jpg" width="53" height="24" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">8.</div></td>
      </tr>
      <tr>
        <td height="27"><div align="center">
            <? 
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD016' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j9=$tpk['raport'];
		   
		  
		  if($tpk['raport'] >=1){	 
		  $tn9=1; 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD016' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j9=$ck13['nir'];
		if($j9 >=1){ $tn9=1; }
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
			  if($j9 >=1){
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC') { echo $ctk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC') { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%" height="26">&nbsp;Ekonomi</td>
            <td width="50%"><div align="right"><img src="ekonomi.jpg" width="110" height="28" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">9.</div></td>
      </tr>
      <tr>
        <td height="27"><div align="center">
            <? 
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD017' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j10=$tpk['raport'];
		 
		  
		   if($tpk['raport'] >=1){	
		    $tn10=1;  
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD017' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j10=$ck13['nir'];
		if($j10 >=1){ $tn10=1; }
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
			  if($j10 >=1){
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC') { echo $ctk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC') { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%" height="26">&nbsp;Geografi</td>
            <td width="50%"><div align="right"><img src="geografi.jpg" width="71" height="26" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">10.</div></td>
      </tr>
      <tr>
        <td height="27"><div align="center">
          <? 
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD023' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ctk2[kd_kls]'");
          $tpk=mysqli_fetch_assoc($tampi);
		  
		   if($tpk['raport'] >=1){	
		  $tn11=1;
		    $j11=$tpk['raport']; 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD023' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j11=$ck13['nir'];
		if($j11 >=1){ $tn11=1; }  
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
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD023' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($j11 >=1){
		if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC') { echo $ctk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC') { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%" height="26">&nbsp;Sejarah Indonesia </td>
            <td width="50%"><div align="right"><img src="sejarah.jpg" width="57" height="27" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">11.</div></td>
      </tr>
      <tr>
        <td height="27"><div align="center">
            <? 
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD019' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j12=$tpk['raport'];
		    
		  
		  if($tpk['raport'] >=1){	 
		  $tn12=1;
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD019' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j12=$ck13['nir'];
		if($j12 >=1){ $tn12=1; }
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
			  if($j12 >=1){
			 if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC') { echo $ctk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC') { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%" height="26">&nbsp;Sosiologi</td>
            <td width="50%"><div align="right"><img src="sosiologi.jpg" width="112" height="25" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">12.</div></td>
      </tr>
      
      <tr>
        <td><div align="center">
            <?
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD009' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j13=$tpk['raport'];
		  
		  
		  if($tpk['raport'] >=1){	 
		   $tn13=1; 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD009' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j13=$ck13['nir'];
		if($j13 >=1){ $tn13=1; }
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
			  if($j13 >=1){
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC') { echo $ctk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC') { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Pendidikan Jasmani dan Kesehatan </td>
            <td width="50%"><div align="right"><img src="Copy (26) of Arab rapor.jpg" width="73" height="20" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">13.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP019' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j14=$tpk['raport'];
		  
		  
		   if($tpk['raport'] >=1){	 
		    $tn14=1; 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MP019' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j14=$ck13['nir'];
		 if($j14 >=1){ $tn14=1; }
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
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MP019' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($j14 >=1){
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC') { echo $ctk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC') { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Composition</td>
            <td width="50%"><div align="right"><img src="coposition.jpg" width="98" height="24" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">14.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD010' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j15=$tpk['raport'];
		
		  
		  if($tpk['raport'] >=1){	 
		    $tn15=1; 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD010' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j15=$ck13['nir'];
		 if($j15 >=1){ $tn15=1; }
		$a=angka_huruf($ck13['nir']); echo $a; 
			}
		   ?>
        </div></td>
        <td><div align="center">
            <? 
		 	
	      
		  
		  echo $j15; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD010' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($j15 >=1){
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC') { echo $ctk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC') { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Teknologi Informasi dan Komunikasi </td>
            <td width="50%"><div align="right"><img src="Copy of Arab rapor 2.jpg" width="132" height="46" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">15.</div></td>
      </tr>
      
      <tr>
        <td><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD011' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j16=$tpk['raport'];
		  
		  
		  if($tpk['raport'] >=1){	
		   $tn16=1; 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD011' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j16=$ck13['nir'];
		if($j16 >=1){ $tn16=1; }
		$a=angka_huruf($ck13['nir']); echo $a; 
			}
		   ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	      
		  
		  echo $j16; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD011' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($j16 >=1){
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC') { echo $ctk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC') { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Kewirausahaan dan Agrobisnis </td>
            <td width="50%"><div align="right"><img src="agrobisnis_kewirausahaan.jpg" width="201" height="21" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">16.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP001' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j17=$tpk['raport'];
		  if($j17 >=1){ $tn17=1; }
		  $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
          <? 
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MP014' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($j17 >=1){
			 if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC') { echo $ctk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC') { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Membaca Al Qur'an/Tajwid</td>
            <td width="50%"><div align="right"><img src="Copy (2) of Arab rapor 2.jpg" width="119" height="26" />&nbsp;&nbsp;&nbsp;</div></td>
          </tr>
        </table></td>
        <td><div align="center">17.</div></td>
      </tr>
      
      <tr>
        <td height="27"><div align="center">
          <? 
		  
	/*	   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP001' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ctk2[kd_kls]'");
          $tpk=mysqli_fetch_assoc($tampi);
		  
		   if($tpk['raport'] >=1){	
		  $tn18=1;
		    $j18=$tpk['raport']; 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{ */
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MP001' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j18=$ck13['nir'];
		if($j18 >=1){ $tn18=1; }  
		$a=angka_huruf($ck13['nir']); echo $a; 
		//	}  
		   ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	      
		  
		  echo $j18; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MP001' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($j18 >=1){
		if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC') { echo $ctk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC') { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Menghafal Al Qur'an / Tahfidz </td>
            <td width="50%"><div align="right"><img src="Copy (3) of Arab rapor 2.jpg" width="76" height="19" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">18.</div></td>
      </tr>
      <tr>
        <td height="27"><div align="center">
          <? 
		 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP003' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ctk2[kd_kls]'");
          $tpk=mysqli_fetch_assoc($tampi);
		  
		   if($tpk['raport'] >=1){	
		  $tn19=1;
		    $j19=$tpk['raport']; 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MP003' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j19=$ck13['nir'];
		if($j19 >=1){ $tn19=1; }  
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
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MP003' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($j19 >=1){
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC') { echo $ctk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC') { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%" height="25">&nbsp;Bahasa Arab </td>
            <td width="50%"><div align="right"><img src="Copy (4) of Arab rapor 2.jpg" width="85" height="21" align="absmiddle" />&nbsp;&nbsp;</div></td>
          </tr>
        </table></td>
        <td><div align="center">19.</div></td>
      </tr>
      
      <tr>
        <td><div align="center">
          <? 
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP005' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ctk2[kd_kls]'");
          $tpk=mysqli_fetch_assoc($tampi);
		  
		   if($tpk['raport'] >=1){	
		  $tn20=1;
		    $j20=$tpk['raport']; 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MP005' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j20=$ck13['nir'];
		if($j20 >=1){ $tn20=1; }  
		$a=angka_huruf($ck13['nir']); echo $a; 
			}  
		   ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	      
		  
		  echo $j20; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MP005' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($j20 >=1){
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC') { echo $ctk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC') { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB')  { echo $ctk3['kkm3']; }
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
        <td height="27"><div align="center">
          <? 
		  
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP006' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ctk2[kd_kls]'");
          $tpk=mysqli_fetch_assoc($tampi);
		  
		   if($tpk['raport'] >=1){	
		  $tn21=1;
		    $j21=$tpk['raport']; 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MP006' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j21=$ck13['nir'];
		if($j21 >=1){ $tn21=1; }  
		$a=angka_huruf($ck13['nir']); echo $a; 
			}  
		   ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	      
		  
		  echo $j21; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MP006' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($j21 >=1){
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC') { echo $ctk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC') { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Aqidah Akhlaq </td>
            <td width="50%"><div align="right"><img src="Copy (9) of Arab rapor 2.jpg" width="103" height="22" />&nbsp;</div></td>
          </tr>
        </table></td>
        <td><div align="center">21.</div></td>
      </tr>
      <tr>
        <td height="27"><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP007' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j22=$tpk['raport'];
		  if($j22 >=1){ $tn22=1; }
		  $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	      
		  
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MP007' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($j22 >=1){
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC') { echo $ctk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC') { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Sejarah Kebudayaan Islam </td>
            <td width="50%"><div align="right"><img src="Copy (11) of Arab rapor 2.jpg" width="142" height="26" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">22.</div></td>
      </tr>
      <tr>
        <td height="27"><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP013' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j23=$tpk['raport'];
		  if($j23 >=1){ $tn23=1; }
		  $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	      
		  
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MP013' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($j24 >=1){
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC') { echo $ctk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC') { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Qira'atul Kutub </td>
            <td width="50%"><div align="right"><img src="Copy of Arab rapor 3.jpg" width="86" height="25" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">23.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP009' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j24=$tpk['raport'];
		  if($j24 >=1){ $tn24=1; }
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
			  if($j24 >=1){
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC') { echo $ctk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC') { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Nahwu</td>
            <td width="50%"><div align="right"><img src="Copy (6) of Arab rapor 2.jpg" width="52" height="26" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">24.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP010' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j25=$tpk['raport'];
		  if($j25 >=1){ $tn25=1; }
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
			  if($j25 >=1){
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC') { echo $ctk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC') { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Shorof</td>
            <td width="50%"><div align="right"><img src="Copy (7) of Arab rapor 2.jpg" width="75" height="23" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">25.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP008' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j26=$tpk['raport'];
		  if($j26 >=1){ $tn26=1; }
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
			  if($j26 >=1){
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC') { echo $ctk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC') { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Muhadatsah</td>
            <td width="50%"><div align="right"><img src="muhadazah.jpg" width="52" height="20" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">26.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP015' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j27=$tpk['raport'];
		  if($j27 >=1){ $tn27=1; }
		  $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	      
		  
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MP015' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($j27 >=1){
		if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC') { echo $ctk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC') { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Tazwidul Mufradat </td>
            <td width="50%"><div align="right"></div></td>
          </tr>
        </table></td>
        <td><div align="center">27.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP011' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j28=$tpk['raport'];
		  if($j28 >=1){ $tn28=1; }
		  $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	      
		  
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MP011' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($j28 >=1){
		if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC') { echo $ctk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC') { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp; Hadis</td>
            <td width="50%"><div align="right"><img src="hadits.png" width="65" height="22" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">28.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <? 
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD024' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ctk2[kd_kls]'");
          $tpk=mysqli_fetch_assoc($tampi);
		  
		   if($tpk['raport'] >=1){	
		  $tn29=1;
		    $j29=$tpk['raport']; 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD024' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysqli_fetch_assoc($tpk13); 
		$j29=$ck13['nir'];
		if($j29 >=1){ $tn29=1; }  
		$a=angka_huruf($ck13['nir']); echo $a; 
			}  
		   ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	      
		  
		  echo $j29; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD024' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($j29 >=1){
		if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC') { echo $ctk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC') { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp; Matematika Peminatan </td>
            <td width="50%"><div align="right"><img src="Copy (22) of Arab rapor.jpg" width="85" height="20" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">29.</div></td>
      </tr>
      
      

      <tr>
        <td colspan="5" bgcolor="#000000" height="1"><div align="center"></div></td>
        </tr>
      <tr>
        <td><div align="center"></div></td>
        <td><div align="center">
          <? 
		 	
			 				
	     $jml_t=$j1+$j2+$j3+$j4+$j5+$j6+$j7+$j8+$j9+$j10+$j11+$j12+$j13+$j14+$j15+$j16+$j17+$j18+$j19+$j20+$j21+$j22+$j23+$j24+  
		        $j25+$j26+$j27+$j28+$j29;  
		 $pnl=$tn+$tn1+$tn2+$tn3+$tn4+$tn5+$tn6+$tn7+$tn8+$tn9+$tn10+$tn11+$tn12+$tn13+$tn14+$tn15+$tn16+$tn17+$tn18+$tn19+$tn20+
		      $tn21+$tn22+$tn23+$tn24+$tn25+$tn26+$tn27+$tn28+$tn29;	  
		 
		 echo $jml_t; 
		  
		   ?>
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
			     
				 $rt=ceil($jml_t/$pnl);
				echo $rt;
				// $p1=substr($rt,0,2);
				// $p2=substr($rt,3,2);
				// if($p2>=50){ echo $p1+1; }else{ echo $p1; }
				 
				   
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
            $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ext WHERE kd_santri='$ct[nis]' and kelas='$ct[kelas_st]' and thn_ajar='$thaj' and semester='$sem' ORDER BY id_ext DESC");
            $chq=mysqli_fetch_assoc($ktr);    
			
			?>
  <tr>
    <td height="123"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td colspan="2"><div align="center"><? echo $chq['hafalan_qr']; ?></div></td>
        <td><div align="center">Hafalan Al Quran </div></td>
        <td>&nbsp;</td>
        <td width="17%" rowspan="5"><div align="center">Pengembangan Diri <img src="Copy (3) of c1.JPG" width="89" height="27" /><br />
        </div></td>
      </tr>
      <tr>
        <td colspan="4" bordercolor="#FFFFFF" bgcolor="#FFFFFF" height="2"></td>
      </tr>
      <tr>
        <td width="34%"><div align="center">Keterangan <img src="keterangan.jpg" width="63" height="19" align="absmiddle" /></div></td>
        <td width="7%"><div align="center">Nilai</div></td>
        <td width="19%"><div align="center">Jenis Kegiatan </div></td>
        <td width="23%"><div align="center"><img src="b1.jpg" width="82" height="26" /></div></td>
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
        <td><div align="left">1. Ekstrakurikuler Pilihan 1 </div></td>
        <td><div align="right"><img src="extrakur_pil1.jpg" width="176" height="24" /></div></td>
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
        <td><div align="left">2. Ekstrakurikuler Pilihan 2 </div></td>
        <td><div align="right"><img src="extrakur_pil2.jpg" width="185" height="24" /></div></td>
      </tr>
	<?  
			 ?>
      
    </table></td>
  </tr>
  
  <tr>
    <td height="246"><div align="center">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="36" colspan="3" valign="top"><? if($ct['kelas_st']=='XII' || $ct['kelas_st']=='XIIA' || $ct['kelas_st']=='XIIB' || $ct['kelas_st']=='XIIC'){?><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
            <tr>
              <td width="83%" bgcolor="#CCCCCC"><div align="center">Judul Karya Tulis Ilmiah (KTI) </div></td>
              <td width="17%" bgcolor="#CCCCCC"><div align="center">Nilai </div></td>
            </tr>
            <?
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kti WHERE id_santri=$ct[id_santri] and semester='$sem' and thn_ajaran='$thaj'  ");
	    $cnt=mysqli_fetch_assoc($ntgs);
		?>
            <tr>
              <td height="21"><div align="justify">
                  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td><? echo $cnt['judul'];  ?></td>
                    </tr>
                  </table>
              </div></td>
              <td><div align="center"><? echo $cnt['nilai'];  ?></div></td>
            </tr>
          </table><? } ?></td>
          </tr>
        <tr>
          <td width="36%" height="133"><table width="100%" border="1" align="left" cellpadding="0" cellspacing="0" bordercolor="#000000">
            <tr>
              <td colspan="3"><div align="center">Kehadiran <img src="kehadiran.jpg" width="74" height="29" align="absmiddle" /></div></td>
            </tr>
            <tr>
              <td width="19"><div align="center">1.</div></td>
              <td width="241">Sakit <img src="sakit.jpg" width="42" height="19" align="absmiddle" /></td>
              <td width="57"><div align="center">
                  <? 
			  $skt=0;
			  $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ext WHERE kd_santri='$ct[nis]' and kelas='$ct[kelas_st]' and thn_ajar='$thaj' and semester='$sem' ");
           while($cktr=mysqli_fetch_assoc($ktr)){
		   $skt=$cktr['sakit']+$skt;
		   }
			
			  echo $skt; ?>
                hari </div></td>
            </tr>
            <tr>
              <td><div align="center">2.</div></td>
              <td>Izin <img src="izin.jpg" width="25" height="23" align="absmiddle" /></td>
              <td><div align="center">
                  <? 
			  $skt=0;
			  $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ext WHERE kd_santri='$ct[nis]' and kelas='$ct[kelas_st]' and thn_ajar='$thaj' and semester='$sem' ");
           while($cktr=mysqli_fetch_assoc($ktr)){
		   $skt=$cktr['izin']+$skt;
		   }
			
			  echo $skt;
			   ?>
                hari</div></td>
            </tr>
            <tr>
              <td><div align="center">3.</div></td>
              <td>Tanpa Keterangan <img src="tanpa_ket.jpg" width="65" height="26" align="absmiddle" /></td>
              <td><div align="center">
                  <? 
			  $skt=0;
			  $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ext WHERE kd_santri='$ct[nis]' and kelas='$ct[kelas_st]' and thn_ajar='$thaj' and semester='$sem' ");
           while($cktr=mysqli_fetch_assoc($ktr)){
		   $skt=$cktr['alpa']+$skt;
		   }
			
			  echo $skt;
			  
			   ?>
                hari</div></td>
            </tr>
            <tr>
              <td><div align="center">4.</div></td>
              <td>Tidak Solat Jamaah <img src="tidak_solat.jpg" width="111" height="24" align="absmiddle" /></td>
              <td><div align="center">
                  <? 
			 $skt=0;
			  $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ext WHERE kd_santri='$ct[nis]' and kelas='$ct[kelas_st]' and thn_ajar='$thaj' and semester='$sem' ");
           while($cktr=mysqli_fetch_assoc($ktr)){
		   $skt=$cktr['t_solat']+$skt;
		   }
			
			  echo $skt;
			   ?>
                kali </div></td>
            </tr>
          </table></td>
          <td width="1%" valign="top">&nbsp;</td>
          <td width="63%" valign="top"><img src="untitled.JPG" width="630" height="97" /></td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="28"><div align="center"><img src="ttd1.jpg" width="67" height="28" /></div></td>
        <td>&nbsp;</td>
        <td><div align="center"><img src="ttd2.jpg" width="75" height="28" /></div></td>
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <td height="132" valign="top"><div align="center">
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
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><div align="center">
            <? if(!empty($tp4['ttd'])){ ?>
            <img src="<? echo "$tp4[ttd]"; ?>" height="90" width="130" />
            <? } ?>
          </div></td>
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
