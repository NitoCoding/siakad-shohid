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
.style6 {font-size: 14px}
.style7 {	color: #003333;
	font-weight: bold;
}
.style8 {color: #003333}
-->
</style>
</head>
<?
include("../koneksi.php");
 include("../function.php");
 $klsk=$_GET['klsk'];
 $thaj=$_COOKIE['thaj'];
 $sem=$_COOKIE['sem'];
 $idstr=$_GET['idstr'];
?>
<body>
<table width="692" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td height="95" colspan="6" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td height="95" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td width="11%" height="95" valign="top"><img src="../images/LOGO-SHOID2.jpg" width="82" height="93" /></td>
                <td width="89%" valign="top"><div align="center">
                  <p><span class="style3"><font size="2">YAYASAN 
                    SHOHWATUL IS'AD</font></span><br /> 
                    <span class="style1"><font size="4">SMP 
                      IT SHOHWATUL IS'AD</font></span><br /> 
                      <br /> 
                      <span class="style6">NSS : 202190205004</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="style6">NPSN : 40314482</span><span class="style4"><br />
                      Alamat: Jl. Poros Padanglampe�KM . 3�Ma'rang�Pangkep�Sulawesi -Selatan 90645 P.O. Box 300
                    <br>
                    http://www.shohwatulisad.com e-mail : shohwatulisad@gmail.com </span></p>
                  </div></td>
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
    <td colspan="6"><div align="center" class="style5"><font size="3">LAPORAN HASIL BELAJAR SISWA </font></div></td>
  </tr>
  <tr>
    <td colspan="6"><div align="center"><font size="2">SEMESTER 
      <? if($sem=='I') { echo "GANJIL"; }else{ echo"GENAP"; }?>
    TAHUN AJARAN <? echo $thaj; ?></font></div>    </td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
      <?
	      $tmpkls=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st FROM tb_santri WHERE id_santri='$idstr' ");
          $ct=mysqli_fetch_assoc($tmpkls);
	   ?>
  <tr> 
    <td width="7%">Nis</td>
    <td width="1%">:</td>
    <td width="61%"><? echo $ct['nis']; ?></td>
    <td width="9%">&nbsp;</td>
    <td width="1%">&nbsp;</td>
    <td width="21%">&nbsp;</td>
  </tr>
  <tr> 
    <td>Nama</td>
    <td>:</td>
    <td><? echo $ct['nama']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td>Kelas</td>
    <td>:</td>
    <td><? echo $ct['kelas_st']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr valign="top"> 
    <td colspan="6">&nbsp;</td>
  </tr>
  <tr valign="top"> 
    <td height="38" colspan="6"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
        <tr bgcolor="#CCCCCC"> 
          <td width="4%" rowspan="2"><div align="center">No</div></td>
          <td width="47%" rowspan="2"><div align="center">Mata Pelajaran </div></td>
          <td width="8%" rowspan="2"><div align="center">KKM</div></td>
          <td colspan="2"><div align="center">Nilai</div>            </td>
        </tr>
		
        <tr>
          <td bgcolor="#CCCCCC"><div align="center">Angka</div></td>
          <td bgcolor="#CCCCCC"><div align="center">Huruf</div></td>
        </tr>
		
		<? 
		  /* $mpl=mysqli_query($koneksi, "SELECT kd_mp,nama_mp,ket FROM mata_pelajaran  WHERE ket='MD' ");
          while($cmpl=mysqli_fetch_assoc($mpl)){
	
	      $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='$cmpl[kd_mp]' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi); */
		?>
        <tr>
          <td><div align="center">1.</div></td>
          <td> &nbsp;Pendidikan Agama </td>
          <td><div align="center">
            <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MP006' ");
              $tpk2=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB') { echo $tpk2['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB') { echo $tpk2['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB') { echo $tpk2['kkm3']; }
			   ?>
          </div></td>
          <td><div align="center"><? 
		 	
	      $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP006' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  
		  echo $tpk['raport']; ?></div></td>
          <td><div align="center">
            <? $a=angka_huruf($tpk['raport']); echo $a; ?>
          </div></td>
        </tr>
        <tr>
          <td><div align="center">2.</div></td>
          <td>&nbsp;Pendidikan Kewarganegaraan </td>
          <td><div align="center">
            <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD013' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB') { echo $tpk3['kkm3']; }
			  ?>
          </div></td>
          <td><div align="center">
            <? 
		 	
	      $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD013' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  
		  echo $tpk['raport']; ?>
          </div></td>
          <td><div align="center">
            <? $a=angka_huruf($tpk['raport']); echo $a; ?>
          </div></td>
        </tr>
        <tr>
          <td><div align="center">3.</div></td>
          <td>&nbsp;Bahasa Indonesia </td>
          <td><div align="center">
            <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD003' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB') { echo $tpk3['kkm3']; } 
			  
			  ?>
          </div></td>
          <td><div align="center">
            <? 
		 	
	      $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD003' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  
		  echo $tpk['raport']; ?>
          </div></td>
          <td><div align="center">
            <? $a=angka_huruf($tpk['raport']); echo $a; ?>
          </div></td>
        </tr>
        <tr>
          <td><div align="center">4.</div></td>
          <td>&nbsp;Bahasa Inggris </td>
          <td><div align="center">
            <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD004' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB') { echo $tpk3['kkm3']; } 
			  
			  ?>
          </div></td>
          <td><div align="center">
            <? 
		 	
	      $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD004' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  
		  echo $tpk['raport']; ?>
          </div></td>
          <td><div align="center">
            <? $a=angka_huruf($tpk['raport']); echo $a; ?>
          </div></td>
        </tr>
        <tr>
          <td><div align="center">5.</div></td>
          <td>&nbsp;Matematika</td>
          <td><div align="center">
            <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD005' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB') { echo $tpk3['kkm3']; } 
			  
			  ?>
          </div></td>
          <td><div align="center">
            <? 
		 	
	      $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD005' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  
		  echo $tpk['raport']; ?>
          </div></td>
          <td><div align="center">
            <? $a=angka_huruf($tpk['raport']); echo $a; ?>
          </div></td>
        </tr>
        <tr>
          <td><div align="center">6.</div></td>
          <td>&nbsp;Ilmu Pengetahuan Alam </td>
          <td><div align="center">
            <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD006' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB') { echo $tpk3['kkm3']; } 
			  
			  ?>
          </div></td>
          <td><div align="center">
            <? 
		 	
	      $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD006' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  
		  echo $tpk['raport']; ?>
          </div></td>
          <td><div align="center">
            <? $a=angka_huruf($tpk['raport']); echo $a; ?>
          </div></td>
        </tr>
        <tr>
          <td><div align="center">7.</div></td>
          <td>&nbsp;Ilmu Pengetahuan Sosial </td>
          <td><div align="center">
            <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD007' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB') { echo $tpk3['kkm3']; } 
			  
			  ?>
          </div></td>
          <td><div align="center">
            <? 
		 	
	      $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD007' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  
		  echo $tpk['raport']; ?>
          </div></td>
          <td><div align="center">
            <? $a=angka_huruf($tpk['raport']); echo $a; ?>
          </div></td>
        </tr>
        <tr>
          <td><div align="center">8.</div></td>
          <td>&nbsp;Seni Budaya </td>
          <td><div align="center">
            <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD012' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB') { echo $tpk3['kkm3']; } 
			  
			  ?>
          </div></td>
          <td><div align="center">
            <? 
		 	
	      $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD012' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  
		  echo $tpk['raport']; ?>
          </div></td>
          <td><div align="center">
            <? $a=angka_huruf($tpk['raport']); echo $a; ?>
          </div></td>
        </tr>
        <tr>
          <td><div align="center">9.</div></td>
          <td>&nbsp;Pendidikan Jasmani, Olahraga, dan Kesehatan </td>
          <td><div align="center">
            <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD009' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB') { echo $tpk3['kkm3']; } 
			  
			  ?>
          </div></td>
          <td><div align="center">
            <? 
		 	
	      $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD009' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  
		  echo $tpk['raport']; ?>
          </div></td>
          <td><div align="center">
            <? $a=angka_huruf($tpk['raport']); echo $a; ?>
          </div></td>
        </tr>
        <tr>
          <td rowspan="2"><div align="center">10.</div></td>
          <td rowspan="2">&nbsp;Pilihan : **) <br />
            &nbsp;a. Keterampilan
		  <br />
		  &nbsp;b. Teknologi Informasi dan Komunikasi </td>
          <td height="25"><div align="center"></div></td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
        </tr>
        <tr>
          <td><div align="center">
            <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD010' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB') { echo $tpk3['kkm3']; } 
			  
			  ?>
          </div></td>
          <td><div align="center">
            <? 
		 	
	      $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD010' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  
		  echo $tpk['raport']; ?>
          </div></td>
          <td><div align="center">
            <? $a=angka_huruf($tpk['raport']); echo $a; ?>
          </div></td>
        </tr>
        <tr>
          <td><div align="center">11.</div></td>
          <td>&nbsp;Mulok **)&nbsp;<br /> &nbsp;a. Kewirausahaan dan Agrobisnis <br /> 
          &nbsp;b. .................................................. </td>
          <td><div align="center">
            <? 
			  $tampi2=mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE kd_mp='MD011' ");
              $tpk3=mysqli_fetch_assoc($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB') { echo $tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB') { echo $tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB') { echo $tpk3['kkm3']; } 
			  
			  ?>
          </div></td>
          <td><div align="center">
            <? 
		 	
	      $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD011' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  
		  echo $tpk['raport']; ?>
          </div></td>
          <td><div align="center">
            <? $a=angka_huruf($tpk['raport']); echo $a; ?>
          </div></td>
        </tr>
        <tr>
          <td rowspan="2"><div align="center"></div> 
          <div align="center"></div></td>
          <td>&nbsp;Jumlah Nilai </td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
        </tr>
        <tr> 
          <td><span class="style8">&nbsp;Peringkat</span><span class="style7">&nbsp;</span> : </td>
          <td><div align="center"><? 
			  
			  $tmp=mysqli_query($koneksi, "SELECT * FROM tb_rangking WHERE nis='$ct[nis]' and thn_plj='$thaj' and sem_plj='$sem' and kls_r='$ct[kelas_st]' ");
            $ct2=mysqli_fetch_assoc($tmp); // rangking
			echo $ct2['rangking'];
 ?> </div>          </td>
          <td width="9%"><div align="center"> &nbsp;</div></td>
          <td width="32%"> <div align="center"></div></td>
        </tr>
		
      </table></td>
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
    <td colspan="6"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td width="28%"><div align="center">Kegiatan</div></td>
        <td width="23%"><div align="center">Jenis</div></td>
        <td width="8%"><div align="center">Nilai</div></td>
        <td width="41%"><div align="center">Keterangan</div></td>
      </tr>
      <tr>
        <td rowspan="3"><div align="center">Pengembangan Diri </div></td>
        <td>&nbsp;1. Pramuka </td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;2. Khithabah</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td> &nbsp;3. Speech </td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
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
    <td colspan="6"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="48%"><table width="100%" border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td colspan="3" bgcolor="#CCCCCC"><div align="center">Akhlak dan Keperibadian </div></td>
              </tr>
              <tr>
                <td width="27%"> &nbsp;Akhlak </td>
                <td width="3%">:</td>
                <td width="70%">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;Keperibadian</td>
                <td>:</td>
                <td>&nbsp;</td>
              </tr>
            </table></td>
          </tr>
        </table></td>
        <td width="4%">&nbsp;</td>
        <td width="48%"><table width="100%" border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td colspan="3" bgcolor="#CCCCCC"><div align="center">Ketidak hadiran </div></td>
                </tr>
                <tr>
                  <td width="31%">&nbsp;Sakit</td>
                  <td width="3%">:</td>
                  <td width="66%">&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;Izin</td>
                  <td>:</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;Tanpa Keterangan </td>
                  <td>:</td>
                  <td>&nbsp;</td>
                </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
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
    <td colspan="6"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="24%"><div align="center">
          <p>Mengetahui : <br />
            Orang Tua Wali</p>
          <p>&nbsp;</p>
          <p><br />
          </p>
          <p>______________________</p>
        </div></td>
        <td width="1%">&nbsp;</td>
        <td width="23%"><div align="center">
          <p><br />
            Wali Kelas </p>
          <p><br />
          </p>
          <p>&nbsp;</p>
          <p>______________________</p>
        </div></td>
        <td width="4%">&nbsp;</td>
        <td width="48%" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
          <tr>
            <td valign="top"><p>&nbsp;Keputusan :<br />
              &nbsp;berdasarkan hasil yang dicapai pada semester 1 dan 2 maka<br />
              &nbsp;peserta didik ditetapkan<br />
              &nbsp;naik ke kelas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;............(....................)<br />
              &nbsp;Tinggal di Kelas ............(....................)<br />
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;................, ...............20...<br />
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kepala SMP IT Shohwatul Is'ad </p>
              <p>&nbsp;</p>
              <p align="center">_______________________________</p></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</body>
</html>
