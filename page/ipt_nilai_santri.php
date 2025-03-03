<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/JavaScript">
<!--
function angka(){
  if(isNaN(form1.nt1.value)) { form1.nt1.value='';  }
  if(isNaN(form1.nt2.value)) { form1.nt2.value='';  }
  if(isNaN(form1.nt3.value)) { form1.nt3.value='';  }
  if(isNaN(form1.nt4.value)) { form1.nt4.value='';  }  
}

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<style type="text/css">
<!--
.style13 {color: #FFFFFF}
.style14 {color: #000000; }
.style15 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>
<? 
  $idkls=$_GET['idkls'];
  $mpl=$_GET['mpl'];
  $nisk=$_GET['nisk'];
  $klsk=$_GET['klsk'];
  $klsk2=$_GET['klsk2'];
  $blnk=$_GET['blnk'];
?>
<body>

  <table width="100%" border="0" cellpadding="2" cellspacing="0">
    <tr>
      <td width="20%" bgcolor="#ACD75E">&nbsp;</td>
      <td width="79%" bgcolor="#ACD75E">&nbsp;</td>
    </tr>
    <tr>
      <td height="42" colspan="2" bgcolor="#DCF3AF"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#666666">
          <tr>
            <td width="20%" bordercolor="#CCFF66" bgcolor="#CCFF66"><div align="center">Kelas
                <select name="menu1" onchange="MM_jumpMenu('parent',this,0)">
                  <? //if($idkusr=="m" || $idkusr=="p" || $idkusr=="i"){ ?>
                  <option value="home.php?home=nilai&amp;dpn_nl2=n2&amp;klsk=">Semua Kelas</option>
                  <? //} ?>
                  <?
		  if($idkusr=="i"){ $wrmk="WHERE kd_kls='$idkelas' "; }else{ $wrmk="";}
	      $tampi3=mysqli_query($koneksi, "SELECT * FROM master_kelas $wrmk");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		 
	    ?>
                  <option value="home.php?home=nilai&amp;dpn_nl2=n2&amp;klsk=<? echo "$tp3[kd_kls]&klsk2=$tp3[kelas]"; ?>" <? if($klsk2=="$tp3[kelas]"){ echo"selected='selected'"; } ?>><? echo $tp3['kelas']; ?></option>
                  <? } ?>
                  </select>
&nbsp;&nbsp;</div></td>
            <td width="13%" height="31" bordercolor="#CCFF66" bgcolor="#CCFF66">Bulan 
              <select name="select" onchange="MM_jumpMenu('parent',this,0)">
                <option value="home.php?home=nilai&dpn_nl2=n2&klsk2=<? echo"$klsk2&blnk="; ?>" <? if($blnk==""){ echo"selected='selected'"; } ?>>Pilih</option>
          <option value="home.php?home=nilai&dpn_nl2=n2&blnk=Januari&klsk2=<? echo"$klsk2"; ?>" <? if($blnk=="Januari"){ echo"selected='selected'"; } ?>>Januari</option>
          <option value="home.php?home=nilai&dpn_nl2=n2&blnk=Februari&klsk2=<? echo"$klsk2"; ?>" <? if($blnk=="Februari"){ echo"selected='selected'"; } ?>>Februari</option>
          <option value="home.php?home=nilai&dpn_nl2=n2&blnk=Maret&klsk2=<? echo"$klsk2"; ?>" <? if($blnk=="Maret"){ echo"selected='selected'"; } ?>>Maret</option>
          <option value="home.php?home=nilai&dpn_nl2=n2&blnk=April&klsk2=<? echo"$klsk2"; ?>" <? if($blnk=="April"){ echo"selected='selected'"; } ?>>April</option>
          <option value="home.php?home=nilai&dpn_nl2=n2&blnk=Mei&klsk2=<? echo"$klsk2"; ?>" <? if($blnk=="Mei"){ echo"selected='selected'"; } ?>>Mei</option>
          <option value="home.php?home=nilai&dpn_nl2=n2&blnk=Juni&klsk2=<? echo"$klsk2"; ?>" <? if($blnk=="Juni"){ echo"selected='selected'"; } ?>>Juni</option>
          <option value="home.php?home=nilai&dpn_nl2=n2&blnk=Juli&klsk2=<? echo"$klsk2"; ?>" <? if($blnk=="Juli"){ echo"selected='selected'"; } ?>>Juli</option>
          <option value="home.php?home=nilai&dpn_nl2=n2&blnk=Agustus&klsk2=<? echo"$klsk2"; ?>" <? if($blnk=="Agustus"){ echo"selected='selected'"; } ?>>Agustus</option>
          <option value="home.php?home=nilai&dpn_nl2=n2&blnk=September&klsk2=<? echo"$klsk2"; ?>" <? if($blnk=="September"){ echo"selected='selected'"; } ?>>September</option>
          <option value="home.php?home=nilai&dpn_nl2=n2&blnk=Oktober&klsk2=<? echo"$klsk2"; ?>" <? if($blnk=="Oktober"){ echo"selected='selected'"; } ?>>Oktober</option>
          <option value="home.php?home=nilai&dpn_nl2=n2&blnk=Nopember&klsk2=<? echo"$klsk2"; ?>" <? if($blnk=="Nopember"){ echo"selected='selected'"; } ?>>Nopember</option>
          <option value="home.php?home=nilai&dpn_nl2=n2&blnk=Desember&klsk2=<? echo"$klsk2"; ?>" <? if($blnk=="Desember"){ echo"selected='selected'"; } ?>>Desember</option>
              </select></td>
            <td width="67%" bordercolor="#CCFF66" bgcolor="#CCFF66">&nbsp;&nbsp;Tahun Ajaran : <? echo $thaj; ?>&nbsp;&nbsp;&nbsp;&nbsp;Semester 
            : <? echo $sem; if($sem=='I')echo " (Satu)";else echo " (Dua)"; ?>&nbsp; Cetak Rekapan : &nbsp;&nbsp;<a href="page/report_keh_perbulan.php?<? echo"klsk=$klsk2&blnk=$blnk"; ?>" class="lk" target="_blank">Rekap Absensi / Bulan </a>&nbsp; | &nbsp; <a href="page/report_keh_persemester.php?<? echo"klsk=$klsk2"; ?>" class="lk" target="_blank">Rekap Absensi / Semester </a></td>
          </tr>
      </table></td>
    </tr>
    <? 
 	if($klsk2!=""){
		  $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st FROM tb_santri WHERE kelas_st='$klsk2' AND status='a' ORDER BY nama"); }  else{ $tam=mysqli_query($koneksi, "SELECT nis,nama,kelas_st FROM tb_santri WHERE kelas_st='VIIA' AND status='a' ORDER BY nama"); }
	 ?>
    
    <tr>
      <td height="2" colspan="2" bgcolor="#669933"></td>
    </tr>
    <tr>
      <td height="23" bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
    </tr>
    <tr>
      <td height="23" colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td rowspan="2" bgcolor="#999966"><div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Nis</font></div></td>
            <td rowspan="2" bgcolor="#CCCC99"><div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> Nama 
            Santri</font></div></td>
            <td height="29" colspan="4" bgcolor="#666666"><div align="center" class="style13"><strong>KEHADIRAN</strong></div></td>
            <td rowspan="2" bgcolor="#999966"><div align="center">
                <div align="center" class="style15">Hafalan Al'Quran </div>
            </div></td>
            <td rowspan="2" bgcolor="#CCCC99"><div align="center" class="style14">Action</div></td>
          </tr>
          <tr>
            <td bgcolor="#999966"><div align="center">Sakit</div></td>
            <td bgcolor="#CCCC99"><div align="center">Izin</div></td>
            <td bgcolor="#999966"><div align="center">Alpa</div></td>
            <td bgcolor="#CCCC99"><div align="center">Tidak Solat Jamaah </div></td>
          </tr>
          <?
				 $bgr=1;
		 while($tp=mysqli_fetch_assoc($tam)){
		 $cnt=mysqli_num_rows($tam);
		 $qku5=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$tp[kelas_st]'");
         $cqk5=mysqli_fetch_assoc($qku5);
		 
		 
		 if($klsk2!=""){
	$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ext WHERE kd_santri='$tp[nis]' and semester='$sem' and bulan='$blnk' and thn_ajar='$thaj' and kelas='$klsk2' ");
	$cnt=mysqli_fetch_assoc($ntgs);
    $rk=mysqli_num_rows($ntgs);
	if($rk>=1){ $a=$cnt['alpa']; $i=$cnt['izin']; $s=$cnt['sakit']; $ts=$cnt['t_solat']; $hq=$cnt['hafalan_qr'];}else{ $a=""; $i=""; $s=""; $ts=""; $hq=""; }
	}  
	
		?>
		<form id="form1" name="form1" method="post" action="page/act_nilai_santri.php">
          <tr bgcolor="#FFFFCC">
            <td width="6%" height="24" valign="top" bgcolor="#CCCC99"><div align="center"><? echo"$tp[nis]"; ?></div></td>
            <td width="27%" valign="top">&nbsp;<? echo"$tp[nama]"; ?>
                <input type="hidden" name="nisk" value="<? echo"$tp[nis]"; ?>" />
                <input type="hidden" name="idkls" value="<? echo $klsk; ?>" />
                <input type="hidden" name="klsk2" value="<? echo $klsk2; ?>" /> <input type="hidden" name="blnk" value="<? echo $blnk; ?>" /></td>
            <td width="4%" valign="top" bgcolor="#99CC66"><div align="center">
                <input name="nt1" type="text"  value="<? echo $s; ?>" size="1" maxlength="3" />
            </div></td>
            <td width="3%" valign="top" bgcolor="#B3CF70"><div align="center">
                <input name="nt2" type="text"  value="<? echo $i; ?>" size="1" maxlength="3"/>
            </div></td>
            <td width="3%" valign="top" bgcolor="#99CC66"><div align="center">
                <input name="nt3" type="text"  value="<? echo $a; ?>" size="1" maxlength="3"/>
            </div></td>
            <td width="11%" valign="top" bgcolor="#B3CF70"><div align="center">
                <input name="nt4" type="text"  value="<? echo $ts; ?>" size="1" maxlength="3"/>
            </div></td>
            <td width="24%" valign="top" bgcolor="#99CC66"><div align="center">
              <input name="nt5" type="text"  value="<? echo $hq; ?>" size="50" />
            </div></td>
            <td width="6%" valign="top" bgcolor="#999900"><div align="center">
              <input <? if($rk==0){ echo"name='rekam'"; }else{ echo"name='ubah'"; } ?> type="submit" value="Save"  />
            </div></td>
          </tr> </form>
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
      </table></td>
    </tr>
    <? 
	$tkls=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$tp[kelas_st]' ");
	$ckls=mysqli_fetch_assoc($tkls); ?>
    <tr>
      <td height="23" bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#669933" height="2"></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <? 
	if($nisk!="" and $mpl!="" and $klsk!=""){
	$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$nisk' and kd_mp='$mpl' and semester='$sem' and thn_ajaran='$thaj' and kd_kelas='$klsk' ");
	$cnt=mysqli_fetch_assoc($ntgs);
      $rk=mysqli_num_rows($ntgs);
	}
	 ?>
  </table>

</body>
</html>
