<?
include("../koneksi.php");

$s1=$_POST['s1'];
$s8=$_POST['s8'];
$s13=$_POST['s13'];
$s18=$_POST['s18'];
$s19=$_POST['s19'];
$stky=$_POST['stky'];
$spg=$_POST['spg'];
$spp=$_POST['spp'];
$psp=$_POST['psp'];


$id_guru=$_POST['id_guru'];
$thaj=$_COOKIE['thaj'];
$qbln=$_POST['qbln']; 
$tkt=$_POST['tkt']; 


$textfield=$_POST['textfield'];
$textfield2=$_POST['textfield2'];
$textfield3=$_POST['textfield3'];
$textfield4=$_POST['textfield4'];
$textfield5=$_POST['textfield5'];
$textfield6=$_POST['textfield6'];
$textfield7=$_POST['textfield7'];
$textfield8=$_POST['textfield8'];
$textfield9=$_POST['textfield9'];
$textfield10=$_POST['textfield10'];
$textfield11=$_POST['textfield11'];
$textfield12=$_POST['textfield12'];
$textfield13=$_POST['textfield13'];
$textfield14=$_POST['textfield14'];
$textfield15=$_POST['textfield15'];
$textfield16=$_POST['textfield16'];
$textfield17=$_POST['textfield17'];
$textfield18=$_POST['textfield18'];
$textfield19=$_POST['textfield19'];
$textfield20=$_POST['textfield20'];
$textfield21=$_POST['textfield21'];
$textfield22=$_POST['textfield22'];
$textfield182=$_POST['textfield182'];
$textfield1822=$_POST['textfield1822'];
$textfield1823=$_POST['textfield1823'];
$textfield1824=$_POST['textfield1824'];
$textfield102=$_POST['textfield102'];
$textfield1022=$_POST['textfield1022'];
$textfield10222=$_POST['textfield10222'];

$select2=$_POST['select2'];
$select3=$_POST['select3'];
$select4=$_POST['select4'];
$select5=$_POST['select5'];
$select6=$_POST['select6'];
$select7=$_POST['select7'];
$select8=$_POST['select8'];
$select9=$_POST['select9'];
$select10=$_POST['select10'];
$select11=$_POST['select11'];


