<?
include("../koneksi.php");

$thaj=$_COOKIE['thaj'];
$sem=$_COOKIE['sem']; 
$klsk=$_GET['klsk'];
$hit_r=$_GET['hit_r'];
$kal_nil=$_GET['kal_nil'];
$ket=$_GET['ket'];
$bl=$_GET['bl'];

if($hit_r==1){
$r=1; 
$cri=mysqli_query($koneksi, "SELECT * FROM tb_rangking_karakter WHERE thn_ajaran='$thaj' and semester='$sem' and kelas='$klsk' ORDER BY nilai_tottal DESC");
while($ct=mysqli_fetch_assoc($cri)){
    mysqli_query($koneksi, "UPDATE tb_rangking_karakter SET rangking='$r' WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' and kelas='$ct[kelas]' ");
    $r+=1;
}  
header("Location: ../home.php?home=nilai&dpn_n22=n22&klsk=$klsk&bl=$bl"); 
}

if($kal_nil==1){

//$ket='b';
//$klsk="vii";
$tot_abcd=0;

if($ket=='a'){ $nks1="A"; $nks2="a"; $pkl=4;}
if($ket=='b'){ $nks1="B"; $nks2="b"; $pkl=3;}
if($ket=='c'){ $nks1="C"; $nks2="c"; $pkl=2;}
if($ket=='d'){ $nks1="D"; $nks2="d"; $pkl=1;}

		  if($klsk=="vii"){$kelast="WHERE (kelas_st='VIIA' or kelas_st='VIIB' or kelas_st='VIIC') AND status='a' ";}
		  if($klsk=="viii"){$kelast="WHERE (kelas_st='VIIIA' or kelas_st='VIIIB') AND status='a' ";}
		  if($klsk=="ix"){$kelast="WHERE (kelas_st='IXA' or kelas_st='IXB' or kelas_st='IXC') AND status='a' ";}
		  if($klsk=="x"){$kelast="WHERE kelas_st='X' AND status='a' ";}
		  if($klsk=="xi"){$kelast="WHERE kelas_st='XI' AND status='a' ";}
		  if($klsk=="xii"){$kelast="WHERE kelas_st='XII' AND status='a' ";}
		  if($klsk=="viid"){$kelast="WHERE kelas_st='VIID' AND status='a' ";}
		  if($klsk=="viiic"){$kelast="WHERE kelas_st='VIIIC' AND status='a' ";}
		  
		  if(!empty($bl)) { $blrk="and bulan='$bl'"; }
		  
	      $tmpkls=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st,status FROM tb_santri $kelast ");
          while($ct=mysqli_fetch_assoc($tmpkls)){
		  $tot_semua=0;
		     
			 $ntgs1=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (solat_jamaah='$nks1' or solat_jamaah='$nks2') ");
		    $j_br1=mysqli_num_rows($ntgs1); $sj1=$j_br1*$pkl;
			
			$ntgs2=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (solat_duha='$nks1' or solat_duha='$nks2') ");
		    $j_br2=mysqli_num_rows($ntgs2); $sj2=$j_br2*$pkl;
			
			$ntgs3=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (qiyamullail='$nks1' or qiyamullail='$nks2') ");
		    $j_br3=mysqli_num_rows($ntgs3); $sj3=$j_br3*$pkl;
			
			$ntgs4=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (qiyamullail='$nks1' or qiyamullail='$nks2') ");
		    $j_br4=mysqli_num_rows($ntgs4); $sj4=$j_br4*$pkl;
			
			$ntgs5=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (sunnah_rawatib='$nks1' or sunnah_rawatib='$nks2') ");
		    $j_br5=mysqli_num_rows($ntgs5); $sj5=$j_br5*$pkl;
			
			$ntgs6=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (wirid_doa='$nks1' or wirid_doa='$nks2') ");
		    $j_br6=mysqli_num_rows($ntgs6); $sj6=$j_br6*$pkl;
			
			$ntgs7=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (shaum='$nks1' or shaum='$nks2') ");
		    $j_br7=mysqli_num_rows($ntgs7); $sj7=$j_br7*$pkl;
			
			$ntgs8=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (tilawa='$nks1' or tilawa='$nks2') ");
		    $j_br8=mysqli_num_rows($ntgs8); $sj8=$j_br8*$pkl;
			
			$ntgs9=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (memmimpin_wirid='$nks1' or memmimpin_wirid='$nks2') ");
		    $j_br9=mysqli_num_rows($ntgs9); $sj9=$j_br9*$pkl;
			
			$ntgs10=mysqli_query($koneksi, "SELECT * FROM tb_ibadah_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (adzan='$nks1' or adzan='$nks2') ");
		    $j_br10=mysqli_num_rows($ntgs10); $sj10=$j_br10*$pkl;
			
			$tot_ibadah=$sj1+$sj2+$sj3+$sj4+$sj5+$sj6+$sj7+$sj8+$sj9+$sj10;
			
			//echo $tot_ibadah;
			
			
			$ntgs11=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (salam='$nks1' or salam='$nks2') ");
		    $j_br11=mysqli_num_rows($ntgs11); $sj11=$j_br11*$pkl;
			
			$ntgs22=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (berbicara='$nks1' or berbicara='$nks2') ");
		    $j_br22=mysqli_num_rows($ntgs22); $sj22=$j_br22*$pkl;
			
			$ntgs33=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (berpakaian='$nks1' or berpakaian='$nks2') ");
		    $j_br33=mysqli_num_rows($ntgs33); $sj33=$j_br33*$pkl;
			
			$ntgs44=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (makan_minum='$nks1' or makan_minum='$nks2') ");
		    $j_br44=mysqli_num_rows($ntgs44); $sj44=$j_br44*$pkl;
			
			$ntgs55=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (belajar='$nks1' or belajar='$nks2') ");
		    $j_br55=mysqli_num_rows($ntgs55); $sj55=$j_br55*$pkl;
			
			$ntgs66=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (adab_kepembina='$nks1' or adab_kepembina='$nks2') ");
		    $j_br66=mysqli_num_rows($ntgs66); $sj66=$j_br66*$pkl;
			
			$ntgs77=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (bergaul='$nks1' or bergaul='$nks2') ");
		    $j_br77=mysqli_num_rows($ntgs77); $sj77=$j_br77*$pkl;
			
			$ntgs88=mysqli_query($koneksi, "SELECT * FROM tb_adab_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (bercanda='$nks1' or bercanda='$nks2') ");
		    $j_br88=mysqli_num_rows($ntgs88); $sj88=$j_br88*$pkl;
					
			$tot_ibadah2=$sj11+$sj22+$sj33+$sj44+$sj55+$sj66+$sj77+$sj88;
			
		//	echo $tot_ibadah2;
			
			
			
			$ntgs111=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (briefing='$nks1' or briefing='$nks2') ");
		    $j_br111=mysqli_num_rows($ntgs111); $sj111=$j_br111*$pkl;
			
			$ntgs222=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (izin_pulang='$nks1' or izin_pulang='$nks2') ");
		    $j_br222=mysqli_num_rows($ntgs222); $sj222=$j_br222*$pkl;
			
			$ntgs333=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (kegiatan_asrama='$nks1' or kegiatan_asrama='$nks2') ");
		    $j_br333=mysqli_num_rows($ntgs333); $sj333=$j_br333*$pkl;
			
			$ntgs444=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (belajar_mandiri='$nks1' or belajar_mandiri='$nks2') ");
		    $j_br444=mysqli_num_rows($ntgs444); $sj444=$j_br444*$pkl;
			
			$ntgs555=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (berbahasa_inggris='$nks1' or berbahasa_inggris='$nks2') ");
		    $j_br555=mysqli_num_rows($ntgs555); $sj555=$j_br555*$pkl;
			
			$ntgs666=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (belajar_malam='$nks1' or belajar_malam='$nks2') ");
		    $j_br666=mysqli_num_rows($ntgs666); $sj666=$j_br666*$pkl;
			
			$ntgs777=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (berbahasa_arab='$nks1' or berbahasa_arab='$nks2') ");
		    $j_br777=mysqli_num_rows($ntgs777); $sj777=$j_br777*$pkl;
			
			$ntgs888=mysqli_query($koneksi, "SELECT * FROM tb_kedisiplinan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (tidur='$nks1' or tidur='$nks2') ");
		    $j_br888=mysqli_num_rows($ntgs888); $sj888=$j_br888*$pkl;
					
			$tot_ibadah3=$sj111+$sj222+$sj333+$sj444+$sj555+$sj666+$sj777+$sj888;
			
		///	echo $tot_ibadah3;
			
			
			
			$ntgs1111=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (bersih_diri='$nks1' or bersih_diri='$nks2') ");
		    $j_br1111=mysqli_num_rows($ntgs1111); $sj1111=$j_br1111*$pkl;
			
			$ntgs2222=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (rapi_rambut_kuku	='$nks1' or rapi_rambut_kuku	='$nks2') ");
		    $j_br2222=mysqli_num_rows($ntgs2222); $sj2222=$j_br2222*$pkl;
			
$ntgs3333=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (kebersihan_kamar='$nks1' or kebersihan_kamar='$nks2') ");
		    $j_br3333=mysqli_num_rows($ntgs3333); $sj3333=$j_br3333*$pkl;
			
$ntgs4444=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (kerapihan_kamar='$nks1' or kerapihan_kamar='$nks2') ");
		    $j_br4444=mysqli_num_rows($ntgs4444); $sj4444=$j_br4444*$pkl;
			
$ntgs5555=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (rapi_berseragam	='$nks1' or rapi_berseragam	='$nks2') ");
		    $j_br5555=mysqli_num_rows($ntgs5555); $sj5555=$j_br5555*$pkl;
			
$ntgs6666=mysqli_query($koneksi, "SELECT * FROM tb_kebersihan_asrama WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (rapi_menyimpan_barang='$nks1' or rapi_menyimpan_barang='$nks2') ");
		    $j_br6666=mysqli_num_rows($ntgs6666); $sj6666=$j_br6666*$pkl;
			
						
			$tot_ibadah4=$sj1111+$sj2222+$sj3333+$sj4444+$sj5555+$sj6666;
			
			///echo $tot_ibadah4;
			
			
			
			$ntgs11111=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (bersih_diri='$nks1' or bersih_diri='$nks2') ");
		    $j_br11111=mysqli_num_rows($ntgs11111); $sj11111=$j_br11111*$pkl;
			
			$ntgs22222=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (bersih_kelas='$nks1' or bersih_kelas	='$nks2') ");
		    $j_br22222=mysqli_num_rows($ntgs22222); $sj22222=$j_br22222*$pkl;
			
$ntgs33333=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (kerapihan_brg_pribadi='$nks1' or kerapihan_brg_pribadi='$nks2') ");
		    $j_br33333=mysqli_num_rows($ntgs33333); $sj33333=$j_br33333*$pkl;
			
$ntgs44444=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (rapi_berseragam='$nks1' or rapi_berseragam='$nks2') ");
		    $j_br44444=mysqli_num_rows($ntgs44444); $sj44444=$j_br44444*$pkl;
			
$ntgs55555=mysqli_query($koneksi, "SELECT * FROM tb_kerapihan_sekolah WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' $blrk and (rapi_rambut_kuku='$nks1' or rapi_rambut_kuku='$nks2') ");
		    $j_br55555=mysqli_num_rows($ntgs55555); $sj55555=$j_br55555*$pkl;
					
						
			$tot_ibadah5=$sj11111+$sj22222+$sj33333+$sj44444+$sj55555;
			
			//echo $tot_ibadah5;
			
			
			$tot_semua=$tot_ibadah+$tot_ibadah2+$tot_ibadah3+$tot_ibadah4+$tot_ibadah5;
			
			$cri=mysqli_query($koneksi, "SELECT * FROM tb_rangking_karakter WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' and kelas='$klsk' ");
			$htg=mysqli_num_rows($cri);
			$htg2=mysqli_fetch_assoc($cri);
			if($htg==0){
			$rek=mysqli_query($koneksi, "INSERT INTO tb_rangking_karakter VALUES('','$thaj','$sem','$ct[nis]','$klsk','$tot_semua','')"); }else{
			$tot_abcd=$tot_semua+$htg2['nilai_tottal'];
			mysqli_query($koneksi, "UPDATE tb_rangking_karakter SET nilai_tottal='$tot_abcd' WHERE thn_ajaran='$thaj' and semester='$sem' and nis='$ct[nis]' and kelas='$klsk' ");
			}
					 
		  }
		  header("Location: ../home.php?home=nilai&dpn_n22=n22&klsk=$klsk&bl=$bl&ibadah=$tot_ibadah&adab=$tot_ibadah2&disiplin=$tot_ibadah3&bersih=$tot_ibadah4&rapi=$tot_ibadah5");
} 

	
?>