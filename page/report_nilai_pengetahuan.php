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
-->
</style>
</head>
<?
include("../koneksi.php");
 $blnk=$_GET['blnk'];
 $pknk=$_GET['pknk'];
 $klsk=$_GET['klsk'];
 $klsk2=$_GET['klsk2'];
 $kdmpl=$_GET['kdmpl']; 
 $thaj=$_COOKIE['thaj'];
 $sem=$_COOKIE['sem'];
 $idgurp=$_COOKIE['idgurp'];
 ini_set('max_execution_time',300);
?>
<body>
<table width="1328" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="6" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="7%" valign="top"><img src="../images/LOGO-SHOID2.jpg" width="95" height="108" /></td>
                <td width="1%">&nbsp;</td>
                <td width="92%"><span class="style3">YAYASAN SHOHWATUL IS'AD</span><br />
                    <span class="style1">SMP-SMA IT SHOHWATUL IS'AD</span><br />
                    <br />
                    <br />
                    <span class="style4">Alamat:  Jl. Poros Padanglampe&nbsp; KM  . 3&nbsp; Ma&rsquo;rang&nbsp;  Pangkep&nbsp; Sulawesi -Selatan 90645  P.O. Box 300<br />
                      http://www.shohwatulisad.com e-mail : shohwatulisad@gmail.com</span></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td colspan="6"><hr /></td>
      </tr>
      <tr>
        <td colspan="6">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="6"><div align="center" class="style5">REKAP HASIL BELAJAR SETIAP KOMPETENSI DASAR PESERTA DIDIK SMP IT SHOHWATUL IS'AD  </div></td>
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
        <td width="10%">MATA PELAJARAN </td>
        <td width="1%">:</td>
        <td width="54%"><?
		$ntu=mysqli_query($koneksi, "SELECT kd_mp,nama_mp FROM mata_pelajaran WHERE kd_mp='$kdmpl'");
	    $ctk=mysqli_fetch_assoc($ntu);
		echo $ctk['nama_mp'];
		?></td>
        <td width="4%">&nbsp;</td>
        <td width="11%">SEMSTER</td>
        <td width="20%">: <? echo $sem; ?></td>
      </tr>
      <tr>
        <td>GURU MAPEL </td>
        <td>:</td>
        <td><?
		$tampi4=mysqli_query($koneksi, "SELECT id_gp,nip,nama_gp FROM guru_pegawai WHERE id_gp='$idgurp' ");
        $tpk4=mysqli_fetch_assoc($tampi4);
		echo $tpk4['nama_gp'];
		?></td>
        <td>&nbsp;</td>
        <td>TAHUN PELAJARAN </td>
        <td>: <? echo $thaj; ?></td>
      </tr>
      <tr>
        <td>KELAS</td>
        <td>:</td>
        <td><? 
		
		echo $klsk2;
		 ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      
      <tr>
        <td valign="top">KOMPETENSI DASAR  </td>
        <td valign="top">:</td>
        <td><? 
		$lskd=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE tb_komptensi_inti.tahun_ajaran='$thaj' AND tb_komptensi_inti.semester='$sem' AND tb_komptensi_inti.kelas='$klsk' AND tb_komptensi_inti.mapel='$kdmpl' AND tb_komptensi_inti.guru='$idgurp' AND tb_komptensi_inti.kd_kompetensi='3'");
	    while($clskd=mysqli_fetch_assoc($lskd)){	
		if($clskd['kd1']!=""){  echo "3.1 ".$clskd['kd1']; $kdct1="$clskd[kd1]"; }
		if($clskd['kd2']!=""){ echo "<br>3.2 ".$clskd['kd2']; $kdct2="$clskd[kd2]"; }
		if($clskd['kd3']!=""){ echo "<br>3.3 ".$clskd['kd3']; $kdct3="$clskd[kd3]"; }
		if($clskd['kd4']!=""){ echo "<br>3.4 ".$clskd['kd4']; $kdct4="$clskd[kd4]"; }
		if($clskd['kd5']!=""){ echo "<br>3.5 ".$clskd['kd5']; $kdct5="$clskd[kd5]"; }
		if($clskd['kd6']!=""){ echo "<br>3.6 ".$clskd['kd6']; $kdct6="$clskd[kd6]"; }
		if($clskd['kd7']!=""){ echo "<br>3.7 ".$clskd['kd7']; $kdct7="$clskd[kd7]"; }
		if($clskd['kd8']!=""){ echo "<br>3.8 ".$clskd['kd8']; $kdct8="$clskd[kd8]"; }
		}?>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td valign="top"><table width="1328" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <td width="25" rowspan="3"><div align="center">NO</div></td>
        <td width="63" rowspan="3"><div align="center">NIS</div></td>
        <td width="262" rowspan="3"><div align="center">NAMA</div></td>
        <td colspan="24"><div align="center">KOMPETENSI DASAR </div></td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">3.1</div></td>
        <td colspan="3"><div align="center">3.2</div></td>
        <td colspan="3"><div align="center">3.3</div></td>
        <td colspan="3"><div align="center">3.4</div></td>
        <td colspan="3"><div align="center">3.5</div></td>
        <td colspan="3"><div align="center">3.6</div></td>
        <td colspan="3"><div align="center">3.7</div></td>
        <td colspan="3"><div align="center">3.8</div></td>
      </tr>
      <tr>
        <td width="35"><div align="center">T.T</div></td>
        <td width="38"><div align="center">TGS</div></td>
        <td width="37"><div align="center">NILAI</div></td>
        <td><div align="center">T.T</div></td>
        <td><div align="center">TGS</div></td>
        <td><div align="center">NILAI</div></td>
        <td><div align="center">T.T</div></td>
        <td><div align="center">TGS</div></td>
        <td><div align="center">NILAI</div></td>
        <td><div align="center">T.T</div></td>
        <td><div align="center">TGS</div></td>
        <td><div align="center">NILAI</div></td>
        <td><div align="center">T.T</div></td>
        <td><div align="center">TGS</div></td>
        <td><div align="center">NILAI</div></td>
        <td><div align="center">T.T</div></td>
        <td><div align="center">TGS</div></td>
        <td><div align="center">NILAI</div></td>
        <td><div align="center">T.T</div></td>
        <td><div align="center">TGS</div></td>
        <td><div align="center">NILAI</div></td>
        <td><div align="center">T.T</div></td>
        <td><div align="center">TGS</div></td>
        <td><div align="center">NILAI</div></td>
      </tr>
     
      <tr>
        <td colspan="27" height="2"></td>
        </tr>
	   <? $no=1;
		$ntgs=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='$klsk2' AND status='a' ORDER BY nama");
	    while($cnt=mysqli_fetch_assoc($ntgs)){

		?>
      <tr>
        <td><div align="center"><? echo $no; ?></div></td>
        <td><div align="center"><? echo $cnt['nis']; ?> </div></td>
        <td>&nbsp; <? echo $cnt['nama']; ?></td>
        <? 
		
		$nt1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31,tb_komptensi_inti WHERE tb_nilai_kd31.id_kompetensi=tb_komptensi_inti.id_ki AND tb_nilai_kd31.id_santri='$cnt[id_santri]' and tb_komptensi_inti.semester='$sem' AND tb_komptensi_inti.tahun_ajaran='$thaj' AND  tb_komptensi_inti.kelas='$klsk' AND tb_komptensi_inti.mapel='$kdmpl' AND tb_komptensi_inti.guru='$idgurp' AND tb_nilai_kd31.kd='3.1' ");
	   $ct=mysqli_fetch_assoc($nt1);
	   
		 ?>
        <td><div align="center"><? echo $ct['nilai_tes_tulis'];?></div></td>
        <td><div align="center"><? echo $ct['nilai_tugas'];?></div></td>
        <td><div align="center">
          <? $r31=(0.4*$ct['nilai_tes_tulis'])+(0.6*$ct['nilai_tugas']); if($r31){  echo round($r31); } ?>
        </div></td>
       
        <? 
		$nt1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31,tb_komptensi_inti WHERE tb_nilai_kd31.id_kompetensi=tb_komptensi_inti.id_ki AND tb_nilai_kd31.id_santri='$cnt[id_santri]' and tb_komptensi_inti.semester='$sem' AND tb_komptensi_inti.tahun_ajaran='$thaj' AND tb_komptensi_inti.kelas='$klsk' AND tb_komptensi_inti.mapel='$kdmpl' AND tb_komptensi_inti.guru='$idgurp' AND tb_nilai_kd31.kd='3.2' ");
	   $ct=mysqli_fetch_assoc($nt1);
		
		 ?>
        <td><div align="center"><? echo $ct['nilai_tes_tulis'];?></div></td>
        <td><div align="center"><? echo $ct['nilai_tugas'];?></div></td>
        <td><div align="center">
            <?  $r32=(0.4*$ct['nilai_tes_tulis'])+(0.6*$ct['nilai_tugas']); if($r32){ echo round($r32); }?>
        </div></td>
       
        <? 
		$nt1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31,tb_komptensi_inti WHERE tb_nilai_kd31.id_kompetensi=tb_komptensi_inti.id_ki AND tb_nilai_kd31.id_santri='$cnt[id_santri]' and tb_komptensi_inti.semester='$sem' AND tb_komptensi_inti.tahun_ajaran='$thaj' AND tb_komptensi_inti.kelas='$klsk' AND tb_komptensi_inti.mapel='$kdmpl' AND tb_komptensi_inti.guru='$idgurp' AND tb_nilai_kd31.kd='3.3' ");
	   $ct=mysqli_fetch_assoc($nt1);
	 
	  
		 ?>
        <td><div align="center"><? echo $ct['nilai_tes_tulis'];?></div></td>
        <td><div align="center"><? echo $ct['nilai_tugas'];?></div></td>
        <td><div align="center">
          <? $r33=(0.4*$ct['nilai_tes_tulis'])+(0.6*$ct['nilai_tugas']); if($r33){ echo round($r33); } ?>
        </div></td>
        
        <? 
		$nt1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31,tb_komptensi_inti WHERE tb_nilai_kd31.id_kompetensi=tb_komptensi_inti.id_ki AND tb_nilai_kd31.id_santri='$cnt[id_santri]' and tb_komptensi_inti.semester='$sem' AND tb_komptensi_inti.tahun_ajaran='$thaj' AND tb_komptensi_inti.kelas='$klsk' AND tb_komptensi_inti.mapel='$kdmpl' AND tb_komptensi_inti.guru='$idgurp' AND tb_nilai_kd31.kd='3.4' ");
	   $ct=mysqli_fetch_assoc($nt1);
		 ?>
        <td><div align="center"><? echo $ct['nilai_tes_tulis'];?></div></td>
        <td><div align="center"><? echo $ct['nilai_tugas'];?></div></td>
        <td><div align="center">
          <? $r34=(0.4*$ct['nilai_tes_tulis'])+(0.6*$ct['nilai_tugas']); if($r34){ echo round($r34); } ?>
        </div></td>
        
        <? 
		$nt1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31,tb_komptensi_inti WHERE tb_nilai_kd31.id_kompetensi=tb_komptensi_inti.id_ki AND tb_nilai_kd31.id_santri='$cnt[id_santri]' and tb_komptensi_inti.semester='$sem' AND tb_komptensi_inti.tahun_ajaran='$thaj' AND tb_komptensi_inti.kelas='$klsk' AND tb_komptensi_inti.mapel='$kdmpl' AND tb_komptensi_inti.guru='$idgurp' AND tb_nilai_kd31.kd='3.5' ");
	   $ct=mysqli_fetch_assoc($nt1);
	   
	 //   echo $ct['id_kompetensi']." - ";
		 ?>
        <td><div align="center"><? echo $ct['nilai_tes_tulis'];?></div></td>
        <td><div align="center"><? echo $ct['nilai_tugas'];?></div></td>
        <td><div align="center">
          <? $r35=(0.4*$ct['nilai_tes_tulis'])+(0.6*$ct['nilai_tugas']); if($r35){ echo round($r35); } ?>
        </div></td>
        
        <? 
		$nt1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31,tb_komptensi_inti WHERE tb_nilai_kd31.id_kompetensi=tb_komptensi_inti.id_ki AND tb_nilai_kd31.id_santri='$cnt[id_santri]' and tb_komptensi_inti.semester='$sem' AND tb_komptensi_inti.tahun_ajaran='$thaj' AND tb_komptensi_inti.kelas='$klsk' AND tb_komptensi_inti.mapel='$kdmpl' AND tb_komptensi_inti.guru='$idgurp' AND tb_nilai_kd31.kd='3.6' ");
	   $ct=mysqli_fetch_assoc($nt1);
		
		//echo $ct['id_kompetensi']." - ";
		 ?>
        <td><div align="center"><? echo $ct['nilai_tes_tulis'];?></div></td>
        <td><div align="center"><? echo $ct['nilai_tugas'];?></div></td>
        <td><div align="center">
          <? $r36=(0.4*$ct['nilai_tes_tulis'])+(0.6*$ct['nilai_tugas']); if($r36){ echo round($r36); }?>
        </div></td>
        
        <? 
		$nt1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31,tb_komptensi_inti WHERE tb_nilai_kd31.id_kompetensi=tb_komptensi_inti.id_ki AND tb_nilai_kd31.id_santri='$cnt[id_santri]' and tb_komptensi_inti.semester='$sem' AND tb_komptensi_inti.tahun_ajaran='$thaj' AND tb_komptensi_inti.kelas='$klsk' AND tb_komptensi_inti.mapel='$kdmpl' AND tb_komptensi_inti.guru='$idgurp' AND tb_nilai_kd31.kd='3.7' ");
	   $ct=mysqli_fetch_assoc($nt1);
		 ?>
        <td><div align="center"><? echo $ct['nilai_tes_tulis'];?></div></td>
        <td><div align="center"><? echo $ct['nilai_tugas'];?></div></td>
        <td><div align="center">
          <? $r37=(0.4*$ct['nilai_tes_tulis'])+(0.6*$ct['nilai_tugas']); if($r37){ echo round($r37); } ?>
        </div></td>
        
        <? 
		$nt1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31,tb_komptensi_inti WHERE tb_nilai_kd31.id_kompetensi=tb_komptensi_inti.id_ki AND tb_nilai_kd31.id_santri='$cnt[id_santri]' and tb_komptensi_inti.semester='$sem' AND tb_komptensi_inti.tahun_ajaran='$thaj' AND tb_komptensi_inti.kelas='$klsk' AND tb_komptensi_inti.mapel='$kdmpl' AND tb_komptensi_inti.guru='$idgurp' AND tb_nilai_kd31.kd='3.8' ");
	   $ct=mysqli_fetch_assoc($nt1);
		 ?>
        <td><div align="center"><? echo $ct['nilai_tes_tulis'];?></div></td>
        <td><div align="center"><? echo $ct['nilai_tugas'];?></div></td>
        <td><div align="center">
          <? $r38=(0.4*$ct['nilai_tes_tulis'])+(0.6*$ct['nilai_tugas']); if($r38){ echo round($r38); } ?>
        </div></td>
      </tr>
      <? $no+=1; } ?>
    </table></td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="6" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="7%" valign="top"><img src="../images/LOGO-SHOID2.jpg" width="95" height="108" /></td>
                    <td width="1%">&nbsp;</td>
                    <td width="92%"><span class="style3">YAYASAN SHOHWATUL IS'AD</span><br />
                        <span class="style1">SMP IT SHOHWATUL IS'AD</span><br />
                        <br />
                        <br />
                        <span class="style4">Alamat:  Jl. Poros Padanglampe&nbsp; KM  . 3&nbsp; Ma&rsquo;rang&nbsp;  Pangkep&nbsp; Sulawesi -Selatan 90645  P.O. Box 300<br />
                          http://www.shohwatulisad.com e-mail : shohwatulisad@gmail.com</span></td>
                  </tr>
              </table></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="6"><hr /></td>
      </tr>
      <tr>
        <td colspan="6">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="6"><div align="center" class="style5">REKAP HASIL BELAJAR ASPEK PENGETAHUAN PESERTA DIDIK SMP IT SHOHWATUL IS'AD </div></td>
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
        <td width="10%">MATA PELAJARAN </td>
        <td width="1%">:</td>
        <td width="54%"><?
		//$ntu=mysqli_query($koneksi, "SELECT kd_mp,nama_mp FROM mata_pelajaran WHERE kd_mp='$kdmpl'");
	  //  $ctk=mysqli_fetch_assoc($ntu);
		echo $ctk['nama_mp'];
		?></td>
        <td width="4%">&nbsp;</td>
        <td width="11%">SEMSTER</td>
        <td width="20%">: <? echo $sem; ?></td>
      </tr>
      <tr>
        <td>GURU MAPEL </td>
        <td>:</td>
        <td><?
		//$tampi4=mysqli_query($koneksi, "SELECT id_gp,nip,nama_gp FROM guru_pegawai WHERE id_gp='$idgurp' ");
      //  $tpk4=mysqli_fetch_assoc($tampi4);
		echo $tpk4['nama_gp'];
		?></td>
        <td>&nbsp;</td>
        <td>TAHUN PELAJARAN </td>
        <td>: <? echo $thaj; ?></td>
      </tr>
      <tr>
        <td>KELAS</td>
        <td>:</td>
        <td><? 
		
		echo $klsk2." - ".$gkdes;
		 ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      
    </table></td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top"><table width="100%" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <td width="2%" rowspan="3"><div align="center">NO</div></td>
        <td width="17%" rowspan="3"><div align="center">NAMA</div></td>
        <td colspan="8" rowspan="2"><div align="center">NILAI KOMPETENSI DASAR </div></td>
        <td colspan="3"><div align="center">HASIL PENILAIAN </div></td>
        <td colspan="2"><div align="center">NILAI RAPORT </div></td>
        <td width="36%" rowspan="3"><div align="center">DESKERIPSI  </div></td>
      </tr>
      <tr>
        <td width="7%"><div align="center">HARIAN</div></td>
        <td width="5%"><div align="center">UTS</div></td>
        <td width="5%"><div align="center">US</div></td>
        <td width="6%" rowspan="2"><div align="center">RATA-RATA</div></td>
        <td width="6%" rowspan="2"><div align="center">PREDIKAT</div></td>
        </tr>
      <tr>
        <td width="2%"><div align="center">3.1</div></td>
        <td width="2%"><div align="center">3.2</div></td>
        <td width="2%"><div align="center">3.3</div></td>
        <td width="2%"><div align="center">3.4</div></td>
        <td width="2%"><div align="center">3.5</div></td>
        <td width="2%"><div align="center">3.6</div></td>
        <td width="2%"><div align="center">3.7</div></td>
        <td width="2%"><div align="center">3.8</div></td>
        <td><div align="center">2</div></td>
        <td><div align="center">1</div></td>
        <td><div align="center">1</div></td>
        </tr>
		 
         <tr>
           <td colspan="16" height="2"></td>
         </tr>
		 <? $no=1; 
		$ntgs=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='$klsk2' AND status='a' ORDER BY nama");
	    while($cnt=mysqli_fetch_assoc($ntgs)){
		$pbg=0; $r38=0; $r37=0; $r36=0; $r35=0; $r34=0; $r33=0; $r32=0; $r31=0;
	  	  
		?>
        <tr>
        <td><div align="center"><? echo $no; ?></div></td>
        <td>  <? echo $cnt['nama']; ?></td>
        <td><div align="center">
		  <? 
		  $nt1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31,tb_komptensi_inti WHERE tb_nilai_kd31.id_kompetensi=tb_komptensi_inti.id_ki AND tb_nilai_kd31.id_santri='$cnt[id_santri]' and tb_komptensi_inti.semester='$sem' AND tb_komptensi_inti.tahun_ajaran='$thaj' AND tb_komptensi_inti.kelas='$klsk' AND tb_komptensi_inti.mapel='$kdmpl' AND tb_komptensi_inti.guru='$idgurp' AND tb_nilai_kd31.kd='3.1' ");
	   $ct=mysqli_fetch_assoc($nt1);
             $r31=(0.4*$ct['nilai_tes_tulis'])+(0.6*$ct['nilai_tugas']); if($r31!=0){ echo round($r31); $pbg+=1; }  if($ct['nilai_tes_tulis']=='0' and $ct['nilai_tugas']=='0'){ $pbg+=1; }
		    ?>
        </div></td>
        <td><div align="center">
          <? 
		  $nt1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31,tb_komptensi_inti WHERE tb_nilai_kd31.id_kompetensi=tb_komptensi_inti.id_ki AND tb_nilai_kd31.id_santri='$cnt[id_santri]' AND tb_komptensi_inti.semester='$sem'  and tb_komptensi_inti.tahun_ajaran='$thaj' AND tb_komptensi_inti.kelas='$klsk' AND tb_komptensi_inti.mapel='$kdmpl' AND tb_komptensi_inti.guru='$idgurp' AND tb_nilai_kd31.kd='3.2' ");
	   $ct=mysqli_fetch_assoc($nt1); 
             $r32=(0.4*$ct['nilai_tes_tulis'])+(0.6*$ct['nilai_tugas']); if($r32!=0){ echo round($r32); $pbg+=1; } if($ct['nilai_tes_tulis']=='0' and $ct['nilai_tugas']=='0'){ $pbg+=1; }
		    ?>
        </div></td>
        <td><div align="center">
          <? 
		  $nt1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31,tb_komptensi_inti WHERE tb_nilai_kd31.id_kompetensi=tb_komptensi_inti.id_ki AND tb_nilai_kd31.id_santri='$cnt[id_santri]' AND tb_komptensi_inti.semester='$sem'  and tb_komptensi_inti.tahun_ajaran='$thaj' AND tb_komptensi_inti.kelas='$klsk' AND tb_komptensi_inti.mapel='$kdmpl' AND tb_komptensi_inti.guru='$idgurp' AND tb_nilai_kd31.kd='3.3' ");
	   $ct=mysqli_fetch_assoc($nt1); 
             $r33=(0.4*$ct['nilai_tes_tulis'])+(0.6*$ct['nilai_tugas']); if($r33!=0){ echo round($r33); $pbg+=1; } if($ct['nilai_tes_tulis']=='0' and $ct['nilai_tugas']=='0'){ $pbg+=1; }
		    ?>
        </div></td>
        <td><div align="center">
          <? 
		  $nt1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31,tb_komptensi_inti WHERE tb_nilai_kd31.id_kompetensi=tb_komptensi_inti.id_ki AND tb_nilai_kd31.id_santri='$cnt[id_santri]' AND tb_komptensi_inti.semester='$sem' and tb_komptensi_inti.tahun_ajaran='$thaj' AND tb_komptensi_inti.kelas='$klsk' AND tb_komptensi_inti.mapel='$kdmpl' AND tb_komptensi_inti.guru='$idgurp' AND tb_nilai_kd31.kd='3.4' ");
	   $ct=mysqli_fetch_assoc($nt1);
             $r34=(0.4*$ct['nilai_tes_tulis'])+(0.6*$ct['nilai_tugas']); if($r34!=0){ echo round($r34); $pbg+=1; } if($ct['nilai_tes_tulis']=='0' and $ct['nilai_tugas']=='0'){ $pbg+=1; }
		    ?>
        </div></td>
        <td><div align="center">
          <? 
		  $nt1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31,tb_komptensi_inti WHERE tb_nilai_kd31.id_kompetensi=tb_komptensi_inti.id_ki AND tb_nilai_kd31.id_santri='$cnt[id_santri]' and tb_komptensi_inti.semester='$sem' AND tb_komptensi_inti.tahun_ajaran='$thaj' AND tb_komptensi_inti.kelas='$klsk' AND tb_komptensi_inti.mapel='$kdmpl' AND tb_komptensi_inti.guru='$idgurp' AND tb_nilai_kd31.kd='3.5' ");
	   $ct=mysqli_fetch_assoc($nt1); 
             $r35=(0.4*$ct['nilai_tes_tulis'])+(0.6*$ct['nilai_tugas']); if($r35!=0){ echo round($r35); $pbg+=1; } if($ct['nilai_tes_tulis']=='0' and $ct['nilai_tugas']=='0'){ $pbg+=1; }
		    ?>
        </div></td>
        <td><div align="center">
          <? 
		  $nt1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31,tb_komptensi_inti WHERE tb_nilai_kd31.id_kompetensi=tb_komptensi_inti.id_ki AND tb_nilai_kd31.id_santri='$cnt[id_santri]' and tb_komptensi_inti.semester='$sem' AND tb_komptensi_inti.tahun_ajaran='$thaj' AND tb_komptensi_inti.kelas='$klsk' AND tb_komptensi_inti.mapel='$kdmpl' AND tb_komptensi_inti.guru='$idgurp' AND tb_nilai_kd31.kd='3.6' ");
	   $ct=mysqli_fetch_assoc($nt1); 
             $r36=(0.4*$ct['nilai_tes_tulis'])+(0.6*$ct['nilai_tugas']); if($r36!=0){ echo round($r36); $pbg+=1; } if($ct['nilai_tes_tulis']=='0' and $ct['nilai_tugas']=='0'){ $pbg+=1; }
		   ?>
        </div></td>
        <td><div align="center">
          <? 
		  $nt1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31,tb_komptensi_inti WHERE tb_nilai_kd31.id_kompetensi=tb_komptensi_inti.id_ki AND tb_nilai_kd31.id_santri='$cnt[id_santri]' and tb_komptensi_inti.semester='$sem' AND tb_komptensi_inti.tahun_ajaran='$thaj' AND tb_komptensi_inti.kelas='$klsk' AND tb_komptensi_inti.mapel='$kdmpl' AND tb_komptensi_inti.guru='$idgurp' AND tb_nilai_kd31.kd='3.7' ");
	   $ct=mysqli_fetch_assoc($nt1); 
             $r37=(0.4*$ct['nilai_tes_tulis'])+(0.6*$ct['nilai_tugas']); if($r37!=0){ echo round($r37); $pbg+=1; } if($ct['nilai_tes_tulis']=='0' and $ct['nilai_tugas']=='0'){ $pbg+=1; }
		   ?>
        </div></td>
        <td><div align="center">
          <? 
		  $nt1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31,tb_komptensi_inti WHERE tb_nilai_kd31.id_kompetensi=tb_komptensi_inti.id_ki AND tb_nilai_kd31.id_santri='$cnt[id_santri]' and tb_komptensi_inti.semester='$sem' AND tb_komptensi_inti.tahun_ajaran='$thaj' AND tb_komptensi_inti.kelas='$klsk' AND tb_komptensi_inti.mapel='$kdmpl' AND tb_komptensi_inti.guru='$idgurp' AND tb_nilai_kd31.kd='3.8' ");
	   $ct=mysqli_fetch_assoc($nt1); 
             $r38=(0.4*$ct['nilai_tes_tulis'])+(0.6*$ct['nilai_tugas']); if($r38!=0){ echo round($r38); $pbg+=1; } if($ct['nilai_tes_tulis']=='0' and $ct['nilai_tugas']=='0'){ $pbg+=1; }
		    ?>
        </div></td>
        <td><div align="center">
          <? if($r38 or $r37 or $r36 or $r35 or $r34 or $r33 or $r32 or $r31) { $harian=round(($r38+$r37+$r36+$r35+$r34+$r33+$r32+$r31)/$pbg); if($harian!='0'){ echo $harian; }} ?>
        </div></td>
		<?
		 $nt2=mysqli_query($koneksi, "SELECT * FROM tb_ujian_k13,tb_komptensi_inti WHERE tb_ujian_k13.id_kompetensi=tb_komptensi_inti.id_ki AND tb_ujian_k13.id_santri='$cnt[id_santri]' and tb_komptensi_inti.semester='$sem' AND tb_komptensi_inti.tahun_ajaran='$thaj' AND tb_komptensi_inti.semester='$sem' AND tb_komptensi_inti.kelas='$klsk' AND tb_komptensi_inti.mapel='$kdmpl' AND tb_komptensi_inti.guru='$idgurp' ");
	   $ct2=mysqli_fetch_assoc($nt2); 
		?>
        <td><div align="center"><? echo $ct2['uts']; ?></div></td>
        <td><div align="center"><? echo $ct2['us']; ?></div></td>
        <td><div align="center"><? if($r38 or $r37 or $r36 or $r35 or $r34 or $r33 or $r32 or $r31) { 
		
		$rtnu=round((($harian*2)+$ct2['uts']+$ct2['us'])/4); echo $rtnu; } 
		
if($r38 or $r37 or $r36 or $r35 or $r34 or $r33 or $r32 or $r31) { 		
  if($rtnu!=0){
  $qku7=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$cnt[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='$kdmpl' and kd='3' ");
  $crp=mysqli_fetch_assoc($qku7);
  
  $cqk7=mysqli_num_rows($qku7);
  if($cqk7==0){
   $rek=mysqli_query($koneksi, "INSERT INTO tb_raport_k13 VALUES('',
   												 '$cnt[id_santri]',
												 '$thaj',
												 '$sem',
												 '$kdmpl',
												 '3',
												 '$rtnu',
												 '')"); 
 }else{
 mysqli_query($koneksi, "UPDATE tb_raport_k13 SET nir='$rtnu' WHERE id_rap='$crp[id_rap]' ");
 }
 } }
		?>
        </div></td>
        <td><div align="center"><? if($r38 or $r37 or $r36 or $r35 or $r34 or $r33 or $r32 or $r31) { 
		
		  if($rtnu < 75){ echo"D";  } 
		  if($rtnu >= 75 and $rtnu <=83 ){ echo"C";  } 
		  if($rtnu >= 84 and $rtnu <=92 ){ echo"B";  } 
		  if($rtnu >= 93 and $rtnu <=100){ echo"A";  }
		  
		 } ?></div></td>
        <td><div align="left">
          <?
if($klsk2=="XA" or $klsk2=="XB" or $klsk2=="XIA" or $klsk2=="XIB" or $klsk2=="XIIA" or $klsk2=="XIIB"){ $kmtr1="Sangat baik"; $kmtr2="Baik"; $kmtr3="Mulai"; }

if($klsk2=="VIIA" or $klsk2=="VIIB" or $klsk2=="VIIC" or $klsk2=="VIID" or $klsk2=="VIIIA" or $klsk2=="VIIIB" or $klsk2=="VIIIC" or $klsk2=="VIIID" or $klsk2=="IXA" or $klsk2=="IXB" or $klsk2=="IXC"){ $kmtr1="Sangat baik "; $kmtr2="Baik "; $kmtr3="Mulai "; }

		if($r38 or $r37 or $r36 or $r35 or $r34 or $r33 or $r32 or $r31) {

		
if($r31<101 and $r31>89) { echo"Sangat baik $kdct1 "; $pyp+=1; if($pyp >=2) { $gbds1=", $kdct1"; }else{$gbds1="<b>$kmtr1</b> $kdct1"; } $pyp=0;}else{ $gbds1=""; }
if($r32<101 and $r32>89) { echo" Sangat baik $kdct2 "; $pyp+=1; if($pyp >=2) { $gbds2=", $kdct2"; }else{$gbds2="<b>$kmtr1</b> $kdct2"; }$pyp=0;}else{ $gbds2=""; }
if($r33<101 and $r33>89) { echo" Sangat baik $kdct3 "; $pyp+=1; if($pyp >=2) { $gbds3=", $kdct3"; }else{$gbds3="<b>$kmtr1</b> $kdct3"; }$pyp=0;}else{ $gbds3=""; }
if($r34<101 and $r34>89) { echo" Sangat baik $kdct4 "; $pyp+=1; if($pyp >=2) { $gbds4=", $kdct4"; }else{$gbds4="<b>$kmtr1</b> $kdct4"; }$pyp=0;}else{ $gbds4=""; }
if($r35<101 and $r35>89) { echo" Sangat baik $kdct5 "; $pyp+=1; if($pyp >=2) { $gbds5=", $kdct5"; }else{$gbds5="<b>$kmtr1</b> $kdct5"; }$pyp=0;}else{ $gbds5=""; }
if($r36<101 and $r36>89) { echo" Sangat baik $kdct6 "; $pyp+=1; if($pyp >=2) { $gbds6=", $kdct6"; }else{$gbds6="<b>$kmtr1</b> $kdct6"; }$pyp=0;}else{ $gbds6=""; }
if($r37<101 and $r37>89) { echo" Sangat baik $kdct7 "; $pyp+=1; if($pyp >=2) { $gbds7=", $kdct7"; }else{$gbds7="<b>$kmtr1</b> $kdct7"; }$pyp=0;}else{ $gbds7=""; }
if($r38<101 and $r38>89) { echo" Sangat baik $kdct8 "; $pyp+=1; if($pyp >=2) { $gbds8=", $kdct8"; }else{$gbds8="<b>$kmtr1</b> $kdct8"; }$pyp=0;}else{ $gbds8=""; }
		
if($r31 <=89 and $r31 >80) { echo " Baik $kdct1 "; $pyp2+=1; if($pyp2 >=2) { $gbds9=", $kdct1"; }else{ $gbds9="<b>$kmtr2</b> $kdct1"; }$pyp2=0;}else{ $gbds9=""; }
if($r32 <=89 and $r32 >80) { echo " Baik $kdct2 "; $pyp2+=1; if($pyp2 >=2) { $gbds10=", $kdct2"; }else{ $gbds10="<b>$kmtr2</b> $kdct2"; }$pyp2=0;}else{ $gbds10=""; }
if($r33 <=89 and $r33 >80) { echo " Baik $kdct3 "; $pyp2+=1; if($pyp2 >=2) { $gbds11=", $kdct3"; }else{ $gbds11="<b>$kmtr2</b> $kdct3"; }$pyp2=0;}else{ $gbds11=""; }
if($r34 <=89 and $r34 >80) { echo " Baik $kdct4 "; $pyp2+=1; if($pyp2 >=2) { $gbds12=", $kdct4"; }else{ $gbds12="<b>$kmtr2</b> $kdct4"; }$pyp2=0;}else{ $gbds12=""; }
if($r35 <=89 and $r35 >80) { echo " Baik $kdct5 "; $pyp2+=1; if($pyp2 >=2) { $gbds13=", $kdct5"; }else{ $gbds13="<b>$kmtr2</b> $kdct5"; }$pyp2=0;}else{ $gbds13=""; }
if($r36 <=89 and $r36 >80) { echo " Baik $kdct6 "; $pyp2+=1; if($pyp2 >=2) { $gbds14=", $kdct6"; }else{ $gbds14="<b>$kmtr2</b> $kdct6"; }$pyp2=0;}else{ $gbds14=""; }
if($r37 <=89 and $r37 >80) { echo " Baik $kdct7 "; $pyp2+=1; if($pyp2 >=2) { $gbds15=", $kdct7"; }else{ $gbds15="<b>$kmtr2</b> $kdct7"; }$pyp2=0;}else{ $gbds15=""; }
if($r38 <=89 and $r38 >80) { echo " Baik $kdct8 "; $pyp2+=1; if($pyp2 >=2) { $gbds16=", $kdct8"; }else{ $gbds16="<b>$kmtr2</b> $kdct8"; }$pyp2=0;}else{ $gbds16=""; }
		
		
if($r31<=80 and $r31>10) { echo " Cukup baik $kdct1 "; $pyp3+=1; if($pyp3 >=2){ $gbds17=", $kdct1 "; }else{ $gbds17="<br /><b>$kmtr3</b> $kdct1"; }$pyp3=0;}else{ $gbds17=""; }
if($r32<=80 and $r32>10) { echo " Cukup baik $kdct2 "; $pyp3+=1; if($pyp3 >=2){ $gbds18=", $kdct2 "; }else{ $gbds18="<br /><b>$kmtr3</b> $kdct2"; }$pyp3=0;}else{ $gbds18=""; }
if($r33<=80 and $r33>10) { echo " Cukup baik $kdct3 "; $pyp3+=1; if($pyp3 >=2){ $gbds19=", $kdct3 "; }else{ $gbds19="<br /><b>$kmtr3</b> $kdct3"; }$pyp3=0;}else{ $gbds19=""; }
if($r34<=80 and $r34>10) { echo " Cukup baik $kdct4 "; $pyp3+=1; if($pyp3 >=2){ $gbds20=", $kdct4 "; }else{ $gbds20="<br /><b>$kmtr3</b> $kdct4"; }$pyp3=0;}else{ $gbds20=""; }
if($r35<=80 and $r35>10) { echo " Cukup baik $kdct5 "; $pyp3+=1; if($pyp3 >=2){ $gbds21=", $kdct5 "; }else{ $gbds21="<br /><b>$kmtr3</b> $kdct5"; }$pyp3=0;}else{ $gbds21=""; }
if($r36<=80 and $r36>10) { echo " Cukup baik $kdct6 "; $pyp3+=1; if($pyp3 >=2){ $gbds22=", $kdct6 "; }else{ $gbds22="<br /><b>$kmtr3</b> $kdct6"; }$pyp3=0;}else{ $gbds22=""; }
if($r37<=80 and $r37>10) { echo " Cukup baik $kdct7 "; $pyp3+=1; if($pyp3 >=2){ $gbds23=", $kdct7 "; }else{ $gbds23="<br /><b>$kmtr3</b> $kdct7"; }$pyp3=0;}else{ $gbds23=""; }
if($r38<=80 and $r38>10) { echo " Cukup baik $kdct8 "; $pyp3+=1; if($pyp3 >=2){ $gbds24=", $kdct8 "; }else{ $gbds24="<br /><b>$kmtr3</b> $kdct8"; }$pyp3=0;}else{ $gbds24=""; }
		

$gkdes=addslashes("$gbds1 $gbds2 $gbds3 $gbds4 $gbds5 $gbds6 $gbds7 $gbds8 $gbds9 $gbds10 $gbds11 $gbds12 $gbds13 $gbds14 $gbds15 $gbds16 $gbds17 $gbds18 $gbds19 $gbds20 $gbds21 $gbds22 $gbds23 $gbds24");
			
		//if($gkdes!=NULL or $gkdes!=""){
	//	$qku7=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_rap='$crp[id_rap]' AND id_santri='$cnt[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='$kdmpl' and kd='3' ");
    //    $crp2=mysqli_fetch_assoc($qku7);
	
		mysqli_query($koneksi, "UPDATE tb_raport_k13 SET deskripsi='$gkdes' WHERE id_rap='$crp[id_rap]'  ");
		

		//} 
		
		}
		
		?>
         
        </div>
        <div align="left"></div></td>
      </tr>
	  <?     $no+=1;  $pbg=0; } 
	  
	  ?>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
  </tr>
</table>

</body>
</html>
