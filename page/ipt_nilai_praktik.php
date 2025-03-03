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
.style15 {color: #FFFF99}
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
 
?>
<body>
<table width="1700" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="4">&nbsp;<font color="#FF0000" size="+3">
      <? $psn=$_GET['psn'];
	     if($psn=='1')echo "Kelas Belum Anda Pilih";
	   ?>
    </font></td>
  </tr>
  <tr>
    <td width="1%" height="32">&nbsp;</td>
    <td width="1%" valign="middle" background="images/suckerfish_green.png">&nbsp;</td>
    <td colspan="2" valign="middle" background="images/suckerfish_green.png"><span class="style13">
      <select name="menu1" onchange="MM_jumpMenu('parent',this,0)">
        
        <option value="home.php?home=nilai&dpn_nl5=n5&amp;klsk=">Pilih Kelas</option>
        
        <?
		  if($idkusr=="i"){ $wrmk="WHERE kd_kls='$idkelas' "; }else{ $wrmk="";}
	      $tampi3=mysqli_query($koneksi, "SELECT * FROM master_kelas $wrmk");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  
	    ?>
        <option value="home.php?home=nilai&dpn_nl5=n5&amp;klsk=<? echo "$tp3[kd_kls]&klsk2=$tp3[kelas]"; ?>" <? if($klsk2=="$tp3[kelas]"){ echo"selected='selected'"; } ?>><? echo $tp3['kelas']; ?></option>
        <? } ?>
      </select>
&nbsp;&nbsp;&nbsp;&nbsp;Tahun Ajaran : <? echo $thaj; ?>&nbsp;&nbsp;&nbsp;&nbsp;Semester 
      : <? echo $sem; if($sem=='I')echo " (Satu)";else echo " (Dua)"; ?>&nbsp;&nbsp;&nbsp;&nbsp;Mata Pelajaran
      <select name="select2" onchange="MM_jumpMenu('parent',this,0)">
        <option value="home.php?home=nilai&amp;dpn_nl2=n2<? echo"&klsk=$klsk&nisk=$nisk"; ?>">-</option>
        <?
	      $tampi5=mysqli_query($koneksi, "SELECT kd_mp,nama_mp FROM mata_pelajaran WHERE ket='MD' or ket='MP'");
          while($tp5=mysqli_fetch_assoc($tampi5)){
	    ?>  
        <option value="home.php?home=nilai&dpn_nl5=n5<? echo"&klsk=$klsk&mpl=$tp5[kd_mp]&klsk2=$klsk2"; ?>" <? if($mpl=="$tp5[kd_mp]"){ echo"selected='selected'"; } ?>><? echo $tp5['nama_mp']; ?></option>
        <? } ?>
      </select>
