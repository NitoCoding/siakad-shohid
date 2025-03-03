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
<form id="form1" name="form1" method="post" action="page/act_dt_roster.php">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <?    $idkk=$_GET['idkk'];
          $edt=$_GET['edt'];	
	      if($edt=="y"){
		  $tamp=mysqli_query($koneksi, "SELECT * FROM tb_jam WHERE kd_jam='$idkk'");
          $kp=mysqli_fetch_assoc($tamp); }
		?>
	<tr>
      <td width="2%" bgcolor="#ACD75E">&nbsp;</td>
      <td width="16%" bgcolor="#ACD75E">&nbsp;</td>
      <td width="82%" bgcolor="#ACD75E">&nbsp;</td>
    </tr>
    <tr>
      <td height="31" bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF"><div align="left">Jam Pelajaran </div></td>
      <td bgcolor="#DCF3AF"><div align="left">
        <input type="text" name="jamp" value="<? echo $kp['jam'];  ?>" />
        <input type="hidden" name="idwls" value="<? echo $kp['kd_jam']; ?>" />
      </div></td>
    </tr>
    
    
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E"><div align="left">Jumlah Jam </div></td>
      <td bgcolor="#ACD75E"><div align="left">
        <select name="jmlj">
          <option value="1">1 Jam</option>
          <option value="2">2 Jam</option>
        </select>
        </div></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF" <? if($wrna1==6)echo"bgcolor='#FF0000'"; ?>>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF" <? if($wrna1==6)echo"bgcolor='#FF0000'"; ?>><div align="left">
        <input type="submit" <? if($edt!="y"){ echo "name='rekam2'"; } if($edt=="y"){ echo "name='ubah2'"; } ?>  value="Simpan" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF"></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td colspan="2" bgcolor="#DCF3AF"><table width="50%" border="1" cellpadding="0" cellspacing="0" bordercolor="#B3CF70">
        <tr>
          <td width="19%" bordercolor="#B3CF70" bgcolor="#B3CF70"><span class="style1">Kode Jam </span></td>
          <td width="39%" bordercolor="#B3CF70" bgcolor="#B3CF70"><span class="style1">Jam Pelajaran </span></td>
          <td width="42%" bordercolor="#B3CF70" bgcolor="#B3CF70"><span class="style1">Jumlah Jam </span></td>
        </tr>
        <?
		  $tampil=mysqli_query($koneksi, "SELECT * FROM tb_jam ");
          while($tp=mysqli_fetch_assoc($tampil)){
		?>
        <tr>
          <td bgcolor="#FFFFFF"><div align="center"><a href="home.php?home=rst&amp;rst2=k2&amp;edt=y&amp;idkk=<? echo $tp['kd_jam']; ?>"><? echo $tp['kd_jam']; ?></a></div></td>
          <td bgcolor="#FFFFFF"><? echo $tp['jam']; ?></td>
          <td bgcolor="#FFFFFF"><? echo $tp['jml_jam']; ?> Jam </td>
        </tr>
        <? } ?>
        <tr>
          <td bordercolor="#B3CF70" bgcolor="#B3CF70">&nbsp;</td>
          <td bordercolor="#B3CF70" bgcolor="#B3CF70">&nbsp;</td>
          <td bordercolor="#B3CF70" bgcolor="#B3CF70">&nbsp;</td>
        </tr>
      </table></td>
    </tr>
    
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF"></td>
    </tr>
  </table>
</form>

</body>
</html>
