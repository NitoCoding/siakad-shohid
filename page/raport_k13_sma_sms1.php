<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
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
<table width="888" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td height="95" colspan="3" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td height="95" valign="top"><table width="900" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="7%" valign="top">&nbsp;</td>
                <td width="93%" valign="top">&nbsp;</td>
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
                      NSS : 302190208001&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NPSN : 69728583<span class="style4"><br />
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
	      $tmpkls=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st,nis_nasional FROM tb_santri WHERE id_santri='$idstr' ");
          $ct=mysqli_fetch_assoc($tmpkls);
		  
		  $tmpkls2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
          $ct2=mysqli_fetch_assoc($tmpkls2);
	   ?>
  <tr> 
    <td width="7%" height="25">&nbsp;</td>
    <td width="60%">&nbsp;</td>
    <td width="31%">&nbsp;</td>
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
		if($ct['kelas_st']=='X'){ $kkmx=75;}
	if($ct['kelas_st']=='XI'){ $kkmx=78; }
	if($ct['kelas_st']=='XII'){ $kkmx=80; }
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
 $ntgs=mysqli_query($koneksi, "SELECT * FROM  catatan_mapel WHERE kd_santri='$ct[id_santri]' and kelas='$ct[kelas_st]' and  semester='$sem' and tahun_ajaran='$thaj' ");
 $cnt=mysqli_fetch_assoc($ntgs);
 echo $cnt['predikat'];
		?>
            </div></td>
            <td>
              <div align="justify">
                <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
                  <tr>
                    <td width="81%" height="24"><div align="center" class="style7">
                        <div align="left">
                          <?
 
 echo $cnt['deskripsi'];
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
 $ntgs=mysqli_query($koneksi, "SELECT * FROM  catatan_mapel WHERE kd_santri='$ct[id_santri]' and kelas='$ct[kelas_st]' and  semester='$sem' and tahun_ajaran='$thaj' ");
 $cnt=mysqli_fetch_assoc($ntgs);
 echo $cnt['predikat_s'];
		?>
            </div></td>
            <td>
              <div align="justify">
                <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
                  <tr>
                    <td width="81%" height="24"><div align="center" class="style7">
                        <div align="left">
                          <?
 
 echo $cnt['deskripsi_s'];
		?>
                        </div>
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
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr valign="top">
    <td height="24" colspan="3"><strong>B. Pengetahuan </strong></td>
  </tr>
  <tr valign="top">
    <td colspan="3"><strong>Kriteria Ketuntasan Minimal =</strong> <? echo $kkmx; ?></td>
  </tr>
  <tr valign="top"> 
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr valign="top">
    <td height="604" colspan="3"><table width="900" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      

      <tr>
        <td height="26" colspan="2"><div align="center"><strong>Mata Pelajaran </strong></div></td>
        <td width="125"><div align="center"><strong>Nilai</strong></div></td>
        <td width="124"><div align="center"><strong>Predikat</strong></div></td>
        <td width="130"><div align="center"><strong>Deskripsi</strong></div></td>
        </tr>
      <tr>
        <td colspan="5"><strong>Kelompok A (Umum) </strong></td>
        </tr>
      <tr>
        <td width="40"><div align="center">1.</div></td>
        <td width="649">Pendidikan Agama dan Budi Pekerti <br />
        Nama Guru : 
          <? 
	//$rtt=0; $j1=0; $j2=0; $j3=0; $j4=0; $j5=0; $j6=0; $j7=0; $j8=0; $j9=0; $j10=0; $j11=0; $j12=0; $j13=0; $j14=0; $j15=0; $j16=0; $j17=0; $j18=0; $j19=0; $j20=0; $j21=0; $j22=0;
	//if($ct['kelas_st']=="X"){ $kkm=75; } if($ct['kelas_st']=="XI"){ $kkm=81; } if($ct['kelas_st']=="XII"){ $kkm=87; }
	
		  $tpk2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
          $ctk2=mysqli_fetch_assoc($tpk2);
		  
		  $nmg=mysqli_query($koneksi, "SELECT * FROM tb_pengajar WHERE thn_ajaran='$thaj' and semester='$sem' and kd_mapel='MP006' and kd_kelas='$ctk2[kd_kls]' "); 
          $c_nmg=mysqli_fetch_assoc($nmg);
		  
		  $tpk5=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$c_nmg[kd_guru]' ");
          $ctk5=mysqli_fetch_assoc($tpk5);
		  echo $ctk5['nama_gp'];
		 ?></td>
        <td><div align="center">
          <?      	  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP006' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ct2[kd_kls]' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP005' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ct2[kd_kls]'");
          $tpk2=mysqli_fetch_assoc($tampi2);  
		  		  
		  $j1=round(($tpk['raport']+$tpk2['raport'])/2);
		  echo $j1; 
			
			?>
        </div></td>
        <td><div align="center"><?
		  if($j1 < 75){ echo"D"; $des="Tidak Tuntas"; } 
		  if($j1 >= 75 and $j1 <=81 ){ echo"C"; $des="Tuntas"; } 
		  if($j1 >= 82 and $j1 <=87 ){ echo"B"; $des="Tuntas"; } 
		  if($j1 >= 88){ echo"A"; $des="Tuntas"; }
		?></div></td>
        <td><div align="center"><? 
		 echo"$des";  
		 
		 ?></div></td>
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
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD013' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ct2[kd_kls]'");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j2=$tpk['raport'];
		  echo $j2; 
			
			?>
        </div></td>
        <td><div align="center">
          <?
		  if($j2 < 75){ echo"D"; $des="Tidak Tuntas"; } 
		  if($j2 >= 75 and $j2 <=81 ){ echo"C"; $des="Tuntas"; } 
		  if($j2 >= 82 and $j2 <=87 ){ echo"B"; $des="Tuntas"; } 
		  if($j2 >= 88){ echo"A"; $des="Tuntas"; }
		?>
        </div></td>
        <td><div align="center">
          <? 
		 echo"$des";  
		 
		 ?>
        </div></td>
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
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD003' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ct2[kd_kls]'");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j3=$tpk['raport'];
		  echo $j3; 
			
			?>
        </div></td>
        <td><div align="center">
            <?
		  if($j3 < 75){ echo"D"; $des="Tidak Tuntas"; } 
		  if($j3 >= 75 and $j3 <=81 ){ echo"C"; $des="Tuntas"; } 
		  if($j3 >= 82 and $j3 <=87 ){ echo"B"; $des="Tuntas"; } 
		  if($j3 >= 88){ echo"A"; $des="Tuntas"; }
		?>
        </div></td>
        <td><div align="center">
            <? 
		 echo"$des";  
		 
		 ?>
        </div></td>
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
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD005' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ct2[kd_kls]'");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j4=$tpk['raport'];
		  echo $j4; 
			
			?>
        </div></td>
        <td><div align="center">
            <?
		  if($j4 < 75){ echo"D"; $des="Tidak Tuntas"; } 
		  if($j4 >= 75 and $j4 <=81 ){ echo"C"; $des="Tuntas"; } 
		  if($j4 >= 82 and $j4 <=87 ){ echo"B"; $des="Tuntas"; } 
		  if($j4 >= 88){ echo"A"; $des="Tuntas"; }
		?>
        </div></td>
        <td><div align="center">
            <? 
		 echo"$des";  
		 
		 ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">5.</div></td>
        <td>Sejarah Indonesia  <br />
        Nama Guru : 
          <? 
		  $tpk2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
          $ctk2=mysqli_fetch_assoc($tpk2);
		  
		  $nmg=mysqli_query($koneksi, "SELECT * FROM tb_pengajar WHERE thn_ajaran='$thaj' and semester='$sem' and kd_mapel='MD023' and kd_kelas='$ctk2[kd_kls]' "); 
          $c_nmg=mysqli_fetch_assoc($nmg);
		  
		  $tpk5=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$c_nmg[kd_guru]' ");
          $ctk5=mysqli_fetch_assoc($tpk5);
		  echo $ctk5['nama_gp'];
		 ?></td>
        <td><div align="center">
            <?      	  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD023' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ct2[kd_kls]'");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j5=$tpk['raport'];
		  echo $j5; 
			
			?>
        </div></td>
        <td><div align="center">
            <?
		  if($j5 < 75){ echo"D"; $des="Tidak Tuntas"; } 
		  if($j5 >= 75 and $j5 <=81 ){ echo"C"; $des="Tuntas"; } 
		  if($j5 >= 82 and $j5 <=87 ){ echo"B"; $des="Tuntas"; } 
		  if($j5 >= 88){ echo"A"; $des="Tuntas"; }
		?>
        </div></td>
        <td><div align="center">
            <? 
		 echo"$des";  
		 
		 ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">6.</div></td>
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
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD004' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ct2[kd_kls]'");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j6=$tpk['raport'];
		  echo $j6; 
			
			?>
        </div></td>
        <td><div align="center">
            <?
		  if($j6 < 75){ echo"D"; $des="Tidak Tuntas"; } 
		  if($j6 >= 75 and $j6 <=81 ){ echo"C"; $des="Tuntas"; } 
		  if($j6 >= 82 and $j6 <=87 ){ echo"B"; $des="Tuntas"; } 
		  if($j6 >= 88){ echo"A"; $des="Tuntas"; }
		?>
        </div></td>
        <td><div align="center">
            <? 
		 echo"$des";  
		 
		 ?>
        </div></td>
      </tr>
      
      
      <tr>
        <td colspan="5"><strong>Kelompok B (Umum) </strong></td>
        </tr>
      <tr>
        <td><div align="center">7.</div></td>
        <td>Seni Budaya / Khat <br />
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
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD012' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ct2[kd_kls]'");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j7=$tpk['raport'];
		  echo $j7; 
			
			?>
        </div></td>
        <td><div align="center">
            <?
		  if($j7 < 75){ echo"D"; $des="Tidak Tuntas"; } 
		  if($j7 >= 75 and $j7 <=81 ){ echo"C"; $des="Tuntas"; } 
		  if($j7 >= 82 and $j7 <=87 ){ echo"B"; $des="Tuntas"; } 
		  if($j7 >= 88){ echo"A"; $des="Tuntas"; }
		?>
        </div></td>
        <td><div align="center">
            <? 
		 echo"$des";  
		 
		 ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">8.</div></td>
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
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD009' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ct2[kd_kls]'");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j8=$tpk['raport'];
		  echo $j8; 
			
			?>
        </div></td>
        <td><div align="center">
            <?
		  if($j8 < 75){ echo"D"; $des="Tidak Tuntas"; } 
		  if($j8 >= 75 and $j8 <=81 ){ echo"C"; $des="Tuntas"; } 
		  if($j8 >= 82 and $j8 <=87 ){ echo"B"; $des="Tuntas"; } 
		  if($j8 >= 88){ echo"A"; $des="Tuntas"; }
		?>
        </div></td>
        <td><div align="center">
            <? 
		 echo"$des";  
		 
		 ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">9.</div></td>
        <td>Prakarya dan Kewirausahaan (KDA)<br />
