<?
include("../koneksi.php");


$kelas=$_POST['kelas'];
$thn_p=$_POST['thn_p'];
$rekam1=$_POST['rekam1'];
$idk=$_GET['idk'];
$del=$_GET['del'];
$del2=$_GET['del2'];
$del3=$_GET['del3'];
$idk_dst=$_GET['idk_dst'];

$id_s1=$_POST['id_s1'];
$id_s2=$_POST['id_s2'];
$id_s3=$_POST['id_s3'];

/* $id_s1=$_GET['id_s1'];
$id_s2=$_GET['id_s2'];
$id_s3=$_GET['id_s3']; */

$jenjang=$_POST['jenjang'];
$nama_sekolah=$_POST['nama_sekolah'];
$tahun_masuk=$_POST['tahun_masuk'];
$tahun_keluar=$_POST['tahun_keluar'];
$tinggal_kelas=$_POST['tinggal_kelas'];
$lama=$_POST['lama'];
$sttb=$_POST['sttb'];
$pindah=$_POST['pindah'];
$rekam2=$_POST['rekam2'];
$rekam3=$_POST['rekam3'];
$jn_penyakit=$_POST['jn_penyakit'];
$lama_s=$_POST['lama_s'];
$tahun_s=$_POST['tahun_s'];

if($rekam1=="Simpan"){
$idk_dst=$id_s1;
$rek=mysqli_query($koneksi, "INSERT INTO riwayat_kelas VALUES('','$id_s1','$kelas','$thn_p')");
header("Location: ../home.php?home=st&dpn_st=ipt_ryt&idk_dst=$idk_dst");
} 
if($del=="oke"){
   mysqli_query($koneksi, "DELETE FROM riwayat_kelas WHERE id_rk='$idk' ");
   header("Location: ../home.php?home=st&dpn_st=ipt_ryt&idk_dst=$idk_dst");
}

if($rekam2=="Simpan"){
$idk_dst=$id_s2;
$rek=mysqli_query($koneksi, "INSERT INTO riwayat_pendidikan VALUES('','$id_s2','$jenjang','$nama_sekolah','$tahun_masuk','$tahun_keluar','$tinggal_kelas','$lama','$sttb','$pindah')");
header("Location: ../home.php?home=st&dpn_st=ipt_ryt&idk_dst=$idk_dst");
}
if($del2=="oke"){
   mysqli_query($koneksi, "DELETE FROM riwayat_pendidikan WHERE id_rp='$idk' ");
   header("Location: ../home.php?home=st&dpn_st=ipt_ryt&idk_dst=$idk_dst");
}

if($rekam3=="Simpan"){
$idk_dst=$id_s3;
$rek=mysqli_query($koneksi, "INSERT INTO riwayat_kesehatan VALUES('','$id_s3','$jn_penyakit','$lama_s','$tahun_s')");
header("Location: ../home.php?home=st&dpn_st=ipt_ryt&idk_dst=$idk_dst");
}
if($del3=="oke"){
   mysqli_query($koneksi, "DELETE FROM riwayat_kesehatan WHERE id_ks='$idk' ");
   header("Location: ../home.php?home=st&dpn_st=ipt_ryt&idk_dst=$idk_dst");
}
?>