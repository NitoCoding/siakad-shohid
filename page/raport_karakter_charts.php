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
    <td height="14" colspan="7" valign="top"></td>
  </tr>
  <tr>
    <td height="19" colspan="7" valign="top"><font size="3">LAPORAN HASIL PEMBINAAN KARAKTER </font></td>
  </tr>
  <tr>
    <td height="19" colspan="7" valign="top"><font size="3">SEMESTER
        <? if($sem=='I') { echo "GANJIL"; }else{ echo"GENAP"; }?>
TAHUN AJARAN <? echo $thaj; ?></font></td>
  </tr>
  <tr>
    <td height="7" colspan="7" valign="top"></td>
  </tr>
  <tr> 
    <td height="12" colspan="7" valign="top" bgcolor="#999999"></td>
  </tr>
  <tr> 
    <td colspan="7"><hr /></td>
  </tr>
  
  
  
  
  <tr>
    <td height="13"></td> 
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
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
    <td width="3%">&nbsp;</td>
    <td width="19%">&nbsp;</td>
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
    <td height="14" colspan="7"><?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='1' and nis='$ct[nis]' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['solat_jamaah']=='a' or $cnt['solat_jamaah']=='A') { $sj=$sj+4; }
			  if($cnt['solat_jamaah']=='b' or $cnt['solat_jamaah']=='B') { $sj=$sj+3; }
			  if($cnt['solat_jamaah']=='c' or $cnt['solat_jamaah']=='C') { $sj=$sj+2; }
			  if($cnt['solat_jamaah']=='d' or $cnt['solat_jamaah']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds="C";  }
		if($t_sj <=1.49){ $ds="D";  }
		}
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='1' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['solat_duha']=='a' or $cnt['solat_duha']=='A') { $sj=$sj+4; }
			  if($cnt['solat_duha']=='b' or $cnt['solat_duha']=='B') { $sj=$sj+3; }
			  if($cnt['solat_duha']=='c' or $cnt['solat_duha']=='C') { $sj=$sj+2; }
			  if($cnt['solat_duha']=='d' or $cnt['solat_duha']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds1="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds1="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds1="C";  }
		if($t_sj <=1.49){ $ds1="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='1' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['qiyamullail']=='a' or $cnt['qiyamullail']=='A') { $sj=$sj+4; }
			  if($cnt['qiyamullail']=='b' or $cnt['qiyamullail']=='B') { $sj=$sj+3; }
			  if($cnt['qiyamullail']=='c' or $cnt['qiyamullail']=='C') { $sj=$sj+2; }
			  if($cnt['qiyamullail']=='d' or $cnt['qiyamullail']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds2="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds2="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds2="C";  }
		if($t_sj <=1.49){ $ds2="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='1' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['sunnah_rawatib']=='a' or $cnt['sunnah_rawatib']=='A') { $sj=$sj+4; }
			  if($cnt['sunnah_rawatib']=='b' or $cnt['sunnah_rawatib']=='B') { $sj=$sj+3; }
			  if($cnt['sunnah_rawatib']=='c' or $cnt['sunnah_rawatib']=='C') { $sj=$sj+2; }
			  if($cnt['sunnah_rawatib']=='d' or $cnt['sunnah_rawatib']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds3="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds3="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds3="C";  }
		if($t_sj <=1.49){ $ds3="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='1' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['wirid_doa']=='a' or $cnt['wirid_doa']=='A') { $sj=$sj+4; }
			  if($cnt['wirid_doa']=='b' or $cnt['wirid_doa']=='B') { $sj=$sj+3; }
			  if($cnt['wirid_doa']=='c' or $cnt['wirid_doa']=='C') { $sj=$sj+2; }
			  if($cnt['wirid_doa']=='d' or $cnt['wirid_doa']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds4="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds4="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds4="C";  }
		if($t_sj <=1.49){ $ds4="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='1' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['shaum']=='a' or $cnt['shaum']=='A') { $sj=$sj+4; }
			  if($cnt['shaum']=='b' or $cnt['shaum']=='B') { $sj=$sj+3; }
			  if($cnt['shaum']=='c' or $cnt['shaum']=='C') { $sj=$sj+2; }
			  if($cnt['shaum']=='d' or $cnt['shaum']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds5="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds5="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds5="C";  }
		if($t_sj <=1.49){ $ds5="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='1' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['tilawa']=='a' or $cnt['tilawa']=='A') { $sj=$sj+4; }
			  if($cnt['tilawa']=='b' or $cnt['tilawa']=='B') { $sj=$sj+3; }
			  if($cnt['tilawa']=='c' or $cnt['tilawa']=='C') { $sj=$sj+2; }
			  if($cnt['tilawa']=='d' or $cnt['tilawa']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds6="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds6="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds6="C";  }
		if($t_sj <=1.49){ $ds6="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='1' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['memmimpin_wirid']=='a' or $cnt['memmimpin_wirid']=='A') { $sj=$sj+4; }
			  if($cnt['memmimpin_wirid']=='b' or $cnt['memmimpin_wirid']=='B') { $sj=$sj+3; }
			  if($cnt['memmimpin_wirid']=='c' or $cnt['memmimpin_wirid']=='C') { $sj=$sj+2; }
			  if($cnt['memmimpin_wirid']=='d' or $cnt['memmimpin_wirid']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds7="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds7="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds7="C";  }
		if($t_sj <=1.49){ $ds7="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='1' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['adzan']=='a' or $cnt['adzan']=='A') { $sj=$sj+4; }
			  if($cnt['adzan']=='b' or $cnt['adzan']=='B') { $sj=$sj+3; }
			  if($cnt['adzan']=='c' or $cnt['adzan']=='C') { $sj=$sj+2; }
			  if($cnt['adzan']=='d' or $cnt['adzan']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds8="A"; }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds8="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds8="C";  }
		if($t_sj <=1.49){ $ds8="D";  } }
		?>
      <?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='2' and nis='$ct[nis]' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['solat_jamaah']=='a' or $cnt['solat_jamaah']=='A') { $sj=$sj+4; }
			  if($cnt['solat_jamaah']=='b' or $cnt['solat_jamaah']=='B') { $sj=$sj+3; }
			  if($cnt['solat_jamaah']=='c' or $cnt['solat_jamaah']=='C') { $sj=$sj+2; }
			  if($cnt['solat_jamaah']=='d' or $cnt['solat_jamaah']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds9="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds9="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds9="C";  }
		if($t_sj <=1.49){ $ds9="D";  }
		}
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='2' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['solat_duha']=='a' or $cnt['solat_duha']=='A') { $sj=$sj+4; }
			  if($cnt['solat_duha']=='b' or $cnt['solat_duha']=='B') { $sj=$sj+3; }
			  if($cnt['solat_duha']=='c' or $cnt['solat_duha']=='C') { $sj=$sj+2; }
			  if($cnt['solat_duha']=='d' or $cnt['solat_duha']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds10="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds10="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds10="C";  }
		if($t_sj <=1.49){ $ds10="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='2' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['qiyamullail']=='a' or $cnt['qiyamullail']=='A') { $sj=$sj+4; }
			  if($cnt['qiyamullail']=='b' or $cnt['qiyamullail']=='B') { $sj=$sj+3; }
			  if($cnt['qiyamullail']=='c' or $cnt['qiyamullail']=='C') { $sj=$sj+2; }
			  if($cnt['qiyamullail']=='d' or $cnt['qiyamullail']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds11="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds11="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds11="C";  }
		if($t_sj <=1.49){ $ds11="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='2' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['sunnah_rawatib']=='a' or $cnt['sunnah_rawatib']=='A') { $sj=$sj+4; }
			  if($cnt['sunnah_rawatib']=='b' or $cnt['sunnah_rawatib']=='B') { $sj=$sj+3; }
			  if($cnt['sunnah_rawatib']=='c' or $cnt['sunnah_rawatib']=='C') { $sj=$sj+2; }
			  if($cnt['sunnah_rawatib']=='d' or $cnt['sunnah_rawatib']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds12="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds12="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds12="C";  }
		if($t_sj <=1.49){ $ds12="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='2' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['wirid_doa']=='a' or $cnt['wirid_doa']=='A') { $sj=$sj+4; }
			  if($cnt['wirid_doa']=='b' or $cnt['wirid_doa']=='B') { $sj=$sj+3; }
			  if($cnt['wirid_doa']=='c' or $cnt['wirid_doa']=='C') { $sj=$sj+2; }
			  if($cnt['wirid_doa']=='d' or $cnt['wirid_doa']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds13="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds13="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds13="C";  }
		if($t_sj <=1.49){ $ds13="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='2' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['shaum']=='a' or $cnt['shaum']=='A') { $sj=$sj+4; }
			  if($cnt['shaum']=='b' or $cnt['shaum']=='B') { $sj=$sj+3; }
			  if($cnt['shaum']=='c' or $cnt['shaum']=='C') { $sj=$sj+2; }
			  if($cnt['shaum']=='d' or $cnt['shaum']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds14="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds14="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds14="C";  }
		if($t_sj <=1.49){ $ds14="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='2' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['tilawa']=='a' or $cnt['tilawa']=='A') { $sj=$sj+4; }
			  if($cnt['tilawa']=='b' or $cnt['tilawa']=='B') { $sj=$sj+3; }
			  if($cnt['tilawa']=='c' or $cnt['tilawa']=='C') { $sj=$sj+2; }
			  if($cnt['tilawa']=='d' or $cnt['tilawa']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds15="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds15="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds15="C";  }
		if($t_sj <=1.49){ $ds15="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='2' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['memmimpin_wirid']=='a' or $cnt['memmimpin_wirid']=='A') { $sj=$sj+4; }
			  if($cnt['memmimpin_wirid']=='b' or $cnt['memmimpin_wirid']=='B') { $sj=$sj+3; }
			  if($cnt['memmimpin_wirid']=='c' or $cnt['memmimpin_wirid']=='C') { $sj=$sj+2; }
			  if($cnt['memmimpin_wirid']=='d' or $cnt['memmimpin_wirid']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds16="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds16="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds16="C";  }
		if($t_sj <=1.49){ $ds16="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='2' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['adzan']=='a' or $cnt['adzan']=='A') { $sj=$sj+4; }
			  if($cnt['adzan']=='b' or $cnt['adzan']=='B') { $sj=$sj+3; }
			  if($cnt['adzan']=='c' or $cnt['adzan']=='C') { $sj=$sj+2; }
			  if($cnt['adzan']=='d' or $cnt['adzan']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds17="A"; }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds17="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds17="C";  }
		if($t_sj <=1.49){ $ds17="D";  } }
		?>
      <?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='3' and nis='$ct[nis]' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['solat_jamaah']=='a' or $cnt['solat_jamaah']=='A') { $sj=$sj+4; }
			  if($cnt['solat_jamaah']=='b' or $cnt['solat_jamaah']=='B') { $sj=$sj+3; }
			  if($cnt['solat_jamaah']=='c' or $cnt['solat_jamaah']=='C') { $sj=$sj+2; }
			  if($cnt['solat_jamaah']=='d' or $cnt['solat_jamaah']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds18="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds18="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds18="C";  }
		if($t_sj <=1.49){ $ds18="D";  }
		}
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='3' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['solat_duha']=='a' or $cnt['solat_duha']=='A') { $sj=$sj+4; }
			  if($cnt['solat_duha']=='b' or $cnt['solat_duha']=='B') { $sj=$sj+3; }
			  if($cnt['solat_duha']=='c' or $cnt['solat_duha']=='C') { $sj=$sj+2; }
			  if($cnt['solat_duha']=='d' or $cnt['solat_duha']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds19="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds19="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds19="C";  }
		if($t_sj <=1.49){ $ds19="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='3' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['qiyamullail']=='a' or $cnt['qiyamullail']=='A') { $sj=$sj+4; }
			  if($cnt['qiyamullail']=='b' or $cnt['qiyamullail']=='B') { $sj=$sj+3; }
			  if($cnt['qiyamullail']=='c' or $cnt['qiyamullail']=='C') { $sj=$sj+2; }
			  if($cnt['qiyamullail']=='d' or $cnt['qiyamullail']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds20="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds20="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds20="C";  }
		if($t_sj <=1.49){ $ds20="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='3' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['sunnah_rawatib']=='a' or $cnt['sunnah_rawatib']=='A') { $sj=$sj+4; }
			  if($cnt['sunnah_rawatib']=='b' or $cnt['sunnah_rawatib']=='B') { $sj=$sj+3; }
			  if($cnt['sunnah_rawatib']=='c' or $cnt['sunnah_rawatib']=='C') { $sj=$sj+2; }
			  if($cnt['sunnah_rawatib']=='d' or $cnt['sunnah_rawatib']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds21="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds21="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds21="C";  }
		if($t_sj <=1.49){ $ds21="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='3' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['wirid_doa']=='a' or $cnt['wirid_doa']=='A') { $sj=$sj+4; }
			  if($cnt['wirid_doa']=='b' or $cnt['wirid_doa']=='B') { $sj=$sj+3; }
			  if($cnt['wirid_doa']=='c' or $cnt['wirid_doa']=='C') { $sj=$sj+2; }
			  if($cnt['wirid_doa']=='d' or $cnt['wirid_doa']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds22="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds22="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds22="C";  }
		if($t_sj <=1.49){ $ds22="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='3' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['shaum']=='a' or $cnt['shaum']=='A') { $sj=$sj+4; }
			  if($cnt['shaum']=='b' or $cnt['shaum']=='B') { $sj=$sj+3; }
			  if($cnt['shaum']=='c' or $cnt['shaum']=='C') { $sj=$sj+2; }
			  if($cnt['shaum']=='d' or $cnt['shaum']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds23="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds23="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds23="C";  }
		if($t_sj <=1.49){ $ds23="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='3' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['tilawa']=='a' or $cnt['tilawa']=='A') { $sj=$sj+4; }
			  if($cnt['tilawa']=='b' or $cnt['tilawa']=='B') { $sj=$sj+3; }
			  if($cnt['tilawa']=='c' or $cnt['tilawa']=='C') { $sj=$sj+2; }
			  if($cnt['tilawa']=='d' or $cnt['tilawa']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds24="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds24="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds24="C";  }
		if($t_sj <=1.49){ $ds24="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='3' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['memmimpin_wirid']=='a' or $cnt['memmimpin_wirid']=='A') { $sj=$sj+4; }
			  if($cnt['memmimpin_wirid']=='b' or $cnt['memmimpin_wirid']=='B') { $sj=$sj+3; }
			  if($cnt['memmimpin_wirid']=='c' or $cnt['memmimpin_wirid']=='C') { $sj=$sj+2; }
			  if($cnt['memmimpin_wirid']=='d' or $cnt['memmimpin_wirid']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds25="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds25="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds25="C";  }
		if($t_sj <=1.49){ $ds25="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='3' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['adzan']=='a' or $cnt['adzan']=='A') { $sj=$sj+4; }
			  if($cnt['adzan']=='b' or $cnt['adzan']=='B') { $sj=$sj+3; }
			  if($cnt['adzan']=='c' or $cnt['adzan']=='C') { $sj=$sj+2; }
			  if($cnt['adzan']=='d' or $cnt['adzan']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds26="A"; }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds26="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds26="C";  }
		if($t_sj <=1.49){ $ds26="D";  } }
		?> 
      <?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='4' and nis='$ct[nis]' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['solat_jamaah']=='a' or $cnt['solat_jamaah']=='A') { $sj=$sj+4; }
			  if($cnt['solat_jamaah']=='b' or $cnt['solat_jamaah']=='B') { $sj=$sj+3; }
			  if($cnt['solat_jamaah']=='c' or $cnt['solat_jamaah']=='C') { $sj=$sj+2; }
			  if($cnt['solat_jamaah']=='d' or $cnt['solat_jamaah']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds27="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds27="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds27="C";  }
		if($t_sj <=1.49){ $ds27="D";  }
		}
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='4' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['solat_duha']=='a' or $cnt['solat_duha']=='A') { $sj=$sj+4; }
			  if($cnt['solat_duha']=='b' or $cnt['solat_duha']=='B') { $sj=$sj+3; }
			  if($cnt['solat_duha']=='c' or $cnt['solat_duha']=='C') { $sj=$sj+2; }
			  if($cnt['solat_duha']=='d' or $cnt['solat_duha']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds28="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds28="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds28="C";  }
		if($t_sj <=1.49){ $ds28="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='4' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['qiyamullail']=='a' or $cnt['qiyamullail']=='A') { $sj=$sj+4; }
			  if($cnt['qiyamullail']=='b' or $cnt['qiyamullail']=='B') { $sj=$sj+3; }
			  if($cnt['qiyamullail']=='c' or $cnt['qiyamullail']=='C') { $sj=$sj+2; }
			  if($cnt['qiyamullail']=='d' or $cnt['qiyamullail']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds29="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds29="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds29="C";  }
		if($t_sj <=1.49){ $ds29="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='4' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['sunnah_rawatib']=='a' or $cnt['sunnah_rawatib']=='A') { $sj=$sj+4; }
			  if($cnt['sunnah_rawatib']=='b' or $cnt['sunnah_rawatib']=='B') { $sj=$sj+3; }
			  if($cnt['sunnah_rawatib']=='c' or $cnt['sunnah_rawatib']=='C') { $sj=$sj+2; }
			  if($cnt['sunnah_rawatib']=='d' or $cnt['sunnah_rawatib']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds30="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds30="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds30="C";  }
		if($t_sj <=1.49){ $ds30="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='4' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['wirid_doa']=='a' or $cnt['wirid_doa']=='A') { $sj=$sj+4; }
			  if($cnt['wirid_doa']=='b' or $cnt['wirid_doa']=='B') { $sj=$sj+3; }
			  if($cnt['wirid_doa']=='c' or $cnt['wirid_doa']=='C') { $sj=$sj+2; }
			  if($cnt['wirid_doa']=='d' or $cnt['wirid_doa']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds31="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds31="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds31="C";  }
		if($t_sj <=1.49){ $ds31="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='4' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['shaum']=='a' or $cnt['shaum']=='A') { $sj=$sj+4; }
			  if($cnt['shaum']=='b' or $cnt['shaum']=='B') { $sj=$sj+3; }
			  if($cnt['shaum']=='c' or $cnt['shaum']=='C') { $sj=$sj+2; }
			  if($cnt['shaum']=='d' or $cnt['shaum']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds32="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds32="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds32="C";  }
		if($t_sj <=1.49){ $ds32="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='4' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['tilawa']=='a' or $cnt['tilawa']=='A') { $sj=$sj+4; }
			  if($cnt['tilawa']=='b' or $cnt['tilawa']=='B') { $sj=$sj+3; }
			  if($cnt['tilawa']=='c' or $cnt['tilawa']=='C') { $sj=$sj+2; }
			  if($cnt['tilawa']=='d' or $cnt['tilawa']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds33="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds33="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds33="C";  }
		if($t_sj <=1.49){ $ds33="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='4' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['memmimpin_wirid']=='a' or $cnt['memmimpin_wirid']=='A') { $sj=$sj+4; }
			  if($cnt['memmimpin_wirid']=='b' or $cnt['memmimpin_wirid']=='B') { $sj=$sj+3; }
			  if($cnt['memmimpin_wirid']=='c' or $cnt['memmimpin_wirid']=='C') { $sj=$sj+2; }
			  if($cnt['memmimpin_wirid']=='d' or $cnt['memmimpin_wirid']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds34="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds34="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds34="C";  }
		if($t_sj <=1.49){ $ds34="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='4' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['adzan']=='a' or $cnt['adzan']=='A') { $sj=$sj+4; }
			  if($cnt['adzan']=='b' or $cnt['adzan']=='B') { $sj=$sj+3; }
			  if($cnt['adzan']=='c' or $cnt['adzan']=='C') { $sj=$sj+2; }
			  if($cnt['adzan']=='d' or $cnt['adzan']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds35="A"; }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds35="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds35="C";  }
		if($t_sj <=1.49){ $ds35="D";  } }
		?></td>
  </tr>
  <tr valign="top"> 
    <td colspan="7"><?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='5' and nis='$ct[nis]' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['solat_jamaah']=='a' or $cnt['solat_jamaah']=='A') { $sj=$sj+4; }
			  if($cnt['solat_jamaah']=='b' or $cnt['solat_jamaah']=='B') { $sj=$sj+3; }
			  if($cnt['solat_jamaah']=='c' or $cnt['solat_jamaah']=='C') { $sj=$sj+2; }
			  if($cnt['solat_jamaah']=='d' or $cnt['solat_jamaah']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds36="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds36="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds36="C";  }
		if($t_sj <=1.49){ $ds36="D";  }
		}
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='5' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['solat_duha']=='a' or $cnt['solat_duha']=='A') { $sj=$sj+4; }
			  if($cnt['solat_duha']=='b' or $cnt['solat_duha']=='B') { $sj=$sj+3; }
			  if($cnt['solat_duha']=='c' or $cnt['solat_duha']=='C') { $sj=$sj+2; }
			  if($cnt['solat_duha']=='d' or $cnt['solat_duha']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds37="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds37="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds37="C";  }
		if($t_sj <=1.49){ $ds37="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='5' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['qiyamullail']=='a' or $cnt['qiyamullail']=='A') { $sj=$sj+4; }
			  if($cnt['qiyamullail']=='b' or $cnt['qiyamullail']=='B') { $sj=$sj+3; }
			  if($cnt['qiyamullail']=='c' or $cnt['qiyamullail']=='C') { $sj=$sj+2; }
			  if($cnt['qiyamullail']=='d' or $cnt['qiyamullail']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds38="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds38="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds38="C";  }
		if($t_sj <=1.49){ $ds38="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='5' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['sunnah_rawatib']=='a' or $cnt['sunnah_rawatib']=='A') { $sj=$sj+4; }
			  if($cnt['sunnah_rawatib']=='b' or $cnt['sunnah_rawatib']=='B') { $sj=$sj+3; }
			  if($cnt['sunnah_rawatib']=='c' or $cnt['sunnah_rawatib']=='C') { $sj=$sj+2; }
			  if($cnt['sunnah_rawatib']=='d' or $cnt['sunnah_rawatib']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds39="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds39="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds39="C";  }
		if($t_sj <=1.49){ $ds39="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='5' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['wirid_doa']=='a' or $cnt['wirid_doa']=='A') { $sj=$sj+4; }
			  if($cnt['wirid_doa']=='b' or $cnt['wirid_doa']=='B') { $sj=$sj+3; }
			  if($cnt['wirid_doa']=='c' or $cnt['wirid_doa']=='C') { $sj=$sj+2; }
			  if($cnt['wirid_doa']=='d' or $cnt['wirid_doa']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds40="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds40="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds40="C";  }
		if($t_sj <=1.49){ $ds40="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='5' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['shaum']=='a' or $cnt['shaum']=='A') { $sj=$sj+4; }
			  if($cnt['shaum']=='b' or $cnt['shaum']=='B') { $sj=$sj+3; }
			  if($cnt['shaum']=='c' or $cnt['shaum']=='C') { $sj=$sj+2; }
			  if($cnt['shaum']=='d' or $cnt['shaum']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds41="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds41="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds41="C";  }
		if($t_sj <=1.49){ $ds41="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='5' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['tilawa']=='a' or $cnt['tilawa']=='A') { $sj=$sj+4; }
			  if($cnt['tilawa']=='b' or $cnt['tilawa']=='B') { $sj=$sj+3; }
			  if($cnt['tilawa']=='c' or $cnt['tilawa']=='C') { $sj=$sj+2; }
			  if($cnt['tilawa']=='d' or $cnt['tilawa']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds42="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds42="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds42="C";  }
		if($t_sj <=1.49){ $ds42="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='5' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['memmimpin_wirid']=='a' or $cnt['memmimpin_wirid']=='A') { $sj=$sj+4; }
			  if($cnt['memmimpin_wirid']=='b' or $cnt['memmimpin_wirid']=='B') { $sj=$sj+3; }
			  if($cnt['memmimpin_wirid']=='c' or $cnt['memmimpin_wirid']=='C') { $sj=$sj+2; }
			  if($cnt['memmimpin_wirid']=='d' or $cnt['memmimpin_wirid']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds43="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds43="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds43="C";  }
		if($t_sj <=1.49){ $ds43="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='5' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['adzan']=='a' or $cnt['adzan']=='A') { $sj=$sj+4; }
			  if($cnt['adzan']=='b' or $cnt['adzan']=='B') { $sj=$sj+3; }
			  if($cnt['adzan']=='c' or $cnt['adzan']=='C') { $sj=$sj+2; }
			  if($cnt['adzan']=='d' or $cnt['adzan']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds44="A"; }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds44="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds44="C";  }
		if($t_sj <=1.49){ $ds44="D";  } }
		?></td>
  </tr>
  <tr valign="top">
    <td height="205" colspan="7"><table width="791" border="0" cellpadding="0" cellspacing="0">
      
      
      <tr>
        <td height="18" align="right" bgcolor="#CCCCCC">&nbsp;</td>
        <td colspan="5" align="left" bgcolor="#CCCCCC"><span class="style13">PEMBINAAN IBADAH</span> </td>
        <td width="39%" align="left" bgcolor="#CCCCCC">&nbsp;</td>
      </tr>
      <tr>
        <td height="14" align="right">&nbsp;</td>
        <td width="10%" align="left">&nbsp;</td>
        <td width="10%" align="left">&nbsp;</td>
        <td width="10%" align="left">&nbsp;</td>
        <td width="10%" align="left">&nbsp;</td>
        <td width="17%" align="left">&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
      
      <tr>
        <td width="4%" height="191" align="right"><img src="../images/ab.jpg" width="32" height="191" align="left" /></td>
        <td align="left" valign="bottom"><table width="63" height="184" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td height="48" <? if($ds=="A"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
            <td <? if($ds1=="A"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds2=="A"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds3=="A"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds4=="A"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds5=="A"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds6=="A"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds7=="A"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds8=="A"){ ?>bgcolor="#666666" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
          </tr>
          <tr>
            <td height="53" <? if($ds=="A" or $ds=="B"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
            <td <? if($ds1=="A" or $ds1=="B"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds2=="A" or $ds2=="B"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds3=="A" or $ds3=="B"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds4=="A" or $ds4=="B"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds5=="A" or $ds5=="B"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds6=="A" or $ds6=="B"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds7=="A" or $ds7=="B"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds8=="A" or $ds8=="B"){ ?>bgcolor="#666666" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
          </tr>
          <tr>
            <td height="50" <? if($ds=="A" or $ds=="B" or $ds=="C"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
            <td <? if($ds1=="A" or $ds1=="B" or $ds1=="C"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds2=="A" or $ds2=="B" or $ds2=="C"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds3=="A" or $ds3=="B" or $ds3=="C"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds4=="A" or $ds4=="B" or $ds4=="C"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds5=="A" or $ds5=="B" or $ds5=="C"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds6=="A" or $ds6=="B" or $ds6=="C"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds7=="A" or $ds7=="B" or $ds7=="C"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds8=="A" or $ds8=="B" or $ds8=="C"){ ?>bgcolor="#666666" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
          </tr>
          <tr>
            <td <? if($ds=="A" or $ds=="B" or $ds=="C" or $ds=="D"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3">'</td>
            <td <? if($ds1=="A" or $ds1=="B" or $ds1=="C" or $ds1=="D"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            <td <? if($ds2=="A" or $ds2=="B" or $ds2=="C" or $ds2=="D"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            <td <? if($ds3=="A" or $ds3=="B" or $ds3=="C" or $ds3=="D"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            <td <? if($ds4=="A" or $ds4=="B" or $ds4=="C" or $ds4=="D"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            <td <? if($ds5=="A" or $ds5=="B" or $ds5=="C" or $ds5=="D"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            <td <? if($ds6=="A" or $ds6=="B" or $ds6=="C" or $ds6=="D"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            <td <? if($ds7=="A" or $ds7=="B" or $ds7=="C" or $ds7=="D"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            <td <? if($ds8=="A" or $ds8=="B" or $ds8=="C" or $ds8=="D"){ ?>bgcolor="#666666" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
          </tr>
        </table></td>
        <td align="left" valign="bottom"><table width="63" height="184" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td height="48" <? if($ds9=="A"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
            <td <? if($ds10=="A"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds11=="A"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds12=="A"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds13=="A"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds14=="A"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds15=="A"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds16=="A"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds17=="A"){ ?>bgcolor="#666666" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
          </tr>
          <tr>
            <td height="53" <? if($ds9=="A" or $ds9=="B"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
            <td <? if($ds10=="A" or $ds10=="B"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds11=="A" or $ds11=="B"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds12=="A" or $ds12=="B"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds13=="A" or $ds13=="B"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds14=="A" or $ds14=="B"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds15=="A" or $ds15=="B"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds16=="A" or $ds16=="B"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds17=="A" or $ds17=="B"){ ?>bgcolor="#666666" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
          </tr>
          <tr>
            <td height="50" <? if($ds9=="A" or $ds9=="B" or $ds9=="C"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
            <td <? if($ds10=="A" or $ds10=="B" or $ds10=="C"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds11=="A" or $ds11=="B" or $ds11=="C"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds12=="A" or $ds12=="B" or $ds12=="C"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds13=="A" or $ds13=="B" or $ds13=="C"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds14=="A" or $ds14=="B" or $ds14=="C"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds15=="A" or $ds15=="B" or $ds15=="C"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds16=="A" or $ds16=="B" or $ds16=="C"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds17=="A" or $ds17=="B" or $ds17=="C"){ ?>bgcolor="#666666" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
          </tr>
          <tr>
            <td <? if($ds9=="A" or $ds9=="B" or $ds9=="C" or $ds9=="D"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3">'</td>
            <td <? if($ds10=="A" or $ds10=="B" or $ds10=="C" or $ds10=="D"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            <td <? if($ds11=="A" or $ds11=="B" or $ds11=="C" or $ds11=="D"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            <td <? if($ds12=="A" or $ds12=="B" or $ds12=="C" or $ds12=="D"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            <td <? if($ds13=="A" or $ds13=="B" or $ds13=="C" or $ds13=="D"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            <td <? if($ds14=="A" or $ds14=="B" or $ds14=="C" or $ds14=="D"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            <td <? if($ds15=="A" or $ds15=="B" or $ds15=="C" or $ds15=="D"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            <td <? if($ds16=="A" or $ds16=="B" or $ds16=="C" or $ds16=="D"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            <td <? if($ds17=="A" or $ds17=="B" or $ds17=="C" or $ds17=="D"){ ?>bgcolor="#666666" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
          </tr>
        </table></td>
        <td align="left" valign="bottom"><table width="63" height="184" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td height="48" <? if($ds18=="A"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
            <td <? if($ds19=="A"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds20=="A"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds21=="A"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds22=="A"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds23=="A"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds24=="A"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds25=="A"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds26=="A"){ ?>bgcolor="#666666" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
          </tr>
          <tr>
            <td height="53" <? if($ds18=="A" or $ds18=="B"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
            <td <? if($ds19=="A" or $ds19=="B"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds20=="A" or $ds20=="B"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds21=="A" or $ds21=="B"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds22=="A" or $ds22=="B"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds23=="A" or $ds23=="B"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds24=="A" or $ds24=="B"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds25=="A" or $ds25=="B"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds26=="A" or $ds26=="B"){ ?>bgcolor="#666666" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
          </tr>
          <tr>
            <td height="50" <? if($ds18=="A" or $ds18=="B" or $ds18=="C"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
            <td <? if($ds19=="A" or $ds19=="B" or $ds19=="C"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds20=="A" or $ds20=="B" or $ds20=="C"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds21=="A" or $ds21=="B" or $ds21=="C"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds22=="A" or $ds22=="B" or $ds22=="C"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds23=="A" or $ds23=="B" or $ds23=="C"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds24=="A" or $ds24=="B" or $ds24=="C"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds25=="A" or $ds25=="B" or $ds25=="C"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds26=="A" or $ds26=="B" or $ds26=="C"){ ?>bgcolor="#666666" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
          </tr>
          <tr>
            <td <? if($ds18=="A" or $ds18=="B" or $ds18=="C" or $ds18=="D"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3">'</td>
            <td <? if($ds19=="A" or $ds19=="B" or $ds19=="C" or $ds19=="D"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            <td <? if($ds20=="A" or $ds20=="B" or $ds20=="C" or $ds20=="D"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            <td <? if($ds21=="A" or $ds21=="B" or $ds21=="C" or $ds21=="D"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            <td <? if($ds22=="A" or $ds22=="B" or $ds22=="C" or $ds22=="D"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            <td <? if($ds23=="A" or $ds23=="B" or $ds23=="C" or $ds23=="D"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            <td <? if($ds24=="A" or $ds24=="B" or $ds24=="C" or $ds24=="D"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            <td <? if($ds25=="A" or $ds25=="B" or $ds25=="C" or $ds25=="D"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            <td <? if($ds26=="A" or $ds26=="B" or $ds26=="C" or $ds26=="D"){ ?>bgcolor="#666666" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
          </tr>
        </table></td>
        <td align="left" valign="bottom"><table width="63" height="184" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td height="48" <? if($ds27=="A"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
            <td <? if($ds28=="A"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds29=="A"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds30=="A"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds31=="A"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds32=="A"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds33=="A"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds34=="A"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds35=="A"){ ?>bgcolor="#666666" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
          </tr>
          <tr>
            <td height="53" <? if($ds27=="A" or $ds27=="B"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
            <td <? if($ds28=="A" or $ds28=="B"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds29=="A" or $ds29=="B"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds30=="A" or $ds30=="B"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds31=="A" or $ds31=="B"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds32=="A" or $ds32=="B"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds33=="A" or $ds33=="B"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds34=="A" or $ds34=="B"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds35=="A" or $ds35=="B"){ ?>bgcolor="#666666" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
          </tr>
          <tr>
            <td height="50" <? if($ds27=="A" or $ds27=="B" or $ds27=="C"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
            <td <? if($ds28=="A" or $ds28=="B" or $ds28=="C"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds29=="A" or $ds29=="B" or $ds29=="C"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds30=="A" or $ds30=="B" or $ds30=="C"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds31=="A" or $ds31=="B" or $ds31=="C"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds32=="A" or $ds32=="B" or $ds32=="C"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds33=="A" or $ds33=="B" or $ds33=="C"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds34=="A" or $ds34=="B" or $ds34=="C"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds35=="A" or $ds35=="B" or $ds35=="C"){ ?>bgcolor="#666666" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
          </tr>
          <tr>
            <td <? if($ds27=="A" or $ds27=="B" or $ds27=="C" or $ds27=="D"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3">'</td>
            <td <? if($ds28=="A" or $ds28=="B" or $ds28=="C" or $ds28=="D"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            <td <? if($ds29=="A" or $ds29=="B" or $ds29=="C" or $ds29=="D"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            <td <? if($ds30=="A" or $ds30=="B" or $ds30=="C" or $ds30=="D"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            <td <? if($ds31=="A" or $ds31=="B" or $ds31=="C" or $ds31=="D"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            <td <? if($ds32=="A" or $ds32=="B" or $ds32=="C" or $ds32=="D"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            <td <? if($ds33=="A" or $ds33=="B" or $ds33=="C" or $ds33=="D"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            <td <? if($ds34=="A" or $ds34=="B" or $ds34=="C" or $ds34=="D"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            <td <? if($ds35=="A" or $ds35=="B" or $ds35=="C" or $ds35=="D"){ ?>bgcolor="#666666" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
          </tr>
        </table></td>
        <td align="left" valign="bottom"><table width="63" height="184" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td height="48" <? if($ds36=="A"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
            <td <? if($ds37=="A"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds38=="A"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds39=="A"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds40=="A"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds41=="A"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds42=="A"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds43=="A"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds44=="A"){ ?>bgcolor="#666666" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
          </tr>
          <tr>
            <td height="53" <? if($ds36=="A" or $ds36=="B"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
            <td <? if($ds37=="A" or $ds37=="B"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds38=="A" or $ds38=="B"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds39=="A" or $ds39=="B"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds40=="A" or $ds40=="B"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds41=="A" or $ds41=="B"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds42=="A" or $ds42=="B"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds43=="A" or $ds43=="B"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds44=="A" or $ds44=="B"){ ?>bgcolor="#666666" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
          </tr>
          <tr>
            <td height="50" <? if($ds36=="A" or $ds36=="B" or $ds36=="C"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
            <td <? if($ds37=="A" or $ds37=="B" or $ds37=="C"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds38=="A" or $ds38=="B" or $ds38=="C"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds39=="A" or $ds39=="B" or $ds39=="C"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds40=="A" or $ds40=="B" or $ds40=="C"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds41=="A" or $ds41=="B" or $ds41=="C"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds42=="A" or $ds42=="B" or $ds42=="C"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds43=="A" or $ds43=="B" or $ds43=="C"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            <td <? if($ds44=="A" or $ds44=="B" or $ds44=="C"){ ?>bgcolor="#666666" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
          </tr>
          <tr>
            <td <? if($ds36=="A" or $ds36=="B" or $ds36=="C" or $ds36=="D"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3">'</td>
            <td <? if($ds37=="A" or $ds37=="B" or $ds37=="C" or $ds37=="D"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            <td <? if($ds38=="A" or $ds38=="B" or $ds38=="C" or $ds38=="D"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            <td <? if($ds39=="A" or $ds39=="B" or $ds39=="C" or $ds39=="D"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            <td <? if($ds40=="A" or $ds40=="B" or $ds40=="C" or $ds40=="D"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            <td <? if($ds41=="A" or $ds41=="B" or $ds41=="C" or $ds41=="D"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            <td <? if($ds42=="A" or $ds42=="B" or $ds42=="C" or $ds42=="D"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            <td <? if($ds43=="A" or $ds43=="B" or $ds43=="C" or $ds43=="D"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            <td <? if($ds44=="A" or $ds44=="B" or $ds44=="C" or $ds44=="D"){ ?>bgcolor="#666666" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
          </tr>
        </table></td>
        <td align="left" valign="top"><table width="100%" height="26" border="0" align="left" cellpadding="0" cellspacing="4">
          <tr>
            <td width="8%" bgcolor="#FF0000">&nbsp;</td>
            <td width="92%">Sholat jamaah</td>
          </tr>
          <tr>
            <td bgcolor="#0000FF">&nbsp;</td>
            <td>Sholat dhuha</td>
          </tr>
          <tr>
            <td bgcolor="#FFFF00">&nbsp;</td>
            <td>Qiyamullail</td>
          </tr>
          <tr>
            <td bgcolor="#00FFFF">&nbsp;</td>
            <td>Sholat sunnah rawatib</td>
          </tr>
          <tr>
            <td bgcolor="#FF00FF">&nbsp;</td>
            <td>Wirid dan do&rsquo;a ba&rsquo;da sholat</td>
          </tr>
          <tr>
            <td bgcolor="#CC6600">&nbsp;</td>
            <td>Shaum senin-kamis</td>
          </tr>
          <tr>
            <td bgcolor="#99FF33">&nbsp;</td>
            <td>Tilawah Al-Qur&rsquo;an</td>
          </tr>
          <tr>
            <td bgcolor="#FF99CC">&nbsp;</td>
            <td>Memimpin wirid &amp; do&rsquo;a ba&rsquo;da sholat</td>
          </tr>
          <tr>
            <td bgcolor="#666666">&nbsp;</td>
            <td>Mengumandangkan adzan</td>
          </tr>
        </table></td>
      </tr>
      
    </table></td>
  </tr>
  <tr valign="top">
    <td height="19" colspan="7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../images/bln.jpg" width="423" height="16" /></td>
  </tr>
  
  <tr valign="top">
    <td height="19" colspan="7"><?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='1' and nis='$ct[nis]' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['salam']=='a' or $cnt['salam']=='A') { $sj=$sj+4; }
			  if($cnt['salam']=='b' or $cnt['salam']=='B') { $sj=$sj+3; }
			  if($cnt['salam']=='c' or $cnt['salam']=='C') { $sj=$sj+2; }
			  if($cnt['salam']=='d' or $cnt['salam']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds="C";  }
		if($t_sj <=1.49){ $ds="D";  }
		}
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='1' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['bicara']=='a' or $cnt['bicara']=='A') { $sj=$sj+4; }
			  if($cnt['bicara']=='b' or $cnt['bicara']=='B') { $sj=$sj+3; }
			  if($cnt['bicara']=='c' or $cnt['bicara']=='C') { $sj=$sj+2; }
			  if($cnt['bicara']=='d' or $cnt['bicara']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds1="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds1="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds1="C";  }
		if($t_sj <=1.49){ $ds1="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='1' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['berpakaian']=='a' or $cnt['berpakaian']=='A') { $sj=$sj+4; }
			  if($cnt['berpakaian']=='b' or $cnt['berpakaian']=='B') { $sj=$sj+3; }
			  if($cnt['berpakaian']=='c' or $cnt['berpakaian']=='C') { $sj=$sj+2; }
			  if($cnt['berpakaian']=='d' or $cnt['berpakaian']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds2="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds2="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds2="C";  }
		if($t_sj <=1.49){ $ds2="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='1' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['makan_minum']=='a' or $cnt['makan_minum']=='A') { $sj=$sj+4; }
			  if($cnt['makan_minum']=='b' or $cnt['makan_minum']=='B') { $sj=$sj+3; }
			  if($cnt['makan_minum']=='c' or $cnt['makan_minum']=='C') { $sj=$sj+2; }
			  if($cnt['makan_minum']=='d' or $cnt['makan_minum']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds3="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds3="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds3="C";  }
		if($t_sj <=1.49){ $ds3="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='1' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['belajar']=='a' or $cnt['belajar']=='A') { $sj=$sj+4; }
			  if($cnt['belajar']=='b' or $cnt['belajar']=='B') { $sj=$sj+3; }
			  if($cnt['belajar']=='c' or $cnt['belajar']=='C') { $sj=$sj+2; }
			  if($cnt['belajar']=='d' or $cnt['belajar']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds4="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds4="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds4="C";  }
		if($t_sj <=1.49){ $ds4="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='1' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['adab_kepembina']=='a' or $cnt['adab_kepembina']=='A') { $sj=$sj+4; }
			  if($cnt['adab_kepembina']=='b' or $cnt['adab_kepembina']=='B') { $sj=$sj+3; }
			  if($cnt['adab_kepembina']=='c' or $cnt['adab_kepembina']=='C') { $sj=$sj+2; }
			  if($cnt['adab_kepembina']=='d' or $cnt['adab_kepembina']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds5="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds5="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds5="C";  }
		if($t_sj <=1.49){ $ds5="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='1' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['bergaul']=='a' or $cnt['bergaul']=='A') { $sj=$sj+4; }
			  if($cnt['bergaul']=='b' or $cnt['bergaul']=='B') { $sj=$sj+3; }
			  if($cnt['bergaul']=='c' or $cnt['bergaul']=='C') { $sj=$sj+2; }
			  if($cnt['bergaul']=='d' or $cnt['bergaul']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds6="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds6="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds6="C";  }
		if($t_sj <=1.49){ $ds6="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='1' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['bercanda']=='a' or $cnt['bercanda']=='A') { $sj=$sj+4; }
			  if($cnt['bercanda']=='b' or $cnt['bercanda']=='B') { $sj=$sj+3; }
			  if($cnt['bercanda']=='c' or $cnt['bercanda']=='C') { $sj=$sj+2; }
			  if($cnt['bercanda']=='d' or $cnt['bercanda']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds7="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds7="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds7="C";  }
		if($t_sj <=1.49){ $ds7="D";  } }
		?> <?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='2' and nis='$ct[nis]' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['salam']=='a' or $cnt['salam']=='A') { $sj=$sj+4; }
			  if($cnt['salam']=='b' or $cnt['salam']=='B') { $sj=$sj+3; }
			  if($cnt['salam']=='c' or $cnt['salam']=='C') { $sj=$sj+2; }
			  if($cnt['salam']=='d' or $cnt['salam']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds9="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds9="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds9="C";  }
		if($t_sj <=1.49){ $ds9="D";  }
		}
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='2' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['bicara']=='a' or $cnt['bicara']=='A') { $sj=$sj+4; }
			  if($cnt['bicara']=='b' or $cnt['bicara']=='B') { $sj=$sj+3; }
			  if($cnt['bicara']=='c' or $cnt['bicara']=='C') { $sj=$sj+2; }
			  if($cnt['bicara']=='d' or $cnt['bicara']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds10="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds10="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds10="C";  }
		if($t_sj <=1.49){ $ds10="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='2' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['berpakaian']=='a' or $cnt['berpakaian']=='A') { $sj=$sj+4; }
			  if($cnt['berpakaian']=='b' or $cnt['berpakaian']=='B') { $sj=$sj+3; }
			  if($cnt['berpakaian']=='c' or $cnt['berpakaian']=='C') { $sj=$sj+2; }
			  if($cnt['berpakaian']=='d' or $cnt['berpakaian']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds11="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds11="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds11="C";  }
		if($t_sj <=1.49){ $ds11="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='2' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['makan_minum']=='a' or $cnt['makan_minum']=='A') { $sj=$sj+4; }
			  if($cnt['makan_minum']=='b' or $cnt['makan_minum']=='B') { $sj=$sj+3; }
			  if($cnt['makan_minum']=='c' or $cnt['makan_minum']=='C') { $sj=$sj+2; }
			  if($cnt['makan_minum']=='d' or $cnt['makan_minum']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds12="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds12="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds12="C";  }
		if($t_sj <=1.49){ $ds12="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='2' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['belajar']=='a' or $cnt['belajar']=='A') { $sj=$sj+4; }
			  if($cnt['belajar']=='b' or $cnt['belajar']=='B') { $sj=$sj+3; }
			  if($cnt['belajar']=='c' or $cnt['belajar']=='C') { $sj=$sj+2; }
			  if($cnt['belajar']=='d' or $cnt['belajar']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds13="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds13="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds13="C";  }
		if($t_sj <=1.49){ $ds13="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='2' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['adab_kepembina']=='a' or $cnt['adab_kepembina']=='A') { $sj=$sj+4; }
			  if($cnt['adab_kepembina']=='b' or $cnt['adab_kepembina']=='B') { $sj=$sj+3; }
			  if($cnt['adab_kepembina']=='c' or $cnt['adab_kepembina']=='C') { $sj=$sj+2; }
			  if($cnt['adab_kepembina']=='d' or $cnt['adab_kepembina']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds14="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds14="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds14="C";  }
		if($t_sj <=1.49){ $ds14="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='2' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['bergaul']=='a' or $cnt['bergaul']=='A') { $sj=$sj+4; }
			  if($cnt['bergaul']=='b' or $cnt['bergaul']=='B') { $sj=$sj+3; }
			  if($cnt['bergaul']=='c' or $cnt['bergaul']=='C') { $sj=$sj+2; }
			  if($cnt['bergaul']=='d' or $cnt['bergaul']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds15="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds15="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds15="C";  }
		if($t_sj <=1.49){ $ds15="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='2' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['bercanda']=='a' or $cnt['bercanda']=='A') { $sj=$sj+4; }
			  if($cnt['bercanda']=='b' or $cnt['bercanda']=='B') { $sj=$sj+3; }
			  if($cnt['bercanda']=='c' or $cnt['bercanda']=='C') { $sj=$sj+2; }
			  if($cnt['bercanda']=='d' or $cnt['bercanda']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds16="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds16="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds16="C";  }
		if($t_sj <=1.49){ $ds16="D";  } }
		?> <?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='3' and nis='$ct[nis]' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['salam']=='a' or $cnt['salam']=='A') { $sj=$sj+4; }
			  if($cnt['salam']=='b' or $cnt['salam']=='B') { $sj=$sj+3; }
			  if($cnt['salam']=='c' or $cnt['salam']=='C') { $sj=$sj+2; }
			  if($cnt['salam']=='d' or $cnt['salam']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds18="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds18="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds18="C";  }
		if($t_sj <=1.49){ $ds18="D";  }
		}
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='3' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['bicara']=='a' or $cnt['bicara']=='A') { $sj=$sj+4; }
			  if($cnt['bicara']=='b' or $cnt['bicara']=='B') { $sj=$sj+3; }
			  if($cnt['bicara']=='c' or $cnt['bicara']=='C') { $sj=$sj+2; }
			  if($cnt['bicara']=='d' or $cnt['bicara']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds19="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds19="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds19="C";  }
		if($t_sj <=1.49){ $ds19="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='3' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['berpakaian']=='a' or $cnt['berpakaian']=='A') { $sj=$sj+4; }
			  if($cnt['berpakaian']=='b' or $cnt['berpakaian']=='B') { $sj=$sj+3; }
			  if($cnt['berpakaian']=='c' or $cnt['berpakaian']=='C') { $sj=$sj+2; }
			  if($cnt['berpakaian']=='d' or $cnt['berpakaian']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds20="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds20="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds20="C";  }
		if($t_sj <=1.49){ $ds20="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='3' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['makan_minum']=='a' or $cnt['makan_minum']=='A') { $sj=$sj+4; }
			  if($cnt['makan_minum']=='b' or $cnt['makan_minum']=='B') { $sj=$sj+3; }
			  if($cnt['makan_minum']=='c' or $cnt['makan_minum']=='C') { $sj=$sj+2; }
			  if($cnt['makan_minum']=='d' or $cnt['makan_minum']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds21="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds21="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds21="C";  }
		if($t_sj <=1.49){ $ds21="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='3' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['belajar']=='a' or $cnt['belajar']=='A') { $sj=$sj+4; }
			  if($cnt['belajar']=='b' or $cnt['belajar']=='B') { $sj=$sj+3; }
			  if($cnt['belajar']=='c' or $cnt['belajar']=='C') { $sj=$sj+2; }
			  if($cnt['belajar']=='d' or $cnt['belajar']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds22="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds22="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds22="C";  }
		if($t_sj <=1.49){ $ds22="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='3' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['adab_kepembina']=='a' or $cnt['adab_kepembina']=='A') { $sj=$sj+4; }
			  if($cnt['adab_kepembina']=='b' or $cnt['adab_kepembina']=='B') { $sj=$sj+3; }
			  if($cnt['adab_kepembina']=='c' or $cnt['adab_kepembina']=='C') { $sj=$sj+2; }
			  if($cnt['adab_kepembina']=='d' or $cnt['adab_kepembina']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds23="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds23="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds23="C";  }
		if($t_sj <=1.49){ $ds23="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='3' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['bergaul']=='a' or $cnt['bergaul']=='A') { $sj=$sj+4; }
			  if($cnt['bergaul']=='b' or $cnt['bergaul']=='B') { $sj=$sj+3; }
			  if($cnt['bergaul']=='c' or $cnt['bergaul']=='C') { $sj=$sj+2; }
			  if($cnt['bergaul']=='d' or $cnt['bergaul']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds24="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds24="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds24="C";  }
		if($t_sj <=1.49){ $ds24="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='3' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['bercanda']=='a' or $cnt['bercanda']=='A') { $sj=$sj+4; }
			  if($cnt['bercanda']=='b' or $cnt['bercanda']=='B') { $sj=$sj+3; }
			  if($cnt['bercanda']=='c' or $cnt['bercanda']=='C') { $sj=$sj+2; }
			  if($cnt['bercanda']=='d' or $cnt['bercanda']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds25="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds25="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds25="C";  }
		if($t_sj <=1.49){ $ds25="D";  } }
		?> <?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='4' and nis='$ct[nis]' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['salam']=='a' or $cnt['salam']=='A') { $sj=$sj+4; }
			  if($cnt['salam']=='b' or $cnt['salam']=='B') { $sj=$sj+3; }
			  if($cnt['salam']=='c' or $cnt['salam']=='C') { $sj=$sj+2; }
			  if($cnt['salam']=='d' or $cnt['salam']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds27="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds27="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds27="C";  }
		if($t_sj <=1.49){ $ds27="D";  }
		}
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='4' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['bicara']=='a' or $cnt['bicara']=='A') { $sj=$sj+4; }
			  if($cnt['bicara']=='b' or $cnt['bicara']=='B') { $sj=$sj+3; }
			  if($cnt['bicara']=='c' or $cnt['bicara']=='C') { $sj=$sj+2; }
			  if($cnt['bicara']=='d' or $cnt['bicara']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds28="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds28="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds28="C";  }
		if($t_sj <=1.49){ $ds28="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='4' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['berpakaian']=='a' or $cnt['berpakaian']=='A') { $sj=$sj+4; }
			  if($cnt['berpakaian']=='b' or $cnt['berpakaian']=='B') { $sj=$sj+3; }
			  if($cnt['berpakaian']=='c' or $cnt['berpakaian']=='C') { $sj=$sj+2; }
			  if($cnt['berpakaian']=='d' or $cnt['berpakaian']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds29="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds29="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds29="C";  }
		if($t_sj <=1.49){ $ds29="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='4' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['makan_minum']=='a' or $cnt['makan_minum']=='A') { $sj=$sj+4; }
			  if($cnt['makan_minum']=='b' or $cnt['makan_minum']=='B') { $sj=$sj+3; }
			  if($cnt['makan_minum']=='c' or $cnt['makan_minum']=='C') { $sj=$sj+2; }
			  if($cnt['makan_minum']=='d' or $cnt['makan_minum']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds30="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds30="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds30="C";  }
		if($t_sj <=1.49){ $ds30="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='4' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['belajar']=='a' or $cnt['belajar']=='A') { $sj=$sj+4; }
			  if($cnt['belajar']=='b' or $cnt['belajar']=='B') { $sj=$sj+3; }
			  if($cnt['belajar']=='c' or $cnt['belajar']=='C') { $sj=$sj+2; }
			  if($cnt['belajar']=='d' or $cnt['belajar']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds31="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds31="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds31="C";  }
		if($t_sj <=1.49){ $ds31="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='4' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['adab_kepembina']=='a' or $cnt['adab_kepembina']=='A') { $sj=$sj+4; }
			  if($cnt['adab_kepembina']=='b' or $cnt['adab_kepembina']=='B') { $sj=$sj+3; }
			  if($cnt['adab_kepembina']=='c' or $cnt['adab_kepembina']=='C') { $sj=$sj+2; }
			  if($cnt['adab_kepembina']=='d' or $cnt['adab_kepembina']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds32="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds32="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds32="C";  }
		if($t_sj <=1.49){ $ds32="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='4' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['bergaul']=='a' or $cnt['bergaul']=='A') { $sj=$sj+4; }
			  if($cnt['bergaul']=='b' or $cnt['bergaul']=='B') { $sj=$sj+3; }
			  if($cnt['bergaul']=='c' or $cnt['bergaul']=='C') { $sj=$sj+2; }
			  if($cnt['bergaul']=='d' or $cnt['bergaul']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds33="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds33="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds33="C";  }
		if($t_sj <=1.49){ $ds33="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='4' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['bercanda']=='a' or $cnt['bercanda']=='A') { $sj=$sj+4; }
			  if($cnt['bercanda']=='b' or $cnt['bercanda']=='B') { $sj=$sj+3; }
			  if($cnt['bercanda']=='c' or $cnt['bercanda']=='C') { $sj=$sj+2; }
			  if($cnt['bercanda']=='d' or $cnt['bercanda']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds34="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds34="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds34="C";  }
		if($t_sj <=1.49){ $ds34="D";  } }
		?><?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='5' and nis='$ct[nis]' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['salam']=='a' or $cnt['salam']=='A') { $sj=$sj+4; }
			  if($cnt['salam']=='b' or $cnt['salam']=='B') { $sj=$sj+3; }
			  if($cnt['salam']=='c' or $cnt['salam']=='C') { $sj=$sj+2; }
			  if($cnt['salam']=='d' or $cnt['salam']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds36="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds36="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds36="C";  }
		if($t_sj <=1.49){ $ds36="D";  }
		}
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='5' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['bicara']=='a' or $cnt['bicara']=='A') { $sj=$sj+4; }
			  if($cnt['bicara']=='b' or $cnt['bicara']=='B') { $sj=$sj+3; }
			  if($cnt['bicara']=='c' or $cnt['bicara']=='C') { $sj=$sj+2; }
			  if($cnt['bicara']=='d' or $cnt['bicara']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds37="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds37="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds37="C";  }
		if($t_sj <=1.49){ $ds37="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='5' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['berpakaian']=='a' or $cnt['berpakaian']=='A') { $sj=$sj+4; }
			  if($cnt['berpakaian']=='b' or $cnt['berpakaian']=='B') { $sj=$sj+3; }
			  if($cnt['berpakaian']=='c' or $cnt['berpakaian']=='C') { $sj=$sj+2; }
			  if($cnt['berpakaian']=='d' or $cnt['berpakaian']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds38="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds38="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds38="C";  }
		if($t_sj <=1.49){ $ds38="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='5' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['makan_minum']=='a' or $cnt['makan_minum']=='A') { $sj=$sj+4; }
			  if($cnt['makan_minum']=='b' or $cnt['makan_minum']=='B') { $sj=$sj+3; }
			  if($cnt['makan_minum']=='c' or $cnt['makan_minum']=='C') { $sj=$sj+2; }
			  if($cnt['makan_minum']=='d' or $cnt['makan_minum']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds39="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds39="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds39="C";  }
		if($t_sj <=1.49){ $ds39="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='5' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['belajar']=='a' or $cnt['belajar']=='A') { $sj=$sj+4; }
			  if($cnt['belajar']=='b' or $cnt['belajar']=='B') { $sj=$sj+3; }
			  if($cnt['belajar']=='c' or $cnt['belajar']=='C') { $sj=$sj+2; }
			  if($cnt['belajar']=='d' or $cnt['belajar']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds40="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds40="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds40="C";  }
		if($t_sj <=1.49){ $ds40="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='5' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['adab_kepembina']=='a' or $cnt['adab_kepembina']=='A') { $sj=$sj+4; }
			  if($cnt['adab_kepembina']=='b' or $cnt['adab_kepembina']=='B') { $sj=$sj+3; }
			  if($cnt['adab_kepembina']=='c' or $cnt['adab_kepembina']=='C') { $sj=$sj+2; }
			  if($cnt['adab_kepembina']=='d' or $cnt['adab_kepembina']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds41="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds41="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds41="C";  }
		if($t_sj <=1.49){ $ds41="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='5' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['bergaul']=='a' or $cnt['bergaul']=='A') { $sj=$sj+4; }
			  if($cnt['bergaul']=='b' or $cnt['bergaul']=='B') { $sj=$sj+3; }
			  if($cnt['bergaul']=='c' or $cnt['bergaul']=='C') { $sj=$sj+2; }
			  if($cnt['bergaul']=='d' or $cnt['bergaul']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds42="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds42="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds42="C";  }
		if($t_sj <=1.49){ $ds42="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='5' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['bercanda']=='a' or $cnt['bercanda']=='A') { $sj=$sj+4; }
			  if($cnt['bercanda']=='b' or $cnt['bercanda']=='B') { $sj=$sj+3; }
			  if($cnt['bercanda']=='c' or $cnt['bercanda']=='C') { $sj=$sj+2; }
			  if($cnt['bercanda']=='d' or $cnt['bercanda']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds43="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds43="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds43="C";  }
		if($t_sj <=1.49){ $ds43="D";  } }
		?></td>
  </tr>
  <tr valign="top">
    <td height="19" colspan="7"><table width="791" border="0" cellpadding="0" cellspacing="0">
      
      <tr>
        <td height="18" align="right" bgcolor="#CCCCCC">&nbsp;</td>
        <td colspan="5" align="left" bgcolor="#CCCCCC"><span class="style13">PEMBINAAN ADAB DAN AKHLAK</span> </td>
        <td width="39%" align="left" bgcolor="#CCCCCC">&nbsp;</td>
      </tr>
      <tr>
        <td height="14" align="right">&nbsp;</td>
        <td width="10%" align="left">&nbsp;</td>
        <td width="10%" align="left">&nbsp;</td>
        <td width="10%" align="left">&nbsp;</td>
        <td width="10%" align="left">&nbsp;</td>
        <td width="17%" align="left">&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
      
      <tr>
        <td width="4%" height="191" align="right"><img src="../images/ab.jpg" width="32" height="191" align="left" /></td>
        <td align="left" valign="bottom"><table width="63" height="189" border="0" align="left" cellpadding="0" cellspacing="0">
            <tr>
              <td height="50" <? if($ds=="A"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds1=="A"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds2=="A"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds3=="A"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds4=="A"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds5=="A"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds6=="A"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds7=="A"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              </tr>
            <tr>
              <td height="53" <? if($ds=="A" or $ds=="B"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds1=="A" or $ds1=="B"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds2=="A" or $ds2=="B"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds3=="A" or $ds3=="B"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds4=="A" or $ds4=="B"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds5=="A" or $ds5=="B"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds6=="A" or $ds6=="B"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds7=="A" or $ds7=="B"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              </tr>
            <tr>
              <td height="50" <? if($ds=="A" or $ds=="B" or $ds=="C"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds1=="A" or $ds1=="B" or $ds1=="C"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds2=="A" or $ds2=="B" or $ds2=="C"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds3=="A" or $ds3=="B" or $ds3=="C"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds4=="A" or $ds4=="B" or $ds4=="C"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds5=="A" or $ds5=="B" or $ds5=="C"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds6=="A" or $ds6=="B" or $ds6=="C"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds7=="A" or $ds7=="B" or $ds7=="C"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              </tr>
            <tr>
              <td <? if($ds=="A" or $ds=="B" or $ds=="C" or $ds=="D"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3">'</td>
              <td <? if($ds1=="A" or $ds1=="B" or $ds1=="C" or $ds1=="D"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds2=="A" or $ds2=="B" or $ds2=="C" or $ds2=="D"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds3=="A" or $ds3=="B" or $ds3=="C" or $ds3=="D"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds4=="A" or $ds4=="B" or $ds4=="C" or $ds4=="D"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds5=="A" or $ds5=="B" or $ds5=="C" or $ds5=="D"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds6=="A" or $ds6=="B" or $ds6=="C" or $ds6=="D"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds7=="A" or $ds7=="B" or $ds7=="C" or $ds7=="D"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              </tr>
        </table></td>
        <td align="left" valign="bottom"><table width="63" height="184" border="0" align="left" cellpadding="0" cellspacing="0">
            <tr>
              <td height="48" <? if($ds9=="A"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds10=="A"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds11=="A"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds12=="A"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds13=="A"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds14=="A"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds15=="A"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds16=="A"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              </tr>
            <tr>
              <td height="53" <? if($ds9=="A" or $ds9=="B"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds10=="A" or $ds10=="B"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds11=="A" or $ds11=="B"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds12=="A" or $ds12=="B"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds13=="A" or $ds13=="B"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds14=="A" or $ds14=="B"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds15=="A" or $ds15=="B"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds16=="A" or $ds16=="B"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              </tr>
            <tr>
              <td height="50" <? if($ds9=="A" or $ds9=="B" or $ds9=="C"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds10=="A" or $ds10=="B" or $ds10=="C"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds11=="A" or $ds11=="B" or $ds11=="C"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds12=="A" or $ds12=="B" or $ds12=="C"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds13=="A" or $ds13=="B" or $ds13=="C"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds14=="A" or $ds14=="B" or $ds14=="C"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds15=="A" or $ds15=="B" or $ds15=="C"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds16=="A" or $ds16=="B" or $ds16=="C"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              </tr>
            <tr>
              <td <? if($ds9=="A" or $ds9=="B" or $ds9=="C" or $ds9=="D"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3">'</td>
              <td <? if($ds10=="A" or $ds10=="B" or $ds10=="C" or $ds10=="D"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds11=="A" or $ds11=="B" or $ds11=="C" or $ds11=="D"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds12=="A" or $ds12=="B" or $ds12=="C" or $ds12=="D"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds13=="A" or $ds13=="B" or $ds13=="C" or $ds13=="D"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds14=="A" or $ds14=="B" or $ds14=="C" or $ds14=="D"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds15=="A" or $ds15=="B" or $ds15=="C" or $ds15=="D"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds16=="A" or $ds16=="B" or $ds16=="C" or $ds16=="D"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              </tr>
        </table></td>
        <td align="left" valign="bottom"><table width="63" height="184" border="0" align="left" cellpadding="0" cellspacing="0">
            <tr>
              <td height="48" <? if($ds18=="A"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds19=="A"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds20=="A"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds21=="A"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds22=="A"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds23=="A"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds24=="A"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds25=="A"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              </tr>
            <tr>
              <td height="53" <? if($ds18=="A" or $ds18=="B"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds19=="A" or $ds19=="B"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds20=="A" or $ds20=="B"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds21=="A" or $ds21=="B"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds22=="A" or $ds22=="B"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds23=="A" or $ds23=="B"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds24=="A" or $ds24=="B"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds25=="A" or $ds25=="B"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              </tr>
            <tr>
              <td height="50" <? if($ds18=="A" or $ds18=="B" or $ds18=="C"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds19=="A" or $ds19=="B" or $ds19=="C"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds20=="A" or $ds20=="B" or $ds20=="C"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds21=="A" or $ds21=="B" or $ds21=="C"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds22=="A" or $ds22=="B" or $ds22=="C"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds23=="A" or $ds23=="B" or $ds23=="C"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds24=="A" or $ds24=="B" or $ds24=="C"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds25=="A" or $ds25=="B" or $ds25=="C"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              </tr>
            <tr>
              <td <? if($ds18=="A" or $ds18=="B" or $ds18=="C" or $ds18=="D"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3">'</td>
              <td <? if($ds19=="A" or $ds19=="B" or $ds19=="C" or $ds19=="D"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds20=="A" or $ds20=="B" or $ds20=="C" or $ds20=="D"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds21=="A" or $ds21=="B" or $ds21=="C" or $ds21=="D"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds22=="A" or $ds22=="B" or $ds22=="C" or $ds22=="D"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds23=="A" or $ds23=="B" or $ds23=="C" or $ds23=="D"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds24=="A" or $ds24=="B" or $ds24=="C" or $ds24=="D"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds25=="A" or $ds25=="B" or $ds25=="C" or $ds25=="D"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              </tr>
        </table></td>
        <td align="left" valign="bottom"><table width="63" height="184" border="0" align="left" cellpadding="0" cellspacing="0">
            <tr>
              <td height="48" <? if($ds27=="A"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds28=="A"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds29=="A"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds30=="A"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds31=="A"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds32=="A"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds33=="A"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds34=="A"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              </tr>
            <tr>
              <td height="53" <? if($ds27=="A" or $ds27=="B"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds28=="A" or $ds28=="B"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds29=="A" or $ds29=="B"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds30=="A" or $ds30=="B"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds31=="A" or $ds31=="B"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds32=="A" or $ds32=="B"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds33=="A" or $ds33=="B"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds34=="A" or $ds34=="B"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              </tr>
            <tr>
              <td height="50" <? if($ds27=="A" or $ds27=="B" or $ds27=="C"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds28=="A" or $ds28=="B" or $ds28=="C"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds29=="A" or $ds29=="B" or $ds29=="C"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds30=="A" or $ds30=="B" or $ds30=="C"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds31=="A" or $ds31=="B" or $ds31=="C"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds32=="A" or $ds32=="B" or $ds32=="C"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds33=="A" or $ds33=="B" or $ds33=="C"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds34=="A" or $ds34=="B" or $ds34=="C"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              </tr>
            <tr>
              <td <? if($ds27=="A" or $ds27=="B" or $ds27=="C" or $ds27=="D"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3">'</td>
              <td <? if($ds28=="A" or $ds28=="B" or $ds28=="C" or $ds28=="D"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds29=="A" or $ds29=="B" or $ds29=="C" or $ds29=="D"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds30=="A" or $ds30=="B" or $ds30=="C" or $ds30=="D"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds31=="A" or $ds31=="B" or $ds31=="C" or $ds31=="D"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds32=="A" or $ds32=="B" or $ds32=="C" or $ds32=="D"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds33=="A" or $ds33=="B" or $ds33=="C" or $ds33=="D"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds34=="A" or $ds34=="B" or $ds34=="C" or $ds34=="D"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              </tr>
        </table></td>
        <td align="left" valign="bottom"><table width="63" height="184" border="0" align="left" cellpadding="0" cellspacing="0">
            <tr>
              <td height="48" <? if($ds36=="A"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds37=="A"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds38=="A"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds39=="A"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds40=="A"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds41=="A"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds42=="A"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds43=="A"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              </tr>
            <tr>
              <td height="53" <? if($ds36=="A" or $ds36=="B"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds37=="A" or $ds37=="B"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds38=="A" or $ds38=="B"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds39=="A" or $ds39=="B"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds40=="A" or $ds40=="B"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds41=="A" or $ds41=="B"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds42=="A" or $ds42=="B"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds43=="A" or $ds43=="B"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              </tr>
            <tr>
              <td height="50" <? if($ds36=="A" or $ds36=="B" or $ds36=="C"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds37=="A" or $ds37=="B" or $ds37=="C"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds38=="A" or $ds38=="B" or $ds38=="C"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds39=="A" or $ds39=="B" or $ds39=="C"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds40=="A" or $ds40=="B" or $ds40=="C"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds41=="A" or $ds41=="B" or $ds41=="C"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds42=="A" or $ds42=="B" or $ds42=="C"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds43=="A" or $ds43=="B" or $ds43=="C"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              </tr>
            <tr>
              <td <? if($ds36=="A" or $ds36=="B" or $ds36=="C" or $ds36=="D"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3">'</td>
              <td <? if($ds37=="A" or $ds37=="B" or $ds37=="C" or $ds37=="D"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds38=="A" or $ds38=="B" or $ds38=="C" or $ds38=="D"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds39=="A" or $ds39=="B" or $ds39=="C" or $ds39=="D"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds40=="A" or $ds40=="B" or $ds40=="C" or $ds40=="D"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds41=="A" or $ds41=="B" or $ds41=="C" or $ds41=="D"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds42=="A" or $ds42=="B" or $ds42=="C" or $ds42=="D"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds43=="A" or $ds43=="B" or $ds43=="C" or $ds43=="D"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              </tr>
        </table></td>
        <td align="left" valign="top"><table width="100%" height="26" border="0" align="left" cellpadding="0" cellspacing="4">
            <tr>
              <td width="8%" bgcolor="#FF0000">&nbsp;</td>
              <td width="92%">Adab salam</td>
            </tr>
            <tr>
              <td bgcolor="#0000FF">&nbsp;</td>
              <td>Adab berbicara</td>
            </tr>
            <tr>
              <td bgcolor="#FFFF00">&nbsp;</td>
              <td>Adab berpakaian</td>
            </tr>
            <tr>
              <td bgcolor="#00FFFF">&nbsp;</td>
              <td>Adab makan-minum</td>
            </tr>
            <tr>
              <td bgcolor="#FF00FF">&nbsp;</td>
              <td>Adab belajar</td>
            </tr>
            <tr>
              <td bgcolor="#CC6600">&nbsp;</td>
              <td>Adab terhadap Pembina</td>
            </tr>
            <tr>
              <td bgcolor="#99FF33">&nbsp;</td>
              <td>Adab bergaul-teman</td>
            </tr>
            <tr>
              <td bgcolor="#FF99CC">&nbsp;</td>
              <td>Adab bercanda-berkelakar</td>
            </tr>
            
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr valign="top">
    <td height="19" colspan="7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../images/bln.jpg" width="423" height="16" /></td>
  </tr>
  
  <tr valign="top">
    <td height="18" colspan="7"><?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='1' and nis='$ct[nis]' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['briefing']=='a' or $cnt['briefing']=='A') { $sj=$sj+4; }
			  if($cnt['briefing']=='b' or $cnt['briefing']=='B') { $sj=$sj+3; }
			  if($cnt['briefing']=='c' or $cnt['briefing']=='C') { $sj=$sj+2; }
			  if($cnt['briefing']=='d' or $cnt['briefing']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds="C";  }
		if($t_sj <=1.49){ $ds="D";  }
		}
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='1' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['izin_pulang']=='a' or $cnt['izin_pulang']=='A') { $sj=$sj+4; }
			  if($cnt['izin_pulang']=='b' or $cnt['izin_pulang']=='B') { $sj=$sj+3; }
			  if($cnt['izin_pulang']=='c' or $cnt['izin_pulang']=='C') { $sj=$sj+2; }
			  if($cnt['izin_pulang']=='d' or $cnt['izin_pulang']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds1="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds1="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds1="C";  }
		if($t_sj <=1.49){ $ds1="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='1' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['kegiatan_asrama']=='a' or $cnt['kegiatan_asrama']=='A') { $sj=$sj+4; }
			  if($cnt['kegiatan_asrama']=='b' or $cnt['kegiatan_asrama']=='B') { $sj=$sj+3; }
			  if($cnt['kegiatan_asrama']=='c' or $cnt['kegiatan_asrama']=='C') { $sj=$sj+2; }
			  if($cnt['kegiatan_asrama']=='d' or $cnt['kegiatan_asrama']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds2="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds2="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds2="C";  }
		if($t_sj <=1.49){ $ds2="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='1' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['belajar_mandiri']=='a' or $cnt['belajar_mandiri']=='A') { $sj=$sj+4; }
			  if($cnt['belajar_mandiri']=='b' or $cnt['belajar_mandiri']=='B') { $sj=$sj+3; }
			  if($cnt['belajar_mandiri']=='c' or $cnt['belajar_mandiri']=='C') { $sj=$sj+2; }
			  if($cnt['belajar_mandiri']=='d' or $cnt['belajar_mandiri']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds3="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds3="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds3="C";  }
		if($t_sj <=1.49){ $ds3="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='1' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['berbahasa_inggris']=='a' or $cnt['berbahasa_inggris']=='A') { $sj=$sj+4; }
			  if($cnt['berbahasa_inggris']=='b' or $cnt['berbahasa_inggris']=='B') { $sj=$sj+3; }
			  if($cnt['berbahasa_inggris']=='c' or $cnt['berbahasa_inggris']=='C') { $sj=$sj+2; }
			  if($cnt['berbahasa_inggris']=='d' or $cnt['berbahasa_inggris']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds4="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds4="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds4="C";  }
		if($t_sj <=1.49){ $ds4="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='1' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['belajar_malam']=='a' or $cnt['belajar_malam']=='A') { $sj=$sj+4; }
			  if($cnt['belajar_malam']=='b' or $cnt['belajar_malam']=='B') { $sj=$sj+3; }
			  if($cnt['belajar_malam']=='c' or $cnt['belajar_malam']=='C') { $sj=$sj+2; }
			  if($cnt['belajar_malam']=='d' or $cnt['belajar_malam']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds5="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds5="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds5="C";  }
		if($t_sj <=1.49){ $ds5="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='1' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['berbahasa_arab']=='a' or $cnt['berbahasa_arab']=='A') { $sj=$sj+4; }
			  if($cnt['berbahasa_arab']=='b' or $cnt['berbahasa_arab']=='B') { $sj=$sj+3; }
			  if($cnt['berbahasa_arab']=='c' or $cnt['berbahasa_arab']=='C') { $sj=$sj+2; }
			  if($cnt['berbahasa_arab']=='d' or $cnt['berbahasa_arab']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds6="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds6="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds6="C";  }
		if($t_sj <=1.49){ $ds6="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='1' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['tidur']=='a' or $cnt['tidur']=='A') { $sj=$sj+4; }
			  if($cnt['tidur']=='b' or $cnt['tidur']=='B') { $sj=$sj+3; }
			  if($cnt['tidur']=='c' or $cnt['tidur']=='C') { $sj=$sj+2; }
			  if($cnt['tidur']=='d' or $cnt['tidur']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds7="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds7="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds7="C";  }
		if($t_sj <=1.49){ $ds7="D";  } }
		?><?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='2' and nis='$ct[nis]' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['briefing']=='a' or $cnt['briefing']=='A') { $sj=$sj+4; }
			  if($cnt['briefing']=='b' or $cnt['briefing']=='B') { $sj=$sj+3; }
			  if($cnt['briefing']=='c' or $cnt['briefing']=='C') { $sj=$sj+2; }
			  if($cnt['briefing']=='d' or $cnt['briefing']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds8="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds8="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds8="C";  }
		if($t_sj <=1.49){ $ds8="D";  }
		}
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='2' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['izin_pulang']=='a' or $cnt['izin_pulang']=='A') { $sj=$sj+4; }
			  if($cnt['izin_pulang']=='b' or $cnt['izin_pulang']=='B') { $sj=$sj+3; }
			  if($cnt['izin_pulang']=='c' or $cnt['izin_pulang']=='C') { $sj=$sj+2; }
			  if($cnt['izin_pulang']=='d' or $cnt['izin_pulang']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds9="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds9="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds9="C";  }
		if($t_sj <=1.49){ $ds9="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='2' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['kegiatan_asrama']=='a' or $cnt['kegiatan_asrama']=='A') { $sj=$sj+4; }
			  if($cnt['kegiatan_asrama']=='b' or $cnt['kegiatan_asrama']=='B') { $sj=$sj+3; }
			  if($cnt['kegiatan_asrama']=='c' or $cnt['kegiatan_asrama']=='C') { $sj=$sj+2; }
			  if($cnt['kegiatan_asrama']=='d' or $cnt['kegiatan_asrama']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds10="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds10="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds10="C";  }
		if($t_sj <=1.49){ $ds10="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='2' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['belajar_mandiri']=='a' or $cnt['belajar_mandiri']=='A') { $sj=$sj+4; }
			  if($cnt['belajar_mandiri']=='b' or $cnt['belajar_mandiri']=='B') { $sj=$sj+3; }
			  if($cnt['belajar_mandiri']=='c' or $cnt['belajar_mandiri']=='C') { $sj=$sj+2; }
			  if($cnt['belajar_mandiri']=='d' or $cnt['belajar_mandiri']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds11="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds11="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds11="C";  }
		if($t_sj <=1.49){ $ds11="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='2' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['berbahasa_inggris']=='a' or $cnt['berbahasa_inggris']=='A') { $sj=$sj+4; }
			  if($cnt['berbahasa_inggris']=='b' or $cnt['berbahasa_inggris']=='B') { $sj=$sj+3; }
			  if($cnt['berbahasa_inggris']=='c' or $cnt['berbahasa_inggris']=='C') { $sj=$sj+2; }
			  if($cnt['berbahasa_inggris']=='d' or $cnt['berbahasa_inggris']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds12="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds12="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds12="C";  }
		if($t_sj <=1.49){ $ds12="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='2' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['belajar_malam']=='a' or $cnt['belajar_malam']=='A') { $sj=$sj+4; }
			  if($cnt['belajar_malam']=='b' or $cnt['belajar_malam']=='B') { $sj=$sj+3; }
			  if($cnt['belajar_malam']=='c' or $cnt['belajar_malam']=='C') { $sj=$sj+2; }
			  if($cnt['belajar_malam']=='d' or $cnt['belajar_malam']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds13="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds13="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds13="C";  }
		if($t_sj <=1.49){ $ds13="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='2' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['berbahasa_arab']=='a' or $cnt['berbahasa_arab']=='A') { $sj=$sj+4; }
			  if($cnt['berbahasa_arab']=='b' or $cnt['berbahasa_arab']=='B') { $sj=$sj+3; }
			  if($cnt['berbahasa_arab']=='c' or $cnt['berbahasa_arab']=='C') { $sj=$sj+2; }
			  if($cnt['berbahasa_arab']=='d' or $cnt['berbahasa_arab']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds14="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds14="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds14="C";  }
		if($t_sj <=1.49){ $ds14="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='2' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['tidur']=='a' or $cnt['tidur']=='A') { $sj=$sj+4; }
			  if($cnt['tidur']=='b' or $cnt['tidur']=='B') { $sj=$sj+3; }
			  if($cnt['tidur']=='c' or $cnt['tidur']=='C') { $sj=$sj+2; }
			  if($cnt['tidur']=='d' or $cnt['tidur']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds15="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds15="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds15="C";  }
		if($t_sj <=1.49){ $ds15="D";  } }
		?><?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='3' and nis='$ct[nis]' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['briefing']=='a' or $cnt['briefing']=='A') { $sj=$sj+4; }
			  if($cnt['briefing']=='b' or $cnt['briefing']=='B') { $sj=$sj+3; }
			  if($cnt['briefing']=='c' or $cnt['briefing']=='C') { $sj=$sj+2; }
			  if($cnt['briefing']=='d' or $cnt['briefing']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds16="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds16="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds16="C";  }
		if($t_sj <=1.49){ $ds16="D";  }
		}
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='3' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['izin_pulang']=='a' or $cnt['izin_pulang']=='A') { $sj=$sj+4; }
			  if($cnt['izin_pulang']=='b' or $cnt['izin_pulang']=='B') { $sj=$sj+3; }
			  if($cnt['izin_pulang']=='c' or $cnt['izin_pulang']=='C') { $sj=$sj+2; }
			  if($cnt['izin_pulang']=='d' or $cnt['izin_pulang']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds17="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds17="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds17="C";  }
		if($t_sj <=1.49){ $ds17="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='3' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['kegiatan_asrama']=='a' or $cnt['kegiatan_asrama']=='A') { $sj=$sj+4; }
			  if($cnt['kegiatan_asrama']=='b' or $cnt['kegiatan_asrama']=='B') { $sj=$sj+3; }
			  if($cnt['kegiatan_asrama']=='c' or $cnt['kegiatan_asrama']=='C') { $sj=$sj+2; }
			  if($cnt['kegiatan_asrama']=='d' or $cnt['kegiatan_asrama']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds18="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds18="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds18="C";  }
		if($t_sj <=1.49){ $ds18="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='3' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['belajar_mandiri']=='a' or $cnt['belajar_mandiri']=='A') { $sj=$sj+4; }
			  if($cnt['belajar_mandiri']=='b' or $cnt['belajar_mandiri']=='B') { $sj=$sj+3; }
			  if($cnt['belajar_mandiri']=='c' or $cnt['belajar_mandiri']=='C') { $sj=$sj+2; }
			  if($cnt['belajar_mandiri']=='d' or $cnt['belajar_mandiri']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds19="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds19="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds19="C";  }
		if($t_sj <=1.49){ $ds19="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='3' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['berbahasa_inggris']=='a' or $cnt['berbahasa_inggris']=='A') { $sj=$sj+4; }
			  if($cnt['berbahasa_inggris']=='b' or $cnt['berbahasa_inggris']=='B') { $sj=$sj+3; }
			  if($cnt['berbahasa_inggris']=='c' or $cnt['berbahasa_inggris']=='C') { $sj=$sj+2; }
			  if($cnt['berbahasa_inggris']=='d' or $cnt['berbahasa_inggris']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds20="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds20="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds20="C";  }
		if($t_sj <=1.49){ $ds20="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='3' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['belajar_malam']=='a' or $cnt['belajar_malam']=='A') { $sj=$sj+4; }
			  if($cnt['belajar_malam']=='b' or $cnt['belajar_malam']=='B') { $sj=$sj+3; }
			  if($cnt['belajar_malam']=='c' or $cnt['belajar_malam']=='C') { $sj=$sj+2; }
			  if($cnt['belajar_malam']=='d' or $cnt['belajar_malam']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds21="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds21="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds21="C";  }
		if($t_sj <=1.49){ $ds21="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='3' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['berbahasa_arab']=='a' or $cnt['berbahasa_arab']=='A') { $sj=$sj+4; }
			  if($cnt['berbahasa_arab']=='b' or $cnt['berbahasa_arab']=='B') { $sj=$sj+3; }
			  if($cnt['berbahasa_arab']=='c' or $cnt['berbahasa_arab']=='C') { $sj=$sj+2; }
			  if($cnt['berbahasa_arab']=='d' or $cnt['berbahasa_arab']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds22="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds22="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds22="C";  }
		if($t_sj <=1.49){ $ds22="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='3' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['tidur']=='a' or $cnt['tidur']=='A') { $sj=$sj+4; }
			  if($cnt['tidur']=='b' or $cnt['tidur']=='B') { $sj=$sj+3; }
			  if($cnt['tidur']=='c' or $cnt['tidur']=='C') { $sj=$sj+2; }
			  if($cnt['tidur']=='d' or $cnt['tidur']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds23="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds23="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds23="C";  }
		if($t_sj <=1.49){ $ds23="D";  } }
		?><?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='4' and nis='$ct[nis]' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['briefing']=='a' or $cnt['briefing']=='A') { $sj=$sj+4; }
			  if($cnt['briefing']=='b' or $cnt['briefing']=='B') { $sj=$sj+3; }
			  if($cnt['briefing']=='c' or $cnt['briefing']=='C') { $sj=$sj+2; }
			  if($cnt['briefing']=='d' or $cnt['briefing']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds24="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds24="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds24="C";  }
		if($t_sj <=1.49){ $ds24="D";  }
		}
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='4' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['izin_pulang']=='a' or $cnt['izin_pulang']=='A') { $sj=$sj+4; }
			  if($cnt['izin_pulang']=='b' or $cnt['izin_pulang']=='B') { $sj=$sj+3; }
			  if($cnt['izin_pulang']=='c' or $cnt['izin_pulang']=='C') { $sj=$sj+2; }
			  if($cnt['izin_pulang']=='d' or $cnt['izin_pulang']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds25="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds25="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds25="C";  }
		if($t_sj <=1.49){ $ds25="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='4' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['kegiatan_asrama']=='a' or $cnt['kegiatan_asrama']=='A') { $sj=$sj+4; }
			  if($cnt['kegiatan_asrama']=='b' or $cnt['kegiatan_asrama']=='B') { $sj=$sj+3; }
			  if($cnt['kegiatan_asrama']=='c' or $cnt['kegiatan_asrama']=='C') { $sj=$sj+2; }
			  if($cnt['kegiatan_asrama']=='d' or $cnt['kegiatan_asrama']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds26="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds26="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds26="C";  }
		if($t_sj <=1.49){ $ds26="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='4' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['belajar_mandiri']=='a' or $cnt['belajar_mandiri']=='A') { $sj=$sj+4; }
			  if($cnt['belajar_mandiri']=='b' or $cnt['belajar_mandiri']=='B') { $sj=$sj+3; }
			  if($cnt['belajar_mandiri']=='c' or $cnt['belajar_mandiri']=='C') { $sj=$sj+2; }
			  if($cnt['belajar_mandiri']=='d' or $cnt['belajar_mandiri']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds27="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds27="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds27="C";  }
		if($t_sj <=1.49){ $ds27="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='4' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['berbahasa_inggris']=='a' or $cnt['berbahasa_inggris']=='A') { $sj=$sj+4; }
			  if($cnt['berbahasa_inggris']=='b' or $cnt['berbahasa_inggris']=='B') { $sj=$sj+3; }
			  if($cnt['berbahasa_inggris']=='c' or $cnt['berbahasa_inggris']=='C') { $sj=$sj+2; }
			  if($cnt['berbahasa_inggris']=='d' or $cnt['berbahasa_inggris']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds28="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds28="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds28="C";  }
		if($t_sj <=1.49){ $ds28="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='4' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['belajar_malam']=='a' or $cnt['belajar_malam']=='A') { $sj=$sj+4; }
			  if($cnt['belajar_malam']=='b' or $cnt['belajar_malam']=='B') { $sj=$sj+3; }
			  if($cnt['belajar_malam']=='c' or $cnt['belajar_malam']=='C') { $sj=$sj+2; }
			  if($cnt['belajar_malam']=='d' or $cnt['belajar_malam']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds29="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds29="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds29="C";  }
		if($t_sj <=1.49){ $ds29="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='4' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['berbahasa_arab']=='a' or $cnt['berbahasa_arab']=='A') { $sj=$sj+4; }
			  if($cnt['berbahasa_arab']=='b' or $cnt['berbahasa_arab']=='B') { $sj=$sj+3; }
			  if($cnt['berbahasa_arab']=='c' or $cnt['berbahasa_arab']=='C') { $sj=$sj+2; }
			  if($cnt['berbahasa_arab']=='d' or $cnt['berbahasa_arab']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds30="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds30="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds30="C";  }
		if($t_sj <=1.49){ $ds30="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='4' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['tidur']=='a' or $cnt['tidur']=='A') { $sj=$sj+4; }
			  if($cnt['tidur']=='b' or $cnt['tidur']=='B') { $sj=$sj+3; }
			  if($cnt['tidur']=='c' or $cnt['tidur']=='C') { $sj=$sj+2; }
			  if($cnt['tidur']=='d' or $cnt['tidur']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds31="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds31="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds31="C";  }
		if($t_sj <=1.49){ $ds31="D";  } }
		?><?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='5' and nis='$ct[nis]' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['briefing']=='a' or $cnt['briefing']=='A') { $sj=$sj+4; }
			  if($cnt['briefing']=='b' or $cnt['briefing']=='B') { $sj=$sj+3; }
			  if($cnt['briefing']=='c' or $cnt['briefing']=='C') { $sj=$sj+2; }
			  if($cnt['briefing']=='d' or $cnt['briefing']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds32="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds32="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds32="C";  }
		if($t_sj <=1.49){ $ds32="D";  }
		}
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='5' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['izin_pulang']=='a' or $cnt['izin_pulang']=='A') { $sj=$sj+4; }
			  if($cnt['izin_pulang']=='b' or $cnt['izin_pulang']=='B') { $sj=$sj+3; }
			  if($cnt['izin_pulang']=='c' or $cnt['izin_pulang']=='C') { $sj=$sj+2; }
			  if($cnt['izin_pulang']=='d' or $cnt['izin_pulang']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds33="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds33="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds33="C";  }
		if($t_sj <=1.49){ $ds33="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='5' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['kegiatan_asrama']=='a' or $cnt['kegiatan_asrama']=='A') { $sj=$sj+4; }
			  if($cnt['kegiatan_asrama']=='b' or $cnt['kegiatan_asrama']=='B') { $sj=$sj+3; }
			  if($cnt['kegiatan_asrama']=='c' or $cnt['kegiatan_asrama']=='C') { $sj=$sj+2; }
			  if($cnt['kegiatan_asrama']=='d' or $cnt['kegiatan_asrama']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds34="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds34="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds34="C";  }
		if($t_sj <=1.49){ $ds34="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='5' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['belajar_mandiri']=='a' or $cnt['belajar_mandiri']=='A') { $sj=$sj+4; }
			  if($cnt['belajar_mandiri']=='b' or $cnt['belajar_mandiri']=='B') { $sj=$sj+3; }
			  if($cnt['belajar_mandiri']=='c' or $cnt['belajar_mandiri']=='C') { $sj=$sj+2; }
			  if($cnt['belajar_mandiri']=='d' or $cnt['belajar_mandiri']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds35="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds35="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds35="C";  }
		if($t_sj <=1.49){ $ds35="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='5' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['berbahasa_inggris']=='a' or $cnt['berbahasa_inggris']=='A') { $sj=$sj+4; }
			  if($cnt['berbahasa_inggris']=='b' or $cnt['berbahasa_inggris']=='B') { $sj=$sj+3; }
			  if($cnt['berbahasa_inggris']=='c' or $cnt['berbahasa_inggris']=='C') { $sj=$sj+2; }
			  if($cnt['berbahasa_inggris']=='d' or $cnt['berbahasa_inggris']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds36="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds36="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds36="C";  }
		if($t_sj <=1.49){ $ds36="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='5' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['belajar_malam']=='a' or $cnt['belajar_malam']=='A') { $sj=$sj+4; }
			  if($cnt['belajar_malam']=='b' or $cnt['belajar_malam']=='B') { $sj=$sj+3; }
			  if($cnt['belajar_malam']=='c' or $cnt['belajar_malam']=='C') { $sj=$sj+2; }
			  if($cnt['belajar_malam']=='d' or $cnt['belajar_malam']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds37="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds37="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds37="C";  }
		if($t_sj <=1.49){ $ds37="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='5' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['berbahasa_arab']=='a' or $cnt['berbahasa_arab']=='A') { $sj=$sj+4; }
			  if($cnt['berbahasa_arab']=='b' or $cnt['berbahasa_arab']=='B') { $sj=$sj+3; }
			  if($cnt['berbahasa_arab']=='c' or $cnt['berbahasa_arab']=='C') { $sj=$sj+2; }
			  if($cnt['berbahasa_arab']=='d' or $cnt['berbahasa_arab']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds38="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds38="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds38="C";  }
		if($t_sj <=1.49){ $ds38="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='5' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['tidur']=='a' or $cnt['tidur']=='A') { $sj=$sj+4; }
			  if($cnt['tidur']=='b' or $cnt['tidur']=='B') { $sj=$sj+3; }
			  if($cnt['tidur']=='c' or $cnt['tidur']=='C') { $sj=$sj+2; }
			  if($cnt['tidur']=='d' or $cnt['tidur']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds39="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds39="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds39="C";  }
		if($t_sj <=1.49){ $ds39="D";  } }
		?></td>
  </tr>
  <tr valign="top">
    <td height="25" colspan="7"><table width="791" border="0" cellpadding="0" cellspacing="0">
      
      <tr>
        <td height="18" align="right" bgcolor="#CCCCCC">&nbsp;</td>
        <td colspan="5" align="left" bgcolor="#CCCCCC"><span class="style13">KEDISIPLINAN</span> </td>
        <td width="39%" align="left" bgcolor="#CCCCCC">&nbsp;</td>
      </tr>
      <tr>
        <td height="14" align="right">&nbsp;</td>
        <td width="10%" align="left">&nbsp;</td>
        <td width="10%" align="left">&nbsp;</td>
        <td width="10%" align="left">&nbsp;</td>
        <td width="10%" align="left">&nbsp;</td>
        <td width="17%" align="left">&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
      
      <tr>
        <td width="4%" height="191" align="right"><img src="../images/ab.jpg" width="32" height="191" align="left" /></td>
        <td align="left" valign="bottom"><table width="63" height="189" border="0" align="left" cellpadding="0" cellspacing="0">
            <tr>
              <td height="50" <? if($ds=="A"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds1=="A"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds2=="A"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds3=="A"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds4=="A"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds5=="A"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds6=="A"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds7=="A"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            </tr>
            <tr>
              <td height="53" <? if($ds=="A" or $ds=="B"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds1=="A" or $ds1=="B"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds2=="A" or $ds2=="B"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds3=="A" or $ds3=="B"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds4=="A" or $ds4=="B"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds5=="A" or $ds5=="B"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds6=="A" or $ds6=="B"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds7=="A" or $ds7=="B"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            </tr>
            <tr>
              <td height="50" <? if($ds=="A" or $ds=="B" or $ds=="C"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds1=="A" or $ds1=="B" or $ds1=="C"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds2=="A" or $ds2=="B" or $ds2=="C"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds3=="A" or $ds3=="B" or $ds3=="C"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds4=="A" or $ds4=="B" or $ds4=="C"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds5=="A" or $ds5=="B" or $ds5=="C"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds6=="A" or $ds6=="B" or $ds6=="C"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds7=="A" or $ds7=="B" or $ds7=="C"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            </tr>
            <tr>
              <td <? if($ds=="A" or $ds=="B" or $ds=="C" or $ds=="D"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3">'</td>
              <td <? if($ds1=="A" or $ds1=="B" or $ds1=="C" or $ds1=="D"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds2=="A" or $ds2=="B" or $ds2=="C" or $ds2=="D"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds3=="A" or $ds3=="B" or $ds3=="C" or $ds3=="D"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds4=="A" or $ds4=="B" or $ds4=="C" or $ds4=="D"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds5=="A" or $ds5=="B" or $ds5=="C" or $ds5=="D"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds6=="A" or $ds6=="B" or $ds6=="C" or $ds6=="D"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds7=="A" or $ds7=="B" or $ds7=="C" or $ds7=="D"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            </tr>
        </table></td>
        <td align="left" valign="bottom"><table width="63" height="184" border="0" align="left" cellpadding="0" cellspacing="0">
            <tr>
              <td height="48" <? if($ds8=="A"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds9=="A"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds10=="A"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds11=="A"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds12=="A"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds13=="A"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds14=="A"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds15=="A"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            </tr>
            <tr>
              <td height="53" <? if($ds8=="A" or $ds8=="B"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds9=="A" or $ds9=="B"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds10=="A" or $ds10=="B"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds11=="A" or $ds11=="B"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds12=="A" or $ds12=="B"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds13=="A" or $ds13=="B"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds14=="A" or $ds14=="B"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds15=="A" or $ds15=="B"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            </tr>
            <tr>
              <td height="50" <? if($ds8=="A" or $ds8=="B" or $ds8=="C"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds9=="A" or $ds9=="B" or $ds9=="C"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds10=="A" or $ds10=="B" or $ds10=="C"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds11=="A" or $ds11=="B" or $ds11=="C"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds12=="A" or $ds12=="B" or $ds12=="C"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds13=="A" or $ds13=="B" or $ds13=="C"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds14=="A" or $ds14=="B" or $ds14=="C"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds15=="A" or $ds15=="B" or $ds15=="C"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            </tr>
            <tr>
              <td <? if($ds8=="A" or $ds8=="B" or $ds8=="C" or $ds8=="D"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3">'</td>
              <td <? if($ds9=="A" or $ds9=="B" or $ds9=="C" or $ds9=="D"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds10=="A" or $ds10=="B" or $ds10=="C" or $ds10=="D"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds11=="A" or $ds11=="B" or $ds11=="C" or $ds11=="D"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds12=="A" or $ds12=="B" or $ds12=="C" or $ds12=="D"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds13=="A" or $ds13=="B" or $ds13=="C" or $ds13=="D"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds14=="A" or $ds14=="B" or $ds14=="C" or $ds14=="D"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds15=="A" or $ds15=="B" or $ds15=="C" or $ds15=="D"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            </tr>
        </table></td>
        <td align="left" valign="bottom"><table width="63" height="184" border="0" align="left" cellpadding="0" cellspacing="0">
            <tr>
              <td height="48" <? if($ds16=="A"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds17=="A"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds18=="A"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds19=="A"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds20=="A"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds21=="A"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds22=="A"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds23=="A"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            </tr>
            <tr>
              <td height="53" <? if($ds16=="A" or $ds16=="B"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds17=="A" or $ds17=="B"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds18=="A" or $ds18=="B"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds19=="A" or $ds19=="B"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds20=="A" or $ds20=="B"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds21=="A" or $ds21=="B"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds22=="A" or $ds22=="B"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds23=="A" or $ds23=="B"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            </tr>
            <tr>
              <td height="50" <? if($ds16=="A" or $ds16=="B" or $ds16=="C"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds17=="A" or $ds17=="B" or $ds17=="C"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds18=="A" or $ds18=="B" or $ds18=="C"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds19=="A" or $ds19=="B" or $ds19=="C"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds20=="A" or $ds20=="B" or $ds20=="C"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds21=="A" or $ds21=="B" or $ds21=="C"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds22=="A" or $ds22=="B" or $ds22=="C"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds23=="A" or $ds23=="B" or $ds23=="C"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            </tr>
            <tr>
              <td <? if($ds16=="A" or $ds16=="B" or $ds16=="C" or $ds16=="D"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3">'</td>
              <td <? if($ds17=="A" or $ds17=="B" or $ds17=="C" or $ds17=="D"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds18=="A" or $ds18=="B" or $ds18=="C" or $ds18=="D"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds19=="A" or $ds19=="B" or $ds19=="C" or $ds19=="D"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds20=="A" or $ds20=="B" or $ds20=="C" or $ds20=="D"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds21=="A" or $ds21=="B" or $ds21=="C" or $ds21=="D"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds22=="A" or $ds22=="B" or $ds22=="C" or $ds22=="D"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds23=="A" or $ds23=="B" or $ds23=="C" or $ds23=="D"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            </tr>
        </table></td>
        <td align="left" valign="bottom"><table width="63" height="184" border="0" align="left" cellpadding="0" cellspacing="0">
            <tr>
              <td height="48" <? if($ds24=="A"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds25=="A"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds26=="A"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds27=="A"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds28=="A"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds29=="A"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds30=="A"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds31=="A"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            </tr>
            <tr>
              <td height="53" <? if($ds24=="A" or $ds24=="B"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds25=="A" or $ds25=="B"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds26=="A" or $ds26=="B"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds27=="A" or $ds27=="B"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds28=="A" or $ds28=="B"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds29=="A" or $ds29=="B"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds30=="A" or $ds30=="B"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds31=="A" or $ds31=="B"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            </tr>
            <tr>
              <td height="50" <? if($ds24=="A" or $ds24=="B" or $ds24=="C"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds25=="A" or $ds25=="B" or $ds25=="C"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds26=="A" or $ds26=="B" or $ds26=="C"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds27=="A" or $ds27=="B" or $ds27=="C"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds28=="A" or $ds28=="B" or $ds28=="C"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds29=="A" or $ds29=="B" or $ds29=="C"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds30=="A" or $ds30=="B" or $ds30=="C"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds31=="A" or $ds31=="B" or $ds31=="C"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            </tr>
            <tr>
              <td <? if($ds24=="A" or $ds24=="B" or $ds24=="C" or $ds24=="D"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3">'</td>
              <td <? if($ds25=="A" or $ds25=="B" or $ds25=="C" or $ds25=="D"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds26=="A" or $ds26=="B" or $ds26=="C" or $ds26=="D"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds27=="A" or $ds27=="B" or $ds27=="C" or $ds27=="D"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds28=="A" or $ds28=="B" or $ds28=="C" or $ds28=="D"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds29=="A" or $ds29=="B" or $ds29=="C" or $ds29=="D"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds30=="A" or $ds30=="B" or $ds30=="C" or $ds30=="D"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds31=="A" or $ds31=="B" or $ds31=="C" or $ds31=="D"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            </tr>
        </table></td>
        <td align="left" valign="bottom"><table width="63" height="184" border="0" align="left" cellpadding="0" cellspacing="0">
            <tr>
              <td height="48" <? if($ds32=="A"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds33=="A"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds34=="A"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds35=="A"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds36=="A"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds37=="A"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds38=="A"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds39=="A"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            </tr>
            <tr>
              <td height="53" <? if($ds32=="A" or $ds32=="B"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds33=="A" or $ds33=="B"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds34=="A" or $ds34=="B"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds35=="A" or $ds35=="B"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds36=="A" or $ds36=="B"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds37=="A" or $ds37=="B"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds38=="A" or $ds38=="B"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds39=="A" or $ds39=="B"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            </tr>
            <tr>
              <td height="50" <? if($ds32=="A" or $ds32=="B" or $ds32=="C"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds33=="A" or $ds33=="B" or $ds33=="C"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds34=="A" or $ds34=="B" or $ds34=="C"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds35=="A" or $ds35=="B" or $ds35=="C"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds36=="A" or $ds36=="B" or $ds36=="C"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds37=="A" or $ds37=="B" or $ds37=="C"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds38=="A" or $ds38=="B" or $ds38=="C"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds39=="A" or $ds39=="B" or $ds39=="C"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
            </tr>
            <tr>
              <td <? if($ds32=="A" or $ds32=="B" or $ds32=="C" or $ds32=="D"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3">'</td>
              <td <? if($ds33=="A" or $ds33=="B" or $ds33=="C" or $ds33=="D"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds34=="A" or $ds34=="B" or $ds34=="C" or $ds34=="D"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds35=="A" or $ds35=="B" or $ds35=="C" or $ds35=="D"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds36=="A" or $ds36=="B" or $ds36=="C" or $ds36=="D"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds37=="A" or $ds37=="B" or $ds37=="C" or $ds37=="D"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds38=="A" or $ds38=="B" or $ds38=="C" or $ds38=="D"){ ?>bgcolor="#99FF33" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds39=="A" or $ds39=="B" or $ds39=="C" or $ds39=="D"){ ?>bgcolor="#FF99CC" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
            </tr>
        </table></td>
        <td align="left" valign="top"><table width="100%" height="26" border="0" align="left" cellpadding="0" cellspacing="4">
            <tr>
              <td width="8%" bgcolor="#FF0000">&nbsp;</td>
              <td width="92%">Mengikuti briefing malam di asrama</td>
            </tr>
            <tr>
              <td bgcolor="#0000FF">&nbsp;</td>
              <td>Disiplin waktu perizinan &ndash; kepulangan reguler</td>
            </tr>
            <tr>
              <td bgcolor="#FFFF00">&nbsp;</td>
              <td>Disiplin mengikuti kegiatan asrama</td>
            </tr>
            <tr>
              <td bgcolor="#00FFFF">&nbsp;</td>
              <td>Disiplin belajar mandiri</td>
            </tr>
            <tr>
              <td bgcolor="#FF00FF">&nbsp;</td>
              <td>Disiplin berbahasa inggris</td>
            </tr>
            <tr>
              <td bgcolor="#CC6600">&nbsp;</td>
              <td>Disiplin mengikuti kegiatan belajar malam</td>
            </tr>
            <tr>
              <td bgcolor="#99FF33">&nbsp;</td>
              <td>Disiplin berbahasa arab</td>
            </tr>
            <tr>
              <td bgcolor="#FF99CC">&nbsp;</td>
              <td>Disiplin Tidur</td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr valign="top">
    <td height="19" colspan="7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../images/bln.jpg" width="423" height="16" /></td>
  </tr>
  <tr valign="top">
    <td height="25" colspan="7"><?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='1' and nis='$ct[nis]' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['bersih_diri']=='a' or $cnt['bersih_diri']=='A') { $sj=$sj+4; }
			  if($cnt['bersih_diri']=='b' or $cnt['bersih_diri']=='B') { $sj=$sj+3; }
			  if($cnt['bersih_diri']=='c' or $cnt['bersih_diri']=='C') { $sj=$sj+2; }
			  if($cnt['bersih_diri']=='d' or $cnt['bersih_diri']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds="C";  }
		if($t_sj <=1.49){ $ds="D";  }
		}
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='1' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['rapi_rambut_kuku']=='a' or $cnt['rapi_rambut_kuku']=='A') { $sj=$sj+4; }
			  if($cnt['rapi_rambut_kuku']=='b' or $cnt['rapi_rambut_kuku']=='B') { $sj=$sj+3; }
			  if($cnt['rapi_rambut_kuku']=='c' or $cnt['rapi_rambut_kuku']=='C') { $sj=$sj+2; }
			  if($cnt['rapi_rambut_kuku']=='d' or $cnt['rapi_rambut_kuku']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds1="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds1="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds1="C";  }
		if($t_sj <=1.49){ $ds1="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='1' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['kebersihan_kamar']=='a' or $cnt['kebersihan_kamar']=='A') { $sj=$sj+4; }
			  if($cnt['kebersihan_kamar']=='b' or $cnt['kebersihan_kamar']=='B') { $sj=$sj+3; }
			  if($cnt['kebersihan_kamar']=='c' or $cnt['kebersihan_kamar']=='C') { $sj=$sj+2; }
			  if($cnt['kebersihan_kamar']=='d' or $cnt['kebersihan_kamar']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds2="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds2="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds2="C";  }
		if($t_sj <=1.49){ $ds2="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='1' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['kerapihan_kamar']=='a' or $cnt['kerapihan_kamar']=='A') { $sj=$sj+4; }
			  if($cnt['kerapihan_kamar']=='b' or $cnt['kerapihan_kamar']=='B') { $sj=$sj+3; }
			  if($cnt['kerapihan_kamar']=='c' or $cnt['kerapihan_kamar']=='C') { $sj=$sj+2; }
			  if($cnt['kerapihan_kamar']=='d' or $cnt['kerapihan_kamar']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds3="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds3="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds3="C";  }
		if($t_sj <=1.49){ $ds3="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='1' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['rapi_berseragam']=='a' or $cnt['rapi_berseragam']=='A') { $sj=$sj+4; }
			  if($cnt['rapi_berseragam']=='b' or $cnt['rapi_berseragam']=='B') { $sj=$sj+3; }
			  if($cnt['rapi_berseragam']=='c' or $cnt['rapi_berseragam']=='C') { $sj=$sj+2; }
			  if($cnt['rapi_berseragam']=='d' or $cnt['rapi_berseragam']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds4="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds4="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds4="C";  }
		if($t_sj <=1.49){ $ds4="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='1' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['rapi_menyimpan_barang']=='a' or $cnt['rapi_menyimpan_barang']=='A') { $sj=$sj+4; }
			  if($cnt['rapi_menyimpan_barang']=='b' or $cnt['rapi_menyimpan_barang']=='B') { $sj=$sj+3; }
			  if($cnt['rapi_menyimpan_barang']=='c' or $cnt['rapi_menyimpan_barang']=='C') { $sj=$sj+2; }
			  if($cnt['rapi_menyimpan_barang']=='d' or $cnt['rapi_menyimpan_barang']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds5="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds5="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds5="C";  }
		if($t_sj <=1.49){ $ds5="D";  } }
		?><?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='2' and nis='$ct[nis]' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['bersih_diri']=='a' or $cnt['bersih_diri']=='A') { $sj=$sj+4; }
			  if($cnt['bersih_diri']=='b' or $cnt['bersih_diri']=='B') { $sj=$sj+3; }
			  if($cnt['bersih_diri']=='c' or $cnt['bersih_diri']=='C') { $sj=$sj+2; }
			  if($cnt['bersih_diri']=='d' or $cnt['bersih_diri']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds8="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds8="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds8="C";  }
		if($t_sj <=1.49){ $ds8="D";  }
		}
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='2' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['rapi_rambut_kuku']=='a' or $cnt['rapi_rambut_kuku']=='A') { $sj=$sj+4; }
			  if($cnt['rapi_rambut_kuku']=='b' or $cnt['rapi_rambut_kuku']=='B') { $sj=$sj+3; }
			  if($cnt['rapi_rambut_kuku']=='c' or $cnt['rapi_rambut_kuku']=='C') { $sj=$sj+2; }
			  if($cnt['rapi_rambut_kuku']=='d' or $cnt['rapi_rambut_kuku']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds9="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds9="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds9="C";  }
		if($t_sj <=1.49){ $ds9="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='2' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['kebersihan_kamar']=='a' or $cnt['kebersihan_kamar']=='A') { $sj=$sj+4; }
			  if($cnt['kebersihan_kamar']=='b' or $cnt['kebersihan_kamar']=='B') { $sj=$sj+3; }
			  if($cnt['kebersihan_kamar']=='c' or $cnt['kebersihan_kamar']=='C') { $sj=$sj+2; }
			  if($cnt['kebersihan_kamar']=='d' or $cnt['kebersihan_kamar']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds10="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds10="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds10="C";  }
		if($t_sj <=1.49){ $ds10="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='2' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['kerapihan_kamar']=='a' or $cnt['kerapihan_kamar']=='A') { $sj=$sj+4; }
			  if($cnt['kerapihan_kamar']=='b' or $cnt['kerapihan_kamar']=='B') { $sj=$sj+3; }
			  if($cnt['kerapihan_kamar']=='c' or $cnt['kerapihan_kamar']=='C') { $sj=$sj+2; }
			  if($cnt['kerapihan_kamar']=='d' or $cnt['kerapihan_kamar']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds11="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds11="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds11="C";  }
		if($t_sj <=1.49){ $ds11="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='2' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['rapi_berseragam']=='a' or $cnt['rapi_berseragam']=='A') { $sj=$sj+4; }
			  if($cnt['rapi_berseragam']=='b' or $cnt['rapi_berseragam']=='B') { $sj=$sj+3; }
			  if($cnt['rapi_berseragam']=='c' or $cnt['rapi_berseragam']=='C') { $sj=$sj+2; }
			  if($cnt['rapi_berseragam']=='d' or $cnt['rapi_berseragam']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds12="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds12="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds12="C";  }
		if($t_sj <=1.49){ $ds12="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='2' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['rapi_menyimpan_barang']=='a' or $cnt['rapi_menyimpan_barang']=='A') { $sj=$sj+4; }
			  if($cnt['rapi_menyimpan_barang']=='b' or $cnt['rapi_menyimpan_barang']=='B') { $sj=$sj+3; }
			  if($cnt['rapi_menyimpan_barang']=='c' or $cnt['rapi_menyimpan_barang']=='C') { $sj=$sj+2; }
			  if($cnt['rapi_menyimpan_barang']=='d' or $cnt['rapi_menyimpan_barang']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds13="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds13="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds13="C";  }
		if($t_sj <=1.49){ $ds13="D";  } }
		?><?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='3' and nis='$ct[nis]' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['bersih_diri']=='a' or $cnt['bersih_diri']=='A') { $sj=$sj+4; }
			  if($cnt['bersih_diri']=='b' or $cnt['bersih_diri']=='B') { $sj=$sj+3; }
			  if($cnt['bersih_diri']=='c' or $cnt['bersih_diri']=='C') { $sj=$sj+2; }
			  if($cnt['bersih_diri']=='d' or $cnt['bersih_diri']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds16="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds16="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds16="C";  }
		if($t_sj <=1.49){ $ds16="D";  }
		}
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='3' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['rapi_rambut_kuku']=='a' or $cnt['rapi_rambut_kuku']=='A') { $sj=$sj+4; }
			  if($cnt['rapi_rambut_kuku']=='b' or $cnt['rapi_rambut_kuku']=='B') { $sj=$sj+3; }
			  if($cnt['rapi_rambut_kuku']=='c' or $cnt['rapi_rambut_kuku']=='C') { $sj=$sj+2; }
			  if($cnt['rapi_rambut_kuku']=='d' or $cnt['rapi_rambut_kuku']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds17="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds17="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds17="C";  }
		if($t_sj <=1.49){ $ds17="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='3' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['kebersihan_kamar']=='a' or $cnt['kebersihan_kamar']=='A') { $sj=$sj+4; }
			  if($cnt['kebersihan_kamar']=='b' or $cnt['kebersihan_kamar']=='B') { $sj=$sj+3; }
			  if($cnt['kebersihan_kamar']=='c' or $cnt['kebersihan_kamar']=='C') { $sj=$sj+2; }
			  if($cnt['kebersihan_kamar']=='d' or $cnt['kebersihan_kamar']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds18="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds18="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds18="C";  }
		if($t_sj <=1.49){ $ds18="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='3' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['kerapihan_kamar']=='a' or $cnt['kerapihan_kamar']=='A') { $sj=$sj+4; }
			  if($cnt['kerapihan_kamar']=='b' or $cnt['kerapihan_kamar']=='B') { $sj=$sj+3; }
			  if($cnt['kerapihan_kamar']=='c' or $cnt['kerapihan_kamar']=='C') { $sj=$sj+2; }
			  if($cnt['kerapihan_kamar']=='d' or $cnt['kerapihan_kamar']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds19="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds19="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds19="C";  }
		if($t_sj <=1.49){ $ds19="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='3' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['rapi_berseragam']=='a' or $cnt['rapi_berseragam']=='A') { $sj=$sj+4; }
			  if($cnt['rapi_berseragam']=='b' or $cnt['rapi_berseragam']=='B') { $sj=$sj+3; }
			  if($cnt['rapi_berseragam']=='c' or $cnt['rapi_berseragam']=='C') { $sj=$sj+2; }
			  if($cnt['rapi_berseragam']=='d' or $cnt['rapi_berseragam']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds20="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds20="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds20="C";  }
		if($t_sj <=1.49){ $ds20="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='3' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['rapi_menyimpan_barang']=='a' or $cnt['rapi_menyimpan_barang']=='A') { $sj=$sj+4; }
			  if($cnt['rapi_menyimpan_barang']=='b' or $cnt['rapi_menyimpan_barang']=='B') { $sj=$sj+3; }
			  if($cnt['rapi_menyimpan_barang']=='c' or $cnt['rapi_menyimpan_barang']=='C') { $sj=$sj+2; }
			  if($cnt['rapi_menyimpan_barang']=='d' or $cnt['rapi_menyimpan_barang']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds21="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds21="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds21="C";  }
		if($t_sj <=1.49){ $ds21="D";  } }
		?><?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='4' and nis='$ct[nis]' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['bersih_diri']=='a' or $cnt['bersih_diri']=='A') { $sj=$sj+4; }
			  if($cnt['bersih_diri']=='b' or $cnt['bersih_diri']=='B') { $sj=$sj+3; }
			  if($cnt['bersih_diri']=='c' or $cnt['bersih_diri']=='C') { $sj=$sj+2; }
			  if($cnt['bersih_diri']=='d' or $cnt['bersih_diri']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds24="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds24="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds24="C";  }
		if($t_sj <=1.49){ $ds24="D";  }
		}
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='4' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['rapi_rambut_kuku']=='a' or $cnt['rapi_rambut_kuku']=='A') { $sj=$sj+4; }
			  if($cnt['rapi_rambut_kuku']=='b' or $cnt['rapi_rambut_kuku']=='B') { $sj=$sj+3; }
			  if($cnt['rapi_rambut_kuku']=='c' or $cnt['rapi_rambut_kuku']=='C') { $sj=$sj+2; }
			  if($cnt['rapi_rambut_kuku']=='d' or $cnt['rapi_rambut_kuku']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds25="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds25="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds25="C";  }
		if($t_sj <=1.49){ $ds25="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='4' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['kebersihan_kamar']=='a' or $cnt['kebersihan_kamar']=='A') { $sj=$sj+4; }
			  if($cnt['kebersihan_kamar']=='b' or $cnt['kebersihan_kamar']=='B') { $sj=$sj+3; }
			  if($cnt['kebersihan_kamar']=='c' or $cnt['kebersihan_kamar']=='C') { $sj=$sj+2; }
			  if($cnt['kebersihan_kamar']=='d' or $cnt['kebersihan_kamar']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds26="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds26="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds26="C";  }
		if($t_sj <=1.49){ $ds26="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='4' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['kerapihan_kamar']=='a' or $cnt['kerapihan_kamar']=='A') { $sj=$sj+4; }
			  if($cnt['kerapihan_kamar']=='b' or $cnt['kerapihan_kamar']=='B') { $sj=$sj+3; }
			  if($cnt['kerapihan_kamar']=='c' or $cnt['kerapihan_kamar']=='C') { $sj=$sj+2; }
			  if($cnt['kerapihan_kamar']=='d' or $cnt['kerapihan_kamar']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds27="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds27="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds27="C";  }
		if($t_sj <=1.49){ $ds27="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='4' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['rapi_berseragam']=='a' or $cnt['rapi_berseragam']=='A') { $sj=$sj+4; }
			  if($cnt['rapi_berseragam']=='b' or $cnt['rapi_berseragam']=='B') { $sj=$sj+3; }
			  if($cnt['rapi_berseragam']=='c' or $cnt['rapi_berseragam']=='C') { $sj=$sj+2; }
			  if($cnt['rapi_berseragam']=='d' or $cnt['rapi_berseragam']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds28="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds28="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds28="C";  }
		if($t_sj <=1.49){ $ds28="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='4' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['rapi_menyimpan_barang']=='a' or $cnt['rapi_menyimpan_barang']=='A') { $sj=$sj+4; }
			  if($cnt['rapi_menyimpan_barang']=='b' or $cnt['rapi_menyimpan_barang']=='B') { $sj=$sj+3; }
			  if($cnt['rapi_menyimpan_barang']=='c' or $cnt['rapi_menyimpan_barang']=='C') { $sj=$sj+2; }
			  if($cnt['rapi_menyimpan_barang']=='d' or $cnt['rapi_menyimpan_barang']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds29="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds29="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds29="C";  }
		if($t_sj <=1.49){ $ds29="D";  } }
		?><?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='5' and nis='$ct[nis]' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['bersih_diri']=='a' or $cnt['bersih_diri']=='A') { $sj=$sj+4; }
			  if($cnt['bersih_diri']=='b' or $cnt['bersih_diri']=='B') { $sj=$sj+3; }
			  if($cnt['bersih_diri']=='c' or $cnt['bersih_diri']=='C') { $sj=$sj+2; }
			  if($cnt['bersih_diri']=='d' or $cnt['bersih_diri']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds32="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds32="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds32="C";  }
		if($t_sj <=1.49){ $ds32="D";  }
		}
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='5' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['rapi_rambut_kuku']=='a' or $cnt['rapi_rambut_kuku']=='A') { $sj=$sj+4; }
			  if($cnt['rapi_rambut_kuku']=='b' or $cnt['rapi_rambut_kuku']=='B') { $sj=$sj+3; }
			  if($cnt['rapi_rambut_kuku']=='c' or $cnt['rapi_rambut_kuku']=='C') { $sj=$sj+2; }
			  if($cnt['rapi_rambut_kuku']=='d' or $cnt['rapi_rambut_kuku']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds33="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds33="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds33="C";  }
		if($t_sj <=1.49){ $ds33="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='5' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['kebersihan_kamar']=='a' or $cnt['kebersihan_kamar']=='A') { $sj=$sj+4; }
			  if($cnt['kebersihan_kamar']=='b' or $cnt['kebersihan_kamar']=='B') { $sj=$sj+3; }
			  if($cnt['kebersihan_kamar']=='c' or $cnt['kebersihan_kamar']=='C') { $sj=$sj+2; }
			  if($cnt['kebersihan_kamar']=='d' or $cnt['kebersihan_kamar']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds34="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds34="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds34="C";  }
		if($t_sj <=1.49){ $ds34="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='5' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['kerapihan_kamar']=='a' or $cnt['kerapihan_kamar']=='A') { $sj=$sj+4; }
			  if($cnt['kerapihan_kamar']=='b' or $cnt['kerapihan_kamar']=='B') { $sj=$sj+3; }
			  if($cnt['kerapihan_kamar']=='c' or $cnt['kerapihan_kamar']=='C') { $sj=$sj+2; }
			  if($cnt['kerapihan_kamar']=='d' or $cnt['kerapihan_kamar']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds35="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds35="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds35="C";  }
		if($t_sj <=1.49){ $ds35="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='5' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['rapi_berseragam']=='a' or $cnt['rapi_berseragam']=='A') { $sj=$sj+4; }
			  if($cnt['rapi_berseragam']=='b' or $cnt['rapi_berseragam']=='B') { $sj=$sj+3; }
			  if($cnt['rapi_berseragam']=='c' or $cnt['rapi_berseragam']=='C') { $sj=$sj+2; }
			  if($cnt['rapi_berseragam']=='d' or $cnt['rapi_berseragam']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds36="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds36="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds36="C";  }
		if($t_sj <=1.49){ $ds36="D";  } }
		?>
      <?  $sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='5' and nis='$ct[nis]' ");
		$j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['rapi_menyimpan_barang']=='a' or $cnt['rapi_menyimpan_barang']=='A') { $sj=$sj+4; }
			  if($cnt['rapi_menyimpan_barang']=='b' or $cnt['rapi_menyimpan_barang']=='B') { $sj=$sj+3; }
			  if($cnt['rapi_menyimpan_barang']=='c' or $cnt['rapi_menyimpan_barang']=='C') { $sj=$sj+2; }
			  if($cnt['rapi_menyimpan_barang']=='d' or $cnt['rapi_menyimpan_barang']=='D') { $sj=$sj+1; }
		}
		 if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50){ $ds37="A";  }
		if($t_sj <=3.49 and $t_sj>=2.50){ $ds37="B";  }
		if($t_sj <=2.49 and $t_sj>=1.50){ $ds37="C";  }
		if($t_sj <=1.49){ $ds37="D";  } }
		?></td>
  </tr>
  
  <tr valign="top">
    <td height="19" colspan="7"><table width="791" border="0" cellpadding="0" cellspacing="0">
      
      <tr>
        <td height="18" align="right" bgcolor="#CCCCCC">&nbsp;</td>
        <td colspan="5" align="left" bgcolor="#CCCCCC"><span class="style13">KEBERSIHAN DAN KERAPIHAN </span> </td>
        <td width="39%" align="left" bgcolor="#CCCCCC">&nbsp;</td>
      </tr>
      <tr>
        <td height="14" align="right">&nbsp;</td>
        <td width="10%" align="left">&nbsp;</td>
        <td width="10%" align="left">&nbsp;</td>
        <td width="10%" align="left">&nbsp;</td>
        <td width="10%" align="left">&nbsp;</td>
        <td width="17%" align="left">&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
      
      <tr>
        <td width="4%" height="191" align="right"><img src="../images/ab.jpg" width="32" height="191" align="left" /></td>
        <td align="left" valign="bottom"><table width="63" height="189" border="0" align="left" cellpadding="0" cellspacing="0">
            <tr>
              <td height="50" <? if($ds=="A"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds1=="A"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds2=="A"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds3=="A"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds4=="A"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds5=="A"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              </tr>
            <tr>
              <td height="53" <? if($ds=="A" or $ds=="B"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds1=="A" or $ds1=="B"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds2=="A" or $ds2=="B"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds3=="A" or $ds3=="B"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds4=="A" or $ds4=="B"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds5=="A" or $ds5=="B"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              </tr>
            <tr>
              <td height="50" <? if($ds=="A" or $ds=="B" or $ds=="C"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds1=="A" or $ds1=="B" or $ds1=="C"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds2=="A" or $ds2=="B" or $ds2=="C"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds3=="A" or $ds3=="B" or $ds3=="C"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds4=="A" or $ds4=="B" or $ds4=="C"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds5=="A" or $ds5=="B" or $ds5=="C"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              </tr>
            <tr>
              <td <? if($ds=="A" or $ds=="B" or $ds=="C" or $ds=="D"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3">'</td>
              <td <? if($ds1=="A" or $ds1=="B" or $ds1=="C" or $ds1=="D"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds2=="A" or $ds2=="B" or $ds2=="C" or $ds2=="D"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds3=="A" or $ds3=="B" or $ds3=="C" or $ds3=="D"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds4=="A" or $ds4=="B" or $ds4=="C" or $ds4=="D"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds5=="A" or $ds5=="B" or $ds5=="C" or $ds5=="D"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              </tr>
        </table></td>
        <td align="left" valign="bottom"><table width="63" height="184" border="0" align="left" cellpadding="0" cellspacing="0">
            <tr>
              <td height="48" <? if($ds8=="A"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds9=="A"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds10=="A"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds11=="A"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds12=="A"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds13=="A"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              </tr>
            <tr>
              <td height="53" <? if($ds8=="A" or $ds8=="B"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds9=="A" or $ds9=="B"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds10=="A" or $ds10=="B"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds11=="A" or $ds11=="B"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds12=="A" or $ds12=="B"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds13=="A" or $ds13=="B"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              </tr>
            <tr>
              <td height="50" <? if($ds8=="A" or $ds8=="B" or $ds8=="C"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds9=="A" or $ds9=="B" or $ds9=="C"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds10=="A" or $ds10=="B" or $ds10=="C"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds11=="A" or $ds11=="B" or $ds11=="C"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds12=="A" or $ds12=="B" or $ds12=="C"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds13=="A" or $ds13=="B" or $ds13=="C"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              </tr>
            <tr>
              <td <? if($ds8=="A" or $ds8=="B" or $ds8=="C" or $ds8=="D"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3">'</td>
              <td <? if($ds9=="A" or $ds9=="B" or $ds9=="C" or $ds9=="D"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds10=="A" or $ds10=="B" or $ds10=="C" or $ds10=="D"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds11=="A" or $ds11=="B" or $ds11=="C" or $ds11=="D"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds12=="A" or $ds12=="B" or $ds12=="C" or $ds12=="D"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds13=="A" or $ds13=="B" or $ds13=="C" or $ds13=="D"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              </tr>
        </table></td>
        <td align="left" valign="bottom"><table width="63" height="184" border="0" align="left" cellpadding="0" cellspacing="0">
            <tr>
              <td height="48" <? if($ds16=="A"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds17=="A"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds18=="A"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds19=="A"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds20=="A"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds21=="A"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              </tr>
            <tr>
              <td height="53" <? if($ds16=="A" or $ds16=="B"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds17=="A" or $ds17=="B"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds18=="A" or $ds18=="B"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds19=="A" or $ds19=="B"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds20=="A" or $ds20=="B"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds21=="A" or $ds21=="B"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              </tr>
            <tr>
              <td height="50" <? if($ds16=="A" or $ds16=="B" or $ds16=="C"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds17=="A" or $ds17=="B" or $ds17=="C"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds18=="A" or $ds18=="B" or $ds18=="C"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds19=="A" or $ds19=="B" or $ds19=="C"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds20=="A" or $ds20=="B" or $ds20=="C"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds21=="A" or $ds21=="B" or $ds21=="C"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              </tr>
            <tr>
              <td <? if($ds16=="A" or $ds16=="B" or $ds16=="C" or $ds16=="D"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3">'</td>
              <td <? if($ds17=="A" or $ds17=="B" or $ds17=="C" or $ds17=="D"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds18=="A" or $ds18=="B" or $ds18=="C" or $ds18=="D"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds19=="A" or $ds19=="B" or $ds19=="C" or $ds19=="D"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds20=="A" or $ds20=="B" or $ds20=="C" or $ds20=="D"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds21=="A" or $ds21=="B" or $ds21=="C" or $ds21=="D"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              </tr>
        </table></td>
        <td align="left" valign="bottom"><table width="63" height="184" border="0" align="left" cellpadding="0" cellspacing="0">
            <tr>
              <td height="48" <? if($ds24=="A"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds25=="A"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds26=="A"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds27=="A"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds28=="A"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds29=="A"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              </tr>
            <tr>
              <td height="53" <? if($ds24=="A" or $ds24=="B"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds25=="A" or $ds25=="B"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds26=="A" or $ds26=="B"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds27=="A" or $ds27=="B"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds28=="A" or $ds28=="B"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds29=="A" or $ds29=="B"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              </tr>
            <tr>
              <td height="50" <? if($ds24=="A" or $ds24=="B" or $ds24=="C"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds25=="A" or $ds25=="B" or $ds25=="C"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds26=="A" or $ds26=="B" or $ds26=="C"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds27=="A" or $ds27=="B" or $ds27=="C"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds28=="A" or $ds28=="B" or $ds28=="C"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds29=="A" or $ds29=="B" or $ds29=="C"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              </tr>
            <tr>
              <td <? if($ds24=="A" or $ds24=="B" or $ds24=="C" or $ds24=="D"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3">'</td>
              <td <? if($ds25=="A" or $ds25=="B" or $ds25=="C" or $ds25=="D"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds26=="A" or $ds26=="B" or $ds26=="C" or $ds26=="D"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds27=="A" or $ds27=="B" or $ds27=="C" or $ds27=="D"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds28=="A" or $ds28=="B" or $ds28=="C" or $ds28=="D"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds29=="A" or $ds29=="B" or $ds29=="C" or $ds29=="D"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              </tr>
        </table></td>
        <td align="left" valign="bottom"><table width="63" height="184" border="0" align="left" cellpadding="0" cellspacing="0">
            <tr>
              <td height="48" <? if($ds32=="A"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds33=="A"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds34=="A"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds35=="A"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds36=="A"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds37=="A"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              </tr>
            <tr>
              <td height="53" <? if($ds32=="A" or $ds32=="B"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds33=="A" or $ds33=="B"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds34=="A" or $ds34=="B"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds35=="A" or $ds35=="B"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds36=="A" or $ds36=="B"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds37=="A" or $ds37=="B"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              </tr>
            <tr>
              <td height="50" <? if($ds32=="A" or $ds32=="B" or $ds32=="C"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>>&nbsp;</td>
              <td <? if($ds33=="A" or $ds33=="B" or $ds33=="C"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds34=="A" or $ds34=="B" or $ds34=="C"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds35=="A" or $ds35=="B" or $ds35=="C"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds36=="A" or $ds36=="B" or $ds36=="C"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              <td <? if($ds37=="A" or $ds37=="B" or $ds37=="C"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?>></td>
              </tr>
            <tr>
              <td <? if($ds32=="A" or $ds32=="B" or $ds32=="C" or $ds32=="D"){ ?>bgcolor="#FF0000" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3">'</td>
              <td <? if($ds33=="A" or $ds33=="B" or $ds33=="C" or $ds33=="D"){ ?>bgcolor="#0000FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds34=="A" or $ds34=="B" or $ds34=="C" or $ds34=="D"){ ?>bgcolor="#FFFF00" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds35=="A" or $ds35=="B" or $ds35=="C" or $ds35=="D"){ ?>bgcolor="#00FFFF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds36=="A" or $ds36=="B" or $ds36=="C" or $ds36=="D"){ ?>bgcolor="#FF00FF" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              <td <? if($ds37=="A" or $ds37=="B" or $ds37=="C" or $ds37=="D"){ ?>bgcolor="#CC6600" <? }else{ ?> bgcolor="#FFFFFF"<? } ?> width="3"></td>
              </tr>
        </table></td>
        <td align="left" valign="top"><table width="100%" height="26" border="0" align="left" cellpadding="0" cellspacing="4">
            <tr>
              <td width="8%" bgcolor="#FF0000">&nbsp;</td>
              <td width="92%">Menjaga kebersihan diri </td>
            </tr>
            <tr>
              <td bgcolor="#0000FF">&nbsp;</td>
              <td>Rapi rambut dan kuku</td>
            </tr>
            <tr>
              <td bgcolor="#FFFF00">&nbsp;</td>
              <td>Menjaga kebersihan kamar dan lingkungan asrama</td>
            </tr>
            <tr>
              <td bgcolor="#00FFFF">&nbsp;</td>
              <td>Menjaga kerapihan kamar -&nbsp; lemari pakaian</td>
            </tr>
            <tr>
              <td bgcolor="#FF00FF">&nbsp;</td>
              <td>Rapi dalam berseragam</td>
            </tr>
            <tr>
              <td bgcolor="#CC6600">&nbsp;</td>
              <td>Rapi menyimpan barang-barang pribadi</td>
            </tr>
            
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr valign="top">
    <td height="19" colspan="7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../images/bln.jpg" width="423" height="16" /></td>
  </tr>
  <tr valign="top">
    <td height="19" colspan="7">&nbsp;</td>
  </tr>
  
  <tr height="3">
    <td colspan="7" valign="top" bgcolor="#666666"></td>
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
