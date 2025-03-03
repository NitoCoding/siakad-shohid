<?
include("../koneksi.php");
//langsung
$rkl=$_GET['rkl'];
$bulan=$_GET['bulan'];
$pekan=$_GET['pekan'];
$nlk=$_GET['nlk'];
$klsk=$_GET['klsk'];
$nlk=$_GET['nlk'];
$klsk2=$_GET['klsk2'];  
$cka=$_GET['cka'];  
$thaj=$_COOKIE['thaj'];
$sem=$_COOKIE['sem']; 

//REKAM LANGSUNG 
if($rkl=="1" and $bulan!="" and $pekan!=""){
 
$tam=mysqli_query($koneksi, "SELECT nis FROM tb_santri WHERE kelas_st='$klsk2' AND status='a' "); 
while($tp=mysqli_fetch_assoc($tam)){

$ntgs=mysqli_query($koneksi, "SELECT * FROM  tb_adab_sekolah WHERE nis=$tp[nis] and pekan='$pekan' and bulan='$bulan' and semester='$sem' and thn_ajaran='$thaj' ");
$cnt=mysqli_num_rows($ntgs);

if($cnt==0){
$rek=mysqli_query($koneksi, "INSERT INTO tb_adab_sekolah VALUES('',
	  											'$thaj',
												'$sem',
												'$bulan',
												'$pekan',
												'$tp[nis]',
												'$cka',
												'$cka',
												'$cka',
												'$cka',
												'$cka',
												'$cka',
												'$cka')"); 
}else{
mysqli_query($koneksi, "UPDATE tb_adab_sekolah SET salam='$cka',bicara='$cka',belajar='$cka',makan_minum='$cka',ke_guru='$cka',bergaul='$cka',bercanda='$cka' WHERE thn_ajaran='$thaj'  and semester='$sem' and bulan='$bulan' and pekan='$pekan' and nis='$tp[nis]'");
}
}
 header("Location: ../home.php?home=nilai&dpn_nl9=n9&klsk=$idkls&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&bl=$bulan&pk=$pekan&nlk=paa"); 
} 


if($rkl=="2" and $bulan!="" and $pekan!=""){

$tam=mysqli_query($koneksi, "SELECT nis FROM tb_santri WHERE kelas_st='$klsk2' AND status='a' "); 
while($tp=mysqli_fetch_assoc($tam)){

$ntgs=mysqli_query($koneksi, "SELECT * FROM  tb_kedisiplinan_sekolah WHERE nis=$tp[nis] and pekan='$pekan' and bulan='$bulan' and semester='$sem' and thn_ajaran='$thaj' ");
$cnt=mysqli_num_rows($ntgs);

if($cnt==0){
$rek=mysqli_query($koneksi, "INSERT INTO tb_kedisiplinan_sekolah VALUES('',
	  											'$thaj',
												'$sem',
												'$bulan',
												'$pekan',
												'$tp[nis]',
												'$cka',
												'$cka',
												'$cka',
												'$cka',
												'$cka',
												'$cka',
												'$cka')"); 
}else{
mysqli_query($koneksi, "UPDATE tb_kedisiplinan_sekolah SET mb_quran='$cka',salat_duha='$cka',berdoa='$cka',apel='$cka',kembali_kekelas='$cka',belajar_dikelas='$cka',waktu_kepulangan='$cka' WHERE thn_ajaran='$thaj'  and semester='$sem' and bulan='$bulan' and pekan='$pekan' and nis='$tp[nis]'");
}
}

 header("Location: ../home.php?home=nilai&dpn_nl9=n9&klsk=$idkls&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&bl=$bulan&pk=$pekan&nlk=kd"); 
} 

if($rkl=="3" and $bulan!="" and $pekan!=""){

$tam=mysqli_query($koneksi, "SELECT nis FROM tb_santri WHERE kelas_st='$klsk2' AND status='a' "); 
while($tp=mysqli_fetch_assoc($tam)){

$ntgs=mysqli_query($koneksi, "SELECT * FROM  tb_kerapihan_sekolah WHERE nis=$tp[nis] and pekan='$pekan' and bulan='$bulan' and semester='$sem' and thn_ajaran='$thaj' ");
$cnt=mysqli_num_rows($ntgs);

if($cnt==0){
$rek=mysqli_query($koneksi, "INSERT INTO  tb_kerapihan_sekolah VALUES('',
	  											'$thaj',
												'$sem',
												'$bulan',
												'$pekan',
												'$tp[nis]',
												'$cka',
												'$cka',
												'$cka',
												'$cka',
												'$cka')"); 
}else{
mysqli_query($koneksi, "UPDATE tb_kerapihan_sekolah SET bersih_diri='$cka',bersih_kelas='$cka',kerapihan_brg_pribadi='$cka',rapi_berseragam='$cka',rapi_rambut_kuku='$cka' WHERE thn_ajaran='$thaj'  and semester='$sem' and bulan='$bulan' and pekan='$pekan' and nis='$tp[nis]'");
}
}

 header("Location: ../home.php?home=nilai&dpn_nl9=n9&klsk=$idkls&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&bl=$bulan&pk=$pekan&nlk=kk"); 
} 


if($rkl=="4" and $bulan!="" and $pekan!=""){

$tam=mysqli_query($koneksi, "SELECT nis FROM tb_santri WHERE kelas_st='$klsk2' AND status='a' "); 
while($tp=mysqli_fetch_assoc($tam)){

$ntgs=mysqli_query($koneksi, "SELECT * FROM  tb_ibadah_asrama WHERE nis=$tp[nis] and pekan='$pekan' and bulan='$bulan' and semester='$sem' and thn_ajaran='$thaj' ");
$cnt=mysqli_num_rows($ntgs);

if($cnt==0){
$rek=mysqli_query($koneksi, "INSERT INTO  tb_ibadah_asrama VALUES('',
	  											'$thaj',
												'$sem',
												'$bulan',
												'$pekan',
												'$tp[nis]',
												'$cka',
												'$cka',
												'$cka',
												'$cka',
												'$cka',
												'$cka',
												'$cka',
												'$cka',
												'$cka')"); 
}else{
mysqli_query($koneksi, "UPDATE tb_ibadah_asrama SET solat_jamaah='$cka',solat_duha='$cka',qiyamullail='$cka',sunnah_rawatib='$cka',wirid_doa='$cka',shaum='$cka',tilawa='$cka',memmimpin_wirid='$cka',adzan='$cka' WHERE thn_ajaran='$thaj'  and semester='$sem' and bulan='$bulan' and pekan='$pekan' and nis='$tp[nis]'");
}
}

 header("Location: ../home.php?home=nilai&dpn_n20=n20&klsk=$idkls&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&bl=$bulan&pk=$pekan&nlk=paa"); 
} 





if($bulan=="" or $pekan==""){
  header("Location: ../home.php?home=nilai&dpn_nl9=n9&klsk=$idkls&klsk=$klsk&klsk2=$klsk2&nlk=$nlk&bl=$bulan&pk=$pekan&psnp=1"); 
}


?>