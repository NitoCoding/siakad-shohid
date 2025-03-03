<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistem Informasi Sekolah PPMI Shohwatul Is'ad</title>
<style type="text/css">
<!--
.style12 {font-size: 12px}
.style13 {	font-size: 16px;
	color: #FF0000;
	cursor: text;
}
.style6 {font-size: 16px;
	color: #336600;
}
.style8 {font-size: 18px; color: #336600; }
.style9 {color: #336600; font-size: 14px;}
-->
</style>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="6"><div align="right">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="10%"><div align="left">&nbsp;<img src="../images/back.gif" width="20" height="22" border="0" align="absmiddle" />&nbsp;<a href="masuk.php?logout=1" class="lk">Selesai</a></div></td>
          <td width="17%"><div align="left"><a href="report.php" class="lk"><img src="../images/print_bg.gif" width="24" height="25" align="absmiddle" border="0" /> </a></div></td>
          <td width="73%"><div align="right"><img src="../images/bgColor.gif" width="18" height="18" align="absmiddle" border="0" />&nbsp;<a href="index.php?hal=dts&amp;pg1=1" class="lk">Kehadiran</a> &nbsp;|&nbsp; <img src="../images/StartingRecord.gif" width="18" height="18" align="absmiddle" border="0" />&nbsp;<a href="index.php?hal=dts&amp;pg1=2" class="lk">Nilai</a> &nbsp;|&nbsp; <img src="../images/slicforw.gif" width="18" height="16" align="absmiddle" border="0" />&nbsp;<a href="index.php?hal=dts&amp;pg1=3" class="lk">Extrakokurikuler</a> &nbsp;|&nbsp; <img src="../images/ctxtrain_opn.gif" width="16" height="16" align="absmiddle" border="0" />&nbsp;<a href="index.php?hal=dts&amp;pg1=4" class="lk">Prestasi</a> &nbsp;|&nbsp; <img src="../images/btn_projmgr_delete.gif" width="23" height="23" align="absmiddle" border="0" />&nbsp;<a href="index.php?hal=dts&amp;pg1=5" class="lk">Pelanggaran</a> &nbsp;|&nbsp; <img src="../images/RecordsetStatistics.gif" width="18" height="18" align="absmiddle" border="0" /> &nbsp;<a href="index.php?hal=dts&amp;pg1=6" class="lk">Pembayaran</a>&nbsp;</div></td>
        </tr>
      </table>
    </div></td>
  </tr>
  
  <tr>
    <td width="13%">&nbsp;</td>
    <td width="13%">&nbsp;</td>
    <td width="18%">&nbsp;</td>
    <td width="16%">&nbsp;</td>
    <td width="18%">&nbsp;</td>
    <td width="22%">&nbsp;</td>
  </tr>
  <tr>
    <td height="171" colspan="6" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <?
     $tampil=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st,foto_st FROM tb_santri WHERE id_santri='$id_santri' ");
     $tp=mysqli_fetch_assoc($tampil);
  ?>
      
      <tr>
        <td colspan="2" bgcolor="#B7CE86" height="5"></td>
      </tr>
      <tr>
        <td width="12%" valign="top" bgcolor="#B7CE86"><div align="center"><img src="../foto_santri/<? echo $tp['foto_st']; ?>" width="100" height="130" /></div></td>
        <td width="88%" valign="top" bgcolor="#B7CE86"><table width="100%" border="0" cellspacing="0" cellpadding="2">
            <tr>
              <td width="11%" bgcolor="#C6DE8D">&nbsp;Nis</td>
              <td width="88%" bgcolor="#C6DE8D">: <? echo $tp['nis']; ?></td>
              <td width="1%">&nbsp;</td>
            </tr>
            <tr>
              <td bgcolor="#EAF1DA">&nbsp;Nama</td>
              <td bgcolor="#EAF1DA">: <? echo $tp['nama']; ?></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td bgcolor="#C6DE8D">&nbsp;Kelas</td>
              <td bgcolor="#C6DE8D">: <? echo $tp['kelas_st']; ?></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#EAF1DA">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#C6DE8D">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#EAF1DA">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#C6DE8D">&nbsp;Tahun Ajaran : <? echo $thn_ajaran; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Semester :
                <? if($semester=="I"){ $s="(Pertama)";}else{ $s="(Kedua)"; }  echo $semester." $s"; ?></td>
              <td>&nbsp;</td>
            </tr>
        </table></td>
      </tr>
      
      <tr>
        <td colspan="2" bgcolor="#B7CE86" height="5"></td>
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <td colspan="6" height="0" valign="top"><?
	if($pg1==1){ include("kehadiran.php"); }
	if($pg1==2){ include("nilai.php"); }
	if($pg1==3){ include("pbakat.php"); }
	if($pg1==4){ include("prestasi.php"); }
	if($pg1==5){ include("pelanggaran.php"); }
	if($pg1==6){ include("pembayaran.php"); }
	?></td>
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
