<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<?
include("../koneksi.php");
 include("../function.php");
$tmpkls2=mysqli_query($koneksi, "SELECT * FROM tb_baris WHERE idb='1' ");
$ct2=mysqli_fetch_assoc($tmpkls2);
?>
<style type="text/css">
<!--
.style3 {font-size: 16px}
td {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 16px;
	text-decoration: none;
}
.style4 {font-size: 12px}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style7 {
	font-size: 18px;
	font-weight: bold;
}
.style11 {font-size: 24px; font-weight: bold; }
#Layer1 {
	position:absolute;
	left:0px;
	top:2888px;
	width:98%;
	height:21px;
	z-index:1;
}
#Layer2 {
	position:absolute;
	left:1px;
	top:2892px;
	width:98%;
	height:24px;
	z-index:2;
}
#Layer3 {
	position:absolute;
	left:1px;
	top:4339px;
	width:98%;
	height:19px;
	z-index:3;
}
#Layer4 {
	position:absolute;
	left:1px;
	top:4336px;
	width:98%;
	height:17px;
	z-index:4;
}
#Layer5 {
	position:absolute;
	left:2px;
	top:5786px;
	width:98%;
	height:20px;
	z-index:5;
}
#Layer6 {
	position:absolute;
	left:2px;
	top:5790px;
	width:98%;
	height:17px;
	z-index:6;
}
div.absolute{
 position: absolute;
 top: <? echo"$ct2[p_brs1]"."px;";  ?>
 right: 1;
 width: 896px;
 height: 1px;
 border: 1px solid #000000;
}

div.absolute2{
 position: absolute;
 top: <? echo"$ct2[p_brs2]"."px;";  ?>
 right: 1;
 width: 896px;
 height: 1px;
 border: 1px solid #000000;
}

