<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style4 {
	color: #FF3300;
	font-weight: bold;
}
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
.style13 {color: #FFFFFF}
.style14 {color: #000000}
.style17 {font-size: 18px}
.style18 {
	font-size: 12px;
	font-weight: bold;
}
.style19 {
	font-size: 24px;
	font-weight: bold;
	color: #FFFFFF;
}
.style20 {font-size: 18px; color: #FFFFFF; }
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
    <td colspan="4" bgcolor="#990000"><p align="center" class="style19" dir="rtl"><span dir="ltr">SORTIR NILAI KARAKTER SANTRI </span></p></td>
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
    <td width="4%"><div align="left">Kelas</div></td>
    <td colspan="2" valign="top"><select name="menu1" onchange="MM_jumpMenu('parent',this,0)">
      <option value="home.php?home=nilai&amp;dpn_n23=n23&amp;klsk=">Semua Kelas</option>
      <?
		  if($idkusr=="i"){ $wrmk="WHERE kd_kls='$idkelas' "; }else{ $wrmk="";}
	      $tampi3=mysqli_query($koneksi, "SELECT * FROM master_kelas $wrmk");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		 
	    ?>
      <option value="home.php?home=nilai&amp;dpn_n23=n23&amp;klsk=<? echo "$tp3[kd_kls]&klsk2=$tp3[kelas]"; ?>" <? if($klsk2=="$tp3[kelas]"){ echo"selected='selected'"; } ?>><? echo $tp3['kelas']; ?></option>
      <? } ?>
    </select>
      &nbsp;&nbsp;Karakter Yang Dipantau 
      <select name="select2" onchange="MM_jumpMenu('parent',this,0)">
        <option value="home.php?home=nilai&dpn_n23=n23<? echo"&klsk=$klsk&nisk=$nisk"; ?>">-</option>
        <option value="home.php?home=nilai&dpn_n23=n23<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=paa"; ?>" <? if($nlk=="paa"){ echo"selected='selected'"; } ?>>PEMBINAAN IBADAH</option>
	<option value="home.php?home=nilai&dpn_n23=n23<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=kd"; ?>" <? if($nlk=="kd"){ echo"selected='selected'"; } ?>>PEMBINAAN ADAB & AKHLAK</option>
		<option value="home.php?home=nilai&dpn_n23=n23<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=kk"; ?>" <? if($nlk=="kk"){ echo"selected='selected'"; } ?>>KEDISIPLINAN</option>
	<option value="home.php?home=nilai&dpn_n23=n23<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=kb"; ?>" <? if($nlk=="kb"){ echo"selected='selected'"; } ?>>KEBERSIHAN & KERAPIHAN</option>
      </select>      
      &nbsp;<span class="style17">|</span>&nbsp;&nbsp;Tahun Ajaran : <? echo $thaj; ?>&nbsp;&nbsp;&nbsp;&nbsp;Semester 
      : <? echo $sem; if($sem=='I')echo " (Satu)";else echo " (Dua)"; ?>&nbsp;&nbsp;&nbsp;Bulan 
      <select name="select3" onchange="MM_jumpMenu('parent',this,0)">
        <option value="home.php?home=nilai&amp;dpn_n23=n23<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=$nlk"; ?>"> - </option>
		<option value="home.php?home=nilai&amp;dpn_n23=n23<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&bl=1"; ?>" <? if($bl=="1"){ echo"selected='selected'"; } ?>> Januari </option>
		<option value="home.php?home=nilai&amp;dpn_n23=n23<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&bl=2"; ?>" <? if($bl=="2"){ echo"selected='selected'"; } ?>> Februari </option>
		<option value="home.php?home=nilai&amp;dpn_n23=n23<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&bl=3"; ?>" <? if($bl=="3"){ echo"selected='selected'"; } ?>> Maret </option>
		<option value="home.php?home=nilai&amp;dpn_n23=n23<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&bl=4"; ?>" <? if($bl=="4"){ echo"selected='selected'"; } ?>> April </option>
		<option value="home.php?home=nilai&amp;dpn_n23=n23<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&bl=5"; ?>" <? if($bl=="5"){ echo"selected='selected'"; } ?>> Mei </option>
		<option value="home.php?home=nilai&amp;dpn_n23=n23<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&bl=6"; ?> <? if($bl=="6"){ echo"selected='selected'"; } ?>"> Juni </option>
		<option value="home.php?home=nilai&amp;dpn_n23=n23<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&bl=7"; ?>" <? if($bl=="7"){ echo"selected='selected'"; } ?>> Juli </option>
		<option value="home.php?home=nilai&amp;dpn_n23=n23<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&bl=8"; ?>" <? if($bl=="8"){ echo"selected='selected'"; } ?>> Agustus </option>
		<option value="home.php?home=nilai&amp;dpn_n23=n23<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&bl=9"; ?>" <? if($bl=="9"){ echo"selected='selected'"; } ?>> September </option>
		<option value="home.php?home=nilai&amp;dpn_n23=n23<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&bl=10"; ?>" <? if($bl=="10"){ echo"selected='selected'"; } ?>> Oktober </option>
		<option value="home.php?home=nilai&amp;dpn_n23=n23<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&bl=11"; ?>" <? if($bl=="11"){ echo"selected='selected'"; } ?>> Nopember </option>
		<option value="home.php?home=nilai&amp;dpn_n23=n23<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&bl=12"; ?>" <? if($bl=="12"){ echo"selected='selected'"; } ?>> Desember </option>
      </select> 
     &nbsp; Nilai 
      <select name="select4" onchange="MM_jumpMenu('parent',this,0)">
        <option value="home.php?home=nilai&amp;dpn_n23=n23<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&nlka=$nlka&bl=$bl"; ?>"> - </option>
        <option value="home.php?home=nilai&amp;dpn_n23=n23<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&nlka=$nlka&bl=$bl&pk=a"; ?>" <? if($pk=="a"){ echo"selected='selected'"; } ?>> A </option>
        <option value="home.php?home=nilai&amp;dpn_n23=n23<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&nlka=$nlka&bl=$bl&pk=b"; ?>" <? if($pk=="b"){ echo"selected='selected'"; } ?>> B </option>
        <option value="home.php?home=nilai&amp;dpn_n23=n23<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&nlka=$nlka&bl=$bl&pk=c"; ?>" <? if($pk=="c"){ echo"selected='selected'"; } ?>> C </option>
        <option value="home.php?home=nilai&amp;dpn_n23=n23<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&nlka=$nlka&bl=$bl&pk=d"; ?>" <? if($pk=="d"){ echo"selected='selected'"; } ?>> D </option>
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
    <td valign="top">&nbsp;</td>
    <td width="21%" valign="top">&nbsp;</td>
    <td width="74%" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3" valign="top"><?
	      if($klsk!=""){ 
		  $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st FROM tb_santri WHERE kelas_st='$klsk2' AND status='a' ORDER BY nama"); }  else{ $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st FROM tb_santri WHERE kelas_st='VIIA' AND status='a' ORDER BY nama"); }
	  ?>
        <table width="100%" border="0" cellpadding="0" cellspacing="1" bordercolor="#B3CF70">
          <tr>
            <td width="75" colspan="3" bordercolor="#FFFFFF"><div align="left" class="style4">&nbsp;
                    <? 
		  if($idkusr=="i"){
		  $qku=mysqli_query($koneksi, "SELECT kd_kls,kd_gp FROM wali_kelas WHERE kd_gp='$idgurp'");
          $cqk=mysqli_fetch_assoc($qku);
		  
		  $qku2=mysqli_query($koneksi, "SELECT * FROM master_kelas WHERE kd_kls='$cqk[kd_kls]'");
          $cqk2=mysqli_fetch_assoc($qku2);
           $klsk=$cqk2['kd_kls'];
		  }
		  if($klsk!=""){ echo"Kelas : $klsk2"; }else{ ?>
              Semua Kelas
              <? }?>
            </div></td>
          </tr>
          
         
          <tr>
            <td colspan="3" bgcolor="#B3CF70" ><? if($nlk=='paa'){ ?>
              <table width="1100" height="119" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td rowspan="2" bgcolor="#999933"><div align="center" class="style18"><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">NIS</font></div></td>
                  <td rowspan="2" bgcolor="#996600"><div align="center" class="style13"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Nama 
                  Santri</font></div></td>
                  <td height="27" colspan="9" bgcolor="#660033"><div align="center" class="style20">P E M B I N A A N &nbsp; I B A D A H</div></td>
                </tr>
                
                <tr>
                  <td bgcolor="#CCCC33"><div align="center">Solat JMH </div></td>
                  <td bgcolor="#999966"><div align="center" class="style13">Solat DHA </div></td>
                  <td bgcolor="#CCCC33"><div align="center">QiyamulL</div></td>
                  <td bgcolor="#999966"><div align="center" class="style13">Solat S Rawatib </div></td>
                  <td bgcolor="#CCCC33"><div align="center">Wirid &amp; Doa </div></td>
                  <td bgcolor="#999966"><div align="center" class="style13">Shaum</div></td>
                  <td bgcolor="#CCCC33"><div align="center">Tilawa</div></td>
                  <td bgcolor="#999966"><div align="center" class="style13">Meminpin Doa </div></td>
                  <td height="19" bgcolor="#CCCC33"><div align="center">Adzan</div></td>
                </tr>
				
				
				 <?
				 $bgr=1;
		 while($tp=mysqli_fetch_assoc($tam)){
		 $cnt=mysqli_num_rows($tam);
		 $qku5=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$tp[kelas_st]'");
         $cqk5=mysqli_fetch_assoc($qku5);
		 
		 
	if($klsk!="" and $nlk=='paa'){
	$ntgs=mysqli_query($koneksi, "SELECT * FROM  tb_ibadah_asrama WHERE nis=$tp[nis] and pekan='$pk' and bulan='$bl' and semester='$sem' and thn_ajaran='$thaj' ");
	$cnt=mysqli_fetch_assoc($ntgs);
      $rk=mysqli_num_rows($ntgs);
	}  
	
	
		?>
               <form id="form1" name="form1" method="post" action="page/act_nilai_santri.php">
			    <tr bgcolor="#FFFFCC">
			      <td height="30" bgcolor="#CCCC33"><div align="center"><? echo"$tp[nis]"; ?></div></td>
			      <td>&nbsp;<? echo"$tp[nama]"; ?>
                    <input type="hidden" name="nisk" value="<? echo"$tp[nis]"; ?>" />
                    <input type="hidden" name="bulan" value="<? echo $bl; ?>" />
                    <input type="hidden" name="pekan" value="<? echo $pk; ?>" />
                    <input type="hidden" name="idkls" value="<? echo $klsk; ?>" />
                    <input type="hidden" name="klsk2" value="<? echo $klsk2; ?>" />
                    <input type="hidden" name="nlk" value="<? echo $nlk; ?>"/></td>
			      <td bgcolor="#663300"><div align="center"><font color="#FF0000" size="2">
                    <?
		$sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$tp[nis]' and bulan='$bl'");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['solat_jamaah']=='a' or $cnt['solat_jamaah']=='A') { $sj=$sj+4;   }
			  if($cnt['solat_jamaah']=='b' or $cnt['solat_jamaah']=='B') { $sj=$sj+3;   }
			  if($cnt['solat_jamaah']=='c' or $cnt['solat_jamaah']=='C') { $sj=$sj+2;  }
			  if($cnt['solat_jamaah']=='d' or $cnt['solat_jamaah']=='D') { $sj=$sj+1;  }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ echo"A"; $ka=$ka+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  echo"B"; $kb=$kb+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  echo"C"; $kc=$kc+=1;}
		if($t_sj <=1.49 and $pk=='d'){  echo"D"; $kd=$kd+=1;}
		}
		?>
                  </font></div></td>
			      <td bgcolor="#006633"><div align="center"><font color="#FF0000" size="2">
                    <?
		$sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$tp[nis]' and bulan='$bl'");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['solat_duha']=='a' or $cnt['solat_duha']=='A') { $sj=$sj+4; }
			  if($cnt['solat_duha']=='b' or $cnt['solat_duha']=='B') { $sj=$sj+3; }
			  if($cnt['solat_duha']=='c' or $cnt['solat_duha']=='C') { $sj=$sj+2; }
			  if($cnt['solat_duha']=='d' or $cnt['solat_duha']=='D') { $sj=$sj+1; }
		}
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ echo"A"; $ka2=$ka2+=1; }
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  echo"B"; $kb2=$kb2+=1; }
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  echo"C"; $kc2=$kc2+=1; }
		if($t_sj <=1.49 and $pk=='d'){  echo"D"; $kd2=$kd2+=1; }
		} 
		?>
                  </font> </div></td>
			      <td bgcolor="#663300"><div align="center"><font color="#FF0000" size="2">
                    <?
		$sj=0; $t_sj=0; 
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$tp[nis]' and bulan='$bl'");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['qiyamullail']=='a' or $cnt['qiyamullail']=='A') { $sj=$sj+4; }
			  if($cnt['qiyamullail']=='b' or $cnt['qiyamullail']=='B') { $sj=$sj+3; }
			  if($cnt['qiyamullail']=='c' or $cnt['qiyamullail']=='C') { $sj=$sj+2; }
			  if($cnt['qiyamullail']=='d' or $cnt['qiyamullail']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ echo"A"; $qa2=$qa2+=1; }
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  echo"B"; $qb2=$qb2+=1; }
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  echo"C"; $qc2=$qc2+=1;}
		if($t_sj <=1.49 and $pk=='d'){  echo"D";  $qd2=$qd2+=1;}
		}
		?>
                  </font> </div></td>
			      <td bgcolor="#006633"><div align="center"><font color="#FF0000" size="2">
                    <?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$tp[nis]' and bulan='$bl'");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['sunnah_rawatib']=='a' or $cnt['sunnah_rawatib']=='A') { $sj=$sj+4; }
			  if($cnt['sunnah_rawatib']=='b' or $cnt['sunnah_rawatib']=='B') { $sj=$sj+3; }
			  if($cnt['sunnah_rawatib']=='c' or $cnt['sunnah_rawatib']=='C') { $sj=$sj+2; }
			  if($cnt['sunnah_rawatib']=='d' or $cnt['sunnah_rawatib']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ echo"A"; $ra2=$ra2+=1; }
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  echo"B"; $rb2=$rb2+=1;}
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  echo"C"; $rc2=$rc2+=1;}
		if($t_sj <=1.49 and $pk=='d'){  echo"D"; $rd2=$rd2+=1;}
		}
		?>
                  </font> </div></td>
			      <td bgcolor="#663300"><div align="center"> <font color="#FF0000" size="2">
                    <?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$tp[nis]' and bulan='$bl'");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['wirid_doa']=='a' or $cnt['wirid_doa']=='A') { $sj=$sj+4; }
			  if($cnt['wirid_doa']=='b' or $cnt['wirid_doa']=='B') { $sj=$sj+3; }
			  if($cnt['wirid_doa']=='c' or $cnt['wirid_doa']=='C') { $sj=$sj+2; }
			  if($cnt['wirid_doa']=='d' or $cnt['wirid_doa']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ echo"A"; $wa2=$wa2+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  echo"B"; $wb2=$wb2+=1; }
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  echo"C"; $wc2=$wc2+=1; }
		if($t_sj <=1.49 and $pk=='d'){  echo"D"; $wd2=$wd2+=1; }
		}
		?>
                  </font> </div></td>
			      <td bgcolor="#006633"><div align="center"> <font color="#FF0000" size="2">
                    <?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$tp[nis]' and bulan='$bl'");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['shaum']=='a' or $cnt['shaum']=='A') { $sj=$sj+4; }
			  if($cnt['shaum']=='b' or $cnt['shaum']=='B') { $sj=$sj+3; }
			  if($cnt['shaum']=='c' or $cnt['shaum']=='C') { $sj=$sj+2; }
			  if($cnt['shaum']=='d' or $cnt['shaum']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ echo"A"; $sa2=$sa2+=1; }
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  echo"B"; $sb2=$sb2+=1; }
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  echo"C"; $sc2=$sc2+=1; }
		if($t_sj <=1.49 and $pk=='d'){  echo"D"; $sd2=$sd2+=1; }
		}
		?>
                  </font> </div></td>
			      <td bgcolor="#663300"><div align="center"> <font color="#FF0000" size="2">
                    <?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$tp[nis]' and bulan='$bl'");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['tilawa']=='a' or $cnt['tilawa']=='A') { $sj=$sj+4; }
			  if($cnt['tilawa']=='b' or $cnt['tilawa']=='B') { $sj=$sj+3; }
			  if($cnt['tilawa']=='c' or $cnt['tilawa']=='C') { $sj=$sj+2; }
			  if($cnt['tilawa']=='d' or $cnt['tilawa']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ echo"A"; $ta2=$ta2+=1;  }
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  echo"B"; $tb2=$tb2+=1; }
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  echo"C"; $tc2=$tc2+=1; }
		if($t_sj <=1.49 and $pk=='d'){  echo"D";  $td2=$td2+=1; }
		}
		?>
                  </font> </div></td>
			      <td bgcolor="#006633"><div align="center"> <font color="#FF0000" size="2">
                    <?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$tp[nis]' and bulan='$bl'");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['memmimpin_wirid']=='a' or $cnt['memmimpin_wirid']=='A') { $sj=$sj+4; }
			  if($cnt['memmimpin_wirid']=='b' or $cnt['memmimpin_wirid']=='B') { $sj=$sj+3; }
			  if($cnt['memmimpin_wirid']=='c' or $cnt['memmimpin_wirid']=='C') { $sj=$sj+2; }
			  if($cnt['memmimpin_wirid']=='d' or $cnt['memmimpin_wirid']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ echo"A"; $ma2=$ma2+=1; }
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  echo"B"; $mb2=$mb2+=1; }
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  echo"C"; $mc2=$mc2+=1;}
		if($t_sj <=1.49 and $pk=='d'){  echo"D"; $md2=$md2+=1; }
		}
		?>
                  </font> </div></td>
			      <td bgcolor="#663300"><div align="center"><font color="#FF0000" size="2">
                    <?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$tp[nis]' and bulan='$bl'");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['adzan']=='a' or $cnt['adzan']=='A') { $sj=$sj+4; }
			  if($cnt['adzan']=='b' or $cnt['adzan']=='B') { $sj=$sj+3; }
			  if($cnt['adzan']=='c' or $cnt['adzan']=='C') { $sj=$sj+2; }
			  if($cnt['adzan']=='d' or $cnt['adzan']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ echo"A"; $aa2=$aa2+=1; }
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  echo"B"; $ab2=$ab2+=1; }
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  echo"C"; $ac2=$ac2+=1; }
		if($t_sj <=1.49 and $pk=='d'){  echo"D"; $ad2=$ad2+=1; }
		}
		?>
                  </font> </div></td>
		         </tr>
				 
				 
				 
			     <tr bgcolor="#FFFFCC">
			       <td height="2" colspan="11" bgcolor="#666666"></td>
		         </tr>
				 <?  $bgr+=1; $ary+=1;  }  ?>
				  
			     <tr bgcolor="#FFFFCC">
                  <td width="8%" height="24" bgcolor="#CCCCCC">&nbsp;</td>
                  <td width="31%" bgcolor="#CCCCCC"><div align="center"><font color="#FF0000" size="+1">T O T A L</font></div></td>
				  
                  <td width="6%" bgcolor="#999966"><font color="#FFFF99" size="+1">
                   <div align="center"><? 
				  if($pk=="a"){ echo $ka; } 
				  if($pk=="b"){ echo $kb; } 
				  if($pk=="c"){ echo $kc; } 
				  if($pk=="d"){ echo $kd; } 
				  ?></div></font></td>
                  <td width="6%" bgcolor="#CCCCCC"><font color="#FFFF99" size="+1">
                    <div align="center">
                    <? 
				  if($pk=="a"){ echo $ka2; } 
				  if($pk=="b"){ echo $kb2; } 
				  if($pk=="c"){ echo $kc2; } 
				  if($pk=="d"){ echo $kd2; } 
				  ?>
                  </div>
                  </font></td>
                  <td width="6%" bgcolor="#999966"><font color="#FFFF99" size="+1">
                    <div align="center">
                    <? 
				  if($pk=="a"){ echo $qa2; } 
				  if($pk=="b"){ echo $qb2; } 
				  if($pk=="c"){ echo $qc2; } 
				  if($pk=="d"){ echo $qd2; } 
				  ?>
                  </div></font></td>
                  <td width="6%" bgcolor="#CCCCCC"><font color="#FFFF99" size="+1">
                    <div align="center">
                    <? 
				  if($pk=="a"){ echo $ra2; } 
				  if($pk=="b"){ echo $rb2; } 
				  if($pk=="c"){ echo $rc2; } 
				  if($pk=="d"){ echo $rd2; } 
				  ?>
                  </div>
                  </font></td>
                  <td width="6%" bgcolor="#999966"><font color="#FFFF99" size="+1">
                    <div align="center">
                    <? 
				  if($pk=="a"){ echo $wa2; } 
				  if($pk=="b"){ echo $wb2; } 
				  if($pk=="c"){ echo $wc2; } 
				  if($pk=="d"){ echo $wd2; } 
				  ?>
                  </div></font></td>
                  <td width="6%" bgcolor="#CCCCCC"><font color="#FFFF99" size="+1">
                    <div align="center"><font color="#FFFF99" size="+1">
                      <? 
				  if($pk=="a"){ echo $sa2; } 
				  if($pk=="b"){ echo $sb2; } 
				  if($pk=="c"){ echo $sc2; } 
				  if($pk=="d"){ echo $sd2; } 
				  ?>
                    </font></div>
                  </font></td>
                  <td width="6%" bgcolor="#999966"><font color="#FFFF99" size="+1">
                    <div align="center">
                    <? 
				  if($pk=="a"){ echo $ta2; } 
				  if($pk=="b"){ echo $tb2; } 
				  if($pk=="c"){ echo $tc2; } 
				  if($pk=="d"){ echo $td2; } 
				  ?>
                  </div></font></td>
                  <td width="6%" bgcolor="#CCCCCC"><font color="#FFFF99" size="+1">
                    <div align="center">
                    <? 
				  if($pk=="a"){ echo $ma2; } 
				  if($pk=="b"){ echo $mb2; } 
				  if($pk=="c"){ echo $mc2; } 
				  if($pk=="d"){ echo $md2; } 
				  ?>
                  </div>
                  </font></td>
                  <td width="6%" bgcolor="#999966"><font color="#FFFF99" size="+1">
                    <div align="center">
                    <? 
				  if($pk=="a"){ echo $aa2; } 
				  if($pk=="b"){ echo $ab2; } 
				  if($pk=="c"){ echo $ac2; } 
				  if($pk=="d"){ echo $ad2; } 
				  ?>
                  </div></font></td>
 </tr> </form> 
				<tr height="2" bgcolor="#B3CF70"><td></td><td></td>
		          <td></td>
		          <td></td>
		          <td></td>
	              <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                <td></td></tr>
				<? $tot_pb_c=$kc+$kc2+$qc2+$rc2+$wc2+$sc2+$tc2+$mc2+$ac2; 
				   $tot_pb_d=$kd+$kd2+$qd2+$rd2+$wd2+$sd2+$td2+$md2+$ad2; 
				   
				   $qsts=mysqli_query($koneksi, "SELECT * FROM  tb_statistik_karakter WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='$bl' and kelas='$klsk2' and karakter='$nlk' and                                      nilai='$pk' ");
	               $j_qs=mysqli_num_rows($qsts);
				   
				   if($j_qs >=1 and $pk=="c"){
				   mysqli_query($koneksi, "UPDATE tb_statistik_karakter SET total='$tot_pb_c' WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='$bl' and kelas='$klsk2' and  
				                karakter='$nlk' and nilai='$pk' ");
								echo "berhasil..."."$tot_pb_c";
				   }
				   if($j_qs >=1 and $pk=="d"){
				      mysqli_query($koneksi, "UPDATE tb_statistik_karakter SET total='$tot_pb_d' WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='$bl' and kelas='$klsk2' and  
				                   karakter='$nlk' and nilai='$pk' ");
								   echo "berhasil2..."."$tot_pb_d";
				   }
				    if($j_qs==0 and $pk=="c"){
				   $rek=mysqli_query($koneksi, "INSERT INTO tb_statistik_karakter VALUES('','$thaj','$sem','$bl','$klsk2','$nlk','$tot_pb_c','$pk')");
				   }
				   if($j_qs==0 and $pk=="d"){
				   $rek=mysqli_query($koneksi, "INSERT INTO tb_statistik_karakter VALUES('','$thaj','$sem','$bl','$klsk2','$nlk','$tot_pb_d','$pk')");
				   } 
				   ?>
            </table>                                  
              <? echo "Total Nilai C = $tot_pb_c "." Total Nilai D = $tot_pb_d"; } ?> </td>
          </tr>
          
          
          <tr>
            <td colspan="3" bgcolor="#B3CF70">
			<? if($nlk=='kd'){ ?>
			<table width="1000" height="70" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td rowspan="2" bgcolor="#999933"><div align="center" class="style18"><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">NIS</font></div></td>
                <td rowspan="2" bgcolor="#996600"><div align="center" class="style13"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Nama 
                  Santri</font></div></td>
                <td height="27" colspan="8" bgcolor="#660033"><div align="center" class="style20">P E M B I N A A N A D A B & A K H L A K</div></td>
              </tr>
              <tr>
                <td bgcolor="#CCCC33"><div align="center">Salam </div></td>
                <td bgcolor="#999966"><div align="center" class="style13">Bicara </div></td>
                <td bgcolor="#CCCC33"><div align="center" class="style14">Pakaian </div></td>
                <td bgcolor="#999966"><div align="center" class="style13">Makan Minum  </div></td>
                <td bgcolor="#CCCC33"><div align="center" class="style14">Belajar</div></td>
                <td bgcolor="#999966"><div align="center" class="style13">Ke Pembina  </div></td>
                <td bgcolor="#CCCC33"><div align="center"><span class="style14">Bergaul </span></div></td>
                <td height="19" bgcolor="#999966"><div align="center" class="style13">Bercanda</div></td>
              </tr>
              <?
				 $bgr=1;
		 while($tp=mysqli_fetch_assoc($tam)){
		 $cnt=mysqli_num_rows($tam);
		 $qku5=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$tp[kelas_st]'");
         $cqk5=mysqli_fetch_assoc($qku5);
		 
		 
		
	if($klsk!="" and $nlk=='kd'){
	$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE nis=$tp[nis] and pekan='$pk' and bulan='$bl' and semester='$sem' and thn_ajaran='$thaj' ");
	$cnt=mysqli_fetch_assoc($ntgs);
      $rk=mysqli_num_rows($ntgs);
	}  
	
	
		?>
              <form id="form1" name="form1" method="post" action="page/act_nilai_santri.php">
                <tr bgcolor="#FFFFCC">
                  <td height="24" bgcolor="#CCCC33"><div align="center"><? echo"$tp[nis]"; ?></div></td>
                  <td>&nbsp;<? echo"$tp[nama]"; ?>
                    <input type="hidden" name="nisk2" value="<? echo"$tp[nis]"; ?>" />
                    <input type="hidden" name="bulan2" value="<? echo $bl; ?>" />
                    <input type="hidden" name="pekan2" value="<? echo $pk; ?>" />
                    <input type="hidden" name="idkls2" value="<? echo $klsk; ?>" />
                    <input type="hidden" name="klsk22" value="<? echo $klsk2; ?>" />
                    <input type="hidden" name="nlk2" value="<? echo $nlk; ?>"/></td>
                  <td bgcolor="#663300"><div align="center"><font color="#FF0000" size="2">
                    <?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$tp[nis]' and bulan='$bl'");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['salam']=='a' or $cnt['salam']=='A') { $sj=$sj+4; }
			  if($cnt['salam']=='b' or $cnt['salam']=='B') { $sj=$sj+3; }
			  if($cnt['salam']=='c' or $cnt['salam']=='C') { $sj=$sj+2; }
			  if($cnt['salam']=='d' or $cnt['salam']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ echo"A"; $za=$za+=1; }
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  echo"B"; $zb=$zb+=1; }
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  echo"C"; $zc=$zc+=1; }
		if($t_sj <=1.49 and $pk=='d'){  echo"D"; $zd=$zd+=1; }
		}
		?>
                  </font></div></td>
                  <td bgcolor="#006633"><div align="center"><font color="#FF0000" size="2">
                    <?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$tp[nis]' and bulan='$bl'");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['bicara']=='a' or $cnt['bicara']=='A') { $sj=$sj+4; }
			  if($cnt['bicara']=='b' or $cnt['bicara']=='B') { $sj=$sj+3; }
			  if($cnt['bicara']=='c' or $cnt['bicara']=='C') { $sj=$sj+2; }
			  if($cnt['bicara']=='d' or $cnt['bicara']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ echo"A"; $ya=$ya+=1; }
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  echo"B"; $yb=$yb+=1; }
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  echo"C"; $yc=$yc+=1; }
		if($t_sj <=1.49 and $pk=='d'){  echo"D"; $yd=$yd+=1; }
		}
		?>
                  </font></div></td>
                  <td bgcolor="#663300"><div align="center"><font color="#FF0000" size="2">
                    <?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$tp[nis]' and bulan='$bl'");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['berpakaian']=='a' or $cnt['berpakaian']=='A') { $sj=$sj+4; }
			  if($cnt['berpakaian']=='b' or $cnt['berpakaian']=='B') { $sj=$sj+3; }
			  if($cnt['berpakaian']=='c' or $cnt['berpakaian']=='C') { $sj=$sj+2; }
			  if($cnt['berpakaian']=='d' or $cnt['berpakaian']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ echo"A"; $xa=$xa+=1; }
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  echo"B"; $xb=$xb+=1; }
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  echo"C"; $xc=$xc+=1; }
		if($t_sj <=1.49 and $pk=='d'){  echo"D"; $xd=$xd+=1; }
		}
		?>
                  </font></div></td>
                  <td bgcolor="#006633"><div align="center"><font color="#FF0000" size="2">
                    <?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$tp[nis]' and bulan='$bl'");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['makan_minum']=='a' or $cnt['makan_minum']=='A') { $sj=$sj+4; }
			  if($cnt['makan_minum']=='b' or $cnt['makan_minum']=='B') { $sj=$sj+3; }
			  if($cnt['makan_minum']=='c' or $cnt['makan_minum']=='C') { $sj=$sj+2; }
			  if($cnt['makan_minum']=='d' or $cnt['makan_minum']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ echo"A"; $wa=$wa+=1; }
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  echo"B"; $wb=$wb+=1; }
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  echo"C"; $wc=$wc+=1; }
		if($t_sj <=1.49 and $pk=='d'){  echo"D"; $wd=$wd+=1; }
		}
		?>
                  </font></div></td>
                  <td bgcolor="#663300"><div align="center"><font color="#FF0000" size="2">
                    <?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$tp[nis]' and bulan='$bl'");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['belajar']=='a' or $cnt['belajar']=='A') { $sj=$sj+4; }
			  if($cnt['belajar']=='b' or $cnt['belajar']=='B') { $sj=$sj+3; }
			  if($cnt['belajar']=='c' or $cnt['belajar']=='C') { $sj=$sj+2; }
			  if($cnt['belajar']=='d' or $cnt['belajar']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ echo"A"; $pa=$pa+=1; }
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  echo"B"; $pb=$pb+=1; }
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  echo"C"; $pc=$pc+=1; }
		if($t_sj <=1.49 and $pk=='d'){  echo"D"; $pd=$pd+=1; }
		}
		?>
                  </font></div></td>
                  <td bgcolor="#006633"><div align="center"><font color="#FF0000" size="2">
                    <?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$tp[nis]' and bulan='$bl'");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['adab_kepembina']=='a' or $cnt['adab_kepembina']=='A') { $sj=$sj+4; }
			  if($cnt['adab_kepembina']=='b' or $cnt['adab_kepembina']=='B') { $sj=$sj+3; }
			  if($cnt['adab_kepembina']=='c' or $cnt['adab_kepembina']=='C') { $sj=$sj+2; }
			  if($cnt['adab_kepembina']=='d' or $cnt['adab_kepembina']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ echo"A"; $ua=$ua+=1; }
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  echo"B"; $ub=$ub+=1; }
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  echo"C"; $uc=$uc+=1; }
		if($t_sj <=1.49 and $pk=='d'){  echo"D"; $ud=$ud+=1; }
		}
		?>
                  </font></div></td>
                  <td bgcolor="#663300"><div align="center"><font color="#FF0000" size="2">
                    <?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$tp[nis]' and bulan='$bl'");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['bergaul']=='a' or $cnt['bergaul']=='A') { $sj=$sj+4; }
			  if($cnt['bergaul']=='b' or $cnt['bergaul']=='B') { $sj=$sj+3; }
			  if($cnt['bergaul']=='c' or $cnt['bergaul']=='C') { $sj=$sj+2; }
			  if($cnt['bergaul']=='d' or $cnt['bergaul']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ echo"A"; $ia=$ia+=1; }
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  echo"B"; $ib=$ib+=1; }
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  echo"C"; $ic=$ic+=1; }
		if($t_sj <=1.49 and $pk=='d'){  echo"D"; $id=$id+=1; }
		}
		?>
                  </font></div></td>
                  <td bgcolor="#006633"><div align="center"><font color="#FF0000" size="2">
                    <?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_adab_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$tp[nis]' and bulan='$bl'");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['bercanda']=='a' or $cnt['bercanda']=='A') { $sj=$sj+4; }
			  if($cnt['bercanda']=='b' or $cnt['bercanda']=='B') { $sj=$sj+3; }
			  if($cnt['bercanda']=='c' or $cnt['bercanda']=='C') { $sj=$sj+2; }
			  if($cnt['bercanda']=='d' or $cnt['bercanda']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ echo"A"; $ja=$ja+=1; }
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  echo"B"; $jb=$jb+=1; }
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  echo"C"; $jc=$jc+=1; }
		if($t_sj <=1.49 and $pk=='d'){  echo"D"; $jd=$jd+=1; }
		}
		?>
                  </font></div></td>
                </tr>
		
                <tr bgcolor="#FFFFCC">
                  <td height="2" colspan="10" bgcolor="#999999"></td>
                </tr>
				<? $bgr+=1; $ary+=1;  } ?>
                <tr bgcolor="#FFFFCC">
                  <td width="9%" height="24" bgcolor="#CCCCCC">&nbsp;</td>
                  <td width="34%" bgcolor="#CCCCCC"><div align="center"><font color="#FF0000" size="+1">T O T A L</font></div></td>
                  <td width="6%" bgcolor="#999966"><div align="center"><font color="#FFFF99" size="+1">
                    <? 
				  if($pk=="a"){ echo $za; } 
				  if($pk=="b"){ echo $zb; } 
				  if($pk=="c"){ echo $zc; } 
				  if($pk=="d"){ echo $zd; } 
				  ?>
                  </font></div></td>
                  <td width="6%" bgcolor="#CCCCCC"><div align="center"><font color="#FFFF99" size="+1">
                    <? 
				  if($pk=="a"){ echo $ya; } 
				  if($pk=="b"){ echo $yb; } 
				  if($pk=="c"){ echo $yc; } 
				  if($pk=="d"){ echo $yd; } 
				  ?>
                  </font></div></td>
                  <td width="6%" bgcolor="#999966"><div align="center"><font color="#FFFF99" size="+1">
                    <? 
				  if($pk=="a"){ echo $xa; } 
				  if($pk=="b"){ echo $xb; } 
				  if($pk=="c"){ echo $xc; } 
				  if($pk=="d"){ echo $xd; } 
				  ?>
                  </font></div></td>
                  <td width="6%" bgcolor="#CCCCCC"><div align="center"><font color="#FFFF99" size="+1">
                    <? 
				  if($pk=="a"){ echo $wa; } 
				  if($pk=="b"){ echo $wb; } 
				  if($pk=="c"){ echo $wc; } 
				  if($pk=="d"){ echo $wd; } 
				  ?>
                  </font></div></td>
                  <td width="6%" bgcolor="#999966"><div align="center"><font color="#FFFF99" size="+1">
                    <? 
				  if($pk=="a"){ echo $pa; } 
				  if($pk=="b"){ echo $pb; } 
				  if($pk=="c"){ echo $pc; } 
				  if($pk=="d"){ echo $pd; } 
				  ?>
                  </font></div></td>
                  <td width="6%" bgcolor="#CCCCCC"><div align="center"><font color="#FFFF99" size="+1">
                    <? 
				  if($pk=="a"){ echo $ua; } 
				  if($pk=="b"){ echo $ub; } 
				  if($pk=="c"){ echo $uc; } 
				  if($pk=="d"){ echo $ud; } 
				  ?>
                  </font></div></td>
                  <td width="7%" bgcolor="#999966"><div align="center"><font color="#FFFF99" size="+1">
                    <? 
				  if($pk=="a"){ echo $ia; } 
				  if($pk=="b"){ echo $ib; } 
				  if($pk=="c"){ echo $ic; } 
				  if($pk=="d"){ echo $id; } 
				  ?>
                  </font></div></td>
                  <td width="7%" bgcolor="#CCCCCC"><div align="center"><font color="#FFFF99" size="+1">
                    <? 
				  if($pk=="a"){ echo $ja; } 
				  if($pk=="b"){ echo $jb; } 
				  if($pk=="c"){ echo $jc; } 
				  if($pk=="d"){ echo $jd; } 
				  ?>
                  </font></div></td>
                </tr>
              </form>
			  <a name="kembali" id="kembali"></a>
              <tr height="2" bgcolor="#B3CF70">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </table>
			<? 
			$tot_paa_c=$zc+$yc+$xc+$wc+$pc+$uc+$ic+$jc;
			$tot_paa_d=$zd+$yd+$xd+$wd+$pd+$ud+$id+$jd;
			
			$qsts=mysqli_query($koneksi, "SELECT * FROM  tb_statistik_karakter WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='$bl' and kelas='$klsk2' and karakter='$nlk' and                                      nilai='$pk' ");
	               $j_qs=mysqli_num_rows($qsts);
				   
				   if($j_qs >=1 and $pk=="c"){
				   mysqli_query($koneksi, "UPDATE tb_statistik_karakter SET total='$tot_paa_c' WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='$bl' and kelas='$klsk2' and  
				                karakter='$nlk' and nilai='$pk' ");
				   }
				   if($j_qs >=1 and $pk=="d"){
				      mysqli_query($koneksi, "UPDATE tb_statistik_karakter SET total='$tot_paa_d' WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='$bl' and kelas='$klsk2' and  
				                   karakter='$nlk' and nilai='$pk' ");
				   }
				   if($j_qs==0 and $pk=="c"){
				   $rek=mysqli_query($koneksi, "INSERT INTO tb_statistik_karakter VALUES('','$thaj','$sem','$bl','$klsk2','$nlk','$tot_paa_c','$pk')");
				   }
				   if($j_qs==0 and $pk=="d"){
				   $rek=mysqli_query($koneksi, "INSERT INTO tb_statistik_karakter VALUES('','$thaj','$sem','$bl','$klsk2','$nlk','$tot_paa_d','$pk')");
				   }
			
			echo "Total Nilai C = $tot_paa_c "." Total Nilai D = $tot_paa_d"; } ?></td>
          </tr>
          <tr>
            <td colspan="3" bgcolor="#B3CF70"><? if($nlk=='kk'){ ?>
              <table width="1000" height="70" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td rowspan="2" bgcolor="#999933"><div align="center" class="style18"><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">NIS</font></div></td>
                  <td rowspan="2" bgcolor="#996600"><div align="center" class="style13"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Nama 
                    Santri</font></div></td>
                  <td height="27" colspan="8" bgcolor="#660033"><div align="center" class="style20">K E D I S I P L I N A N</div></td>
                </tr>
                <tr>
                  <td height="19" bgcolor="#CCCC33"><div align="center">Briefing Malam </div></td>
                  <td bgcolor="#999966"><div align="center" class="style13">Izin Pulang </div></td>
                  <td bgcolor="#CCCC33"><div align="center">M. Keg. Asrama </div></td>
                  <td bgcolor="#999966"><div align="center" class="style13">Belajar Mandiri </div></td>
                  <td bgcolor="#CCCC33"><div align="center">Ber. Bhs Inggris </div></td>
                  <td bgcolor="#999966"><div align="center" class="style13">Belajar Malam </div></td>
                  <td bgcolor="#CCCC33"><div align="center">Ber. Bhs Arab </div></td>
                  <td bgcolor="#999966"><div align="center" class="style13">Disiplin Tidur </div></td>
                </tr>
                <?
				 $bgr=1;
		 while($tp=mysqli_fetch_assoc($tam)){
		 $cnt=mysqli_num_rows($tam);
		 $qku5=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$tp[kelas_st]'");
         $cqk5=mysqli_fetch_assoc($qku5);
		 		 
	
	if($klsk!="" and $nlk=='kk'){
	$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE nis=$tp[nis] and pekan='$pk' and bulan='$bl' and semester='$sem' and thn_ajaran='$thaj' ");
	$cnt=mysqli_fetch_assoc($ntgs);
      $rk=mysqli_num_rows($ntgs);
	}  
		?>
                <form id="form1" name="form1" method="post" action="page/act_nilai_santri.php">
                  <tr bgcolor="#FFFFCC">
                    <td height="24" bgcolor="#CCCC33"><div align="center"><? echo"$tp[nis]"; ?></div></td>
                    <td>&nbsp;<? echo"$tp[nama]"; ?>
                      <input type="hidden" name="nisk22" value="<? echo"$tp[nis]"; ?>" />
                      <input type="hidden" name="bulan22" value="<? echo $bl; ?>" />
                      <input type="hidden" name="pekan22" value="<? echo $pk; ?>" />
                      <input type="hidden" name="idkls22" value="<? echo $klsk; ?>" />
                      <input type="hidden" name="klsk222" value="<? echo $klsk2; ?>" />
                      <input type="hidden" name="nlk22" value="<? echo $nlk; ?>"/></td>
                    <td bgcolor="#663300"><div align="center"><font color="#FF0000" size="2">
                      <?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$tp[nis]' and bulan='$bl'");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['briefing']=='a' or $cnt['briefing']=='A') { $sj=$sj+4; }
			  if($cnt['briefing']=='b' or $cnt['briefing']=='B') { $sj=$sj+3; }
			  if($cnt['briefing']=='c' or $cnt['briefing']=='C') { $sj=$sj+2; }
			  if($cnt['briefing']=='d' or $cnt['briefing']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ echo"A"; $bm1=$bm1+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  echo"B"; $bm2=$bm2+=1; }
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  echo"C"; $bm3=$bm3+=1; }
		if($t_sj <=1.49 and $pk=='d'){  echo"D";  $bm4=$bm4+=1; }
		}
		?>
                    </font></div></td>
                    <td bgcolor="#006633"><div align="center"><font color="#FF0000" size="2">
                      <?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$tp[nis]' and bulan='$bl'");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['izin_pulang']=='a' or $cnt['izin_pulang']=='A') { $sj=$sj+4; }
			  if($cnt['izin_pulang']=='b' or $cnt['izin_pulang']=='B') { $sj=$sj+3; }
			  if($cnt['izin_pulang']=='c' or $cnt['izin_pulang']=='C') { $sj=$sj+2; }
			  if($cnt['izin_pulang']=='d' or $cnt['izin_pulang']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ echo"A"; $ip1=$ip1+=1; }
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  echo"B"; $ip2=$ip2+=1; }
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  echo"C"; $ip3=$ip3+=1; }
		if($t_sj <=1.49 and $pk=='d'){  echo"D"; $ip4=$ip4+=1; }
		}
		?>
                    </font></div></td>
                    <td bgcolor="#663300"><div align="center"><font color="#FF0000" size="2">
                      <?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$tp[nis]' and bulan='$bl'");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['kegiatan_asrama']=='a' or $cnt['kegiatan_asrama']=='A') { $sj=$sj+4; }
			  if($cnt['kegiatan_asrama']=='b' or $cnt['kegiatan_asrama']=='B') { $sj=$sj+3; }
			  if($cnt['kegiatan_asrama']=='c' or $cnt['kegiatan_asrama']=='C') { $sj=$sj+2; }
			  if($cnt['kegiatan_asrama']=='d' or $cnt['kegiatan_asrama']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ echo"A"; $ma1=$ma1+=1; }
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  echo"B"; $ma2=$ma2+=1; }
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  echo"C"; $ma3=$ma3+=1;}
		if($t_sj <=1.49 and $pk=='d'){  echo"D"; $ma4=$ma4+=1; }
		}
		?>
                    </font></div></td>
                    <td bgcolor="#006633"><div align="center"><font color="#FF0000" size="2">
                      <?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$tp[nis]' and bulan='$bl'");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['belajar_mandiri']=='a' or $cnt['belajar_mandiri']=='A') { $sj=$sj+4; }
			  if($cnt['belajar_mandiri']=='b' or $cnt['belajar_mandiri']=='B') { $sj=$sj+3; }
			  if($cnt['belajar_mandiri']=='c' or $cnt['belajar_mandiri']=='C') { $sj=$sj+2; }
			  if($cnt['belajar_mandiri']=='d' or $cnt['belajar_mandiri']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ echo"A"; $bm1=$bm1+=1; }
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  echo"B"; $bm2=$bm2+=1; }
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  echo"C"; $bm3=$bm3+=1;}
		if($t_sj <=1.49 and $pk=='d'){  echo"D"; $bm4=$bm4+=1;}
		}
		?>
                    </font></div></td>
                    <td bgcolor="#663300"><div align="center"><font color="#FF0000" size="2">
                      <?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$tp[nis]' and bulan='$bl'");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['berbahasa_inggris']=='a' or $cnt['berbahasa_inggris']=='A') { $sj=$sj+4; }
			  if($cnt['berbahasa_inggris']=='b' or $cnt['berbahasa_inggris']=='B') { $sj=$sj+3; }
			  if($cnt['berbahasa_inggris']=='c' or $cnt['berbahasa_inggris']=='C') { $sj=$sj+2; }
			  if($cnt['berbahasa_inggris']=='d' or $cnt['berbahasa_inggris']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ echo"A"; $bi1=$bi1+=1;}
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  echo"B"; $bi2=$bi2+=1; }
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  echo"C"; $bi3=$bi3+=1; }
		if($t_sj <=1.49 and $pk=='d'){  echo"D"; $bi4=$bi4+=1; }
		}
		?>
                    </font></div></td>
                    <td bgcolor="#006633"><div align="center"><font color="#FF0000" size="2">
                      <?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$tp[nis]' and bulan='$bl'");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['belajar_malam']=='a' or $cnt['belajar_malam']=='A') { $sj=$sj+4; }
			  if($cnt['belajar_malam']=='b' or $cnt['belajar_malam']=='B') { $sj=$sj+3; }
			  if($cnt['belajar_malam']=='c' or $cnt['belajar_malam']=='C') { $sj=$sj+2; }
			  if($cnt['belajar_malam']=='d' or $cnt['belajar_malam']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ echo"A"; $bj1=$bj1+=1; }
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  echo"B"; $bj2=$bj2+=1; }
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  echo"C"; $bj3=$bj3+=1; }
		if($t_sj <=1.49 and $pk=='d'){  echo"D"; $bj4=$bj4+=1; }
		}
		?>
                    </font></div></td>
                    <td bgcolor="#663300"><div align="center"><font color="#FF0000" size="2">
                      <?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$tp[nis]' and bulan='$bl'");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['berbahasa_arab']=='a' or $cnt['berbahasa_arab']=='A') { $sj=$sj+4; }
			  if($cnt['berbahasa_arab']=='b' or $cnt['berbahasa_arab']=='B') { $sj=$sj+3; }
			  if($cnt['berbahasa_arab']=='c' or $cnt['berbahasa_arab']=='C') { $sj=$sj+2; }
			  if($cnt['berbahasa_arab']=='d' or $cnt['berbahasa_arab']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ echo"A"; $ba1=$ba1+=1; }
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  echo"B"; $ba2=$ba2+=1; }
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  echo"C"; $ba3=$ba3+=1; }
		if($t_sj <=1.49 and $pk=='d'){  echo"D"; $ba4=$ba4+=1; }
		}
		?>
                    </font></div></td>
                    <td bgcolor="#006633"><div align="center"><font color="#FF0000" size="2">
                      <?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$tp[nis]' and bulan='$bl' ");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['tidur']=='a' or $cnt['tidur']=='A') { $sj=$sj+4; }
			  if($cnt['tidur']=='b' or $cnt['tidur']=='B') { $sj=$sj+3; }
			  if($cnt['tidur']=='c' or $cnt['tidur']=='C') { $sj=$sj+2; }
			  if($cnt['tidur']=='d' or $cnt['tidur']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ echo"A"; $dt1=$dt1+=1; }
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  echo"B"; $dt2=$dt2+=1; }
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  echo"C"; $dt3=$dt3+=1; }
		if($t_sj <=1.49 and $pk=='d'){  echo"D"; $dt4=$dt4+=1; }
		}
		?>
                    </font></div></td>
                  </tr>
				  
                  <tr bgcolor="#FFFFCC">
                    <td height="2" colspan="10" bgcolor="#999999"></td>
                  </tr>
				  <? $bgr+=1; $ary+=1;  } ?>
                  <tr bgcolor="#FFFFCC">
                    <td width="8%" height="24" bgcolor="#CCCCCC">&nbsp;</td>
                    <td width="34%" bgcolor="#CCCCCC"><div align="center"><font color="#FF0000" size="+1">T O T A L</font></div></td>
                    <td width="6%" bgcolor="#999966"><div align="center"><font color="#FFFF99" size="+1">
                      <? 
				  if($pk=="a"){ echo $bm1; } 
				  if($pk=="b"){ echo $bm2; } 
				  if($pk=="c"){ echo $bm3; } 
				  if($pk=="d"){ echo $bm4; } 
				  ?>
                    </font></div></td>
                    <td width="6%" bgcolor="#CCCCCC"><div align="center"><font color="#FFFF99" size="+1">
                      <? 
				  if($pk=="a"){ echo $ip1; } 
				  if($pk=="b"){ echo $ip2; } 
				  if($pk=="c"){ echo $ip3; } 
				  if($pk=="d"){ echo $ip4; } 
				  ?>
                    </font></div></td>
                    <td width="6%" bgcolor="#999966"><div align="center"><font color="#FFFF99" size="+1">
                      <? 
				  if($pk=="a"){ echo $ma1; } 
				  if($pk=="b"){ echo $ma2; } 
				  if($pk=="c"){ echo $ma3; } 
				  if($pk=="d"){ echo $ma4; } 
				  ?>
                    </font></div></td>
                    <td width="6%" bgcolor="#CCCCCC"><div align="center"><font color="#FFFF99" size="+1">
                      <? 
				  if($pk=="a"){ echo $bm1; } 
				  if($pk=="b"){ echo $bm2; } 
				  if($pk=="c"){ echo $bm3; } 
				  if($pk=="d"){ echo $bm4; } 
				  ?>
                    </font></div></td>
                    <td width="6%" bgcolor="#999966"><div align="center"><font color="#FFFF99" size="+1">
                      <? 
				  if($pk=="a"){ echo $bi1; } 
				  if($pk=="b"){ echo $bi2; } 
				  if($pk=="c"){ echo $bi3; } 
				  if($pk=="d"){ echo $bi4; } 
				  ?>
                    </font></div></td>
                    <td width="6%" bgcolor="#CCCCCC"><div align="center"><font color="#FFFF99" size="+1">
                      <? 
				  if($pk=="a"){ echo $bj1; } 
				  if($pk=="b"){ echo $bj2; } 
				  if($pk=="c"){ echo $bj3; } 
				  if($pk=="d"){ echo $bj4; } 
				  ?>
                    </font></div></td>
                    <td width="7%" bgcolor="#999966"><div align="center"><font color="#FFFF99" size="+1">
                      <? 
				  if($pk=="a"){ echo $ba1; } 
				  if($pk=="b"){ echo $ba2; } 
				  if($pk=="c"){ echo $ba3; } 
				  if($pk=="d"){ echo $ba4; } 
				  ?>
                    </font></div></td>
                    <td width="8%" bgcolor="#CCCCCC"><div align="center"><font color="#FFFF99" size="+1">
                      <? 
				  if($pk=="a"){ echo $dt1; } 
				  if($pk=="b"){ echo $dt2; } 
				  if($pk=="c"){ echo $dt3; } 
				  if($pk=="d"){ echo $dt4; } 
				  ?>
                    </font></div></td>
                  </tr>
                </form>
                <a name="kembali" id="kembali"></a>
                <tr height="2" bgcolor="#B3CF70">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>
            <? 
			
			$tot_k_c=$bm3+$ip3+$ma3+$bm3+$bi3+$bj3+$ba3+$dt3;
			$tot_k_d=$bm4+$ip4+$ma4+$bm4+$bi4+$bj4+$ba4+$dt4;
			
			$qsts=mysqli_query($koneksi, "SELECT * FROM  tb_statistik_karakter WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='$bl' and kelas='$klsk2' and karakter='$nlk' and                                      nilai='$pk' ");
	               $j_qs=mysqli_num_rows($qsts);
				   
				   if($j_qs >=1 and $pk=="c"){
				   mysqli_query($koneksi, "UPDATE tb_statistik_karakter SET total='$tot_k_c' WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='$bl' and kelas='$klsk2' and  
				                karakter='$nlk' and nilai='$pk' ");
				   }
				   if($j_qs >=1 and $pk=="d"){
				      mysqli_query($koneksi, "UPDATE tb_statistik_karakter SET total='$tot_k_d' WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='$bl' and kelas='$klsk2' and  
				                   karakter='$nlk' and nilai='$pk' ");
				   }
				   if($j_qs==0 and $pk=="c"){
				   $rek=mysqli_query($koneksi, "INSERT INTO tb_statistik_karakter VALUES('','$thaj','$sem','$bl','$klsk2','$nlk','$tot_k_c','$pk')");
				   }
				   if($j_qs==0 and $pk=="d"){
				   $rek=mysqli_query($koneksi, "INSERT INTO tb_statistik_karakter VALUES('','$thaj','$sem','$bl','$klsk2','$nlk','$tot_k_d','$pk')");
				   }
			
			echo "Total Nilai C = $tot_k_c "." Total Nilai D = $tot_k_d"; } ?></td>
          </tr>
          <tr>
            <td colspan="3" bgcolor="#B3CF70"><? if($nlk=='kb'){ ?>
              <table width="1000" height="70" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td rowspan="2" bgcolor="#999933"><div align="center" class="style18"><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">NIS</font></div></td>
                  <td rowspan="2" bgcolor="#996600"><div align="center" class="style13"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Nama 
                    Santri</font></div></td>
                  <td height="27" colspan="6" bgcolor="#660033"><div align="center" class="style17 style13">K E B E R S I H A N & K E R A P I H A N</div></td>
                </tr>
                <tr>
                  <td height="19" bgcolor="#CCCC33"><div align="center"><span class="style13 style14">Bersih Diri </span></div></td>
                  <td bgcolor="#999966"><div align="center" class="style13">Rambut &amp;Kuku </div></td>
                  <td bgcolor="#CCCC33"><div align="center" class="style14">KB. Kamar  </div></td>
                  <td bgcolor="#999966"><div align="center" class="style13">Kamar &amp; Lemari P </div></td>
                  <td bgcolor="#CCCC33"><div align="center" class="style14">Rapi B. Seragam </div></td>
                  <td bgcolor="#999966"><div align="center" class="style13">Menyimpan Barang P </div></td>
                </tr>
                <?
				 $bgr=1;
		 while($tp=mysqli_fetch_assoc($tam)){
		 $cnt=mysqli_num_rows($tam);
		 $qku5=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$tp[kelas_st]'");
         $cqk5=mysqli_fetch_assoc($qku5);
		 		 
	
	if($klsk!="" and $nlk=='kb'){
	$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE nis=$tp[nis] and pekan='$pk' and bulan='$bl' and semester='$sem' and thn_ajaran='$thaj' ");
	$cnt=mysqli_fetch_assoc($ntgs);
      $rk=mysqli_num_rows($ntgs);
	}  
		?>
                <form id="form1" name="form1" method="post" action="page/act_nilai_santri.php">
                  <tr bgcolor="#FFFFCC">
                    <td height="24" bgcolor="#CCCC33"><div align="center"><? echo"$tp[nis]"; ?></div></td>
                    <td><? echo"$tp[nama]"; ?>
                      <input type="hidden" name="nisk222" value="<? echo"$tp[nis]"; ?>" />
                      <input type="hidden" name="bulan222" value="<? echo $bl; ?>" />
                      <input type="hidden" name="pekan222" value="<? echo $pk; ?>" />
                      <input type="hidden" name="idkls222" value="<? echo $klsk; ?>" />
                      <input type="hidden" name="klsk2222" value="<? echo $klsk2; ?>" />
                      <input type="hidden" name="nlk222" value="<? echo $nlk; ?>"/></td>
                    <td bgcolor="#663300"><div align="center"><font color="#FF0000" size="2">
                      <?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$tp[nis]' and bulan='$bl'");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['bersih_diri']=='a' or $cnt['bersih_diri']=='A') { $sj=$sj+4; }
			  if($cnt['bersih_diri']=='b' or $cnt['bersih_diri']=='B') { $sj=$sj+3; }
			  if($cnt['bersih_diri']=='c' or $cnt['bersih_diri']=='C') { $sj=$sj+2; }
			  if($cnt['bersih_diri']=='d' or $cnt['bersih_diri']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ echo"A"; $bd1=$bd1+=1; }
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  echo"B"; $bd2=$bd2+=1; }
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  echo"C"; $bd3=$bd3+=1; }
		if($t_sj <=1.49 and $pk=='d'){  echo"D"; $bd4=$bd4+=1; }
		}
		?>
                    </font></div></td>
                    <td bgcolor="#006633"><div align="center"><font color="#FF0000" size="2">
                      <?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$tp[nis]' and bulan='$bl'");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['rapi_rambut_kuku']=='a' or $cnt['rapi_rambut_kuku']=='A') { $sj=$sj+4; }
			  if($cnt['rapi_rambut_kuku']=='b' or $cnt['rapi_rambut_kuku']=='B') { $sj=$sj+3; }
			  if($cnt['rapi_rambut_kuku']=='c' or $cnt['rapi_rambut_kuku']=='C') { $sj=$sj+2; }
			  if($cnt['rapi_rambut_kuku']=='d' or $cnt['rapi_rambut_kuku']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ echo"A"; $rk1=$rk1+=1; }
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  echo"B"; $rk2=$rk2+=1; }
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  echo"C"; $rk3=$rk3+=1; }
		if($t_sj <=1.49 and $pk=='d'){  echo"D"; $rk4=$rk4+=1; }
		}
		?>
                    </font></div></td>
                    <td bgcolor="#663300"><div align="center"><font color="#FF0000" size="2">
                      <?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$tp[nis]' and bulan='$bl'");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['kebersihan_kamar']=='a' or $cnt['kebersihan_kamar']=='A') { $sj=$sj+4; }
			  if($cnt['kebersihan_kamar']=='b' or $cnt['kebersihan_kamar']=='B') { $sj=$sj+3; }
			  if($cnt['kebersihan_kamar']=='c' or $cnt['kebersihan_kamar']=='C') { $sj=$sj+2; }
			  if($cnt['kebersihan_kamar']=='d' or $cnt['kebersihan_kamar']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ echo"A"; $kk1=$kk1+=1; }
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  echo"B"; $kk2=$kk2+=1; }
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  echo"C"; $kk3=$kk3+=1; }
		if($t_sj <=1.49 and $pk=='d'){  echo"D"; $kk4=$kk4+=1; }
		}
		?>
                    </font></div></td>
                    <td bgcolor="#006633"><div align="center"><font color="#FF0000" size="2">
                      <?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$tp[nis]' and bulan='$bl'");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['kerapihan_kamar']=='a' or $cnt['kerapihan_kamar']=='A') { $sj=$sj+4; }
			  if($cnt['kerapihan_kamar']=='b' or $cnt['kerapihan_kamar']=='B') { $sj=$sj+3; }
			  if($cnt['kerapihan_kamar']=='c' or $cnt['kerapihan_kamar']=='C') { $sj=$sj+2; }
			  if($cnt['kerapihan_kamar']=='d' or $cnt['kerapihan_kamar']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ echo"A"; $kl1=$kl1+=1; }
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  echo"B"; $kl2=$kl2+=1; }
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  echo"C"; $kl3=$kl3+=1; }
		if($t_sj <=1.49 and $pk=='d'){  echo"D"; $kl4=$kl4+=1; }
		}
		?>
                    </font></div></td>
                    <td bgcolor="#663300"><div align="center"><font color="#FF0000" size="2">
                      <?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$tp[nis]' and bulan='$bl'");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['rapi_berseragam']=='a' or $cnt['rapi_berseragam']=='A') { $sj=$sj+4; }
			  if($cnt['rapi_berseragam']=='b' or $cnt['rapi_berseragam']=='B') { $sj=$sj+3; }
			  if($cnt['rapi_berseragam']=='c' or $cnt['rapi_berseragam']=='C') { $sj=$sj+2; }
			  if($cnt['rapi_berseragam']=='d' or $cnt['rapi_berseragam']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ echo"A"; $rs1=$rs1+=1; }
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  echo"B"; $rs2=$rs2+=1; }
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  echo"C"; $rs3=$rs3+=1; }
		if($t_sj <=1.49 and $pk=='d'){  echo"D"; $rs4=$rs4+=1; }
		}
		?>
                    </font></div></td>
                    <td bgcolor="#006633"><div align="center"><font color="#FF0000" size="2">
                      <?
		$sj=0; $t_sj=0;
		$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$tp[nis]' and bulan='$bl'");
	    $j_br=mysqli_num_rows($ntgs);
		while($cnt=mysqli_fetch_assoc($ntgs)){
		      if($cnt['rapi_menyimpan_barang']=='a' or $cnt['rapi_menyimpan_barang']=='A') { $sj=$sj+4; }
			  if($cnt['rapi_menyimpan_barang']=='b' or $cnt['rapi_menyimpan_barang']=='B') { $sj=$sj+3; }
			  if($cnt['rapi_menyimpan_barang']=='c' or $cnt['rapi_menyimpan_barang']=='C') { $sj=$sj+2; }
			  if($cnt['rapi_menyimpan_barang']=='d' or $cnt['rapi_menyimpan_barang']=='D') { $sj=$sj+1; }
		}
		
		if($sj!=0) { $t_sj=$sj/$j_br; 
		if($t_sj >=3.50 and $pk=='a'){ echo"A"; $mb1=$mb1+=1; }
		if($t_sj <=3.49 and $t_sj>=2.50 and $pk=='b'){  echo"B"; $mb2=$mb2+=1; }
		if($t_sj <=2.49 and $t_sj>=1.50 and $pk=='c'){  echo"C"; $mb3=$mb3+=1; }
		if($t_sj <=1.49 and $pk=='d'){  echo"D"; $mb4=$mb4+=1; }
		}
		?>
                    </font></div></td>
                  </tr>
                  <tr bgcolor="#FFFFCC">
                    <td height="2" colspan="8" bgcolor="#999999"></td>
                  </tr>
				  <? $bgr+=1; $ary+=1;  } ?>
                  <tr bgcolor="#FFFFCC">
                    <td width="9%" height="24" bgcolor="#CCCCCC">&nbsp;</td>
                    <td width="33%" bgcolor="#CCCCCC"><div align="center"><font color="#FF0000" size="+1">T O T A L</font></div></td>
                    <td width="9%" bgcolor="#999966"><div align="center"><font color="#FFFF99" size="+1">
                      <? 
				  if($pk=="a"){ echo $bd1; } 
				  if($pk=="b"){ echo $bd2; } 
				  if($pk=="c"){ echo $bd3; } 
				  if($pk=="d"){ echo $bd4; } 
				  ?>
                    </font></div></td>
                    <td width="9%" bgcolor="#CCCCCC"><div align="center"><font color="#FFFF99" size="+1">
                      <? 
				  if($pk=="a"){ echo $rk1; } 
				  if($pk=="b"){ echo $rk2; } 
				  if($pk=="c"){ echo $rk3; } 
				  if($pk=="d"){ echo $rk4; } 
				  ?>
                    </font></div></td>
                    <td width="8%" bgcolor="#999966"><div align="center"><font color="#FFFF99" size="+1">
                      <? 
				  if($pk=="a"){ echo $kk1; } 
				  if($pk=="b"){ echo $kk2; } 
				  if($pk=="c"){ echo $kk3; } 
				  if($pk=="d"){ echo $kk4; } 
				  ?>
                    </font></div></td>
                    <td width="9%" bgcolor="#CCCCCC"><div align="center"><font color="#FFFF99" size="+1">
                      <? 
				  if($pk=="a"){ echo $kl1; } 
				  if($pk=="b"){ echo $kl2; } 
				  if($pk=="c"){ echo $kl3; } 
				  if($pk=="d"){ echo $kl4; } 
				  ?>
                    </font></div></td>
                    <td width="8%" bgcolor="#999966"><div align="center"><font color="#FFFF99" size="+1">
                      <? 
				  if($pk=="a"){ echo $rs1; } 
				  if($pk=="b"){ echo $rs2; } 
				  if($pk=="c"){ echo $rs3; } 
				  if($pk=="d"){ echo $rs4; } 
				  ?>
                    </font></div></td>
                    <td width="8%" bgcolor="#CCCCCC"><div align="center"><font color="#FFFF99" size="+1">
                      <? 
				  if($pk=="a"){ echo $mb1; } 
				  if($pk=="b"){ echo $mb2; } 
				  if($pk=="c"){ echo $mb3; } 
				  if($pk=="d"){ echo $mb4; } 
				  ?>
                    </font></div></td>
                  </tr>
                </form>
                <a name="kembali" id="kembali"></a>
                <tr height="2" bgcolor="#B3CF70">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>
            <? 
			$tot_kk_c=$bd3+$rk3+$kk3+$kl3+$rs3+$mb3;
			$tot_kk_d=$bd4+$rk4+$kk4+$kl4+$rs4+$mb4;
			
			$qsts=mysqli_query($koneksi, "SELECT * FROM  tb_statistik_karakter WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='$bl' and kelas='$klsk2' and karakter='$nlk' and                                      nilai='$pk' ");
	               $j_qs=mysqli_num_rows($qsts);
				   
				   if($j_qs >=1 and $pk=="c"){
				   mysqli_query($koneksi, "UPDATE tb_statistik_karakter SET total='$tot_kk_c' WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='$bl' and kelas='$klsk2' and  
				                karakter='$nlk' and nilai='$pk' ");
				   }
				   if($j_qs >=1 and $pk=="d"){
				      mysqli_query($koneksi, "UPDATE tb_statistik_karakter SET total='$tot_kk_d' WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='$bl' and kelas='$klsk2' and  
				                   karakter='$nlk' and nilai='$pk' ");
				   }
				   if($j_qs==0 and $pk=="c"){
				   $rek=mysqli_query($koneksi, "INSERT INTO tb_statistik_karakter VALUES('','$thaj','$sem','$bl','$klsk2','$nlk','$tot_kk_c','$pk')");
				   }
				   if($j_qs==0 and $pk=="d"){
				   $rek=mysqli_query($koneksi, "INSERT INTO tb_statistik_karakter VALUES('','$thaj','$sem','$bl','$klsk2','$nlk','$tot_kk_d','$pk')");
				   }
			
			echo "Total Nilai C = $tot_kk_c "." Total Nilai D = $tot_kk_d"; } ?></td>
          </tr>
          <tr>
            <td colspan="3" bgcolor="#B3CF70">&nbsp;</td>
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