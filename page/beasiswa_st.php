<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>

<?  
	      
	      $tampil=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas ");
          while($tp=mysqli_fetch_assoc($tampil)){
		  echo"<br>Kelas : $tp[kelas] <br>";
?>
<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#B3CF70">
  
  <tr>
    <td width="3%" rowspan="2" bgcolor="#B3CF70"><div align="center">No</div></td>
    <td width="7%" rowspan="2" bgcolor="#CCCC99"><div align="center">Nis </div></td>
    <td width="25%" rowspan="2" bgcolor="#B3CF70"><div align="center">Nama</div></td>
    <td width="11%" rowspan="2" bgcolor="#CCCC99"><div align="center">Kelas </div></td>
    <td height="26" colspan="4" bgcolor="#CCCC99"><div align="center">Beasiswa</div></td>
  </tr>
  <tr>
    <td width="14%" height="26" bgcolor="#B3CF70"><div align="center">Syariah &amp; Komite</div></td>
    <td width="13%" bgcolor="#CCCC99"><div align="center">Semester</div></td>
    <td width="13%" bgcolor="#B3CF70"><div align="center">Buku</div></td>
    <td width="14%" bgcolor="#CCCC99"><div align="center">Bimbel</div></td>
  </tr>
  
    <tr>
      <td colspan="8" height="2"></td>
    </tr>
	<? $no=1;
     $tampil2=mysqli_query($koneksi, "SELECT * FROM tb_santri WHERE kelas_st='$tp[kelas]' AND status='a' ORDER BY id_santri ASC ");
     while($tp=mysqli_fetch_assoc($tampil2)){
  ?>
  <tr>
    <td bgcolor="#DCF3AF"><div align="center"><? echo"$no"; ?></div>    </td>
    <td bgcolor="#DCF3AF"><div align="center"><a href="home.php?home=byr&pmb=7&<? echo"id_k=$tp[id_santri]"; ?>"><? echo"$tp[nis]"; ?></a></div>    </td>
    <td bgcolor="#DCF3AF"><? echo"$tp[nama]"; ?></td>
    <td bgcolor="#DCF3AF"><div align="center"><? echo"$tp[kelas_st]"; ?></div>    </td>
    <td bgcolor="#DCF3AF"><div align="right">
      Rp. <?
	    
	    $qbea1=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa  WHERE kd_santri='$tp[id_santri]' AND kd_bayar='1' AND thn_ajaran='$thaj' AND semester='$sem'");
	    $cby1=mysqli_fetch_assoc($qbea1);
	    $bs=format_agk($cby1['jml_beasiswa']);
		echo  $bs;
	?>
    </div></td>
    <td bgcolor="#DCF3AF"><div align="right">
      Rp. <?
	    
	    $qbea2=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa  WHERE kd_santri='$tp[id_santri]' AND kd_bayar='4' AND thn_ajaran='$thaj' AND semester='$sem'");
	    $cby2=mysqli_fetch_assoc($qbea2);
		$bs=format_agk($cby2['jml_beasiswa']);
		echo  $bs;
	
	?>
    </div></td>
    <td bgcolor="#DCF3AF"><div align="right">
      Rp. <?
	    
	    $qbea3=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa  WHERE kd_santri='$tp[id_santri]' AND kd_bayar='3' AND thn_ajaran='$thaj' AND semester='$sem'");
	    $cby3=mysqli_fetch_assoc($qbea3);
		$bs=format_agk($cby3['jml_beasiswa']);
		echo  $bs;
	
	?>
    </div></td>
    <td bgcolor="#DCF3AF"><div align="right">
      Rp. <?
	    
	    $qbea4=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa  WHERE kd_santri='$tp[id_santri]' AND kd_bayar='6' AND thn_ajaran='$thaj' AND semester='$sem'");
	    $cby4=mysqli_fetch_assoc($qbea4);
		$bs=format_agk($cby4['jml_beasiswa']);
		echo  $bs;
	
	?>
    </div></td>
  </tr>
  <? $no+=1; } ?>
</table>
<? } ?>

</body>
</html>
