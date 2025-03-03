<? if($idkusr=="d" || $idkusr=="m"){ ?>
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
		  $tamp=mysqli_query($koneksi, "SELECT id_santri,nama,pass1,pass2 FROM tb_santri  WHERE id_santri='$idusr'");
          $kp=mysqli_fetch_assoc($tamp); }
		?>
	<tr>
	  <td height="" colspan="3" bgcolor="#B3CF70"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="2%">&nbsp;</td>
          <td width="3%"><img src="images/collapsed.gif" width="16" height="12" /></td>
          <td width="95%">User Santri </td>
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
      <td bgcolor="#DCF3AF"><div align="left"><? echo $kp['nama']; ?>
        <input type="hidden" name="idkusr" value="<? echo $kp['id_santri']; ?>" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E"><div align="left">Password</div></td>
      <td bgcolor="#ACD75E"><div align="left">
        <label></label>
        <input type="password" name="passt" value="<? echo $kp['pass1']; ?>"/>
      </div></td>
    </tr>
    
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E"><div align="left"></div></td>
      <td bgcolor="#ACD75E"><div align="left"></div></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF"><div align="left">
        <input type="submit" name="ubah2" value="Simpan" />
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
      <td bgcolor="#DCF3AF">Data User &amp; password </td>
      <td bgcolor="#DCF3AF" <? if($wrna1==7)echo"bgcolor='#FF0000'"; ?>>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td colspan="2" bgcolor="#DCF3AF">
	  <?  
	      $mstk=mysqli_query($koneksi, "SELECT kelas FROM master_kelas ");
          while($cmstk=mysqli_fetch_assoc($mstk)){
	  ?><table width="60%" border="1" cellpadding="0" cellspacing="0" bordercolor="#B3CF70">
        <tr>
          <td colspan="2" bordercolor="#FFFFFF" bgcolor="#FFFFFF">Kelas : <? echo $cmstk['kelas']; ?></td>
          </tr>
        <tr>
          <td width="32%" bordercolor="#B3CF70" bgcolor="#B3CF70"><div align="center"><span class="style1">Nama User</span> </div></td>
          <td width="34%" bordercolor="#B3CF70" bgcolor="#B3CF70"><div align="center"><span class="style1">Password</span></div></td>
          </tr>
        <?
		  $tampil3=mysqli_query($koneksi, "SELECT id_santri,nama,pass1,pass2,kelas_st FROM tb_santri  WHERE kelas_st='$cmstk[kelas]'");
          while($tp3=mysqli_fetch_assoc($tampil3)){
		?>
        <tr>
          <td bgcolor="#FFFFFF"><div align="center"><a href="home.php?home=usr&usr2=k2&edt=y&idusr=<? echo"$tp3[id_santri]"; ?>">
            <? echo $tp3['nama']; ?>
          </a></div></td>
          <td bgcolor="#FFFFFF"><div align="center"><? echo $tp3['pass1'] ?></div></td>
          </tr>
        <? } ?>
        <tr>
          <td bordercolor="#B3CF70" bgcolor="#B3CF70">&nbsp;</td>
          <td bordercolor="#B3CF70" bgcolor="#B3CF70">&nbsp;</td>
          </tr>
      </table><? } ?></td>
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