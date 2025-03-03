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
.style9 {color: #FFFFFF}
.style14 {color: #000000}
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
$ibadah=$_GET['ibadah'];
$adab=$_GET['adab'];
$disiplin=$_GET['disiplin'];
$bersih=$_GET['bersih'];
$rapi=$_GET['rapi'];
$bl=$_GET['bl'];
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
      <label><span class="style9">
      <select name="menu1" onchange="MM_jumpMenu('parent',this,0)">
        <option value="home.php?home=nilai&amp;dpn_n22=n22&amp;klsk=">Semua Kelas</option>        
        <option value="home.php?home=nilai&amp;dpn_n22=n22&klsk=vii" <? if($klsk=="vii"){ echo"selected='selected'"; } ?>>VII PUTRA</option>
		<option value="home.php?home=nilai&amp;dpn_n22=n22&klsk=viii" <? if($klsk=="viii"){ echo"selected='selected'"; } ?>>VIII PUTRA</option>
		<option value="home.php?home=nilai&amp;dpn_n22=n22&klsk=ix" <? if($klsk=="ix"){ echo"selected='selected'"; } ?>>IX</option>
		<option value="home.php?home=nilai&amp;dpn_n22=n22&klsk=x" <? if($klsk=="x"){ echo"selected='selected'"; } ?>>X</option>
		<option value="home.php?home=nilai&amp;dpn_n22=n22&klsk=xi" <? if($klsk=="xi"){ echo"selected='selected'"; } ?>>XI</option>
		<option value="home.php?home=nilai&amp;dpn_n22=n22&klsk=xii" <? if($klsk=="xii"){ echo"selected='selected'"; } ?>>XII</option>
		<option value="home.php?home=nilai&amp;dpn_n22=n22&klsk=viid" <? if($klsk=="viid"){ echo"selected='selected'"; } ?>>VII Putri</option>
		<option value="home.php?home=nilai&amp;dpn_n22=n22&klsk=viiic" <? if($klsk=="viiic"){ echo"selected='selected'"; } ?>>VIII Putri</option>
      </select>
&nbsp;<span class="style14">Bulan</span>
<select name="select3" onchange="MM_jumpMenu('parent',this,0)">
  <option value="home.php?home=nilai&amp;dpn_n22=n22"> - </option>
  <option value="home.php?home=nilai&amp;dpn_n22=n22<? echo"&klsk=$klsk&bl=1"; ?>" <? if($bl=="1"){ echo"selected='selected'"; } ?>> Januari </option>
  <option value="home.php?home=nilai&amp;dpn_n22=n22<? echo"&klsk=$klsk&bl=2"; ?>" <? if($bl=="2"){ echo"selected='selected'"; } ?>> Februari </option>
  <option value="home.php?home=nilai&amp;dpn_n22=n22<? echo"&klsk=$klsk&bl=3"; ?>" <? if($bl=="3"){ echo"selected='selected'"; } ?>> Maret </option>
  <option value="home.php?home=nilai&amp;dpn_n22=n22<? echo"&klsk=$klsk&bl=4"; ?>" <? if($bl=="4"){ echo"selected='selected'"; } ?>> April </option>
  <option value="home.php?home=nilai&amp;dpn_n22=n22<? echo"&klsk=$klsk&bl=5"; ?>" <? if($bl=="5"){ echo"selected='selected'"; } ?>> Mei </option>
  <option value="home.php?home=nilai&amp;dpn_n22=n22<? echo"&klsk=$klsk&bl=6"; ?> <? if($bl=="6"){ echo"selected='selected'"; } ?>"> Juni </option>
  <option value="home.php?home=nilai&amp;dpn_n22=n22<? echo"&klsk=$klsk&bl=7"; ?>" <? if($bl=="7"){ echo"selected='selected'"; } ?>> Juli </option>
  <option value="home.php?home=nilai&amp;dpn_n22=n22<? echo"&klsk=$klsk&bl=8"; ?>" <? if($bl=="8"){ echo"selected='selected'"; } ?>> Agustus </option>
  <option value="home.php?home=nilai&amp;dpn_n22=n22<? echo"&klsk=$klsk&bl=9"; ?>" <? if($bl=="9"){ echo"selected='selected'"; } ?>> September </option>
  <option value="home.php?home=nilai&amp;dpn_n22=n22<? echo"&klsk=$klsk&bl=10"; ?>" <? if($bl=="10"){ echo"selected='selected'"; } ?>> Oktober </option>
  <option value="home.php?home=nilai&amp;dpn_n22=n22<? echo"&klsk=$klsk&bl=11"; ?>" <? if($bl=="11"){ echo"selected='selected'"; } ?>> Nopember </option>
  <option value="home.php?home=nilai&amp;dpn_n22=n22<? echo"&klsk=$klsk&bl=12"; ?>" <? if($bl=="12"){ echo"selected='selected'"; } ?>> Desember </option>
</select>      
<span class="style14">&nbsp;&nbsp;Hitung Nilai :&nbsp;&nbsp; <? if($idkusr=="d" ){ ?> <a href="page/act_rangking_karakter.php?<?  echo"klsk=$klsk&bl=$bl&kal_nil=1&ket=a"; ?>">Nilai A</a> + <a href="page/act_rangking_karakter.php?<?  echo"klsk=$klsk&bl=$bl&kal_nil=1&ket=b"; ?>">Nilai B</a> + <a href="page/act_rangking_karakter.php?<?  echo"klsk=$klsk&bl=$bl&kal_nil=1&ket=c"; ?>">Nilai C</a> + <a href="page/act_rangking_karakter.php?<?  echo"klsk=$klsk&bl=$bl&kal_nil=1&ket=d"; ?>">Nilai D</a> <? } ?></span></span></label></td>
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
	     /*  if($klsk=="vii"){$klst="WHERE kelas='VIIA' and kelas='VIIB' and kelas='VIIC' and kelas='VIID'";}
	      $tampil=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas $klst ");
          while($tp=mysqli_fetch_assoc($tampil)){ */
	  ?>
	    <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#B3CF70">
          <tr> 
            <td height="21" colspan="5" bordercolor="#99CC66" background="images/suckerfish_yellow.png"><div align="left" class="style4">&nbsp;&nbsp;<a href="page/act_rangking_karakter.php?<?  echo"klsk=$klsk&bl=$bl&hit_r=1"; ?>">Cek Rengking</a> </div></td>
          </tr>
          <tr>
            <td width="5%" height="21" background="images/suckerfish_green2.png" bgcolor="#B3CF70"><div align="center"><strong>NO.</strong></div></td>
            <td width="13%" background="images/suckerfish_green2.png" bgcolor="#B3CF70"><div align="center"><strong>NIS</strong></div></td>
            <td width="45%" background="images/suckerfish_green2.png" bgcolor="#B3CF70"><div align="center"><strong>N A M A</strong></div></td>
            <td width="20%" background="images/suckerfish_green2.png" bgcolor="#B3CF70"><div align="center"><strong>TOTAL NILAI KARAKTER </strong></div></td>
            <td width="17%" background="images/suckerfish_green2.png" bgcolor="#B3CF70"><div align="center"><strong>RANGKING</strong></div></td>
          </tr>
          
          <?  $a=1;
		  if($klsk=="vii"){$kelast="WHERE (kelas_st='VIIA' or kelas_st='VIIB' or kelas_st='VIIC') AND status='a' ORDER BY nama";}
		  if($klsk=="viii"){$kelast="WHERE (kelas_st='VIIIA' or kelas_st='VIIIB') AND status='a' ORDER BY nama";}
		  if($klsk=="ix"){$kelast="WHERE (kelas_st='IXA' or kelas_st='IXB' or kelas_st='IXC') AND status='a' ORDER BY nama";}
		  if($klsk=="x"){$kelast="WHERE kelas_st='X' AND status='a' ORDER BY nama";}
		  if($klsk=="xi"){$kelast="WHERE kelas_st='XI' AND status='a' ORDER BY nama";}
		  if($klsk=="xii"){$kelast="WHERE kelas_st='XII' AND status='a' ORDER BY nama";}
		  if($klsk=="viid"){$kelast="WHERE kelas_st='VIID' AND status='a' ORDER BY nama";}
		  if($klsk=="viiic"){$kelast="WHERE kelas_st='VIIIC' AND status='a' ORDER BY nama";}
	      $tmpkls=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st,status FROM tb_santri $kelast");
          while($ct=mysqli_fetch_assoc($tmpkls)){
	   ?>
          <tr>
            <td height="27" bgcolor="#eeeeee"><div align="center"><? echo"$a."; ?></div></td> 
            <td bgcolor="#eeeeee"><div align="center"><? echo "$ct[nis]"; ?></div></td>
            <td bgcolor="#FFFFFF"><div align="left">&nbsp;<? echo"$ct[nama]"; ?></div></td>
            <td bgcolor="#eeeeee"><div align="center"><?
			
			
			$cri=mysqli_query($koneksi, "SELECT * FROM tb_rangking_karakter WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' and kelas='$klsk' ");
			$htg=mysqli_fetch_assoc($cri);
			echo $htg['nilai_tottal'];
			
			?>
            </div> 
              </div></td>
            
			<td valign="middle" 
			
			<? if($htg['rangking']==1 or $htg['rangking']==2 or $htg['rangking']==3 or $htg['rangking']==4 or $htg['rangking']==5){ ?> bgcolor="#00FFFF" <? }?>><div align="center"> <? if($htg['nilai_tottal'] >=10) { echo $htg['rangking']; } ?></div></td>
          </tr>
          <? $a+=1; }  ?>
		  
          <tr> 
            <td colspan="5" background="images/suckerfish_green2.png">&nbsp;</td>
          </tr>
        </table>
      </td>
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
