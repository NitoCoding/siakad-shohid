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
  <table width="100%" height="290" border="0" cellpadding="2" cellspacing="0">
    <?    $idkk=$_GET['idkk'];
          $edt=$_GET['edt'];	
	      if($edt=="y"){
		  $tamp=mysqli_query($koneksi, "SELECT * FROM tb_roster WHERE id_rt='$idkk'");
          $kp=mysqli_fetch_assoc($tamp); }
		?>
	<tr>
      <td width="2%" bgcolor="#ACD75E">&nbsp;</td>
      <td width="14%" bgcolor="#ACD75E">&nbsp;</td>
      <td width="84%" bgcolor="#ACD75E">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF"><div align="left">Tahun Pelajaran </div></td>
      <td bgcolor="#DCF3AF"><div align="left">: <? echo $thaj; ?>
          <input type="hidden" name="idwls" value="<? echo $kp['id_rt']; ?>" />
        <input type="hidden" name="thna" value="<? echo $thaj; ?>" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E"><div align="left">Semester</div></td>
      <td bgcolor="#ACD75E"><div align="left">
        : <? echo $sem; if($sem=='I')echo" (Satu)";else echo" (Dua)"; ?>
        <input type="hidden" name="smester" value="<? echo $sem; ?>" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF"><div align="left">Kelas</div></td>
      <td bgcolor="#DCF3AF"><div align="left">
        : 
        <select name="kelas">
		<option>-</option>
		<?
	      $tampi3=mysqli_query($koneksi, "SELECT * FROM master_kelas ");
          while($tp3=mysqli_fetch_assoc($tampi3)){
	    ?>
      <option value="<? echo $tp3['kd_kls']; ?>" <? if($kp['kd_kelas']=="$tp3[kd_kls]"){ echo"selected='selected'"; } ?>><? echo $tp3['kelas']; ?></option>
		<? } ?>
        </select>
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
      <td bgcolor="#DCF3AF" <? if($wrna1==6)echo"bgcolor='#FF0000'"; ?>>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF" <? if($wrna1==6)echo"bgcolor='#FF0000'"; ?>><div align="left">
        <input type="submit" <? if($edt!="y"){ echo "name='rekam'"; } if($edt=="y"){ echo "name='ubah'"; } ?>  value="Simpan" />
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
      <td colspan="2" bgcolor="#DCF3AF"><table width="60%" border="1" cellpadding="0" cellspacing="0" bordercolor="#B3CF70">
        <tr>
          <td width="30%" bordercolor="#B3CF70" bgcolor="#B3CF70"><div align="center"><span class="style1">Kelas </span></div></td>
          <td width="37%" bordercolor="#B3CF70" bgcolor="#B3CF70"><div align="center"><span class="style1">Tahun Pelajaran</span> </div></td>
          <td width="33%" bordercolor="#B3CF70" bgcolor="#B3CF70"><div align="center"><span class="style1">Semester</span></div></td>
        </tr>
        <?
		  $tampil=mysqli_query($koneksi, "SELECT * FROM tb_roster WHERE thn_ajaran='$thaj' and semester='$sem'");
          while($tp=mysqli_fetch_assoc($tampil)){
		?>
        <tr>
          <td bgcolor="#FFFFFF"><div align="center">
            <? 
		  $tpk=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kd_kls='$tp[kd_kelas]' ");
          $ctk=mysqli_fetch_assoc($tpk);
		   ?>
            <a href="home.php?home=rst&amp;rst1=k1&amp;edt=y&amp;idkk=<? echo $tp['id_rt']; ?>"><? echo $ctk['kelas']; ?></a></div></td>
          <td bgcolor="#FFFFFF"><div align="center"><? echo $tp['thn_ajaran']; ?></div>            </td>
          <td bgcolor="#FFFFFF"><div align="center"><? echo $tp['semester']; ?></div>            </td>
        </tr>
        <? } ?>
        <tr>
          <td bordercolor="#B3CF70" bgcolor="#B3CF70">&nbsp;</td>
          <td bordercolor="#B3CF70" bgcolor="#B3CF70">&nbsp;</td>
          <td bordercolor="#B3CF70" bgcolor="#B3CF70">&nbsp;</td>
        </tr>
      </table></td>
    </tr>
  </table>
</form>

</body>
</html>
