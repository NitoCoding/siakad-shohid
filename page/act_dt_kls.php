<?
include("../koneksi.php");

$rekam=$_POST['rekam'];
$rubah=$_POST['rubah'];
$del=$_GET['del'];
$idklsk=$_POST['idklsk'];
$sem=$_COOKIE['sem']; 

$nmkls=$_POST['nmkls'];
$kapasitas=$_POST['kapasitas'];
$jml_meja=$_POST['jml_meja'];
$mrusak=$_POST['mrusak'];
$jml_kursi=$_POST['jml_kursi'];
$krusak=$_POST['krusak'];
$jml_lemari=$_POST['jml_lemari'];
$lrusak=$_POST['lrusak'];
$jml_ptulis=$_POST['jml_ptulis'];
$prusak=$_POST['prusak'];
$proy=$_POST['proy'];

$kepsek=$_POST['kepsek'];
$niy=$_POST['niy'];
$sms=$_POST['sms'];
$mid=$_POST['mid'];
$bio=$_POST['bio'];
$tingkat=$_POST['tingkat'];
$Submit=$_POST['Submit'];

$kepsek2=$_POST['kepsek2'];
$niy2=$_POST['niy2'];
$sms2=$_POST['sms2'];
$mid2=$_POST['mid2'];
$bio2=$_POST['bio2'];
$tingkat2=$_POST['tingkat2'];
$Submit2=$_POST['Submit2'];

$foto=$_POST['foto'];
$fotoc=$_FILES['foto']['name'];
$foto2=$_POST['foto2'];
$fotoc2=$_FILES['foto2']['name'];

if($rekam=="Simpan"){
$rek=mysqli_query($koneksi, "INSERT INTO master_kelas VALUES('','$nmkls',
												'$kapasitas',
												'$jml_meja',
												'$mrusak',
												'$jml_kursi',
												'$krusak',
												'$jml_lemari',
												'$lrusak',
												'$jml_ptulis',
												'$prusak',
												'$proy')");
header("Location: ../home.php?home=kls&dpn_kls1=k1");
}

if($rubah=="Simpan"){
 mysqli_query($koneksi, "UPDATE master_kelas SET kelas='$nmkls',
                                   kapasitas='$kapasitas',
								   jml_meja='$jml_meja',
								   meja_r='$mrusak',
								   jml_kursi='$jml_kursi',
                                   kursi_r='$krusak',
								   jml_lemari='$jml_lemari',
								   lrusak='$lrusak',
								   jml_ptulis='$jml_ptulis',
								   prusak='$prusak',
								   proyektor='$proy'
                       WHERE kd_kls='$idklsk'");
  header("Location: ../home.php?home=kls&dpn_kls1=k1");
}

if($del=="oke"){
   mysqli_query($koneksi, "DELETE FROM tb_santri WHERE id_santri='$idk_ddt' ");
   header("Location: ../home.php?home=st&dpn_st=ld");
}
if($Submit=="Submit"){
if(!empty($fotoc)){
   if(is_uploaded_file($_FILES['foto']['tmp_name'])){
		move_uploaded_file($_FILES['foto']['tmp_name'], "raport/".$_FILES['foto']['name']);
		$nmfoto=$_FILES['foto']['name'];
     } }
 mysqli_query($koneksi, "UPDATE tb_ttd SET nama_kepek='$kepsek',
								   niy='$niy',
								   ttd='$nmfoto',
								   semester='$sem',
								   tgl_semester='$sms',
								   tgl_mid='$mid',
								   tgl_biodata='$bio'
                       WHERE ket='b' AND semester='$sem' ");
header("Location: ../page/ttd_kepsek.php");
}
if($Submit2=="Submit"){
if(!empty($fotoc2)){
   if(is_uploaded_file($_FILES['foto2']['tmp_name'])){
		move_uploaded_file($_FILES['foto2']['tmp_name'], "raport/".$_FILES['foto2']['name']);
		$nmfoto=$_FILES['foto2']['name'];
     } }
 mysqli_query($koneksi, "UPDATE tb_ttd SET nama_kepek='$kepsek2',
								   niy='$niy2',
								   ttd='$nmfoto',
								   semester='$sem',
								   tgl_semester='$sms2',
								   tgl_mid='$mid2',
								   tgl_biodata='$bio2'
                       WHERE ket='a' AND semester='$sem' ");
header("Location: ../page/ttd_kepsek.php");
}
?>