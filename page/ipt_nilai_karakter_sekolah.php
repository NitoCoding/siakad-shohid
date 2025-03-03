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
}
.style20 {font-size: 9px}
.style21 {font-size: 14px}
.style22 {
	font-size: 12px;
	color: #FF0000;
}
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
  $psnp=$_GET['psnp'];
?>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="4" bgcolor="#999966"><p align="center" class="style19" dir="rtl"><span dir="ltr">INSTRUMEN  PENILAIAN KARAKTER SEKOLAH</span></p></td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;<font color="#FF0000" size="+3">
    </font></td>
  </tr>
  <tr>
    <td width="1%">&nbsp;</td>
    <td width="4%"><div align="left">Kelas</div></td>
    <td colspan="2" valign="top"><select name="menu1" onchange="MM_jumpMenu('parent',this,0)">
      <option value="home.php?home=nilai&amp;dpn_nl9=n9&amp;klsk=">Semua Kelas</option>
      <?
		  if($idkusr=="i"){ $wrmk="WHERE kd_kls='$idkelas' "; }else{ $wrmk="";}
	      $tampi3=mysqli_query($koneksi, "SELECT * FROM master_kelas $wrmk");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		 
	    ?>
      <option value="home.php?home=nilai&amp;dpn_nl9=n9&amp;klsk=<? echo "$tp3[kd_kls]&klsk2=$tp3[kelas]"; ?>" <? if($klsk2=="$tp3[kelas]"){ echo"selected='selected'"; } ?>><? echo $tp3['kelas']; ?></option>
      <? } ?>
    </select>
      &nbsp;&nbsp;Karakter Yang Dipantau 
      <select name="select2" onchange="MM_jumpMenu('parent',this,0)">
        <option value="home.php?home=nilai&dpn_nl9=n9<? echo"&klsk=$klsk&nisk=$nisk"; ?>">-</option>
        <option value="home.php?home=nilai&dpn_nl9=n9<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=paa"; ?>" <? if($nlk=="paa"){ echo"selected='selected'"; } ?>>PEMBINAAN ADAB & AKHLAK</option>
		<option value="home.php?home=nilai&dpn_nl9=n9<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=kd"; ?>" <? if($nlk=="kd"){ echo"selected='selected'"; } ?>>KEDISIPLINAN</option>
		<option value="home.php?home=nilai&dpn_nl9=n9<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=kk"; ?>" <? if($nlk=="kk"){ echo"selected='selected'"; } ?>>KERAPIAN & KEBERSIHAN</option>
      </select>      
      &nbsp;<span class="style17">|</span>&nbsp;&nbsp;Tahun Ajaran : <? echo $thaj; ?>&nbsp;&nbsp;&nbsp;&nbsp;Semester 
      : <? echo $sem; if($sem=='I')echo " (Satu)";else echo " (Dua)"; ?>&nbsp;&nbsp;&nbsp;Bulan 
      <select name="select3" onchange="MM_jumpMenu('parent',this,0)">
        <option value="home.php?home=nilai&amp;dpn_nl9=n9<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=$nlk"; ?>"> - </option>
		<option value="home.php?home=nilai&amp;dpn_nl9=n9<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&bl=1"; ?>" <? if($bl=="1"){ echo"selected='selected'"; } ?>> Januari </option>
		<option value="home.php?home=nilai&amp;dpn_nl9=n9<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&bl=2"; ?>" <? if($bl=="2"){ echo"selected='selected'"; } ?>> Februari </option>
		<option value="home.php?home=nilai&amp;dpn_nl9=n9<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&bl=3"; ?>" <? if($bl=="3"){ echo"selected='selected'"; } ?>> Maret </option>
		<option value="home.php?home=nilai&amp;dpn_nl9=n9<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&bl=4"; ?>" <? if($bl=="4"){ echo"selected='selected'"; } ?>> April </option>
		<option value="home.php?home=nilai&amp;dpn_nl9=n9<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&bl=5"; ?>" <? if($bl=="5"){ echo"selected='selected'"; } ?>> Mei </option>
		<option value="home.php?home=nilai&amp;dpn_nl9=n9<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&bl=6"; ?> <? if($bl=="6"){ echo"selected='selected'"; } ?>"> Juni </option>
		<option value="home.php?home=nilai&amp;dpn_nl9=n9<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&bl=7"; ?>" <? if($bl=="7"){ echo"selected='selected'"; } ?>> Juli </option>
		<option value="home.php?home=nilai&amp;dpn_nl9=n9<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&bl=8"; ?>" <? if($bl=="8"){ echo"selected='selected'"; } ?>> Agustus </option>
		<option value="home.php?home=nilai&amp;dpn_nl9=n9<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&bl=9"; ?>" <? if($bl=="9"){ echo"selected='selected'"; } ?>> September </option>
		<option value="home.php?home=nilai&amp;dpn_nl9=n9<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&bl=10"; ?>" <? if($bl=="10"){ echo"selected='selected'"; } ?>> Oktober </option>
		<option value="home.php?home=nilai&amp;dpn_nl9=n9<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&bl=11"; ?>" <? if($bl=="11"){ echo"selected='selected'"; } ?>> Nopember </option>
		<option value="home.php?home=nilai&amp;dpn_nl9=n9<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&bl=12"; ?>" <? if($bl=="12"){ echo"selected='selected'"; } ?>> Desember </option>
      </select> 
      Pekan 
      <select name="select4" onchange="MM_jumpMenu('parent',this,0)">
        <option value="home.php?home=nilai&amp;dpn_nl9=n9<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&nlka=$nlka&bl=$bl"; ?>"> - </option>
        <option value="home.php?home=nilai&amp;dpn_nl9=n9<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&nlka=$nlka&bl=$bl&pk=1"; ?>" <? if($pk=="1"){ echo"selected='selected'"; } ?>> I </option>
        <option value="home.php?home=nilai&amp;dpn_nl9=n9<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&nlka=$nlka&bl=$bl&pk=2"; ?>" <? if($pk=="2"){ echo"selected='selected'"; } ?>> II </option>
        <option value="home.php?home=nilai&amp;dpn_nl9=n9<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&nlka=$nlka&bl=$bl&pk=3"; ?>" <? if($pk=="3"){ echo"selected='selected'"; } ?>> III </option>
        <option value="home.php?home=nilai&amp;dpn_nl9=n9<? echo"&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&nlka=$nlka&bl=$bl&pk=4"; ?>" <? if($pk=="4"){ echo"selected='selected'"; } ?>> IV </option>
      </select>
      <span class="style22">&nbsp;&nbsp;      
      <? if($psnp==1){ echo"- ANDA BELUM MEMILIH BULAN ATAU PEKAN -"; } ?>
      </span></td>
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
              <table width="900" height="116" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td rowspan="3" bgcolor="#999933"><div align="center" class="style18"><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">NIS</font></div></td>
                  <td rowspan="3" bgcolor="#996600"><div align="center" class="style14"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Nama 
                  Santri</font></div></td>
                  <td height="27" colspan="7" bgcolor="#999900"><div align="center" class="style17">A D A B & A K H L A K</div></td>
                  <td rowspan="3" bgcolor="#006633"><div align="center" class="style13">Action</div></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFCC"><div align="center" class="style20"><a href="page/act_nil_karakter2.php?rkl=1&amp;<? echo"bulan=$bl&pekan=$pk&klsk=$klsk&klsk2=$klsk2&nlk=paa&cka=A"; ?>" class="style21">A</a></div></td>
                  <td>&nbsp;</td>
                  <td bgcolor="#FFFFCC"><div align="center">
                    <div align="center"><span class="style21"> <a href="page/act_nil_karakter2.php?rkl=1&amp;<? echo"bulan=$bl&pekan=$pk&klsk=$klsk&klsk2=$klsk2&nlk=paa&cka=B"; ?>">B</a> </span></div>
                  </div></td>
                  <td>&nbsp;</td>
                  <td bgcolor="#FFFFCC"><div align="center">
                    <div align="center"><span class="style21"> <a href="page/act_nil_karakter2.php?rkl=1&amp;<? echo"bulan=$bl&pekan=$pk&klsk=$klsk&klsk2=$klsk2&nlk=paa&cka=C"; ?>">C</a> </span></div>
                  </div></td>
                  <td>&nbsp;</td>
                  <td height="19" bgcolor="#FFFFCC"><div align="center" class="style14">
                    <div align="center" class="style13"><span class="style21"> <a href="page/act_nil_karakter2.php?rkl=1&amp;<? echo"bulan=$bl&pekan=$pk&klsk=$klsk&klsk2=$klsk2&nlk=paa&cka=D"; ?>">D</a></span></div>
                  </div></td>
                </tr>
                <tr>
                  <td bgcolor="#CCCC33"><div align="center"><span class="style13 style14">Salam</span></div></td>
                  <td bgcolor="#999966"><div align="center" class="style13">Bicara</div></td>
                  <td bgcolor="#CCCC33"><div align="center" class="style14">Belajar</div></td>
                  <td bgcolor="#999966"><div align="center" class="style13">Makan</div></td>
                  <td bgcolor="#CCCC33"><div align="center" class="style14">K.Guru</div></td>
                  <td bgcolor="#999966"><div align="center"><span class="style13">Ber. Gaul</span></div></td>
                  <td height="19" bgcolor="#CCCC33"><div align="center"><span class="style14">Ber. Canda</span></div></td>
                </tr>
                
				
				
				 <?
				 $bgr=1;
		 while($tp=mysqli_fetch_assoc($tam)){
		 $cnt=mysqli_num_rows($tam);
		 $qku5=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$tp[kelas_st]'");
         $cqk5=mysqli_fetch_assoc($qku5);
		 
		 
	if($klsk!="" and $nlk=='paa'){
	$ntgs=mysqli_query($koneksi, "SELECT * FROM  tb_adab_sekolah WHERE nis=$tp[nis] and pekan='$pk' and bulan='$bl' and semester='$sem' and thn_ajaran='$thaj' ");
	$cnt=mysqli_fetch_assoc($ntgs);
      $rk=mysqli_num_rows($ntgs);
	}  
	
	
		?>
               <form id="form1" name="form1" method="post" action="page/act_nilai_santri.php">
			    <tr bgcolor="#FFFFCC">
                  <td width="10%" height="24" bgcolor="#CCCC33"><div align="center"><? echo"$tp[nis]"; ?></div></td>
                  <td width="40%">&nbsp;<? echo"$tp[nama]"; ?>
                    <input type="hidden" name="nisk" value="<? echo"$tp[nis]"; ?>" />
                    
                  <input type="hidden" name="bulan" value="<? echo $bl; ?>" />
                  <input type="hidden" name="pekan" value="<? echo $pk; ?>" />                  
				  <input type="hidden" name="idkls" value="<? echo $klsk; ?>" />
                  <input type="hidden" name="klsk2" value="<? echo $klsk2; ?>" />
                  <input type="hidden" name="nlk" value="<? echo $nlk; ?>"/></td>
				  
                  <td width="6%" bgcolor="#CCCC99"><div align="center">
                    <input name="nc_s" type="text" value="<? echo $cnt['salam']; ?>" size="1" maxlength="3"/>
</div></td>
                  <td width="6%" bgcolor="#006633"><div align="center">
                    <input name="nc_b" type="text" value="<? echo $cnt['bicara']; ?>" size="1" maxlength="3"/>
</div></td>
                  <td width="6%" bgcolor="#CCCC99"><div align="center">
                    <input name="nc_e" type="text" value="<? echo $cnt['belajar']; ?>" size="1" maxlength="3"/>
</div></td>
                  <td width="6%" bgcolor="#006633"><div align="center">
                    <input name="nc_m" type="text" value="<? echo $cnt['makan_minum']; ?>" size="1" maxlength="3"/>
</div></td>
                  <td width="6%" bgcolor="#CCCC99"><div align="center">
                    <input name="nc_g" type="text" value="<? echo $cnt['ke_guru']; ?>" size="1" maxlength="3"/>
</div></td>
                  <td width="6%" bgcolor="#006633"><div align="center">
                    <input name="nc_u" type="text" value="<? echo $cnt['bergaul']; ?>" size="1" maxlength="3"/>
</div></td>
                  <td width="6%" bgcolor="#CCCC99"><div align="center">
                    <input name="nc_c" type="text" value="<? echo $cnt['bercanda']; ?>" size="1" maxlength="3"/>
                  </div></td>
 <td width="8%"><div align="center">
   <input <? if($rk==0){ echo"name='merekam_cr'"; }else{ echo"name='meubah_cr'"; } ?> type="submit" value="S A V E" <? if($klsk=="" or $klsk2=="" or $nlk=="" or $bl=="" or $pk==""){ ?>disabled="disabled" <? } ?> />
 </div></td>
                </tr> </form> <a name="kembali"></a>
				<tr height="2" bgcolor="#B3CF70"><td></td><td></td>
		          <td></td>
		          <td></td>
		          <td></td>
	              <td></td>
                  <td></td>
                  <td></td>
                <td></td><td></td></tr>
				<? $bgr+=1; $ary+=1;  } ?>
            </table>                                  
              <? } ?> </td>
          </tr>
          
          
          <tr>
            <td colspan="3" bgcolor="#B3CF70">
			<? if($nlk=='kd'){ ?>
			<table width="900" height="70" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td rowspan="3" bgcolor="#999933"><div align="center" class="style18"><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">NIS</font></div></td>
                <td rowspan="3" bgcolor="#996600"><div align="center" class="style14"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Nama 
                  Santri</font></div></td>
                <td height="27" colspan="7" bgcolor="#999900"><div align="center" class="style17">K E D I S I P L I N A N </div></td>
                <td rowspan="3" bgcolor="#006633"><div align="center" class="style13">Action</div></td>
              </tr>
              <tr>
                <td bgcolor="#FFFFCC"><div align="center" class="style20"><a href="page/act_nil_karakter2.php?rkl=2&amp;<? echo"bulan=$bl&pekan=$pk&klsk=$klsk&klsk2=$klsk2&nlk=kd&cka=A"; ?>" class="style21">A</a></div></td>
                <td bgcolor="#999966">&nbsp;</td>
                <td bgcolor="#FFFFCC"><div align="center">
                  <div align="center"><span class="style21"> <a href="page/act_nil_karakter2.php?rkl=2&amp;<? echo"bulan=$bl&pekan=$pk&klsk=$klsk&klsk2=$klsk2&nlk=kd&cka=B"; ?>">B</a> </span></div>
                </div></td>
                <td bgcolor="#999966">&nbsp;</td>
                <td bgcolor="#FFFFCC"><div align="center">
                  <div align="center"><span class="style21"> <a href="page/act_nil_karakter2.php?rkl=2&amp;<? echo"bulan=$bl&pekan=$pk&klsk=$klsk&klsk2=$klsk2&nlk=kd&cka=C"; ?>">C</a> </span></div>
                </div></td>
                <td bgcolor="#999966">&nbsp;</td>
                <td height="19" bgcolor="#FFFFCC"><div align="center" class="style14">
                  <div align="center" class="style13"><span class="style21"> <a href="page/act_nil_karakter2.php?rkl=2&amp;<? echo"bulan=$bl&pekan=$pk&klsk=$klsk&klsk2=$klsk2&nlk=kd&cka=D"; ?>">D</a></span></div>
                </div></td>
              </tr>
              <tr>
                <td bgcolor="#CCCC33"><div align="center">Mbc. Quran </div></td>
                <td bgcolor="#999966"><div align="center" class="style13">Slt. Duha </div></td>
                <td bgcolor="#CCCC33"><div align="center" class="style14">Ber. Doa </div></td>
                <td bgcolor="#999966"><div align="center" class="style13">Dis. Apel </div></td>
                <td bgcolor="#CCCC33"><div align="center" class="style14">Dis.K. Kelas</div></td>
                <td bgcolor="#999966"><div align="center" class="style13">Dis. Belajar </div></td>
                <td height="19" bgcolor="#CCCC33"><div align="center" class="style14">Dis.I. Pulang </div></td>
              </tr>
              <?
				 $bgr=1;
		 while($tp=mysqli_fetch_assoc($tam)){
		 $cnt=mysqli_num_rows($tam);
		 $qku5=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$tp[kelas_st]'");
         $cqk5=mysqli_fetch_assoc($qku5);
		 
		 
		
	if($klsk!="" and $nlk=='kd'){
	$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_sekolah WHERE nis=$tp[nis] and pekan='$pk' and bulan='$bl' and semester='$sem' and thn_ajaran='$thaj' ");
	$cnt=mysqli_fetch_assoc($ntgs);
      $rk=mysqli_num_rows($ntgs);
	}  
	
	
		?>
              <form id="form1" name="form1" method="post" action="page/act_nilai_santri.php">
                <tr bgcolor="#FFFFCC">
                  <td width="10%" height="24" bgcolor="#CCCC33"><div align="center"><? echo"$tp[nis]"; ?></div></td>
                  <td width="40%">&nbsp;<? echo"$tp[nama]"; ?>
                      <input type="hidden" name="nisk2" value="<? echo"$tp[nis]"; ?>" />
                      <input type="hidden" name="bulan2" value="<? echo $bl; ?>" />
                      <input type="hidden" name="pekan2" value="<? echo $pk; ?>" />
                      <input type="hidden" name="idkls2" value="<? echo $klsk; ?>" />
                      <input type="hidden" name="klsk22" value="<? echo $klsk2; ?>" />
                      <input type="hidden" name="nlk2" value="<? echo $nlk; ?>"/></td>
                  <td width="6%" bgcolor="#CCCC99"><div align="center">
                      <input name="nc_s2" type="text" value="<? echo $cnt['mb_quran']; ?>" size="1" maxlength="3"/>
                  </div></td>
                  <td width="6%" bgcolor="#006633"><div align="center">
                      <input name="nc_b2" type="text" value="<? echo $cnt['salat_duha']; ?>" size="1" maxlength="3"/>
                  </div></td>
                  <td width="6%" bgcolor="#CCCC99"><div align="center">
                      <input name="nc_e2" type="text" value="<? echo $cnt['berdoa']; ?>" size="1" maxlength="3"/>
                  </div></td>
                  <td width="6%" bgcolor="#006633"><div align="center">
                      <input name="nc_m2" type="text" value="<? echo $cnt['apel']; ?>" size="1" maxlength="3"/>
                  </div></td>
                  <td width="6%" bgcolor="#CCCC99"><div align="center">
                      <input name="nc_g2" type="text" value="<? echo $cnt['kembali_kekelas']; ?>" size="1" maxlength="3"/>
                  </div></td>
                  <td width="6%" bgcolor="#006633"><div align="center">
                      <input name="nc_u2" type="text" value="<? echo $cnt['belajar_dikelas']; ?>" size="1" maxlength="3"/>
                  </div></td>
                  <td width="6%" bgcolor="#CCCC99"><div align="center">
                      <input name="nc_c2" type="text" value="<? echo $cnt['waktu_kepulangan']; ?>" size="1" maxlength="3"/>
                  </div></td>
                  <td width="8%"><div align="center">
                      <input <? if($rk==0){ echo"name='merekam_cr'"; }else{ echo"name='meubah_cr'"; } ?> type="submit" value="S A V E" <? if($klsk=="" or $klsk2=="" or $nlk=="" or $bl=="" or $pk==""){ ?>disabled="disabled" <? } ?> />
                  </div></td>
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
              <? $bgr+=1; $ary+=1;  } ?>
            </table>
			<? } ?></td>
          </tr>
          <tr>
            <td colspan="3" bgcolor="#B3CF70"><? if($nlk=='kk'){ ?>
              <table width="900" height="70" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td rowspan="3" bgcolor="#999933"><div align="center" class="style18"><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">NIS</font></div></td>
                  <td rowspan="3" bgcolor="#996600"><div align="center" class="style14"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Nama 
                    Santri</font></div></td>
                  <td height="27" colspan="5" bgcolor="#999900"><div align="center" class="style17">K E B E R S I H A N & K E R A P I H A N </div></td>
                  <td rowspan="3" bgcolor="#006633"><div align="center" class="style13">Action</div></td>
                </tr>
                <tr>
                  <td height="19" bgcolor="#FFFFCC"><div align="center" class="style20"><a href="page/act_nil_karakter2.php?rkl=3&amp;<? echo"bulan=$bl&pekan=$pk&klsk=$klsk&klsk2=$klsk2&nlk=kk&cka=A"; ?>" class="style21">A</a></div></td>
                  <td bgcolor="#CCCC99"><div align="center">
                    <div align="center"><span class="style21"> <a href="page/act_nil_karakter2.php?rkl=3&amp;<? echo"bulan=$bl&pekan=$pk&klsk=$klsk&klsk2=$klsk2&nlk=kk&cka=B"; ?>">B</a> </span></div>
                  </div></td>
                  <td bgcolor="#FFFFCC"><div align="center">
                    <div align="center"><span class="style21"> <a href="page/act_nil_karakter2.php?rkl=3&amp;<? echo"bulan=$bl&pekan=$pk&klsk=$klsk&klsk2=$klsk2&nlk=kk&cka=C"; ?>">C</a> </span></div>
                  </div></td>
                  <td bgcolor="#CCCC99"><div align="center" class="style14">
                    <div align="center" class="style13"><span class="style21"> <a href="page/act_nil_karakter2.php?rkl=3&amp;<? echo"bulan=$bl&pekan=$pk&klsk=$klsk&klsk2=$klsk2&nlk=kk&cka=D"; ?>">D</a></span></div>
                  </div></td>
                  <td bgcolor="#FFFFCC">&nbsp;</td>
                </tr>
                <tr>
                  <td height="19" bgcolor="#CCCC33"><div align="center"><span class="style13 style14">Bersih Diri </span></div></td>
                  <td bgcolor="#999966"><div align="center" class="style13">Bersih Kelas </div></td>
                  <td bgcolor="#CCCC33"><div align="center" class="style14">Kerapian Barang .P </div></td>
                  <td bgcolor="#999966"><div align="center" class="style13">Rapi &amp; B.Sragam </div></td>
                  <td bgcolor="#CCCC33"><div align="center" class="style14">R.Rambut &amp; Kuku </div></td>
                </tr>
                <?
				 $bgr=1;
		 while($tp=mysqli_fetch_assoc($tam)){
		 $cnt=mysqli_num_rows($tam);
		 $qku5=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$tp[kelas_st]'");
         $cqk5=mysqli_fetch_assoc($qku5);
		 		 
	
	if($klsk!="" and $nlk=='kk'){
	$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE nis=$tp[nis] and pekan='$pk' and bulan='$bl' and semester='$sem' and thn_ajaran='$thaj' ");
	$cnt=mysqli_fetch_assoc($ntgs);
      $rk=mysqli_num_rows($ntgs);
	}  
		?>
                <form id="form1" name="form1" method="post" action="page/act_nilai_santri.php">
                  <tr bgcolor="#FFFFCC">
                    <td width="11%" height="24" bgcolor="#CCCC33"><div align="center"><? echo"$tp[nis]"; ?></div></td>
                    <td width="41%">&nbsp;<? echo"$tp[nama]"; ?>
                        <input type="hidden" name="nisk22" value="<? echo"$tp[nis]"; ?>" />
                        <input type="hidden" name="bulan22" value="<? echo $bl; ?>" />
                        <input type="hidden" name="pekan22" value="<? echo $pk; ?>" />
                        <input type="hidden" name="idkls22" value="<? echo $klsk; ?>" />
                        <input type="hidden" name="klsk222" value="<? echo $klsk2; ?>" />
                        <input type="hidden" name="nlk22" value="<? echo $nlk; ?>"/></td>
                    <td width="8%" bgcolor="#CCCC99"><div align="center">
                        <input name="nc_s22" type="text" value="<? echo $cnt['bersih_diri']; ?>" size="1" maxlength="3"/>
                    </div></td>
                    <td width="7%" bgcolor="#006633"><div align="center">
                        <input name="nc_b22" type="text" value="<? echo $cnt['bersih_kelas']; ?>" size="1" maxlength="3"/>
                    </div></td>
                    <td width="8%" bgcolor="#CCCC99"><div align="center">
                        <input name="nc_e22" type="text" value="<? echo $cnt['kerapihan_brg_pribadi']; ?>" size="1" maxlength="3"/>
                    </div></td>
                    <td width="8%" bgcolor="#006633"><div align="center">
                        <input name="nc_m22" type="text" value="<? echo $cnt['rapi_berseragam']; ?>" size="1" maxlength="3"/>
                    </div></td>
                    <td width="8%" bgcolor="#CCCC99"><div align="center">
                        <input name="nc_g22" type="text" value="<? echo $cnt['rapi_rambut_kuku']; ?>" size="1" maxlength="3"/>
                    </div></td>
                    <td width="9%"><div align="center">
                        <input value="S A V E" <? if($rk==0){ echo"name='merekam_cr'"; }else{ echo"name='meubah_cr'"; } ?> type="submit" <? if($klsk=="" or $klsk2=="" or $nlk=="" or $bl=="" or $pk==""){ ?>disabled="disabled" <? } ?> />
                    </div></td>
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
                <? $bgr+=1; $ary+=1;  } ?>
              </table>
            <? } ?></td>
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