Nama Guru : 
  <? 
		  $tpk2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
          $ctk2=mysqli_fetch_assoc($tpk2);
		  
		  $nmg=mysqli_query($koneksi, "SELECT * FROM tb_pengajar WHERE thn_ajaran='$thaj' and semester='$sem' and kd_mapel='MD011' and kd_kelas='$ctk2[kd_kls]' "); 
          $c_nmg=mysqli_fetch_assoc($nmg);
		  
		  $tpk5=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$c_nmg[kd_guru]' ");
          $ctk5=mysqli_fetch_assoc($tpk5);
		  echo $ctk5['nama_gp'];
		 ?></td>
        <td><div align="center">
            <?      	  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD011' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ct2[kd_kls]'");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j9=$tpk['raport'];
		  echo $j9; 
			
			?>
        </div></td>
        <td><div align="center">
            <?
		  if($j9 < 75){ echo"D"; $des="Tidak Tuntas"; } 
		  if($j9 >= 75 and $j9 <=81 ){ echo"C"; $des="Tuntas"; } 
		  if($j9 >= 82 and $j9 <=87 ){ echo"B"; $des="Tuntas"; } 
		  if($j9 >= 88){ echo"A"; $des="Tuntas"; }
		?>
        </div></td>
        <td><div align="center">
            <? 
		 echo"$des";  
		 
		 ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">10.</div></td>
        <td>Tahfidz<br />
