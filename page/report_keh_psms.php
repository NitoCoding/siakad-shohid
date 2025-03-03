<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {font-size: 24px;
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
 $thaj=$_COOKIE['thaj'];
 $sem=$_COOKIE['sem'];
?>
<body>
<table width="1205" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="208" valign="top"><table width="1205" border="0" cellspacing="0" cellpadding="0">
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
        <td colspan="6"><div align="center" class="style5">REKAP ABSENSI KEHADIRAN SANTRI PERSEMESTER</div></td>
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
        <td width="7%">Kelas</td>
        <td width="1%">:</td>
        <td width="71%"><? echo $klsk; ?></td>
        <td width="4%">&nbsp;</td>
        <td width="1%">&nbsp;</td>
        <td width="16%">&nbsp;</td>
      </tr>
      <tr>
        <td>Tahun Ajaran </td>
        <td>:</td>
        <td><? echo $thaj; ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Semester</td>
        <td>:</td>
        <td><? echo $sem; ?></td>
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
    <td valign="top"><table width="1205" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td width="2%" rowspan="3"><div align="center">No</div></td>
        <td width="4%" rowspan="3"><div align="center">Nis</div></td>
        <td width="13%" rowspan="3"><div align="center">Nama</div></td>
        <td colspan="35"><div align="center">MATA PELAJARAN </div></td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">AGM</div></td>
        <td colspan="3"><div align="center">IND</div></td>
        <td colspan="3"><div align="center">ING</div></td>
        <td colspan="3"><div align="center">MTK</div></td>
        <td colspan="3"><div align="center">IPA</div></td>
        <td colspan="3"><div align="center">IPS</div></td>
        <td colspan="3"><div align="center">KHT</div></td>
        <td colspan="3"><div align="center">PNJ</div></td>
        <td colspan="3"><div align="center">TIK</div></td>
        <td colspan="3"><div align="center">KDA</div></td>
        <td colspan="4"><div align="center">JML</div></td>
        <td width="4%" rowspan="2"><div align="center">TOT<br />
          JAM</div></td>
        </tr>
      <tr>
        <td width="2%"><div align="center">I</div></td>
        <td width="2%"><div align="center">S</div></td>
        <td width="2%"><div align="center">A</div></td>
        <td width="2%"><div align="center">I</div></td>
        <td width="2%"><div align="center">S</div></td>
        <td width="2%"><div align="center">A</div></td>
        <td width="2%"><div align="center">I</div></td>
        <td width="2%"><div align="center">S</div></td>
        <td width="2%"><div align="center">A</div></td>
        <td width="2%"><div align="center">I</div></td>
        <td width="2%"><div align="center">S</div></td>
        <td width="2%"><div align="center">A</div></td>
        <td width="2%"><div align="center">I</div></td>
        <td width="2%"><div align="center">S</div></td>
        <td width="2%"><div align="center">A</div></td>
        <td width="2%"><div align="center">I</div></td>
        <td width="2%"><div align="center">S</div></td>
        <td width="2%"><div align="center">A</div></td>
        <td width="2%"><div align="center">I</div></td>
        <td width="2%"><div align="center">S</div></td>
        <td width="2%"><div align="center">A</div></td>
        <td width="2%"><div align="center">I</div></td>
        <td width="2%"><div align="center">S</div></td>
        <td width="2%"><div align="center">A</div></td>
        <td width="2%"><div align="center">I</div></td>
        <td width="2%"><div align="center">S</div></td>
        <td width="2%"><div align="center">A</div></td>
        <td width="2%"><div align="center">I</div></td>
        <td width="2%"><div align="center">S</div></td>
        <td width="2%"><div align="center">A</div></td>
        <td width="2%"><div align="center">I</div></td>
        <td width="2%"><div align="center">S</div></td>
        <td width="2%"><div align="center">A</div></td>
        <td width="2%"><div align="center">H</div></td>
      </tr>
      <? $no=1;
   $tam=mysqli_query($koneksi, "SELECT id_santri,kelas_st,nama,nis FROM tb_santri WHERE kelas_st='$klsk' AND status='a'  ORDER BY nama  ");
   while($tp=mysqli_fetch_assoc($tam)){
   
   
          if($tp['kelas_st']=="VIIA"){ $tabelx="tb_hadir_7a"; $tabelx2="detail_hadir_7a"; }
		  if($tp['kelas_st']=="VIIB"){ $tabelx="tb_hadir_7b"; $tabelx2="detail_hadir_7b"; }
		  if($tp['kelas_st']=="VIIIA"){ $tabelx="tb_hadir_8a"; $tabelx2="detail_hadir_8a"; }
		  if($tp['kelas_st']=="VIIIB"){ $tabelx="tb_hadir_8b"; $tabelx2="detail_hadir_8b"; }
		  if($tp['kelas_st']=="IXA"){ $tabelx="tb_hadir_9a"; $tabelx2="detail_hadir_9a"; }
		  if($tp['kelas_st']=="IXB"){ $tabelx="tb_hadir_9b"; $tabelx2="detail_hadir_9b"; }
   
  ?>
      <tr>
        <td><div align="center"><? echo $no; ?></div></td>
        <td><div align="center"><? echo $tp['nis']; ?></div></td>
        <td>&nbsp;<? echo $tp['nama']; ?></td>
        <td><div align="center">
            <?
   
   $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' and  
    $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MD001' AND $tabelx2.status='I' ");
   $tdh=mysqli_num_rows($tdth);
   echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
            <?
   
   $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' and  
    $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MD001' AND $tabelx2.status='S' ");
   $tdh=mysqli_num_rows($tdth);
   echo $tdh;			
			
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' and  
    $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MD001' AND $tabelx2.status='A'");
   $tdh=mysqli_num_rows($tdth);
   echo $tdh;	
  ?>
        </div></td>
        <td><div align="center">
            <?
			
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' and  
    $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MD003' AND $tabelx2.status='I' ");
   $tdh=mysqli_num_rows($tdth);
   echo $tdh;	
   
   ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' and  
    $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MD003' AND $tabelx2.status='S'");
   $tdh=mysqli_num_rows($tdth);
   echo $tdh;	
  ?>
        </div></td>
        <td><div align="center">
            <?
  $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' and  
    $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MD003' AND $tabelx2.status='A' ");
   $tdh=mysqli_num_rows($tdth);
   echo $tdh;	
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' and  
    $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MD004' AND $tabelx2.status='I' ");
   $tdh=mysqli_num_rows($tdth);
   echo $tdh;	
   
  ?>
        </div></td>
        <td><div align="center">
            <?
    $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' and  
    $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MD004' AND $tabelx2.status='S'");
   $tdh=mysqli_num_rows($tdth);
   echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
            <?
    $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' and  
    $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MD004' AND $tabelx2.status='A'");
   $tdh=mysqli_num_rows($tdth);
   echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' and  
    $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MD005' AND $tabelx2.status='I' ");
   $tdh=mysqli_num_rows($tdth);
   echo $tdh;
			
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' and  
    $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MD005' AND $tabelx2.status='S' ");
   $tdh=mysqli_num_rows($tdth);
   echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
            <?
  $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' and  
    $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MD005' AND $tabelx2.status='A' ");
   $tdh=mysqli_num_rows($tdth);
   echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' and  
    $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MD006' AND $tabelx2.status='I' ");
   $tdh=mysqli_num_rows($tdth);
   echo $tdh;		
	
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' and  
    $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MD006' AND $tabelx2.status='S' ");
   $tdh=mysqli_num_rows($tdth);
   echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
            <?
  $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' and  
    $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MD006' AND $tabelx2.status='A' ");
   $tdh=mysqli_num_rows($tdth);
   echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' and  
    $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MD007' AND $tabelx2.status='I' ");
   $tdh=mysqli_num_rows($tdth);
   echo $tdh;
   
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' and  
    $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MD007' AND $tabelx2.status='S'");
   $tdh=mysqli_num_rows($tdth);
   echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
            <?
  $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' and  
    $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MD007' AND $tabelx2.status='A' ");
   $tdh=mysqli_num_rows($tdth);
   echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
            <?
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' and  
    $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MD012' AND $tabelx2.status='I'");
   $tdh=mysqli_num_rows($tdth);
   echo $tdh;
	
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' and  
    $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MD012' AND $tabelx2.status='S' ");
   $tdh=mysqli_num_rows($tdth);
   echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' and  
    $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MD012' AND $tabelx2.status='A' ");
   $tdh=mysqli_num_rows($tdth);
   echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
            <?
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' and  
    $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MD009' AND $tabelx2.status='I' ");
   $tdh=mysqli_num_rows($tdth);
   echo $tdh;
	
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' and  
    $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MD009' AND $tabelx2.status='S' ");
   $tdh=mysqli_num_rows($tdth);
   echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' and  
    $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MD009' AND $tabelx2.status='A' ");
   $tdh=mysqli_num_rows($tdth);
   echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' and  
    $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MD010' AND $tabelx2.status='I' ");
   $tdh=mysqli_num_rows($tdth);
   echo $tdh;
   
   
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' and  
    $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MD010' AND $tabelx2.status='S' ");
   $tdh=mysqli_num_rows($tdth);
   echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
            <?
  $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' and  
    $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MD010' AND $tabelx2.status='A'  ");
   $tdh=mysqli_num_rows($tdth);
   echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' and  
    $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MD011' AND $tabelx2.status='I'  ");
   $tdh=mysqli_num_rows($tdth);
   echo $tdh;
   
  ?>
        </div></td>
        <td><div align="center">
            <?
  $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' and  
    $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MD011' AND $tabelx2.status='S'  ");
   $tdh=mysqli_num_rows($tdth);
   echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' and  
    $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MD011' AND $tabelx2.status='A' ");
   $tdh=mysqli_num_rows($tdth);
   echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
            <?
    $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2,mata_pelajaran WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND  
   $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.status='I' AND $tabelx2.kd_mpl=mata_pelajaran.kd_mp AND 
   mata_pelajaran.ket='MD' ");
   $tdh=mysqli_num_rows($tdth);
   echo $tdh;
   
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2,mata_pelajaran WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND  
   $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.status='S' AND $tabelx2.kd_mpl=mata_pelajaran.kd_mp AND 
   mata_pelajaran.ket='MD' ");
   $tdh=mysqli_num_rows($tdth);
   echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2,mata_pelajaran WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND  
   $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.status='A' AND $tabelx2.kd_mpl=mata_pelajaran.kd_mp AND 
   mata_pelajaran.ket='MD' ");
   $tdh=mysqli_num_rows($tdth);
   echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2,mata_pelajaran WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND  
   $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.status='H' AND $tabelx2.kd_mpl=mata_pelajaran.kd_mp AND 
   mata_pelajaran.ket='MD' ");
   $tdh=mysqli_num_rows($tdth);
   echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
            <? $tjam=0;
  $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2,mata_pelajaran WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND  
			$tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl=mata_pelajaran.kd_mp AND 
            mata_pelajaran.ket='MD'");
      while($tp3=mysqli_fetch_assoc($tdth)){
   
      $tax=mysqli_query($koneksi, "SELECT * FROM tb_jam WHERE kd_jam='$tp3[jam]' "); 
      $tpa=mysqli_fetch_assoc($tax);
	  $tjam=$tjam+$tpa['jml_jam'];
   }
   echo $tjam;
  ?>
        </div></td>
        </tr>
      <?
    $no+=1;
    }
  ?>
    </table></td>
  </tr>
</table>

</body>
</html>
