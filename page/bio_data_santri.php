<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style4 {font-size: 26px; font-weight: bold; }
.style5 {
	font-size: 18px;
	font-weight: bold;
}
.style7 {font-size: 18px; }
.style8 {
	font-size: 24px;
	font-weight: bold;
}
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
<table width="800" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="center"><img src="../images/logo2.jpg" width="118" height="139" /></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
   <?
   $tmpkls=mysqli_query($koneksi, "SELECT * FROM tb_santri WHERE id_santri='$idstr' ");
   $ct=mysqli_fetch_assoc($tmpkls);
  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID' or $ct['kelas_st']=='VIIIA'
      or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='VIIID' or $ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='IXD' ){
	    $gbr="../images/kop.jpg";
		$kets="PERTAMA";
		$kets1="SMP IT Shohwatul Is'ad";
		$ket1="Kepala SMP-IT Shohwatul Is�ad";
		
		$tampil=mysqli_query($koneksi, "SELECT * FROM tb_ttd WHERE ket='b' AND semester='$sem' ");
        $tp=mysqli_fetch_assoc($tampil);
		$tgl=$tp['tgl_biodata'];
		$ket2=$tp['nama_kepek'];
		$niy=$tp['niy'];
		
		$npsn="40314482";
		$nss="202190205004";
	  }else{ $gbr="../images/kop_sma.jpg"; 
	    $kets="ATAS";
		$kets1="SMA IT Shohwatul Is'ad";
		
		$tampil=mysqli_query($koneksi, "SELECT * FROM tb_ttd WHERE ket='a' AND semester='$sem' ");
        $tp=mysqli_fetch_assoc($tampil);
		
		$ket1="Kepala SMA-IT Shohwatul Is�ad";
		$tgl=$tp['tgl_biodata'];
		$ket2=$tp['nama_kepek'];
		$niy=$tp['niy'];
		
		$npsn="69728583";
		$nss="302190208001";
	  }
  ?>
  <tr>
    <td colspan="3"><div align="center" class="style4">LAPORAN</div></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center" class="style4">PENILAIAN HASIL BELAJAR</div></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center" class="style4">SEKOLAH MENENGAH <? echo $kets; ?></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="13%">&nbsp;</td>
        <td width="18%">&nbsp;</td>
        <td width="3%">&nbsp;</td>
        <td width="66%">&nbsp;</td>
      </tr>
      <tr>
        <td height="32">&nbsp;</td>
        <td><span class="style5">Nama Sekolah</span></td>
        <td><span class="style5">:</span></td>
        <td><span class="style5"><? echo $kets1; ?></span></td>
      </tr>
      <tr>
        <td height="32">&nbsp;</td>
        <td><span class="style5">NPSN</span></td>
        <td><span class="style5">:</span></td>
        <td><span class="style5"><? echo "$npsn"; ?></span></td>
      </tr>
      <tr>
        <td height="33">&nbsp;</td>
        <td><span class="style5">NSS</span></td>
        <td><span class="style5">:</span></td>
        <td><span class="style5"><? echo "$nss"; ?></span></td>
      </tr>
      <tr>
        <td height="33">&nbsp;</td>
        <td><span class="style5">Alamat</span></td>
        <td><span class="style5">:</span></td>
        <td><span class="style5">Jl. Poros Padanglampe Km.3 Ma&rsquo;rang Pangkep  Sulawesi Selatan</span></td>
      </tr>
      <tr>
        <td height="32">&nbsp;</td>
        <td><span class="style5">Kelurahan </span></td>
        <td><span class="style5">:</span></td>
        <td><span class="style5">Ma&rsquo;rang</span></td>
      </tr>
      <tr>
        <td height="34">&nbsp;</td>
        <td><span class="style5">Kecamatan</span></td>
        <td><span class="style5">:</span></td>
        <td><span class="style5">Ma&rsquo;rang</span></td>
      </tr>
      <tr>
        <td height="33">&nbsp;</td>
        <td><span class="style5">Kabupaten</span></td>
        <td><span class="style5">:</span></td>
        <td><span class="style5">Pangkaje&rsquo;ne dan Kepulauan</span></td>
      </tr>
      <tr>
        <td height="33">&nbsp;</td>
        <td><span class="style5">Provinsi</span></td>
        <td><span class="style5">:</span></td>
        <td><span class="style5">Sulawesi Selatan</span></td>
      </tr>
      <tr>
        <td height="33">&nbsp;</td>
        <td><span class="style5">Kode Pos</span></td>
        <td><span class="style5">:</span></td>
        <td><span class="style5">90654</span></td>
      </tr>
      <tr>
        <td height="34">&nbsp;</td>
        <td><span class="style5">Website</span></td>
        <td><span class="style5">:</span></td>
        <td><a href="http://www.shohwatulisad.sch.id" class="style5">http://www.shohwatulisad.sch.id</a></td>
      </tr>
      <tr>
        <td height="33">&nbsp;</td>
        <td><span class="style5">Email</span></td>
        <td><span class="style5">:</span></td>
        <td><a href="mailto:info@shohwatulisad.sch.id" class="style5">info@shohwatulisad.sch.id</a></td>
      </tr>
      <tr>
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
	    </tr>
	  <tr>
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
	    </tr>
	  <tr>
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
	    </tr>
	  <tr>
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
	    </tr>
	  
	  
	  
	  <tr>
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
	    </tr>
	  <tr>
	    <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="51" colspan="3"><div align="center">
      <table width="100%" height="125" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="13%">&nbsp;</td>
          <td width="73%" background="../images/nama_s.jpg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="12%">&nbsp;</td>
              <td width="21%">&nbsp;</td>
              <td width="67%">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><strong>NAMA SISWA</strong></td>
              <td>: <? echo $ct['nama']; ?></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><strong>NIS / NISN </strong></td>
              <td>: <? echo $ct['nis']; ?> / <? echo $ct['nis_nasional']; ?></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table></td>
          <td width="14%">&nbsp;</td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="center" class="style4">YAYASAN SHOHWATUL IS&rsquo;AD</div></td>
  </tr>
  <tr>
    <td colspan="3" valign="top"><div align="center">
      <p align="center" class="style4">PANGKEP</p>
    </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><table width="96%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="4%">&nbsp;</td>
        <td width="96%"><div align="center" class="style4">PETUNJUK PENGGUNAAN</div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td valign="top"><div align="center" class="style7">1.</div></td>
        <td><span class="style7">Buku Laporan Hasil  Belajar ini dipergunakan selama siswa mengikuti pelajaran di Sekolah Menengah  Pertama Islam Terpadu Shohwatul Is&rsquo;ad</span></td>
      </tr>
      <tr>
        <td valign="top">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td valign="top"><div align="center" class="style7">2.</div></td>
        <td><span class="style7">Apabila peserta didik pindah sekolah, Buku Laporan  Hasil Belajar ini dibawa oleh peserta didik yang bersangkutan untuk  dipergunakan sebagai bukti pencapaian kompetensi</span></td>
      </tr>
      <tr>
        <td valign="top">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td valign="top"><div align="center" class="style7">3.</div></td>
        <td><span class="style7">Apabila Buku Laporan Hasil Belajar peserta didik  yang bersangkutan hilang, dapat diganti dengan Buku Laporan Hasil Belajar  Pengganti dan diisi dengan nilai &ndash; nilai yang dikutip dari Buku Induk Sekolah  asal peserta didik dan disahkan oleh Kepala Sekolah yang bersangkutan</span></td>
      </tr>
      <tr>
        <td valign="top">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td valign="top"><div align="center" class="style7">4.</div></td>
        <td><span class="style7">Buku Laporan Hasil Belajar peserta didik ini  harus dilengkapi dengan pas foto ukuran 3 x 4 cm, dan pengisiannya dilakukan  oleh Wali Kelas</span></td>
      </tr>
      <tr>
        <td valign="top">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td valign="top">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="30" colspan="2" valign="top"><span class="style7"><strong>KETERANGAN NILAI KUANTITATIF</strong></span></td>
      </tr>
      
      <tr>
        <td colspan="2" valign="top"><span class="style7">Nilai Kuantitatif dengan 0 &ndash; 100 digunakan untuk  nilai mata pelajaran</span></td>
      </tr>
      <tr>
        <td colspan="2" valign="top"><span class="style7">Contoh Nilai 74, ditulis dengan huruf <em>tujuh  puluh empat</em></span></td>
      </tr>
      <tr>
        <td colspan="2" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td height="28" colspan="2" valign="top"><span class="style7"><strong>KETERANGAN NILAI KUALITATIF</strong></span></td>
      </tr>
      
      <tr>
        <td colspan="2" valign="top"><span class="style7">Nilai Kualitatif digunakan untuk penilaian  pengembangan diri dan perilaku</span></td>
      </tr>
      <tr>
        <td colspan="2" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" valign="top"><span class="style7"><strong>A&nbsp;&nbsp;=&nbsp;&nbsp;Sangat Baik</strong></span></td>
      </tr>
      <tr>
        <td colspan="2" valign="top"><span class="style7"><strong>B&nbsp;&nbsp;=&nbsp;&nbsp;Baik</strong></span></td>
      </tr>
      <tr>
        <td colspan="2" valign="top"><span class="style7"><strong>C&nbsp;&nbsp;=&nbsp;&nbsp;Cukup</strong></span></td>
      </tr>
      <tr>
        <td colspan="2" valign="top"><span class="style7"><strong>D&nbsp;&nbsp;=  &nbsp;Kurang</strong></span></td>
      </tr>
      <tr>
        <td colspan="2" valign="top"><span class="style7"><strong>E&nbsp;&nbsp;= &nbsp;Sangat Kurang</strong></span></td>
      </tr>
      <tr>
        <td colspan="2" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" valign="top"><span class="style7"><strong>KETERANGAN TABEL NILAI</strong></span></td>
      </tr>
      <tr>
        <td colspan="2" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" valign="top"><span class="style7">*)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KKM  ditetapkan oleh satuan pendidikan</span></td>
      </tr>
      <tr>
        <td colspan="2" valign="top"><span class="style7">**)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pilihan  mata pelajaran sesuai dengan kondisi satuan pendidikan</span></td>
      </tr>
      <tr>
        <td colspan="2" valign="top"><span class="style7">***)&nbsp;&nbsp;&nbsp;&nbsp; Penilaian  muatan lokal mengikuti penilaian kelompok mata pelajaran yang relevan</span></td>
      </tr>
      <tr>
        <td colspan="2" valign="top"><div align="center"></div></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
 
  <tr>
    <td colspan="3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="4" valign="top"><div align="center"><img src="<? echo"$gbr"; ?>" /></div></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="3%">&nbsp;</td>
        <td width="3%">&nbsp;</td>
        <td width="35%">&nbsp;</td>
        <td width="59%">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="4"><div align="center" class="style8">KETERANGAN TENTANG  DIRI SISWA</div></td>
        </tr>
      <tr>
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
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="center">1.</div></td>
        <td>Nama Siswa</td>
        <td>: <? echo $ct['nama']; ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="center">2.</div></td>
        <td>Nomor Induk</td>
        <td>: <? echo $ct['nis']; ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="center">3.</div></td>
        <td>Jenis Kelamin</td>
        <td>: <? if($ct['jkl']=="l"){echo"Laki-Laki";}else{echo"Perempuan";}; ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="center">4.</div></td>
        <td>Tempat dan Tanggal Lahir</td>
        <td>: <? echo $ct['tempat_lahir'].", ".$ct['tgl_lahir']." ".$ct['bln_lahir']." ".$ct['tahun_lahir']; ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="center">5.</div></td>
        <td>Agama</td>
        <td>: Islam </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="center">6.</div></td>
        <td>Anak Ke</td>
        <td>: <? echo $ct['anak_ke']; ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="center">7.</div></td>
        <td>Status dalam Keluarga</td>
        <td>: Anak Kandung </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="center">8.</div></td>
        <td>Alamat Siswa</td>
        <td>: <? echo $ct['alamat']; ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>Telepon</td>
        <td>: <? echo $ct['telpon']; ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="center">9.</div></td>
        <td>Diterima di sekolah ini</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>a. Di Kelas</td>
        <td>: <? 
		  $tampi=mysqli_query($koneksi, "SELECT * FROM riwayat_kelas WHERE id_santri='$ct[id_santri]' ");
          $tpk=mysqli_fetch_assoc($tampi);
		  echo $tpk['kelas'];
		 ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>b. Pada Tanggal</td>
        <td>: <? echo $ct['tgl_masuk']." ".$ct['bln_masuk']." ".$ct['thn_masuk']; ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="center">10.</div></td>
        <td>Sekolah Asal</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>a. Nama Sekolah</td>
        <td>: <? echo $ct['asal_sekolah']; ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>b. Alamat</td>
        <td>: <? echo $ct['asl_skl']; ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="center">11.</div></td>
        <td>Surat Keterangan Hasil Ujian (SKHU) </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>a. Tahun</td>
        <td>: 
          <? echo $ct['tahun_shkun']; ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>b. Nomor</td>
        <td>: 
          <? echo $ct['no_skhun']; ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="center">12.</div></td>
        <td>Nama Orang Tua</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>a. Ayah</td>
        <td>: <? echo $ct['nama_ort']; ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>b. Ibu</td>
        <td>: <? echo $ct['nama_ibu']; ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="center">13.</div></td>
        <td>Alamat Orang Tua</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>Telepon</td>
        <td>: <? echo $ct['telpon']; ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="center">14.</div></td>
        <td>Pekerjaan Orang Tua</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>a. Ayah</td>
        <td>: <? echo $ct['pekerjaan_ayah']; ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>b. Ibu </td>
        <td>: <? echo $ct['pekerjaan_ibu']; ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="center">15.</div></td>
        <td>Nama Wali</td>
        <td>: <? echo $ct['nm_wali']; ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="center">16.</div></td>
        <td>Alamat Wali</td>
        <td>: 
          <? echo $ct['alamat_wali']; ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="center">17.</div></td>
        <td>Pekerjaan Wali</td>
        <td>: 
          <? echo $ct['pkerja_wali']; ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="33%" rowspan="4" align="center" valign="top"><table width="109" height="139" border="1" cellpadding="0" cellspacing="0">
              <tr>
                <td><div align="center"><img src="../foto_santri/<? echo $ct['foto_st']; ?>" height="130" width="98" /></div></td>
              </tr>
            </table></td>
			
            <td width="20%" height="19">&nbsp;</td>
            <td width="47%"><? echo $tgl; ?>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td valign="top"><? echo $ket1; ?></td>
          </tr>
          <tr>
            <td height="19">&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td valign="bottom"><? if(!empty($tp['ttd'])){ ?>
              <img src="raport/<? echo "$tp[ttd]"; ?>" height="93" width="155" />
              <? } ?>
              <br />
                  <? echo $ket2; ?><br />
              NIY : <?  echo $niy;  ?> </td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="3"><div align="center"></div></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
</body>
</html>