Nama Guru : 
  <? 
		  $tpk2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
          $ctk2=mysqli_fetch_assoc($tpk2);
		  
		  $nmg=mysqli_query($koneksi, "SELECT * FROM tb_pengajar WHERE thn_ajaran='$thaj' and semester='$sem' and kd_mapel='MP001' and kd_kelas='$ctk2[kd_kls]' "); 
          $c_nmg=mysqli_fetch_assoc($nmg);
		  
		  $tpk5=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$c_nmg[kd_guru]' ");
          $ctk5=mysqli_fetch_assoc($tpk5);
		  echo $ctk5['nama_gp'];
		 ?></td>
        <td><div align="center">
            <?      	  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP001' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ct2[kd_kls]'");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j10=$tpk['raport'];
		  echo $j10; 
			
			?>
        </div></td>
        <td><div align="center">
            <?
		  if($j10 < 75){ echo"D"; $des="Tidak Tuntas"; } 
		  if($j10 >= 75 and $j10 <=81 ){ echo"C"; $des="Tuntas"; } 
		  if($j10 >= 82 and $j10 <=87 ){ echo"B"; $des="Tuntas"; } 
		  if($j10 >= 88){ echo"A"; $des="Tuntas"; }
		?>
        </div></td>
        <td><div align="center">
            <? 
		 echo"$des";  
		 
		 ?>
        </div></td>
      </tr>
      
      <tr>
        <td colspan="5"><strong>Kelompok C (Peminatan) </strong></td>
        </tr>
      <tr>
        <td><div align="center">11.</div></td>
        <td>Matematika Peminatan <br />
Nama Guru : 
  <? 
		  $tpk2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
          $ctk2=mysqli_fetch_assoc($tpk2);
		  
		  $nmg=mysqli_query($koneksi, "SELECT * FROM tb_pengajar WHERE thn_ajaran='$thaj' and semester='$sem' and kd_mapel='MD024' and kd_kelas='$ctk2[kd_kls]' "); 
          $c_nmg=mysqli_fetch_assoc($nmg);
		  
		  $tpk5=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$c_nmg[kd_guru]' ");
          $ctk5=mysqli_fetch_assoc($tpk5);
		  echo $ctk5['nama_gp'];
		 ?></td>
        <td><div align="center">
            <?      	  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD024' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ct2[kd_kls]'");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j11=$tpk['raport'];
		  echo $j11; 
			
			?>
        </div></td>
        <td><div align="center">
            <?
		  if($j11 < 75){ echo"D"; $des="Tidak Tuntas"; } 
		  if($j11 >= 75 and $j11 <=81 ){ echo"C"; $des="Tuntas"; } 
		  if($j11 >= 82 and $j11 <=87 ){ echo"B"; $des="Tuntas"; } 
		  if($j11 >= 88){ echo"A"; $des="Tuntas"; }
		?>
        </div></td>
        <td><div align="center">
            <? 
		 echo"$des";  
		 
		 ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">12.</div></td>
        <td>Fisika<br />
Nama Guru : 
  <? 
		  $tpk2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
          $ctk2=mysqli_fetch_assoc($tpk2);
		  
		  $nmg=mysqli_query($koneksi, "SELECT * FROM tb_pengajar WHERE thn_ajaran='$thaj' and semester='$sem' and kd_mapel='MD022' and kd_kelas='$ctk2[kd_kls]' "); 
          $c_nmg=mysqli_fetch_assoc($nmg);
		  
		  $tpk5=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$c_nmg[kd_guru]' ");
          $ctk5=mysqli_fetch_assoc($tpk5);
		  echo $ctk5['nama_gp'];
		 ?></td>
        <td><div align="center">
            <?      	  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD022' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ct2[kd_kls]'");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j12=$tpk['raport'];
		  echo $j12; 
			
			?>
        </div></td>
        <td><div align="center">
            <?
		  if($j12 < 75){ echo"D"; $des="Tidak Tuntas"; } 
		  if($j12 >= 75 and $j12 <=81 ){ echo"C"; $des="Tuntas"; } 
		  if($j12 >= 82 and $j12 <=87 ){ echo"B"; $des="Tuntas"; } 
		  if($j12 >= 88){ echo"A"; $des="Tuntas"; }
		?>
        </div></td>
        <td><div align="center">
            <? 
		 echo"$des";  
		 
		 ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">13.</div></td>
        <td>Kimia<br />
Nama Guru : 
  <? 
		  $tpk2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
          $ctk2=mysqli_fetch_assoc($tpk2);
		  
		  $nmg=mysqli_query($koneksi, "SELECT * FROM tb_pengajar WHERE thn_ajaran='$thaj' and semester='$sem' and kd_mapel='MD015' and kd_kelas='$ctk2[kd_kls]' "); 
          $c_nmg=mysqli_fetch_assoc($nmg);
		  
		  $tpk5=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$c_nmg[kd_guru]' ");
          $ctk5=mysqli_fetch_assoc($tpk5);
		  echo $ctk5['nama_gp'];
		 ?></td>
        <td><div align="center">
            <?      	  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD015' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ct2[kd_kls]'");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j13=$tpk['raport'];
		  echo $j13; 
			
			?>
        </div></td>
        <td><div align="center">
            <?
		  if($j13 < 75){ echo"D"; $des="Tidak Tuntas"; } 
		  if($j13 >= 75 and $j13 <=81 ){ echo"C"; $des="Tuntas"; } 
		  if($j13 >= 82 and $j13 <=87 ){ echo"B"; $des="Tuntas"; } 
		  if($j13 >= 88){ echo"A"; $des="Tuntas"; }
		?>
        </div></td>
        <td><div align="center">
            <? 
		 echo"$des";  
		 
		 ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">14.</div></td>
        <td>Biologi<br />
Nama Guru : 
  <? 
		  $tpk2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
          $ctk2=mysqli_fetch_assoc($tpk2);
		  
		  $nmg=mysqli_query($koneksi, "SELECT * FROM tb_pengajar WHERE thn_ajaran='$thaj' and semester='$sem' and kd_mapel='MD020' and kd_kelas='$ctk2[kd_kls]' "); 
          $c_nmg=mysqli_fetch_assoc($nmg);
		  
		  $tpk5=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$c_nmg[kd_guru]' ");
          $ctk5=mysqli_fetch_assoc($tpk5);
		  echo $ctk5['nama_gp'];
		 ?></td>
        <td><div align="center">
            <?      	  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD020' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ct2[kd_kls]'");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j14=$tpk['raport'];
		  echo $j14; 
			
			?>
        </div></td>
        <td><div align="center">
            <?
		  if($j14 < 75){ echo"D"; $des="Tidak Tuntas"; } 
		  if($j14 >= 75 and $j14 <=81 ){ echo"C"; $des="Tuntas"; } 
		  if($j14 >= 82 and $j14 <=87 ){ echo"B"; $des="Tuntas"; } 
		  if($j14 >= 88){ echo"A"; $des="Tuntas"; }
		?>
        </div></td>
        <td><div align="center">
            <? 
		 echo"$des";  
		 
		 ?>
        </div></td>
      </tr>
      <tr>
        <td colspan="5">Kelompok D (Lintas Minat) </td>
        </tr>
      <tr>
        <td><div align="center">15.</div></td>
        <td>Ekonomi<br />
