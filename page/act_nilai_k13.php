<?
include("../koneksi.php");

$thaj=$_COOKIE['thaj'];
$sem=$_COOKIE['sem'];
$idgurp=$_COOKIE['idgurp'];
//$idkelas=$_COOKIE['idkelas'];

$rekam=$_POST['rekam'];
$rekam2=$_POST['rekam2'];
$rekam3=$_POST['rekam3'];

$ubah=$_GET['ubah'];
$aktif=$_GET['aktif'];
$k_tb=$_GET['k_tb'];

$kompetensi_inti=$_POST['kompetensi_inti'];
$id_kelas=$_POST['id_kelas'];
$kd_mapel=$_POST['kd_mapel'];
$kd_mapel2=$_POST['kd_mapel2'];
$kd_mapel3=$_POST['kd_mapel3'];
$klsk2=$_POST['klsk2'];
$klsk=$_POST['klsk'];
$klsk22=$_POST['klsk22'];
$klsk222=$_POST['klsk222'];

$id_k=$_POST['id_k'];
$id_k31k=$_POST['id_k31k']; 
$id_k41k=$_POST['id_k41k'];
$id_k11k=$_POST['id_k11k'];
$id_k11k2=$_POST['id_k11k2'];

$textarea1=$_POST['textarea1'];
$textarea2=$_POST['textarea2'];
$textarea3=$_POST['textarea3'];
$textarea4=$_POST['textarea4'];
$textarea5=$_POST['textarea5'];
$textarea6=$_POST['textarea6'];
$textarea7=$_POST['textarea7'];
$textarea8=$_POST['textarea8'];

$ns1=$_POST['ns1'];
$ns2=$_POST['ns2'];
$ns3=$_POST['ns3'];
$ns4=$_POST['ns4'];

$nss1=$_POST['nss1'];
$nss2=$_POST['nss2'];
$nss3=$_POST['nss3'];
$nss4=$_POST['nss4'];
$nss5=$_POST['nss5'];
$nss6=$_POST['nss6'];
$nss7=$_POST['nss7'];

$ki=$_POST['ki'];
$kd=$_POST['kd'];
$id_santri=$_POST['id_santri'];
$id_santri2=$_POST['id_santri2'];
$nt=$_POST['nt'];
$tg=$_POST['tg'];
$tg2=$_POST['tg2'];
$id_kik=$_POST['id_kik'];



