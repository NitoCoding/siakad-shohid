<?
include("../koneksi.php");

$rekam=$_POST['rekam'];
$ubah=$_POST['ubah'];
$rekam2=$_POST['rekam2'];
$ubah2=$_POST['ubah2'];
$idkusr=$_POST['idkusr'];
$pas=$_POST['pas'];
$level=$_POST['level'];
$idwls=$_POST['idwls'];
$idks=$_POST['idks'];
$epas=md5("$pas");

$passt=$_POST['passt'];
$epasst=md5("$passt");

$del=$_GET['del'];
$id_usr=$_GET['id_usr'];

// ceklist
$blns=$_COOKIE['blns'];
$thaj=$_COOKIE['thaj'];
$Submit=$_POST['Submit'];
$id_hsil=$_POST['id_hsil'];
$kd_ls_lokasi=$_POST['kd_ls_lokasi'];
$kd_ls_lok=$_POST['kd_ls_lok'];
$checkbox1=$_POST['checkbox1'];
$komen=$_POST['komen'];
$tgs=date("d");
$id_lc=$_POST['id_lc'];

$foto=$_POST['foto'];
$fotoc=$_FILES['foto']['name'];

$foto2=$_POST['foto2'];
$fotoc2=$_FILES['foto2']['name'];


if($rekam=="Simpan"){
   $rek=mysqli_query($koneksi, "INSERT INTO tb_user VALUES('','$idkusr','$epas','$pas','$level')");
   header("Location: ../home.php?home=usr&usr1=k1");
}
if($ubah=="Simpan"){
 mysqli_query($koneksi, "UPDATE tb_user SET pasw='$epas',
								   pas2='$pas',
								   ket='$level'
                        WHERE id_user='$idks' ");
  header("Location: ../home.php?home=usr&usr1=k1");
}

if($ubah2=="Simpan"){
 mysqli_query($koneksi, "UPDATE tb_santri SET pass1='$passt',
								   pass2='$epasst'
                        WHERE id_santri='$idkusr'");
  header("Location: ../home.php?home=usr&usr2=k2");
}

if($del=="oke"){
   mysqli_query($koneksi, "DELETE FROM tb_user WHERE id_user='$id_usr' ");
   header("Location: ../home.php?home=usr&usr1=k1");
}

// PEREKAMAN CEKLIST 
if($Submit=="Simpan"){
if(!empty($fotoc)){
if(is_uploaded_file($_FILES['foto']['tmp_name'])){
		move_uploaded_file($_FILES['foto']['tmp_name'], "../foto_ceklist/".$_FILES['foto']['name']);
		$nmfoto=$_FILES['foto']['name'];
 }}
if(!empty($fotoc2)){
if(is_uploaded_file($_FILES['foto2']['tmp_name'])){
		move_uploaded_file($_FILES['foto2']['tmp_name'], "../foto_ceklist/".$_FILES['foto2']['name']);
		$nmfoto2=$_FILES['foto2']['name'];
 }}
 
   $tampil2=mysqli_query($koneksi, "SELECT * FROM tb_hsl_ceklist WHERE id_hsl='$id_hsil' ");
   $tp2=mysqli_num_rows($tampil2);
   if($tp2==0){
      $rek=mysqli_query($koneksi, "INSERT INTO tb_hsl_ceklist VALUES('','$kd_ls_lokasi','$kd_ls_lok','$checkbox1','$komen','$tgs','$blns','$thaj','$nmfoto','$nmfoto2')");  
	}else{
	    mysqli_query($koneksi, "UPDATE tb_hsl_ceklist SET hasil_ck='$checkbox1',komentar_ck='$komen' WHERE id_hsl='$id_hsil' ");
	}  
   header("Location: ../home.php?home=ceklst&dpn_st=pg_dckl&id_lc=$id_lc");
}
?>