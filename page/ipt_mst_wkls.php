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
<form id="form1" name="form1" enctype="multipart/form-data" method="post" action="page/act_dt_wkls.php">
  <table width="100%" border="0" cellspacing="0" cellpadding="2">
    <?    $idwl=$_GET['idwl'];
          $edt=$_GET['edt'];	
	      if($edt=="y"){
		  $tamp=mysqli_query($koneksi, "SELECT * FROM wali_kelas WHERE id_wk='$idwl'");
          $kp=mysqli_fetch_assoc($tamp); }
		?>
	
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
    </tr>
    <tr>
      <td width="2%">&nbsp;</td>
      <td width="12%"><div align="left">Kelas</div></td>
      <td width="86%"><div align="left">
        <select name="kelas">
          <option>-</option>
          <?
	      $tampil1=mysqli_query($koneksi, "SELECT * FROM master_kelas ");
          while($tp3=mysqli_fetch_assoc($tampil1)){
	      ?>
		  <option value="<? echo $tp3['kd_kls']; ?>" <? if($tp3['kd_kls']==$kp['kd_kls']){ echo"selected='selected'"; }?>><? echo $tp3['kelas']; ?></option>
		  <? } ?>
        </select>
        <input type="hidden" name="idwls" value="<? echo"$kp[id_wk]"; ?>" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E"><div align="left">Wali Kelas </div></td>
      <td bgcolor="#ACD75E"><div align="left">
        <label></label>
        <select name="wali">
          <option>-</option>
          <?
	      $tampil2=mysqli_query($koneksi, "SELECT * FROM guru_pegawai ");
          while($tp=mysqli_fetch_assoc($tampil2)){
	      ?>
		  <option value="<? echo $tp['id_gp']; ?>" <? if($kp['kd_gp']==$tp['id_gp']){ echo"selected='selected'"; }?>><? echo $tp['nama_gp']; ?></option>
		  <? } ?>
        </select>
        <input type="hidden" name="thna" value="<? echo $thaj; ?>" />
      </div></td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td><div align="left">Tanda Tangan </div></td>
      <td><div align="left">
        <input name="foto" type="file" size="35" /> ( 
     <?  if($edt=="y"){ echo $kp['ttd']; } ?> )</div></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E" <? if($wrna1==6)echo"bgcolor='#FF0000'"; ?>>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td <? if($wrna1==6)echo"bgcolor='#FF0000'"; ?>>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td <? if($wrna1==6)echo"bgcolor='#FF0000'"; ?>><div align="left">
        <input type="submit" <? if($edt!="y"){ echo"name='rekam'"; } if($edt=="y"){ echo "name='ubah'"; } ?>  value="Simpan" />
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td <? if($wrna1==7)echo"bgcolor='#FF0000'"; ?>>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF" <? if($wrna1==7)echo"bgcolor='#FF0000'"; ?>>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">Wali Kelas </td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><table width="60%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td width="12%" height="34" bordercolor="#B3CF70" bgcolor="#B3CF70"><div align="center"><span class="style1 style1">Kelas </span></div></td>
          <td width="33%" bordercolor="#B3CF70" bgcolor="#B3CF70"><div align="center"><span class="style1">Wali Kelas</span></div></td>
          <td width="13%" bordercolor="#B3CF70" bgcolor="#B3CF70"><div align="center"><span class="style1">Tahun Ajaran </span></div></td>
          <td width="23%" bordercolor="#B3CF70" bgcolor="#B3CF70"><div align="center" class="style1">Tanda Tangan </div></td>
          <td width="19%" bordercolor="#B3CF70" bgcolor="#B3CF70"><div align="center" class="style1">Action</div></td>
        </tr>
        <?
		  $tampil3=mysqli_query($koneksi, "SELECT * FROM wali_kelas ");
          while($tp3=mysqli_fetch_assoc($tampil3)){
		?>
        <tr>
          <td bgcolor="#FFFFFF"><div align="center"><a href="home.php?home=kls&amp;dpn_kls3=k3&amp;edt=y&amp;idwl=<? echo"$tp3[id_wk]"; ?>">
              <? 
		  $qkls=mysqli_query($koneksi, "SELECT * FROM master_kelas WHERE kd_kls='$tp3[kd_kls]'");
          $ct1=mysqli_fetch_assoc($qkls);
		  echo $ct1['kelas']; ?>
          </a></div></td>
          <td bgcolor="#FFFFFF"><? 
		  $qgp=mysqli_query($koneksi, "SELECT * FROM guru_pegawai WHERE id_gp='$tp3[kd_gp]' ");
          $ct2=mysqli_fetch_assoc($qgp);
		  echo $ct2['nama_gp']; ?></td>
          <td bgcolor="#FFFFFF"><div align="center"><? echo $tp3['thn_ajaran']; ?></div></td>
          <td bgcolor="#FFFFFF"><div align="center"><img src="page/raport/<? echo "$tp3[ttd]"; ?>" height="90" width="130" /></div></td>
          <td bgcolor="#FFFFFF"><div align="center"><a href="page/act_dt_wkls.php?del=oke&idwls2=<? echo"$tp3[id_wk]"; ?>">Hapus</a></div></td>
        </tr>
        <? } ?>
        <tr>
          <td bordercolor="#B3CF70" bgcolor="#B3CF70">&nbsp;</td>
          <td bordercolor="#B3CF70" bgcolor="#B3CF70">&nbsp;</td>
          <td bordercolor="#B3CF70" bgcolor="#B3CF70">&nbsp;</td>
          <td bordercolor="#B3CF70" bgcolor="#B3CF70">&nbsp;</td>
          <td bordercolor="#B3CF70" bgcolor="#B3CF70">&nbsp;</td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td <? if($wrna1==7)echo"bgcolor='#FF0000'"; ?>><div align="left"></div></td>
    </tr>
  </table>
</form>

</body>
</html>
