<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {	font-size: 24px;
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
 $tglx=$_COOKIE['tglx'];
?>
<body>
<table width="1225" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="190" valign="top"><table width="1205" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="14" colspan="6" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
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
        <td colspan="6"><div align="center" class="style5">REKAP ABSENSI KEHADIRAN SANTRI PERBULAN </div></td>
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
        <td width="4%">Semester</td>
        <td width="1%">:</td>
        <td width="16%"><? echo $sem; ?></td>
      </tr>
      <tr>
        <td>Tahun Ajaran </td>
        <td>:</td>
        <td><? echo $thaj; ?></td>
        <td>Bulan</td>
        <td>:</td>
        <td><? echo $blnk; ?></td>
      </tr>
      
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="54" valign="top"><table width="1205" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td width="2%" rowspan="2"><div align="center">No</div></td>
        <td width="4%" rowspan="2"><div align="center">Nis</div></td>
        <td width="13%" rowspan="2"><div align="center">Nama</div></td>
        <td colspan="31"><div align="center">TANGGAL</div></td>
        <td colspan="4"><div align="center">TOTAL</div></td>
      </tr>
      <tr>
        <td width="2%"><div align="center">1</div></td>
        <td width="2%"><div align="center">2</div></td>
        <td width="2%"><div align="center">3</div></td>
        <td width="2%"><div align="center">4</div></td>
        <td width="2%"><div align="center">5</div></td>
        <td width="2%"><div align="center">6</div></td>
        <td width="2%"><div align="center">7</div></td>
        <td width="2%"><div align="center">8</div></td>
        <td width="2%"><div align="center">9</div></td>
        <td width="2%"><div align="center">10</div></td>
        <td width="2%"><div align="center">11</div></td>
        <td width="2%"><div align="center">12</div></td>
        <td width="2%"><div align="center">13</div></td>
        <td width="2%"><div align="center">14</div></td>
        <td width="2%"><div align="center">15</div></td>
        <td width="2%"><div align="center">16</div></td>
        <td width="2%"><div align="center">17</div></td>
        <td width="2%"><div align="center">18</div></td>
        <td width="2%"><div align="center">19</div></td>
        <td width="2%"><div align="center">20</div></td>
        <td width="2%"><div align="center">21</div></td>
        <td width="2%"><div align="center">22</div></td>
        <td width="2%"><div align="center">23</div></td>
        <td width="2%"><div align="center">24</div></td>
        <td width="2%"><div align="center">25</div></td>
        <td width="2%"><div align="center">26</div></td>
        <td width="2%"><div align="center">27</div></td>
        <td width="2%"><div align="center">28</div></td>
        <td width="2%"><div align="center">29</div></td>
        <td width="2%"><div align="center">30</div></td>
        <td width="2%"><div align="center">31</div></td>
        <td width="2%"><div align="center">H</div></td>
        <td width="2%"><div align="center">S</div></td>
        <td width="2%"><div align="center">I</div></td>
        <td width="2%"><div align="center">A</div></td>
      </tr>
      <? $no=1; $hd=0; $sd=0; $id=0; $ad=0;
   $tam=mysqli_query($koneksi, "SELECT id_santri,kelas_st,nama,nis FROM tb_santri WHERE kelas_st='$klsk' AND status='a'  ORDER BY nama  ");
   while($tp=mysqli_fetch_assoc($tam)){
   
          /* if($tp['kelas_st']=="VIIA"){ $tabelx="tb_hadir_7a"; $tabelx2="detail_hadir_7a"; }
		  if($tp['kelas_st']=="VIIB"){ $tabelx="tb_hadir_7b"; $tabelx2="detail_hadir_7b"; }
		  if($tp['kelas_st']=="VIIIA"){ $tabelx="tb_hadir_8a"; $tabelx2="detail_hadir_8a"; }
		  if($tp['kelas_st']=="VIIIB"){ $tabelx="tb_hadir_8b"; $tabelx2="detail_hadir_8b"; }
		  if($tp['kelas_st']=="IXA"){ $tabelx="tb_hadir_9a"; $tabelx2="detail_hadir_9a"; }
		  if($tp['kelas_st']=="IXB"){ $tabelx="tb_hadir_9b"; $tabelx2="detail_hadir_9b"; } */
		  
		  
		  
		  if($tp['kelas_st']=="VIIA"){ $tabelx="tb_hadir_7a"; $tabelx2="detail_hadir_7a"; }
		  if($tp['kelas_st']=="VIIB"){ $tabelx="tb_hadir_7b"; $tabelx2="detail_hadir_7b"; }
		  if($tp['kelas_st']=="VIIC"){ $tabelx="tb_hadir_7c"; $tabelx2="detail_hadir_7c"; }
		  
		  if($tp['kelas_st']=="VIIIA"){ $tabelx="tb_hadir_8a"; $tabelx2="detail_hadir_8a"; }
		  if($tp['kelas_st']=="VIIIB"){ $tabelx="tb_hadir_8b"; $tabelx2="detail_hadir_8b"; }
		  if($tp['kelas_st']=="VIIIC"){ $tabelx="tb_hadir_8c"; $tabelx2="detail_hadir_8c"; }
		  
		  if($tp['kelas_st']=="IXA"){ $tabelx="tb_hadir_9a"; $tabelx2="detail_hadir_9a"; }
		  if($tp['kelas_st']=="IXB"){ $tabelx="tb_hadir_9b"; $tabelx2="detail_hadir_9b"; }
		  if($tp['kelas_st']=="IXC"){ $tabelx="tb_hadir_9c"; $tabelx2="detail_hadir_9c"; }
		  
		  if($tp['kelas_st']=="X"){ $tabelx="tb_hadir_10a"; $tabelx2="detail_hadir_10a"; }
		  if($tp['kelas_st']=="XB"){ $tabelx="tb_hadir_10b"; $tabelx2="detail_hadir_10b"; }
   
  ?>
      <tr>
        <td height="20"><div align="center"><? echo $no; ?></div></td>
        <td><div align="center"><? echo $tp['nis']; ?></div></td>
        <td>&nbsp;<? echo $tp['nama']; ?></td>
        <td><div align="center">
            <?
   
    $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' 
	and $tabelx.tgl_h='01' and $tabelx2.status='H' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and 
	$tabelx.tgl_h='01' and $tabelx2.status='I' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld2=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='01' and $tabelx2.status='S' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld3=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='01' and $tabelx2.status='A' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld4=mysqli_num_rows($tdth);
	
	if($jmld >=1 ) {echo "H"; $hd+=1;}
	else if($jmld2 >=1) {echo "I"; $id+=1; }
	else if($jmld3 >=1) {echo "S"; $sd+=1; }
	else if($jmld4 >=1) {echo "A"; $ad+=1;}
	
	
	  
	
   
  ?>
        </div></td>
        <td><div align="center">
            <?
   
    $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='02' and $tabelx2.status='H' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='02' and $tabelx2.status='I' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld2=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='02' and $tabelx2.status='S' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld3=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='02' and $tabelx2.status='A' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld4=mysqli_num_rows($tdth);
	
	if($jmld >=1 ) {echo "H"; $hd+=1;}
	else if($jmld2 >=1) {echo "I"; $id+=1; }
	else if($jmld3 >=1) {echo "S"; $sd+=1; }
	else if($jmld4 >=1) {echo "A"; $ad+=1;}
	
	
	  
	
   
  ?>
        </div></td>
        <td><div align="center">
            <?
   
    $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='03' and $tabelx2.status='H' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='03' and $tabelx2.status='I' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld2=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='03' and $tabelx2.status='S' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld3=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='03' and $tabelx2.status='A' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld4=mysqli_num_rows($tdth);
	
	if($jmld >=1 ) {echo "H"; $hd+=1;}
	else if($jmld2 >=1) {echo "I"; $id+=1; }
	else if($jmld3 >=1) {echo "S"; $sd+=1; }
	else if($jmld4 >=1) {echo "A"; $ad+=1;}
	
	
	  
	
   
  ?>
        </div></td>
        <td><div align="center">
            <?
   
    $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='04' and $tabelx2.status='H' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='04' and $tabelx2.status='I' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld2=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='04' and $tabelx2.status='S' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld3=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='04' and $tabelx2.status='A' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld4=mysqli_num_rows($tdth);
	
	if($jmld >=1 ) {echo "H"; $hd+=1;}
	else if($jmld2 >=1) {echo "I"; $id+=1; }
	else if($jmld3 >=1) {echo "S"; $sd+=1; }
	else if($jmld4 >=1) {echo "A"; $ad+=1;}
	
	
	  
	
   
  ?>
        </div></td>
        <td><div align="center">
            <?
   
    $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='05' and $tabelx2.status='H' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='05' and $tabelx2.status='I' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld2=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='05' and $tabelx2.status='S' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld3=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='05' and $tabelx2.status='A' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld4=mysqli_num_rows($tdth);
	
	if($jmld >=1 ) {echo "H"; $hd+=1;}
	else if($jmld2 >=1) {echo "I"; $id+=1; }
	else if($jmld3 >=1) {echo "S"; $sd+=1; }
	else if($jmld4 >=1) {echo "A"; $ad+=1;}
	
	
	  
	
   
  ?>
        </div></td>
        <td><div align="center">
            <?
   
    $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='06' and $tabelx2.status='H' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='06' and $tabelx2.status='I' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld2=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='06' and $tabelx2.status='S' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld3=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='06' and $tabelx2.status='A' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld4=mysqli_num_rows($tdth);
	
	if($jmld >=1 ) {echo "H"; $hd+=1;}
	else if($jmld2 >=1) {echo "I"; $id+=1; }
	else if($jmld3 >=1) {echo "S"; $sd+=1; }
	else if($jmld4 >=1) {echo "A"; $ad+=1;}
	
	
	  
	
   
  ?>
        </div></td>
        <td><div align="center">
            <?
   
    $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='07' and $tabelx2.status='H' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='07' and $tabelx2.status='I' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld2=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='07' and $tabelx2.status='S' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld3=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='07' and $tabelx2.status='A' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld4=mysqli_num_rows($tdth);
	
	if($jmld >=1 ) {echo "H"; $hd+=1;}
	else if($jmld2 >=1) {echo "I"; $id+=1; }
	else if($jmld3 >=1) {echo "S"; $sd+=1; }
	else if($jmld4 >=1) {echo "A"; $ad+=1;}
	
	
	  
	
   
  ?>
        </div></td>
        <td><div align="center">
            <?
   
    $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='08' and $tabelx2.status='H' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='08' and $tabelx2.status='I' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld2=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='08' and $tabelx2.status='S' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld3=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='08' and $tabelx2.status='A' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld4=mysqli_num_rows($tdth);
	
	if($jmld >=1 ) {echo "H"; $hd+=1;}
	else if($jmld2 >=1) {echo "I"; $id+=1; }
	else if($jmld3 >=1) {echo "S"; $sd+=1; }
	else if($jmld4 >=1) {echo "A"; $ad+=1;}
	
	
	  
	
   
  ?>
        </div></td>
        <td><div align="center">
            <?
   
    $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='09' and $tabelx2.status='H' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='09' and $tabelx2.status='I' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld2=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='09' and $tabelx2.status='S' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld3=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='09' and $tabelx2.status='A' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld4=mysqli_num_rows($tdth);
	
	if($jmld >=1 ) {echo "H"; $hd+=1;}
	else if($jmld2 >=1) {echo "I"; $id+=1; }
	else if($jmld3 >=1) {echo "S"; $sd+=1; }
	else if($jmld4 >=1) {echo "A"; $ad+=1;}
	
	
	  
	
   
  ?>
        </div></td>
        <td><div align="center">
            <?
   
    $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='10' and $tabelx2.status='H' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='10' and $tabelx2.status='I' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld2=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='10' and $tabelx2.status='S' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld3=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='10' and $tabelx2.status='A' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld4=mysqli_num_rows($tdth);
	
	if($jmld >=1 ) {echo "H"; $hd+=1;}
	else if($jmld2 >=1) {echo "I"; $id+=1; }
	else if($jmld3 >=1) {echo "S"; $sd+=1; }
	else if($jmld4 >=1) {echo "A"; $ad+=1;}
	
	
	  
	
   
  ?>
        </div></td>
        <td><div align="center">
            <?
   
    $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='11' and $tabelx2.status='H' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='11' and $tabelx2.status='I' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld2=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='11' and $tabelx2.status='S' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld3=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='11' and $tabelx2.status='A' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld4=mysqli_num_rows($tdth);
	
	if($jmld >=1 ) {echo "H"; $hd+=1;}
	else if($jmld2 >=1) {echo "I"; $id+=1; }
	else if($jmld3 >=1) {echo "S"; $sd+=1; }
	else if($jmld4 >=1) {echo "A"; $ad+=1;}
	
	
	  
	
   
  ?>
        </div></td>
        <td><div align="center">
            <?
   
    $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='12' and $tabelx2.status='H' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='12' and $tabelx2.status='I' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld2=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='12' and $tabelx2.status='S' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld3=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='12' and $tabelx2.status='A' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld4=mysqli_num_rows($tdth);
	
	if($jmld >=1 ) {echo "H"; $hd+=1;}
	else if($jmld2 >=1) {echo "I"; $id+=1; }
	else if($jmld3 >=1) {echo "S"; $sd+=1; }
	else if($jmld4 >=1) {echo "A"; $ad+=1;}
	
	
	  
	
   
  ?>
        </div></td>
        <td><div align="center">
            <?
   
    $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='13' and $tabelx2.status='H' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='13' and $tabelx2.status='I' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld2=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='13' and $tabelx2.status='S' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld3=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='13' and $tabelx2.status='A' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld4=mysqli_num_rows($tdth);
	
	if($jmld >=1 ) {echo "H"; $hd+=1;}
	else if($jmld2 >=1) {echo "I"; $id+=1; }
	else if($jmld3 >=1) {echo "S"; $sd+=1; }
	else if($jmld4 >=1) {echo "A"; $ad+=1;}
	
	
	  
	
   
  ?>
        </div></td>
        <td><div align="center">
            <?
   
    $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='14' and $tabelx2.status='H' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='14' and $tabelx2.status='I' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld2=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='14' and $tabelx2.status='S' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld3=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='14' and $tabelx2.status='A' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld4=mysqli_num_rows($tdth);
	
	if($jmld >=1 ) {echo "H"; $hd+=1;}
	else if($jmld2 >=1) {echo "I"; $id+=1; }
	else if($jmld3 >=1) {echo "S"; $sd+=1; }
	else if($jmld4 >=1) {echo "A"; $ad+=1;}
	
	
	  
	
   
  ?>
        </div></td>
        <td><div align="center">
            <?
   
    $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='15' and $tabelx2.status='H' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='15' and $tabelx2.status='I' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld2=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='15' and $tabelx2.status='S' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld3=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='15' and $tabelx2.status='A' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld4=mysqli_num_rows($tdth);
	
	if($jmld >=1 ) {echo "H"; $hd+=1;}
	else if($jmld2 >=1) {echo "I"; $id+=1; }
	else if($jmld3 >=1) {echo "S"; $sd+=1; }
	else if($jmld4 >=1) {echo "A"; $ad+=1;}
	
	
	  
	
   
  ?>
        </div></td>
        <td><div align="center">
            <?
   
    $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='16' and $tabelx2.status='H' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='16' and $tabelx2.status='I' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld2=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='16' and $tabelx2.status='S' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld3=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='16' and $tabelx2.status='A' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld4=mysqli_num_rows($tdth);
	
	if($jmld >=1 ) {echo "H"; $hd+=1;}
	else if($jmld2 >=1) {echo "I"; $id+=1; }
	else if($jmld3 >=1) {echo "S"; $sd+=1; }
	else if($jmld4 >=1) {echo "A"; $ad+=1;}
	
	
	  
	
   
  ?>
        </div></td>
        <td><div align="center">
            <?
   
    $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='17' and $tabelx2.status='H' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='17' and $tabelx2.status='I' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld2=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='17' and $tabelx2.status='S' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld3=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='17' and $tabelx2.status='A' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld4=mysqli_num_rows($tdth);
	
	if($jmld >=1 ) {echo "H"; $hd+=1;}
	else if($jmld2 >=1) {echo "I"; $id+=1; }
	else if($jmld3 >=1) {echo "S"; $sd+=1; }
	else if($jmld4 >=1) {echo "A"; $ad+=1;}
	
	
	  
	
   
  ?>
        </div></td>
        <td><div align="center">
            <?
   
    $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='18' and $tabelx2.status='H' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='18' and $tabelx2.status='I' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld2=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='18' and $tabelx2.status='S' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld3=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='18' and $tabelx2.status='A' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld4=mysqli_num_rows($tdth);
	
	if($jmld >=1 ) {echo "H"; $hd+=1;}
	else if($jmld2 >=1) {echo "I"; $id+=1; }
	else if($jmld3 >=1) {echo "S"; $sd+=1; }
	else if($jmld4 >=1) {echo "A"; $ad+=1;}
	
	
	  
	
   
  ?>
        </div></td>
        <td><div align="center">
            <?
   
    $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='19' and $tabelx2.status='H' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='19' and $tabelx2.status='I' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld2=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='19' and $tabelx2.status='S' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld3=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='19' and $tabelx2.status='A' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld4=mysqli_num_rows($tdth);
	
	if($jmld >=1 ) {echo "H"; $hd+=1;}
	else if($jmld2 >=1) {echo "I"; $id+=1; }
	else if($jmld3 >=1) {echo "S"; $sd+=1; }
	else if($jmld4 >=1) {echo "A"; $ad+=1;}
	
	
	  
	
   
  ?>
        </div></td>
        <td><div align="center">
            <?
   
    $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='20' and $tabelx2.status='H' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='20' and $tabelx2.status='I' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld2=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='20' and $tabelx2.status='S' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld3=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='20' and $tabelx2.status='A' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld4=mysqli_num_rows($tdth);
	
	if($jmld >=1 ) {echo "H"; $hd+=1;}
	else if($jmld2 >=1) {echo "I"; $id+=1; }
	else if($jmld3 >=1) {echo "S"; $sd+=1; }
	else if($jmld4 >=1) {echo "A"; $ad+=1;}
	
	
	  
	
   
  ?>
        </div></td>
        <td><div align="center">
            <?
   
    $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='21' and $tabelx2.status='H' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='21' and $tabelx2.status='I' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld2=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='21' and $tabelx2.status='S' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld3=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='21' and $tabelx2.status='A' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld4=mysqli_num_rows($tdth);
	
	if($jmld >=1 ) {echo "H"; $hd+=1;}
	else if($jmld2 >=1) {echo "I"; $id+=1; }
	else if($jmld3 >=1) {echo "S"; $sd+=1; }
	else if($jmld4 >=1) {echo "A"; $ad+=1;}
	
	
	  
	
   
  ?>
        </div></td>
        <td><div align="center">
            <?
   
    $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='22' and $tabelx2.status='H' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='22' and $tabelx2.status='I' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld2=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='22' and $tabelx2.status='S' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld3=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='22' and $tabelx2.status='A' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld4=mysqli_num_rows($tdth);
	
	if($jmld >=1 ) {echo "H"; $hd+=1;}
	else if($jmld2 >=1) {echo "I"; $id+=1; }
	else if($jmld3 >=1) {echo "S"; $sd+=1; }
	else if($jmld4 >=1) {echo "A"; $ad+=1;}
	
	
	  
	
   
  ?>
        </div></td>
        <td><div align="center">
            <?
   
    $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='23' and $tabelx2.status='H' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='23' and $tabelx2.status='I' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld2=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='23' and $tabelx2.status='S' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld3=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='23' and $tabelx2.status='A' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld4=mysqli_num_rows($tdth);
	
	if($jmld >=1 ) {echo "H"; $hd+=1;}
	else if($jmld2 >=1) {echo "I"; $id+=1; }
	else if($jmld3 >=1) {echo "S"; $sd+=1; }
	else if($jmld4 >=1) {echo "A"; $ad+=1;}
	
	
	  
	
   
  ?>
        </div></td>
        <td><div align="center">
            <?
   
    $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='24' and $tabelx2.status='H' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='24' and $tabelx2.status='I' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld2=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='24' and $tabelx2.status='S' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld3=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='24' and $tabelx2.status='A' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld4=mysqli_num_rows($tdth);
	
	if($jmld >=1 ) {echo "H"; $hd+=1;}
	else if($jmld2 >=1) {echo "I"; $id+=1; }
	else if($jmld3 >=1) {echo "S"; $sd+=1; }
	else if($jmld4 >=1) {echo "A"; $ad+=1;}
	
	
	  
	
   
  ?>
        </div></td>
        <td><div align="center">
            <?
   
    $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='25' and $tabelx2.status='H' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='25' and $tabelx2.status='I' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld2=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='25' and $tabelx2.status='S' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld3=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='25' and $tabelx2.status='A' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld4=mysqli_num_rows($tdth);
	
	if($jmld >=1 ) {echo "H"; $hd+=1;}
	else if($jmld2 >=1) {echo "I"; $id+=1; }
	else if($jmld3 >=1) {echo "S"; $sd+=1; }
	else if($jmld4 >=1) {echo "A"; $ad+=1;}
	
	
	  
	
   
  ?>
        </div></td>
        <td><div align="center">
            <?
   
    $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='26' and $tabelx2.status='H' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='26' and $tabelx2.status='I' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld2=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='26' and $tabelx2.status='S' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld3=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='26' and $tabelx2.status='A' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld4=mysqli_num_rows($tdth);
	
	if($jmld >=1 ) {echo "H"; $hd+=1;}
	else if($jmld2 >=1) {echo "I"; $id+=1; }
	else if($jmld3 >=1) {echo "S"; $sd+=1; }
	else if($jmld4 >=1) {echo "A"; $ad+=1;}
	
	
	  
	
   
  ?>
        </div></td>
        <td><div align="center">
            <?
   
    $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='27' and $tabelx2.status='H' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='27' and $tabelx2.status='I' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld2=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='27' and $tabelx2.status='S' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld3=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='27' and $tabelx2.status='A' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld4=mysqli_num_rows($tdth);
	
	if($jmld >=1 ) {echo "H"; $hd+=1;}
	else if($jmld2 >=1) {echo "I"; $id+=1; }
	else if($jmld3 >=1) {echo "S"; $sd+=1; }
	else if($jmld4 >=1) {echo "A"; $ad+=1;}
	
	
	  
	
   
  ?>
        </div></td>
        <td><div align="center">
            <?
   
    $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='28' and $tabelx2.status='H' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='28' and $tabelx2.status='I' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld2=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='28' and $tabelx2.status='S' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld3=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='28' and $tabelx2.status='A' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld4=mysqli_num_rows($tdth);
	
	if($jmld >=1 ) {echo "H"; $hd+=1;}
	else if($jmld2 >=1) {echo "I"; $id+=1; }
	else if($jmld3 >=1) {echo "S"; $sd+=1; }
	else if($jmld4 >=1) {echo "A"; $ad+=1;}
	
	
	  
	
   
  ?>
        </div></td>
        <td><div align="center">
            <?
   
    $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='29' and $tabelx2.status='H' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='29' and $tabelx2.status='I' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld2=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='29' and $tabelx2.status='S' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld3=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='29' and $tabelx2.status='A' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld4=mysqli_num_rows($tdth);
	
	if($jmld >=1 ) {echo "H"; $hd+=1;}
	else if($jmld2 >=1) {echo "I"; $id+=1; }
	else if($jmld3 >=1) {echo "S"; $sd+=1; }
	else if($jmld4 >=1) {echo "A"; $ad+=1;}
	
	
	  
	
   
  ?>
        </div></td>
        <td><div align="center">
            <?
   
    $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='30' and $tabelx2.status='H' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='30' and $tabelx2.status='I' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld2=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='30' and $tabelx2.status='S' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld3=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='30' and $tabelx2.status='A' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld4=mysqli_num_rows($tdth);
	
	if($jmld >=1 ) {echo "H"; $hd+=1;}
	else if($jmld2 >=1) {echo "I"; $id+=1; }
	else if($jmld3 >=1) {echo "S"; $sd+=1; }
	else if($jmld4 >=1) {echo "A"; $ad+=1;}
	
	
	  
	
   
  ?>
        </div></td>
        <td><div align="center">
            <?
   
    $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='31' and $tabelx2.status='H' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='31' and $tabelx2.status='I' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld2=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='31' and $tabelx2.status='S' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld3=mysqli_num_rows($tdth);
	
	$tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx.tgl_h='31' and $tabelx2.status='A' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld4=mysqli_num_rows($tdth);
	
	if($jmld >=1 ) {echo "H"; $hd+=1;}
	else if($jmld2 >=1) {echo "I"; $id+=1; }
	else if($jmld3 >=1) {echo "S"; $sd+=1; }
	else if($jmld4 >=1) {echo "A"; $ad+=1;}
	
	
	  
	
   
  ?>
        </div></td>
        <td><div align="center">
          <?  
		/* $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx2.status='H' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld=mysqli_num_rows($tdth); */
	echo $hd;
		?>
        </div></td>
        <td><div align="center">
            <?  
		/* $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx2.status='S' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld=mysqli_num_rows($tdth); */
	echo $sd;
		?>
        </div></td>
        <td><div align="center">
            <?  
		/* $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx2.status='I' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld=mysqli_num_rows($tdth); */
	echo $id;
		?>
        </div></td>
        <td><div align="center">
            <?  
		/* $tdth=mysqli_query($koneksi, "SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx.sem_h='$sem' AND $tabelx.bln_h='$blnk' and  
    $tabelx2.status='A' and  $tabelx2.kd_hadir=$tabelx.id_hadir ");
	$jmld=mysqli_num_rows($tdth); */
	echo $ad;
		?>
        </div></td>
      </tr>
      <?
	  $hd=0; $sd=0; $id=0; $ad=0;
    $no+=1;
    }
  ?>
    </table></td>
  </tr>
  <tr>
    <td height="19" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td height="19" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="7%"><div align="center"></div></td>
        <td width="36%">&nbsp;</td>
        <td width="29%">&nbsp;</td>
        <td width="28%">&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
        <td>Mengetahui</td>
        <td>&nbsp;</td>
        <td>Pangkep, <? $th=date("Y"); $dm=date("d"); echo $dm. " ".$blnk." ".$th; ?> </td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
        <td>Kepala Sekolah </td>
        <td>&nbsp;</td>
        <td>Wali Kelas </td>
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
        <td>Zubair, S.Pd.,MA. </td>
        <td>&nbsp;</td>
        <td><?
		
		
	$tampi=mysqli_query($koneksi, "SELECT * FROM master_kelas WHERE kelas='$klsk' ");
    $tpk=mysqli_fetch_assoc($tampi);
	
	$tampi2=mysqli_query($koneksi, "SELECT * FROM wali_kelas WHERE kd_kls='$tpk[kd_kls]' ");
    $tpk3=mysqli_fetch_assoc($tampi2);
	
	$tampi4=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$tpk3[kd_gp]' ");
    $tpk4=mysqli_fetch_assoc($tampi4);
	echo $tpk4['nama_gp'];
	?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>

</body>
</html>
