<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style2 {font-size: 24px}
.style3 {font-size: 24px; font-family: "Courier New", Courier, monospace; }
.style1 {	font-size: 36px;
	font-weight: bold;
}
.style8 {font-size: 14px}
.style9 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
</head>
<?
include("../../koneksi.php");
 include("../../function.php");
 $klsk=$_GET['klsk'];
 $thaj=$_COOKIE['thaj'];
 $sem=$_COOKIE['sem'];
 $idstr=$_GET['idstr'];
?>
<body>
<table width="965" border="0">
  <tr>
    <td><table width="96%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="11%" height="95" valign="top"><img src="../../images/LOGO-SHOID2.jpg" width="105" height="109" /></td>
        <td width="89%" valign="top"><div align="center"><span class="style2">YAYASAN 
              SHOHWATUL IS'AD</span><br />
              <span class="style1">PPMI 
                                 SHOHWATUL IS'AD</span><br />
                                 <strong>SMA IT SHOHWATUL IS'AD </strong><br />
              <span class="style8">              Alamat: Jl. Poros Padanglampe&nbsp;KM . 3&nbsp;Ma'rang&nbsp;Pangkep&nbsp;Sulawesi - Selatan 90645 P.O. Box 300 <br />
http://www.shohwatulisad.sch.id e-mail : info@shohwatulisad.sch.id </span></div></td>
      </tr>
      <tr>
        <td height="2" colspan="2" valign="top" bgcolor="#000000"></td>
        </tr>
    </table></td>
  </tr>
  <tr>
      <?
	      $tmpkls=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st FROM tb_santri WHERE id_santri='$idstr' ");
          $ct=mysqli_fetch_assoc($tmpkls);
	   ?>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="7"><div align="center" class="style9">RAPORT MID SEMESTER </div></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
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
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="31%"><? echo $ct['kelas_st']; ?></td>
        <td width="1%">:</td>
        <td width="16%"><div align="right"><img src="Copy (2) of Arab rapor.jpg" width="84" height="19" /></div></td>
        <td width="8%">&nbsp;</td>
        <td width="28%"><? echo $ct['nama']; ?></td>
        <td width="1%">:</td>
        <td width="15%"><div align="right" class="style3"><img src="Arab rapor.jpg" width="136" height="24" /></div></td>
      </tr>
      <tr>
        <td><font size="2"><? echo $thaj; ?></font></td>
        <td>:</td>
        <td><div align="right"><img src="Copy (3) of Arab rapor.jpg" width="125" height="18" /></div></td>
        <td>&nbsp;</td>
        <td><font size="2">
          <? if($sem=='I') { echo "GANJIL"; }else{ echo"GENAP"; }?>
        </font></td>
        <td>:</td>
        <td><div align="right"><img src="Copy of Arab rapor.jpg" width="134" height="19" /></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="right" class="style2"></div></td>
      </tr>
      
    </table></td>
  </tr>
  <tr>
    <td height="667"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td width="5%" rowspan="2"><div align="center"><strong>SIKAP</strong></div></td>
        <td width="5%" rowspan="2"><div align="center"><strong><? if($ct['kelas_st']=='X'){ echo"PTS";}else{ echo"UTS";} ?> </strong></div></td>
        <td colspan="4"><div align="center"><strong><? if($ct['kelas_st']=='X'){ echo"P H";}else{ echo"U H";} ?> </strong></div></td>
        <td height="30" colspan="6"><div align="center"><strong>TUGAS</strong></div></td>
        <td width="88%"><div align="center"><img src="Copy (4) of Arab rapor.jpg" width="101" height="25" /></div></td>
        <td width="6%" rowspan="2"><div align="center"><img src="Copy (6) of Arab rapor.jpg" width="23" height="49" /></div></td>
      </tr>
      <tr>
        <td width="5%"><div align="center">1</div></td>
        <td width="5%"><div align="center">2</div></td>
        <td width="5%"><div align="center">3</div></td>
        <td width="5%"><div align="center">4</div></td>
        <td width="5%"><div align="center">1</div></td>
        <td width="5%"><div align="center">2</div></td>
        <td width="5%"><div align="center">3</div></td>
        <td width="5%"><div align="center">4</div></td>
        <td width="5%"><div align="center">5</div></td>
        <td width="5%"><div align="center">6</div></td>
        <td><div align="center"><strong>Mata Pelajaran </strong></div></td>
        </tr>
      
      <tr>
        <td><div align="center">
            <?    	       
		  
		  
		  		  		  
		  $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP006' and thn_ajaran='$thaj' and semester='$sem' ");
         $tpk12=mysqli_fetch_assoc($tampi2); $ntk2=$tpk12['uts']; $nn1=$tpk12['nt1']; $nn2=$tpk12['nt2']; $nn3=$tpk12['nt3']; $nl1=$tpk12['uh1']; $nl2=$tpk12['uh2']; $nl3=$tpk12['uh3'];
		  $sikap=$tpk12['sikap'];
		  
		  $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP005' and thn_ajaran='$thaj' and semester='$sem' ");
        $tpk23=mysqli_fetch_assoc($tampi3);  $ntk3=$tpk23['uts']; $nk1=$tpk23['nt1']; $nk2=$tpk23['nt2']; $nk3=$tpk23['nt3']; $no1=$tpk23['uh1']; $no2=$tpk23['uh2']; $no3=$tpk23['uh3'];
		  
		  $nl_uts=ceil(($ntk2+$ntk3)/2);
		  
		  $nl_tgs1=ceil(($nn1+$nk1)/2);
		  $nl_tgs2=ceil(($nn2+$nk2)/2);
		  $nl_tgs3=ceil(($nn3+$nk3)/2);
		  
		  $nl_uh1=ceil(($nl1+$no1)/2);
		  $nl_uh2=ceil(($nl2+$no2)/2);
		  $nl_uh3=ceil(($nl3+$no3)/2);
		  
		  
		 echo $sikap; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $nl_uts;
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $nl_uh1;
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $nl_uh2;
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $nl_uh3;
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $nl_tgs1;
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $nl_tgs2;
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $nl_tgs3;
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		 
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Pendidikan Agama Islam </td>
            <td width="50%"><div align="right"><img src="Copy (9) of Arab rapor.jpg" width="120" height="25" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">1.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD013' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		 
		  echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Pendidikan Kewarganegaraan </td>
            <td width="50%"><div align="right"><img src="Copy (19) of Arab rapor.jpg" width="113" height="19" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">2.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD003' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		 
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		  
		  echo $tpk['nt6'];
		  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Bahasa dan Sastra Indonesia </td>
            <td width="50%"><div align="right"><img src="Copy (20) of Arab rapor.jpg" width="166" height="21" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">3.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD004' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		  
		  echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Bahasa Inggris </td>
            <td width="50%"><div align="right"><img src="Copy (21) of Arab rapor.jpg" width="112" height="17" align="absmiddle" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">4.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD005' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		  		  
		  echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Matematika</td>
            <td width="50%"><div align="right"><img src="Copy (22) of Arab rapor.jpg" width="85" height="20" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">5.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD020' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		 
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		   
		  
		 echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%" height="26">&nbsp;Biologi</td>
            <td width="50%"><div align="right"><img src="biologi.jpg" width="74" height="22" />&nbsp;&nbsp;</div></td>
          </tr>
        </table></td>
        <td><div align="center">6.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD022' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		 
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		  
		 echo $tpk['nt6'];
		  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%" height="26">&nbsp;Fisika</td>
            <td width="50%"><div align="right"><img src="fisika.jpg" width="57" height="26" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">7.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD015' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		 
		  
		 echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%" height="26">&nbsp;Kimia</td>
            <td width="50%"><div align="right"><img src="kimia.jpg" width="53" height="24" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">8.</div></td>
      </tr>
      
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD016' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		 
		  
		 echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%" height="26">&nbsp;Ekonomi</td>
            <td width="50%"><div align="right"></div></td>
          </tr>
        </table></td>
        <td><div align="center">9.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD023' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <? 
		 
		  
		 echo $tpk['nt6'];
		   ?>
        </div></td>
        <td>&nbsp;Sejarah Indonesia </td>
        <td><div align="center">10.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD009' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		 
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?
		 
		  
		 echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Pendidikan Jasmani dan Kesehatan </td>
            <td width="50%"><div align="right"><img src="Copy (26) of Arab rapor.jpg" width="73" height="20" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">11.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD010' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		 
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['nt6'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Teknologi Informasi dan Komunikasi </td>
            <td width="50%"><div align="right"><img src="Copy of Arab rapor 2.jpg" width="132" height="46" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">12.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD024' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		 
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt6'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Matematika Peminatan </td>
            <td width="50%"><div align="right"><img src="Copy (22) of Arab rapor.jpg" width="85" height="20" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">13.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD011' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		 
		  
		echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Kewirausahaan dan Agrobisnis </td>
            <td width="50%"><div align="right"></div></td>
          </tr>
        </table></td>
        <td><div align="center">14.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP014' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		 
		  
		 echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Membaca Al Qur'an/Tajwid </td>
            <td width="50%"><div align="right"><img src="Copy (2) of Arab rapor 2.jpg" width="119" height="26" />&nbsp;&nbsp;&nbsp;</div></td>
          </tr>
        </table></td>
        <td><div align="center">15.</div></td>
      </tr>
      
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP003' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		 
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		 
		  
		  echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%" height="25">&nbsp;Bahasa Arab </td>
            <td width="50%"><div align="right"><img src="Copy (4) of Arab rapor 2.jpg" width="85" height="21" align="absmiddle" />&nbsp;&nbsp;</div></td>
          </tr>
        </table></td>
        <td><div align="center">16.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP011' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		 
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		 
		  
		  echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Hadist </td>
            <td width="50%"><div align="right"></div></td>
          </tr>
        </table></td>
        <td><div align="center">17.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP009' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		  
		  
		  echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Nahwu</td>
            <td width="50%"><div align="right"><img src="Copy (6) of Arab rapor 2.jpg" width="52" height="26" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">18.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP010' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		 
		  
		 echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Shorof</td>
            <td width="50%"><div align="right"><img src="Copy (7) of Arab rapor 2.jpg" width="75" height="23" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">19.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP007' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		
		  
		 echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Tarik Islam </td>
            <td width="50%"><div align="right"></div></td>
          </tr>
        </table></td>
        <td><div align="center">20.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP006' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		 
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		 
		  
		  echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Aqidah Akhlak </td>
            <td width="50%"><div align="right"><img src="Copy (9) of Arab rapor 2.jpg" width="103" height="22" />&nbsp;</div></td>
          </tr>
        </table></td>
        <td><div align="center">21.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP005' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		 
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		 
		  
		  echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Fiqh</td>
            <td width="50%"><div align="right"><img src="Copy (10) of Arab rapor 2.jpg" width="32" height="25" />&nbsp;&nbsp;&nbsp;</div></td>
          </tr>
        </table></td>
        <td><div align="center">22.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP001' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		 
		  
		  echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Tahfidz Al-Qur'an  </td>
            <td width="50%"><div align="right"><img src="Copy (3) of Arab rapor 2.jpg" width="76" height="19" /></div></td>
          </tr>
        </table></td>
        <td>&nbsp;</td>
      </tr>
      
      
      
      

    </table></td>
  </tr>
  <tr>
    <td height="108" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td colspan="2"><div align="center"><? 
		$ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ext WHERE kd_santri='$ct[nis]' and kelas='$ct[kelas_st]' and thn_ajar='$thaj' and semester='$sem' ORDER BY id_ext DESC");
        $cktr=mysqli_fetch_assoc($ktr);
		
		echo $cktr['hafalan_qr']; ?></div></td>
        <td colspan="2"><div align="center"><strong>Hafalan Al Quran </strong></div></td>
        <td width="17%" rowspan="5"><div align="center"><strong>Pengembangan Diri </strong><img src="Copy (3) of c1.JPG" width="89" height="27" /><br />
        </div></td>
      </tr>
      <tr>
        <td colspan="4" bordercolor="#FFFFFF" bgcolor="#FFFFFF" height="2"></td>
      </tr>
      <tr>
        <td width="34%"><div align="center"><strong>Huruf</strong> <img src="Copy (8) of Arab rapor.jpg" width="96" height="19" align="absmiddle" /></div></td>
        <td width="7%"><div align="center"><strong>Nilai</strong></div></td>
        <td width="19%"><div align="center"><strong>Jenis Kegiatan </strong></div></td>
        <td width="23%"><div align="center"><img src="b1.jpg" width="82" height="26" /></div></td>
      </tr>
      <tr>
        <td height="21"><div align="center">
          <? 
		  $tnils=mysqli_query($koneksi, "SELECT * FROM tb_nilai_eskul WHERE thn_eskl='$thaj' AND sms_eskl='$sem' AND nis_eskl='$ct[nis]' AND 
		                           kls_eskl='$ct[kelas_st]' ");
                                   $cnils=mysqli_fetch_assoc($tnils); 
		  
		    
			
		if($cnils['nil_eskl1']=="A"){ echo"Sangat Baik"; }
		if($cnils['nil_eskl1']=="B"){ echo"Baik"; }
		if($cnils['nil_eskl1']=="C"){ echo"Cukup"; }
		if($cnils['nil_eskl1']=="D"){ echo"Kurang"; }
		 ?>
        </div></td>
        <td><div align="center"><? 
								   echo $cnils['nil_eskl1'];
								   ?>
		</div></td>
        <td>
		  <div align="center">
		    <?
		  $pbk=mysqli_query($koneksi, "SELECT * FROM tb_pbakat WHERE kd_santri='$idstr'  ");
          $tpbk=mysqli_fetch_assoc($pbk); 
		  
		  $pbk2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='$tpbk[kd_mp]'  ");
          $tpbk2=mysqli_fetch_assoc($pbk2);
		  
		  echo $tpbk2['nama_mp'];
		?>
	        </div></td>
        <td><div align="center"><img src="extrakur_pil1.jpg" width="176" height="22" /></div></td>
      </tr>
      <tr>
        <td><div align="center">
            <? 
		    
			
		if($cnils['nil_eskl2']=="A"){ echo"Sangat Baik"; }
		if($cnils['nil_eskl2']=="B"){ echo"Baik"; }
		if($cnils['nil_eskl2']=="C"){ echo"Cukup"; }
		if($cnils['nil_eskl2']=="D"){ echo"Kurang"; }
		 ?>
        </div></td>
        <td><div align="center"><? echo $cnils['nil_eskl2']; ?></div></td>
        <td><div align="center">
          <?
		  $pbk=mysqli_query($koneksi, "SELECT * FROM tb_pbakat WHERE kd_santri='$idstr' limit 1,1 ");
          $tpbk=mysqli_fetch_assoc($pbk); 
		  
		  $pbk2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='$tpbk[kd_mp]'  ");
          $tpbk2=mysqli_fetch_assoc($pbk2);
		  
		  echo $tpbk2['nama_mp'];
		?>
        </div></td>
        <td><div align="center"><img src="extrakur_pil2.jpg" width="185" height="23" /></div></td>
      </tr>
      
    </table></td>
  </tr>
  <tr>
    <td><div align="center">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><table width="328" border="1" align="left" cellpadding="0" cellspacing="0" bordercolor="#000000">
              <tr>
                <td colspan="3"><div align="center"><strong>Kehadiran</strong> <img src="kehadiran.jpg" width="74" height="24" align="absmiddle" /></div></td>
              </tr>
			  <? $skt=0; 
			   $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ext WHERE kd_santri='$ct[nis]' and kelas='$ct[kelas_st]' and thn_ajar='$thaj' and semester='$sem' ");
               while($cktr=mysqli_fetch_assoc($ktr)){
			         $skt=$cktr['sakit']+$skt;
			   }
			  
			   
			  ?>
              <tr>
                <td width="20"><div align="center">1.</div></td>
                <td width="241">Sakit <img src="sakit.jpg" width="42" height="19" align="absmiddle" /></td>
                <td width="59"><div align="center"><? echo $skt;  ?> hari </div></td>
              </tr>
              <tr>
                <td><div align="center">2.</div></td>
                <td>Izin <img src="izin.jpg" width="25" height="23" align="absmiddle" /></td>
                <td><div align="center"><? 
				$skt=0; 
			   $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ext WHERE kd_santri='$ct[nis]' and kelas='$ct[kelas_st]' and thn_ajar='$thaj' and semester='$sem' ");
               while($cktr=mysqli_fetch_assoc($ktr)){
			   $skt=$cktr['izin']+$skt;  }
				
				echo $skt; ?> hari</div></td>
              </tr>
              <tr>
                <td><div align="center">3.</div></td>
                <td>Tanpa Keterangan <img src="tanpa_ket.jpg" width="65" height="26" align="absmiddle" /></td>
                <td><div align="center"><? 
				$skt=0; 
			   $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ext WHERE kd_santri='$ct[nis]' and kelas='$ct[kelas_st]' and thn_ajar='$thaj' and semester='$sem' ");
               while($cktr=mysqli_fetch_assoc($ktr)){
			   $skt=$cktr['alpa']+$skt;  }
				
				 echo $skt; ?> hari</div></td>
              </tr>
              <tr>
                <td><div align="center">4.</div></td>
                <td>Tidak Solat Jamaah <img src="tidak_solat.jpg" width="111" height="24" align="absmiddle" /></td>
                <td><div align="center"><? 
				$skt=0; 
			   $ktr=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ext WHERE kd_santri='$ct[nis]' and kelas='$ct[kelas_st]' and thn_ajar='$thaj' and semester='$sem' ");
               while($cktr=mysqli_fetch_assoc($ktr)){
			   $skt=$cktr['t_solat']+$skt;  }
				
				 echo $skt; ?> kali </div></td>
              </tr>
          </table></td>
          <td valign="top"><img src="untitled.JPG" width="662" height="122" /></td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
  </tr>
  
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
     
	 <?
	    $tampil=mysqli_query($koneksi, "SELECT * FROM tb_ttd WHERE ket='a' AND semester='$sem'");
        $tp=mysqli_fetch_assoc($tampil);
		
		
	  ?>
	  <tr>
        <td width="47%"><div align="center"></div></td>
        <td width="5%">&nbsp;</td>
        <td width="48%"><div align="center"><? echo $tp['tgl_mid']; ?>&nbsp;&nbsp; <img src="waktu pembagian.JPG" width="125" height="31" align="absmiddle" /></div></td>
      </tr>
      <tr>
        <td><div align="center">Wali Santri <img src="ttd1.jpg" width="67" height="28" align="absmiddle" /></div></td>
        <td>&nbsp;</td>
        <td><div align="center">Wali Kelas <img src="ttd2.jpg" width="75" height="28" align="absmiddle" /></div></td>
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <td><div align="center">
	<?
	$tampi=mysqli_query($koneksi, "SELECT * FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
    $tpk=mysqli_fetch_assoc($tampi);
	
	$tampi2=mysqli_query($koneksi, "SELECT * FROM wali_kelas WHERE kd_kls='$tpk[kd_kls]' ");
    $tpk3=mysqli_fetch_assoc($tampi2);
	
	$tampi4=mysqli_query($koneksi, "SELECT id_gp,nip,nama_gp FROM guru_pegawai WHERE id_gp='$tpk3[kd_gp]' ");
    $tpk4=mysqli_fetch_assoc($tampi4);
	
	$tampil5=mysqli_query($koneksi, "SELECT * FROM wali_kelas WHERE kd_gp='$tpk3[kd_gp]' ");
    $tp4=mysqli_fetch_assoc($tampil5);
	?>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><div align="center">
            <? if(!empty($tp4['ttd'])){ ?>
            <img src="<? echo "$tp4[ttd]"; ?>" height="90" width="130" />
            <? } ?>
          </div></td>
        </tr>
        <tr>
          <td><div align="center">(______________________________)</div></td>
          <td>&nbsp;</td>
          <td><div align="center">( <? echo $tpk4['nama_gp']; ?> ) </div></td>
        </tr>
        <tr>
          <td width="47%"><div align="center"></div></td>
          <td width="5%">&nbsp;</td>
          <td width="48%"><div align="center">NIY : <? echo $tpk4['nip']; ?></div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>
</body>
</html>
