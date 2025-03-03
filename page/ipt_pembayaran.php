<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style3 {color: #FFFFFF; font-weight: bold; }
.style4 {
	color: #FF3300;
	font-weight: bold;
}
-->
</style>
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>
<?

$klsk=$_GET['klsk']; 
$blnb=$_GET['blnb'];
$idks=$_GET['idks'];
$kd_klss=$_GET['kd_klss'];
?>
<body>
<form id="form1" name="form1" method="post" action="page/act_dt_rbg.php">
  <table width="2000" border="0" cellspacing="0" cellpadding="0">
	<tr>
      <td colspan="4"></td>
    </tr>
    

    <tr>
      <td colspan="4" bgcolor="#B3CF70"><table width="1000%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="1%" height="27">&nbsp;</td>
          <td width="3%"><img src="images/collapsed.gif" width="16" height="12" /></td>
          <td width="96%">Pembayaran Santri </td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td colspan="4" height="7"></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td width="5%" valign="top" bgcolor="#ACD75E">&nbsp;</td>
      <td width="6%" valign="top" bgcolor="#ACD75E">&nbsp;</td>
      <td valign="top" bgcolor="#ACD75E">&nbsp;</td>
    </tr>
    <tr>
      <td width="1%" height="35" bgcolor="#DCF3AF">&nbsp;</td>
      <td colspan="2" bgcolor="#DCF3AF">Kelas
        <select name="menu1" onchange="MM_jumpMenu('parent',this,0)">
          <option value="home.php?home=byr&pmb=3">-</option>
          <?
	        $tampi3=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas ");
            while($tp3=mysqli_fetch_assoc($tampi3)){
	    ?>
          <option value="home.php?home=byr&pmb=3&klsk=<? echo "$tp3[kelas]" ?>&kd_klss=<? echo "$tp3[kd_kls]" ?>" <? if($klsk=="$tp3[kelas]"){ echo"selected='selected'"; } ?>><? echo $tp3['kelas']; ?></option>
          <? } ?>
        </select>      </td>
      <td width="88%" bgcolor="#DCF3AF"><label>
        Bulan
            <select name="select" onchange="MM_jumpMenu('parent',this,0)">
              <option value="home.php?home=byr&pmb=3&klsk=<? echo"$klsk"; ?>">-</option>
              <option value="home.php?home=byr&pmb=3&kd_klss=<? echo "$kd_klss";?>&klsk=<? echo "$klsk&blnb=Januari"; ?>" <? if($blnb=="Januari"){ echo"selected='selected'"; } ?>>Januari</option>
              <option value="home.php?home=byr&pmb=3&kd_klss=<? echo "$kd_klss";?>&klsk=<? echo "$klsk&blnb=Februari"; ?>" <? if($blnb=="Februari"){ echo"selected='selected'"; } ?>>Februari</option>
              <option value="home.php?home=byr&pmb=3&kd_klss=<? echo "$kd_klss";?>&klsk=<? echo "$klsk&blnb=Maret"; ?>" <? if($blnb=="Maret"){ echo"selected='selected'"; } ?>>Maret</option>
              <option value="home.php?home=byr&pmb=3&kd_klss=<? echo "$kd_klss";?>&klsk=<? echo "$klsk&blnb=April"; ?>" <? if($blnb=="April"){ echo"selected='selected'"; } ?>>April</option>
              <option value="home.php?home=byr&pmb=3&kd_klss=<? echo "$kd_klss";?>&klsk=<? echo "$klsk&blnb=Mei"; ?>" <? if($blnb=="Mei"){ echo"selected='selected'"; } ?>>Mei</option>
              <option value="home.php?home=byr&pmb=3&kd_klss=<? echo "$kd_klss";?>&klsk=<? echo "$klsk&blnb=Juni"; ?>" <? if($blnb=="Juni"){ echo"selected='selected'"; } ?>>Juni</option>
              <option value="home.php?home=byr&pmb=3&kd_klss=<? echo "$kd_klss";?>&klsk=<? echo "$klsk&blnb=Juli"; ?>" <? if($blnb=="Juli"){ echo"selected='selected'"; } ?>>Juli</option>
              <option value="home.php?home=byr&pmb=3&kd_klss=<? echo "$kd_klss";?>&klsk=<? echo "$klsk&blnb=Agustus"; ?>" <? if($blnb=="Agustus"){ echo"selected='selected'"; } ?>>Agustus</option>
              <option value="home.php?home=byr&pmb=3&kd_klss=<? echo "$kd_klss";?>&klsk=<? echo "$klsk&blnb=September"; ?>" <? if($blnb=="September"){ echo"selected='selected'"; } ?>>September</option>
              <option value="home.php?home=byr&pmb=3&kd_klss=<? echo "$kd_klss";?>&klsk=<? echo "$klsk&blnb=Oktober"; ?>" <? if($blnb=="Oktober"){ echo"selected='selected'"; } ?>>Oktober</option>
              <option value="home.php?home=byr&pmb=3&kd_klss=<? echo "$kd_klss";?>&klsk=<? echo "$klsk&blnb=November"; ?>" <? if($blnb=="November"){ echo"selected='selected'"; } ?>>November</option>
              <option value="home.php?home=byr&pmb=3&kd_klss=<? echo "$kd_klss";?>&klsk=<? echo "$klsk&blnb=Desember"; ?>" <? if($blnb=="Desember"){ echo"selected='selected'"; } ?>>Desember</option>
            </select>
      </label></td>
    </tr>
    
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td valign="top" bgcolor="#ACD75E">&nbsp;</td>
      <td valign="top" bgcolor="#ACD75E">&nbsp;</td>
      <td valign="top" bgcolor="#ACD75E">&nbsp;</td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td height="236" colspan="4">
	  <?
	      if($klsk!=""){$klst="WHERE kelas='$klsk'";}
	      $tampil=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas $klst ");
          while($tp=mysqli_fetch_assoc($tampil)){
		  
	  ?>
	    <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#B3CF70">
          <tr> 
            <td colspan="14" bordercolor="#99CC66" bgcolor="#FFFFFF"><div align="left" class="style4">&nbsp;Kelas 
                : <? echo $tp['kelas']; ?></div></td>
          </tr>
          <tr> 
            <td width="6%" bgcolor="#B3CF70"><div align="center"><span class="style3">NIS</span></div></td>
            <td width="17%" bgcolor="#B3CF70"><div align="center"><span class="style3">Nama 
            Lengkap </span></div></td>
            <td width="9%" bgcolor="#B3CF70"><div align="center"><span class="style3">Tunggakan 
            Syahriah  (Bulanan)</span></div></td>
            <td width="8%" bgcolor="#B3CF70"><div align="center"><span class="style3">Tunggakan 
            semester (Pertahun) </span></div></td>
            <td width="8%" bgcolor="#B3CF70"><div align="center" class="style3">Tunggakan 
                Buku <br />
            (Pertahun) </div></td>
            <td width="6%" bgcolor="#B3CF70"><div align="center"><span class="style3">Komite <br />
            (Pertahun) </span></div></td>
            <td width="5%" bgcolor="#B3CF70"><div align="center"><span class="style3">Ta'aruf &amp; Orientasi  <br />
            </span></div></td>
            <td width="5%" bgcolor="#B3CF70"><div align="center"><span class="style3">Pengembangan diri dan eskul</span></div></td>
            <td width="5%" bgcolor="#B3CF70"><div align="center"><span class="style3">Kesehatan</span></div></td>
            <td width="5%" bgcolor="#B3CF70"><div align="center"><span class="style3">Seragam</span></div></td>
            <td width="5%" bgcolor="#B3CF70"><div align="center"><span class="style3">Fasilitas Asrama </span></div></td>
            <td width="5%" bgcolor="#B3CF70"><div align="center"><span class="style3">Kalender</span></div></td>
            <td width="8%" bgcolor="#B3CF70"><div align="center"><font color="#FFFFFF"><strong>Pangkal</strong></font></div></td>
            <td width="8%" bgcolor="#B3CF70"><div align="center" class="style3"> 
                <div align="center">Sisa Yang Harus Dibayar</div>
            </div></td>
          </tr>
          <? 
		  $thnbp=substr($thaj,0,3);
	      $tmpkls=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='$tp[kelas]' and (status='a' or status='p')  ");
          while($ct=mysqli_fetch_assoc($tmpkls)){
	   
	   ?>
          <tr> 
            <td bgcolor="#FFFFFF"><div align="center"><a href="home.php?home=byr&pmb=4&notak=&id_k=<? echo"$ct[id_santri]&klkk=$tp[kd_kls]&bnlk=$blnb"; ?>" class="lk"><? echo"$ct[nis]"; ?></a></div></td>
            <td bgcolor="#FFFFFF"><div align="left">&nbsp;<? echo"$ct[nama]"; ?></div></td>
            <td bgcolor="#FFFFFF"><div align="right"> Rp. 
                <?
		  $tot=0; $tot2=0; $gb1=0; $tot3=0;
	      
		  
		  $pmb9=mysqli_query($koneksi, "SELECT * FROM rincian_bayar,tb_pembayaran WHERE  rincian_bayar.kd_bayar=tb_pembayaran.kd_pembayaran AND rincian_bayar.kd_kls='$tp[kd_kls]'
		                     AND tb_pembayaran.pembayaran='Syahriah' ");
          $c9=mysqli_fetch_assoc($pmb9);
		  
		  
        $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$ct[id_santri]' and kd_bayar='$c9[kd_bayar]' and bln_bayar='$blnb' and 
		                   semester_b='$sem' and thn_b='$thaj'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  }
		  
	$bea=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE kd_santri='$ct[id_santri]' AND kelas='$tp[kelas]' AND thn_ajaran='$thaj' AND semester='$sem' AND kd_bayar='$c9[kd_bayar]' ");
        $cbea=mysqli_fetch_assoc($bea);  
		  
		  $tot3=$tot2+$cbea['jml_beasiswa'];
		  
		  $gb1=$c9['jumlah']-$tot3;
          $hs1=format_agk2($gb1,$blnb,$qbln); 
			
		 
		  ?>
              </div></td>
            <td bgcolor="#FFFFFF"><div align="right"> Rp. 
                <?
		  $tot=0; $tot2=0; $tots=0; $gb2=0;
		  
		   $pmb9=mysqli_query($koneksi, "SELECT * FROM rincian_bayar,tb_pembayaran WHERE  rincian_bayar.kd_bayar=tb_pembayaran.kd_pembayaran AND rincian_bayar.kd_kls='$tp[kd_kls]'
		                     AND tb_pembayaran.pembayaran='Semester' ");
          $c9=mysqli_fetch_assoc($pmb9);
           
		   
          $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$ct[id_santri]' and semester_b='$sem' and thn_b='$thaj' and kd_bayar='$c9[kd_bayar]' ");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  }
		  
	$bea2=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE kd_santri='$ct[id_santri]' AND kelas='$tp[kelas]' AND thn_ajaran='$thaj' AND semester='$sem' AND kd_bayar='$c9[kd_bayar]' ");
    $cbea2=mysqli_fetch_assoc($bea2); 
	$tots=$tot2+$cbea2['jml_beasiswa'];
		
		  $gb2=$c9['jumlah']-$tots;
		  
		$hs2=format_agk($gb2); 
		  ?>
              </div></td>
            <td bgcolor="#FFFFFF"><div align="right">Rp. 
                <?
		  $tot=0; $tot2=0; $totb=0; $gb3=0;
		  
	     $pmb9=mysqli_query($koneksi, "SELECT * FROM rincian_bayar,tb_pembayaran WHERE  rincian_bayar.kd_bayar=tb_pembayaran.kd_pembayaran AND rincian_bayar.kd_kls='$tp[kd_kls]'
		                     AND tb_pembayaran.pembayaran='Buku' ");
          $c9=mysqli_fetch_assoc($pmb9);
		 
          $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$ct[id_santri]' and semester_b='$sem' and thn_b='$thaj' and kd_bayar='$c9[kd_bayar]' ");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  }
		  
	
	$bea3=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE kd_santri='$ct[id_santri]' AND kelas='$tp[kelas]' AND thn_ajaran='$thaj' AND semester='$sem' AND kd_bayar='$c9[kd_bayar]' ");
    $cbea3=mysqli_fetch_assoc($bea3); 
	$totb=$tot2+$cbea3['jml_beasiswa'];
	
	$gb3=$c9['jumlah']-$totb;
	
	$hs3=format_agk($gb3); 
		 // if($gb>=1){  echo "<font color='#ff0000'>$gtot4</font>"; }else{ echo 0; } 
		  ?>
              </div></td>
            <td bgcolor="#FFFFFF"><div align="right">Rp.
                <?
		  $tot=0; $tot2=0; $totb=0; $gb4=0;
		  
	     $pmb9=mysqli_query($koneksi, "SELECT * FROM rincian_bayar,tb_pembayaran WHERE  rincian_bayar.kd_bayar=tb_pembayaran.kd_pembayaran AND rincian_bayar.kd_kls='$tp[kd_kls]'
		                     AND tb_pembayaran.pembayaran='Komite' ");
          $c9=mysqli_fetch_assoc($pmb9);
		 
          $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$ct[id_santri]' and semester_b='$sem' and thn_b='$thaj' and kd_bayar='$c9[kd_bayar]' ");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  }
		  
	
	$bea3=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE kd_santri='$ct[id_santri]' AND kelas='$tp[kelas]' AND thn_ajaran='$thaj' AND semester='$sem' AND kd_bayar='$c9[kd_bayar]' ");
    $cbea3=mysqli_fetch_assoc($bea3); 
	$totb=$tot2+$cbea3['jml_beasiswa'];
	
	$gb4=$c9['jumlah']-$totb;
	
	$hs4=format_agk($gb4); 
		 // if($gb>=1){  echo "<font color='#ff0000'>$gtot4</font>"; }else{ echo 0; } 
		  ?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="right">Rp.
              <?
		  $tot=0; $tot2=0; $totb=0; $gb5=0;
		  
	     $pmb9=mysqli_query($koneksi, "SELECT * FROM rincian_bayar,tb_pembayaran WHERE  rincian_bayar.kd_bayar=tb_pembayaran.kd_pembayaran AND rincian_bayar.kd_kls='$tp[kd_kls]'
		                     AND tb_pembayaran.pembayaran='Taaruf dan orientasi santri' ");
          $c9=mysqli_fetch_assoc($pmb9);
		 
          $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$ct[id_santri]' and semester_b='$sem' and thn_b='$thaj' and kd_bayar='$c9[kd_bayar]' ");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  }
		  
	
	$bea3=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE kd_santri='$ct[id_santri]' AND kelas='$tp[kelas]' AND thn_ajaran='$thaj' AND semester='$sem' AND kd_bayar='$c9[kd_bayar]' ");
    $cbea3=mysqli_fetch_assoc($bea3); 
	$totb=$tot2+$cbea3['jml_beasiswa'];
	
	$gb5=$c9['jumlah']-$totb;
	
	$hs5=format_agk($gb5); 
		 // if($gb>=1){  echo "<font color='#ff0000'>$gtot4</font>"; }else{ echo 0; } 
		  ?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="right">Rp.
              <?
		  $tot=0; $tot2=0; $totb=0; $gb6=0;
		  
	     $pmb9=mysqli_query($koneksi, "SELECT * FROM rincian_bayar,tb_pembayaran WHERE  rincian_bayar.kd_bayar=tb_pembayaran.kd_pembayaran AND rincian_bayar.kd_kls='$tp[kd_kls]'
		                     AND tb_pembayaran.pembayaran='Pengembangan Diri dan Eskul' ");
          $c9=mysqli_fetch_assoc($pmb9);
		 
          $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$ct[id_santri]' and semester_b='$sem' and thn_b='$thaj' and kd_bayar='$c9[kd_bayar]' ");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  }
		  
	
	$bea3=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE kd_santri='$ct[id_santri]' AND kelas='$tp[kelas]' AND thn_ajaran='$thaj' AND semester='$sem' AND kd_bayar='$c9[kd_bayar]' ");
    $cbea3=mysqli_fetch_assoc($bea3); 
	$totb=$tot2+$cbea3['jml_beasiswa'];
	
	$gb6=$c9['jumlah']-$totb;
	
	$hs5=format_agk($gb6); 
		 // if($gb>=1){  echo "<font color='#ff0000'>$gtot4</font>"; }else{ echo 0; } 
		  ?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="right">Rp.
              <?
		  $tot=0; $tot2=0; $totb=0; $gb7=0;
		  
	     $pmb9=mysqli_query($koneksi, "SELECT * FROM rincian_bayar,tb_pembayaran WHERE  rincian_bayar.kd_bayar=tb_pembayaran.kd_pembayaran AND rincian_bayar.kd_kls='$tp[kd_kls]'
		                     AND tb_pembayaran.pembayaran='Kesehatan' ");
          $c9=mysqli_fetch_assoc($pmb9);
		 
          $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$ct[id_santri]' and semester_b='$sem' and thn_b='$thaj' and kd_bayar='$c9[kd_bayar]' ");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  }
		  
	
	$bea3=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE kd_santri='$ct[id_santri]' AND kelas='$tp[kelas]' AND thn_ajaran='$thaj' AND semester='$sem' AND kd_bayar='$c9[kd_bayar]' ");
    $cbea3=mysqli_fetch_assoc($bea3); 
	$totb=$tot2+$cbea3['jml_beasiswa'];
	
	$gb7=$c9['jumlah']-$totb;
	
	$hs5=format_agk($gb7); 
		 // if($gb>=1){  echo "<font color='#ff0000'>$gtot4</font>"; }else{ echo 0; } 
		  ?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="right">Rp.
              <?
		  $tot=0; $tot2=0; $totb=0; $gb8=0;
		  
	     $pmb9=mysqli_query($koneksi, "SELECT * FROM rincian_bayar,tb_pembayaran WHERE  rincian_bayar.kd_bayar=tb_pembayaran.kd_pembayaran AND rincian_bayar.kd_kls='$tp[kd_kls]'
		                     AND tb_pembayaran.pembayaran='Seragam' ");
          $c9=mysqli_fetch_assoc($pmb9);
		 
          $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$ct[id_santri]' and semester_b='$sem' and thn_b='$thaj' and kd_bayar='$c9[kd_bayar]' ");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  }
		  
	
	$bea3=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE kd_santri='$ct[id_santri]' AND kelas='$tp[kelas]' AND thn_ajaran='$thaj' AND semester='$sem' AND kd_bayar='$c9[kd_bayar]' ");
    $cbea3=mysqli_fetch_assoc($bea3); 
	$totb=$tot2+$cbea3['jml_beasiswa'];
	
	$gb8=$c9['jumlah']-$totb;
	
	$hs5=format_agk($gb8); 
		 // if($gb>=1){  echo "<font color='#ff0000'>$gtot4</font>"; }else{ echo 0; } 
		  ?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="right">Rp.
              <?
		  $tot=0; $tot2=0; $totb=0; $gb9=0;
		  
	     $pmb9=mysqli_query($koneksi, "SELECT * FROM rincian_bayar,tb_pembayaran WHERE  rincian_bayar.kd_bayar=tb_pembayaran.kd_pembayaran AND rincian_bayar.kd_kls='$tp[kd_kls]'
		                     AND tb_pembayaran.pembayaran='' ");
          $c9=mysqli_fetch_assoc($pmb9);
		 
          $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$ct[id_santri]' and semester_b='$sem' and thn_b='$thaj' and kd_bayar='$c9[kd_bayar]' ");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  }
		  
	
	$bea3=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE kd_santri='$ct[id_santri]' AND kelas='$tp[kelas]' AND thn_ajaran='$thaj' AND semester='$sem' AND kd_bayar='$c9[kd_bayar]' ");
    $cbea3=mysqli_fetch_assoc($bea3); 
	$totb=$tot2+$cbea3['jml_beasiswa'];
	
	$gb9=$c9['jumlah']-$totb;
	
	$hs5=format_agk($gb9); 
		 // if($gb>=1){  echo "<font color='#ff0000'>$gtot4</font>"; }else{ echo 0; } 
		  ?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="right">Rp.
              <?
		  $tot=0; $tot2=0; $totb=0; $gb10=0;
		  
	     $pmb9=mysqli_query($koneksi, "SELECT * FROM rincian_bayar,tb_pembayaran WHERE  rincian_bayar.kd_bayar=tb_pembayaran.kd_pembayaran AND rincian_bayar.kd_kls='$tp[kd_kls]'
		                     AND tb_pembayaran.pembayaran='Kalender' ");
          $c9=mysqli_fetch_assoc($pmb9);
		 
          $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$ct[id_santri]' and semester_b='$sem' and thn_b='$thaj' and kd_bayar='$c9[kd_bayar]' ");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  }
		  
	
	$bea3=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE kd_santri='$ct[id_santri]' AND kelas='$tp[kelas]' AND thn_ajaran='$thaj' AND semester='$sem' AND kd_bayar='$c9[kd_bayar]' ");
    $cbea3=mysqli_fetch_assoc($bea3); 
	$totb=$tot2+$cbea3['jml_beasiswa'];
	
	$gb10=$c9['jumlah']-$totb;
	
	$hs5=format_agk($gb10); 
		 // if($gb>=1){  echo "<font color='#ff0000'>$gtot4</font>"; }else{ echo 0; } 
		  ?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="right">Rp.
              <?
		  $tot=0; $tot2=0; $totb=0; $gb11=0;
		  
	     $pmb9=mysqli_query($koneksi, "SELECT * FROM rincian_bayar,tb_pembayaran WHERE  rincian_bayar.kd_bayar=tb_pembayaran.kd_pembayaran AND rincian_bayar.kd_kls='$tp[kd_kls]'
		                     AND tb_pembayaran.pembayaran='Pangkal' ");
          $c9=mysqli_fetch_assoc($pmb9);
		 
          $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$ct[id_santri]' and semester_b='$sem' and thn_b='$thaj' and kd_bayar='$c9[kd_bayar]' ");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  }
		  
	
	$bea3=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE kd_santri='$ct[id_santri]' AND kelas='$tp[kelas]' AND thn_ajaran='$thaj' AND semester='$sem' AND kd_bayar='$c9[kd_bayar]' ");
    $cbea3=mysqli_fetch_assoc($bea3); 
	$totb=$tot2+$cbea3['jml_beasiswa'];
	
	$gb11=$c9['jumlah']-$totb;
	
	$hs5=format_agk($gb11); 
		 // if($gb>=1){  echo "<font color='#ff0000'>$gtot4</font>"; }else{ echo 0; } 
		  ?>
</div></td>
            <td bgcolor="#FFFFFF"><div align="right">Rp. 
                <? 
			$tot_jb=0;
			$tot_jb=$gb1+$gb2+$gb3+$gb4+$g5+$gb6+$gb7+$gb8+$gb9+$gb10+$gb11;
			$hsj=format_agk($tot_jb);
			?>
              </div></td>
          </tr>
          <? } ?>
          <tr> 
            <td height="116" colspan="14" valign="top" bgcolor="#B3CF70"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr> 
                  <td width="1%">&nbsp;</td>
                  <td width="23%">&nbsp;</td>
                  <td width="1%">&nbsp;</td>
                  <td width="32%">&nbsp;</td>
                  <td width="43%">&nbsp;</td>
                </tr>
                <tr> 
                  <td>&nbsp;</td>
                  <td>Total Tunggakan Syahria &amp; Komite </td>
                  <td>:</td>
                  <td>Rp. 
                    <? 
				 $tot_sk=0;
			     $jml_t=0;
				 $jml_t2=0;
				 $totts=0;
				 $tot_tsy=0;
		         $tgks=mysqli_query($koneksi, "SELECT id_santri,kelas_st,status FROM tb_santri WHERE kelas_st='$tp[kelas]' and (status='a' or 
				                    status='p') ");
                 $ctgks=mysqli_num_rows($tgks); // jumlah santri kelas $tp[kelas]
				 
				 $pmb9=mysqli_query($koneksi, "SELECT * FROM rincian_bayar,tb_pembayaran WHERE  rincian_bayar.kd_bayar=tb_pembayaran.kd_pembayaran AND rincian_bayar.kd_kls='$kd_klss'
		                     AND tb_pembayaran.pembayaran='Syahriah' ");
                  $c9=mysqli_fetch_assoc($pmb9);
				 
				 $tgks2=mysqli_query($koneksi, "SELECT kd_pembayaran,jumlah FROM tb_pembayaran WHERE kd_pembayaran='$c9[kd_bayar]' ");
                 $ctgks2=mysqli_fetch_assoc($tgks2); // jumlah pembayaran syariah kode 1
				 $tot_sk=$ctgks*$ctgks2['jumlah'];
				 
			while($ctgks4=mysqli_fetch_assoc($tgks)){	
			$tgks3=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$ctgks4[id_santri]' and kd_bayar='$c9[kd_bayar]' and 
			                    bln_bayar='$blnb' and semester_b='$sem' and thn_b='$thaj' ");
            $ctgks3=mysqli_fetch_assoc($tgks3);
			$jml_t=$jml_t+$ctgks3['jml_bayar'];
		    } 
			
			$bea5=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE thn_ajaran='$thaj' AND semester='$sem' AND kelas='$tp[kelas]' AND 
			                   kd_bayar='$c9[kd_bayar]' ");
            while($cbea5=mysqli_fetch_assoc($bea5)){ 
	        $tot_tsy=$tot_tsy+$cbea5['jml_beasiswa'];
			  }
			  
			$jml_t2=$tot_sk-($jml_t+$tot_tsy);
			
			$hs2=format_agk2($jml_t2,$blnb,$qbln); 
			  
			
			   ?>                  </td>
                  <td><a href="page/report_tunggakan.php?<? echo"klsk=$tp[kelas]&blnk=$blnb"; ?>" class="lk" target="_blank"><img src="images/index.gif" width="20" height="22" align="absmiddle" border="0" />&nbsp;Priview 
                    Tunggakan Santri</a></td>
                </tr>
                <tr> 
                  <td>&nbsp;</td>
                  <td>Total Tunggakan Semester </td>
                  <td>:</td>
                  <td>Rp. 
                    <? 
				 $tot_byr=0;
				 $jmlb_st=0;
			     $tot_bst=0;
				 $tot_ts=0;
				 
		         $jstr=mysqli_query($koneksi, "SELECT id_santri,kelas_st,status FROM tb_santri WHERE kelas_st='$tp[kelas]' and (status='a' or status='p') ");
                 $ctjstr=mysqli_num_rows($jstr);
				 
				 $pmb9=mysqli_query($koneksi, "SELECT * FROM rincian_bayar,tb_pembayaran WHERE  rincian_bayar.kd_bayar=tb_pembayaran.kd_pembayaran AND rincian_bayar.kd_kls='$kd_klss'
		                     AND tb_pembayaran.pembayaran='Semester' ");
                 $c9=mysqli_fetch_assoc($pmb9);
				 
				 $jmlb=mysqli_query($koneksi, "SELECT kd_pembayaran,jumlah FROM tb_pembayaran WHERE kd_pembayaran='$c9[kd_bayar]' ");
                 $cjmlb=mysqli_fetch_assoc($jmlb);
				 $tot_byr=$ctjstr*$cjmlb['jumlah'];
				 
    		while($ctjst=mysqli_fetch_assoc($jstr)){	
			$jbyr=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$ctjst[id_santri]' and kd_bayar='$c9[kd_bayar]' and semester_b='$sem' and thn_b='$thaj' ");
            $cjbyr=mysqli_fetch_assoc($jbyr);
			$jmlb_st=$jmlb_st-$cjbyr['jml_bayar'];
		    } 
			
			$bea6=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE thn_ajaran='$thaj' AND semester='$sem' AND kelas='$tp[kelas]' AND 
			                   kd_bayar='$c9[kd_bayar]' ");
            while($cbea6=mysqli_fetch_assoc($bea6)){ 
	        $tot_ts=$tot_ts+$cbea6['jml_beasiswa'];
			 }
			 $tot_bst=$tot_byr-($jmlb_st+$tot_ts);
			 $hs3=format_agk($tot_bst);
			   ?>                  </td>
                  <td>&nbsp;</td>
                </tr>
                <tr> 
                  <td>&nbsp;</td>
                  <td>Total Tunggakan Buku </td>
                  <td>:</td>
                  <td>Rp. 
                    <? 
				$tot_sk=0;
			     $jml_t=0;
				 $jml_t2=0;
				 $tot_bk=0;
		         $tgks=mysqli_query($koneksi, "SELECT id_santri,kelas_st,status FROM tb_santri WHERE kelas_st='$tp[kelas]' and (status='a' or status='p') ");
                 $ctgks=mysqli_num_rows($tgks);
				 
				 $pmb9=mysqli_query($koneksi, "SELECT * FROM rincian_bayar,tb_pembayaran WHERE  rincian_bayar.kd_bayar=tb_pembayaran.kd_pembayaran AND rincian_bayar.kd_kls='$kd_klss'
		                     AND tb_pembayaran.pembayaran='Buku' ");
                 $c9=mysqli_fetch_assoc($pmb9);
				 
				 $tgks2=mysqli_query($koneksi, "SELECT kd_pembayaran,jumlah FROM tb_pembayaran WHERE kd_pembayaran='$c9[kd_bayar]' ");
                 $ctgks2=mysqli_fetch_assoc($tgks2);
				 $tot_sk=$ctgks*$ctgks2['jumlah'];
				 
				 
			while($ctgks4=mysqli_fetch_assoc($tgks)){	
			$tgks3=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$ctgks4[id_santri]' and kd_bayar='$c9[kd_bayar]' and semester_b='$sem' and thn_b='$thaj' ");
            $ctgks3=mysqli_fetch_assoc($tgks3);
			$jml_t=$jml_t-$ctgks3['jml_bayar'];
		    } 
			
			$bea7=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE thn_ajaran='$thaj' AND semester='$sem' AND kelas='$tp[kelas]' AND 
			                   kd_bayar='$c9[kd_bayar]' ");
            while($cbea7=mysqli_fetch_assoc($bea7)){
	        $tot_bk=$tot_bk+$cbea7['jml_beasiswa'];
			}
			
			 $jml_t2=$tot_sk-($jml_t+$tot_bk);
			 $hs4=format_agk($jml_t2);
			   ?>                  </td>
                  <td>&nbsp;</td>
                </tr>
                <tr> 
                  <td>&nbsp;</td>
                  <td>Total Komite </td>
                  <td>:</td>
                  <td>Rp. 
                    <? 
				 $tot_sk3=0;
			     $jml_t3=0;
				 $jml_t4=0;
				 $tot_tb=0;
		         $tgks4=mysqli_query($koneksi, "SELECT id_santri,kelas_st,status FROM tb_santri WHERE kelas_st='$tp[kelas]' and (status='a' or status='p') ");
                 $ctgks=mysqli_num_rows($tgks4);
				 
				  $pmb9=mysqli_query($koneksi, "SELECT * FROM rincian_bayar,tb_pembayaran WHERE  rincian_bayar.kd_bayar=tb_pembayaran.kd_pembayaran AND rincian_bayar.kd_kls='$kd_klss'
		                     AND tb_pembayaran.pembayaran='Komite' ");
                 $c9=mysqli_fetch_assoc($pmb9);
				 
				 $tgks5=mysqli_query($koneksi, "SELECT kd_pembayaran,jumlah FROM tb_pembayaran WHERE kd_pembayaran='$c9[kd_bayar]' ");
                 $ctgks2=mysqli_fetch_assoc($tgks5);
				 $tot_sk3=$ctgks*$ctgks2['jumlah'];
				 
			while($ctgks4=mysqli_fetch_assoc($tgks4)){	
			$tgks7=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$ctgks4[id_santri]' and kd_bayar='$c9[kd_bayar]' and semester_b='$sem' and thn_b='$thaj' ");
            $ctgks8=mysqli_fetch_assoc($tgks7);
			$jml_t3=$jml_t3+$ctgks8['jml_bayar'];
		    } 
			
			$bea8=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE thn_ajaran='$thaj' AND semester='$sem' AND kelas='$tp[kelas]' AND 
			                   kd_bayar='$c9[kd_bayar]' ");
            while($cbea8=mysqli_fetch_assoc($bea8)){
	        $tot_tb=$tot_tb+$cbea8['jml_beasiswa'];
			}
			 $jml_t4=$tot_sk3-($jml_t3+tot_tb);
			 $hs5=format_agk($jml_t4);  
			 
			   ?>                  </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>Ta'aruf dan Masa Orientasi Santri </td>
                  <td>&nbsp;</td>
                  <td>Rp.
                    <? 
				 $tot_sk3=0;
			     $jml_t3=0;
				 $jml_t4=0;
				 $tot_tb=0;
		         $tgks4=mysqli_query($koneksi, "SELECT id_santri,kelas_st,status FROM tb_santri WHERE kelas_st='$tp[kelas]' and (status='a' or status='p') ");
                 $ctgks=mysqli_num_rows($tgks4);
				 
				  $pmb9=mysqli_query($koneksi, "SELECT * FROM rincian_bayar,tb_pembayaran WHERE  rincian_bayar.kd_bayar=tb_pembayaran.kd_pembayaran AND rincian_bayar.kd_kls='$kd_klss'
		                     AND tb_pembayaran.pembayaran='Taaruf dan orientasi santri' ");
                 $c9=mysqli_fetch_assoc($pmb9);
				 
				 $tgks5=mysqli_query($koneksi, "SELECT kd_pembayaran,jumlah FROM tb_pembayaran WHERE kd_pembayaran='$c9[kd_bayar]' ");
                 $ctgks2=mysqli_fetch_assoc($tgks5);
				 $tot_sk3=$ctgks*$ctgks2['jumlah'];
				 
			while($ctgks4=mysqli_fetch_assoc($tgks4)){	
			$tgks7=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$ctgks4[id_santri]' and kd_bayar='$c9[kd_bayar]' and semester_b='$sem' and thn_b='$thaj' ");
            $ctgks8=mysqli_fetch_assoc($tgks7);
			$jml_t3=$jml_t3+$ctgks8['jml_bayar'];
		    } 
			
			$bea8=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE thn_ajaran='$thaj' AND semester='$sem' AND kelas='$tp[kelas]' AND 
			                   kd_bayar='$c9[kd_bayar]' ");
            while($cbea8=mysqli_fetch_assoc($bea8)){
	        $tot_tb=$tot_tb+$cbea8['jml_beasiswa'];
			}
			 $jml_t4=$tot_sk3-($jml_t3+tot_tb);
			 $hs5=format_agk($jml_t4);  
			 
			   ?></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>Pengembangan Diri &amp; Eskul </td>
                  <td>&nbsp;</td>
                  <td>Rp.
                  <? 
				 $tot_sk3=0;
			     $jml_t3=0;
				 $jml_t4=0;
				 $tot_tb=0;
		         $tgks4=mysqli_query($koneksi, "SELECT id_santri,kelas_st,status FROM tb_santri WHERE kelas_st='$tp[kelas]' and (status='a' or status='p') ");
                 $ctgks=mysqli_num_rows($tgks4);
				 
				  $pmb9=mysqli_query($koneksi, "SELECT * FROM rincian_bayar,tb_pembayaran WHERE  rincian_bayar.kd_bayar=tb_pembayaran.kd_pembayaran AND rincian_bayar.kd_kls='$kd_klss'
		                     AND tb_pembayaran.pembayaran='Pengembangan Diri dan Eskul' ");
                 $c9=mysqli_fetch_assoc($pmb9);
				 
				 $tgks5=mysqli_query($koneksi, "SELECT kd_pembayaran,jumlah FROM tb_pembayaran WHERE kd_pembayaran='$c9[kd_bayar]' ");
                 $ctgks2=mysqli_fetch_assoc($tgks5);
				 $tot_sk3=$ctgks*$ctgks2['jumlah'];
				 
			while($ctgks4=mysqli_fetch_assoc($tgks4)){	
			$tgks7=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$ctgks4[id_santri]' and kd_bayar='$c9[kd_bayar]' and semester_b='$sem' and thn_b='$thaj' ");
            $ctgks8=mysqli_fetch_assoc($tgks7);
			$jml_t3=$jml_t3+$ctgks8['jml_bayar'];
		    } 
			
			$bea8=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE thn_ajaran='$thaj' AND semester='$sem' AND kelas='$tp[kelas]' AND 
			                   kd_bayar='$c9[kd_bayar]' ");
            while($cbea8=mysqli_fetch_assoc($bea8)){
	        $tot_tb=$tot_tb+$cbea8['jml_beasiswa'];
			}
			 $jml_t4=$tot_sk3-($jml_t3+tot_tb);
			 $hs5=format_agk($jml_t4);  
			 
			   ?></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>Kesehatan</td>
                  <td>&nbsp;</td>
                  <td>Rp.
                  <? 
				 $tot_sk3=0;
			     $jml_t3=0;
				 $jml_t4=0;
				 $tot_tb=0;
		         $tgks4=mysqli_query($koneksi, "SELECT id_santri,kelas_st,status FROM tb_santri WHERE kelas_st='$tp[kelas]' and (status='a' or status='p') ");
                 $ctgks=mysqli_num_rows($tgks4);
				 
				  $pmb9=mysqli_query($koneksi, "SELECT * FROM rincian_bayar,tb_pembayaran WHERE  rincian_bayar.kd_bayar=tb_pembayaran.kd_pembayaran AND rincian_bayar.kd_kls='$kd_klss'
		                     AND tb_pembayaran.pembayaran='Kesehatan' ");
                 $c9=mysqli_fetch_assoc($pmb9);
				 
				 $tgks5=mysqli_query($koneksi, "SELECT kd_pembayaran,jumlah FROM tb_pembayaran WHERE kd_pembayaran='$c9[kd_bayar]' ");
                 $ctgks2=mysqli_fetch_assoc($tgks5);
				 $tot_sk3=$ctgks*$ctgks2['jumlah'];
				 
			while($ctgks4=mysqli_fetch_assoc($tgks4)){	
			$tgks7=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$ctgks4[id_santri]' and kd_bayar='$c9[kd_bayar]' and semester_b='$sem' and thn_b='$thaj' ");
            $ctgks8=mysqli_fetch_assoc($tgks7);
			$jml_t3=$jml_t3+$ctgks8['jml_bayar'];
		    } 
			
			$bea8=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE thn_ajaran='$thaj' AND semester='$sem' AND kelas='$tp[kelas]' AND 
			                   kd_bayar='$c9[kd_bayar]' ");
            while($cbea8=mysqli_fetch_assoc($bea8)){
	        $tot_tb=$tot_tb+$cbea8['jml_beasiswa'];
			}
			 $jml_t4=$tot_sk3-($jml_t3+tot_tb);
			 $hs5=format_agk($jml_t4);  
			 
			   ?></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>Seragam</td>
                  <td>&nbsp;</td>
                  <td>Rp.
                  <? 
				 $tot_sk3=0;
			     $jml_t3=0;
				 $jml_t4=0;
				 $tot_tb=0;
		         $tgks4=mysqli_query($koneksi, "SELECT id_santri,kelas_st,status FROM tb_santri WHERE kelas_st='$tp[kelas]' and (status='a' or status='p') ");
                 $ctgks=mysqli_num_rows($tgks4);
				 
				  $pmb9=mysqli_query($koneksi, "SELECT * FROM rincian_bayar,tb_pembayaran WHERE  rincian_bayar.kd_bayar=tb_pembayaran.kd_pembayaran AND rincian_bayar.kd_kls='$kd_klss'
		                     AND tb_pembayaran.pembayaran='Seragam' ");
                 $c9=mysqli_fetch_assoc($pmb9);
				 
				 $tgks5=mysqli_query($koneksi, "SELECT kd_pembayaran,jumlah FROM tb_pembayaran WHERE kd_pembayaran='$c9[kd_bayar]' ");
                 $ctgks2=mysqli_fetch_assoc($tgks5);
				 $tot_sk3=$ctgks*$ctgks2['jumlah'];
				 
			while($ctgks4=mysqli_fetch_assoc($tgks4)){	
			$tgks7=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$ctgks4[id_santri]' and kd_bayar='$c9[kd_bayar]' and semester_b='$sem' and thn_b='$thaj' ");
            $ctgks8=mysqli_fetch_assoc($tgks7);
			$jml_t3=$jml_t3+$ctgks8['jml_bayar'];
		    } 
			
			$bea8=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE thn_ajaran='$thaj' AND semester='$sem' AND kelas='$tp[kelas]' AND 
			                   kd_bayar='$c9[kd_bayar]' ");
            while($cbea8=mysqli_fetch_assoc($bea8)){
	        $tot_tb=$tot_tb+$cbea8['jml_beasiswa'];
			}
			 $jml_t4=$tot_sk3-($jml_t3+tot_tb);
			 $hs5=format_agk($jml_t4);  
			 
			   ?></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>Fasilitas Asrama </td>
                  <td>&nbsp;</td>
                  <td>Rp.
                  <? 
				 $tot_sk3=0;
			     $jml_t3=0;
				 $jml_t4=0;
				 $tot_tb=0;
		         $tgks4=mysqli_query($koneksi, "SELECT id_santri,kelas_st,status FROM tb_santri WHERE kelas_st='$tp[kelas]' and (status='a' or status='p') ");
                 $ctgks=mysqli_num_rows($tgks4);
				 
				  $pmb9=mysqli_query($koneksi, "SELECT * FROM rincian_bayar,tb_pembayaran WHERE  rincian_bayar.kd_bayar=tb_pembayaran.kd_pembayaran AND rincian_bayar.kd_kls='$kd_klss'
		                     AND tb_pembayaran.pembayaran='Fasilitas Asrama' ");
                 $c9=mysqli_fetch_assoc($pmb9);
				 
				 $tgks5=mysqli_query($koneksi, "SELECT kd_pembayaran,jumlah FROM tb_pembayaran WHERE kd_pembayaran='$c9[kd_bayar]' ");
                 $ctgks2=mysqli_fetch_assoc($tgks5);
				 $tot_sk3=$ctgks*$ctgks2['jumlah'];
				 
			while($ctgks4=mysqli_fetch_assoc($tgks4)){	
			$tgks7=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$ctgks4[id_santri]' and kd_bayar='$c9[kd_bayar]' and semester_b='$sem' and thn_b='$thaj' ");
            $ctgks8=mysqli_fetch_assoc($tgks7);
			$jml_t3=$jml_t3+$ctgks8['jml_bayar'];
		    } 
			
			$bea8=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE thn_ajaran='$thaj' AND semester='$sem' AND kelas='$tp[kelas]' AND 
			                   kd_bayar='$c9[kd_bayar]' ");
            while($cbea8=mysqli_fetch_assoc($bea8)){
	        $tot_tb=$tot_tb+$cbea8['jml_beasiswa'];
			}
			 $jml_t4=$tot_sk3-($jml_t3+tot_tb);
			 $hs5=format_agk($jml_t4);  
			 
			   ?></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>Kalender</td>
                  <td>&nbsp;</td>
                  <td>Rp.
                  <? 
				 $tot_sk3=0;
			     $jml_t3=0;
				 $jml_t4=0;
				 $tot_tb=0;
		         $tgks4=mysqli_query($koneksi, "SELECT id_santri,kelas_st,status FROM tb_santri WHERE kelas_st='$tp[kelas]' and (status='a' or status='p') ");
                 $ctgks=mysqli_num_rows($tgks4);
				 
				  $pmb9=mysqli_query($koneksi, "SELECT * FROM rincian_bayar,tb_pembayaran WHERE  rincian_bayar.kd_bayar=tb_pembayaran.kd_pembayaran AND rincian_bayar.kd_kls='$kd_klss'
		                     AND tb_pembayaran.pembayaran='Kalender' ");
                 $c9=mysqli_fetch_assoc($pmb9);
				 
				 $tgks5=mysqli_query($koneksi, "SELECT kd_pembayaran,jumlah FROM tb_pembayaran WHERE kd_pembayaran='$c9[kd_bayar]' ");
                 $ctgks2=mysqli_fetch_assoc($tgks5);
				 $tot_sk3=$ctgks*$ctgks2['jumlah'];
				 
			while($ctgks4=mysqli_fetch_assoc($tgks4)){	
			$tgks7=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$ctgks4[id_santri]' and kd_bayar='$c9[kd_bayar]' and semester_b='$sem' and thn_b='$thaj' ");
            $ctgks8=mysqli_fetch_assoc($tgks7);
			$jml_t3=$jml_t3+$ctgks8['jml_bayar'];
		    } 
			
			$bea8=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE thn_ajaran='$thaj' AND semester='$sem' AND kelas='$tp[kelas]' AND 
			                   kd_bayar='$c9[kd_bayar]' ");
            while($cbea8=mysqli_fetch_assoc($bea8)){
	        $tot_tb=$tot_tb+$cbea8['jml_beasiswa'];
			}
			 $jml_t4=$tot_sk3-($jml_t3+tot_tb);
			 $hs5=format_agk($jml_t4);  
			 
			   ?></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>Pangkal</td>
                  <td>&nbsp;</td>
                  <td>Rp.
                  <? 
				 $tot_sk3=0;
			     $jml_t3=0;
				 $jml_t4=0;
				 $tot_tb=0;
		         $tgks4=mysqli_query($koneksi, "SELECT id_santri,kelas_st,status FROM tb_santri WHERE kelas_st='$tp[kelas]' and (status='a' or status='p') ");
                 $ctgks=mysqli_num_rows($tgks4);
				 
				  $pmb9=mysqli_query($koneksi, "SELECT * FROM rincian_bayar,tb_pembayaran WHERE  rincian_bayar.kd_bayar=tb_pembayaran.kd_pembayaran AND rincian_bayar.kd_kls='$kd_klss'
		                             AND tb_pembayaran.pembayaran='Pangkal' ");
                 $c9=mysqli_fetch_assoc($pmb9);
				 
				 $tgks5=mysqli_query($koneksi, "SELECT kd_pembayaran,jumlah FROM tb_pembayaran WHERE kd_pembayaran='$c9[kd_bayar]' ");
                 $ctgks2=mysqli_fetch_assoc($tgks5);
				 $tot_sk3=$ctgks*$ctgks2['jumlah'];
				 
			while($ctgks4=mysqli_fetch_assoc($tgks4)){	
			$tgks7=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$ctgks4[id_santri]' and kd_bayar='$c9[kd_bayar]' and semester_b='$sem' and thn_b='$thaj' ");
            $ctgks8=mysqli_fetch_assoc($tgks7);
			$jml_t3=$jml_t3+$ctgks8['jml_bayar'];
		    } 
			
			$bea8=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE thn_ajaran='$thaj' AND semester='$sem' AND kelas='$tp[kelas]' AND 
			                   kd_bayar='$c9[kd_bayar]' ");
            while($cbea8=mysqli_fetch_assoc($bea8)){
	        $tot_tb=$tot_tb+$cbea8['jml_beasiswa'];
			}
			 $jml_t4=$tot_sk3-($jml_t3+tot_tb);
			 $hs5=format_agk($jml_t4);  
			 
			
			   ?></td>
                  <td>&nbsp;</td>
                </tr>
                <tr> 
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </table></td>
          </tr>
        </table>	  
	  <? echo "<br>"; } ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
    </tr>
  </table>
</form>

</body>
</html>
