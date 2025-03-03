<? 
include("koneksi.php");
include("function.php");
   $home=$_GET['home'];
   $phk=$_GET['phk'];
   $dpn_pg=$_GET['dpn_pg'];
   $dpn_st=$_GET['dpn_st'];
   $id_pgk=$_GET['id_pgk'];
   $id_kgp=$_GET['id_kgp'];
   $klsxk=$_GET['klsxk']; 
   $klsk=$_GET['klsk']; 
   $klsx=$_GET['klsx']; 
   $dpn_nl1=$_GET['dpn_nl1'];
   $dpn_nl3=$_GET['dpn_nl3'];
   $nisk=$_GET['nisk'];
   $idkusr=$_COOKIE['idkusr'];  
   $idgurp=$_COOKIE['idgurp'];
   $idkelas=$_COOKIE['idkelas'];
   $thaj=$_COOKIE['thaj'];
   $sem=$_COOKIE['sem']; 
   $qbln=$_COOKIE['qbln']; 
   $blns=$_COOKIE['blns']; 
   $pgr=$_GET['pgr'];
   $taj=$_GET['taj'];
   $id_gk=$_GET['id_gk'];
   $id_pnj=$_GET['id_pnj'];
   $blnk=$_GET['blnk'];
   $tkt=$_GET['tkt']; 

if (isset($_SESSION['pesan'])) {
   echo "<script>alert('".$_SESSION['pesan']."');</script>";
   unset($_SESSION['pesan']);
}

if(!empty($idgurp) and !empty($idkusr)){  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistem Informasi Sekolah PPMI Shohwatul Is'ad</title>
<style type="text/css">
td {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	text-decoration: none;
	color: #333333;
}
select {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	text-decoration: none;
	border: 1px solid #CCCCCC;
}

.td2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #FFFFFF;
	text-decoration: none;
}
.inputright {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	height: 18px;
	width: auto;
	text-align: right;

}
.hkecil {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
	text-transform: none;

}
.lk {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #eeeeee;
	text-decoration: none;
	font-weight: bold;
}
a:hover {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	text-decoration: none;
	color: #CCCCCC;
}
.lk2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #000000;
	text-decoration: none;
	font-weight: bold;
}
.style3 {
	color: #FFFFFF;
	font-weight: bold;
}
.lk {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #000000;
}
.lk1 {	text-decoration: none;
}

