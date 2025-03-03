<?
include("../koneksi.php");

$rekam=$_POST['rekam'];
$rubah=$_POST['rubah'];
$idk_edt=$_POST['idk_edt'];
$idk_edt_st=$_POST['idk_edt_st'];
$id_pgk=$_GET['id_pgk'];
$del=$_GET['del'];
$idk_ddt=$_GET['idk_ddt'];
 
$nis=$_POST['nis'];
$nn=$_POST['nn'];
$nopes=$_POST['nopes'];
$namast=$_POST['namast'];
$foto=$_POST['foto'];
$jkl_st=$_POST['jkl_st'];

$tmpl_st=$_POST['tmpl_st'];
$tgl_st=$_POST['tgl_st'];
$bln_st=$_POST['bln_st'];
$thn_st=$_POST['thn_st'];
//$lahir=$tmpl_st.", ".$tgl_st."-".$bln_st."-".$thn_st;

$agama_st=$_POST['agama_st'];
$tlp_st=$_POST['tlp_st'];
$almt_st=$_POST['almt_st'];
$kota_st=$_POST['kota_st'];
$pro_st=$_POST['pro_st'];
$pos_st=$_POST['pos_st'];
$mail_st=$_POST['mail_st'];
$asl_skl=$_POST['asl_skl'];
$almt_skla=$_POST['almt_skla'];

$tglm=$_POST['tglm'];
$blnm=$_POST['blnm'];
$thnm=$_POST['thnm'];
//$masuk=$tglm."-".$blnm."-".$thnm;

$tglk=$_POST['tglk'];
$blnk=$_POST['blnk'];
$thnk=$_POST['thnk'];
//$keluar=$tglk."-".$blnk."-".$thnk;

$thnajr=$_POST['thnajr'];
$sekolah_asal_p=$_POST['sekolah_asal_p'];
$alsn_pindah=$_POST['alsn_pindah'];
$stas=$_POST['stas'];
$lanjut=$_POST['lanjut'];
$krjdi=$_POST['krjdi'];
$catatan=$_POST['catatan'];
$nmort=$_POST['nmort'];
$nm_ayah_tri=$_POST['nm_ayah_tri'];
$nm_ibu_tri=$_POST['nm_ibu_tri'];

$tmport=$_POST['tmport'];
$tgll=$_POST['tgll'];
$blnl=$_POST['blnl'];
$thnl=$_POST['thnl'];
//$lahirort=$tmport.", ".$tgll."-".$blnl."-".$thnl;

$almtort=$_POST['almtort'];
$agort=$_POST['agort']; 
$tlp_ayah=$_POST['tlp_ayah'];
$tlp_ibu=$_POST['tlp_ibu'];
$stankh=$_POST['stankh'];
$krjort=$_POST['krjort']; 
$phasil_ayah=$_POST['phasil_ayah'];
$phasil_ibu=$_POST['phasil_ibu'];

$kotort=$_POST['kotort'];
$proort=$_POST['proort'];
$posort=$_POST['posort'];
$mailort=$_POST['mailort'];

$ttlst=$_POST['ttlst'];
$mskst=$_POST['mskst'];
$klrst=$_POST['klrst'];
$tmport=$_POST['tmport'];
$fotoc=$_FILES['foto']['name'];
$jklrt=$_POST['jklrt'];
$tat=$_POST['tat'];
$klsk=$_POST['klsk'];

$suku=$_POST['suku'];
$anak_k=$_POST['anak_k'];
$berat=$_POST['berat'];
$gol_d=$_POST['gol_d'];
$w_kulit=$_POST['w_kulit']; 
$hoby=$_POST['hoby'];
$penyakit=$_POST['penyakit'];
$nm_ibu=$_POST['nm_ibu'];
$pd_ayah=$_POST['pd_ayah'];
$pd_ibu=$_POST['pd_ibu'];
$krj_ibu=$_POST['krj_ibu'];
$suku_ayah=$_POST['suku_ayah'];
$tinggi=$_POST['tinggi'];
$nopessd=$_POST['nopessd'];
$thn_skhun=$_POST['thn_skhun'];
$nomor_skhun=$_POST['nomor_skhun'];
$pkerja_wali=$_POST['pkerja_wali'];


