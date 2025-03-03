<?
include("../koneksi.php");

$thaj=$_COOKIE['thaj'];
$sem=$_COOKIE['sem']; 
$rekam=$_POST['rekam'];
$ubah=$_POST['ubah'];
$kelas=$_POST['kelas'];
$wali=$_POST['wali'];
$thna=$_POST['thna'];
$idwls=$_POST['idwls'];
$nisk=$_POST['nisk'];
$kls=$_POST['kls'];
$kd_eskul1=$_POST['kd_eskul1'];
$eskul1=$_POST['eskul1'];
$kd_eskul2=$_POST['kd_eskul2']; 
$eskul2=$_POST['eskul2'];
$kd_eskul22=$_POST['kd_eskul22']; 
$eskul22=$_POST['eskul22']; 
$kd_eskul222=$_POST['kd_eskul222'];
$eskul222=$_POST['eskul222'];
$foto=$_POST['foto'];
$fotoc=$_FILES['foto']['name'];
$del=$_GET['del'];
$idwls2=$_GET['idwls2'];



if($rekam=="Simpan"){
   if(!empty($fotoc)){
   if(is_uploaded_file($_FILES['foto']['tmp_name'])){
		move_uploaded_file($_FILES['foto']['tmp_name'], "raport/".$_FILES['foto']['name']);
		$nmfoto=$_FILES['foto']['name'];
     } }
   $rek=mysqli_query($koneksi, "INSERT INTO wali_kelas VALUES('','$kelas','$wali','$thna','$nmfoto')");
   header("Location: ../home.php?home=kls&dpn_kls3=k3");
}
if($ubah=="Simpan"){
if(!empty($fotoc)){
   if(is_uploaded_file($_FILES['foto']['tmp_name'])){
		move_uploaded_file($_FILES['foto']['tmp_name'], "raport/".$_FILES['foto']['name']);
		$nmfoto=$_FILES['foto']['name'];
     } }
 mysqli_query($koneksi, "UPDATE wali_kelas SET kd_gp='$wali',
								   thn_ajaran='$thna',
								   ttd='$nmfoto'
                       WHERE id_wk='$idwls'");
  header("Location: ../home.php?home=kls&dpn_kls3=k3");
}
if($rekam=="Save"){
   $rek=mysqli_query($koneksi, "INSERT INTO tb_nilai_eskul VALUES('','$thaj','$sem','$nisk','$kls','$kd_eskul1','$eskul1','$kd_eskul2','$eskul2','$kd_eskul22','$eskul22','$kd_eskul222','$eskul222')");
   header("Location: ../home.php?home=nilai&dpn_nl3=n3&klsk=$kls&P=1");
}
if($ubah=="Save"){
 mysqli_query($koneksi, "UPDATE tb_nilai_eskul SET 
 								   kd_eskl1='$kd_eskul1',
								   nil_eskl1='$eskul1',
								   kd_eskl2='$kd_eskul2',
								   nil_eskl2='$eskul2',
								   kd_eskul3='$kd_eskul22',
								   nil_eskl3='$eskul22',
								   kd_eskul4='$kd_eskul222',
								   nil_eskl4='$eskul222'
             WHERE thn_eskl='$thaj' AND sms_eskl='$sem' AND nis_eskl='$nisk' AND kls_eskl='$kls' ");
 

  header("Location: ../home.php?home=nilai&dpn_nl3=n3&klsk=$kls&P=2");
}
if($del=="oke"){
   mysqli_query($koneksi, "DELETE FROM wali_kelas WHERE id_wk='$idwls2' ");
   header("Location: ../home.php?home=kls&dpn_kls3=k3");
}

?>