&nbsp;&nbsp;   <a href="page/report_nilai_praktik.php?<? echo"klsk=$klsk&kdmpl=$mpl"; ?>" class="lk" target="_blank">Cetak Laporan </a></span></td>
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
    <td width="24%" valign="top">&nbsp;</td>
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
            <td colspan="3" bordercolor="#FFFFFF"><div align="left" class="style4">&nbsp;
                  <? 
		  if($idkusr=="i"){
		  $qku=mysqli_query($koneksi, "SELECT kd_kls,kd_gp FROM wali_kelas WHERE kd_gp='$idgurp'");
          $cqk=mysqli_fetch_assoc($qku);
		  
		  $qku2=mysqli_query($koneksi, "SELECT * FROM master_kelas WHERE kd_kls='$cqk[kd_kls]'");
          $cqk2=mysqli_fetch_assoc($qku2);
           $klsk=$cqk2['kd_kls'];
		  }
		  if($klsk!=""){ echo"Kelas $klsk2 Yang Anda Pilih"; }else{ ?>
              Semua Kelas
  <? }?>
            </div></td>
          </tr>
          <tr>
            <td width="75" colspan="3" bordercolor="#FFFFFF">&nbsp;</td>
          </tr>
          
         
          <tr>
            <td colspan="3" >
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr class="head">
                  <td height="37" width="79" background="images/suckerfish_green.png" bgcolor="#99CC66"><div align="center"><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">Nis</font></div></td>
                  <td width="354" background="images/suckerfish_green.png" bgcolor="#B3CF70"><div align="center"><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">Nama 
                  Santri</font></div></td>
                  <td bgcolor="#99CC66" background="images/suckerfish_green.png" width="29"><div align="center" class="style13">T4.1</div></td>
                  <td bgcolor="#99CC66" background="images/suckerfish_green.png" width="29"><div align="center" class="style13">T4.2</div></td>
                  <td bgcolor="#99CC66" background="images/suckerfish_green.png" width="29"><div align="center" class="style13">T4.3</div></td>
                  <td bgcolor="#99CC66" background="images/suckerfish_green.png" width="29"><div align="center" class="style13">T4.4</div></td>
                  <td bgcolor="#99CC66" background="images/suckerfish_green.png" width="29"><div align="center" class="style13">T4.5</div></td>
                  <td bgcolor="#99CC66" background="images/suckerfish_green.png" width="29"><div align="center" class="style13">T4.6</div></td>
                  <td bgcolor="#99CC66" background="images/suckerfish_green.png" width="29"><div align="center" class="style13">T4.7</div></td>
                  <td bgcolor="#99CC66" background="images/suckerfish_green.png" width="29"><div align="center" class="style13">T4.8</div></td>
                  <td bgcolor="#99CC66" background="images/suckerfish_green.png" width="29"><div align="center" class="style13">T4.9</div></td>
                  <td bgcolor="#99CC66" background="images/suckerfish_green.png" width="37"><div align="center" class="style13">T4.10</div></td>
                  <td bgcolor="#999900" background="images/suckerfish_yellow.png" width="29">&nbsp;</td>
                  <td bgcolor="#999900" background="images/suckerfish_green.png" width="54"><div align="center" class="style15">PH1</div></td>
                  <td bgcolor="#999900" background="images/suckerfish_green.png" width="56"><div align="center" class="style13">R.PH1</div></td>
                  <td bgcolor="#999900" background="images/suckerfish_yellow.png" width="42"><div align="center" class="style15">PH2</div></td>
                  <td bgcolor="#999900" background="images/suckerfish_yellow.png" width="56"><div align="center" class="style13">R.PH2</div></td>
                  <td bgcolor="#999900" background="images/suckerfish_green.png" width="42"><div align="center" class="style15">PH3</div></td>
                  <td bgcolor="#999900" background="images/suckerfish_green.png" width="56"><div align="center" class="style13">R.PH3</div></td>
                  <td bgcolor="#999900" background="images/suckerfish_yellow.png" width="42"><div align="center" class="style15">PH4</div></td>
                  <td bgcolor="#999900" background="images/suckerfish_yellow.png" width="56"><div align="center" class="style13">R.PH4</div></td>
                  <td bgcolor="#999900" background="images/suckerfish_green.png" width="50"><div align="center" class="style15">PH5</div></td>
                  <td bgcolor="#99CC66" background="images/suckerfish_green.png" width="56"><div align="center" class="style13">R.PH5</div></td>
                  <td bgcolor="#999900" background="images/suckerfish_yellow.png" width="64"><div align="center" class="style15">Sikap</div></td>
                  <td bgcolor="#99CC66" background="images/suckerfish_green.png" width="65"><div align="center" class="style13">PTS
                  </div>
                  <div align="center"></div></td>
                  <td bgcolor="#999900" background="images/suckerfish_green.png" width="68"><div align="center" class="style15">NR.PTS</div></td>
                  <td bgcolor="#99CC66" background="images/suckerfish_yellow.png" width="58"><div align="center" class="style13">PAS</div></td>
                  <td bgcolor="#999900" background="images/suckerfish_yellow.png" width="69"><div align="center" class="style13">NR.PAS</div></td>
                  <td bgcolor="#99CC66" background="images/suckerfish_green.png" width="87"><div align="center" class="style15">Action</div></td>
                </tr>
				
				
				 <?
				 $bgr=1;
		 while($tp=mysqli_fetch_assoc($tam)){
		 $cnt=mysqli_num_rows($tam);
		 $qku5=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$tp[kelas_st]'");
         $cqk5=mysqli_fetch_assoc($qku5);
		 
		 
		 if($mpl!="" and $klsk!=""){
	$ntgs=mysqli_query($koneksi, "SELECT * FROM tb_nilai_keterampilan WHERE nis=$tp[nis] and kd_mp='$mpl' and semester='$sem' and thn_ajaran='$thaj' and kd_kelas='$klsk' ");
	$cnt=mysqli_fetch_assoc($ntgs);
      $rk=mysqli_num_rows($ntgs);
	}  
		?>
               <form id="form1" name="form1" method="post" action="page/act_nilai_santri.php">
			    <tr bgcolor="#FFFFCC" background="images/suckerfish_yellow.png">
                  <td width="79" height="26" background="images/entry_meta_bg.jpg" bgcolor="#FFFFCC"><div align="center">
                    <? if($nisk=="$tp[nis]"){ echo"<font color='#FF0000'>";} ?> 
                  <? echo"$tp[nis]"; ?></div></td>
                  <td width="354" background="images/entry_meta_bg.jpg" bgcolor="#FFFFCC">
                    <? if($nisk=="$tp[nis]"){ echo"<font color='#FF0000'>";} ?>
                    <? echo"$tp[nama]"; ?>  
                    <input type="hidden" name="nisk" value="<? echo"$tp[nis]"; ?>" />
                    
                    <input type="hidden" name="mpl" value="<? echo"$mpl"; ?>" />
                    <input type="hidden" name="idkls" value="<? echo $klsk; ?>" />                    <input type="hidden" name="klsk2" value="<? echo $klsk2; ?>" />                  </td>
				  
                  <td width="29" background="images/suckerfish_yellow.png" bgcolor="#FFFFCC"><div align="center">
                    <input name="nt1" type="text" onkeyup="return angka();" value="<? echo $cnt['nt1']; ?>" size="1" maxlength="3" />
                  </div></td>
                  <td width="29" background="images/suckerfish_green.png" bgcolor="#FFFFCC"><div align="center">
                    <input name="nt2" type="text" onkeyup="return angka();" value="<? echo $cnt['nt2']; ?>" size="1" maxlength="3"/>
                  </div></td>
                  <td width="29" background="images/suckerfish_yellow.png" bgcolor="#FFFFCC"><div align="center">
                    <input name="nt3" type="text" onkeyup="return angka();" value="<? echo $cnt['nt3']; ?>" size="1" maxlength="3"/>
                  </div></td>
                  <td width="29" background="images/suckerfish_yellow.png" bgcolor="#FFFFCC"><div align="center">
                    <input name="nt4" type="text" onkeyup="return angka();" value="<? echo $cnt['nt4']; ?>" size="1" maxlength="3"/>
                  </div></td>
                  <td width="29" background="images/suckerfish_green.png" bgcolor="#FFFFCC"><div align="center">
                    <input name="nt5" type="text" onkeyup="return angka();" value="<? echo $cnt['nt5']; ?>" size="1" maxlength="3"/>
                  </div></td>
                  <td width="29" background="images/suckerfish_yellow.png" bgcolor="#FFFFCC"><div align="center">
                    <input name="nt6" type="text" onkeyup="return angka();" value="<? echo $cnt['nt6']; ?>" size="1" maxlength="3"/>
                  </div></td>
                  <td width="29" background="images/suckerfish_yellow.png" bgcolor="#FFFFCC"><div align="center">
                    <input name="nt7" type="text" onkeyup="return angka();" value="<? echo $cnt['nt7']; ?>" size="1" maxlength="3"/>
                  </div></td>
                  <td width="29" background="images/suckerfish_yellow.png" bgcolor="#FFFFCC"><div align="center">
                    <input name="nt8" type="text" onkeyup="return angka();" value="<? echo $cnt['nt8']; ?>" size="1" maxlength="3"/>
                  </div></td>
                  <td width="29" background="images/suckerfish_yellow.png" bgcolor="#FFFFCC"><div align="center">
                    <input name="nt9" type="text" onkeyup="return angka();" value="<? echo $cnt['nt9']; ?>" size="1" maxlength="3"/>
                  </div></td>
                  <td width="37" background="images/suckerfish_yellow.png" bgcolor="#FFFFCC"><div align="center">
                    <input name="nt10" type="text" onkeyup="return angka();" value="<? echo $cnt['nt10']; ?>" size="1" maxlength="3"/>
                  </div></td>
                  <td width="29" background="images/suckerfish_yellow.png" bgcolor="#999900"><div align="center"></div></td>
                  <td width="54" background="images/suckerfish_green.png" bgcolor="#999900"><div align="center">
                    <input name="uh1" type="text" onkeyup="return angka();" value="<? echo $cnt['uh1']; ?>" size="1" maxlength="3"/>
                  </div></td>
                  <td width="56" background="images/suckerfish_green.png" bgcolor="#999900"><div align="center">
                    <input name="ruh12" type="text" onkeyup="return angka();" value="<? echo $cnt['remedi_uh1']; ?>" size="1" maxlength="3"/>
                  </div></td>
                  <td width="42" background="images/suckerfish_yellow.png" bgcolor="#999900"><div align="center">
                    <input name="uh2" type="text" onkeyup="return angka();" value="<? echo $cnt['uh2']; ?>" size="1" maxlength="3"/>
                  </div></td>
                  <td width="56" background="images/suckerfish_yellow.png" bgcolor="#999900"><div align="center">
                    <input name="ruh122" type="text" onkeyup="return angka();" value="<? echo $cnt['remedi_uh2']; ?>" size="1" maxlength="3"/>
                  </div></td>
                  <td width="42" background="images/suckerfish_green.png" bgcolor="#999900"><div align="center">
                    <input name="uh3" type="text" onkeyup="return angka();" value="<? echo $cnt['uh3']; ?>" size="1" maxlength="3"/>
                  </div></td>
                  <td width="56" background="images/suckerfish_green.png" bgcolor="#999900"><div align="center">
                    <input name="uh123" type="text" onkeyup="return angka();" value="<? echo $cnt['remedi_uh3']; ?>" size="1" maxlength="3"/>
                  </div></td>
                  <td width="42" background="images/suckerfish_yellow.png" bgcolor="#999900"><div align="center">
                    <input name="uh4" type="text" onkeyup="return angka();" value="<? echo $cnt['uh4']; ?>" size="1" maxlength="3"/>
                  </div></td>
                  <td width="56" background="images/suckerfish_yellow.png" bgcolor="#999900"><div align="center">
                    <input name="uh124" type="text" onkeyup="return angka();" value="<? echo $cnt['remedi_uh4']; ?>" size="1" maxlength="3"/>
                  </div></td>
                  <td width="50" background="images/suckerfish_green.png" bgcolor="#999900"><div align="center">
                    <input name="uh5" type="text" onkeyup="return angka();" value="<? echo $cnt['uh5'];  ?>" size="1" maxlength="3"/>
                  </div></td>
                  <td width="56" background="images/suckerfish_green.png" bgcolor="#666633"><div align="center">
                    <input name="uh125" type="text" onkeyup="return angka();" value="<? echo $cnt['remedi_uh5']; ?>" size="1" maxlength="3"/>
                  </div></td>
                  <td width="64" background="images/suckerfish_yellow.png" bgcolor="#FFFFCC">
                    <div align="center">
                      <input name="sikap" type="text" value="<? echo $cnt['sikap'];  ?>" size="1" maxlength="3"/>
                    </div></td>
                  <td width="65" background="images/suckerfish_green.png" bgcolor="#FFFFCC">
                    <div align="center">
                      <input name="nuts" type="text" onkeyup="return angka();" value="<? echo $cnt['uts'];  ?>" size="1" maxlength="3"/>
                    </div></td>
                  <td width="68" background="images/suckerfish_green.png" bgcolor="#999900">
                    <div align="center">
                      <input name="remedi" type="text" onkeyup="return angka();" value="<? echo $cnt['remedi'];  ?>" size="1" maxlength="3"/>
                    </div></td>
                  <td width="58" background="images/suckerfish_yellow.png" bgcolor="#FFFFCC">
                    <div align="center">
                      <input name="nus" type="text" onkeyup="return angka();" value="<? echo $cnt['us']; ?>" size="1" maxlength="3"/>
                    </div></td>
                  <td width="69" background="images/suckerfish_yellow.png" bgcolor="#999900">
                    <div align="center">
                      <input name="remedi_us" type="text" onkeyup="return angka();" value="<? echo $cnt['remedi_us'];  ?>" size="1" maxlength="3"/>
                    </div></td>
                  <td width="87" valign="top" background="images/suckerfish_green.png" bgcolor="#FFFFCC">
                    <div align="center">
                      <input <? if($rk==0){ echo"name='menyimpan_kt'"; }else{ echo"name='mengubah_kt'"; } ?> type="submit" value="S A V E" />
                    </div></td>
                </tr> </form> 
				<tr height="2" bgcolor="#B3CF70"><td height="5"></td>
				<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
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
				  <td></td>
				  <td></td>
			    <td></td><td></td><td></td>
			    <td></td>
			    <td></td></tr>
				<? $bgr+=1; $ary+=1;  } ?>
            </table>                                   </td>
          </tr>
          
          
          <tr>
            <td colspan="3" bgcolor="#B3CF70">&nbsp;</td>
          </tr>
      </table></td>
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