Nama Guru : 
  <? 
		  $tpk2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
          $ctk2=mysqli_fetch_assoc($tpk2);
		  
		  $nmg=mysqli_query($koneksi, "SELECT * FROM tb_pengajar WHERE thn_ajaran='$thaj' and semester='$sem' and kd_mapel='MD016' and kd_kelas='$ctk2[kd_kls]' "); 
          $c_nmg=mysqli_fetch_assoc($nmg);
		  
		  $tpk5=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$c_nmg[kd_guru]' ");
          $ctk5=mysqli_fetch_assoc($tpk5);
		  echo $ctk5['nama_gp'];
		 ?></td>
        <td><div align="center">
            <?      	  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD016' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ct2[kd_kls]'");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j15=$tpk['raport'];
		  echo $j15; 
			
			?>
        </div></td>
        <td><div align="center">
            <?
		  if($j15 < 75){ echo"D"; $des="Tidak Tuntas"; } 
		  if($j15 >= 75 and $j15 <=81 ){ echo"C"; $des="Tuntas"; } 
		  if($j15 >= 82 and $j15 <=87 ){ echo"B"; $des="Tuntas"; } 
		  if($j15 >= 88){ echo"A"; $des="Tuntas"; }
		?>
        </div></td>
        <td><div align="center">
            <? 
		 echo"$des";  
		 
		 ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">16.</div></td>
        <td>Bahasa Arab <br />
