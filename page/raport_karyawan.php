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
.style6 {
	font-size: 12px;
	font-style: italic;
}
.style7 {font-size: 36px}
.style8 {font-size: 18px; }
-->
</style>
</head>
<? include("../koneksi.php"); 
   $idgp=$_GET['idgp'];
	      $thaj=$_COOKIE['thaj'];
          $qbln=$_GET['qbln']; 
		  $stat=$_GET['stat'];
		  
	      $tampi3=mysqli_query($koneksi, "SELECT * FROM guru_pegawai WHERE id_gp='$idgp' ");
          $tp3=mysqli_fetch_assoc($tampi3);
?>
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
  <td height="16" valign="top"><span class="style5">PENILAIAN KINERJA PEMBINA ASRAMA PPMI SHOHWATUL IS'AD </span></td>
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
          <td width="81%">:  Oktober s/d Desember 2019</td>
        </tr>
      </table></td>
    </tr>
  </table></td>
</tr>
<tr>
  <td colspan="2">&nbsp;</td>
</tr>
<tr>
  <td colspan="2"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
    <tr>
      <td colspan="4" bordercolor="#FFFFFF" bgcolor="#CCCCCC"><strong>&nbsp;&nbsp;A. IDENTITAS PEGAWAI </strong></td>
      </tr>
    <tr>
      <td width="19%" bordercolor="#FFFFFF">&nbsp;Nama Lengkap </td>
      <td width="43%" bordercolor="#FFFFFF">&nbsp;<? echo $tp3['nama_gp']; ?></td>
      <td width="14%" bordercolor="#FFFFFF">&nbsp;</td>
      <td width="24%" bordercolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td bordercolor="#FFFFFF">&nbsp;NIY</td>
      <td bordercolor="#FFFFFF">&nbsp;<? echo $tp3['nip']; ?></td>
      <td bordercolor="#FFFFFF">&nbsp;</td>
      <td bordercolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td bordercolor="#FFFFFF">&nbsp;Jabatan</td>
      <td bordercolor="#FFFFFF">&nbsp;<? echo $tp3['ket_jabatan']; ?></td>
      <td bordercolor="#FFFFFF">&nbsp;TMT Pegawai </td>
      <td bordercolor="#FFFFFF">&nbsp;<? echo $tp3['thn_trdaftar']; ?></td>
    </tr>
    <tr>
      <td bordercolor="#FFFFFF">&nbsp;Pendidikan</td>
      <td bordercolor="#FFFFFF">&nbsp;<? echo $tp3['pendidikan']; ?></td>
      <td bordercolor="#FFFFFF">&nbsp;Masa Kerja </td>
      <td bordercolor="#FFFFFF">&nbsp;<? $tmt=date(Y)-$tp3['thn_trdaftar'];
		      echo $tmt; ?>
Tahun </td>
    </tr>
    <tr>
      <td bordercolor="#FFFFFF">&nbsp;Tempat, Tgl. lahir </td>
      <td bordercolor="#FFFFFF">&nbsp;<? echo $tp3['tempat_ttl'].",".$tp3['tgl_ttl']." ".$tp3['bln_ttl']." ".$tp3['thn_ttl']; ?></td>
      <td bordercolor="#FFFFFF">&nbsp;</td>
      <td bordercolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4" bordercolor="#FFFFFF">&nbsp;</td>
      </tr>
  </table></td>
  </tr>
