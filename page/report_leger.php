<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style9 {
	color: #000000;
	font-weight: bold;
}
.style10 {color: #000000}
.style11 {color: #000000; font-size: 10px; }
.style12 {font-size: 10px}
-->
</style>
</head>
<?
include("../koneksi.php");
 include("../function.php");
 $klsk=$_GET['klsk'];
 $kkkm=$_GET['kkkm'];
 $thaj=$_COOKIE['thaj'];
 $sem=$_COOKIE['sem'];
 $idstr=$_GET['idstr'];
 ini_set('max_execution_time',300);
?>
<body>
<table width="1500" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="25">LEGER SMP IT SHOHWATUL IS'AD  </td>
  </tr>
  <tr>
    <td>Kelas 
    : <? echo $idstr;  ?> &nbsp;&nbsp;&brvbar; &nbsp;&nbsp;Semester : <? echo $sem; ?>&nbsp;&nbsp;&nbsp;&brvbar;&nbsp; &nbsp;Tahun Ajaran : <? echo $thaj; ?> &nbsp;&nbsp;&brvbar;&nbsp; KKM :
    <?
	   echo $kkkm;
		 
		?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      
      <tr>
        <td width="2%" rowspan="2" bgcolor="#FFFFFF"><div align="center" class="style9">NIS</div></td>
        <td width="17%" rowspan="2" bgcolor="#FFFFFF"><div align="center" class="style9">Nama 
          Lengkap </div></td>
        <td colspan="11" bgcolor="#FFFFFF"><div align="center" class="style10">DEPARTEMEN</div></td>
        <td colspan="15" bgcolor="#FFFFFF"><div align="center" class="style10">PESANTREN</div></td>
        <td width="3%" rowspan="2" bgcolor="#FFFFFF"><span class="style10"></span>          <div align="center" class="style11">
              <div align="center">JUMLAH</div>
          </div></td>
        <td width="2%" rowspan="2" bgcolor="#FFFFFF"><span class="style10"></span>          <div align="center" class="style11">RATA2</div></td>
        <td width="2%" rowspan="2" bgcolor="#FFFFFF"><span class="style10"></span>          <div align="center" class="style11">PRINGKT</div></td>
      </tr>
      <tr>
        <td width="2%" bgcolor="#FFFFFF"><div align="center" class="style11">PAI</div></td>
        <td width="2%" bgcolor="#FFFFFF"><div align="center" class="style11">PKN</div></td>
        <td width="2%" bgcolor="#FFFFFF"><div align="center" class="style11">INA</div></td>
        <td width="2%" bgcolor="#FFFFFF"><div align="center" class="style11">ING</div></td>
        <td width="2%" bgcolor="#FFFFFF"><div align="center" class="style11">MTK</div></td>
        <td width="2%" bgcolor="#FFFFFF"><div align="center" class="style11">IPA</div></td>
        <td width="2%" bgcolor="#FFFFFF"><div align="center" class="style11">IPS</div></td>
        <td width="2%" bgcolor="#FFFFFF"><div align="center" class="style11">KHT</div></td>
        <td width="2%" bgcolor="#FFFFFF"><div align="center" class="style11">PNJS</div></td>
        <td width="2%" bgcolor="#FFFFFF"><div align="center" class="style11">TIK</div></td>
        <td width="2%" bgcolor="#FFFFFF"><div align="center" class="style11">KDA</div></td>
        <td width="2%" bgcolor="#FFFFFF"><div align="center" class="style11">TJW</div></td>
        <td width="2%" bgcolor="#FFFFFF"><div align="center" class="style11">TPZ</div></td>
        <td width="2%" bgcolor="#FFFFFF"><div align="center" class="style11">B.ARAB</div></td>
        <td width="2%" bgcolor="#FFFFFF"><div align="center" class="style11">IML</div></td>
        <td width="2%" bgcolor="#FFFFFF"><div align="center" class="style11">NAHU</div></td>
        <td width="2%" bgcolor="#FFFFFF"><div align="center" class="style11">SHRF</div></td>
        <td width="2%" bgcolor="#FFFFFF"><div align="center" class="style11">MHFD</div></td>
        <td width="2%" bgcolor="#FFFFFF"><div align="center" class="style11">AQD</div></td>
        <td width="2%" bgcolor="#FFFFFF"><div align="center" class="style11">FIQH</div></td>
        <td width="2%" bgcolor="#FFFFFF"><div align="center" class="style11">HDS</div></td>
        <td width="2%" bgcolor="#FFFFFF"><div align="center" class="style11">MTH</div></td>
        <td width="2%" bgcolor="#FFFFFF"><div align="center" class="style11">KHT</div></td>
        <td width="2%" bgcolor="#FFFFFF"><div align="center" class="style11">CMP</div></td>
        <td width="2%" bgcolor="#FFFFFF"><div align="center" class="style12">CVR</div></td>
        <td width="2%" bgcolor="#FFFFFF"><div align="center">
          <div align="center" class="style11">MHDS</div>
        </div></td>
        </tr>
      <?  
	      $dtkl=mysqli_query($koneksi, "SELECT * FROM master_kelas WHERE  kelas='$idstr' ");
	      $kdklll=mysqli_fetch_assoc($dtkl);
		  
	      $tdth=mysqli_query($koneksi, "SELECT * FROM tb_rangking WHERE  thn_plj='$thaj' and sem_plj='$sem' and kls_r='$idstr' ");
	      $jmld2=mysqli_num_rows($tdth); 
				 
		  $rk=$jmld2;
	  	  $tmp=mysqli_query($koneksi, "SELECT * FROM tb_rangking WHERE  thn_plj='$thaj' and sem_plj='$sem' and kls_r='$idstr' ORDER BY tot_raport ");
          while($ct=mysqli_fetch_assoc($tmp)){
		  
		        mysqli_query($koneksi, "UPDATE tb_rangking SET rangking='$rk' WHERE nis='$ct[nis]' and thn_plj='$thaj' and sem_plj='$sem' and kls_r='$ct[kls_r]'"); 
				$rk-=1;
		  }
		  
		  $a=0;
	      $tmpkls=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='$idstr' AND status='a' ORDER BY nama");
          while($ct=mysqli_fetch_assoc($tmpkls)){
	   ?>
      <tr>
        <td bgcolor="#FFFFFF"><div align="center"><? echo"$ct[nis]"; ?></div></td>
        <td bgcolor="#FFFFFF"><div align="left">&nbsp;<? echo"$ct[nama]"; ?></div></td>
        <td><div align="center">
            <? 
	        				 
				 $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP006' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$kdklll[kd_kls]' ");
                 $tpk2=mysqli_fetch_assoc($tampi); 
				 $n_fiq=$tpk2['raport'];
				 
				 if($n_fiq<=0){
				 $npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MP006' and kd='3' ");
  		         $cpg=mysqli_fetch_assoc($npg);
		         $n_fiq=$cpg['nir'];
				 }
				// $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP006' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$kdklll[kd_kls]' ");
               //  $tpk3=mysqli_fetch_assoc($tampi); $n_aqd=$tpk3['raport'];
			   
								 
				 $nl_pai=$n_fiq;
				if($kkkm > $nl_pai){ echo "<font color='#FF0000'>$nl_pai</font>"; }else{ echo $nl_pai; }
				    				 				 
				 $j1=$nl_pai;
	            if($j1 >=1){ $tn1=1; }
	   ?>
        </div></td>
        <td bgcolor="#FFFFFF"><div align="center">
            <?  // PAI = Fiqi 
			   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD013' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$kdklll[kd_kls]' ");
               $tpk=mysqli_fetch_assoc($tampi); 
			   $nl_dpr=$tpk['raport'];
			   
			   if($nl_dpr<=0){
				 $npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD013' and kd='3' ");
  		         $cpg=mysqli_fetch_assoc($npg);
		         $nl_dpr=$cpg['nir'];
				 }
				 
			   if($kkkm > $nl_dpr){ echo "<font color='#FF0000'>$nl_dpr</font>"; }else{ echo $nl_dpr; }
									  $j2=$nl_dpr; 
									  if($j2 >=1){ $tn2=1; }
									  ?>
        </div></td>
        <td bgcolor="#FFFFFF"><div align="center">
            <? $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD003' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$kdklll[kd_kls]' ");
                                     $tpk=mysqli_fetch_assoc($tampi); 
									 $nl_dpr=$tpk['raport'];
									 
				  if($nl_dpr<=0){
				 $npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD003' and kd='3' ");
  		         $cpg=mysqli_fetch_assoc($npg);
		         $nl_dpr=$cpg['nir'];
				 }
				 
			   if($kkkm > $nl_dpr){ echo "<font color='#FF0000'>$nl_dpr</font>"; }else{ echo $nl_dpr; } 
									 $j3=$nl_dpr;
									 if($j3 >=1){ $tn3=1; }
									 ?>
        </div></td>
        <td bgcolor="#FFFFFF"><div align="center">
            <? $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD004' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$kdklll[kd_kls]' ");
                                     $tpk=mysqli_fetch_assoc($tampi); 
									 
									$nl_dpr=$tpk['raport'];
									 
				  if($nl_dpr<=0){
				 $npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD004' and kd='3' ");
  		         $cpg=mysqli_fetch_assoc($npg);
		         $nl_dpr=$cpg['nir'];
				 }
				 
			   if($kkkm > $nl_dpr){ echo "<font color='#FF0000'>$nl_dpr</font>"; }else{ echo $nl_dpr; }
									 
									 
									 $j4=$nl_dpr;
									 if($j4 >=1){ $tn4=1; }
									 ?>
        </div></td>
        <td bgcolor="#FFFFFF"><div align="center">
            <? $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD005' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$kdklll[kd_kls]' ");
                                     $tpk=mysqli_fetch_assoc($tampi); 
					 $nl_dpr=$tpk['raport'];
									 
				  if($nl_dpr<=0){
				 $npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD005' and kd='3' ");
  		         $cpg=mysqli_fetch_assoc($npg);
		         $nl_dpr=$cpg['nir'];
				 }
				 
			   if($kkkm > $nl_dpr){ echo "<font color='#FF0000'>$nl_dpr</font>"; }else{ echo $nl_dpr; }
					 
					 
									 $j5=$nl_dpr;
									 if($j5 >=1){ $tn5=1; }
									 ?>
        </div></td>
        <td bgcolor="#FFFFFF"><div align="center">
            <? $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD006' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$kdklll[kd_kls]' ");
                                     $tpk=mysqli_fetch_assoc($tampi); 
					
					$nl_dpr=$tpk['raport'];
									 
				  if($nl_dpr<=0){
				 $npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD006' and kd='3' ");
  		         $cpg=mysqli_fetch_assoc($npg);
		         $nl_dpr=$cpg['nir'];
				 }
				 
			   if($kkkm > $nl_dpr){ echo "<font color='#FF0000'>$nl_dpr</font>"; }else{ echo $nl_dpr; }
									 
									 
									 $j6=$nl_dpr;
									 if($j6 >=1){ $tn6=1; }
									 ?>
        </div></td>
        <td bgcolor="#FFFFFF"><div align="center">
            <? $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD007' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$kdklll[kd_kls]' ");
                                     $tpk=mysqli_fetch_assoc($tampi); 
					
					$nl_dpr=$tpk['raport'];
									 
				  if($nl_dpr<=0){
				 $npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD007' and kd='3' ");
  		         $cpg=mysqli_fetch_assoc($npg);
		         $nl_dpr=$cpg['nir'];
				 }
				 
			   if($kkkm > $nl_dpr){ echo "<font color='#FF0000'>$nl_dpr</font>"; }else{ echo $nl_dpr; }
					
									 $j7=$nl_dpr;
									 if($j7 >=1){ $tn7=1; }
									 ?>
        </div></td>
        <td bgcolor="#FFFFFF"><div align="center">
            <? $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD012' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$kdklll[kd_kls]' ");
                                     $tpk=mysqli_fetch_assoc($tampi); 
				 $nl_dpr=$tpk['raport'];
									 
				  if($nl_dpr<=0){
				 $npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD012' and kd='3' ");
  		         $cpg=mysqli_fetch_assoc($npg);
		         $nl_dpr=$cpg['nir'];
				 }
				 
			   if($kkkm > $nl_dpr){ echo "<font color='#FF0000'>$nl_dpr</font>"; }else{ echo $nl_dpr; }
			   
									 $j8=$nl_dpr;
									 if($j8 >=1){ $tn8=1; }
									 ?>
        </div></td>
        <td bgcolor="#FFFFFF"><div align="center">
            <? $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD009' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$kdklll[kd_kls]' ");
                                     $tpk=mysqli_fetch_assoc($tampi); 
			
			$nl_dpr=$tpk['raport'];
									 
				  if($nl_dpr<=0){
				 $npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD009' and kd='3' ");
  		         $cpg=mysqli_fetch_assoc($npg);
		         $nl_dpr=$cpg['nir'];
				 }
				 
			   if($kkkm > $nl_dpr){ echo "<font color='#FF0000'>$nl_dpr</font>"; }else{ echo $nl_dpr; }
			
									 $j9=$nl_dpr;
									 if($j9 >=1){ $tn9=1; }
									 ?>
        </div></td>
        <td bgcolor="#FFFFFF"><div align="center">
            <? $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD010' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$kdklll[kd_kls]' ");
                                     $tpk=mysqli_fetch_assoc($tampi); 
					 
					 $nl_dpr=$tpk['raport'];
									 
				  if($nl_dpr<=0){
				 $npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD010' and kd='3' ");
  		         $cpg=mysqli_fetch_assoc($npg);
		         $nl_dpr=$cpg['nir'];
				 }
				 
			   if($kkkm > $nl_dpr){ echo "<font color='#FF0000'>$nl_dpr</font>"; }else{ echo $nl_dpr; }
					 
									 $j10=$nl_dpr;
									 if($j10 >=1){ $tn10=1; }
									 ?>
        </div></td>
        <td bgcolor="#FFFFFF"><div align="center">
          <? $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD011' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$kdklll[kd_kls]' ");
                                     $tpk=mysqli_fetch_assoc($tampi); 
						$nl_dpr=$tpk['raport'];
									 
				  if($nl_dpr<=0){
				 $npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD011' and kd='3' ");
  		         $cpg=mysqli_fetch_assoc($npg);
		         $nl_dpr=$cpg['nir'];
				 }
				 
			   if($kkkm > $nl_dpr){ echo "<font color='#FF0000'>$nl_dpr</font>"; }else{ echo $nl_dpr; }
						
						
									 $j11=$nl_dpr;
									 if($j11 >=1){ $tn11=1; }
									 ?>
        </div></td>
        <td bgcolor="#FFFFFF"><div align="center"><? 
		
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP014' and thn_ajaran='$thaj' and  
		                      semester='$sem' and kd_kelas='$kdklll[kd_kls]' ");
          $tpk2=mysqli_fetch_assoc($tampi);
		  if($kkkm > $tpk2['raport']){ echo "<font color='#FF0000'>$tpk2[raport]</font>"; }else{ echo $tpk2['raport']; }
		  $j12=$tpk2['raport'];
		  if($j12 >=1){ $tn12=1; }
		     
		
		?>
        </div></td>
        <td bgcolor="#FFFFFF"><div align="center">
            <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP001' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$kdklll[kd_kls]' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j13=$tpk['raport'];
		if($kkkm > $tpk['raport']){ echo "<font color='#FF0000'>$tpk[raport]</font>"; }else{ echo $tpk['raport']; }   
		if($j13 >=1){ $tn13=1; }
		?>
        </div></td>
        <td bgcolor="#FFFFFF"><div align="center">
            <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP003' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$kdklll[kd_kls]' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $nl_dpr=$tpk['raport'];
									 
				  if($nl_dpr<=0){
				 $npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MP003' and kd='3' ");
  		         $cpg=mysqli_fetch_assoc($npg);
		         $nl_dpr=$cpg['nir'];
				 }
				 
			   if($kkkm > $nl_dpr){ echo "<font color='#FF0000'>$nl_dpr</font>"; }else{ echo $nl_dpr; }
			   
		$j14=$nl_dpr;
		if($j14 >=1){ $tn14=1; }
		?>
        </div></td>
        <td bgcolor="#FFFFFF"><div align="center">
            <? 
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP004' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$kdklll[kd_kls]' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j15=$tpk['raport'];
		if($kkkm > $tpk['raport']){ echo "<font color='#FF0000'>$tpk[raport]</font>"; }else{ echo $tpk['raport']; }   
		if($j15 >=1){ $tn15=1; }
		?>
        </div></td>
        <td bgcolor="#FFFFFF"><div align="center">
            <? 
		   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP009' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$kdklll[kd_kls]' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j16=$tpk['raport'];
		if($kkkm > $tpk['raport']){ echo "<font color='#FF0000'>$tpk[raport]</font>"; }else{ echo $tpk['raport']; } 
		if($j16 >=1){ $tn16=1; }  
		?>
        </div></td>
        <td bgcolor="#FFFFFF"><div align="center">
            <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP010' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$kdklll[kd_kls]' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j17=$tpk['raport'];
		if($kkkm > $tpk['raport']){ echo "<font color='#FF0000'>$tpk[raport]</font>"; }else{ echo $tpk['raport']; }   
		if($j17 >=1){ $tn17=1; }
		?>
        </div></td>
        <td valign="top" bgcolor="#FFFFFF"><div align="center">
            <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP020' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$kdklll[kd_kls]' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j18=$tpk['raport'];
		if($kkkm > $tpk['raport']){ echo "<font color='#FF0000'>$tpk[raport]</font>"; }else{ echo $tpk['raport']; }  
		if($j18 >=1){ $tn18=1; }
		 ?>
        </div></td>
        <td valign="top" bgcolor="#FFFFFF"><div align="center">
            <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP006' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$kdklll[kd_kls]' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j19=$tpk['raport'];
		  $ctkaq=$tpk['raport'];
		  
		  if($tpk['raport']<=0){
				 $npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MP006' and kd='3' ");
  		         $cpg=mysqli_fetch_assoc($npg);
		         $ctkaq=$cpg['nir'];
				 $j19=$cpg['nir'];
				 }
		  
		if($kkkm > $ctkaq){ echo "<font color='#FF0000'>$ctkaq</font>"; }else{ echo $ctkaq; }   
		if($j19 >=1){ $tn19=1; }
		?>
        </div></td>
        <td valign="top" bgcolor="#FFFFFF"><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP005' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$kdklll[kd_kls]' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j20=$tpk['raport'];
		if($kkkm > $tpk['raport']){ echo "<font color='#FF0000'>$tpk[raport]</font>"; }else{ echo $tpk['raport']; }  
		if($j20 >=1){ $tn20=1; }
		?>
        </div></td>
        <td valign="top" bgcolor="#FFFFFF"><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP011' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$kdklll[kd_kls]' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j21=$tpk['raport'];
		if($kkkm > $tpk['raport']){ echo "<font color='#FF0000'>$tpk[raport]</font>"; }else{ echo $tpk['raport']; } 
		if($j21 >=1){ $tn21=1; }
		 ?>
        </div></td>
        <td valign="top" bgcolor="#FFFFFF"><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP016' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$kdklll[kd_kls]' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j22=$tpk['raport'];
		if($kkkm > $tpk['raport']){ echo "<font color='#FF0000'>$tpk[raport]</font>"; }else{ echo $tpk['raport']; }  
		if($j22 >=1){ $tn22=1; }
		?>
        </div></td>
        <td valign="top" bgcolor="#FFFFFF"><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD012' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$kdklll[kd_kls]' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j23=$tpk['raport'];
		if($kkkm > $tpk['raport']){ echo "<font color='#FF0000'>$tpk[raport]</font>"; }else{ echo $tpk['raport']; }
		if($j23 >=1){ $tn23=1; }
		 ?>
        </div></td>
        <td valign="top" bgcolor="#FFFFFF"><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP019' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$kdklll[kd_kls]' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j24=$tpk['raport'];
		if($kkkm > $tpk['raport']){ echo "<font color='#FF0000'>$tpk[raport]</font>"; }else{ echo $tpk['raport']; }
		if($j24 >=1){ $tn24=1; }
		 ?>
        </div></td>
        <td valign="top" bgcolor="#FFFFFF"><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP021' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$kdklll[kd_kls]' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j24=$tpk['raport'];
		if($kkkm > $tpk['raport']){ echo "<font color='#FF0000'>$tpk[raport]</font>"; }else{ echo $tpk['raport']; }
		if($j24 >=1){ $tn24=1; }
		 ?>
        </div></td>
        <td valign="top" bgcolor="#FFFFFF"><div align="center">
          <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP008' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$kdklll[kd_kls]' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  $j25=$tpk['raport'];
		if($kkkm > $tpk['raport']){ echo "<font color='#FF0000'>$tpk[raport]</font>"; }else{ echo $tpk['raport']; }
		if($j25 >=1){ $tn25=1; }
		 ?>
        </div></td>
        <td valign="top" bgcolor="#FFFFFF"><div align="center">
            <? $jml_t=$j1+$j2+$j3+$j4+$j5+$j6+$j7+$j8+$j9+$j10+$j11+$j12+$j13+$j14+$j15+$j16+$j17+$j18+$j19+$j20+$j21+$j22+$j23
			             +$j24+$j25; 
			  echo $jml_t; 
            
			$tdth=mysqli_query($koneksi, "SELECT * FROM tb_rangking WHERE kls_r='$idstr' and thn_plj='$thaj' and sem_plj='$sem' and nis='$ct[nis]' ");
	        $jmld2=mysqli_num_rows($tdth);   // rangking
		    if($jmld2==0){
			       $rek=mysqli_query($koneksi, "INSERT INTO tb_rangking VALUES('','$thaj','$sem','$idstr','$ct[nis]','$jml_t','')");
		    }else{
				   mysqli_query($koneksi, "UPDATE tb_rangking SET tot_raport='$jml_t' WHERE nis='$ct[nis]' and thn_plj='$thaj' and sem_plj='$sem' and kls_r='$idstr'"); 
			}
			?>
        </div></td>
        <td valign="top" bgcolor="#FFFFFF"><div align="center">
            <div align="center">
              <? 
$pnl=$tn1+$tn2+$tn3+$tn4+$tn5+$tn6+$tn7+$tn8+$tn9+$tn10+$tn11+$tn12+$tn13+$tn14+$tn15+$tn16+$tn17+$tn18+$tn19+$tn20+$tn21+$tn22+$tn23+$tn24+$tn25;
		         				 				 
			     $rt=ceil($jml_t/$pnl); 
				 $p1=substr($rt,0,2);
				 $p2=substr($rt,3,2);
				 if($p2>=50){ echo $p1+1; }else{ echo $p1; }
				 
				   
			 // }
			  ?>
            </div>
        </div></td>
        <? if($sem=='I') { $rpp="page/raport/raport_pd.php?idstr="; }
			   if($sem=='II') { $rpp="page/raport/raport_pd2.php?idstr="; } 
			    ?>
        <? if($sem=='I') { $rp="page/report_raport_st1.php?idstr="; }
			   if($sem=='II') { $rp="page/report_raport_st.php?idstr="; } 
			    ?>
        <td valign="middle" bgcolor="#FFFFFF"><div align="center">
            <? 
			$tmp=mysqli_query($koneksi, "SELECT * FROM tb_rangking WHERE nis='$ct[nis]' and thn_plj='$thaj' and sem_plj='$sem' and kls_r='$idstr'");
            $ct2=mysqli_fetch_assoc($tmp); // rangking
			echo $ct2['rangking'];
 ?>
        </div></td>
      </tr>
      <? } ?>
      
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>&nbsp;</td>
        <td>Mengetahui,</td>
        <td>Pangkep,</td>
      </tr>
      <tr>
        <td width="10%">&nbsp;</td>
        <td width="66%">Kepala Sekolah SMP IT Shohwatul Is'ad </td>
        <td width="24%">Kurikulum SMP IT Shohwatul Is'ad </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="center"></div></td>
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
        <td>(Muhammad Galib, S.Pd.,Gr.) </td>
        <td>(Nasrul, S.Pd.,Gr.) </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>NIY 201207 1 2 012 </td>
        <td>NIY  201107 1 2 011</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
