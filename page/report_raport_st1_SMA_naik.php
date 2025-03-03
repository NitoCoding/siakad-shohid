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
  <tr> 
    <td height="95" colspan="6" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
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
                    <span class="style1"><font size="4">SM</font></span><strong><font size="4">A</font></strong><span class="style1"><font size="4"> ISLAM TERPADU SHOHWATUL IS'AD</font></span><br /> 
                      <br /> 
                      <span class="style6">NSS : </span><span class="style4">302190208001</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="style6">NPSN : </span><span class="style4">69728583<br />
                      Alamat: Jl. Poros Padanglampe�KM . 3�Ma'rang�Pangkep�Sulawesi -Selatan 90645 P.O. Box 300
                    <br>
                    http://www.shohwatulisad.sch.id - e-mail : info@shohwatulisad.sch.id </span></p>
                  </div></td>
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
    <td colspan="6"><div align="center" class="style5"><font size="3">LAPORAN HASIL BELAJAR SISWA </font></div></td>
  </tr>
  <tr>
    <td colspan="6"><div align="center"><font size="2">SEMESTER 
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
  </tr>
      <?
	      $tmpkls=mysqli_query($koneksi, "SELECT * FROM tb_santri WHERE id_santri='$idstr' ");
          $ct=mysqli_fetch_assoc($tmpkls);
	   ?>
  <tr> 
    <td width="13%">NIS/NISN</td>
    <td width="1%">:</td>
    <td width="50%"><? echo $ct['nis']." / ". $ct['nis_nasional']; ?></td>
    <td width="12%">&nbsp;</td>
    <td width="2%">&nbsp;</td>
    <td width="22%">&nbsp;</td>
  </tr>
  <tr> 
    <td>Nama</td>
    <td>:</td>
    <td><? echo $ct['nama']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td>Kelas</td>
    <td>:</td>
    <td><? echo $ct['kelas_st']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr valign="top"> 
    <td colspan="6">&nbsp;</td>
  </tr>
  <tr valign="top"> 
    <td height="280" colspan="6"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr bgcolor="#CCCCCC">
        <td width="2%" rowspan="3" bgcolor="#FFFFFF"><div align="center">No</div></td>
        <td width="31%" rowspan="3" bgcolor="#FFFFFF"><div align="center">Mata Pelajaran </div></td>
        <td width="8%" rowspan="3" bgcolor="#FFFFFF"><div align="center">KKM</div></td>
        <td colspan="5" bgcolor="#FFFFFF"><div align="center">NILAI HASIL BELAJAR </div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">Pengetahuan</div></td>
        <td colspan="2"><div align="center">Praktik</div></td>
        <td><div align="center">Sikap</div></td>
      </tr>
      <tr>
        <td width="8%"><div align="center">Angka</div></td>
        <td width="16%"><div align="center">Huruf</div></td>
        <td width="8%"><div align="center">Angka</div></td>
        <td width="16%"><div align="center">Huruf</div></td>
        <td width="11%"><div align="center">Predikat </div></td>
      </tr>
      <? 
		  	 $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD003' ");
              $tpk2=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='X') {  $to=$tpk2['kkm']; }
			  if($ct['kelas_st']=='XI') {  $to=$tpk2['kkm2']; }
			  if($ct['kelas_st']=='XII') {  $to=$tpk2['kkm3']; }
			  
			  			 
			 $tam05=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP005' and thn_ajaran='$thaj' and semester='$sem' ");
                 $tpk05=mysqli_fetch_assoc($tam05); 
				 
				 $p1=substr($tpk05['raport'],0,2);
				 $p2=substr($tpk05['raport'],3,2);
				
		         $j1=$tpk05['raport']; 
				 
				 
				 $tam06=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP006' and thn_ajaran='$thaj' and semester='$sem' ");
                 $tpk06=mysqli_fetch_assoc($tam06); 
				 
				 $p1=substr($tpk06['raport'],0,2);
				 $p2=substr($tpk06['raport'],3,2);
				
		         $j2=$tpk06['raport']; 
				 
				// $agama=ceil((($j1+$j2)/2));
				 $agama=$j1;
				 
		?>
      <tr>
        <td><div align="center">1.</div></td>
        <td>&nbsp;Pendidikan Agama </td>
        <td><div align="center">
            <? 
			  
			  echo $to;
			  
			   ?>
        </div></td>
        <td><div align="center">
            <?
		  
		         
		  echo $agama;
		  if($agama >=1){ $tnr1=1; }
		  
		   ?>
        </div></td>
        <td><div align="center">
            <? $a=angka_huruf($agama); echo $a; ?>
        </div></td>
        <td><div align="center">
            <?
		    $pr1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='PR001' and thn_ajaran='$thaj' and semester='$sem' ");
            $cpr1=mysqli_fetch_assoc($pr1);
			$ls1=$cpr1['nilai'];
		    $a=angka_huruf($cpr1['nilai']);  
		    echo $ls1;
		  ?>
        </div></td>
        <td><div align="center"><? echo $a; ?> </div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP006' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">2.</div></td>
        <td>&nbsp;Pendidikan Kewarganegaraan </td>
        <td><div align="center">
          <? 
			  
			  echo $to;
			  
			   ?>
        </div></td>
        <td><div align="center">
            <? 
		 	
	      $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD013' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j3=$tpk['raport'];
		  if($j3 >=1){ $tnr2=1; }
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
            <? $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
            <?
		    $pr1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='PR002' and thn_ajaran='$thaj' and semester='$sem' ");
            $cpr1=mysqli_fetch_assoc($pr1);
			$ls1=$cpr1['nilai'];
		    $a=angka_huruf($cpr1['nilai']);  
		    echo $ls1;
		  ?>
        </div></td>
        <td><div align="center"><? echo $a; ?></div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD013' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">3.</div></td>
        <td>&nbsp;Bahasa Indonesia </td>
        <td><div align="center">
          <? 
			  
			  echo $to;
			  
			   ?>
        </div></td>
        <td><div align="center">
            <? 
		 	
	      $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD003' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j4=$tpk['raport'];
		  if($j4 >=1){ $tnr3=1; }
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
            <? $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
            <?
		    $pr1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='PR003' and thn_ajaran='$thaj' and semester='$sem' ");
            $cpr1=mysqli_fetch_assoc($pr1);
			$ls1=$cpr1['nilai'];
		    $a=angka_huruf($cpr1['nilai']);  
		    echo $ls1;
		  ?>
        </div></td>
        <td><div align="center"><? echo $a; ?></div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD013' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">4.</div></td>
        <td>&nbsp;Bahasa Inggris </td>
        <td><div align="center">
          <? 
			  
			  echo $to;
			  
			   ?>
        </div></td>
        <td><div align="center">
            <? 
		 	
	      $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD004' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j5=$tpk['raport'];
		  if($j5 >=1){ $tnr4=1; }
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
            <? $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
            <?
		    $pr1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='PR004' and thn_ajaran='$thaj' and semester='$sem' ");
            $cpr1=mysqli_fetch_assoc($pr1);
			$ls1=$cpr1['nilai'];
		    $a=angka_huruf($cpr1['nilai']);  
		    echo $ls1;
		  ?>
        </div></td>
        <td><div align="center"><? echo $a; ?></div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD004' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">5.</div></td>
        <td> &nbsp;Bahasa Arab </td>
        <td><div align="center">
            <? 
			  
			  echo $to;
			  
			   ?>
        </div></td>
        <td><div align="center">
            <? 
		 	
	      $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP003' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j17=$tpk['raport'];
		  if($j17 >=1){ $tnr16=1; }
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
            <? $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
            <?
		    $pr1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='PR012' and thn_ajaran='$thaj' and semester='$sem' ");
            $cpr1=mysqli_fetch_assoc($pr1);
			$ls1=$cpr1['nilai'];
		    $a=angka_huruf($cpr1['nilai']);  
		    echo $ls1;
		  ?>
        </div></td>
        <td><div align="center"><? echo $a; ?></div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP003' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">6.</div></td>
        <td>&nbsp;Matematika</td>
        <td><div align="center">
          <? 
			  
			  echo $to;
			  
			   ?>
        </div></td>
        <td><div align="center">
            <? 
		 	
	      $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD005' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j6=$tpk['raport'];
		  if($j6 >=1){ $tnr5=1; }
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
            <? $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
            <?
		    $pr1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='PR005' and thn_ajaran='$thaj' and semester='$sem' ");
            $cpr1=mysqli_fetch_assoc($pr1);
			$ls1=$cpr1['nilai'];
		    $a=angka_huruf($cpr1['nilai']);  
		    echo $ls1;
		  ?>
        </div></td>
        <td><div align="center"><? echo $a; ?></div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD005' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">7.</div></td>
        <td>&nbsp;Fisika</td>
        <td><div align="center">
          <? 
			  
			  echo $to;
			  
			   ?>
        </div></td>
        <td><div align="center">
            <? 
		 	
	      $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD022' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j7=$tpk['raport'];
		  if($j7 >=1){ $tnr6=1; }
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
            <? $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
            <?
		    $pr1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='PR006' and thn_ajaran='$thaj' and semester='$sem' ");
            $cpr1=mysqli_fetch_assoc($pr1);
			$ls1=$cpr1['nilai'];
		    $a=angka_huruf($cpr1['nilai']);  
		    echo $ls1;
		  ?>
        </div></td>
        <td><div align="center"><? echo $a; ?></div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD022' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">8.</div></td>
        <td>&nbsp;Biologi&nbsp; </td>
        <td><div align="center">
          <? 
			  
			  echo $to;
			  
			   ?>
        </div></td>
        <td><div align="center">
            <? 
		 	
	      $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD020' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j8=$tpk['raport'];
		  if($j8 >=1){ $tnr7=1; }
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
            <? $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
            <?
		    $pr1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='PR007' and thn_ajaran='$thaj' and semester='$sem' ");
            $cpr1=mysqli_fetch_assoc($pr1);
			$ls1=$cpr1['nilai'];
		    $a=angka_huruf($cpr1['nilai']);  
		    echo $ls1;
		  ?>
        </div></td>
        <td><div align="center"><? echo $a; ?></div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD020' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">9.</div></td>
        <td>&nbsp;Kimia </td>
        <td><div align="center">
          <? 
			  
			  echo $to;
			  
			   ?>
        </div></td>
        <td><div align="center">
            <? 
		 	
	      $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD015' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j9=$tpk['raport'];
		  if($j9 >=1){ $tnr8=1; }
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
            <? $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
            <?
		    $pr1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='PR008' and thn_ajaran='$thaj' and semester='$sem' ");
            $cpr1=mysqli_fetch_assoc($pr1);
			$ls1=$cpr1['nilai'];
		    $a=angka_huruf($cpr1['nilai']);  
		    echo $ls1;
		  ?>
        </div></td>
        <td><div align="center"><? echo $a; ?></div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD015' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">10.</div></td>
        <td>&nbsp;Sejarah</td>
        <td><div align="center">
          <? 
			  
			  echo $to;
			  
			   ?>
        </div></td>
        <td><div align="center">
            <? 
		 	
	      $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD023' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j10=$tpk['raport'];
		  if($j10 >=1){ $tnr9=1; }
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
            <? $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
            <?
		    $pr1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='PR009' and thn_ajaran='$thaj' and semester='$sem' ");
            $cpr1=mysqli_fetch_assoc($pr1);
			$ls1=$cpr1['nilai'];
		    $a=angka_huruf($cpr1['nilai']);  
		    echo $ls1;
		  ?>
        </div></td>
        <td><div align="center"><? echo $a; ?></div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD023' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">11.</div></td>
        <td>&nbsp;Pendidikan Jasmani, Olahraga, dan Kesehatan </td>
        <td><div align="center">
          <? 
			  
			  echo $to;
			  
			   ?>
        </div></td>
        <td><div align="center">
            <? 
		 	
	      $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD009' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j11=$tpk['raport'];
		  if($j11 >=1){ $tnr10=1; }
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
            <? $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
            <?
		    $pr1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='PR010' and thn_ajaran='$thaj' and semester='$sem' ");
            $cpr1=mysqli_fetch_assoc($pr1);
			$ls1=$cpr1['nilai'];
		    $a=angka_huruf($cpr1['nilai']);  
		    echo $ls1;
		  ?>
        </div></td>
        <td><div align="center"><? echo $a; ?></div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD009' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">12.</div></td>
        <td>&nbsp;Teknologi Informasi dan Komunikasi </td>
        <td><div align="center">
            <? 
			  
			  echo $to;
			  
			   ?>
        </div></td>
        <td><div align="center">
            <? 
		 	
	      $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD010' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j12=$tpk['raport'];
		  if($j12 >=1){ $tnr11=1; }
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
            <? $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
            <?
		    $pr1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='PR011' and thn_ajaran='$thaj' and semester='$sem' ");
            $cpr1=mysqli_fetch_assoc($pr1);
			$ls1=$cpr1['nilai'];
		    $a=angka_huruf($cpr1['nilai']);  
		    echo $ls1;
		  ?>
        </div></td>
        <td><div align="center"><? echo $a; ?></div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD010' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">13.</div></td>
        <td>&nbsp;Seni Budaya </td>
        <td><div align="center">
            <? 
			  
			  echo $to;
			  
			   ?>
        </div></td>
        <td><div align="center">
            <? 
		 	
	      $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD011' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j16=$tpk['raport'];
		  if($j16 >=1){ $tnr15=1; }
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
            <? $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
            <?
		    $pr1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='MD011' and thn_ajaran='$thaj' and semester='$sem' ");
            $cpr1=mysqli_fetch_assoc($pr1);
			$ls1=$cpr1['nilai'];
		    $a=angka_huruf($cpr1['nilai']);  
		    echo $ls1;
		  ?>
        </div></td>
        <td><div align="center"><? echo $a; ?></div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD011' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
      </tr>
      
      <tr>
        <td colspan="2">&nbsp;Muatan Lokal </td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center">14.</div></td>
        <td>&nbsp;Tahfizh Al-Quran </td>
        <td><div align="center">
          <? 
			  
			  echo $to;
			  
			   ?>
        </div></td>
        <td><div align="center">
            <? 
		 	
	      $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP001' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j14=$tpk['raport'];
		   if($j14 >=1){ $tnr13=1; }
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
            <? $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
            <?
		    $pr1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='PR013' and thn_ajaran='$thaj' and semester='$sem' ");
            $cpr1=mysqli_fetch_assoc($pr1);
			$ls1=$cpr1['nilai'];
		    $a=angka_huruf($cpr1['nilai']);  
		    echo $ls1;
		  ?>
        </div></td>
        <td><div align="center"><? echo $a; ?></div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP001' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">15.</div></td>
        <td>&nbsp;Kewirausahaan dan Agrobisnis </td>
        <td><div align="center">
          <? 
			  
			  echo $to;
			  
			   ?>
        </div></td>
        <td><div align="center">
            <? 
		 	
	      $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD011' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j15=$tpk['raport'];
		  if($j15 >=1){ $tnr14=1; }
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
            <? $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
            <?
		    $pr1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='PR014' and thn_ajaran='$thaj' and semester='$sem' ");
            $cpr1=mysqli_fetch_assoc($pr1);
			$ls1=$cpr1['nilai'];
		    $a=angka_huruf($cpr1['nilai']);  
		    echo $ls1;
		  ?>
        </div></td>
        <td><div align="center"><? echo $a; ?></div></td>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD011' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
      </tr>
      
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;Jumlah Nilai </td>
        <td>&nbsp;</td>
        <td><div align="center">
            <?
		  $rtt=$agama+$j3+$j4+$j5+$j6+$j7+$j8+$j9+$j10+$j11+$j12+$j13+$j14+$j15+$j16+$j17; 
		  $thpbg=$tnr1+$tnr2+$tnr3+$tnr4+$tnr5+$tnr6+$tnr7+$tnr8+$tnr9+$tnr10+$tnr11+$tnr12+$tnr13+$tnr14+$tnr15+$tnr16; 
		  echo $rtt;
		  ?>
        </div></td>
        <td><div align="center">
            <? $a=angka_huruf($rtt); echo $a; ?>
        </div></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center"></div>
            <div align="center"></div></td>
        <td>&nbsp; Nila Rata-rata </td>
        <td><div align="center"></div></td>
        <td><div align="center">
            <? 
			     
				if(!empty($rtt)){				
				 $rt=ceil($rtt/$thpbg);
				  
				 $p1=substr($rt,0,2);
				 $p2=substr($rt,3,2);
				 if($p2>=50){ echo $p1+1; }else{ echo $p1; }
				 }
				 
				   
			 // }
			  ?>
        </div></td>
        <td><div align="center">
            <? $a=angka_huruf($p1); echo $a; ?>
        </div></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
      </tr>
    </table></td>
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
    <td colspan="6" height="12"></td>
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
    <td height="168" colspan="6" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="31%" height="14"><div align="center">Mengetahui :</div></td>
        <td width="33%">&nbsp;</td>
        <td width="36%"><div align="center">Pangkep, 3 Mei 2018</div></td>
      </tr>
      <tr>
        <td height="14"><div align="center">Orang Tua Wali</div></td>
        <td><div align="center">Kepala Sekolah</div></td>
        <td><div align="center">Wali Kelas</div></td>
      </tr>
      <tr>
        <td height="14">&nbsp;</td>
        <td rowspan="7" valign="bottom"><div align="center"></div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="14">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="14">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="14">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="14">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="14">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="20">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="36"><div align="center">(____________________________)</div></td>
        <td><div align="center"><u>(Kamaruddin, S.Pd, M.PMat.)</u><br />
