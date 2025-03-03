<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {font-size: 10px}
.style2 {font-size: 12px; }
.style5 {	font-size: 24px;
	font-weight: bold;
}
.style3 {font-size: 16px}
.style5 {	font-size: 14px;
	font-weight: bold;
}
.style6 {font-size: 24px}
-->
</style>
</head>
<?
include("../koneksi.php");

 $thaj=$_COOKIE['thaj'];
 $sem=$_COOKIE['sem'];
 $idgurp=$_COOKIE['idgurp'];
 $klsk=$_GET['klsk'];
 $klsk2=$_GET['klsk2'];
 $kdmpl=$_GET['kdmpl']; 
?>
<body>
<table width="1200" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="6" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="7%" valign="top"><img src="../images/LOGO-SHOID2.jpg" width="95" height="108" /></td>
                    <td width="1%">&nbsp;</td>
                    <td width="92%"><span class="style3">YAYASAN SHOHWATUL IS'AD</span><br />
                        <span class="style6">SMP-SMA IT SHOHWATUL IS'AD</span><br />
                        <br />
                        <br />
                        <span class="style2">Alamat:  Jl. Poros Padanglampe&nbsp; KM  . 3&nbsp; Ma&rsquo;rang&nbsp;  Pangkep&nbsp; Sulawesi -Selatan 90645  P.O. Box 300<br />
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
        <td colspan="6"><div align="center" class="style5">REKAP NILAI PENGETAHUAN, KETERAMPILAN, SIKAP SPRITUAL DAN SOSIAL </div></td>
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
        <td width="12%">MATA PELAJARAN </td>
        <td width="2%">:</td>
        <td width="51%"><?
		$ntu=mysqli_query($koneksi, "SELECT kd_mp,nama_mp FROM mata_pelajaran WHERE kd_mp='$kdmpl'");
	    $ctk=mysqli_fetch_assoc($ntu);
		echo $ctk['nama_mp'];
		?></td>
        <td width="1%">&nbsp;</td>
        <td width="14%">SEMSTER</td>
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
        <td>KKM </td>
        <td>&nbsp;</td>
      </tr>
      
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" valign="top"><table width="1111" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <td width="29" rowspan="2"><div align="center" class="style2">No</div>          <div align="center"><span class="style1"><span class="style2"></span></span></div></td>
        <td width="198" rowspan="2"><div align="center" class="style2">Nama</div>          <div align="center"><span class="style1"><span class="style2"></span></span></div></td>
        <td colspan="3"><div align="center" class="style2">Pengetahuan</div>          <div align="center"><span class="style1"><span class="style2"></span></span></div>          <div align="center"><span class="style1"><span class="style2"></span></span></div></td>
        <td colspan="3"><div align="center" class="style2">Keterampilan</div>          <div align="center" class="style2"></div>          <div align="center" class="style2"></div></td>
        <td colspan="2"><div align="center" class="style2">S.Spritual</div>          <div align="center" class="style2"></div></td>
        <td colspan="2"><div align="center" class="style2">S. Sosial </div>          <div align="center" class="style2"></div></td>
        </tr>
      <tr>
        <td width="36"><div align="center"><span class="style1"><span class="style2"></span></span><span class="style2">0-100</span></div></td>
        <td width="34"><div align="center"><span class="style1"><span class="style2"></span></span>Huruf</div></td>
        <td width="297"><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
        <td width="36"><div align="center" class="style2">0-100</div></td>
        <td width="36"><div align="center" class="style2">Huruf</div></td>
        <td width="304"><div align="center"><span class="style1"><span class="style2"><span class="style2"></span></span></span></div></td>
        <td width="36"><div align="center" class="style2">Angka</div></td>
        <td width="35"><div align="center" class="style2">Huruf</div></td>
        <td width="35"><div align="center" class="style2">Angka</div></td>
        <td width="35"><div align="center" class="style2">Huruf</div></td>
      </tr>
	   <? $no=1; 
		$ntgs=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='$klsk2' AND status='a' ORDER BY nama");
	    while($cnt=mysqli_fetch_assoc($ntgs)){
		
	  	  
		?>
      <tr>
        <td><div align="center"><? echo $no; ?></div></td>
        <td><div align="left"><? echo $cnt['nama']; ?></div></td>
        <td><div align="center">
		<?
		$qku7=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$cnt[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='$kdmpl' and kd='3' ");
        $crp=mysqli_fetch_assoc($qku7);
		echo $crp['nir']; 
		
		?>
		</div></td>
        <td><div align="center"><?
		if($crp['nir']){
				
		  if($crp['nir'] < 75){ echo"D";  } 
		  if($crp['nir'] >= 75 and $crp['nir'] <=83 ){ echo"C";  } 
		  if($crp['nir'] >= 84 and $crp['nir'] <=92 ){ echo"B";  } 
		  if($crp['nir'] >= 93 and $crp['nir'] <=100){ echo"A";  }
		  }
		?></div></td>
        <td><div align="justify"><? echo $crp['deskripsi']; ?></div></td>
        <td><div align="center">
          <?
		$qku8=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$cnt[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='$kdmpl' and kd='4' ");
        $crp2=mysqli_fetch_assoc($qku8);
		echo $crp2['nir']; 
		
		?>
        </div></td>
        <td><div align="center">
          <?
		  if($crp2['nir']){
		  if($crp2['nir'] < 75){ echo"D";  } 
		  if($crp2['nir'] >= 75 and $crp2['nir'] <=83 ){ echo"C";  } 
		  if($crp2['nir'] >= 84 and $crp2['nir'] <=92 ){ echo"B";  } 
		  if($crp2['nir'] >= 93 and $crp2['nir'] <=100){ echo"A";  }
		 }
		?>
        </div></td>
        <td><div align="justify"><? echo $crp2['deskripsi']; ?></div></td>
        <td><div align="center"><?
		$qku=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ki1 WHERE  tahun_ajaran='$thaj' and semester='$sem' and id_santri='$cnt[id_santri]' and mapel='$kdmpl'");
        $cqk=mysqli_fetch_assoc($qku);
		$nagk=round(($cqk['n1']+$cqk['n2']+$cqk['n3']+$cqk['n4'])/4);
		if($nagk){
		 echo $nagk; }
		?></div></td>
        <td><div align="center"><? 
		$nagk2=round($cqk['n1']+$cqk['n2']+$cqk['n3']+$cqk['n4']);
		if($nagk2  <=16 and $nagk2 >=13) { echo "A"; }
		if($nagk2  <=12 and $nagk2 >=8) { echo "B"; }
		if($nagk2  <=7 and $nagk2 >=7) { echo "C"; }
		 ?></div></td>
        <td><div align="center">
          <?
		$qku3=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ki2 WHERE  tahun_ajaran='$thaj' and semester='$sem' and id_santri='$cnt[id_santri]' and mapel='$kdmpl'");
        $cqk3=mysqli_fetch_assoc($qku3);
		$nagk2=round(($cqk3['s1']+$cqk3['s2']+$cqk3['s3']+$cqk3['s4']+$cqk3['s5']+$cqk3['s6']+$cqk3['s7'])/7); 
		if($nagk2){
		echo $nagk2; }
		?>
        </div></td>
        <td><div align="center">
          <? 
		$nagk3=round($cqk3['s1']+$cqk3['s2']+$cqk3['s3']+$cqk3['s4']+$cqk3['s5']+$cqk3['s6']+$cqk3['s7']);
		if($nagk3  <=28 and $nagk3 >=23) { echo "A"; }
		if($nagk3  <=22 and $nagk3 >=14) { echo "B"; }
		if($nagk3  <=13 and $nagk3 >=1) { echo "C"; }
		 ?>
        </div></td>
      </tr>
	  <? $no+=1; } ?>
      
      
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
