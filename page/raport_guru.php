<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<style type="text/css">
<!--
.style5 {font-size: 14px}
.style7 {font-size: 36px}
.style8 {font-size: 18px; }
.style9 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
</head>
<? include("../koneksi.php"); ?>
<body>
<table width="1000" border="0" cellpadding="0" cellspacing="0">

<tr>
  <td colspan="2"><table width="100%" border="1" cellpadding="0" cellspacing="0">
  <tr>
  <td height="92"><table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
  <td width="9%" rowspan="2" align="center"><img src="../images/logo2.jpg" width="70" height="83" /></td>
  <td width="91%" height="45" valign="bottom"><span class="style7">REKAP HASIL </span></td>
  </tr>
  <tr>
  <td height="16" valign="top"><span class="style5">PENILAIAN KINERJA GURU PPMI SHOHWATUL IS'AD </span></td>
  </tr>
  </table></td>
  </tr>
  </table></td>
  </tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td colspan="2"><table width="100%" border="1" cellpadding="0" cellspacing="0">
    <tr>
      <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="19%" height="25">&nbsp;Waktu Penilaian </td>
          <td width="81%">: Februari s/d April 2019</td>
        </tr>
      </table></td>
    </tr>
  </table></td>
</tr>
<tr>
  <td colspan="2">&nbsp;</td>
</tr>
<?
          $idgp=$_GET['idgp'];
	      $thaj=$_COOKIE['thaj'];
          $qbln=$_GET['qbln']; 
		  
	      $tampi3=mysqli_query($koneksi, "SELECT * FROM guru_pegawai WHERE id_gp='$idgp' ");
          $tp3=mysqli_fetch_assoc($tampi3);
	  ?>
<tr>
  <td colspan="2"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
    <tr>
      <td height="33" colspan="4" bordercolor="#FFFFFF" bgcolor="#CCCCCC"><strong>&nbsp;&nbsp;<span class="style8">A. IDENTITAS GURU</span></strong></td>
      </tr>
    <tr>
      <td width="19%" height="33" bordercolor="#FFFFFF">&nbsp;Nama Lengkap </td>
      <td width="43%" bordercolor="#FFFFFF">&nbsp;<? echo $tp3['nama_gp']; ?></td>
      <td width="14%" bordercolor="#FFFFFF">&nbsp;</td>
      <td width="24%" bordercolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td height="30" bordercolor="#FFFFFF">&nbsp;NIY</td>
      <td bordercolor="#FFFFFF">&nbsp;<? echo $tp3['nip']; ?></td>
      <td bordercolor="#FFFFFF">&nbsp;</td>
      <td bordercolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td height="30" bordercolor="#FFFFFF">&nbsp;Jabatan</td>
      <td bordercolor="#FFFFFF">&nbsp;<? echo $tp3['ket_jabatan']; ?></td>
      <td bordercolor="#FFFFFF">&nbsp;TMT Guru </td>
      <td bordercolor="#FFFFFF">&nbsp;<? echo $tp3['thn_trdaftar']; ?></td>
    </tr>
    <tr>
      <td height="30" bordercolor="#FFFFFF">&nbsp;Pendidikan</td>
      <td bordercolor="#FFFFFF">&nbsp;<? echo $tp3['pendidikan']; ?></td>
      <td bordercolor="#FFFFFF">&nbsp;Masa Kerja </td>
      <td bordercolor="#FFFFFF">&nbsp;<? $tmt=date(Y)-$tp3['thn_trdaftar'];
		      echo $tmt; ?>
&nbsp;Tahun </td>
    </tr>
    <tr>
      <td height="30" bordercolor="#FFFFFF">&nbsp;Tempat, Tgl. lahir </td>
      <td bordercolor="#FFFFFF">&nbsp;<? echo $tp3['tempat_ttl'].",".$tp3['tgl_ttl']." ".$tp3['bln_ttl']." ".$tp3['thn_ttl']; ?></td>
      <td bordercolor="#FFFFFF">&nbsp;</td>
      <td bordercolor="#FFFFFF">&nbsp;</td>
    </tr>
    
  </table></td>
  </tr>
