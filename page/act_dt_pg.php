<?
include("../koneksi.php");

$rekam=$_POST['rekam'];
$rubah=$_POST['rubah'];
$idk_edt=$_POST['idk_edt']; 
$id_pgk=$_GET['id_pgk'];
$del=$_GET['del'];

$nip=$_POST['nip'];
$thn_dftr=$_POST['thn_dftr'];
$namapg=$_POST['namapg'];
$jkl_pg=$_POST['jkl_pg'];

$tempatl=$_POST['tempatl'];
$tgl=$_POST['tgl'];
$bln=$_POST['bln'];
$thn=$_POST['thn'];
$lahir=$tempatl.", ".$tgl_gp."-".$bln_gp."-".$thn_gp;

$sta_gp=$_POST['sta_gp'];

$jml_anak=$_POST['jml_anak'];
$pendidikan=$_POST['pendidikan'];
$jabatan=$_POST['jabatan'];
$ket_jabatan=$_POST['ket_jabatan'];
$status_pg=$_POST['status_pg'];
$alamat=$_POST['alamat'];
$telpon=$_POST['telpon'];
$sts_p=$_POST['sts_p'];
$unit=$_POST['unit'];

$foto=$_POST['foto'];
$fotoc=$_FILES['foto']['name'];


if($rekam=="Simpan"){
if(!empty($fotoc)){
if(is_uploaded_file($_FILES['foto']['tmp_name'])){
		move_uploaded_file($_FILES['foto']['tmp_name'], "../foto_gp/".$_FILES['foto']['name']);
		$nmfoto=$_FILES['foto']['name'];
 }}
if(!empty($nip)){
 $rek=mysqli_query($koneksi, "INSERT INTO guru_pegawai VALUES('',
 '$nip',
 '$thn_dftr',
 '$namapg',
 '$nmfoto',
 '$jkl_pg',
 '$tempatl',
 '$tgl',
 '$bln',
 '$thn',
 '$sta_gp',
 '$jml_anak',
 '$pendidikan',
 '$jabatan',
 '$ket_jabatan',
 '$status_pg',
 '$sts_p',
 '$unit',
 '$alamat',
 '$telpon')");
 }
header("Location: ../home.php?home=gp");
}

if($rubah=="Simpan"){
if(!empty($fotoc)){
if(is_uploaded_file($_FILES['foto']['tmp_name'])){
		move_uploaded_file($_FILES['foto']['tmp_name'], "../foto_gp/".$_FILES['foto']['name']);
		$nmfoto=$_FILES['foto']['name'];
 }
  mysqli_query($koneksi, "UPDATE guru_pegawai SET foto_gp='$nmfoto' WHERE id_gp='$idk_edt'");
}

mysqli_query($koneksi, "UPDATE guru_pegawai SET nip='$nip', 
thn_trdaftar='$thn_dftr',
nama_gp='$namapg',
jkl_gp='$jkl_pg',
tempat_ttl='$tempatl',
tgl_ttl='$tgl',
bln_ttl='$bln',
thn_ttl='$thn',
status_pernikahan='$sta_gp',
jml_anak='$jml_anak',
pendidikan='$pendidikan',
jabatan='$jabatan',
ket_jabatan='$ket_jabatan',
status_pg='$status_pg',
status_kp='$sts_p',
unit='$unit',
alamat='$alamat',
telpon='$telpon' 
 WHERE id_gp='$idk_edt'");
 header("Location: ../home.php?home=gp&dpn_pg=ld");
}
if($del=="oke"){
   mysqli_query($koneksi, "DELETE FROM guru_pegawai WHERE id_gp='$id_pgk' ");
   header("Location: ../home.php?home=gp&dpn_pg=ld");
}

?>