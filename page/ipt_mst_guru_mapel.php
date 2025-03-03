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
<script language="JavaScript" type="text/javascript">
function konfirmasi(pesan) { 
  var is_confirmed=confirm(pesan);      
  if(!is_confirmed){    
   return false;
	}	
}
</script>
<body>
<form id="form1" name="form1" method="post" action="page/act_dt_roster.php">
  <table width="100%" border="0" cellspacing="0" cellpadding="2">
    <?    $idkk=$_GET['idkk'];
          $edt=$_GET['edt'];
		  $hari=$_GET['hari'];
		  $jam=$_GET['jam'];
		  $mtp=$_GET['mtp'];
		  $mtpl=$_GET['mtpl'];	
	      if($edt=="y"){
		  $tamp=mysqli_query($koneksi, "SELECT * FROM detail_roster WHERE kd_rt='$idkk' and hari='$hari' and jam='$jam' and kd_mp='$mtp' and kd_gp='$mtpl'");
          $kp=mysqli_fetch_assoc($tamp); }
		?>
	<tr>
      <td width="2%" bgcolor="#ACD75E">&nbsp;</td>
      <td width="20%" bgcolor="#ACD75E">&nbsp;</td>
      <td width="78%" bgcolor="#ACD75E">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF"><div align="left">Kelas</div></td>
      <td bgcolor="#DCF3AF"><div align="left">
        <select name="kdrt">
          <option>-</option>
		  <? 
		$tpkls=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas ");
         while($ckls=mysqli_fetch_assoc($tpkls)){
		        ?>
          <option value="<? echo $ckls['kd_kls']; ?>"><? echo $ckls['kelas']; ?> </option>
		
          <? } ?>
        </select>
      </div></td>
    </tr>
    
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E"><div align="left">Mata Pelajaran </div></td>
      <td bgcolor="#ACD75E"><div align="left">
        <select name="mpl">
          <option>-</option>
          <?
	      $tampi5=mysqli_query($koneksi, "SELECT kd_mp,nama_mp FROM mata_pelajaran ");
          while($tp5=mysqli_fetch_assoc($tampi5)){
	    ?>
          <option value="<? echo $tp5['kd_mp']; ?>" <? if($kp['kd_mp']=="$tp5[kd_mp]"){ echo"selected='selected'"; } ?>> <? echo $tp5['nama_mp']; ?> </option>
          <? } ?>
        </select>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF"><div align="left">Guru Mata Pelajaran </div></td>
      <td bgcolor="#DCF3AF"><div align="left">
        <select name="gpl">
          <option>-</option>
          <?
	      $tampi6=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai ");
          while($tp6=mysqli_fetch_assoc($tampi6)){
	    ?>
          <option value="<? echo $tp6['id_gp']; ?>" <? if($kp['kd_gp']=="$tp6[id_gp]"){ echo"selected='selected'"; } ?>> <? echo $tp6['nama_gp']; ?> </option>
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
      <td bgcolor="#DCF3AF"><div align="left">
        <input type="submit" name='rekam4' value="Simpan" />
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
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF"></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td colspan="2" bgcolor="#DCF3AF"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#B3CF70">
        <tr>
          <td width="8%" bordercolor="#B3CF70" bgcolor="#B3CF70"><div align="center"><span class="style1">Kelas </span></div></td>
          <td width="35%" bordercolor="#B3CF70" bgcolor="#B3CF70"><div align="center"><span class="style1">Mata Pelajaran </span></div></td>
          <td width="32%" bordercolor="#B3CF70" bgcolor="#B3CF70"><div align="center"><span class="style1">Guru Mata Pelajaran </span></div></td>
        </tr>
        <?
	 
	     $tampil=mysqli_query($koneksi, "SELECT * FROM tb_pengajar WHERE thn_ajaran='$thaj' and semester='$sem' "); 
          while($tp=mysqli_fetch_assoc($tampil)){
		  
		
			  
		  $tpk2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kd_kls='$tp[kd_kelas]' ");
          $ctk2=mysqli_fetch_assoc($tpk2);
		?>
        <tr>
          <td bgcolor="#FFFFFF"><div align="center"><a href="page/act_dt_roster.php?hapus=del&idg=<? echo "$tp[id_pengajar]"; ?>" onclick="return konfirmasi('Yakin Data Akan Dihapus ?');"><? echo $ctk2['kelas']; ?></a></div></td>
          <td bgcolor="#FFFFFF"><? 
		  $tpk4=mysqli_query($koneksi, "SELECT kd_mp,nama_mp FROM mata_pelajaran WHERE kd_mp='$tp[kd_mapel]' ");
          $ctk4=mysqli_fetch_assoc($tpk4);
		  echo $ctk4['nama_mp']; ?></td>
          <td bgcolor="#FFFFFF"><? 
		  $tpk5=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$tp[kd_guru]' ");
          $ctk5=mysqli_fetch_assoc($tpk5);
		  echo $ctk5['nama_gp']; ?></td>
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
