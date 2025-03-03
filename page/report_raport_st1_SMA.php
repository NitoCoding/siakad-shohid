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
.style10 {font-size: 9px}
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
      <?
	      $tmpkls=mysqli_query($koneksi, "SELECT * FROM tb_santri WHERE id_santri='$idstr' ");
          $ct=mysqli_fetch_assoc($tmpkls);
	   ?>
   
  <tr>
    <td width="13%">&nbsp;</td>
    <td width="1%">&nbsp;</td>
    <td width="50%">&nbsp;</td>
    <td width="12%">&nbsp;</td>
    <td width="2%">&nbsp;</td>
    <td width="22%">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="11%" height="95" valign="top"><img src="../images/LOGO-SHOID2.jpg" width="82" height="93" /></td>
        <td width="89%" valign="top"><div align="center">
            <p><span class="style3"><font size="2">YAYASAN 
              SHOHWATUL IS'AD</font></span><br />
                        <span class="style1"><font size="4">SMA 
                          IT SHOHWATUL IS'AD</font></span><br />
                                          <br /><span class="style4"><span class="style6">NSS : </span>302190208001&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="style6">NPSN : </span>69728583<br />
                                            Alamat: Jl. Poros Padanglampe&nbsp;KM . 3&nbsp;Ma'rang&nbsp;Pangkep&nbsp;Sulawesi -Selatan 90645 P.O. Box 300 <br />
                                            http://www.shohwatulisad.sch.id - e-mail : info@shohwatulisad.sch.id </span></p>
        </div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="6"><hr /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6"><div align="center"><font size="3">LAPORAN HASIL UJIAN LISAN </font></div></td>
  </tr>
  <tr>
    <td colspan="6"><div align="center"><font size="2">SEMESTER
          <? if($sem=='I') { echo "GANJIL"; }else{ echo"GENAP"; }?>
