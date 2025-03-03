<?
include("../koneksi.php");
$rekam=$_POST['rekam'];
$ubah=$_POST['ubah'];
$menyimpan=$_POST['menyimpan'];
$mengubah=$_POST['mengubah'];
$merekam=$_POST['merekam'];
$meubah=$_POST['meubah'];
$rekam_c=$_POST['rekam_c'];
$ubah_c=$_POST['ubah_c'];
$rekam_cm=$_POST['rekam_cm'];
$ubah_cm=$_POST['ubah_cm'];
$merekam_cr=$_POST['merekam_cr'];
$meubah_cr=$_POST['meubah_cr'];
$merekam_cas=$_POST['merekam_cas'];
$meubah_cas=$_POST['meubah_cas'];
$merekam_paa=$_POST['merekam_paa'];
$meubah_paa=$_POST['meubah_paa'];
$merekam_da=$_POST['merekam_da'];
$meubah_da=$_POST['meubah_da'];
$merekam_kka=$_POST['merekam_kka'];
$meubah_kka=$_POST['meubah_kka'];
$rekam_wf=$_POST['rekam_wf'];
$ubah_wf=$_POST['ubah_wf'];
$menyimpan_kt=$_POST['menyimpan_kt'];
$mengubah_kt=$_POST['mengubah_kt'];
$menyimpan_kti=$_POST['menyimpan_kti'];
$mengubah_kti=$_POST['mengubah_kti'];

$nisk=$_POST['nisk'];
$nisk2=$_POST['nisk2'];
$nisk22=$_POST['nisk22'];
$nisk222=$_POST['nisk222'];

$mpl=$_POST['mpl'];
$idkls=$_POST['idkls'];
$idkls2=$_POST['idkls2'];
$idkls22=$_POST['idkls22'];
$idkls222=$_POST['idkls222'];

$thaj=$_COOKIE['thaj'];
$sem=$_COOKIE['sem'];
$nt1=$_POST['nt1'];
$nt2=$_POST['nt2'];
$nt3=$_POST['nt3'];
$nt4=$_POST['nt4'];
$nt5=$_POST['nt5'];
$nt6=$_POST['nt6'];
$nt7=$_POST['nt7'];
$nt8=$_POST['nt8'];
$nt9=$_POST['nt9'];
$nt10=$_POST['nt10'];

$uh1=$_POST['uh1'];
$uh2=$_POST['uh2'];
$uh3=$_POST['uh3'];
$uh4=$_POST['uh4'];
$uh5=$_POST['uh5'];
$kterampilan=$_POST['kterampilan'];
$sikap=$_POST['sikap'];

$nuts=$_POST['nuts'];
$remedi=$_POST['remedi'];
$remedi_us=$_POST['remedi_us'];
$nus=$_POST['nus'];
$klsk2=$_POST['klsk2'];
$klsk22=$_POST['klsk22'];
$klsk222=$_POST['klsk222'];
$klsk2222=$_POST['klsk2222'];

$eskul1=$_POST['eskul1'];
$eskul2=$_POST['eskul2'];

$blnk=$_POST['blnk'];

$pengetahuan=$_POST['pengetahuan'];
$keterampilan=$_POST['keterampilan'];
$sikap=$_POST['sikap'];
$idstr=$_POST['idstr'];

$bulan=$_POST['bulan'];
$pekan=$_POST['pekan'];
$nlk=$_POST['nlk'];

$bulan2=$_POST['bulan2'];
$pekan2=$_POST['pekan2'];
$nlk2=$_POST['nlk2'];

$bulan222=$_POST['bulan222'];
$pekan222=$_POST['pekan222'];
$nlk222=$_POST['nlk222'];

$bulan22=$_POST['bulan22'];
$pekan22=$_POST['pekan22'];
$nlk22=$_POST['nlk22'];

$nc_s=$_POST['nc_s'];
$nc_b=$_POST['nc_b'];
$nc_e=$_POST['nc_e'];
$nc_m=$_POST['nc_m'];
$nc_g=$_POST['nc_g'];
$nc_u=$_POST['nc_u'];
$nc_c=$_POST['nc_c'];
$md_w=$_POST['md_w'];
$adz=$_POST['adz'];

