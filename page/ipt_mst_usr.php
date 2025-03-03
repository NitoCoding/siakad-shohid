<? if($idkusr=="d"){ ?>
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
<form id="form1" name="form1" method="post" action="page/act_dt_usr.php">
  <table width="100%" border="0" cellspacing="0" cellpadding="2">
    <?    $idusr=$_GET['idusr'];
          $edt=$_GET['edt'];	
	      if($edt=="y"){
		  $tamp=mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id_user='$idusr'");
          $kp=mysqli_fetch_assoc($tamp); }
		?>
	<tr>
	  <td height="23" colspan="3" bgcolor="#B3CF70"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="2%">&nbsp;</td>
          <td width="3%"><img src="images/collapsed.gif" width="16" height="12" /></td>
          <td width="95%">User Guru dan Pegawai </td>
        </tr>
      </table></td>
    </tr>
	<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
    </tr>
	<tr>
      <td width="2%" bgcolor="#ACD75E">&nbsp;</td>
      <td width="31%" bgcolor="#ACD75E">&nbsp;</td>
      <td width="67%" bgcolor="#ACD75E">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF"><div align="left">user</div></td>
      <td bgcolor="#DCF3AF"><div align="left">
        <select name="idkusr">
          <option>-</option>
          <?
	      $tampil2=mysqli_query($koneksi, "SELECT * FROM guru_pegawai ");
          while($tp=mysqli_fetch_assoc($tampil2)){
	      ?>
          <option value="<? echo $tp['id_gp']; ?>" <? if($kp['kd_gp']==$tp['id_gp']){ echo"selected='selected'"; }?>><? echo $tp['nama_gp']; ?></option>
          <? } ?>
        </select>
          <input type="hidden" name="idks" value="<? echo $idusr; ?>" />
        </div></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E"><div align="left">Password</div></td>
      <td bgcolor="#ACD75E"><div align="left">
        <label></label>
        <input type="password" name="pas" value="<? echo $kp['pas2']; ?>"/>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF"><div align="left">Keterangan</div></td>
      <td bgcolor="#DCF3AF"><div align="left">
        <select name="level">
		  <option value=""> - </option>
          <option value="m" <? if($kp['ket']=='m') echo"selected='selected'"; ?>>Mudir Ma'had</option>
          <option value="k" <? if($kp['ket']=='k') echo"selected='selected'"; ?>>Kepala Sekolah</option>
		  <option value="r" <? if($kp['ket']=='r') echo"selected='selected'"; ?>>Kurikulum</option>
		  <option value="s" <? if($kp['ket']=='s') echo"selected='selected'"; ?>>Kesantrian</option>
		  <option value="a" <? if($kp['ket']=='a') echo"selected='selected'"; ?>>Kesiswaan</option>
		  <option value="u" <? if($kp['ket']=='u') echo"selected='selected'"; ?>>Tata Usaha</option>
		  <option value="g" <? if($kp['ket']=='g') echo"selected='selected'"; ?>>Keuangan</option>
		  <option value="i" <? if($kp['ket']=='i') echo"selected='selected'"; ?>>Walikelas</option>
		  <option value="f" <? if($kp['ket']=='f') echo"selected='selected'"; ?>>Wali Fiah</option>
		  <option value="p" <? if($kp['ket']=='p') echo"selected='selected'"; ?>>Guru</option>
          <option value="d" <? if($kp['ket']=='d') echo"selected='selected'"; ?>>Administrator</option>
	    </select>
        </div></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E"><div align="left"></div></td>
      <td bgcolor="#ACD75E" <? if($wrna3==1)echo"bgcolor='#FF0000'"; ?>><div align="left"></div></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF" <? if($wrna1==6)echo"bgcolor='#FF0000'"; ?>><div align="left">
        <input type="submit" <? if($edt!="y"){ echo"name='rekam'"; } if($edt=="y"){ echo "name='ubah'"; } ?>  value="Simpan" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td <? if($wrna1==7)echo"bgcolor='#FF0000'"; ?>>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF" <? if($wrna1==7)echo"bgcolor='#FF0000'"; ?>>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td colspan="2" bgcolor="#DCF3AF"><table width="60%" border="1" cellpadding="0" cellspacing="0" bordercolor="#B3CF70">
        <tr>
          <td width="35%" height="35" bordercolor="#B3CF70" bgcolor="#B3CF70"><div align="center" class="style1"><strong>Nama User </strong></div></td>
          <td width="22%" bordercolor="#B3CF70" bgcolor="#B3CF70"><div align="center" class="style1"><strong>Password</strong></div></td>
          <td width="27%" bordercolor="#B3CF70" bgcolor="#B3CF70"><div align="center" class="style1"><strong>Level User </strong></div></td>
          <td width="16%" bordercolor="#B3CF70" bgcolor="#B3CF70"><div align="center" class="style1"><strong>Action </strong></div></td>
        </tr>
        <?
		  $tampil3=mysqli_query($koneksi, "SELECT * FROM tb_user ");
          while($tp3=mysqli_fetch_assoc($tampil3)){
		?>
        <tr>
          <td height="30" bgcolor="#FFFFFF"><div align="center"><a href="home.php?home=usr&usr1=k1&edt=y&idusr=<? echo"$tp3[id_user]"; ?>">
            <? 
		  $qkls=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$tp3[kd_gp]'");
          $ct1=mysqli_fetch_assoc($qkls);
		  echo $ct1['nama_gp']; ?>
          </a></div></td>
          <td bgcolor="#FFFFFF"><div align="center"><? echo $tp3['pas2'] ?></div>            </td>
          <td bgcolor="#FFFFFF"><div align="center">
            <? if($tp3['ket']=="m"){ echo"Mudir Ma'had"; }
		  if($tp3['ket']=="k"){ echo"Kepala Sekolah"; } 
		  if($tp3['ket']=="r"){ echo"Kurikulum"; }
		  if($tp3['ket']=="s"){ echo"Kesantrian"; }
		  if($tp3['ket']=="a"){ echo"Kesiswaan"; }
		  if($tp3['ket']=="u"){ echo"Tatausaha"; }
		  if($tp3['ket']=="g"){ echo"Keuangan"; }
		  if($tp3['ket']=="i"){ echo"Wali Kelas"; }
		  if($tp3['ket']=="p"){ echo"Guru"; }
		  if($tp3['ket']=="d"){ echo"Administrator"; }
		  if($tp3['ket']=="f"){ echo"Wali Fiah"; }
		  
		  ?>
          </div></td>
          <td bgcolor="#FFFFFF"><div align="center"><a href="page/act_dt_usr.php?del=oke&id_usr=<? echo"$tp3[id_user]"; ?>">Hapus</a></div>            </td>
        </tr>
        <? } ?>
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
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF" <? if($wrna1==7)echo"bgcolor='#FF0000'"; ?>><div align="left"></div></td>
    </tr>
  </table>
</form>

</body>
</html>
<? } ?>