NIY : 201701 1 2 065</div></td>
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
NIY : <? echo $tpk4['nip']; ?></div></td>
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
    <td>Nama Santri </td>
    <td>:</td>
    <td><? echo $ct['nama']; ?></td>
    <td>Kelas</td>
    <td>:</td>
    <td><? echo $ct['kelas_st']; ?></td>
  </tr>
  <tr>
    <td>Nomor Induk </td>
    <td>:</td>
    <td><? echo $ct['nis']." / ". $ct['nis_nasional']; ?></td>
    <td>Tahun Pelajaran </td>
    <td>:</td>
    <td><font size="2"><? echo $thaj; ?></font></td>
  </tr>
  <tr>
    <td>Nama Sekolah </td>
    <td>:</td>
    <td>SMA Islam Terpadu Shohwatul Is'ad </td>
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
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><strong>Ketercapian Kompetensi Peserta Didik </strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td width="6%"><div align="center">No.</div></td>
        <td width="61%"><div align="center">Komponen</div></td>
        <td width="33%"><div align="center">Ketercapaian Kompetensi </div></td>
      </tr>
      <tr>
        <td><div align="center"><strong><em>A</em></strong></div></td>
        <td><em><strong>&nbsp;Mata Pelajaran </strong></em></td>
        <td><div align="center"></div></td>
      </tr>
      <tr>
        <td><div align="center">1.</div></td>
        <td>&nbsp;Pendidikan Agama </td>
        <td><div align="center">
            <? 
			  
			  if($agama >= $t){ echo"Tercapai"; }else{ echo"Tidak Tercapai"; } 
			  
			   ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">2.</div></td>
        <td>&nbsp;Pendidikan Kewarganegaraan </td>
        <td><div align="center">
            <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD013' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  
			 if($ct['kelas_st']=='X' or $ct['kelas_st']=='XI' or $ct['kelas_st']=='XII') {  $t=$tpk3['kkm']; if($j3 >= $t){ echo"Tercapai"; }else{ echo"Tidak Tercapai"; }  }
			  ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">3.</div></td>
        <td>&nbsp;Bahasa Indonesia </td>
        <td><div align="center">
            <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD003' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='X' or $ct['kelas_st']=='XI' or $ct['kelas_st']=='XII') { $t=$tpk2['kkm']; if($j4 >= $t){ echo"Tercapai"; }else{ echo"Tidak Tercapai"; } }
			  
			  ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">4.</div></td>
        <td>&nbsp;Bahasa Inggris </td>
        <td><div align="center">
            <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD004' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			 if($ct['kelas_st']=='X' or $ct['kelas_st']=='XI' or $ct['kelas_st']=='XII') { $t=$tpk3['kkm']; if($j5 >= $t){ echo"Tercapai"; }else{ echo"Tidak Tercapai"; } }
			  
			  ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">5.</div></td>
        <td>&nbsp;Bahasa Arab </td>
        <td><div align="center">
          <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MP003' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			 if($ct['kelas_st']=='X' or $ct['kelas_st']=='XI' or $ct['kelas_st']=='XII') { $t=$tpk3['kkm']; if($j5 >= $t){ echo"Tercapai"; }else{ echo"Tidak Tercapai"; } }
			  
			  ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">6.</div></td>
        <td>&nbsp;Matematika</td>
        <td><div align="center">
            <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD005' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='X' or $ct['kelas_st']=='XI' or $ct['kelas_st']=='XII') { $t=$tpk3['kkm']; if($j6 >= $t){ echo"Tercapai"; }else{ echo"Tidak Tercapai"; } }
			  
			  ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">7.</div></td>
        <td>&nbsp;Fisika</td>
        <td><div align="center">
            <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD022' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='X' or $ct['kelas_st']=='XI' or $ct['kelas_st']=='XII') { $t=$tpk3['kkm']; if($j7 >= $t){ echo"Tercapai"; }else{ echo"Tidak Tercapai"; } }
			  
			  ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">8.</div></td>
        <td>&nbsp;Biologi&nbsp; </td>
        <td><div align="center">
            <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD020' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			   if($ct['kelas_st']=='X' or $ct['kelas_st']=='XI' or $ct['kelas_st']=='XII') { $t=$tpk3['kkm']; if($j8 >= $t){ echo"Tercapai"; }else{ echo"Tidak Tercapai"; } }
			  
			  ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">9.</div></td>
        <td>&nbsp;Kimia </td>
        <td><div align="center">
            <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD015' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='X' or $ct['kelas_st']=='XI' or $ct['kelas_st']=='XII') { $t=$tpk3['kkm']; if($j9 >= $t){ echo"Tercapai"; }else{ echo"Tidak Tercapai"; } }
			  
			  ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">10.</div></td>
        <td>&nbsp;Sejarah</td>
        <td><div align="center">
            <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD023' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='X' or $ct['kelas_st']=='XI' or $ct['kelas_st']=='XII') { $t=$tpk3['kkm']; if($j10 >= $t){ echo"Tercapai"; }else{ echo"Tidak Tercapai"; } }
			  
			  ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">11.</div></td>
        <td>&nbsp;Pendidikan Jasmani, Olahraga, dan Kesehatan </td>
        <td><div align="center">
            <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD009' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='X' or $ct['kelas_st']=='XI' or $ct['kelas_st']=='XII') { $t=$tpk3['kkm']; if($j11 >= $t){ echo"Tercapai"; }else{ echo"Tidak Tercapai"; } }
			  
			  ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">12.</div></td>
        <td>&nbsp;Seni Budaya </td>
        <td><div align="center">
          <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD011' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='X' or $ct['kelas_st']=='XI' or $ct['kelas_st']=='XII') { $t=$tpk3['kkm']; if($j11 >= $t){ echo"Tercapai"; }else{ echo"Tidak Tercapai"; } }
			  
			  ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center"><em><strong>B</strong></em></div></td>
        <td>&nbsp;Teknologi Informasi dan Komunikasi </td>
        <td><div align="center">
            <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD010' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='X' or $ct['kelas_st']=='XI' or $ct['kelas_st']=='XII') { $t=$tpk3['kkm']; if($j12 >= $t){ echo"Tercapai"; }else{ echo"Tidak Tercapai"; } }
			  
			  ?>
        </div></td>
      </tr>
      
      <tr>
        <td><div align="center">13.</div></td>
        <td><em><strong>&nbsp;Muatan Lokal </strong></em></td>
        <td><div align="center"></div></td>
      </tr>
      <tr>
        <td><div align="center">14.</div></td>
        <td>&nbsp;Tahfizh Al-Quran </td>
        <td><div align="center">
            <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MP001' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='X' or $ct['kelas_st']=='XI' or $ct['kelas_st']=='XII') { $t=$tpk3['kkm']; if($j14 >= $t){ echo"Tercapai"; }else{ echo"Tidak Tercapai"; } }
			  
			  ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">15.</div></td>
        <td>&nbsp;Kewirausahaan dan Agrobisnis </td>
        <td><div align="center">
            <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD011' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='X' or $ct['kelas_st']=='XI' or $ct['kelas_st']=='XII') { $t=$tpk3['kkm']; if($j15 >= $t){ echo"Tercapai"; }else{ echo"Tidak Tercapai"; } }
			  
			  ?>
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
  </tr>
  <tr>
    <td colspan="3"><strong>Pengembangan Diri </strong></td>
    <td colspan="3"><strong>Akhlak Mulia dan Kepribadian</strong> </td>
  </tr>
  <tr>
    <td colspan="6" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="63%" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
          <tr>
            <td width="7%"><div align="center"><strong>No.</strong></div></td>
            <td colspan="2"><div align="center"><strong>Jenis Kegiatan </strong></div></td>
            <td width="16%"><div align="center"><strong>Keterangan</strong></div></td>
          </tr>
		  <?
		  
            /* $exk=mysqli_query($koneksi, "SELECT * FROM tb_nilai_eskul WHERE nis_eskl='$ct[nis]' and kls_eskl='$ct[kelas_st]' and thn_eskl='$thaj' and sms_eskl='$sem' ");
            $cexk=mysqli_fetch_assoc($exk);  
			
			$jexk=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='$cexk[kd_eskl1]' ");
            $cjexk=mysqli_fetch_assoc($jexk);
			
			$jexk2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='$cexk[kd_eskl2]' ");
            $cjexk2=mysqli_fetch_assoc($jexk2); */
			
			
			
			?>
          <tr>
            <td><div align="center"><strong>A</strong></div></td>
            <td colspan="2"><em><strong>&nbsp;Kegiatan Ekstrakurikuler</strong></em> 
              <div align="center"></div></td>
            <td><div align="center"></div></td>
          </tr>
		<?   $pbk=mysqli_query($koneksi, "SELECT * FROM tb_pbakat WHERE kd_santri='$ct[id_santri]' ");
          $tpbk=mysqli_fetch_assoc($pbk); 
		  
		  $pbk1=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='$tpbk[kd_mp]'  ");
          $tpbk1=mysqli_fetch_assoc($pbk1);
		  
		  $tnils=mysqli_query($koneksi, "SELECT * FROM tb_nilai_eskul WHERE thn_eskl='$thaj' AND sms_eskl='$sem' AND nis_eskl='$ct[nis]' AND 
		                      kls_eskl='$ct[kelas_st]' AND kd_eskl1='$tpbk1[kd_mp]'  ");
        $cnils=mysqli_fetch_assoc($tnils); ?>
          <tr>
            <td>&nbsp;</td>
            <td width="6%"><div align="center">1.</div></td>
            <td width="71%">&nbsp;<? echo $tpbk1['nama_mp']; ?></td>
            <td><div align="center"><? echo $cnils['nil_eskl1']; ?></div></td>
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
            <td>&nbsp;</td>
            <td><div align="center">2.</div></td>
            <td>&nbsp;<? echo $tpbk2['nama_mp']; ?></td>
            <td><div align="center"><? echo $cnils['nil_eskl2']; ?></div></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><div align="center">3.</div></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="16"><div align="center"><strong>B</strong></div></td>
            <td colspan="2"><em><strong>&nbsp;Keikutsertaan dalam Organisasi / Kegiatan di Sekolah </strong></em></td>
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
          <tr>
            <td><div align="center"></div></td>
            <td><div align="center"><? echo $str; ?>.</div></td>
            <td>&nbsp;<? echo $cjexk2['nama_mp']; ?></td>
            <td><div align="center"><?
				
			echo $cor1['nilai'];
			?></div></td>
          </tr>
          <?
		  $str+=1; } }  }
		  ?>
          
        </table></td>
        <td width="1%">&nbsp;</td>
        <td width="36%" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
          <tr>
            <td width="11%"><div align="center"><strong>No.</strong></div></td>
            <td width="59%"><div align="center"><strong>Aspek Yang Dinilai </strong></div></td>
            <td width="30%"><div align="center"><strong>Keterangan</strong></div></td>
          </tr>
          <tr>
            <td><div align="center">1.</div></td>
            <td>&nbsp;Kedisiplinan</td>
            <td><div align="center">
              <?
			$or4=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='KO004' and thn_ajaran='$thaj' and semester='$sem' ");
            $cor4=mysqli_fetch_assoc($or4);
				
			echo $cor4['nilai'];
			?>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">2.</div></td>
            <td>&nbsp;Kebersihan</td>
            <td><div align="center">
              <?
			$or4=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='KO005' and thn_ajaran='$thaj' and semester='$sem' ");
            $cor4=mysqli_fetch_assoc($or4);
				
			echo $cor4['nilai'];
			?>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">3.</div></td>
            <td>&nbsp;Kesehatan</td>
            <td><div align="center">
              <?
			$or4=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='KO006' and thn_ajaran='$thaj' and semester='$sem' ");
            $cor4=mysqli_fetch_assoc($or4);
				
			echo $cor4['nilai'];
			?>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">4.</div></td>
            <td>&nbsp;Tanggungjawab</td>
            <td><div align="center">
              <?
			$or4=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='KO007' and thn_ajaran='$thaj' and semester='$sem' ");
            $cor4=mysqli_fetch_assoc($or4);
				
			echo $cor4['nilai'];
			?>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">5.</div></td>
            <td>&nbsp;Sopan Santun </td>
            <td><div align="center">
              <?
			$or4=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='KO008' and thn_ajaran='$thaj' and semester='$sem' ");
            $cor4=mysqli_fetch_assoc($or4);
				
			echo $cor4['nilai'];
			?>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">6.</div></td>
            <td>&nbsp;Percaya Diri </td>
            <td><div align="center">
              <?
			$or4=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='KO009' and thn_ajaran='$thaj' and semester='$sem' ");
            $cor4=mysqli_fetch_assoc($or4);
				
			echo $cor4['nilai'];
			?>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">7.</div></td>
            <td>&nbsp;Kompetitif</td>
            <td><div align="center">
              <?
			$or4=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='KO010' and thn_ajaran='$thaj' and semester='$sem' ");
            $cor4=mysqli_fetch_assoc($or4);
				
			echo $cor4['nilai'];
			?>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">8.</div></td>
            <td>&nbsp;Hubungan Sosial </td>
            <td><div align="center">
              <?
			$or4=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='KO011' and thn_ajaran='$thaj' and semester='$sem' ");
            $cor4=mysqli_fetch_assoc($or4);
				
			echo $cor4['nilai'];
			?>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">9.</div></td>
            <td>&nbsp;Kejujuran</td>
            <td><div align="center">
              <?
			$or4=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='KO012' and thn_ajaran='$thaj' and semester='$sem' ");
            $cor4=mysqli_fetch_assoc($or4);
				
			echo $cor4['nilai'];
			?>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">10.</div></td>
            <td>&nbsp;Pelaksanaan Ibadah </td>
            <td><div align="center">
              <?
			$or4=mysqli_query($koneksi, "SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='KO013' and thn_ajaran='$thaj' and semester='$sem' ");
            $cor4=mysqli_fetch_assoc($or4);
				
			echo $cor4['nilai'];
			?>
            </div></td>
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
    <td colspan="3"><strong>Ketidakhadiran </strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      
      <tr>
        <td><div align="center"><strong>No.</strong></div></td>
        <td height="23"><div align="center"><strong>Alasan Ketidakhadiran </strong></div></td>
        <td><div align="center"><strong>Keterangan</strong></div></td>
      </tr>
      <tr>
        <td width="4%"><div align="center">1.</div></td>
        <td width="42%">&nbsp;Sakit</td>
        <td width="52%"><div align="center">
              <? if(empty($nck1)){ echo "-"; }else{ echo"$nck1"; } ?>
          Hari</div></td>
      </tr>
      <tr>
        <td><div align="center">2.</div></td>
        <td>&nbsp;Izin</td>
        <td><div align="center">
              <? if(empty($nck2)){ echo "-"; }else{ echo"$nck2";}  ?>
          Hari</div></td>
      </tr>
      <tr>
        <td><div align="center">3.</div></td>
        <td>&nbsp;Tanpa Keterangan </td>
        <td><div align="center">
              <? if(empty($nck3)){ echo "-"; }else{ echo"$nck3";}  ?>
          Hari</div></td>
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
    <td height="79" colspan="6"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td width="62%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><strong>Catatan Wali Kelas :</strong></td>
          </tr>
          <tr>
            <td height="24"><?
			$cw=mysqli_query($koneksi, "SELECT * FROM tb_catatan_wk WHERE nis='$ct[nis]' and thn_ajaran='$thaj' and semester='$sem' and kelas='$ct[kelas_st]' ");
            $ccw=mysqli_fetch_assoc($cw);
				
			echo $ccw['catatan'];
			?></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table></td>
        <td width="38%" height="77" valign="top"><span class="style10"><span class="style4"><strong>Keputusan</strong> :<br />