<tr>
  <td height="310" colspan="2" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
    
    <tr>
      <td height="31" colspan="2" bordercolor="#CCCCCC" bgcolor="#CCCCCC">&nbsp; &nbsp; <span class="style9">B. Hasil Penilaian </span></td>
    </tr>
    <?
		  $tampi4=mysqli_query($koneksi, "SELECT * FROM tb_kp_pedagogik WHERE id_guru='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
          $tp4=mysqli_fetch_assoc($tampi4);
		?>
    
    <tr>
      <td width="755" height="39" bordercolor="#CCCCCC"><div align="center" class="style8">Pedagogik</div></td>
      <td width="239" bordercolor="#CCCCCC"><div align="center"><? 
	  $tamp2=mysqli_query($koneksi, "SELECT * FROM rekap_nilai_guru WHERE id_guru='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
      $kp2=mysqli_fetch_assoc($tamp2);
	  $hn1=$kp2['pedagogik'];
	  echo $kp2['pedagogik'];
	   ?></div></td>
    </tr>
    
    <tr>
      <td height="38" bordercolor="#999999"><div align="center" class="style8">Keperibadian</div></td>
      <td bordercolor="#999999"><div align="center">
        <? 
	  $hn2=$kp2['kepribadian'];
	  echo $kp2['kepribadian'];
	  ?>
      </div></td>
    </tr>
    <?
		  
		?>
    
    <tr>
      <td height="38" bordercolor="#CCCCCC"><div align="center" class="style8">Sosial</div></td>
      <td bordercolor="#CCCCCC"><div align="center"><? 
	  $hn3=$kp2['sosial'];
	  echo $kp2['sosial'];
	  ?></div></td>
    </tr>
    <?
		 
		?>
    
    <tr>
      <td height="39" bordercolor="#CCCCCC"><div align="center" class="style8">Profesional</div></td>
      <td bordercolor="#CCCCCC"><div align="center"><? 
	   $hn4=$kp2['profesional'];
	   echo $kp2['profesional'];
	   ?></div></td>
    </tr>
    
	  <?
		 
		?>
    <tr>
      <td height="38" bordercolor="#CCCCCC"><div align="center" class="style8">Administratif</div></td>
      <td bordercolor="#CCCCCC"><div align="center">
        <?
		$hn5=$kp2['administrasi']; 
	   echo $kp2['administrasi'];
	   ?>
      </div></td>
    </tr>
    
    <tr>
      <td height="1" colspan="2" bordercolor="#FFFFFF" bgcolor="#000000"><span class="style8"></span></td>
      </tr>
    <tr>
      <td height="37" bordercolor="#FFFFFF"><div align="right" class="style8">Jumlah (<em>hasil penilaian kinerja guru</em>)&nbsp;&nbsp;</div></td>
      <td bordercolor="#FFFFFF"><div align="center">
        <? $tot_n=round(($hn1+$hn2+$hn3+$hn4+$hn5)/5); 
	  echo $tot_n; 
	  
	  if($idgp!=""){
   $tamp=mysqli_query($koneksi, "SELECT * FROM tb_peringkat WHERE id_gp='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
   $kp=mysqli_num_rows($tamp);
   if($kp==0){
 
              $rek=mysqli_query($koneksi, "INSERT INTO tb_peringkat VALUES('','$idgp','$thaj','$qbln','$tot_n','g')");
             }else{
			  mysqli_query($koneksi, "UPDATE tb_peringkat SET tot_nilai='$tot_n' WHERE id_gp='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
			 }
   }
	  
	  if($tot_n>=85 and $tot_n<=100){ $nak="A"; }
	  if($tot_n>=79 and $tot_n<=84){ $nak="B"; }
	  if($tot_n>=60 and $tot_n<=78){ $nak="C"; }
	  if($tot_n>=45 and $tot_n<=59){ $nak="D"; }
	  ?>
      </div></td>
    </tr>
    <tr>
      <td height="38" bordercolor="#FFFFFF"><div align="right" class="style8">Hasil Penilaian Kinerja Anda &nbsp;&nbsp;</div></td>
      <td bordercolor="#FFFFFF"><div align="center"><b><? echo" $nak "; ?></b></div></td>
    </tr>
    
  </table></td>
  </tr>

<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td width="927"><div align="right">Pangkep, 29 April 2019 </div></td>
  <td width="73">&nbsp;</td>
</tr>
<tr>
  <td height="19" colspan="2">&nbsp;</td>
</tr>
<tr>
  <td height="156" colspan="2" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
    <tr>
      <td width="34%" height="146" valign="top"><p align="center">&nbsp;Kepala Sekolah SMA IT Shohwatul Is'ad,</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p align="center"><u>(Kamaruddin, S.Pd, M.P.Mat.) </u><br />
        NIY. 201701 1 2 065</p></td>
      <td width="30%" valign="top"><p align="center">Guru yang dinilai,</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p align="center">(<u><? echo $tp3['nama_gp']; ?></u>)<br />
          NIY. <? echo $tp3['nip']; ?></p></td>
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