if($rekam=="Simpan"){
  $qku7=mysqli_query($koneksi, "SELECT * FROM tb_komptensi_inti WHERE id_ki='$id_k' ");
  $cqk7=mysqli_num_rows($qku7);
  if($cqk7==0){
   $rek=mysqli_query($koneksi, "INSERT INTO tb_komptensi_inti VALUES('',
   												 '$kompetensi_inti',
												 '$thaj',
												 '$sem',
												 '$id_kelas',
												 '$kd_mapel',
												 '$idgurp',
												 '$textarea1',
												 '$textarea2',
												 '$textarea3',
												 '$textarea4',
												 '$textarea5',
												 '$textarea6',
												 '$textarea7',
												 '$textarea8')"); 
 }else{
 mysqli_query($koneksi, "UPDATE tb_komptensi_inti SET kd1='$textarea1',
									kd2='$textarea2',
									kd3='$textarea3',
									kd4='$textarea4',
									kd5='$textarea5',
									kd6='$textarea6',
									kd7='$textarea7',
									kd8='$textarea8' WHERE id_ki='$id_k' ");
 
 }
header("Location: ../home.php?home=nilai&dpn_n25=n25&klsk=$id_kelas&klsk2=$klsk2&ki=$kompetensi_inti&mpl=$kd_mapel"); 
} 


if($rekam=="Save"){
  $qku7=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd31 WHERE id_kd31='$id_k31k' ");
  $cqk7=mysqli_num_rows($qku7);
  if($cqk7==0){
   $rek=mysqli_query($koneksi, "INSERT INTO tb_nilai_kd31 VALUES('',
   												 '$id_kik',
												 '$kd',
												 '$id_santri',
												 '$nt',
												 '$tg')"); 
 }else{
 mysqli_query($koneksi, "UPDATE tb_nilai_kd31 SET nilai_tes_tulis='$nt', nilai_tugas='$tg' WHERE id_kd31='$id_k31k' ");
 
 }
header("Location: ../home.php?home=nilai&dpn_n26=$ki&klsk2=$klsk2&ki=$ki&kd=$kd&mapel=$kd_mapel&id_kik=$id_kik&klsk=$klsk"); 
} 

if($rekam=="Save41"){
  $qku7=mysqli_query($koneksi, "SELECT * FROM tb_nilai_kd41 WHERE id_kd41='$id_k41k' ");
  $cqk7=mysqli_num_rows($qku7);
  if($cqk7==0){
   $rek=mysqli_query($koneksi, "INSERT INTO tb_nilai_kd41 VALUES('',
   												 '$id_kik',
												 '$kd',
												 '$id_santri',
												 '$nt',
												 '$tg2',
												 '$tg')"); 
 }else{
 mysqli_query($koneksi, "UPDATE tb_nilai_kd41 SET praktek='$nt', produk='$tg2', proyek='$tg' WHERE id_kd41='$id_k41k' ");
 
 }
header("Location: ../home.php?home=nilai&dpn_n26=$ki&klsk2=$klsk2&ki=$ki&kd=$kd&mapel=$kd_mapel&id_kik=$id_kik&klsk=$klsk"); 
} 

if($rekam=="SaveU"){
  $qku7=mysqli_query($koneksi, "SELECT * FROM tb_ujian_k13 WHERE id_nu='$id_k41k' ");
  $cqk7=mysqli_num_rows($qku7);
  if($cqk7==0){
   $rek=mysqli_query($koneksi, "INSERT INTO tb_ujian_k13 VALUES('',
   												 '$id_kik',
												 '$id_santri',
												 '$nt',
												 '$tg')"); 
 }else{
 mysqli_query($koneksi, "UPDATE tb_ujian_k13 SET uts='$nt', us='$tg' WHERE id_nu='$id_k41k' ");
 
 }
header("Location: ../home.php?home=nilai&dpn_n26=5&klsk2=$klsk2&mapel=$kd_mapel&id_kik=$id_kik&klsk=$klsk&ki=$ki"); 
} 

if($rekam2=="SaveNS"){
 $qku7=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ki1 WHERE id_ki1='$id_k11k' ");
  $cqk7=mysqli_num_rows($qku7);
  if($cqk7==0){
   $rek=mysqli_query($koneksi, "INSERT INTO tb_nilai_ki1 VALUES('',
   												 '$thaj',
												 '$sem',
												 '$kd_mapel2',
												 '$id_santri',
												 '$ns1',
												 '$ns2',
												 '$ns3',
												 '$ns4')"); 
 }else{
 mysqli_query($koneksi, "UPDATE tb_nilai_ki1 SET n1='$ns1', n2='$ns2', n3='$ns3', n4='$ns4' WHERE id_ki1='$id_k11k' ");
 
 }
header("Location: ../home.php?home=nilai&dpn_n25=n25&klsk2=$klsk22&mpl=$kd_mapel2&ki=1&klsk=$klsk"); 
}

if($rekam3=="Save"){
 $qku7=mysqli_query($koneksi, "SELECT * FROM tb_nilai_ki2 WHERE id_ki2='$id_k11k2' ");
  $cqk7=mysqli_num_rows($qku7);
  if($cqk7==0){
   $rek=mysqli_query($koneksi, "INSERT INTO tb_nilai_ki2 VALUES('',
   												 '$thaj',
												 '$sem',
												 '$kd_mapel3',
												 '$id_santri2',
												 '$nss1',
												 '$nss2',
												 '$nss3',
												 '$nss4',
												 '$nss5',
												 '$nss6',
												 '$nss7')"); 
 }else{
 mysqli_query($koneksi, "UPDATE tb_nilai_ki2 SET s1='$nss1', s2='$nss2', s3='$nss3', s4='$nss4', s5='$nss5', s6='$nss6', s7='$nss7' WHERE id_ki2='$id_k11k2' ");
 
 }
header("Location: ../home.php?home=nilai&dpn_n25=n25&klsk2=$klsk222&mpl=$kd_mapel3&ki=2&klsk=$klsk"); 
}

if($aktif=="ok"){
  mysqli_query($koneksi, "UPDATE tb_tutup SET aktif='$k_tb'  ");
  header("Location: ../home.php?home=nilai&dpn_n25=n25");
}

?>