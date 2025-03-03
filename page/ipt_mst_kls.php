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
<form id="form1" name="form1" method="post" action="page/act_dt_kls.php">
  <table width="100%" border="0" cellspacing="0" cellpadding="2">
    <?    $idkmp=$_GET['idkmp'];
          $edt=$_GET['edt'];	
	      if($edt=="y"){
		  $tamp=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='$idkmp'");
          $kp=mysqli_fetch_assoc($tamp); }
		?>
	<tr>
      <td width="2%" bgcolor="#ACD75E">&nbsp;</td>
      <td width="21%" bgcolor="#ACD75E">&nbsp;</td>
      <td width="77%" bgcolor="#ACD75E">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="left">Kelas </div></td>
      <td><div align="left">
        <input name="nmkls" type="text" size="6" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E"><div align="left">Kapasitas</div></td>
      <td bgcolor="#ACD75E"><div align="left">
        <input name="kapasitas" type="text" size="6" />
      </div></td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td><div align="left">Jumlah Meja baik </div></td>
      <td><div align="left">
        <input name="jml_meja" type="text" size="6" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E"><div align="left">Rusak </div></td>
      <td bgcolor="#ACD75E"><div align="left">
        <input name="mrusak" type="text" size="6" />
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="left">Jumlah Kursi Baik </div></td>
      <td><div align="left">
        <input name="jml_kursi" type="text" size="6" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E"><div align="left">Rusak </div></td>
      <td bgcolor="#ACD75E"><div align="left">
        <input name="krusak" type="text" size="6" />
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="left">Jumlah Lemari baik </div></td>
      <td><div align="left">
        <input name="jml_lemari" type="text" size="6" />
      </div></td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#ACD75E">&nbsp;</td>
      <td height="22" valign="top" bgcolor="#ACD75E"><div align="left">Rusak</div></td>
      <td valign="top" bgcolor="#ACD75E"><div align="left">
        <input name="lrusak" type="text" size="6" />
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td valign="top"><div align="left">Jumlah papan tulis Baik </div></td>
      <td valign="top"><div align="left">
        <input name="jml_ptulis" type="text" size="6" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td valign="top" bgcolor="#ACD75E"><div align="left">Rusak </div></td>
      <td valign="top" bgcolor="#ACD75E"><div align="left">
        <input name="prusak" type="text" size="6" />
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td valign="top"><div align="left">Proyektor</div></td>
      <td valign="top"><div align="left">
        <input name="proy" type="text" size="6" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td valign="top" bgcolor="#ACD75E">&nbsp;</td>
      <td valign="top" bgcolor="#ACD75E">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td valign="top">&nbsp;</td>
      <td valign="top" <? if($wrna1==11)echo"bgcolor='#FF0000'"; ?>>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td valign="top">&nbsp;</td>
      <td valign="top" <? if($wrna1==11)echo"bgcolor='#FF0000'"; ?>><input type="submit" name="rekam" value="Simpan" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td valign="top">&nbsp;</td>
      <td valign="top" <? if($wrna1==11)echo"bgcolor='#FF0000'"; ?>>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td valign="top" bgcolor="#FFFFFF" <? if($wrna1==11)echo"bgcolor='#FF0000'"; ?>><div align="left"></div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2" valign="top">Tabel Data Kelas </td>
    </tr>
    <tr>
      <td colspan="3"><table width="98%" border="1" align="center" cellpadding="2" cellspacing="0" bordercolor="#B3CF70">
        <tr bordercolor="#B3CF70">
          <td width="14%" bgcolor="#B3CF70"><div align="center"><span class="style1">Kelas</span></div></td>
          <td width="17%" bgcolor="#B3CF70"><div align="center"><span class="style1">Kapasitas</span></div></td>
          <td width="18%" bgcolor="#B3CF70"><div align="center"><span class="style1">Jumlah Meja </span></div></td>
          <td width="18%" bgcolor="#B3CF70"><div align="center"><span class="style1">Jumlah Kursi </span></div></td>
          <td width="15%" bgcolor="#B3CF70"><div align="center"><span class="style1"> Lemari </span></div></td>
          <td width="18%" bgcolor="#B3CF70"><div align="center"><span class="style1">Papan Tulis </span></div></td>
        </tr>
        <?
		  $tampil=mysqli_query($koneksi, "SELECT * FROM master_kelas ");
          while($tp=mysqli_fetch_assoc($tampil)){
		?>
        <tr>
          <td bgcolor="#FFFFFF"><div align="center"><a href="home.php?home=kls&amp;dpn_kls4=k4&amp;idkls=<? echo $tp['kd_kls']; ?>"><? echo $tp['kelas']; ?></a></div></td>
          <td bgcolor="#FFFFFF"><div align="center"><? echo $tp['kapasitas']; ?> Orang </div></td>
          <td bgcolor="#FFFFFF"><div align="center">
              <?php 
              $mj = (int)($tp['jml_meja'] ?? 0) + (int)($tp['meja_r'] ?? 0); 
              echo $mj; 
              ?>
          </div></td>
          <td bgcolor="#FFFFFF"><div align="center">
              <?php 
              $kr = (int)($tp['kapasitas'] ?? 0) + (int)($tp['kursi_r'] ?? 0); 
              echo $kr; 
              ?>
          </div></td>
          <td bgcolor="#FFFFFF"><div align="center">
              <?php 
              $lm = (int)($tp['jml_lemari'] ?? 0) + (int)($tp['lrusak'] ?? 0); 
              echo $lm; 
              ?>
          </div></td>
          <td bgcolor="#FFFFFF"><div align="center">
              <?php 
              $pt = (int)($tp['jml_ptulis'] ?? 0) + (int)($tp['prusak'] ?? 0); 
              echo $pt; 
              ?>
          </div></td>
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
      </table></td>
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
