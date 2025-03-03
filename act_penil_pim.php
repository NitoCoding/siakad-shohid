<?
include("koneksi.php");

$nama_p=$_POST['nama_p'];
$unitp=$_POST['unitp'];
$p1=$_POST['p1'];
$p2=$_POST['p2'];
$p3=$_POST['p3'];
$p4=$_POST['p4'];
$p5=$_POST['p5'];
$p6=$_POST['p6'];
$p7=$_POST['p7'];
$p8=$_POST['p8'];
$simpan=$_POST['simpan'];
$hiddenField=$_POST['hiddenField'];
$km=$_GET['km'];
$co=$_COOKIE['co'];

$km=$hiddenField+=1;
setcookie("co","$km");
if($simpan=="Kirim"){
$hp=0;
$hp=$p1+$p2+$p3+$p4+$p5+$p6+$p7+$p8;
$rek=mysqli_query($koneksi, "INSERT INTO tb_penilaian_pimpinan VALUES('','$nama_p','$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$hp','$unitp')");
}
header("Location: penilian_pimpinan.php?km=$km");
?>