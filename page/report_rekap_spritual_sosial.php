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
<table width="1100" border="0" cellspacing="0" cellpadding="0">
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
        <td colspan="6"><div align="center" class="style5">REKAP NILAI PENGETAHUAN DAN KETERAMPILAN SMP IT SHOHWATUL IS'AD  </div></td>
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
        <td width="10%">KELAS</td>
        <td width="1%">:</td>
        <td width="54%"><? 
		
		echo $klsk2;
		 ?></td>
        <td width="4%">&nbsp;</td>
        <td width="11%">SEMSTER</td>
        <td width="20%">: <? echo $sem; ?></td>
      </tr>
      <tr>
        <td>WALI KELAS </td>
        <td>:</td>
        <td><?
		 
	      $tampi5=mysqli_query($koneksi, "SELECT id_gp,nip,nama_gp FROM guru_pegawai WHERE id_gp='$idgurp' ");
          $tp5=mysqli_fetch_assoc($tampi5);
		  echo $tp5['nama_gp']; 
	    ?></td>
        <td>&nbsp;</td>
        <td>TAHUN PELAJARAN </td>
        <td>: <? echo $thaj; ?></td>
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
        <td valign="top">&nbsp;</td>
        <td valign="top">&nbsp;</td>
        <td>&nbsp;</td>
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
    <td valign="top"><table width="1300" border="1" cellspacing="0" cellpadding="0">
      
      
      <tr>
        <td width="17" rowspan="3"><div align="center">NO</div></td>
        <td width="29" rowspan="3"><div align="center">NIS</div></td>
        <td width="154" rowspan="3"><div align="center">NAMA</div></td>
        <td colspan="11"><div align="center">SIKAP SPRITUAL  </div></td>
        <td colspan="11"><div align="center">SIKAP SOSIAL </div></td>
        <td colspan="6"><div align="center">PREDIKAT DAN DESKRIPSI SIKAP </div></td>
        </tr>
      <tr>
        <td><div align="center">PABP</div></td>
        <td><div align="center">PPKN</div></td>
        <td><div align="center">BIND</div></td>
        <td width="22"><div align="center">MAT</div></td>
        <td width="17"><div align="center">IPA</div></td>
        <td width="17"><div align="center">IPS</div></td>
        <td width="24"><div align="center">BING</div></td>
        <td width="28"><div align="center">SNBD</div></td>
        <td width="26"><div align="center">PJOK</div></td>
        <td width="20"><div align="center">PKR</div></td>
        <td width="21"><div align="center">MLK</div></td>
        <td width="27"><div align="center">PABP</div></td>
        <td width="26"><div align="center">PPKN</div></td>
        <td width="23"><div align="center">BIND</div></td>
        <td width="22"><div align="center">MAT</div></td>
        <td width="17"><div align="center">IPA</div></td>
        <td width="17"><div align="center">IPS</div></td>
        <td width="24"><div align="center">BING</div></td>
        <td width="28"><div align="center">SNBD</div></td>
        <td width="26"><div align="center">PJOK</div></td>
        <td width="20"><div align="center">PKR</div></td>
        <td width="21"><div align="center">MLK</div></td>
        <td width="23" rowspan="2"><div align="center">1</div></td>
        <td width="22" rowspan="2"><div align="center">2</div></td>
        <td width="258" rowspan="2"><div align="center">SPRITUAL</div></td>
        <td width="21" rowspan="2"><div align="center">1</div></td>
        <td width="23" rowspan="2"><div align="center">2</div></td>
        <td width="237" rowspan="2"><div align="center">SOSIAL</div></td>
        </tr>
      <tr>
        <td width="27"><div align="center">1</div></td>
        <td width="26"><div align="center">2</div></td>
        <td width="23"><div align="center">3</div></td>
        <td><div align="center">4</div></td>
        <td><div align="center">5</div></td>
        <td><div align="center">6</div></td>
        <td><div align="center">7</div></td>
        <td><div align="center">8</div></td>
        <td><div align="center">9</div></td>
        <td><div align="center">10</div></td>
        <td><div align="center">11</div></td>
        <td><div align="center">1</div></td>
        <td><div align="center">2</div></td>
        <td><div align="center">3</div></td>
        <td><div align="center">4</div></td>
        <td><div align="center">5</div></td>
        <td><div align="center">6</div></td>
        <td><div align="center">7</div></td>
        <td><div align="center">8</div></td>
        <td><div align="center">9</div></td>
        <td><div align="center">10</div></td>
        <td><div align="center">11</div></td>
      </tr>
     
      <tr>
        <td colspan="31" height="2"></td>
        </tr>
	   <?  
	     	  	 		
		$no=1;
		$ntgs=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='$klsk2' AND status='a' ORDER BY nama");
	    while($cnt=mysqli_fetch_assoc($ntgs)){
		
		
		?>
      <tr>
        <td><div align="center"><? echo $no; ?></div></td>
        <td><div align="center"><? echo $cnt['nis']; ?> </div></td>
        <td>&nbsp; <? echo $cnt['nama']; ?></td>
        
        <td><div align="center"><? 
		$qku7=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ki1 WHERE  tahun_ajaran='$thaj' and semester='$sem' and id_santri='$cnt[id_santri]' and mapel='MP006'");
        $cqk7=mysqli_fetch_assoc($qku7);
		$nb=$cqk7['n1']+$cqk7['n2']+$cqk7['n3']+$cqk7['n4']; 
		
		if($nb >=13 and $nb <=16 ){ echo "A"; }
		if($nb >=8 and $nb <=12 ){ echo "B"; }
		if($nb >=1 and $nb <=7 ){ echo "C"; }
		 ?></div></td>
        <td><div align="center">
          <? 
		$qku7=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ki1 WHERE  tahun_ajaran='$thaj' and semester='$sem' and id_santri='$cnt[id_santri]' and mapel='MD013'");
        $cqk7=mysqli_fetch_assoc($qku7);
		$nb=$cqk7['n1']+$cqk7['n2']+$cqk7['n3']+$cqk7['n4']; 
		if($nb >=13 and $nb <=16 ){ echo "A"; }
		if($nb >=8 and $nb <=12 ){ echo "B"; }
		if($nb >=1 and $nb <=7 ){ echo "C"; }
		 ?>
        </div></td>
        <td><div align="center">
          <? 
		$qku7=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ki1 WHERE  tahun_ajaran='$thaj' and semester='$sem' and id_santri='$cnt[id_santri]' and mapel='MD003'");
        $cqk7=mysqli_fetch_assoc($qku7);
		$nb=$cqk7['n1']+$cqk7['n2']+$cqk7['n3']+$cqk7['n4']; 
		if($nb >=13 and $nb <=16 ){ echo "A"; }
		if($nb >=8 and $nb <=12 ){ echo "B"; }
		if($nb >=1 and $nb <=7 ){ echo "C"; }
		 ?>
        </div></td>
       
       
        <td><div align="center">
          <? 
		$qku7=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ki1 WHERE  tahun_ajaran='$thaj' and semester='$sem' and id_santri='$cnt[id_santri]' and mapel='MD005'");
        $cqk7=mysqli_fetch_assoc($qku7);
		$nb=$cqk7['n1']+$cqk7['n2']+$cqk7['n3']+$cqk7['n4']; 
		if($nb >=13 and $nb <=16 ){ echo "A"; }
		if($nb >=8 and $nb <=12 ){ echo "B"; }
		if($nb >=1 and $nb <=7 ){ echo "C"; }
		 ?>
        </div></td>
        <td><div align="center">
          <? 
		$qku7=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ki1 WHERE  tahun_ajaran='$thaj' and semester='$sem' and id_santri='$cnt[id_santri]' and mapel='MD006'");
        $cqk7=mysqli_fetch_assoc($qku7);
		$nb=$cqk7['n1']+$cqk7['n2']+$cqk7['n3']+$cqk7['n4']; 
		if($nb >=13 and $nb <=16 ){ echo "A"; }
		if($nb >=8 and $nb <=12 ){ echo "B"; }
		if($nb >=1 and $nb <=7 ){ echo "C"; }
		 ?>
        </div></td>
        <td><div align="center">
          <? 
		$qku7=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ki1 WHERE  tahun_ajaran='$thaj' and semester='$sem' and id_santri='$cnt[id_santri]' and mapel='MD007'");
        $cqk7=mysqli_fetch_assoc($qku7);
		$nb=$cqk7['n1']+$cqk7['n2']+$cqk7['n3']+$cqk7['n4']; 
		if($nb >=13 and $nb <=16 ){ echo "A"; }
		if($nb >=8 and $nb <=12 ){ echo "B"; }
		if($nb >=1 and $nb <=7 ){ echo "C"; }
		 ?>
        </div></td>
       
        
        <td><div align="center">
          <? 
		$qku7=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ki1 WHERE  tahun_ajaran='$thaj' and semester='$sem' and id_santri='$cnt[id_santri]' and mapel='MD004'");
        $cqk7=mysqli_fetch_assoc($qku7);
		$nb=$cqk7['n1']+$cqk7['n2']+$cqk7['n3']+$cqk7['n4']; 
		if($nb >=13 and $nb <=16 ){ echo "A"; }
		if($nb >=8 and $nb <=12 ){ echo "B"; }
		if($nb >=1 and $nb <=7 ){ echo "C"; }
		 ?>
        </div></td>
        <td><div align="center">
          <? 
		$qku7=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ki1 WHERE  tahun_ajaran='$thaj' and semester='$sem' and id_santri='$cnt[id_santri]' and mapel='MD012'");
        $cqk7=mysqli_fetch_assoc($qku7);
		$nb=$cqk7['n1']+$cqk7['n2']+$cqk7['n3']+$cqk7['n4']; 
		if($nb >=13 and $nb <=16 ){ echo "A"; }
		if($nb >=8 and $nb <=12 ){ echo "B"; }
		if($nb >=1 and $nb <=7 ){ echo "C"; }
		 ?>
        </div></td>
        <td><div align="center">
          <? 
		$qku7=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ki1 WHERE  tahun_ajaran='$thaj' and semester='$sem' and id_santri='$cnt[id_santri]' and mapel='MD009'");
        $cqk7=mysqli_fetch_assoc($qku7);
		$nb=$cqk7['n1']+$cqk7['n2']+$cqk7['n3']+$cqk7['n4']; 
		if($nb >=13 and $nb <=16 ){ echo "A"; }
		if($nb >=8 and $nb <=12 ){ echo "B"; }
		if($nb >=1 and $nb <=7 ){ echo "C"; }
		 ?>
        </div></td>
        
        
        <td><div align="center">
          <? 
		$qku7=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ki1 WHERE  tahun_ajaran='$thaj' and semester='$sem' and id_santri='$cnt[id_santri]' and mapel='MD011'");
        $cqk7=mysqli_fetch_assoc($qku7);
		$nb=$cqk7['n1']+$cqk7['n2']+$cqk7['n3']+$cqk7['n4']; 
		if($nb >=13 and $nb <=16 ){ echo "A"; }
		if($nb >=8 and $nb <=12 ){ echo "B"; }
		if($nb >=1 and $nb <=7 ){ echo "C"; }
		 ?>
        </div></td>
        <td><div align="center">
          <? 
		$qku7=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ki1 WHERE  tahun_ajaran='$thaj' and semester='$sem' and id_santri='$cnt[id_santri]' and mapel='MP003'");
        $cqk7=mysqli_fetch_assoc($qku7);
		$nb=$cqk7['n1']+$cqk7['n2']+$cqk7['n3']+$cqk7['n4']; 
		if($nb >=13 and $nb <=16 ){ echo "A"; }
		if($nb >=8 and $nb <=12 ){ echo "B"; }
		if($nb >=1 and $nb <=7 ){ echo "C"; }
		 ?>
        </div></td>
        <td><div align="center">
          <? 
		 $qku7=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ki2 WHERE  tahun_ajaran='$thaj' and semester='$sem' and id_santri='$cnt[id_santri]' and mapel='MP006'");
         $cqk7=mysqli_fetch_assoc($qku7);
		$nb=$cqk7['s1']+$cqk7['s2']+$cqk7['s3']+$cqk7['s4']+$cqk7['s5']+$cqk7['s6']+$cqk7['s7']; 
		if($nb >=23 and $nb <=28 ){ echo "A"; }
		if($nb >=14 and $nb <=22 ){ echo "B"; }
		if($nb >=1 and $nb <=13 ){ echo "C"; }
		 ?>
        </div></td>
        
        
        <td><div align="center">
          <? 
		 $qku7=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ki2 WHERE  tahun_ajaran='$thaj' and semester='$sem' and id_santri='$cnt[id_santri]' and mapel='MD013'");
         $cqk7=mysqli_fetch_assoc($qku7);
		$nb=$cqk7['s1']+$cqk7['s2']+$cqk7['s3']+$cqk7['s4']+$cqk7['s5']+$cqk7['s6']+$cqk7['s7']; 
		if($nb >=23 and $nb <=28 ){ echo "A"; }
		if($nb >=14 and $nb <=22 ){ echo "B"; }
		if($nb >=1 and $nb <=13 ){ echo "C"; }
		 ?>
        </div></td>
        <td><div align="center">
          <? 
		 $qku7=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ki2 WHERE  tahun_ajaran='$thaj' and semester='$sem' and id_santri='$cnt[id_santri]' and mapel='MD003'");
         $cqk7=mysqli_fetch_assoc($qku7);
		$nb=$cqk7['s1']+$cqk7['s2']+$cqk7['s3']+$cqk7['s4']+$cqk7['s5']+$cqk7['s6']+$cqk7['s7']; 
		if($nb >=23 and $nb <=28 ){ echo "A"; }
		if($nb >=14 and $nb <=22 ){ echo "B"; }
		if($nb >=1 and $nb <=13 ){ echo "C"; }
		 ?>
        </div></td>
        <td><div align="center">
          <? 
		 $qku7=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ki2 WHERE  tahun_ajaran='$thaj' and semester='$sem' and id_santri='$cnt[id_santri]' and mapel='MD005'");
         $cqk7=mysqli_fetch_assoc($qku7);
		$nb=$cqk7['s1']+$cqk7['s2']+$cqk7['s3']+$cqk7['s4']+$cqk7['s5']+$cqk7['s6']+$cqk7['s7']; 
		if($nb >=23 and $nb <=28 ){ echo "A"; }
		if($nb >=14 and $nb <=22 ){ echo "B"; }
		if($nb >=1 and $nb <=13 ){ echo "C"; }
		 ?>
        </div></td>
        
        
        <td><div align="center">
          <? 
		 $qku7=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ki2 WHERE  tahun_ajaran='$thaj' and semester='$sem' and id_santri='$cnt[id_santri]' and mapel='MD006'");
         $cqk7=mysqli_fetch_assoc($qku7);
		$nb=$cqk7['s1']+$cqk7['s2']+$cqk7['s3']+$cqk7['s4']+$cqk7['s5']+$cqk7['s6']+$cqk7['s7']; 
		if($nb >=23 and $nb <=28 ){ echo "A"; }
		if($nb >=14 and $nb <=22 ){ echo "B"; }
		if($nb >=1 and $nb <=13 ){ echo "C"; }
		 ?>
        </div></td>
        <td><div align="center">
          <? 
		 $qku7=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ki2 WHERE  tahun_ajaran='$thaj' and semester='$sem' and id_santri='$cnt[id_santri]' and mapel='MD007'");
         $cqk7=mysqli_fetch_assoc($qku7);
		$nb=$cqk7['s1']+$cqk7['s2']+$cqk7['s3']+$cqk7['s4']+$cqk7['s5']+$cqk7['s6']+$cqk7['s7']; 
		if($nb >=23 and $nb <=28 ){ echo "A"; }
		if($nb >=14 and $nb <=22 ){ echo "B"; }
		if($nb >=1 and $nb <=13 ){ echo "C"; }
		 ?>
        </div></td>
        <td><div align="center">
          <? 
		 $qku7=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ki2 WHERE  tahun_ajaran='$thaj' and semester='$sem' and id_santri='$cnt[id_santri]' and mapel='MD004'");
         $cqk7=mysqli_fetch_assoc($qku7);
		$nb=$cqk7['s1']+$cqk7['s2']+$cqk7['s3']+$cqk7['s4']+$cqk7['s5']+$cqk7['s6']+$cqk7['s7']; 
		if($nb >=23 and $nb <=28 ){ echo "A"; }
		if($nb >=14 and $nb <=22 ){ echo "B"; }
		if($nb >=1 and $nb <=13 ){ echo "C"; }
		 ?>
        </div></td>
        
       
        <td><div align="center">
          <? 
		 $qku7=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ki2 WHERE  tahun_ajaran='$thaj' and semester='$sem' and id_santri='$cnt[id_santri]' and mapel='MD012'");
         $cqk7=mysqli_fetch_assoc($qku7);
		$nb=$cqk7['s1']+$cqk7['s2']+$cqk7['s3']+$cqk7['s4']+$cqk7['s5']+$cqk7['s6']+$cqk7['s7']; 
		if($nb >=23 and $nb <=28 ){ echo "A"; }
		if($nb >=14 and $nb <=22 ){ echo "B"; }
		if($nb >=1 and $nb <=13 ){ echo "C"; }
		 ?>
        </div></td>
        <td><div align="center">
          <? 
		 $qku7=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ki2 WHERE  tahun_ajaran='$thaj' and semester='$sem' and id_santri='$cnt[id_santri]' and mapel='MD009'");
         $cqk7=mysqli_fetch_assoc($qku7);
		$nb=$cqk7['s1']+$cqk7['s2']+$cqk7['s3']+$cqk7['s4']+$cqk7['s5']+$cqk7['s6']+$cqk7['s7']; 
		if($nb >=23 and $nb <=28 ){ echo "A"; }
		if($nb >=14 and $nb <=22 ){ echo "B"; }
		if($nb >=1 and $nb <=13 ){ echo "C"; }
		 ?>
        </div></td>
        <td><div align="center">
          <? 
		 $qku7=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ki2 WHERE  tahun_ajaran='$thaj' and semester='$sem' and id_santri='$cnt[id_santri]' and mapel='MD011'");
         $cqk7=mysqli_fetch_assoc($qku7);
		$nb=$cqk7['s1']+$cqk7['s2']+$cqk7['s3']+$cqk7['s4']+$cqk7['s5']+$cqk7['s6']+$cqk7['s7']; 
		if($nb >=23 and $nb <=28 ){ echo "A"; }
		if($nb >=14 and $nb <=22 ){ echo "B"; }
		if($nb >=1 and $nb <=13 ){ echo "C"; }
		 ?>
        </div></td>
        
       
        <td><div align="center">
          <? 
		 $qku7=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ki2 WHERE  tahun_ajaran='$thaj' and semester='$sem' and id_santri='$cnt[id_santri]' and mapel='MP003'");
         $cqk7=mysqli_fetch_assoc($qku7);
		$nb=$cqk7['s1']+$cqk7['s2']+$cqk7['s3']+$cqk7['s4']+$cqk7['s5']+$cqk7['s6']+$cqk7['s7']; 
		if($nb >=23 and $nb <=28 ){ echo "A"; }
		if($nb >=14 and $nb <=22 ){ echo "B"; }
		if($nb >=1 and $nb <=13 ){ echo "C"; }
		 ?>
        </div></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>
          <div align="justify">
            <? 
		$csp=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ki1 WHERE  tahun_ajaran='$thaj' and semester='$sem' and id_santri='$cnt[id_santri]' and mapel='MP006'");
        $cspr=mysqli_fetch_assoc($csp);
		
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
            </div></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>
          <div align="justify">
            <? 
		 $sos=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ki2 WHERE  tahun_ajaran='$thaj' and semester='$sem' and id_santri='$cnt[id_santri]' and mapel='MD013'");
         $cso=mysqli_fetch_assoc($sos);
		 
		 if($cso['s1'] or $cso['s2'] or $cso['s3'] or $cso['s4'] or $cso['s5'] or $cso['s6'] or $cso['s7']) {echo "Ananda $cnt[nama] "; }
		if($cso['s1']==4) { echo "Sangat baik dalam sikap jujur, "; }
		if($cso['s2']==4) { echo "Sangat baik dalam sikap disiplin, "; }
		if($cso['s3']==4) { echo "Sangat baik dalam sikap tanggung jawab, "; }
		if($cso['s4']==4) { echo "Sangat baik dalam sikap toleransi, "; }
		if($cso['s5']==4) { echo "Sangat baik dalam sikap gotong royong, "; }
		if($cso['s6']==4) { echo "Sangat baik dalam sikap santun, "; }
		if($cso['s7']==4) { echo "Sangat baik dalam sikap percaya diri, "; }
		
		if($cso['s1']==3) { echo "baik dalam sikap jujur, "; }
		if($cso['s2']==3) { echo "baik dalam sikap disiplin, "; }
		if($cso['s3']==3) { echo "baik dalam sikap tanggung jawab, "; }
		if($cso['s4']==3) { echo "baik dalam sikap toleransi, "; }
		if($cso['s5']==3) { echo "baik dalam sikap gotong royong, "; }
		if($cso['s6']==3) { echo "baik dalam sikap santun, "; }
		if($cso['s7']==3) { echo "baik dalam sikap percaya diri, "; }
		
		if($cso['s1']==2) { echo "mulai berkembang dalam sikap jujur, "; }
		if($cso['s2']==2) { echo "mulai berkembang dalam sikap disiplin, "; }
		if($cso['s3']==2) { echo "mulai berkembang dalam sikap tanggung jawab, "; }
		if($cso['s4']==2) { echo "mulai berkembang dalam sikap toleransi, "; }
		if($cso['s5']==2) { echo "mulai berkembang dalam sikap gotong royong, "; }
		if($cso['s6']==2) { echo "mulai berkembang dalam sikap santun, "; }
		if($cso['s7']==2) { echo "mulai berkembang dalam sikap percaya diri, "; }
		
		if($cso['s1']==1) { echo "tidak berkembang dalam sikap jujur, "; }
		if($cso['s2']==1) { echo "tidak berkembang dalam sikap disiplin, "; }
		if($cso['s3']==1) { echo "tidak berkembang dalam sikap tanggung jawab, "; }
		if($cso['s4']==1) { echo "tidak berkembang dalam sikap toleransi, "; }
		if($cso['s5']==1) { echo "tidak berkembang dalam sikap gotong royong, "; }
		if($cso['s6']==1) { echo "tidak berkembang dalam sikap santun, "; }
		if($cso['s7']==1) { echo "tidak berkembang dalam sikap percaya diri, "; }
		 ?>
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
</table>

</body>
</html>
