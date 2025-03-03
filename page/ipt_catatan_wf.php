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
.style14 {
	font-size: 24px;
	font-weight: bold;
	color: #FFFFFF;
	font-family: Verdana, Arial, Helvetica, sans-serif;
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
 
?>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="4">&nbsp;<font color="#FF0000" size="+3">
      <? $psn=$_GET['psn'];
	     if($psn=='1')echo "Kelas Belum Anda Pilih";
	   ?>
    </font></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3" valign="top" bgcolor="#999966"><div align="center" class="style14">CATATAN WALI FIAH </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td colspan="2" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="1%">&nbsp;</td>
    <td width="4%" valign="top"><div align="left">Kelas</div></td>
    <td colspan="2" valign="top"><select name="menu1" onchange="MM_jumpMenu('parent',this,0)">
      <? if($idkusr=="m" || $idkusr=="p" || $idkusr=="f"){ ?>
      <option value="home.php?home=nilai&amp;dpn_nl7=n7&amp;klsk=">Semua Kelas</option>
      <? } ?>
      <?
		  if($idkusr=="i"){ $wrmk="WHERE kd_kls='$idkelas' "; }else{ $wrmk="";}
	      $tampi3=mysqli_query($koneksi, "SELECT * FROM master_kelas $wrmk");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		 
	    ?>
      <option value="home.php?home=nilai&amp;dpn_n21=n21&amp;klsk=<? echo "$tp3[kd_kls]&klsk2=$tp3[kelas]"; ?>" <? if($klsk2=="$tp3[kelas]"){ echo"selected='selected'"; } ?>><? echo $tp3['kelas']; ?></option>
      <? } ?>
    </select>
      &nbsp;&nbsp;&nbsp;&nbsp;Tahun Ajaran : <? echo $thaj; ?>&nbsp;&nbsp;&nbsp;&nbsp;Semester 
      : <? echo $sem; if($sem=='I')echo " (Satu)";else echo " (Dua)"; ?>&nbsp;&nbsp;&nbsp;</td>
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
    <td height="189">&nbsp;</td>
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
            <td colspan="3" bgcolor="#B3CF70" >
              <table width="100%" height="62" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="27" bgcolor="#99CC66"><div align="center"><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">Nis</font></div></td>
                  <td bgcolor="#B3CF70"><div align="center"><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">Nama 
                  Santri</font></div></td>
                  <td bgcolor="#99CC66"><div align="center">Catatan Wali Fiah  </div></td>
                  <td bgcolor="#999900"><div align="center" class="style13">Action</div></td>
                </tr>
				
				
				 <?
				 $bgr=1;
		 while($tp=mysqli_fetch_assoc($tam)){
		 $cnt=mysqli_num_rows($tam);
		 $qku5=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$tp[kelas_st]'");
         $cqk5=mysqli_fetch_assoc($qku5);
		 
		 
		 if($klsk!=""){
	$ntgs=mysqli_query($koneksi, "SELECT * FROM  tb_catatan_wf WHERE nis='$tp[nis]' and kelas='$tp[kelas_st]' and semester='$sem' and thn_ajaran='$thaj' ");
	$cnt=mysqli_fetch_assoc($ntgs);
      $rk=mysqli_num_rows($ntgs);
	}  
		?>
               <form id="form1" name="form1" method="post" action="page/act_nilai_santri.php">
			    <tr bgcolor="#FFFFCC">
                  <td width="10%" height="24" bgcolor="#999966"><div align="center"><? echo"$tp[nis]"; ?></div></td>
                  <td width="27%">&nbsp;<? echo"$tp[nama]"; ?>
                    <input type="hidden" name="nisk" value="<? echo"$tp[nis]"; ?>" />
                    
                  <input type="hidden" name="mpl" value="<? echo"$mpl"; ?>" />
                  <input type="hidden" name="idkls" value="<? echo $klsk; ?>" />
                  <input type="hidden" name="klsk2" value="<? echo $klsk2; ?>" /></td>
				  <?
				  $cw=mysqli_query($koneksi, "SELECT * FROM tb_catatan_wf WHERE nis='$tp[nis]' and thn_ajaran='$thaj' and semester='$sem' and kelas='$klsk2' ");
                    $ccw=mysqli_fetch_assoc($cw);
			        $dd=trim("$ccw[catatan]");
				  ?>
                  <td width="52%" bgcolor="#999966"><div align="center">
                    <label>
                    <textarea name="nus" cols="45" rows="3"><? echo $dd; ?></textarea>
                    </label>
                  </div></td>
 <td width="11%"><div align="center">
   <input <? if($rk==0){ echo"name='rekam_wf'"; }else{ echo"name='ubah_wf'"; } ?> type="submit" value="S A V E" />
 </div></td>
                </tr> </form> <a name="kembali"></a>
				<tr height="2" bgcolor="#B3CF70"><td></td><td></td><td></td><td></td></tr>
				<? $bgr+=1; $ary+=1;  } ?>
            </table>                                   </td>
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