TAHUN AJARAN <? echo $thaj; ?></font></div></td>
  </tr>
  <tr>
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
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><div align="right"><? echo $ct['nis']." / ". $ct['nis_nasional']; ?></div></td>
    <td><div align="center">:</div></td>
    <td><img src="raport/nis.jpg" width="79" height="28" align="absmiddle" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><div align="right"><? echo $ct['nama']; ?></div></td>
    <td><div align="center">:</div></td>
    <td><img src="raport/nama.jpg" width="77" height="26" align="absmiddle" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><div align="right"><? echo $ct['kelas_st']; ?></div></td>
    <td><div align="center">;</div></td>
    <td><img src="raport/kelas.jpg" width="42" height="23" align="absmiddle" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td colspan="2"><div align="center">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><div align="right"><strong>NILAI</strong></div></td>
                <td><div align="center"><img src="raport/nilai.jpg" width="39" height="25" /></div></td>
              </tr>
            </table>
        </div>
            <div align="center"></div></td>
        <td width="39%" rowspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><div align="center"><img src="raport/sub_materi.jpg" width="91" height="24" /></div></td>
            </tr>
            <tr>
              <td><div align="center"><strong>SUB MATERI </strong></div></td>
            </tr>
        </table></td>
        <td width="18%" rowspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><div align="center"><img src="raport/materi.jpg" width="97" height="26" /></div></td>
            </tr>
            <tr>
              <td><div align="center"><strong>MATERI</strong></div></td>
            </tr>
          </table>
            <div align="center"></div></td>
      </tr>
      <tr>
        <td width="24%"><div align="center">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="50%"><div align="center"><strong>HURUF</strong></div></td>
                <td width="50%"><div align="center"><img src="raport/huruf.jpg" width="66" height="22" /></div></td>
              </tr>
            </table>
        </div></td>
        <td width="19%"><div align="center">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="51%"><div align="center"><strong>ANGKA</strong></div></td>
                <td width="49%"><div align="center"><img src="raport/angka.jpg" width="53" height="27" /></div></td>
              </tr>
            </table>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">
            <? 
		    $rl=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='ML001' and thn_ajaran='$thaj' and semester='$sem' ");
            $crl=mysqli_fetch_assoc($rl);
			$ls1=$crl['nilai'];
			if($ls1 >=1){ $tnl=1; }
		    $a=angka_huruf($crl['nilai']); echo $a; 
		  ?>
        </div></td>
        <td><div align="center">
            <? 
			echo $crl['nilai']; 
         ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td>&nbsp;1. Membaca Al-Qur'an </td>
              <td><div align="center"><img src="raport/Copy (2) of Arab rapor 2.jpg" width="119" height="21" /></div></td>
            </tr>
        </table></td>
        <td rowspan="4"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><div align="center"><img src="raport/alquran.jpg" width="42" height="23" /></div></td>
            </tr>
            <tr>
              <td><div align="center">
                  <div align="center"><strong>Al-Qur'an</strong></div>
              </div></td>
            </tr>
          </table>
            <div align="center"></div>
          <div align="center"></div>
          <div align="center"></div></td>
      </tr>
      <tr>
        <td><div align="center">
            <? 
		    $rl=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='ML002' and thn_ajaran='$thaj' and semester='$sem' ");
            $crl=mysqli_fetch_assoc($rl);  
			$ls2=$crl['nilai'];
			if($ls2 >=1){ $tnl2=1; }
		    $a=angka_huruf($crl['nilai']); echo $a; 
		  ?>
        </div></td>
        <td><div align="center">
            <? 
			echo $crl['nilai']; 
         ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="48%">&nbsp;2. Tajwid </td>
              <td width="52%"><div align="right"><img src="raport/tajwid.jpg" width="47" height="20" /></div></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td><div align="center">
            <? 
		    $rl=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='ML003' and thn_ajaran='$thaj' and semester='$sem' ");
            $crl=mysqli_fetch_assoc($rl);  
			$ls3=$crl['nilai'];
			if($ls3 >=1){ $tnl3=1; }
		    $a=angka_huruf($crl['nilai']); echo $a; 
		  ?>
        </div></td>
        <td><div align="center">
            <? 
			echo $crl['nilai']; 
         ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="55%">&nbsp;3. Hafalan Al-Qur'an </td>
              <td width="45%"><div align="right"><img src="raport/Copy (3) of Arab rapor 2.jpg" width="76" height="19" /></div></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td><div align="center">
            <? 
		    $rl=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='ML004' and thn_ajaran='$thaj' and semester='$sem' ");
            $crl=mysqli_fetch_assoc($rl); 
			$ls4=$crl['nilai']; 
			if($ls4 >=1){ $tnl4=1; }
		    $a=angka_huruf($crl['nilai']); echo $a; 
		  ?>
        </div></td>
        <td><div align="center">
            <? 
			echo $crl['nilai']; 
         ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="59%">&nbsp;4. Terjemahan Al-Qur'an </td>
              <td width="41%"><div align="right"><img src="raport/terjemahan.jpg" width="78" height="20" /> </div></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="4" height="5"></div></td>
      </tr>
      <tr>
        <td><div align="center">
            <? 
		    $rl=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='ML005' and thn_ajaran='$thaj' and semester='$sem' ");
            $crl=mysqli_fetch_assoc($rl);
			$ls5=$crl['nilai']; 
			if($ls5 >=1){ $tnl5=1; } 
		    $a=angka_huruf($crl['nilai']); echo $a; 
		  ?>
        </div></td>
        <td><div align="center">
            <? 
			echo $crl['nilai']; 
         ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td>&nbsp;1. Fiqhih Syari'ah </td>
              <td><div align="right"><img src="raport/fiqisyariah.jpg" width="73" height="24" /></div></td>
            </tr>
        </table></td>
        <td rowspan="4"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><div align="center"><img src="raport/Copy (10) of Arab rapor 2.jpg" width="32" height="25" /></div></td>
            </tr>
            <tr>
              <td><div align="center">
                  <div align="center"><strong>Fiqih</strong></div>
              </div></td>
            </tr>
          </table>
            <div align="center"></div>
          <div align="center"></div></td>
      </tr>
      <tr>
        <td><div align="center">
            <? 
		    $rl=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='ML006' and thn_ajaran='$thaj' and semester='$sem' ");
            $crl=mysqli_fetch_assoc($rl);  
			$ls6=$crl['nilai'];
			if($ls6 >=1){ $tnl6=1; }
		    $a=angka_huruf($crl['nilai']); echo $a; 
		  ?>
        </div></td>
        <td><div align="center">
            <? 
			echo $crl['nilai']; 
         ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td>&nbsp;2. Ibadah Amaliyah </td>
              <td><div align="right"><img src="raport/ibadah_amalia.jpg" width="77" height="23" /></div></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td><div align="center">
            <? 
		    $rl=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='ML007' and thn_ajaran='$thaj' and semester='$sem' ");
            $crl=mysqli_fetch_assoc($rl);  
			$ls7=$crl['nilai'];
			if($ls7 >=1){ $tnl7=1; }
		    $a=angka_huruf($crl['nilai']); echo $a; 
		  ?>
        </div></td>
        <td><div align="center">
            <? 
			echo $crl['nilai']; 
         ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td>&nbsp;3. Dalil-dalil dan Do'a </td>
              <td><div align="right"><img src="raport/dalil_doa.jpg" width="91" height="21" /></div></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td><div align="center">
            <? 
		    $rl=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='ML008' and thn_ajaran='$thaj' and semester='$sem' ");
            $crl=mysqli_fetch_assoc($rl);  
			$ls8=$crl['nilai'];
			if($ls8 >=1){ $tnl8=1; }
		    $a=angka_huruf($crl['nilai']); echo $a; 
		  ?>
        </div></td>
        <td><div align="center">
            <? 
			echo $crl['nilai']; 
         ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="55%">&nbsp;4. Baca Kitab </td>
              <td width="45%"><div align="right"><img src="raport/baca_kitab.jpg" width="70" height="23" /></div></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="4" height="5"></td>
      </tr>
      <tr>
        <td><div align="center">
            <? 
		    $rl=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='ML009' and thn_ajaran='$thaj' and semester='$sem' ");
            $crl=mysqli_fetch_assoc($rl); 
			$ls9=$crl['nilai']; 
			if($ls9 >=1){ $tnl9=1; }
		    $a=angka_huruf($crl['nilai']); echo $a; 
		  ?>
        </div></td>
        <td><div align="center">
            <? 
			echo $crl['nilai']; 
         ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="54%">&nbsp;1. Muhadatsah </td>
              <td width="46%"><div align="right"><img src="raport/muhadazah.jpg" width="52" height="20" /></div></td>
            </tr>
        </table></td>
        <td rowspan="4"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><div align="center"><img src="raport/Copy (4) of Arab rapor 2.jpg" width="85" height="21" /></div></td>
            </tr>
            <tr>
              <td><div align="center"><strong>Bahasa Arab </strong></div></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td><div align="center">
            <? 
		    $rl=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='ML010' and thn_ajaran='$thaj' and semester='$sem' ");
            $crl=mysqli_fetch_assoc($rl); 
			$ls10=$crl['nilai']; 
			if($ls10 >=1){ $tnl10=1; }
		    $a=angka_huruf($crl['nilai']); echo $a; 
		  ?>
        </div></td>
        <td><div align="center">
            <? 
			echo $crl['nilai']; 
         ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="54%">&nbsp;2. Muthola'ah </td>
              <td width="46%"><div align="right"><img src="raport/Muthola.jpg" width="51" height="21" /></div></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td><div align="center">
            <? 
		    $rl=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='ML011' and thn_ajaran='$thaj' and semester='$sem' ");
            $crl=mysqli_fetch_assoc($rl);  
			$ls11=$crl['nilai'];
			if($ls11 >=1){ $tnl11=1; }
		    $a=angka_huruf($crl['nilai']); echo $a; 
		  ?>
        </div></td>
        <td><div align="center">
            <? 
			echo $crl['nilai']; 
         ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="53%">&nbsp;3. Nahwu </td>
              <td width="47%"><div align="right"><img src="raport/Copy (6) of Arab rapor 2.jpg" width="52" height="26" /></div></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td><div align="center">
            <? 
		    $rl=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='ML012' and thn_ajaran='$thaj' and semester='$sem' ");
            $crl=mysqli_fetch_assoc($rl);  
			$ls12=$crl['nilai'];
			if($ls12 >=1){ $tnl12=1; }
		    $a=angka_huruf($crl['nilai']); echo $a; 
		  ?>
        </div></td>
        <td><div align="center">
            <? 
			echo $crl['nilai']; 
         ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="54%">&nbsp;4. Mufrodat </td>
              <td width="46%"><div align="right"><img src="raport/mufrodat.jpg" width="94" height="24" /></div></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="4" height="5"></td>
      </tr>
      <tr>
        <td><div align="center">
            <? 
		    $rl=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='ML013' and thn_ajaran='$thaj' and semester='$sem' ");
            $crl=mysqli_fetch_assoc($rl); 
			$ls13=$crl['nilai']; 
			if($ls13 >=1){ $tnl13=1; }
		    $a=angka_huruf($crl['nilai']); echo $a; 
		  ?>
        </div></td>
        <td><div align="center">
            <? 
			echo $crl['nilai']; 
         ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="54%">&nbsp;1. Reading </td>
              <td width="46%"><div align="right"><img src="raport/reading.jpg" width="101" height="25" /></div></td>
            </tr>
        </table></td>
        <td rowspan="4"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><div align="center"><img src="raport/Copy (21) of Arab rapor.jpg" width="112" height="17" /></div></td>
            </tr>
            <tr>
              <td><div align="center"><strong>Bahasa Inggris </strong></div></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td><div align="center">
            <? 
		    $rl=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='ML014' and thn_ajaran='$thaj' and semester='$sem' ");
            $crl=mysqli_fetch_assoc($rl); 
			$ls14=$crl['nilai']; 
			if($ls14 >=1){ $tnl14=1; }
		    $a=angka_huruf($crl['nilai']); echo $a; 
		  ?>
        </div></td>
        <td><div align="center">
            <? 
			echo $crl['nilai']; 
         ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="55%">&nbsp;2. Conversation </td>
              <td width="45%"><div align="right"><img src="raport/coposition.jpg" width="98" height="24" /></div></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td><div align="center">
            <? 
		    $rl=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='ML015' and thn_ajaran='$thaj' and semester='$sem' ");
            $crl=mysqli_fetch_assoc($rl);  
			$ls15=$crl['nilai'];
			if($ls15 >=1){ $tnl15=1; }
		    $a=angka_huruf($crl['nilai']); echo $a; 
		  ?>
        </div></td>
        <td><div align="center">
            <? 
			echo $crl['nilai']; 
         ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="52%">&nbsp;3. Translation </td>
              <td width="48%"><div align="right"><img src="raport/translation.jpg" width="79" height="26" /></div></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td><div align="center">
            <? 
		    $rl=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='ML016' and thn_ajaran='$thaj' and semester='$sem' ");
            $crl=mysqli_fetch_assoc($rl);  
			$ls16=$crl['nilai'];
			if($ls16 >=1){ $tnl16=1; }
		    $a=angka_huruf($crl['nilai']); echo $a; 
		  ?>
        </div></td>
        <td><div align="center">
            <? 
			echo $crl['nilai']; 
         ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="53%">&nbsp;4. Listening </td>
              <td width="47%"><div align="right"><img src="raport/listening.jpg" width="46" height="23" /></div></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td height="20">&nbsp;</td>
        <td><div align="center">
          <?
		$tls=$ls1+$ls2+$ls3+$ls4+$ls5+$ls6+$ls7+$ls8+$ls9+$ls10+$ls11+$ls12+$ls13+$ls14+$ls15+$ls16;
		$pnl=$tnl+$tnl1+$tnl2+$tnl3+$tnl4+$tnl5+$tnl6+$tnl7+$tnl8+$tnl9+$tnl10+$tnl11+$tnl12+$tnl13+$tnl14+$tnl15+$tnl16;
		$nr_tls=ceil($tls/$pnl);
		echo $tls;
		?>
        </div></td>
        <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="72%"><strong>&nbsp;Jumlah</strong></td>
              <td width="28%"><img src="raport/jumlah.jpg" width="90" height="21" /></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td height="21">&nbsp;</td>
        <td><div align="center"><? echo $nr_tls; ?></div></td>
        <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="72%" height="20"><strong>&nbsp;Nilai Rata-rata </strong></td>
              <td width="28%"><img src="raport/nilai_rata2.jpg" width="84" height="23" /></td>
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
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="263" colspan="6" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right"></div></td>
        <td><div align="right"></div></td>
        <td><div align="left">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="43%"><img src="raport/pangkep.jpg" width="47" height="22" /></td>
                <td width="9%"> :</td>
                <td width="48%"><img src="raport/ditetapkan.jpg" width="60" height="22" /></td>
              </tr>
            </table>
        </div></td>
      </tr>
      <tr>
        <td><div align="right"></div></td>
        <td><div align="right"></div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="47%">27 Desember 2019</td>
              <td width="5%">:</td>
              <td width="48%"><img src="raport/tanggal.jpg" width="45" height="23" /></td>
            </tr>
        </table></td>
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
        <td><div align="center"><img src="raport/orang_tua.jpg" width="53" height="26" /></div></td>
        <td><div align="center"><img src="raport/kepala_sekolah.jpg" width="81" height="28" /></div></td>
        <td><div align="center"><img src="raport/wali_kelas.jpg" width="63" height="26" /></div></td>
      </tr>
      <tr>
        <td><div align="center">Orang Tua Wali </div></td>
        <td><div align="center">Kepala Sekolah</div></td>
        <td><div align="center">Wali Kelas </div></td>
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
        <td width="33%">&nbsp;</td>
        <td width="37%">&nbsp;</td>
        <td width="30%">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center">(__________________________________)</div></td>
        <td><div align="center">(Suryawati Ningsih, S.Pd.,M.Pd.)<br />
NIY : 201707 1 2 071</div></td>
        <td><div align="center">
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
NIY : <? echo $tpk4['nip']; ?> </div></td>
      </tr>
    </table></td>
  </tr>
</table>

</body>
</html>
