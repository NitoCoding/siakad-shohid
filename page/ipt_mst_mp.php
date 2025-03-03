<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="page/act_dt_mp.php">
  <table width="100%" border="0" cellspacing="0" cellpadding="2">
    <?    $idkmp=$_GET['idkmp'];
          $edt=$_GET['edt'];	
	      if($edt=="y"){
		  $tamp=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='$idkmp'");
          $kp=mysqli_fetch_assoc($tamp); }
		?>
	<tr>
	  <td colspan="3" bgcolor="#B3CF70"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="2%" height="34">&nbsp;</td>
          <td width="3%"><img src="images/collapsed.gif" width="16" height="12" /></td>
          <td width="95%"><? if($edt!="y"){ ?>Master Mata Pelajaran <? }else{ ?> Edit Mata Pelajaran<? }?></td>
        </tr>
      </table></td>
    </tr>
	<tr>
	  <td colspan="3" height="7"></td>
    </tr>
	<tr>
      <td width="2%" bgcolor="#ACD75E">&nbsp;</td>
      <td width="15%" bgcolor="#ACD75E">&nbsp;</td>
      <td width="83%" bgcolor="#ACD75E">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF"><div align="left">Kode MP </div></td>
      <td bgcolor="#DCF3AF"><div align="left">
       <? if($edt!="y" || $edt==""){ ?>
	   <select name="ket">
          <option>-</option>
          <option value="MD">MD</option>
          <option value="MP">MP</option>
		  <option value="PB">PB</option>
		  <option value="ML">ML</option>
		  <option value="PR">PR</option>
		  <option value="KO">KO</option>
        </select>
	   <input name="kk" type="text" size="5" />
	   <? } if($edt=="y"){?>
      <input name="kdmp2" type="text" size="10" disabled="disabled" value="<? echo $kp['kd_mp']; ?>" />
     <? } ?> 
     <input type="hidden" name="kdmp"  value="<? echo $kp['kd_mp']; ?>"/>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E"><div align="left">Mata Pelajaran </div></td>
      <td bgcolor="#ACD75E"><div align="left">
        <label></label>
        <input name="nmmp" type="text" size="50" value="<? echo $kp['nama_mp']; ?>"/>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF"><div align="left">KKM Kelas VII / X </div></td>
      <td bgcolor="#DCF3AF" <? if($wrna1==5)echo"bgcolor='#FF0000'"; ?>><div align="left">
        <input name="kkm" type="text" size="5" value="<? echo $kp['kkm'];  ?>"/>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">KKM Kelas VIII / XI </td>
      <td bgcolor="#ACD75E" <? if($wrna3==1)echo"bgcolor='#FF0000'"; ?>><input name="kkm2" type="text" size="5" value="<? echo $kp['kkm2'];  ?>"/></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">KKM Kelas IX / XII </td>
      <td bgcolor="#DCF3AF" <? if($wrna3==1)echo"bgcolor='#FF0000'"; ?>><input name="kkm3" type="text" size="5" value="<? echo $kp['kkm3'];  ?>"/></td>
    </tr>
    
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E" <? if($wrna1==6)echo"bgcolor='#FF0000'"; ?>>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF" <? if($wrna1==6)echo"bgcolor='#FF0000'"; ?>>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E" <? if($wrna1==6)echo"bgcolor='#FF0000'"; ?>><div align="left">
        <input type="submit" <? if($edt!="y"){ echo "name='rekam'"; } if($edt=="y"){ echo "name='ubah'"; } ?>  value="Simpan" />
       <? if($edt=="y"){ ?> <input type="submit" name="del" value="Hapus" /> <? } ?>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF" <? if($wrna1==7)echo"bgcolor='#FF0000'"; ?>>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td <? if($wrna1==7)echo"bgcolor='#FF0000'"; ?>>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td colspan="2" bgcolor="#DCF3AF"><strong>Mata Pelajaran </strong></td>
    </tr>
    <tr>
      <td colspan="3" valign="top" bgcolor="#DCF3AF"><div align="left">
        <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#B3CF70">
          <tr>
            <td width="12%" bordercolor="#B3CF70" bgcolor="#B3CF70"><div align="center"><strong><span class="style1">Kode </span></strong></div></td>
            <td width="54%" bordercolor="#B3CF70" bgcolor="#B3CF70"><div align="center"><strong><span class="style1">Mata Pelajaran </span></strong></div></td>
            <td width="11%" bordercolor="#B3CF70" bgcolor="#B3CF70"><div align="center"><strong><span class="style1">KKM</span></strong> <span class="style1">VII/X </span></div></td>
            <td width="11%" bordercolor="#B3CF70" bgcolor="#B3CF70"><div align="center"><strong><span class="style1">KKM</span></strong> <span class="style1">VIII / XI </span></div></td>
            <td width="11%" bordercolor="#B3CF70" bgcolor="#B3CF70"><div align="center"><strong><span class="style1">KKM</span></strong> <span class="style1">IX / XII </span></div></td>
            <td width="23%" bordercolor="#B3CF70" bgcolor="#B3CF70"><div align="center"><strong><span class="style1">Keterangan</span></strong></div></td>
          </tr>
          <?
		  $tampil=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran ");
          while($tp=mysqli_fetch_assoc($tampil)){
		?>
          <tr>
            <td bgcolor="#FFFFFF"><div align="center"><a href="home.php?home=mp&amp;edt=y&amp;idkmp=<? echo $tp['kd_mp']; ?>"><? echo $tp['kd_mp']; ?></a></div></td>
            <td bgcolor="#FFFFFF"><? echo $tp['nama_mp']; ?></td>
            <td bgcolor="#FFFFFF"><div align="center"><? echo $tp['kkm']; ?></div></td>
            <td bgcolor="#FFFFFF"><div align="center"><? echo $tp['kkm2']; ?></div></td>
            <td bgcolor="#FFFFFF"><div align="center"><? echo $tp['kkm3']; ?></div>              </td>
            <td bgcolor="#FFFFFF"><? if($tp['ket']=="MD") { echo"Dinas"; }
		  if($tp['ket']=="MP"){ echo"Kepondokan"; } 
		  if($tp['ket']=="PB"){ echo"Pengembangan Bakat"; }
		  ?></td>
          </tr>
          <? } ?>
          <tr>
            <td bordercolor="#B3CF70" bgcolor="#B3CF70">&nbsp;</td>
            <td bordercolor="#B3CF70" bgcolor="#B3CF70">&nbsp;</td>
            <td bordercolor="#B3CF70" bgcolor="#B3CF70">&nbsp;</td>
            <td bordercolor="#B3CF70" bgcolor="#B3CF70">&nbsp;</td>
            <td bordercolor="#B3CF70" bgcolor="#B3CF70">&nbsp;</td>
            <td bordercolor="#B3CF70" bgcolor="#B3CF70">&nbsp;</td>
          </tr>
        </table>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF" <? if($wrna1==9)echo"bgcolor='#FF0000'"; ?>><div align="left"></div></td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
      <td height="22" valign="top">&nbsp;</td>
      <td valign="top" <? if($wrna1==10)echo"bgcolor='#FF0000'"; ?>><div align="left"></div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td valign="top">&nbsp;</td>
      <td valign="top" <? if($wrna1==11)echo"bgcolor='#FF0000'"; ?>><div align="left"></div></td>
    </tr>
  </table>
</form>

</body>
</html>
