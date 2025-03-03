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
.style8 {font-size: 18px; }
.style13 {font-size: 12px; font-weight: bold; }
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
<table width="800" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td height="95" colspan="7" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
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
                    <strong><font size="4">PPMI</font></strong><span class="style1"><font size="4"> SHOHWATUL IS'AD</font></span><br /> 
                      <br /> 
                      <span class="style6">NSS : 202190205004</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="style6">NPSN : 40314482</span><span class="style4"><br />
                      Alamat: Jl. Poros Padanglampe�KM . 3�Ma'rang�Pangkep�Sulawesi - Selatan Hp. 081242518637
                    <br>
                    http://www.shohwatulisad.sch.id - e-mail : info@shohwatulisad.sch.id </span></p>
                  </div></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td colspan="7"><hr /></td>
  </tr>
  <tr> 
    <td colspan="7">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="7"><div align="center" class="style5"><font size="3">LAPORAN HASIL PEMBINAAN KARAKTER </font></div></td>
  </tr>
  <tr>
    <td colspan="7"><div align="center"><font size="2">SEMESTER 
      <? if($sem=='I') { echo "GANJIL"; }else{ echo"GENAP"; }?>
    TAHUN AJARAN <? echo $thaj; ?></font></div>    </td>
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
    <td>&nbsp;</td> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
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
    <td width="1%">&nbsp;</td> 
    <td width="9%" height="27"><span class="style13">NIS/NISN</span></td>
    <td width="2%"><span class="style13">:</span></td>
    <td width="56%"><span class="style4"><? echo $ct['nis']." / ". $ct['nis_nasional']; ?></span></td>
    <td width="10%">&nbsp;</td>
    <td width="2%">&nbsp;</td>
    <td width="20%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td> 
    <td height="27"><span class="style4"><strong>Nama</strong></span></td>
    <td><span class="style4"><strong>:</strong></span></td>
    <td><span class="style4"><? echo $ct['nama']; ?></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td> 
    <td height="27"><span class="style4"><strong>Kelas</strong></span></td>
    <td><span class="style4"><strong>:</strong></span></td>
    <td><span class="style4"><? echo $ct['kelas_st']; ?></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr valign="top"> 
    <td colspan="7">&nbsp;</td>
  </tr>
  <tr valign="top">
    <td height="280" colspan="7"><table width="100%" border="1" cellpadding="3" cellspacing="0" bordercolor="#000000">
      <tr bgcolor="#CCCCCC">
        <td width="5%" height="60"><div align="center" class="style6"><strong>NO.</strong></div></td>
        <td width="37%"><div align="center" class="style5">KOMPONEN</div></td>
        <td width="7%"><div align="center" class="style5">NILAI</div></td>
        <td width="51%"><div align="center" class="style5">DESKRIPSI</div></td>
      </tr>
      <? 
		  /* $mpl=mysqli_query($koneksi, "SELECT kd_mp,nama_mp,ket FROM mata_pelajaran  WHERE ket='MD' ");
          while($cmpl=mysqli_fetch_assoc($mpl)){
	
	      $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='$cmpl[kd_mp]' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi); */
		?>
      <tr>
        <td height="39"><div align="center" class="style6">A.</div></td>
        <td colspan="3"><div align="left" class="style8"><strong>&nbsp;<span class="style6">&nbsp;PEMBINAAN IBADAH </span></strong></div>
            <div align="center" class="style8"></div>
          <div align="center" class="style8"></div></td>
      </tr>
      <tr>
        <td height="34"><div align="center">1.</div></td>
        <td>Sholat Jamaah </td>
        <td><div align="center">
          <?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['solat_jamaah']=='a' or $cnt['solat_jamaah']=='A') { $sj=$sj+4; }
			  if($cnt['solat_jamaah']=='b' or $cnt['solat_jamaah']=='B') { $sj=$sj+3; }
			  if($cnt['solat_jamaah']=='c' or $cnt['solat_jamaah']=='C') { $sj=$sj+2; }
			  if($cnt['solat_jamaah']=='d' or $cnt['solat_jamaah']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds="A"; echo"A"; }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds="B"; echo"B"; }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds="C"; echo"C"; }
		if($t_sj <=1.49){ $ds="D"; echo"D"; }
		}
		?>
        </div></td>
        <td><div align="justify">
            <?
		$des1=mysqli_query($koneksi, "SELECT * FROM tb_diskripsi WHERE kategori='Sholat Jamaah'");
		$j_br=mysqli_num_rows($ntgs);
		while($cds1=mysqli_fetch_assoc($des1)){
		
		 if($ds=='A'){ echo $cds1['a']; }
		 if($ds=='B'){ echo $cds1['b']; }
		 if($ds=='C'){ echo $cds1['c']; }
		 if($ds=='D'){ echo $cds1['d']; }
		 }
		?>
        </div></td>
      </tr>
      <tr>
        <td height="34"><div align="center">2.</div></td>
        <td>Sholat Dhuha </td>
        <td><div align="center">
          <?  $sj=0; $t_sj=0; $ds="";
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['solat_duha']=='a' or $cnt['solat_duha']=='A') { $sj=$sj+4; }
			  if($cnt['solat_duha']=='b' or $cnt['solat_duha']=='B') { $sj=$sj+3; }
			  if($cnt['solat_duha']=='c' or $cnt['solat_duha']=='C') { $sj=$sj+2; }
			  if($cnt['solat_duha']=='d' or $cnt['solat_duha']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds="A"; echo"A"; }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds="B"; echo"B"; }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds="C"; echo"C"; }
		if($t_sj <=1.49){ $ds="D"; echo"D"; } }
		?>
        </div></td>
        <td><div align="justify">
            <?
		$des1=mysqli_query($koneksi, "SELECT * FROM tb_diskripsi WHERE kategori='Shalat Dhuha'");
		$j_br=mysqli_num_rows($ntgs);
		while($cds1=mysqli_fetch_assoc($des1)){
		
		 if($ds=='A'){ echo $cds1['a']; }
		 if($ds=='B'){ echo $cds1['b']; }
		 if($ds=='C'){ echo $cds1['c']; }
		 if($ds=='D'){ echo $cds1['d']; }
		 }
		?>
        </div></td>
      </tr>
      <tr>
        <td height="34"><div align="center">3.</div></td>
        <td>Qiyamullail</td>
        <td><div align="center">
            <?  $sj=0; $t_sj=0; $ds="";
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['qiyamullail']=='a' or $cnt['qiyamullail']=='A') { $sj=$sj+4; }
			  if($cnt['qiyamullail']=='b' or $cnt['qiyamullail']=='B') { $sj=$sj+3; }
			  if($cnt['qiyamullail']=='c' or $cnt['qiyamullail']=='C') { $sj=$sj+2; }
			  if($cnt['qiyamullail']=='d' or $cnt['qiyamullail']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds="A"; echo"A"; }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds="B"; echo"B"; }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds="C"; echo"C"; }
		if($t_sj <=1.49){ $ds="D"; echo"D"; } }
		?>
        </div></td>
        <td><?
		$des1=mysqli_query($koneksi, "SELECT * FROM tb_diskripsi WHERE kategori='qiyamullail'");
		$j_br=mysqli_num_rows($ntgs);
		while($cds1=mysqli_fetch_assoc($des1)){
		
		 if($ds=='A'){ echo $cds1['a']; }
		 if($ds=='B'){ echo $cds1['b']; }
		 if($ds=='C'){ echo $cds1['c']; }
		 if($ds=='D'){ echo $cds1['d']; }
		 }
		?></td>
      </tr>
      <tr>
        <td height="34"><div align="center">4.</div></td>
        <td>Sholat Sunnah Rawatib </td>
        <td><div align="center">
            <?  $sj=0; $t_sj=0; $ds="";
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['sunnah_rawatib']=='a' or $cnt['sunnah_rawatib']=='A') { $sj=$sj+4; }
			  if($cnt['sunnah_rawatib']=='b' or $cnt['sunnah_rawatib']=='B') { $sj=$sj+3; }
			  if($cnt['sunnah_rawatib']=='c' or $cnt['sunnah_rawatib']=='C') { $sj=$sj+2; }
			  if($cnt['sunnah_rawatib']=='d' or $cnt['sunnah_rawatib']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds="A"; echo"A"; }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds="B"; echo"B"; }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds="C"; echo"C"; }
		if($t_sj <=1.49){ $ds="D"; echo"D"; } }
		?>
        </div></td>
        <td><?
		$des1=mysqli_query($koneksi, "SELECT * FROM tb_diskripsi WHERE kategori='sunnah rawatib'");
		$j_br=mysqli_num_rows($ntgs);
		while($cds1=mysqli_fetch_assoc($des1)){
		
		 if($ds=='A'){ echo $cds1['a']; }
		 if($ds=='B'){ echo $cds1['b']; }
		 if($ds=='C'){ echo $cds1['c']; }
		 if($ds=='D'){ echo $cds1['d']; }
		 }
		?>        </td>
      </tr>
      <tr>
        <td height="34"><div align="center">5.</div></td>
        <td>Wirid dan Do'a Ba'da Sholat </td>
        <td><div align="center">
            <?  $sj=0; $t_sj=0; $ds="";
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['wirid_doa']=='a' or $cnt['wirid_doa']=='A') { $sj=$sj+4; }
			  if($cnt['wirid_doa']=='b' or $cnt['wirid_doa']=='B') { $sj=$sj+3; }
			  if($cnt['wirid_doa']=='c' or $cnt['wirid_doa']=='C') { $sj=$sj+2; }
			  if($cnt['wirid_doa']=='d' or $cnt['wirid_doa']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds="A"; echo"A"; }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds="B"; echo"B"; }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds="C"; echo"C"; }
		if($t_sj <=1.49){ $ds="D"; echo"D"; } }
		?>
        </div></td>
        <td><?
		$des1=mysqli_query($koneksi, "SELECT * FROM tb_diskripsi WHERE kategori='wirid dan doa'");
		$j_br=mysqli_num_rows($ntgs);
		while($cds1=mysqli_fetch_assoc($des1)){
		
		 if($ds=='A'){ echo $cds1['a']; }
		 if($ds=='B'){ echo $cds1['b']; }
		 if($ds=='C'){ echo $cds1['c']; }
		 if($ds=='D'){ echo $cds1['d']; }
		 }
		?>        </td>
      </tr>
      <tr>
        <td height="34"><div align="center">6.</div></td>
        <td>Shaum Senin-Kamis </td>
        <td><div align="center">
            <?  $sj=0; $t_sj=0; $ds="";
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['shaum']=='a' or $cnt['shaum']=='A') { $sj=$sj+4; }
			  if($cnt['shaum']=='b' or $cnt['shaum']=='B') { $sj=$sj+3; }
			  if($cnt['shaum']=='c' or $cnt['shaum']=='C') { $sj=$sj+2; }
			  if($cnt['shaum']=='d' or $cnt['shaum']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds="A"; echo"A"; }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds="B"; echo"B"; }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds="C"; echo"C"; }
		if($t_sj <=1.49){ $ds="D"; echo"D"; } }
		?>
        </div></td>
        <td><?
		$des1=mysqli_query($koneksi, "SELECT * FROM tb_diskripsi WHERE kategori='shaum'");
		$j_br=mysqli_num_rows($ntgs);
		while($cds1=mysqli_fetch_assoc($des1)){
		
		 if($ds=='A'){ echo $cds1['a']; }
		 if($ds=='B'){ echo $cds1['b']; }
		 if($ds=='C'){ echo $cds1['c']; }
		 if($ds=='D'){ echo $cds1['d']; }
		 }
		?>        </td>
      </tr>
      <tr>
        <td height="34"><div align="center">7.</div></td>
        <td>Tilawah Al-Qur'an </td>
        <td><div align="center">
            <?  $sj=0; $t_sj=0; $ds="";
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['tilawa']=='a' or $cnt['tilawa']=='A') { $sj=$sj+4; }
			  if($cnt['tilawa']=='b' or $cnt['tilawa']=='B') { $sj=$sj+3; }
			  if($cnt['tilawa']=='c' or $cnt['tilawa']=='C') { $sj=$sj+2; }
			  if($cnt['tilawa']=='d' or $cnt['tilawa']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds="A"; echo"A"; }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds="B"; echo"B"; }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds="C"; echo"C"; }
		if($t_sj <=1.49){ $ds="D"; echo"D"; } }
		?>
        </div></td>
        <td><?
		$des1=mysqli_query($koneksi, "SELECT * FROM tb_diskripsi WHERE kategori='tilawa'");
		$j_br=mysqli_num_rows($ntgs);
		while($cds1=mysqli_fetch_assoc($des1)){
		
		 if($ds=='A'){ echo $cds1['a']; }
		 if($ds=='B'){ echo $cds1['b']; }
		 if($ds=='C'){ echo $cds1['c']; }
		 if($ds=='D'){ echo $cds1['d']; }
		 }
		?>        </td>
      </tr>
      <tr>
        <td height="34"><div align="center">8.</div></td>
        <td>Memimpin Wirid &amp; Do'a Ba'da Sholat </td>
        <td><div align="center">
            <?  $sj=0; $t_sj=0; $ds="";
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['memmimpin_wirid']=='a' or $cnt['memmimpin_wirid']=='A') { $sj=$sj+4; }
			  if($cnt['memmimpin_wirid']=='b' or $cnt['memmimpin_wirid']=='B') { $sj=$sj+3; }
			  if($cnt['memmimpin_wirid']=='c' or $cnt['memmimpin_wirid']=='C') { $sj=$sj+2; }
			  if($cnt['memmimpin_wirid']=='d' or $cnt['memmimpin_wirid']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds="A"; echo"A"; }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds="B"; echo"B"; }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds="C"; echo"C"; }
		if($t_sj <=1.49){ $ds="D"; echo"D"; } }
		?>
        </div></td>
        <td><?
		$des1=mysqli_query($koneksi, "SELECT * FROM tb_diskripsi WHERE kategori='memmimpin_wirid'");
		$j_br=mysqli_num_rows($ntgs);
		while($cds1=mysqli_fetch_assoc($des1)){
		
		 if($ds=='A'){ echo $cds1['a']; }
		 if($ds=='B'){ echo $cds1['b']; }
		 if($ds=='C'){ echo $cds1['c']; }
		 if($ds=='D'){ echo $cds1['d']; }
		 }
		?>        </td>
      </tr>
      <tr>
        <td height="34"><div align="center">9.</div></td>
        <td>Mengumandangkan Adzan </td>
        <td><div align="center">
            <?  $sj=0; $t_sj=0; $ds="";
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['adzan']=='a' or $cnt['adzan']=='A') { $sj=$sj+4; }
			  if($cnt['adzan']=='b' or $cnt['adzan']=='B') { $sj=$sj+3; }
			  if($cnt['adzan']=='c' or $cnt['adzan']=='C') { $sj=$sj+2; }
			  if($cnt['adzan']=='d' or $cnt['adzan']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds="A"; echo"A"; }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds="B"; echo"B"; }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds="C"; echo"C"; }
		if($t_sj <=1.49){ $ds="D"; echo"D"; } }
		?>
        </div></td>
        <td><?
		$des1=mysqli_query($koneksi, "SELECT * FROM tb_diskripsi WHERE kategori='adzan'");
		$j_br=mysqli_num_rows($ntgs);
		while($cds1=mysqli_fetch_assoc($des1)){
		
		 if($ds=='A'){ echo $cds1['a']; }
		 if($ds=='B'){ echo $cds1['b']; }
		 if($ds=='C'){ echo $cds1['c']; }
		 if($ds=='D'){ echo $cds1['d']; }
		 }
		?>        </td>
      </tr>
      <tr>
        <td><div align="center"><strong><span class="style6">B</span></strong></div></td>
        <td height="39" colspan="3"><strong><span class="style6">&nbsp;PEMBINAAN ADAB DAN AKHLAK </span></strong></td>
      </tr>
      <tr>
        <td height="34"><div align="center">1.</div></td>
        <td>Adab Salam </td>
        <td><div align="center">
            <?  $sj=0; $t_sj=0; $ds="";
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['salam']=='a' or $cnt['salam']=='A') { $sj=$sj+4; }
			  if($cnt['salam']=='b' or $cnt['salam']=='B') { $sj=$sj+3; }
			  if($cnt['salam']=='c' or $cnt['salam']=='C') { $sj=$sj+2; }
			  if($cnt['salam']=='d' or $cnt['salam']=='D') { $sj=$sj+1; }
		} 
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds="A"; echo"A"; }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds="B"; echo"B"; }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds="C"; echo"C"; }
		if($t_sj <=1.49){ $ds="D"; echo"D"; } }
		?>
        </div></td>
        <td><?
		$des1=mysqli_query($koneksi, "SELECT * FROM tb_diskripsi WHERE kategori='salam'");
		$j_br=mysqli_num_rows($ntgs);
		while($cds1=mysqli_fetch_assoc($des1)){
		
		 if($ds=='A'){ echo $cds1['a']; }
		 if($ds=='B'){ echo $cds1['b']; }
		 if($ds=='C'){ echo $cds1['c']; }
		 if($ds=='D'){ echo $cds1['d']; }
		 }
		?>        </td>
      </tr>
      <tr>
        <td height="34"><div align="center">2.</div></td>
        <td>Adab Berbicara </td>
        <td><div align="center">
            <?  $sj=0; $t_sj=0; $ds="";
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['berbicara']=='a' or $cnt['berbicara']=='A') { $sj=$sj+4; }
			  if($cnt['berbicara']=='b' or $cnt['berbicara']=='B') { $sj=$sj+3; }
			  if($cnt['berbicara']=='c' or $cnt['berbicara']=='C') { $sj=$sj+2; }
			  if($cnt['berbicara']=='d' or $cnt['berbicara']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds="A"; echo"A"; }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds="B"; echo"B"; }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds="C"; echo"C"; }
		if($t_sj <=1.49){ $ds="D"; echo"D"; } }
		?>
        </div></td>
        <td><?
		$des1=mysqli_query($koneksi, "SELECT * FROM tb_diskripsi WHERE kategori='berbicara'");
		$j_br=mysqli_num_rows($ntgs);
		while($cds1=mysqli_fetch_assoc($des1)){
		
		 if($ds=='A'){ echo $cds1['a']; }
		 if($ds=='B'){ echo $cds1['b']; }
		 if($ds=='C'){ echo $cds1['c']; }
		 if($ds=='D'){ echo $cds1['d']; }
		 }
		?></td>
      </tr>
      <tr>
        <td height="34"><div align="center">3.</div></td>
        <td>Adab Berpakaian </td>
        <td><div align="center">
            <?  $sj=0; $t_sj=0; $ds="";
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['berpakaian']=='a' or $cnt['berpakaian']=='A') { $sj=$sj+4; }
			  if($cnt['berpakaian']=='b' or $cnt['berpakaian']=='B') { $sj=$sj+3; }
			  if($cnt['berpakaian']=='c' or $cnt['berpakaian']=='C') { $sj=$sj+2; }
			  if($cnt['berpakaian']=='d' or $cnt['berpakaian']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds="A"; echo"A"; }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds="B"; echo"B"; }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds="C"; echo"C"; }
		if($t_sj <=1.49){ $ds="D"; echo"D"; } }
		?>
        </div></td>
        <td><?
		$des1=mysqli_query($koneksi, "SELECT * FROM tb_diskripsi WHERE kategori='berpakaian' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cds1=mysqli_fetch_assoc($des1)){
		
		 if($ds=='A'){ echo $cds1['a']; }
		 if($ds=='B'){ echo $cds1['b']; }
		 if($ds=='C'){ echo $cds1['c']; }
		 if($ds=='D'){ echo $cds1['d']; }
		 }
		?></td>
      </tr>
      <tr>
        <td height="34"><div align="center">4.</div></td>
        <td>Adab Makan Minum </td>
        <td><div align="center">
            <?  $sj=0; $t_sj=0;  $ds="";
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['makan_minum']=='a' or $cnt['makan_minum']=='A') { $sj=$sj+4; }
			  if($cnt['makan_minum']=='b' or $cnt['makan_minum']=='B') { $sj=$sj+3; }
			  if($cnt['makan_minum']=='c' or $cnt['makan_minum']=='C') { $sj=$sj+2; }
			  if($cnt['makan_minum']=='d' or $cnt['makan_minum']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds="A"; echo"A"; }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds="B"; echo"B"; }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds="C"; echo"C"; }
		if($t_sj <=1.49){ $ds="D"; echo"D"; } }
		?>
        </div></td>
        <td><?
		$des1=mysqli_query($koneksi, "SELECT * FROM tb_diskripsi WHERE kategori='makan_minum' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cds1=mysqli_fetch_assoc($des1)){
		
		 if($ds=='A'){ echo $cds1['a']; }
		 if($ds=='B'){ echo $cds1['b']; }
		 if($ds=='C'){ echo $cds1['c']; }
		 if($ds=='D'){ echo $cds1['d']; }
		 }
		?></td>
      </tr>
      <tr>
        <td height="34"><div align="center">5.</div></td>
        <td>Adab Belajar </td>
        <td><div align="center">
            <?  $sj=0; $t_sj=0; $ds="";
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['belajar']=='a' or $cnt['belajar']=='A') { $sj=$sj+4; }
			  if($cnt['belajar']=='b' or $cnt['belajar']=='B') { $sj=$sj+3; }
			  if($cnt['belajar']=='c' or $cnt['belajar']=='C') { $sj=$sj+2; }
			  if($cnt['belajar']=='d' or $cnt['belajar']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds="A"; echo"A"; }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds="B"; echo"B"; }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds="C"; echo"C"; }
		if($t_sj <=1.49){ $ds="D"; echo"D"; } }
		?>
        </div></td>
        <td><?
		$des1=mysqli_query($koneksi, "SELECT * FROM tb_diskripsi WHERE kategori='belajar' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cds1=mysqli_fetch_assoc($des1)){
		
		 if($ds=='A'){ echo $cds1['a']; }
		 if($ds=='B'){ echo $cds1['b']; }
		 if($ds=='C'){ echo $cds1['c']; }
		 if($ds=='D'){ echo $cds1['d']; }
		 }
		?></td>
      </tr>
      <tr>
        <td height="34"><div align="center">6.</div></td>
        <td>Adab Terhadap Pembina </td>
        <td><div align="center">
            <?  $sj=0; $t_sj=0; $ds="";
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['adab_kepembina']=='a' or $cnt['adab_kepembina']=='A') { $sj=$sj+4; }
			  if($cnt['adab_kepembina']=='b' or $cnt['adab_kepembina']=='B') { $sj=$sj+3; }
			  if($cnt['adab_kepembina']=='c' or $cnt['adab_kepembina']=='C') { $sj=$sj+2; }
			  if($cnt['adab_kepembina']=='d' or $cnt['adab_kepembina']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds="A"; echo"A"; }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds="B"; echo"B"; }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds="C"; echo"C"; }
		if($t_sj <=1.49){ $ds="D"; echo"D"; } }
		?>
        </div></td>
        <td><?
		$des1=mysqli_query($koneksi, "SELECT * FROM tb_diskripsi WHERE kategori='adab_kepembina' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cds1=mysqli_fetch_assoc($des1)){
		
		 if($ds=='A'){ echo $cds1['a']; }
		 if($ds=='B'){ echo $cds1['b']; }
		 if($ds=='C'){ echo $cds1['c']; }
		 if($ds=='D'){ echo $cds1['d']; }
		 }
		?></td>
      </tr>
      <tr>
        <td height="34"><div align="center">7.</div></td>
        <td>Adab Bergaul Dengan Teman </td>
        <td><div align="center">
          <?  $sj=0; $t_sj=0; $ds="";
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['bergaul']=='a' or $cnt['bergaul']=='A') { $sj=$sj+4; }
			  if($cnt['bergaul']=='b' or $cnt['bergaul']=='B') { $sj=$sj+3; }
			  if($cnt['bergaul']=='c' or $cnt['bergaul']=='C') { $sj=$sj+2; }
			  if($cnt['bergaul']=='d' or $cnt['bergaul']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds="A"; echo"A"; }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds="B"; echo"B"; }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds="C"; echo"C"; }
		if($t_sj <=1.49){ $ds="D"; echo"D"; } }
		?>
        </div></td>
        <td><?
		$des1=mysqli_query($koneksi, "SELECT * FROM tb_diskripsi WHERE kategori='bergaul' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cds1=mysqli_fetch_assoc($des1)){
		
		 if($ds=='A'){ echo $cds1['a']; }
		 if($ds=='B'){ echo $cds1['b']; }
		 if($ds=='C'){ echo $cds1['c']; }
		 if($ds=='D'){ echo $cds1['d']; }
		 }
		?></td>
      </tr>
      <tr>
        <td height="34"><div align="center">8.</div></td>
        <td>Adab Bercanda-Berkelakar </td>
        <td><div align="center">
          <?  $sj=0; $t_sj=0; $ds="";
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['bercanda']=='a' or $cnt['bercanda']=='A') { $sj=$sj+4; }
			  if($cnt['bercanda']=='b' or $cnt['bercanda']=='B') { $sj=$sj+3; }
			  if($cnt['bercanda']=='c' or $cnt['bercanda']=='C') { $sj=$sj+2; }
			  if($cnt['bercanda']=='d' or $cnt['bercanda']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds="A"; echo"A"; }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds="B"; echo"B"; }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds="C"; echo"C"; }
		if($t_sj <=1.49){ $ds="D"; echo"D"; } }
		?>
        </div></td>
        <td><?
		$des1=mysqli_query($koneksi, "SELECT * FROM tb_diskripsi WHERE kategori='bercanda' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cds1=mysqli_fetch_assoc($des1)){
		
		 if($ds=='A'){ echo $cds1['a']; }
		 if($ds=='B'){ echo $cds1['b']; }
		 if($ds=='C'){ echo $cds1['c']; }
		 if($ds=='D'){ echo $cds1['d']; }
		 }
		?></td>
      </tr>
      
    </table></td>
  </tr>
  <tr valign="top">
    <td height="19" colspan="7">&nbsp;</td>
  </tr>
  <tr valign="top">
    <td height="19" colspan="7">&nbsp;</td>
  </tr>
  <tr valign="top">
    <td height="19" colspan="7">&nbsp;</td>
  </tr>
  <tr valign="top">
    <td height="25" colspan="7">&nbsp;</td>
  </tr>
  
  <tr valign="top">
    <td height="19" colspan="7">&nbsp;</td>
  </tr>
  
  <tr valign="top"> 
    <td height="556" colspan="7"><table width="100%" border="1" cellpadding="3" cellspacing="0" bordercolor="#000000">
      <tr>
        <td width="7%" height="39"><div align="center"><strong><span class="style6">C</span></strong></div></td>
        <td colspan="3"><strong><span class="style6">&nbsp; KEDISIPLINAN</span></strong></td>
      </tr>
      <tr>
        <td height="34"><div align="center">1.</div></td>
        <td width="35%">Mengikuti Briefing Malam di Asrama </td>
        <td width="7%"><div align="center">
            <?  $sj=0; $t_sj=0; $ds="";
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['briefing']=='a' or $cnt['briefing']=='A') { $sj=$sj+4; }
			  if($cnt['briefing']=='b' or $cnt['briefing']=='B') { $sj=$sj+3; }
			  if($cnt['briefing']=='c' or $cnt['briefing']=='C') { $sj=$sj+2; }
			  if($cnt['briefing']=='d' or $cnt['briefing']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds="A"; echo"A"; }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds="B"; echo"B"; }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds="C"; echo"C"; }
		if($t_sj <=1.49){ $ds="D"; echo"D"; } }
		?>
        </div></td>
        <td width="51%"><?
		$des1=mysqli_query($koneksi, "SELECT * FROM tb_diskripsi WHERE kategori='briefing' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cds1=mysqli_fetch_assoc($des1)){
		
		 if($ds=='A'){ echo $cds1['a']; }
		 if($ds=='B'){ echo $cds1['b']; }
		 if($ds=='C'){ echo $cds1['c']; }
		 if($ds=='D'){ echo $cds1['d']; }
		 }
		?></td>
      </tr>
      <tr>
        <td height="34"><div align="center">2.</div></td>
        <td>Disiplin waktu perizinan - kepulangan reguler </td>
        <td><div align="center">
            <?  $sj=0; $t_sj=0; $ds="";
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['izin_pulang']=='a' or $cnt['izin_pulang']=='A') { $sj=$sj+4; }
			  if($cnt['izin_pulang']=='b' or $cnt['izin_pulang']=='B') { $sj=$sj+3; }
			  if($cnt['izin_pulang']=='c' or $cnt['izin_pulang']=='C') { $sj=$sj+2; }
			  if($cnt['izin_pulang']=='d' or $cnt['izin_pulang']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds="A"; echo"A"; }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds="B"; echo"B"; }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds="C"; echo"C"; }
		if($t_sj <=1.49){ $ds="D"; echo"D"; } }
		?>
        </div></td>
        <td><?
		$des1=mysqli_query($koneksi, "SELECT * FROM tb_diskripsi WHERE kategori='izin_pulang' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cds1=mysqli_fetch_assoc($des1)){
		
		 if($ds=='A'){ echo $cds1['a']; }
		 if($ds=='B'){ echo $cds1['b']; }
		 if($ds=='C'){ echo $cds1['c']; }
		 if($ds=='D'){ echo $cds1['d']; }
		 }
		?></td>
      </tr>
      <tr>
        <td height="34"><div align="center">3.</div></td>
        <td>Disiplin mengikuti kegiatan asrama </td>
        <td><div align="center">
            <?  $sj=0; $t_sj=0; $ds="";
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['kegiatan_asrama']=='a' or $cnt['kegiatan_asrama']=='A') { $sj=$sj+4; }
			  if($cnt['kegiatan_asrama']=='b' or $cnt['kegiatan_asrama']=='B') { $sj=$sj+3; }
			  if($cnt['kegiatan_asrama']=='c' or $cnt['kegiatan_asrama']=='C') { $sj=$sj+2; }
			  if($cnt['kegiatan_asrama']=='d' or $cnt['kegiatan_asrama']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds="A"; echo"A"; }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds="B"; echo"B"; }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds="C"; echo"C"; }
		if($t_sj <=1.49){ $ds="D"; echo"D"; } }
		?>
        </div></td>
        <td><?
		$des1=mysqli_query($koneksi, "SELECT * FROM tb_diskripsi WHERE kategori='kegiatan_asrama' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cds1=mysqli_fetch_assoc($des1)){
		
		 if($ds=='A'){ echo $cds1['a']; }
		 if($ds=='B'){ echo $cds1['b']; }
		 if($ds=='C'){ echo $cds1['c']; }
		 if($ds=='D'){ echo $cds1['d']; }
		 }
		?></td>
      </tr>
      <tr>
        <td height="34"><div align="center">4.</div></td>
        <td>Disiplin belajar mandiri </td>
        <td><div align="center">
            <?  $sj=0; $t_sj=0; $ds="";
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['belajar_mandiri']=='a' or $cnt['belajar_mandiri']=='A') { $sj=$sj+4; }
			  if($cnt['belajar_mandiri']=='b' or $cnt['belajar_mandiri']=='B') { $sj=$sj+3; }
			  if($cnt['belajar_mandiri']=='c' or $cnt['belajar_mandiri']=='C') { $sj=$sj+2; }
			  if($cnt['belajar_mandiri']=='d' or $cnt['belajar_mandiri']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds="A"; echo"A"; }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds="B"; echo"B"; }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds="C"; echo"C"; }
		if($t_sj <=1.49){ $ds="D"; echo"D"; } }
		?>
        </div></td>
        <td><?
		$des1=mysqli_query($koneksi, "SELECT * FROM tb_diskripsi WHERE kategori='belajar_mandiri' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cds1=mysqli_fetch_assoc($des1)){
		
		 if($ds=='A'){ echo $cds1['a']; }
		 if($ds=='B'){ echo $cds1['b']; }
		 if($ds=='C'){ echo $cds1['c']; }
		 if($ds=='D'){ echo $cds1['d']; }
		 }
		?></td>
      </tr>
      <tr>
        <td height="34"><div align="center">5.</div></td>
        <td>Disiplin berbahasa inggris </td>
        <td><div align="center">
            <?  $sj=0; $t_sj=0; $ds="";
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['berbahasa_inggris']=='a' or $cnt['berbahasa_inggris']=='A') { $sj=$sj+4; }
			  if($cnt['berbahasa_inggris']=='b' or $cnt['berbahasa_inggris']=='B') { $sj=$sj+3; }
			  if($cnt['berbahasa_inggris']=='c' or $cnt['berbahasa_inggris']=='C') { $sj=$sj+2; }
			  if($cnt['berbahasa_inggris']=='d' or $cnt['berbahasa_inggris']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds="A"; echo"A"; }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds="B"; echo"B"; }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds="C"; echo"C"; }
		if($t_sj <=1.49){ $ds="D"; echo"D"; } }
		?>
        </div></td>
        <td><?
		$des1=mysqli_query($koneksi, "SELECT * FROM tb_diskripsi WHERE kategori='berbahasa_inggris' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cds1=mysqli_fetch_assoc($des1)){
		
		 if($ds=='A'){ echo $cds1['a']; }
		 if($ds=='B'){ echo $cds1['b']; }
		 if($ds=='C'){ echo $cds1['c']; }
		 if($ds=='D'){ echo $cds1['d']; }
		 }
		?></td>
      </tr>
      <tr>
        <td height="34"><div align="center">6.</div></td>
        <td>Disiplin mengikuti kegiatan belajar malam </td>
        <td><div align="center">
            <?  $sj=0; $t_sj=0; $ds="";
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['belajar_malam']=='a' or $cnt['belajar_malam']=='A') { $sj=$sj+4; }
			  if($cnt['belajar_malam']=='b' or $cnt['belajar_malam']=='B') { $sj=$sj+3; }
			  if($cnt['belajar_malam']=='c' or $cnt['belajar_malam']=='C') { $sj=$sj+2; }
			  if($cnt['belajar_malam']=='d' or $cnt['belajar_malam']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds="A"; echo"A"; }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds="B"; echo"B"; }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds="C"; echo"C"; }
		if($t_sj <=1.49){ $ds="D"; echo"D"; } }
		?>
        </div></td>
        <td><?
		$des1=mysqli_query($koneksi, "SELECT * FROM tb_diskripsi WHERE kategori='belajar_malam' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cds1=mysqli_fetch_assoc($des1)){
		
		 if($ds=='A'){ echo $cds1['a']; }
		 if($ds=='B'){ echo $cds1['b']; }
		 if($ds=='C'){ echo $cds1['c']; }
		 if($ds=='D'){ echo $cds1['d']; }
		 }
		?></td>
      </tr>
      <tr>
        <td height="34"><div align="center">7.</div></td>
        <td>Disiplin berbahasa arab </td>
        <td><div align="center">
            <?  $sj=0; $t_sj=0; $ds="";
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['berbahasa_arab']=='a' or $cnt['berbahasa_arab']=='A') { $sj=$sj+4; }
			  if($cnt['berbahasa_arab']=='b' or $cnt['berbahasa_arab']=='B') { $sj=$sj+3; }
			  if($cnt['berbahasa_arab']=='c' or $cnt['berbahasa_arab']=='C') { $sj=$sj+2; }
			  if($cnt['berbahasa_arab']=='d' or $cnt['berbahasa_arab']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds="A"; echo"A"; }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds="B"; echo"B"; }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds="C"; echo"C"; }
		if($t_sj <=1.49){ $ds="D"; echo"D"; } }
		?>
        </div></td>
        <td><?
		$des1=mysqli_query($koneksi, "SELECT * FROM tb_diskripsi WHERE kategori='berbahasa_arab' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cds1=mysqli_fetch_assoc($des1)){
		
		 if($ds=='A'){ echo $cds1['a']; }
		 if($ds=='B'){ echo $cds1['b']; }
		 if($ds=='C'){ echo $cds1['c']; }
		 if($ds=='D'){ echo $cds1['d']; }
		 }
		?></td>
      </tr>
      <tr>
        <td height="34"><div align="center">8.</div></td>
        <td>Disiplin tidur </td>
        <td><div align="center">
            <?  $sj=0; $t_sj=0; $ds="";
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['tidur']=='a' or $cnt['tidur']=='A') { $sj=$sj+4; }
			  if($cnt['tidur']=='b' or $cnt['tidur']=='B') { $sj=$sj+3; }
			  if($cnt['tidur']=='c' or $cnt['tidur']=='C') { $sj=$sj+2; }
			  if($cnt['tidur']=='d' or $cnt['tidur']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds="A"; echo"A"; }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds="B"; echo"B"; }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds="C"; echo"C"; }
		if($t_sj <=1.49){ $ds="D"; echo"D"; } }
		?>
        </div></td>
        <td><?
		$des1=mysqli_query($koneksi, "SELECT * FROM tb_diskripsi WHERE kategori='tidur' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cds1=mysqli_fetch_assoc($des1)){
		
		 if($ds=='A'){ echo $cds1['a']; }
		 if($ds=='B'){ echo $cds1['b']; }
		 if($ds=='C'){ echo $cds1['c']; }
		 if($ds=='D'){ echo $cds1['d']; }
		 }
		?></td>
      </tr>
      <tr>
        <td height="39"><div align="center"><strong><span class="style6">D</span></strong></div></td>
        <td colspan="3"><strong> <span class="style6">&nbsp; KEBERSIHAN DAN KERAPIHAN</span> </strong></td>
      </tr>
      <tr>
        <td height="34"><div align="center">1.</div></td>
        <td>Menjaga kebersihan diri (mandi dan sikat gigi) </td>
        <td><div align="center">
            <?  $sj=0; $t_sj=0; $ds="";
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['bersih_diri']=='a' or $cnt['bersih_diri']=='A') { $sj=$sj+4; }
			  if($cnt['bersih_diri']=='b' or $cnt['bersih_diri']=='B') { $sj=$sj+3; }
			  if($cnt['bersih_diri']=='c' or $cnt['bersih_diri']=='C') { $sj=$sj+2; }
			  if($cnt['bersih_diri']=='d' or $cnt['bersih_diri']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds="A"; echo"A"; }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds="B"; echo"B"; }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds="C"; echo"C"; }
		if($t_sj <=1.49){ $ds="D"; echo"D"; } }
		?>
        </div></td>
        <td><?
		$des1=mysqli_query($koneksi, "SELECT * FROM tb_diskripsi WHERE kategori='bersih_diri'");
		$j_br=mysqli_num_rows($ntgs);
		while($cds1=mysqli_fetch_assoc($des1)){
		
		 if($ds=='A'){ echo $cds1['a']; }
		 if($ds=='B'){ echo $cds1['b']; }
		 if($ds=='C'){ echo $cds1['c']; }
		 if($ds=='D'){ echo $cds1['d']; }
		 }
		?></td>
      </tr>
      <tr>
        <td height="34"><div align="center">2.</div></td>
        <td>Rapi rambut dan kuku </td>
        <td><div align="center">
            <?  $sj=0; $t_sj=0; $ds="";
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['rapi_rambut_kuku']=='a' or $cnt['rapi_rambut_kuku']=='A') { $sj=$sj+4; }
			  if($cnt['rapi_rambut_kuku']=='b' or $cnt['rapi_rambut_kuku']=='B') { $sj=$sj+3; }
			  if($cnt['rapi_rambut_kuku']=='c' or $cnt['rapi_rambut_kuku']=='C') { $sj=$sj+2; }
			  if($cnt['rapi_rambut_kuku']=='d' or $cnt['rapi_rambut_kuku']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds="A"; echo"A"; }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds="B"; echo"B"; }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds="C"; echo"C"; }
		if($t_sj <=1.49){ $ds="D"; echo"D"; } }
		?>
        </div></td>
        <td><?
		$des1=mysqli_query($koneksi, "SELECT * FROM tb_diskripsi WHERE kategori='rapi_rambut_kuku'");
		$j_br=mysqli_num_rows($ntgs);
		while($cds1=mysqli_fetch_assoc($des1)){
		
		 if($ds=='A'){ echo $cds1['a']; }
		 if($ds=='B'){ echo $cds1['b']; }
		 if($ds=='C'){ echo $cds1['c']; }
		 if($ds=='D'){ echo $cds1['d']; }
		 }
		?></td>
      </tr>
      <tr>
        <td height="34"><div align="center">3.</div></td>
        <td>Menjaga kebersihan kamar dan lingkungan kamar </td>
        <td><div align="center">
            <?  $sj=0; $t_sj=0; $ds="";
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['kebersihan_kamar']=='a' or $cnt['kebersihan_kamar']=='A') { $sj=$sj+4; }
			  if($cnt['kebersihan_kamar']=='b' or $cnt['kebersihan_kamar']=='B') { $sj=$sj+3; }
			  if($cnt['kebersihan_kamar']=='c' or $cnt['kebersihan_kamar']=='C') { $sj=$sj+2; }
			  if($cnt['kebersihan_kamar']=='d' or $cnt['kebersihan_kamar']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds="A"; echo"A"; }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds="B"; echo"B"; }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds="C"; echo"C"; }
		if($t_sj <=1.49){ $ds="D"; echo"D"; } }
		?>
        </div></td>
        <td><?
		$des1=mysqli_query($koneksi, "SELECT * FROM tb_diskripsi WHERE kategori='kebersihan_kamar' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cds1=mysqli_fetch_assoc($des1)){
		
		 if($ds=='A'){ echo $cds1['a']; }
		 if($ds=='B'){ echo $cds1['b']; }
		 if($ds=='C'){ echo $cds1['c']; }
		 if($ds=='D'){ echo $cds1['d']; }
		 }
		?></td>
      </tr>
      <tr>
        <td height="34"><div align="center">4.</div></td>
        <td>Menjaga kerapihan kamar-lemari pakaian </td>
        <td><div align="center">
            <?  $sj=0; $t_sj=0; $ds="";
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['kerapihan_kamar']=='a' or $cnt['kerapihan_kamar']=='A') { $sj=$sj+4; }
			  if($cnt['kerapihan_kamar']=='b' or $cnt['kerapihan_kamar']=='B') { $sj=$sj+3; }
			  if($cnt['kerapihan_kamar']=='c' or $cnt['kerapihan_kamar']=='C') { $sj=$sj+2; }
			  if($cnt['kerapihan_kamar']=='d' or $cnt['kerapihan_kamar']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds="A"; echo"A"; }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds="B"; echo"B"; }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds="C"; echo"C"; }
		if($t_sj <=1.49){ $ds="D"; echo"D"; } }
		?>
        </div></td>
        <td><?
		$des1=mysqli_query($koneksi, "SELECT * FROM tb_diskripsi WHERE kategori='kerapihan_kamar' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cds1=mysqli_fetch_assoc($des1)){
		
		 if($ds=='A'){ echo $cds1['a']; }
		 if($ds=='B'){ echo $cds1['b']; }
		 if($ds=='C'){ echo $cds1['c']; }
		 if($ds=='D'){ echo $cds1['d']; }
		 }
		?></td>
      </tr>
      <tr>
        <td height="34"><div align="center">5.</div></td>
        <td>Rapi dalam berseragam </td>
        <td><div align="center">
            <?  $sj=0; $t_sj=0; $ds="";
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['rapi_berseragam']=='a' or $cnt['rapi_berseragam']=='A') { $sj=$sj+4; }
			  if($cnt['rapi_berseragam']=='b' or $cnt['rapi_berseragam']=='B') { $sj=$sj+3; }
			  if($cnt['rapi_berseragam']=='c' or $cnt['rapi_berseragam']=='C') { $sj=$sj+2; }
			  if($cnt['rapi_berseragam']=='d' or $cnt['rapi_berseragam']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds="A"; echo"A"; }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds="B"; echo"B"; }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds="C"; echo"C"; }
		if($t_sj <=1.49){ $ds="D"; echo"D"; } }
		?>
        </div></td>
        <td><?
		$des1=mysqli_query($koneksi, "SELECT * FROM tb_diskripsi WHERE kategori='rapi_berseragam' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cds1=mysqli_fetch_assoc($des1)){
		
		 if($ds=='A'){ echo $cds1['a']; }
		 if($ds=='B'){ echo $cds1['b']; }
		 if($ds=='C'){ echo $cds1['c']; }
		 if($ds=='D'){ echo $cds1['d']; }
		 }
		?></td>
      </tr>
      <tr>
        <td height="34"><div align="center">6.</div></td>
        <td>Rapi menyimpan barang-barang pribadi </td>
        <td><div align="center">
            <?  $sj=0; $t_sj=0; $ds="";
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['rapi_menyimpan_barang']=='a' or $cnt['rapi_menyimpan_barang']=='A') { $sj=$sj+4; }
			  if($cnt['rapi_menyimpan_barang']=='b' or $cnt['rapi_menyimpan_barang']=='B') { $sj=$sj+3; }
			  if($cnt['rapi_menyimpan_barang']=='c' or $cnt['rapi_menyimpan_barang']=='C') { $sj=$sj+2; }
			  if($cnt['rapi_menyimpan_barang']=='d' or $cnt['rapi_menyimpan_barang']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds="A"; echo"A"; }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds="B"; echo"B"; }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds="C"; echo"C"; }
		if($t_sj <=1.49){ $ds="D"; echo"D"; } }
		?>
        </div></td>
        <td><?
		$des1=mysqli_query($koneksi, "SELECT * FROM tb_diskripsi WHERE kategori='rapi_menyimpan_barang' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cds1=mysqli_fetch_assoc($des1)){
		
		 if($ds=='A'){ echo $cds1['a']; }
		 if($ds=='B'){ echo $cds1['b']; }
		 if($ds=='C'){ echo $cds1['c']; }
		 if($ds=='D'){ echo $cds1['d']; }
		 }
		?></td>
      </tr>
    </table></td>
  </tr>
  <tr height="12">
    <td height="2" colspan="7" valign="top"></td>
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
    <td colspan="7" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td height="77" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><strong>&nbsp;Catatan Wali Asrama :</strong></td>
            </tr>
            <tr>
              <td height="55" valign="top"><?
			$cw=mysqli_query($koneksi, "SELECT * FROM tb_catatan_wf WHERE nis='$ct[nis]' and thn_ajaran='$thaj' and semester='$sem' and kelas='$ct[kelas_st]' ");
            $ccw=mysqli_fetch_assoc($cw);
				
			echo $ccw['catatan'];
			?>              </td>
            </tr>
        </table></td>
      </tr>
    </table></td>
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
    <td height="116" colspan="7" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><div align="center">Mengetahui : </div></td>
        <td>&nbsp;</td>
        <td><div align="center">Pangkep, 20 Juni 2024 </div></td>
      </tr>
      <tr>
        <td><div align="center">Orang Tua Wali</div></td>
        <td><div align="center">Kepala Kesantrian </div></td>
        <td><div align="center">Wali Asrama  </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td rowspan="5" valign="bottom"><div align="center"></div></td>
        <td rowspan="5">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        </tr>
      
      <tr>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td width="30%"><div align="center">
          <div align="center">
            <p>(______________________________)</p>
            </div>
        </div></td>
        <td width="34%"><div align="center">(______________________________)</div></td>
        <td width="36%"><div align="center">
          <div align="center">
            <p>(______________________________)</p>
          </div>
        </div></td>
      </tr>
    </table></td>
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
</table>

</body>
</html>
