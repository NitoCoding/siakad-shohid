<? if($idkusr=="a" || $idkusr=="m" || $idkusr=="k"){  ?>
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
    <?    
	      
		  $idkls=$_GET['idkls'];
		  $tamp=mysqli_query($koneksi, "SELECT * FROM master_kelas WHERE kd_kls='$idkls'");
          $kp=mysqli_fetch_assoc($tamp); 
		?>
	<tr>
      <td width="3%" bgcolor="#ACD75E">&nbsp;</td>
      <td width="22%" bgcolor="#ACD75E">&nbsp;</td>
      <td width="75%" bgcolor="#ACD75E">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="left">Kelas </div></td>
      <td>
        <div align="left">
          <input name="nmkls" type="text" size="6" value="<? echo $kp['kelas']; ?>" />
          <input type="hidden" name="idklsk" value="<? echo $kp['kd_kls']; ?>"/>
        </div></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E"><div align="left">Kapasitas</div></td>
      <td bgcolor="#ACD75E">
        <label></label>
        <div align="left">
          <input name="kapasitas" type="text" size="6" value="<? echo $kp['kapasitas']; ?>"/>
      </div></td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td><div align="left">Jumlah Meja baik </div></td>
      <td>
        <div align="left">
          <input name="jml_meja" type="text" size="6" value="<? echo $kp['jml_meja']; ?>"/>
        </div></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E"><div align="left">Rusak </div></td>
      <td bgcolor="#ACD75E"><div align="left">
        <input name="mrusak" type="text" size="6" value="<? echo $kp['meja_r']; ?>"/>
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="left">Jumlah Kursi Baik </div></td>
      <td>
        <div align="left">
          <input name="jml_kursi" type="text" size="6" value="<? echo $kp['jml_kursi']; ?>"/>
        </div></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E"><div align="left">Rusak </div></td>
      <td bgcolor="#ACD75E">
        <div align="left">
          <input name="krusak" type="text" size="6" value="<? echo $kp['kursi_r']; ?>"/>
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="left">Jumlah Lemari baik </div></td>
      <td>
        <div align="left">
          <input name="jml_lemari" type="text" size="6" value="<? echo $kp['jml_lemari']; ?>"/>
        </div></td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#ACD75E">&nbsp;</td>
      <td height="22" valign="top" bgcolor="#ACD75E"><div align="left">Rusak</div></td>
      <td valign="top" bgcolor="#ACD75E">
        <div align="left">
          <input name="lrusak" type="text" size="6" value="<? echo $kp['lrusak']; ?>"/>
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td valign="top"><div align="left">Jumlah papan tulis Baik </div></td>
      <td valign="top"><div align="left">
        <input name="jml_ptulis" type="text" size="6" value="<? echo $kp['jml_ptulis']; ?>"/>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td valign="top" bgcolor="#ACD75E"><div align="left">Rusak </div></td>
      <td valign="top" bgcolor="#ACD75E"><div align="left">
        <input name="prusak" type="text" size="6" value="<? echo $kp['prusak']; ?>"/>
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td valign="top"><div align="left">Proyektor</div></td>
      <td valign="top"><div align="left">
        <input name="proy" type="text" size="6" value="<? echo $kp['proyektor']; ?>"/>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td valign="top" bgcolor="#ACD75E">&nbsp;</td>
      <td valign="top" bgcolor="#ACD75E"><div align="left"></div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td valign="top">&nbsp;</td>
      <td valign="top"><input type="submit" name="rubah" value="Simpan" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td valign="top">&nbsp;</td>
      <td valign="top"><div align="left"></div></td>
    </tr>
  </table>
</form>

</body>
</html>
<? } ?>