$nc_s2=$_POST['nc_s2'];
$nc_b2=$_POST['nc_b2'];
$nc_e2=$_POST['nc_e2'];
$nc_m2=$_POST['nc_m2'];
$nc_g2=$_POST['nc_g2'];
$nc_u2=$_POST['nc_u2'];
$nc_c2=$_POST['nc_c2'];

$nc_s22=$_POST['nc_s22'];
$nc_b22=$_POST['nc_b22'];
$nc_e22=$_POST['nc_e22'];
$nc_m22=$_POST['nc_m22'];
$nc_g22=$_POST['nc_g22'];
$nc_u22=$_POST['nc_u22'];
$nc_c22=$_POST['nc_c22'];

$nc_g223=$_POST['nc_g223'];
$nc_g224=$_POST['nc_g224'];
$nc_g225=$_POST['nc_g225'];

$nc_s222=$_POST['nc_s222'];
$nc_b222=$_POST['nc_b222'];
$nc_e222=$_POST['nc_e222'];
$nc_m222=$_POST['nc_m222'];
$nc_g222=$_POST['nc_g222'];
$nc_g2222=$_POST['nc_g2222'];


$ruh12=$_POST['ruh12'];
$ruh122=$_POST['ruh122'];
$uh123=$_POST['uh123'];
$uh124=$_POST['uh124'];
$uh125=$_POST['uh125'];

$pres=$_POST['pres'];	
$dess=$_POST['dess'];

$Submit=$_POST['Submit'];
$textfield=$_POST['textfield'];
$textfield2=$_POST['textfield2'];
$textfield3=$_POST['textfield3'];
$textfield4=$_POST['textfield4'];
$textfield5=$_POST['textfield5'];
$textfield6=$_POST['textfield6'];
$textfield62=$_POST['textfield62'];
$textfield63=$_POST['textfield63'];
$textfield64=$_POST['textfield64'];
$textfield65=$_POST['textfield65'];
$textfield66=$_POST['textfield66'];
$textfield67=$_POST['textfield67'];
$textfield672=$_POST['textfield672'];
$idb=$_POST['idb'];

$judul=$_POST['judul'];
$nilai=$_POST['nilai'];

$select=$_POST['select'];
$select2=$_POST['select2'];
$select3=$_POST['select3'];
$select4=$_POST['select4'];
$select5=$_POST['select5'];
$select6=$_POST['select6'];
$select7=$_POST['select7'];

$pb=0;
$pb2=0;
$rtgs=0;


if($nt1!="" || $nt1<=-1){ $pb=$pb+1; }
if($nt2!="" || $nt2<=-1){ $pb=$pb+1; }
if($nt3!="" || $nt3<=-1){ $pb=$pb+1; }
if($nt4!="" || $nt4<=-1){ $pb=$pb+1; }
if($nt5!="" || $nt5<=-1){ $pb=$pb+1; }
if($nt6!="" || $nt6<=-1){ $pb=$pb+1; }
if($nt7!="" || $nt7<=-1){ $pb=$pb+1; }
if($nt8!="" || $nt8<=-1){ $pb=$pb+1; }
if($nt9!="" || $nt9<=-1){ $pb=$pb+1; }
if($nt10!="" || $nt10<=-1){ $pb+=1; }
if($nt1!="" || $nt2!="" || $nt3!="" || $nt4!="" || $nt5!="" || $nt6!="" || $nt7!="" || $nt8!="" || $nt9!="" || $nt10!=""){
$rtgs=($nt1+$nt2+$nt3+$nt4+$nt5+$nt6+$nt7+$nt8+$nt9+$nt10)/$pb;


}
if($uh1!="" || $uh1<=-1){ $pb2=$pb2+1; }
if($uh2!="" || $uh2<=-1){ $pb2=$pb2+1; }
if($uh3!="" || $uh3<=-1){ $pb2=$pb2+1; }
if($uh4!="" || $uh4<=-1){ $pb2=$pb2+1; }
if($uh5!="" || $uh5<=-1){ $pb2=$pb2+1; }
if($uh1!="" || $uh2!="" || $uh3!="" || $uh4!="" || $uh5!=""){
$rtuh=($uh1+$uh2+$uh3+$uh4+$uh5)/$pb2;

}

