<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style7 {font-size: 12px}
.style8 {
	font-size: 14px;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="75%">&nbsp;</td>
        <td width="14%"><strong>Bulan :</strong> <? echo $bulan; ?></td>
        <td width="11%"><strong>Pekan :</strong><span class="style7">
          <? if($pekan=='I'){ echo $pekan." (Pertama)"; }else{ echo $pekan." (Kedua)"; }  ?>
        </span></td>
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <td colspan="3" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCFF99">
      <tr>
        <td width="12%" rowspan="2" bgcolor="#B3CF70"><div align="center">Jam</div></td>
        <td colspan="3" bgcolor="#B3CF70"><div align="center"><font size="2"><strong>S 
              e n i n</strong></font></div></td>
      </tr>
      <tr>
        <td width="42%" bgcolor="#99CC33"><div align="center">Mata Pelajaran </div></td>
        <td width="11%" bgcolor="#99CC66"><div align="center">Keterangan</div></td>
        <td width="35%" bgcolor="#99CC33"><div align="center">Penjelasan</div>          <div align="center"></div></td>
      </tr>
      
      <?
//$tampi=mysqli_query($koneksi, "SELECT * FROM tb_kehadiran WHERE kd_santri='$id_santri' and thn_ajaran='$thn_ajaran' and semester='$semester' and bulan='$bulan' and pekan='$pekan' ");
//          $tpk=mysqli_fetch_assoc($tampi);
		  
	$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$id_santri' and pekan='$pekan' and bulan='$bulan' and semester='$semester' and tth_ajaran='$thn_ajaran' and hari='Senin' ");
         while($tpk2=mysqli_fetch_assoc($tampi2)){
		  
		?>
      <tr>
        <td bgcolor="#FFFFFF"><div align="center">
          <?
		   echo $tpk2['jam'];
		?>        
        </div></td>
        <td bgcolor="#FFFFFF"><?
	$tampi4=mysqli_query($koneksi, "SELECT kd_mp,nama_mp FROM mata_pelajaran WHERE kd_mp='$tpk2[kd_mpl]' ");
           $tpk4=mysqli_fetch_assoc($tampi4);
		   echo $tpk4['nama_mp'];
		?></td>
        <td bgcolor="#FFFFFF"><div align="center">
          <? 
		if($tpk2['status']=='h'){ echo "Hadir"; }
		if($tpk2['status']=='i'){ echo "Izin"; }
		if($tpk2['status']=='s'){ echo "Sakit"; }
		if($tpk2['status']=='a'){ echo "Alpa"; }
		 ?>
        </div>          </td>
        <td bgcolor="#FFFFFF"><? echo $tpk2['keterangan']; ?></td>
      </tr>
      <? } ?>
      <tr>
        <td colspan="4" bgcolor="#B3CF70">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="55%">&nbsp;</td>
    <td width="23%">&nbsp;</td>
    <td width="22%">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCFF99">
      <tr>
        <td width="12%" rowspan="2" bgcolor="#B3CF70"><div align="center">Jam</div></td>
        <td colspan="3" bgcolor="#B3CF70"><div align="center"><strong><font size="2">S 
              e l a s a</font></strong></div></td>
      </tr>
      <tr>
        <td width="42%" bgcolor="#99CC33"><div align="center">Mata Pelajaran </div></td>
        <td width="11%" bgcolor="#99CC66"><div align="center">Keterangan</div></td>
        <td width="35%" bgcolor="#99CC33"><div align="center">Penjelasan</div>
            <div align="center"></div></td>
      </tr>
      <?
		  
	$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$id_santri' and pekan='$pekan' and bulan='$bulan' and semester='$semester' and tth_ajaran='$thn_ajaran' and hari='Selasa' ");
         while($tpk2=mysqli_fetch_assoc($tampi2)){
		  
		?>
      <tr>
        <td bgcolor="#FFFFFF"><div align="center">
            <?
		   echo $tpk2['jam'];
		?>
        </div></td>
        <td bgcolor="#FFFFFF"><?
	$tampi4=mysqli_query($koneksi, "SELECT kd_mp,nama_mp FROM mata_pelajaran WHERE kd_mp='$tpk2[kd_mpl]' ");
           $tpk4=mysqli_fetch_assoc($tampi4);
		   echo $tpk4['nama_mp'];
		?></td>
        <td bgcolor="#FFFFFF"><div align="center">
          <? 
		if($tpk2['status']=='h'){ echo "Hadir"; }
		if($tpk2['status']=='i'){ echo "Izin"; }
		if($tpk2['status']=='s'){ echo "Sakit"; }
		if($tpk2['status']=='a'){ echo "Alpa"; }
		 ?>
        </div>          </td>
        <td bgcolor="#FFFFFF"><? echo $tpk2['keterangan']; ?></td>
      </tr>
      <? } ?>
      <tr>
        <td colspan="4" bgcolor="#B3CF70">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCFF99">
      <tr>
        <td width="12%" rowspan="2" bgcolor="#B3CF70"><div align="center">Jam</div></td>
        <td colspan="3" bgcolor="#B3CF70"><div align="center"><font size="2"><strong>R 
              a b u</strong></font></div></td>
      </tr>
      <tr>
        <td width="42%" bgcolor="#99CC33"><div align="center">Mata Pelajaran </div></td>
        <td width="11%" bgcolor="#99CC66"><div align="center">Keterangan</div></td>
        <td width="35%" bgcolor="#99CC33"><div align="center">Penjelasan</div>
            <div align="center"></div></td>
      </tr>
      <?

		  
	$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$id_santri' and pekan='$pekan' and bulan='$bulan' and semester='$semester' and tth_ajaran='$thn_ajaran' and hari='Rabu' ");
         while($tpk2=mysqli_fetch_assoc($tampi2)){
		  
		?>
      <tr>
        <td bgcolor="#FFFFFF"><div align="center">
            <?
		   echo $tpk2['jam'];
		?>
        </div></td>
        <td bgcolor="#FFFFFF"><?
	$tampi4=mysqli_query($koneksi, "SELECT kd_mp,nama_mp FROM mata_pelajaran WHERE kd_mp='$tpk2[kd_mpl]' ");
           $tpk4=mysqli_fetch_assoc($tampi4);
		   echo $tpk4['nama_mp'];
		?></td>
        <td bgcolor="#FFFFFF"><div align="center">
          <? 
		if($tpk2['status']=='h'){ echo "Hadir"; }
		if($tpk2['status']=='i'){ echo "Izin"; }
		if($tpk2['status']=='s'){ echo "Sakit"; }
		if($tpk2['status']=='a'){ echo "Alpa"; }
		 ?>
        </div>          </td>
        <td bgcolor="#FFFFFF"><? echo $tpk2['keterangan']; ?></td>
      </tr>
      <? } ?>
      <tr>
        <td colspan="4" bgcolor="#B3CF70">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCFF99">
      <tr>
        <td width="12%" rowspan="2" bgcolor="#B3CF70"><div align="center">Jam</div></td>
        <td colspan="3" bgcolor="#B3CF70"><div align="center"><strong><font size="2">K 
              a m i s</font></strong></div></td>
      </tr>
      <tr>
        <td width="42%" bgcolor="#99CC33"><div align="center">Mata Pelajaran </div></td>
        <td width="11%" bgcolor="#99CC66"><div align="center">Keterangan</div></td>
        <td width="35%" bgcolor="#99CC33"><div align="center">Penjelasan</div>
            <div align="center"></div></td>
      </tr>
      <?

		  
	$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$id_santri' and pekan='$pekan' and bulan='$bulan' and semester='$semester' and tth_ajaran='$thn_ajaran' and hari='Kamis' ");
         while($tpk2=mysqli_fetch_assoc($tampi2)){
		  
		?>
      <tr>
        <td bgcolor="#FFFFFF"><div align="center">
            <?
		   echo $tpk2['jam'];
		?>
        </div></td>
        <td bgcolor="#FFFFFF"><?
	$tampi4=mysqli_query($koneksi, "SELECT kd_mp,nama_mp FROM mata_pelajaran WHERE kd_mp='$tpk2[kd_mpl]' ");
           $tpk4=mysqli_fetch_assoc($tampi4);
		   echo $tpk4['nama_mp'];
		?></td>
        <td bgcolor="#FFFFFF"><div align="center">
          <? 
		if($tpk2['status']=='h'){ echo "Hadir"; }
		if($tpk2['status']=='i'){ echo "Izin"; }
		if($tpk2['status']=='s'){ echo "Sakit"; }
		if($tpk2['status']=='a'){ echo "Alpa"; }
		?>
        </div>          </td>
        <td bgcolor="#FFFFFF"><? echo $tpk2['keterangan']; ?></td>
      </tr>
      <? } ?>
      <tr>
        <td colspan="4" bgcolor="#B3CF70">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCFF99">
      <tr>
        <td width="12%" rowspan="2" bgcolor="#B3CF70"><div align="center">Jam</div></td>
        <td colspan="3" bgcolor="#B3CF70"><div align="center"><strong><font size="2">S 
              a b t u</font></strong></div></td>
      </tr>
      <tr>
        <td width="42%" bgcolor="#99CC33"><div align="center">Mata Pelajaran </div></td>
        <td width="11%" bgcolor="#99CC66"><div align="center">Keterangan</div></td>
        <td width="35%" bgcolor="#99CC33"><div align="center">Penjelasan</div>
            <div align="center"></div></td>
      </tr>
      <?

		  
	$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$id_santri' and pekan='$pekan' and bulan='$bulan' and semester='$semester' and tth_ajaran='$thn_ajaran' and hari='Sabtu' ");
         while($tpk2=mysqli_fetch_assoc($tampi2)){
		  
		?>
      <tr>
        <td bgcolor="#FFFFFF"><div align="center">
            <?
		   echo $tpk2['jam'];
		?>
        </div></td>
        <td bgcolor="#FFFFFF"><?
	$tampi4=mysqli_query($koneksi, "SELECT kd_mp,nama_mp FROM mata_pelajaran WHERE kd_mp='$tpk2[kd_mpl]' ");
           $tpk4=mysqli_fetch_assoc($tampi4);
		   echo $tpk4['nama_mp'];
		?></td>
        <td bgcolor="#FFFFFF"><div align="center">
          <? 
		if($tpk2['status']=='h'){ echo "Hadir"; }
		if($tpk2['status']=='i'){ echo "Izin"; }
		if($tpk2['status']=='s'){ echo "Sakit"; }
		if($tpk2['status']=='a'){ echo "Alpa"; }
		 ?>
        </div>          </td>
        <td bgcolor="#FFFFFF"><? echo $tpk2['keterangan']; ?></td>
      </tr>
      <? } ?>
      <tr>
        <td colspan="4" bgcolor="#B3CF70">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCFF99">
      <tr>
        <td width="12%" rowspan="2" bgcolor="#B3CF70"><div align="center">Jam</div></td>
        <td colspan="3" bgcolor="#B3CF70"><div align="center"><strong><font size="2">A 
              h a d</font></strong></div></td>
      </tr>
      <tr>
        <td width="42%" bgcolor="#99CC33"><div align="center">Mata Pelajaran </div></td>
        <td width="11%" bgcolor="#99CC66"><div align="center">Keterangan</div></td>
        <td width="35%" bgcolor="#99CC33"><div align="center">Penjelasan</div>
            <div align="center"></div></td>
      </tr>
      <?
		  
	$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$id_santri' and pekan='$pekan' and bulan='$bulan' and semester='$semester' and tth_ajaran='$thn_ajaran' and hari='Ahad' ");
         while($tpk2=mysqli_fetch_assoc($tampi2)){
		  
		?>
      <tr>
        <td bgcolor="#FFFFFF"><div align="center">
            <?
		   echo $tpk2['jam'];
		?>
        </div></td>
        <td bgcolor="#FFFFFF"><?
	$tampi4=mysqli_query($koneksi, "SELECT kd_mp,nama_mp FROM mata_pelajaran WHERE kd_mp='$tpk2[kd_mpl]' ");
           $tpk4=mysqli_fetch_assoc($tampi4);
		   echo $tpk4['nama_mp'];
		?></td>
        <td bgcolor="#FFFFFF"><div align="center">
          <? 
		if($tpk2['status']=='h'){ echo "Hadir"; }
		if($tpk2['status']=='i'){ echo "Izin"; }
		if($tpk2['status']=='s'){ echo "Sakit"; }
		if($tpk2['status']=='a'){ echo "Alpa"; }
		?>
        </div>          </td>
        <td bgcolor="#FFFFFF"><? echo $tpk2['keterangan']; ?></td>
      </tr>
      <? } ?>
      <tr>
        <td colspan="4" bgcolor="#B3CF70">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</body>
</html>
