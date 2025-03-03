<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.ip_tx {
	font-family: Arial, Helvetica, sans-serif;
	margin: 9px;
	padding: 9px;
	height: auto;
	width: auto;
	font-size: 9px;
}
.style19 {
	font-size: 24px;
	font-weight: bold;
	color: #FFFFFF;
}
.style20 {
	color: #FFFFFF;
	font-weight: bold;
}
.style22 {color: #FFFFFF}
-->
</style>
<script type="text/JavaScript">
<!--
function angka(){
  if(isNaN(form1.nt1.value)) { form1.nt1.value='';  }
  if(isNaN(form1.nt2.value)) { form1.nt2.value='';  }
  if(isNaN(form1.nt3.value)) { form1.nt3.value='';  }
  if(isNaN(form1.nt4.value)) { form1.nt4.value='';  }
  if(isNaN(form1.nt5.value)) { form1.nt5.value='';  }
  if(isNaN(form1.nt6.value)) { form1.nt6.value='';  }
  if(isNaN(form1.nt7.value)) { form1.nt7.value='';  }
  if(isNaN(form1.nt8.value)) { form1.nt8.value='';  }
  if(isNaN(form1.nt9.value)) { form1.nt9.value='';  }
  if(isNaN(form1.nt10.value)) { form1.nt10.value='';  }
  if(isNaN(form1.uh1.value)) { form1.uh1.value='';  }
  if(isNaN(form1.uh2.value)) { form1.uh2.value='';  }
  if(isNaN(form1.uh3.value)) { form1.uh3.value='';  }
  if(isNaN(form1.uh4.value)) { form1.uh4.value='';  }
  if(isNaN(form1.uh5.value)) { form1.uh5.value='';  }
  if(isNaN(form1.nuts.value)) { form1.nuts.value='';  }
   if(isNaN(form1.nus.value)) { form1.nus.value='';  } 
    if(isNaN(form1.remedi.value)) { form1.remedi.value='';  } 
  
}

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>
<?
  $klsk2=$_GET['klsk2'];
  $klsk=$_GET['klsk'];
  $mpl=$_GET['mpl'];
  
   $idkls=$_GET['idkls'];
 
  $nisk=$_GET['nisk'];
  $mpl=$_GET['mpl'];
  $nlk=$_GET['nlk'];
  
  $bl=$_GET['bl'];
  $pk=$_GET['pk'];
?>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="4" bgcolor="#336600"><p align="center" class="style19" dir="rtl"><span dir="ltr">REKAP PENILAIAN  KARAKTER SANTRI </span></p></td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;<font color="#FF0000" size="+3">
      <? $psn=$_GET['psn'];
	     if($psn=='1')echo "Kelas Belum Anda Pilih";
	   ?>
    </font></td>
  </tr>
  <tr>
    <td width="1%">&nbsp;</td>
    <td colspan="3">&nbsp;&nbsp;Tahun Ajaran : <? echo $thaj; ?>&nbsp;&nbsp;&nbsp;&nbsp;Semester 
      : <? echo $sem; if($sem=='I')echo " (Satu)";else echo " (Dua)"; ?>&nbsp;&nbsp;Bulan
      <select name="select3" onchange="MM_jumpMenu('parent',this,0)">
        <option value="home.php?home=nilai&amp;dpn_n24=n24"> - </option>
        <option value="home.php?home=nilai&amp;dpn_n24=n24<? echo"&bl=1"; ?>" <? if($bl=="1"){ echo"selected='selected'"; } ?>> Januari </option>
        <option value="home.php?home=nilai&amp;dpn_n24=n24<? echo"&bl=2"; ?>" <? if($bl=="2"){ echo"selected='selected'"; } ?>> Februari </option>
        <option value="home.php?home=nilai&amp;dpn_n24=n24<? echo"&bl=3"; ?>" <? if($bl=="3"){ echo"selected='selected'"; } ?>> Maret </option>
        <option value="home.php?home=nilai&amp;dpn_n24=n24<? echo"&bl=4"; ?>" <? if($bl=="4"){ echo"selected='selected'"; } ?>> April </option>
        <option value="home.php?home=nilai&amp;dpn_n24=n24<? echo"&bl=5"; ?>" <? if($bl=="5"){ echo"selected='selected'"; } ?>> Mei </option>
        <option value="home.php?home=nilai&amp;dpn_n24=n24<? echo"&bl=6"; ?> <? if($bl=="6"){ echo"selected='selected'"; } ?>"> Juni </option>
        <option value="home.php?home=nilai&amp;dpn_n24=n24<? echo"&bl=7"; ?>" <? if($bl=="7"){ echo"selected='selected'"; } ?>> Juli </option>
        <option value="home.php?home=nilai&amp;dpn_n24=n24<? echo"&bl=8"; ?>" <? if($bl=="8"){ echo"selected='selected'"; } ?>> Agustus </option>
        <option value="home.php?home=nilai&amp;dpn_n24=n24<? echo"&bl=9"; ?>" <? if($bl=="9"){ echo"selected='selected'"; } ?>> September </option>
        <option value="home.php?home=nilai&amp;dpn_n24=n24<? echo"&bl=10"; ?>" <? if($bl=="10"){ echo"selected='selected'"; } ?>> Oktober </option>
        <option value="home.php?home=nilai&amp;dpn_n24=n24<? echo"&bl=11"; ?>" <? if($bl=="11"){ echo"selected='selected'"; } ?>> Nopember </option>
        <option value="home.php?home=nilai&amp;dpn_n24=n24<? echo"&bl=12"; ?>" <? if($bl=="12"){ echo"selected='selected'"; } ?>> Desember </option>
      </select>
&nbsp;|&nbsp;&nbsp; Nilai
<select name="select4" onchange="MM_jumpMenu('parent',this,0)">
        <option value="home.php?home=nilai&amp;dpn_n24=n24 <? echo"&bl=$bl"; ?>"> - </option>
        <option value="home.php?home=nilai&amp;dpn_n24=n24<? echo"&bl=$bl&pk=a"; ?>" <? if($pk=="a"){ echo"selected='selected'"; } ?>> A </option>
        <option value="home.php?home=nilai&amp;dpn_n24=n24<? echo"&bl=$bl&pk=b"; ?>" <? if($pk=="b"){ echo"selected='selected'"; } ?>> B </option>
        <option value="home.php?home=nilai&amp;dpn_n24=n24<? echo"&bl=$bl&pk=c"; ?>" <? if($pk=="c"){ echo"selected='selected'"; } ?>> C </option>
        <option value="home.php?home=nilai&amp;dpn_n24=n24<? echo"&bl=$bl&pk=d"; ?>" <? if($pk=="d"){ echo"selected='selected'"; } ?>> D </option>
    </select></td>
  </tr>
  <?  
	   if($idkusr=="i"){
	      $qku7=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kd_kls='$idkelas'");
          $cqk7=mysqli_fetch_assoc($qku7);
		  $klsk=$cqk7['kd_kls'];
		  $klsk2=$cqk7['kelas'];
	   }
	?>
  <tr>
    <td>&nbsp;</td>
    <td width="4%" valign="top">&nbsp;</td>
    <td width="21%" valign="top">&nbsp;</td>
    <td width="74%" valign="top">&nbsp;</td>
  </tr>
  
  <tr>
    <td height="1116">&nbsp;</td>
    <td colspan="3" valign="top"><table width="100%" border="0" align="right" cellpadding="0" cellspacing="0" bordercolor="#336600">
      <tr>
        <td bgcolor="#FFFFFF">&nbsp;</td>
        <td bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
      <tr>
        <td width="88%" bgcolor="#FFFFFF"><div align="left"></div></td>
        <td width="12%" bgcolor="#FFFFFF"><div align="left"></div></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><table width="98%" border="1" align="right" cellpadding="2" cellspacing="0" bordercolor="#336600">
          <tr>
            <td bgcolor="#336600">&nbsp;</td>
            <td colspan="17" bgcolor="#336600"><div align="center">
              <div align="center" class="style20">Kelas</div>
            </div></td>
            </tr>
          <tr>
            <td width="33%" bgcolor="#336600"><div align="center" class="style20">Pembinaan Ibadah </div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">VIIA</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">VIIB</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">VIIC</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">VIID</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">VIIIA</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">VIIIB</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">VIIIC</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">IXA</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">IXB</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">IXC</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">XA</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">XB</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">XC</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">XIA</div></td>
            <td width="5%" bgcolor="#336600"><div align="center"><span class="style22">XIB</span></div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">XIIA</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">XIIB</div></td>
            </tr>
          <tr>
            <td bgcolor="#FFFFFF"><div align="center">Sholat jamaah</div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['solat_jamaah']=='a' or $cni['solat_jamaah']=='A') { $sj=$sj+4;   }
			  if($cni['solat_jamaah']=='b' or $cni['solat_jamaah']=='B') { $sj=$sj+3;   }
			  if($cni['solat_jamaah']=='c' or $cni['solat_jamaah']=='C') { $sj=$sj+2;  }
			  if($cni['solat_jamaah']=='d' or $cni['solat_jamaah']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['solat_jamaah']=='a' or $cni['solat_jamaah']=='A') { $sj=$sj+4;   }
			  if($cni['solat_jamaah']=='b' or $cni['solat_jamaah']=='B') { $sj=$sj+3;   }
			  if($cni['solat_jamaah']=='c' or $cni['solat_jamaah']=='C') { $sj=$sj+2;  }
			  if($cni['solat_jamaah']=='d' or $cni['solat_jamaah']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka2=$ka2+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb2=$kb2+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc2=$kc2+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd2=$kd2+=1;}
		}		}   
	    if($pk=="a"){ echo $ka2; } 
		if($pk=="b"){ echo $kb2; } 
		if($pk=="c"){ echo $kc2; } 
		if($pk=="d"){ echo $kd2; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['solat_jamaah']=='a' or $cni['solat_jamaah']=='A') { $sj=$sj+4;   }
			  if($cni['solat_jamaah']=='b' or $cni['solat_jamaah']=='B') { $sj=$sj+3;   }
			  if($cni['solat_jamaah']=='c' or $cni['solat_jamaah']=='C') { $sj=$sj+2;  }
			  if($cni['solat_jamaah']=='d' or $cni['solat_jamaah']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka3=$ka3+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb3=$kb3+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc3=$kc3+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd3=$kd3+=1;}
		}		}   
	    if($pk=="a"){ echo $ka3; } 
		if($pk=="b"){ echo $kb3; } 
		if($pk=="c"){ echo $kc3; } 
		if($pk=="d"){ echo $kd3; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIID' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['solat_jamaah']=='a' or $cni['solat_jamaah']=='A') { $sj=$sj+4;   }
			  if($cni['solat_jamaah']=='b' or $cni['solat_jamaah']=='B') { $sj=$sj+3;   }
			  if($cni['solat_jamaah']=='c' or $cni['solat_jamaah']=='C') { $sj=$sj+2;  }
			  if($cni['solat_jamaah']=='d' or $cni['solat_jamaah']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka4=$ka4+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb4=$kb4+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc4=$kc4+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd4=$kd4+=1;}
		}		}   
	    if($pk=="a"){ echo $ka4; } 
		if($pk=="b"){ echo $kb4; } 
		if($pk=="c"){ echo $kc4; } 
		if($pk=="d"){ echo $kd4; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['solat_jamaah']=='a' or $cni['solat_jamaah']=='A') { $sj=$sj+4;   }
			  if($cni['solat_jamaah']=='b' or $cni['solat_jamaah']=='B') { $sj=$sj+3;   }
			  if($cni['solat_jamaah']=='c' or $cni['solat_jamaah']=='C') { $sj=$sj+2;  }
			  if($cni['solat_jamaah']=='d' or $cni['solat_jamaah']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka5=$ka5+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb5=$kb5+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc5=$kc5+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd5=$kd5+=1;}
		}		}   
	    if($pk=="a"){ echo $ka5; } 
		if($pk=="b"){ echo $kb5; } 
		if($pk=="c"){ echo $kc5; } 
		if($pk=="d"){ echo $kd5; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['solat_jamaah']=='a' or $cni['solat_jamaah']=='A') { $sj=$sj+4;   }
			  if($cni['solat_jamaah']=='b' or $cni['solat_jamaah']=='B') { $sj=$sj+3;   }
			  if($cni['solat_jamaah']=='c' or $cni['solat_jamaah']=='C') { $sj=$sj+2;  }
			  if($cni['solat_jamaah']=='d' or $cni['solat_jamaah']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka6=$ka6+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb6=$kb6+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc6=$kc6+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd6=$kd6+=1;}
		}		}   
	    if($pk=="a"){ echo $ka6; } 
		if($pk=="b"){ echo $kb6; } 
		if($pk=="c"){ echo $kc6; } 
		if($pk=="d"){ echo $kd6; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['solat_jamaah']=='a' or $cni['solat_jamaah']=='A') { $sj=$sj+4;   }
			  if($cni['solat_jamaah']=='b' or $cni['solat_jamaah']=='B') { $sj=$sj+3;   }
			  if($cni['solat_jamaah']=='c' or $cni['solat_jamaah']=='C') { $sj=$sj+2;  }
			  if($cni['solat_jamaah']=='d' or $cni['solat_jamaah']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka7=$ka7+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb7=$kb7+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc7=$kc7+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd7=$kd7+=1;}
		}		}   
	    if($pk=="a"){ echo $ka7; } 
		if($pk=="b"){ echo $kb7; } 
		if($pk=="c"){ echo $kc7; } 
		if($pk=="d"){ echo $kd7; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['solat_jamaah']=='a' or $cni['solat_jamaah']=='A') { $sj=$sj+4;   }
			  if($cni['solat_jamaah']=='b' or $cni['solat_jamaah']=='B') { $sj=$sj+3;   }
			  if($cni['solat_jamaah']=='c' or $cni['solat_jamaah']=='C') { $sj=$sj+2;  }
			  if($cni['solat_jamaah']=='d' or $cni['solat_jamaah']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka8=$ka8+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb8=$kb8+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc8=$kc8+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd8=$kd8+=1;}
		}		}   
	    if($pk=="a"){ echo $ka8; } 
		if($pk=="b"){ echo $kb8; } 
		if($pk=="c"){ echo $kc8; } 
		if($pk=="d"){ echo $kd8; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['solat_jamaah']=='a' or $cni['solat_jamaah']=='A') { $sj=$sj+4;   }
			  if($cni['solat_jamaah']=='b' or $cni['solat_jamaah']=='B') { $sj=$sj+3;   }
			  if($cni['solat_jamaah']=='c' or $cni['solat_jamaah']=='C') { $sj=$sj+2;  }
			  if($cni['solat_jamaah']=='d' or $cni['solat_jamaah']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka9=$ka9+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb9=$kb9+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc9=$kc9+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd9=$kd9+=1;}
		}		}   
	    if($pk=="a"){ echo $ka9; } 
		if($pk=="b"){ echo $kb9; } 
		if($pk=="c"){ echo $kc9; } 
		if($pk=="d"){ echo $kd9; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['solat_jamaah']=='a' or $cni['solat_jamaah']=='A') { $sj=$sj+4;   }
			  if($cni['solat_jamaah']=='b' or $cni['solat_jamaah']=='B') { $sj=$sj+3;   }
			  if($cni['solat_jamaah']=='c' or $cni['solat_jamaah']=='C') { $sj=$sj+2;  }
			  if($cni['solat_jamaah']=='d' or $cni['solat_jamaah']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka10=$ka10+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb10=$kb10+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc10=$kc10+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd10=$kd10+=1;}
		}		}   
	    if($pk=="a"){ echo $ka10; } 
		if($pk=="b"){ echo $kb10; } 
		if($pk=="c"){ echo $kc10; } 
		if($pk=="d"){ echo $kd10; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['solat_jamaah']=='a' or $cni['solat_jamaah']=='A') { $sj=$sj+4;   }
			  if($cni['solat_jamaah']=='b' or $cni['solat_jamaah']=='B') { $sj=$sj+3;   }
			  if($cni['solat_jamaah']=='c' or $cni['solat_jamaah']=='C') { $sj=$sj+2;  }
			  if($cni['solat_jamaah']=='d' or $cni['solat_jamaah']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka11=$ka11+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb11=$kb11+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc11=$kc11+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd11=$kd11+=1;}
		}		}   
	    if($pk=="a"){ echo $ka11; } 
		if($pk=="b"){ echo $kb11; } 
		if($pk=="c"){ echo $kc11; } 
		if($pk=="d"){ echo $kd11; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['solat_jamaah']=='a' or $cni['solat_jamaah']=='A') { $sj=$sj+4;   }
			  if($cni['solat_jamaah']=='b' or $cni['solat_jamaah']=='B') { $sj=$sj+3;   }
			  if($cni['solat_jamaah']=='c' or $cni['solat_jamaah']=='C') { $sj=$sj+2;  }
			  if($cni['solat_jamaah']=='d' or $cni['solat_jamaah']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka11=$ka11+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb11=$kb11+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc11=$kc11+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd11=$kd11+=1;}
		}		}   
	    if($pk=="a"){ echo $ka11; } 
		if($pk=="b"){ echo $kb11; } 
		if($pk=="c"){ echo $kc11; } 
		if($pk=="d"){ echo $kd11; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['solat_jamaah']=='a' or $cni['solat_jamaah']=='A') { $sj=$sj+4;   }
			  if($cni['solat_jamaah']=='b' or $cni['solat_jamaah']=='B') { $sj=$sj+3;   }
			  if($cni['solat_jamaah']=='c' or $cni['solat_jamaah']=='C') { $sj=$sj+2;  }
			  if($cni['solat_jamaah']=='d' or $cni['solat_jamaah']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka11=$ka11+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb11=$kb11+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc11=$kc11+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd11=$kd11+=1;}
		}		}   
	    if($pk=="a"){ echo $ka11; } 
		if($pk=="b"){ echo $kb11; } 
		if($pk=="c"){ echo $kc11; } 
		if($pk=="d"){ echo $kd11; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['solat_jamaah']=='a' or $cni['solat_jamaah']=='A') { $sj=$sj+4;   }
			  if($cni['solat_jamaah']=='b' or $cni['solat_jamaah']=='B') { $sj=$sj+3;   }
			  if($cni['solat_jamaah']=='c' or $cni['solat_jamaah']=='C') { $sj=$sj+2;  }
			  if($cni['solat_jamaah']=='d' or $cni['solat_jamaah']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka12=$ka12+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb12=$kb12+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc12=$kc12+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd12=$kd12+=1;}
		}		}   
	    if($pk=="a"){ echo $ka12; } 
		if($pk=="b"){ echo $kb12; } 
		if($pk=="c"){ echo $kc12; } 
		if($pk=="d"){ echo $kd12; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['solat_jamaah']=='a' or $cni['solat_jamaah']=='A') { $sj=$sj+4;   }
			  if($cni['solat_jamaah']=='b' or $cni['solat_jamaah']=='B') { $sj=$sj+3;   }
			  if($cni['solat_jamaah']=='c' or $cni['solat_jamaah']=='C') { $sj=$sj+2;  }
			  if($cni['solat_jamaah']=='d' or $cni['solat_jamaah']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka12=$ka12+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb12=$kb12+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc12=$kc12+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd12=$kd12+=1;}
		}		}   
	    if($pk=="a"){ echo $ka12; } 
		if($pk=="b"){ echo $kb12; } 
		if($pk=="c"){ echo $kc12; } 
		if($pk=="d"){ echo $kd12; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['solat_jamaah']=='a' or $cni['solat_jamaah']=='A') { $sj=$sj+4;   }
			  if($cni['solat_jamaah']=='b' or $cni['solat_jamaah']=='B') { $sj=$sj+3;   }
			  if($cni['solat_jamaah']=='c' or $cni['solat_jamaah']=='C') { $sj=$sj+2;  }
			  if($cni['solat_jamaah']=='d' or $cni['solat_jamaah']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka13=$ka13+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb13=$kb13+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc13=$kc13+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd13=$kd13+=1;}
		}		}   
	    if($pk=="a"){ echo $ka13; } 
		if($pk=="b"){ echo $kb13; } 
		if($pk=="c"){ echo $kc13; } 
		if($pk=="d"){ echo $kd13; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['solat_jamaah']=='a' or $cni['solat_jamaah']=='A') { $sj=$sj+4;   }
			  if($cni['solat_jamaah']=='b' or $cni['solat_jamaah']=='B') { $sj=$sj+3;   }
			  if($cni['solat_jamaah']=='c' or $cni['solat_jamaah']=='C') { $sj=$sj+2;  }
			  if($cni['solat_jamaah']=='d' or $cni['solat_jamaah']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka13=$ka13+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb13=$kb13+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc13=$kc13+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd13=$kd13+=1;}
		}		}   
	    if($pk=="a"){ echo $ka13; } 
		if($pk=="b"){ echo $kb13; } 
		if($pk=="c"){ echo $kc13; } 
		if($pk=="d"){ echo $kd13; }  
		
			?>
            </div></td>
            </tr>
          <tr>
            <td bgcolor="#FFFFFF"><div align="center">Sholat dhuha</div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['solat_duha']=='a' or $cni['solat_duha']=='A') { $sj=$sj+4;   }
			  if($cni['solat_duha']=='b' or $cni['solat_duha']=='B') { $sj=$sj+3;   }
			  if($cni['solat_duha']=='c' or $cni['solat_duha']=='C') { $sj=$sj+2;  }
			  if($cni['solat_duha']=='d' or $cni['solat_duha']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;	
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 	   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['solat_duha']=='a' or $cni['solat_duha']=='A') { $sj=$sj+4;   }
			  if($cni['solat_duha']=='b' or $cni['solat_duha']=='B') { $sj=$sj+3;   }
			  if($cni['solat_duha']=='c' or $cni['solat_duha']=='C') { $sj=$sj+2;  }
			  if($cni['solat_duha']=='d' or $cni['solat_duha']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;	
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 	   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['solat_duha']=='a' or $cni['solat_duha']=='A') { $sj=$sj+4;   }
			  if($cni['solat_duha']=='b' or $cni['solat_duha']=='B') { $sj=$sj+3;   }
			  if($cni['solat_duha']=='c' or $cni['solat_duha']=='C') { $sj=$sj+2;  }
			  if($cni['solat_duha']=='d' or $cni['solat_duha']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;	
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIID' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 	   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['solat_duha']=='a' or $cni['solat_duha']=='A') { $sj=$sj+4;   }
			  if($cni['solat_duha']=='b' or $cni['solat_duha']=='B') { $sj=$sj+3;   }
			  if($cni['solat_duha']=='c' or $cni['solat_duha']=='C') { $sj=$sj+2;  }
			  if($cni['solat_duha']=='d' or $cni['solat_duha']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;	
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 	   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['solat_duha']=='a' or $cni['solat_duha']=='A') { $sj=$sj+4;   }
			  if($cni['solat_duha']=='b' or $cni['solat_duha']=='B') { $sj=$sj+3;   }
			  if($cni['solat_duha']=='c' or $cni['solat_duha']=='C') { $sj=$sj+2;  }
			  if($cni['solat_duha']=='d' or $cni['solat_duha']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;	
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 	   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['solat_duha']=='a' or $cni['solat_duha']=='A') { $sj=$sj+4;   }
			  if($cni['solat_duha']=='b' or $cni['solat_duha']=='B') { $sj=$sj+3;   }
			  if($cni['solat_duha']=='c' or $cni['solat_duha']=='C') { $sj=$sj+2;  }
			  if($cni['solat_duha']=='d' or $cni['solat_duha']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;	
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 	   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['solat_duha']=='a' or $cni['solat_duha']=='A') { $sj=$sj+4;   }
			  if($cni['solat_duha']=='b' or $cni['solat_duha']=='B') { $sj=$sj+3;   }
			  if($cni['solat_duha']=='c' or $cni['solat_duha']=='C') { $sj=$sj+2;  }
			  if($cni['solat_duha']=='d' or $cni['solat_duha']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;	
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 	   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['solat_duha']=='a' or $cni['solat_duha']=='A') { $sj=$sj+4;   }
			  if($cni['solat_duha']=='b' or $cni['solat_duha']=='B') { $sj=$sj+3;   }
			  if($cni['solat_duha']=='c' or $cni['solat_duha']=='C') { $sj=$sj+2;  }
			  if($cni['solat_duha']=='d' or $cni['solat_duha']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;	
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 	   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['solat_duha']=='a' or $cni['solat_duha']=='A') { $sj=$sj+4;   }
			  if($cni['solat_duha']=='b' or $cni['solat_duha']=='B') { $sj=$sj+3;   }
			  if($cni['solat_duha']=='c' or $cni['solat_duha']=='C') { $sj=$sj+2;  }
			  if($cni['solat_duha']=='d' or $cni['solat_duha']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;	
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 	   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['solat_duha']=='a' or $cni['solat_duha']=='A') { $sj=$sj+4;   }
			  if($cni['solat_duha']=='b' or $cni['solat_duha']=='B') { $sj=$sj+3;   }
			  if($cni['solat_duha']=='c' or $cni['solat_duha']=='C') { $sj=$sj+2;  }
			  if($cni['solat_duha']=='d' or $cni['solat_duha']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;	
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 	   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['solat_duha']=='a' or $cni['solat_duha']=='A') { $sj=$sj+4;   }
			  if($cni['solat_duha']=='b' or $cni['solat_duha']=='B') { $sj=$sj+3;   }
			  if($cni['solat_duha']=='c' or $cni['solat_duha']=='C') { $sj=$sj+2;  }
			  if($cni['solat_duha']=='d' or $cni['solat_duha']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;	
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 	   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['solat_duha']=='a' or $cni['solat_duha']=='A') { $sj=$sj+4;   }
			  if($cni['solat_duha']=='b' or $cni['solat_duha']=='B') { $sj=$sj+3;   }
			  if($cni['solat_duha']=='c' or $cni['solat_duha']=='C') { $sj=$sj+2;  }
			  if($cni['solat_duha']=='d' or $cni['solat_duha']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;	
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 	   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['solat_duha']=='a' or $cni['solat_duha']=='A') { $sj=$sj+4;   }
			  if($cni['solat_duha']=='b' or $cni['solat_duha']=='B') { $sj=$sj+3;   }
			  if($cni['solat_duha']=='c' or $cni['solat_duha']=='C') { $sj=$sj+2;  }
			  if($cni['solat_duha']=='d' or $cni['solat_duha']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;	
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 	   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['solat_duha']=='a' or $cni['solat_duha']=='A') { $sj=$sj+4;   }
			  if($cni['solat_duha']=='b' or $cni['solat_duha']=='B') { $sj=$sj+3;   }
			  if($cni['solat_duha']=='c' or $cni['solat_duha']=='C') { $sj=$sj+2;  }
			  if($cni['solat_duha']=='d' or $cni['solat_duha']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;	
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 	   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['solat_duha']=='a' or $cni['solat_duha']=='A') { $sj=$sj+4;   }
			  if($cni['solat_duha']=='b' or $cni['solat_duha']=='B') { $sj=$sj+3;   }
			  if($cni['solat_duha']=='c' or $cni['solat_duha']=='C') { $sj=$sj+2;  }
			  if($cni['solat_duha']=='d' or $cni['solat_duha']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;	
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 	   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['solat_duha']=='a' or $cni['solat_duha']=='A') { $sj=$sj+4;   }
			  if($cni['solat_duha']=='b' or $cni['solat_duha']=='B') { $sj=$sj+3;   }
			  if($cni['solat_duha']=='c' or $cni['solat_duha']=='C') { $sj=$sj+2;  }
			  if($cni['solat_duha']=='d' or $cni['solat_duha']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;	
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 	   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['solat_duha']=='a' or $cni['solat_duha']=='A') { $sj=$sj+4;   }
			  if($cni['solat_duha']=='b' or $cni['solat_duha']=='B') { $sj=$sj+3;   }
			  if($cni['solat_duha']=='c' or $cni['solat_duha']=='C') { $sj=$sj+2;  }
			  if($cni['solat_duha']=='d' or $cni['solat_duha']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            </tr>
          <tr>
            <td bgcolor="#FFFFFF"><div align="center">Qiyamullail</div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['qiyamullail']=='a' or $cni['qiyamullail']=='A') { $sj=$sj+4;   }
			  if($cni['qiyamullail']=='b' or $cni['qiyamullail']=='B') { $sj=$sj+3;   }
			  if($cni['qiyamullail']=='c' or $cni['qiyamullail']=='C') { $sj=$sj+2;  }
			  if($cni['qiyamullail']=='d' or $cni['qiyamullail']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['qiyamullail']=='a' or $cni['qiyamullail']=='A') { $sj=$sj+4;   }
			  if($cni['qiyamullail']=='b' or $cni['qiyamullail']=='B') { $sj=$sj+3;   }
			  if($cni['qiyamullail']=='c' or $cni['qiyamullail']=='C') { $sj=$sj+2;  }
			  if($cni['qiyamullail']=='d' or $cni['qiyamullail']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['qiyamullail']=='a' or $cni['qiyamullail']=='A') { $sj=$sj+4;   }
			  if($cni['qiyamullail']=='b' or $cni['qiyamullail']=='B') { $sj=$sj+3;   }
			  if($cni['qiyamullail']=='c' or $cni['qiyamullail']=='C') { $sj=$sj+2;  }
			  if($cni['qiyamullail']=='d' or $cni['qiyamullail']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIID' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['qiyamullail']=='a' or $cni['qiyamullail']=='A') { $sj=$sj+4;   }
			  if($cni['qiyamullail']=='b' or $cni['qiyamullail']=='B') { $sj=$sj+3;   }
			  if($cni['qiyamullail']=='c' or $cni['qiyamullail']=='C') { $sj=$sj+2;  }
			  if($cni['qiyamullail']=='d' or $cni['qiyamullail']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['qiyamullail']=='a' or $cni['qiyamullail']=='A') { $sj=$sj+4;   }
			  if($cni['qiyamullail']=='b' or $cni['qiyamullail']=='B') { $sj=$sj+3;   }
			  if($cni['qiyamullail']=='c' or $cni['qiyamullail']=='C') { $sj=$sj+2;  }
			  if($cni['qiyamullail']=='d' or $cni['qiyamullail']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['qiyamullail']=='a' or $cni['qiyamullail']=='A') { $sj=$sj+4;   }
			  if($cni['qiyamullail']=='b' or $cni['qiyamullail']=='B') { $sj=$sj+3;   }
			  if($cni['qiyamullail']=='c' or $cni['qiyamullail']=='C') { $sj=$sj+2;  }
			  if($cni['qiyamullail']=='d' or $cni['qiyamullail']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['qiyamullail']=='a' or $cni['qiyamullail']=='A') { $sj=$sj+4;   }
			  if($cni['qiyamullail']=='b' or $cni['qiyamullail']=='B') { $sj=$sj+3;   }
			  if($cni['qiyamullail']=='c' or $cni['qiyamullail']=='C') { $sj=$sj+2;  }
			  if($cni['qiyamullail']=='d' or $cni['qiyamullail']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['qiyamullail']=='a' or $cni['qiyamullail']=='A') { $sj=$sj+4;   }
			  if($cni['qiyamullail']=='b' or $cni['qiyamullail']=='B') { $sj=$sj+3;   }
			  if($cni['qiyamullail']=='c' or $cni['qiyamullail']=='C') { $sj=$sj+2;  }
			  if($cni['qiyamullail']=='d' or $cni['qiyamullail']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['qiyamullail']=='a' or $cni['qiyamullail']=='A') { $sj=$sj+4;   }
			  if($cni['qiyamullail']=='b' or $cni['qiyamullail']=='B') { $sj=$sj+3;   }
			  if($cni['qiyamullail']=='c' or $cni['qiyamullail']=='C') { $sj=$sj+2;  }
			  if($cni['qiyamullail']=='d' or $cni['qiyamullail']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['qiyamullail']=='a' or $cni['qiyamullail']=='A') { $sj=$sj+4;   }
			  if($cni['qiyamullail']=='b' or $cni['qiyamullail']=='B') { $sj=$sj+3;   }
			  if($cni['qiyamullail']=='c' or $cni['qiyamullail']=='C') { $sj=$sj+2;  }
			  if($cni['qiyamullail']=='d' or $cni['qiyamullail']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['qiyamullail']=='a' or $cni['qiyamullail']=='A') { $sj=$sj+4;   }
			  if($cni['qiyamullail']=='b' or $cni['qiyamullail']=='B') { $sj=$sj+3;   }
			  if($cni['qiyamullail']=='c' or $cni['qiyamullail']=='C') { $sj=$sj+2;  }
			  if($cni['qiyamullail']=='d' or $cni['qiyamullail']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['qiyamullail']=='a' or $cni['qiyamullail']=='A') { $sj=$sj+4;   }
			  if($cni['qiyamullail']=='b' or $cni['qiyamullail']=='B') { $sj=$sj+3;   }
			  if($cni['qiyamullail']=='c' or $cni['qiyamullail']=='C') { $sj=$sj+2;  }
			  if($cni['qiyamullail']=='d' or $cni['qiyamullail']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['qiyamullail']=='a' or $cni['qiyamullail']=='A') { $sj=$sj+4;   }
			  if($cni['qiyamullail']=='b' or $cni['qiyamullail']=='B') { $sj=$sj+3;   }
			  if($cni['qiyamullail']=='c' or $cni['qiyamullail']=='C') { $sj=$sj+2;  }
			  if($cni['qiyamullail']=='d' or $cni['qiyamullail']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['qiyamullail']=='a' or $cni['qiyamullail']=='A') { $sj=$sj+4;   }
			  if($cni['qiyamullail']=='b' or $cni['qiyamullail']=='B') { $sj=$sj+3;   }
			  if($cni['qiyamullail']=='c' or $cni['qiyamullail']=='C') { $sj=$sj+2;  }
			  if($cni['qiyamullail']=='d' or $cni['qiyamullail']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['qiyamullail']=='a' or $cni['qiyamullail']=='A') { $sj=$sj+4;   }
			  if($cni['qiyamullail']=='b' or $cni['qiyamullail']=='B') { $sj=$sj+3;   }
			  if($cni['qiyamullail']=='c' or $cni['qiyamullail']=='C') { $sj=$sj+2;  }
			  if($cni['qiyamullail']=='d' or $cni['qiyamullail']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['qiyamullail']=='a' or $cni['qiyamullail']=='A') { $sj=$sj+4;   }
			  if($cni['qiyamullail']=='b' or $cni['qiyamullail']=='B') { $sj=$sj+3;   }
			  if($cni['qiyamullail']=='c' or $cni['qiyamullail']=='C') { $sj=$sj+2;  }
			  if($cni['qiyamullail']=='d' or $cni['qiyamullail']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['qiyamullail']=='a' or $cni['qiyamullail']=='A') { $sj=$sj+4;   }
			  if($cni['qiyamullail']=='b' or $cni['qiyamullail']=='B') { $sj=$sj+3;   }
			  if($cni['qiyamullail']=='c' or $cni['qiyamullail']=='C') { $sj=$sj+2;  }
			  if($cni['qiyamullail']=='d' or $cni['qiyamullail']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            </tr>
          <tr>
            <td bgcolor="#FFFFFF"><div align="center">Sholat sunnah rawatib</div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['sunnah_rawatib']=='a' or $cni['sunnah_rawatib']=='A') { $sj=$sj+4;   }
			  if($cni['sunnah_rawatib']=='b' or $cni['sunnah_rawatib']=='B') { $sj=$sj+3;   }
			  if($cni['sunnah_rawatib']=='c' or $cni['sunnah_rawatib']=='C') { $sj=$sj+2;  }
			  if($cni['sunnah_rawatib']=='d' or $cni['sunnah_rawatib']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['sunnah_rawatib']=='a' or $cni['sunnah_rawatib']=='A') { $sj=$sj+4;   }
			  if($cni['sunnah_rawatib']=='b' or $cni['sunnah_rawatib']=='B') { $sj=$sj+3;   }
			  if($cni['sunnah_rawatib']=='c' or $cni['sunnah_rawatib']=='C') { $sj=$sj+2;  }
			  if($cni['sunnah_rawatib']=='d' or $cni['sunnah_rawatib']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['sunnah_rawatib']=='a' or $cni['sunnah_rawatib']=='A') { $sj=$sj+4;   }
			  if($cni['sunnah_rawatib']=='b' or $cni['sunnah_rawatib']=='B') { $sj=$sj+3;   }
			  if($cni['sunnah_rawatib']=='c' or $cni['sunnah_rawatib']=='C') { $sj=$sj+2;  }
			  if($cni['sunnah_rawatib']=='d' or $cni['sunnah_rawatib']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIID' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['sunnah_rawatib']=='a' or $cni['sunnah_rawatib']=='A') { $sj=$sj+4;   }
			  if($cni['sunnah_rawatib']=='b' or $cni['sunnah_rawatib']=='B') { $sj=$sj+3;   }
			  if($cni['sunnah_rawatib']=='c' or $cni['sunnah_rawatib']=='C') { $sj=$sj+2;  }
			  if($cni['sunnah_rawatib']=='d' or $cni['sunnah_rawatib']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['sunnah_rawatib']=='a' or $cni['sunnah_rawatib']=='A') { $sj=$sj+4;   }
			  if($cni['sunnah_rawatib']=='b' or $cni['sunnah_rawatib']=='B') { $sj=$sj+3;   }
			  if($cni['sunnah_rawatib']=='c' or $cni['sunnah_rawatib']=='C') { $sj=$sj+2;  }
			  if($cni['sunnah_rawatib']=='d' or $cni['sunnah_rawatib']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['sunnah_rawatib']=='a' or $cni['sunnah_rawatib']=='A') { $sj=$sj+4;   }
			  if($cni['sunnah_rawatib']=='b' or $cni['sunnah_rawatib']=='B') { $sj=$sj+3;   }
			  if($cni['sunnah_rawatib']=='c' or $cni['sunnah_rawatib']=='C') { $sj=$sj+2;  }
			  if($cni['sunnah_rawatib']=='d' or $cni['sunnah_rawatib']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['sunnah_rawatib']=='a' or $cni['sunnah_rawatib']=='A') { $sj=$sj+4;   }
			  if($cni['sunnah_rawatib']=='b' or $cni['sunnah_rawatib']=='B') { $sj=$sj+3;   }
			  if($cni['sunnah_rawatib']=='c' or $cni['sunnah_rawatib']=='C') { $sj=$sj+2;  }
			  if($cni['sunnah_rawatib']=='d' or $cni['sunnah_rawatib']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['sunnah_rawatib']=='a' or $cni['sunnah_rawatib']=='A') { $sj=$sj+4;   }
			  if($cni['sunnah_rawatib']=='b' or $cni['sunnah_rawatib']=='B') { $sj=$sj+3;   }
			  if($cni['sunnah_rawatib']=='c' or $cni['sunnah_rawatib']=='C') { $sj=$sj+2;  }
			  if($cni['sunnah_rawatib']=='d' or $cni['sunnah_rawatib']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['sunnah_rawatib']=='a' or $cni['sunnah_rawatib']=='A') { $sj=$sj+4;   }
			  if($cni['sunnah_rawatib']=='b' or $cni['sunnah_rawatib']=='B') { $sj=$sj+3;   }
			  if($cni['sunnah_rawatib']=='c' or $cni['sunnah_rawatib']=='C') { $sj=$sj+2;  }
			  if($cni['sunnah_rawatib']=='d' or $cni['sunnah_rawatib']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['sunnah_rawatib']=='a' or $cni['sunnah_rawatib']=='A') { $sj=$sj+4;   }
			  if($cni['sunnah_rawatib']=='b' or $cni['sunnah_rawatib']=='B') { $sj=$sj+3;   }
			  if($cni['sunnah_rawatib']=='c' or $cni['sunnah_rawatib']=='C') { $sj=$sj+2;  }
			  if($cni['sunnah_rawatib']=='d' or $cni['sunnah_rawatib']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['sunnah_rawatib']=='a' or $cni['sunnah_rawatib']=='A') { $sj=$sj+4;   }
			  if($cni['sunnah_rawatib']=='b' or $cni['sunnah_rawatib']=='B') { $sj=$sj+3;   }
			  if($cni['sunnah_rawatib']=='c' or $cni['sunnah_rawatib']=='C') { $sj=$sj+2;  }
			  if($cni['sunnah_rawatib']=='d' or $cni['sunnah_rawatib']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['sunnah_rawatib']=='a' or $cni['sunnah_rawatib']=='A') { $sj=$sj+4;   }
			  if($cni['sunnah_rawatib']=='b' or $cni['sunnah_rawatib']=='B') { $sj=$sj+3;   }
			  if($cni['sunnah_rawatib']=='c' or $cni['sunnah_rawatib']=='C') { $sj=$sj+2;  }
			  if($cni['sunnah_rawatib']=='d' or $cni['sunnah_rawatib']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['sunnah_rawatib']=='a' or $cni['sunnah_rawatib']=='A') { $sj=$sj+4;   }
			  if($cni['sunnah_rawatib']=='b' or $cni['sunnah_rawatib']=='B') { $sj=$sj+3;   }
			  if($cni['sunnah_rawatib']=='c' or $cni['sunnah_rawatib']=='C') { $sj=$sj+2;  }
			  if($cni['sunnah_rawatib']=='d' or $cni['sunnah_rawatib']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['sunnah_rawatib']=='a' or $cni['sunnah_rawatib']=='A') { $sj=$sj+4;   }
			  if($cni['sunnah_rawatib']=='b' or $cni['sunnah_rawatib']=='B') { $sj=$sj+3;   }
			  if($cni['sunnah_rawatib']=='c' or $cni['sunnah_rawatib']=='C') { $sj=$sj+2;  }
			  if($cni['sunnah_rawatib']=='d' or $cni['sunnah_rawatib']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['sunnah_rawatib']=='a' or $cni['sunnah_rawatib']=='A') { $sj=$sj+4;   }
			  if($cni['sunnah_rawatib']=='b' or $cni['sunnah_rawatib']=='B') { $sj=$sj+3;   }
			  if($cni['sunnah_rawatib']=='c' or $cni['sunnah_rawatib']=='C') { $sj=$sj+2;  }
			  if($cni['sunnah_rawatib']=='d' or $cni['sunnah_rawatib']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['sunnah_rawatib']=='a' or $cni['sunnah_rawatib']=='A') { $sj=$sj+4;   }
			  if($cni['sunnah_rawatib']=='b' or $cni['sunnah_rawatib']=='B') { $sj=$sj+3;   }
			  if($cni['sunnah_rawatib']=='c' or $cni['sunnah_rawatib']=='C') { $sj=$sj+2;  }
			  if($cni['sunnah_rawatib']=='d' or $cni['sunnah_rawatib']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['sunnah_rawatib']=='a' or $cni['sunnah_rawatib']=='A') { $sj=$sj+4;   }
			  if($cni['sunnah_rawatib']=='b' or $cni['sunnah_rawatib']=='B') { $sj=$sj+3;   }
			  if($cni['sunnah_rawatib']=='c' or $cni['sunnah_rawatib']=='C') { $sj=$sj+2;  }
			  if($cni['sunnah_rawatib']=='d' or $cni['sunnah_rawatib']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            </tr>
          <tr>
            <td bgcolor="#FFFFFF"><div align="center">Wirid dan do&rsquo;a ba&rsquo;da sholat</div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['wirid_doa']=='a' or $cni['wirid_doa']=='A') { $sj=$sj+4;   }
			  if($cni['wirid_doa']=='b' or $cni['wirid_doa']=='B') { $sj=$sj+3;   }
			  if($cni['wirid_doa']=='c' or $cni['wirid_doa']=='C') { $sj=$sj+2;  }
			  if($cni['wirid_doa']=='d' or $cni['wirid_doa']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['wirid_doa']=='a' or $cni['wirid_doa']=='A') { $sj=$sj+4;   }
			  if($cni['wirid_doa']=='b' or $cni['wirid_doa']=='B') { $sj=$sj+3;   }
			  if($cni['wirid_doa']=='c' or $cni['wirid_doa']=='C') { $sj=$sj+2;  }
			  if($cni['wirid_doa']=='d' or $cni['wirid_doa']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['wirid_doa']=='a' or $cni['wirid_doa']=='A') { $sj=$sj+4;   }
			  if($cni['wirid_doa']=='b' or $cni['wirid_doa']=='B') { $sj=$sj+3;   }
			  if($cni['wirid_doa']=='c' or $cni['wirid_doa']=='C') { $sj=$sj+2;  }
			  if($cni['wirid_doa']=='d' or $cni['wirid_doa']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIID' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['wirid_doa']=='a' or $cni['wirid_doa']=='A') { $sj=$sj+4;   }
			  if($cni['wirid_doa']=='b' or $cni['wirid_doa']=='B') { $sj=$sj+3;   }
			  if($cni['wirid_doa']=='c' or $cni['wirid_doa']=='C') { $sj=$sj+2;  }
			  if($cni['wirid_doa']=='d' or $cni['wirid_doa']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['wirid_doa']=='a' or $cni['wirid_doa']=='A') { $sj=$sj+4;   }
			  if($cni['wirid_doa']=='b' or $cni['wirid_doa']=='B') { $sj=$sj+3;   }
			  if($cni['wirid_doa']=='c' or $cni['wirid_doa']=='C') { $sj=$sj+2;  }
			  if($cni['wirid_doa']=='d' or $cni['wirid_doa']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['wirid_doa']=='a' or $cni['wirid_doa']=='A') { $sj=$sj+4;   }
			  if($cni['wirid_doa']=='b' or $cni['wirid_doa']=='B') { $sj=$sj+3;   }
			  if($cni['wirid_doa']=='c' or $cni['wirid_doa']=='C') { $sj=$sj+2;  }
			  if($cni['wirid_doa']=='d' or $cni['wirid_doa']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['wirid_doa']=='a' or $cni['wirid_doa']=='A') { $sj=$sj+4;   }
			  if($cni['wirid_doa']=='b' or $cni['wirid_doa']=='B') { $sj=$sj+3;   }
			  if($cni['wirid_doa']=='c' or $cni['wirid_doa']=='C') { $sj=$sj+2;  }
			  if($cni['wirid_doa']=='d' or $cni['wirid_doa']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['wirid_doa']=='a' or $cni['wirid_doa']=='A') { $sj=$sj+4;   }
			  if($cni['wirid_doa']=='b' or $cni['wirid_doa']=='B') { $sj=$sj+3;   }
			  if($cni['wirid_doa']=='c' or $cni['wirid_doa']=='C') { $sj=$sj+2;  }
			  if($cni['wirid_doa']=='d' or $cni['wirid_doa']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['wirid_doa']=='a' or $cni['wirid_doa']=='A') { $sj=$sj+4;   }
			  if($cni['wirid_doa']=='b' or $cni['wirid_doa']=='B') { $sj=$sj+3;   }
			  if($cni['wirid_doa']=='c' or $cni['wirid_doa']=='C') { $sj=$sj+2;  }
			  if($cni['wirid_doa']=='d' or $cni['wirid_doa']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['wirid_doa']=='a' or $cni['wirid_doa']=='A') { $sj=$sj+4;   }
			  if($cni['wirid_doa']=='b' or $cni['wirid_doa']=='B') { $sj=$sj+3;   }
			  if($cni['wirid_doa']=='c' or $cni['wirid_doa']=='C') { $sj=$sj+2;  }
			  if($cni['wirid_doa']=='d' or $cni['wirid_doa']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['wirid_doa']=='a' or $cni['wirid_doa']=='A') { $sj=$sj+4;   }
			  if($cni['wirid_doa']=='b' or $cni['wirid_doa']=='B') { $sj=$sj+3;   }
			  if($cni['wirid_doa']=='c' or $cni['wirid_doa']=='C') { $sj=$sj+2;  }
			  if($cni['wirid_doa']=='d' or $cni['wirid_doa']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['wirid_doa']=='a' or $cni['wirid_doa']=='A') { $sj=$sj+4;   }
			  if($cni['wirid_doa']=='b' or $cni['wirid_doa']=='B') { $sj=$sj+3;   }
			  if($cni['wirid_doa']=='c' or $cni['wirid_doa']=='C') { $sj=$sj+2;  }
			  if($cni['wirid_doa']=='d' or $cni['wirid_doa']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['wirid_doa']=='a' or $cni['wirid_doa']=='A') { $sj=$sj+4;   }
			  if($cni['wirid_doa']=='b' or $cni['wirid_doa']=='B') { $sj=$sj+3;   }
			  if($cni['wirid_doa']=='c' or $cni['wirid_doa']=='C') { $sj=$sj+2;  }
			  if($cni['wirid_doa']=='d' or $cni['wirid_doa']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['wirid_doa']=='a' or $cni['wirid_doa']=='A') { $sj=$sj+4;   }
			  if($cni['wirid_doa']=='b' or $cni['wirid_doa']=='B') { $sj=$sj+3;   }
			  if($cni['wirid_doa']=='c' or $cni['wirid_doa']=='C') { $sj=$sj+2;  }
			  if($cni['wirid_doa']=='d' or $cni['wirid_doa']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['wirid_doa']=='a' or $cni['wirid_doa']=='A') { $sj=$sj+4;   }
			  if($cni['wirid_doa']=='b' or $cni['wirid_doa']=='B') { $sj=$sj+3;   }
			  if($cni['wirid_doa']=='c' or $cni['wirid_doa']=='C') { $sj=$sj+2;  }
			  if($cni['wirid_doa']=='d' or $cni['wirid_doa']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['wirid_doa']=='a' or $cni['wirid_doa']=='A') { $sj=$sj+4;   }
			  if($cni['wirid_doa']=='b' or $cni['wirid_doa']=='B') { $sj=$sj+3;   }
			  if($cni['wirid_doa']=='c' or $cni['wirid_doa']=='C') { $sj=$sj+2;  }
			  if($cni['wirid_doa']=='d' or $cni['wirid_doa']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['wirid_doa']=='a' or $cni['wirid_doa']=='A') { $sj=$sj+4;   }
			  if($cni['wirid_doa']=='b' or $cni['wirid_doa']=='B') { $sj=$sj+3;   }
			  if($cni['wirid_doa']=='c' or $cni['wirid_doa']=='C') { $sj=$sj+2;  }
			  if($cni['wirid_doa']=='d' or $cni['wirid_doa']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            </tr>
          <tr>
            <td bgcolor="#FFFFFF"><div align="center">Shaum senin-kamis</div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['shaum']=='a' or $cni['shaum']=='A') { $sj=$sj+4;   }
			  if($cni['shaum']=='b' or $cni['shaum']=='B') { $sj=$sj+3;   }
			  if($cni['shaum']=='c' or $cni['shaum']=='C') { $sj=$sj+2;  }
			  if($cni['shaum']=='d' or $cni['shaum']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['shaum']=='a' or $cni['shaum']=='A') { $sj=$sj+4;   }
			  if($cni['shaum']=='b' or $cni['shaum']=='B') { $sj=$sj+3;   }
			  if($cni['shaum']=='c' or $cni['shaum']=='C') { $sj=$sj+2;  }
			  if($cni['shaum']=='d' or $cni['shaum']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['shaum']=='a' or $cni['shaum']=='A') { $sj=$sj+4;   }
			  if($cni['shaum']=='b' or $cni['shaum']=='B') { $sj=$sj+3;   }
			  if($cni['shaum']=='c' or $cni['shaum']=='C') { $sj=$sj+2;  }
			  if($cni['shaum']=='d' or $cni['shaum']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIID' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['shaum']=='a' or $cni['shaum']=='A') { $sj=$sj+4;   }
			  if($cni['shaum']=='b' or $cni['shaum']=='B') { $sj=$sj+3;   }
			  if($cni['shaum']=='c' or $cni['shaum']=='C') { $sj=$sj+2;  }
			  if($cni['shaum']=='d' or $cni['shaum']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['shaum']=='a' or $cni['shaum']=='A') { $sj=$sj+4;   }
			  if($cni['shaum']=='b' or $cni['shaum']=='B') { $sj=$sj+3;   }
			  if($cni['shaum']=='c' or $cni['shaum']=='C') { $sj=$sj+2;  }
			  if($cni['shaum']=='d' or $cni['shaum']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['shaum']=='a' or $cni['shaum']=='A') { $sj=$sj+4;   }
			  if($cni['shaum']=='b' or $cni['shaum']=='B') { $sj=$sj+3;   }
			  if($cni['shaum']=='c' or $cni['shaum']=='C') { $sj=$sj+2;  }
			  if($cni['shaum']=='d' or $cni['shaum']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['shaum']=='a' or $cni['shaum']=='A') { $sj=$sj+4;   }
			  if($cni['shaum']=='b' or $cni['shaum']=='B') { $sj=$sj+3;   }
			  if($cni['shaum']=='c' or $cni['shaum']=='C') { $sj=$sj+2;  }
			  if($cni['shaum']=='d' or $cni['shaum']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['shaum']=='a' or $cni['shaum']=='A') { $sj=$sj+4;   }
			  if($cni['shaum']=='b' or $cni['shaum']=='B') { $sj=$sj+3;   }
			  if($cni['shaum']=='c' or $cni['shaum']=='C') { $sj=$sj+2;  }
			  if($cni['shaum']=='d' or $cni['shaum']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['shaum']=='a' or $cni['shaum']=='A') { $sj=$sj+4;   }
			  if($cni['shaum']=='b' or $cni['shaum']=='B') { $sj=$sj+3;   }
			  if($cni['shaum']=='c' or $cni['shaum']=='C') { $sj=$sj+2;  }
			  if($cni['shaum']=='d' or $cni['shaum']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['shaum']=='a' or $cni['shaum']=='A') { $sj=$sj+4;   }
			  if($cni['shaum']=='b' or $cni['shaum']=='B') { $sj=$sj+3;   }
			  if($cni['shaum']=='c' or $cni['shaum']=='C') { $sj=$sj+2;  }
			  if($cni['shaum']=='d' or $cni['shaum']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['shaum']=='a' or $cni['shaum']=='A') { $sj=$sj+4;   }
			  if($cni['shaum']=='b' or $cni['shaum']=='B') { $sj=$sj+3;   }
			  if($cni['shaum']=='c' or $cni['shaum']=='C') { $sj=$sj+2;  }
			  if($cni['shaum']=='d' or $cni['shaum']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['shaum']=='a' or $cni['shaum']=='A') { $sj=$sj+4;   }
			  if($cni['shaum']=='b' or $cni['shaum']=='B') { $sj=$sj+3;   }
			  if($cni['shaum']=='c' or $cni['shaum']=='C') { $sj=$sj+2;  }
			  if($cni['shaum']=='d' or $cni['shaum']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['shaum']=='a' or $cni['shaum']=='A') { $sj=$sj+4;   }
			  if($cni['shaum']=='b' or $cni['shaum']=='B') { $sj=$sj+3;   }
			  if($cni['shaum']=='c' or $cni['shaum']=='C') { $sj=$sj+2;  }
			  if($cni['shaum']=='d' or $cni['shaum']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['shaum']=='a' or $cni['shaum']=='A') { $sj=$sj+4;   }
			  if($cni['shaum']=='b' or $cni['shaum']=='B') { $sj=$sj+3;   }
			  if($cni['shaum']=='c' or $cni['shaum']=='C') { $sj=$sj+2;  }
			  if($cni['shaum']=='d' or $cni['shaum']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['shaum']=='a' or $cni['shaum']=='A') { $sj=$sj+4;   }
			  if($cni['shaum']=='b' or $cni['shaum']=='B') { $sj=$sj+3;   }
			  if($cni['shaum']=='c' or $cni['shaum']=='C') { $sj=$sj+2;  }
			  if($cni['shaum']=='d' or $cni['shaum']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['shaum']=='a' or $cni['shaum']=='A') { $sj=$sj+4;   }
			  if($cni['shaum']=='b' or $cni['shaum']=='B') { $sj=$sj+3;   }
			  if($cni['shaum']=='c' or $cni['shaum']=='C') { $sj=$sj+2;  }
			  if($cni['shaum']=='d' or $cni['shaum']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['shaum']=='a' or $cni['shaum']=='A') { $sj=$sj+4;   }
			  if($cni['shaum']=='b' or $cni['shaum']=='B') { $sj=$sj+3;   }
			  if($cni['shaum']=='c' or $cni['shaum']=='C') { $sj=$sj+2;  }
			  if($cni['shaum']=='d' or $cni['shaum']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            </tr>
          <tr>
            <td bgcolor="#FFFFFF"><div align="center">Tilawah Al-Qur&rsquo;an</div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['tilawa']=='a' or $cni['tilawa']=='A') { $sj=$sj+4;   }
			  if($cni['tilawa']=='b' or $cni['tilawa']=='B') { $sj=$sj+3;   }
			  if($cni['tilawa']=='c' or $cni['tilawa']=='C') { $sj=$sj+2;  }
			  if($cni['tilawa']=='d' or $cni['tilawa']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['tilawa']=='a' or $cni['tilawa']=='A') { $sj=$sj+4;   }
			  if($cni['tilawa']=='b' or $cni['tilawa']=='B') { $sj=$sj+3;   }
			  if($cni['tilawa']=='c' or $cni['tilawa']=='C') { $sj=$sj+2;  }
			  if($cni['tilawa']=='d' or $cni['tilawa']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['tilawa']=='a' or $cni['tilawa']=='A') { $sj=$sj+4;   }
			  if($cni['tilawa']=='b' or $cni['tilawa']=='B') { $sj=$sj+3;   }
			  if($cni['tilawa']=='c' or $cni['tilawa']=='C') { $sj=$sj+2;  }
			  if($cni['tilawa']=='d' or $cni['tilawa']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIID' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['tilawa']=='a' or $cni['tilawa']=='A') { $sj=$sj+4;   }
			  if($cni['tilawa']=='b' or $cni['tilawa']=='B') { $sj=$sj+3;   }
			  if($cni['tilawa']=='c' or $cni['tilawa']=='C') { $sj=$sj+2;  }
			  if($cni['tilawa']=='d' or $cni['tilawa']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['tilawa']=='a' or $cni['tilawa']=='A') { $sj=$sj+4;   }
			  if($cni['tilawa']=='b' or $cni['tilawa']=='B') { $sj=$sj+3;   }
			  if($cni['tilawa']=='c' or $cni['tilawa']=='C') { $sj=$sj+2;  }
			  if($cni['tilawa']=='d' or $cni['tilawa']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['tilawa']=='a' or $cni['tilawa']=='A') { $sj=$sj+4;   }
			  if($cni['tilawa']=='b' or $cni['tilawa']=='B') { $sj=$sj+3;   }
			  if($cni['tilawa']=='c' or $cni['tilawa']=='C') { $sj=$sj+2;  }
			  if($cni['tilawa']=='d' or $cni['tilawa']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['tilawa']=='a' or $cni['tilawa']=='A') { $sj=$sj+4;   }
			  if($cni['tilawa']=='b' or $cni['tilawa']=='B') { $sj=$sj+3;   }
			  if($cni['tilawa']=='c' or $cni['tilawa']=='C') { $sj=$sj+2;  }
			  if($cni['tilawa']=='d' or $cni['tilawa']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['tilawa']=='a' or $cni['tilawa']=='A') { $sj=$sj+4;   }
			  if($cni['tilawa']=='b' or $cni['tilawa']=='B') { $sj=$sj+3;   }
			  if($cni['tilawa']=='c' or $cni['tilawa']=='C') { $sj=$sj+2;  }
			  if($cni['tilawa']=='d' or $cni['tilawa']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['tilawa']=='a' or $cni['tilawa']=='A') { $sj=$sj+4;   }
			  if($cni['tilawa']=='b' or $cni['tilawa']=='B') { $sj=$sj+3;   }
			  if($cni['tilawa']=='c' or $cni['tilawa']=='C') { $sj=$sj+2;  }
			  if($cni['tilawa']=='d' or $cni['tilawa']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['tilawa']=='a' or $cni['tilawa']=='A') { $sj=$sj+4;   }
			  if($cni['tilawa']=='b' or $cni['tilawa']=='B') { $sj=$sj+3;   }
			  if($cni['tilawa']=='c' or $cni['tilawa']=='C') { $sj=$sj+2;  }
			  if($cni['tilawa']=='d' or $cni['tilawa']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['tilawa']=='a' or $cni['tilawa']=='A') { $sj=$sj+4;   }
			  if($cni['tilawa']=='b' or $cni['tilawa']=='B') { $sj=$sj+3;   }
			  if($cni['tilawa']=='c' or $cni['tilawa']=='C') { $sj=$sj+2;  }
			  if($cni['tilawa']=='d' or $cni['tilawa']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['tilawa']=='a' or $cni['tilawa']=='A') { $sj=$sj+4;   }
			  if($cni['tilawa']=='b' or $cni['tilawa']=='B') { $sj=$sj+3;   }
			  if($cni['tilawa']=='c' or $cni['tilawa']=='C') { $sj=$sj+2;  }
			  if($cni['tilawa']=='d' or $cni['tilawa']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['tilawa']=='a' or $cni['tilawa']=='A') { $sj=$sj+4;   }
			  if($cni['tilawa']=='b' or $cni['tilawa']=='B') { $sj=$sj+3;   }
			  if($cni['tilawa']=='c' or $cni['tilawa']=='C') { $sj=$sj+2;  }
			  if($cni['tilawa']=='d' or $cni['tilawa']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['tilawa']=='a' or $cni['tilawa']=='A') { $sj=$sj+4;   }
			  if($cni['tilawa']=='b' or $cni['tilawa']=='B') { $sj=$sj+3;   }
			  if($cni['tilawa']=='c' or $cni['tilawa']=='C') { $sj=$sj+2;  }
			  if($cni['tilawa']=='d' or $cni['tilawa']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['tilawa']=='a' or $cni['tilawa']=='A') { $sj=$sj+4;   }
			  if($cni['tilawa']=='b' or $cni['tilawa']=='B') { $sj=$sj+3;   }
			  if($cni['tilawa']=='c' or $cni['tilawa']=='C') { $sj=$sj+2;  }
			  if($cni['tilawa']=='d' or $cni['tilawa']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['tilawa']=='a' or $cni['tilawa']=='A') { $sj=$sj+4;   }
			  if($cni['tilawa']=='b' or $cni['tilawa']=='B') { $sj=$sj+3;   }
			  if($cni['tilawa']=='c' or $cni['tilawa']=='C') { $sj=$sj+2;  }
			  if($cni['tilawa']=='d' or $cni['tilawa']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['tilawa']=='a' or $cni['tilawa']=='A') { $sj=$sj+4;   }
			  if($cni['tilawa']=='b' or $cni['tilawa']=='B') { $sj=$sj+3;   }
			  if($cni['tilawa']=='c' or $cni['tilawa']=='C') { $sj=$sj+2;  }
			  if($cni['tilawa']=='d' or $cni['tilawa']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            </tr>
          <tr>
            <td bgcolor="#FFFFFF"><div align="center">Memimpin wirid &amp; do&rsquo;a ba&rsquo;da sholat</div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['memmimpin_wirid']=='a' or $cni['memmimpin_wirid']=='A') { $sj=$sj+4;   }
			  if($cni['memmimpin_wirid']=='b' or $cni['memmimpin_wirid']=='B') { $sj=$sj+3;   }
			  if($cni['memmimpin_wirid']=='c' or $cni['memmimpin_wirid']=='C') { $sj=$sj+2;  }
			  if($cni['memmimpin_wirid']=='d' or $cni['memmimpin_wirid']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['memmimpin_wirid']=='a' or $cni['memmimpin_wirid']=='A') { $sj=$sj+4;   }
			  if($cni['memmimpin_wirid']=='b' or $cni['memmimpin_wirid']=='B') { $sj=$sj+3;   }
			  if($cni['memmimpin_wirid']=='c' or $cni['memmimpin_wirid']=='C') { $sj=$sj+2;  }
			  if($cni['memmimpin_wirid']=='d' or $cni['memmimpin_wirid']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['memmimpin_wirid']=='a' or $cni['memmimpin_wirid']=='A') { $sj=$sj+4;   }
			  if($cni['memmimpin_wirid']=='b' or $cni['memmimpin_wirid']=='B') { $sj=$sj+3;   }
			  if($cni['memmimpin_wirid']=='c' or $cni['memmimpin_wirid']=='C') { $sj=$sj+2;  }
			  if($cni['memmimpin_wirid']=='d' or $cni['memmimpin_wirid']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIID' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['memmimpin_wirid']=='a' or $cni['memmimpin_wirid']=='A') { $sj=$sj+4;   }
			  if($cni['memmimpin_wirid']=='b' or $cni['memmimpin_wirid']=='B') { $sj=$sj+3;   }
			  if($cni['memmimpin_wirid']=='c' or $cni['memmimpin_wirid']=='C') { $sj=$sj+2;  }
			  if($cni['memmimpin_wirid']=='d' or $cni['memmimpin_wirid']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['memmimpin_wirid']=='a' or $cni['memmimpin_wirid']=='A') { $sj=$sj+4;   }
			  if($cni['memmimpin_wirid']=='b' or $cni['memmimpin_wirid']=='B') { $sj=$sj+3;   }
			  if($cni['memmimpin_wirid']=='c' or $cni['memmimpin_wirid']=='C') { $sj=$sj+2;  }
			  if($cni['memmimpin_wirid']=='d' or $cni['memmimpin_wirid']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['memmimpin_wirid']=='a' or $cni['memmimpin_wirid']=='A') { $sj=$sj+4;   }
			  if($cni['memmimpin_wirid']=='b' or $cni['memmimpin_wirid']=='B') { $sj=$sj+3;   }
			  if($cni['memmimpin_wirid']=='c' or $cni['memmimpin_wirid']=='C') { $sj=$sj+2;  }
			  if($cni['memmimpin_wirid']=='d' or $cni['memmimpin_wirid']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['memmimpin_wirid']=='a' or $cni['memmimpin_wirid']=='A') { $sj=$sj+4;   }
			  if($cni['memmimpin_wirid']=='b' or $cni['memmimpin_wirid']=='B') { $sj=$sj+3;   }
			  if($cni['memmimpin_wirid']=='c' or $cni['memmimpin_wirid']=='C') { $sj=$sj+2;  }
			  if($cni['memmimpin_wirid']=='d' or $cni['memmimpin_wirid']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['memmimpin_wirid']=='a' or $cni['memmimpin_wirid']=='A') { $sj=$sj+4;   }
			  if($cni['memmimpin_wirid']=='b' or $cni['memmimpin_wirid']=='B') { $sj=$sj+3;   }
			  if($cni['memmimpin_wirid']=='c' or $cni['memmimpin_wirid']=='C') { $sj=$sj+2;  }
			  if($cni['memmimpin_wirid']=='d' or $cni['memmimpin_wirid']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['memmimpin_wirid']=='a' or $cni['memmimpin_wirid']=='A') { $sj=$sj+4;   }
			  if($cni['memmimpin_wirid']=='b' or $cni['memmimpin_wirid']=='B') { $sj=$sj+3;   }
			  if($cni['memmimpin_wirid']=='c' or $cni['memmimpin_wirid']=='C') { $sj=$sj+2;  }
			  if($cni['memmimpin_wirid']=='d' or $cni['memmimpin_wirid']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['memmimpin_wirid']=='a' or $cni['memmimpin_wirid']=='A') { $sj=$sj+4;   }
			  if($cni['memmimpin_wirid']=='b' or $cni['memmimpin_wirid']=='B') { $sj=$sj+3;   }
			  if($cni['memmimpin_wirid']=='c' or $cni['memmimpin_wirid']=='C') { $sj=$sj+2;  }
			  if($cni['memmimpin_wirid']=='d' or $cni['memmimpin_wirid']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['memmimpin_wirid']=='a' or $cni['memmimpin_wirid']=='A') { $sj=$sj+4;   }
			  if($cni['memmimpin_wirid']=='b' or $cni['memmimpin_wirid']=='B') { $sj=$sj+3;   }
			  if($cni['memmimpin_wirid']=='c' or $cni['memmimpin_wirid']=='C') { $sj=$sj+2;  }
			  if($cni['memmimpin_wirid']=='d' or $cni['memmimpin_wirid']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['memmimpin_wirid']=='a' or $cni['memmimpin_wirid']=='A') { $sj=$sj+4;   }
			  if($cni['memmimpin_wirid']=='b' or $cni['memmimpin_wirid']=='B') { $sj=$sj+3;   }
			  if($cni['memmimpin_wirid']=='c' or $cni['memmimpin_wirid']=='C') { $sj=$sj+2;  }
			  if($cni['memmimpin_wirid']=='d' or $cni['memmimpin_wirid']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['memmimpin_wirid']=='a' or $cni['memmimpin_wirid']=='A') { $sj=$sj+4;   }
			  if($cni['memmimpin_wirid']=='b' or $cni['memmimpin_wirid']=='B') { $sj=$sj+3;   }
			  if($cni['memmimpin_wirid']=='c' or $cni['memmimpin_wirid']=='C') { $sj=$sj+2;  }
			  if($cni['memmimpin_wirid']=='d' or $cni['memmimpin_wirid']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['memmimpin_wirid']=='a' or $cni['memmimpin_wirid']=='A') { $sj=$sj+4;   }
			  if($cni['memmimpin_wirid']=='b' or $cni['memmimpin_wirid']=='B') { $sj=$sj+3;   }
			  if($cni['memmimpin_wirid']=='c' or $cni['memmimpin_wirid']=='C') { $sj=$sj+2;  }
			  if($cni['memmimpin_wirid']=='d' or $cni['memmimpin_wirid']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['memmimpin_wirid']=='a' or $cni['memmimpin_wirid']=='A') { $sj=$sj+4;   }
			  if($cni['memmimpin_wirid']=='b' or $cni['memmimpin_wirid']=='B') { $sj=$sj+3;   }
			  if($cni['memmimpin_wirid']=='c' or $cni['memmimpin_wirid']=='C') { $sj=$sj+2;  }
			  if($cni['memmimpin_wirid']=='d' or $cni['memmimpin_wirid']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['memmimpin_wirid']=='a' or $cni['memmimpin_wirid']=='A') { $sj=$sj+4;   }
			  if($cni['memmimpin_wirid']=='b' or $cni['memmimpin_wirid']=='B') { $sj=$sj+3;   }
			  if($cni['memmimpin_wirid']=='c' or $cni['memmimpin_wirid']=='C') { $sj=$sj+2;  }
			  if($cni['memmimpin_wirid']=='d' or $cni['memmimpin_wirid']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['memmimpin_wirid']=='a' or $cni['memmimpin_wirid']=='A') { $sj=$sj+4;   }
			  if($cni['memmimpin_wirid']=='b' or $cni['memmimpin_wirid']=='B') { $sj=$sj+3;   }
			  if($cni['memmimpin_wirid']=='c' or $cni['memmimpin_wirid']=='C') { $sj=$sj+2;  }
			  if($cni['memmimpin_wirid']=='d' or $cni['memmimpin_wirid']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            </tr>
          <tr>
            <td bgcolor="#FFFFFF"><div align="center">Mengumandangkan adzan</div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['adzan']=='a' or $cni['adzan']=='A') { $sj=$sj+4;   }
			  if($cni['adzan']=='b' or $cni['adzan']=='B') { $sj=$sj+3;   }
			  if($cni['adzan']=='c' or $cni['adzan']=='C') { $sj=$sj+2;  }
			  if($cni['adzan']=='d' or $cni['adzan']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['adzan']=='a' or $cni['adzan']=='A') { $sj=$sj+4;   }
			  if($cni['adzan']=='b' or $cni['adzan']=='B') { $sj=$sj+3;   }
			  if($cni['adzan']=='c' or $cni['adzan']=='C') { $sj=$sj+2;  }
			  if($cni['adzan']=='d' or $cni['adzan']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['adzan']=='a' or $cni['adzan']=='A') { $sj=$sj+4;   }
			  if($cni['adzan']=='b' or $cni['adzan']=='B') { $sj=$sj+3;   }
			  if($cni['adzan']=='c' or $cni['adzan']=='C') { $sj=$sj+2;  }
			  if($cni['adzan']=='d' or $cni['adzan']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIID' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['adzan']=='a' or $cni['adzan']=='A') { $sj=$sj+4;   }
			  if($cni['adzan']=='b' or $cni['adzan']=='B') { $sj=$sj+3;   }
			  if($cni['adzan']=='c' or $cni['adzan']=='C') { $sj=$sj+2;  }
			  if($cni['adzan']=='d' or $cni['adzan']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['adzan']=='a' or $cni['adzan']=='A') { $sj=$sj+4;   }
			  if($cni['adzan']=='b' or $cni['adzan']=='B') { $sj=$sj+3;   }
			  if($cni['adzan']=='c' or $cni['adzan']=='C') { $sj=$sj+2;  }
			  if($cni['adzan']=='d' or $cni['adzan']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['adzan']=='a' or $cni['adzan']=='A') { $sj=$sj+4;   }
			  if($cni['adzan']=='b' or $cni['adzan']=='B') { $sj=$sj+3;   }
			  if($cni['adzan']=='c' or $cni['adzan']=='C') { $sj=$sj+2;  }
			  if($cni['adzan']=='d' or $cni['adzan']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['adzan']=='a' or $cni['adzan']=='A') { $sj=$sj+4;   }
			  if($cni['adzan']=='b' or $cni['adzan']=='B') { $sj=$sj+3;   }
			  if($cni['adzan']=='c' or $cni['adzan']=='C') { $sj=$sj+2;  }
			  if($cni['adzan']=='d' or $cni['adzan']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['adzan']=='a' or $cni['adzan']=='A') { $sj=$sj+4;   }
			  if($cni['adzan']=='b' or $cni['adzan']=='B') { $sj=$sj+3;   }
			  if($cni['adzan']=='c' or $cni['adzan']=='C') { $sj=$sj+2;  }
			  if($cni['adzan']=='d' or $cni['adzan']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['adzan']=='a' or $cni['adzan']=='A') { $sj=$sj+4;   }
			  if($cni['adzan']=='b' or $cni['adzan']=='B') { $sj=$sj+3;   }
			  if($cni['adzan']=='c' or $cni['adzan']=='C') { $sj=$sj+2;  }
			  if($cni['adzan']=='d' or $cni['adzan']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['adzan']=='a' or $cni['adzan']=='A') { $sj=$sj+4;   }
			  if($cni['adzan']=='b' or $cni['adzan']=='B') { $sj=$sj+3;   }
			  if($cni['adzan']=='c' or $cni['adzan']=='C') { $sj=$sj+2;  }
			  if($cni['adzan']=='d' or $cni['adzan']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['adzan']=='a' or $cni['adzan']=='A') { $sj=$sj+4;   }
			  if($cni['adzan']=='b' or $cni['adzan']=='B') { $sj=$sj+3;   }
			  if($cni['adzan']=='c' or $cni['adzan']=='C') { $sj=$sj+2;  }
			  if($cni['adzan']=='d' or $cni['adzan']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['adzan']=='a' or $cni['adzan']=='A') { $sj=$sj+4;   }
			  if($cni['adzan']=='b' or $cni['adzan']=='B') { $sj=$sj+3;   }
			  if($cni['adzan']=='c' or $cni['adzan']=='C') { $sj=$sj+2;  }
			  if($cni['adzan']=='d' or $cni['adzan']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['adzan']=='a' or $cni['adzan']=='A') { $sj=$sj+4;   }
			  if($cni['adzan']=='b' or $cni['adzan']=='B') { $sj=$sj+3;   }
			  if($cni['adzan']=='c' or $cni['adzan']=='C') { $sj=$sj+2;  }
			  if($cni['adzan']=='d' or $cni['adzan']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['adzan']=='a' or $cni['adzan']=='A') { $sj=$sj+4;   }
			  if($cni['adzan']=='b' or $cni['adzan']=='B') { $sj=$sj+3;   }
			  if($cni['adzan']=='c' or $cni['adzan']=='C') { $sj=$sj+2;  }
			  if($cni['adzan']=='d' or $cni['adzan']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['adzan']=='a' or $cni['adzan']=='A') { $sj=$sj+4;   }
			  if($cni['adzan']=='b' or $cni['adzan']=='B') { $sj=$sj+3;   }
			  if($cni['adzan']=='c' or $cni['adzan']=='C') { $sj=$sj+2;  }
			  if($cni['adzan']=='d' or $cni['adzan']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['adzan']=='a' or $cni['adzan']=='A') { $sj=$sj+4;   }
			  if($cni['adzan']=='b' or $cni['adzan']=='B') { $sj=$sj+3;   }
			  if($cni['adzan']=='c' or $cni['adzan']=='C') { $sj=$sj+2;  }
			  if($cni['adzan']=='d' or $cni['adzan']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['adzan']=='a' or $cni['adzan']=='A') { $sj=$sj+4;   }
			  if($cni['adzan']=='b' or $cni['adzan']=='B') { $sj=$sj+3;   }
			  if($cni['adzan']=='c' or $cni['adzan']=='C') { $sj=$sj+2;  }
			  if($cni['adzan']=='d' or $cni['adzan']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            </tr>
        </table></td>
        <td valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF">&nbsp;</td>
        <td bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><table width="98%" border="1" align="right" cellpadding="2" cellspacing="0" bordercolor="#336600">
          <tr>
            <td bgcolor="#336600">&nbsp;</td>
            <td colspan="16" bgcolor="#336600"><div align="center">
                <div align="center" class="style20">Kelas</div>
            </div></td>
          </tr>
          <tr>
            <td width="33%" bgcolor="#336600"><div align="center" class="style20">PEMBINAAN ADAB & AKHLAK </div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">VIIA</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">VIIB</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">VIIC</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">VIID</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">VIIIA</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">VIIIB</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">VIIIC</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">IXA</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">IXB</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">IXC</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">XA</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">XB</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">XIA</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">XIB</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">XIIA</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">XIIB</div></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><div align="center">Adab salam</div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['salam']=='a' or $cni['salam']=='A') { $sj=$sj+4;   }
			  if($cni['salam']=='b' or $cni['salam']=='B') { $sj=$sj+3;   }
			  if($cni['salam']=='c' or $cni['salam']=='C') { $sj=$sj+2;  }
			  if($cni['salam']=='d' or $cni['salam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['salam']=='a' or $cni['salam']=='A') { $sj=$sj+4;   }
			  if($cni['salam']=='b' or $cni['salam']=='B') { $sj=$sj+3;   }
			  if($cni['salam']=='c' or $cni['salam']=='C') { $sj=$sj+2;  }
			  if($cni['salam']=='d' or $cni['salam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['salam']=='a' or $cni['salam']=='A') { $sj=$sj+4;   }
			  if($cni['salam']=='b' or $cni['salam']=='B') { $sj=$sj+3;   }
			  if($cni['salam']=='c' or $cni['salam']=='C') { $sj=$sj+2;  }
			  if($cni['salam']=='d' or $cni['salam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIID' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['salam']=='a' or $cni['salam']=='A') { $sj=$sj+4;   }
			  if($cni['salam']=='b' or $cni['salam']=='B') { $sj=$sj+3;   }
			  if($cni['salam']=='c' or $cni['salam']=='C') { $sj=$sj+2;  }
			  if($cni['salam']=='d' or $cni['salam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['salam']=='a' or $cni['salam']=='A') { $sj=$sj+4;   }
			  if($cni['salam']=='b' or $cni['salam']=='B') { $sj=$sj+3;   }
			  if($cni['salam']=='c' or $cni['salam']=='C') { $sj=$sj+2;  }
			  if($cni['salam']=='d' or $cni['salam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['salam']=='a' or $cni['salam']=='A') { $sj=$sj+4;   }
			  if($cni['salam']=='b' or $cni['salam']=='B') { $sj=$sj+3;   }
			  if($cni['salam']=='c' or $cni['salam']=='C') { $sj=$sj+2;  }
			  if($cni['salam']=='d' or $cni['salam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['salam']=='a' or $cni['salam']=='A') { $sj=$sj+4;   }
			  if($cni['salam']=='b' or $cni['salam']=='B') { $sj=$sj+3;   }
			  if($cni['salam']=='c' or $cni['salam']=='C') { $sj=$sj+2;  }
			  if($cni['salam']=='d' or $cni['salam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['salam']=='a' or $cni['salam']=='A') { $sj=$sj+4;   }
			  if($cni['salam']=='b' or $cni['salam']=='B') { $sj=$sj+3;   }
			  if($cni['salam']=='c' or $cni['salam']=='C') { $sj=$sj+2;  }
			  if($cni['salam']=='d' or $cni['salam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['salam']=='a' or $cni['salam']=='A') { $sj=$sj+4;   }
			  if($cni['salam']=='b' or $cni['salam']=='B') { $sj=$sj+3;   }
			  if($cni['salam']=='c' or $cni['salam']=='C') { $sj=$sj+2;  }
			  if($cni['salam']=='d' or $cni['salam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['salam']=='a' or $cni['salam']=='A') { $sj=$sj+4;   }
			  if($cni['salam']=='b' or $cni['salam']=='B') { $sj=$sj+3;   }
			  if($cni['salam']=='c' or $cni['salam']=='C') { $sj=$sj+2;  }
			  if($cni['salam']=='d' or $cni['salam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['salam']=='a' or $cni['salam']=='A') { $sj=$sj+4;   }
			  if($cni['salam']=='b' or $cni['salam']=='B') { $sj=$sj+3;   }
			  if($cni['salam']=='c' or $cni['salam']=='C') { $sj=$sj+2;  }
			  if($cni['salam']=='d' or $cni['salam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['salam']=='a' or $cni['salam']=='A') { $sj=$sj+4;   }
			  if($cni['salam']=='b' or $cni['salam']=='B') { $sj=$sj+3;   }
			  if($cni['salam']=='c' or $cni['salam']=='C') { $sj=$sj+2;  }
			  if($cni['salam']=='d' or $cni['salam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['salam']=='a' or $cni['salam']=='A') { $sj=$sj+4;   }
			  if($cni['salam']=='b' or $cni['salam']=='B') { $sj=$sj+3;   }
			  if($cni['salam']=='c' or $cni['salam']=='C') { $sj=$sj+2;  }
			  if($cni['salam']=='d' or $cni['salam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['salam']=='a' or $cni['salam']=='A') { $sj=$sj+4;   }
			  if($cni['salam']=='b' or $cni['salam']=='B') { $sj=$sj+3;   }
			  if($cni['salam']=='c' or $cni['salam']=='C') { $sj=$sj+2;  }
			  if($cni['salam']=='d' or $cni['salam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['salam']=='a' or $cni['salam']=='A') { $sj=$sj+4;   }
			  if($cni['salam']=='b' or $cni['salam']=='B') { $sj=$sj+3;   }
			  if($cni['salam']=='c' or $cni['salam']=='C') { $sj=$sj+2;  }
			  if($cni['salam']=='d' or $cni['salam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['salam']=='a' or $cni['salam']=='A') { $sj=$sj+4;   }
			  if($cni['salam']=='b' or $cni['salam']=='B') { $sj=$sj+3;   }
			  if($cni['salam']=='c' or $cni['salam']=='C') { $sj=$sj+2;  }
			  if($cni['salam']=='d' or $cni['salam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><div align="center">Adab berbicara</div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bicara']=='a' or $cni['bicara']=='A') { $sj=$sj+4;   }
			  if($cni['bicara']=='b' or $cni['bicara']=='B') { $sj=$sj+3;   }
			  if($cni['bicara']=='c' or $cni['bicara']=='C') { $sj=$sj+2;  }
			  if($cni['bicara']=='d' or $cni['bicara']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bicara']=='a' or $cni['bicara']=='A') { $sj=$sj+4;   }
			  if($cni['bicara']=='b' or $cni['bicara']=='B') { $sj=$sj+3;   }
			  if($cni['bicara']=='c' or $cni['bicara']=='C') { $sj=$sj+2;  }
			  if($cni['bicara']=='d' or $cni['bicara']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bicara']=='a' or $cni['bicara']=='A') { $sj=$sj+4;   }
			  if($cni['bicara']=='b' or $cni['bicara']=='B') { $sj=$sj+3;   }
			  if($cni['bicara']=='c' or $cni['bicara']=='C') { $sj=$sj+2;  }
			  if($cni['bicara']=='d' or $cni['bicara']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIID' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bicara']=='a' or $cni['bicara']=='A') { $sj=$sj+4;   }
			  if($cni['bicara']=='b' or $cni['bicara']=='B') { $sj=$sj+3;   }
			  if($cni['bicara']=='c' or $cni['bicara']=='C') { $sj=$sj+2;  }
			  if($cni['bicara']=='d' or $cni['bicara']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bicara']=='a' or $cni['bicara']=='A') { $sj=$sj+4;   }
			  if($cni['bicara']=='b' or $cni['bicara']=='B') { $sj=$sj+3;   }
			  if($cni['bicara']=='c' or $cni['bicara']=='C') { $sj=$sj+2;  }
			  if($cni['bicara']=='d' or $cni['bicara']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bicara']=='a' or $cni['bicara']=='A') { $sj=$sj+4;   }
			  if($cni['bicara']=='b' or $cni['bicara']=='B') { $sj=$sj+3;   }
			  if($cni['bicara']=='c' or $cni['bicara']=='C') { $sj=$sj+2;  }
			  if($cni['bicara']=='d' or $cni['bicara']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bicara']=='a' or $cni['bicara']=='A') { $sj=$sj+4;   }
			  if($cni['bicara']=='b' or $cni['bicara']=='B') { $sj=$sj+3;   }
			  if($cni['bicara']=='c' or $cni['bicara']=='C') { $sj=$sj+2;  }
			  if($cni['bicara']=='d' or $cni['bicara']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bicara']=='a' or $cni['bicara']=='A') { $sj=$sj+4;   }
			  if($cni['bicara']=='b' or $cni['bicara']=='B') { $sj=$sj+3;   }
			  if($cni['bicara']=='c' or $cni['bicara']=='C') { $sj=$sj+2;  }
			  if($cni['bicara']=='d' or $cni['bicara']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bicara']=='a' or $cni['bicara']=='A') { $sj=$sj+4;   }
			  if($cni['bicara']=='b' or $cni['bicara']=='B') { $sj=$sj+3;   }
			  if($cni['bicara']=='c' or $cni['bicara']=='C') { $sj=$sj+2;  }
			  if($cni['bicara']=='d' or $cni['bicara']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bicara']=='a' or $cni['bicara']=='A') { $sj=$sj+4;   }
			  if($cni['bicara']=='b' or $cni['bicara']=='B') { $sj=$sj+3;   }
			  if($cni['bicara']=='c' or $cni['bicara']=='C') { $sj=$sj+2;  }
			  if($cni['bicara']=='d' or $cni['bicara']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bicara']=='a' or $cni['bicara']=='A') { $sj=$sj+4;   }
			  if($cni['bicara']=='b' or $cni['bicara']=='B') { $sj=$sj+3;   }
			  if($cni['bicara']=='c' or $cni['bicara']=='C') { $sj=$sj+2;  }
			  if($cni['bicara']=='d' or $cni['bicara']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bicara']=='a' or $cni['bicara']=='A') { $sj=$sj+4;   }
			  if($cni['bicara']=='b' or $cni['bicara']=='B') { $sj=$sj+3;   }
			  if($cni['bicara']=='c' or $cni['bicara']=='C') { $sj=$sj+2;  }
			  if($cni['bicara']=='d' or $cni['bicara']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bicara']=='a' or $cni['bicara']=='A') { $sj=$sj+4;   }
			  if($cni['bicara']=='b' or $cni['bicara']=='B') { $sj=$sj+3;   }
			  if($cni['bicara']=='c' or $cni['bicara']=='C') { $sj=$sj+2;  }
			  if($cni['bicara']=='d' or $cni['bicara']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bicara']=='a' or $cni['bicara']=='A') { $sj=$sj+4;   }
			  if($cni['bicara']=='b' or $cni['bicara']=='B') { $sj=$sj+3;   }
			  if($cni['bicara']=='c' or $cni['bicara']=='C') { $sj=$sj+2;  }
			  if($cni['bicara']=='d' or $cni['bicara']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bicara']=='a' or $cni['bicara']=='A') { $sj=$sj+4;   }
			  if($cni['bicara']=='b' or $cni['bicara']=='B') { $sj=$sj+3;   }
			  if($cni['bicara']=='c' or $cni['bicara']=='C') { $sj=$sj+2;  }
			  if($cni['bicara']=='d' or $cni['bicara']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bicara']=='a' or $cni['bicara']=='A') { $sj=$sj+4;   }
			  if($cni['bicara']=='b' or $cni['bicara']=='B') { $sj=$sj+3;   }
			  if($cni['bicara']=='c' or $cni['bicara']=='C') { $sj=$sj+2;  }
			  if($cni['bicara']=='d' or $cni['bicara']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><div align="center">Adab berpakaian</div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berpakaian']=='a' or $cni['berpakaian']=='A') { $sj=$sj+4;   }
			  if($cni['berpakaian']=='b' or $cni['berpakaian']=='B') { $sj=$sj+3;   }
			  if($cni['berpakaian']=='c' or $cni['berpakaian']=='C') { $sj=$sj+2;  }
			  if($cni['berpakaian']=='d' or $cni['berpakaian']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berpakaian']=='a' or $cni['berpakaian']=='A') { $sj=$sj+4;   }
			  if($cni['berpakaian']=='b' or $cni['berpakaian']=='B') { $sj=$sj+3;   }
			  if($cni['berpakaian']=='c' or $cni['berpakaian']=='C') { $sj=$sj+2;  }
			  if($cni['berpakaian']=='d' or $cni['berpakaian']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berpakaian']=='a' or $cni['berpakaian']=='A') { $sj=$sj+4;   }
			  if($cni['berpakaian']=='b' or $cni['berpakaian']=='B') { $sj=$sj+3;   }
			  if($cni['berpakaian']=='c' or $cni['berpakaian']=='C') { $sj=$sj+2;  }
			  if($cni['berpakaian']=='d' or $cni['berpakaian']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIID' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berpakaian']=='a' or $cni['berpakaian']=='A') { $sj=$sj+4;   }
			  if($cni['berpakaian']=='b' or $cni['berpakaian']=='B') { $sj=$sj+3;   }
			  if($cni['berpakaian']=='c' or $cni['berpakaian']=='C') { $sj=$sj+2;  }
			  if($cni['berpakaian']=='d' or $cni['berpakaian']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berpakaian']=='a' or $cni['berpakaian']=='A') { $sj=$sj+4;   }
			  if($cni['berpakaian']=='b' or $cni['berpakaian']=='B') { $sj=$sj+3;   }
			  if($cni['berpakaian']=='c' or $cni['berpakaian']=='C') { $sj=$sj+2;  }
			  if($cni['berpakaian']=='d' or $cni['berpakaian']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berpakaian']=='a' or $cni['berpakaian']=='A') { $sj=$sj+4;   }
			  if($cni['berpakaian']=='b' or $cni['berpakaian']=='B') { $sj=$sj+3;   }
			  if($cni['berpakaian']=='c' or $cni['berpakaian']=='C') { $sj=$sj+2;  }
			  if($cni['berpakaian']=='d' or $cni['berpakaian']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berpakaian']=='a' or $cni['berpakaian']=='A') { $sj=$sj+4;   }
			  if($cni['berpakaian']=='b' or $cni['berpakaian']=='B') { $sj=$sj+3;   }
			  if($cni['berpakaian']=='c' or $cni['berpakaian']=='C') { $sj=$sj+2;  }
			  if($cni['berpakaian']=='d' or $cni['berpakaian']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berpakaian']=='a' or $cni['berpakaian']=='A') { $sj=$sj+4;   }
			  if($cni['berpakaian']=='b' or $cni['berpakaian']=='B') { $sj=$sj+3;   }
			  if($cni['berpakaian']=='c' or $cni['berpakaian']=='C') { $sj=$sj+2;  }
			  if($cni['berpakaian']=='d' or $cni['berpakaian']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berpakaian']=='a' or $cni['berpakaian']=='A') { $sj=$sj+4;   }
			  if($cni['berpakaian']=='b' or $cni['berpakaian']=='B') { $sj=$sj+3;   }
			  if($cni['berpakaian']=='c' or $cni['berpakaian']=='C') { $sj=$sj+2;  }
			  if($cni['berpakaian']=='d' or $cni['berpakaian']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berpakaian']=='a' or $cni['berpakaian']=='A') { $sj=$sj+4;   }
			  if($cni['berpakaian']=='b' or $cni['berpakaian']=='B') { $sj=$sj+3;   }
			  if($cni['berpakaian']=='c' or $cni['berpakaian']=='C') { $sj=$sj+2;  }
			  if($cni['berpakaian']=='d' or $cni['berpakaian']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berpakaian']=='a' or $cni['berpakaian']=='A') { $sj=$sj+4;   }
			  if($cni['berpakaian']=='b' or $cni['berpakaian']=='B') { $sj=$sj+3;   }
			  if($cni['berpakaian']=='c' or $cni['berpakaian']=='C') { $sj=$sj+2;  }
			  if($cni['berpakaian']=='d' or $cni['berpakaian']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berpakaian']=='a' or $cni['berpakaian']=='A') { $sj=$sj+4;   }
			  if($cni['berpakaian']=='b' or $cni['berpakaian']=='B') { $sj=$sj+3;   }
			  if($cni['berpakaian']=='c' or $cni['berpakaian']=='C') { $sj=$sj+2;  }
			  if($cni['berpakaian']=='d' or $cni['berpakaian']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berpakaian']=='a' or $cni['berpakaian']=='A') { $sj=$sj+4;   }
			  if($cni['berpakaian']=='b' or $cni['berpakaian']=='B') { $sj=$sj+3;   }
			  if($cni['berpakaian']=='c' or $cni['berpakaian']=='C') { $sj=$sj+2;  }
			  if($cni['berpakaian']=='d' or $cni['berpakaian']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berpakaian']=='a' or $cni['berpakaian']=='A') { $sj=$sj+4;   }
			  if($cni['berpakaian']=='b' or $cni['berpakaian']=='B') { $sj=$sj+3;   }
			  if($cni['berpakaian']=='c' or $cni['berpakaian']=='C') { $sj=$sj+2;  }
			  if($cni['berpakaian']=='d' or $cni['berpakaian']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berpakaian']=='a' or $cni['berpakaian']=='A') { $sj=$sj+4;   }
			  if($cni['berpakaian']=='b' or $cni['berpakaian']=='B') { $sj=$sj+3;   }
			  if($cni['berpakaian']=='c' or $cni['berpakaian']=='C') { $sj=$sj+2;  }
			  if($cni['berpakaian']=='d' or $cni['berpakaian']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berpakaian']=='a' or $cni['berpakaian']=='A') { $sj=$sj+4;   }
			  if($cni['berpakaian']=='b' or $cni['berpakaian']=='B') { $sj=$sj+3;   }
			  if($cni['berpakaian']=='c' or $cni['berpakaian']=='C') { $sj=$sj+2;  }
			  if($cni['berpakaian']=='d' or $cni['berpakaian']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><div align="center">Adab makan-minum</div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['makan_minum']=='a' or $cni['makan_minum']=='A') { $sj=$sj+4;   }
			  if($cni['makan_minum']=='b' or $cni['makan_minum']=='B') { $sj=$sj+3;   }
			  if($cni['makan_minum']=='c' or $cni['makan_minum']=='C') { $sj=$sj+2;  }
			  if($cni['makan_minum']=='d' or $cni['makan_minum']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['makan_minum']=='a' or $cni['makan_minum']=='A') { $sj=$sj+4;   }
			  if($cni['makan_minum']=='b' or $cni['makan_minum']=='B') { $sj=$sj+3;   }
			  if($cni['makan_minum']=='c' or $cni['makan_minum']=='C') { $sj=$sj+2;  }
			  if($cni['makan_minum']=='d' or $cni['makan_minum']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['makan_minum']=='a' or $cni['makan_minum']=='A') { $sj=$sj+4;   }
			  if($cni['makan_minum']=='b' or $cni['makan_minum']=='B') { $sj=$sj+3;   }
			  if($cni['makan_minum']=='c' or $cni['makan_minum']=='C') { $sj=$sj+2;  }
			  if($cni['makan_minum']=='d' or $cni['makan_minum']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIID' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['makan_minum']=='a' or $cni['makan_minum']=='A') { $sj=$sj+4;   }
			  if($cni['makan_minum']=='b' or $cni['makan_minum']=='B') { $sj=$sj+3;   }
			  if($cni['makan_minum']=='c' or $cni['makan_minum']=='C') { $sj=$sj+2;  }
			  if($cni['makan_minum']=='d' or $cni['makan_minum']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['makan_minum']=='a' or $cni['makan_minum']=='A') { $sj=$sj+4;   }
			  if($cni['makan_minum']=='b' or $cni['makan_minum']=='B') { $sj=$sj+3;   }
			  if($cni['makan_minum']=='c' or $cni['makan_minum']=='C') { $sj=$sj+2;  }
			  if($cni['makan_minum']=='d' or $cni['makan_minum']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['makan_minum']=='a' or $cni['makan_minum']=='A') { $sj=$sj+4;   }
			  if($cni['makan_minum']=='b' or $cni['makan_minum']=='B') { $sj=$sj+3;   }
			  if($cni['makan_minum']=='c' or $cni['makan_minum']=='C') { $sj=$sj+2;  }
			  if($cni['makan_minum']=='d' or $cni['makan_minum']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['makan_minum']=='a' or $cni['makan_minum']=='A') { $sj=$sj+4;   }
			  if($cni['makan_minum']=='b' or $cni['makan_minum']=='B') { $sj=$sj+3;   }
			  if($cni['makan_minum']=='c' or $cni['makan_minum']=='C') { $sj=$sj+2;  }
			  if($cni['makan_minum']=='d' or $cni['makan_minum']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['makan_minum']=='a' or $cni['makan_minum']=='A') { $sj=$sj+4;   }
			  if($cni['makan_minum']=='b' or $cni['makan_minum']=='B') { $sj=$sj+3;   }
			  if($cni['makan_minum']=='c' or $cni['makan_minum']=='C') { $sj=$sj+2;  }
			  if($cni['makan_minum']=='d' or $cni['makan_minum']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
</div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['makan_minum']=='a' or $cni['makan_minum']=='A') { $sj=$sj+4;   }
			  if($cni['makan_minum']=='b' or $cni['makan_minum']=='B') { $sj=$sj+3;   }
			  if($cni['makan_minum']=='c' or $cni['makan_minum']=='C') { $sj=$sj+2;  }
			  if($cni['makan_minum']=='d' or $cni['makan_minum']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['makan_minum']=='a' or $cni['makan_minum']=='A') { $sj=$sj+4;   }
			  if($cni['makan_minum']=='b' or $cni['makan_minum']=='B') { $sj=$sj+3;   }
			  if($cni['makan_minum']=='c' or $cni['makan_minum']=='C') { $sj=$sj+2;  }
			  if($cni['makan_minum']=='d' or $cni['makan_minum']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['makan_minum']=='a' or $cni['makan_minum']=='A') { $sj=$sj+4;   }
			  if($cni['makan_minum']=='b' or $cni['makan_minum']=='B') { $sj=$sj+3;   }
			  if($cni['makan_minum']=='c' or $cni['makan_minum']=='C') { $sj=$sj+2;  }
			  if($cni['makan_minum']=='d' or $cni['makan_minum']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['makan_minum']=='a' or $cni['makan_minum']=='A') { $sj=$sj+4;   }
			  if($cni['makan_minum']=='b' or $cni['makan_minum']=='B') { $sj=$sj+3;   }
			  if($cni['makan_minum']=='c' or $cni['makan_minum']=='C') { $sj=$sj+2;  }
			  if($cni['makan_minum']=='d' or $cni['makan_minum']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['makan_minum']=='a' or $cni['makan_minum']=='A') { $sj=$sj+4;   }
			  if($cni['makan_minum']=='b' or $cni['makan_minum']=='B') { $sj=$sj+3;   }
			  if($cni['makan_minum']=='c' or $cni['makan_minum']=='C') { $sj=$sj+2;  }
			  if($cni['makan_minum']=='d' or $cni['makan_minum']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['makan_minum']=='a' or $cni['makan_minum']=='A') { $sj=$sj+4;   }
			  if($cni['makan_minum']=='b' or $cni['makan_minum']=='B') { $sj=$sj+3;   }
			  if($cni['makan_minum']=='c' or $cni['makan_minum']=='C') { $sj=$sj+2;  }
			  if($cni['makan_minum']=='d' or $cni['makan_minum']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['makan_minum']=='a' or $cni['makan_minum']=='A') { $sj=$sj+4;   }
			  if($cni['makan_minum']=='b' or $cni['makan_minum']=='B') { $sj=$sj+3;   }
			  if($cni['makan_minum']=='c' or $cni['makan_minum']=='C') { $sj=$sj+2;  }
			  if($cni['makan_minum']=='d' or $cni['makan_minum']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['makan_minum']=='a' or $cni['makan_minum']=='A') { $sj=$sj+4;   }
			  if($cni['makan_minum']=='b' or $cni['makan_minum']=='B') { $sj=$sj+3;   }
			  if($cni['makan_minum']=='c' or $cni['makan_minum']=='C') { $sj=$sj+2;  }
			  if($cni['makan_minum']=='d' or $cni['makan_minum']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><div align="center">Adab belajar</div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar']=='a' or $cni['belajar']=='A') { $sj=$sj+4;   }
			  if($cni['belajar']=='b' or $cni['belajar']=='B') { $sj=$sj+3;   }
			  if($cni['belajar']=='c' or $cni['belajar']=='C') { $sj=$sj+2;  }
			  if($cni['belajar']=='d' or $cni['belajar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar']=='a' or $cni['belajar']=='A') { $sj=$sj+4;   }
			  if($cni['belajar']=='b' or $cni['belajar']=='B') { $sj=$sj+3;   }
			  if($cni['belajar']=='c' or $cni['belajar']=='C') { $sj=$sj+2;  }
			  if($cni['belajar']=='d' or $cni['belajar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar']=='a' or $cni['belajar']=='A') { $sj=$sj+4;   }
			  if($cni['belajar']=='b' or $cni['belajar']=='B') { $sj=$sj+3;   }
			  if($cni['belajar']=='c' or $cni['belajar']=='C') { $sj=$sj+2;  }
			  if($cni['belajar']=='d' or $cni['belajar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIID' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar']=='a' or $cni['belajar']=='A') { $sj=$sj+4;   }
			  if($cni['belajar']=='b' or $cni['belajar']=='B') { $sj=$sj+3;   }
			  if($cni['belajar']=='c' or $cni['belajar']=='C') { $sj=$sj+2;  }
			  if($cni['belajar']=='d' or $cni['belajar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar']=='a' or $cni['belajar']=='A') { $sj=$sj+4;   }
			  if($cni['belajar']=='b' or $cni['belajar']=='B') { $sj=$sj+3;   }
			  if($cni['belajar']=='c' or $cni['belajar']=='C') { $sj=$sj+2;  }
			  if($cni['belajar']=='d' or $cni['belajar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar']=='a' or $cni['belajar']=='A') { $sj=$sj+4;   }
			  if($cni['belajar']=='b' or $cni['belajar']=='B') { $sj=$sj+3;   }
			  if($cni['belajar']=='c' or $cni['belajar']=='C') { $sj=$sj+2;  }
			  if($cni['belajar']=='d' or $cni['belajar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar']=='a' or $cni['belajar']=='A') { $sj=$sj+4;   }
			  if($cni['belajar']=='b' or $cni['belajar']=='B') { $sj=$sj+3;   }
			  if($cni['belajar']=='c' or $cni['belajar']=='C') { $sj=$sj+2;  }
			  if($cni['belajar']=='d' or $cni['belajar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar']=='a' or $cni['belajar']=='A') { $sj=$sj+4;   }
			  if($cni['belajar']=='b' or $cni['belajar']=='B') { $sj=$sj+3;   }
			  if($cni['belajar']=='c' or $cni['belajar']=='C') { $sj=$sj+2;  }
			  if($cni['belajar']=='d' or $cni['belajar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar']=='a' or $cni['belajar']=='A') { $sj=$sj+4;   }
			  if($cni['belajar']=='b' or $cni['belajar']=='B') { $sj=$sj+3;   }
			  if($cni['belajar']=='c' or $cni['belajar']=='C') { $sj=$sj+2;  }
			  if($cni['belajar']=='d' or $cni['belajar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar']=='a' or $cni['belajar']=='A') { $sj=$sj+4;   }
			  if($cni['belajar']=='b' or $cni['belajar']=='B') { $sj=$sj+3;   }
			  if($cni['belajar']=='c' or $cni['belajar']=='C') { $sj=$sj+2;  }
			  if($cni['belajar']=='d' or $cni['belajar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar']=='a' or $cni['belajar']=='A') { $sj=$sj+4;   }
			  if($cni['belajar']=='b' or $cni['belajar']=='B') { $sj=$sj+3;   }
			  if($cni['belajar']=='c' or $cni['belajar']=='C') { $sj=$sj+2;  }
			  if($cni['belajar']=='d' or $cni['belajar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar']=='a' or $cni['belajar']=='A') { $sj=$sj+4;   }
			  if($cni['belajar']=='b' or $cni['belajar']=='B') { $sj=$sj+3;   }
			  if($cni['belajar']=='c' or $cni['belajar']=='C') { $sj=$sj+2;  }
			  if($cni['belajar']=='d' or $cni['belajar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar']=='a' or $cni['belajar']=='A') { $sj=$sj+4;   }
			  if($cni['belajar']=='b' or $cni['belajar']=='B') { $sj=$sj+3;   }
			  if($cni['belajar']=='c' or $cni['belajar']=='C') { $sj=$sj+2;  }
			  if($cni['belajar']=='d' or $cni['belajar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar']=='a' or $cni['belajar']=='A') { $sj=$sj+4;   }
			  if($cni['belajar']=='b' or $cni['belajar']=='B') { $sj=$sj+3;   }
			  if($cni['belajar']=='c' or $cni['belajar']=='C') { $sj=$sj+2;  }
			  if($cni['belajar']=='d' or $cni['belajar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar']=='a' or $cni['belajar']=='A') { $sj=$sj+4;   }
			  if($cni['belajar']=='b' or $cni['belajar']=='B') { $sj=$sj+3;   }
			  if($cni['belajar']=='c' or $cni['belajar']=='C') { $sj=$sj+2;  }
			  if($cni['belajar']=='d' or $cni['belajar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar']=='a' or $cni['belajar']=='A') { $sj=$sj+4;   }
			  if($cni['belajar']=='b' or $cni['belajar']=='B') { $sj=$sj+3;   }
			  if($cni['belajar']=='c' or $cni['belajar']=='C') { $sj=$sj+2;  }
			  if($cni['belajar']=='d' or $cni['belajar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><div align="center">Adab terhadap Pembina</div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['adab_kepembina']=='a' or $cni['adab_kepembina']=='A') { $sj=$sj+4;   }
			  if($cni['adab_kepembina']=='b' or $cni['adab_kepembina']=='B') { $sj=$sj+3;   }
			  if($cni['adab_kepembina']=='c' or $cni['adab_kepembina']=='C') { $sj=$sj+2;  }
			  if($cni['adab_kepembina']=='d' or $cni['adab_kepembina']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['adab_kepembina']=='a' or $cni['adab_kepembina']=='A') { $sj=$sj+4;   }
			  if($cni['adab_kepembina']=='b' or $cni['adab_kepembina']=='B') { $sj=$sj+3;   }
			  if($cni['adab_kepembina']=='c' or $cni['adab_kepembina']=='C') { $sj=$sj+2;  }
			  if($cni['adab_kepembina']=='d' or $cni['adab_kepembina']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['adab_kepembina']=='a' or $cni['adab_kepembina']=='A') { $sj=$sj+4;   }
			  if($cni['adab_kepembina']=='b' or $cni['adab_kepembina']=='B') { $sj=$sj+3;   }
			  if($cni['adab_kepembina']=='c' or $cni['adab_kepembina']=='C') { $sj=$sj+2;  }
			  if($cni['adab_kepembina']=='d' or $cni['adab_kepembina']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIID' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['adab_kepembina']=='a' or $cni['adab_kepembina']=='A') { $sj=$sj+4;   }
			  if($cni['adab_kepembina']=='b' or $cni['adab_kepembina']=='B') { $sj=$sj+3;   }
			  if($cni['adab_kepembina']=='c' or $cni['adab_kepembina']=='C') { $sj=$sj+2;  }
			  if($cni['adab_kepembina']=='d' or $cni['adab_kepembina']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['adab_kepembina']=='a' or $cni['adab_kepembina']=='A') { $sj=$sj+4;   }
			  if($cni['adab_kepembina']=='b' or $cni['adab_kepembina']=='B') { $sj=$sj+3;   }
			  if($cni['adab_kepembina']=='c' or $cni['adab_kepembina']=='C') { $sj=$sj+2;  }
			  if($cni['adab_kepembina']=='d' or $cni['adab_kepembina']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['adab_kepembina']=='a' or $cni['adab_kepembina']=='A') { $sj=$sj+4;   }
			  if($cni['adab_kepembina']=='b' or $cni['adab_kepembina']=='B') { $sj=$sj+3;   }
			  if($cni['adab_kepembina']=='c' or $cni['adab_kepembina']=='C') { $sj=$sj+2;  }
			  if($cni['adab_kepembina']=='d' or $cni['adab_kepembina']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['adab_kepembina']=='a' or $cni['adab_kepembina']=='A') { $sj=$sj+4;   }
			  if($cni['adab_kepembina']=='b' or $cni['adab_kepembina']=='B') { $sj=$sj+3;   }
			  if($cni['adab_kepembina']=='c' or $cni['adab_kepembina']=='C') { $sj=$sj+2;  }
			  if($cni['adab_kepembina']=='d' or $cni['adab_kepembina']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['adab_kepembina']=='a' or $cni['adab_kepembina']=='A') { $sj=$sj+4;   }
			  if($cni['adab_kepembina']=='b' or $cni['adab_kepembina']=='B') { $sj=$sj+3;   }
			  if($cni['adab_kepembina']=='c' or $cni['adab_kepembina']=='C') { $sj=$sj+2;  }
			  if($cni['adab_kepembina']=='d' or $cni['adab_kepembina']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['adab_kepembina']=='a' or $cni['adab_kepembina']=='A') { $sj=$sj+4;   }
			  if($cni['adab_kepembina']=='b' or $cni['adab_kepembina']=='B') { $sj=$sj+3;   }
			  if($cni['adab_kepembina']=='c' or $cni['adab_kepembina']=='C') { $sj=$sj+2;  }
			  if($cni['adab_kepembina']=='d' or $cni['adab_kepembina']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['adab_kepembina']=='a' or $cni['adab_kepembina']=='A') { $sj=$sj+4;   }
			  if($cni['adab_kepembina']=='b' or $cni['adab_kepembina']=='B') { $sj=$sj+3;   }
			  if($cni['adab_kepembina']=='c' or $cni['adab_kepembina']=='C') { $sj=$sj+2;  }
			  if($cni['adab_kepembina']=='d' or $cni['adab_kepembina']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['adab_kepembina']=='a' or $cni['adab_kepembina']=='A') { $sj=$sj+4;   }
			  if($cni['adab_kepembina']=='b' or $cni['adab_kepembina']=='B') { $sj=$sj+3;   }
			  if($cni['adab_kepembina']=='c' or $cni['adab_kepembina']=='C') { $sj=$sj+2;  }
			  if($cni['adab_kepembina']=='d' or $cni['adab_kepembina']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['adab_kepembina']=='a' or $cni['adab_kepembina']=='A') { $sj=$sj+4;   }
			  if($cni['adab_kepembina']=='b' or $cni['adab_kepembina']=='B') { $sj=$sj+3;   }
			  if($cni['adab_kepembina']=='c' or $cni['adab_kepembina']=='C') { $sj=$sj+2;  }
			  if($cni['adab_kepembina']=='d' or $cni['adab_kepembina']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['adab_kepembina']=='a' or $cni['adab_kepembina']=='A') { $sj=$sj+4;   }
			  if($cni['adab_kepembina']=='b' or $cni['adab_kepembina']=='B') { $sj=$sj+3;   }
			  if($cni['adab_kepembina']=='c' or $cni['adab_kepembina']=='C') { $sj=$sj+2;  }
			  if($cni['adab_kepembina']=='d' or $cni['adab_kepembina']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['adab_kepembina']=='a' or $cni['adab_kepembina']=='A') { $sj=$sj+4;   }
			  if($cni['adab_kepembina']=='b' or $cni['adab_kepembina']=='B') { $sj=$sj+3;   }
			  if($cni['adab_kepembina']=='c' or $cni['adab_kepembina']=='C') { $sj=$sj+2;  }
			  if($cni['adab_kepembina']=='d' or $cni['adab_kepembina']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['adab_kepembina']=='a' or $cni['adab_kepembina']=='A') { $sj=$sj+4;   }
			  if($cni['adab_kepembina']=='b' or $cni['adab_kepembina']=='B') { $sj=$sj+3;   }
			  if($cni['adab_kepembina']=='c' or $cni['adab_kepembina']=='C') { $sj=$sj+2;  }
			  if($cni['adab_kepembina']=='d' or $cni['adab_kepembina']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['adab_kepembina']=='a' or $cni['adab_kepembina']=='A') { $sj=$sj+4;   }
			  if($cni['adab_kepembina']=='b' or $cni['adab_kepembina']=='B') { $sj=$sj+3;   }
			  if($cni['adab_kepembina']=='c' or $cni['adab_kepembina']=='C') { $sj=$sj+2;  }
			  if($cni['adab_kepembina']=='d' or $cni['adab_kepembina']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><div align="center">Adab bergaul-teman</div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bergaul']=='a' or $cni['bergaul']=='A') { $sj=$sj+4;   }
			  if($cni['bergaul']=='b' or $cni['bergaul']=='B') { $sj=$sj+3;   }
			  if($cni['bergaul']=='c' or $cni['bergaul']=='C') { $sj=$sj+2;  }
			  if($cni['bergaul']=='d' or $cni['bergaul']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bergaul']=='a' or $cni['bergaul']=='A') { $sj=$sj+4;   }
			  if($cni['bergaul']=='b' or $cni['bergaul']=='B') { $sj=$sj+3;   }
			  if($cni['bergaul']=='c' or $cni['bergaul']=='C') { $sj=$sj+2;  }
			  if($cni['bergaul']=='d' or $cni['bergaul']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bergaul']=='a' or $cni['bergaul']=='A') { $sj=$sj+4;   }
			  if($cni['bergaul']=='b' or $cni['bergaul']=='B') { $sj=$sj+3;   }
			  if($cni['bergaul']=='c' or $cni['bergaul']=='C') { $sj=$sj+2;  }
			  if($cni['bergaul']=='d' or $cni['bergaul']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIID' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bergaul']=='a' or $cni['bergaul']=='A') { $sj=$sj+4;   }
			  if($cni['bergaul']=='b' or $cni['bergaul']=='B') { $sj=$sj+3;   }
			  if($cni['bergaul']=='c' or $cni['bergaul']=='C') { $sj=$sj+2;  }
			  if($cni['bergaul']=='d' or $cni['bergaul']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bergaul']=='a' or $cni['bergaul']=='A') { $sj=$sj+4;   }
			  if($cni['bergaul']=='b' or $cni['bergaul']=='B') { $sj=$sj+3;   }
			  if($cni['bergaul']=='c' or $cni['bergaul']=='C') { $sj=$sj+2;  }
			  if($cni['bergaul']=='d' or $cni['bergaul']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bergaul']=='a' or $cni['bergaul']=='A') { $sj=$sj+4;   }
			  if($cni['bergaul']=='b' or $cni['bergaul']=='B') { $sj=$sj+3;   }
			  if($cni['bergaul']=='c' or $cni['bergaul']=='C') { $sj=$sj+2;  }
			  if($cni['bergaul']=='d' or $cni['bergaul']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bergaul']=='a' or $cni['bergaul']=='A') { $sj=$sj+4;   }
			  if($cni['bergaul']=='b' or $cni['bergaul']=='B') { $sj=$sj+3;   }
			  if($cni['bergaul']=='c' or $cni['bergaul']=='C') { $sj=$sj+2;  }
			  if($cni['bergaul']=='d' or $cni['bergaul']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bergaul']=='a' or $cni['bergaul']=='A') { $sj=$sj+4;   }
			  if($cni['bergaul']=='b' or $cni['bergaul']=='B') { $sj=$sj+3;   }
			  if($cni['bergaul']=='c' or $cni['bergaul']=='C') { $sj=$sj+2;  }
			  if($cni['bergaul']=='d' or $cni['bergaul']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bergaul']=='a' or $cni['bergaul']=='A') { $sj=$sj+4;   }
			  if($cni['bergaul']=='b' or $cni['bergaul']=='B') { $sj=$sj+3;   }
			  if($cni['bergaul']=='c' or $cni['bergaul']=='C') { $sj=$sj+2;  }
			  if($cni['bergaul']=='d' or $cni['bergaul']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bergaul']=='a' or $cni['bergaul']=='A') { $sj=$sj+4;   }
			  if($cni['bergaul']=='b' or $cni['bergaul']=='B') { $sj=$sj+3;   }
			  if($cni['bergaul']=='c' or $cni['bergaul']=='C') { $sj=$sj+2;  }
			  if($cni['bergaul']=='d' or $cni['bergaul']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bergaul']=='a' or $cni['bergaul']=='A') { $sj=$sj+4;   }
			  if($cni['bergaul']=='b' or $cni['bergaul']=='B') { $sj=$sj+3;   }
			  if($cni['bergaul']=='c' or $cni['bergaul']=='C') { $sj=$sj+2;  }
			  if($cni['bergaul']=='d' or $cni['bergaul']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bergaul']=='a' or $cni['bergaul']=='A') { $sj=$sj+4;   }
			  if($cni['bergaul']=='b' or $cni['bergaul']=='B') { $sj=$sj+3;   }
			  if($cni['bergaul']=='c' or $cni['bergaul']=='C') { $sj=$sj+2;  }
			  if($cni['bergaul']=='d' or $cni['bergaul']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bergaul']=='a' or $cni['bergaul']=='A') { $sj=$sj+4;   }
			  if($cni['bergaul']=='b' or $cni['bergaul']=='B') { $sj=$sj+3;   }
			  if($cni['bergaul']=='c' or $cni['bergaul']=='C') { $sj=$sj+2;  }
			  if($cni['bergaul']=='d' or $cni['bergaul']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bergaul']=='a' or $cni['bergaul']=='A') { $sj=$sj+4;   }
			  if($cni['bergaul']=='b' or $cni['bergaul']=='B') { $sj=$sj+3;   }
			  if($cni['bergaul']=='c' or $cni['bergaul']=='C') { $sj=$sj+2;  }
			  if($cni['bergaul']=='d' or $cni['bergaul']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bergaul']=='a' or $cni['bergaul']=='A') { $sj=$sj+4;   }
			  if($cni['bergaul']=='b' or $cni['bergaul']=='B') { $sj=$sj+3;   }
			  if($cni['bergaul']=='c' or $cni['bergaul']=='C') { $sj=$sj+2;  }
			  if($cni['bergaul']=='d' or $cni['bergaul']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bergaul']=='a' or $cni['bergaul']=='A') { $sj=$sj+4;   }
			  if($cni['bergaul']=='b' or $cni['bergaul']=='B') { $sj=$sj+3;   }
			  if($cni['bergaul']=='c' or $cni['bergaul']=='C') { $sj=$sj+2;  }
			  if($cni['bergaul']=='d' or $cni['bergaul']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><div align="center">Adab bercanda-berkelakar</div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bercanda']=='a' or $cni['bercanda']=='A') { $sj=$sj+4;   }
			  if($cni['bercanda']=='b' or $cni['bercanda']=='B') { $sj=$sj+3;   }
			  if($cni['bercanda']=='c' or $cni['bercanda']=='C') { $sj=$sj+2;  }
			  if($cni['bercanda']=='d' or $cni['bercanda']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bercanda']=='a' or $cni['bercanda']=='A') { $sj=$sj+4;   }
			  if($cni['bercanda']=='b' or $cni['bercanda']=='B') { $sj=$sj+3;   }
			  if($cni['bercanda']=='c' or $cni['bercanda']=='C') { $sj=$sj+2;  }
			  if($cni['bercanda']=='d' or $cni['bercanda']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bercanda']=='a' or $cni['bercanda']=='A') { $sj=$sj+4;   }
			  if($cni['bercanda']=='b' or $cni['bercanda']=='B') { $sj=$sj+3;   }
			  if($cni['bercanda']=='c' or $cni['bercanda']=='C') { $sj=$sj+2;  }
			  if($cni['bercanda']=='d' or $cni['bercanda']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bercanda']=='a' or $cni['bercanda']=='A') { $sj=$sj+4;   }
			  if($cni['bercanda']=='b' or $cni['bercanda']=='B') { $sj=$sj+3;   }
			  if($cni['bercanda']=='c' or $cni['bercanda']=='C') { $sj=$sj+2;  }
			  if($cni['bercanda']=='d' or $cni['bercanda']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bercanda']=='a' or $cni['bercanda']=='A') { $sj=$sj+4;   }
			  if($cni['bercanda']=='b' or $cni['bercanda']=='B') { $sj=$sj+3;   }
			  if($cni['bercanda']=='c' or $cni['bercanda']=='C') { $sj=$sj+2;  }
			  if($cni['bercanda']=='d' or $cni['bercanda']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bercanda']=='a' or $cni['bercanda']=='A') { $sj=$sj+4;   }
			  if($cni['bercanda']=='b' or $cni['bercanda']=='B') { $sj=$sj+3;   }
			  if($cni['bercanda']=='c' or $cni['bercanda']=='C') { $sj=$sj+2;  }
			  if($cni['bercanda']=='d' or $cni['bercanda']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bercanda']=='a' or $cni['bercanda']=='A') { $sj=$sj+4;   }
			  if($cni['bercanda']=='b' or $cni['bercanda']=='B') { $sj=$sj+3;   }
			  if($cni['bercanda']=='c' or $cni['bercanda']=='C') { $sj=$sj+2;  }
			  if($cni['bercanda']=='d' or $cni['bercanda']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bercanda']=='a' or $cni['bercanda']=='A') { $sj=$sj+4;   }
			  if($cni['bercanda']=='b' or $cni['bercanda']=='B') { $sj=$sj+3;   }
			  if($cni['bercanda']=='c' or $cni['bercanda']=='C') { $sj=$sj+2;  }
			  if($cni['bercanda']=='d' or $cni['bercanda']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bercanda']=='a' or $cni['bercanda']=='A') { $sj=$sj+4;   }
			  if($cni['bercanda']=='b' or $cni['bercanda']=='B') { $sj=$sj+3;   }
			  if($cni['bercanda']=='c' or $cni['bercanda']=='C') { $sj=$sj+2;  }
			  if($cni['bercanda']=='d' or $cni['bercanda']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bercanda']=='a' or $cni['bercanda']=='A') { $sj=$sj+4;   }
			  if($cni['bercanda']=='b' or $cni['bercanda']=='B') { $sj=$sj+3;   }
			  if($cni['bercanda']=='c' or $cni['bercanda']=='C') { $sj=$sj+2;  }
			  if($cni['bercanda']=='d' or $cni['bercanda']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bercanda']=='a' or $cni['bercanda']=='A') { $sj=$sj+4;   }
			  if($cni['bercanda']=='b' or $cni['bercanda']=='B') { $sj=$sj+3;   }
			  if($cni['bercanda']=='c' or $cni['bercanda']=='C') { $sj=$sj+2;  }
			  if($cni['bercanda']=='d' or $cni['bercanda']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bercanda']=='a' or $cni['bercanda']=='A') { $sj=$sj+4;   }
			  if($cni['bercanda']=='b' or $cni['bercanda']=='B') { $sj=$sj+3;   }
			  if($cni['bercanda']=='c' or $cni['bercanda']=='C') { $sj=$sj+2;  }
			  if($cni['bercanda']=='d' or $cni['bercanda']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bercanda']=='a' or $cni['bercanda']=='A') { $sj=$sj+4;   }
			  if($cni['bercanda']=='b' or $cni['bercanda']=='B') { $sj=$sj+3;   }
			  if($cni['bercanda']=='c' or $cni['bercanda']=='C') { $sj=$sj+2;  }
			  if($cni['bercanda']=='d' or $cni['bercanda']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bercanda']=='a' or $cni['bercanda']=='A') { $sj=$sj+4;   }
			  if($cni['bercanda']=='b' or $cni['bercanda']=='B') { $sj=$sj+3;   }
			  if($cni['bercanda']=='c' or $cni['bercanda']=='C') { $sj=$sj+2;  }
			  if($cni['bercanda']=='d' or $cni['bercanda']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bercanda']=='a' or $cni['bercanda']=='A') { $sj=$sj+4;   }
			  if($cni['bercanda']=='b' or $cni['bercanda']=='B') { $sj=$sj+3;   }
			  if($cni['bercanda']=='c' or $cni['bercanda']=='C') { $sj=$sj+2;  }
			  if($cni['bercanda']=='d' or $cni['bercanda']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bercanda']=='a' or $cni['bercanda']=='A') { $sj=$sj+4;   }
			  if($cni['bercanda']=='b' or $cni['bercanda']=='B') { $sj=$sj+3;   }
			  if($cni['bercanda']=='c' or $cni['bercanda']=='C') { $sj=$sj+2;  }
			  if($cni['bercanda']=='d' or $cni['bercanda']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
          </tr>
          
        </table></td>
        <td bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF">&nbsp;</td>
        <td valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><table width="98%" border="1" align="right" cellpadding="2" cellspacing="0" bordercolor="#336600">
          <tr>
            <td bgcolor="#336600">&nbsp;</td>
            <td colspan="16" bgcolor="#336600"><div align="center">
                <div align="center" class="style20">Kelas</div>
            </div></td>
          </tr>
          <tr>
            <td width="33%" bgcolor="#336600"><div align="center" class="style20"><strong>KEDISIPLINAN</strong></div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">VIIA</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">VIIB</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">VIIC</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">VIID</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">VIIIA</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">VIIIB</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">VIIIC</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">IXA</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">IXB</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">IXC</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">XA</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">XB</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">XIA</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">XIB</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">XIIA</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">XIIB</div></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><div align="center">Mengikuti briefing malam di asrama</div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['briefing']=='a' or $cni['briefing']=='A') { $sj=$sj+4;   }
			  if($cni['briefing']=='b' or $cni['briefing']=='B') { $sj=$sj+3;   }
			  if($cni['briefing']=='c' or $cni['briefing']=='C') { $sj=$sj+2;  }
			  if($cni['briefing']=='d' or $cni['briefing']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['briefing']=='a' or $cni['briefing']=='A') { $sj=$sj+4;   }
			  if($cni['briefing']=='b' or $cni['briefing']=='B') { $sj=$sj+3;   }
			  if($cni['briefing']=='c' or $cni['briefing']=='C') { $sj=$sj+2;  }
			  if($cni['briefing']=='d' or $cni['briefing']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['briefing']=='a' or $cni['briefing']=='A') { $sj=$sj+4;   }
			  if($cni['briefing']=='b' or $cni['briefing']=='B') { $sj=$sj+3;   }
			  if($cni['briefing']=='c' or $cni['briefing']=='C') { $sj=$sj+2;  }
			  if($cni['briefing']=='d' or $cni['briefing']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIID' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['briefing']=='a' or $cni['briefing']=='A') { $sj=$sj+4;   }
			  if($cni['briefing']=='b' or $cni['briefing']=='B') { $sj=$sj+3;   }
			  if($cni['briefing']=='c' or $cni['briefing']=='C') { $sj=$sj+2;  }
			  if($cni['briefing']=='d' or $cni['briefing']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['briefing']=='a' or $cni['briefing']=='A') { $sj=$sj+4;   }
			  if($cni['briefing']=='b' or $cni['briefing']=='B') { $sj=$sj+3;   }
			  if($cni['briefing']=='c' or $cni['briefing']=='C') { $sj=$sj+2;  }
			  if($cni['briefing']=='d' or $cni['briefing']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['briefing']=='a' or $cni['briefing']=='A') { $sj=$sj+4;   }
			  if($cni['briefing']=='b' or $cni['briefing']=='B') { $sj=$sj+3;   }
			  if($cni['briefing']=='c' or $cni['briefing']=='C') { $sj=$sj+2;  }
			  if($cni['briefing']=='d' or $cni['briefing']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['briefing']=='a' or $cni['briefing']=='A') { $sj=$sj+4;   }
			  if($cni['briefing']=='b' or $cni['briefing']=='B') { $sj=$sj+3;   }
			  if($cni['briefing']=='c' or $cni['briefing']=='C') { $sj=$sj+2;  }
			  if($cni['briefing']=='d' or $cni['briefing']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['briefing']=='a' or $cni['briefing']=='A') { $sj=$sj+4;   }
			  if($cni['briefing']=='b' or $cni['briefing']=='B') { $sj=$sj+3;   }
			  if($cni['briefing']=='c' or $cni['briefing']=='C') { $sj=$sj+2;  }
			  if($cni['briefing']=='d' or $cni['briefing']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['briefing']=='a' or $cni['briefing']=='A') { $sj=$sj+4;   }
			  if($cni['briefing']=='b' or $cni['briefing']=='B') { $sj=$sj+3;   }
			  if($cni['briefing']=='c' or $cni['briefing']=='C') { $sj=$sj+2;  }
			  if($cni['briefing']=='d' or $cni['briefing']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['briefing']=='a' or $cni['briefing']=='A') { $sj=$sj+4;   }
			  if($cni['briefing']=='b' or $cni['briefing']=='B') { $sj=$sj+3;   }
			  if($cni['briefing']=='c' or $cni['briefing']=='C') { $sj=$sj+2;  }
			  if($cni['briefing']=='d' or $cni['briefing']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['briefing']=='a' or $cni['briefing']=='A') { $sj=$sj+4;   }
			  if($cni['briefing']=='b' or $cni['briefing']=='B') { $sj=$sj+3;   }
			  if($cni['briefing']=='c' or $cni['briefing']=='C') { $sj=$sj+2;  }
			  if($cni['briefing']=='d' or $cni['briefing']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['briefing']=='a' or $cni['briefing']=='A') { $sj=$sj+4;   }
			  if($cni['briefing']=='b' or $cni['briefing']=='B') { $sj=$sj+3;   }
			  if($cni['briefing']=='c' or $cni['briefing']=='C') { $sj=$sj+2;  }
			  if($cni['briefing']=='d' or $cni['briefing']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['briefing']=='a' or $cni['briefing']=='A') { $sj=$sj+4;   }
			  if($cni['briefing']=='b' or $cni['briefing']=='B') { $sj=$sj+3;   }
			  if($cni['briefing']=='c' or $cni['briefing']=='C') { $sj=$sj+2;  }
			  if($cni['briefing']=='d' or $cni['briefing']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['briefing']=='a' or $cni['briefing']=='A') { $sj=$sj+4;   }
			  if($cni['briefing']=='b' or $cni['briefing']=='B') { $sj=$sj+3;   }
			  if($cni['briefing']=='c' or $cni['briefing']=='C') { $sj=$sj+2;  }
			  if($cni['briefing']=='d' or $cni['briefing']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['briefing']=='a' or $cni['briefing']=='A') { $sj=$sj+4;   }
			  if($cni['briefing']=='b' or $cni['briefing']=='B') { $sj=$sj+3;   }
			  if($cni['briefing']=='c' or $cni['briefing']=='C') { $sj=$sj+2;  }
			  if($cni['briefing']=='d' or $cni['briefing']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['briefing']=='a' or $cni['briefing']=='A') { $sj=$sj+4;   }
			  if($cni['briefing']=='b' or $cni['briefing']=='B') { $sj=$sj+3;   }
			  if($cni['briefing']=='c' or $cni['briefing']=='C') { $sj=$sj+2;  }
			  if($cni['briefing']=='d' or $cni['briefing']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><div align="center">Disiplin waktu perizinan &ndash; kepulangan reguler</div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['izin_pulang']=='a' or $cni['izin_pulang']=='A') { $sj=$sj+4;   }
			  if($cni['izin_pulang']=='b' or $cni['izin_pulang']=='B') { $sj=$sj+3;   }
			  if($cni['izin_pulang']=='c' or $cni['izin_pulang']=='C') { $sj=$sj+2;  }
			  if($cni['izin_pulang']=='d' or $cni['izin_pulang']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['izin_pulang']=='a' or $cni['izin_pulang']=='A') { $sj=$sj+4;   }
			  if($cni['izin_pulang']=='b' or $cni['izin_pulang']=='B') { $sj=$sj+3;   }
			  if($cni['izin_pulang']=='c' or $cni['izin_pulang']=='C') { $sj=$sj+2;  }
			  if($cni['izin_pulang']=='d' or $cni['izin_pulang']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['izin_pulang']=='a' or $cni['izin_pulang']=='A') { $sj=$sj+4;   }
			  if($cni['izin_pulang']=='b' or $cni['izin_pulang']=='B') { $sj=$sj+3;   }
			  if($cni['izin_pulang']=='c' or $cni['izin_pulang']=='C') { $sj=$sj+2;  }
			  if($cni['izin_pulang']=='d' or $cni['izin_pulang']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIID' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['izin_pulang']=='a' or $cni['izin_pulang']=='A') { $sj=$sj+4;   }
			  if($cni['izin_pulang']=='b' or $cni['izin_pulang']=='B') { $sj=$sj+3;   }
			  if($cni['izin_pulang']=='c' or $cni['izin_pulang']=='C') { $sj=$sj+2;  }
			  if($cni['izin_pulang']=='d' or $cni['izin_pulang']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['izin_pulang']=='a' or $cni['izin_pulang']=='A') { $sj=$sj+4;   }
			  if($cni['izin_pulang']=='b' or $cni['izin_pulang']=='B') { $sj=$sj+3;   }
			  if($cni['izin_pulang']=='c' or $cni['izin_pulang']=='C') { $sj=$sj+2;  }
			  if($cni['izin_pulang']=='d' or $cni['izin_pulang']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['izin_pulang']=='a' or $cni['izin_pulang']=='A') { $sj=$sj+4;   }
			  if($cni['izin_pulang']=='b' or $cni['izin_pulang']=='B') { $sj=$sj+3;   }
			  if($cni['izin_pulang']=='c' or $cni['izin_pulang']=='C') { $sj=$sj+2;  }
			  if($cni['izin_pulang']=='d' or $cni['izin_pulang']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['izin_pulang']=='a' or $cni['izin_pulang']=='A') { $sj=$sj+4;   }
			  if($cni['izin_pulang']=='b' or $cni['izin_pulang']=='B') { $sj=$sj+3;   }
			  if($cni['izin_pulang']=='c' or $cni['izin_pulang']=='C') { $sj=$sj+2;  }
			  if($cni['izin_pulang']=='d' or $cni['izin_pulang']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['izin_pulang']=='a' or $cni['izin_pulang']=='A') { $sj=$sj+4;   }
			  if($cni['izin_pulang']=='b' or $cni['izin_pulang']=='B') { $sj=$sj+3;   }
			  if($cni['izin_pulang']=='c' or $cni['izin_pulang']=='C') { $sj=$sj+2;  }
			  if($cni['izin_pulang']=='d' or $cni['izin_pulang']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['izin_pulang']=='a' or $cni['izin_pulang']=='A') { $sj=$sj+4;   }
			  if($cni['izin_pulang']=='b' or $cni['izin_pulang']=='B') { $sj=$sj+3;   }
			  if($cni['izin_pulang']=='c' or $cni['izin_pulang']=='C') { $sj=$sj+2;  }
			  if($cni['izin_pulang']=='d' or $cni['izin_pulang']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['izin_pulang']=='a' or $cni['izin_pulang']=='A') { $sj=$sj+4;   }
			  if($cni['izin_pulang']=='b' or $cni['izin_pulang']=='B') { $sj=$sj+3;   }
			  if($cni['izin_pulang']=='c' or $cni['izin_pulang']=='C') { $sj=$sj+2;  }
			  if($cni['izin_pulang']=='d' or $cni['izin_pulang']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['izin_pulang']=='a' or $cni['izin_pulang']=='A') { $sj=$sj+4;   }
			  if($cni['izin_pulang']=='b' or $cni['izin_pulang']=='B') { $sj=$sj+3;   }
			  if($cni['izin_pulang']=='c' or $cni['izin_pulang']=='C') { $sj=$sj+2;  }
			  if($cni['izin_pulang']=='d' or $cni['izin_pulang']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['izin_pulang']=='a' or $cni['izin_pulang']=='A') { $sj=$sj+4;   }
			  if($cni['izin_pulang']=='b' or $cni['izin_pulang']=='B') { $sj=$sj+3;   }
			  if($cni['izin_pulang']=='c' or $cni['izin_pulang']=='C') { $sj=$sj+2;  }
			  if($cni['izin_pulang']=='d' or $cni['izin_pulang']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['izin_pulang']=='a' or $cni['izin_pulang']=='A') { $sj=$sj+4;   }
			  if($cni['izin_pulang']=='b' or $cni['izin_pulang']=='B') { $sj=$sj+3;   }
			  if($cni['izin_pulang']=='c' or $cni['izin_pulang']=='C') { $sj=$sj+2;  }
			  if($cni['izin_pulang']=='d' or $cni['izin_pulang']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['izin_pulang']=='a' or $cni['izin_pulang']=='A') { $sj=$sj+4;   }
			  if($cni['izin_pulang']=='b' or $cni['izin_pulang']=='B') { $sj=$sj+3;   }
			  if($cni['izin_pulang']=='c' or $cni['izin_pulang']=='C') { $sj=$sj+2;  }
			  if($cni['izin_pulang']=='d' or $cni['izin_pulang']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['izin_pulang']=='a' or $cni['izin_pulang']=='A') { $sj=$sj+4;   }
			  if($cni['izin_pulang']=='b' or $cni['izin_pulang']=='B') { $sj=$sj+3;   }
			  if($cni['izin_pulang']=='c' or $cni['izin_pulang']=='C') { $sj=$sj+2;  }
			  if($cni['izin_pulang']=='d' or $cni['izin_pulang']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['izin_pulang']=='a' or $cni['izin_pulang']=='A') { $sj=$sj+4;   }
			  if($cni['izin_pulang']=='b' or $cni['izin_pulang']=='B') { $sj=$sj+3;   }
			  if($cni['izin_pulang']=='c' or $cni['izin_pulang']=='C') { $sj=$sj+2;  }
			  if($cni['izin_pulang']=='d' or $cni['izin_pulang']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><div align="center">Disiplin mengikuti kegiatan asrama</div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kegiatan_asrama']=='a' or $cni['kegiatan_asrama']=='A') { $sj=$sj+4;   }
			  if($cni['kegiatan_asrama']=='b' or $cni['kegiatan_asrama']=='B') { $sj=$sj+3;   }
			  if($cni['kegiatan_asrama']=='c' or $cni['kegiatan_asrama']=='C') { $sj=$sj+2;  }
			  if($cni['kegiatan_asrama']=='d' or $cni['kegiatan_asrama']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kegiatan_asrama']=='a' or $cni['kegiatan_asrama']=='A') { $sj=$sj+4;   }
			  if($cni['kegiatan_asrama']=='b' or $cni['kegiatan_asrama']=='B') { $sj=$sj+3;   }
			  if($cni['kegiatan_asrama']=='c' or $cni['kegiatan_asrama']=='C') { $sj=$sj+2;  }
			  if($cni['kegiatan_asrama']=='d' or $cni['kegiatan_asrama']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kegiatan_asrama']=='a' or $cni['kegiatan_asrama']=='A') { $sj=$sj+4;   }
			  if($cni['kegiatan_asrama']=='b' or $cni['kegiatan_asrama']=='B') { $sj=$sj+3;   }
			  if($cni['kegiatan_asrama']=='c' or $cni['kegiatan_asrama']=='C') { $sj=$sj+2;  }
			  if($cni['kegiatan_asrama']=='d' or $cni['kegiatan_asrama']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIID' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kegiatan_asrama']=='a' or $cni['kegiatan_asrama']=='A') { $sj=$sj+4;   }
			  if($cni['kegiatan_asrama']=='b' or $cni['kegiatan_asrama']=='B') { $sj=$sj+3;   }
			  if($cni['kegiatan_asrama']=='c' or $cni['kegiatan_asrama']=='C') { $sj=$sj+2;  }
			  if($cni['kegiatan_asrama']=='d' or $cni['kegiatan_asrama']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kegiatan_asrama']=='a' or $cni['kegiatan_asrama']=='A') { $sj=$sj+4;   }
			  if($cni['kegiatan_asrama']=='b' or $cni['kegiatan_asrama']=='B') { $sj=$sj+3;   }
			  if($cni['kegiatan_asrama']=='c' or $cni['kegiatan_asrama']=='C') { $sj=$sj+2;  }
			  if($cni['kegiatan_asrama']=='d' or $cni['kegiatan_asrama']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kegiatan_asrama']=='a' or $cni['kegiatan_asrama']=='A') { $sj=$sj+4;   }
			  if($cni['kegiatan_asrama']=='b' or $cni['kegiatan_asrama']=='B') { $sj=$sj+3;   }
			  if($cni['kegiatan_asrama']=='c' or $cni['kegiatan_asrama']=='C') { $sj=$sj+2;  }
			  if($cni['kegiatan_asrama']=='d' or $cni['kegiatan_asrama']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kegiatan_asrama']=='a' or $cni['kegiatan_asrama']=='A') { $sj=$sj+4;   }
			  if($cni['kegiatan_asrama']=='b' or $cni['kegiatan_asrama']=='B') { $sj=$sj+3;   }
			  if($cni['kegiatan_asrama']=='c' or $cni['kegiatan_asrama']=='C') { $sj=$sj+2;  }
			  if($cni['kegiatan_asrama']=='d' or $cni['kegiatan_asrama']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kegiatan_asrama']=='a' or $cni['kegiatan_asrama']=='A') { $sj=$sj+4;   }
			  if($cni['kegiatan_asrama']=='b' or $cni['kegiatan_asrama']=='B') { $sj=$sj+3;   }
			  if($cni['kegiatan_asrama']=='c' or $cni['kegiatan_asrama']=='C') { $sj=$sj+2;  }
			  if($cni['kegiatan_asrama']=='d' or $cni['kegiatan_asrama']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kegiatan_asrama']=='a' or $cni['kegiatan_asrama']=='A') { $sj=$sj+4;   }
			  if($cni['kegiatan_asrama']=='b' or $cni['kegiatan_asrama']=='B') { $sj=$sj+3;   }
			  if($cni['kegiatan_asrama']=='c' or $cni['kegiatan_asrama']=='C') { $sj=$sj+2;  }
			  if($cni['kegiatan_asrama']=='d' or $cni['kegiatan_asrama']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kegiatan_asrama']=='a' or $cni['kegiatan_asrama']=='A') { $sj=$sj+4;   }
			  if($cni['kegiatan_asrama']=='b' or $cni['kegiatan_asrama']=='B') { $sj=$sj+3;   }
			  if($cni['kegiatan_asrama']=='c' or $cni['kegiatan_asrama']=='C') { $sj=$sj+2;  }
			  if($cni['kegiatan_asrama']=='d' or $cni['kegiatan_asrama']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kegiatan_asrama']=='a' or $cni['kegiatan_asrama']=='A') { $sj=$sj+4;   }
			  if($cni['kegiatan_asrama']=='b' or $cni['kegiatan_asrama']=='B') { $sj=$sj+3;   }
			  if($cni['kegiatan_asrama']=='c' or $cni['kegiatan_asrama']=='C') { $sj=$sj+2;  }
			  if($cni['kegiatan_asrama']=='d' or $cni['kegiatan_asrama']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kegiatan_asrama']=='a' or $cni['kegiatan_asrama']=='A') { $sj=$sj+4;   }
			  if($cni['kegiatan_asrama']=='b' or $cni['kegiatan_asrama']=='B') { $sj=$sj+3;   }
			  if($cni['kegiatan_asrama']=='c' or $cni['kegiatan_asrama']=='C') { $sj=$sj+2;  }
			  if($cni['kegiatan_asrama']=='d' or $cni['kegiatan_asrama']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kegiatan_asrama']=='a' or $cni['kegiatan_asrama']=='A') { $sj=$sj+4;   }
			  if($cni['kegiatan_asrama']=='b' or $cni['kegiatan_asrama']=='B') { $sj=$sj+3;   }
			  if($cni['kegiatan_asrama']=='c' or $cni['kegiatan_asrama']=='C') { $sj=$sj+2;  }
			  if($cni['kegiatan_asrama']=='d' or $cni['kegiatan_asrama']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kegiatan_asrama']=='a' or $cni['kegiatan_asrama']=='A') { $sj=$sj+4;   }
			  if($cni['kegiatan_asrama']=='b' or $cni['kegiatan_asrama']=='B') { $sj=$sj+3;   }
			  if($cni['kegiatan_asrama']=='c' or $cni['kegiatan_asrama']=='C') { $sj=$sj+2;  }
			  if($cni['kegiatan_asrama']=='d' or $cni['kegiatan_asrama']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kegiatan_asrama']=='a' or $cni['kegiatan_asrama']=='A') { $sj=$sj+4;   }
			  if($cni['kegiatan_asrama']=='b' or $cni['kegiatan_asrama']=='B') { $sj=$sj+3;   }
			  if($cni['kegiatan_asrama']=='c' or $cni['kegiatan_asrama']=='C') { $sj=$sj+2;  }
			  if($cni['kegiatan_asrama']=='d' or $cni['kegiatan_asrama']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kegiatan_asrama']=='a' or $cni['kegiatan_asrama']=='A') { $sj=$sj+4;   }
			  if($cni['kegiatan_asrama']=='b' or $cni['kegiatan_asrama']=='B') { $sj=$sj+3;   }
			  if($cni['kegiatan_asrama']=='c' or $cni['kegiatan_asrama']=='C') { $sj=$sj+2;  }
			  if($cni['kegiatan_asrama']=='d' or $cni['kegiatan_asrama']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><div align="center">Disiplin belajar mandiri</div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar_mandiri']=='a' or $cni['belajar_mandiri']=='A') { $sj=$sj+4;   }
			  if($cni['belajar_mandiri']=='b' or $cni['belajar_mandiri']=='B') { $sj=$sj+3;   }
			  if($cni['belajar_mandiri']=='c' or $cni['belajar_mandiri']=='C') { $sj=$sj+2;  }
			  if($cni['belajar_mandiri']=='d' or $cni['belajar_mandiri']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar_mandiri']=='a' or $cni['belajar_mandiri']=='A') { $sj=$sj+4;   }
			  if($cni['belajar_mandiri']=='b' or $cni['belajar_mandiri']=='B') { $sj=$sj+3;   }
			  if($cni['belajar_mandiri']=='c' or $cni['belajar_mandiri']=='C') { $sj=$sj+2;  }
			  if($cni['belajar_mandiri']=='d' or $cni['belajar_mandiri']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar_mandiri']=='a' or $cni['belajar_mandiri']=='A') { $sj=$sj+4;   }
			  if($cni['belajar_mandiri']=='b' or $cni['belajar_mandiri']=='B') { $sj=$sj+3;   }
			  if($cni['belajar_mandiri']=='c' or $cni['belajar_mandiri']=='C') { $sj=$sj+2;  }
			  if($cni['belajar_mandiri']=='d' or $cni['belajar_mandiri']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIID' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar_mandiri']=='a' or $cni['belajar_mandiri']=='A') { $sj=$sj+4;   }
			  if($cni['belajar_mandiri']=='b' or $cni['belajar_mandiri']=='B') { $sj=$sj+3;   }
			  if($cni['belajar_mandiri']=='c' or $cni['belajar_mandiri']=='C') { $sj=$sj+2;  }
			  if($cni['belajar_mandiri']=='d' or $cni['belajar_mandiri']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar_mandiri']=='a' or $cni['belajar_mandiri']=='A') { $sj=$sj+4;   }
			  if($cni['belajar_mandiri']=='b' or $cni['belajar_mandiri']=='B') { $sj=$sj+3;   }
			  if($cni['belajar_mandiri']=='c' or $cni['belajar_mandiri']=='C') { $sj=$sj+2;  }
			  if($cni['belajar_mandiri']=='d' or $cni['belajar_mandiri']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar_mandiri']=='a' or $cni['belajar_mandiri']=='A') { $sj=$sj+4;   }
			  if($cni['belajar_mandiri']=='b' or $cni['belajar_mandiri']=='B') { $sj=$sj+3;   }
			  if($cni['belajar_mandiri']=='c' or $cni['belajar_mandiri']=='C') { $sj=$sj+2;  }
			  if($cni['belajar_mandiri']=='d' or $cni['belajar_mandiri']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar_mandiri']=='a' or $cni['belajar_mandiri']=='A') { $sj=$sj+4;   }
			  if($cni['belajar_mandiri']=='b' or $cni['belajar_mandiri']=='B') { $sj=$sj+3;   }
			  if($cni['belajar_mandiri']=='c' or $cni['belajar_mandiri']=='C') { $sj=$sj+2;  }
			  if($cni['belajar_mandiri']=='d' or $cni['belajar_mandiri']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar_mandiri']=='a' or $cni['belajar_mandiri']=='A') { $sj=$sj+4;   }
			  if($cni['belajar_mandiri']=='b' or $cni['belajar_mandiri']=='B') { $sj=$sj+3;   }
			  if($cni['belajar_mandiri']=='c' or $cni['belajar_mandiri']=='C') { $sj=$sj+2;  }
			  if($cni['belajar_mandiri']=='d' or $cni['belajar_mandiri']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar_mandiri']=='a' or $cni['belajar_mandiri']=='A') { $sj=$sj+4;   }
			  if($cni['belajar_mandiri']=='b' or $cni['belajar_mandiri']=='B') { $sj=$sj+3;   }
			  if($cni['belajar_mandiri']=='c' or $cni['belajar_mandiri']=='C') { $sj=$sj+2;  }
			  if($cni['belajar_mandiri']=='d' or $cni['belajar_mandiri']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar_mandiri']=='a' or $cni['belajar_mandiri']=='A') { $sj=$sj+4;   }
			  if($cni['belajar_mandiri']=='b' or $cni['belajar_mandiri']=='B') { $sj=$sj+3;   }
			  if($cni['belajar_mandiri']=='c' or $cni['belajar_mandiri']=='C') { $sj=$sj+2;  }
			  if($cni['belajar_mandiri']=='d' or $cni['belajar_mandiri']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar_mandiri']=='a' or $cni['belajar_mandiri']=='A') { $sj=$sj+4;   }
			  if($cni['belajar_mandiri']=='b' or $cni['belajar_mandiri']=='B') { $sj=$sj+3;   }
			  if($cni['belajar_mandiri']=='c' or $cni['belajar_mandiri']=='C') { $sj=$sj+2;  }
			  if($cni['belajar_mandiri']=='d' or $cni['belajar_mandiri']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar_mandiri']=='a' or $cni['belajar_mandiri']=='A') { $sj=$sj+4;   }
			  if($cni['belajar_mandiri']=='b' or $cni['belajar_mandiri']=='B') { $sj=$sj+3;   }
			  if($cni['belajar_mandiri']=='c' or $cni['belajar_mandiri']=='C') { $sj=$sj+2;  }
			  if($cni['belajar_mandiri']=='d' or $cni['belajar_mandiri']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar_mandiri']=='a' or $cni['belajar_mandiri']=='A') { $sj=$sj+4;   }
			  if($cni['belajar_mandiri']=='b' or $cni['belajar_mandiri']=='B') { $sj=$sj+3;   }
			  if($cni['belajar_mandiri']=='c' or $cni['belajar_mandiri']=='C') { $sj=$sj+2;  }
			  if($cni['belajar_mandiri']=='d' or $cni['belajar_mandiri']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar_mandiri']=='a' or $cni['belajar_mandiri']=='A') { $sj=$sj+4;   }
			  if($cni['belajar_mandiri']=='b' or $cni['belajar_mandiri']=='B') { $sj=$sj+3;   }
			  if($cni['belajar_mandiri']=='c' or $cni['belajar_mandiri']=='C') { $sj=$sj+2;  }
			  if($cni['belajar_mandiri']=='d' or $cni['belajar_mandiri']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar_mandiri']=='a' or $cni['belajar_mandiri']=='A') { $sj=$sj+4;   }
			  if($cni['belajar_mandiri']=='b' or $cni['belajar_mandiri']=='B') { $sj=$sj+3;   }
			  if($cni['belajar_mandiri']=='c' or $cni['belajar_mandiri']=='C') { $sj=$sj+2;  }
			  if($cni['belajar_mandiri']=='d' or $cni['belajar_mandiri']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar_mandiri']=='a' or $cni['belajar_mandiri']=='A') { $sj=$sj+4;   }
			  if($cni['belajar_mandiri']=='b' or $cni['belajar_mandiri']=='B') { $sj=$sj+3;   }
			  if($cni['belajar_mandiri']=='c' or $cni['belajar_mandiri']=='C') { $sj=$sj+2;  }
			  if($cni['belajar_mandiri']=='d' or $cni['belajar_mandiri']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><div align="center">Disiplin berbahasa inggris</div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berbahasa_inggris']=='a' or $cni['berbahasa_inggris']=='A') { $sj=$sj+4;   }
			  if($cni['berbahasa_inggris']=='b' or $cni['berbahasa_inggris']=='B') { $sj=$sj+3;   }
			  if($cni['berbahasa_inggris']=='c' or $cni['berbahasa_inggris']=='C') { $sj=$sj+2;  }
			  if($cni['berbahasa_inggris']=='d' or $cni['berbahasa_inggris']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berbahasa_inggris']=='a' or $cni['berbahasa_inggris']=='A') { $sj=$sj+4;   }
			  if($cni['berbahasa_inggris']=='b' or $cni['berbahasa_inggris']=='B') { $sj=$sj+3;   }
			  if($cni['berbahasa_inggris']=='c' or $cni['berbahasa_inggris']=='C') { $sj=$sj+2;  }
			  if($cni['berbahasa_inggris']=='d' or $cni['berbahasa_inggris']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berbahasa_inggris']=='a' or $cni['berbahasa_inggris']=='A') { $sj=$sj+4;   }
			  if($cni['berbahasa_inggris']=='b' or $cni['berbahasa_inggris']=='B') { $sj=$sj+3;   }
			  if($cni['berbahasa_inggris']=='c' or $cni['berbahasa_inggris']=='C') { $sj=$sj+2;  }
			  if($cni['berbahasa_inggris']=='d' or $cni['berbahasa_inggris']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIID' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berbahasa_inggris']=='a' or $cni['berbahasa_inggris']=='A') { $sj=$sj+4;   }
			  if($cni['berbahasa_inggris']=='b' or $cni['berbahasa_inggris']=='B') { $sj=$sj+3;   }
			  if($cni['berbahasa_inggris']=='c' or $cni['berbahasa_inggris']=='C') { $sj=$sj+2;  }
			  if($cni['berbahasa_inggris']=='d' or $cni['berbahasa_inggris']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berbahasa_inggris']=='a' or $cni['berbahasa_inggris']=='A') { $sj=$sj+4;   }
			  if($cni['berbahasa_inggris']=='b' or $cni['berbahasa_inggris']=='B') { $sj=$sj+3;   }
			  if($cni['berbahasa_inggris']=='c' or $cni['berbahasa_inggris']=='C') { $sj=$sj+2;  }
			  if($cni['berbahasa_inggris']=='d' or $cni['berbahasa_inggris']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berbahasa_inggris']=='a' or $cni['berbahasa_inggris']=='A') { $sj=$sj+4;   }
			  if($cni['berbahasa_inggris']=='b' or $cni['berbahasa_inggris']=='B') { $sj=$sj+3;   }
			  if($cni['berbahasa_inggris']=='c' or $cni['berbahasa_inggris']=='C') { $sj=$sj+2;  }
			  if($cni['berbahasa_inggris']=='d' or $cni['berbahasa_inggris']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berbahasa_inggris']=='a' or $cni['berbahasa_inggris']=='A') { $sj=$sj+4;   }
			  if($cni['berbahasa_inggris']=='b' or $cni['berbahasa_inggris']=='B') { $sj=$sj+3;   }
			  if($cni['berbahasa_inggris']=='c' or $cni['berbahasa_inggris']=='C') { $sj=$sj+2;  }
			  if($cni['berbahasa_inggris']=='d' or $cni['berbahasa_inggris']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berbahasa_inggris']=='a' or $cni['berbahasa_inggris']=='A') { $sj=$sj+4;   }
			  if($cni['berbahasa_inggris']=='b' or $cni['berbahasa_inggris']=='B') { $sj=$sj+3;   }
			  if($cni['berbahasa_inggris']=='c' or $cni['berbahasa_inggris']=='C') { $sj=$sj+2;  }
			  if($cni['berbahasa_inggris']=='d' or $cni['berbahasa_inggris']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berbahasa_inggris']=='a' or $cni['berbahasa_inggris']=='A') { $sj=$sj+4;   }
			  if($cni['berbahasa_inggris']=='b' or $cni['berbahasa_inggris']=='B') { $sj=$sj+3;   }
			  if($cni['berbahasa_inggris']=='c' or $cni['berbahasa_inggris']=='C') { $sj=$sj+2;  }
			  if($cni['berbahasa_inggris']=='d' or $cni['berbahasa_inggris']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berbahasa_inggris']=='a' or $cni['berbahasa_inggris']=='A') { $sj=$sj+4;   }
			  if($cni['berbahasa_inggris']=='b' or $cni['berbahasa_inggris']=='B') { $sj=$sj+3;   }
			  if($cni['berbahasa_inggris']=='c' or $cni['berbahasa_inggris']=='C') { $sj=$sj+2;  }
			  if($cni['berbahasa_inggris']=='d' or $cni['berbahasa_inggris']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berbahasa_inggris']=='a' or $cni['berbahasa_inggris']=='A') { $sj=$sj+4;   }
			  if($cni['berbahasa_inggris']=='b' or $cni['berbahasa_inggris']=='B') { $sj=$sj+3;   }
			  if($cni['berbahasa_inggris']=='c' or $cni['berbahasa_inggris']=='C') { $sj=$sj+2;  }
			  if($cni['berbahasa_inggris']=='d' or $cni['berbahasa_inggris']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berbahasa_inggris']=='a' or $cni['berbahasa_inggris']=='A') { $sj=$sj+4;   }
			  if($cni['berbahasa_inggris']=='b' or $cni['berbahasa_inggris']=='B') { $sj=$sj+3;   }
			  if($cni['berbahasa_inggris']=='c' or $cni['berbahasa_inggris']=='C') { $sj=$sj+2;  }
			  if($cni['berbahasa_inggris']=='d' or $cni['berbahasa_inggris']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berbahasa_inggris']=='a' or $cni['berbahasa_inggris']=='A') { $sj=$sj+4;   }
			  if($cni['berbahasa_inggris']=='b' or $cni['berbahasa_inggris']=='B') { $sj=$sj+3;   }
			  if($cni['berbahasa_inggris']=='c' or $cni['berbahasa_inggris']=='C') { $sj=$sj+2;  }
			  if($cni['berbahasa_inggris']=='d' or $cni['berbahasa_inggris']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berbahasa_inggris']=='a' or $cni['berbahasa_inggris']=='A') { $sj=$sj+4;   }
			  if($cni['berbahasa_inggris']=='b' or $cni['berbahasa_inggris']=='B') { $sj=$sj+3;   }
			  if($cni['berbahasa_inggris']=='c' or $cni['berbahasa_inggris']=='C') { $sj=$sj+2;  }
			  if($cni['berbahasa_inggris']=='d' or $cni['berbahasa_inggris']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berbahasa_inggris']=='a' or $cni['berbahasa_inggris']=='A') { $sj=$sj+4;   }
			  if($cni['berbahasa_inggris']=='b' or $cni['berbahasa_inggris']=='B') { $sj=$sj+3;   }
			  if($cni['berbahasa_inggris']=='c' or $cni['berbahasa_inggris']=='C') { $sj=$sj+2;  }
			  if($cni['berbahasa_inggris']=='d' or $cni['berbahasa_inggris']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berbahasa_inggris']=='a' or $cni['berbahasa_inggris']=='A') { $sj=$sj+4;   }
			  if($cni['berbahasa_inggris']=='b' or $cni['berbahasa_inggris']=='B') { $sj=$sj+3;   }
			  if($cni['berbahasa_inggris']=='c' or $cni['berbahasa_inggris']=='C') { $sj=$sj+2;  }
			  if($cni['berbahasa_inggris']=='d' or $cni['berbahasa_inggris']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><div align="center">Disiplin mengikuti kegiatan belajar malam</div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar_malam']=='a' or $cni['belajar_malam']=='A') { $sj=$sj+4;   }
			  if($cni['belajar_malam']=='b' or $cni['belajar_malam']=='B') { $sj=$sj+3;   }
			  if($cni['belajar_malam']=='c' or $cni['belajar_malam']=='C') { $sj=$sj+2;  }
			  if($cni['belajar_malam']=='d' or $cni['belajar_malam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar_malam']=='a' or $cni['belajar_malam']=='A') { $sj=$sj+4;   }
			  if($cni['belajar_malam']=='b' or $cni['belajar_malam']=='B') { $sj=$sj+3;   }
			  if($cni['belajar_malam']=='c' or $cni['belajar_malam']=='C') { $sj=$sj+2;  }
			  if($cni['belajar_malam']=='d' or $cni['belajar_malam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar_malam']=='a' or $cni['belajar_malam']=='A') { $sj=$sj+4;   }
			  if($cni['belajar_malam']=='b' or $cni['belajar_malam']=='B') { $sj=$sj+3;   }
			  if($cni['belajar_malam']=='c' or $cni['belajar_malam']=='C') { $sj=$sj+2;  }
			  if($cni['belajar_malam']=='d' or $cni['belajar_malam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIID' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar_malam']=='a' or $cni['belajar_malam']=='A') { $sj=$sj+4;   }
			  if($cni['belajar_malam']=='b' or $cni['belajar_malam']=='B') { $sj=$sj+3;   }
			  if($cni['belajar_malam']=='c' or $cni['belajar_malam']=='C') { $sj=$sj+2;  }
			  if($cni['belajar_malam']=='d' or $cni['belajar_malam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar_malam']=='a' or $cni['belajar_malam']=='A') { $sj=$sj+4;   }
			  if($cni['belajar_malam']=='b' or $cni['belajar_malam']=='B') { $sj=$sj+3;   }
			  if($cni['belajar_malam']=='c' or $cni['belajar_malam']=='C') { $sj=$sj+2;  }
			  if($cni['belajar_malam']=='d' or $cni['belajar_malam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar_malam']=='a' or $cni['belajar_malam']=='A') { $sj=$sj+4;   }
			  if($cni['belajar_malam']=='b' or $cni['belajar_malam']=='B') { $sj=$sj+3;   }
			  if($cni['belajar_malam']=='c' or $cni['belajar_malam']=='C') { $sj=$sj+2;  }
			  if($cni['belajar_malam']=='d' or $cni['belajar_malam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar_malam']=='a' or $cni['belajar_malam']=='A') { $sj=$sj+4;   }
			  if($cni['belajar_malam']=='b' or $cni['belajar_malam']=='B') { $sj=$sj+3;   }
			  if($cni['belajar_malam']=='c' or $cni['belajar_malam']=='C') { $sj=$sj+2;  }
			  if($cni['belajar_malam']=='d' or $cni['belajar_malam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar_malam']=='a' or $cni['belajar_malam']=='A') { $sj=$sj+4;   }
			  if($cni['belajar_malam']=='b' or $cni['belajar_malam']=='B') { $sj=$sj+3;   }
			  if($cni['belajar_malam']=='c' or $cni['belajar_malam']=='C') { $sj=$sj+2;  }
			  if($cni['belajar_malam']=='d' or $cni['belajar_malam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar_malam']=='a' or $cni['belajar_malam']=='A') { $sj=$sj+4;   }
			  if($cni['belajar_malam']=='b' or $cni['belajar_malam']=='B') { $sj=$sj+3;   }
			  if($cni['belajar_malam']=='c' or $cni['belajar_malam']=='C') { $sj=$sj+2;  }
			  if($cni['belajar_malam']=='d' or $cni['belajar_malam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar_malam']=='a' or $cni['belajar_malam']=='A') { $sj=$sj+4;   }
			  if($cni['belajar_malam']=='b' or $cni['belajar_malam']=='B') { $sj=$sj+3;   }
			  if($cni['belajar_malam']=='c' or $cni['belajar_malam']=='C') { $sj=$sj+2;  }
			  if($cni['belajar_malam']=='d' or $cni['belajar_malam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar_malam']=='a' or $cni['belajar_malam']=='A') { $sj=$sj+4;   }
			  if($cni['belajar_malam']=='b' or $cni['belajar_malam']=='B') { $sj=$sj+3;   }
			  if($cni['belajar_malam']=='c' or $cni['belajar_malam']=='C') { $sj=$sj+2;  }
			  if($cni['belajar_malam']=='d' or $cni['belajar_malam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar_malam']=='a' or $cni['belajar_malam']=='A') { $sj=$sj+4;   }
			  if($cni['belajar_malam']=='b' or $cni['belajar_malam']=='B') { $sj=$sj+3;   }
			  if($cni['belajar_malam']=='c' or $cni['belajar_malam']=='C') { $sj=$sj+2;  }
			  if($cni['belajar_malam']=='d' or $cni['belajar_malam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar_malam']=='a' or $cni['belajar_malam']=='A') { $sj=$sj+4;   }
			  if($cni['belajar_malam']=='b' or $cni['belajar_malam']=='B') { $sj=$sj+3;   }
			  if($cni['belajar_malam']=='c' or $cni['belajar_malam']=='C') { $sj=$sj+2;  }
			  if($cni['belajar_malam']=='d' or $cni['belajar_malam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar_malam']=='a' or $cni['belajar_malam']=='A') { $sj=$sj+4;   }
			  if($cni['belajar_malam']=='b' or $cni['belajar_malam']=='B') { $sj=$sj+3;   }
			  if($cni['belajar_malam']=='c' or $cni['belajar_malam']=='C') { $sj=$sj+2;  }
			  if($cni['belajar_malam']=='d' or $cni['belajar_malam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar_malam']=='a' or $cni['belajar_malam']=='A') { $sj=$sj+4;   }
			  if($cni['belajar_malam']=='b' or $cni['belajar_malam']=='B') { $sj=$sj+3;   }
			  if($cni['belajar_malam']=='c' or $cni['belajar_malam']=='C') { $sj=$sj+2;  }
			  if($cni['belajar_malam']=='d' or $cni['belajar_malam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['belajar_malam']=='a' or $cni['belajar_malam']=='A') { $sj=$sj+4;   }
			  if($cni['belajar_malam']=='b' or $cni['belajar_malam']=='B') { $sj=$sj+3;   }
			  if($cni['belajar_malam']=='c' or $cni['belajar_malam']=='C') { $sj=$sj+2;  }
			  if($cni['belajar_malam']=='d' or $cni['belajar_malam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><div align="center">Disiplin berbahasa arab</div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berbahasa_arab']=='a' or $cni['berbahasa_arab']=='A') { $sj=$sj+4;   }
			  if($cni['berbahasa_arab']=='b' or $cni['berbahasa_arab']=='B') { $sj=$sj+3;   }
			  if($cni['berbahasa_arab']=='c' or $cni['berbahasa_arab']=='C') { $sj=$sj+2;  }
			  if($cni['berbahasa_arab']=='d' or $cni['berbahasa_arab']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berbahasa_arab']=='a' or $cni['berbahasa_arab']=='A') { $sj=$sj+4;   }
			  if($cni['berbahasa_arab']=='b' or $cni['berbahasa_arab']=='B') { $sj=$sj+3;   }
			  if($cni['berbahasa_arab']=='c' or $cni['berbahasa_arab']=='C') { $sj=$sj+2;  }
			  if($cni['berbahasa_arab']=='d' or $cni['berbahasa_arab']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berbahasa_arab']=='a' or $cni['berbahasa_arab']=='A') { $sj=$sj+4;   }
			  if($cni['berbahasa_arab']=='b' or $cni['berbahasa_arab']=='B') { $sj=$sj+3;   }
			  if($cni['berbahasa_arab']=='c' or $cni['berbahasa_arab']=='C') { $sj=$sj+2;  }
			  if($cni['berbahasa_arab']=='d' or $cni['berbahasa_arab']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIID' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berbahasa_arab']=='a' or $cni['berbahasa_arab']=='A') { $sj=$sj+4;   }
			  if($cni['berbahasa_arab']=='b' or $cni['berbahasa_arab']=='B') { $sj=$sj+3;   }
			  if($cni['berbahasa_arab']=='c' or $cni['berbahasa_arab']=='C') { $sj=$sj+2;  }
			  if($cni['berbahasa_arab']=='d' or $cni['berbahasa_arab']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berbahasa_arab']=='a' or $cni['berbahasa_arab']=='A') { $sj=$sj+4;   }
			  if($cni['berbahasa_arab']=='b' or $cni['berbahasa_arab']=='B') { $sj=$sj+3;   }
			  if($cni['berbahasa_arab']=='c' or $cni['berbahasa_arab']=='C') { $sj=$sj+2;  }
			  if($cni['berbahasa_arab']=='d' or $cni['berbahasa_arab']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berbahasa_arab']=='a' or $cni['berbahasa_arab']=='A') { $sj=$sj+4;   }
			  if($cni['berbahasa_arab']=='b' or $cni['berbahasa_arab']=='B') { $sj=$sj+3;   }
			  if($cni['berbahasa_arab']=='c' or $cni['berbahasa_arab']=='C') { $sj=$sj+2;  }
			  if($cni['berbahasa_arab']=='d' or $cni['berbahasa_arab']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berbahasa_arab']=='a' or $cni['berbahasa_arab']=='A') { $sj=$sj+4;   }
			  if($cni['berbahasa_arab']=='b' or $cni['berbahasa_arab']=='B') { $sj=$sj+3;   }
			  if($cni['berbahasa_arab']=='c' or $cni['berbahasa_arab']=='C') { $sj=$sj+2;  }
			  if($cni['berbahasa_arab']=='d' or $cni['berbahasa_arab']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berbahasa_arab']=='a' or $cni['berbahasa_arab']=='A') { $sj=$sj+4;   }
			  if($cni['berbahasa_arab']=='b' or $cni['berbahasa_arab']=='B') { $sj=$sj+3;   }
			  if($cni['berbahasa_arab']=='c' or $cni['berbahasa_arab']=='C') { $sj=$sj+2;  }
			  if($cni['berbahasa_arab']=='d' or $cni['berbahasa_arab']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berbahasa_arab']=='a' or $cni['berbahasa_arab']=='A') { $sj=$sj+4;   }
			  if($cni['berbahasa_arab']=='b' or $cni['berbahasa_arab']=='B') { $sj=$sj+3;   }
			  if($cni['berbahasa_arab']=='c' or $cni['berbahasa_arab']=='C') { $sj=$sj+2;  }
			  if($cni['berbahasa_arab']=='d' or $cni['berbahasa_arab']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berbahasa_arab']=='a' or $cni['berbahasa_arab']=='A') { $sj=$sj+4;   }
			  if($cni['berbahasa_arab']=='b' or $cni['berbahasa_arab']=='B') { $sj=$sj+3;   }
			  if($cni['berbahasa_arab']=='c' or $cni['berbahasa_arab']=='C') { $sj=$sj+2;  }
			  if($cni['berbahasa_arab']=='d' or $cni['berbahasa_arab']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berbahasa_arab']=='a' or $cni['berbahasa_arab']=='A') { $sj=$sj+4;   }
			  if($cni['berbahasa_arab']=='b' or $cni['berbahasa_arab']=='B') { $sj=$sj+3;   }
			  if($cni['berbahasa_arab']=='c' or $cni['berbahasa_arab']=='C') { $sj=$sj+2;  }
			  if($cni['berbahasa_arab']=='d' or $cni['berbahasa_arab']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berbahasa_arab']=='a' or $cni['berbahasa_arab']=='A') { $sj=$sj+4;   }
			  if($cni['berbahasa_arab']=='b' or $cni['berbahasa_arab']=='B') { $sj=$sj+3;   }
			  if($cni['berbahasa_arab']=='c' or $cni['berbahasa_arab']=='C') { $sj=$sj+2;  }
			  if($cni['berbahasa_arab']=='d' or $cni['berbahasa_arab']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berbahasa_arab']=='a' or $cni['berbahasa_arab']=='A') { $sj=$sj+4;   }
			  if($cni['berbahasa_arab']=='b' or $cni['berbahasa_arab']=='B') { $sj=$sj+3;   }
			  if($cni['berbahasa_arab']=='c' or $cni['berbahasa_arab']=='C') { $sj=$sj+2;  }
			  if($cni['berbahasa_arab']=='d' or $cni['berbahasa_arab']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berbahasa_arab']=='a' or $cni['berbahasa_arab']=='A') { $sj=$sj+4;   }
			  if($cni['berbahasa_arab']=='b' or $cni['berbahasa_arab']=='B') { $sj=$sj+3;   }
			  if($cni['berbahasa_arab']=='c' or $cni['berbahasa_arab']=='C') { $sj=$sj+2;  }
			  if($cni['berbahasa_arab']=='d' or $cni['berbahasa_arab']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berbahasa_arab']=='a' or $cni['berbahasa_arab']=='A') { $sj=$sj+4;   }
			  if($cni['berbahasa_arab']=='b' or $cni['berbahasa_arab']=='B') { $sj=$sj+3;   }
			  if($cni['berbahasa_arab']=='c' or $cni['berbahasa_arab']=='C') { $sj=$sj+2;  }
			  if($cni['berbahasa_arab']=='d' or $cni['berbahasa_arab']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['berbahasa_arab']=='a' or $cni['berbahasa_arab']=='A') { $sj=$sj+4;   }
			  if($cni['berbahasa_arab']=='b' or $cni['berbahasa_arab']=='B') { $sj=$sj+3;   }
			  if($cni['berbahasa_arab']=='c' or $cni['berbahasa_arab']=='C') { $sj=$sj+2;  }
			  if($cni['berbahasa_arab']=='d' or $cni['berbahasa_arab']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><div align="center">Disiplin Tidur</div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['tidur']=='a' or $cni['tidur']=='A') { $sj=$sj+4;   }
			  if($cni['tidur']=='b' or $cni['tidur']=='B') { $sj=$sj+3;   }
			  if($cni['tidur']=='c' or $cni['tidur']=='C') { $sj=$sj+2;  }
			  if($cni['tidur']=='d' or $cni['tidur']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['tidur']=='a' or $cni['tidur']=='A') { $sj=$sj+4;   }
			  if($cni['tidur']=='b' or $cni['tidur']=='B') { $sj=$sj+3;   }
			  if($cni['tidur']=='c' or $cni['tidur']=='C') { $sj=$sj+2;  }
			  if($cni['tidur']=='d' or $cni['tidur']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['tidur']=='a' or $cni['tidur']=='A') { $sj=$sj+4;   }
			  if($cni['tidur']=='b' or $cni['tidur']=='B') { $sj=$sj+3;   }
			  if($cni['tidur']=='c' or $cni['tidur']=='C') { $sj=$sj+2;  }
			  if($cni['tidur']=='d' or $cni['tidur']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIID' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['tidur']=='a' or $cni['tidur']=='A') { $sj=$sj+4;   }
			  if($cni['tidur']=='b' or $cni['tidur']=='B') { $sj=$sj+3;   }
			  if($cni['tidur']=='c' or $cni['tidur']=='C') { $sj=$sj+2;  }
			  if($cni['tidur']=='d' or $cni['tidur']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['tidur']=='a' or $cni['tidur']=='A') { $sj=$sj+4;   }
			  if($cni['tidur']=='b' or $cni['tidur']=='B') { $sj=$sj+3;   }
			  if($cni['tidur']=='c' or $cni['tidur']=='C') { $sj=$sj+2;  }
			  if($cni['tidur']=='d' or $cni['tidur']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['tidur']=='a' or $cni['tidur']=='A') { $sj=$sj+4;   }
			  if($cni['tidur']=='b' or $cni['tidur']=='B') { $sj=$sj+3;   }
			  if($cni['tidur']=='c' or $cni['tidur']=='C') { $sj=$sj+2;  }
			  if($cni['tidur']=='d' or $cni['tidur']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['tidur']=='a' or $cni['tidur']=='A') { $sj=$sj+4;   }
			  if($cni['tidur']=='b' or $cni['tidur']=='B') { $sj=$sj+3;   }
			  if($cni['tidur']=='c' or $cni['tidur']=='C') { $sj=$sj+2;  }
			  if($cni['tidur']=='d' or $cni['tidur']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['tidur']=='a' or $cni['tidur']=='A') { $sj=$sj+4;   }
			  if($cni['tidur']=='b' or $cni['tidur']=='B') { $sj=$sj+3;   }
			  if($cni['tidur']=='c' or $cni['tidur']=='C') { $sj=$sj+2;  }
			  if($cni['tidur']=='d' or $cni['tidur']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['tidur']=='a' or $cni['tidur']=='A') { $sj=$sj+4;   }
			  if($cni['tidur']=='b' or $cni['tidur']=='B') { $sj=$sj+3;   }
			  if($cni['tidur']=='c' or $cni['tidur']=='C') { $sj=$sj+2;  }
			  if($cni['tidur']=='d' or $cni['tidur']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['tidur']=='a' or $cni['tidur']=='A') { $sj=$sj+4;   }
			  if($cni['tidur']=='b' or $cni['tidur']=='B') { $sj=$sj+3;   }
			  if($cni['tidur']=='c' or $cni['tidur']=='C') { $sj=$sj+2;  }
			  if($cni['tidur']=='d' or $cni['tidur']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['tidur']=='a' or $cni['tidur']=='A') { $sj=$sj+4;   }
			  if($cni['tidur']=='b' or $cni['tidur']=='B') { $sj=$sj+3;   }
			  if($cni['tidur']=='c' or $cni['tidur']=='C') { $sj=$sj+2;  }
			  if($cni['tidur']=='d' or $cni['tidur']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['tidur']=='a' or $cni['tidur']=='A') { $sj=$sj+4;   }
			  if($cni['tidur']=='b' or $cni['tidur']=='B') { $sj=$sj+3;   }
			  if($cni['tidur']=='c' or $cni['tidur']=='C') { $sj=$sj+2;  }
			  if($cni['tidur']=='d' or $cni['tidur']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['tidur']=='a' or $cni['tidur']=='A') { $sj=$sj+4;   }
			  if($cni['tidur']=='b' or $cni['tidur']=='B') { $sj=$sj+3;   }
			  if($cni['tidur']=='c' or $cni['tidur']=='C') { $sj=$sj+2;  }
			  if($cni['tidur']=='d' or $cni['tidur']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['tidur']=='a' or $cni['tidur']=='A') { $sj=$sj+4;   }
			  if($cni['tidur']=='b' or $cni['tidur']=='B') { $sj=$sj+3;   }
			  if($cni['tidur']=='c' or $cni['tidur']=='C') { $sj=$sj+2;  }
			  if($cni['tidur']=='d' or $cni['tidur']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['tidur']=='a' or $cni['tidur']=='A') { $sj=$sj+4;   }
			  if($cni['tidur']=='b' or $cni['tidur']=='B') { $sj=$sj+3;   }
			  if($cni['tidur']=='c' or $cni['tidur']=='C') { $sj=$sj+2;  }
			  if($cni['tidur']=='d' or $cni['tidur']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['tidur']=='a' or $cni['tidur']=='A') { $sj=$sj+4;   }
			  if($cni['tidur']=='b' or $cni['tidur']=='B') { $sj=$sj+3;   }
			  if($cni['tidur']=='c' or $cni['tidur']=='C') { $sj=$sj+2;  }
			  if($cni['tidur']=='d' or $cni['tidur']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
          </tr>
        </table></td>
        <td bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF">&nbsp;</td>
        <td bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
      <tr>
        <td height="221" valign="top" bgcolor="#FFFFFF"><table width="98%" border="1" align="right" cellpadding="2" cellspacing="0" bordercolor="#336600">
          <tr>
            <td bgcolor="#336600">&nbsp;</td>
            <td colspan="16" bgcolor="#336600"><div align="center">
                <div align="center" class="style20">Kelas</div>
            </div></td>
          </tr>
          <tr>
            <td width="33%" bgcolor="#336600"><div align="center" class="style20"><strong>KEBERSIHAN &amp; KERAPIHAN </strong></div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">VIIA</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">VIIB</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">VIIC</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">VIID</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">VIIIA</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">VIIIB</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">VIIIC</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">IXA</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">IXB</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">IXC</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">XA</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">XB</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">XIA</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">XIB</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">XIIA</div></td>
            <td width="5%" bgcolor="#336600"><div align="center" class="style22">XIIB</div></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><div align="center">Menjaga kebersihan diri </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bersih_diri']=='a' or $cni['bersih_diri']=='A') { $sj=$sj+4;   }
			  if($cni['bersih_diri']=='b' or $cni['bersih_diri']=='B') { $sj=$sj+3;   }
			  if($cni['bersih_diri']=='c' or $cni['bersih_diri']=='C') { $sj=$sj+2;  }
			  if($cni['bersih_diri']=='d' or $cni['bersih_diri']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bersih_diri']=='a' or $cni['bersih_diri']=='A') { $sj=$sj+4;   }
			  if($cni['bersih_diri']=='b' or $cni['bersih_diri']=='B') { $sj=$sj+3;   }
			  if($cni['bersih_diri']=='c' or $cni['bersih_diri']=='C') { $sj=$sj+2;  }
			  if($cni['bersih_diri']=='d' or $cni['bersih_diri']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bersih_diri']=='a' or $cni['bersih_diri']=='A') { $sj=$sj+4;   }
			  if($cni['bersih_diri']=='b' or $cni['bersih_diri']=='B') { $sj=$sj+3;   }
			  if($cni['bersih_diri']=='c' or $cni['bersih_diri']=='C') { $sj=$sj+2;  }
			  if($cni['bersih_diri']=='d' or $cni['bersih_diri']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIID' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bersih_diri']=='a' or $cni['bersih_diri']=='A') { $sj=$sj+4;   }
			  if($cni['bersih_diri']=='b' or $cni['bersih_diri']=='B') { $sj=$sj+3;   }
			  if($cni['bersih_diri']=='c' or $cni['bersih_diri']=='C') { $sj=$sj+2;  }
			  if($cni['bersih_diri']=='d' or $cni['bersih_diri']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bersih_diri']=='a' or $cni['bersih_diri']=='A') { $sj=$sj+4;   }
			  if($cni['bersih_diri']=='b' or $cni['bersih_diri']=='B') { $sj=$sj+3;   }
			  if($cni['bersih_diri']=='c' or $cni['bersih_diri']=='C') { $sj=$sj+2;  }
			  if($cni['bersih_diri']=='d' or $cni['bersih_diri']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bersih_diri']=='a' or $cni['bersih_diri']=='A') { $sj=$sj+4;   }
			  if($cni['bersih_diri']=='b' or $cni['bersih_diri']=='B') { $sj=$sj+3;   }
			  if($cni['bersih_diri']=='c' or $cni['bersih_diri']=='C') { $sj=$sj+2;  }
			  if($cni['bersih_diri']=='d' or $cni['bersih_diri']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bersih_diri']=='a' or $cni['bersih_diri']=='A') { $sj=$sj+4;   }
			  if($cni['bersih_diri']=='b' or $cni['bersih_diri']=='B') { $sj=$sj+3;   }
			  if($cni['bersih_diri']=='c' or $cni['bersih_diri']=='C') { $sj=$sj+2;  }
			  if($cni['bersih_diri']=='d' or $cni['bersih_diri']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bersih_diri']=='a' or $cni['bersih_diri']=='A') { $sj=$sj+4;   }
			  if($cni['bersih_diri']=='b' or $cni['bersih_diri']=='B') { $sj=$sj+3;   }
			  if($cni['bersih_diri']=='c' or $cni['bersih_diri']=='C') { $sj=$sj+2;  }
			  if($cni['bersih_diri']=='d' or $cni['bersih_diri']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bersih_diri']=='a' or $cni['bersih_diri']=='A') { $sj=$sj+4;   }
			  if($cni['bersih_diri']=='b' or $cni['bersih_diri']=='B') { $sj=$sj+3;   }
			  if($cni['bersih_diri']=='c' or $cni['bersih_diri']=='C') { $sj=$sj+2;  }
			  if($cni['bersih_diri']=='d' or $cni['bersih_diri']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bersih_diri']=='a' or $cni['bersih_diri']=='A') { $sj=$sj+4;   }
			  if($cni['bersih_diri']=='b' or $cni['bersih_diri']=='B') { $sj=$sj+3;   }
			  if($cni['bersih_diri']=='c' or $cni['bersih_diri']=='C') { $sj=$sj+2;  }
			  if($cni['bersih_diri']=='d' or $cni['bersih_diri']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bersih_diri']=='a' or $cni['bersih_diri']=='A') { $sj=$sj+4;   }
			  if($cni['bersih_diri']=='b' or $cni['bersih_diri']=='B') { $sj=$sj+3;   }
			  if($cni['bersih_diri']=='c' or $cni['bersih_diri']=='C') { $sj=$sj+2;  }
			  if($cni['bersih_diri']=='d' or $cni['bersih_diri']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bersih_diri']=='a' or $cni['bersih_diri']=='A') { $sj=$sj+4;   }
			  if($cni['bersih_diri']=='b' or $cni['bersih_diri']=='B') { $sj=$sj+3;   }
			  if($cni['bersih_diri']=='c' or $cni['bersih_diri']=='C') { $sj=$sj+2;  }
			  if($cni['bersih_diri']=='d' or $cni['bersih_diri']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bersih_diri']=='a' or $cni['bersih_diri']=='A') { $sj=$sj+4;   }
			  if($cni['bersih_diri']=='b' or $cni['bersih_diri']=='B') { $sj=$sj+3;   }
			  if($cni['bersih_diri']=='c' or $cni['bersih_diri']=='C') { $sj=$sj+2;  }
			  if($cni['bersih_diri']=='d' or $cni['bersih_diri']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bersih_diri']=='a' or $cni['bersih_diri']=='A') { $sj=$sj+4;   }
			  if($cni['bersih_diri']=='b' or $cni['bersih_diri']=='B') { $sj=$sj+3;   }
			  if($cni['bersih_diri']=='c' or $cni['bersih_diri']=='C') { $sj=$sj+2;  }
			  if($cni['bersih_diri']=='d' or $cni['bersih_diri']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bersih_diri']=='a' or $cni['bersih_diri']=='A') { $sj=$sj+4;   }
			  if($cni['bersih_diri']=='b' or $cni['bersih_diri']=='B') { $sj=$sj+3;   }
			  if($cni['bersih_diri']=='c' or $cni['bersih_diri']=='C') { $sj=$sj+2;  }
			  if($cni['bersih_diri']=='d' or $cni['bersih_diri']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['bersih_diri']=='a' or $cni['bersih_diri']=='A') { $sj=$sj+4;   }
			  if($cni['bersih_diri']=='b' or $cni['bersih_diri']=='B') { $sj=$sj+3;   }
			  if($cni['bersih_diri']=='c' or $cni['bersih_diri']=='C') { $sj=$sj+2;  }
			  if($cni['bersih_diri']=='d' or $cni['bersih_diri']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><div align="center">Rapi rambut dan kuku</div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_rambut_kuku']=='a' or $cni['rapi_rambut_kuku']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_rambut_kuku']=='b' or $cni['rapi_rambut_kuku']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_rambut_kuku']=='c' or $cni['rapi_rambut_kuku']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_rambut_kuku']=='d' or $cni['rapi_rambut_kuku']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_rambut_kuku']=='a' or $cni['rapi_rambut_kuku']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_rambut_kuku']=='b' or $cni['rapi_rambut_kuku']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_rambut_kuku']=='c' or $cni['rapi_rambut_kuku']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_rambut_kuku']=='d' or $cni['rapi_rambut_kuku']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_rambut_kuku']=='a' or $cni['rapi_rambut_kuku']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_rambut_kuku']=='b' or $cni['rapi_rambut_kuku']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_rambut_kuku']=='c' or $cni['rapi_rambut_kuku']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_rambut_kuku']=='d' or $cni['rapi_rambut_kuku']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIID' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_rambut_kuku']=='a' or $cni['rapi_rambut_kuku']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_rambut_kuku']=='b' or $cni['rapi_rambut_kuku']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_rambut_kuku']=='c' or $cni['rapi_rambut_kuku']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_rambut_kuku']=='d' or $cni['rapi_rambut_kuku']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_rambut_kuku']=='a' or $cni['rapi_rambut_kuku']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_rambut_kuku']=='b' or $cni['rapi_rambut_kuku']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_rambut_kuku']=='c' or $cni['rapi_rambut_kuku']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_rambut_kuku']=='d' or $cni['rapi_rambut_kuku']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_rambut_kuku']=='a' or $cni['rapi_rambut_kuku']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_rambut_kuku']=='b' or $cni['rapi_rambut_kuku']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_rambut_kuku']=='c' or $cni['rapi_rambut_kuku']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_rambut_kuku']=='d' or $cni['rapi_rambut_kuku']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_rambut_kuku']=='a' or $cni['rapi_rambut_kuku']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_rambut_kuku']=='b' or $cni['rapi_rambut_kuku']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_rambut_kuku']=='c' or $cni['rapi_rambut_kuku']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_rambut_kuku']=='d' or $cni['rapi_rambut_kuku']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_rambut_kuku']=='a' or $cni['rapi_rambut_kuku']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_rambut_kuku']=='b' or $cni['rapi_rambut_kuku']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_rambut_kuku']=='c' or $cni['rapi_rambut_kuku']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_rambut_kuku']=='d' or $cni['rapi_rambut_kuku']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_rambut_kuku']=='a' or $cni['rapi_rambut_kuku']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_rambut_kuku']=='b' or $cni['rapi_rambut_kuku']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_rambut_kuku']=='c' or $cni['rapi_rambut_kuku']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_rambut_kuku']=='d' or $cni['rapi_rambut_kuku']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_rambut_kuku']=='a' or $cni['rapi_rambut_kuku']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_rambut_kuku']=='b' or $cni['rapi_rambut_kuku']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_rambut_kuku']=='c' or $cni['rapi_rambut_kuku']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_rambut_kuku']=='d' or $cni['rapi_rambut_kuku']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_rambut_kuku']=='a' or $cni['rapi_rambut_kuku']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_rambut_kuku']=='b' or $cni['rapi_rambut_kuku']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_rambut_kuku']=='c' or $cni['rapi_rambut_kuku']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_rambut_kuku']=='d' or $cni['rapi_rambut_kuku']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_rambut_kuku']=='a' or $cni['rapi_rambut_kuku']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_rambut_kuku']=='b' or $cni['rapi_rambut_kuku']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_rambut_kuku']=='c' or $cni['rapi_rambut_kuku']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_rambut_kuku']=='d' or $cni['rapi_rambut_kuku']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_rambut_kuku']=='a' or $cni['rapi_rambut_kuku']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_rambut_kuku']=='b' or $cni['rapi_rambut_kuku']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_rambut_kuku']=='c' or $cni['rapi_rambut_kuku']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_rambut_kuku']=='d' or $cni['rapi_rambut_kuku']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_rambut_kuku']=='a' or $cni['rapi_rambut_kuku']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_rambut_kuku']=='b' or $cni['rapi_rambut_kuku']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_rambut_kuku']=='c' or $cni['rapi_rambut_kuku']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_rambut_kuku']=='d' or $cni['rapi_rambut_kuku']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_rambut_kuku']=='a' or $cni['rapi_rambut_kuku']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_rambut_kuku']=='b' or $cni['rapi_rambut_kuku']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_rambut_kuku']=='c' or $cni['rapi_rambut_kuku']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_rambut_kuku']=='d' or $cni['rapi_rambut_kuku']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_rambut_kuku']=='a' or $cni['rapi_rambut_kuku']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_rambut_kuku']=='b' or $cni['rapi_rambut_kuku']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_rambut_kuku']=='c' or $cni['rapi_rambut_kuku']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_rambut_kuku']=='d' or $cni['rapi_rambut_kuku']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><div align="center">Menjaga kebersihan kamar dan lingkungan asrama</div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kebersihan_kamar']=='a' or $cni['kebersihan_kamar']=='A') { $sj=$sj+4;   }
			  if($cni['kebersihan_kamar']=='b' or $cni['kebersihan_kamar']=='B') { $sj=$sj+3;   }
			  if($cni['kebersihan_kamar']=='c' or $cni['kebersihan_kamar']=='C') { $sj=$sj+2;  }
			  if($cni['kebersihan_kamar']=='d' or $cni['kebersihan_kamar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kebersihan_kamar']=='a' or $cni['kebersihan_kamar']=='A') { $sj=$sj+4;   }
			  if($cni['kebersihan_kamar']=='b' or $cni['kebersihan_kamar']=='B') { $sj=$sj+3;   }
			  if($cni['kebersihan_kamar']=='c' or $cni['kebersihan_kamar']=='C') { $sj=$sj+2;  }
			  if($cni['kebersihan_kamar']=='d' or $cni['kebersihan_kamar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kebersihan_kamar']=='a' or $cni['kebersihan_kamar']=='A') { $sj=$sj+4;   }
			  if($cni['kebersihan_kamar']=='b' or $cni['kebersihan_kamar']=='B') { $sj=$sj+3;   }
			  if($cni['kebersihan_kamar']=='c' or $cni['kebersihan_kamar']=='C') { $sj=$sj+2;  }
			  if($cni['kebersihan_kamar']=='d' or $cni['kebersihan_kamar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIID' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kebersihan_kamar']=='a' or $cni['kebersihan_kamar']=='A') { $sj=$sj+4;   }
			  if($cni['kebersihan_kamar']=='b' or $cni['kebersihan_kamar']=='B') { $sj=$sj+3;   }
			  if($cni['kebersihan_kamar']=='c' or $cni['kebersihan_kamar']=='C') { $sj=$sj+2;  }
			  if($cni['kebersihan_kamar']=='d' or $cni['kebersihan_kamar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kebersihan_kamar']=='a' or $cni['kebersihan_kamar']=='A') { $sj=$sj+4;   }
			  if($cni['kebersihan_kamar']=='b' or $cni['kebersihan_kamar']=='B') { $sj=$sj+3;   }
			  if($cni['kebersihan_kamar']=='c' or $cni['kebersihan_kamar']=='C') { $sj=$sj+2;  }
			  if($cni['kebersihan_kamar']=='d' or $cni['kebersihan_kamar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kebersihan_kamar']=='a' or $cni['kebersihan_kamar']=='A') { $sj=$sj+4;   }
			  if($cni['kebersihan_kamar']=='b' or $cni['kebersihan_kamar']=='B') { $sj=$sj+3;   }
			  if($cni['kebersihan_kamar']=='c' or $cni['kebersihan_kamar']=='C') { $sj=$sj+2;  }
			  if($cni['kebersihan_kamar']=='d' or $cni['kebersihan_kamar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kebersihan_kamar']=='a' or $cni['kebersihan_kamar']=='A') { $sj=$sj+4;   }
			  if($cni['kebersihan_kamar']=='b' or $cni['kebersihan_kamar']=='B') { $sj=$sj+3;   }
			  if($cni['kebersihan_kamar']=='c' or $cni['kebersihan_kamar']=='C') { $sj=$sj+2;  }
			  if($cni['kebersihan_kamar']=='d' or $cni['kebersihan_kamar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kebersihan_kamar']=='a' or $cni['kebersihan_kamar']=='A') { $sj=$sj+4;   }
			  if($cni['kebersihan_kamar']=='b' or $cni['kebersihan_kamar']=='B') { $sj=$sj+3;   }
			  if($cni['kebersihan_kamar']=='c' or $cni['kebersihan_kamar']=='C') { $sj=$sj+2;  }
			  if($cni['kebersihan_kamar']=='d' or $cni['kebersihan_kamar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kebersihan_kamar']=='a' or $cni['kebersihan_kamar']=='A') { $sj=$sj+4;   }
			  if($cni['kebersihan_kamar']=='b' or $cni['kebersihan_kamar']=='B') { $sj=$sj+3;   }
			  if($cni['kebersihan_kamar']=='c' or $cni['kebersihan_kamar']=='C') { $sj=$sj+2;  }
			  if($cni['kebersihan_kamar']=='d' or $cni['kebersihan_kamar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kebersihan_kamar']=='a' or $cni['kebersihan_kamar']=='A') { $sj=$sj+4;   }
			  if($cni['kebersihan_kamar']=='b' or $cni['kebersihan_kamar']=='B') { $sj=$sj+3;   }
			  if($cni['kebersihan_kamar']=='c' or $cni['kebersihan_kamar']=='C') { $sj=$sj+2;  }
			  if($cni['kebersihan_kamar']=='d' or $cni['kebersihan_kamar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kebersihan_kamar']=='a' or $cni['kebersihan_kamar']=='A') { $sj=$sj+4;   }
			  if($cni['kebersihan_kamar']=='b' or $cni['kebersihan_kamar']=='B') { $sj=$sj+3;   }
			  if($cni['kebersihan_kamar']=='c' or $cni['kebersihan_kamar']=='C') { $sj=$sj+2;  }
			  if($cni['kebersihan_kamar']=='d' or $cni['kebersihan_kamar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kebersihan_kamar']=='a' or $cni['kebersihan_kamar']=='A') { $sj=$sj+4;   }
			  if($cni['kebersihan_kamar']=='b' or $cni['kebersihan_kamar']=='B') { $sj=$sj+3;   }
			  if($cni['kebersihan_kamar']=='c' or $cni['kebersihan_kamar']=='C') { $sj=$sj+2;  }
			  if($cni['kebersihan_kamar']=='d' or $cni['kebersihan_kamar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kebersihan_kamar']=='a' or $cni['kebersihan_kamar']=='A') { $sj=$sj+4;   }
			  if($cni['kebersihan_kamar']=='b' or $cni['kebersihan_kamar']=='B') { $sj=$sj+3;   }
			  if($cni['kebersihan_kamar']=='c' or $cni['kebersihan_kamar']=='C') { $sj=$sj+2;  }
			  if($cni['kebersihan_kamar']=='d' or $cni['kebersihan_kamar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kebersihan_kamar']=='a' or $cni['kebersihan_kamar']=='A') { $sj=$sj+4;   }
			  if($cni['kebersihan_kamar']=='b' or $cni['kebersihan_kamar']=='B') { $sj=$sj+3;   }
			  if($cni['kebersihan_kamar']=='c' or $cni['kebersihan_kamar']=='C') { $sj=$sj+2;  }
			  if($cni['kebersihan_kamar']=='d' or $cni['kebersihan_kamar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kebersihan_kamar']=='a' or $cni['kebersihan_kamar']=='A') { $sj=$sj+4;   }
			  if($cni['kebersihan_kamar']=='b' or $cni['kebersihan_kamar']=='B') { $sj=$sj+3;   }
			  if($cni['kebersihan_kamar']=='c' or $cni['kebersihan_kamar']=='C') { $sj=$sj+2;  }
			  if($cni['kebersihan_kamar']=='d' or $cni['kebersihan_kamar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kebersihan_kamar']=='a' or $cni['kebersihan_kamar']=='A') { $sj=$sj+4;   }
			  if($cni['kebersihan_kamar']=='b' or $cni['kebersihan_kamar']=='B') { $sj=$sj+3;   }
			  if($cni['kebersihan_kamar']=='c' or $cni['kebersihan_kamar']=='C') { $sj=$sj+2;  }
			  if($cni['kebersihan_kamar']=='d' or $cni['kebersihan_kamar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><div align="center">Menjaga kerapihan kamar -&nbsp; lemari pakaian</div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kerapihan_kamar']=='a' or $cni['kerapihan_kamar']=='A') { $sj=$sj+4;   }
			  if($cni['kerapihan_kamar']=='b' or $cni['kerapihan_kamar']=='B') { $sj=$sj+3;   }
			  if($cni['kerapihan_kamar']=='c' or $cni['kerapihan_kamar']=='C') { $sj=$sj+2;  }
			  if($cni['kerapihan_kamar']=='d' or $cni['kerapihan_kamar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kerapihan_kamar']=='a' or $cni['kerapihan_kamar']=='A') { $sj=$sj+4;   }
			  if($cni['kerapihan_kamar']=='b' or $cni['kerapihan_kamar']=='B') { $sj=$sj+3;   }
			  if($cni['kerapihan_kamar']=='c' or $cni['kerapihan_kamar']=='C') { $sj=$sj+2;  }
			  if($cni['kerapihan_kamar']=='d' or $cni['kerapihan_kamar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kerapihan_kamar']=='a' or $cni['kerapihan_kamar']=='A') { $sj=$sj+4;   }
			  if($cni['kerapihan_kamar']=='b' or $cni['kerapihan_kamar']=='B') { $sj=$sj+3;   }
			  if($cni['kerapihan_kamar']=='c' or $cni['kerapihan_kamar']=='C') { $sj=$sj+2;  }
			  if($cni['kerapihan_kamar']=='d' or $cni['kerapihan_kamar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIID' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kerapihan_kamar']=='a' or $cni['kerapihan_kamar']=='A') { $sj=$sj+4;   }
			  if($cni['kerapihan_kamar']=='b' or $cni['kerapihan_kamar']=='B') { $sj=$sj+3;   }
			  if($cni['kerapihan_kamar']=='c' or $cni['kerapihan_kamar']=='C') { $sj=$sj+2;  }
			  if($cni['kerapihan_kamar']=='d' or $cni['kerapihan_kamar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kerapihan_kamar']=='a' or $cni['kerapihan_kamar']=='A') { $sj=$sj+4;   }
			  if($cni['kerapihan_kamar']=='b' or $cni['kerapihan_kamar']=='B') { $sj=$sj+3;   }
			  if($cni['kerapihan_kamar']=='c' or $cni['kerapihan_kamar']=='C') { $sj=$sj+2;  }
			  if($cni['kerapihan_kamar']=='d' or $cni['kerapihan_kamar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kerapihan_kamar']=='a' or $cni['kerapihan_kamar']=='A') { $sj=$sj+4;   }
			  if($cni['kerapihan_kamar']=='b' or $cni['kerapihan_kamar']=='B') { $sj=$sj+3;   }
			  if($cni['kerapihan_kamar']=='c' or $cni['kerapihan_kamar']=='C') { $sj=$sj+2;  }
			  if($cni['kerapihan_kamar']=='d' or $cni['kerapihan_kamar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kerapihan_kamar']=='a' or $cni['kerapihan_kamar']=='A') { $sj=$sj+4;   }
			  if($cni['kerapihan_kamar']=='b' or $cni['kerapihan_kamar']=='B') { $sj=$sj+3;   }
			  if($cni['kerapihan_kamar']=='c' or $cni['kerapihan_kamar']=='C') { $sj=$sj+2;  }
			  if($cni['kerapihan_kamar']=='d' or $cni['kerapihan_kamar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kerapihan_kamar']=='a' or $cni['kerapihan_kamar']=='A') { $sj=$sj+4;   }
			  if($cni['kerapihan_kamar']=='b' or $cni['kerapihan_kamar']=='B') { $sj=$sj+3;   }
			  if($cni['kerapihan_kamar']=='c' or $cni['kerapihan_kamar']=='C') { $sj=$sj+2;  }
			  if($cni['kerapihan_kamar']=='d' or $cni['kerapihan_kamar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kerapihan_kamar']=='a' or $cni['kerapihan_kamar']=='A') { $sj=$sj+4;   }
			  if($cni['kerapihan_kamar']=='b' or $cni['kerapihan_kamar']=='B') { $sj=$sj+3;   }
			  if($cni['kerapihan_kamar']=='c' or $cni['kerapihan_kamar']=='C') { $sj=$sj+2;  }
			  if($cni['kerapihan_kamar']=='d' or $cni['kerapihan_kamar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kerapihan_kamar']=='a' or $cni['kerapihan_kamar']=='A') { $sj=$sj+4;   }
			  if($cni['kerapihan_kamar']=='b' or $cni['kerapihan_kamar']=='B') { $sj=$sj+3;   }
			  if($cni['kerapihan_kamar']=='c' or $cni['kerapihan_kamar']=='C') { $sj=$sj+2;  }
			  if($cni['kerapihan_kamar']=='d' or $cni['kerapihan_kamar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kerapihan_kamar']=='a' or $cni['kerapihan_kamar']=='A') { $sj=$sj+4;   }
			  if($cni['kerapihan_kamar']=='b' or $cni['kerapihan_kamar']=='B') { $sj=$sj+3;   }
			  if($cni['kerapihan_kamar']=='c' or $cni['kerapihan_kamar']=='C') { $sj=$sj+2;  }
			  if($cni['kerapihan_kamar']=='d' or $cni['kerapihan_kamar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kerapihan_kamar']=='a' or $cni['kerapihan_kamar']=='A') { $sj=$sj+4;   }
			  if($cni['kerapihan_kamar']=='b' or $cni['kerapihan_kamar']=='B') { $sj=$sj+3;   }
			  if($cni['kerapihan_kamar']=='c' or $cni['kerapihan_kamar']=='C') { $sj=$sj+2;  }
			  if($cni['kerapihan_kamar']=='d' or $cni['kerapihan_kamar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kerapihan_kamar']=='a' or $cni['kerapihan_kamar']=='A') { $sj=$sj+4;   }
			  if($cni['kerapihan_kamar']=='b' or $cni['kerapihan_kamar']=='B') { $sj=$sj+3;   }
			  if($cni['kerapihan_kamar']=='c' or $cni['kerapihan_kamar']=='C') { $sj=$sj+2;  }
			  if($cni['kerapihan_kamar']=='d' or $cni['kerapihan_kamar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kerapihan_kamar']=='a' or $cni['kerapihan_kamar']=='A') { $sj=$sj+4;   }
			  if($cni['kerapihan_kamar']=='b' or $cni['kerapihan_kamar']=='B') { $sj=$sj+3;   }
			  if($cni['kerapihan_kamar']=='c' or $cni['kerapihan_kamar']=='C') { $sj=$sj+2;  }
			  if($cni['kerapihan_kamar']=='d' or $cni['kerapihan_kamar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kerapihan_kamar']=='a' or $cni['kerapihan_kamar']=='A') { $sj=$sj+4;   }
			  if($cni['kerapihan_kamar']=='b' or $cni['kerapihan_kamar']=='B') { $sj=$sj+3;   }
			  if($cni['kerapihan_kamar']=='c' or $cni['kerapihan_kamar']=='C') { $sj=$sj+2;  }
			  if($cni['kerapihan_kamar']=='d' or $cni['kerapihan_kamar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['kerapihan_kamar']=='a' or $cni['kerapihan_kamar']=='A') { $sj=$sj+4;   }
			  if($cni['kerapihan_kamar']=='b' or $cni['kerapihan_kamar']=='B') { $sj=$sj+3;   }
			  if($cni['kerapihan_kamar']=='c' or $cni['kerapihan_kamar']=='C') { $sj=$sj+2;  }
			  if($cni['kerapihan_kamar']=='d' or $cni['kerapihan_kamar']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><div align="center">Rapi dalam berseragam</div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_berseragam']=='a' or $cni['rapi_berseragam']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_berseragam']=='b' or $cni['rapi_berseragam']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_berseragam']=='c' or $cni['rapi_berseragam']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_berseragam']=='d' or $cni['rapi_berseragam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_berseragam']=='a' or $cni['rapi_berseragam']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_berseragam']=='b' or $cni['rapi_berseragam']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_berseragam']=='c' or $cni['rapi_berseragam']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_berseragam']=='d' or $cni['rapi_berseragam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_berseragam']=='a' or $cni['rapi_berseragam']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_berseragam']=='b' or $cni['rapi_berseragam']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_berseragam']=='c' or $cni['rapi_berseragam']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_berseragam']=='d' or $cni['rapi_berseragam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIID' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_berseragam']=='a' or $cni['rapi_berseragam']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_berseragam']=='b' or $cni['rapi_berseragam']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_berseragam']=='c' or $cni['rapi_berseragam']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_berseragam']=='d' or $cni['rapi_berseragam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_berseragam']=='a' or $cni['rapi_berseragam']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_berseragam']=='b' or $cni['rapi_berseragam']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_berseragam']=='c' or $cni['rapi_berseragam']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_berseragam']=='d' or $cni['rapi_berseragam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_berseragam']=='a' or $cni['rapi_berseragam']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_berseragam']=='b' or $cni['rapi_berseragam']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_berseragam']=='c' or $cni['rapi_berseragam']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_berseragam']=='d' or $cni['rapi_berseragam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_berseragam']=='a' or $cni['rapi_berseragam']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_berseragam']=='b' or $cni['rapi_berseragam']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_berseragam']=='c' or $cni['rapi_berseragam']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_berseragam']=='d' or $cni['rapi_berseragam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_berseragam']=='a' or $cni['rapi_berseragam']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_berseragam']=='b' or $cni['rapi_berseragam']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_berseragam']=='c' or $cni['rapi_berseragam']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_berseragam']=='d' or $cni['rapi_berseragam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_berseragam']=='a' or $cni['rapi_berseragam']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_berseragam']=='b' or $cni['rapi_berseragam']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_berseragam']=='c' or $cni['rapi_berseragam']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_berseragam']=='d' or $cni['rapi_berseragam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_berseragam']=='a' or $cni['rapi_berseragam']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_berseragam']=='b' or $cni['rapi_berseragam']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_berseragam']=='c' or $cni['rapi_berseragam']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_berseragam']=='d' or $cni['rapi_berseragam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_berseragam']=='a' or $cni['rapi_berseragam']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_berseragam']=='b' or $cni['rapi_berseragam']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_berseragam']=='c' or $cni['rapi_berseragam']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_berseragam']=='d' or $cni['rapi_berseragam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_berseragam']=='a' or $cni['rapi_berseragam']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_berseragam']=='b' or $cni['rapi_berseragam']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_berseragam']=='c' or $cni['rapi_berseragam']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_berseragam']=='d' or $cni['rapi_berseragam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_berseragam']=='a' or $cni['rapi_berseragam']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_berseragam']=='b' or $cni['rapi_berseragam']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_berseragam']=='c' or $cni['rapi_berseragam']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_berseragam']=='d' or $cni['rapi_berseragam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_berseragam']=='a' or $cni['rapi_berseragam']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_berseragam']=='b' or $cni['rapi_berseragam']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_berseragam']=='c' or $cni['rapi_berseragam']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_berseragam']=='d' or $cni['rapi_berseragam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_berseragam']=='a' or $cni['rapi_berseragam']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_berseragam']=='b' or $cni['rapi_berseragam']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_berseragam']=='c' or $cni['rapi_berseragam']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_berseragam']=='d' or $cni['rapi_berseragam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_berseragam']=='a' or $cni['rapi_berseragam']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_berseragam']=='b' or $cni['rapi_berseragam']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_berseragam']=='c' or $cni['rapi_berseragam']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_berseragam']=='d' or $cni['rapi_berseragam']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><div align="center">Rapi menyimpan barang-barang pribadi</div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_menyimpan_barang']=='a' or $cni['rapi_menyimpan_barang']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_menyimpan_barang']=='b' or $cni['rapi_menyimpan_barang']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_menyimpan_barang']=='c' or $cni['rapi_menyimpan_barang']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_menyimpan_barang']=='d' or $cni['rapi_menyimpan_barang']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_menyimpan_barang']=='a' or $cni['rapi_menyimpan_barang']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_menyimpan_barang']=='b' or $cni['rapi_menyimpan_barang']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_menyimpan_barang']=='c' or $cni['rapi_menyimpan_barang']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_menyimpan_barang']=='d' or $cni['rapi_menyimpan_barang']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_menyimpan_barang']=='a' or $cni['rapi_menyimpan_barang']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_menyimpan_barang']=='b' or $cni['rapi_menyimpan_barang']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_menyimpan_barang']=='c' or $cni['rapi_menyimpan_barang']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_menyimpan_barang']=='d' or $cni['rapi_menyimpan_barang']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIID' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_menyimpan_barang']=='a' or $cni['rapi_menyimpan_barang']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_menyimpan_barang']=='b' or $cni['rapi_menyimpan_barang']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_menyimpan_barang']=='c' or $cni['rapi_menyimpan_barang']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_menyimpan_barang']=='d' or $cni['rapi_menyimpan_barang']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_menyimpan_barang']=='a' or $cni['rapi_menyimpan_barang']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_menyimpan_barang']=='b' or $cni['rapi_menyimpan_barang']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_menyimpan_barang']=='c' or $cni['rapi_menyimpan_barang']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_menyimpan_barang']=='d' or $cni['rapi_menyimpan_barang']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_menyimpan_barang']=='a' or $cni['rapi_menyimpan_barang']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_menyimpan_barang']=='b' or $cni['rapi_menyimpan_barang']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_menyimpan_barang']=='c' or $cni['rapi_menyimpan_barang']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_menyimpan_barang']=='d' or $cni['rapi_menyimpan_barang']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='VIIIC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_menyimpan_barang']=='a' or $cni['rapi_menyimpan_barang']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_menyimpan_barang']=='b' or $cni['rapi_menyimpan_barang']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_menyimpan_barang']=='c' or $cni['rapi_menyimpan_barang']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_menyimpan_barang']=='d' or $cni['rapi_menyimpan_barang']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_menyimpan_barang']=='a' or $cni['rapi_menyimpan_barang']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_menyimpan_barang']=='b' or $cni['rapi_menyimpan_barang']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_menyimpan_barang']=='c' or $cni['rapi_menyimpan_barang']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_menyimpan_barang']=='d' or $cni['rapi_menyimpan_barang']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_menyimpan_barang']=='a' or $cni['rapi_menyimpan_barang']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_menyimpan_barang']=='b' or $cni['rapi_menyimpan_barang']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_menyimpan_barang']=='c' or $cni['rapi_menyimpan_barang']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_menyimpan_barang']=='d' or $cni['rapi_menyimpan_barang']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='IXC' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_menyimpan_barang']=='a' or $cni['rapi_menyimpan_barang']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_menyimpan_barang']=='b' or $cni['rapi_menyimpan_barang']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_menyimpan_barang']=='c' or $cni['rapi_menyimpan_barang']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_menyimpan_barang']=='d' or $cni['rapi_menyimpan_barang']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_menyimpan_barang']=='a' or $cni['rapi_menyimpan_barang']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_menyimpan_barang']=='b' or $cni['rapi_menyimpan_barang']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_menyimpan_barang']=='c' or $cni['rapi_menyimpan_barang']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_menyimpan_barang']=='d' or $cni['rapi_menyimpan_barang']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_menyimpan_barang']=='a' or $cni['rapi_menyimpan_barang']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_menyimpan_barang']=='b' or $cni['rapi_menyimpan_barang']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_menyimpan_barang']=='c' or $cni['rapi_menyimpan_barang']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_menyimpan_barang']=='d' or $cni['rapi_menyimpan_barang']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_menyimpan_barang']=='a' or $cni['rapi_menyimpan_barang']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_menyimpan_barang']=='b' or $cni['rapi_menyimpan_barang']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_menyimpan_barang']=='c' or $cni['rapi_menyimpan_barang']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_menyimpan_barang']=='d' or $cni['rapi_menyimpan_barang']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_menyimpan_barang']=='a' or $cni['rapi_menyimpan_barang']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_menyimpan_barang']=='b' or $cni['rapi_menyimpan_barang']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_menyimpan_barang']=='c' or $cni['rapi_menyimpan_barang']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_menyimpan_barang']=='d' or $cni['rapi_menyimpan_barang']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
                <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIA' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_menyimpan_barang']=='a' or $cni['rapi_menyimpan_barang']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_menyimpan_barang']=='b' or $cni['rapi_menyimpan_barang']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_menyimpan_barang']=='c' or $cni['rapi_menyimpan_barang']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_menyimpan_barang']=='d' or $cni['rapi_menyimpan_barang']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?   $ka=0; $kb=0; $kc=0; $kd=0;
			       $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='XIIB' AND status='a' ");
	               while($cnt=mysqli_fetch_assoc($tam)){
		$sj=0; $t_sj=0; 		   
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$cnt[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cni=mysqli_fetch_assoc($ntgs)){
		      if($cni['rapi_menyimpan_barang']=='a' or $cni['rapi_menyimpan_barang']=='A') { $sj=$sj+4;   }
			  if($cni['rapi_menyimpan_barang']=='b' or $cni['rapi_menyimpan_barang']=='B') { $sj=$sj+3;   }
			  if($cni['rapi_menyimpan_barang']=='c' or $cni['rapi_menyimpan_barang']=='C') { $sj=$sj+2;  }
			  if($cni['rapi_menyimpan_barang']=='d' or $cni['rapi_menyimpan_barang']=='D') { $sj=$sj+1;  }
		} 
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  $kd=$kd+=1;}
		}		}   
	    if($pk=="a"){ echo $ka; } 
		if($pk=="b"){ echo $kb; } 
		if($pk=="c"){ echo $kc; } 
		if($pk=="d"){ echo $kd; }  
		
			?>
            </div></td>
          </tr>
          
          
        </table></td>
        <td bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF">&nbsp;</td>
        <td bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
      
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
  </tr>
</table>


</body>
</html>