if($idkls=='9'){
$nrrp=round(($rtgs+$rtuh+$nuts+$nus)/4); // rumus nilai raport K13
}else{
if($rtgs!=" "){ $nlh=(($rtgs*2)+$rtuh)/3; }
if($nlh!=" "){
   $nl_harian=$nlh*2;                               // rumus nilai raport KTSP
   $nl_ujian_semester=$nus;
 $nrrp=($nl_harian+$nuts+$nl_ujian_semester)/4; }
 }




  if($rekam=="Simpan"){
 
   $rek=mysqli_query($koneksi, "INSERT INTO tb_nilai VALUES('$nisk',
   												 '$mpl',
												 '$sem',
												 '$thaj',
												 '$idkls',
												 '$nt1',
												 '$nt2',
												 '$nt3',
												 '$nt4',
												 '$nt5',
												 '$nt6',
												 '$nt7',
												 '$nt8',
												 '$nt9',
												 '$nt10',
												 '$sikap',
												 '$kterampilan',
												 '$rtgs',
												 '$uh1',
												 '$ruh12',
												 '$uh2',
												 '$ruh122',
												 '$uh3',
												 '$uh123',
												 '$uh4',
												 '$uh124',
												 '$uh5',
												 '$uh125',
												 '$rtuh',
												 '$nlh',
												 '$nuts',
												 '$remedi',
												 '$nus',
												 '$remedi_us',
												 '$nrrp')"); 
 
header("Location: ../home.php?home=nilai&dpn_nl1=n1&nisk=$nisk&klsk=$idkls&klsk2=$klsk2&mpl=$mpl"); 
} 
if($ubah=="Simpan"){
   mysqli_query($koneksi, "UPDATE tb_nilai SET nt1='$nt1',
									nt2='$nt2',
									nt3='$nt3',
									nt4='$nt4',
									nt5='$nt5',
									nt6='$nt6',
									nt7='$nt7',
									nt8='$nt8',
									nt9='$nt9',
									nt10='$nt10',
									sikap='$sikap',
									keterampilan='$kterampilan',
									rata_tgs='$rtgs',
									uh1='$uh1',
									remedi_uh1='$ruh12',
									uh2='$uh2',
									remedi_uh2='$ruh122',
									uh3='$uh3',
									remedi_uh3='$uh123',
									uh4='$uh4',
									remedi_uh4='$uh124',
									uh5='$uh5',
									remedi_uh5='$uh125',
									rata_uh='$rtuh',
									nh='$nlh',
									uts='$nuts',
									remedi='$remedi',
									us='$nus',
									remedi_us='$remedi_us',
									raport='$nrrp' WHERE nis='$nisk' and kd_mp='$mpl' and semester='$sem' and thn_ajaran='$thaj' and kd_kelas='$idkls' ");
header("Location: ../home.php?home=nilai&dpn_nl1=n1&nisk=$nisk&klsk=$idkls&klsk2=$klsk2&mpl=$mpl");
}  
 
if($rekam=="Save"){
      $rek=mysqli_query($koneksi, "INSERT INTO tb_nilai_ext VALUES('',
	  											'$thaj',
												'$sem',
												'$blnk',
   												 '$nisk',
												 '$klsk2',
												 '$nt1',
												 '$nt2',
												 '$nt3',
												 '$nt4',
												 '$nt5')");											 
	header("Location: ../home.php?home=nilai&dpn_nl2=n2&nisk=$nisk&klsk=$idkls&klsk2=$klsk2&blnk=$blnk");											 
    }

if($ubah=="Save"){
    mysqli_query($koneksi, "UPDATE tb_nilai_ext SET sakit='$nt1',
									izin='$nt2',
									alpa='$nt3',
									t_solat='$nt4',
									hafalan_qr='$nt5'
								     WHERE kd_santri='$nisk' and kelas='$klsk2' and semester='$sem' and thn_ajar='$thaj' and bulan='$blnk' ");
	header("Location: ../home.php?home=nilai&dpn_nl2=n2&nisk=$nisk&klsk=$idkls&klsk2=$klsk2&blnk=$blnk"); 
	} 



 if($rekam=="S A V E"){
   $rek=mysqli_query($koneksi, "INSERT INTO tb_nilai_lisan VALUES('',
	  											'$thaj',
												'$sem',
												'$nisk',
												'$mpl',
												'$nus')"); 
 header("Location: ../home.php?home=nilai&dpn_nl4=n4&nisk=$nisk&klsk=$idkls&klsk2=$klsk2&mpl=$mpl"); 
} 

if($ubah=="S A V E"){
   mysqli_query($koneksi, "UPDATE tb_nilai_lisan SET nilai='$nus' WHERE nis_santri='$nisk' and kd_mp='$mpl' and semester='$sem' and thn_ajaran='$thaj' ");
header("Location: ../home.php?home=nilai&dpn_nl4=n4&nisk=$nisk&klsk=$idkls&klsk2=$klsk2&mpl=$mpl");
} 

if($menyimpan=="S A V E"){
    $rek=mysqli_query($koneksi, "INSERT INTO tb_nilai_lisan VALUES('',
	  											'$thaj',
												'$sem',
												'$nisk',
												'$mpl',
												'$nus')"); 
 header("Location: ../home.php?home=nilai&dpn_nl5=n5&nisk=$nisk&klsk=$idkls&klsk2=$klsk2&mpl=$mpl");
}  

if($mengubah=="S A V E"){
   mysqli_query($koneksi, "UPDATE tb_nilai_lisan SET nilai='$nus' WHERE nis_santri='$nisk' and kd_mp='$mpl' and semester='$sem' and thn_ajaran='$thaj' ");
header("Location: ../home.php?home=nilai&dpn_nl5=n5&nisk=$nisk&klsk=$idkls&klsk2=$klsk2&mpl=$mpl");
}  

if($merekam=="S A V E"){
    $rek=mysqli_query($koneksi, "INSERT INTO tb_nilai_lisan VALUES('',
	  											'$thaj',
												'$sem',
												'$nisk',
												'$mpl',
												'$nus')"); 
 header("Location: ../home.php?home=nilai&dpn_nl6=n6&nisk=$nisk&klsk=$idkls&klsk2=$klsk2&mpl=$mpl");
}  

if($meubah=="S A V E"){
   mysqli_query($koneksi, "UPDATE tb_nilai_lisan SET nilai='$nus' WHERE nis_santri='$nisk' and kd_mp='$mpl' and semester='$sem' and thn_ajaran='$thaj' ");
header("Location: ../home.php?home=nilai&dpn_nl6=n6&nisk=$nisk&klsk=$idkls&klsk2=$klsk2&mpl=$mpl");
} 


 if($rekam_c=="S A V E"){
$rek=mysqli_query($koneksi, "INSERT INTO tb_catatan_wk VALUES('',
	  											'$thaj',
												'$sem',
												'$klsk2',
												'$nisk',
												'$nus')"); 
 header("Location: ../home.php?home=nilai&dpn_nl7=n7&nisk=$nisk&klsk=$idkls&klsk2=$klsk2&mpl=$mpl"); 
} 

if($ubah_c=="S A V E"){
   mysqli_query($koneksi, "UPDATE tb_catatan_wk SET catatan='$nus' WHERE nis='$nisk' and kelas='$klsk2' and semester='$sem' and thn_ajaran='$thaj' ");
header("Location: ../home.php?home=nilai&dpn_nl7=n7&nisk=$nisk&klsk=$idkls&klsk2=$klsk2&mpl=$mpl");
}   

if($rekam_cm=="S A V E"){
$rek=mysqli_query($koneksi, "INSERT INTO catatan_mapel VALUES('',
	  											'$idstr',
												'$klsk2',
												'$sem',
												'$thaj',
												'$pengetahuan',
												'$keterampilan',
												'$pres',
												'$dess')"); 
 header("Location: ../home.php?home=nilai&dpn_nl8=n8&nisk=$nisk&klsk=$idkls&klsk2=$klsk2"); 
} 

if($ubah_cm=="S A V E"){
   mysqli_query($koneksi, "UPDATE catatan_mapel SET predikat='$pengetahuan',deskripsi='$keterampilan',predikat_s='$pres',deskripsi_s='$dess' WHERE kd_santri='$idstr' and  
                kelas='$klsk2' and semester='$sem' and tahun_ajaran='$thaj' ");
header("Location: ../home.php?home=nilai&dpn_nl8=n8&nisk=$nisk&klsk=$idkls&klsk2=$klsk2");
}   

if($merekam_cr=="S A V E" and $nlk=='paa'){
$rek=mysqli_query($koneksi, "INSERT INTO tb_adab_sekolah VALUES('',
	  											'$thaj',
												'$sem',
												'$bulan',
												'$pekan',
												'$nisk',
												'$nc_s',
												'$nc_b',
												'$nc_e',
												'$nc_m',
												'$nc_g',
												'$nc_u',
												'$nc_c')"); 
 header("Location: ../home.php?home=nilai&dpn_nl9=n9&nisk=$nisk&klsk=$idkls&klsk2=$klsk2&nlk=$nlk&bl=$bulan&pk=$pekan"); 
}
if($meubah_cr=="S A V E" and $nlk=='paa'){
  mysqli_query($koneksi, "UPDATE tb_adab_sekolah SET salam='$nc_s',bicara='$nc_b',belajar='$nc_e',makan_minum='$nc_m',ke_guru='$nc_g',bergaul='$nc_u',bercanda='$nc_c' WHERE thn_ajaran='$thaj'  and semester='$sem' and bulan='$bulan' and pekan='$pekan' and nis='$nisk'");
  header("Location: ../home.php?home=nilai&dpn_nl9=n9&nisk=$nisk&klsk=$idkls&klsk2=$klsk2&nlk=$nlk&bl=$bulan&pk=$pekan");
}

if($merekam_cr=="S A V E" and $nlk2=='kd'){
$rek=mysqli_query($koneksi, "INSERT INTO tb_kedisiplinan_sekolah VALUES('',
	  											'$thaj',
												'$sem',
												'$bulan2',
												'$pekan2',
												'$nisk2',
												'$nc_s2',
												'$nc_b2',
												'$nc_e2',
												'$nc_m2',
												'$nc_g2',
												'$nc_u2',
												'$nc_c2')"); 
 header("Location: ../home.php?home=nilai&dpn_nl9=n9&nisk=$nisk2&klsk=$idkls2&klsk2=$klsk22&nlk=$nlk2&bl=$bulan2&pk=$pekan2");  
}
if($meubah_cr=="S A V E" and $nlk2=='kd'){
mysqli_query($koneksi, "UPDATE tb_kedisiplinan_sekolah SET mb_quran='$nc_s2',salat_duha='$nc_b2',berdoa='$nc_e2',apel='$nc_m2',kembali_kekelas='$nc_g2',belajar_dikelas='$nc_u2',waktu_kepulangan='$nc_c2' WHERE thn_ajaran='$thaj'  and semester='$sem' and bulan='$bulan2' and pekan='$pekan2' and nis='$nisk2'");
  header("Location: ../home.php?home=nilai&dpn_nl9=n9&nisk=$nisk2&klsk=$idkls2&klsk2=$klsk22&nlk=$nlk2&bl=$bulan2&pk=$pekan2"); 
}

if($merekam_cr=="S A V E" and $nlk22=='kk'){
$rek=mysqli_query($koneksi, "INSERT INTO tb_kerapihan_sekolah VALUES('',
	  											'$thaj',
												'$sem',
												'$bulan22',
												'$pekan22',
												'$nisk22',
												'$nc_s22',
												'$nc_b22',
												'$nc_e22',
												'$nc_m22',
												'$nc_g22')"); 
 header("Location: ../home.php?home=nilai&dpn_nl9=n9&nisk=$nisk22&klsk=$idkls22&klsk2=$klsk222&nlk=$nlk22&bl=$bulan22&pk=$pekan22");  
}
if($meubah_cr=="S A V E" and $nlk22=='kk'){
mysqli_query($koneksi, "UPDATE tb_kerapihan_sekolah SET bersih_diri='$nc_s22',bersih_kelas='$nc_b22',kerapihan_brg_pribadi='$nc_e22',rapi_berseragam='$nc_m22',rapi_rambut_kuku='$nc_g22' WHERE thn_ajaran='$thaj' and semester='$sem' and bulan='$bulan22' and pekan='$pekan22' and nis='$nisk22'");
  header("Location: ../home.php?home=nilai&dpn_nl9=n9&nisk=$nisk22&klsk=$idkls22&klsk2=$klsk222&nlk=$nlk22&bl=$bulan22&pk=$pekan22"); 
}

if($merekam_cas=="S A V E" and $nlk=='paa'){
$rek=mysqli_query($koneksi, "INSERT INTO tb_ibadah_asrama VALUES('',
	  											'$thaj',
												'$sem',
												'$bulan',
												'$pekan',
												'$nisk',
												'$nc_s',
												'$nc_b',
												'$nc_e',
												'$nc_m',
												'$nc_g',
												'$nc_u',
												'$nc_c',
												'$md_w',
												'$adz')"); 
 header("Location: ../home.php?home=nilai&dpn_n20=n20&nisk=$nisk&klsk=$idkls&klsk2=$klsk2&nlk=$nlk&bl=$bulan&pk=$pekan"); 
}
if($meubah_cas=="S A V E" and $nlk=='paa'){
  mysqli_query($koneksi, "UPDATE tb_ibadah_asrama SET solat_jamaah='$nc_s',solat_duha='$nc_b',qiyamullail='$nc_e',sunnah_rawatib='$nc_m',wirid_doa='$nc_g',shaum='$nc_u',tilawa='$nc_c',memmimpin_wirid='$md_w',adzan='$adz' WHERE thn_ajaran='$thaj'  and semester='$sem' and bulan='$bulan' and pekan='$pekan' and nis='$nisk'");
  header("Location: ../home.php?home=nilai&dpn_n20=n20&nisk=$nisk&klsk=$idkls&klsk2=$klsk2&nlk=$nlk&bl=$bulan&pk=$pekan");
}

if($merekam_paa=="S A V E" and $nlk2=='kd'){
$rek=mysqli_query($koneksi, "INSERT INTO tb_adab_asrama VALUES('',
	  											'$thaj',
												'$sem',
												'$bulan2',
												'$pekan2',
												'$nisk2',
												'$nc_s2',
												'$nc_b2',
												'$nc_e2',
												'$nc_m2',
												'$nc_g2',
												'$nc_u2',
												'$nc_c2',
												'$nc_c22')"); 
 header("Location: ../home.php?home=nilai&dpn_n20=n20&nisk=$nisk2&klsk=$idkls2&klsk2=$klsk22&nlk=$nlk2&bl=$bulan2&pk=$pekan2");  
}
if($meubah_paa=="S A V E" and $nlk2=='kd'){
mysqli_query($koneksi, "UPDATE tb_adab_asrama SET salam='$nc_s2',berbicara='$nc_b2',berpakaian='$nc_e2',makan_minum='$nc_m2',belajar='$nc_g2',adab_kepembina='$nc_u2',bergaul='$nc_c2',bercanda='$nc_c22' WHERE thn_ajaran='$thaj'  and semester='$sem' and bulan='$bulan2' and pekan='$pekan2' and nis='$nisk2'");
  header("Location: ../home.php?home=nilai&dpn_n20=n20&nisk=$nisk2&klsk=$idkls2&klsk2=$klsk22&nlk=$nlk2&bl=$bulan2&pk=$pekan2"); 
}
 
if($merekam_da=="S A V E" and $nlk22=='kk'){
$rek=mysqli_query($koneksi, "INSERT INTO tb_kedisiplinan_asrama VALUES('',
	  											'$thaj',
												'$sem',
												'$bulan22',
												'$pekan22',
												'$nisk22',
												'$nc_s22',
												'$nc_b22',
												'$nc_e22',
												'$nc_m22',
												'$nc_g22',
												'$nc_g223',
												'$nc_g224',
												'$nc_g225')"); 
 header("Location: ../home.php?home=nilai&dpn_n20=n20&nisk=$nisk22&klsk=$idkls22&klsk2=$klsk222&nlk=$nlk22&bl=$bulan22&pk=$pekan22");  
}
if($meubah_da=="S A V E" and $nlk22=='kk'){
mysqli_query($koneksi, "UPDATE tb_kedisiplinan_asrama SET briefing='$nc_s22',izin_pulang='$nc_b22',kegiatan_asrama='$nc_e22',belajar_mandiri='$nc_m22',berbahasa_inggris='$nc_g22',belajar_malam='$nc_g223',berbahasa_arab='$nc_g224',tidur='$nc_g225' WHERE thn_ajaran='$thaj'  and semester='$sem' and bulan='$bulan22' and pekan='$pekan22' and nis='$nisk22'");
  header("Location: ../home.php?home=nilai&dpn_n20=n20&nisk=$nisk22&klsk=$idkls22&klsk2=$klsk222&nlk=$nlk22&bl=$bulan22&pk=$pekan22"); 
}

if($merekam_kka=="S A V E" and $nlk222=='kb'){
$rek=mysqli_query($koneksi, "INSERT INTO tb_kebersihan_asrama VALUES('',
	  											'$thaj',
												'$sem',
												'$bulan222',
												'$pekan222',
												'$nisk222',
												'$nc_s222',
												'$nc_b222',
												'$nc_e222',
												'$nc_m222',
												'$nc_g222',
												'$nc_g2222')"); 
 header("Location: ../home.php?home=nilai&dpn_n20=n20&nisk=$nisk222&klsk=$idkls222&klsk2=$klsk2222&nlk=$nlk222&bl=$bulan222&pk=$pekan222");  
}
if($meubah_kka=="S A V E" and $nlk222=='kb'){
mysqli_query($koneksi, "UPDATE tb_kebersihan_asrama SET bersih_diri='$nc_s222',rapi_rambut_kuku='$nc_b222',kebersihan_kamar='$nc_e222',kerapihan_kamar='$nc_m222',rapi_berseragam='$nc_g222',rapi_menyimpan_barang='$nc_g2222' WHERE thn_ajaran='$thaj'  and semester='$sem' and bulan='$bulan222' and pekan='$pekan222' and nis='$nisk222'");
  header("Location: ../home.php?home=nilai&dpn_n20=n20&nisk=$nisk222&klsk=$idkls222&klsk2=$klsk2222&nlk=$nlk222&bl=$bulan222&pk=$pekan222"); 
}


 if($rekam_wf=="S A V E"){
$rek=mysqli_query($koneksi, "INSERT INTO tb_catatan_wf VALUES('',
	  											'$thaj',
												'$sem',
												'$klsk2',
												'$nisk',
												'$nus')"); 
 header("Location: ../home.php?home=nilai&dpn_n21=n21&nisk=$nisk&klsk=$idkls&klsk2=$klsk2&mpl=$mpl"); 
} 

if($ubah_wf=="S A V E"){
   mysqli_query($koneksi, "UPDATE tb_catatan_wf SET catatan='$nus' WHERE nis='$nisk' and kelas='$klsk2' and semester='$sem' and thn_ajaran='$thaj' ");
header("Location: ../home.php?home=nilai&dpn_n21=n21&nisk=$nisk&klsk=$idkls&klsk2=$klsk2&mpl=$mpl");
}   




if($menyimpan_kt=="S A V E"){
 
   $rek=mysqli_query($koneksi, "INSERT INTO tb_nilai_keterampilan VALUES('$nisk',
   												 '$mpl',
												 '$sem',
												 '$thaj',
												 '$idkls',
												 '$nt1',
												 '$nt2',
												 '$nt3',
												 '$nt4',
												 '$nt5',
												 '$nt6',
												 '$nt7',
												 '$nt8',
												 '$nt9',
												 '$nt10',
												 '$sikap',
												 '$kterampilan',
												 '$rtgs',
												 '$uh1',
												 '$ruh12',
												 '$uh2',
												 '$ruh122',
												 '$uh3',
												 '$uh123',
												 '$uh4',
												 '$uh124',
												 '$uh5',
												 '$uh125',
												 '$rtuh',
												 '$nlh',
												 '$nuts',
												 '$remedi',
												 '$nus',
												 '$remedi_us',
												 '$nrrp')"); 
 
header("Location: ../home.php?home=nilai&dpn_nl5=n5&nisk=$nisk&klsk=$idkls&klsk2=$klsk2&mpl=$mpl"); 
} 
if($mengubah_kt=="S A V E"){
   mysqli_query($koneksi, "UPDATE tb_nilai_keterampilan SET nt1='$nt1',
									nt2='$nt2',
									nt3='$nt3',
									nt4='$nt4',
									nt5='$nt5',
									nt6='$nt6',
									nt7='$nt7',
									nt8='$nt8',
									nt9='$nt9',
									nt10='$nt10',
									sikap='$sikap',
									keterampilan='$kterampilan',
									rata_tgs='$rtgs',
									uh1='$uh1',
									remedi_uh1='$ruh12',
									uh2='$uh2',
									remedi_uh2='$ruh122',
									uh3='$uh3',
									remedi_uh3='$uh123',
									uh4='$uh4',
									remedi_uh4='$uh124',
									uh5='$uh5',
									remedi_uh5='$uh125',
									rata_uh='$rtuh',
									nh='$nlh',
									uts='$nuts',
									remedi='$remedi',
									us='$nus',
									remedi_us='$remedi_us',
									raport='$nrrp' WHERE nis='$nisk' and kd_mp='$mpl' and semester='$sem' and thn_ajaran='$thaj' and kd_kelas='$idkls' ");
header("Location: ../home.php?home=nilai&dpn_nl5=n5&nisk=$nisk&klsk=$idkls&klsk2=$klsk2&mpl=$mpl");
} 

if($menyimpan_kti=="S A V E"){
 
   $rek=mysqli_query($koneksi, "INSERT INTO tb_nilai_kti VALUES('',
   												 '$nisk',
												 '$thaj',
												 '$sem',
												 '$judul',
												 '$nilai')"); 
 header("Location: ../home.php?home=nilai&dpn_n26=n26&nisk=$nisk&klsk=$idkls&klsk2=$klsk2"); 
} 

if($mengubah_kti=="S A V E"){
   mysqli_query($koneksi, "UPDATE tb_nilai_kti SET judul='$judul',
									nilai='$nilai' WHERE id_santri='$nisk' and semester='$sem' and thn_ajaran='$thaj' ");
header("Location: ../home.php?home=nilai&dpn_n26=n26&nisk=$nisk&klsk=$idkls&klsk2=$klsk2");
} 

if($Submit=="rekam"){
   mysqli_query($koneksi, "UPDATE tb_baris SET kls7='$textfield',
   									kls8='$textfield2',
									kls9='$textfield3',
									kls10='$textfield4',
									kls11='$textfield5',
									kls12='$textfield6',
									brs1='$select',
									brs2='$select2',
									brs3='$select3',
									brs4='$select4',
									brs5='$select5',
									brs6='$select6',
									brs7='$select7',
									p_brs1='$textfield62',
									p_brs2='$textfield63',
									p_brs3='$textfield64',
									p_brs4='$textfield65',
									p_brs5='$textfield66',
									p_brs6='$textfield67',
									p_brs7='$textfield672'
									 WHERE idb='$idb' ");
header("Location: baris.php");
} 
?>