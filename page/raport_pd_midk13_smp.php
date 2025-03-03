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
.style9 {
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
<table width="996" border="0">
  <tr>
    <td width="990"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="11%" height="95" valign="top"><img src="../../images/LOGO-SHOID2.jpg" width="105" height="109" /></td>
        <td width="89%" valign="top"><div align="center"><span class="style2">YAYASAN 
              SHOHWATUL IS'AD</span><br />
              <span class="style1">PPMI 
                                 SHOHWATUL IS'AD</span><br />
                                 <strong>SMP IT SHOHWATUL IS'AD</strong> <br />
              <span class="style8">NSS : 202190205004&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NPSN : 40314482<br />
              Alamat: Jl. Poros Padanglampe&nbsp;KM . 3&nbsp;Ma'rang&nbsp;Pangkep&nbsp;Sulawesi -Selatan 90645 P.O. Box 300 <br /></span><span class="style8">http://www.shohwatulisad.sch.id e-mail : info@shohwatulisad.sch.id </span></div></td>
      </tr>
      <tr>
        <td height="2" colspan="2" valign="top" bgcolor="#000000"></td>
        </tr>
    </table></td>
  </tr>
  <tr>
      <?
	      $tmpkls=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st FROM tb_santri WHERE id_santri='$idstr' ");
          $ct=mysqli_fetch_assoc($tmpkls);
		  
		  $mkl=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
          $cmkl=mysqli_fetch_assoc($mkl);
		  
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
        <td colspan="7"><div align="center" class="style9">RAPOR TENGAH SEMESTER  </div></td>
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
    <td height="667"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td width="3%" rowspan="2"><div align="center"><strong>PTS</strong></div></td>
        <td colspan="4"><div align="center"><strong>KETERAMPILAN</strong></div></td>
        <td colspan="4"><div align="center"><strong>TES TULIS </strong></div></td>
        <td colspan="4"><div align="center"><strong>TUGAS</strong></div></td>
        <td width="51%"><div align="center"><img src="Copy (4) of Arab rapor.jpg" width="101" height="25" /></div>          <div align="center"></div></td>
        <td width="3%" rowspan="2"><div align="center"><img src="Copy (6) of Arab rapor.jpg" width="23" height="49" /></div></td>
      </tr>
      
      
      <tr>
        <td width="3%"><div align="center">1</div></td>
        <td width="3%"><div align="center">2</div></td>
        <td width="3%"><div align="center">3</div></td>
        <td width="3%"><div align="center">4</div></td>
        <td width="3%"><div align="center">1</div></td>
        <td width="3%"><div align="center">2</div></td>
        <td width="3%"><div align="center">3</div></td>
        <td width="3%"><div align="center">4</div></td>
        <td width="3%"><div align="center">1</div></td>
        <td width="3%"><div align="center">2</div></td>
        <td width="3%"><div align="center">3</div></td>
        <td width="3%"><div align="center">4</div></td>
        <td><div align="center"><strong>Mata Pelajaran </strong></div></td>
        </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		 
		$tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MP006'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  
		  
		  $ruts=mysqli_query($koneksi, "SELECT * FROM tb_ujian_k13 WHERE id_kompetensi='$tpk2[id_ki]' and id_santri='$ct[id_santri]'  ");
          $cuts=mysqli_fetch_assoc($ruts);  echo $cuts['uts'];
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		 
		$tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='4' AND mapel='MP006'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk3=mysqli_fetch_assoc($tampi2);  
		  
		  $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.1' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
			?>
        </div></td>
        <td><div align="center">
            <? 
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.2' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.3' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.4' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?    	       
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MP006'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk1=mysqli_fetch_assoc($tampi);
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.1' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt1x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.2' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt2x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.3' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt3x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.4' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt4x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt1x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt2x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt3x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt4x;
		  
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
		 
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' and mapel='MD013' and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  
		 // echo $tpk2['id_ki'];
		  
		  $ruts=mysqli_query($koneksi, "SELECT * FROM tb_ujian_k13 WHERE id_kompetensi='$tpk2[id_ki]' and id_santri='$ct[id_santri]'  ");
          $cuts=mysqli_fetch_assoc($ruts);  
		  echo $cuts['uts'];
			?>
        </div></td>
        <td><div align="center">
            <?    	        
		 
		   $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='4' AND mapel='MD013'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk3=mysqli_fetch_assoc($tampi2);  
		  
		  $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.1' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
			?>
        </div></td>
        <td><div align="center">
          <? 
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.2' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		?>
        </div></td>
        <td><div align="center">
          <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.3' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
          <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.4' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?    	       
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MD013'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk1=mysqli_fetch_assoc($tampi);
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.1' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt1x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.2' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt2x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.3' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt3x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.4' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt4x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt1x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt2x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt3x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt4x;
		  
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
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MD003' and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  
		  
		  $ruts=mysqli_query($koneksi, "SELECT * FROM tb_ujian_k13 WHERE id_kompetensi='$tpk2[id_ki]' and id_santri='$ct[id_santri]'  ");
          $cuts=mysqli_fetch_assoc($ruts);  echo $cuts['uts']; 
		 
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		 $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='4' AND mapel='MD003' and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk3=mysqli_fetch_assoc($tampi2);  
		  
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.1' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 
			?>
        </div></td>
        <td><div align="center">
          <? 
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.2' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		?>
        </div></td>
        <td><div align="center">
          <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.3' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
          <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.4' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?    	       
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MD003'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk1=mysqli_fetch_assoc($tampi);
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.1' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt1x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.2' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt2x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.3' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt3x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.4' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt4x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt1x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt2x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt3x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt4x;
		  
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
        <td><div align="center">
            <?    	       
		
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MD004' and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  
		  
		  $ruts=mysqli_query($koneksi, "SELECT * FROM tb_ujian_k13 WHERE id_kompetensi='$tpk2[id_ki]' and id_santri='$ct[id_santri]'  ");
          $cuts=mysqli_fetch_assoc($ruts);  echo $cuts['uts'];
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='4' AND mapel='MD004'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk3=mysqli_fetch_assoc($tampi2);  
		  
		  $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.1' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.2' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.3' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.4' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?    	       
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MD004'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk1=mysqli_fetch_assoc($tampi);
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.1' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt1x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.2' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt2x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.3' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt3x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.4' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt4x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt1x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt2x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt3x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt4x;
		  
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
        <td><div align="center">
            <?    	       
		  
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' and mapel='MD005' and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  
		 
		  $ruts=mysqli_query($koneksi, "SELECT * FROM tb_ujian_k13 WHERE id_kompetensi='$tpk2[id_ki]' and id_santri='$ct[id_santri]'  ");
          $cuts=mysqli_fetch_assoc($ruts);  
		  echo $cuts['uts'];
		  
			?></div></td>
        <td><div align="center">
            <?    	       
		  
		  
		   $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='4' AND mapel='MD005' and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk3=mysqli_fetch_assoc($tampi2);  
		  
		   $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.1' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		  
			?>
        </div></td>
        <td><div align="center">
            <? 
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.2' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.3' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center"><?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.4' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
          <?    	       
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MD005' and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk1=mysqli_fetch_assoc($tampi);
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.1' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  
		  echo $tpk2['nilai_tes_tulis']; $nt1x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.2' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt2x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.3' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt3x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.4' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt4x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt1x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt2x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt3x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt4x;
		  
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
		  
		  
		   $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MD006'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  
		  
		  $ruts=mysqli_query($koneksi, "SELECT * FROM tb_ujian_k13 WHERE id_kompetensi='$tpk2[id_ki]' and id_santri='$ct[id_santri]'  ");
          $cuts=mysqli_fetch_assoc($ruts);  echo $cuts['uts'];
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  
		   $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='4' AND mapel='MD006'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk3=mysqli_fetch_assoc($tampi2);  
		  
		  $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.1' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.2' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.3' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.4' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?    	       
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MD006'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk1=mysqli_fetch_assoc($tampi);
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.1' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt1x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.2' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt2x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.3' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt3x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.4' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt4x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt1x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt2x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt3x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt4x;
		  
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
		  
		  
		 
		 $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MD007'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  
		  
		  $ruts=mysqli_query($koneksi, "SELECT * FROM tb_ujian_k13 WHERE id_kompetensi='$tpk2[id_ki]' and id_santri='$ct[id_santri]'  ");
          $cuts=mysqli_fetch_assoc($ruts);  echo $cuts['uts'];
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  
		 
		 $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='4' AND mapel='MD007'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk3=mysqli_fetch_assoc($tampi2);  
		  
		  $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.1' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
			?>
        </div></td>
        <td><div align="center">
            <? 
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.2' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.3' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.4' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?    	       
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MD007'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk1=mysqli_fetch_assoc($tampi);
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.1' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt1x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.2' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt2x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.3' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt3x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.4' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt4x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt1x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt2x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt3x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt4x;
		  
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
		 
		 $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MD012' and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  
		  
		  $ruts=mysqli_query($koneksi, "SELECT * FROM tb_ujian_k13 WHERE id_kompetensi='$tpk2[id_ki]' and id_santri='$ct[id_santri]'  ");
          $cuts=mysqli_fetch_assoc($ruts);  echo $cuts['uts'];
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		 
		 $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='4' AND mapel='MD012'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk3=mysqli_fetch_assoc($tampi2);  
		  
		   $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.1' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.2' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.3' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.4' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?    	       
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MD012'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk1=mysqli_fetch_assoc($tampi);
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.1' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt1x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.2' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt2x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.3' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt3x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.4' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt4x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt1x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt2x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt3x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt4x;
		  
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
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MD009'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  
		  
		  $ruts=mysqli_query($koneksi, "SELECT * FROM tb_ujian_k13 WHERE id_kompetensi='$tpk2[id_ki]' and id_santri='$ct[id_santri]'  ");
          $cuts=mysqli_fetch_assoc($ruts);  echo $cuts['uts'];
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='4' AND mapel='MD009'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk3=mysqli_fetch_assoc($tampi2);  
		  
		  $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.1' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
			?>
        </div></td>
        <td><div align="center">
            <? 
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.2' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.3' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.4' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?    	       
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MD009'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk1=mysqli_fetch_assoc($tampi);
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.1' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt1x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.2' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt2x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.3' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt3x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.4' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt4x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt1x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt2x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt3x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt4x;
		  
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
		  
		/*  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MD010' and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  
		  
		  $ruts=mysqli_query($koneksi, "SELECT * FROM tb_ujian_k13 WHERE id_kompetensi='$tpk2[id_ki]' and id_santri='$ct[id_santri]'  ");
          $cuts=mysqli_fetch_assoc($ruts);  echo $cuts['uts']; */
		 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD010' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi); echo $tpk['uts'];
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
        <td><div align="center">
          <?    	       
		  
		 
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
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
		 
		$tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MD011'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  
		  
		  $ruts=mysqli_query($koneksi, "SELECT * FROM tb_ujian_k13 WHERE id_kompetensi='$tpk2[id_ki]' and id_santri='$ct[id_santri]'  ");
          $cuts=mysqli_fetch_assoc($ruts);  echo $cuts['uts'];
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		 
		$tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='4' AND mapel='MD011'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk3=mysqli_fetch_assoc($tampi2);  
		  
		   $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.1' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
			?>
        </div></td>
        <td><div align="center">
            <? 
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.2' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.3' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.4' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?    	       
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MD011'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk1=mysqli_fetch_assoc($tampi);
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.1' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt1x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.2' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt2x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.3' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt3x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.4' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt4x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt1x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt2x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt3x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt4x;
		  
			?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Kewirausahaan dan Agrobisnis </td>
            <td width="50%"><div align="right"><img src="agrobisnis_kewirausahaan.jpg" width="201" height="21" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">11.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  
		 $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MP014'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  
		  
		  $ruts=mysqli_query($koneksi, "SELECT * FROM tb_ujian_k13 WHERE id_kompetensi='$tpk2[id_ki]' and id_santri='$ct[id_santri]'  ");
          $cuts=mysqli_fetch_assoc($ruts);  echo $cuts['uts']; 
		  
		 /*  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP014' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi); echo $tpk['uts']; */
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		 
		$tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='4' AND mapel='MP014' and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk3=mysqli_fetch_assoc($tampi2);  
		  
		   $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.1' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
			?>
        </div></td>
        <td><div align="center">
          <? 
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.2' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		?>
        </div></td>
        <td><div align="center">
          <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.3' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.4' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?    	       
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MP014' and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk1=mysqli_fetch_assoc($tampi);
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.1' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt1x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.2' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt2x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.3' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt3x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.4' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt4x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt1x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt2x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt3x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt4x;
		  
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
		  
		 
		/* $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MP001'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  
		  
		  $ruts=mysqli_query($koneksi, "SELECT * FROM tb_ujian_k13 WHERE id_kompetensi='$tpk2[id_ki]' and id_santri='$ct[id_santri]'  ");
          $cuts=mysqli_fetch_assoc($ruts);  echo $cuts['uts']; */
		  
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP001' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi); echo $tpk['uts'];
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
        <td><div align="center">
            <?    	       
		  
		 
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Menghafal Al Qur'an </td>
            <td width="50%"><div align="right"><img src="Copy (3) of Arab rapor 2.jpg" width="76" height="19" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">13.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  
		$tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MP003'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  
		  
		  $ruts=mysqli_query($koneksi, "SELECT * FROM tb_ujian_k13 WHERE id_kompetensi='$tpk2[id_ki]' and id_santri='$ct[id_santri]'  ");
          $cuts=mysqli_fetch_assoc($ruts);  echo $cuts['uts'];
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  
		$tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='4' AND mapel='MP003'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk3=mysqli_fetch_assoc($tampi2);  
		  
		  $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.1' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
			?>
        </div></td>
        <td><div align="center">
            <? 
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.2' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.3' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.4' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?    	       
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MP003'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk1=mysqli_fetch_assoc($tampi);
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.1' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt1x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.2' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt2x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.3' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt3x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.4' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt4x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt1x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt2x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt3x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt4x;
		  
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
		  
		$tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MP004'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  
		  
		  $ruts=mysqli_query($koneksi, "SELECT * FROM tb_ujian_k13 WHERE id_kompetensi='$tpk2[id_ki]' and id_santri='$ct[id_santri]'  ");
          $cuts=mysqli_fetch_assoc($ruts);  echo $cuts['uts'];
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		$tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='4' AND mapel='MP004'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk3=mysqli_fetch_assoc($tampi2);  
		  
		  $ruts=mysqli_query($koneksi, "SELECT * FROM tb_ujian_k13 WHERE id_kompetensi='$tpk2[id_ki]' and id_santri='$ct[id_santri]'  ");
          $cuts=mysqli_fetch_assoc($ruts);  echo $cuts['uts'];
			?>
        </div></td>
        <td><div align="center">
            <? 
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.2' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.3' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.4' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?    	       
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MP004'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk1=mysqli_fetch_assoc($tampi);
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.1' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt1x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.2' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt2x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.3' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt3x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.4' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt4x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt1x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt2x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt3x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt4x;
		  
			?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Dikte Bahasa Arab / Imla'</td>
            <td width="50%"><div align="right"><img src="Copy (5) of Arab rapor 2.jpg" width="59" height="26" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">15.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  
		/* $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MP009'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  
		  
		  $ruts=mysqli_query($koneksi, "SELECT * FROM tb_ujian_k13 WHERE id_kompetensi='$tpk2[id_ki]' and id_santri='$ct[id_santri]'  ");
          $cuts=mysqli_fetch_assoc($ruts);  echo $cuts['uts']; */
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP009' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi); echo $tpk['uts'];
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		/* $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='4' AND mapel='MP005'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk3=mysqli_fetch_assoc($tampi2);  
		  
		  $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.1' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; } */
		   echo $tpk['uh1'];
			?>
        </div></td>
        <td><div align="center">
          <? 
		/*  $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.2' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; } */
		   echo $tpk['uh2'];
		?>
        </div></td>
        <td><div align="center">
          <?
		/*  $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.3' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; } */
		   echo $tpk['uh3'];
		 ?>
        </div></td>
        <td><div align="center">
            <?
		/*  $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.4' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; } */
		   echo $tpk['uh4'];
		 ?>
        </div></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
        <td><div align="center">
            <?    	       
		  
		//   echo $nt1x;
		   echo $tpk['nt1'];
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		 //  echo $nt2x;
		  echo $tpk['nt2'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		 //  echo $nt3x;
		  echo $tpk['nt3'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		//   echo $nt4x;
		 echo $tpk['nt4'];
		  
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
		  
		 /* $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MP010'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  
		  
		  $ruts=mysqli_query($koneksi, "SELECT * FROM tb_ujian_k13 WHERE id_kompetensi='$tpk2[id_ki]' and id_santri='$ct[id_santri]'  ");
          $cuts=mysqli_fetch_assoc($ruts);  echo $cuts['uts']; */
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP010' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi); echo $tpk['uts'];
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		/* $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='4' AND mapel='MP005'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk3=mysqli_fetch_assoc($tampi2);  
		  
		  $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.1' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; } */
		   echo $tpk['uh1'];
			?>
        </div></td>
        <td><div align="center">
          <? 
		/*  $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.2' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; } */
		   echo $tpk['uh2'];
		?>
        </div></td>
        <td><div align="center">
          <?
		/*  $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.3' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; } */
		   echo $tpk['uh3'];
		 ?>
        </div></td>
        <td><div align="center">
          <?
		/*  $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.4' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; } */
		   echo $tpk['uh4'];
		 ?>
        </div></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
        <td><div align="center">
            <?    	       
		  
		//   echo $nt1x;
		   echo $tpk['nt1'];
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		 //  echo $nt2x;
		  echo $tpk['nt2'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		 //  echo $nt3x;
		  echo $tpk['nt3'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		//   echo $nt4x;
		 echo $tpk['nt4'];
		  
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
		  
		 
		$tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MP020'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  
		  
		  $ruts=mysqli_query($koneksi, "SELECT * FROM tb_ujian_k13 WHERE id_kompetensi='$tpk2[id_ki]' and id_santri='$ct[id_santri]'  ");
          $cuts=mysqli_fetch_assoc($ruts);  echo $cuts['uts'];
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		 
		$tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='4' AND mapel='MP020'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk3=mysqli_fetch_assoc($tampi2);  
		  
		  $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.1' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
			?>
        </div></td>
        <td><div align="center">
            <? 
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.2' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.3' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.4' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?    	       
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MP020'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk1=mysqli_fetch_assoc($tampi);
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.1' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt1x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.2' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt2x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.3' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt3x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.4' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt4x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt1x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt2x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt3x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt4x;
		  
			?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Mahfudhot</td>
            <td width="50%"><div align="right"><img src="Copy (8) of Arab rapor 2.jpg" width="86" height="23" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">18.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		 
		$tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MP006'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  
		  
		  $ruts=mysqli_query($koneksi, "SELECT * FROM tb_ujian_k13 WHERE id_kompetensi='$tpk2[id_ki]' and id_santri='$ct[id_santri]'  ");
          $cuts=mysqli_fetch_assoc($ruts);  echo $cuts['uts'];
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		 
		$tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='4' AND mapel='MP006'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk3=mysqli_fetch_assoc($tampi2);  
		  
		  $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.1' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
			?>
        </div></td>
        <td><div align="center">
            <? 
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.2' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.3' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.4' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?    	       
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MP006'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk1=mysqli_fetch_assoc($tampi);
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.1' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt1x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.2' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt2x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.3' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt3x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.4' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt4x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt1x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt2x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt3x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt4x;
		  
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
		  
	/*	$tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MP005'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  
		  
		  $ruts=mysqli_query($koneksi, "SELECT * FROM tb_ujian_k13 WHERE id_kompetensi='$tpk2[id_ki]' and id_santri='$ct[id_santri]'  ");
          $cuts=mysqli_fetch_assoc($ruts);  echo $cuts['uts'];
		  echo $jmlp; */
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP005' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi); echo $tpk['uts'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		/* $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='4' AND mapel='MP005'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk3=mysqli_fetch_assoc($tampi2);  
		  
		  $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.1' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; } */
		   echo $tpk['uh1'];
			?>
        </div></td>
        <td><div align="center">
            <? 
		/*  $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.2' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; } */
		   echo $tpk['uh2'];
		?>
        </div></td>
        <td><div align="center">
            <?
		/*  $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.3' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; } */
		   echo $tpk['uh3'];
		 ?>
        </div></td>
        <td><div align="center">
            <?
		/*  $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.4' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; } */
		   echo $tpk['uh4'];
		 ?>
        </div></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
        <td><div align="center">
            <?    	       
		  
		//   echo $nt1x;
		   echo $tpk['nt1'];
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		 //  echo $nt2x;
		  echo $tpk['nt2'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		 //  echo $nt3x;
		  echo $tpk['nt3'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		//   echo $nt4x;
		 echo $tpk['nt4'];
		  
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
		  

		$tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MP007'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  
		  
		  $ruts=mysqli_query($koneksi, "SELECT * FROM tb_ujian_k13 WHERE id_kompetensi='$tpk2[id_ki]' and id_santri='$ct[id_santri]'  ");
          $cuts=mysqli_fetch_assoc($ruts);  echo $cuts['uts'];
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  

		$tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='4' AND mapel='MP007'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk3=mysqli_fetch_assoc($tampi2);  
		  
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.1' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
			?>
        </div></td>
        <td><div align="center">
            <? 
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.2' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.3' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.4' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?    	       
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MP007'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk1=mysqli_fetch_assoc($tampi);
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.1' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt1x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.2' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt2x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.3' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt3x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.4' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt4x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt1x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt2x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt3x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt4x;
		  
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
		$tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MP013'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  
		  
		  $ruts=mysqli_query($koneksi, "SELECT * FROM tb_ujian_k13 WHERE id_kompetensi='$tpk2[id_ki]' and id_santri='$ct[id_santri]'  ");
          $cuts=mysqli_fetch_assoc($ruts);  echo $cuts['uts'];
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		$tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='4' AND mapel='MP013'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk3=mysqli_fetch_assoc($tampi2);  
		  
		  $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.1' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
			?>
        </div></td>
        <td><div align="center">
            <? 
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.2' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.3' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.4' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?    	       
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MP013'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk1=mysqli_fetch_assoc($tampi);
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.1' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt1x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.2' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt2x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.3' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt3x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.4' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt4x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt1x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt2x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt3x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt4x;
		  
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
		  		 
		$tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MP016'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  
		  
		  $ruts=mysqli_query($koneksi, "SELECT * FROM tb_ujian_k13 WHERE id_kompetensi='$tpk2[id_ki]' and id_santri='$ct[id_santri]'  ");
          $cuts=mysqli_fetch_assoc($ruts);  echo $cuts['uts'];
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  		 
		$tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='4' AND mapel='MP016'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk3=mysqli_fetch_assoc($tampi2);  
		  
		  $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.1' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
			?>
        </div></td>
        <td><div align="center">
            <? 
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.2' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.3' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.4' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?    	       
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MP016'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk1=mysqli_fetch_assoc($tampi);
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.1' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt1x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.2' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt2x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.3' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt3x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.4' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt4x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt1x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt2x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt3x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt4x;
		  
			?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Mutholaah</td>
            <td width="50%"><div align="right"><img src="mutoalah.JPG" width="55" height="23" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">23.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <?    	       
				$tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MD012'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  
		  
		  $ruts=mysqli_query($koneksi, "SELECT * FROM tb_ujian_k13 WHERE id_kompetensi='$tpk2[id_ki]' and id_santri='$ct[id_santri]'  ");
          $cuts=mysqli_fetch_assoc($ruts);  echo $cuts['uts'];
			?>
        </div></td>
        <td><div align="center">
            <?    	       
				$tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='4' AND mapel='MD012'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk3=mysqli_fetch_assoc($tampi2);  
		  
		  $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.1' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
			?>
        </div></td>
        <td><div align="center">
            <? 
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.2' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.3' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.4' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?    	       
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MD012'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk1=mysqli_fetch_assoc($tampi);
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.1' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt1x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.2' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt2x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.3' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt3x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.4' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt4x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt1x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt2x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt3x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt4x;
		  
			?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Khot</td>
            <td width="50%"><div align="right"><img src="khot.JPG" width="35" height="25" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">24.</div></td>
      </tr>
      
      <tr>
        <td height="21"><div align="center">
          <?    	       
		$tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MP018'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  
		  
		  $ruts=mysqli_query($koneksi, "SELECT * FROM tb_ujian_k13 WHERE id_kompetensi='$tpk2[id_ki]' and id_santri='$ct[id_santri]'  ");
          $cuts=mysqli_fetch_assoc($ruts);  echo $cuts['uts'];
		 
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		$tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='4' AND mapel='MP018'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk3=mysqli_fetch_assoc($tampi2);  
		  
		  $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.1' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 
			?>
        </div></td>
        <td><div align="center">
            <? 
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.2' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.3' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.4' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?    	       
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MP018'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk1=mysqli_fetch_assoc($tampi);
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.1' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt1x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.2' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt2x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.3' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt3x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.4' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt4x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt1x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt2x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt3x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt4x;
		  
			?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Insya'</td>
            <td width="50%"><div align="right"><img src="insya.JPG" width="58" height="30" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">25.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <?    	       
		 $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MP008'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  
		  
		  $ruts=mysqli_query($koneksi, "SELECT * FROM tb_ujian_k13 WHERE id_kompetensi='$tpk2[id_ki]' and id_santri='$ct[id_santri]'  ");
          $cuts=mysqli_fetch_assoc($ruts);  echo $cuts['uts']; 
		  
		 /*   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP008' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi); echo $tpk['uts']; */
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		$tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='4' AND mapel='MP008' and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk3=mysqli_fetch_assoc($tampi2);  
		  
		  $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.1' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 
			?>
</div></td>
        <td><div align="center">
          <? 
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.2' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		?>
        </div></td>
        <td><div align="center">
          <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.3' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.4' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?    	       
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MP008' and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk1=mysqli_fetch_assoc($tampi);
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.1' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt1x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.2' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt2x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.3' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt3x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.4' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt4x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt1x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt2x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt3x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt4x;
		  
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
		  
		  
		$tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MP019'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  
		  
		  $ruts=mysqli_query($koneksi, "SELECT * FROM tb_ujian_k13 WHERE id_kompetensi='$tpk2[id_ki]' and id_santri='$ct[id_santri]'  ");
          $cuts=mysqli_fetch_assoc($ruts);  echo $cuts['uts'];
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  
		$tampi2=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='4' AND mapel='MP019'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk3=mysqli_fetch_assoc($tampi2);  
		  
		   $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.1' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
			?>
        </div></td>
        <td><div align="center">
            <? 
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.2' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.3' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?
		 $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kompetensi='$tpk3[id_ki]' and id_santri='$ct[id_santri]' and kd='4.4' ");
          $cktr=mysqli_fetch_assoc($ktr); 
		  
		   $pra=0; $pru=0; $pro=0;
		  if($cktr['praktek'] >=1) { $pra=1; } if($cktr['produk'] >=1) { $pru=1; } if($cktr['proyek'] >=1) { $pro=1; }
		  $pbgx=$pra+$pru+$pro;  $jmlp=0; 
		  if($pbgx) { $jmlp=round(($cktr['praktek']+$cktr['produk']+$cktr['proyek'])/$pbgx);  }     if($jmlp){  echo $jmlp; }
		  
		 ?>
        </div></td>
        <td><div align="center">
            <?    	       
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='3' AND mapel='MP019'and kelas='$cmkl[kd_kls]' and tahun_ajaran='$thaj' and semester='$sem' ");
          $tpk1=mysqli_fetch_assoc($tampi);
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.1' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt1x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.2' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis']; $nt2x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.3' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt3x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kompetensi='$tpk1[id_ki]' and id_santri='$ct[id_santri]' and kd='3.4' ");
          $tpk2=mysqli_fetch_assoc($tampi2);  echo $tpk2['nilai_tes_tulis'];  $nt4x=$tpk2['nilai_tugas'];
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt1x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt2x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt3x;
		  
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   echo $nt4x;
		  
			?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Composition</td>
            <td width="50%"><div align="right"><img src="composition.JPG" width="60" height="30" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">27.</div></td>
      </tr>
      
      
      

    </table></td>
  </tr>
  <tr>
    <td height="108" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td colspan="2"><div align="center"><? 
		$ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ext WHERE kd_santri='$ct[nis]' and kelas='$ct[kelas_st]' and thn_ajar='$thaj' and semester='$sem' ORDER BY id_ext DESC");
        $cktr=mysqli_fetch_assoc($ktr);
		
		echo $cktr['hafalan_qr']; ?></div></td>
        <td colspan="2"><div align="center"><strong>Hafalan Al Quran </strong></div></td>
        <td width="17%" rowspan="5"><div align="center"><strong>Pengembangan Diri </strong><img src="Copy (3) of c1.JPG" width="89" height="27" /><br />
        </div></td>
      </tr>
      <tr>
        <td colspan="4" bordercolor="#FFFFFF" bgcolor="#FFFFFF" height="2"></td>
      </tr>
      <tr>
        <td width="34%"><div align="center"><strong>Huruf</strong> <img src="Copy (8) of Arab rapor.jpg" width="96" height="19" align="absmiddle" /></div></td>
        <td width="7%"><div align="center"><strong>Nilai</strong></div></td>
        <td width="19%"><div align="center"><strong>Jenis Kegiatan </strong></div></td>
        <td width="23%"><div align="center"><img src="b1.jpg" width="82" height="26" /></div></td>
      </tr>
      <tr>
        <td height="21"><div align="center">
          <? 
		  $tnils=mysqli_query($koneksi, "SELECT * FROM tb_nilai_eskul WHERE thn_eskl='$thaj' AND sms_eskl='$sem' AND nis_eskl='$ct[nis]' AND 
		                           kls_eskl='$ct[kelas_st]' ");
                                   $cnils=mysqli_fetch_assoc($tnils); 
		  
		    
			
		if($cnils['nil_eskl1']=="A"){ echo"Sangat Baik"; }
		if($cnils['nil_eskl1']=="B"){ echo"Baik"; }
		if($cnils['nil_eskl1']=="C"){ echo"Cukup"; }
		if($cnils['nil_eskl1']=="D"){ echo"Kurang"; }
		 ?>
        </div></td>
        <td><div align="center"><? 
								   echo $cnils['nil_eskl1'];
								   ?>
		</div></td>
        <td>
		  <div align="center">
		    <?
		  $pbk=mysqli_query($koneksi, "SELECT * FROM tb_pbakat WHERE kd_santri='$idstr'  ");
          $tpbk=mysqli_fetch_assoc($pbk); 
		  
		  $pbk2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='$tpbk[kd_mp]'  ");
          $tpbk2=mysqli_fetch_assoc($pbk2);
		  
		  echo $tpbk2['nama_mp'];
		?>
	        </div></td>
        <td><div align="center"><img src="extrakur_pil1.jpg" width="176" height="22" /></div></td>
      </tr>
      <tr>
        <td><div align="center">
            <? 
		    
			
		if($cnils['nil_eskl2']=="A"){ echo"Sangat Baik"; }
		if($cnils['nil_eskl2']=="B"){ echo"Baik"; }
		if($cnils['nil_eskl2']=="C"){ echo"Cukup"; }
		if($cnils['nil_eskl2']=="D"){ echo"Kurang"; }
		 ?>
        </div></td>
        <td><div align="center"><? echo $cnils['nil_eskl2']; ?></div></td>
        <td><div align="center">
          <?
		  $pbk=mysqli_query($koneksi, "SELECT * FROM tb_pbakat WHERE kd_santri='$idstr' limit 1,1 ");
          $tpbk=mysqli_fetch_assoc($pbk); 
		  
		  $pbk2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='$tpbk[kd_mp]'  ");
          $tpbk2=mysqli_fetch_assoc($pbk2);
		  
		  echo $tpbk2['nama_mp'];
		?>
        </div></td>
        <td><div align="center"><img src="extrakur_pil2.jpg" width="185" height="23" /></div></td>
      </tr>
      
    </table></td>
  </tr>
  <tr>
    <td><div align="center">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><table width="328" border="1" align="left" cellpadding="0" cellspacing="0" bordercolor="#000000">
              <tr>
                <td colspan="3"><div align="center"><strong>Kehadiran</strong> <img src="kehadiran.jpg" width="74" height="24" align="absmiddle" /></div></td>
              </tr>
			  <? $skt=0; 
			   $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ext WHERE kd_santri='$ct[nis]' and kelas='$ct[kelas_st]' and thn_ajar='$thaj' and semester='$sem' ");
               while($cktr=mysqli_fetch_assoc($ktr)){
			         $skt=$cktr['sakit']+$skt;
			   }
			  
			   
			  ?>
              <tr>
                <td width="20"><div align="center">1.</div></td>
                <td width="241">Sakit <img src="sakit.jpg" width="42" height="19" align="absmiddle" /></td>
                <td width="59"><div align="center"><? echo $skt;  ?> hari </div></td>
              </tr>
              <tr>
                <td><div align="center">2.</div></td>
                <td>Izin <img src="izin.jpg" width="25" height="23" align="absmiddle" /></td>
                <td><div align="center"><? 
				$skt=0; 
			   $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ext WHERE kd_santri='$ct[nis]' and kelas='$ct[kelas_st]' and thn_ajar='$thaj' and semester='$sem' ");
               while($cktr=mysqli_fetch_assoc($ktr)){
			   $skt=$cktr['izin']+$skt;  }
				
				echo $skt; ?> hari</div></td>
              </tr>
              <tr>
                <td><div align="center">3.</div></td>
                <td>Tanpa Keterangan <img src="tanpa_ket.jpg" width="65" height="26" align="absmiddle" /></td>
                <td><div align="center"><? 
				$skt=0; 
			   $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ext WHERE kd_santri='$ct[nis]' and kelas='$ct[kelas_st]' and thn_ajar='$thaj' and semester='$sem' ");
               while($cktr=mysqli_fetch_assoc($ktr)){
			   $skt=$cktr['alpa']+$skt;  }
				
				 echo $skt; ?> hari</div></td>
              </tr>
              <tr>
                <td><div align="center">4.</div></td>
                <td>Tidak Solat Jamaah <img src="tidak_solat.jpg" width="111" height="24" align="absmiddle" /></td>
                <td><div align="center"><? 
				$skt=0; 
			   $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ext WHERE kd_santri='$ct[nis]' and kelas='$ct[kelas_st]' and thn_ajar='$thaj' and semester='$sem' ");
               while($cktr=mysqli_fetch_assoc($ktr)){
			   $skt=$cktr['t_solat']+$skt;  }
				
				 echo $skt; ?> kali </div></td>
              </tr>
          </table></td>
          <td valign="top"><img src="untitled.JPG" width="662" height="122" /></td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  
  
  
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="47%"><div align="center"></div></td>
        <td width="5%">&nbsp;</td>
        <td width="48%">&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center">Wali Santri <img src="ttd1.jpg" width="67" height="28" align="absmiddle" /></div></td>
        <td>&nbsp;</td>
        <td><div align="center">Wali Kelas <img src="ttd2.jpg" width="75" height="28" align="absmiddle" /></div></td>
      </tr>
    </table></td>
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
	
	$tampi4=mysqli_query($koneksi, "SELECT id_gp,nip,nama_gp FROM guru_pegawai WHERE id_gp='$tpk3[kd_gp]' ");
    $tpk4=mysqli_fetch_assoc($tampi4);
	
	?>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><div align="center">
            <?  
		if($ct['kelas_st']=="VIIA"){ $ttd="td_jerwin.jpg"; } if($ct['kelas_st']=="VIIB"){ $ttd="td_baba.jpg"; } 
		if($ct['kelas_st']=="VIIC"){ $ttd="7c.jpeg"; } if($ct['kelas_st']=="VIID"){ $ttd="7d.jpeg"; } 
		if($ct['kelas_st']=="VIIIA"){ $ttd="ttd_mulki.jpg"; } if($ct['kelas_st']=="VIIIB"){ $ttd="8b.jpeg"; } if($ct['kelas_st']=="VIIIC"){ $ttd="ttd_nana.jpg"; } 
		if($ct['kelas_st']=="IXA"){ $ttd="9a.jpeg"; } if($ct['kelas_st']=="IXB"){ $ttd="9b.jpeg"; } if($ct['kelas_st']=="IXC"){ $ttd="9c.jpeg"; } 
		 
		
		echo "<img src='$ttd' width='124' height='121' />" 
		?>
          </div></td>
        </tr>
        <tr>
          <td><div align="center">(______________________________)</div></td>
          <td>&nbsp;</td>
          <td><div align="center">( <? echo $tpk4['nama_gp']; ?> ) </div></td>
        </tr>
        <tr>
          <td width="47%"><div align="center"></div></td>
          <td width="5%">&nbsp;</td>
          <td width="48%"><div align="center">NIY : <? echo $tpk4['nip']; ?></div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>
</body>
</html>
