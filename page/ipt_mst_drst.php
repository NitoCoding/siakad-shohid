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
	      $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_roster WHERE thn_ajaran='$thaj' and semester='$sem'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  
	    ?>
        <option value="<? echo $tp3['id_rt']; ?>" <? if($kp['kd_rt']=="$tp3[id_rt]"){ echo"selected='selected'"; } ?>><? 
		$tpkls=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kd_kls='$tp3[kd_kelas]'");
        $ckls=mysqli_fetch_assoc($tpkls);
		echo $ckls['kelas']; ?>
		</option>
          <? } ?>
        </select>
        <input type="hidden" name="idwls" value="<? echo $kp['kd_rt']; ?>" />
        <input type="hidden" name="idmmp" value="<? echo $kp['kd_mp']; ?>" />
        <input type="hidden" name="idggp" value="<? echo $kp['kd_gp']; ?>" />
          <input type="hidden" name="jam_ek" value="<? echo $kp['jam']; ?>" />
        </div></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E"><div align="left">Hari</div></td>
      <td bgcolor="#ACD75E"><div align="left">
        <select name="hari">
          <option>-</option>
          <option value="Senin" <? if($kp['hari']=="Senin"){ echo"selected='selected'"; } ?>>Senin</option>
          <option value="Selasa" <? if($kp['hari']=="Selasa"){ echo"selected='selected'"; } ?>>Selasa</option>
          <option value="Rabu" <? if($kp['hari']=="Rabu"){ echo"selected='selected'"; } ?>>Rabu</option>
          <option value="Kamis" <? if($kp['hari']=="Kamis"){ echo"selected='selected'"; } ?>>Kamis</option>
          <option value="Jumat" <? if($kp['hari']=="Jumat"){ echo"selected='selected'"; } ?>>Jumat</option>
          <option value="Sabtu" <? if($kp['hari']=="Sabtu"){ echo"selected='selected'"; } ?>>Sabtu</option>
          <option value="Ahad" <? if($kp['hari']=="Ahad"){ echo"selected='selected'"; } ?>>Ahad</option>
        </select>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF"><div align="left">Jam</div></td>
      <td bgcolor="#DCF3AF"><div align="left">
        <label></label>
        <select name="jam">
          <option>-</option>
          <?
	      $tampi4=mysqli_query($koneksi, "SELECT * FROM tb_jam ");
          while($tp4=mysqli_fetch_assoc($tampi4)){
	    ?>
          <option value="<? echo $tp4['kd_jam']; ?>" <? if($kp['jam']=="$tp4[kd_jam]"){ echo"selected='selected'"; } ?>>
            <? echo $tp4['jam']; ?>          </option>
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
        <input type="submit" <? if($edt!="y"){ echo "name='rekam3'"; } if($edt=="y"){ echo "name='ubah3'"; } ?>  value="Simpan" />
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
      <td colspan="2" bgcolor="#DCF3AF"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#B3CF70">
        <tr>
          <td width="8%" bordercolor="#B3CF70" bgcolor="#B3CF70"><div align="center"><span class="style1">Kelas </span></div></td>
          <td width="11%" bordercolor="#B3CF70" bgcolor="#B3CF70"><div align="center"><span class="style1">Hari</span></div></td>
          <td width="14%" bordercolor="#B3CF70" bgcolor="#B3CF70"><div align="center"><span class="style1">Jam</span></div></td>
          <td width="35%" bordercolor="#B3CF70" bgcolor="#B3CF70"><div align="center"><span class="style1">Mata Pelajaran </span></div></td>
          <td width="32%" bordercolor="#B3CF70" bgcolor="#B3CF70"><div align="center"><span class="style1">Guru Mata Pelajaran </span></div></td>
        </tr>
        <?
	 
	     $tampil=mysqli_query($koneksi, "SELECT * FROM tb_roster,detail_roster WHERE tb_roster.thn_ajaran='$thaj' and tb_roster.semester='$sem' and tb_roster.id_rt=detail_roster.kd_rt"); 
          while($tp=mysqli_fetch_assoc($tampil)){
		  
		?>
        <tr>
          <td bgcolor="#FFFFFF"><div align="center">
            <? 
		  $tpk=mysqli_query($koneksi, "SELECT id_rt,kd_kelas FROM tb_roster WHERE id_rt='$tp[kd_rt]' ");
          $ctk=mysqli_fetch_assoc($tpk);
		  
		  $tpk2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kd_kls='$ctk[kd_kelas]' ");
          $ctk2=mysqli_fetch_assoc($tpk2);
		   ?>
            <a href="home.php?home=rst&amp;rst3=k3&amp;edt=y&amp;idkk=<? echo "$tp[kd_rt]&hari=$tp[hari]&jam=$tp[jam]&mtp=$tp[kd_mp]&mtpl=$tp[kd_gp]"; ?>"><? echo $ctk2['kelas']; ?></a></div></td>
          <td bgcolor="#FFFFFF"><div align="center"><? echo $tp['hari']; ?></div>            </td>
          <td bgcolor="#FFFFFF"><div align="center">
            <? 
		  $tpk3=mysqli_query($koneksi, "SELECT * FROM tb_jam WHERE kd_jam='$tp[jam]' ");
          $ctk3=mysqli_fetch_assoc($tpk3);
		  echo $ctk3['jam']; ?>
          </div>            </td>
          <td bgcolor="#FFFFFF"><? 
		  $tpk4=mysqli_query($koneksi, "SELECT kd_mp,nama_mp FROM mata_pelajaran WHERE kd_mp='$tp[kd_mp]' ");
          $ctk4=mysqli_fetch_assoc($tpk4);
		  echo $ctk4['nama_mp']; ?></td>
          <td bgcolor="#FFFFFF"><? 
		  $tpk5=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$tp[kd_gp]' ");
          $ctk5=mysqli_fetch_assoc($tpk5);
		  echo $ctk5['nama_gp']; ?></td>
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
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF"></td>
    </tr>
  </table>
</form>

</body>
</html>
