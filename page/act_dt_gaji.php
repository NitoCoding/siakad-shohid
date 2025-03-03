<?
include("../koneksi.php");

$rekam=$_POST['rekam'];
$rekam2=$_POST['rekam2'];
$rekam3=$_POST['rekam3'];
$rekam4=$_POST['rekam4'];
$rekam5=$_POST['rekam5'];
$rekam6=$_POST['rekam6'];
$rekam7=$_POST['rekam7'];
$rekam8=$_POST['rekam8'];
$rekam9=$_GET['rekam9'];
$Submit=$_POST['Submit'];
$Submit2=$_POST['Submit2'];
$Submit3=$_POST['Submit3'];
$Submit4=$_POST['Submit4'];
$del=$_GET['del'];
$del_p=$_GET['del_p'];
$rekam_ckl=$_POST['rekam_ckl'];
$rekam_ls_ckl=$_POST['rekam_ls_ckl'];

$nm_gp=$_POST['nm_gp'];
$jml_gp=$_POST['jml_gp'];
$nm_tj=$_POST['nm_tj'];
$jml_tj=$_POST['jml_tj'];
$nm_pt=$_POST['nm_pt'];
$jml_pt=$_POST['jml_pt'];
$id_grk=$_POST['id_grk'];
$id_gpg=$_POST['id_gpg'];
$kenaikan=$_POST['kenaikan'];
$nm_gr_p=$_POST['nm_gr_p'];
$pinjaman=$_POST['pinjaman'];
$jumlah=$_POST['jumlah'];
$ketp=$_POST['ketp'];
$id_pinjaman=$_POST['id_pinjaman'];
$jt=$_POST['jt'];
$tj_si=$_POST['tj_si'];
$idgp_cg=$_GET['idgp_cg'];
$bulan=$_GET['bulan'];
$tahun=$_GET['tahun'];
$tot_tj=$_GET['tot_tj'];
$tot_pt=$_GET['tot_pt'];
$idk_t=$_GET['idk_t'];

$tj_anak=$_POST['tj_anak'];
$tj_gt=$_POST['tj_gt'];
$tj_kompetensi=$_POST['tj_kompetensi'];
$tj_lain=$_POST['tj_lain'];

$pt_lis=$_POST['pt_lis'];
$pt_bpjs_ks=$_POST['pt_bpjs_ks'];
$pp=$_POST['pp'];
$idxk=$_POST['idxk'];
$idxk2=$_POST['idxk2'];

$lokasi=$_POST['lokasi'];
$lokasi_lst=$_POST['lokasi_lst'];
$list_lokasi=$_POST['list_lokasi'];

if($rekam=="Simpan"){
   $rek=mysqli_query($koneksi, "INSERT INTO tb_gapok VALUES('','$nm_gp','$jml_gp')");
   header("Location: ../home.php?home=gjk&dpn_pg=id");
}

if($rekam2=="Simpan"){
   $rek=mysqli_query($koneksi, "INSERT INTO tb_tunjangan VALUES('','$nm_tj','$jml_tj','$jt')");
   header("Location: ../home.php?home=gjk&dpn_pg=ld");
}

if($rekam3=="Simpan"){
   $rek=mysqli_query($koneksi, "INSERT INTO tb_potongan VALUES('','$nm_pt','$jml_pt')");
   header("Location: ../home.php?home=gjk&dpn_pg=pp");
}

if($rekam4=="Simpan"){
   $rek=mysqli_query($koneksi, "INSERT INTO tb_gapok_gk VALUES('','$id_grk','$id_gpg','$kenaikan')");
   header("Location: ../home.php?home=gjk&dpn_pg=id");
}

if($rekam5=="Simpan"){
   $rek=mysqli_query($koneksi, "INSERT INTO tb_tunjangan_gk VALUES('','$id_grk','$id_gpg','$tj_si','$tj_anak','$tj_gt','$tj_kompetensi','$tj_lain')");
   header("Location: ../home.php?home=gjk&dpn_pg=ld");
}

if($rekam6=="Simpan"){
   $rek=mysqli_query($koneksi, "INSERT INTO tb_potongan_gk VALUES('','$id_grk','$id_gpg','$pt_lis','$pt_bpjs_ks','$pp')");
   header("Location: ../home.php?home=gjk&dpn_pg=pp");
}

if($rekam7=="Simpan"){
   $rek=mysqli_query($koneksi, "INSERT INTO tb_pinjaman VALUES('','$nm_gr_p','$pinjaman','$jumlah','$ketp')");
   header("Location: ../home.php?home=gjk&dpn_pg=pp");
}

