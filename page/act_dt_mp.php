<?
include("../koneksi.php");

$rekam=$_POST['rekam'];
$ubah=$_POST['ubah'];
$kdk=$_POST['kdk'];
$kk=$_POST['kk'];
$nmmp=$_POST['nmmp'];
$kkm=$_POST['kkm'];
$kkm2=$_POST['kkm2'];
$kkm3=$_POST['kkm3'];
$del=$_POST['del'];
$ket=$_POST['ket'];
$kdmp=$_POST['kdmp'];
$kdmt=$ket.$kk;

if($rekam=="Simpan"){
$rek=mysqli_query($koneksi, "INSERT INTO mata_pelajaran VALUES('$kdmt','$nmmp','$kkm','$kkm2','$kkm3','$ket')");
}
if($ubah=="Simpan"){
 mysqli_query($koneksi, "UPDATE mata_pelajaran SET nama_mp='$nmmp',
								   kkm='$kkm',
								   kkm2='$kkm2',
								   kkm3='$kkm3'
                       WHERE kd_mp='$kdmp'");
}
if($del=="Hapus"){
   mysqli_query($koneksi, "DELETE FROM mata_pelajaran WHERE kd_mp='$kdmp' ");
}
header("Location: ../home.php?home=mp");
?>