div.absolute3{
 position: absolute;
 top: <? echo"$ct2[p_brs3]"."px;";  ?>
 right: 1;
 width: 896px;
 height: 1px;
 border: 1px solid #000000;
}
div.absolute4{
 position: absolute;
 top: <? echo"$ct2[p_brs4]"."px;";  ?>
 right: 1;
 width: 896px;
 height: 1px;
 border: 1px solid #000000;
}
div.absolute5{
 position: absolute;
 top: <? echo"$ct2[p_brs5]"."px;";  ?>
 right: 1;
 width: 896px;
 height: 1px;
 border: 1px solid #000000;
}
div.absolute6{
 position: absolute;
 top: <? echo"$ct2[p_brs6]"."px;";  ?>
 right: 1;
 width: 896px;
 height: 1px;
 border: 1px solid #000000;
}
div.absolute7{
 position: absolute;
 top: <? echo"$ct2[p_brs7]"."px;";  ?> 
 right: 1;
 width: 896px;
 height: 1px;
 border: 1px solid #000000;
}
.style13 {color: #FFFFFF}

@PAGE { size:8.5in 13in; margin: 1cm } 
-->
</style>

<? if($ct2['brs1']=='a'){ ?>
<div class="absolute">
</div>
<? } ?>
<? if($ct2['brs2']=='a'){ ?>
<div class="absolute2">
</div>
<? } ?>
<? if($ct2['brs3']=='a'){ ?>
 <div class="absolute3">
</div>
<? } ?>
<? if($ct2['brs4']=='a'){ ?>
<div class="absolute4">
</div>
<? } ?>
<? if($ct2['brs5']=='a'){ ?>
<div class="absolute5">
</div>
<? } ?>
<? if($ct2['brs6']=='a'){ ?>
<div class="absolute6">
</div>
<? } ?>
<? if($ct2['brs7']=='a'){ ?>
<div class="absolute7">
</div>
<? } ?>


</head>
<?
 $klsk=$_GET['klsk'];
 $thaj=$_COOKIE['thaj'];
 $sem=$_COOKIE['sem'];
 $idstr=$_GET['idstr'];
 
 
  $tmpkls=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st,nis_nasional FROM tb_santri WHERE id_santri='$idstr' ");
  $ct=mysqli_fetch_assoc($tmpkls);
 
?>

<body>
<table width="888" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td height="95" colspan="3" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td height="95" valign="top"><table width="900" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="7%" valign="top">&nbsp;</td>
                <td width="93%" valign="top"><div align="right"><a href="baris.php" target="_blank" class="style13">.</a></div></td>
              </tr>
              <tr>
                <td height="125" valign="top"><img src="../images/LOGO-SHOID2.jpg" width="107" height="125" /></td>
                <td valign="bottom"><div align="center">
                  <div align="center">
                    <p><font size="2" class="style7">YAYASAN 
                      SHOHWATUL IS'AD</font><br />
                        <span class="style11">SMA 
                          IT SHOHWATUL IS'AD</span><br />
                          <br />
                      NSS : <span class="style4">302190208001</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NPSN : <span class="style4">69728583</span><span class="style4"><br />
                        <span class="style3">Alamat: Jl. Poros Padanglampe&nbsp;KM . 3&nbsp;Ma'rang&nbsp;Pangkep&nbsp;Sulawesi -Selatan <br />
                          http://www.shohwatulisad.sch.id - e-mail : info@shohwatulisad.sch.id </span></span></p>
                  </div>
                </div></td>
              </tr>
              <tr> 
                <td height="2" colspan="2" valign="top" bgcolor="#000000"></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
  
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="3"><div align="center"><strong>CAPAIAN HASIL BELAJAR</strong></div></td>
  </tr>
  <tr>
    <td height="25" colspan="3"><div align="center"><strong>SEMESTER 
        <? if($sem=='I') { echo "GANJIL"; }else{ echo"GENAP"; }?> </strong>
        <strong>TAHUN</strong> <strong>AJARAN <? echo $thaj; ?></strong></div>    </td>
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
  
      <?
	     
		  
		  $tmpkls2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
          $ct2=mysqli_fetch_assoc($tmpkls2);
	   ?>
  <tr> 
    <td width="7%" height="25">&nbsp;</td>
    <td width="59%">&nbsp;</td>
    <td width="34%">&nbsp;</td>
  </tr>
  <tr> 
    <td height="153" colspan="3"><table width="900" height="151" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="15%" height="25">Nama Sekolah </td>
        <td width="2%">:</td>
        <td width="57%">SMA IT SHOHWATUL IS'AD </td>
        <td width="2%">&nbsp;</td>
        <td width="15%">Kelas</td>
        <td width="2%">:</td>
        <td width="7%"><? echo $ct['kelas_st']; 
		if($ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC' or $ct['kelas_st']=='XD'){ $kkmx=75;}
	    if($ct['kelas_st']=='XI' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC' or $ct['kelas_st']=='XID'){ $kkmx=78; }
	    if($ct['kelas_st']=='XII' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB' or $ct['kelas_st']=='XIIC' or $ct['kelas_st']=='XIID'){ $kkmx=80; }
		?></td>
      </tr>
      <tr>
        <td height="50">Alamat</td>
        <td>:</td>
        <td valign="bottom">Alamat: Jl. Poros Padanglampe&nbsp;KM . 3&nbsp;Ma'rang&nbsp;Pangkep&nbsp;<br />
          Sulawesi -Selatan 90645 P.O. Box 300</td>
        <td>&nbsp;</td>
        <td>Semester</td>
        <td>:</td>
        <td><font size="2">
          <? if($sem=='I') { echo "GANJIL"; }else{ echo"GENAP"; }?>
        </font></td>
      </tr>
      <tr>
        <td height="34">Nama</td>
        <td>:</td>
        <td><? echo $ct['nama']; ?></td>
        <td>&nbsp;</td>
        <td>Tahun Pelajaran </td>
        <td>:</td>
        <td><font size="2"><? echo $thaj; ?></font></td>
      </tr>
      <tr>
        <td height="31">Nomor Induk </td>
        <td>:</td>
        <td><? echo $ct['nis']." / ". $ct['nis_nasional']; ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr> 
    <td height="26">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  <tr valign="top">
    <td colspan="3" bgcolor="#000000" height="1"></td>
  </tr>
  <tr valign="top">
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr valign="top">
    <td height="441" colspan="3"><table width="900" border="0" cellspacing="0" cellpadding="0">
      
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="3%">&nbsp;</td>
        <td width="64%">&nbsp;</td>
        <td width="33%">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      
      <tr>
        <td><div align="center" class="style7">A.</div></td>
        <td><span class="style7">Sikap</span></td>
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
        <td><span class="style7">1. Sikap Spritual </span></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="166">&nbsp;</td>
        <td colspan="2"><table width="100%" height="167" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
          <tr>
            <td width="19%" height="24"><div align="center" class="style7">Predikat</div></td>
            <td width="81%"><div align="center" class="style7 style3">Deskripsi</div></td>
          </tr>
          <tr>
            <td height="46"><div align="center" class="style7">
              <?
 		$csp=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ki1 WHERE  tahun_ajaran='$thaj' and semester='$sem' and id_santri='$ct[id_santri]' and mapel='MP006'");
        $cspr=mysqli_fetch_assoc($csp);
		$nb=$cspr['n1']+$cspr['n2']+$cspr['n3']+$cspr['n4']; 
		if($nb >=13 and $nb <=16 ){ echo "Sangat Baik"; }
		if($nb >=8 and $nb <=12 ){ echo "Baik"; }
		if($nb >=1 and $nb <=7 ){ echo "Cukup"; }
		?>
            </div></td>
            <td>
              <div align="justify">
                <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
                  <tr>
                    <td width="81%" height="24"><div align="center" class="style7">
                        <div align="left">
                          <?
 
 		if($cspr['n1'] or $cspr['n2'] or $cspr['n3'] or $cspr['n4']) {echo "Ananda $cnt[nama] "; }
		if($cspr['n1']==4) { echo "Sangat baik dalam berdoa sebelum dan sesudah melakukan kegiatan, "; }
		if($cspr['n2']==4) { echo "Sangat baik dalam menjaga toleransi beragama, "; }
		if($cspr['n3']==4) { echo "Sangat baik dalam bersyukur atas nikmat dan karunia Allah Subhana Wata'ala, "; }
		if($cspr['n4']==4) { echo "Sangat baik dalam menjalankan ibadah, "; }
		
		if($cspr['n1']==3) { echo "baik dalam berdoa sebelum dan sesudah melakukan kegiatan, "; }
		if($cspr['n2']==3) { echo "baik dalam menjaga toleransi beragama, "; }
		if($cspr['n3']==3) { echo "baik dalam bersyukur atas nikmat dan karunia Allah Subhana Wata'ala, "; }
		if($cspr['n4']==3) { echo "baik dalam menjalankan ibadah,"; }
		
		if($cspr['n1']==2) { echo "mulai berkembang dalam berdoa sebelum dan sesudah melakukan kegiatan, "; }
		if($cspr['n2']==2) { echo "mulai berkembang dalam menjaga toleransi beragama, "; }
		if($cspr['n3']==2) { echo "mulai berkembang dalam bersyukur atas nikmat dan karunia Allah Subhana Wata'ala, "; }
		if($cspr['n4']==2) { echo "mulai berkembang dalam menjalankan ibadah,"; }
		 
		if($cspr['n1']==1) { echo "tidak berkembang dalam berdoa sebelum dan sesudah melakukan kegiatan, "; }
		if($cspr['n2']==1) { echo "tidak berkembang dalam menjaga toleransi beragama, "; }
		if($cspr['n3']==1) { echo "tidak berkembang dalam bersyukur atas nikmat dan karunia Allah Subhana Wata'ala, "; }
		if($cspr['n4']==1) { echo "tidak berkembang dalam menjalankan ibadah,"; }
		?>
                        </div>
                    </div></td>
                  </tr>
                </table>
              </div>              </td>
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
        <td><span class="style7">2. Sikap Sosial </span></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="177">&nbsp;</td>
        <td colspan="2"><table width="100%" height="177" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
          <tr>
            <td width="19%" height="24"><div align="center" class="style7">Predikat</div></td>
            <td width="81%"><div align="center" class="style7">Deskripsi</div></td>
          </tr>
          <tr>
            <td height="46"><div align="center" class="style7">
              <? 
		  $qku7=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ki2 WHERE  tahun_ajaran='$thaj' and semester='$sem' and id_santri='$ct[id_santri]' and mapel='MD013'");
         $cqk7=mysqli_fetch_assoc($qku7);
		$nb=$cqk7['s1']+$cqk7['s2']+$cqk7['s3']+$cqk7['s4']+$cqk7['s5']+$cqk7['s6']+$cqk7['s7']; 
		if($nb >=23 and $nb <=28 ){ echo "Sangat Baik"; }
		if($nb >=14 and $nb <=22 ){ echo "Baik"; }
		if($nb >=1 and $nb <=13 ){ echo "Cukup"; }
		 
		
		 ?>
            </div></td>
            <td>
              <div align="justify">
                <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
                  <tr>
                    <td width="81%" height="24"><div align="center" class="style7">
                        <div align="left"><? 
						 if($cqk7['s1'] or $cqk7['s2'] or $cqk7['s3'] or $cqk7['s4'] or $cqk7['s5'] or $cqk7['s6'] or $cqk7['s7']) {echo "Ananda $ct[nama] "; }
		if($cqk7['s1']==4) { echo "Sangat baik dalam sikap jujur, "; }
		if($cqk7['s2']==4) { echo "Sangat baik dalam sikap disiplin, "; }
		if($cqk7['s3']==4) { echo "Sangat baik dalam sikap tanggung jawab, "; }
		if($cqk7['s4']==4) { echo "Sangat baik dalam sikap toleransi, "; }
		if($cqk7['s5']==4) { echo "Sangat baik dalam sikap gotong royong, "; }
		if($cqk7['s6']==4) { echo "Sangat baik dalam sikap santun, "; }
		if($cqk7['s7']==4) { echo "Sangat baik dalam sikap percaya diri, "; }
		
		if($cqk7['s1']==3) { echo "baik dalam sikap jujur, "; }
		if($cqk7['s2']==3) { echo "baik dalam sikap disiplin, "; }
		if($cqk7['s3']==3) { echo "baik dalam sikap tanggung jawab, "; }
		if($cqk7['s4']==3) { echo "baik dalam sikap toleransi, "; }
		if($cqk7['s5']==3) { echo "baik dalam sikap gotong royong, "; }
		if($cqk7['s6']==3) { echo "baik dalam sikap santun, "; }
		if($cqk7['s7']==3) { echo "baik dalam sikap percaya diri, "; }
		
		if($cqk7['s1']==2) { echo "mulai berkembang dalam sikap jujur, "; }
		if($cqk7['s2']==2) { echo "mulai berkembang dalam sikap disiplin, "; }
		if($cqk7['s3']==2) { echo "mulai berkembang dalam sikap tanggung jawab, "; }
		if($cqk7['s4']==2) { echo "mulai berkembang dalam sikap toleransi, "; }
		if($cqk7['s5']==2) { echo "mulai berkembang dalam sikap gotong royong, "; }
		if($cqk7['s6']==2) { echo "mulai berkembang dalam sikap santun, "; }
		if($cqk7['s7']==2) { echo "mulai berkembang dalam sikap percaya diri, "; }
		
		if($cqk7['s1']==1) { echo "tidak berkembang dalam sikap jujur, "; }
		if($cqk7['s2']==1) { echo "tidak berkembang dalam sikap disiplin, "; }
		if($cqk7['s3']==1) { echo "tidak berkembang dalam sikap tanggung jawab, "; }
		if($cqk7['s4']==1) { echo "tidak berkembang dalam sikap toleransi, "; }
		if($cqk7['s5']==1) { echo "tidak berkembang dalam sikap gotong royong, "; }
		if($cqk7['s6']==1) { echo "tidak berkembang dalam sikap santun, "; }
		if($cqk7['s7']==1) { echo "tidak berkembang dalam sikap percaya diri, "; }
						?></div>
                    </div></td>
                  </tr>
                </table>
              </div></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr valign="top">
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr valign="top">
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr valign="top">
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr valign="top">
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr valign="top">
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr valign="top">
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr valign="top">
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr valign="top">
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr valign="top">
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr valign="top">
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr valign="top">
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr valign="top">
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr valign="top">
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr valign="top">
    <td colspan="3"><table width="900" height="160" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="15%" height="38">Nama Sekolah </td>
        <td width="2%">:</td>
        <td width="51%">SMA IT SHOHWATUL IS'AD </td>
        <td width="2%">&nbsp;</td>
        <td width="16%">Kelas</td>
        <td width="1%">:</td>
        <td width="13%"><? echo $ct['kelas_st']; ?></td>
      </tr>
      <tr>
        <td height="43">Alamat</td>
        <td>:</td>
        <td>Alamat: Jl. Poros Padanglampe&nbsp;KM . 3&nbsp;Ma'rang&nbsp;Pangkep&nbsp;
          Sulawesi -Selatan</td>
        <td>&nbsp;</td>
        <td>Semester</td>
        <td>:</td>
        <td><font size="2">
          <? if($sem=='I') { echo "GANJIL"; }else{ echo"GENAP"; }?>
        </font></td>
      </tr>
      <tr>
        <td height="32">Nama</td>
        <td>:</td>
        <td><? echo $ct['nama']; ?></td>
        <td>&nbsp;</td>
        <td>Tahun Pelajaran </td>
        <td>:</td>
        <td><font size="2"><? echo $thaj; ?></font></td>
      </tr>
      <tr>
        <td>Nomor Induk </td>
        <td>:</td>
        <td><? echo $ct['nis']." / ". $ct['nis_nasional']; ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr valign="top">
    <td colspan="3">__________________________________________________________________________________________</td>
  </tr>
  <tr valign="top">
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr valign="top">
    <td colspan="3">&nbsp;</td>
  </tr>
  
  <tr valign="top">
    <td height="24" colspan="3"><strong>B. Pengetahuan dan Keterampilan </strong></td>
  </tr>
  <tr valign="top">
    <td colspan="3"><strong>Kriteria Ketuntasan Minimal =</strong> <? echo $kkmx; ?></td>
  </tr>
  <tr valign="top"> 
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr valign="top">
    <td height="314" colspan="3"><table width="900" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      

      <tr>
        <td colspan="2" rowspan="2"><div align="center"><strong>Mata Pelajaran </strong></div></td>
        <td height="26" colspan="3"><div align="center"><strong>Pengetahuan</strong></div></td>
        </tr>
      <tr>
        <td width="67" height="26"><div align="center"><strong>Nilai</strong></div></td>
        <td width="102"><div align="center"><strong>Predikat</strong></div></td>
        <td width="283"><div align="center"><strong>Deskripsi</strong></div></td>
        </tr>
      <tr>
        <td colspan="5"><strong>Kelompok A (Umum) </strong></td>
        </tr>
      <tr>
        <td width="36"><div align="center">1.</div></td>
        <td width="400">Pendidikan Agama dan Budi Pekerti <br /></td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MP006' and kd='3' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $p1=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center"><?
		 if($p1){
		  if($p1 < 75){ echo"D";  } 
		  if($p1 >= 75 and $p1 <=83 ){ echo"C";  } 
		  if($p1 >= 84 and $p1 <=92 ){ echo"B";  } 
		  if($p1 >= 93 and $p1 <=100){ echo"A";  }
		  }
		?></div></td>
        <td><div align="justify">
         <font size="-1">
		  <? 
		 echo $cpg['deskripsi'];
		 
		 ?> </font>
        </div></td>
        </tr>
      <tr>
        <td><div align="center">2.</div></td>
        <td>Pendidikan Pancasila dan Kewarganegaraan <br /></td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD013' and kd='3' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $p2=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
          <?
		   if($p2){
		  if($p2 < 75){ echo"D";  } 
		  if($p2 >= 75 and $p2 <=83 ){ echo"C";  } 
		  if($p2 >= 84 and $p2 <=92 ){ echo"B";  } 
		  if($p2 >= 93 and $p2 <=100){ echo"A";  } }
		?>
        </div></td>
        <td>
          <div align="justify">
		  <font size="-1">
            <? 
		 echo $cpg['deskripsi'];
		 
		 ?></font>            </div></td>
      </tr>
      <tr>
        <td><div align="center">3.</div></td>
        <td>Bahasa Indonesia <br /></td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD003' and kd='3' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $p3=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
          <?
		   if($p3){
		  if($p3 < 75){ echo"D";  } 
		  if($p3 >= 75 and $p3 <=83 ){ echo"C";  } 
		  if($p3 >= 84 and $p3 <=92 ){ echo"B";  } 
		  if($p3 >= 93 and $p3 <=100){ echo"A";  } }
		?>
        </div></td>
        <td>
          <div align="justify">
		  <font size="-1">
            <? 
		 echo $cpg['deskripsi'];
		 
		 ?>
		 </font>            </div></td>
      </tr>
      <tr>
        <td><div align="center">4.</div></td>
        <td>Matematika<br /></td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD005' and kd='3' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $p4=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
          <?
		   if($p4){
		  if($p4 < 75){ echo"D";  } 
		  if($p4 >= 75 and $p4 <=83 ){ echo"C";  } 
		  if($p4 >= 84 and $p4 <=92 ){ echo"B";  } 
		  if($p4 >= 93 and $p4 <=100){ echo"A";  } }
		?>
        </div></td>
        <td>
          <div align="justify">
		  <font size="-1">
            <? 
		 echo $cpg['deskripsi'];
		 
		 ?></font>            </div></td>
      </tr>
      <tr>
        <td><div align="center">5.</div></td>
        <td>Sejarah Indonesia </td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD023' and kd='3' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $p6=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
          <?
		   if($p6){
		  if($p6 < 75){ echo"D";  } 
		  if($p6 >= 75 and $p6 <=83 ){ echo"C";  } 
		  if($p6 >= 84 and $p6 <=92 ){ echo"B";  } 
		  if($p6 >= 93 and $p6 <=100){ echo"A";  } }
		?>
        </div></td>
        <td>
		<font size="-1">
		<? 
		 echo $cpg['deskripsi'];
		 
		 ?></font></td>
      </tr>
      <tr>
        <td><div align="center">6.</div></td>
        <td>Bahasa Inggris <br /></td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD004' and kd='3' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $p5=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
          <?
		   if($p5){
		  if($p5 < 75){ echo"D";  } 
		  if($p5 >= 75 and $p5 <=83 ){ echo"C";  } 
		  if($p5 >= 84 and $p5 <=92 ){ echo"B";  } 
		  if($p5 >= 93 and $p5 <=100){ echo"A";  }  }
		?>
        </div></td>
        <td>
          <div align="justify">
		  <font size="-1">
          <? 
		 echo $cpg['deskripsi'];
		 
		 ?> </font>          </div></td>
      </tr>
      
      
      
      <tr>
        <td colspan="5"><strong>Kelompok B (Umum) </strong></td>
        </tr>
      <tr>
        <td><div align="center">7.</div></td>
        <td>Seni Budaya (Tafidz) <br /></td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MP001' and kd='3' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $p8=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
          <?
		   if($p8){
		  if($p8 < 75){ echo"D";  } 
		  if($p8 >= 75 and $p8 <=83 ){ echo"C";  } 
		  if($p8 >= 84 and $p8 <=92 ){ echo"B";  } 
		  if($p8 >= 93 and $p8 <=100){ echo"A";  } }
		?>
        </div></td>
        <td>
          <div align="justify">
		  <font size="-1">
            <? 
		 echo $cpg['deskripsi'];
		 
		 ?> </font>            </div></td>
      </tr>
      <tr>
        <td><div align="center">8.</div></td>
        <td>Pendidikan Jasmani, Olah Raga dan Kesehatan <br /></td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD009' and kd='3' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $p9=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
          <?
		   if($p9){
		  if($p9 < 75){ echo"D";  } 
		  if($p9 >= 75 and $p9 <=83 ){ echo"C";  } 
		  if($p9 >= 84 and $p9 <=92 ){ echo"B";  } 
		  if($p9 >= 93 and $p9 <=100){ echo"A";  } }
		?>
        </div></td>
        <td>
          <div align="justify">
		  <font size="-1">
            <? 
		 echo $cpg['deskripsi'];
		 
		 ?> </font>            </div></td>
      </tr>
      <tr>
        <td><div align="center">9.</div></td>
        <td>Prakarya dan Kewirausahaan (KDA)<br /></td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD011' and kd='3' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $p10=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
          <?
		   if($p10){
		  if($p10 < 75){ echo"D";  } 
		  if($p10 >= 75 and $p10 <=83 ){ echo"C";  } 
		  if($p10 >= 84 and $p10 <=92 ){ echo"B";  } 
		  if($p10 >= 93 and $p10 <=100){ echo"A";  } }
		?>
        </div></td>
        <td>
          <div align="justify">
		  <font size="-1">
            <? 
		 echo $cpg['deskripsi'];
		 
		 ?> </font>            </div></td>
      </tr>
      
      <tr>
        <td colspan="5"><strong>Kelompok C (Peminatan) </strong></td>
        </tr>
      <tr>
        <td><div align="center">10.</div></td>
        <td>Matematika Peminatan</td>
        <td><div align="center">
            <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD024' and kd='3' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $p12=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
            <?
		   if($p12){
		  if($p12 < 75){ echo"D";  } 
		  if($p12 >= 75 and $p12 <=83 ){ echo"C";  } 
		  if($p12 >= 84 and $p12 <=92 ){ echo"B";  } 
		  if($p12 >= 93 and $p12 <=100){ echo"A";  } }
		?>
        </div></td>
        <td>
		<font size="-1">
		<? 
		 echo $cpg['deskripsi'];
		 
		 ?></font></td>
      </tr>
      <tr>
        <td><div align="center">11.</div></td>
        <td>Fisika</td>
        <td><div align="center">
            <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD022' and kd='3' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $p13=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
            <?
		   if($p13){
		  if($p13 < 75){ echo"D";  } 
		  if($p13 >= 75 and $p13 <=83 ){ echo"C";  } 
		  if($p13 >= 84 and $p13 <=92 ){ echo"B";  } 
		  if($p13 >= 93 and $p13 <=100){ echo"A";  } }
		?>
        </div></td>
        <td>
		<font size="-1">
		<? 
		 echo $cpg['deskripsi'];
		 
		 ?></font></td>
      </tr>
      <tr>
        <td><div align="center">12.</div></td>
        <td>Kimia</td>
        <td><div align="center">
            <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD015' and kd='3' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $p14=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
            <?
		   if($p14){
		  if($p14 < 75){ echo"D";  } 
		  if($p14 >= 75 and $p14 <=83 ){ echo"C";  } 
		  if($p14 >= 84 and $p14 <=92 ){ echo"B";  } 
		  if($p14 >= 93 and $p14 <=100){ echo"A";  } }
		?>
        </div></td>
        <td>
		<font size="-1">
		<? 
		 echo $cpg['deskripsi'];
		 
		 ?></font></td>
      </tr>
      <tr>
        <td><div align="center">13.</div></td>
        <td>Biologi</td>
        <td><div align="center">
            <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD020' and kd='3' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $p15=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
            <?
		   if($p15){
		  if($p15 < 75){ echo"D";  } 
		  if($p15 >= 75 and $p15 <=83 ){ echo"C";  } 
		  if($p15 >= 84 and $p15 <=92 ){ echo"B";  } 
		  if($p15 >= 93 and $p15 <=100){ echo"A";  } }
		?>
        </div></td>
        <td>
		<font size="-1">
		<? 
		 echo $cpg['deskripsi'];
		 
		 ?></font></td>
      </tr>
      <tr>
        <td colspan="5"><strong>Kelompok D (Lintas Minat) </strong></td>
        </tr>
      <tr>
        <td><div align="center">14.</div></td>
        <td>Ekonomi</td>
        <td><div align="center">
            <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD016' and kd='3' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $p16=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
            <?
		   if($p16){
		  if($p16 < 75){ echo"D";  } 
		  if($p16 >= 75 and $p16 <=83 ){ echo"C";  } 
		  if($p16 >= 84 and $p16 <=92 ){ echo"B";  } 
		  if($p16 >= 93 and $p16 <=100){ echo"A";  } }
		?>
        </div></td>
        <td>
		<font size="-1">
		<? 
		 echo $cpg['deskripsi'];
		 
		 ?></font></td>
      </tr>
      <tr>
        <td><div align="center">15.</div></td>
        <td>Bahasa Arab</td>
        <td><div align="center">
            <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MP003' and kd='3' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $p17=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
            <?
		   if($p17){
		  if($p17 < 75){ echo"D";  } 
		  if($p17 >= 75 and $p17 <=83 ){ echo"C";  } 
		  if($p17 >= 84 and $p17 <=92 ){ echo"B";  } 
		  if($p17 >= 93 and $p17 <=100){ echo"A";  } }
		?>
        </div></td>
        <td><div align="justify">
         <font size="-1">   <? 
		 echo $cpg['deskripsi'];
		 
		 ?> </font>
        </div></td>
      </tr>
      
      
    </table></td>
  </tr>
  
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top"><strong>Kriteria Ketuntasan Minimal =</strong> <? echo $kkmx; ?></td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top"><table width="900" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td colspan="2" rowspan="2"><div align="center"><strong>Mata Pelajaran </strong></div></td>
        <td height="26" colspan="3"><div align="center"><strong>Keterampilan</strong></div></td>
      </tr>
      <tr>
        <td width="67" height="26"><div align="center"><strong>Nilai</strong></div></td>
        <td width="102"><div align="center"><strong>Predikat</strong></div></td>
        <td width="283"><div align="center"><strong>Deskripsi</strong></div></td>
      </tr>
      <tr>
        <td colspan="5"><strong>Kelompok A (Umum) </strong></td>
      </tr>
      <tr>
        <td width="36"><div align="center">1.</div></td>
        <td width="400">Pendidikan Agama dan Budi Pekerti <br /></td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MP006' and kd='4' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $k1=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
          <?
		   if($k1){
		  if($k1 < 75){ echo"D";  } 
		  if($k1 >= 75 and $k1 <=83 ){ echo"C";  } 
		  if($k1 >= 84 and $k1 <=92 ){ echo"B";  } 
		  if($k1 >= 93 and $k1 <=100){ echo"A";  } }
		?>
        </div></td>
        <td><div align="justify">
        <font size="-1">
		  <? 
		 echo $cpg['deskripsi'];
		 
		 ?> </font>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">2.</div></td>
        <td>Pendidikan Pancasila dan Kewarganegaraan <br /></td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD013' and kd='4' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $k2=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
          <?
		   if($k2){
		  if($k2 < 75){ echo"D";  } 
		  if($k2 >= 75 and $k2 <=83 ){ echo"C";  } 
		  if($k2 >= 84 and $k2 <=92 ){ echo"B";  } 
		  if($k2 >= 93 and $k2 <=100){ echo"A";  } }
		?>
        </div></td>
        <td><div align="justify">
        <font size="-1">
		  <? 
		 echo $cpg['deskripsi'];
		 
		 ?> </font>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">3.</div></td>
        <td>Bahasa Indonesia <br /></td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD003' and kd='4' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $k3=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
          <?
		   if($k3){
		  if($k3 < 75){ echo"D";  } 
		  if($k3 >= 75 and $k3 <=83 ){ echo"C";  } 
		  if($k3 >= 84 and $k3 <=92 ){ echo"B";  } 
		  if($k3 >= 93 and $k3 <=100){ echo"A";  } }
		?>
        </div></td>
        <td><div align="justify">
         <font size="-1">
		  <? 
		 echo $cpg['deskripsi'];
		 
		 ?> </font>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">4.</div></td>
        <td>Matematika<br /></td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD005' and kd='4' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $k4=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
          <?
		   if($k4){
		  if($k4 < 75){ echo"D";  } 
		  if($k4 >= 75 and $k4 <=83 ){ echo"C";  } 
		  if($k4 >= 84 and $k4 <=92 ){ echo"B";  } 
		  if($k4 >= 93 and $k4 <=100){ echo"A";  } }
		?>
        </div></td>
        <td><div align="justify">
        <font size="-1">
		  <? 
		 echo $cpg['deskripsi'];
		 
		 ?> </font>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">5.</div></td>
        <td>Sejarah Indonesia<br /></td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD023' and kd='4' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $k5=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
          <?
		   if($k5){
		  if($k5 < 75){ echo"D";  } 
		  if($k5 >= 75 and $k5 <=83 ){ echo"C";  } 
		  if($k5 >= 84 and $k5 <=92 ){ echo"B";  } 
		  if($k5 >= 93 and $k5 <=100){ echo"A";  } }
		?>
        </div></td>
        <td><div align="justify">
         <font size="-1">
		  <? 
		 echo $cpg['deskripsi'];
		 
		 ?> </font>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">6.</div></td>
        <td>Bahasa Inggris </td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD004' and kd='4' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $k7=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
          <?
		   if($k7){
		  if($k7 < 75){ echo"D";  } 
		  if($k7 >= 75 and $k7 <=83 ){ echo"C";  } 
		  if($k7 >= 84 and $k7 <=92 ){ echo"B";  } 
		  if($k7 >= 93 and $k7 <=100){ echo"A";  } }
		?>
        </div></td>
        <td><div align="justify">
         <font size="-1">
		  <? 
		 echo $cpg['deskripsi'];
		 
		 ?> </font>
        </div></td>
      </tr>
      <tr>
        <td colspan="5"><strong>Kelompok B (Umum) </strong></td>
      </tr>
      <tr>
        <td><div align="center">7.</div></td>
        <td>Seni Budaya (Tafidz) <br /></td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MP001' and kd='4' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $k11=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
          <?
		   if($k11){
		  if($k11 < 75){ echo"D";  } 
		  if($k11 >= 75 and $k11 <=83 ){ echo"C";  } 
		  if($k11 >= 84 and $k11 <=92 ){ echo"B";  } 
		  if($k11 >= 93 and $k11 <=100){ echo"A";  } }
		?>
        </div></td>
        <td><div align="justify">
         <font size="-1">
		  <? 
		 echo $cpg['deskripsi'];
		 
		 ?> </font>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">8.</div></td>
        <td>Pendidikan Jasmani, Olah Raga dan Kesehatan <br /></td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD009' and kd='4' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $k9=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
          <?
		   if($k9){
		  if($k9 < 75){ echo"D";  } 
		  if($k9 >= 75 and $k9 <=83 ){ echo"C";  } 
		  if($k9 >= 84 and $k9 <=92 ){ echo"B";  } 
		  if($k9 >= 93 and $k9 <=100){ echo"A";  } }
		?>
        </div></td>
        <td><div align="justify">
         <font size="-1">
		  <? 
		 echo $cpg['deskripsi'];
		 
		 ?> </font>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">9.</div></td>
        <td>Prakarya dan Kewirausahaan (KDA)<br /></td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD011' and kd='4' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $k10=$cpg['nir'];
		?>
</div></td>
        <td><div align="center">
          <?
		   if($k10){
		  if($k10 < 75){ echo"D";  } 
		  if($k10 >= 75 and $k10 <=83 ){ echo"C";  } 
		  if($k10 >= 84 and $k10 <=92 ){ echo"B";  } 
		  if($k10 >= 93 and $k10 <=100){ echo"A";  } }
		?>
        </div></td>
        <td><div align="justify">
        <font size="-1">
		  <? 
		 echo $cpg['deskripsi'];
		 
		 ?> </font>
        </div></td>
      </tr>
      
      <tr>
        <td colspan="5"><div align="left"><strong>Kelompok C (Peminatan) </strong></div></td>
        </tr>
      <tr>
        <td><div align="center">10.</div></td>
        <td>Matematika Peminatan</td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD024' and kd='4' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $k12=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
          <?
		   if($k12){
		  if($k12 < 75){ echo"D";  } 
		  if($k12 >= 75 and $k12 <=83 ){ echo"C";  } 
		  if($k12 >= 84 and $k12 <=92 ){ echo"B";  } 
		  if($k12 >= 93 and $k12 <=100){ echo"A";  } }
		?>
        </div></td>
        <td><font size="-1"><? 
		 echo $cpg['deskripsi'];
		 
		 ?></font></td>
      </tr>
      <tr>
        <td><div align="center">11.</div></td>
        <td>Fisika</td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD022' and kd='4' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $k13=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
          <?
		   if($k13){
		  if($k13 < 75){ echo"D";  } 
		  if($k13 >= 75 and $k13 <=83 ){ echo"C";  } 
		  if($k13 >= 84 and $k13 <=92 ){ echo"B";  } 
		  if($k13 >= 93 and $k13 <=100){ echo"A";  } }
		?>
        </div></td>
        <td>
		<font size="-1">
		<? 
		 echo $cpg['deskripsi'];
		 
		 ?></font></td>
      </tr>
      <tr>
        <td><div align="center">12.</div></td>
        <td>Kimia</td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD015' and kd='4' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $k14=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
          <?
		   if($k14){
		  if($k14 < 75){ echo"D";  } 
		  if($k14 >= 75 and $k14 <=83 ){ echo"C";  } 
		  if($k14 >= 84 and $k14 <=92 ){ echo"B";  } 
		  if($k14 >= 93 and $k14 <=100){ echo"A";  } }
		?>
        </div></td>
        <td>
		<font size="-1">
		<? 
		 echo $cpg['deskripsi'];
		 
		 ?>
		 </font>		 </td>
      </tr>
      <tr>
        <td><div align="center">13.</div></td>
        <td>Biologi</td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD020' and kd='4' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $k15=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
          <?
		   if($k15){
		  if($k15 < 75){ echo"D";  } 
		  if($k15 >= 75 and $k15 <=83 ){ echo"C";  } 
		  if($k15 >= 84 and $k15 <=92 ){ echo"B";  } 
		  if($k15 >= 93 and $k15 <=100){ echo"A";  } }
		?>
        </div></td>
        <td valign="top">
		<font size="-1">
		<? 
		 echo $cpg['deskripsi'];
		 
		 ?></font></td>
      </tr>
      <tr>
        <td colspan="5"><strong>Kelompok D (Lintas Minat) </strong></td>
        </tr>
      <tr>
        <td><div align="center">14.</div></td>
        <td>Bahasa Arab </td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MP003' and kd='4' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $k17=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
          <?
		   if($k17){
		  if($k17 < 75){ echo"D";  } 
		  if($k17 >= 75 and $k17 <=83 ){ echo"C";  } 
		  if($k17 >= 84 and $k17 <=92 ){ echo"B";  } 
		  if($k17 >= 93 and $k17 <=100){ echo"A";  } }
		?>
        </div></td>
        <td>
		<font size="-1">
		<? 
		 echo $cpg['deskripsi'];
		 
		 ?></font></td>
      </tr>
      <? 
	  if($ct['kelas_st']!='XI') {
	   ?>
      <tr>
        <td height="20"><div align="center">15.</div></td>
        <td>Ekonomi<br /></td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD016' and kd='4' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $k16=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
          <?
		   if($k16){
		  if($k16 < 75){ echo"D";  } 
		  if($k16 >= 75 and $k16 <=83 ){ echo"C";  } 
		  if($k16 >= 84 and $k16 <=92 ){ echo"B";  } 
		  if($k16 >= 93 and $k16 <=100){ echo"A";  } }
		?>
        </div></td>
        <td><div align="justify">
		<font size="-1">
          <? 
		 echo $cpg['deskripsi'];
		 
		 ?> </font>
        </div></td>
      </tr>
	  <? } ?>
    </table></td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <? 
     $cbr=mysqli_query($koneksi, "SELECT * FROM tb_baris WHERE idb='1' ");
     $jbr=mysqli_fetch_assoc($cbr);
	 
      if($ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC' or $ct['kelas_st']=='XD'){ $jb=$jbr['kls10']; }
     if($ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC' or $ct['kelas_st']=='XID'){ $jb=$jbr['kls11']; }
	 if($ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB' or $ct['kelas_st']=='XIIC' or $ct['kelas_st']=='XIID'){ $jb=$jbr['kls12']; }
	 for($i=1;$i<=$jb;$i++){
    ?>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
   <? }  ?>
  <tr height="12">
    <td height="11" colspan="3" valign="top"><strong>C. Ekstrakurikuler</strong> </td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top"><table width="900" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td width="6%" height="25"><div align="center"><strong>No.</strong></div></td>
        <td width="43%"><div align="center"><strong> Kegiatan </strong><em><strong> </strong></em><strong> Ekstrakurikuler</strong></div></td>
        <td width="51%"><div align="center"><strong>Keterangan</strong></div></td>
        </tr>
	  <?  
	      $pbk=mysqli_query($koneksi, "SELECT * FROM tb_pbakat WHERE kd_santri='$ct[id_santri]' ");
          $tpbk=mysqli_fetch_assoc($pbk); 
		  
		  $pbk1=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='$tpbk[kd_mp]'  ");
          $tpbk1=mysqli_fetch_assoc($pbk1);
		  
		  $tnils=mysqli_query($koneksi, "SELECT * FROM tb_nilai_eskul WHERE thn_eskl='$thaj' AND sms_eskl='$sem' AND nis_eskl='$ct[nis]' AND 
		                      kls_eskl='$ct[kelas_st]' AND kd_eskl1='$tpbk1[kd_mp]'  ");
        $cnils=mysqli_fetch_assoc($tnils);
	  ?>
      <tr>
        <td><div align="center">1.</div></td>
        <td><? echo $tpbk1['nama_mp']; ?></td>
        <td><div align="justify">
          <? 
		if($cnils['nil_eskl1']=='A'){ echo"Ananda $ct[nama] Sangat aktif dalam kegiatan $tpbk1[nama_mp]"; } 
		if($cnils['nil_eskl1']=='B'){ echo"Ananda $ct[nama] Aktif dalam kegiatan $tpbk1[nama_mp]";} 
		if($cnils['nil_eskl1']=='C'){ echo"Ananda $ct[nama] Cukup aktif dalam kegiatan $tpbk1[nama_mp]"; } 
		if($cnils['nil_eskl1']=='D'){ echo"Ananda $ct[nama] Tidak aktif dalam kegiatan $tpbk1[nama_mp]"; } 
		 ?>
        </div></td>
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
        <td><div align="center">2.</div></td>
        <td><? echo $tpbk2['nama_mp']; ?></td>
        <td><? 
		if($cnils['nil_eskl2']=='A'){ echo"Ananda $ct[nama] Sangat aktif dalam kegiatan $tpbk2[nama_mp]"; } 
		if($cnils['nil_eskl2']=='B'){ echo"Ananda $ct[nama] Aktif dalam kegiatan $tpbk2[nama_mp]";} 
		if($cnils['nil_eskl2']=='C'){ echo"Ananda $ct[nama] Cukup aktif dalam kegiatan $tpbk2[nama_mp]"; } 
		if($cnils['nil_eskl2']=='D'){ echo"Ananda $ct[nama] Tidak aktif dalam kegiatan $tpbk2[nama_mp]"; } 
		   ?></td>
      </tr>
	   <?
		   $pbk=mysqli_query($koneksi, "SELECT * FROM tb_pbakat WHERE kd_santri='$ct[id_santri]' ");
          $tpbk=mysqli_fetch_assoc($pbk); 
		  
		   $tnils3=mysqli_query($koneksi, "SELECT kd_eskul3 FROM tb_nilai_eskul WHERE thn_eskl='$thaj' AND sms_eskl='$sem' AND nis_eskl='$ct[nis]' AND 
		                       kls_eskl='$ct[kelas_st]'   ");
           $cnils3=mysqli_fetch_assoc($tnils3);
		  
		  $pbk1=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='$cnils3[kd_eskul3]'  ");
          $tpbk1=mysqli_fetch_assoc($pbk1);
		  
		  $tnils=mysqli_query($koneksi, "SELECT * FROM tb_nilai_eskul WHERE thn_eskl='$thaj' AND sms_eskl='$sem' AND nis_eskl='$ct[nis]' AND 
		                      kls_eskl='$ct[kelas_st]' AND kd_eskul3='$tpbk1[kd_mp]'  ");
        $cnils=mysqli_fetch_assoc($tnils);
		
		
		  ?>
      <tr>
        <td><div align="center">3.</div></td>
        <td><? echo $tpbk1['nama_mp']; ?></td>
        <td><div align="justify">
          <? 
		if($cnils['nil_eskl3']=='A'){ echo"Ananda $ct[nama] Sangat aktif dalam kegiatan $tpbk1[nama_mp]"; } 
		if($cnils['nil_eskl3']=='B'){ echo"Ananda $ct[nama] Aktif dalam kegiatan $tpbk1[nama_mp]";} 
		if($cnils['nil_eskl3']=='C'){ echo"Ananda $ct[nama] Cukup aktif dalam kegiatan $tpbk1[nama_mp]"; } 
		if($cnils['nil_eskl3']=='D'){ echo"Ananda $ct[nama] Tidak aktif dalam kegiatan $tpbk1[nama_mp]"; } 
		   ?>
        </div></td>
      </tr>
      
  
      
    </table></td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top"><strong>D. Ketidakhadiran </strong></td>
  </tr>
  <?
         
			
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
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="48%" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
          <tr>
            <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="21" colspan="3" bgcolor="#FFFFFF"><div align="center"><strong>Ketidakhadiran </strong></div></td>
                </tr>
                <tr>
                  <td colspan="3" bgcolor="#000000" height="1"></td>
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
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="22" colspan="3"><strong>E. Catatan Wali Kelas</strong> </td>
  </tr>
  <tr>
    <td colspan="3"><table width="100%" height="35" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td height="33" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td height="24"><?
			$cw=mysqli_query($koneksi, "SELECT * FROM tb_catatan_wk WHERE nis='$ct[nis]' and thn_ajaran='$thaj' and semester='$sem' and kelas='$ct[kelas_st]' ");
            $ccw=mysqli_fetch_assoc($cw);
				
			echo $ccw['catatan'];
			?></td>
          </tr>
        </table></td>
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
    <td colspan="2"><strong>F. Tanggapan Orang Tua/Wali </strong></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><table width="100%" height="79" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td height="77" valign="top">&nbsp;</td>
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
    <td>Keputusan,</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Berdasarkan pencapaian seluruh kompetensi, peserta didik dinyatakan </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>(Naik/Tinggal*) Kelas ..... (............) </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>*) Coret yang tidak perlu </td>
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
  <?
	  $tampil=mysqli_query($koneksi, "SELECT * FROM tb_ttd WHERE ket='a' AND semester='$sem' ");
        $tp=mysqli_fetch_assoc($tampil);
		
		$tgls=$tp['tgl_semester'];
		$nkepsek=$tp['nama_kepek'];
		$nniy=$tp['niy'];
		
		$tampi=mysqli_query($koneksi, "SELECT * FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
    $tpk=mysqli_fetch_assoc($tampi);
	
	$tampi2=mysqli_query($koneksi, "SELECT * FROM wali_kelas WHERE kd_kls='$tpk[kd_kls]' ");
    $tpk3=mysqli_fetch_assoc($tampi2);
	
	$tampi4=mysqli_query($koneksi, "SELECT id_gp,nip,nama_gp FROM guru_pegawai WHERE id_gp='$tpk3[kd_gp]' ");
    $tpk4=mysqli_fetch_assoc($tampi4);
	
	$tampil5=mysqli_query($koneksi, "SELECT * FROM wali_kelas WHERE kd_gp='$tpk3[kd_gp]' ");
    $tp4=mysqli_fetch_assoc($tampil5);
	
	  ?>
  <tr>
    <td colspan="3"><table width="900" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><div align="center"></div></td>
        <td>Mengetahui : </td>
        <td><div align="left">Pangkep, <? echo $tgls; ?></div></td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
        <td><div align="left">Orang Tua Wali</div></td>
        <td><div align="left">Wali Kelas</div></td>
      </tr>
	  
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td rowspan="4"><? if(!empty($tp4['ttd'])){ ?>
          <img src="raport/<? echo "$tp4[ttd]"; ?>" height="90" width="130" />
          <? } ?></td>
      </tr>
      
      
      
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>(.............................................................)</td>
        <td>( <?
		  
	
	
	echo $tpk4['nama_gp'];
	?> ) 
          <br />
          &nbsp;&nbsp;NIY : <? echo $tpk4['nip']; ?></td>
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
        <td colspan="3"><div align="center">Mengetahui</div></td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">Kepala Sekolah </div></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">
          <? if(!empty($tp['ttd'])){ ?>
          <img src="raport/<? echo "$tp[ttd]"; ?>" height="93" width="150" />
          <? } ?>
        </div></td>
        </tr>
      
      

      <tr>
        <td colspan="3"><div align="center">( <? echo $nkepsek; ?> ) </div></td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">NIY. 
          <?  echo $nniy; ?>
        </div></td>
        </tr>
      <tr>
        <td width="2%">&nbsp;</td>
        <td width="57%"><div align="center">
          <div align="center">
            <p align="left">&nbsp;</p>
          </div>
        </div></td>
        <td width="41%"><div align="center">
          <p align="left"><br />
          </p>
          </div></td>
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
</table>
</body>
</html>
