<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style3 {color: #FFFFFF; font-weight: bold; }
.style4 {
	color: #FF3300;
	font-weight: bold;
}
.style6 {font-size: 8px}
.style7 {font-size: 9px}
.style9 {color: #FFFFFF}
.style10 {font-size: 10px; color: #FFFFFF; }
.style11 {font-size: 10px}
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
$klsk=$_GET['klsk'];
ini_set('max_execution_time',300);
?>
<body>
<form id="form1" name="form1" method="post" action="page/act_dt_rbg.php">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
      <td colspan="3"></td>
    </tr>
    

    <tr>
      <td colspan="3" background="images/suckerfish_green.png" bgcolor="#B3CF70"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="2%" height="27">&nbsp;</td>
          <td width="2%"><img src="images/text.gif" /></td>
          <td width="96%"><span class="style9">Leger Santri </span></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td colspan="3" height="7"></td>
    </tr>
    <tr>
      <td colspan="3" valign="top" background="images/suckerfish_green2.png">&nbsp;</td>
    </tr>
    <tr>
      <td height="35" colspan="3" bgcolor="#eeeeee">&nbsp;&nbsp;Kelas&nbsp;
        <select name="menu1" onchange="MM_jumpMenu('parent',this,0)">
          <option value="home.php?home=legr&klsk=">-</option>
          <?
	      $tampi3=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas ");
          while($tp3=mysqli_fetch_assoc($tampi3)){
	    ?>
          <option value="home.php?home=legr&klsk=<? echo $tp3['kelas']; ?>" <? if($klsk=="$tp3[kelas]"){ echo"selected='selected'"; } ?>><? echo $tp3['kelas']; ?></option>
          <? } ?>
      </select>  |       <label><a href="page/ttd_kepsek.php" target="_blank">Tanggal Raport</a></label></td>
    </tr>
    
    <tr>
      <td colspan="3" valign="top" background="images/suckerfish_green2.png" >&nbsp;</td>
    </tr>
    
    <tr>
      <td width="2%" valign="top">&nbsp;</td>
      <td width="42%" valign="top">&nbsp;</td>
      <td width="54%" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" valign="top">
	  <?
	      if($klsk!=""){$klst="WHERE kelas='$klsk'";}
	      $tampil=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas $klst ");
          while($tp=mysqli_fetch_assoc($tampil)){
	  ?>
	    <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#B3CF70">
          <tr> 
            <td height="21" colspan="8" bordercolor="#99CC66" background="images/suckerfish_yellow.png"><div align="left" class="style4">&nbsp;Kelas 
                : <? 
				        $tampi=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE ket='MD' or ket='MP'");
                        $tpk=mysqli_fetch_assoc($tampi); 
					     if($klsk=="XA" or $klsk=='XB' or $klsk=='XC' or $klsk=="VIIA" or $klsk=="VIIB" or $klsk=="VIIC" or $klsk=="VIID"){ $kkkm=$tpk['kkm']; }
						 if($klsk=="XIA" or $klsk=="XIB" or $klsk=="XIC" or $klsk=="VIIIA" or $klsk=="VIIIB" or $klsk=="VIIIC" or $klsk=="VIIID"){ $kkkm=$tpk['kkm2']; }
						 if($klsk=="XIIA" or $klsk=="XIIB" or $klsk=="IXA" or $klsk=="IXB" or $klsk=="IXC" or $klsk=="IXD"){ $kkkm=$tpk['kkm3']; }	
				
				         if($klsk=='XA' or $klsk=='XB' or $klsk=='XC' or $klsk=='XIA' or $klsk=='XIB' or $klsk=='XIC' or $klsk=='XIIA' or $klsk=='XIIB' or $klsk=='XIIC')
				  { 
	                 	 				 
				  $lkl="page/report_leger_SMA.php?kkkm=$kkkm&idstr="; }else{ $lkl="page/report_leger.php?kkkm=$kkkm&idstr="; }
				echo $tp['kelas']; ?>&nbsp;&nbsp;&nbsp;<a href="<? echo"$lkl"; ?><? echo $tp['kelas']; ?>" target="_blank">Cetak Leger</a> </div></td>
          </tr>
          <tr> 
            <td width="4%" bgcolor="#B3CF70" background="images/suckerfish_green2.png"><div align="center"><span class="style3">NIS</span></div></td>
            <td width="23%" bgcolor="#B3CF70" background="images/suckerfish_green2.png"><div align="center"><span class="style3">Nama            Lengkap </span></div></td>
            <td width="7%" bgcolor="#B3CF70" background="images/suckerfish_green2.png"><div align="center" class="style9"><span class="style11">DATA RAPORT SANTRI</span></div></td>
            <td width="7%" bgcolor="#B3CF70" background="images/suckerfish_green2.png"><div align="center" class="style10">RAPORT PONDOK </div></td>
            <td width="7%" bgcolor="#B3CF70" background="images/suckerfish_green2.png"><div align="center" class="style10">RAPORT MID </div></td>
            <td width="7%" bgcolor="#B3CF70" background="images/suckerfish_green2.png"><div align="center" class="style9"><span class="style7"><?  if($klsk=="VIIIA" or $klsk=='VIIIB' or $klsk=='VIIIC' or $klsk=="VIIA" or $klsk=="VIIB" or $klsk=="VIIC" or $klsk=="VIID"){ echo"R.LSN"; }else{ echo"R.SKL"; } ?></span></div></td>
            <td width="7%" bgcolor="#B3CF70" background="images/suckerfish_green2.png"><div align="center">R. K13 </div></td>
            <td width="7%" bgcolor="#B3CF70" background="images/suckerfish_green2.png"><div align="center">R. Kar </div></td>
          </tr>
          <?  $a=0;
	      $tmpkls=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='$tp[kelas]' AND status='a' ORDER BY nama");
          while($ct=mysqli_fetch_assoc($tmpkls)){
	   ?>
          <tr> 
            <td height="21" bgcolor="#eeeeee"><div align="center"><? echo"$ct[nis]"; ?></div></td>
            <td bgcolor="#FFFFFF"><div align="left">&nbsp;<? echo"$ct[nama]"; ?></div></td>
            <td valign="top" bgcolor="#FFFFFF"><div align="center"><a href="<? echo"page/bio_data_santri.php?idstr="; ?><? echo $ct['id_santri']; ?>" target="_blank"><img src="images/text.gif" width="16" height="16" border="0" /></a></div></td>
			<? 
			if($klsk=='XA' or $klsk=='XB' or $klsk=='XC' or $klsk=='XD' or $klsk=='XIA' or $klsk=='XIB' or $klsk=='XIC' or $klsk=='XID' or $klsk=='XIIA' or $klsk=='XIIB' or $klsk=='XIIC' or $klsk=='XIID'){
			   if($sem=='I') { $rpp="page/raport/raport_pd_sma_k13.php?idstr="; 
			                   $rp="page/report_raport_st1_SMA.php?idstr=";  
							    }
			   if($sem=='II') { $rpp="page/raport/raport_pd_sma_naikk.php?idstr="; $rp="page/report_raport_st1_SMA_naik.php?idstr="; } 
			}
			
			if($klsk=='XII'){ 
			 if($sem=='I') { $rpp="page/raport/raport_pd_sma_k13.php?idstr=";  $rp="page/report_raport_st1_SMA.php?idstr=";   }
			                  
			   if($sem=='II') { $rpp="page/raport/raport_pd_sma_naikk.php?idstr="; $rp="page/report_raport_st1_SMA_naik.php?idstr="; } 
			 }
			
		/* 	if($klsk=='VIIA' or $klsk=='VIIB' or $klsk=='VIIC'){
			   if($sem=='I') { $rpp="page/raport/raport_pd_k13.php?idstr=";  }
			   if($sem=='II') { $rpp="page/raport/raport_pd_naik.php?idstr="; $rp="page/report_raport_st1_naik.php?idstr="; } 
			} */
			
			if($klsk=='VIIA' or$klsk=='VIIB' or $klsk=='VIIC' or $klsk=='VIID' or $klsk=='VIIIA' or $klsk=='VIIIB' or $klsk=='VIIIC' or $klsk=='VIIID' or $klsk=='IXA' or $klsk=='IXB' or $klsk=='IXC' or $klsk=='IXD'){
			   if($sem=='I') { $rpp="page/raport/raport_pd.php?idstr="; $rp="page/report_raport_st1.php?idstr="; }
			   if($sem=='II') { $rpp="page/raport/raport_pd_naik.php?idstr="; $rp="page/report_raport_st1_naik.php?idstr="; } 
			 }
			    ?>
			<td valign="middle" bgcolor="#eeeeee"><div align="center"><a href="<? echo"$rpp"; ?><? echo $ct['id_santri']; ?>" target="_blank"><img src="images/text.gif" width="16" height="16" border="0" /></a></div></td>
			<td valign="middle" bgcolor="#FFFFFF"><div align="center"><a href="<? if($klsk=='XA' or $klsk=='XB' or $klsk=='XC' or $klsk=='XD' or $klsk=='XIA' or $klsk=='XIB' or $klsk=='XIC' or $klsk=='XID' or $klsk=='XIIA' or $klsk=='XIIB' or $klsk=='XIIC' or $klsk=='XIID'){ echo"page/raport/raport_pd_mid_sma.php?idstr="; }else{
			 echo"page/raport/raport_pd_mid.php?idstr="; } ?><? echo $ct['id_santri']; ?>" target="_blank"><img src="images/text.gif" width="16" height="16" border="0" /></a></div></td>
			<td valign="middle" bgcolor="#eeeeee"><div align="center"><a href="<? echo"$rp"; ?><? echo $ct['id_santri']; ?>" target="_blank"><img src="images/text.gif" width="16" height="16" border="0" /></a></div></td>
            <td valign="middle" bgcolor="#eeeeee"><div align="center"><a href="<? if($klsk=='XA' or $klsk=='XB' or $klsk=='XC' or $klsk=='XD' or $klsk=='XIA' or $klsk=='XIB' or $klsk=='XIC' or $klsk=='XID' or $klsk=='XIIA' or $klsk=='XIIB' or $klsk=='XIIC'){ echo"page/raport_k13_sma_sms1.php?idstr="; } else { echo"page/raport_k13_smp_sms1.php?idstr="; } ?><? echo $ct['id_santri']; ?>" target="_blank"><img src="images/text.gif" width="16" height="16" border="0" /></a></div></td>
            <td valign="middle" bgcolor="#eeeeee"><table width="100%" height="19" border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                <td width="50%"><div align="center"><a href="<? echo"page/raport_karakter_1.php?idstr="; ?><? echo $ct['id_santri']; ?>" target="_blank"><img src="images/text.gif" width="16" height="16" border="0" /></a></div></td>
                <td width="50%"><div align="center"><a href="<? echo"page/raport_karakter_charts.php?idstr="; ?><? echo $ct['id_santri']; ?>" target="_blank"><img src="images/text.gif" width="16" height="16" border="0" /></a></div></td>
              </tr>
            </table></td>
          </tr>
          <? } 
		  
		  
		  ?>
          <tr> 
            <td colspan="8" background="images/suckerfish_green2.png">&nbsp;</td>
          </tr>
        </table>
	  <? $a+=1; echo "<br>"; }   
	  ?></td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
    </tr>
  </table>
</form>

</body>
</html>
