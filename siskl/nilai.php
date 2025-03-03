<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #003333;
	font-weight: bold;
}
body {
	margin-top: 0px;
	margin-bottom: 0px;
}
.style7 {font-size: 12px}
-->
</style>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="100%" colspan="3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
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
    <td height="119" colspan="3" valign="top" bgcolor="#B7CE86"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#B7CE86">
      <tr>
        <td height="28" colspan="20" bordercolor="#CCCCCC" bgcolor="#C6DE8D"><div align="center" class="style1">Nilai Santri Untuk Mata Pelajaran DIKNAS </div></td>
      </tr>
      <tr>
        <td colspan="11" bordercolor="#CCCCCC" bgcolor="#99CC33"><div align="center">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="40%" bgcolor="#99CC66">&nbsp;</td>
                <td width="60%"><div align="center">Nilai Tugas </div></td>
              </tr>
            </table>
        </div></td>
        <td colspan="5" bordercolor="#CCCCCC" bgcolor="#99CC66"><div align="center">Nilai Ulangan Harian </div></td>
        <td width="6%" rowspan="2" bordercolor="#CCCCCC" bgcolor="#99CC33"><div align="center">Nilai<br />
          Harian</div></td>
        <td width="9%" rowspan="2" bordercolor="#CCCCCC" bgcolor="#99CC66"><div align="center">Ujian<br />
          Tengah <br />
          Semester </div></td>
        <td width="8%" rowspan="2" bordercolor="#CCCCCC" bgcolor="#99CC33"><div align="center">Ujian<br />
          Semester</div></td>
        <td width="6%" rowspan="2" bordercolor="#CCCCCC" bgcolor="#99CC66"><div align="center">Nilai<br />
          Raport</div></td>
      </tr>
      <tr>
        <td width="21%" bordercolor="#B7CE86" bgcolor="#99CC66"><div align="center">Mata Pelajaran </div></td>
        <td width="3%" height="21" bordercolor="#B7CE86" bgcolor="#99CC33"><div align="center">1</div></td>
        <td width="3%" bordercolor="#B7CE86" bgcolor="#99CC33"><div align="center">2</div></td>
        <td width="3%" bordercolor="#B7CE86" bgcolor="#99CC33"><div align="center">3</div></td>
        <td width="3%" bordercolor="#B7CE86" bgcolor="#99CC33"><div align="center">4</div></td>
        <td width="3%" bordercolor="#B7CE86" bgcolor="#99CC33"><div align="center">5</div></td>
        <td width="3%" bordercolor="#B7CE86" bgcolor="#99CC33"><div align="center">6</div></td>
        <td width="3%" bordercolor="#B7CE86" bgcolor="#99CC33"><div align="center">7</div></td>
        <td width="3%" bordercolor="#B7CE86" bgcolor="#99CC33"><div align="center">8</div></td>
        <td width="3%" bordercolor="#B7CE86" bgcolor="#99CC33"><div align="center">9</div></td>
        <td width="4%" bordercolor="#B7CE86" bgcolor="#99CC33"><div align="center">10</div></td>
        <td width="3%" bordercolor="#B7CE86" bgcolor="#99CC66"><div align="center">1</div></td>
        <td width="3%" bordercolor="#B7CE86" bgcolor="#99CC66"><div align="center">2</div></td>
        <td width="3%" bordercolor="#B7CE86" bgcolor="#99CC66"><div align="center">3</div></td>
        <td width="3%" bordercolor="#B7CE86" bgcolor="#99CC66"><div align="center">4</div></td>
        <td width="3%" bordercolor="#B7CE86" bgcolor="#99CC66"><div align="center">5</div></td>
      </tr>
      <?
	 $mpl=mysqli_query($koneksi, "SELECT kd_mp,nama_mp,ket FROM mata_pelajaran  WHERE ket='MD' ");
     while($cmpl=mysqli_fetch_assoc($mpl)){
	
	  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$niss' and kd_mp='$cmpl[kd_mp]' and thn_ajaran='$thn_ajaran' and semester='$semester' ");
          $tpk=mysqli_fetch_assoc($tampi);
	  ?>
      <tr>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><span class="style1"><? echo $cmpl['nama_mp']; ?></span></td>
        <td height="30" bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['nt1']; ?></div></td>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['nt2']; ?></div></td>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['nt3']; ?></div></td>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['nt4']; ?></div></td>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['nt5']; ?></div></td>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['nt6']; ?></div></td>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['nt7']; ?></div></td>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['nt8']; ?></div></td>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['nt9']; ?></div></td>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['nt10']; ?></div></td>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['uh1']; ?></div></td>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['uh2']; ?></div></td>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['uh3']; ?></div></td>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['uh4']; ?></div></td>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['uh5']; ?></div></td>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['nh']; ?></div></td>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['uts']; ?></div></td>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['us']; ?></div></td>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['raport']; ?></div></td>
        <? } ?>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="19" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td height="119" colspan="3" valign="top" bgcolor="#B7CE86"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#B7CE86">
      <tr>
        <td height="28" colspan="20" bordercolor="#CCCCCC" bgcolor="#C6DE8D"><div align="center" class="style1">Nilai Santri Untuk Mata Pelajaran Kepondokan </div></td>
      </tr>
      <tr>
        <td colspan="11" bordercolor="#CCCCCC" bgcolor="#99CC33"><div align="center">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="40%" bgcolor="#99CC66">&nbsp;</td>
                <td width="60%"><div align="center">Nilai Tugas </div></td>
              </tr>
            </table>
        </div></td>
        <td colspan="5" bordercolor="#CCCCCC" bgcolor="#99CC66"><div align="center">Nilai Ulangan Harian </div></td>
        <td width="6%" rowspan="2" bordercolor="#CCCCCC" bgcolor="#99CC33"><div align="center">Nilai<br />
          Harian</div></td>
        <td width="9%" rowspan="2" bordercolor="#CCCCCC" bgcolor="#99CC66"><div align="center">Ujian<br />
          Tengah <br />
          Semester </div></td>
        <td width="8%" rowspan="2" bordercolor="#CCCCCC" bgcolor="#99CC33"><div align="center">Ujian<br />
          Semester</div></td>
        <td width="6%" rowspan="2" bordercolor="#CCCCCC" bgcolor="#99CC66"><div align="center">Nilai<br />
          Raport</div></td>
      </tr>
      <tr>
        <td width="21%" bordercolor="#B7CE86" bgcolor="#99CC66"><div align="center">Mata Pelajaran </div></td>
        <td width="3%" height="21" bordercolor="#B7CE86" bgcolor="#99CC33"><div align="center">1</div></td>
        <td width="3%" bordercolor="#B7CE86" bgcolor="#99CC33"><div align="center">2</div></td>
        <td width="3%" bordercolor="#B7CE86" bgcolor="#99CC33"><div align="center">3</div></td>
        <td width="3%" bordercolor="#B7CE86" bgcolor="#99CC33"><div align="center">4</div></td>
        <td width="3%" bordercolor="#B7CE86" bgcolor="#99CC33"><div align="center">5</div></td>
        <td width="3%" bordercolor="#B7CE86" bgcolor="#99CC33"><div align="center">6</div></td>
        <td width="3%" bordercolor="#B7CE86" bgcolor="#99CC33"><div align="center">7</div></td>
        <td width="3%" bordercolor="#B7CE86" bgcolor="#99CC33"><div align="center">8</div></td>
        <td width="3%" bordercolor="#B7CE86" bgcolor="#99CC33"><div align="center">9</div></td>
        <td width="4%" bordercolor="#B7CE86" bgcolor="#99CC33"><div align="center">10</div></td>
        <td width="3%" bordercolor="#B7CE86" bgcolor="#99CC66"><div align="center">1</div></td>
        <td width="3%" bordercolor="#B7CE86" bgcolor="#99CC66"><div align="center">2</div></td>
        <td width="3%" bordercolor="#B7CE86" bgcolor="#99CC66"><div align="center">3</div></td>
        <td width="3%" bordercolor="#B7CE86" bgcolor="#99CC66"><div align="center">4</div></td>
        <td width="3%" bordercolor="#B7CE86" bgcolor="#99CC66"><div align="center">5</div></td>
      </tr>
      <?
	 $mpl=mysqli_query($koneksi, "SELECT kd_mp,nama_mp,ket FROM mata_pelajaran  WHERE ket='MP' ");
     while($cmpl=mysqli_fetch_assoc($mpl)){
	
	  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$niss' and kd_mp='$cmpl[kd_mp]' and thn_ajaran='$thn_ajaran' and semester='$semester' ");
          $tpk=mysqli_fetch_assoc($tampi);
	  ?>
      <tr>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><span class="style1"><? echo $cmpl['nama_mp']; ?></span></td>
        <td height="30" bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['nt1']; ?></div></td>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['nt2']; ?></div></td>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['nt3']; ?></div></td>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['nt4']; ?></div></td>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['nt5']; ?></div></td>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['nt6']; ?></div></td>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['nt7']; ?></div></td>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['nt8']; ?></div></td>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['nt9']; ?></div></td>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['nt10']; ?></div></td>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['uh1']; ?></div></td>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['uh2']; ?></div></td>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['uh3']; ?></div></td>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['uh4']; ?></div></td>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['uh5']; ?></div></td>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['nh']; ?></div></td>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['uts']; ?></div></td>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['us']; ?></div></td>
        <td bordercolor="#B7CE86" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['raport']; ?></div></td>
        <? } ?>
      </tr>
    </table></td>
  </tr>
</table>

</body>
</html>