Nama Guru : 
  <? 
		  $tpk2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
          $ctk2=mysqli_fetch_assoc($tpk2);
		  
		  $nmg=mysqli_query($koneksi, "SELECT * FROM tb_pengajar WHERE thn_ajaran='$thaj' and semester='$sem' and kd_mapel='MP003' and kd_kelas='$ctk2[kd_kls]' "); 
          $c_nmg=mysqli_fetch_assoc($nmg);
		  
		  $tpk5=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$c_nmg[kd_guru]' ");
          $ctk5=mysqli_fetch_assoc($tpk5);
		  echo $ctk5['nama_gp'];
		 ?></td>
        <td><div align="center">
            <?      	  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP003' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ct2[kd_kls]'");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j16=$tpk['raport'];
		  echo $j16; 
			
			?>
        </div></td>
        <td><div align="center">
            <?
		  if($j16 < 75){ echo"D"; $des="Tidak Tuntas"; } 
		  if($j16 >= 75 and $j16 <=81 ){ echo"C"; $des="Tuntas"; } 
		  if($j16 >= 82 and $j16 <=87 ){ echo"B"; $des="Tuntas"; } 
		  if($j16 >= 88){ echo"A"; $des="Tuntas"; }
		?>
        </div></td>
        <td><div align="center">
            <? 
		 echo"$des";  
		 
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
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  
  <tr height="12">
    <td height="11" colspan="3" valign="top"><table width="900" height="160" border="0" cellpadding="0" cellspacing="0">
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
  <tr height="12">
    <td height="11" colspan="3" valign="top">__________________________________________________________________________________________</td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="28" colspan="3" valign="top"><strong>C. Keterampilan</strong> </td>
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
        <td height="26" colspan="2"><div align="center"><strong>Mata Pelajaran </strong></div></td>
        <td width="108"><div align="center"><strong>KKM</strong></div></td>
        <td width="114"><div align="center"><strong>Nilai</strong></div></td>
        <td width="105"><div align="center"><strong>Predikat</strong></div></td>
        <td width="118"><div align="center"><strong>Deskripsi</strong></div></td>
      </tr>
      <tr>
        <td colspan="6"><strong>Kelompok A (Umum) </strong></td>
      </tr>
      <tr>
        <td width="36"><div align="center">1.</div></td>
        <td width="649">Pendidikan Agama dan Budi Pekerti <br />
          Nama Guru :
          <? 
	//$rtt=0; $j1=0; $j2=0; $j3=0; $j4=0; $j5=0; $j6=0; $j7=0; $j8=0; $j9=0; $j10=0; $j11=0; $j12=0; $j13=0; $j14=0; $j15=0; $j16=0; $j17=0; $j18=0; $j19=0; $j20=0; $j21=0; $j22=0;
	//if($ct['kelas_st']=="X"){ $kkm=75; } if($ct['kelas_st']=="XI"){ $kkm=81; } if($ct['kelas_st']=="XII"){ $kkm=87; }
	
		  $tpk2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
          $ctk2=mysqli_fetch_assoc($tpk2);
		  
		  $nmg=mysqli_query($koneksi, "SELECT * FROM tb_pengajar WHERE thn_ajaran='$thaj' and semester='$sem' and kd_mapel='MP006' and kd_kelas='$ctk2[kd_kls]' "); 
          $c_nmg=mysqli_fetch_assoc($nmg);
		  
		  $tpk5=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$c_nmg[kd_guru]' ");
          $ctk5=mysqli_fetch_assoc($tpk5);
		  echo $ctk5['nama_gp'];
		 ?></td>
        <td><div align="center"><? echo $kkmx; ?></div></td>
        <td><div align="center">
            <?      	  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai_keterampilan WHERE nis='$ct[nis]' and kd_mp='MP006' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ct2[kd_kls]' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai_keterampilan WHERE nis='$ct[nis]' and kd_mp='MP005' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ct2[kd_kls]'");
          $tpk2=mysqli_fetch_assoc($tampi2);  
		  		  
		  $j1=round(($tpk['raport']+$tpk2['raport'])/2);
		  echo $j1; 
			
			?>
        </div></td>
        <td><div align="center">
          <?
		  if($j1 < 75){ echo"D"; $des="Tidak Tuntas"; } 
		  if($j1 >= 75 and $j1 <=81 ){ echo"C"; $des="Tuntas"; } 
		  if($j1 >= 82 and $j1 <=87 ){ echo"B"; $des="Tuntas"; } 
		  if($j1 >= 88){ echo"A"; $des="Tuntas"; }
		?>
        </div></td>
        <td><div align="center">
          <? 
		 echo"$des";  
		 
		 ?>
        </div></td>
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
        <td><div align="center"><? echo $kkmx; ?></div></td>
        <td><div align="center">
            <?      	  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai_keterampilan WHERE nis='$ct[nis]' and kd_mp='MD013' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ct2[kd_kls]'");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j2=$tpk['raport'];
		  echo $j2; 
			
			?>
        </div></td>
        <td><div align="center">
            <?
		  if($j2 < 75){ echo"D"; $des="Tidak Tuntas"; } 
		  if($j2 >= 75 and $j2 <=81 ){ echo"C"; $des="Tuntas"; } 
		  if($j2 >= 82 and $j2 <=87 ){ echo"B"; $des="Tuntas"; } 
		  if($j2 >= 88){ echo"A"; $des="Tuntas"; }
		?>
        </div></td>
        <td><div align="center">
            <? 
		 echo"$des";  
		 
		 ?>
        </div></td>
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
        <td><div align="center"><? echo $kkmx; ?></div></td>
        <td><div align="center">
            <?      	  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai_keterampilan WHERE nis='$ct[nis]' and kd_mp='MD003' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ct2[kd_kls]'");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j3=$tpk['raport'];
		  echo $j3; 
			
			?>
        </div></td>
        <td><div align="center">
            <?
		  if($j3 < 75){ echo"D"; $des="Tidak Tuntas"; } 
		  if($j3 >= 75 and $j3 <=81 ){ echo"C"; $des="Tuntas"; } 
		  if($j3 >= 82 and $j3 <=87 ){ echo"B"; $des="Tuntas"; } 
		  if($j3 >= 88){ echo"A"; $des="Tuntas"; }
		?>
        </div></td>
        <td><div align="center">
            <? 
		 echo"$des";  
		 
		 ?>
        </div></td>
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
        <td><div align="center"><? echo $kkmx; ?></div></td>
        <td><div align="center">
            <?      	  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai_keterampilan WHERE nis='$ct[nis]' and kd_mp='MD005' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ct2[kd_kls]'");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j4=$tpk['raport'];
		  echo $j4; 
			
			?>
        </div></td>
        <td><div align="center">
            <?
		  if($j4 < 75){ echo"D"; $des="Tidak Tuntas"; } 
		  if($j4 >= 75 and $j4 <=81 ){ echo"C"; $des="Tuntas"; } 
		  if($j4 >= 82 and $j4 <=87 ){ echo"B"; $des="Tuntas"; } 
		  if($j4 >= 88){ echo"A"; $des="Tuntas"; }
		?>
        </div></td>
        <td><div align="center">
            <? 
		 echo"$des";  
		 
		 ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">5.</div></td>
        <td>Sejarah Indonesia <br />
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
        <td><div align="center"><? echo $kkmx; ?></div></td>
        <td><div align="center">
            <?      	  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai_keterampilan WHERE nis='$ct[nis]' and kd_mp='MD023' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ct2[kd_kls]'");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j5=$tpk['raport'];
		  echo $j5; 
			
			?>
        </div></td>
        <td><div align="center">
            <?
		  if($j5 < 75){ echo"D"; $des="Tidak Tuntas"; } 
		  if($j5 >= 75 and $j5 <=81 ){ echo"C"; $des="Tuntas"; } 
		  if($j5 >= 82 and $j5 <=87 ){ echo"B"; $des="Tuntas"; } 
		  if($j5 >= 88){ echo"A"; $des="Tuntas"; }
		?>
        </div></td>
        <td><div align="center">
            <? 
		 echo"$des";  
		 
		 ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">6.</div></td>
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
        <td><div align="center"><? echo $kkmx; ?></div></td>
        <td><div align="center">
            <?      	  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai_keterampilan WHERE nis='$ct[nis]' and kd_mp='MD004' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ct2[kd_kls]'");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j6=$tpk['raport'];
		  echo $j6; 
			
			?>
        </div></td>
        <td><div align="center">
            <?
		  if($j6 < 75){ echo"D"; $des="Tidak Tuntas"; } 
		  if($j6 >= 75 and $j6 <=81 ){ echo"C"; $des="Tuntas"; } 
		  if($j6 >= 82 and $j6 <=87 ){ echo"B"; $des="Tuntas"; } 
		  if($j6 >= 88){ echo"A"; $des="Tuntas"; }
		?>
        </div></td>
        <td><div align="center">
            <? 
		 echo"$des";  
		 
		 ?>
        </div></td>
      </tr>
      <tr>
        <td colspan="6"><strong>Kelompok B (Umum) </strong></td>
      </tr>
      <tr>
        <td><div align="center">7.</div></td>
        <td>Seni Budaya / Khat <br />
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
        <td><div align="center"><? echo $kkmx; ?></div></td>
        <td><div align="center">
            <?      	  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai_keterampilan WHERE nis='$ct[nis]' and kd_mp='MD012' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ct2[kd_kls]'");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j7=$tpk['raport'];
		  echo $j7; 
			
			?>
        </div></td>
        <td><div align="center">
            <?
		  if($j7 < 75){ echo"D"; $des="Tidak Tuntas"; } 
		  if($j7 >= 75 and $j7 <=81 ){ echo"C"; $des="Tuntas"; } 
		  if($j7 >= 82 and $j7 <=87 ){ echo"B"; $des="Tuntas"; } 
		  if($j7 >= 88){ echo"A"; $des="Tuntas"; }
		?>
        </div></td>
        <td><div align="center">
            <? 
		 echo"$des";  
		 
		 ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">8.</div></td>
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
        <td><div align="center"><? echo $kkmx; ?></div></td>
        <td><div align="center">
            <?      	  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai_keterampilan WHERE nis='$ct[nis]' and kd_mp='MD009' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ct2[kd_kls]'");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j8=$tpk['raport'];
		  echo $j8; 
			
			?>
        </div></td>
        <td><div align="center">
            <?
		  if($j8 < 75){ echo"D"; $des="Tidak Tuntas"; } 
		  if($j8 >= 75 and $j8 <=81 ){ echo"C"; $des="Tuntas"; } 
		  if($j8 >= 82 and $j8 <=87 ){ echo"B"; $des="Tuntas"; } 
		  if($j8 >= 88){ echo"A"; $des="Tuntas"; }
		?>
        </div></td>
        <td><div align="center">
            <? 
		 echo"$des";  
		 
		 ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">9.</div></td>
        <td>Prakarya dan Kewirausahaan (KDA)<br />
          Nama Guru :
          <? 
		  $tpk2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
          $ctk2=mysqli_fetch_assoc($tpk2);
		  
		  $nmg=mysqli_query($koneksi, "SELECT * FROM tb_pengajar WHERE thn_ajaran='$thaj' and semester='$sem' and kd_mapel='MD011' and kd_kelas='$ctk2[kd_kls]' "); 
          $c_nmg=mysqli_fetch_assoc($nmg);
		  
		  $tpk5=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$c_nmg[kd_guru]' ");
          $ctk5=mysqli_fetch_assoc($tpk5);
		  echo $ctk5['nama_gp'];
		 ?></td>
        <td><div align="center"><? echo $kkmx; ?></div></td>
        <td><div align="center">
            <?      	  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai_keterampilan WHERE nis='$ct[nis]' and kd_mp='MD011' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ct2[kd_kls]'");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j9=$tpk['raport'];
		  echo $j9; 
			
			?>
        </div></td>
        <td><div align="center">
            <?
		  if($j9 < 75){ echo"D"; $des="Tidak Tuntas"; } 
		  if($j9 >= 75 and $j9 <=81 ){ echo"C"; $des="Tuntas"; } 
		  if($j9 >= 82 and $j9 <=87 ){ echo"B"; $des="Tuntas"; } 
		  if($j9 >= 88){ echo"A"; $des="Tuntas"; }
		?>
        </div></td>
        <td><div align="center">
            <? 
		 echo"$des";  
		 
		 ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">10.</div></td>
        <td>Tahfidz<br />
          Nama Guru :
          <? 
		  $tpk2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
          $ctk2=mysqli_fetch_assoc($tpk2);
		  
		  $nmg=mysqli_query($koneksi, "SELECT * FROM tb_pengajar WHERE thn_ajaran='$thaj' and semester='$sem' and kd_mapel='MP001' and kd_kelas='$ctk2[kd_kls]' "); 
          $c_nmg=mysqli_fetch_assoc($nmg);
		  
		  $tpk5=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$c_nmg[kd_guru]' ");
          $ctk5=mysqli_fetch_assoc($tpk5);
		  echo $ctk5['nama_gp'];
		 ?></td>
        <td><div align="center"><? echo $kkmx; ?></div></td>
        <td><div align="center">
            <?      	  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai_keterampilan WHERE nis='$ct[nis]' and kd_mp='MP001' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ct2[kd_kls]'");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j10=$tpk['raport'];
		  echo $j10; 
			
			?>
        </div></td>
        <td><div align="center">
            <?
		  if($j10 < 75){ echo"D"; $des="Tidak Tuntas"; } 
		  if($j10 >= 75 and $j10 <=81 ){ echo"C"; $des="Tuntas"; } 
		  if($j10 >= 82 and $j10 <=87 ){ echo"B"; $des="Tuntas"; } 
		  if($j10 >= 88){ echo"A"; $des="Tuntas"; }
		?>
        </div></td>
        <td><div align="center">
            <? 
		 echo"$des";  
		 
		 ?>
        </div></td>
      </tr>
      <tr>
        <td colspan="6"><strong>Kelompok C (Peminatan) </strong></td>
      </tr>
      <tr>
        <td><div align="center">11.</div></td>
        <td>Matematika Peminatan <br />
          Nama Guru :
          <? 
		  $tpk2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
          $ctk2=mysqli_fetch_assoc($tpk2);
		  
		  $nmg=mysqli_query($koneksi, "SELECT * FROM tb_pengajar WHERE thn_ajaran='$thaj' and semester='$sem' and kd_mapel='MD024' and kd_kelas='$ctk2[kd_kls]' "); 
          $c_nmg=mysqli_fetch_assoc($nmg);
		  
		  $tpk5=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$c_nmg[kd_guru]' ");
          $ctk5=mysqli_fetch_assoc($tpk5);
		  echo $ctk5['nama_gp'];
		 ?></td>
        <td><div align="center"><? echo $kkmx; ?></div></td>
        <td><div align="center">
            <?      	  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai_keterampilan WHERE nis='$ct[nis]' and kd_mp='MD024' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ct2[kd_kls]'");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j11=$tpk['raport'];
		  echo $j11; 
			
			?>
        </div></td>
        <td><div align="center">
            <?
		  if($j11 < 75){ echo"D"; $des="Tidak Tuntas"; } 
		  if($j11 >= 75 and $j11 <=81 ){ echo"C"; $des="Tuntas"; } 
		  if($j11 >= 82 and $j11 <=87 ){ echo"B"; $des="Tuntas"; } 
		  if($j11 >= 88){ echo"A"; $des="Tuntas"; }
		?>
        </div></td>
        <td><div align="center">
            <? 
		 echo"$des";  
		 
		 ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">12.</div></td>
        <td>Fisika<br />
          Nama Guru :
          <? 
		  $tpk2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
          $ctk2=mysqli_fetch_assoc($tpk2);
		  
		  $nmg=mysqli_query($koneksi, "SELECT * FROM tb_pengajar WHERE thn_ajaran='$thaj' and semester='$sem' and kd_mapel='MD022' and kd_kelas='$ctk2[kd_kls]' "); 
          $c_nmg=mysqli_fetch_assoc($nmg);
		  
		  $tpk5=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$c_nmg[kd_guru]' ");
          $ctk5=mysqli_fetch_assoc($tpk5);
		  echo $ctk5['nama_gp'];
		 ?></td>
        <td><div align="center"><? echo $kkmx; ?></div></td>
        <td><div align="center">
            <?      	  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai_keterampilan WHERE nis='$ct[nis]' and kd_mp='MD022' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ct2[kd_kls]'");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j12=$tpk['raport'];
		  echo $j12; 
			
			?>
        </div></td>
        <td><div align="center">
            <?
		  if($j12 < 75){ echo"D"; $des="Tidak Tuntas"; } 
		  if($j12 >= 75 and $j12 <=81 ){ echo"C"; $des="Tuntas"; } 
		  if($j12 >= 82 and $j12 <=87 ){ echo"B"; $des="Tuntas"; } 
		  if($j12 >= 88){ echo"A"; $des="Tuntas"; }
		?>
        </div></td>
        <td><div align="center">
            <? 
		 echo"$des";  
		 
		 ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">13.</div></td>
        <td>Kimia<br />
          Nama Guru :
          <? 
		  $tpk2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
          $ctk2=mysqli_fetch_assoc($tpk2);
		  
		  $nmg=mysqli_query($koneksi, "SELECT * FROM tb_pengajar WHERE thn_ajaran='$thaj' and semester='$sem' and kd_mapel='MD015' and kd_kelas='$ctk2[kd_kls]' "); 
          $c_nmg=mysqli_fetch_assoc($nmg);
		  
		  $tpk5=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$c_nmg[kd_guru]' ");
          $ctk5=mysqli_fetch_assoc($tpk5);
		  echo $ctk5['nama_gp'];
		 ?></td>
        <td><div align="center"><? echo $kkmx; ?></div></td>
        <td><div align="center">
            <?      	  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai_keterampilan WHERE nis='$ct[nis]' and kd_mp='MD015' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ct2[kd_kls]'");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j13=$tpk['raport'];
		  echo $j13; 
			
			?>
        </div></td>
        <td><div align="center">
            <?
		  if($j13 < 75){ echo"D"; $des="Tidak Tuntas"; } 
		  if($j13 >= 75 and $j13 <=81 ){ echo"C"; $des="Tuntas"; } 
		  if($j13 >= 82 and $j13 <=87 ){ echo"B"; $des="Tuntas"; } 
		  if($j13 >= 88){ echo"A"; $des="Tuntas"; }
		?>
        </div></td>
        <td><div align="center">
            <? 
		 echo"$des";  
		 
		 ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">14.</div></td>
        <td>Biologi<br />
          Nama Guru :
          <? 
		  $tpk2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
          $ctk2=mysqli_fetch_assoc($tpk2);
		  
		  $nmg=mysqli_query($koneksi, "SELECT * FROM tb_pengajar WHERE thn_ajaran='$thaj' and semester='$sem' and kd_mapel='MD020' and kd_kelas='$ctk2[kd_kls]' "); 
          $c_nmg=mysqli_fetch_assoc($nmg);
		  
		  $tpk5=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$c_nmg[kd_guru]' ");
          $ctk5=mysqli_fetch_assoc($tpk5);
		  echo $ctk5['nama_gp'];
		 ?></td>
        <td><div align="center"><? echo $kkmx; ?></div></td>
        <td><div align="center">
            <?      	  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai_keterampilan WHERE nis='$ct[nis]' and kd_mp='MD020' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ct2[kd_kls]'");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j14=$tpk['raport'];
		  echo $j14; 
			
			?>
        </div></td>
        <td><div align="center">
            <?
		  if($j14 < 75){ echo"D"; $des="Tidak Tuntas"; } 
		  if($j14 >= 75 and $j14 <=81 ){ echo"C"; $des="Tuntas"; } 
		  if($j14 >= 82 and $j14 <=87 ){ echo"B"; $des="Tuntas"; } 
		  if($j14 >= 88){ echo"A"; $des="Tuntas"; }
		?>
        </div></td>
        <td><div align="center">
            <? 
		 echo"$des";  
		 
		 ?>
        </div></td>
      </tr>
      <tr>
        <td colspan="6"><strong>Kelompok D (Lintas Minat) </strong></td>
      </tr>
      <tr>
        <td><div align="center">15.</div></td>
        <td>Ekonomi<br />
          Nama Guru :
          <? 
		  $tpk2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
          $ctk2=mysqli_fetch_assoc($tpk2);
		  
		  $nmg=mysqli_query($koneksi, "SELECT * FROM tb_pengajar WHERE thn_ajaran='$thaj' and semester='$sem' and kd_mapel='MD016' and kd_kelas='$ctk2[kd_kls]' "); 
          $c_nmg=mysqli_fetch_assoc($nmg);
		  
		  $tpk5=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$c_nmg[kd_guru]' ");
          $ctk5=mysqli_fetch_assoc($tpk5);
		  echo $ctk5['nama_gp'];
		 ?></td>
        <td><div align="center"><? echo $kkmx; ?></div></td>
        <td><div align="center">
            <?      	  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai_keterampilan WHERE nis='$ct[nis]' and kd_mp='MD016' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ct2[kd_kls]'");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j15=$tpk['raport'];
		  echo $j15; 
			
			?>
        </div></td>
        <td><div align="center">
            <?
		  if($j15 < 75){ echo"D"; $des="Tidak Tuntas"; } 
		  if($j15 >= 75 and $j15 <=81 ){ echo"C"; $des="Tuntas"; } 
		  if($j15 >= 82 and $j15 <=87 ){ echo"B"; $des="Tuntas"; } 
		  if($j15 >= 88){ echo"A"; $des="Tuntas"; }
		?>
        </div></td>
        <td><div align="center">
            <? 
		 echo"$des";  
		 
		 ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">16.</div></td>
        <td>Bahasa Arab <br />
          Nama Guru :
          <? 
		  $tpk2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
          $ctk2=mysqli_fetch_assoc($tpk2);
		  
		  $nmg=mysqli_query($koneksi, "SELECT * FROM tb_pengajar WHERE thn_ajaran='$thaj' and semester='$sem' and kd_mapel='MP003' and kd_kelas='$ctk2[kd_kls]' "); 
          $c_nmg=mysqli_fetch_assoc($nmg);
		  
		  $tpk5=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$c_nmg[kd_guru]' ");
          $ctk5=mysqli_fetch_assoc($tpk5);
		  echo $ctk5['nama_gp'];
		 ?></td>
        <td><div align="center"><? echo $kkmx; ?></div></td>
        <td><div align="center">
            <?      	  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai_keterampilan WHERE nis='$ct[nis]' and kd_mp='MP003' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ct2[kd_kls]'");
          $tpk=mysqli_fetch_assoc($tampi);  
		  		  
		  $j16=$tpk['raport'];
		  echo $j16; 
			
			?>
        </div></td>
        <td><div align="center">
            <?
		  if($j16 < 75){ echo"D"; $des="Tidak Tuntas"; } 
		  if($j16 >= 75 and $j16 <=81 ){ echo"C"; $des="Tuntas"; } 
		  if($j16 >= 82 and $j16 <=87 ){ echo"B"; $des="Tuntas"; } 
		  if($j16 >= 88){ echo"A"; $des="Tuntas"; }
		?>
        </div></td>
        <td><div align="center">
            <? 
		 echo"$des";  
		 
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
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="17" colspan="3" valign="top"><strong>Tabel Interval Predikat Berdasarkan KKM </strong></td>
  </tr>
  <tr height="12">
    <td height="17" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top"><table width="900" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td width="17%" height="34"><div align="center"><strong>KKM</strong></div></td>
        <td colspan="4"><div align="center"><strong>Predikat</strong></div></td>
        </tr>
      <tr>
        <td rowspan="2"><div align="center"><? echo $kkmx; ?></div></td>
        <td height="28"><div align="center">D</div></td>
        <td><div align="center">C</div></td>
        <td><div align="center">B</div></td>
        <td><div align="center">A</div></td>
      </tr>
      <tr>
        <td width="23%" height="32"><div align="center">&lt; <? echo $kkmx; ?></div></td>
        <td width="22%"><div align="center">&lt;= <? 
		$nc=$kkmx+6;
		echo $nc; ?></div></td>
        <td width="20%"><div align="center">
          <? 
		$nc2=$nc+6;
		echo $nc2; ?>
        </div></td>
        <td width="18%"><div align="center">&lt;= 100 </div></td>
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
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="90" colspan="3" valign="top"><table width="900" height="160" border="0" cellpadding="0" cellspacing="0">
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
          Sulawesi -Selatan </td>
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
  <tr height="12">
    <td height="11" colspan="3" valign="top">__________________________________________________________________________________________</td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="28" colspan="3" valign="top"><strong>D. Ekstra Kurikuler </strong></td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top"><table width="900" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td width="4%" height="25"><div align="center"><strong>No.</strong></div></td>
        <td><div align="center"><strong>Jenis Kegiatan </strong><em><strong> </strong></em><strong> Ekstrakurikuler</strong></div></td>
        <td width="14%"><div align="center">Predikat</div></td>
        <td width="16%"><div align="center"><strong>Deskripsi</strong></div></td>
      </tr>
      
      
      <?   $pbk=mysqli_query($koneksi, "SELECT * FROM tb_pbakat WHERE kd_santri='$ct[id_santri]' ");
          $tpbk=mysqli_fetch_assoc($pbk); 
		  
		  $pbk1=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='$tpbk[kd_mp]'  ");
          $tpbk1=mysqli_fetch_assoc($pbk1);
		  
		  $tnils=mysqli_query($koneksi, "SELECT * FROM tb_nilai_eskul WHERE thn_eskl='$thaj' AND sms_eskl='$sem' AND nis_eskl='$ct[nis]' AND 
		                      kls_eskl='$ct[kelas_st]' AND kd_eskl1='$tpbk1[kd_mp]'  ");
        $cnils=mysqli_fetch_assoc($tnils); ?>
      <tr>
        <td><div align="center">1.</div></td>
        <td width="66%">&nbsp;<? echo $tpbk1['nama_mp']; ?></td>
        <td><div align="center"><? echo $cnils['nil_eskl1']; ?></div></td>
        <td><div align="center"><? if($cnils['nil_eskl1']=='D'){ echo"Tidak Tuntas"; } if($cnils['nil_eskl1']=='A' || $cnils['nil_eskl1']=='B' || $cnils['nil_eskl1']=='C'){ echo"Tuntas"; }  ?></div></td>
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
        <td>&nbsp;<? echo $tpbk2['nama_mp']; ?></td>
        <td><div align="center"><? echo $cnils['nil_eskl2']; ?></div></td>
        <td><div align="center">
          <? if($cnils['nil_eskl2']=='D'){ echo"Tidak Tuntas"; } if($cnils['nil_eskl2']=='A' || $cnils['nil_eskl2']=='B' || $cnils['nil_eskl2']=='C'){ echo"Tuntas"; }  ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">3.</div></td>
        <td>&nbsp;</td>
        <td><div align="center"></div></td>
        <td>&nbsp;</td>
      </tr>
      
      <? $str=1;
		     $or1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and thn_ajaran='$thaj' 
			                   and semester='$sem'  ");
             while($cor1=mysqli_fetch_assoc($or1)){
			 			 
			 $jexk2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='$cor1[kd_mp]' and ket='KO'");
             $cjexk2=mysqli_fetch_assoc($jexk2);
			 $ckd=substr($cjexk2['kd_mp'],3,2);
			 if($ckd!="04" and $ckd!="05" and $ckd!="06" and $ckd!="07" and $ckd!="08" and $ckd!="09" and 
			     $ckd!="10" and $ckd!="11" and $ckd!="12" and $ckd!="13"){
			 
			 if($cjexk2['nama_mp']!="" and $cor1['nilai']!=""){
		  ?>
      
      <?
		  $str+=1; } }  }
		  ?>
    </table></td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="20" colspan="3" valign="top"><strong>E. Prestasi </strong></td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top"><table width="900" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td width="4%" height="25"><div align="center"><strong>No.</strong></div></td>
        <td><div align="center"><strong>Jenis Kegiatan </strong><em><strong>&nbsp;</strong></em></div></td>
        <td width="42%"><div align="center"><strong>Keterangan</strong></div></td>
        </tr>
      <?   $nop=1;
		  $tnils=mysqli_query($koneksi, "SELECT * FROM tb_prpl WHERE thn_ajaran='$thaj' AND semester='$sem' AND kd_st='$ct[id_santri]' ");
          while($cnils=mysqli_fetch_assoc($tnils)){ ?>
      <tr>
        <td><div align="center"><? echo $nop; ?></div></td>
        <td width="54%">&nbsp;<? echo $cnils['perihal']; ?></td>
        <td><div align="left">&nbsp;<? echo $cnils['hkuman']; ?></div></td>
        </tr>
      <? $nop+=1;} ?>
      <? $str=1;
		     $or1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and thn_ajaran='$thaj' 
			                   and semester='$sem'  ");
             while($cor1=mysqli_fetch_assoc($or1)){
			 			 
			 $jexk2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='$cor1[kd_mp]' and ket='KO'");
             $cjexk2=mysqli_fetch_assoc($jexk2);
			 $ckd=substr($cjexk2['kd_mp'],3,2);
			 if($ckd!="04" and $ckd!="05" and $ckd!="06" and $ckd!="07" and $ckd!="08" and $ckd!="09" and 
			     $ckd!="10" and $ckd!="11" and $ckd!="12" and $ckd!="13"){
			 
			 if($cjexk2['nama_mp']!="" and $cor1['nilai']!=""){
		  ?>
      <?
		  $str+=1; } }  }
		  ?>
    </table></td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr height="12">
    <td height="11" colspan="3" valign="top"><strong>F. Ketidak Hadiran </strong></td>
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
                  <td height="21" colspan="3" bgcolor="#FFFFFF"><div align="center"><strong>Ketidak Hadiran </strong></div></td>
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
    <td height="22" colspan="3"><strong>G. Catatan Wali Kelas</strong> </td>
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
    <td colspan="2"><strong>H. Tanggapan Orang tua/Wali </strong></td>
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
    <td colspan="3"><table width="900" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><div align="center"></div></td>
        <td>Mengetahui : </td>
        <td><div align="left">Pangkep, 09 Juli 2018</div></td>
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
        <td>(.............................................................)</td>
        <td>( <?
		  
	$tampi=mysqli_query($koneksi, "SELECT * FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
    $tpk=mysqli_fetch_assoc($tampi);
	
	$tampi2=mysqli_query($koneksi, "SELECT * FROM wali_kelas WHERE kd_kls='$tpk[kd_kls]' ");
    $tpk3=mysqli_fetch_assoc($tampi2);
	
	$tampi4=mysqli_query($koneksi, "SELECT id_gp,nip,nama_gp FROM guru_pegawai WHERE id_gp='$tpk3[kd_gp]' ");
    $tpk4=mysqli_fetch_assoc($tampi4);
	
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
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">( Suryawati Ningsih D, S.Pd.) </div></td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">NIY. 201707 1 2 071</div></td>
        </tr>
      <tr>
        <td width="2%">&nbsp;</td>
        <td width="71%"><div align="center">
          <div align="center">
            <p align="left">&nbsp;</p>
          </div>
        </div></td>
        <td width="27%"><div align="center">
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
