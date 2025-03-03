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
 $klsk2=$_GET['klsk2'];
 $kdmpl=$_GET['kdmpl']; 
 $thaj=$_COOKIE['thaj'];
 $sem=$_COOKIE['sem'];
 $idgurp=$_COOKIE['idgurp'];
 $mapel=$_GET['mapel']; 
?>
<body>
<table width="1328" border="0" cellspacing="0" cellpadding="0">
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
        <td colspan="6"><div align="center" class="style5">REKAP SIKAP SOSIAL PESERTA DIDIK SMP IT SHOHWATUL IS'AD  </div></td>
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
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="10%">KELAS</td>
        <td width="1%">&nbsp;</td>
        <td width="54%"><? 
		
		echo $klsk2;
		 ?></td>
        <td width="4%">&nbsp;</td>
        <td width="11%">&nbsp;</td>
        <td width="20%">: </td>
      </tr>
      <tr>
        <td>Mata Pelajaran </td>
        <td>:</td>
        <td><?
		$ntu=mysqli_query($koneksi, "SELECT kd_mp,nama_mp FROM mata_pelajaran WHERE kd_mp='$mapel'");
	    $ctk=mysqli_fetch_assoc($ntu);
		echo $ctk['nama_mp'];
		?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>SEMSTER</td>
        <td>&nbsp;</td>
        <td><? echo $sem; ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>: </td>
      </tr>
      <tr>
        <td>TAHUN PELAJARAN </td>
        <td>:</td>
        <td><? echo $thaj; ?></td>
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
    <td valign="top"><table width="100%" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <td width="2%" rowspan="2"><div align="center">NO</div></td>
        <td width="17%" rowspan="2"><div align="center">NAMA</div></td>
        <td colspan="7"><div align="center">REKAP SIKAP SOSIAL PESERTA DIDIK  </div></td>
        <td width="36%" rowspan="2"><div align="center">DESKERIPSI SIKAP SOSIAL </div></td>
      </tr>
      <tr>
        <td width="6%"><div align="center">Jujur </div></td>
        <td width="6%"><div align="center">Disiplin</div></td>
        <td width="6%"><div align="center">Tanggung Jawab  </div></td>
        <td width="6%"><div align="center">Toleransi</div></td>
        <td width="6%"><div align="center">Gotong Royong </div></td>
        <td width="6%"><div align="center">Santun</div></td>
        <td width="6%"><div align="center">Percaya Diri </div></td>
        </tr>
      
		 <? $no=1; 
		$ntgs=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='$klsk2' AND status='a' ORDER BY nama");
	    while($cnt=mysqli_fetch_assoc($ntgs)){
		
	  	 $qku7=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ki2 WHERE  tahun_ajaran='$thaj' and semester='$sem' and id_santri='$cnt[id_santri]' and mapel='$mapel'");
         $cqk7=mysqli_fetch_assoc($qku7);
		?>
      <tr>
        <td><div align="center"><? echo $no; ?></div></td>
        <td>  <? echo $cnt['nama']; ?></td>
        <td><div align="center"><? echo $cqk7['s1'];  ?></div></td>
        <td><div align="center"><? echo $cqk7['s2'];  ?></div></td>
        <td><div align="center"><? echo $cqk7['s3'];  ?></div></td>
        <td><div align="center"><? echo $cqk7['s4'];  ?></div></td>
        <td><div align="center"><? echo $cqk7['s5'];  ?></div></td>
        <td><div align="center"><? echo $cqk7['s6'];  ?></div></td>
        <td><div align="center"><? echo $cqk7['s7'];  ?></div></td>
        <td><div align="justify">
          <?
		if($cqk7['s1'] or $cqk7['s2'] or $cqk7['s3'] or $cqk7['s4'] or $cqk7['s5'] or $cqk7['s6'] or $cqk7['s7']) {echo "Ananda $cnt[nama] "; }
		if($cqk7['s1']==4) { echo "Sangat baik dalam sikap jujur, "; }
		if($cqk7['s2']==4) { echo "Sangat baik dalam sikap disiplin, "; }
		if($cqk7['s3']==4) { echo "Sangat baik dalam sikap tanggung jawab, "; }
		if($cqk7['s4']==4) { echo "Sangat baik dalam sikap toleransi, "; }
		if($cqk7['s5']==4) { echo "Sangat baik dalam sikap gotong royong, "; }
		if($cqk7['s6']==4) { echo "Sangat baik dalam sikap santun, "; }
		if($cqk7['s7']==4) { echo "Sangat baik dalam sikap percaya diri, "; }
		
		if($cqk7['s1']==3) { echo "baik dalam sikap jujur, "; }
		if($cqk7['s2']==3) { echo "baik dalam sikap disiplin, "; }
		if($cqk7['s3']==3) { echo "baik dalam sikap tanggung jawab, "; }
		if($cqk7['s4']==3) { echo "baik dalam sikap toleransi, "; }
		if($cqk7['s5']==3) { echo "baik dalam sikap gotong royong, "; }
		if($cqk7['s6']==3) { echo "baik dalam sikap santun, "; }
		if($cqk7['s7']==3) { echo "baik dalam sikap percaya diri, "; }
		
		if($cqk7['s1']==2) { echo "mulai berkembang dalam sikap jujur, "; }
		if($cqk7['s2']==2) { echo "mulai berkembang dalam sikap disiplin, "; }
		if($cqk7['s3']==2) { echo "mulai berkembang dalam sikap tanggung jawab, "; }
		if($cqk7['s4']==2) { echo "mulai berkembang dalam sikap toleransi, "; }
		if($cqk7['s5']==2) { echo "mulai berkembang dalam sikap gotong royong, "; }
		if($cqk7['s6']==2) { echo "mulai berkembang dalam sikap santun, "; }
		if($cqk7['s7']==2) { echo "mulai berkembang dalam sikap percaya diri, "; }
		
		if($cqk7['s1']==1) { echo "tidak berkembang dalam sikap jujur, "; }
		if($cqk7['s2']==1) { echo "tidak berkembang dalam sikap disiplin, "; }
		if($cqk7['s3']==1) { echo "tidak berkembang dalam sikap tanggung jawab, "; }
		if($cqk7['s4']==1) { echo "tidak berkembang dalam sikap toleransi, "; }
		if($cqk7['s5']==1) { echo "tidak berkembang dalam sikap gotong royong, "; }
		if($cqk7['s6']==1) { echo "tidak berkembang dalam sikap santun, "; }
		if($cqk7['s7']==1) { echo "tidak berkembang dalam sikap percaya diri, "; }
		
		?>
        </div></td>
      </tr>
	  <? $no+=1; } ?>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
  </tr>
</table>

</body>
</html>
