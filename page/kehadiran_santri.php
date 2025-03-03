<? if($idkusr=="a" || $idkusr=="m" || $idkusr=="i" || $idkusr=="k" || $idkusr=="k" || $idkusr=="w"){  ?>
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
.style1 {color: #FFFFFF}
-->
</style>
</head>
<?
$pknk=$_GET['pknk'];
$klsk=$_GET['klsk'];
$blnk=$_GET['blnk'];
$tgl=$_GET['tgl'];
$kdmpl=$_GET['kdmpl'];
$jam_k=$_GET['jam_k'];

?>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="8" bgcolor="#B3CF70"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="15" height="31">&nbsp;</td>
          <td width="23"><img src="images/collapsed.gif" width="16" height="12" /></td>
          <td width="920">Kehadiran Santri </td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td colspan="8" height="7"></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF"><div align="center"><strong>Tahun Ajaran</strong></div></td>
      <td bgcolor="#DCF3AF"><div align="center"><strong>Semester</strong></div></td>
      <td bgcolor="#DCF3AF"><strong>Kelas</strong></td>
      <td bgcolor="#DCF3AF"><strong>Bulan</strong></td>
      <td bgcolor="#DCF3AF"><strong>Pekan</strong></td>
      <td bgcolor="#DCF3AF"><strong>Tanggal</strong></td>
      <td bgcolor="#DCF3AF"><strong>Mata Pelajaran</strong></td>
      <td bgcolor="#DCF3AF"><strong>Jam</strong></td>
    </tr>
    
    <tr>
      <td width="11%" bgcolor="#DCF3AF"><div align="center"><? echo $thaj; ?></div></td>
      <td width="11%" bgcolor="#DCF3AF"><div align="center"><? echo $sem; ?></div></td>
      <td width="13%" bgcolor="#DCF3AF"><select name="select" onchange="MM_jumpMenu('parent',this,0)">
        <?  if($idkusr=="k" || $idkusr=="m" || $idkusr=="a" || $idkusr=="i"){ ?>  <option value="home.php?home=khs&klsk=s" <? if($klsk=="s"){ echo"selected='selected'"; } ?>>Semua Kelas</option> <? } ?>
          <?
		    if($idkusr=="i"){ $kkls="WHERE kd_kls='$idkelas' ";  }
	      $tampi=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas $kkls");
          while($tpk=mysqli_fetch_assoc($tampi)){  
		  if($idkusr=="i"){ $klsk=$tpk['kelas'];  }
	    ?>
<option value="home.php?home=khs&klsk=<? echo "$tpk[kelas]"; ?>" <? if($klsk=="$tpk[kelas]"){ echo"selected='selected'"; } ?>><? echo $tpk['kelas']; ?></option>
          <? } ?>
      </select></td>
      <td width="11%" bgcolor="#DCF3AF"><select name="menu1" onchange="MM_jumpMenu('parent',this,0)">
		<option value="home.php?home=nilai&dpn_nl2=n2&klsk=<? echo"$klsk&blnk="; ?>" <? if($blnk==""){ echo"selected='selected'"; } ?>>Pilih</option>
          <option value="home.php?home=nilai&dpn_nl2=n2&blnk=Januari&klsk=<? echo"$klsk"; ?>" <? if($blnk=="Januari"){ echo"selected='selected'"; } ?>>Januari</option>
          <option value="home.php?home=nilai&dpn_nl2=n2&blnk=Februari&klsk=<? echo"$klsk"; ?>" <? if($blnk=="Februari"){ echo"selected='selected'"; } ?>>Februari</option>
          <option value="home.php?home=nilai&dpn_nl2=n2&blnk=Maret&klsk=<? echo"$klsk"; ?>" <? if($blnk=="Maret"){ echo"selected='selected'"; } ?>>Maret</option>
          <option value="home.php?home=nilai&dpn_nl2=n2&blnk=April&klsk=<? echo"$klsk"; ?>" <? if($blnk=="April"){ echo"selected='selected'"; } ?>>April</option>
          <option value="home.php?home=nilai&dpn_nl2=n2&blnk=Mei&klsk=<? echo"$klsk"; ?>" <? if($blnk=="Mei"){ echo"selected='selected'"; } ?>>Mei</option>
          <option value="home.php?home=nilai&dpn_nl2=n2&blnk=Juni&klsk=<? echo"$klsk"; ?>" <? if($blnk=="Juni"){ echo"selected='selected'"; } ?>>Juni</option>
          <option value="home.php?home=nilai&dpn_nl2=n2&blnk=Juli&klsk=<? echo"$klsk"; ?>" <? if($blnk=="Juli"){ echo"selected='selected'"; } ?>>Juli</option>
          <option value="home.php?home=nilai&dpn_nl2=n2&blnk=Agustus&klsk=<? echo"$klsk"; ?>" <? if($blnk=="Agustus"){ echo"selected='selected'"; } ?>>Agustus</option>
          <option value="home.php?home=nilai&dpn_nl2=n2&blnk=September&klsk=<? echo"$klsk"; ?>" <? if($blnk=="September"){ echo"selected='selected'"; } ?>>September</option>
          <option value="home.php?home=nilai&dpn_nl2=n2&blnk=Oktober&klsk=<? echo"$klsk"; ?>" <? if($blnk=="Oktober"){ echo"selected='selected'"; } ?>>Oktober</option>
          <option value="home.php?home=nilai&dpn_nl2=n2&blnk=Nopember&klsk=<? echo"$klsk"; ?>" <? if($blnk=="Nopember"){ echo"selected='selected'"; } ?>>Nopember</option>
          <option value="home.php?home=nilai&dpn_nl2=n2&blnk=Desember&klsk=<? echo"$klsk"; ?>" <? if($blnk=="Desember"){ echo"selected='selected'"; } ?>>Desember</option>
      </select></td>
      <td width="13%" bgcolor="#DCF3AF"><select name="menu2" onchange="MM_jumpMenu('parent',this,0)">
          <option value="home.php?home=khs&pknk=&klsk=<? echo"$klsk&blnk=$blnk"; ?>" <? if($pknk==""){ echo"selected='selected'"; } ?>> Pilih </option>
          <option value="home.php?home=khs&pknk=I&klsk=<? echo"$klsk&blnk=$blnk"; ?>" <? if($pknk=="I"){ echo"selected='selected'"; } ?>>I (Pertama)</option>
          <option value="home.php?home=khs&pknk=II&klsk=<? echo"$klsk&blnk=$blnk"; ?>" <? if($pknk=="II"){ echo"selected='selected'"; } ?>>II (Kedua)</option>
          <option value="home.php?home=khs&pknk=III&klsk=<? echo"$klsk&blnk=$blnk"; ?>" <? if($pknk=="III"){ echo"selected='selected'"; } ?>>III (Ketiga)</option>
          <option value="home.php?home=khs&pknk=IV&klsk=<? echo"$klsk&blnk=$blnk"; ?>" <? if($pknk=="IV"){ echo"selected='selected'"; } ?>>IV (Keempat)</option>
          <option value="home.php?home=khs&pknk=V&klsk=<? echo"$klsk&blnk=$blnk"; ?>" <? if($pknk=="V"){ echo"selected='selected'"; } ?>>V (Lima)</option>
        </select></td>
      <td width="6%" bgcolor="#DCF3AF"><select name="menu3" onchange="MM_jumpMenu('parent',this,0)">
	  
	  <option value="home.php?home=khs&klsk=<? echo"$klsk&blnk=$blnk&pknk=$pknk&tgl="; ?>" <? if($tgl==""){ echo"selected='selected'"; } ?>>Pilih</option>
	  
      <option value="home.php?home=khs&klsk=<? echo"$klsk&blnk=$blnk&pknk=$pknk&tgl=01"; ?>" <? if($tgl=="01"){ echo"selected='selected'"; } ?>>01</option>
	  <option value="home.php?home=khs&klsk=<? echo"$klsk&blnk=$blnk&pknk=$pknk&tgl=02"; ?>" <? if($tgl=="02"){ echo"selected='selected'"; } ?>>02</option>
	  <option value="home.php?home=khs&klsk=<? echo"$klsk&blnk=$blnk&pknk=$pknk&tgl=03"; ?>" <? if($tgl=="03"){ echo"selected='selected'"; } ?>>03</option>
	  <option value="home.php?home=khs&klsk=<? echo"$klsk&blnk=$blnk&pknk=$pknk&tgl=04"; ?>" <? if($tgl=="04"){ echo"selected='selected'"; } ?>>04</option>
	  <option value="home.php?home=khs&klsk=<? echo"$klsk&blnk=$blnk&pknk=$pknk&tgl=05"; ?>" <? if($tgl=="05"){ echo"selected='selected'"; } ?>>05</option>
	  <option value="home.php?home=khs&klsk=<? echo"$klsk&blnk=$blnk&pknk=$pknk&tgl=06"; ?>" <? if($tgl=="06"){ echo"selected='selected'"; } ?>>06</option>
	  <option value="home.php?home=khs&klsk=<? echo"$klsk&blnk=$blnk&pknk=$pknk&tgl=07"; ?>" <? if($tgl=="07"){ echo"selected='selected'"; } ?>>07</option>
	  <option value="home.php?home=khs&klsk=<? echo"$klsk&blnk=$blnk&pknk=$pknk&tgl=08"; ?>" <? if($tgl=="08"){ echo"selected='selected'"; } ?>>08</option>
	  <option value="home.php?home=khs&klsk=<? echo"$klsk&blnk=$blnk&pknk=$pknk&tgl=09"; ?>" <? if($tgl=="09"){ echo"selected='selected'"; } ?>>09</option>
	  <option value="home.php?home=khs&klsk=<? echo"$klsk&blnk=$blnk&pknk=$pknk&tgl=10"; ?>" <? if($tgl=="10"){ echo"selected='selected'"; } ?>>10</option>
	  <option value="home.php?home=khs&klsk=<? echo"$klsk&blnk=$blnk&pknk=$pknk&tgl=11"; ?>" <? if($tgl=="11"){ echo"selected='selected'"; } ?>>11</option>
	  <option value="home.php?home=khs&klsk=<? echo"$klsk&blnk=$blnk&pknk=$pknk&tgl=12"; ?>" <? if($tgl=="12"){ echo"selected='selected'"; } ?>>12</option>
	  <option value="home.php?home=khs&klsk=<? echo"$klsk&blnk=$blnk&pknk=$pknk&tgl=13"; ?>" <? if($tgl=="13"){ echo"selected='selected'"; } ?>>13</option>
	  <option value="home.php?home=khs&klsk=<? echo"$klsk&blnk=$blnk&pknk=$pknk&tgl=14"; ?>" <? if($tgl=="14"){ echo"selected='selected'"; } ?>>14</option>
	  <option value="home.php?home=khs&klsk=<? echo"$klsk&blnk=$blnk&pknk=$pknk&tgl=15"; ?>" <? if($tgl=="15"){ echo"selected='selected'"; } ?>>15</option>
	  <option value="home.php?home=khs&klsk=<? echo"$klsk&blnk=$blnk&pknk=$pknk&tgl=16"; ?>" <? if($tgl=="16"){ echo"selected='selected'"; } ?>>16</option>
	  <option value="home.php?home=khs&klsk=<? echo"$klsk&blnk=$blnk&pknk=$pknk&tgl=17"; ?>" <? if($tgl=="17"){ echo"selected='selected'"; } ?>>17</option>
	  <option value="home.php?home=khs&klsk=<? echo"$klsk&blnk=$blnk&pknk=$pknk&tgl=18"; ?>" <? if($tgl=="18"){ echo"selected='selected'"; } ?>>18</option>
	  <option value="home.php?home=khs&klsk=<? echo"$klsk&blnk=$blnk&pknk=$pknk&tgl=19"; ?>" <? if($tgl=="19"){ echo"selected='selected'"; } ?>>19</option>
	  <option value="home.php?home=khs&klsk=<? echo"$klsk&blnk=$blnk&pknk=$pknk&tgl=20"; ?>" <? if($tgl=="20"){ echo"selected='selected'"; } ?>>20</option>
	  <option value="home.php?home=khs&klsk=<? echo"$klsk&blnk=$blnk&pknk=$pknk&tgl=21"; ?>" <? if($tgl=="21"){ echo"selected='selected'"; } ?>>21</option>
	  <option value="home.php?home=khs&klsk=<? echo"$klsk&blnk=$blnk&pknk=$pknk&tgl=22"; ?>" <? if($tgl=="22"){ echo"selected='selected'"; } ?>>22</option>
	  <option value="home.php?home=khs&klsk=<? echo"$klsk&blnk=$blnk&pknk=$pknk&tgl=23"; ?>" <? if($tgl=="23"){ echo"selected='selected'"; } ?>>23</option>
	  <option value="home.php?home=khs&klsk=<? echo"$klsk&blnk=$blnk&pknk=$pknk&tgl=24"; ?>" <? if($tgl=="24"){ echo"selected='selected'"; } ?>>24</option>
	  <option value="home.php?home=khs&klsk=<? echo"$klsk&blnk=$blnk&pknk=$pknk&tgl=25"; ?>" <? if($tgl=="25"){ echo"selected='selected'"; } ?>>25</option>
	  <option value="home.php?home=khs&klsk=<? echo"$klsk&blnk=$blnk&pknk=$pknk&tgl=26"; ?>" <? if($tgl=="26"){ echo"selected='selected'"; } ?>>26</option>
	  <option value="home.php?home=khs&klsk=<? echo"$klsk&blnk=$blnk&pknk=$pknk&tgl=27"; ?>" <? if($tgl=="27"){ echo"selected='selected'"; } ?>>27</option>
	  <option value="home.php?home=khs&klsk=<? echo"$klsk&blnk=$blnk&pknk=$pknk&tgl=28"; ?>" <? if($tgl=="28"){ echo"selected='selected'"; } ?>>28</option>
	  <option value="home.php?home=khs&klsk=<? echo"$klsk&blnk=$blnk&pknk=$pknk&tgl=29"; ?>" <? if($tgl=="29"){ echo"selected='selected'"; } ?>>29</option>
	  <option value="home.php?home=khs&klsk=<? echo"$klsk&blnk=$blnk&pknk=$pknk&tgl=30"; ?>" <? if($tgl=="30"){ echo"selected='selected'"; } ?>>30</option>
	  <option value="home.php?home=khs&klsk=<? echo"$klsk&blnk=$blnk&pknk=$pknk&tgl=31"; ?>" <? if($tgl=="31"){ echo"selected='selected'"; } ?>>31</option>
        </select></td>
      <td width="20%" bgcolor="#DCF3AF"><select name="select3" onchange="MM_jumpMenu('parent',this,0)">
	  
	  <option value="home.php?home=khs&klsk=<? echo"$klsk&blnk=$blnk&pknk=$pknk&tgl=$tgl&kdmpl="; ?>" <? if($kdmpl==""){ echo"selected='selected'"; } ?>>Pilih</option>
	  
	  <?
	     $mpl=mysqli_query($koneksi, "SELECT kd_mp,nama_mp FROM mata_pelajaran WHERE ket='MD' OR KET='MP' ORDER BY nama_mp");
		 while($tmpl=mysqli_fetch_assoc($mpl)){ 
	  ?>
          <option value="home.php?home=khs&klsk=<? echo"$klsk&blnk=$blnk&pknk=$pknk&tgl=$tgl&kdmpl=$tmpl[kd_mp]"; ?>" <? if($kdmpl=="$tmpl[kd_mp]"){ echo"selected='selected'"; } ?>><? echo $tmpl['nama_mp']; ?></option>
	 <? } ?>	  
        </select></td>
      <td width="15%" bgcolor="#DCF3AF"><select name="select2" onchange="MM_jumpMenu('parent',this,0)">
	  
	  <option value="home.php?home=khs&klsk=<? echo"$klsk&blnk=$blnk&pknk=$pknk&tgl=$tgl&kdmpl=$kdmpl&jam_k="; ?>" <? if($jam_k==""){ echo"selected='selected'"; } ?>>Pilih</option>
	  
        <?
	     $jaml=mysqli_query($koneksi, "SELECT * FROM tb_jam ");
		 while($tjam=mysqli_fetch_assoc($jaml)){ 
	    ?>
          <option value="home.php?home=khs&klsk=<? echo"$klsk&blnk=$blnk&pknk=$pknk&tgl=$tgl&kdmpl=$kdmpl&jam_k=$tjam[kd_jam]"; ?>" <? if($jam_k=="$tjam[kd_jam]"){ echo"selected='selected'"; } ?>><? echo $tjam['kd_jam']; ?></option>
	 <? } ?>
      </select></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
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
    </tr>
    <tr>
      <td colspan="8" bgcolor="#DCF3AF">&nbsp;</td>
    </tr>
    <tr>
      <td height="19" colspan="8" valign="top" bgcolor="#DCF3AF">
      <div align="right"><strong>Mata Pelajaran Diknas </strong>[<a href="page/report_kehadiran_santri_b.php?<? echo"klsk=$klsk&blnk=$blnk&pknk=$pknk&tglx=$tgl"; ?>" class="lk" target="_blank">Rekap Absen</a>]  [ <a href="page/report_kehadiran.php?<? echo"klsk=$klsk&blnk=$blnk&pknk=$pknk"; ?>" class="lk" target="_blank">Rekap Absensi / Pekan </a>&nbsp;|&nbsp;<a href="page/report_keh_pbln.php?<? echo"klsk=$klsk&blnk=$blnk"; ?>" class="lk" target="_blank">Rekap Absensi / Bulan </a>&nbsp;| &nbsp;<a href="page/report_keh_psms.php?<? echo"klsk=$klsk"; ?>" class="lk" target="_blank">Rekap Absensi / Semester </a>&nbsp;|&nbsp;<a href="page/report_keh_pthn.php?<? echo"klsk=$klsk"; ?>" class="lk" target="_blank">Rekap Absensi / Tahun </a>]&nbsp;&nbsp;</div></td>
    </tr>
    <tr>
      <td colspan="8" bgcolor="#DCF3AF"><div align="right"><strong>Mata Pelajaran Kepondokan </strong> [ <a href="page/report_mp_pdk_prpkn.php?<? echo"klsk=$klsk&blnk=$blnk&pknk=$pknk"; ?>" class="lk" target="_blank">Rekap Absensi / Pekan </a>&nbsp;|&nbsp;<a href="page/report_kehadiran.php?<? echo"klsk=$klsk&blnk=$blnk&pknk=$pknk"; ?>" class="lk"></a><a href="page/report_mp_pdk_prbln.php?<? echo"klsk=$klsk&blnk=$blnk"; ?>" class="lk" target="_blank">Rekap Absensi / Bulan </a>&nbsp;| &nbsp;<a href="page/report_mp_pdk_psms.php?<? echo"klsk=$klsk"; ?>" class="lk" target="_blank">Rekap Absensi / Semester </a>&nbsp;|&nbsp;<a href="page/report_mp_pdk_pthn.php?<? echo"klsk=$klsk"; ?>" class="lk" target="_blank">Rekap Absensi / Tahun </a>]&nbsp;&nbsp;</div></td>
    </tr>
    <tr>
      <td colspan="8" bgcolor="#DCF3AF">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="8" valign="top" bgcolor="#DCF3AF"><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#B3CF70">
        <tr>
          <td width="11%" rowspan="3" bgcolor="#ACD75E"><div align="center">Nis</div></td>
          <td width="30%" rowspan="3" bgcolor="#ACD75E"><div align="center">Nama</div></td>
          <td colspan="5" bgcolor="#666600"><div align="center"><span class="style1">Kehadiran Santri Bulan <? echo $blnk; ?></span></div></td>
        </tr>
        <tr>
          <td colspan="5" bgcolor="#666633"><div align="center" class="style1">Pekan <? echo $pknk; ?></div></td>
          </tr>
        <tr>
          <td width="9%" bgcolor="#CCCC99" <? if($tps4['status']=='H'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?rekam=Simpans&<? echo"klsk=$klsk&nis_k=$tp[nis]&blnk=$blnk&pknk=$pknk&tgl=$tgl&kdmpl=$kdmpl&jam_k=$jam_k&status=H"; ?>">Hadir</a></div></td>
          <td width="9%" bgcolor="#CCCC99" <? if($tps4['status']=='I'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?rekam=Simpans&<? echo"klsk=$klsk&nis_k=$tp[nis]&blnk=$blnk&pknk=$pknk&tgl=$tgl&kdmpl=$kdmpl&jam_k=$jam_k&status=I"; ?>">Izin</a></div></td>
          <td width="9%" bgcolor="#CCCC99" <? if($tps4['status']=='S'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?rekam=Simpans&<? echo"klsk=$klsk&nis_k=$tp[nis]&blnk=$blnk&pknk=$pknk&tgl=$tgl&kdmpl=$kdmpl&jam_k=$jam_k&status=S"; ?>">Sakit</a></div></td>
          <td width="9%" bgcolor="#CCCC99" <? if($tps4['status']=='A'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?rekam=Simpans&<? echo"klsk=$klsk&nis_k=$tp[nis]&blnk=$blnk&pknk=$pknk&tgl=$tgl&kdmpl=$kdmpl&jam_k=$jam_k&status=A"; ?>">Alpa</a></div></td>
          <td width="23%" bgcolor="#CCCC99"><div align="center"></div></td>
          </tr>
		 <?
	      if($idkusr=="i"){
		  $tamr=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kd_kls='$idkelas'  ");
		  $rr=mysqli_fetch_assoc($tamr);
		  
$tam=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st FROM tb_santri WHERE kelas_st='$rr[kelas]' "); }          
if($idkusr=="m" || $idkusr=="a" || $idkusr=="k" || $idkusr=="w"){ if($klsk!=""){$tpklsk="WHERE kelas_st='$klsk' AND status='a'"; }
if($klsk=="s"){$tpklsk="WHERE status='a'"; }
$tam=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st,status FROM tb_santri $tpklsk AND status='a' ORDER BY nama"); }
		  while($tp=mysqli_fetch_assoc($tam)){
		  
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
		  
		  if($tp['kelas_st']=="XI"){ $tabelx="tb_hadir_11a"; $tabelx2="detail_hadir_11a"; }
		  if($tp['kelas_st']=="XIB"){ $tabelx="tb_hadir_11b"; $tabelx2="detail_hadir_11b"; }
		  
		  $tam2=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$tp[kelas_st]'  ");
		  $tps=mysqli_fetch_assoc($tam2);
		  
		  
		  $tam3=mysqli_query($koneksi, "SELECT * FROM $tabelx WHERE thn_ajrh='$thaj' AND sem_h='$sem' AND bln_h='$blnk' AND pkn_h='$pknk' AND tgl_h='$tgl' AND nis_h='$tp[nis]'");
		  $tps3=mysqli_fetch_assoc($tam3); 
		  
		  $tam4=mysqli_query($koneksi, "SELECT * FROM $tabelx2 WHERE kd_hadir='$tps3[id_hadir]' AND jam='$jam_k' AND kd_mpl='$kdmpl' ");
		  $tps4=mysqli_fetch_assoc($tam4);
	    ?>
        <tr> 
          <td bgcolor="#FFFFFF"><div align="center"><? echo $tp['nis']; ?></div></td>
          <td bgcolor="#FFFFFF"><? echo $tp['nama']; ?></td>
          <td <? if($tps4['status']=='H'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?rekam=Simpan&<? echo"klsk=$klsk&nis_k=$tp[nis]&blnk=$blnk&pknk=$pknk&tgl=$tgl&kdmpl=$kdmpl&jam_k=$jam_k&status=H&#tetap"; ?>" name="tetap">H</a></div></td>
          <td <? if($tps4['status']=='I'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?rekam=Simpan&<? echo"klsk=$klsk&nis_k=$tp[nis]&blnk=$blnk&pknk=$pknk&tgl=$tgl&kdmpl=$kdmpl&jam_k=$jam_k&status=I&#tetap"; ?>" name="tetap">I</a></div></td>
          <td <? if($tps4['status']=='S'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?rekam=Simpan&<? echo"klsk=$klsk&nis_k=$tp[nis]&blnk=$blnk&pknk=$pknk&tgl=$tgl&kdmpl=$kdmpl&jam_k=$jam_k&status=S&#tetap"; ?>" name="tetap">S</a></div></td>
          <td <? if($tps4['status']=='A'){ echo"bgcolor='#CCCCCC'"; }?>><div align="center"><a href="page/act_dt_kehadiran.php?rekam=Simpan&<? echo"klsk=$klsk&nis_k=$tp[nis]&blnk=$blnk&pknk=$pknk&tgl=$tgl&kdmpl=$kdmpl&jam_k=$jam_k&status=A&#tetap"; ?>" name="tetap">A</a></div></td>
          <td bgcolor="#FFFFFF"><div align="center"><a href="page/act_dt_kehadiran.php?rekam=hapus&<? echo"klsk=$klsk&nis_k=$tp[nis]&blnk=$blnk&pknk=$pknk&tgl=$tgl&kdmpl=$kdmpl&jam_k=$jam_k&status=$status&#tetap"; ?>" name="tetap">BATAL</a></div></td>
          </tr>
		  <tr bgcolor="#006633" height="2"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
		<? } ?>
        
      </table></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
    </tr>
  </table>
</form>

</body>
</html>
<? } ?>