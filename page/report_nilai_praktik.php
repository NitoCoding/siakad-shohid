<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
}
.style3 {font-size: 16px}
td {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	text-decoration: none;
}
.style4 {font-size: 12px}
.style5 {
	font-size: 14px;
	font-weight: bold;
}
-->
</style>
</head>
<?
include("../koneksi.php");
 $blnk=$_GET['blnk'];
 $pknk=$_GET['pknk'];
 $klsk=$_GET['klsk'];
 $kdmpl=$_GET['kdmpl'];
 $thaj=$_COOKIE['thaj'];
 $sem=$_COOKIE['sem'];
 
?>
<body>
<table width="1149" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="6" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="7%" valign="top"><img src="../images/LOGO-SHOID2.jpg" width="95" height="108" /></td>
                <td width="1%">&nbsp;</td>
                <td width="92%"><span class="style3">YAYASAN SHOHWATUL IS'AD</span><br />
                    <span class="style1">SMP IT SHOHWATUL IS'AD</span><br />
                    <br />
                    <br />
                    <span class="style4">Alamat:  Jl. Poros Padanglampe&nbsp; KM  . 3&nbsp; Ma&rsquo;rang&nbsp;  Pangkep&nbsp; Sulawesi -Selatan 90645  P.O. Box 300<br />
                      http://www.shohwatulisad.com e-mail : shohwatulisad@gmail.com</span></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td colspan="6"><hr /></td>
      </tr>
      <tr>
        <td colspan="6">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="6"><div align="center" class="style5">REKAP NILAI KETERAMPILAN SANTRI </div></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="7%">Kelas</td>
        <td width="1%">:</td>
        <td width="71%"><? 
		$ntu2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kd_kls='$klsk'");
	    $ctk2=mysqli_fetch_assoc($ntu2);
		echo $ctk2['kelas'];
		 ?></td>
        <td width="4%">&nbsp;</td>
        <td width="1%">&nbsp;</td>
        <td width="16%">&nbsp;</td>
      </tr>
      <tr>
        <td>Tahun Ajaran  </td>
        <td>:</td>
        <td><? echo $thaj; ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Semester</td>
        <td>:</td>
        <td><? echo $sem; ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Mata Pelajaran</td>
        <td>:</td>
        <td><?
		$ntu=mysqli_query($koneksi, "SELECT kd_mp,nama_mp FROM mata_pelajaran WHERE kd_mp='$kdmpl'");
	    $ctk=mysqli_fetch_assoc($ntu);
		echo $ctk['nama_mp'];
		?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>KKM</td>
        <td>:</td>
        <td><?
	    $ntu3=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='$kdmpl'");
	    $ctk3=mysqli_fetch_assoc($ntu3);
		if($ctk2['kelas']=='VIIA' or $ctk2['kelas']=='VIIB' or $ctk2['kelas']=='VIIC' or $ctk2['kelas']=='X')  { $kkmp=$ctk3['kkm']; echo $ctk3['kkm']; }
		if($ctk2['kelas']=='VIIIA' or $ctk2['kelas']=='VIIIB' or $ctk2['kelas']=='VIIIC' or $ctk2['kelas']=='XI')  { $kkmp=$ctk3['kkm2']; echo $ctk3['kkm2']; }
		if($ctk2['kelas']=='IXA' or $ctk2['kelas']=='IXB' or $ctk2['kelas']=='IXC' or $ctk2['kelas']=='XII')  { $kkmp=$ctk3['kkm3']; echo $ctk3['kkm3']; }
		 
		?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td valign="top"><table width="1145" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <td width="25" rowspan="2"><div align="center">NO</div></td>
        <td width="63" rowspan="2"><div align="center">NIS</div></td>
        <td width="262" rowspan="2"><div align="center">NAMA</div></td>
        <td colspan="10"><div align="center">NILAI TUGAS </div></td>
        <td width="35" rowspan="2"><div align="center">UH 1 </div></td>
        <td width="34" rowspan="2"><div align="center">UH 2 </div></td>
        <td width="32" rowspan="2"><div align="center">UH 3</div></td>
        <td width="32" rowspan="2"><div align="center">UH 4 </div></td>
        <td width="32" rowspan="2"><div align="center">UH 5 </div></td>
        <td width="33" rowspan="2"><div align="center">UTS</div></td>
        <td width="44" rowspan="2"><div align="center">RM.UTS</div></td>
        <td width="36" rowspan="2"><div align="center">US</div></td>
        <td width="38" rowspan="2"><div align="center">RM.US</div></td>
        <td width="34" rowspan="2"><div align="center">NR</div></td>
      </tr>
      <tr>
        <td width="35"><div align="center">1</div></td>
        <td width="38"><div align="center">2</div></td>
        <td width="37"><div align="center">3</div></td>
        <td width="38"><div align="center">4</div></td>
        <td width="38"><div align="center">5</div></td>
        <td width="37"><div align="center">6</div></td>
        <td width="37"><div align="center">7</div></td>
        <td width="34"><div align="center">8</div></td>
        <td width="34"><div align="center">9</div></td>
        <td width="37"><div align="center">10</div></td>
      </tr>
      <? $no=1;
		$ntgs=mysqli_query($koneksi, "SELECT nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='$ctk2[kelas]' AND status='a' ORDER BY nama");
	    while($cnt=mysqli_fetch_assoc($ntgs)){
		
	   $nt1=mysqli_query($koneksi, "SELECT * FROM tb_nilai_keterampilan WHERE nis='$cnt[nis]' AND kd_mp='$kdmpl' AND semester='$sem' AND thn_ajaran='$thaj' AND kd_kelas='$klsk'");
	  $ct=mysqli_fetch_assoc($nt1);
		?>
      <tr>
        <td><div align="center"><? echo $no; ?></div></td>
        <td><div align="center"><? echo $cnt['nis']; ?> </div></td>
        <td>&nbsp; <? echo $cnt['nama']; ?></td>
        <td><div align="center"><? echo $ct['nt1'];?></div></td>
        <td><div align="center"><? echo $ct['nt2'];?></div></td>
        <td><div align="center"><? echo $ct['nt3'];?></div></td>
        <td><div align="center"><? echo $ct['nt4'];?></div></td>
        <td><div align="center"><? echo $ct['nt5'];?></div></td>
        <td><div align="center"><? echo $ct['nt6'];?></div></td>
        <td><div align="center"><? echo $ct['nt7'];?></div></td>
        <td><div align="center"><? echo $ct['nt8'];?></div></td>
        <td><div align="center"><? echo $ct['nt9'];?></div></td>
        <td><div align="center"><? echo $ct['nt10'];?></div></td>
        <td><div align="center"><? echo $ct['uh1'];?></div></td>
        <td><div align="center"><? echo $ct['uh2'];?></div></td>
        <td><div align="center"><? echo $ct['uh3'];?></div></td>
        <td><div align="center"><? echo $ct['uh4'];?></div></td>
        <td><div align="center"><? echo $ct['uh5'];?></div></td>
        <td><div align="center"><? echo $ct['uts'];?></div></td>
        <td><div align="center"><? echo $ct['remedi'];?></div></td>
        <td><div align="center"><? echo $ct['us'];?></div></td>
        <td><div align="center"><? echo $ct['remedi_us'];?></div></td>
        <td><div align="center">
          <? 
	if($kkmp > $ct['raport']){ echo "<font color='#FF0000'>$ct[raport]</font>"; }else{ echo $ct['raport']; }
		?>
        </div></td>
      </tr>
      <? $no+=1; } ?>
    </table></td>
  </tr>
</table>

</body>
</html>
