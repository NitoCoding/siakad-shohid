<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style2 {font-size: 10px}
.style3 {
	font-size: 16px;
	font-weight: bold;
}
.style4 {font-size: 12px}
.style5 {font-size: 14px}
.style6 {font-size: 11px}
-->
</style>
</head>
<? include("../koneksi.php"); 
   $id_kk=$_GET['id_kk'];
   $thaj=$_COOKIE['thaj'];
   $sem=$_COOKIE['sem']; 
   $klskr=$_GET['klskr'];
?>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="8%"><div align="center"><img src="../images/New Picture.png" width="64" height="72" border="0" /></div></td>
    <td width="86%" valign="top"><span class="style2"><span class="style5">YAYASAN SHOHWATUL IS'AD</span><br />
      <span class="style3">SMP-IT PPMI SHOHWATUL IS'AD&nbsp;<br />
      </span>Alamat : Jl. Poros Padanglampe KM. 3 Ma'rang Pangkep Sulawesi Selatan 90645 P.O. BOX 300 </span><br />
      <span class="style6">http://www.shohwatulisad.com e-mail : shohwatulisad@gmail.com</span> </td>
    <td width="6%">&nbsp;</td>
  </tr>
  <tr>
    <td height="19" colspan="3">&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;</td>
  </tr>
  <tr>
    <td colspan="2"><div align="center" class="style4">DAFTAR HADIR SANTRI<br />
        TA <? echo $thaj; ?></div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Semester</td>
    <td>: <span class="style4"><? echo $sem." "; if($sem=='I') echo"(Satu)";else echo"(Dua)";?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style4">Kelas</span></td>
    <td><span class="style4">: <? echo $klskr; ?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style4">Hari/Tanggal</span></td>
    <td><span class="style4">:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
      <? $tgl=date("Y"); echo $tgl; ?>
      </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><table width="962" border="1" cellpadding="0" cellspacing="0" bordercolor="#333333">
      <tr>
        <td width="33" rowspan="2"><div align="center"><strong>No</strong></div></td>
        <td width="65" rowspan="2"><div align="center"><strong>Nis</strong></div></td>
        <td width="281" rowspan="2"><div align="center"><strong>Nama</strong></div></td>
        <td colspan="10"><div align="center"><strong>Jam Ke- </strong></div></td>
        <td width="146" rowspan="2"><div align="center"><strong>Bidang Studi/ <br />
          Pokok Bahasan </strong></div></td>
        <td width="141" rowspan="2"><div align="center"><strong>Nama/<br />
          Paraf Guru </strong></div></td>
      </tr>
      <tr>
        <td width="24"><div align="center"><strong>1</strong></div></td>
        <td width="25"><div align="center"><strong>2</strong></div></td>
        <td width="25"><div align="center"><strong>3</strong></div></td>
        <td width="24"><div align="center"><strong>4</strong></div></td>
        <td width="25"><div align="center"><strong>5</strong></div></td>
        <td width="27"><div align="center"><strong>6</strong></div></td>
        <td width="27"><div align="center"><strong>7</strong></div></td>
        <td width="29"><div align="center">8</div></td>
        <td width="29"><div align="center">9</div></td>
        <td width="29"><div align="center"><strong>10</strong></div></td>
      </tr>
	  <?  $no=1; $t=1;
	      $tmpkls=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st FROM tb_santri WHERE kelas_st='$klskr' AND (status='a' or  
		  status='p') ORDER BY nama");
          while($ct=mysqli_fetch_assoc($tmpkls)){
	   ?>
      <tr>
        <td><div align="center"><? echo $no; ?></div></td>
        <td><div align="center"><? echo $ct['nis']; ?></div></td>
        <td>&nbsp;<? echo $ct['nama']; ?></td>
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
      <? if($no==$t){ ?>  
		<td rowspan="4">&nbsp;</td>
        <td rowspan="4">&nbsp;</td>
      <? $t+=4; } ?>
	  </tr><? $no+=1; } ?>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td width="4%">&nbsp;</td>
          <td width="19%">&nbsp;</td>
          <td width="7%">&nbsp;</td>
          <td width="15%">&nbsp;</td>
          <td width="11%">&nbsp;</td>
          <td width="11%">&nbsp;</td>
          <td width="11%">&nbsp;</td>
          <td width="11%">&nbsp;</td>
          <td width="11%">&nbsp;</td>
        </tr>
        <tr> 
          <td>Ket : </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td height="19">&nbsp;</td>
          <td>s : Sakit </td>
          <td>Catatan : </td>
          <td colspan="5" rowspan="3" valign="top"><table width="100%" height="57" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
              <tr> 
                <td>&nbsp;</td>
              </tr>
            </table></td>
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
          <td> i : Izin </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
          <td>a : Alpa </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
          <td> t : Terlambat </td>
          <td>&nbsp;</td>
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
          <td>Mengetahui,</td>
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
          <td>Wali Kelas </td>
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
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <?  
	      $wkl=mysqli_query($koneksi, "SELECT * FROM wali_kelas  WHERE kd_kls='$id_kk' ");
          $cw=mysqli_fetch_assoc($wkl);
		  
		  $wkl2=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai  WHERE id_gp='$cw[kd_gp]' ");
          $cw2=mysqli_fetch_assoc($wkl2);
		  
		  //echo $cw2['nama_gp'];
	   ?>
        <tr> 
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="2">(<? echo $cw2['nama_gp']; ?>)</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</body>
</html>
