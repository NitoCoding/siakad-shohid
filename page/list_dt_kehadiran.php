<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?
$pknk=$_GET['pknk'];
$klsk=$_GET['klsk'];
$blnk=$_GET['blnk'];
$idk_k=$_GET['idk_k']; 
$status=$_GET['status']; 
$jam=$_GET['jam']; 
$hari=$_GET['hari'];
$kdmpl=$_GET['kdmpl'];
?>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td colspan="2" bgcolor="#B3CF70">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" height="7"></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#ACD75E">&nbsp;</td>
  </tr>
  <tr>
    <td height="29" colspan="2" bgcolor="#DCF3AF">&nbsp;<strong>Tahun Ajaran</strong> : <? echo $thaj; ?>&nbsp;&nbsp; <strong>&nbsp;&nbsp;Semester</strong> :
      <? if($sem=='I') echo $sem." (Satu)";else echo $sem." (Dua)"; ?>
&nbsp;&nbsp; <strong>&nbsp;&nbsp;Bulan :</strong> <? echo $blnk; ?>&nbsp;&nbsp; <strong>&nbsp;&nbsp;Pekan</strong> :
<? 
	if($pknk=='I'){ echo"I (Pertama)"."  Tanggal 1 - 7"; }
	if($pknk=='II'){ echo"II (Kedua)"."  Tanggal 8 - 14"; }
	if($pknk=='III'){ echo"III (Ketiga)"."  Tanggal 15 - 21"; }
	if($pknk=='IV'){ echo"IV (Keempat)"."   Tanggal 22 - 28"; }
	if($pknk=='V'){ echo"V (Kelima)"."   Tanggal 29 - 31"; }
	 ?></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#ACD75E">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="2">
     <?
	 $tpst=mysqli_query($koneksi, "SELECT id_santri,nis,nama FROM tb_santri WHERE id_santri='$idk_k'");
     $ts=mysqli_fetch_assoc($tpst);
	
	 ?>
	  <tr>
        <td width="1%" bgcolor="#DCF3AF">&nbsp;</td>
        <td width="12%" bgcolor="#DCF3AF">Nis</td>
        <td width="87%" bgcolor="#DCF3AF">: <? echo $ts['nis']; ?></td>
      </tr>
      <tr>
        <td bgcolor="#ACD75E">&nbsp;</td>
        <td bgcolor="#ACD75E">Nama Santri </td>
        <td bgcolor="#ACD75E">: <? echo $ts['nama']; ?></td>
      </tr>
      <tr>
        <td bgcolor="#DCF3AF">&nbsp;</td>
        <td bgcolor="#DCF3AF">Kelas</td>
        <td bgcolor="#DCF3AF">: <? 
	$tpkls=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kd_kls='$klsk'");
    $tk=mysqli_fetch_assoc($tpkls);
	echo $tk['kelas']; ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#ACD75E">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><img src="images/back.gif" width="20" height="22" align="absmiddle" /> <a href="home.php?home=khs&<? echo"pknk=$pknk&klsk=$tk[kelas]&blnk=$blnk"; ?>">Kembali</a></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><? echo date("D"); ?></td>
  </tr>
  <tr>
    <td width="35%" height="154" valign="top" bgcolor="#DCF3AF"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCFF99">
      <tr>
        <td width="20%" rowspan="3" bgcolor="#B3CF70"><div align="center">Jam</div></td>
        <td colspan="2" bgcolor="#B3CF70"><div align="center">Senin</div></td>
        </tr>
      <tr>
        <td width="45%" rowspan="2" bgcolor="#B3CF70"><div align="center">Mata Pelajaran </div></td>
        <td bgcolor="#99CC33"><div align="center">KET</div></td>
        </tr>
      <tr>
        <td width="18%" bgcolor="#CCFF00"><div align="center">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <?  
	 /*  $tampih=mysqli_query($koneksi, "SELECT * FROM tb_kehadiran WHERE kd_santri='$idk_k' and  
	  thn_ajaran='$thaj' and semester='$sem' and bulan='$blnk' and pekan='$pknk'  ");
	  $tph=mysqli_fetch_assoc($tampih);
	  
	  $dett=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$tph[id_kehadiran]' and       hari='Senin' and jam='$tpk3[jam]'  ");
	  $tdt=mysqli_fetch_assoc($dett); */
	   ?>
            <tr>
              <td width="30%" <? if($tdt['status']=='h'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?hari=Senin&<? echo"pknk=$pknk&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&status=h&rekams=Simpan"; ?>" class="lk">h</a></div></td>
              <td width="24%" <? if($tdt['status']=='i'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?hari=Senin&<? echo"pknk=$pknk&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&status=i&rekams=Simpan"; ?>" class="lk">i</a></div></td>
              <td width="22%" <? if($tdt['status']=='s'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?hari=Senin&<? echo"pknk=$pknk&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&status=s&rekams=Simpan"; ?>" class="lk">s</a></div></td>
              <td width="24%" <? if($tdt['status']=='a'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?hari=Senin&<? echo"pknk=$pknk&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&status=a&rekams=Simpan"; ?>" class="lk">a</a></div></td>
            </tr>
          </table>
        </div></td>
        </tr>
		<?
$tampi=mysqli_query($koneksi, "SELECT * FROM tb_roster WHERE thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$klsk' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  
	$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_roster WHERE kd_rt='$tpk[id_rt]' and hari='Senin' ORDER BY jam");
         while($tpk2=mysqli_fetch_assoc($tampi2)){
		  
		?>
      <tr>
        <td bgcolor="#FFFFFF">
		  <div align="center">
		    <?
		   $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_jam WHERE kd_jam='$tpk2[jam]' ");
           $tpk3=mysqli_fetch_assoc($tampi3);
		   echo $tpk3['jam'];
		?>		
	      </div></td>
        <td bgcolor="#FFFFFF"><?
	$tampi4=mysqli_query($koneksi, "SELECT kd_mp,nama_mp FROM mata_pelajaran WHERE kd_mp='$tpk2[kd_mp]' ");
           $tpk4=mysqli_fetch_assoc($tampi4);
		   echo $tpk4['nama_mp'];
		?></td>
     <td bgcolor="#FFFFFF"><div align="center">
       <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <?  
	 // $tampih=mysqli_query($koneksi, "SELECT * FROM tb_kehadiran WHERE kd_santri='$idk_k' and  
	//  thn_ajaran='$thaj' and semester='$sem' and bulan='$blnk' and pekan='$pknk'  ");
	//  $tph=mysqli_fetch_assoc($tampih);
	  
	  $dett=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$idk_k' and hari='Senin' and jam='$tpk3[jam]' and kd_mpl='$tpk4[kd_mp]' and 
	                      pekan='$pknk' and bulan='$blnk' and semester='$sem' and tth_ajaran='$thaj'");
	  $tdt=mysqli_fetch_assoc($dett);
	   ?>
		 <tr> 
           <td width="30%" <? if($tdt['status']=='h'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?<? echo"pknk=$pknk&kdmpl=$tpk2[kd_mp]&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&hari=Senin&jam=$tpk3[jam]&status=h&rekam=Simpan"; ?>" class="lk">h</a></div></td>
           <td width="24%" <? if($tdt['status']=='i'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?<? echo"pknk=$pknk&kdmpl=$tpk2[kd_mp]&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&hari=Senin&jam=$tpk3[jam]&status=i&rekam=Simpan"; ?>" class="lk">i</a></div></td>
           <td width="22%" <? if($tdt['status']=='s'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?<? echo"pknk=$pknk&kdmpl=$tpk2[kd_mp]&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&hari=Senin&jam=$tpk3[jam]&status=s&rekam=Simpan"; ?>" class="lk">s</a></div></td>
           <td width="24%" <? if($tdt['status']=='a'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?<? echo"pknk=$pknk&kdmpl=$tpk2[kd_mp]&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&hari=Senin&jam=$tpk3[jam]&status=a&rekam=Simpan"; ?>" class="lk">a</a></div></td>
         </tr>
       </table>
     </div></td>
        </tr>
	<? } ?>
      <tr>
        <td height="21" colspan="3" bgcolor="#B3CF70"><table width="100%" border="0" cellspacing="0" cellpadding="0" height="0">
         <? if(($status=='i' || $status=='s') and $hari=="Senin"){ ?>
		  <tr height="0">
		    <td height="0" valign="top">&nbsp;</td>
		    </tr>
		  <tr height="0">
            <td height="0" valign="top">
              
              <form id="form1" name="form1" method="post" action="page/act_dt_kehadiran.php">
          <div align="left">
            &nbsp;<input name="keterangank" type="text" size="40" />
            <input type="submit" name="ketkeh" value="Simpan" />
            <input type="hidden" name="hari_k" value="Senin" />
			
            <input type="hidden" name="kd_mpke" value="<? echo $kdmpl; ?>" />
            <input type="hidden" name="pekank" value="<? echo $pknk; ?>" />
            <input type="hidden" name="klskkr" value="<? echo $klsk; ?>" />
            <input type="hidden" name="blnkr" value="<? echo $blnk; ?>" />
            <input type="hidden" name="kdstrk" value="<? echo $idk_k; ?>" />
            <input type="hidden" name="sta_st" value="<? echo $status; ?>" />
            <input type="hidden" name="jamkr" value="<? echo $jam; ?>" />
          </div>
              </form>              </td>
          </tr><? } ?>
        </table></td>
      </tr>
    </table></td>
    <td width="35%" valign="top" bgcolor="#DCF3AF"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCFF99">
      <tr>
        <td width="20%" rowspan="3" bgcolor="#B3CF70"><div align="center">Jam</div></td>
        <td colspan="2" bgcolor="#B3CF70"><div align="center">Selasa</div></td>
      </tr>
      <tr>
        <td width="45%" rowspan="2" bgcolor="#B3CF70"><div align="center">Mata Pelajaran </div></td>
        <td bgcolor="#99CC33"><div align="center">KET</div></td>
      </tr>
      <tr>
        <td width="18%" bgcolor="#CCFF00"><div align="center">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <?  
	 	  
	  $dett=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$idk_k' and hari='Selasa' and jam='$tpk3[jam]' and kd_mpl='$tpk4[kd_mp]' and 
	                      pekan='$pknk' and bulan='$blnk' and semester='$sem' and tth_ajaran='$thaj'");
	  $tdt=mysqli_fetch_assoc($dett);
	   ?>
            <tr>
              <td width="30%" <? if($tdt['status']=='h'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?hari=Selasa&<? echo"pknk=$pknk&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&status=h&rekams=Simpan"; ?>" class="lk">h</a></div></td>
              <td width="24%" <? if($tdt['status']=='i'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?hari=Selasa&<? echo"pknk=$pknk&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&status=i&rekams=Simpan"; ?>" class="lk">i</a></div></td>
              <td width="22%" <? if($tdt['status']=='s'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?hari=Selasa&<? echo"pknk=$pknk&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&status=s&rekams=Simpan"; ?>" class="lk">s</a></div></td>
              <td width="24%" <? if($tdt['status']=='a'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?hari=Selasa&<? echo"pknk=$pknk&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&status=a&rekams=Simpan"; ?>" class="lk">a</a></div></td>
            </tr>
          </table>
        </div></td>
      </tr>
      <?
$tampi=mysqli_query($koneksi, "SELECT * FROM tb_roster WHERE thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$klsk' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  
	$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_roster WHERE kd_rt='$tpk[id_rt]' and hari='Selasa' ORDER BY jam");
         while($tpk2=mysqli_fetch_assoc($tampi2)){
		  
		?>
      <tr>
        <td bgcolor="#FFFFFF"><div align="center">
          <?
		   $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_jam WHERE kd_jam='$tpk2[jam]' ");
           $tpk3=mysqli_fetch_assoc($tampi3);
		   echo $tpk3['jam'];
		?>
        </div></td>
        <td bgcolor="#FFFFFF"><?
	$tampi4=mysqli_query($koneksi, "SELECT kd_mp,nama_mp FROM mata_pelajaran WHERE kd_mp='$tpk2[kd_mp]' ");
           $tpk4=mysqli_fetch_assoc($tampi4);
		   echo $tpk4['nama_mp'];
		?></td>
        <td bgcolor="#FFFFFF"><div align="center">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <?  
	   
	 $dett=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$idk_k' and hari='Selasa' and jam='$tpk3[jam]' and kd_mpl='$tpk4[kd_mp]' and 
	                      pekan='$pknk' and bulan='$blnk' and semester='$sem' and tth_ajaran='$thaj'");
	  $tdt=mysqli_fetch_assoc($dett);
	   ?>
              <tr>
                <td width="30%" <? if($tdt['status']=='h'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?<? echo"pknk=$pknk&kdmpl=$tpk2[kd_mp]&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&hari=Selasa&jam=$tpk3[jam]&status=h&rekam=Simpan"; ?>" class="lk">h</a></div></td>
                <td width="24%" <? if($tdt['status']=='i'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?<? echo"pknk=$pknk&kdmpl=$tpk2[kd_mp]&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&hari=Selasa&jam=$tpk3[jam]&status=i&rekam=Simpan"; ?>" class="lk">i</a></div></td>
                <td width="22%" <? if($tdt['status']=='s'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?<? echo"pknk=$pknk&kdmpl=$tpk2[kd_mp]&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&hari=Selasa&jam=$tpk3[jam]&status=s&rekam=Simpan"; ?>" class="lk">s</a></div></td>
                <td width="24%" <? if($tdt['status']=='a'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?<? echo"pknk=$pknk&kdmpl=$tpk2[kd_mp]&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&hari=Selasa&jam=$tpk3[jam]&status=a&rekam=Simpan"; ?>" class="lk">a</a></div></td>
              </tr>
            </table>
        </div></td>
      </tr>
      <? } ?>
      <tr>
        <td colspan="3" valign="top" bgcolor="#B3CF70"><table width="100%" border="0" cellspacing="0" cellpadding="0" height="0">
          
          <tr height="0">
            <td height="0" valign="top">&nbsp;</td>
          </tr>
		  <? if(($status=='i' || $status=='s') and $hari=="Selasa"){ ?>
          <tr height="0">
            <td height="0" valign="top"><form id="form1" name="form1" method="post" action="page/act_dt_kehadiran.php">
                <div align="left"> &nbsp;
                    <input name="keterangank" type="text" size="40" />
                    <input type="submit" name="ketkeh" value="Simpan" />
                    
                    <input type="hidden" name="hari_k" value="Selasa" />
                    <input type="hidden" name="kd_mpke" value="<? echo $kdmpl; ?>" />
                    <input type="hidden" name="pekank" value="<? echo $pknk; ?>" />
                    <input type="hidden" name="klskkr" value="<? echo $klsk; ?>" />
                    <input type="hidden" name="blnkr" value="<? echo $blnk; ?>" />
                    <input type="hidden" name="kdstrk" value="<? echo $idk_k; ?>" />
                    <input type="hidden" name="sta_st" value="<? echo $status; ?>" />
                    <input type="hidden" name="jamkr" value="<? echo $jam; ?>" />
                </div>
            </form></td>
          </tr>
          <? } ?>
        </table></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="111" valign="top" bgcolor="#DCF3AF"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCFF99">
      <tr>
        <td width="20%" rowspan="3" bgcolor="#B3CF70"><div align="center">Jam</div></td>
        <td colspan="2" bgcolor="#B3CF70"><div align="center">Rabu</div></td>
      </tr>
      <tr>
        <td width="45%" rowspan="2" bgcolor="#B3CF70"><div align="center">Mata Pelajaran </div></td>
        <td bgcolor="#99CC33"><div align="center">KET</div></td>
      </tr>
      <tr>
        <td width="18%" bgcolor="#CCFF00"><div align="center">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <?  
	  $dett=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$idk_k' and hari='Rabu' and jam='$tpk3[jam]' and kd_mpl='$tpk4[kd_mp]' and 
	                      pekan='$pknk' and bulan='$blnk' and semester='$sem' and tth_ajaran='$thaj'");
	  $tdt=mysqli_fetch_assoc($dett);
	   ?>
            <tr>
              <td width="30%" <? if($tdt['status']=='h'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?hari=Rabu&<? echo"pknk=$pknk&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&status=h&rekams=Simpan"; ?>" class="lk">h</a></div></td>
              <td width="24%" <? if($tdt['status']=='i'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?hari=Rabu&<? echo"pknk=$pknk&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&status=i&rekams=Simpan"; ?>" class="lk">i</a></div></td>
              <td width="22%" <? if($tdt['status']=='s'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?hari=Rabu&<? echo"pknk=$pknk&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&status=s&rekams=Simpan"; ?>" class="lk">s</a></div></td>
              <td width="24%" <? if($tdt['status']=='a'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?hari=Rabu&<? echo"pknk=$pknk&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&status=a&rekams=Simpan"; ?>" class="lk">a</a></div></td>
            </tr>
          </table>
        </div></td>
      </tr>
      <?
$tampi=mysqli_query($koneksi, "SELECT * FROM tb_roster WHERE thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$klsk' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  
	$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_roster WHERE kd_rt='$tpk[id_rt]' and hari='Rabu' ORDER BY jam");
         while($tpk2=mysqli_fetch_assoc($tampi2)){
		  
		?>
      <tr>
        <td bgcolor="#FFFFFF"><div align="center">
          <?
		   $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_jam WHERE kd_jam='$tpk2[jam]' ");
           $tpk3=mysqli_fetch_assoc($tampi3);
		   echo $tpk3['jam'];
		?>
        </div></td>
        <td bgcolor="#FFFFFF"><?
	$tampi4=mysqli_query($koneksi, "SELECT kd_mp,nama_mp FROM mata_pelajaran WHERE kd_mp='$tpk2[kd_mp]' ");
           $tpk4=mysqli_fetch_assoc($tampi4);
		   echo $tpk4['nama_mp'];
		?></td>
        <td bgcolor="#FFFFFF"><div align="center">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <?  
	  
	  
	  $dett=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$idk_k' and hari='Rabu' and jam='$tpk3[jam]' and kd_mpl='$tpk4[kd_mp]' and 
	                      pekan='$pknk' and bulan='$blnk' and semester='$sem' and tth_ajaran='$thaj'");
	  $tdt=mysqli_fetch_assoc($dett);
	   ?>
              <tr>
                <td width="30%" <? if($tdt['status']=='h'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?<? echo"pknk=$pknk&kdmpl=$tpk2[kd_mp]&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&hari=Rabu&jam=$tpk3[jam]&status=h&rekam=Simpan"; ?>" class="lk">h</a></div></td>
                <td width="24%" <? if($tdt['status']=='i'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?<? echo"pknk=$pknk&kdmpl=$tpk2[kd_mp]&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&hari=Rabu&jam=$tpk3[jam]&status=i&rekam=Simpan"; ?>" class="lk">i</a></div></td>
                <td width="22%" <? if($tdt['status']=='s'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?<? echo"pknk=$pknk&kdmpl=$tpk2[kd_mp]&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&hari=Rabu&jam=$tpk3[jam]&status=s&rekam=Simpan"; ?>" class="lk">s</a></div></td>
                <td width="24%" <? if($tdt['status']=='a'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?<? echo"pknk=$pknk&kdmpl=$tpk2[kd_mp]&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&hari=Rabu&jam=$tpk3[jam]&status=a&rekam=Simpan"; ?>" class="lk">a</a></div></td>
              </tr>
            </table>
        </div></td>
      </tr>
      <? } ?>
      <tr>
        <td height="21" colspan="3" valign="top" bgcolor="#B3CF70"><table width="100%" border="0" cellspacing="0" cellpadding="0" height="0">
          <tr height="0">
            <td height="0" valign="top">&nbsp;</td>
          </tr>
          <? if(($status=='i' || $status=='s') and $hari=="Rabu"){ ?>
          <tr height="0">
            <td height="0" valign="top"><form id="form1" name="form1" method="post" action="page/act_dt_kehadiran.php">
                <div align="left"> &nbsp;
                    <input name="keterangank" type="text" size="40" />
                    <input type="submit" name="ketkeh" value="Simpan" />
                    <input type="hidden" name="hari_k" value="Rabu" />
                    <input type="hidden" name="kd_mpke" value="<? echo $kdmpl; ?>" />
                    <input type="hidden" name="pekank" value="<? echo $pknk; ?>" />
                    <input type="hidden" name="klskkr" value="<? echo $klsk; ?>" />
                    <input type="hidden" name="blnkr" value="<? echo $blnk; ?>" />
                    <input type="hidden" name="kdstrk" value="<? echo $idk_k; ?>" />
                    <input type="hidden" name="sta_st" value="<? echo $status; ?>" />
                    <input type="hidden" name="jamkr" value="<? echo $jam; ?>" />
                </div>
            </form></td>
          </tr>
          <? } ?>
        </table></td>
        </tr>
    </table></td>
    <td valign="top" bgcolor="#DCF3AF"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCFF99">
      <tr>
        <td width="20%" rowspan="3" bgcolor="#B3CF70"><div align="center">Jam</div></td>
        <td colspan="2" bgcolor="#B3CF70"><div align="center">Kamis</div></td>
      </tr>
      <tr>
        <td width="45%" rowspan="2" bgcolor="#B3CF70"><div align="center">Mata Pelajaran </div></td>
        <td bgcolor="#99CC33"><div align="center">KET</div></td>
      </tr>
      <tr>
        <td width="18%" bgcolor="#B3CF70"><div align="center">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <?  
	 
	  
	  $dett=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$idk_k' and hari='Kamis' and jam='$tpk3[jam]' and kd_mpl='$tpk4[kd_mp]' and 
	                      pekan='$pknk' and bulan='$blnk' and semester='$sem' and tth_ajaran='$thaj'");
	  $tdt=mysqli_fetch_assoc($dett);
	   ?>
            <tr>
              <td width="30%" bgcolor="#CCFF00" <? if($tdt['status']=='h'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?hari=Kamis&<? echo"pknk=$pknk&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&status=h&rekams=Simpan"; ?>" class="lk">h</a></div></td>
              <td width="24%" bgcolor="#CCFF00" <? if($tdt['status']=='i'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?hari=Kamis&<? echo"pknk=$pknk&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&status=i&rekams=Simpan"; ?>" class="lk">i</a></div></td>
              <td width="22%" bgcolor="#CCFF00" <? if($tdt['status']=='s'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?hari=Kamis&<? echo"pknk=$pknk&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&status=s&rekams=Simpan"; ?>" class="lk">s</a></div></td>
              <td width="24%" bgcolor="#CCFF00" <? if($tdt['status']=='a'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?hari=Kamis&<? echo"pknk=$pknk&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&status=a&rekams=Simpan"; ?>" class="lk">a</a></div></td>
            </tr>
          </table>
        </div></td>
      </tr>
      <?
$tampi=mysqli_query($koneksi, "SELECT * FROM tb_roster WHERE thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$klsk' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  
	$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_roster WHERE kd_rt='$tpk[id_rt]' and hari='Kamis' ORDER BY jam");
         while($tpk2=mysqli_fetch_assoc($tampi2)){
		  
		?>
      <tr>
        <td bgcolor="#FFFFFF"><div align="center">
          <?
		   $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_jam WHERE kd_jam='$tpk2[jam]' ");
           $tpk3=mysqli_fetch_assoc($tampi3);
		   echo $tpk3['jam'];
		?>
        </div></td>
        <td bgcolor="#FFFFFF"><?
	$tampi4=mysqli_query($koneksi, "SELECT kd_mp,nama_mp FROM mata_pelajaran WHERE kd_mp='$tpk2[kd_mp]' ");
           $tpk4=mysqli_fetch_assoc($tampi4);
		   echo $tpk4['nama_mp'];
		?></td>
        <td bgcolor="#FFFFFF"><div align="center">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <?  
	 	  
	  $dett=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$idk_k' and hari='Kamis' and jam='$tpk3[jam]' and kd_mpl='$tpk4[kd_mp]' and 
	                      pekan='$pknk' and bulan='$blnk' and semester='$sem' and tth_ajaran='$thaj'");
	  $tdt=mysqli_fetch_assoc($dett);
	   ?>
              <tr>
                <td width="30%" <? if($tdt['status']=='h'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?<? echo"pknk=$pknk&kdmpl=$tpk2[kd_mp]&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&hari=Kamis&jam=$tpk3[jam]&status=h&rekam=Simpan"; ?>" class="lk">h</a></div></td>
                <td width="24%" <? if($tdt['status']=='i'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?<? echo"pknk=$pknk&kdmpl=$tpk2[kd_mp]&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&hari=Kamis&jam=$tpk3[jam]&status=i&rekam=Simpan"; ?>" class="lk">i</a></div></td>
                <td width="22%" <? if($tdt['status']=='s'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?<? echo"pknk=$pknk&kdmpl=$tpk2[kd_mp]&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&hari=Kamis&jam=$tpk3[jam]&status=s&rekam=Simpan"; ?>" class="lk">s</a></div></td>
                <td width="24%" <? if($tdt['status']=='a'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?<? echo"pknk=$pknk&kdmpl=$tpk2[kd_mp]&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&hari=Kamis&jam=$tpk3[jam]&status=a&rekam=Simpan"; ?>" class="lk">a</a></div></td>
              </tr>
            </table>
        </div></td>
      </tr>
      <? } ?>
      <tr>
        <td colspan="3" valign="top" bgcolor="#B3CF70"><table width="100%" border="0" cellspacing="0" cellpadding="0" height="0">
          <tr height="0">
            <td height="0" valign="top">&nbsp;</td>
          </tr>
          <? if(($status=='i' || $status=='s') and $hari=="Kamis"){ ?>
          <tr height="0">
            <td height="0" valign="top"><form id="form1" name="form1" method="post" action="page/act_dt_kehadiran.php">
                <div align="left"> &nbsp;
                    <input name="keterangank" type="text" size="40" />
                    <input type="submit" name="ketkeh" value="Simpan" />
                    <input type="hidden" name="hari_k" value="Kamis" />
                    <input type="hidden" name="kd_mpke" value="<? echo $kdmpl; ?>" />
                    <input type="hidden" name="pekank" value="<? echo $pknk; ?>" />
                    <input type="hidden" name="klskkr" value="<? echo $klsk; ?>" />
                    <input type="hidden" name="blnkr" value="<? echo $blnk; ?>" />
                    <input type="hidden" name="kdstrk" value="<? echo $idk_k; ?>" />
                    <input type="hidden" name="sta_st" value="<? echo $status; ?>" />
                    <input type="hidden" name="jamkr" value="<? echo $jam; ?>" />
                </div>
            </form></td>
          </tr>
          <? } ?>
        </table></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td valign="top" bgcolor="#DCF3AF"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCFF99">
      <tr>
        <td width="20%" rowspan="3" bgcolor="#B3CF70"><div align="center">Jam</div></td>
        <td colspan="2" bgcolor="#B3CF70"><div align="center">Sabtu</div></td>
      </tr>
      <tr>
        <td width="45%" rowspan="2" bgcolor="#B3CF70"><div align="center">Mata Pelajaran </div></td>
        <td bgcolor="#99CC33"><div align="center">KET</div></td>
      </tr>
      <tr>
        <td width="18%" bgcolor="#CCFF00"><div align="center">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <?  
	  	  
	  $dett=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$idk_k' and hari='Sabtu' and jam='$tpk3[jam]' and kd_mpl='$tpk4[kd_mp]' and 
	                      pekan='$pknk' and bulan='$blnk' and semester='$sem' and tth_ajaran='$thaj'");
	  $tdt=mysqli_fetch_assoc($dett);
	   ?>
            <tr>
              <td width="30%" <? if($tdt['status']=='h'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?hari=Sabtu&<? echo"pknk=$pknk&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&status=h&rekams=Simpan"; ?>" class="lk">h</a></div></td>
              <td width="24%" <? if($tdt['status']=='i'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?hari=Sabtu&<? echo"pknk=$pknk&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&status=i&rekams=Simpan"; ?>" class="lk">i</a></div></td>
              <td width="22%" <? if($tdt['status']=='s'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?hari=Sabtu&<? echo"pknk=$pknk&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&status=s&rekams=Simpan"; ?>" class="lk">s</a></div></td>
              <td width="24%" <? if($tdt['status']=='a'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?hari=Sabtu&<? echo"pknk=$pknk&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&status=a&rekams=Simpan"; ?>" class="lk">a</a></div></td>
            </tr>
          </table>
        </div></td>
      </tr>
      <?
$tampi=mysqli_query($koneksi, "SELECT * FROM tb_roster WHERE thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$klsk' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  
	$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_roster WHERE kd_rt='$tpk[id_rt]' and hari='Sabtu' ORDER BY jam");
         while($tpk2=mysqli_fetch_assoc($tampi2)){
		  
		?>
      <tr>
        <td bgcolor="#FFFFFF"><div align="center">
          <?
		   $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_jam WHERE kd_jam='$tpk2[jam]' ");
           $tpk3=mysqli_fetch_assoc($tampi3);
		   echo $tpk3['jam'];
		?>        
        </div></td>
        <td bgcolor="#FFFFFF"><?
	$tampi4=mysqli_query($koneksi, "SELECT kd_mp,nama_mp FROM mata_pelajaran WHERE kd_mp='$tpk2[kd_mp]' ");
           $tpk4=mysqli_fetch_assoc($tampi4);
		   echo $tpk4['nama_mp'];
		?></td>
        <td bgcolor="#FFFFFF"><div align="center">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <?  
	    
	  $dett=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$idk_k' and hari='Sabtu' and jam='$tpk3[jam]' and kd_mpl='$tpk4[kd_mp]' and 
	                      pekan='$pknk' and bulan='$blnk' and semester='$sem' and tth_ajaran='$thaj'");
	  $tdt=mysqli_fetch_assoc($dett);
	   ?>
              <tr>
                <td width="30%" <? if($tdt['status']=='h'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?<? echo"pknk=$pknk&kdmpl=$tpk2[kd_mp]&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&hari=Sabtu&jam=$tpk3[jam]&status=h&rekam=Simpan"; ?>" class="lk">h</a></div></td>
                <td width="24%" <? if($tdt['status']=='i'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?<? echo"pknk=$pknk&kdmpl=$tpk2[kd_mp]&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&hari=Sabtu&jam=$tpk3[jam]&status=i&rekam=Simpan"; ?>" class="lk">i</a></div></td>
                <td width="22%" <? if($tdt['status']=='s'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?<? echo"pknk=$pknk&kdmpl=$tpk2[kd_mp]&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&hari=Sabtu&jam=$tpk3[jam]&status=s&rekam=Simpan"; ?>" class="lk">s</a></div></td>
                <td width="24%" <? if($tdt['status']=='a'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?<? echo"pknk=$pknk&kdmpl=$tpk2[kd_mp]&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&hari=Sabtu&jam=$tpk3[jam]&status=a&rekam=Simpan"; ?>" class="lk">a</a></div></td>
              </tr>
            </table>
        </div></td>
      </tr>
      <? } ?>
      <tr>
        <td colspan="3" valign="top" bgcolor="#B3CF70"><table width="100%" border="0" cellspacing="0" cellpadding="0" height="0">
          <tr height="0">
            <td height="0" valign="top">&nbsp;</td>
          </tr>
          <? if(($status=='i' || $status=='s') and $hari=="Sabtu"){ ?>
          <tr height="0">
            <td height="0" valign="top"><form id="form1" name="form1" method="post" action="page/act_dt_kehadiran.php">
                <div align="left"> &nbsp;
                    <input name="keterangank" type="text" size="40" />
                    <input type="submit" name="ketkeh" value="Simpan" />
                    <input type="hidden" name="hari_k" value="Sabtu" />
                    <input type="hidden" name="kd_mpke" value="<? echo $kdmpl; ?>" />
                    <input type="hidden" name="pekank" value="<? echo $pknk; ?>" />
                    <input type="hidden" name="klskkr" value="<? echo $klsk; ?>" />
                    <input type="hidden" name="blnkr" value="<? echo $blnk; ?>" />
                    <input type="hidden" name="kdstrk" value="<? echo $idk_k; ?>" />
                    <input type="hidden" name="sta_st" value="<? echo $status; ?>" />
                    <input type="hidden" name="jamkr" value="<? echo $jam; ?>" />
                </div>
            </form></td>
          </tr>
          <? } ?>
        </table></td>
        </tr>
    </table></td>
    <td valign="top" bgcolor="#DCF3AF"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCFF99">
      <tr>
        <td width="20%" rowspan="3" bgcolor="#B3CF70"><div align="center">Jam</div></td>
        <td colspan="2" bgcolor="#B3CF70"><div align="center">Ahad</div></td>
      </tr>
      <tr>
        <td width="45%" rowspan="2" bgcolor="#B3CF70"><div align="center">Mata Pelajaran </div></td>
        <td bgcolor="#99CC33"><div align="center">KET</div></td>
      </tr>
      <tr>
        <td width="18%" bgcolor="#CCFF00"><div align="center">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <?  
	    
	  $dett=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$idk_k' and hari='Ahad' and jam='$tpk3[jam]' and kd_mpl='$tpk4[kd_mp]' and 
	                      pekan='$pknk' and bulan='$blnk' and semester='$sem' and tth_ajaran='$thaj'");
	  $tdt=mysqli_fetch_assoc($dett);
	   ?>
            <tr>
              <td width="30%" <? if($tdt['status']=='h'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?hari=Ahad&<? echo"pknk=$pknk&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&status=h&rekams=Simpan"; ?>" class="lk">h</a></div></td>
              <td width="24%" <? if($tdt['status']=='i'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?hari=Ahad&<? echo"pknk=$pknk&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&status=i&rekams=Simpan"; ?>" class="lk">i</a></div></td>
              <td width="22%" <? if($tdt['status']=='s'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?hari=Ahad&<? echo"pknk=$pknk&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&status=s&rekams=Simpan"; ?>" class="lk">s</a></div></td>
              <td width="24%" <? if($tdt['status']=='a'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?hari=Ahad&<? echo"pknk=$pknk&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&status=a&rekams=Simpan"; ?>" class="lk">a</a></div></td>
            </tr>
          </table>
        </div></td>
      </tr>
      <?
$tampi=mysqli_query($koneksi, "SELECT * FROM tb_roster WHERE thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$klsk' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  
	$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_roster WHERE kd_rt='$tpk[id_rt]' and hari='Ahad' ORDER BY jam");
         while($tpk2=mysqli_fetch_assoc($tampi2)){
		  
		?>
      <tr>
        <td bgcolor="#FFFFFF"><div align="center">
          <?
		   $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_jam WHERE kd_jam='$tpk2[jam]' ");
           $tpk3=mysqli_fetch_assoc($tampi3);
		   echo $tpk3['jam'];
		?>        
        </div></td>
        <td bgcolor="#FFFFFF"><?
	$tampi4=mysqli_query($koneksi, "SELECT kd_mp,nama_mp FROM mata_pelajaran WHERE kd_mp='$tpk2[kd_mp]' ");
           $tpk4=mysqli_fetch_assoc($tampi4);
		   echo $tpk4['nama_mp'];
		?></td>
        <td bgcolor="#FFFFFF"><div align="center">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <?  
	  	  
	  $dett=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$idk_k' and hari='Ahad' and jam='$tpk3[jam]' and kd_mpl='$tpk4[kd_mp]' and 
	                      pekan='$pknk' and bulan='$blnk' and semester='$sem' and tth_ajaran='$thaj'");
	  $tdt=mysqli_fetch_assoc($dett);
	   ?>
              <tr>
                <td width="30%" <? if($tdt['status']=='h'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?<? echo"pknk=$pknk&kdmpl=$tpk2[kd_mp]&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&hari=Ahad&jam=$tpk3[jam]&status=h&rekam=Simpan"; ?>" class="lk">h</a></div></td>
                <td width="24%" <? if($tdt['status']=='i'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?<? echo"pknk=$pknk&kdmpl=$tpk2[kd_mp]&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&hari=Ahad&jam=$tpk3[jam]&status=i&rekam=Simpan"; ?>" class="lk">i</a></div></td>
                <td width="22%" <? if($tdt['status']=='s'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?<? echo"pknk=$pknk&kdmpl=$tpk2[kd_mp]&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&hari=Ahad&jam=$tpk3[jam]&status=s&rekam=Simpan"; ?>" class="lk">s</a></div></td>
                <td width="24%" <? if($tdt['status']=='a'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?<? echo"pknk=$pknk&kdmpl=$tpk2[kd_mp]&klsk=$klsk&blnk=$blnk&idk_k=$idk_k&hari=Ahad&jam=$tpk3[jam]&status=a&rekam=Simpan"; ?>" class="lk">a</a></div></td>
              </tr>
            </table>
        </div></td>
      </tr>
      <? } ?>
      <tr>
        <td colspan="3" valign="top" bgcolor="#B3CF70"><table width="100%" border="0" cellspacing="0" cellpadding="0" height="0">
          <tr height="0">
            <td height="0" valign="top">&nbsp;</td>
          </tr>
          <? if(($status=='i' || $status=='s') and $hari=="Ahad"){ ?>
          <tr height="0">
            <td height="0" valign="top"><form id="form1" name="form1" method="post" action="page/act_dt_kehadiran.php">
                <div align="left"> &nbsp;
                    <input name="keterangank" type="text" size="40" />
                    <input type="submit" name="ketkeh" value="Simpan" />
                    <input type="hidden" name="hari_k" value="Ahad" />
                    <input type="hidden" name="kd_mpke" value="<? echo $kdmpl; ?>" />
                    <input type="hidden" name="pekank" value="<? echo $pknk; ?>" />
                    <input type="hidden" name="klskkr" value="<? echo $klsk; ?>" />
                    <input type="hidden" name="blnkr" value="<? echo $blnk; ?>" />
                    <input type="hidden" name="kdstrk" value="<? echo $idk_k; ?>" />
                    <input type="hidden" name="sta_st" value="<? echo $status; ?>" />
                    <input type="hidden" name="jamkr" value="<? echo $jam; ?>" />
                </div>
            </form></td>
          </tr>
          <? } ?>
        </table></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</body>
</html>
