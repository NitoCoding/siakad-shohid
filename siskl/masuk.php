<?
include("../koneksi.php");

$idusr=$_COOKIE['idusr'];
$logout=$_GET['logout'];

$hal=$_POST['hal']; 
$id_str=$_POST['id_str']; 
$nisk=$_POST['nisk']; 
$idkls=$_POST['idkls'];
$pswr=$_POST['pswr'];
$masuk=$_POST['masuk'];
$tpsw=md5($pswr);

if($logout==1){
   setcookie("id_santri","");
   setcookie("niss","");
   setcookie("id_kk","");
   setcookie("bulan","");
   setcookie("semester","");
   setcookie("pekan","");
   setcookie("bulan_ak","");
   header("Location: index.php?hal=");
   return;
}

if($masuk=="Login"){
$tst1=mysqli_query($koneksi, "SELECT id_santri,pass2 FROM tb_santri WHERE id_santri='$id_str' and pass2='$tpsw' ");
$tp1=mysqli_num_rows($tst1);
	   
if($tp1>=1){
   setcookie("id_santri","$id_str");
   setcookie("niss","$nisk"); 
   setcookie("id_kk","$idkls"); 
   
   $bln=date("m");
   if($bln=="01"){ $bulank="Januari"; $sem="II"; $nb=1;}
   if($bln=="02"){ $bulank="Februari"; $sem="II"; $nb=2; }
   if($bln=="03"){ $bulank="Maret"; $sem="II"; $nb=3; }
   if($bln=="04"){ $bulank="April"; $sem="II"; $nb=4; }
   if($bln=="05"){ $bulank="Mei"; $sem="II"; $nb=5; }
   if($bln=="06"){ $bulank="Juni"; $sem="II"; $nb=6; }
   if($bln=="07"){ $bulank="Juli"; $sem="I"; $nb=7; }
   if($bln=="08"){ $bulank="Agustus"; $sem="I"; $nb=8; }
   if($bln=="09"){ $bulank="September"; $sem="I"; $nb=9; }
   if($bln=="10"){ $bulank="Oktober"; $sem="I"; $nb=10; }
   if($bln=="11"){ $bulank="Nopember"; $sem="I"; $nb=11; }
   if($bln=="12"){ $bulank="Desember"; $sem="I"; $nb=12; }
   
   setcookie("bulan","$bulank");
   setcookie("semester","$sem");
   setcookie("bulan_ak","$nb");
   
   $tgl=date("d");
   if($tgl<=7){ $pkn="I"; }
   if($tgl<=14 and $tgl>=8){ $pkn="II"; }
   if($tgl<=21 and $tgl>=15){ $pkn="III"; }
   if($tgl<=30 and $tgl>=22){ $pkn="IV"; }
   
   setcookie("pekan","$pkn");
   if($nb<=6){
   $thn1=date("Y")-1;
   $thn2=date("Y");
   }
   if($nb>=7){
   $thn1=date("Y");
   $thn2=date("Y")+1;
   }
   $gthn=$thn1."/".$thn2;
   setcookie("thn_ajaran","$gthn");
   header("Location: index.php?hal=$hal&pg1=1");
   return;
}else{ header("Location: login.php?hal=$hal&id_str=$id_str&nisk=$nisk&idkls=$idkls&psn=1");
  return;
} 
} 
header("Location: login.php?hal=$hal&id_str=$id_str&nisk=$nisk&idkls=$idkls&psn=2"); 
?>