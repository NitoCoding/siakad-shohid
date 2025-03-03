<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
.style2 {color: #FF0000}
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
  $kpb=$_GET['kpb'];
  $klsk=$_GET['klsk'];
?>
<body>

  <table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
	  <td colspan="3" bgcolor="#B3CF70"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="2%" height="31">&nbsp;</td>
          <td width="3%"><img src="images/collapsed.gif" width="16" height="12" /></td>
          <td width="95%">Pengembangan Bakat Santri </td>
        </tr>
      </table></td>
    </tr>
	<tr>
	  <td colspan="3" height="7"></td>
    </tr>
	<tr>
	  <td bgcolor="#ACD75E">&nbsp;</td>
	  <td width="77%" bgcolor="#ACD75E">&nbsp;</td>
	  <td width="21%" bgcolor="#ACD75E">&nbsp;</td>
    </tr>
	<tr>
	  <td height="30" bgcolor="#DCF3AF">&nbsp;</td>
	  <td colspan="2" bgcolor="#DCF3AF">Kelas 
	  <select name="select" onchange="MM_jumpMenu('parent',this,0)">
	    <option value="home.php?home=nilai&dpn_nl3=n3">-</option>
	    <?
	      $tmpa2=mysqli_query($koneksi, "SELECT kelas FROM master_kelas  ");
          while($tma2=mysqli_fetch_assoc($tmpa2)){
	    ?>
	    <option value="home.php?home=nilai&dpn_nl3=n3&klsk=<? echo "$tma2[kelas]&kpb=$kpb"; ?>" <? if($klsk==$tma2['kelas']){ echo"selected='selected'"; } ?>><? echo $tma2['kelas']; ?></option>
	    <? } ?>
      </select></td>
    </tr>
	
	<tr>
	  <td colspan="3" bgcolor="#ACD75E">&nbsp;</td>
    </tr>
	
	<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
    </tr>
	<tr>
	  <td height="25" bgcolor="#DCF3AF">&nbsp;</td>
	  <td bgcolor="#DCF3AF"><? if($klsk!=""){ echo"Kelas : $klsk"; }else{ echo"Semua Kelas"; } ?>&nbsp; |&nbsp; <span class="style2">Catatan</span> Untuk nilai Eskul Masukkan Huruf (A,B,C,D) </td>
	  <td bgcolor="#DCF3AF">&nbsp;</td>
    </tr>
	
	<tr>
      <td width="2%" height="65" bgcolor="#DCF3AF">&nbsp;</td>
      <td colspan="2" valign="top" bgcolor="#DCF3AF"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#B3CF70">
        <tr>
          <td width="4%" bordercolor="#B3CF70" bgcolor="#3366FF"><div align="center" class="style1">No</div></td>
          <td width="9%" bordercolor="#B3CF70" bgcolor="#339900"><div align="center"><span class="style1 style1">Nis</span></div></td>
          <td width="28%" bordercolor="#B3CF70" bgcolor="#3366FF"><div align="center"><span class="style1">Nama</span></div></td>
          <td width="59%" bordercolor="#B3CF70" bgcolor="#339900"><div align="center"><span class="style1">Pegembangan Bakat yang Diikuti </span></div></td>
        </tr>
        <?  $no=1;
		  if($klsk!=""){ $kl="WHERE kelas_st='$klsk' AND status='a' ORDER BY nama"; } else{ $kl="WHERE kelas_st='VIIA' AND status='a' ORDER BY nama"; }
		  $tampil3=mysqli_query($koneksi, "SELECT id_santri,nama,nis,kelas_st FROM tb_santri $kl ");
          while($tp3=mysqli_fetch_assoc($tampil3)){
		  
		?>
		<form id="form1" name="form1" method="post" action="page/act_dt_wkls.php">
        <tr>
          <td bgcolor="#FFFFFF"><div align="center"><? echo $no; ?></div></td>
          <td height="21" bgcolor="#FFFFFF"><div align="center"><a href="page/act_dt_pbakat.php?rekam=Simpan&amp;<? echo"kpb=$kpb&klsk=$klsk&idsk=$tp3[id_santri]"; ?>">
              <? 
		  echo $tp3['nis']; ?>
          </a></div></td>
          <td bgcolor="#FFFFFF">&nbsp; <?  echo $tp3['nama']; ?>  <input type="hidden" name="nisk" value="<? echo $tp3['nis']; ?>" />
            <input type="hidden" name="kls" value="<? echo $tp3['kelas_st']; ?>" /></td>
          <td bgcolor="#FFFFFF"><table width="900" border="0" cellspacing="0" cellpadding="3">
            <tr>
              <td bgcolor="#CCCCCC"><div align="center"></div></td>
              <td bgcolor="#CCCCFF"><div align="center"></div></td>
              <td bgcolor="#CCCCCC"><div align="center"></div></td>
              <td bgcolor="#CCCCFF"><div align="center"></div></td>
              <td bgcolor="#CCCCCC"><div align="center">
                <label></label>
              </div></td>
              </tr>		
            <tr>
              <td width="26%" bgcolor="#CCCCCC"><div align="center">
                <? 
		  $pbk=mysqli_query($koneksi, "SELECT * FROM tb_pbakat WHERE kd_santri='$tp3[id_santri]'  ");
          $tpbk=mysqli_fetch_assoc($pbk); 
		  
		  $pbk1=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='$tpbk[kd_mp]'  ");
          $tpbk1=mysqli_fetch_assoc($pbk1);
		  echo $tpbk1['nama_mp'];
		  
		  $tnils=mysqli_query($koneksi, "SELECT * FROM tb_nilai_eskul WHERE thn_eskl='$thaj' AND sms_eskl='$sem' AND nis_eskl='$tp3[nis]' AND kls_eskl='$tp3[kelas_st]' AND   
			                    kd_eskl1='$tpbk1[kd_mp]'  ");
          $cnils=mysqli_fetch_assoc($tnils);
		  $rk=mysqli_num_rows($tnils);
		  
		 
				
				if($tpbk1['nama_mp']!=""){  ?>
                <input type="hidden" name="kd_eskul1" value="<? echo $tpbk1['kd_mp']; ?>" />
                <input name="eskul1" type="text" size="1" value="<? echo $cnils['nil_eskl1']; ?>" /> 
                <?  } ?>
              </div></td>
              <td width="22%" bgcolor="#CCCCFF"><div align="center">
                <? 
		  $pbk=mysqli_query($koneksi, "SELECT * FROM tb_pbakat WHERE kd_santri='$tp3[id_santri]' limit 1,1 ");
          $tpbk=mysqli_fetch_assoc($pbk); 
		  
		  $pbk2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='$tpbk[kd_mp]'  ");
          $tpbk2=mysqli_fetch_assoc($pbk2);
		  echo $tpbk2['nama_mp'];
		
		  $tnils=mysqli_query($koneksi, "SELECT * FROM tb_nilai_eskul WHERE thn_eskl='$thaj' AND sms_eskl='$sem' AND nis_eskl='$tp3[nis]' AND kls_eskl='$tp3[kelas_st]' AND   
			                    kd_eskl1='$tpbk1[kd_mp]' AND kd_eskl2='$tpbk2[kd_mp]'  ");
          $cnils=mysqli_fetch_assoc($tnils);
		//  $rk=mysqli_num_rows($tnils);
				
				if($tpbk2['nama_mp']!=""){  ?>
                <input type="hidden" name="kd_eskul2" value="<? echo $tpbk2['kd_mp']; ?>" />
                <input name="eskul2" type="text" size="1" value="<? echo $cnils['nil_eskl2']; ?>" />
                <?  } ?>
</div></td>
              <td width="22%" bgcolor="#CCCCCC"><div align="center">
                <? 
		  $pbk=mysqli_query($koneksi, "SELECT * FROM tb_pbakat WHERE kd_santri='$tp3[id_santri]' limit 2,1 ");
          $tpbk=mysqli_fetch_assoc($pbk); 
		  
		  $pbk3=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='$tpbk[kd_mp]'  ");
          $tpbk3=mysqli_fetch_assoc($pbk3);
		  echo $tpbk3['nama_mp'];
		  
		
		$tnils=mysqli_query($koneksi, "SELECT * FROM tb_nilai_eskul WHERE thn_eskl='$thaj' AND sms_eskl='$sem' AND nis_eskl='$tp3[nis]'   ");
        $cnils=mysqli_fetch_assoc($tnils);
		
		//$rk=mysqli_num_rows($tnils);
				
				if($tpbk3['nama_mp']!=""){  ?>
                <input type="hidden" name="kd_eskul22" value="<? echo $tpbk3['kd_mp']; ?>" />
                <input name="eskul22" type="text" size="1" value="<? echo $cnils['nil_eskl3']; ?>" />
                <?  } ?>
</div></td>
              <td width="21%" bgcolor="#CCCCFF"><div align="center">
                <?
				  $pbk=mysqli_query($koneksi, "SELECT * FROM tb_pbakat WHERE kd_santri='$tp3[id_santri]' limit 3,1 ");
          $tpbk=mysqli_fetch_assoc($pbk); 
		  
		  $pbk4=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='$tpbk[kd_mp]'  ");
          $tpbk4=mysqli_fetch_assoc($pbk4);
		  echo $tpbk4['nama_mp'];
		
		$tnils=mysqli_query($koneksi, "SELECT * FROM tb_nilai_eskul WHERE thn_eskl='$thaj' AND sms_eskl='$sem' AND nis_eskl='$tp3[nis]'  ");
        $cnils=mysqli_fetch_assoc($tnils);
	//	$rk=mysqli_num_rows($tnils);
				
				 if($tpbk4['nama_mp']!=""){  ?>
                <input type="hidden" name="kd_eskul222" value="<? echo $tpbk4['kd_mp']; ?>" />
                <input name="eskul222" type="text" size="1" value="<? echo $cnils['nil_eskl4']; ?>" />
                <?  }  ?>
</div></td>
              <td width="9%" bgcolor="#CCCCCC"><div align="center">
                <div align="center">
                  <input type="submit" value="Save" <? if($rk==0){ echo"name='rekam'"; }else{ echo"name='ubah'"; } ?> />
</div>
              </div></td>
              </tr>
          </table></td>
        </tr> </form>
        <? $no+=1; } ?>
        <tr>
          <td bordercolor="#B3CF70" bgcolor="#B3CF70">&nbsp;</td>
          <td bordercolor="#B3CF70" bgcolor="#B3CF70">&nbsp;</td>
          <td bordercolor="#B3CF70" bgcolor="#B3CF70">&nbsp;</td>
          <td bordercolor="#B3CF70" bgcolor="#B3CF70">&nbsp;</td>
        </tr>
      </table></td>
    </tr>
    

    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF"><div align="left"></div></td>
      <td bgcolor="#DCF3AF" <? if($wrna3==1)echo"bgcolor='#FF0000'"; ?>><div align="left"></div></td>
    </tr>
  </table>


</body>
</html> 