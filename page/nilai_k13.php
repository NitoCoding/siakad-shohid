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
.style13 {color: #FFFFFF}
.style16 {color: #000000; }
.style18 {color: #FFFFFF; font-weight: bold; }
.style19 {font-size: 10px}
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
  $ki=$_GET['ki'];
  $kd_mapel2=$_GET['kd_mapel2'];
  $kd_mapel3=$_GET['kd_mapel3'];
  $idkusr=$_COOKIE['idkusr'];  
?>
<body>
<table width="1166" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="4">&nbsp;<font color="#FF0000" size="+3">
      <? $psn=$_GET['psn'];
	     if($psn=='1')echo "Kelas Belum Anda Pilih";
		 
		 $s_tb=mysqli_query($koneksi, "SELECT * FROM tb_tutup ");
         $c_tb=mysqli_fetch_assoc($s_tb);
         if($c_tb['aktif']=='a'){ $isi_st='b'; }else{ $isi_st='a'; }
	   ?>
    </font></td>
  </tr>
  <tr>
    <td width="1%" height="33">&nbsp;</td>
    <td width="2%" valign="middle" background="images/suckerfish_green.png">&nbsp;</td>
    <td colspan="2" valign="middle" background="images/suckerfish_green.png"><span class="style13">
      <select name="menu1" onchange="MM_jumpMenu('parent',this,0)" <? if($c_tb['aktif']=='b'){ echo "disabled='disabled'"; } ?>>
        
        <option value="home.php?home=nilai&amp;dpn_n25=n25&amp;klsk=">Semua Kelas</option>
       
        <?
		  if($idkusr=="i"){ $wrmk="WHERE kd_kls='$idkelas' "; }else{ $wrmk="";}
	      $tampi3=mysqli_query($koneksi, "SELECT * FROM master_kelas $wrmk");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  
	    ?>
        <option value="home.php?home=nilai&amp;dpn_n25=n25&amp;klsk=<? echo "$tp3[kd_kls]&klsk2=$tp3[kelas]"; ?>" <? if($klsk2=="$tp3[kelas]"){ echo"selected='selected'"; } ?>><? echo $tp3['kelas']; ?></option>
        <? } ?>
      </select> 
      <select name="select" onchange="MM_jumpMenu('parent',this,0)" <? if($c_tb['aktif']=='b'){ echo "disabled='disabled'"; } ?>>
        <option value="home.php?home=nilai&amp;dpn_n25=n25&amp;klsk=$klsk">KI</option>
       <option value="home.php?home=nilai&amp;dpn_n25=n25&amp;klsk=<? echo $klsk ?>&klsk2=<? echo $klsk2 ?>&ki=1" <? if($ki=='1'){ echo"selected='selected'"; } ?> >KI-1 Spritual</option>
	   <option value="home.php?home=nilai&amp;dpn_n25=n25&amp;klsk=<? echo $klsk ?>&klsk2=<? echo $klsk2 ?>&ki=2" <? if($ki=='2'){ echo"selected='selected'"; } ?> >KI-2 Sosial</option>
	   <option value="home.php?home=nilai&amp;dpn_n25=n25&amp;klsk=<? echo $klsk ?>&klsk2=<? echo $klsk2 ?>&ki=3" <? if($ki=='3'){ echo"selected='selected'"; } ?> >KI-3 Pengetahuan</option>
	   <option value="home.php?home=nilai&amp;dpn_n25=n25&amp;klsk=<? echo $klsk ?>&klsk2=<? echo $klsk2 ?>&ki=4" <? if($ki=='4'){ echo"selected='selected'"; } ?> >KI-4 Keterampilan</option>
	  </select>
      <select name="select2" onchange="MM_jumpMenu('parent',this,0)" <? if($c_tb['aktif']=='b'){ echo "disabled='disabled'"; } ?>>
        <option value="home.php?home=nilai&amp;dpn_n25=n25<? echo"&klsk=$klsk&nisk=$nisk&ki=$ki"; ?>">-</option>
        <?
	      $tampi5=mysqli_query($koneksi, "SELECT kd_mp,nama_mp FROM mata_pelajaran WHERE ket='MD' or ket='MP'");
          while($tp5=mysqli_fetch_assoc($tampi5)){
	    ?>
        <option value="home.php?home=nilai&amp;dpn_n25=n25<? echo"&klsk=$klsk&mpl=$tp5[kd_mp]&klsk2=$klsk2&ki=$ki"; ?>" <? if($mpl=="$tp5[kd_mp]"){ echo"selected='selected'"; } ?>><? echo $tp5['nama_mp']; ?></option>
        <? } ?>
      </select>
      &nbsp;<? 
	  if($ki=='3'){ $lki="report_nilai_pengetahuan.php"; } 
	  if($ki=='4'){ $lki="report_nilai_keterampilan.php"; } 
	  
?>&nbsp;&nbsp;&nbsp;&nbsp;<? if($ki==3 or $ki==4){ ?> <a href="page/<? echo"$lki?klsk=$klsk&klsk2=$klsk2&kdmpl=$mpl"; ?>" class="lk" target="_blank">Pengetahuan & Keterampilan</a> <? } 

if($klsk2=="XA" or $klsk2=="XB" or $klsk2=="XC" or $klsk2=="XD" or $klsk2=="XIA" or $klsk2=="XIB" or $klsk2=="XIC" or $klsk2=="XID" or $klsk2=="XII" or $klsk2=="XIIA" or $klsk2=="XIIB" or $klsk2=="XIIC" or $klsk2=="XIID"){ $lkr="page/report_rekap_pengetahuan_keterampilan_sma.php?"; }else{ $lkr="page/report_rekap_pengetahuan_keterampilan.php?"; }



?>
	  
	  </span> - <a href="<? echo"$lkr"."klsk=$klsk&klsk2=$klsk2"; ?>" class="lk" target="_blank">RKP. Pengetahuan &amp; Keterampilan</a> - <a href="page/report_rekap_spritual_sosial.php?<? echo"klsk2=$klsk2"; ?>" class="lk" target="_blank">RKP. Spritual & Sosial</a> - <a href="page/rekap_pengetahuan_keterampilan_spritual_sosial.php?<? echo"kdmpl=$mpl&klsk=$klsk&klsk2=$klsk2"; ?>" class="lk" target="_blank">Rekapan</a></td>
  </tr>
  <?  
	   if($ki!=""){
	      $qku7=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='$ki' and tahun_ajaran='$thaj' and semester='$sem' and kelas='$klsk' and mapel='$mpl' and guru='$idgurp'");
          $cqk7=mysqli_fetch_assoc($qku7);
		  //$klsk=$cqk7['kd_kls'];
		 // $klsk2=$cqk7['kelas'];
	   }
	?>
  <tr>
    <td>&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td width="23%" valign="top">&nbsp;</td>
    <td width="74%" valign="top"><table width="87" border="0" align="right" cellpadding="0" cellspacing="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr <? if($c_tb['aktif']=='a'){ echo" bgcolor='#FFFF00' "; $tl_sn="Tutup";}else{ echo" bgcolor='#FF0000' "; $tl_sn="Buka";  } ?> height="23">
        <td><div align="center"><a href="<? if($idkusr=="d" || $idkusr=="k"){ echo "page/act_nilai_k13.php?aktif=ok&k_tb=$isi_st"; }else{ echo"home.php?phk=1"; } ?>" class="lk"><?  echo $tl_sn; ?></a></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3" valign="top"><form id="form1" name="form1" method="post" action="page/act_nilai_k13.php">
  <? if($ki=='3' or $ki=='4'){  ?>
      <table width="100%" border="0" cellspacing="0" cellpadding="2">
        <tr>
          <td width="13%" height="55"> 
            <span class="style13">
            <? if ($ki==3 or $ki==4){ echo "Kompetensi Dasar"; } if($ki==1){ echo "Sikap Spritual"; }  if($ki==2){ echo "Sikap Sosial"; }   ?>
            </span></td>
          <td width="4%"><span class="style13">
            <? if ($ki==3){ echo "3.1";} if($ki==4){ echo "4.1"; }   ?>
          </span></td>
          <td width="83%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="3">
            <tr>
              <td width="35%"><textarea name="textarea1" cols="80" rows="3" ><? echo $cqk7['kd1']; ?></textarea></td>
              <td width="65%" valign="top"> <? if($cqk7['kd1']!=NULL){ ?>
			<a href="home.php?home=nilai&<? echo"dpn_n26=$ki&id_kik=$cqk7[id_ki]&klsk2=$klsk2&ki=$ki&kd=$ki.1&mapel=$mpl&klsk=$klsk"; ?>"><img src="images/bt_nilai.jpg" border="0" /></a></td>
			<? } ?>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><span class="style13"></span></td>
          <td><span class="style13">
            <? if ($ki==3){ echo "3.2";} if($ki==4){ echo "4.2"; }   ?>
          </span></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="3">
            <tr>
              <td width="51%"><textarea name="textarea2" cols="80" rows="3" ><? echo $cqk7['kd2']; ?></textarea></td>
              <td width="49%" valign="top">
			  <? if($cqk7['kd2']!=NULL){ ?>
		<a href="home.php?home=nilai&<? echo"dpn_n26=$ki&id_kik=$cqk7[id_ki]&klsk2=$klsk2&ki=$ki&kd=$ki.2&mapel=$mpl&klsk=$klsk"; ?>"><img src="images/bt_nilai.jpg"  border="0" /></a></td>
          <? } ?>
		    </tr>
          </table></td>
        </tr>
        <tr>
          <td><span class="style13"></span></td>
          <td><span class="style13">
            <? if ($ki==3){ echo "3.3";} if($ki==4){ echo "4.3"; }   ?>
          </span></td>
          <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="3">
            <tr>
              <td width="51%"><textarea name="textarea3" cols="80" rows="3" ><? echo $cqk7['kd3']; ?></textarea></td>
              <td width="49%" valign="top">
			  <? if($cqk7['kd3']!=NULL){ ?>
		<a href="home.php?home=nilai&<? echo"dpn_n26=$ki&id_kik=$cqk7[id_ki]&klsk2=$klsk2&ki=$ki&kd=$ki.3&mapel=$mpl&klsk=$klsk"; ?>"><img src="images/bt_nilai.jpg"  border="0" /></a></td>
           <? } ?>
		    </tr>
          </table></td>
        </tr>
        <tr>
          <td><span class="style13"></span></td>
          <td><span class="style13">
            <? if ($ki==3){ echo "3.4";} if($ki==4){ echo "4.4"; }   ?>
          </span></td>
          <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="3">
            <tr>
              <td width="51%"><textarea name="textarea4" cols="80" rows="3" ><? echo $cqk7['kd4']; ?></textarea></td>
              <td width="49%" valign="top">
		 <? if($cqk7['kd4']!=NULL){ ?>
		<a href="home.php?home=nilai&<? echo"dpn_n26=$ki&id_kik=$cqk7[id_ki]&klsk2=$klsk2&ki=$ki&kd=$ki.4&mapel=$mpl&klsk=$klsk"; ?>"><img src="images/bt_nilai.jpg" border="0" /></a></td>
          <? } ?>
		    </tr>
          </table></td>
        </tr>
        <tr>
          <td><span class="style13"></span></td>
          <td><span class="style13">
            <? if ($ki==3){ echo "3.5";} if($ki==4){ echo "4.5"; }   ?>
          </span></td>
          <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="3">
            <tr>
              <td width="51%"><textarea name="textarea5" cols="80" rows="3" ><? echo $cqk7['kd5']; ?></textarea></td>
              <td width="49%" valign="top">
			<? if($cqk7['kd5']!=NULL){ ?>  
			<a href="home.php?home=nilai&<? echo"dpn_n26=$ki&id_kik=$cqk7[id_ki]&klsk2=$klsk2&ki=$ki&kd=$ki.5&mapel=$mpl&klsk=$klsk"; ?>"><img src="images/bt_nilai.jpg" border="0" /></a></td>
			<? } ?>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><span class="style13"></span></td>
          <td><span class="style13">
            <? if ($ki==3){ echo "3.6";} if($ki==4){ echo "4.6"; }   ?>
          </span></td>
          <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="3">
            <tr>
              <td width="51%"><textarea name="textarea6" cols="80" rows="3" ><? echo $cqk7['kd6']; ?></textarea></td>
              <td width="49%" valign="top">
			  <? if($cqk7['kd6']!=NULL){ ?>
			 <a href="home.php?home=nilai&<? echo"dpn_n26=$ki&id_kik=$cqk7[id_ki]&klsk2=$klsk2&ki=$ki&kd=$ki.6&mapel=$mpl&klsk=$klsk"; ?>"><img src="images/bt_nilai.jpg" border="0" /></a>
			 <? } ?>
			 </td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><span class="style13"></span></td>
          <td><span class="style13">
            <? if ($ki==3){ echo "3.7";} if($ki==4){ echo "4.7"; }   ?>
          </span></td>
          <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="3">
            <tr>
              <td width="51%"><textarea name="textarea7" cols="80" rows="3" ><? echo $cqk7['kd7']; ?></textarea></td>
              <td width="49%" valign="top">
		 <? if($cqk7['kd7']!=NULL){ ?>
		<a href="home.php?home=nilai&<? echo"dpn_n26=$ki&id_kik=$cqk7[id_ki]&klsk2=$klsk2&ki=$ki&kd=$ki.7&mapel=$mpl&klsk=$klsk"; ?>"><img src="images/bt_nilai.jpg"  border="0" /></a>
		<? } ?>
		</td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><span class="style13"></span></td>
          <td><span class="style13">
            <? if ($ki==3){ echo "3.8";} if($ki==4){ echo "4.8"; }   ?>
          </span></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="3">
            <tr>
              <td width="51%"><textarea name="textarea8" cols="80" rows="3" ><? echo $cqk7['kd8']; ?></textarea></td>
              <td width="49%" valign="top">
			 <? if($cqk7['kd8']!=NULL){ ?>
			<a href="home.php?home=nilai&<? echo"dpn_n26=$ki&id_kik=$cqk7[id_ki]&klsk2=$klsk2&ki=$ki&kd=$ki.8&mapel=$mpl&klsk=$klsk"; ?>"><img src="images/bt_nilai.jpg" border="0" /></a>
			<? } ?>
			</td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
		<?
		 $cki=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE kd_kompetensi='$ki' and tahun_ajaran='$thaj' and semester='$sem' and kelas='$klsk' and mapel='$mpl' ");
         while($ckic=mysqli_fetch_assoc($cki)){
		 if($idgurp!=$ckic['guru']){
		   $cgk=mysqli_query($koneksi, "SELECT * FROM guru_pegawai WHERE id_gp='$ckic[guru]' ");
           $cgs=mysqli_fetch_assoc($cgk);
		   echo "<font color='#ffffff'><b><font color='red'>PERHATIAN</font></> : Mata pelajaran ini sudah di ampuh oleh $cgs[nama_gp] untuk kelas $klsk2 <br><br></font>";
		   $c_mpl=1;
		   }
		  }
		 
		?>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><input type="submit" name="rekam" value="Simpan" <? if($klsk=="" or $mpl=="" or $ki=="" or $c_mpl==1){?> disabled="disabled" <? } ?> />
            <input type="hidden" name="id_k" value="<? echo $cqk7['id_ki']; ?>" />
            <input type="hidden" name="kompetensi_inti" value="<? echo"$ki"; ?>" />
            <input type="hidden" name="id_kelas" value="<? echo"$klsk"; ?>" />
            <input type="hidden" name="kd_mapel" value="<? echo"$mpl"; ?>" />
            <input type="hidden" name="klsk2" value="<? echo"$klsk2"; ?>"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<? if($klsk!=NULL and $klsk2!=NULL and $mpl!=NULL and $ki!=NULL and $ki!='4'){  ?>
<a href="home.php?home=nilai&<? echo"dpn_n26=5&klsk=$klsk&klsk2=$klsk2&mapel=$mpl&id_kik=$cqk7[id_ki]&ki=$ki"; ?>"><img src="images/nilai_ujian.jpg" border="0" align="absmiddle" />
<? } ?>
</a>&nbsp;&nbsp;&nbsp;<a href="home.php?home=nilai&dpn_n26=6&<? echo"klsk=$klsk&klsk2=$klsk2"; ?>" class="lk"><img src="images/cetak_rp.jpg" width="134" height="29" border="0" align="absmiddle" /></a></td>  
        </tr>
      </table> <? } ?>
        </form>    </td>
  </tr>
  <tr>
    <td height="2" colspan="4"></td>
  </tr>
  <tr>
    <td height="29">&nbsp;</td>
    <td colspan="3" valign="top">
	<? if($ki=='1'){ ?>
	<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
      
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="4">&nbsp;</td>
        <td></td>
      </tr>
      <tr>
        <td height="28"><span class="style13"><strong>Kelas</strong></span></td>
        <td><span class="style13">
          : <? echo"$klsk2"; ?>
        </span></td>
        <td colspan="5">&nbsp;</td>
        </tr>
      <tr>
        <td height="27"><span class="style13">Mata Pelajaran</span></td>
        <td><span class="style13">:
            <?
		$ntu=mysqli_query($koneksi, "SELECT kd_mp,nama_mp FROM mata_pelajaran WHERE kd_mp='$mpl'");
	    $ctk=mysqli_fetch_assoc($ntu);
		echo $ctk['nama_mp'];
		?>
        </span></td>
        <td colspan="4">&nbsp;</td>
        <td></td>
      </tr>
      <tr>
        <td height="27"><span class="style13"><strong>Semester</strong></span></td>
        <td><span class="style13">: <? echo"$sem"; ?></span></td>
        <td colspan="4">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="27"><span class="style18">Tahun Ajarans         </span></td>
        <td><span class="style13">: <? echo"$thaj"; ?></span></td>
        <td colspan="4">&nbsp;</td>
        <td><div align="center" class="style13"><a href="page/report_sikap_spritual.php?<? echo"klsk2=$klsk2&mapel=$mpl"; ?>" class="lk" target="_blank"><img src="images/layout.gif" width="20" height="22" align="absmiddle" border="0" /></a></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="4">&nbsp;</td>
        <td></td>
      </tr>
      <tr>
        <td rowspan="2" bgcolor="#CCCCCC"><div align="center"><strong>Nis</strong></div></td>
        <td rowspan="2" bgcolor="#CCCCCC"><div align="center"><strong> Nama 
          Santri</strong></div></td>
        <td height="29" colspan="4" bgcolor="#CCCC99"><div align="center" class="style16"><strong>ASPEK SIKAP SPRITUAL </strong><span class="style19">(input angka 1 - 4)</span> </div></td>
        <td rowspan="2" bgcolor="#CCCCCC"><div align="center"><strong>Action</strong></div></td>
      </tr>
      <tr>
        <td bgcolor="#CCCCCC"><div align="center" class="style16">Berdoa sebelum dan sesudah melakukan kegiatan </div></td>
        <td bgcolor="#CCCCCC"><div align="center"><span class="style16">Menjaga toleransi beragama </span></div></td>
        <td bgcolor="#CCCCCC"><div align="center">bersyukur atas nikmat dan karunia tuhan yang maha esa </div></td>
        <td bgcolor="#CCCCCC"><div align="center" class="style16">Menjalankan ibadah sesuai dengan agamanya </div></td>
      </tr>
      <? 
 		 
	 $tampi3=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='$klsk2' AND status='a' ORDER BY nama ");
     while($tp=mysqli_fetch_assoc($tampi3)){
	 
	  $qku7=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ki1 WHERE  tahun_ajaran='$thaj' and semester='$sem' and id_santri='$tp[id_santri]' and mapel='$mpl' ");
      $cqk7=mysqli_fetch_assoc($qku7);
	 ?>
      <form id="form1" name="form1" method="post" action="page/act_nilai_k13.php">
        <tr bgcolor="#FFFFCC">
          <td width="9%" height="39" valign="middle" bgcolor="#FFFFFF"><div align="center"><? echo"$tp[nis]"; ?></div></td>
          <td width="27%" valign="middle" bgcolor="#FFFFFF">&nbsp;<? echo"$tp[nama]"; ?>
              <input type="hidden" name="id_santri" value="<? echo"$tp[id_santri]"; ?>" />
              <input type="hidden" name="id_k11k" value="<? echo $cqk7['id_ki1']; ?>" />
              <input type="hidden" name="klsk22" value="<? echo"$klsk2"; ?>"/>
            <input type="hidden" name="kd_mapel2" value="<? echo"$mpl"; ?>" /></td>
          <td width="15%" valign="middle" bgcolor="#FFFFFF"><div align="center">
              <input name="ns1" type="text"  value="<? echo $cqk7['n1']; ?>" size="1" maxlength="3" />
          </div></td>
          <td width="14%" valign="middle" bgcolor="#FFFFFF"><div align="center">
            <input name="ns2" type="text"  value="<? echo $cqk7['n2']; ?>" size="1" maxlength="3"/>
</div></td>
          <td width="14%" valign="middle" bgcolor="#FFFFFF"><div align="center">
            <input name="ns3" type="text"  value="<? echo $cqk7['n3']; ?>" size="1" maxlength="3"/>
</div></td>
          <td width="13%" valign="middle" bgcolor="#FFFFFF"><div align="center">
            <input name="ns4" type="text"  value="<? echo $cqk7['n4']; ?>" size="1" maxlength="3"/>
</div></td>
          <td width="8%" valign="middle" bgcolor="#FFFFFF"><div align="center">
              <input type="submit" name="rekam2" value="SaveNS" <? if($klsk2==NULL or $mpl==NULL){ ?> disabled="disabled" <? } ?> />
          </div></td>
        </tr>
      </form>
      <?   } ?>
      <a name="kembali" id="kembali"></a>
      <tr height="2" bgcolor="#B3CF70">
        <td height="3"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </table>
	<? } ?></td>
  </tr>
  <tr>
    <td height="2" colspan="4"></td>
  </tr>
  <tr>
    <td height="29">&nbsp;</td>
    <td colspan="3" valign="top">
	<? if($ki=='2'){ ?>
	<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="7">&nbsp;</td>
        <td></td>
      </tr>
      <tr>
        <td height="28">&nbsp;</td>
        <td><span class="style13"><strong>Kelas</strong></span></td>
        <td colspan="7"><span class="style13">: <? echo"$klsk2"; ?> </span></td>
        <td></td>
      </tr>
      <tr>
        <td height="27">&nbsp;</td>
        <td><span class="style13">Mata Pelajaran</span> </td>
        <td colspan="7"><span class="style13">: 
            <?
		$ntu=mysqli_query($koneksi, "SELECT kd_mp,nama_mp FROM mata_pelajaran WHERE kd_mp='$mpl'");
	    $ctk=mysqli_fetch_assoc($ntu);
		echo $ctk['nama_mp'];
		?>
        </span></td>
        <td></td>
      </tr>
      <tr>
        <td height="27">&nbsp;</td>
        <td><span class="style13"><strong>Semester</strong></span></td>
        <td colspan="7"><span class="style13">: <? echo"$sem"; ?></span></td>
        <td></td>
      </tr>
      <tr>
        <td height="27">&nbsp;</td>
        <td><span class="style18">Tahun Ajarans </span></td>
        <td colspan="7"><span class="style13">: <? echo"$thaj"; ?></span></td>
        <td><div align="center"><span class="style13"><a href="page/report_sikap_sosial.php?<? echo"klsk2=$klsk2&mapel=$mpl"; ?>" class="lk" target="_blank"><img src="images/layout.gif" width="20" height="22" align="absmiddle" border="0" /></a></span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="7">&nbsp;</td>
        <td></td>
      </tr>
      <tr>
        <td rowspan="2" bgcolor="#CCCCCC"><div align="center"><strong>Nis</strong></div></td>
        <td rowspan="2" bgcolor="#CCCCCC"><div align="center"><strong> Nama 
          Santri</strong></div></td>
        <td height="29" colspan="7" bgcolor="#CCCC99"><div align="center" class="style16"><strong>ASPEK SIKAP SOSIAL </strong><span class="style19">(input angka 1 - 4)</span></div></td>
        <td rowspan="2" bgcolor="#CCCCCC"><div align="center"><strong>Action</strong></div></td>
      </tr>
      <tr>
        <td bgcolor="#CCCCCC"><div align="center" class="style16">Jujur </div></td>
        <td bgcolor="#CCCCCC"><div align="center"><span class="style16">Disiplin</span></div></td>
        <td bgcolor="#CCCCCC"><div align="center">Tanggung Jawab</div></td>
        <td bgcolor="#CCCCCC"><div align="center"><span class="style16">Toleransi</span></div></td>
        <td bgcolor="#CCCCCC"><div align="center">Gotong Royong </div></td>
        <td bgcolor="#CCCCCC"><div align="center">Santun</div></td>
        <td bgcolor="#CCCCCC"><div align="center" class="style16">Percaya Diri </div></td>
      </tr>
      <? 
 		 
	 $tampi3=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='$klsk2' AND status='a' ORDER BY nama ");
     while($tp=mysqli_fetch_assoc($tampi3)){
	 
	  $qku7=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ki2 WHERE  tahun_ajaran='$thaj' and semester='$sem' and id_santri='$tp[id_santri]' and mapel='$mpl' ");
      $cqk7=mysqli_fetch_assoc($qku7);
	 ?>
      <form id="form1" name="form1" method="post" action="page/act_nilai_k13.php">
        <tr bgcolor="#FFFFCC">
          <td width="7%" height="39" valign="middle" bgcolor="#FFFFFF"><div align="center"><? echo"$tp[nis]"; ?></div></td>
          <td width="24%" valign="middle" bgcolor="#FFFFFF">&nbsp;<? echo"$tp[nama]"; ?>
              <input type="hidden" name="id_santri2" value="<? echo"$tp[id_santri]"; ?>" />
              <input type="hidden" name="id_k11k2" value="<? echo $cqk7['id_ki2']; ?>" />
              <input type="hidden" name="klsk222" value="<? echo"$klsk2"; ?>"/>
              <input type="hidden" name="kd_mapel3" value="<? echo"$mpl"; ?>" /></td>
          <td width="8%" valign="middle" bgcolor="#FFFFFF"><div align="center">
              <input name="nss1" type="text"  value="<? echo $cqk7['s1']; ?>" size="1" maxlength="3" />
          </div></td>
          <td width="8%" valign="middle" bgcolor="#FFFFFF"><div align="center">
              <input name="nss2" type="text"  value="<? echo $cqk7['s2']; ?>" size="1" maxlength="3"/>
          </div></td>
          <td width="8%" valign="middle" bgcolor="#FFFFFF"><div align="center">
            <input name="nss3" type="text"  value="<? echo $cqk7['s3']; ?>" size="1" maxlength="3"/>
</div></td>
          <td width="8%" valign="middle" bgcolor="#FFFFFF"><div align="center">
            <input name="nss4" type="text"  value="<? echo $cqk7['s4']; ?>" size="1" maxlength="3"/>
</div></td>
          <td width="8%" valign="middle" bgcolor="#FFFFFF"><div align="center">
            <input name="nss5" type="text"  value="<? echo $cqk7['s5']; ?>" size="1" maxlength="3"/>
</div></td>
          <td width="8%" valign="middle" bgcolor="#FFFFFF"><div align="center">
              <input name="nss6" type="text"  value="<? echo $cqk7['s6']; ?>" size="1" maxlength="3"/>
          </div></td>
          <td width="8%" valign="middle" bgcolor="#FFFFFF"><div align="center">
              <input name="nss7" type="text"  value="<? echo $cqk7['s7']; ?>" size="1" maxlength="3"/>
          </div></td>
          <td width="13%" valign="middle" bgcolor="#FFFFFF"><div align="center">
              <input type="submit" name="rekam3" value="Save" <? if($klsk2==NULL or $mpl==NULL){ ?> disabled="disabled" <? } ?> />
          </div></td>
        </tr>
      </form>
      <?   } ?>
      <a name="kembali" id="kembali"></a>
      <tr height="2" bgcolor="#B3CF70">
        <td height="3"></td>
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
	<? } ?>	</td>
  </tr>
  <tr>
    <td height="29">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
  </tr>
</table>


</body>
</html>