if($s1=="Simpan Pedagogik"){
   $tamp=mysqli_query($koneksi, "SELECT * FROM tb_kp_pedagogik WHERE id_guru='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
   $kp=mysqli_num_rows($tamp);
   if($kp==0){
 
              $rek=mysqli_query($koneksi, "INSERT INTO tb_kp_pedagogik   
			  VALUES('','$id_guru','$thaj','$qbln','$textfield','$textfield2','$textfield3','$textfield4','$textfield5','$textfield6','$textfield7')");

             }else{
			  mysqli_query($koneksi, "UPDATE tb_kp_pedagogik SET a1='$textfield',
								   a2='$textfield2',
								   a3='$textfield3',
								   a4='$textfield4',
								   a5='$textfield5',
								   a6='$textfield6',
								   a7='$textfield7'
                           WHERE id_guru='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
			 } 
   $nil_pdg=round(($textfield+$textfield2+$textfield3+$textfield4+$textfield5+$textfield6+$textfield7)/28*100);
   $tamp2=mysqli_query($koneksi, "SELECT * FROM rekap_nilai_guru WHERE id_guru='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
   $kp2=mysqli_num_rows($tamp2);
   if($kp2==0){
              $rek=mysqli_query($koneksi, "INSERT INTO rekap_nilai_guru   
			  VALUES('','$id_guru','$thaj','$qbln','$nil_pdg','','','','')");
   }else{
              mysqli_query($koneksi, "UPDATE rekap_nilai_guru SET pedagogik='$nil_pdg' WHERE id_guru='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
   }		 
			 header("Location: ../home.php?home=pgdp&idgp=$id_guru&qbln=$qbln"); 

  }


if($s8=="Simpan Kepribadian"){
   $tamp=mysqli_query($koneksi, "SELECT * FROM tb_kp_keperibadian WHERE id_guru='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
   $kp=mysqli_num_rows($tamp);
   if($kp==0){
 
              $rek=mysqli_query($koneksi, "INSERT INTO tb_kp_keperibadian   
			  VALUES('','$id_guru','$thaj','$qbln','$textfield8','$textfield9','$textfield10','$textfield11','$textfield12')");

             }else{
			  mysqli_query($koneksi, "UPDATE tb_kp_keperibadian SET b1='$textfield8',
								   b2='$textfield9',
								   b3='$textfield10',
								   b4='$textfield11',
								   b5='$textfield12'
                           WHERE id_guru='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
			 } 
			 
   $nil_kepri=round(($textfield8+$textfield9+$textfield10+$textfield11+$textfield12)/20*100);
   $tamp2=mysqli_query($koneksi, "SELECT * FROM rekap_nilai_guru WHERE id_guru='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
   $kp2=mysqli_num_rows($tamp2);
   if($kp2==0){
              $rek=mysqli_query($koneksi, "INSERT INTO rekap_nilai_guru   
			  VALUES('','$id_guru','$thaj','$qbln','','$nil_kepri','','','')");
   }else{
              mysqli_query($koneksi, "UPDATE rekap_nilai_guru SET kepribadian='$nil_kepri' WHERE id_guru='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
   }
	header("Location: ../home.php?home=pgdp&idgp=$id_guru&qbln=$qbln"); 
  }
  
 
 if($s13=="Simpan Sosial"){
   $tamp=mysqli_query($koneksi, "SELECT * FROM tb_kp_sosial WHERE id_guru='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
   $kp=mysqli_num_rows($tamp);
   if($kp==0){
 
              $rek=mysqli_query($koneksi, "INSERT INTO tb_kp_sosial   
			  VALUES('','$id_guru','$thaj','$qbln','$textfield13','$textfield14','$textfield15','$textfield16','$textfield17')");

             }else{
			  mysqli_query($koneksi, "UPDATE tb_kp_sosial SET c1='$textfield13',
								   c2='$textfield14',
								   c3='$textfield15',
								   c4='$textfield16',
								   c5='$textfield17'
                           WHERE id_guru='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
			 } 
			 
   $nil_sos=round(($textfield13+$textfield14+$textfield15+$textfield16+$textfield17)/20*100);
   $tamp2=mysqli_query($koneksi, "SELECT * FROM rekap_nilai_guru WHERE id_guru='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
   $kp2=mysqli_num_rows($tamp2);
   if($kp2==0){
              $rek=mysqli_query($koneksi, "INSERT INTO rekap_nilai_guru   
			  VALUES('','$id_guru','$thaj','$qbln','','','$nil_sos','','')");
   }else{
              mysqli_query($koneksi, "UPDATE rekap_nilai_guru SET sosial='$nil_sos' WHERE id_guru='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
   }
			 
			 header("Location: ../home.php?home=pgdp&idgp=$id_guru&qbln=$qbln"); 

  }

 if($s18=="Simpan Profesional"){
   $tamp=mysqli_query($koneksi, "SELECT * FROM tb_kp_profesional WHERE id_guru='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
   $kp=mysqli_num_rows($tamp);
   if($kp==0){
              $rek=mysqli_query($koneksi, "INSERT INTO tb_kp_profesional   
			  VALUES('','$id_guru','$thaj','$qbln','$textfield18','$textfield19','$textfield20','$textfield21','$textfield22')");

             }else{
			  mysqli_query($koneksi, "UPDATE tb_kp_profesional SET d1='$textfield18',
								   d2='$textfield19',
								   d3='$textfield20',
								   d4='$textfield21',
								   d5='$textfield22'
                           WHERE id_guru='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
			 } 
			 
   $nil_prof=round(($textfield18+$textfield19+$textfield20+$textfield21+$textfield22)/20*100);
   $tamp2=mysqli_query($koneksi, "SELECT * FROM rekap_nilai_guru WHERE id_guru='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
   $kp2=mysqli_num_rows($tamp2);
   if($kp2==0){
              $rek=mysqli_query($koneksi, "INSERT INTO rekap_nilai_guru   
			  VALUES('','$id_guru','$thaj','$qbln','','','','$nil_prof','')");
   }else{
              mysqli_query($koneksi, "UPDATE rekap_nilai_guru SET profesional='$nil_prof' WHERE id_guru='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
   }
			 
			 
			 header("Location: ../home.php?home=pgdp&idgp=$id_guru&qbln=$qbln"); 

  }

// Penilaian Pegawai

if($s1=="Simpan Asp. Teknis"){
   $tamp=mysqli_query($koneksi, "SELECT * FROM tb_kp_aspek_teknis WHERE id_pg='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
   $kp=mysqli_num_rows($tamp);
   if($kp==0){
 
              $rek=mysqli_query($koneksi, "INSERT INTO tb_kp_aspek_teknis   
			  VALUES('','$id_guru','$thaj','$qbln','$textfield','$textfield2','$textfield3')");

             }else{
			  mysqli_query($koneksi, "UPDATE tb_kp_aspek_teknis SET e1='$textfield',
								   e2='$textfield2',
								   e3='$textfield3'
                           WHERE id_pg='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
			 } 
			 
   $nil_tkns=round(($textfield+$textfield2+$textfield3)/13*100);
   $tamp2=mysqli_query($koneksi, "SELECT * FROM rekap_nilai_pegawai WHERE id_guru='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
   $kp2=mysqli_num_rows($tamp2);
   if($kp2==0){
              $rek=mysqli_query($koneksi, "INSERT INTO rekap_nilai_pegawai   
			  VALUES('','$id_guru','$thaj','$qbln','$nil_tkns','','','')");
   }else{
              mysqli_query($koneksi, "UPDATE rekap_nilai_pegawai SET asp_teknis='$nil_tkns' WHERE id_guru='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
   }
			 header("Location: ../home.php?home=fpp&idgp=$id_guru&qbln=$qbln&stat=$stky"); 
   }
  
  
 if($s8=="Simpan Asp. non Teknis"){
   $tamp=mysqli_query($koneksi, "SELECT * FROM tb_kp_aspek_non WHERE id_pg='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
   $kp=mysqli_num_rows($tamp);
   if($kp==0){
 
              $rek=mysqli_query($koneksi, "INSERT INTO tb_kp_aspek_non   
			  VALUES('','$id_guru','$thaj','$qbln','$textfield8','$textfield9','$textfield10','$textfield102','$textfield1022','$textfield10222')");

             }else{
			  mysqli_query($koneksi, "UPDATE tb_kp_aspek_non SET f1='$textfield8',
								   f2='$textfield9',
								   f3='$textfield10',
								   f4='$textfield102',
								   f5='$textfield1022',
								   f6='$textfield10222'
                           WHERE id_pg='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
			 } 
			 		 
   $nil_asp_non=round(($textfield8+$textfield9+$textfield10+$textfield102+$textfield1022+$textfield10222)/25*100);
   $tamp2=mysqli_query($koneksi, "SELECT * FROM rekap_nilai_pegawai WHERE id_guru='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
   $kp2=mysqli_num_rows($tamp2);
   if($kp2==0){
              $rek=mysqli_query($koneksi, "INSERT INTO rekap_nilai_pegawai   
			  VALUES('','$id_guru','$thaj','$qbln','','$nil_asp_non','','')");
   }else{
              mysqli_query($koneksi, "UPDATE rekap_nilai_pegawai SET asp_non_teknis='$nil_asp_non' WHERE id_guru='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
   }
			 
			 header("Location: ../home.php?home=fpp&idgp=$id_guru&qbln=$qbln&stat=$stky"); 

  }


if($s13=="Simpan Kepribadian"){
   $tamp=mysqli_query($koneksi, "SELECT * FROM tb_kp_kepribadian WHERE id_pg='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
   $kp=mysqli_num_rows($tamp);
   if($kp==0){
 
              $rek=mysqli_query($koneksi, "INSERT INTO tb_kp_kepribadian   
			  VALUES('','$id_guru','$thaj','$qbln','$textfield13','$textfield14','$textfield15','$textfield16')");

             }else{
			  mysqli_query($koneksi, "UPDATE tb_kp_kepribadian SET g1='$textfield13',
								   g2='$textfield14',
								   g3='$textfield15',
								   g4='$textfield16'
                           WHERE id_pg='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
			 } 
   $nil_keprib=round(($textfield13+$textfield14+$textfield15+$textfield16)/22*100);
   $tamp2=mysqli_query($koneksi, "SELECT * FROM rekap_nilai_pegawai WHERE id_guru='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
   $kp2=mysqli_num_rows($tamp2);
   if($kp2==0){
              $rek=mysqli_query($koneksi, "INSERT INTO rekap_nilai_pegawai   
			  VALUES('','$id_guru','$thaj','$qbln','','','$nil_keprib','')");
   }else{
              mysqli_query($koneksi, "UPDATE rekap_nilai_pegawai SET asp_kepribadian='$nil_keprib' WHERE id_guru='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
   }
			 
			 header("Location: ../home.php?home=fpp&idgp=$id_guru&qbln=$qbln&stat=$stky"); 

  }

//

if($s18=="Simpan Kepemimpinan"){
   $tamp=mysqli_query($koneksi, "SELECT * FROM tb_kp_kepemimpinan WHERE id_pg='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
   $kp=mysqli_num_rows($tamp);
   if($kp==0){
 
              $rek=mysqli_query($koneksi, "INSERT INTO tb_kp_kepemimpinan   
			  VALUES('','$id_guru','$thaj','$qbln','$textfield18','$textfield19','$textfield20','$textfield21','$textfield22')");

             }else{
			  mysqli_query($koneksi, "UPDATE tb_kp_kepemimpinan SET h1='$textfield18',
								   h2='$textfield19',
								   h3='$textfield20',
								   h4='$textfield21',
								   h5='$textfield22'
                           WHERE id_pg='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
			 } 
   $nil_kepim=round(($textfield18+$textfield19+$textfield20+$textfield21+$textfield22)/22*100);
   $tamp2=mysqli_query($koneksi, "SELECT * FROM rekap_nilai_pegawai WHERE id_guru='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
   $kp2=mysqli_num_rows($tamp2);
   if($kp2==0){
              $rek=mysqli_query($koneksi, "INSERT INTO rekap_nilai_pegawai   
			  VALUES('','$id_guru','$thaj','$qbln','','','','$nil_kepim')");
   }else{
              mysqli_query($koneksi, "UPDATE rekap_nilai_pegawai SET asp_kepemimpinan='$nil_kepim' WHERE id_guru='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
   }
			 
			 header("Location: ../home.php?home=fpp&idgp=$id_guru&qbln=$qbln&stat=$stky"); 

  }


if($s19=="Simpan Administratif"){
   $tamp=mysqli_query($koneksi, "SELECT * FROM tb_administratif_g WHERE id_guru='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
   $kp=mysqli_num_rows($tamp);
   if($kp==0){
 
              $rek=mysqli_query($koneksi, "INSERT INTO tb_administratif_g   
			  VALUES('','$id_guru','$thaj','$qbln','$textfield182','$textfield1822','$textfield1823')");

             }else{
			  mysqli_query($koneksi, "UPDATE tb_administratif_g SET 
			  					   j1='$textfield182',
								   j2='$textfield1822',
								   j3='$textfield1823'
								   
                           WHERE id_guru='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
			 } 
   $nil_admin=round(($textfield182+$textfield1822+$textfield1823)/12*100);
   $tamp2=mysqli_query($koneksi, "SELECT * FROM rekap_nilai_guru WHERE id_guru='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
   $kp2=mysqli_num_rows($tamp2);
   if($kp2==0){
              $rek=mysqli_query($koneksi, "INSERT INTO rekap_nilai_guru   
			  VALUES('','$id_guru','$thaj','$qbln','','','','','$nil_admin')");
   }else{
              mysqli_query($koneksi, "UPDATE rekap_nilai_guru SET administrasi='$nil_admin' WHERE id_guru='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
   }
			 
			 header("Location: ../home.php?home=pgdp&idgp=$id_guru&qbln=$qbln&stat=$stky"); 

  }
  
if($spg=="Simpan"){

 $tamp=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_bulanan_guru WHERE id_guru='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
   $kp=mysqli_num_rows($tamp);
   if($kp==0){
 
              $rek=mysqli_query($koneksi, "INSERT INTO tb_penilaian_bulanan_guru   
			  VALUES('','$select2','$select3','$select4','$select5','$select6','$select7','$select8','$select9','$select10','$id_guru','$thaj','$qbln')");

             }else{
			  mysqli_query($koneksi, "UPDATE tb_penilaian_bulanan_guru SET akhlak='$select2',
								   kedisiplinan='$select3',
								   penguasaan_materi='$select4',
								   pengembangan_materi='$select5',
								   pemamfaatan_teknologi='$select6',
								   komunikasi='$select7',
								   kepatuhan='$select8',
								   tepat_waktu='$select9',
								   administrasi='$select10'
                           WHERE id_guru='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
			 } 
			 header("Location: penilaian _guru.php?idgp=$id_guru&stat=$stky&qbln=$qbln&tkt=$tkt");
}

if($spp=="Simpan"){

 $tamp=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_bulanan_pegawai WHERE id_guru='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
   $kp=mysqli_num_rows($tamp);
   if($kp==0){
 
              $rek=mysqli_query($koneksi, "INSERT INTO tb_penilaian_bulanan_pegawai   
			  VALUES('','$select2','$select3','$select4','$select5','$select6','$select7','$select8','$select9','$select10','$id_guru','$thaj','$qbln')");

             }else{
			  mysqli_query($koneksi, "UPDATE tb_penilaian_bulanan_pegawai SET akhlak='$select2',
								   kedisiplinan='$select3',
								   tepat_waktu_meyelesaikan_tugas='$select4',
								   tanggung_jawab='$select5',
								   kereatif='$select6',
								   komunikasi='$select7',
								   kepatuhan='$select8',
								   capai_target='$select9',
								   administrasi='$select10'
                           WHERE id_guru='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
			 } 
			 header("Location: penilaian _pembina.php?idgp=$id_guru&stat=$stky&tkt=$tkt");
}

if($psp=="Simpan"){

 $tamp=mysqli_query($koneksi, "SELECT * FROM tb_penilaian_bulanan_struktural WHERE id_guru='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
   $kp=mysqli_num_rows($tamp);
   if($kp==0){
 
              $rek=mysqli_query($koneksi, "INSERT INTO tb_penilaian_bulanan_struktural   
			  VALUES('','$select2','$select3','$select4','$select5','$select6','$select7','$select8','$select9','$select10','$select11','$id_guru','$thaj','$qbln')");

             }else{
			  mysqli_query($koneksi, "UPDATE tb_penilaian_bulanan_struktural SET akhlak='$select2',
								   kedisiplinan='$select3',
								   tepat_waktu_meyelesaikan_tugas='$select4',
								   tanggung_jawab='$select5',
								   kereatif='$select6',
								   komunikasi='$select7',
								   kepatuhan='$select8',
								   capai_target='$select9',
								   koordinasi_anggota='$select10',
								   pengambilan_keputusan='$select11'
                           WHERE id_guru='$id_guru' and thn_ajaran='$thaj' and bulan='$qbln' ");
			 } 
			 header("Location: penilaian_struktural.php?idgp=$id_guru&stat=$stky&qbln=$qbln");
}

?>