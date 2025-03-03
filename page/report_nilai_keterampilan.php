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
                    <span class="style1">SMP - SMA IT SHOHWATUL IS'AD</span><br />
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
		$lskd=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE tb_komptensi_inti.tahun_ajaran='$thaj' AND tb_komptensi_inti.semester='$sem' AND tb_komptensi_inti.kelas='$klsk' AND tb_komptensi_inti.mapel='$kdmpl' AND tb_komptensi_inti.guru='$idgurp' AND tb_komptensi_inti.kd_kompetensi='4'");
	    while($clskd=mysqli_fetch_assoc($lskd)){	
		if($clskd['kd1']!=""){  echo "4.1 ".$clskd['kd1']; $kdct1="$clskd[kd1]"; }
		if($clskd['kd2']!=""){ echo "<br>4.2 ".$clskd['kd2'];  $kdct2="$clskd[kd2]";}
		if($clskd['kd3']!=""){ echo "<br>4.3 ".$clskd['kd3'];  $kdct3="$clskd[kd3]";}
		if($clskd['kd4']!=""){ echo "<br>4.4 ".$clskd['kd4'];  $kdct4="$clskd[kd4]";}
		if($clskd['kd5']!=""){ echo "<br>4.5 ".$clskd['kd5'];  $kdct5="$clskd[kd5]";}
		if($clskd['kd6']!=""){ echo "<br>4.6 ".$clskd['kd6'];  $kdct6="$clskd[kd6]";}
		if($clskd['kd7']!=""){ echo "<br>4.7 ".$clskd['kd7'];  $kdct7="$clskd[kd7]";}
		if($clskd['kd8']!=""){ echo "<br>4.8 ".$clskd['kd8'];  $kdct8="$clskd[kd8]";}
		}?>          &nbsp;</td>
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
        <td colspan="32"><div align="center">KOMPETENSI DASAR </div></td>
      </tr>
      <tr>
        <td colspan="4"><div align="center">4.1</div></td>
        <td colspan="4"><div align="center">4.2</div></td>
        <td colspan="4"><div align="center">4.3</div></td>
        <td colspan="4"><div align="center">4.4</div></td>
        <td colspan="4"><div align="center">4.5</div></td>
        <td colspan="4"><div align="center">4.6</div></td>
        <td colspan="4"><div align="center">4.7</div></td>
        <td colspan="4"><div align="center">4.8</div></td>
      </tr>
      <tr>
        <td width="35"><div align="center">PRT</div></td>
        <td width="38"><div align="center">PRD</div></td>
        <td width="37"><div align="center">PRK</div></td>
        <td width="37"><div align="center">NILAI</div></td>
        <td><div align="center">PRT</div></td>
        <td><div align="center">PRD</div></td>
        <td><div align="center">PRK</div></td>
        <td><div align="center">NILAI</div></td>
        <td><div align="center">PRT</div></td>
        <td><div align="center">PRD</div></td>
        <td><div align="center">PRK</div></td>
        <td><div align="center">NILAI</div></td>
        <td><div align="center">PRT</div></td>
        <td><div align="center">PRD</div></td>
        <td><div align="center">PRK</div></td>
        <td><div align="center">NILAI</div></td>
        <td><div align="center">PRT</div></td>
        <td><div align="center">PRD</div></td>
        <td><div align="center">PRK</div></td>
        <td><div align="center">NILAI</div></td>
        <td><div align="center">PRT</div></td>
        <td><div align="center">PRD</div></td>
        <td><div align="center">PRK</div></td>
        <td><div align="center">NILAI</div></td>
        <td><div align="center">PRT</div></td>
        <td><div align="center">PRD</div></td>
        <td><div align="center">PRK</div></td>
        <td><div align="center">NILAI</div></td>
        <td><div align="center">PRT</div></td>
        <td><div align="center">PRD</div></td>
        <td><div align="center">PRK</div></td>
        <td><div align="center">NILAI</div></td>
      </tr>
      <? $no=1;
		$ntgs=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='$klsk2' AND status='a' ORDER BY nama");
	    while($cnt=mysqli_fetch_assoc($ntgs)){
		
	   
	   
		?>
      <tr>
        <td><div align="center"><? echo $no; ?></div></td>
        <td><div align="center"><? echo $cnt['nis'];  ?> </div></td>
        <td>&nbsp; <? echo $cnt['nama']; ?></td>
        <? 
		
		$nt1=mysqli_query($koneksi, "SELECT * FROM  tb_nilai_kd41,tb_komptensi_inti WHERE tb_nilai_kd41.id_kompetensi=tb_komptensi_inti.id_ki AND tb_nilai_kd41.id_santri='$cnt[id_santri]' and tb_komptensi_inti.tahun_ajaran='$thaj' AND tb_komptensi_inti.semester='$sem' AND tb_komptensi_inti.kelas='$klsk' AND tb_komptensi_inti.mapel='$kdmpl' AND tb_komptensi_inti.guru='$idgurp' AND tb_nilai_kd41.kd='4.1' ");
	   $ct=mysqli_fetch_assoc($nt1);
		
	//	if($ct['kd']=='4.1'){ 
		
		?>
        <td><div align="center"><? echo $ct['praktek'];?></div></td>
        <td><div align="center"><? echo $ct['produk'];?></div></td>
        <td><div align="center"><? echo $ct['proyek'];?></div></td>
        <td><div align="center">
          <? 
		  if($ct['praktek']!=NULL){ $p41+=1;}
		  if($ct['produk']!=NULL){ $p41+=1;}
		  if($ct['proyek']!=NULL){ $p41+=1;}
		if($p41){ $r41=(($ct['praktek']+$ct['produk']+$ct['proyek'])/$p41); if($r41){ echo round($r41); } }
		$p41=0;
		?>
        </div></td>
		
		<? 
		$nt1=mysqli_query($koneksi, "SELECT * FROM  tb_nilai_kd41,tb_komptensi_inti WHERE tb_nilai_kd41.id_kompetensi=tb_komptensi_inti.id_ki AND tb_nilai_kd41.id_santri='$cnt[id_santri]' and tb_komptensi_inti.tahun_ajaran='$thaj' AND tb_komptensi_inti.semester='$sem' AND tb_komptensi_inti.kelas='$klsk' AND tb_komptensi_inti.mapel='$kdmpl' AND tb_komptensi_inti.guru='$idgurp' AND tb_nilai_kd41.kd='4.2' ");
	   $ct=mysqli_fetch_assoc($nt1);
		
		//if($ct['kd']=='4.2'){ ?>
        <td><div align="center"><? echo $ct['praktek'];?></div></td>
        <td><div align="center"><? echo $ct['produk'];?></div></td>
        <td><div align="center"><? echo $ct['proyek'];?></div></td>
        <td><div align="center">
            <? 
			if($ct['praktek']!=NULL){ $p42+=1;}
		    if($ct['produk']!=NULL){ $p42+=1;}
		    if($ct['proyek']!=NULL){ $p42+=1;}
			if($p42){ $r42=(($ct['praktek']+$ct['produk']+$ct['proyek'])/$p42); if($r42){ echo round($r42); }} 
			$p42=0;
			?>
        </div></td>
		<? //} ?>
		<? 
		$nt1=mysqli_query($koneksi, "SELECT * FROM  tb_nilai_kd41,tb_komptensi_inti WHERE tb_nilai_kd41.id_kompetensi=tb_komptensi_inti.id_ki AND tb_nilai_kd41.id_santri='$cnt[id_santri]' and tb_komptensi_inti.tahun_ajaran='$thaj' AND tb_komptensi_inti.semester='$sem' AND tb_komptensi_inti.kelas='$klsk' AND tb_komptensi_inti.mapel='$kdmpl' AND tb_komptensi_inti.guru='$idgurp' AND tb_nilai_kd41.kd='4.3' ");
	   $ct=mysqli_fetch_assoc($nt1); 
		// if($ct['kd']=='4.3'){ ?>
        <td><div align="center"><? echo $ct['praktek'];?></div></td>
        <td><div align="center"><? echo $ct['produk'];?></div></td>
        <td><div align="center"><? echo $ct['proyek'];?></div></td>
        <td><div align="center">
            <? 
			if($ct['praktek']!=NULL){ $p43+=1;}
		    if($ct['produk']!=NULL){ $p43+=1;}
		    if($ct['proyek']!=NULL){ $p43+=1;}
			if($p43){ $r43=(($ct['praktek']+$ct['produk']+$ct['proyek'])/$p43); if($r43){ echo round($r43); }} 
			$p43=0;
			?>
        </div></td>
		<? //} ?>
		<? 
		$nt1=mysqli_query($koneksi, "SELECT * FROM  tb_nilai_kd41,tb_komptensi_inti WHERE tb_nilai_kd41.id_kompetensi=tb_komptensi_inti.id_ki AND tb_nilai_kd41.id_santri='$cnt[id_santri]' and tb_komptensi_inti.tahun_ajaran='$thaj' AND tb_komptensi_inti.semester='$sem' AND tb_komptensi_inti.kelas='$klsk' AND tb_komptensi_inti.mapel='$kdmpl' AND tb_komptensi_inti.guru='$idgurp' AND tb_nilai_kd41.kd='4.4' ");
	   $ct=mysqli_fetch_assoc($nt1);
		//if($ct['kd']=='4.4'){ ?>
        <td><div align="center"><? echo $ct['praktek'];?></div></td>
        <td><div align="center"><? echo $ct['produk'];?></div></td>
        <td><div align="center"><? echo $ct['proyek'];?></div></td>
        <td><div align="center">
            <? 
			if($ct['praktek']!=NULL){ $p44+=1;}
		    if($ct['produk']!=NULL){ $p44+=1;}
		    if($ct['proyek']!=NULL){ $p44+=1;}
			
			if($p44){ $r44=(($ct['praktek']+$ct['produk']+$ct['proyek'])/$p44); if($r44){ echo round($r44); }}
			$p44=0;
			?>
        </div></td>
		<? //} ?>
		<? 
		$nt1=mysqli_query($koneksi, "SELECT * FROM  tb_nilai_kd41,tb_komptensi_inti WHERE tb_nilai_kd41.id_kompetensi=tb_komptensi_inti.id_ki AND tb_nilai_kd41.id_santri='$cnt[id_santri]' and tb_komptensi_inti.tahun_ajaran='$thaj' AND tb_komptensi_inti.semester='$sem' AND tb_komptensi_inti.kelas='$klsk' AND tb_komptensi_inti.mapel='$kdmpl' AND tb_komptensi_inti.guru='$idgurp' AND tb_nilai_kd41.kd='4.5' ");
	   $ct=mysqli_fetch_assoc($nt1);
		
		//if($ct['kd']=='4.5'){ ?>
        <td><div align="center"><? echo $ct['praktek'];?></div></td>
        <td><div align="center"><? echo $ct['produk'];?></div></td>
        <td><div align="center"><? echo $ct['proyek'];?></div></td>
        <td><div align="center">
            <? 
			if($ct['praktek']!=NULL){ $p45+=1;}
		    if($ct['produk']!=NULL){ $p45+=1;}
		    if($ct['proyek']!=NULL){ $p45+=1;}
			if($p45){ $r45=(($ct['praktek']+$ct['produk']+$ct['proyek'])/$p45); if($r45){ echo round($r45); }}
			$p45=0;
			?>
        </div></td>
		<? //} ?>
		<? 
		$nt1=mysqli_query($koneksi, "SELECT * FROM  tb_nilai_kd41,tb_komptensi_inti WHERE tb_nilai_kd41.id_kompetensi=tb_komptensi_inti.id_ki AND tb_nilai_kd41.id_santri='$cnt[id_santri]' and tb_komptensi_inti.tahun_ajaran='$thaj' AND tb_komptensi_inti.semester='$sem' AND tb_komptensi_inti.kelas='$klsk' AND tb_komptensi_inti.mapel='$kdmpl' AND tb_komptensi_inti.guru='$idgurp' AND tb_nilai_kd41.kd='4.6' ");
	   $ct=mysqli_fetch_assoc($nt1);
		//if($ct['kd']=='4.6'){ ?>
        <td><div align="center"><? echo $ct['praktek'];?></div></td>
        <td><div align="center"><? echo $ct['produk'];?></div></td>
        <td><div align="center"><? echo $ct['proyek'];?></div></td>
        <td><div align="center">
            <? 
			if($ct['praktek']!=NULL){ $p46+=1;}
		    if($ct['produk']!=NULL){ $p46+=1;}
		    if($ct['proyek']!=NULL){ $p46+=1;}
			if($p46){ $r46=(($ct['praktek']+$ct['produk']+$ct['proyek'])/$p46); if($r46){ echo round($r46); }}
			$p46=0;
			?>
        </div></td>
		<? //} ?>
		<? 
		$nt1=mysqli_query($koneksi, "SELECT * FROM  tb_nilai_kd41,tb_komptensi_inti WHERE tb_nilai_kd41.id_kompetensi=tb_komptensi_inti.id_ki AND tb_nilai_kd41.id_santri='$cnt[id_santri]' and tb_komptensi_inti.tahun_ajaran='$thaj' AND tb_komptensi_inti.semester='$sem' AND tb_komptensi_inti.kelas='$klsk' AND tb_komptensi_inti.mapel='$kdmpl' AND tb_komptensi_inti.guru='$idgurp' AND tb_nilai_kd41.kd='4.7' ");
	   $ct=mysqli_fetch_assoc($nt1);
		
		//if($ct['kd']=='4.7'){ ?>
        <td><div align="center"><? echo $ct['praktek'];?></div></td>
        <td><div align="center"><? echo $ct['produk'];?></div></td>
        <td><div align="center"><? echo $ct['proyek'];?></div></td>
        <td><div align="center">
            <? 
			if($ct['praktek']!=NULL){ $p47+=1;}
		    if($ct['produk']!=NULL){ $p47+=1;}
		    if($ct['proyek']!=NULL){ $p47+=1;}
			if($p47){  $r47=(($ct['praktek']+$ct['produk']+$ct['proyek'])/$p47); if($r47){ echo round($r47); }} 
			$p47=0;
			?>
        </div></td>
		<? //} ?>
		<? 
		$nt1=mysqli_query($koneksi, "SELECT * FROM  tb_nilai_kd41,tb_komptensi_inti WHERE tb_nilai_kd41.id_kompetensi=tb_komptensi_inti.id_ki AND tb_nilai_kd41.id_santri='$cnt[id_santri]' and tb_komptensi_inti.tahun_ajaran='$thaj' AND tb_komptensi_inti.semester='$sem' AND tb_komptensi_inti.kelas='$klsk' AND tb_komptensi_inti.mapel='$kdmpl' AND tb_komptensi_inti.guru='$idgurp' AND tb_nilai_kd41.kd='4.8' ");
	   $ct=mysqli_fetch_assoc($nt1);
		
		//if($ct['kd']=='4.8'){ ?>
        <td><div align="center"><? echo $ct['praktek'];?></div></td>
        <td><div align="center"><? echo $ct['produk'];?></div></td>
        <td><div align="center"><? echo $ct['proyek'];?></div></td>
        <td><div align="center">
            <?  
			if($ct['praktek']!=NULL){ $p48+=1;}
		    if($ct['produk']!=NULL){ $p48+=1;}
		    if($ct['proyek']!=NULL){ $p48+=1;}
			 if($p48){ $r48=(($ct['praktek']+$ct['produk']+$ct['proyek'])/$p48); if($r48!=NULL){ echo round($r48); }} 
			 $p48=0;
			 ?>
        </div></td>
        <? //} ?>
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
        <td colspan="6"><div align="center" class="style5">REKAP HASIL BELAJAR ASPEK KETERAMPILAN PESERTA DIDIK SMP IT SHOHWATUL IS'AD </div></td>
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
		
		echo $klsk2;
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
        <td colspan="2"><div align="center">NILAI RAPORT </div></td>
        <td width="36%" rowspan="3"><div align="center">DESKERIPSI</div></td>
      </tr>
      <tr>
        <td width="6%" rowspan="2"><div align="center">RATA-RATA</div></td>
        <td width="6%" rowspan="2"><div align="center">PREDIKAT</div></td>
        </tr>
      <tr>
        <td width="2%"><div align="center">4.1</div></td>
        <td width="2%"><div align="center">4.2</div></td>
        <td width="2%"><div align="center">4.3</div></td>
        <td width="2%"><div align="center">4.4</div></td>
        <td width="2%"><div align="center">4.5</div></td>
        <td width="2%"><div align="center">4.6</div></td>
        <td width="2%"><div align="center">4.7</div></td>
        <td width="2%"><div align="center">4.8</div></td>
        </tr>
		 <? $no=1; $pbg=0;
		$ntgs=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='$klsk2' AND status='a' ORDER BY nama");
	    while($cnt=mysqli_fetch_assoc($ntgs)){
		 $r48=0; $r47=0; $r46=0; $r45=0; $r44=0; $r43=0; $r42=0; $r41=0;
	  	  
		?>
      <tr>
        <td><div align="center"><? echo $no; ?></div></td>
        <td>  <? echo $cnt['nama']; ?></td>
        <td><div align="center"> <? 
		
		$nt1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41,tb_komptensi_inti WHERE tb_nilai_kd41.id_kompetensi=tb_komptensi_inti.id_ki AND tb_nilai_kd41.id_santri='$cnt[id_santri]' and tb_komptensi_inti.tahun_ajaran='$thaj' AND tb_komptensi_inti.semester='$sem' AND tb_komptensi_inti.kelas='$klsk' AND tb_komptensi_inti.mapel='$kdmpl' AND tb_komptensi_inti.guru='$idgurp' AND tb_nilai_kd41.kd='4.1'");
	   $ct=mysqli_fetch_assoc($nt1);
	   if($ct['praktek']!=''){ $pbg1+=1;}
	   if($ct['produk']!=''){ $pbg1+=1;}
	   if($ct['proyek']!=''){ $pbg1+=1;}
	if($pbg1){	 $r41=round((($ct['praktek']+$ct['produk']+$ct['proyek'])/$pbg1)); if($r41>=0){ echo $r41; $pbg+=1; } }
	$pbg1=0;
	?> </div></td>
        <td><div align="center"><? 
		$nt1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41,tb_komptensi_inti WHERE tb_nilai_kd41.id_kompetensi=tb_komptensi_inti.id_ki AND tb_nilai_kd41.id_santri='$cnt[id_santri]' and tb_komptensi_inti.tahun_ajaran='$thaj' AND tb_komptensi_inti.semester='$sem' AND tb_komptensi_inti.kelas='$klsk' AND tb_komptensi_inti.mapel='$kdmpl' AND tb_komptensi_inti.guru='$idgurp' AND tb_nilai_kd41.kd='4.2'");
	   $ct=mysqli_fetch_assoc($nt1);
		if($ct['praktek']!='' ){ $pbg2+=1;}
	   if($ct['produk']!='' ){ $pbg2+=1;}
	   if($ct['proyek']!='' ){ $pbg2+=1;}
	  // $r42=($ct['praktek']+$ct['produk']+$ct['proyek'])/$pbg2; echo $pbg2;
	if($pbg2){	 $r42=round((($ct['praktek']+$ct['produk']+$ct['proyek'])/$pbg2)); if($r42>=0){ echo $r42; $pbg+=1; } }
	$pbg2=0;
	 ?></div></td>
        <td><div align="center"><? 
		
		$nt1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41,tb_komptensi_inti WHERE tb_nilai_kd41.id_kompetensi=tb_komptensi_inti.id_ki AND tb_nilai_kd41.id_santri='$cnt[id_santri]' and tb_komptensi_inti.tahun_ajaran='$thaj' AND tb_komptensi_inti.semester='$sem' AND tb_komptensi_inti.kelas='$klsk' AND tb_komptensi_inti.mapel='$kdmpl' AND tb_komptensi_inti.guru='$idgurp' AND tb_nilai_kd41.kd='4.3'");
	   $ct=mysqli_fetch_assoc($nt1);
	   if($ct['praktek']!=''){ $pbg3+=1;}
	   if($ct['produk']!=''){ $pbg3+=1;}
	   if($ct['proyek']!=''){ $pbg3+=1;}
	if($pbg3){	$r43=round((($ct['praktek']+$ct['produk']+$ct['proyek'])/$pbg3)); if($r43>=0){ echo $r43; $pbg+=1; } }
	$pbg3=0;
	?></div></td>
        <td><div align="center"><? 
		
		$nt1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41,tb_komptensi_inti WHERE tb_nilai_kd41.id_kompetensi=tb_komptensi_inti.id_ki AND tb_nilai_kd41.id_santri='$cnt[id_santri]' and tb_komptensi_inti.tahun_ajaran='$thaj' AND tb_komptensi_inti.semester='$sem' AND tb_komptensi_inti.kelas='$klsk' AND tb_komptensi_inti.mapel='$kdmpl' AND tb_komptensi_inti.guru='$idgurp' AND tb_nilai_kd41.kd='4.4'");
	   $ct=mysqli_fetch_assoc($nt1);
	   if($ct['praktek']!=''){ $pbg4+=1;}
	   if($ct['produk']!=''){ $pbg4+=1;}
	   if($ct['proyek']!=''){ $pbg4+=1;}
	if($pbg4){	 $r44=round((($ct['praktek']+$ct['produk']+$ct['proyek'])/$pbg4)); if($r44>=0){ echo $r44; $pbg+=1; }  }
	$pbg4=0;
	?></div></td>
        <td><div align="center"><? 
		
		$nt1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41,tb_komptensi_inti WHERE tb_nilai_kd41.id_kompetensi=tb_komptensi_inti.id_ki AND tb_nilai_kd41.id_santri='$cnt[id_santri]' and tb_komptensi_inti.tahun_ajaran='$thaj' AND tb_komptensi_inti.semester='$sem' AND tb_komptensi_inti.kelas='$klsk' AND tb_komptensi_inti.mapel='$kdmpl' AND tb_komptensi_inti.guru='$idgurp' AND tb_nilai_kd41.kd='4.5'");
	   $ct=mysqli_fetch_assoc($nt1);
	   if($ct['praktek']!=NULL){ $pbg5+=1;}
	   if($ct['produk']!=NULL){ $pbg5+=1;}
	   if($ct['proyek']!=NULL){ $pbg5+=1;}
	if($pbg5){	 $r45=round((($ct['praktek']+$ct['produk']+$ct['proyek'])/$pbg5)); if($r45!=0){ echo $r45; $pbg+=1;  } }
	$pbg5=0;
	?></div></td>
        <td><div align="center"><? 
		
		$nt1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41,tb_komptensi_inti WHERE tb_nilai_kd41.id_kompetensi=tb_komptensi_inti.id_ki AND tb_nilai_kd41.id_santri='$cnt[id_santri]' and tb_komptensi_inti.tahun_ajaran='$thaj' AND tb_komptensi_inti.semester='$sem' AND tb_komptensi_inti.kelas='$klsk' AND tb_komptensi_inti.mapel='$kdmpl' AND tb_komptensi_inti.guru='$idgurp' AND tb_nilai_kd41.kd='4.6'");
	   $ct=mysqli_fetch_assoc($nt1);
	   if($ct['praktek']!=NULL){ $pbg6+=1;}
	   if($ct['produk']!=NULL){ $pbg6+=1;}
	   if($ct['proyek']!=NULL){ $pbg6+=1;}
	if($pbg6){	$r46=round((($ct['praktek']+$ct['produk']+$ct['proyek'])/$pbg6)); if($r46!=0){ echo $r46; $pbg+=1; } } 
	$pbg6=0;
	?></div></td>
        <td><div align="center"><? 
		
		$nt1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41,tb_komptensi_inti WHERE tb_nilai_kd41.id_kompetensi=tb_komptensi_inti.id_ki AND tb_nilai_kd41.id_santri='$cnt[id_santri]' and tb_komptensi_inti.tahun_ajaran='$thaj' AND tb_komptensi_inti.semester='$sem' AND tb_komptensi_inti.kelas='$klsk' AND tb_komptensi_inti.mapel='$kdmpl' AND tb_komptensi_inti.guru='$idgurp' AND tb_nilai_kd41.kd='4.7'");
	   $ct=mysqli_fetch_assoc($nt1);
	   if($ct['praktek']!=NULL){ $pbg7+=1;}
	   if($ct['produk']!=NULL){ $pbg7+=1;}
	   if($ct['proyek']!=NULL){ $pbg7+=1;}
	if($pbg7){	 $r47=round((($ct['praktek']+$ct['produk']+$ct['proyek'])/$pbg7)); if($r47!=0){ echo $r47; $pbg+=1; } } 
	$pbg7=0;
	?></div></td>
        <td><div align="center"><? 
		
		$nt1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41,tb_komptensi_inti WHERE tb_nilai_kd41.id_kompetensi=tb_komptensi_inti.id_ki AND tb_nilai_kd41.id_santri='$cnt[id_santri]' and tb_komptensi_inti.tahun_ajaran='$thaj' AND tb_komptensi_inti.semester='$sem' AND tb_komptensi_inti.kelas='$klsk' AND tb_komptensi_inti.mapel='$kdmpl' AND tb_komptensi_inti.guru='$idgurp' AND tb_nilai_kd41.kd='4.8'");
	   $ct=mysqli_fetch_assoc($nt1);
	   if($ct['praktek']!=NULL){ $pbg8+=1;}
	   if($ct['produk']!=NULL){ $pbg8+=1;}
	   if($ct['proyek']!=NULL){ $pbg8+=1;}
	if($pbg8){	 $r48=round((($ct['praktek']+$ct['produk']+$ct['proyek'])/$pbg8)); if($r48!=0){ echo $r48; $pbg+=1; } } 
	$pbg8=0;
	?></div></td>
        <td><div align="center"><? 
		  
		  if($r48 or $r47 or $r46 or $r45 or $r44 or $r43 or $r42 or $r41) { $harian=round(($r48+$r47+$r46+$r45+$r44+$r43+$r42+$r41)/$pbg); echo $harian; }  
		  
		  if($r48 or $r47 or $r46 or $r45 or $r44 or $r43 or $r42 or $r41) { 		
  if($harian!=0){
  $qku7=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$cnt[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='$kdmpl' and kd='4'");
  $crp=mysqli_fetch_assoc($qku7);
  $cqk7=mysqli_num_rows($qku7);
  if($cqk7==0){
   $rek=mysqli_query($koneksi, "INSERT INTO tb_raport_k13 VALUES('',
   												 '$cnt[id_santri]',
												 '$thaj',
												 '$sem',
												 '$kdmpl',
												 '4',
												 '$harian',
												 '')"); 
 }else{
 mysqli_query($koneksi, "UPDATE tb_raport_k13 SET nir='$harian' WHERE id_rap='$crp[id_rap]' and tahun_ajaran='$thaj' and semester='$sem' ");
 }
 } }
		  
		  ?>
        </div></td>
        <td><div align="center">
          <? if($r48 or $r47 or $r46 or $r45 or $r44 or $r43 or $r42 or $r41) { 
		
		  if($harian < 75){ echo"D";  } 
		  if($harian >= 75 and $harian <=83 ){ echo"C";  } 
		  if($harian >= 84 and $harian <=92 ){ echo"B";  } 
		  if($harian >= 93 and $harian <=100){ echo"A";  }
		 } ?>
        </div></td>
        <td><div align="justify">
          <?
		if($r48 or $r47 or $r46 or $r45 or $r44 or $r43 or $r42 or $r41) {
		
				
if($r41<=100 and $r41>=90) { echo"Sangat terampil $kdct1 "; $pyp+=1; if($pyp >=2) { $gbds1=", $kdct1"; }else{$gbds1="<b>Sangat Terampil</b> $kdct1"; }$pyp=0;}else{ $gbds1=""; }
if($r42<=100 and $r42>=90) { echo"Sangat terampil $kdct2 "; $pyp+=1; if($pyp >=2) { $gbds2=", $kdct2"; }else{$gbds2="<b>Sangat Terampil</b> $kdct2"; }$pyp=0;}else{ $gbds2=""; }
if($r43<=100 and $r43>=90) { echo"Sangat terampil $kdct3 "; $pyp+=1; if($pyp >=2) { $gbds3=", $kdct3"; }else{$gbds3="<b>Sangat Terampil</b> $kdct3"; }$pyp=0;}else{ $gbds3=""; }
if($r44<=100 and $r44>=90) { echo"Sangat terampil $kdct4 "; $pyp+=1; if($pyp >=2) { $gbds4=", $kdct4"; }else{$gbds4="<b>Sangat Terampil</b> $kdct4"; }$pyp=0;}else{ $gbds4=""; }
if($r45<=100 and $r45>=90) { echo"Sangat terampil $kdct5 "; $pyp+=1; if($pyp >=2) { $gbds5=", $kdct5"; }else{$gbds5="<b>Sangat Terampil</b> $kdct5"; }$pyp=0;}else{ $gbds5=""; }
if($r46<=100 and $r46>=90) { echo"Sangat terampil $kdct6 "; $pyp+=1; if($pyp >=2) { $gbds6=", $kdct6"; }else{$gbds6="<b>Sangat Terampil</b> $kdct6"; }$pyp=0;}else{ $gbds6=""; }
if($r47<=100 and $r47>=90) { echo"Sangat terampil $kdct7 "; $pyp+=1; if($pyp >=2) { $gbds7=", $kdct7"; }else{$gbds7="<b>Sangat Terampil</b> $kdct7"; }$pyp=0;}else{ $gbds7=""; }
if($r48<=100 and $r48>=90) { echo"Sangat terampil $kdct8 "; $pyp+=1; if($pyp >=2) { $gbds8=", $kdct8"; }else{$gbds8="<b>Sangat Terampil</b> $kdct8"; }$pyp=0;}else{ $gbds8=""; }
	
if($r41 <=89 and $r41 >=80) { echo " Terampil $kdct1 "; $pyp2+=1; if($pyp2 >=2) { $gbds9=", $kdct1"; }else{ $gbds9="<br /> <b>Terampil</b> $kdct1"; }$pyp2=0;}else{ $gbds9=""; }
if($r42 <=89 and $r42 >=80) { echo " Terampil $kdct2 "; $pyp2+=1; if($pyp2 >=2) { $gbds10=", $kdct2"; }else{ $gbds10="<br /><b>Terampil</b> $kdct2"; }$pyp2=0;}else{ $gbds10=""; }
if($r43 <=89 and $r43 >=80) { echo " Terampil $kdct3 "; $pyp2+=1; if($pyp2 >=2) { $gbds11=", $kdct3"; }else{ $gbds11="<br /><b>Terampil</b> $kdct3"; }$pyp2=0;}else{ $gbds11=""; }
if($r44 <=89 and $r44 >=80) { echo " Terampil $kdct4 "; $pyp2+=1; if($pyp2 >=2) { $gbds12=", $kdct4"; }else{ $gbds12="<br /><b>Terampil</b> $kdct4"; }$pyp2=0;}else{ $gbds12=""; }
if($r45 <=89 and $r45 >=80) { echo " Terampil $kdct5 "; $pyp2+=1; if($pyp2 >=2) { $gbds13=", $kdct5"; }else{ $gbds13="<br /><b>Terampil</b> $kdct5"; }$pyp2=0;}else{ $gbds13=""; }
if($r46 <=89 and $r46 >=80) { echo " Terampil $kdct6 "; $pyp2+=1; if($pyp2 >=2) { $gbds14=", $kdct6"; }else{ $gbds14="<br /><b>Terampil</b> $kdct6"; }$pyp2=0;}else{ $gbds14=""; }
if($r47 <=89 and $r47 >=80) { echo " Terampil $kdct7 "; $pyp2+=1; if($pyp2 >=2) { $gbds15=", $kdct7"; }else{ $gbds15="<br /><b>Terampil</b> $kdct7"; }$pyp2=0;}else{ $gbds15=""; }
if($r48 <=89 and $r48 >=80) { echo " Terampil $kdct8 "; $pyp2+=1; if($pyp2 >=2) { $gbds16=", $kdct8"; }else{ $gbds16="<br /><b>Terampil</b> $kdct8"; }$pyp2=0;}else{ $gbds16=""; }
				
if($r41<=79 and $r41>=10) { echo " Mulai terampil $kdct1 "; $pyp3+=1; if($pyp3 >=2){ $gbds17=", $kdct1 "; }else{ $gbds17="<br /><b>Mulai trampil</b> $kdct1"; }$pyp3=0;}else{ $gbds17=""; }
if($r42<=79 and $r42>=10) { echo " Mulai terampil $kdct2 "; $pyp3+=1; if($pyp3 >=2){ $gbds18=", $kdct2 "; }else{ $gbds18="<br /><b>Mulai trampil</b> $kdct2"; }$pyp3=0;}else{ $gbds18=""; }
if($r43<=79 and $r43>=10) { echo " Mulai terampil $kdct3 "; $pyp3+=1; if($pyp3 >=2){ $gbds19=", $kdct3 "; }else{ $gbds19="<br /><b>Mulai trampil</b> $kdct3"; }$pyp3=0;}else{ $gbds19=""; }
if($r44<=79 and $r44>=10) { echo " Mulai terampil $kdct4 "; $pyp3+=1; if($pyp3 >=2){ $gbds20=", $kdct4 "; }else{ $gbds20="<br /><b>Mulai trampil</b> $kdct4"; }$pyp3=0;}else{ $gbds20=""; }
if($r45<=79 and $r45>=10) { echo " Mulai terampil $kdct5 "; $pyp3+=1; if($pyp3 >=2){ $gbds21=", $kdct5 "; }else{ $gbds21="<br /><b>Mulai trampil</b> $kdct5"; }$pyp3=0;}else{ $gbds21=""; }
if($r46<=79 and $r46>=10) { echo " Mulai terampil $kdct6 "; $pyp3+=1; if($pyp3 >=2){ $gbds22=", $kdct6 "; }else{ $gbds22="<br /><b>Mulai trampil</b> $kdct6"; }$pyp3=0;}else{ $gbds22=""; }
if($r47<=79 and $r47>=10) { echo " Mulai terampil $kdct7 "; $pyp3+=1; if($pyp3 >=2){ $gbds23=", $kdct7 "; }else{ $gbds23="<br /><b>Mulai trampil</b> $kdct7"; }$pyp3=0;}else{ $gbds23=""; }
if($r48<=79 and $r48>=10) { echo " Mulai terampil $kdct8 "; $pyp3+=1; if($pyp3 >=2){ $gbds24=", $kdct8 "; }else{ $gbds24="<br /><b>Mulai trampil</b> $kdct8"; }$pyp3=0;}else{ $gbds24=""; }
		
		
		
		
		$gkdes="$gbds1 $gbds2 $gbds3 $gbds4 $gbds5 $gbds6 $gbds7 $gbds8 $gbds9 $gbds10 $gbds11 $gbds12 $gbds13 $gbds14 $gbds15 $gbds16 $gbds17 $gbds18 $gbds19 $gbds20 $gbds21  
		 $gbds22 $gbds23 $gbds24";
			
		if($gkdes!=""){
		$qku7=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$cnt[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='$kdmpl' and kd='4' ");
        $crp=mysqli_fetch_assoc($qku7);
		mysqli_query($koneksi, "UPDATE tb_raport_k13 SET deskripsi='$gkdes' WHERE id_rap='$crp[id_rap]' ");
		}  
		
		}
		?></div></td>
      </tr>
	  <? $no+=1; $pbg=0; } ?>
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
