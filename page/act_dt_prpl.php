<?
include("../koneksi.php");

$thaj=$_COOKIE['thaj'];
$sem=$_COOKIE['sem'];
$rekam=$_POST['rekam'];
$ubah=$_POST['ubah'];
$del=$_POST['del'];
$id_str=$_POST['id_str'];
$kdprpl=$_POST['kdprpl']; 
$hari=$_POST['hari'];
$tgl=$_POST['tgl'];
$bln=$_POST['bln'];
$thn=$_POST['thn'];
//$waktu=$hari.", ".$tgl."-".$bln."-".$thn;
$pr_pl=$_POST['pr_pl'];
$ket=$_POST['ket'];

$foto=$_POST['foto'];
$fotoc=$_FILES['foto']['name']; 
$hukum=$_POST['hukum'];
$kets=$_POST['kets'];
$kelas=$_POST['kelas'];

if(!empty($fotoc)){
if(is_uploaded_file($_FILES['foto']['tmp_name'])){
		move_uploaded_file($_FILES['foto']['tmp_name'], "../foto_kegiatan/".$_FILES['foto']['name']);
		$nmfoto=$_FILES['foto']['name'];
 }}

if($rekam=="Simpan"){
$rek=mysqli_query($koneksi, "INSERT INTO tb_prpl VALUES('','$id_str','$thaj','$sem','$pr_pl','$hukum','$nmfoto','$hari','$tgl','$bln','$thn','$ket','$kets')");
}

if($ubah=="Simpan"){
 mysqli_query($koneksi, "UPDATE tb_prpl SET perihal='$pr_pl',
 								   hkuman='$hukum',
								   foto='$nmfoto',
								   hari='$hari',
								   tgl='$tgl',
								   bln='$bln',
								   thn='$thn',
								   ket='$ket'
                       WHERE id_prpl='$kdprpl' AND thn_ajaran='$thaj' AND semester='$sem' AND ket2='$kets'");
}

if($del=="Hapus"){
   mysqli_query($koneksi, "DELETE FROM tb_prpl WHERE id_prpl='$kdprpl' ");
}
//if($kets=='2'){ header("Location: ../home.php?home=prpl&pgr=$kets"); }else{ header("Location: ../home.php?home=gp&dpn_pg=pp"); }
header("Location: ../home.php?home=prpl&pgr=$kets&klsk=$kelas");
?>