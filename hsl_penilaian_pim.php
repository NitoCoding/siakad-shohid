<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?
include("koneksi.php");

?>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td rowspan="2"><div align="center">NO.</div></td>
    <td rowspan="2"><div align="center">NAMA PIMPINAN </div></td>
    <td colspan="9"><div align="center">UNIT</div></td>
  </tr>
  <tr>
    <td><div align="center">SMA</div></td>
    <td><div align="center">SMP</div></td>
    <td><div align="center">Kesantrian Putra</div></td>
    <td><div align="center">Kesantrian Putri</div></td>
    <td><div align="center">Keuangan</div></td>
    <td><div align="center">Ekonomi</div></td>
    <td><div align="center">Sarpras</div></td>
    <td><div align="center">Dapur</div></td>
    <td><div align="center">Tenaga Kependidikan</div></td>
  </tr>
  <tr>
    <td><div align="center">1.</div></td>
    <td>Muhammad Mukhlis, Lc., MA.</td>
    <td><div align="center">
      <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Muhammad Mukhlis, Lc., MA.' AND unit='SMA'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Muhammad Mukhlis, Lc., MA.' AND unit='SMP'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Muhammad Mukhlis, Lc., MA.' AND unit='Kesantrian Putra'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Muhammad Mukhlis, Lc., MA.' AND unit='Kesantrian Putri'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Muhammad Mukhlis, Lc., MA.' AND unit='Keuangan'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Muhammad Mukhlis, Lc., MA.' AND unit='Ekonomi'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Muhammad Mukhlis, Lc., MA.' AND unit='Sarpras'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Muhammad Mukhlis, Lc., MA.' AND unit='Dapur'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Muhammad Mukhlis, Lc., MA.' AND unit='Tenaga Kependidikan'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">2.</div></td>
    <td>Ady Mulya Azis, S.Kom.</td>
    <td><div align="center">
      <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Ady Mulya Azis, S.Kom.' AND unit='SMA'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Ady Mulya Azis, S.Kom.' AND unit='SMP'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Ady Mulya Azis, S.Kom.' AND unit='Kesantrian Putra'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Ady Mulya Azis, S.Kom.' AND unit='Kesantrian Putri'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Ady Mulya Azis, S.Kom.' AND unit='Keuangan'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Ady Mulya Azis, S.Kom.' AND unit='Ekonomi'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Ady Mulya Azis, S.Kom.' AND unit='Sarpras'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Ady Mulya Azis, S.Kom.' AND unit='Dapur'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Ady Mulya Azis, S.Kom.' AND unit='Tenaga Kependidikan'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">3.</div></td>
    <td>Muh Galib, S.Pd.</td>
    <td><div align="center">
      <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Muh Galib, S.Pd.' AND unit='SMA'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Muh Galib, S.Pd.' AND unit='SMP'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Muh Galib, S.Pd.' AND unit='Kesantrian Putra'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Muh Galib, S.Pd.' AND unit='Kesantrian Putri'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Muh Galib, S.Pd.' AND unit='Keuangan'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Muh Galib, S.Pd.' AND unit='Ekonomi'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Muh Galib, S.Pd.' AND unit='Sarpras'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Muh Galib, S.Pd.' AND unit='Dapur'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Muh Galib, S.Pd.' AND unit='Tenaga Kependidikan'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">4.</div></td>
    <td>Abdu Rahman T, Lc.</td>
    <td><div align="center">
      <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Abdu Rahman T, Lc.' AND unit='SMA'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Abdu Rahman T, Lc.' AND unit='SMP'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Abdu Rahman T, Lc.' AND unit='Kesantrian Putra'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Abdu Rahman T, Lc.' AND unit='Kesantrian Putri'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Abdu Rahman T, Lc.' AND unit='Keuangan'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Abdu Rahman T, Lc.' AND unit='Ekonomi'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Abdu Rahman T, Lc.' AND unit='Sarpras'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Abdu Rahman T, Lc.' AND unit='Dapur'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Abdu Rahman T, Lc.' AND unit='Tenaga Kependidikan'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">5.</div></td>
    <td>Heriyanti, M.Pd.</td>
    <td><div align="center">
      <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Heriyanti, M.Pd.' AND unit='SMA'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Heriyanti, M.Pd.' AND unit='SMP'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Heriyanti, M.Pd.' AND unit='Kesantrian Putra'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Heriyanti, M.Pd.' AND unit='Kesantrian Putri'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Heriyanti, M.Pd.' AND unit='Keuangan'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Heriyanti, M.Pd.' AND unit='Ekonomi'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Heriyanti, M.Pd.' AND unit='Sarpras'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Heriyanti, M.Pd.' AND unit='Dapur'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Heriyanti, M.Pd.' AND unit='Tenaga Kependidikan'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">6.</div></td>
    <td>Syamsuddin, S.Pd.,MM.</td>
    <td><div align="center">
      <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Syamsuddin, S.Pd.,MM.' AND unit='SMA'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Syamsuddin, S.Pd.,MM.' AND unit='SMP'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Syamsuddin, S.Pd.,MM.' AND unit='Kesantrian Putra'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Syamsuddin, S.Pd.,MM.' AND unit='Kesantrian Putri'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Syamsuddin, S.Pd.,MM.' AND unit='Keuangan'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Syamsuddin, S.Pd.,MM.' AND unit='Ekonomi'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Syamsuddin, S.Pd.,MM.' AND unit='Sarpras'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Syamsuddin, S.Pd.,MM.' AND unit='Dapur'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Syamsuddin, S.Pd.,MM.' AND unit='Tenaga Kependidikan'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">7.</div></td>
    <td>Kamaruddin Muh. Kaddas S.Pd, M.PMat.</td>
    <td><div align="center">
      <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Kamaruddin Muh. Kaddas S.Pd, M.PMat' AND unit='SMA'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Kamaruddin Muh. Kaddas S.Pd, M.PMat' AND unit='SMP'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Kamaruddin Muh. Kaddas S.Pd, M.PMat' AND unit='Kesantrian Putra'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Kamaruddin Muh. Kaddas S.Pd, M.PMat' AND unit='Kesantrian Putri'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Kamaruddin Muh. Kaddas S.Pd, M.PMat' AND unit='Keuangan'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Kamaruddin Muh. Kaddas S.Pd, M.PMat' AND unit='Ekonomi'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Kamaruddin Muh. Kaddas S.Pd, M.PMat' AND unit='Sarpras'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Kamaruddin Muh. Kaddas S.Pd, M.PMat' AND unit='Dapur'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Kamaruddin Muh. Kaddas S.Pd, M.PMat' AND unit='Tenaga Kependidikan'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">8.</div></td>
    <td>Abdul Wahid, A.Md.</td>
    <td><div align="center">
      <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Abdul Wahid, A.Md.' AND unit='SMA'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Abdul Wahid, A.Md.' AND unit='SMP'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Abdul Wahid, A.Md.' AND unit='Kesantrian Putra'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Abdul Wahid, A.Md.' AND unit='Kesantrian Putri'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Abdul Wahid, A.Md.' AND unit='Keuangan'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Abdul Wahid, A.Md.' AND unit='Ekonomi'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Abdul Wahid, A.Md.' AND unit='Sarpras'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Abdul Wahid, A.Md.' AND unit='Dapur'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Abdul Wahid, A.Md.' AND unit='Tenaga Kependidikan'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">9.</div></td>
    <td>Sunandar, S.Pd.I.</td>
    <td><div align="center">
      <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Sunandar, S.Pd.I.' AND unit='SMA'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Sunandar, S.Pd.I.' AND unit='SMP'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Sunandar, S.Pd.I.' AND unit='Kesantrian Putra'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Sunandar, S.Pd.I.' AND unit='Kesantrian Putri'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Sunandar, S.Pd.I.' AND unit='Keuangan'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Sunandar, S.Pd.I.' AND unit='Ekonomi'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Sunandar, S.Pd.I.' AND unit='Sarpras'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Sunandar, S.Pd.I.' AND unit='Dapur'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Sunandar, S.Pd.I.' AND unit='Tenaga Kependidikan'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">10.</div></td>
    <td>Nadrah Masnaini, SE., S.Pd.</td>
    <td><div align="center">
      <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Nadrah Masnaini, SE., S.Pd.' AND unit='SMA'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Nadrah Masnaini, SE., S.Pd.' AND unit='SMP'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Nadrah Masnaini, SE., S.Pd.' AND unit='Kesantrian Putra'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Nadrah Masnaini, SE., S.Pd.' AND unit='Kesantrian Putri'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Nadrah Masnaini, SE., S.Pd.' AND unit='Keuangan'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Nadrah Masnaini, SE., S.Pd.' AND unit='Ekonomi'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Nadrah Masnaini, SE., S.Pd.' AND unit='Sarpras'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Nadrah Masnaini, SE., S.Pd.' AND unit='Dapur'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Nadrah Masnaini, SE., S.Pd.' AND unit='Tenaga Kependidikan'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">11.</div></td>
    <td>Drs. Med. Syaiful Azmi, S.Ked.</td>
    <td><div align="center">
      <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Drs. Med. Syaiful Azmi, S.Ked.' AND unit='SMA'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Drs. Med. Syaiful Azmi, S.Ked.' AND unit='SMP'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Drs. Med. Syaiful Azmi, S.Ked.' AND unit='Kesantrian Putra'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Drs. Med. Syaiful Azmi, S.Ked.' AND unit='Kesantrian Putra'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Drs. Med. Syaiful Azmi, S.Ked.' AND unit='Keuangan'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Drs. Med. Syaiful Azmi, S.Ked.' AND unit='Ekonomi'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Drs. Med. Syaiful Azmi, S.Ked.' AND unit='Sarpras'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Drs. Med. Syaiful Azmi, S.Ked.' AND unit='Dapur'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
    <td><div align="center">
        <?  $tj=0;
	     $tampi3=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_pimpinan WHERE nama_pim='Drs. Med. Syaiful Azmi, S.Ked.' AND unit='Tenaga Kependidikan'");
          while($tp3=mysqli_fetch_assoc($tampi3)){
		  $tj=$tp3['tot']+$tj;
		  }
		  echo $tj;
	?>
    </div></td>
  </tr>
</table>
</body>
</html>
