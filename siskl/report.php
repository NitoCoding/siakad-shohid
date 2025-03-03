<head>
<title></title>
<style type="text/css">
<!--
.style7 {font-size: 12px}
td {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
	text-decoration: none;
	color: #000000;
}
.lk {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
	text-decoration: none;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {	color: #003333;
	font-weight: bold;
}
.style9 {color: #000000; font-weight: bold; }
-->
</style>
<script type="text/javascript">
function printpage()
{
window.print();
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>

<body>
<table width="700" border="1" align="center" cellpadding="2" cellspacing="0">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="3"><div align="center" class="style7"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sistem Informasi Sekolah PPMI Shohwatul Is'ad </strong></div>          <div align="center"></div></td>
        </tr>
      <tr>
        <td height="22" colspan="2">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="22" colspan="2"><div align="center">&nbsp;</div></td>
        <td width="9%"><div align="center">&nbsp;</div></td>
      </tr>
      <?
   include("../koneksi.php"); 
   $hal=$_GET['hal'];
    $pg1=$_GET['pg1'];
   $id_santri=$_COOKIE['id_santri']; 
   $bulan=$_COOKIE['bulan']; 
   $semester=$_COOKIE['semester']; 
   $pekan=$_COOKIE['pekan']; 
   $thn_ajaran=$_COOKIE['thn_ajaran'];
   $niss=$_COOKIE['niss'];
   $id_kk=$_COOKIE['id_kk'];
   $bulan_ak=$_COOKIE['bulan_ak']; 
    $dtst=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st,foto_st FROM tb_santri WHERE  id_santri='$id_santri' ");
    $tp=mysqli_fetch_assoc($dtst);
  ?>
      <tr>
        <td colspan="3" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="16%" valign="top"><div align="center"> <img src="../foto_santri/<? echo $tp['foto_st']; ?>" width="100" height="130"/> </div></td>
              <td width="84%" colspan="3" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="3%">&nbsp;</td>
                    <td width="7%">Nis</td>
                    <td width="90%">: <? echo $tp['nis']; ?></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>Nama</td>
                    <td>: <? echo $tp['nama']; ?></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>Kelas</td>
                    <td>: <? echo $tp['kelas_st']; ?></td>
                  </tr>
              </table></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td width="26%">&nbsp;</td>
        <td width="65%">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="2%">&nbsp;</td>
              <td width="13%">Tahun Ajaran </td>
              <td width="64%">: <? echo $thn_ajaran; ?></td>
              <td width="7%">Bulan</td>
              <td width="14%">: <? echo $bulan; ?></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>Semester</td>
              <td>: <? if($semester=="I"){ $s="(Pertama)";}else{ $s="(Kedua)"; }  echo $semester." $s"; ?></td>
              <td>Pekan</td>
              <td><span class="style7">
                : <? if($pekan=='I'){ echo $pekan." (Pertama)"; }
				     if($pekan=='II') { echo $pekan." (Kedua)"; }
					 if($pekan=='III') { echo $pekan." (Ketiga)"; }  
					 if($pekan=='IV') { echo $pekan." (Keempat)"; }?>
              </span></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="3"><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td height="3"><hr></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="center"><strong>Kehadiran</strong></div></td>
      </tr>
      <tr>
        <td colspan="3" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#999999">
          <tr>
            <td width="13%" bgcolor="#eeeeee"><div align="center">Ket/Hari</div></td>
            <td width="13%" bgcolor="#eeeeee"><div align="center">Senin</div></td>
            <td width="12%" bgcolor="#eeeeee"><div align="center">Selasa</div></td>
            <td width="10%" bgcolor="#eeeeee"><div align="center">Rabu</div></td>
            <td width="11%" bgcolor="#eeeeee"><div align="center">Kamis</div></td>
            <td width="10%" bgcolor="#eeeeee"><div align="center">Sabtu</div></td>
            <td width="10%" bgcolor="#eeeeee"><div align="center">Ahad</div></td>
            <td width="21%" bgcolor="#eeeeee"><div align="center">Total / Pekan </div></td>
          </tr>
		  <?
		  /* $tampi=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$id_santri' and tth_ajaran='$thn_ajaran' and 
		                      semester='$semester' and bulan='$bulan' and pekan='$pekan' ");
          $tpk=mysqli_fetch_assoc($tampi); */
		  
	
		  ?>
          <tr>
            <td bgcolor="#CCCCCC"><div align="center">Hadir</div></td>
            <td><div align="center">
              <?
		$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$id_santri' and hari='Senin' and status='h' AND        pekan='$pekan' AND bulan='$bulan' AND semester='$semester' AND tth_ajaran='$thn_ajaran' ");
        $jml=mysqli_num_rows($tampi2);
		echo $jml;
			?>
            Jam</div></td>
            <td><div align="center">
              <?
		$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$id_santri' and hari='Selasa' and status='h' AND        pekan='$pekan' AND bulan='$bulan' AND semester='$semester' AND tth_ajaran='$thn_ajaran' ");
        $jml=mysqli_num_rows($tampi2);
		echo $jml;
			?>
&nbsp;Jam            </div></td>
            <td><div align="center">
              <?
		$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$id_santri' and hari='Rabu' and status='h' AND        pekan='$pekan' AND bulan='$bulan' AND semester='$semester' AND tth_ajaran='$thn_ajaran'");
        $jml=mysqli_num_rows($tampi2);
		echo $jml;
			?>
&nbsp; Jam            </div></td>
            <td><div align="center">
              <?
		$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$id_santri' and hari='Kamis' and status='h' AND        pekan='$pekan' AND bulan='$bulan' AND semester='$semester' AND tth_ajaran='$thn_ajaran'");
        $jml=mysqli_num_rows($tampi2);
		echo $jml;
			?>
&nbsp; Jam</div></td>
            <td><div align="center">
              <?
		$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$id_santri' and hari='Sabtu' and status='h' AND        pekan='$pekan' AND bulan='$bulan' AND semester='$semester' AND tth_ajaran='$thn_ajaran'");
        $jml=mysqli_num_rows($tampi2);
		echo $jml;
			?>
&nbsp;Jam            </div></td>
            <td><div align="center">
              <?
		$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$id_santri' and hari='Ahad' and status='h' AND        pekan='$pekan' AND bulan='$bulan' AND semester='$semester' AND tth_ajaran='$thn_ajaran'");
        $jml=mysqli_num_rows($tampi2);
		echo $jml;
			?>
&nbsp; Jam            </div></td>
            <td><div align="center">
              <?
		$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$id_santri' and status='h' AND pekan='$pekan' AND bulan='$bulan' AND semester='$semester' AND tth_ajaran='$thn_ajaran'");
        $jml=mysqli_num_rows($tampi2);
		echo $jml;
			?>
&nbsp;Jam            </div></td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC"><div align="center">Sakit</div></td>
            <td><div align="center">
              <?
		$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$tpk[id_kehadiran]' and hari='Senin' and status='s' AND        pekan='$pekan' AND bulan='$bulan' AND semester='$semester' AND tth_ajaran='$thn_ajaran'");
        $jml=mysqli_num_rows($tampi2);
		echo $jml;
			?> Jam 
            </div></td>
            <td><div align="center">
              <?
		$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$id_santri' and hari='Selasa' and status='s' AND        pekan='$pekan' AND bulan='$bulan' AND semester='$semester' AND tth_ajaran='$thn_ajaran'");
        $jml=mysqli_num_rows($tampi2);
		echo $jml;
			?>
&nbsp;Jam            </div></td>
            <td><div align="center">
              <?
		$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$id_santri' and hari='Rabu' and status='s' AND        pekan='$pekan' AND bulan='$bulan' AND semester='$semester' AND tth_ajaran='$thn_ajaran'");
        $jml=mysqli_num_rows($tampi2);
		echo $jml;
			?>
&nbsp; Jam            </div></td>
            <td><div align="center">
              <?
		$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$id_santri' and hari='Kamis' and status='s' AND        pekan='$pekan' AND bulan='$bulan' AND semester='$semester' AND tth_ajaran='$thn_ajaran'");
        $jml=mysqli_num_rows($tampi2);
		echo $jml;
			?>
&nbsp; Jam            </div></td>
            <td><div align="center">
              <?
		$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$id_santri' and hari='Sabtu' and status='s' AND        pekan='$pekan' AND bulan='$bulan' AND semester='$semester' AND tth_ajaran='$thn_ajaran'");
        $jml=mysqli_num_rows($tampi2);
		echo $jml;
			?>
&nbsp; Jam            </div></td>
            <td><div align="center">
              <?
		$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$id_santri' and hari='Ahad' and status='s' AND        pekan='$pekan' AND bulan='$bulan' AND semester='$semester' AND tth_ajaran='$thn_ajaran'");
        $jml=mysqli_num_rows($tampi2);
		echo $jml;
			?>
&nbsp; Jam            </div></td>
            <td><div align="center">
              <?
		$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$id_santri' and status='s' AND pekan='$pekan' AND bulan='$bulan' AND semester='$semester' AND tth_ajaran='$thn_ajaran'");
        $jml=mysqli_num_rows($tampi2);
		echo $jml;
			?>
&nbsp;Jam            </div></td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC"><div align="center">Izin</div></td>
            <td><div align="center">
              <?
		$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$tpk[id_kehadiran]' and hari='Senin' and status='i' AND        pekan='$pekan' AND bulan='$bulan' AND semester='$semester' AND tth_ajaran='$thn_ajaran'");
        $jml=mysqli_num_rows($tampi2);
		echo $jml;
			?> Jam 
            </div></td>
            <td><div align="center">
              <?
		$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$id_santri' and hari='Selasa' and status='i' AND        pekan='$pekan' AND bulan='$bulan' AND semester='$semester' AND tth_ajaran='$thn_ajaran'");
        $jml=mysqli_num_rows($tampi2);
		echo $jml;
			?>
&nbsp; Jam            </div></td>
            <td><div align="center">
              <?
		$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$id_santri' and hari='Rabu' and status='i' AND        pekan='$pekan' AND bulan='$bulan' AND semester='$semester' AND tth_ajaran='$thn_ajaran'");
        $jml=mysqli_num_rows($tampi2);
		echo $jml;
			?>
&nbsp; Jam            </div></td>
            <td><div align="center">
              <?
		$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$id_santri' and hari='Kamis' and status='i' AND        pekan='$pekan' AND bulan='$bulan' AND semester='$semester' AND tth_ajaran='$thn_ajaran'");
        $jml=mysqli_num_rows($tampi2);
		echo $jml;
			?>
&nbsp; Jam            </div></td>
            <td><div align="center">
              <?
		$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$id_santri' and hari='Sabtu' and status='i' AND        pekan='$pekan' AND bulan='$bulan' AND semester='$semester' AND tth_ajaran='$thn_ajaran'");
        $jml=mysqli_num_rows($tampi2);
		echo $jml;
			?>
&nbsp; Jam            </div></td>
            <td><div align="center">
              <?
		$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$id_santri' and hari='Ahad' and status='i' AND        pekan='$pekan' AND bulan='$bulan' AND semester='$semester' AND tth_ajaran='$thn_ajaran'");
        $jml=mysqli_num_rows($tampi2);
		echo $jml;
			?>
&nbsp; Jam            </div></td>
            <td><div align="center">
              <?
		$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$id_santri' and status='i' AND pekan='$pekan' AND bulan='$bulan' AND semester='$semester' AND tth_ajaran='$thn_ajaran'");
        $jml=mysqli_num_rows($tampi2);
		echo $jml;
			?>
&nbsp;Jam            </div></td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC"><div align="center">Alpa</div></td>
            <td><div align="center">
              <?
		$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$tpk[id_kehadiran]' and hari='Senin' and status='a' AND        pekan='$pekan' AND bulan='$bulan' AND semester='$semester' AND tth_ajaran='$thn_ajaran'");
        $jml=mysqli_num_rows($tampi2);
		echo $jml;
			?> Jam 
            </div></td>
            <td><div align="center">
              <?
		$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$id_santri' and hari='Selasa' and status='a' AND        pekan='$pekan' AND bulan='$bulan' AND semester='$semester' AND tth_ajaran='$thn_ajaran'");
        $jml=mysqli_num_rows($tampi2);
		echo $jml;
			?>
&nbsp; Jam            </div></td>
            <td><div align="center">
              <?
		$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$id_santri' and hari='Rabu' and status='a' AND        pekan='$pekan' AND bulan='$bulan' AND semester='$semester' AND tth_ajaran='$thn_ajaran'");
        $jml=mysqli_num_rows($tampi2);
		echo $jml;
			?>
&nbsp; Jam            </div></td>
            <td><div align="center">
              <?
		$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$id_santri' and hari='Kamis' and status='a' AND        pekan='$pekan' AND bulan='$bulan' AND semester='$semester' AND tth_ajaran='$thn_ajaran'");
        $jml=mysqli_num_rows($tampi2);
		echo $jml;
			?>
&nbsp; Jam            </div></td>
            <td><div align="center">
              <?
		$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$id_santri' and hari='Sabtu' and status='a' AND        pekan='$pekan' AND bulan='$bulan' AND semester='$semester' AND tth_ajaran='$thn_ajaran'");
        $jml=mysqli_num_rows($tampi2);
		echo $jml;
			?>
&nbsp; Jam            </div></td>
            <td><div align="center">
              <?
		$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$id_santri' and hari='Ahad' and status='a' AND        pekan='$pekan' AND bulan='$bulan' AND semester='$semester' AND tth_ajaran='$thn_ajaran'");
        $jml=mysqli_num_rows($tampi2);
		echo $jml;
			?>
&nbsp; Jam            </div></td>
            <td><div align="center">
              <?
		$tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir WHERE kd_kehadiran='$id_santri' and status='a' AND pekan='$pekan' AND bulan='$bulan' AND semester='$semester' AND tth_ajaran='$thn_ajaran'");
        $jml=mysqli_num_rows($tampi2);
		echo $jml;
			?>
&nbsp;Jam            </div></td>
          </tr>
          
        </table></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2"><div align="right"><strong>Nilai Santri </strong></div></td>
        </tr>
      <tr>
        <td height="87" colspan="3" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#999999">
          <tr>
            <td height="14" colspan="20" bordercolor="#CCCCCC"><div align="center" class="style1">Nilai Santri Untuk Mata Pelajaran DIKNAS </div></td>
          </tr>
          <tr>
            <td colspan="11" bordercolor="#999999" bgcolor="#eeeeee"><div align="center">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="35%">&nbsp;</td>
                    <td width="65%"><div align="center">Nilai Tugas </div></td>
                  </tr>
                </table>
            </div></td>
            <td colspan="5" bordercolor="#999999" bgcolor="#CCCCCC"><div align="center">Nilai Ulangan Harian </div></td>
            <td width="6%" rowspan="2" bordercolor="#999999" bgcolor="#eeeeee"><div align="center">Nilai<br />
              Harian</div></td>
            <td width="9%" rowspan="2" bordercolor="#999999" bgcolor="#CCCCCC"><div align="center">Ujian<br />
              Tengah <br />
              Semester </div></td>
            <td width="8%" rowspan="2" bordercolor="#999999" bgcolor="#eeeeee"><div align="center">Ujian<br />
              Semester</div></td>
            <td width="6%" rowspan="2" bordercolor="#999999" bgcolor="#CCCCCC"><div align="center">Nilai<br />
              Raport</div></td>
          </tr>
          <tr>
            <td width="21%" bordercolor="#999999" bgcolor="#CCCCCC"><div align="center">Mata Pelajaran </div></td>
            <td width="3%" height="21" bordercolor="#999999" bgcolor="#eeeeee"><div align="center">1</div></td>
            <td width="3%" bordercolor="#999999" bgcolor="#eeeeee"><div align="center">2</div></td>
            <td width="3%" bordercolor="#999999" bgcolor="#eeeeee"><div align="center">3</div></td>
            <td width="3%" bordercolor="#999999" bgcolor="#eeeeee"><div align="center">4</div></td>
            <td width="3%" bordercolor="#999999" bgcolor="#eeeeee"><div align="center">5</div></td>
            <td width="3%" bordercolor="#999999" bgcolor="#eeeeee"><div align="center">6</div></td>
            <td width="3%" bordercolor="#999999" bgcolor="#eeeeee"><div align="center">7</div></td>
            <td width="3%" bordercolor="#999999" bgcolor="#eeeeee"><div align="center">8</div></td>
            <td width="3%" bordercolor="#999999" bgcolor="#eeeeee"><div align="center">9</div></td>
            <td width="4%" bordercolor="#999999" bgcolor="#eeeeee"><div align="center">10</div></td>
            <td width="3%" bordercolor="#999999" bgcolor="#CCCCCC"><div align="center">1</div></td>
            <td width="3%" bordercolor="#999999" bgcolor="#CCCCCC"><div align="center">2</div></td>
            <td width="3%" bordercolor="#999999" bgcolor="#CCCCCC"><div align="center">3</div></td>
            <td width="3%" bordercolor="#999999" bgcolor="#CCCCCC"><div align="center">4</div></td>
            <td width="3%" bordercolor="#999999" bgcolor="#CCCCCC"><div align="center">5</div></td>
          </tr>
          <?
	 $mpl=mysqli_query($koneksi, "SELECT kd_mp,nama_mp,ket FROM mata_pelajaran  WHERE ket='MD' ");
     while($cmpl=mysqli_fetch_assoc($mpl)){
	
	  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$niss' and kd_mp='$cmpl[kd_mp]' and thn_ajaran='$thn_ajaran' and semester='$semester' ");
          $tpk=mysqli_fetch_assoc($tampi);
	  ?>
          <tr>
            <td><? echo $cmpl['nama_mp']; ?></td>
            <td height="30"><div align="center"><? echo $tpk['nt1']; if($tpk['nt1']=="")echo "&nbsp;";?></div></td>
            <td><div align="center"><? echo $tpk['nt2']; if($tpk['nt2']=="")echo "&nbsp;"; ?></div></td>
            <td><div align="center"><? echo $tpk['nt3']; if($tpk['nt3']=="")echo "&nbsp;";?></div></td>
            <td><div align="center"><? echo $tpk['nt4']; if($tpk['nt4']=="")echo "&nbsp;";?></div></td>
            <td><div align="center"><? echo $tpk['nt5']; if($tpk['nt5']=="")echo "&nbsp;";?></div></td>
            <td><div align="center"><? echo $tpk['nt6']; if($tpk['nt6']=="")echo "&nbsp;";?></div></td>
            <td><div align="center"><? echo $tpk['nt7']; if($tpk['nt7']=="")echo "&nbsp;";?></div></td>
            <td><div align="center"><? echo $tpk['nt8']; if($tpk['nt8']=="")echo "&nbsp;";?></div></td>
            <td><div align="center"><? echo $tpk['nt9']; if($tpk['nt9']=="")echo "&nbsp;";?></div></td>
            <td><div align="center"><? echo $tpk['nt10']; if($tpk['nt10']=="")echo "&nbsp;";?></div></td>
            <td><div align="center"><? echo $tpk['uh1']; if($tpk['uh1']=="")echo "&nbsp;";?></div></td>
            <td><div align="center"><? echo $tpk['uh2']; if($tpk['uh2']=="")echo "&nbsp;";?></div></td>
            <td><div align="center"><? echo $tpk['uh3']; if($tpk['uh3']=="")echo "&nbsp;";?></div></td>
            <td><div align="center"><? echo $tpk['uh4']; if($tpk['uh4']=="")echo "&nbsp;";?></div></td>
            <td><div align="center"><? echo $tpk['uh5']; if($tpk['uh5']=="")echo "&nbsp;";?></div></td>
            <td><div align="center"><? echo $tpk['nh']; if($tpk['nh']=="")echo "&nbsp;";?></div></td>
            <td><div align="center"><? echo $tpk['uts']; if($tpk['uts']=="")echo "&nbsp;";?></div></td>
            <td><div align="center"><? echo $tpk['us']; if($tpk['us']=="")echo "&nbsp;";?></div></td>
            <td><div align="center"><? echo $tpk['raport']; if($tpk['raport']=="")echo "&nbsp;";?></div></td>
          </tr> <? } ?>
        </table></td>
        </tr>
      <tr>
        <td colspan="3"><div align="center"><span class="style1">Nilai Santri Untuk Mata Pelajaran Kepondokan </span></div></td>
      </tr>
      <tr>
        <td colspan="3"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#999999">
          
          <?
	 $mpl=mysqli_query($koneksi, "SELECT kd_mp,nama_mp,ket FROM mata_pelajaran  WHERE ket='MP' ");
     while($cmpl=mysqli_fetch_assoc($mpl)){
	
	  $tampi=mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$niss' and kd_mp='$cmpl[kd_mp]' and thn_ajaran='$thn_ajaran' and semester='$semester' ");
          $tpk=mysqli_fetch_assoc($tampi);
	  ?>
          <tr>
            <td width="21%" bordercolor="#999999" bgcolor="#FFFFFF"><? echo $cmpl['nama_mp']; ?></td>
          <td width="3%" height="30" bordercolor="#999999" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['nt1']; if($tpk['nt1']=="")echo "&nbsp;";?></div></td>
            <td width="3%" bordercolor="#999999" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['nt2']; if($tpk['nt2']=="")echo "&nbsp;";?></div></td>
            <td width="3%" bordercolor="#999999" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['nt3']; if($tpk['nt3']=="")echo "&nbsp;";?></div></td>
            <td width="3%" bordercolor="#999999" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['nt4']; if($tpk['nt4']=="")echo "&nbsp;";?></div></td>
            <td width="3%" bordercolor="#999999" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['nt5']; if($tpk['nt5']=="")echo "&nbsp;";?></div></td>
            <td width="3%" bordercolor="#999999" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['nt6']; if($tpk['nt6']=="")echo "&nbsp;";?></div></td>
            <td width="3%" bordercolor="#999999" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['nt7']; if($tpk['nt7']=="")echo "&nbsp;";?></div></td>
            <td width="3%" bordercolor="#999999" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['nt8']; if($tpk['nt8']=="")echo "&nbsp;";?></div></td>
            <td width="3%" bordercolor="#999999" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['nt9']; if($tpk['nt9']=="")echo "&nbsp;";?></div></td>
            <td width="4%" bordercolor="#999999" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['nt10']; if($tpk['nt10']=="")echo "&nbsp;";?></div></td>
            <td width="3%" bordercolor="#999999" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['uh1']; if($tpk['uh1']=="")echo "&nbsp;";?></div></td>
            <td width="3%" bordercolor="#999999" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['uh2']; if($tpk['uh2']=="")echo "&nbsp;";?></div></td>
            <td width="3%" bordercolor="#999999" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['uh3']; if($tpk['uh3']=="")echo "&nbsp;";?></div></td>
            <td width="3%" bordercolor="#999999" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['uh4']; if($tpk['uh4']=="")echo "&nbsp;";?></div></td>
            <td width="3%" bordercolor="#999999" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['uh5']; if($tpk['uh5']=="")echo "&nbsp;";?></div></td>
            <td width="6%" bordercolor="#999999" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['nh']; if($tpk['nh']=="")echo "&nbsp;";?></div></td>
            <td width="9%" bordercolor="#999999" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['uts']; if($tpk['uts']=="")echo "&nbsp;";?></div></td>
            <td width="8%" bordercolor="#999999" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['us']; if($tpk['us']=="")echo "&nbsp;";?></div></td>
            <td width="6%" bordercolor="#999999" bgcolor="#FFFFFF"><div align="center"><? echo $tpk['raport']; if($tpk['raport']=="")echo "&nbsp;";?></div></td>
            <? } ?>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><strong>Pembayaran</strong></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#999999">
          <tr>
            <td colspan="2" bgcolor="#eeeeee"><div align="center"><strong>Syahriah &amp; Komite</strong></div></td>
          </tr>
          <tr>
            <td width="37%"><div align="center" class="style9">Bulan</div></td>
            <td width="63%"><div align="center" class="style9">Telah di Bayar</div></td>
          </tr>
          <tr>
            <td><div align="center">Januari</div></td>
            <td><div align="right"> Rp.
              <? 
			  $tot2=0;
			  
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$id_santri' and kd_bayar='1' and bln_bayar='Januari' 
			  and semester_b='$semester' and thn_b='$thn_ajaran'");
			  
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		     $tot2=$tot2+$ctp2['jml_bayar'];
		  } echo $tot2; if($bulan_ak>=1 and $tot2==0) { echo"<font color='#00000'> (Menunggak)</font>"; }
			  ?>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">Februari</div></td>
            <td><div align="right"> Rp.
              <? 
			  $thnbp=substr($thaj,0,3);
			  $tot2=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$id_santri' and kd_bayar='1' and bln_bayar='Februari' 
			  and semester_b='$semester' and thn_b='$thn_ajaran'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  } echo $tot2; if($bulan_ak >=2 and $tot2==0) { echo"<font color='#00000'> (Menunggak)</font>"; }
			  ?>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">Maret</div></td>
            <td><div align="right"> Rp.
              <? 
			  $thnbp=substr($thaj,0,3);
			  $tot2=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$id_santri' and kd_bayar='1' and bln_bayar='Maret' 
			  and semester_b='$semester' and thn_b='$thn_ajaran'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  } echo $tot2; if($bulan_ak >=3 and $tot2==0) { echo"<font color='#00000'> (Menunggak)</font>"; }
			  ?>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">April</div></td>
            <td><div align="right"> Rp.
              <? 
			  $thnbp=substr($thaj,0,3);
			  $tot2=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$id_santri' and kd_bayar='1' and bln_bayar='April' 
			  and semester_b='$semester' and thn_b='$thn_ajaran'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  } echo $tot2; if($bulan_ak >=4 and $tot2==0) { echo"<font color='#00000'> (Menunggak)</font>"; }
			  ?>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">Mei</div></td>
            <td><div align="right"> Rp.
              <? 
			  $thnbp=substr($thaj,0,3);
			  $tot2=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$id_santri' and kd_bayar='1' and bln_bayar='Mei' 
			  and semester_b='$semester' and thn_b='$thn_ajaran'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  } echo $tot2; if($bulan_ak >=5 and $tot2==0) { echo"<font color='#00000'> (Menunggak)</font>"; }
			  ?>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">Juni</div></td>
            <td><div align="right"> Rp.
              <? 
			  $thnbp=substr($thaj,0,3);
			  $tot2=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$id_santri' and kd_bayar='1' and bln_bayar='Juni' 
			  and semester_b='$semester' and thn_b='$thn_ajaran'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  } echo $tot2; if($bulan_ak >=6 and $tot2==0) { echo"<font color='#00000'> (Menunggak)</font>"; }
			  ?>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">Juli</div></td>
            <td><div align="right"> Rp.
              <? 
			  $thnbp=substr($thaj,0,3);
			  $tot2=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$id_santri' and kd_bayar='1' and bln_bayar='Juli' 
			  and semester_b='$semester' and thn_b='$thn_ajaran'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  } echo $tot2;  if($bulan_ak >=7 and $tot2==0) { echo"<font color='#00000'> (Menunggak)</font>"; }
			  ?>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">Agustus</div></td>
            <td><div align="right"> Rp.
              <? 
			  $thnbp=substr($thaj,0,3);
			  $tot2=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$id_santri' and kd_bayar='1' and bln_bayar='Agustus' 
			  and semester_b='$semester' and thn_b='$thn_ajaran'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  } echo $tot2;  if($bulan_ak >=8 and $tot2==0) { echo"<font color='#00000'> (Menunggak)</font>"; }
			  ?>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">September</div></td>
            <td><div align="right"> Rp.
              <? 
			  $thnbp=substr($thaj,0,3);
			  $tot2=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$id_santri' and kd_bayar='1' and bln_bayar='September' 
			  and semester_b='$semester' and thn_b='$thn_ajaran'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  } echo $tot2; if($bulan_ak >=9 and $tot2==0) { echo"<font color='#00000'> (Menunggak)</font>"; }
			  ?>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">Oktober</div></td>
            <td><div align="right"> Rp.
              <? 
			  $thnbp=substr($thaj,0,3);
			  $tot2=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$id_santri' and kd_bayar='1' and bln_bayar='Oktober' 
			  and semester_b='$semester' and thn_b='$thn_ajaran'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  } echo $tot2;  if($bulan_ak >=10 and $tot2==0) { echo"<font color='#00000'> (Menunggak)</font>"; }
			  ?>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">November</div></td>
            <td><div align="right"> Rp.
              <? 
			  $thnbp=substr($thaj,0,3);
			  $tot2=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$id_santri' and kd_bayar='1' and bln_bayar='Nopember' 
			  and semester_b='$semester' and thn_b='$thn_ajaran'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  } echo $tot2;  if($bulan_ak >=11 and $tot2==0) { echo"<font color='#00000'> (Menunggak)</font>"; }
			  ?>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">Desember</div></td>
            <td><div align="right"> Rp.
              <? 
			  $thnbp=substr($thaj,0,3);
			  $tot2=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$id_santri' and kd_bayar='1' and bln_bayar='Desember' 
			  and semester_b='$semester' and thn_b='$thn_ajaran'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  } echo $tot2;  if($bulan_ak >=12 and $tot2==0) { echo"<font color='#00000'> (Menunggak)</font>"; }
			  ?>
            </div></td>
          </tr>
        </table></td>
        <td colspan="2" valign="top"><table width="99%" border="1" align="right" cellpadding="0" cellspacing="0" bordercolor="#999999">
          <tr>
            <td width="31%" bgcolor="#eeeeee"><div align="center"><strong>Pembayaran</strong></div></td>
            <td width="23%" bgcolor="#eeeeee"><div align="center"><strong>Jumlah</strong></div></td>
            <td width="24%" bgcolor="#eeeeee"><div align="center"><strong>Telah di Bayar </strong></div></td>
            <td width="22%" bgcolor="#eeeeee"><div align="center"><strong>Sisa</strong></div></td>
          </tr>
          <?
			$pmb=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran,rincian_bayar WHERE rincian_bayar.kd_kls='$id_kk' and tb_pembayaran.ket!='b' and tb_pembayaran.kd_pembayaran=rincian_bayar.kd_bayar");
          while($ctp=mysqli_fetch_assoc($pmb)){
			 ?>
          <tr>
            <td><? echo $ctp['pembayaran']; ?></td>
            <td><div align="right">Rp. <? echo $ctp['jumlah']; ?> </div></td>
            <td><div align="right">Rp.
              <? 
			  $tot=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE 
		  kd_santri='$id_santri' and semester_b='$semester' and thn_b='$thn_ajaran' and kd_bayar='$ctp[kd_pembayaran]'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		  $tot=$tot+$ctp2['jml_bayar'];
		  } echo $tot; ?>
            </div></td>
            <td><div align="right">Rp.
              <? $sisa=$ctp['jumlah']-$tot; echo $sisa; ?>
            </div></td>
          </tr>
          <? } ?>
        </table></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" bgcolor="#CCCCCC"><div align="center">Sistem Informasi Sekolah PPMI Shohwatul Is'ad </div></td>
        </tr>
    </table></td>
  </tr>
</table>

</body>
</html>