if($rekam=="Simpan Data Santri"){

$tdth=mysqli_query($koneksi, "SELECT * FROM tb_santri WHERE nis='$nis'");
$jmld=mysqli_num_rows($tdth);
if($jmld <=0){

   if(!empty($fotoc)){
   if(is_uploaded_file($_FILES['foto']['tmp_name'])){
		move_uploaded_file($_FILES['foto']['tmp_name'], "../foto_santri/".$_FILES['foto']['name']);
		$nmfoto=$_FILES['foto']['name'];
     } }
$rek=mysqli_query($koneksi, "INSERT INTO tb_santri   VALUES('','$nn','$nopessd','$nopes','$thn_skhun','$nomor_skhun','$nis','','','$namast','','$nmfoto','$jkl_st','$tmpl_st','$tgl_st','$bln_st','$thn_st',
'$agama_st','$suku','$anak_k','$berat','$tinggi','$gol_d','$w_kulit','$hoby','$penyakit','$tlp_st','$almt_st','$kota_st','$pro_st','$pos_st','$mail_st','$asl_skl','$almt_skla','$tglm','$blnm','$thnm','$tglk','$blnk','$thnk','$asls','$alsn_pindah','$thnajr','$tat','$stas','$lanjut','$krjdi','$catatan','$nmort','$nm_ibu','$nm_ayah_tri','$nm_ibu_tri','$pkerja_wali','$pd_ayah','$pd_ibu','$suku_ayah','$almtort','$tlp_ayah','$tlp_ibu','$krjort','$krj_ibu','$phasil_ayah','$phasil_ibu','$mailort')");

header("Location: ../home.php?home=st");
 }else{ header('Location: ../home.php?home=st&psn=1');
  }
}

if($rubah=="Simpan"){
if(!empty($fotoc)){
if(is_uploaded_file($_FILES['foto']['tmp_name'])){
		move_uploaded_file($_FILES['foto']['tmp_name'], "../foto_santri/".$_FILES['foto']['name']);
		$nmfoto=$_FILES['foto']['name'];
 }
  mysqli_query($koneksi, "UPDATE tb_santri SET foto_st='$nmfoto' WHERE id_santri='$idk_edt_st'");
}

 mysqli_query($koneksi, "UPDATE tb_santri SET nis_nasional='$nn',
 								   n_ujian_sd='$nopessd',
								   n_ujian_smp='$nopes',
								   tahun_shkun='$thn_skhun',
								   no_skhun='$nomor_skhun',
 								   nis='$nis',
                                   nama='$namast',
								   jkl='$jkl_st',
								   tempat_lahir='$tmpl_st',
								   tgl_lahir='$tgl_st',
								   bln_lahir='$bln_st',
								   tahun_lahir='$thn_st',
                                   agama='$agama_st',
								   kesukuan='$suku',
								   anak_ke='$anak_k',
								   berat='$berat',
								   tinggi='$tinggi',
								   g_darah='$gol_d',
								   warna_kulit='$w_kulit',
								   hoby='$hoby',
								   penyakit='$penyakit',
								   telpon='$tlp_st',
								   alamat='$almt_st',
								   kota='$kota_st',
								   propinsi='$pro_st',
								   pos='$pos_st',
								   email='$mail_st',
								   asal_sekolah='$asl_skl',
								   asl_skl='$almt_skla',
								   tgl_masuk='$tglm',
								   bln_masuk='$blnm',
								   thn_masuk='$thnm',
								   tgl_keluar='$tglk',
								   bln_keluar='$blnk',
								   thn_keluar='$thnk',
								   pindahan='$sekolah_asal_p',
								   alasan_pindah='$alsn_pindah',
								   thn_ajaranmsk='$thnajr',
								   ta_tamat='$tat',
								   status='$stas',
								   lanjut_ke='$lanjut',
								   kerja='$krjdi',
								   note='$catatan',
								   nama_ort='$nmort',
								   nama_ibu='$nm_ibu',
								   nm_wali='$nm_ayah_tri',
								   alamat_wali='$nm_ibu_tri',
								   pkerja_wali='$pkerja_wali',
								   p_ayah='$pd_ayah',
								   p_ibu='$pd_ibu',
								   suku='$suku_ayah',
								   alamat_ort='$almtort',
								   tlp_ayah='$tlp_ayah',
								   tlp_ibu='$tlp_ibu',
								   pekerjaan_ayah='$krjort',
								   pekerjaan_ibu='$krj_ibu',
								   phasil_ayah='$phasil_ayah',
								   phasil_ibu='$phasil_ibu',
								   mail_ort='$mailort'
                       WHERE id_santri='$idk_edt_st'");
  header("Location: ../home.php?home=st&dpn_st=ld&klsk=$klsk");
}

if($del=="oke"){
   mysqli_query($koneksi, "DELETE FROM tb_santri WHERE id_santri='$idk_ddt' ");
   header("Location: ../home.php?home=st&dpn_st=ld");
}

?>