.lk4 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #FFFFFF;
	text-decoration: none;
	font-weight: bold;
}
.style5 {color: #666666; font-weight: bold; }
</style>

<script type="text/javascript">
function preventBack()
{window.history.forward();}
setTimeout("preventBack(),0");
window.onunload=function(){null};

function startTime()
{
var today=new Date();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();
// add a zero in front of numbers<10
m=checkTime(m);
s=checkTime(s);
document.getElementById('txt').innerHTML=h+":"+m+":"+s;
t=setTimeout('startTime()',500);
}

function checkTime(i)
{
if (i<10)
  {
  i="0" + i;
  }
return i;
}
</script>
</head>
<?
   $tampil=mysqli_query($koneksi, "SELECT id_gp,nip,nama_gp,foto_gp FROM guru_pegawai WHERE id_gp='$idgurp' ");
   $tp=mysqli_fetch_assoc($tampil);
?>
<body onload="startTime()">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  
  <tr>
    <td colspan="2" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      
      
      <tr>
        <td width="21%">&nbsp;</td>
        <td width="38%">&nbsp;</td>
        <td width="21%">&nbsp;</td>
        <td width="20%">&nbsp;</td>
      </tr>
      
      <tr>
        <td height="28" background="images/entry_meta_bg.jpg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="13%"><div align="center"><img src="images/Timestamp.gif" width="17" height="14" align="absmiddle" /></div></td>
            <td width="35%"><div id="txt"></div></td>
            <td width="52%"><img src="images/History.jpg" width="16" height="16" align="absbottom" /> <? echo date("d-M-Y"); ?></td>
          </tr>
        </table></td>
        <td background="images/entry_meta_bg.jpg">&nbsp;</td>
        <td background="images/entry_meta_bg.jpg">&nbsp;</td>
        <td background="images/entry_meta_bg.jpg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="60%"><div align="right"><img src="images/home.gif" width="22" height="18" align="absmiddle" /> <a href="home.php" class="lk"> Depan</a> </div></td>
            <td width="40%"><div align="center"><img src="images/btn_projmgr_delete.gif" width="18" height="18" align="absmiddle" /> <a href="act_login.php?logout=1" class="lk">Keluar</a></div></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  
  <tr>
    <td width="18%" valign="top"><table width="240" border="0" align="center" cellpadding="0" cellspacing="1" bordercolor="#B3CF70">
        <tr>
          <td height="73" colspan="2" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td bgcolor="#eeeeee">&nbsp;</td>
            </tr>
            <tr>
              <td bgcolor="#eeeeee"><div align="center"><img src="foto_gp/<? echo $tp['foto_gp']; ?>" width="117" height="155"/></div></td>
            </tr>
            <tr height="15">
              <td bgcolor="#eeeeee">&nbsp;</td>
            </tr>
            <tr>
              <td bgcolor="#CCCCCC"><div align="center"><b><font size="+1"><? echo $tp['nama_gp']; ?></font></b></div></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr> 
          <td colspan="2" background="images/suckerfish_yellow.png" bgcolor="#B3CF70"><span class="style3">&nbsp;<img src="images/joined_lg.gif" width="30" height="30" align="absmiddle" />Operator & Tata 
            Usaha </span> </td>
        </tr>
        <tr> 
          <td height="1" colspan="2" bordercolor="#FFFFFF"></td>
        </tr>
        
        <tr> 
          <td width="9%" bordercolor="#FFFFFF"><div align="center"><img src="images/geotag_small.png" /></div></td>
          <td width="91%" bgcolor="#FFFFFF"><a href="<? if($idkusr=="u" || $idkusr=="m" || $idkusr=="k" || $idkusr=="d"){ echo "home.php?home=st"; }else{ echo"home.php?phk=1"; } ?>" class="lk">Data Pribadi Santri</a></td>
        </tr>
        <tr>
          <td bordercolor="#FFFFFF"><div align="center"><img src="images/geotag_small.png" /></div></td>
          <td bgcolor="#FFFFFF"><a href="<? if($idkusr=="a" || $idkusr=="m" || $idkusr=="k" || $idkusr=="i" || $idkusr=="w" || $idkusr=="d" || $idkusr=="u"){ echo "home.php?home=al"; }else{ echo"home.php?phk=1"; } ?>" class="lk">Alumni</a></td>
        </tr>
        
        <tr>
          <td bordercolor="#FFFFFF">&nbsp;</td>
          <td></td>
        </tr>
        <tr>
          <td height="29" colspan="2" bordercolor="#FFFFFF" background="images/suckerfish_yellow.png" bgcolor="#B3CF70">&nbsp;<span class="style3"><img src="images/ico_myspace.gif" align="absmiddle" />&nbsp; Bimbingan Konseling</span></td>
        </tr>
        <tr>
          <td colspan="2" bordercolor="#FFFFFF" height="1"></td>
        </tr>
        <tr>
          <td bordercolor="#FFFFFF"><div align="center"><img src="images/geotag_small.png"  /></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><a href="<? if($idkusr=="a" || $idkusr=="m" || $idkusr=="k" || $idkusr=="i" || $idkusr=="w" || $idkusr=="d"){ echo "home.php?home="; }else{ echo"home.php?phk=1"; } ?>" class="lk">Data Psikologi Santri</a></td>
        </tr>
        <tr>
          <td bordercolor="#FFFFFF"><div align="center"><img src="images/geotag_small.png"  /></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><a href="<? if($idkusr=="a" || $idkusr=="m" || $idkusr=="k" || $idkusr=="i" || $idkusr=="w" || $idkusr=="d"){ echo "home.php?home="; }else{ echo"home.php?phk=1"; } ?>" class="lk">Data Pelayanan BK</a></td>
        </tr>
        <tr> 
          <td bordercolor="#FFFFFF">&nbsp;</td>
          <td bordercolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr> 
          <td height="28" colspan="2" bgcolor="#B3CF70" background="images/suckerfish_yellow.png"><span class="style3">&nbsp;<img src="images/open.gif" width="23" height="18" align="absmiddle" />&nbsp;Kesiswaan</span></td>
        </tr>
        
        <tr> 
          <td bordercolor="#FFFFFF"><div align="center"><img src="images/geotag_small.png"  /></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><a href="<? if($idkusr=="a" || $idkusr=="k" || $idkusr=="m" || $idkusr=="d" || $idkusr=="u"){ echo "home.php?home=kls&dpn_kls1=k1"; }else{ echo"home.php?phk=1"; } ?>" class="lk">Kelas</a></td>
        </tr>
        <tr> 
          <td bordercolor="#FFFFFF"><div align="center"><img src="images/geotag_small.png" /></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><a href="<? if($idkusr=="a" || $idkusr=="m" || $idkusr=="k" || $idkusr=="d" || $idkusr=="u"){ echo "home.php?home=pbk"; }else{ echo"home.php?phk=1"; } ?>" class="lk">Pegembangan 
            bakat / Eskul</a> </td>
        </tr>
        <tr>
          <td bordercolor="#FFFFFF"><img src="images/geotag_small.png" /></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><a href="<? if($idkusr=="a" || $idkusr=="m" || $idkusr=="k" || $idkusr=="d"){ echo "home.php?home=nilai&dpn_n26=n26"; }else{ echo"home.php?phk=1"; } ?>" class="lk">Nilai KTI (Karya Tulis Ilmia)</a></td>
        </tr>
        <tr> 
          <td bordercolor="#FFFFFF"><div align="center"><img src="images/geotag_small.png" /></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><a href="<? if($idkusr=="a" || $idkusr=="m" || $idkusr=="k" || $idkusr=="d"){ echo "home.php?home=prpl&pgr=2"; }else{ echo"home.php?phk=1"; } ?>" class="lk">Pelanggaran / Prestasi di Sekolah</a></td>
        </tr>
        <tr> 
          <td bordercolor="#FFFFFF">&nbsp;</td>
          <td bordercolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr> 
          <td colspan="2" bgcolor="#B3CF70" background="images/suckerfish_yellow.png"><span class="style3"><img src="images/review_shared.gif" width="30" height="30" align="absmiddle" />&nbsp;Kurikulum</span></td>
        </tr>
        <tr> 
          <td height="16" bordercolor="#FFFFFF"><div align="center"><img src="images/geotag_small.png"  /></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><a href="<? if($idkusr=="r" || $idkusr=="m" || $idkusr=="k" || $idkusr=="d"){ echo "home.php?home=rst&rst1=k1"; }else{ echo"home.php?phk=1"; } ?>" class="lk">Roster</a></td>
        </tr>
        <tr> 
          <td bordercolor="#FFFFFF"><div align="center"><img src="images/geotag_small.png"  /></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><a href="<? if($idkusr=="r" || $idkusr=="m" || $idkusr=="k" || $idkusr=="d"){ echo "home.php?home=mp"; }else{ echo"home.php?phk=1"; } ?>" class="lk">Mata 
            Pelajaran</a></td>
        </tr>
        
        <tr>
          <td height="23" bordercolor="#FFFFFF"><img src="images/geotag_small.png"></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><a href="<? if($idkusr=="r" || $idkusr=="m" || $idkusr=="k" || $idkusr=="i" || $idkusr=="d" || $idkusr=="u"){ echo "home.php?home=legr"; }else{ echo"home.php?phk=1"; } ?>" class="lk">Leger</a></td>
        </tr>
        <tr> 
          <td bordercolor="#FFFFFF"><div align="center"></div></td>
          <td bordercolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr> 
          <td colspan="2" bordercolor="#FFFFFF" bgcolor="#B3CF70" background="images/suckerfish_yellow.png"><span class="style3"><img src="images/sent_lg.gif" width="30" height="30" align="absmiddle" />&nbsp;Kesantrian</span></td>
        </tr>
        <tr> 
          <td height="16" bordercolor="#FFFFFF"><div align="center"><img src="images/geotag_small.png"  /></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><a href="<? if($idkusr=="m" || $idkusr=="s" || $idkusr=="d"){ echo "home.php?home=prpl&pgr=1"; }else{ echo"home.php?phk=1"; } ?>" class="lk">Pelanggaran/Prestasi di Asrama</a></td>
        </tr>
        <tr>
          <td bordercolor="#FFFFFF"><div align="center"><img src="images/geotag_small.png" /></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><a href="<? if($idkusr=="m" || $idkusr=="s" || $idkusr=="d"){ echo "home.php?home="; }else{ echo"home.php?phk=1"; } ?>" class="lk">Perizinan Santri</a></td>
        </tr>
        <tr>
          <td bordercolor="#FFFFFF"><div align="center"><img src="images/geotag_small.png" /></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><a href="<? if($idkusr=="m" || $idkusr=="s" || $idkusr=="f" || $idkusr=="d"){ echo "home.php?home=nilai&dpn_n21=n21"; }else{ echo"home.php?phk=1"; } ?>" class="lk">Catatan Wali Asrama </a></td>
        </tr>
        <tr>
          <td bordercolor="#FFFFFF"><div align="center"><img src="images/geotag_small.png" /></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><a href="<? if($idkusr=="m" || $idkusr=="s" || $idkusr=="f" || $idkusr=="d" || $idkusr=="r"){ echo "home.php?home=nilai&dpn_n22=n22"; }else{ echo"home.php?phk=1"; } ?>" class="lk">Rangking Karakter</a></td>
        </tr>
        <tr>
          <td bordercolor="#FFFFFF"><div align="center"><img src="images/geotag_small.png" /></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><a href="<? if($idkusr=="m" || $idkusr=="s" || $idkusr=="f" || $idkusr=="d"){ echo "home.php?home=nilai&dpn_n20=n20"; }else{ echo"home.php?phk=1"; } ?>" class="lk">Penilaian Karakter</a></td>
        </tr>
        <tr>
          <td bordercolor="#FFFFFF"><div align="center"><img src="images/geotag_small.png" /></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><a href="<? if($idkusr=="m" || $idkusr=="s" || $idkusr=="f" || $idkusr=="d"){ echo "home.php?home=nilai&dpn_n23=n23"; }else{ echo"home.php?phk=1"; } ?>" class="lk">Sortir Nilaian Karakter</a></td>
        </tr>
        <tr>
          <td bordercolor="#FFFFFF"><img src="images/geotag_small.png" /></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><a href="<? if($idkusr=="m" || $idkusr=="d"){ echo "home.php?home=nilai&dpn_n24=n24"; }else{ echo"home.php?phk=1"; } ?>" class="lk">Rekap Penilaian Karakter </a></td>
        </tr>
        <tr> 
          <td bordercolor="#FFFFFF"><div align="center"></div></td>
          <td bordercolor="#FFFFFF" height="10"></td>
        </tr>
        <tr> 
          <td height="26" colspan="2" bordercolor="#FFFFFF" bgcolor="#B3CF70" background="images/suckerfish_yellow.png">&nbsp;<img src="images/RecordsetStatistics.gif" width="18" height="18" align="absmiddle" />&nbsp; 
            <span class="style3">Keuangan</span> </td>
        </tr>
        <tr>
          <td colspan="2" bordercolor="#FFFFFF" height="2"></td>
        </tr>
        <tr> 
          <td bordercolor="#FFFFFF"><div align="center"><img src="images/geotag_small.png" /></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><a href="<? if($idkusr=="g" || $idkusr=="m" || $idkusr=="d"){ echo "home.php?home=byr"; }else{ echo"home.php?phk=1"; } ?>" class="lk">Pemasukan</a> </td>
        </tr>
        <tr>
          <td bordercolor="#FFFFFF"><div align="center"><img src="images/geotag_small.png" /></div></td>
          <td bordercolor="#FFFFFF"><a href="<? if($idkusr=="g" || $idkusr=="m" || $idkusr=="d"){ echo "home.php?home=pgrl"; }else{ echo"home.php?phk=1"; } ?>" class="lk">Pengeluaran</a></td>
        </tr>
        <tr> 
          <td bordercolor="#FFFFFF"><div align="center"><img src="images/geotag_small.png" /></div></td>
          <td bordercolor="#FFFFFF"><a href="<? if($idkusr=="g" || $idkusr=="m" || $idkusr=="d"){ echo "home.php?home=lkeu"; }else{ echo"home.php?phk=1"; } ?>" class="lk">Laporan</a></td>
        </tr>
        <tr> 
          <td height="30" colspan="2" bordercolor="#FFFFFF" bgcolor="#B3CF70" background="images/suckerfish_yellow.png"><span class="style3">&nbsp;<img src="images/c.gif" width="20" height="22" align="absmiddle" />&nbsp;Wali 
            Kelas / Guru </span></td>
        </tr>
        <tr> 
          <td bordercolor="#FFFFFF"><div align="center"><img src="images/geotag_small.png" /></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><a href="<? if($idkusr=="i" || $idkusr=="m" || $idkusr=="k" || $idkusr=="p" || $idkusr=="r" || $idkusr=="d" || $idkusr=="u"){ echo "home.php?home=nilai&dpn_nl1=n1"; }else{ echo"home.php?phk=1"; } ?>" class="lk">Nilai 
            Santri KTSP </a></td>
        </tr>
        <tr>
          <td bordercolor="#FFFFFF"><div align="center"><img src="images/geotag_small.png"></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><a href="<? if($idkusr=="i" || $idkusr=="m" || $idkusr=="k" || $idkusr=="p" || $idkusr=="r" || $idkusr=="d" || $idkusr=="u"){ echo "home.php?home=nilai&dpn_n25=n25"; }else{ echo"home.php?phk=1"; } ?>" class="lk">Nilai 
          K 13 </a></td>
        </tr>
        <tr>
          <td bordercolor="#FFFFFF"><div align="center"><img src="images/geotag_small.png"  /></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><a href="<? if($idkusr=="i" || $idkusr=="m" || $idkusr=="k" || $idkusr=="p" || $idkusr=="a" || $idkusr=="d" || $idkusr=="r"){ echo "home.php?home=nilai&dpn_nl5=n5"; }else{ echo"home.php?phk=1"; } ?>" class="lk">Nilai Keterampilan </a><a href="<? if($idkusr=="i" || $idkusr=="m" || $idkusr=="k" || $idkusr=="p" || $idkusr=="a" || $idkusr=="d" || $idkusr=="r" || $idkusr=="u"){ echo "home.php?home=nilai&dpn_nl2=n2"; }else{ echo"home.php?phk=1"; } ?>" class="lk"></a></td>
        </tr>
        <tr>
          <td bordercolor="#FFFFFF"><div align="center"><img src="images/geotag_small.png"  /></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><a href="<? if($idkusr=="i" || $idkusr=="m" || $idkusr=="k" || $idkusr=="p" || $idkusr=="a" || $idkusr=="d" || $idkusr=="r"){ echo "home.php?home=nilai&dpn_nl3=n3"; }else{ echo"home.php?phk=1"; } ?>" class="lk">Nilai Eskul</a></td>
        </tr>
        <tr>
          <td bordercolor="#FFFFFF"><div align="center"><img src="images/geotag_small.png" /></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><a href="<? if($idkusr=="i" || $idkusr=="m" || $idkusr=="k" || $idkusr=="p" || $idkusr=="a" || $idkusr=="d" || $idkusr=="r"){ echo "home.php?home=nilai&dpn_nl4=n4"; }else{ echo"home.php?phk=1"; } ?>" class="lk">Nilai Lisan, Akhlak &amp; Keperibadian </a></td>
        </tr>
        <tr>
          <td bordercolor="#FFFFFF"><div align="center"><img src="images/geotag_small.png" /></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><a href="<? if($idkusr=="i" || $idkusr=="m" || $idkusr=="k" || $idkusr=="p" || $idkusr=="a" || $idkusr=="d" || $idkusr=="r"){ echo "home.php?home=nilai&dpn_nl6=n6"; }else{ echo"home.php?phk=1"; } ?>" class="lk">Nilai Organisasi </a><a href="<? if($idkusr=="i" || $idkusr=="m" || $idkusr=="k" || $idkusr=="p" || $idkusr=="a" || $idkusr=="d" || $idkusr=="r"){ echo "home.php?home=nilai&dpn_nl5=n5"; }else{ echo"home.php?phk=1"; } ?>" class="lk"></a></td>
        </tr>
        <tr>
          <td bordercolor="#FFFFFF"><div align="center"><img src="images/geotag_small.png" /></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><a href="<? if($idkusr=="i" || $idkusr=="m" || $idkusr=="k" || $idkusr=="p" || $idkusr=="a" || $idkusr=="d" || $idkusr=="r" || $idkusr=="u"){ echo "home.php?home=nilai&dpn_nl2=n2"; }else{ echo"home.php?phk=1"; } ?>" class="lk">Rekap Kehadiran Santri/Bulan </a><a href="<? if($idkusr=="i" || $idkusr=="m" || $idkusr=="k" || $idkusr=="p" || $idkusr=="a" || $idkusr=="d" || $idkusr=="r"){ echo "home.php?home=nilai&dpn_nl6=n6"; }else{ echo"home.php?phk=1"; } ?>" class="lk"></a></td>
        </tr>
        <tr>
          <td bordercolor="#FFFFFF"><div align="center"><img src="images/geotag_small.png" /></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><a href="<? if($idkusr=="i" || $idkusr=="m" || $idkusr=="k" || $idkusr=="d" || $idkusr=="r"){ echo "home.php?home=nilai&dpn_nl7=n7"; }else{ echo"home.php?phk=1"; } ?>" class="lk">Catatan Wali Kelas</a></td>
        </tr>
        <tr>
          <td bordercolor="#FFFFFF"><div align="center"><img src="images/geotag_small.png" /></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><a href="<? if($idkusr=="m" || $idkusr=="p" || $idkusr=="d" || $idkusr=="r" || $idkusr=="u"){ echo "home.php?home=nilai&dpn_nl8=n8"; }else{ echo"home.php?phk=1"; } ?>" class="lk">Catatan Sikap</a></td>
        </tr>
        
        <tr>
          <td bordercolor="#FFFFFF"><div align="center"><img src="images/geotag_small.png" /></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><a href="<? if($idkusr=="r" || $idkusr=="m" || $idkusr=="s" || $idkusr=="d" || $idkusr=="u" || $idkusr=="k"){ echo "home.php?home=prpl&pgr=2"; }else{ echo"home.php?phk=1"; } ?>" class="lk">Pelanggaran/Prestasi </a></td>
        </tr>
        <tr> 
          <td bordercolor="#FFFFFF"><div align="center"><img src="images/geotag_small.png" /></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><a href="<? if($idkusr=="i" || $idkusr=="m" || $idkusr=="k" || $idkusr=="r" || $idkusr=="d" || $idkusr=="r"){ echo "home.php?home=nilai&dpn_nl9=n9"; }else{ echo"home.php?phk=1"; } ?>" class="lk">Penilaian Karakter</a></td>
        </tr>
        <tr>
          <td height="14" colspan="2" bordercolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr> 
          <td height="31" colspan="2" bordercolor="#FFFFFF" bgcolor="#B3CF70" background="images/suckerfish_yellow.png"><span class="style3">&nbsp;<img src="images/gears.gif" width="16" height="16" align="absmiddle" />&nbsp;&nbsp;Administrator</span></td>
        </tr>
        <tr> 
          <td height="22" bordercolor="#FFFFFF"><div align="center"><img src="images/geotag_small.png" /></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><a href="<? if($idkusr=="d"){ echo "home.php?home=usr&usr1=k1"; }else{ echo"home.php?phk=1"; } ?>" class="lk">user</a></td>
        </tr>
        <tr> 
          <td bordercolor="#FFFFFF"><div align="center"><img src="images/geotag_small.png" /></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><a href="<? if($idkusr=="u" || $idkusr=="m" || $idkusr=="k" || $idkusr=="d"){ echo "home.php?home=gp"; }else{ echo"home.php?phk=1"; } ?> " class="lk">Guru 
          &amp; Pegawai</a></td>
        </tr>
        <tr>
          <td bordercolor="#FFFFFF"><div align="center"><img src="images/geotag_small.png" /></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><a href="<? if($idkusr=="d"){ echo "home.php?home=gjk"; }else{ echo"home.php?phk=1"; } ?>" class="lk">Master Gaji</a></td>
        </tr>
        <tr>
          <td bordercolor="#FFFFFF"><div align="center"><img src="images/geotag_small.png" /></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><a href="<? if($idkusr=="d"){ echo "home.php?home=pgdp"; }else{ echo"home.php?phk=1"; } ?> " class="lk">Penilai Guru  </a></td>
        </tr>
        <tr>
          <td bordercolor="#FFFFFF"><div align="center"><img src="images/geotag_small.png" /></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><a href="<? if($idkusr=="d"){ echo "home.php?home=fpp"; }else{ echo"home.php?phk=1"; } ?> " class="lk">Penilai Pegawai </a></td>
        </tr>
        <tr>
          <td bordercolor="#FFFFFF"><div align="center"><img src="images/geotag_small.png" /></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><a href="<? if($idkusr=="d"){ echo "home.php?home=lpgp"; }else{ echo"home.php?phk=1"; } ?> " class="lk">Leger Penilai Guru & Pegawai</a></td>
        </tr>
        <tr>
          <td bordercolor="#FFFFFF"><div align="center"><img src="images/geotag_small.png" /></div></td>
          <td bordercolor="#FFFFFF"><a href="<? if($idkusr=="d"){ echo "home.php?home=ceklst"; }else{ echo"home.php?phk=1"; } ?> " class="lk">Ceklist Kebersihan</a></td>
        </tr>
        <tr>
          <td colspan="2" bordercolor="#FFFFFF">
		  <? if($idkusr=="m" || $idkusr=="d"){  ?>
		  <table width="100%" border="0" cellspacing="1" cellpadding="0">
            <tr>
              <td height="19" colspan="2" background="images/suckerfish_yellow.png"> &nbsp;&nbsp;<span class="style5">PENILAIAN PIMPINAN </span></td>
              </tr>
            <tr>
              <td width="10%" height="21"><img src="images/geotag_small.png" /></td>
              <td width="90%" bgcolor="#FFFFFF"><a href="<? if($idkusr=="d"){ /* echo "home.php?home=psp"; */ echo"page/penilaian_struktural.php"; }else{ echo"home.php?phk=1"; } ?>" class="lk" target="_blank">Penilaian Struktural Pondok</a></td>
            </tr>
            <tr>
              <td><img src="images/geotag_small.png" /></td>
              <td bgcolor="#FFFFFF"><a href="<? if($idkusr=="m" || $idkusr=="d"){ /*echo "home.php?home=lpgb";*/ echo"page/penilaian _guru.php"; }else{ echo"home.php?phk=1"; } ?>" class="lk" target="_blank">Penilaian Guru Bulanan</a></td>
            </tr>
            <tr>
              <td><img src="images/geotag_small.png" /></td>
              <td bgcolor="#FFFFFF"><a href="<? if($idkusr=="m" || $idkusr=="d"){ /*echo "home.php?home=pkpa";*/ echo"page/penilaian _pembina.php"; }else{ echo"home.php?phk=1"; } ?>" class="lk">Penilaian kinerja Pembina Asrama </a></td>
            </tr>
          </table> <? } ?></td>
        </tr>
        <tr> 
          <td bordercolor="#FFFFFF">&nbsp;</td>
          <td bordercolor="#FFFFFF">...................................................................</td>
        </tr>
    </table></td>
    <td width="82%" align="right" valign="top"><table width="99%" border="0" align="right" cellpadding="0" cellspacing="0" bordercolor="#336600">
      <tr>
        <td height="15"><?
		 if($home==""){ include("page/depan.php"); }
		 if($home=="gp"){ include("page/pg_mst_gp.php"); }
		 if($home=="st"){ include("page/pg_mst_st.php"); }
		 if($home=="mp"){ include("page/ipt_mst_mp.php"); }
		 if($home=="kls"){ include("page/pg_mst_kls.php"); }
		 if($home=="rst"){ include("page/pg_mst_rst.php"); }
		 if($home=="nilai"){ include("page/pg_mst_nilai.php"); }
		 if($home=="usr"){ include("page/pg_mst_user.php"); }
		 if($home=="pbk"){ include("page/ipt_mst_pbakat.php"); }
		 if($home=="khs"){ include("page/kehadiran_santri.php"); }
		 if($home=="ldk"){ include("page/list_dt_kehadiran.php"); }
		 if($home=="prpl"){ include("page/ipt_mst_prpl.php"); }
		 if($home=="lspr"){ include("page/list_dt_prpl.php"); }
		 if($home=="byr"){ include("page/pg_mst_pembayaran.php"); }    
		 if($home=="legr"){ include("page/leger.php"); }
		 if($home=="al"){ include("page/list_dt_alumni.php"); }
		 if($home=="gjk"){ include("page/pg_mst_gaji.php"); }
		 if($home=="tpg"){ include("page/pg_mst_pot_tjg.php"); }
		  if($home=="pgdp"){ include("page/ipt_niali_guru.php"); }
		 if($home=="fpp"){ include("page/ipt_niali_pegawai.php"); } 
		 if($home=="lpgp"){ include("page/leger_penilaian_gp.php"); }
		 if($home=="lpgb"){ include("page/penilaian _guru.php"); }
		 if($home=="pkpa"){ include("page/penilaian _pembina.php"); }
		 if($home=="psp"){ include("page/penilaian_struktural.php"); }
		 if($home=="pgrl"){ include("page/ipt_pengeluaran.php"); }
		 if($home=="lkeu"){ include("page/pg_mst_laporan_keuangan.php"); } 
		 if($home=="ceklst"){ include("page/pg_mst_ceklist.php"); }
		?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      
    </table></td>
  </tr>
  <tr>
    <td background="images/suckerfish_green2.png">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</body>
</html>
<? } ?>