if($rekam8=="ubah"){
 $ntgk2=mysqli_query($koneksi, "SELECT * FROM tb_pinjaman WHERE id_pjm='$id_pinjaman'");
 $cgk2=mysqli_fetch_assoc($ntgk2);
 $sis_b=$cgk2['telah_dibayar']+$bayar;
 
 mysqli_query($koneksi, "UPDATE tb_pinjaman SET telah_dibayar='$sis_b' WHERE id_pjm='$id_pinjaman' ");
  header("Location: ../home.php?home=gjk&dpn_pg=pp");
}

if($rekam9=="Simpan"){
   $tampil=mysqli_query($koneksi, "SELECT * FROM tb_rekap_gaji WHERE id_gr='$idgp_cg' and bulan='$bulan' and tahun='$tahun' and ket='s' ");
   $tp=mysqli_num_rows($tampil);
	if($tp <=0){
       $rek=mysqli_query($koneksi, "INSERT INTO tb_rekap_gaji VALUES('','$idgp_cg','$tot_tj','$tot_pt','$bulan','$tahun','s')");
   }
   header("Location: ../home.php?home=gjk&dpn_pg=rg&blnk=$bulan&taj=$tahun");
}

if($Submit=="Ubah")
{
   mysqli_query($koneksi, "UPDATE tb_gapok_gk SET id_gapok='$id_gpg',
								   kenaikan='$kenaikan'
                       WHERE id_ggk='$idxk'");
 
 header("Location: ../home.php?home=gjk&dpn_pg=id");
}

if($Submit2=="Ubah")
{
   mysqli_query($koneksi, "UPDATE tb_tunjangan_gk SET id_tj='$id_gpg',
								   tj_istri_suami='$tj_si',
								   tj_anak='$tj_anak',
								   tj_gp_tetap='$tj_gt',
								   tj_kompetensi='$tj_kompetensi',
								   tj_lain='$tj_lain'
                       WHERE id_tj_gk='$idxk'");
 
 header("Location: ../home.php?home=gjk&dpn_pg=ld");
}

if($Submit3=="Ubah")
{
   mysqli_query($koneksi, "UPDATE tb_potongan_gk SET id_pot='$id_gpg',
								   p_listrik='$pt_lis',
								   p_kesehatan='$pt_bpjs_ks',
								   p_pinjaman='$pp'
                       WHERE id_pot_gr='$idxk'");
header("Location: ../home.php?home=gjk&dpn_pg=pp");
}

if($Submit4=="Ubah")
{
   mysqli_query($koneksi, "UPDATE tb_gapok SET gapok='$jml_gp'
                       WHERE id_gp='$idxk2'");
   header("Location: ../home.php?home=gjk&dpn_pg=id");
}

if($del=="oke"){
   mysqli_query($koneksi, "DELETE FROM tb_tunjangan_gk WHERE id_tj_gk='$idk_t' ");
    header("Location: ../home.php?home=gjk&dpn_pg=ld");
}
if($del=="oke2"){
   mysqli_query($koneksi, "DELETE FROM tb_gapok_gk WHERE id_ggk='$idk_t' ");
   header("Location: ../home.php?home=gjk&dpn_pg=id");
}
if($del=="oke3"){
   mysqli_query($koneksi, "DELETE FROM tb_pinjaman WHERE id_pjm='$idk_t' ");
   header("Location: ../home.php?home=gjk&dpn_pg=pp");
}
if($del=="oke4"){
   mysqli_query($koneksi, "DELETE FROM tb_tunjangan WHERE id_tj='$idk_t' ");
   header("Location: ../home.php?home=gjk&dpn_pg=ld");
}
if($del_p=="oke"){
   mysqli_query($koneksi, "DELETE FROM tb_potongan_gk WHERE id_pot_gr='$idk_t' ");
   header("Location: ../home.php?home=gjk&dpn_pg=pp");
}
if($rekam_ckl=="Simpan"){
   $rek=mysqli_query($koneksi, "INSERT INTO tb_lokasi_ceklist VALUES('','$lokasi')");
   header("Location: ../home.php?home=ceklst&dpn_st=lkcek");
}
if($del=="oke5"){
   mysqli_query($koneksi, "DELETE FROM tb_lokasi_ceklist WHERE id_ceklist='$idk_t' ");
   header("Location: ../home.php?home=ceklst&dpn_st=lkcek");
}
if($rekam_ls_ckl=="Simpan"){
   $rek=mysqli_query($koneksi, "INSERT INTO tb_list_lokasi_ceklist VALUES('','$lokasi_lst','$list_lokasi')");
   header("Location: ../home.php?home=ceklst&dpn_st=lscek");
}
if($del=="oke6"){
   mysqli_query($koneksi, "DELETE FROM tb_list_lokasi_ceklist WHERE id_list_lokasi='$idk_t' ");
   header("Location: ../home.php?home=ceklst&dpn_st=lscek");
}
?>