<tr>
  <td height="225" colspan="2" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
    
    <tr>
      <td colspan="3" bordercolor="#CCCCCC" bgcolor="#CCCCCC">&nbsp; &nbsp; <strong>B. Hasil Penilaian </strong></td>
    </tr>
    <?
		  $tampi4=mysqli_query($koneksi, "SELECT * FROM tb_kp_aspek_teknis WHERE id_pg='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
          $tp4=mysqli_fetch_assoc($tampi4);
		?>
    <tr>
      <td colspan="3" bordercolor="#FFFFFF">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kompetensi Yang Dinilai </td>
      </tr>
    <tr>
      <td height="40" colspan="2" bordercolor="#CCCCCC"><div align="center">Aspek Teknis Pekerjaan</div></td>
      <td width="73" bordercolor="#CCCCCC"><div align="center">
        <? 
	  $tamp2=mysqli_query($koneksi, "SELECT * FROM rekap_nilai_pegawai WHERE id_guru='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
      $kp2=mysqli_fetch_assoc($tamp2);
	  $hn1=$kp2['asp_teknis'];
	  echo $kp2['asp_teknis'];
	   ?>
      </div></td>
    </tr>
    
    <?
		  $tampi5=mysqli_query($koneksi, "SELECT * FROM tb_kp_aspek_non WHERE id_pg='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
          $tp5=mysqli_fetch_assoc($tampi5);
		?>
    
    <tr>
      <td height="37" colspan="2" bordercolor="#999999"><div align="center"> Aspek  non Teknis</div></td>
      <td bordercolor="#999999"><div align="center">
        <? 
	  $tamp2=mysqli_query($koneksi, "SELECT * FROM rekap_nilai_pegawai WHERE id_guru='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
      $kp2=mysqli_fetch_assoc($tamp2);
	  $hn2=$kp2['asp_non_teknis'];
	  echo $kp2['asp_non_teknis'];
	   ?>
      </div></td>
    </tr>
    
    <?
		  $tampi6=mysqli_query($koneksi, "SELECT * FROM tb_kp_kepribadian WHERE id_pg='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
          $tp6=mysqli_fetch_assoc($tampi6);
		?>
    
    <tr>
      <td height="37" colspan="2" bordercolor="#CCCCCC"><div align="center">Aspek Kepribadian</div></td>
      <td bordercolor="#CCCCCC"><div align="center">
        <? 
	  $tamp2=mysqli_query($koneksi, "SELECT * FROM rekap_nilai_pegawai WHERE id_guru='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
      $kp2=mysqli_fetch_assoc($tamp2);
	  $hn3=$kp2['asp_kepribadian'];
	  echo $kp2['asp_kepribadian'];
	   ?>
      </div></td>
    </tr>
    
    <?
		 $tampi7=mysqli_query($koneksi, "SELECT * FROM tb_kp_kepemimpinan WHERE id_pg='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
          $tp7=mysqli_fetch_assoc($tampi7);
		?>
    
    <tr>
      <td height="1" colspan="3" bordercolor="#FFFFFF" bgcolor="#000000"></td>
      </tr>
    <tr>
      <td height="26" bordercolor="#FFFFFF">&nbsp;</td>
      <td bordercolor="#FFFFFF"><div align="right"><span class="style8">Jumlah (<em>hasil penilaian kinerja Pegawai </em>)&nbsp;&nbsp;</span></div></td>
      <td bordercolor="#FFFFFF"><div align="center">
        <? $tot_n=round(($hn1+$hn2+$hn3)/3); 
	  echo $tot_n; 
	  
	  if($idgp!=""){
   $tamp=mysqli_query($koneksi, "SELECT * FROM tb_peringkat_p WHERE id_gp='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
   $kp=mysqli_num_rows($tamp);
   if($kp==0){
 
              $rek=mysqli_query($koneksi, "INSERT INTO tb_peringkat_p VALUES('','$idgp','$thaj','$qbln','$tot_n','k')");
             }else{
			  mysqli_query($koneksi, "UPDATE tb_peringkat_p SET tot_nilai='$tot_n' WHERE id_gp='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
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
      <td height="13" colspan="3" bordercolor="#FFFFFF"></td>
      </tr>
    <tr>
      <td width="190" height="26" bordercolor="#FFFFFF">&nbsp;</td>
      <td width="737" bordercolor="#FFFFFF"><div align="right"><span class="style8">Hasil Penilaian Kinerja Anda &nbsp;&nbsp;</span></div></td>
      <td bordercolor="#FFFFFF"><div align="center"><b><? echo" $nak "; ?></b></div></td>
    </tr>
    
  </table></td>
  </tr>

<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td width="927"><div align="right"></div></td>
  <td width="73">&nbsp;</td>
</tr>
<tr>
  <td height="19" colspan="2">&nbsp;</td>
</tr>
<tr>
  <td height="19" colspan="2" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
    <tr>
      <td width="34%" height="146" valign="top"><p align="center">Kepala Asrama Putri,</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p align="center">(<u>Muthoharoh, Lc.,M.Pd.I.</u>) <br />
NIY. 201506 1 2 029 </p></td>
      <td width="30%" valign="top"><p align="center">&nbsp;Wali Asrama Putri,</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p align="center"><u>( <? echo $tp3['nama_gp']; ?> )</u><br />
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
