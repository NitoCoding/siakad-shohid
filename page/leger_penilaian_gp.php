<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<? //include("../koneksi.php"); ?>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  
  
  <tr>
    <td>&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25">REKAPAN PENILAIN PEGAWAI STRUKTURAL PONDOK PPMI SHOHWATUL IS'AD  </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="39" valign="top">PERIODE BULAN FEBRUARI s/d APRIL 2018 </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25" valign="top"><table width="1066" border="1" cellpadding="0" cellspacing="0" bordercolor="#333333">
      <tr>
        <td width="3%" height="25" bgcolor="#CCCCCC"><div align="center">NO</div></td>
        <td width="28%" bgcolor="#CCCCCC"><div align="center">NAMA PEGAWAI </div></td>
        <td width="21%" bgcolor="#CCCCCC"><div align="center">JABATAN</div></td>
        <td width="8%" bgcolor="#CCCCCC"><div align="center">Aspek Teknis Pekerjaan</div></td>
        <td width="7%" bgcolor="#CCCCCC"><div align="center">Aspek  non Teknis</div></td>
        <td width="8%" bgcolor="#CCCCCC"><div align="center">Aspek Kepribadian</div></td>
        <td width="9%" bgcolor="#CCCCCC"><div align="center">Aspek Kepemimpinan</div></td>
        <td width="7%" bgcolor="#CCCCCC"><div align="center">TOTAL POINT </div></td>
        <td width="9%" bgcolor="#CCCCCC"><div align="center">PERINGKAT</div></td>
      </tr>
      <?
	      
		  $b=1;
	     $tampil2=mysqli_query($koneksi, "SELECT * FROM tb_peringkat_p WHERE thn_ajaran='$thaj' and bulan='4' ORDER BY tot_nilai DESC ");
          while($tp=mysqli_fetch_assoc($tampil2)){
		  
		   $tampil3=mysqli_query($koneksi, "SELECT * FROM guru_pegawai WHERE id_gp='$tp[id_gp]' and status_kp='p' and unit='STR'");
           $tp2=mysqli_fetch_assoc($tampil3);
		   
		   $tampil4=mysqli_query($koneksi, "SELECT * FROM rekap_nilai_pegawai WHERE id_guru='$tp[id_gp]' and thn_ajaran='$thaj' and  bulan='4' ");
           $tp3=mysqli_fetch_assoc($tampil4);
		   
		   if($tp2['nama_gp']!=""){
	  ?>
      <tr>
        <td height="25"><div align="center"><? echo $b; ?></div></td>
        <td><? echo $tp2['nama_gp']; ?></td>
        <td><div align="center"><? echo $tp2['ket_jabatan']; ?></div></td>
        <td><div align="center"><? echo $tp3['asp_teknis']; ?></div></td>
        <td><div align="center"><? echo $tp3['asp_non_teknis']; ?></div></td>
        <td><div align="center"><? echo $tp3['asp_kepribadian']; ?></div></td>
        <td><div align="center"><? echo $tp3['asp_kepemimpinan']; ?></div></td>
        <td><div align="center"><? echo $tp['tot_nilai']; ?></div></td>
        <td><div align="center">
            <? if($b==1){ echo"Pertama";} if($b==2){ echo"Kedua";} if($b==3){ echo"Ketiga";} ?>
        </div></td>
      </tr>
      <? $b+=1; } } ?>
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25">REKAPAN PENILAIN GURU SMP PPMI SHOHWATUL IS'AD </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25">PERIODE BULAN FEBRUARI s/d APRIL 2018 </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25"><table width="1203" border="1" cellpadding="0" cellspacing="0" bordercolor="#333333">
      <tr>
        <td width="2%" height="25" bgcolor="#CCCCCC"><div align="center">NO</div></td>
        <td width="26%" bgcolor="#CCCCCC"><div align="center">NAMA GURU </div></td>
        <td width="17%" bgcolor="#CCCCCC"><div align="center">JABATAN</div></td>
        <td width="9%" bgcolor="#CCCCCC"><div align="center">Pedagogik</div></td>
        <td width="8%" bgcolor="#CCCCCC"><div align="center">Keperibadian</div></td>
        <td width="8%" bgcolor="#CCCCCC"><div align="center">Sosial</div></td>
        <td width="8%" bgcolor="#CCCCCC"><div align="center">Profesional</div></td>
        <td width="7%" bgcolor="#CCCCCC"><div align="center">Administratif</div></td>
        <td width="7%" bgcolor="#CCCCCC"><div align="center">TOTAL POINT </div></td>
        <td width="8%" bgcolor="#CCCCCC"><div align="center">PERINGKAT</div></td>
      </tr>
      <?  
	      $idgp=$_GET['idgp'];
	      $thaj=$_COOKIE['thaj'];
          $qbln=$_COOKIE['qbln']; 
		  $b=1;
	      $tampil2=mysqli_query($koneksi, "SELECT * FROM tb_peringkat WHERE thn_ajaran='$thaj' and bulan='12' ORDER BY tot_nilai DESC ");
          while($tp=mysqli_fetch_assoc($tampil2)){
		  
		   $tampil3=mysqli_query($koneksi, "SELECT * FROM guru_pegawai WHERE id_gp='$tp[id_gp]' and (status_kp='g' or status_kp='k' or status_kp='p')  ");
           $tp2=mysqli_fetch_assoc($tampil3);
		   
		    $tampil4=mysqli_query($koneksi, "SELECT * FROM rekap_nilai_guru WHERE id_guru='$tp[id_gp]' and thn_ajaran='$thaj' and  bulan='12' ");
            $tp3=mysqli_fetch_assoc($tampil4);
		   
		    if($tp2['nama_gp']!=""){
	  ?>
      <tr>
        <td height="25"><div align="center"><? echo $b; ?></div></td>
        <td><? echo $tp2['nama_gp']; ?></td>
        <td><div align="center"><? echo $tp2['ket_jabatan']; ?></div></td>
        <td><div align="center"><? echo $tp3['pedagogik']; ?></div></td>
        <td><div align="center"><? echo $tp3['kepribadian']; ?></div></td>
        <td><div align="center"><? echo $tp3['sosial']; ?></div></td>
        <td><div align="center"><? echo $tp3['profesional']; ?></div></td>
        <td><div align="center"><? echo $tp3['administrasi']; ?></div></td>
        <td><div align="center"><? echo $tp['tot_nilai']; ?></div></td>
        <td><div align="center">
          <? if($b==1){ echo"Pertama";} if($b==2){ echo"Kedua";} if($b==3){ echo"Ketiga";} ?>
        </div></td>
      </tr>
      <? $b+=1; } } ?>
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25">REKAPAN PENILAIN PEGAWAI STRUKTUR SMP PPMI SHOHWATUL IS'AD </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25">PERIODE BULAN FEBRUARI s/d APRIL 2018 </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25"><table width="1066" border="1" cellpadding="0" cellspacing="0" bordercolor="#333333">
      <tr>
        <td width="3%" height="25" bgcolor="#CCCCCC"><div align="center">NO</div></td>
        <td width="28%" bgcolor="#CCCCCC"><div align="center">NAMA PEGAWAI </div></td>
        <td width="21%" bgcolor="#CCCCCC"><div align="center">JABATAN</div></td>
        <td width="8%" bgcolor="#CCCCCC"><div align="center">Aspek Teknis Pekerjaan</div></td>
        <td width="7%" bgcolor="#CCCCCC"><div align="center">Aspek  non Teknis</div></td>
        <td width="8%" bgcolor="#CCCCCC"><div align="center">Aspek Kepribadian</div></td>
        <td width="7%" bgcolor="#CCCCCC"><div align="center">TOTAL POINT </div></td>
        <td width="9%" bgcolor="#CCCCCC"><div align="center">PERINGKAT</div></td>
      </tr>
      <?
	      
		  $b=1;
	     $tampil2=mysqli_query($koneksi, "SELECT * FROM tb_peringkat_p WHERE thn_ajaran='$thaj' and bulan='10' ORDER BY tot_nilai DESC ");
          while($tp=mysqli_fetch_assoc($tampil2)){
		  
		   $tampil3=mysqli_query($koneksi, "SELECT * FROM guru_pegawai WHERE id_gp='$tp[id_gp]' and status_kp='k' and unit='SMP' ");
           $tp2=mysqli_fetch_assoc($tampil3);
		   
		   $tampil4=mysqli_query($koneksi, "SELECT * FROM rekap_nilai_pegawai WHERE id_guru='$tp2[id_gp]' and thn_ajaran='$thaj' and  bulan='10' ");
           $tp3=mysqli_fetch_assoc($tampil4);
		   
		   if($tp2['nama_gp']!=""){
	  ?>
      <tr>
        <td height="25"><div align="center"><? echo $b; ?></div></td>
        <td><? echo $tp2['nama_gp']; ?></td>
        <td><div align="center"><? echo $tp2['ket_jabatan']; ?></div></td>
        <td><div align="center"><? echo $tp3['asp_teknis']; ?></div></td>
        <td><div align="center"><? echo $tp3['asp_non_teknis']; ?></div></td>
        <td><div align="center"><? echo $tp3['asp_kepribadian']; ?></div></td>
        <td><div align="center"><? echo $tp['tot_nilai']; ?></div></td>
        <td><div align="center">
            <? if($b==1){ echo"Pertama";} if($b==2){ echo"Kedua";} if($b==3){ echo"Ketiga";} ?>
        </div></td>
      </tr>
      <? $b+=1; } } ?>
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25">REKAPAN PENILAIN GURU SMA PPMI SHOHWATUL IS'AD </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25">PERIODE BULAN FEBRUARI s/d APRIL 2018 </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25"><table width="1203" border="1" cellpadding="0" cellspacing="0" bordercolor="#333333">
      <tr>
        <td width="2%" height="25" bgcolor="#CCCCCC"><div align="center">NO</div></td>
        <td width="26%" bgcolor="#CCCCCC"><div align="center">NAMA GURU </div></td>
        <td width="17%" bgcolor="#CCCCCC"><div align="center">JABATAN</div></td>
        <td width="9%" bgcolor="#CCCCCC"><div align="center">Pedagogik</div></td>
        <td width="8%" bgcolor="#CCCCCC"><div align="center">Keperibadian</div></td>
        <td width="8%" bgcolor="#CCCCCC"><div align="center">Sosial</div></td>
        <td width="8%" bgcolor="#CCCCCC"><div align="center">Profesional</div></td>
        <td width="7%" bgcolor="#CCCCCC"><div align="center">Administratif</div></td>
        <td width="7%" bgcolor="#CCCCCC"><div align="center">TOTAL POINT </div></td>
        <td width="8%" bgcolor="#CCCCCC"><div align="center">PERINGKAT</div></td>
      </tr>
      <?  
	      $idgp=$_GET['idgp'];
	      $thaj=$_COOKIE['thaj'];
          $qbln=$_COOKIE['qbln']; 
		  $b=1;
	      $tampil2=mysqli_query($koneksi, "SELECT * FROM tb_peringkat WHERE thn_ajaran='$thaj' and bulan='4' ORDER BY tot_nilai DESC ");
          while($tp=mysqli_fetch_assoc($tampil2)){
		  
		   $tampil3=mysqli_query($koneksi, "SELECT * FROM guru_pegawai WHERE id_gp='$tp[id_gp]' and (unit='SMA' or unit='STR' or unit='KSP') and  (status_kp='g' or status_kp='p' or status_kp='k')  ");
           $tp2=mysqli_fetch_assoc($tampil3);
		   
		    $tampil4=mysqli_query($koneksi, "SELECT * FROM rekap_nilai_guru WHERE id_guru='$tp[id_gp]' and thn_ajaran='$thaj' and  bulan='4' ");
            $tp3=mysqli_fetch_assoc($tampil4);
		   
		    if($tp2['nama_gp']!=""){
	  ?>
      <tr>
        <td height="25"><div align="center"><? echo $b; ?></div></td>
        <td><? echo $tp2['nama_gp']; ?></td>
        <td><div align="center"><? echo $tp2['ket_jabatan']; ?></div></td>
        <td><div align="center"><? echo $tp3['pedagogik']; ?></div></td>
        <td><div align="center"><? echo $tp3['kepribadian']; ?></div></td>
        <td><div align="center"><? echo $tp3['sosial']; ?></div></td>
        <td><div align="center"><? echo $tp3['profesional']; ?></div></td>
        <td><div align="center"><? echo $tp3['administrasi']; ?></div></td>
        <td><div align="center"><? echo $tp['tot_nilai']; ?></div></td>
        <td><div align="center">
            <? if($b==1){ echo"Pertama";} if($b==2){ echo"Kedua";} if($b==3){ echo"Ketiga";} ?>
        </div></td>
      </tr>
      <? $b+=1; } } ?>
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25">REKAPAN PENILAIN PEGAWAI STRUKTUR SMA PPMI SHOHWATUL IS'AD </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25">PERIODE BULAN FEBRUARI s/d APRIL 2018 </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25"><table width="1066" border="1" cellpadding="0" cellspacing="0" bordercolor="#333333">
      <tr>
        <td width="3%" height="25" bgcolor="#CCCCCC"><div align="center">NO</div></td>
        <td width="28%" bgcolor="#CCCCCC"><div align="center">NAMA PEGAWAI </div></td>
        <td width="21%" bgcolor="#CCCCCC"><div align="center">JABATAN</div></td>
        <td width="8%" bgcolor="#CCCCCC"><div align="center">Aspek Teknis Pekerjaan</div></td>
        <td width="7%" bgcolor="#CCCCCC"><div align="center">Aspek  non Teknis</div></td>
        <td width="8%" bgcolor="#CCCCCC"><div align="center">Aspek Kepribadian</div></td>
        <td width="7%" bgcolor="#CCCCCC"><div align="center">TOTAL POINT </div></td>
        <td width="9%" bgcolor="#CCCCCC"><div align="center">PERINGKAT</div></td>
      </tr>
      <?
	      
		  $b=1;
	     $tampil2=mysqli_query($koneksi, "SELECT * FROM tb_peringkat_p WHERE thn_ajaran='$thaj' and bulan='10' ORDER BY tot_nilai DESC ");
          while($tp=mysqli_fetch_assoc($tampil2)){
		  
		   $tampil3=mysqli_query($koneksi, "SELECT * FROM guru_pegawai WHERE id_gp='$tp[id_gp]' and status_kp='k' and unit='SMA' ");
           $tp2=mysqli_fetch_assoc($tampil3);
		   
		   $tampil4=mysqli_query($koneksi, "SELECT * FROM rekap_nilai_pegawai WHERE id_guru='$tp2[id_gp]' and thn_ajaran='$thaj' and  bulan='10' ");
           $tp3=mysqli_fetch_assoc($tampil4);
		   
		   if($tp2['nama_gp']!=""){
	  ?>
      <tr>
        <td height="25"><div align="center"><? echo $b; ?></div></td>
        <td><? echo $tp2['nama_gp']; ?></td>
        <td><div align="center"><? echo $tp2['ket_jabatan']; ?></div></td>
        <td><div align="center"><? echo $tp3['asp_teknis']; ?></div></td>
        <td><div align="center"><? echo $tp3['asp_non_teknis']; ?></div></td>
        <td><div align="center"><? echo $tp3['asp_kepribadian']; ?></div></td>
        <td><div align="center"><? echo $tp['tot_nilai']; ?></div></td>
        <td><div align="center">
            <? if($b==1){ echo"Pertama";} if($b==2){ echo"Kedua";} if($b==3){ echo"Ketiga";} ?>
        </div></td>
      </tr>
      <? $b+=1; } } ?>
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25">REKAPAN PENILAIN WALI ASRAMA PUTRA PPMI SHOHWATUL IS'AD </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25">PERIODE BULAN FEBRUARI s/d APRIL 2018 </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25"><table width="1066" border="1" cellpadding="0" cellspacing="0" bordercolor="#333333">
      <tr>
        <td width="3%" height="25" bgcolor="#CCCCCC"><div align="center">NO</div></td>
        <td width="28%" bgcolor="#CCCCCC"><div align="center">NAMA PEGAWAI </div></td>
        <td width="21%" bgcolor="#CCCCCC"><div align="center">JABATAN</div></td>
        <td width="8%" bgcolor="#CCCCCC"><div align="center">Aspek Teknis Pekerjaan</div></td>
        <td width="7%" bgcolor="#CCCCCC"><div align="center">Aspek  non Teknis</div></td>
        <td width="8%" bgcolor="#CCCCCC"><div align="center">Aspek Kepribadian</div></td>
        <td width="7%" bgcolor="#CCCCCC"><div align="center">TOTAL POINT </div></td>
        <td width="9%" bgcolor="#CCCCCC"><div align="center">PERINGKAT</div></td>
      </tr>
      <?
	      
		  $b=1;
	     $tampil2=mysqli_query($koneksi, "SELECT * FROM tb_peringkat_p WHERE thn_ajaran='$thaj' and bulan='12' ORDER BY tot_nilai DESC ");
          while($tp=mysqli_fetch_assoc($tampil2)){
		  
		   $tampil3=mysqli_query($koneksi, "SELECT * FROM guru_pegawai WHERE id_gp='$tp[id_gp]' and unit='KSI' ");
           $tp2=mysqli_fetch_assoc($tampil3);
		   
		   $tampil4=mysqli_query($koneksi, "SELECT * FROM rekap_nilai_pegawai WHERE id_guru='$tp2[id_gp]' and thn_ajaran='$thaj' and  bulan='12' ");
           $tp3=mysqli_fetch_assoc($tampil4);
		   
		   if($tp2['nama_gp']!=""){
	  ?>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><? echo $b; ?></div></td>
        <td bgcolor="#FFFFFF"><? echo $tp2['nama_gp']; ?></td>
        <td bgcolor="#FFFFFF"><div align="center"><? echo $tp2['ket_jabatan']; ?></div></td>
        <td bgcolor="#FFFFFF"><div align="center"><? echo $tp3['asp_teknis']; ?></div></td>
        <td bgcolor="#FFFFFF"><div align="center"><? echo $tp3['asp_non_teknis']; ?></div></td>
        <td bgcolor="#FFFFFF"><div align="center"><? echo $tp3['asp_kepribadian']; ?></div></td>
        <td bgcolor="#FFFFFF"><div align="center"><? echo $tp['tot_nilai']; ?></div></td>
        <td bgcolor="#FFFFFF"><div align="center">
            <? if($b==1){ echo"Pertama";} if($b==2){ echo"Kedua";} if($b==3){ echo"Ketiga";} ?>
        </div></td>
      </tr>
      <? $b+=1; } } ?>
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25">REKAPAN PENILAIN WALI ASRAMA PUTRI PPMI SHOHWATUL IS'AD </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25">PERIODE BULAN FEBRUARI s/d APRIL 2018 </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25"><table width="1066" border="1" cellpadding="0" cellspacing="0" bordercolor="#333333">
      <tr>
        <td width="3%" height="25" bgcolor="#CCCCCC"><div align="center">NO</div></td>
        <td width="28%" bgcolor="#CCCCCC"><div align="center">NAMA PEGAWAI </div></td>
        <td width="21%" bgcolor="#CCCCCC"><div align="center">JABATAN</div></td>
        <td width="8%" bgcolor="#CCCCCC"><div align="center">Aspek Teknis Pekerjaan</div></td>
        <td width="7%" bgcolor="#CCCCCC"><div align="center">Aspek  non Teknis</div></td>
        <td width="8%" bgcolor="#CCCCCC"><div align="center">Aspek Kepribadian</div></td>
        <td width="7%" bgcolor="#CCCCCC"><div align="center">TOTAL POINT </div></td>
        <td width="9%" bgcolor="#CCCCCC"><div align="center">PERINGKAT</div></td>
      </tr>
      <?
	      
		  $b=1;
	     $tampil2=mysqli_query($koneksi, "SELECT * FROM tb_peringkat_p WHERE thn_ajaran='$thaj' and bulan='12' ORDER BY tot_nilai DESC ");
          while($tp=mysqli_fetch_assoc($tampil2)){
		  
		   $tampil3=mysqli_query($koneksi, "SELECT * FROM guru_pegawai WHERE id_gp='$tp[id_gp]' and unit='KDI' ");
           $tp2=mysqli_fetch_assoc($tampil3);
		   
		   $tampil4=mysqli_query($koneksi, "SELECT * FROM rekap_nilai_pegawai WHERE id_guru='$tp2[id_gp]' and thn_ajaran='$thaj' and  bulan='12' ");
           $tp3=mysqli_fetch_assoc($tampil4);
		   
		   if($tp2['nama_gp']!=""){
	  ?>
      <tr>
        <td height="25"><div align="center"><? echo $b; ?></div></td>
        <td><? echo $tp2['nama_gp']; ?></td>
        <td><div align="center"><? echo $tp2['ket_jabatan']; ?></div></td>
        <td><div align="center"><? echo $tp3['asp_teknis']; ?></div></td>
        <td><div align="center"><? echo $tp3['asp_non_teknis']; ?></div></td>
        <td><div align="center"><? echo $tp3['asp_kepribadian']; ?></div></td>
        <td><div align="center"><? echo $tp['tot_nilai']; ?></div></td>
        <td><div align="center">
            <? if($b==1){ echo"Pertama";} if($b==2){ echo"Kedua";} if($b==3){ echo"Ketiga";} ?>
        </div></td>
      </tr>
      <? $b+=1; } } ?>
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="40"><table width="1634" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td width="36" bgcolor="#999999"><div align="center"><strong>NO</strong></div></td>
        <td width="321" bgcolor="#999999"><div align="center"><strong>NAMA</strong></div></td>
        <td width="265" bgcolor="#999999"><div align="center"><strong>JABATAN</strong></div></td>
        <td width="93" bgcolor="#999999"><div align="center">AKH</div></td>
        <td width="89" bgcolor="#999999"><div align="center">KEDIS</div></td>
        <td width="117" bgcolor="#999999"><div align="center">P.MATERI</div></td>
        <td width="115" bgcolor="#999999"><div align="center">PG.MATERI</div></td>
        <td width="79" bgcolor="#999999"><div align="center">PTI</div></td>
        <td width="116" bgcolor="#999999"><div align="center">KOMUNIKAI</div></td>
        <td width="102" bgcolor="#999999"><div align="center">PATUH</div></td>
        <td width="79" bgcolor="#999999">K.WAKTU</td>
        <td width="111" bgcolor="#999999">ADMINISTRASI</td>
        <td width="83" bgcolor="#999999"><div align="center">REKAP</div></td>
      </tr>
	  <?
	  $rek=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_bulanan_guru WHERE thn_ajaran='$thaj' and  bulan='12' ");
      while($tre=mysqli_fetch_assoc($rek))
	  {
	     $tampil3=mysqli_query($koneksi, "SELECT * FROM guru_pegawai WHERE id_gp='$tre[id_guru]' and unit='SMA' ");
         $tp2=mysqli_fetch_assoc($tampil3);
		 if($tp2){
	  ?>
      <tr>
        <td bgcolor="#FFFFFF">&nbsp;</td>
        <td bgcolor="#FFFFFF"><? echo $tp2['nama_gp']; ?></td>
        <td bgcolor="#FFFFFF"><? echo $tp2['ket_jabatan']; ?></td>
        <td bgcolor="#FFFFFF"><div align="center">
          <? if($tre['akhlak']=='4') {echo"A" ; } if($tre['akhlak']=='3') {echo "B"; } if($tre['akhlak']=='2') {echo "C"; } if($tre['akhlak']=='1') {echo "D"; } $hn1=$tre['akhlak'];  ?>
        </div></td>
        <td bgcolor="#FFFFFF"><div align="center"><? $hn2=$tre['kedisiplinan']; if($tre['kedisiplinan']=='4') {echo"A" ; } if($tre['kedisiplinan']=='3') {echo "B"; } if($tre['kedisiplinan']=='2') {echo "C"; } if($tre['kedisiplinan']=='1') {echo "D"; }  ?></div></td>
        <td bgcolor="#FFFFFF"><div align="center"><? $hn3=$tre['penguasaan_materi']; if($tre['penguasaan_materi']=='4') {echo"A" ; } if($tre['penguasaan_materi']=='3') {echo "B"; } if($tre['penguasaan_materi']=='2') {echo "C"; } if($tre['penguasaan_materi']=='1') {echo "D"; } ?></div></td>
        <td bgcolor="#FFFFFF"><div align="center"><? $hn4=$tre['pengembangan_materi']; if($tre['pengembangan_materi']=='4') {echo"A" ; } if($tre['pengembangan_materi']=='3') {echo "B"; } if($tre['pengembangan_materi']=='2') {echo "C"; } if($tre['pengembangan_materi']=='1') {echo "D"; }  ?></div></td>
        <td bgcolor="#FFFFFF"><div align="center"><? $hn5=$tre['pemamfaatan_teknologi']; if($tre['pemamfaatan_teknologi']=='4') {echo"A" ; } if($tre['pemamfaatan_teknologi']=='3') {echo "B"; } if($tre['pemamfaatan_teknologi']=='2') {echo "C"; } if($tre['pemamfaatan_teknologi']=='1') {echo "D"; } ?></div></td>
        <td bgcolor="#FFFFFF"><div align="center"><? $hn6=$tre['komunikasi']; if($tre['komunikasi']=='4') {echo"A" ; } if($tre['komunikasi']=='3') {echo "B"; } if($tre['komunikasi']=='2') {echo "C"; } if($tre['komunikasi']=='1') {echo "D"; } ?></div></td>
        <td bgcolor="#FFFFFF"><div align="center"><? $hn7=$tre['kepatuhan']; if($tre['kepatuhan']=='4') {echo"A" ; } if($tre['kepatuhan']=='3') {echo "B"; } if($tre['kepatuhan']=='2') {echo "C"; } if($tre['kepatuhan']=='1') {echo "D"; } ?></div></td>
        <td bgcolor="#FFFFFF"><div align="center"><? $hn8=$tre['tepat_waktu']; if($tre['tepat_waktu']=='4') {echo"A" ; } if($tre['tepat_waktu']=='3') {echo "B"; } if($tre['tepat_waktu']=='2') {echo "C"; } if($tre['tepat_waktu']=='1') {echo "D"; }  ?></div></td>
        <td bgcolor="#FFFFFF"><div align="center"><? $hn9=$tre['administrasi']; if($tre['administrasi']=='4') {echo"A" ; } if($tre['administrasi']=='3') {echo "B"; } if($tre['administrasi']=='2') {echo "C"; } if($tre['administrasi']=='1') {echo "D"; }  ?></div></td>
        <td bgcolor="#FFFFFF"><div align="center"><b>
          <? 
	  $tot_n=round(($hn1+$hn2+$hn3+$hn4+$hn5+$hn6+$hn7+$hn8+$hn9)/9); 
	  $tot_n2=round(($hn1+$hn2+$hn3+$hn4+$hn5+$hn6+$hn7+$hn8+$hn9));
	
	  
	  if($tot_n==4){ $nak="A"; }
	  if($tot_n==3){ $nak="B"; }
	  if($tot_n==2){ $nak="C"; }
	  if($tot_n==1){ $nak="D"; }
	  echo "$tot_n2"." $nak "; ?>
        </b></div></td>
      </tr>
	  <?
	}  }
	  ?>
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
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="3%">&nbsp;</td>
    <td width="93%" height="25">&nbsp;</td>
    <td width="4%">&nbsp;</td>
  </tr>
</table>
</body>
</html>
