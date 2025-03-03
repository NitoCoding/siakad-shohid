<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style3 {color: #FFFFFF; font-weight: bold; }
.style5 {color: #003333}
.style6 {color: #FFFFFF}
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

<body>
<form id="form1" name="form1" method="post" action="page/act_dt_rbg.php">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
      <td colspan="4"><div align="center"><font color="#FF0000" size="5">
        <? $psn=$_GET['psn'];
	  $kklsx=$_GET['kklsx'];
	     if($psn=='1')echo "Kelas Belum Anda Pilih";
		 if($psn=='2')echo "Alhamdulillah santrinya sudah pindah kelas...";
	   ?>
      </font></div></td>
    </tr>
    

    <tr>
      <td>&nbsp;</td>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td width="2%" height="95">&nbsp;</td>
      <td width="5%" valign="top"><div align="left">Kelas</div></td>
      <td width="24%" valign="top"><div align="left">
        <select name="menu1" onchange="MM_jumpMenu('parent',this,0)">
		<option value="home.php?home=kls&dpn_kls2=k2&klsk=">-</option>
		<option value="home.php?home=kls&dpn_kls2=k2&klsk=1" <? if($klsk=="1"){ echo"selected='selected'"; } ?>>Pindah Kelas</option>
		<?
	      $tampi3=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas ");
          while($tp3=mysqli_fetch_assoc($tampi3)){
	    ?>
       <option value="home.php?home=kls&dpn_kls2=k2&klsk=<? echo "$tp3[kelas]&kklsx=$tp3[kd_kls]"; ?>" <? if($klsk=="$tp3[kelas]" || $klsk=="$tp3[kelas]"){ echo"selected='selected'"; } ?>><? echo $tp3['kelas']; ?></option>
		<? } ?>
        </select>
      </div></td>
      <td width="69%" valign="top"><table width="350" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FF6600">
        <tr>
          <td height="19" colspan="5" bgcolor="#666666"><img src="images/ico_myspace.gif" width="19" height="19" align="absmiddle" /> <span class="style6">Pindah Rombel </span></td>
          </tr>
        <tr>
          <td width="13%"><div align="center">Dari</div></td>
          <td width="23%" height="35"><label>
            <div align="center">
              <select name="kls_a">
                <option>-</option>
                <option value="VIIA">VIIA</option>
                <option value="VIIB">VIIB</option>
                <option value="VIIC">VIIC</option>
                <option value="VIIIA">VIIIA</option>
                <option value="VIIIB">VIIIB</option>
                <option value="VIIIC">VIIIC</option>
                <option value="IXA">IXA</option>
                <option value="IXB">IXB</option>
                <option value="IXC">IXC</option>
                <option value="XA">XA</option>
                <option value="XB">XB</option>
                <option value="XC">XC</option>
                <option value="XIA">XIA</option>
                <option value="XIB">XIB</option>
                <option value="XIC">XIC</option>
                <option value="XIIA">XIIA</option>
                <option value="XIIB">XIIB</option>
                <option value="XIIC">XIIC</option>
              </select>
              </div>
          </label></td>
          <td width="7%"><label>
              <div align="center">Ke </div>
            <div align="center"></div>
            </label></td>
          <td width="25%"><div align="center">
            <select name="kls_t">
              <option>-</option>
              <option value="VIIA">VIIA</option>
              <option value="VIIB">VIIB</option>
              <option value="VIIC">VIIC</option>
              <option value="VIIIA">VIIIA</option>
              <option value="VIIIB">VIIIB</option>
              <option value="VIIIC">VIIIC</option>
              <option value="IXA">IXA</option>
              <option value="IXB">IXB</option>
              <option value="IXC">IXC</option>
              <option value="XA">XA</option>
              <option value="XB">XB</option>
              <option value="XC">XC</option>
              <option value="XIA">XIA</option>
              <option value="XIB">XIB</option>
              <option value="XIC">XIC</option>
              <option value="XIIA">XIIA</option>
              <option value="XIIB">XIIB</option>
              <option value="XIIC">XIIC</option>
            </select>
          </div></td>
          <td width="32%"><label>
            <input type="submit" name="Submit" value="PINDAHKAN" />
          </label></td>
        </tr>
      </table>      <label></label></td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#B3CF70">
        <tr>
          <td width="17%" bgcolor="#B3CF70"><span class="style3">NIS</span></td>
          <td width="70%" bgcolor="#B3CF70"><span class="style3">Nama Lengkap </span></td>
          </tr>
		<?
		  
	      $tampil=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='' and (status='a' || status='p' || status='-') ORDER BY nama");
          while($tp=mysqli_fetch_assoc($tampil)){
	   ?>
        <tr>
          <td><a href="page/act_dt_rbg.php?masuk=Masuk&<? echo"nisk=$tp[nis]&klsx=$klsk"; ?>"><? echo"$tp[nis]"; ?></a></td>
          <td><? echo"$tp[nama]"; ?></td>
          </tr>
       <? } ?>
	    <tr>
	      <td bgcolor="#B3CF70">&nbsp;</td>
          <td bgcolor="#B3CF70">&nbsp;</td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3" valign="top">
	  <?  
	      
	      $tampil=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas ");
          while($tp=mysqli_fetch_assoc($tampil)){
	  ?>
	  <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#B3CF70">
        <tr>
          <td colspan="3" bordercolor="#99CC66" bgcolor="#FFFFFF">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="21%"><span class="style5">&nbsp;Kelas :</span> <? echo $tp['kelas']; ?></td>
                <td width="67%"><img src="images/index.gif" width="16" height="16" align="absmiddle" /> <a href="page/report_absensi.php?id_kk=<? echo "$tp[kd_kls]&klskr=$tp[kelas]"; ?>" class="lk" target="_blank">Absensi Kelas</a> </td>
                <td width="12%">&nbsp;</td>
              </tr>
            </table>
          </td>
          </tr>
        <tr>
          <td width="17%" bgcolor="#B3CF70"><span class="style3">NIS</span></td>
          <td width="47%" bgcolor="#B3CF70"><span class="style3">Nama Lengkap </span></td>
          <td width="23%" bgcolor="#B3CF70"><span class="style3">Kelas</span></td>
        </tr>
        <?
	      $tmpkls=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='$tp[kelas]' AND status='a' ORDER BY nis");
          while($ct=mysqli_fetch_assoc($tmpkls)){
	   ?>
        <tr>
          <td bgcolor="#FFFFFF"><div align="center"><a href="page/act_dt_rbg.php?masuk=Masuk&<? echo"nisk=$ct[nis]&klsx=$klsk&#kembali"; ?>"><? echo"$ct[nis]"; ?></a><a name="kembali"></a></div></td>
          <td bgcolor="#FFFFFF"><? echo"$ct[nama]"; ?></td>
          <td bgcolor="#FFFFFF"><div align="center"><? echo"$ct[kelas_st]"; ?></div>            </td>
        </tr>
        <? } ?>
        <tr>
          <td bgcolor="#B3CF70">&nbsp;</td>
          <td bgcolor="#B3CF70">&nbsp;</td>
          <td bgcolor="#B3CF70">&nbsp;</td>
        </tr>
      </table>
	  <? echo "<br>"; } ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
    </tr>
  </table>
</form><a name="kembali"></a>

</body>
</html>