Berdasarkan hasil yang dicapai pada semester 1 dan 2 maka peserta didik ditetapkan<br />
Lulus &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;............(....................)<br />
Tidak Lulus............(....................)</span></span></td>
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
    <td height="189" colspan="6" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="14"><div align="center">Mengetahui :</div></td>
        <td>&nbsp;</td>
        <td valign="top"><div align="center">Pangkep, 3 Mei 2018</div></td>
      </tr>
      <tr>
        <td height="23"><div align="center">Orang Tua Wali</div></td>
        <td><div align="center">Kepala Sekolah</div></td>
        <td><div align="center">Wali Kelas </div></td>
      </tr>
      <tr>
        <td height="14">&nbsp;</td>
        <td rowspan="7" valign="bottom"><div align="center"></div></td>
        <td valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td height="14">&nbsp;</td>
        <td valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td height="14">&nbsp;</td>
        <td valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td height="14">&nbsp;</td>
        <td valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td height="14">&nbsp;</td>
        <td valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td height="14">&nbsp;</td>
        <td valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td height="14">&nbsp;</td>
        <td valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td width="31%" height="50"><div align="center">
            <div align="center">
              <p>                (_______________________________)</p>
              </div>
        </div></td>
        <td width="33%"><div align="center">
            <p><u>(Kamaruddin, S.Pd, M.PMat.)</u><br />
NIY : 201701 1 2 065</p>
        </div></td>
        <td width="36%"><div align="center">
            <p><br />
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
NIY : <? echo $tpk4['nip']; ?>            </p>
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
    <td height="281" colspan="6" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
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
              <td width="43%">...  Juli 2018</td>
              <td width="9%">:</td>
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
        <td width="37%" rowspan="7" valign="bottom"><div align="center"></div></td>
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
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="33%">&nbsp;</td>
        <td width="30%">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="36"><div align="center">(__________________________________)</div></td>
        <td><div align="center">Suryawati Ningsih Daiman, S.Pd.<br />
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
NIY : <? echo $tpk4['nip']; ?></div></td>
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
</table>

</body>
</html>
