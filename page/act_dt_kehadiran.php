<?
include("../koneksi.php");

$pknk=$_GET['pknk'];
$klsk=$_GET['klsk']; 
$blnk=$_GET['blnk'];
$idk_k=$_GET['idk_k'];

$hari=$_GET['hari'];
$jam_k=$_GET['jam_k'];
$status=$_GET['status'];
$rekam=$_GET['rekam'];
$kdmpl=$_GET['kdmpl'];
$nis_k=$_GET['nis_k'];
$tgl=$_GET['tgl'];

$thaj=$_COOKIE['thaj'];
$sem=$_COOKIE['sem'];

if($klsk=="VIIA"){
  if($rekam=="Simpan"){
   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_hadir_7a WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and    
    pkn_h='$pknk' and tgl_h='$tgl' ");
   

   $tp=mysqli_fetch_assoc($tampi);
   $tpk=mysqli_num_rows($tampi);
   
   if($tpk<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO tb_hadir_7a VALUES('','$nis_k','$thaj','$sem','$blnk','$pknk','$tgl')");
	  
	$tampi5=mysqli_query($koneksi, "SELECT * FROM tb_hadir_7a WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and
    pkn_h='$pknk' and tgl_h='$tgl' ");
   $tp5=mysqli_fetch_assoc($tampi5);
   
	  $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_7a VALUES('$tp5[id_hadir]','$jam_k','$kdmpl','$status','')");
   }
   if($tpk>=1){
   
   $tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir_7a WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
   $tpk2=mysqli_num_rows($tampi2);
   
   if($tpk2<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_7a VALUES('$tp[id_hadir]','$jam_k','$kdmpl','$status','')"); 
	 } 
   if($tpk2>=1){
      mysqli_query($koneksi, "UPDATE detail_hadir_7a SET status='$status' WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
     }
   }
   
 }
if($rekam=="Simpans"){
    $sltbs=mysqli_query($koneksi, "SELECT nis,kelas_st,status FROM tb_santri WHERE kelas_st='$klsk' AND status='a' ");
    while($tpn=mysqli_fetch_assoc($sltbs)){
	
	$tampi=mysqli_query($koneksi, "SELECT * FROM tb_hadir_7a WHERE nis_h='$tpn[nis]' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and
    pkn_h='$pknk' and tgl_h='$tgl' ");
   
   $tp=mysqli_fetch_assoc($tampi);
   $tpk=mysqli_num_rows($tampi);
   
   if($tpk<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO tb_hadir_7a VALUES('','$tpn[nis]','$thaj','$sem','$blnk','$pknk','$tgl')");
	  
	$tampi5=mysqli_query($koneksi, "SELECT * FROM tb_hadir_7a WHERE nis_h='$tpn[nis]' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and
    pkn_h='$pknk' and tgl_h='$tgl' ");
   $tp5=mysqli_fetch_assoc($tampi5);
   
	  $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_7a VALUES('$tp5[id_hadir]','$jam_k','$kdmpl','$status','')");
   }
   if($tpk>=1){
   
   $tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir_7a WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
   $tpk2=mysqli_num_rows($tampi2);
   
   if($tpk2<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_7a VALUES('$tp[id_hadir]','$jam_k','$kdmpl','$status','')"); 
	 } 
   if($tpk2>=1){
      mysqli_query($koneksi, "UPDATE detail_hadir_7a SET status='$status' WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
     }
   }    
	}
 }
if($rekam=="hapus"){

   $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_hadir_7a WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and pkn_h='$pknk' and tgl_h='$tgl' ");
   $tpk2=mysqli_fetch_assoc($tampi2);
	 
   mysqli_query($koneksi, "DELETE FROM tb_hadir_7a WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and    
    pkn_h='$pknk' and tgl_h='$tgl' ");
	
   mysqli_query($koneksi, "DELETE FROM detail_hadir_7a WHERE kd_hadir='$tpk2[id_hadir]' ");
}
 header("Location: ../home.php?home=khs&nis_k=$nis_k&blnk=$blnk&pknk=$pknk&tgl=$tgl&kdmpl=$kdmpl&jam_k=$jam_k&status=$status&klsk=$klsk"); 
}

if($klsk=="VIIB"){
if($rekam=="Simpan"){
   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_hadir_7b WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and    
    pkn_h='$pknk' and tgl_h='$tgl' ");
   

   $tp=mysqli_fetch_assoc($tampi);
   $tpk=mysqli_num_rows($tampi);
   
   if($tpk<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO tb_hadir_7b VALUES('','$nis_k','$thaj','$sem','$blnk','$pknk','$tgl')");
	  
	$tampi5=mysqli_query($koneksi, "SELECT * FROM tb_hadir_7b WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and
    pkn_h='$pknk' and tgl_h='$tgl' ");
   $tp5=mysqli_fetch_assoc($tampi5);
   
	  $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_7b VALUES('$tp5[id_hadir]','$jam_k','$kdmpl','$status','')");
   }
   if($tpk>=1){
   
   $tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir_7b WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
   $tpk2=mysqli_num_rows($tampi2);
   
   if($tpk2<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_7b VALUES('$tp[id_hadir]','$jam_k','$kdmpl','$status','')"); 
	 } 
   if($tpk2>=1){
      mysqli_query($koneksi, "UPDATE detail_hadir_7b SET status='$status' WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
     }
   }
   
 }
if($rekam=="Simpans"){
    $sltbs=mysqli_query($koneksi, "SELECT nis,kelas_st,status FROM tb_santri WHERE kelas_st='$klsk' AND status='a' ");
    while($tpn=mysqli_fetch_assoc($sltbs)){
	
	$tampi=mysqli_query($koneksi, "SELECT * FROM tb_hadir_7b WHERE nis_h='$tpn[nis]' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and
    pkn_h='$pknk' and tgl_h='$tgl' ");
   
   $tp=mysqli_fetch_assoc($tampi);
   $tpk=mysqli_num_rows($tampi);
   
   if($tpk<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO tb_hadir_7b VALUES('','$tpn[nis]','$thaj','$sem','$blnk','$pknk','$tgl')");
	  
	$tampi5=mysqli_query($koneksi, "SELECT * FROM tb_hadir_7b WHERE nis_h='$tpn[nis]' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and
    pkn_h='$pknk' and tgl_h='$tgl' ");
   $tp5=mysqli_fetch_assoc($tampi5);
   
	  $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_7b VALUES('$tp5[id_hadir]','$jam_k','$kdmpl','$status','')");
   }
   if($tpk>=1){
   
   $tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir_7b WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
   $tpk2=mysqli_num_rows($tampi2);
   
   if($tpk2<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_7b VALUES('$tp[id_hadir]','$jam_k','$kdmpl','$status','')"); 
	 } 
   if($tpk2>=1){
      mysqli_query($koneksi, "UPDATE detail_hadir_7b SET status='$status' WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
     }
   }    
	}
 }
if($rekam=="hapus"){

   $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_hadir_7b WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and pkn_h='$pknk' and tgl_h='$tgl' ");
   $tpk2=mysqli_fetch_assoc($tampi2);
	 
   mysqli_query($koneksi, "DELETE FROM tb_hadir_7b WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and    
    pkn_h='$pknk' and tgl_h='$tgl' ");
	
   mysqli_query($koneksi, "DELETE FROM detail_hadir_7b WHERE kd_hadir='$tpk2[id_hadir]' ");
}
 header("Location: ../home.php?home=khs&nis_k=$nis_k&blnk=$blnk&pknk=$pknk&tgl=$tgl&kdmpl=$kdmpl&jam_k=$jam_k&status=$status&klsk=$klsk");
}

///////////////

if($klsk=="VIIC"){
if($rekam=="Simpan"){
   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_hadir_7c WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and    
    pkn_h='$pknk' and tgl_h='$tgl' ");
   

   $tp=mysqli_fetch_assoc($tampi);
   $tpk=mysqli_num_rows($tampi);
   
   if($tpk<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO tb_hadir_7c VALUES('','$nis_k','$thaj','$sem','$blnk','$pknk','$tgl')");
	  
	$tampi5=mysqli_query($koneksi, "SELECT * FROM tb_hadir_7c WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and
    pkn_h='$pknk' and tgl_h='$tgl' ");
   $tp5=mysqli_fetch_assoc($tampi5);
   
	  $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_7c VALUES('$tp5[id_hadir]','$jam_k','$kdmpl','$status','')");
   }
   if($tpk>=1){
   
   $tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir_7c WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
   $tpk2=mysqli_num_rows($tampi2);
   
   if($tpk2<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_7c VALUES('$tp[id_hadir]','$jam_k','$kdmpl','$status','')"); 
	 } 
   if($tpk2>=1){
      mysqli_query($koneksi, "UPDATE detail_hadir_7c SET status='$status' WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
     }
   }
   
 }
if($rekam=="Simpans"){
    $sltbs=mysqli_query($koneksi, "SELECT nis,kelas_st,status FROM tb_santri WHERE kelas_st='$klsk' AND status='a' ");
    while($tpn=mysqli_fetch_assoc($sltbs)){
	
	$tampi=mysqli_query($koneksi, "SELECT * FROM tb_hadir_7c WHERE nis_h='$tpn[nis]' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and
    pkn_h='$pknk' and tgl_h='$tgl' ");
   
   $tp=mysqli_fetch_assoc($tampi);
   $tpk=mysqli_num_rows($tampi);
   
   if($tpk<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO tb_hadir_7c VALUES('','$tpn[nis]','$thaj','$sem','$blnk','$pknk','$tgl')");
	  
	$tampi5=mysqli_query($koneksi, "SELECT * FROM tb_hadir_7c WHERE nis_h='$tpn[nis]' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and
    pkn_h='$pknk' and tgl_h='$tgl' ");
   $tp5=mysqli_fetch_assoc($tampi5);
   
	  $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_7c VALUES('$tp5[id_hadir]','$jam_k','$kdmpl','$status','')");
   }
   if($tpk>=1){
   
   $tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir_7c WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
   $tpk2=mysqli_num_rows($tampi2);
   
   if($tpk2<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_7c VALUES('$tp[id_hadir]','$jam_k','$kdmpl','$status','')"); 
	 } 
   if($tpk2>=1){
      mysqli_query($koneksi, "UPDATE detail_hadir_7c SET status='$status' WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
     }
   }    
	}
 }
if($rekam=="hapus"){

   $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_hadir_7c WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and pkn_h='$pknk' and tgl_h='$tgl' ");
   $tpk2=mysqli_fetch_assoc($tampi2);
	 
   mysqli_query($koneksi, "DELETE FROM tb_hadir_7c WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and    
    pkn_h='$pknk' and tgl_h='$tgl' ");
	
   mysqli_query($koneksi, "DELETE FROM detail_hadir_7c WHERE kd_hadir='$tpk2[id_hadir]' ");
}
 header("Location: ../home.php?home=khs&nis_k=$nis_k&blnk=$blnk&pknk=$pknk&tgl=$tgl&kdmpl=$kdmpl&jam_k=$jam_k&status=$status&klsk=$klsk");
}
/////////////////////


if($klsk=="VIIIA"){
if($rekam=="Simpan"){
   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_hadir_8a WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and    
    pkn_h='$pknk' and tgl_h='$tgl' ");
   
   $tp=mysqli_fetch_assoc($tampi);
   $tpk=mysqli_num_rows($tampi);
   
   if($tpk<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO tb_hadir_8a VALUES('','$nis_k','$thaj','$sem','$blnk','$pknk','$tgl')");
	  
	$tampi5=mysqli_query($koneksi, "SELECT * FROM tb_hadir_8a WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and
    pkn_h='$pknk' and tgl_h='$tgl' ");
   $tp5=mysqli_fetch_assoc($tampi5);
   
	  $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_8a VALUES('$tp5[id_hadir]','$jam_k','$kdmpl','$status','')");
   }
   if($tpk>=1){
   
   $tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir_8a WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
   $tpk2=mysqli_num_rows($tampi2);
   
   if($tpk2<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_8a VALUES('$tp[id_hadir]','$jam_k','$kdmpl','$status','')"); 
	 } 
   if($tpk2>=1){
      mysqli_query($koneksi, "UPDATE detail_hadir_8a SET status='$status' WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
     }
   }
   
 }
if($rekam=="Simpans"){
    $sltbs=mysqli_query($koneksi, "SELECT nis,kelas_st,status FROM tb_santri WHERE kelas_st='$klsk' AND status='a' ");
    while($tpn=mysqli_fetch_assoc($sltbs)){
	
	$tampi=mysqli_query($koneksi, "SELECT * FROM tb_hadir_8a WHERE nis_h='$tpn[nis]' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and
    pkn_h='$pknk' and tgl_h='$tgl' ");
   
   $tp=mysqli_fetch_assoc($tampi);
   $tpk=mysqli_num_rows($tampi);
   
   if($tpk<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO tb_hadir_8a VALUES('','$tpn[nis]','$thaj','$sem','$blnk','$pknk','$tgl')");
	  
	$tampi5=mysqli_query($koneksi, "SELECT * FROM tb_hadir_8a WHERE nis_h='$tpn[nis]' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and
    pkn_h='$pknk' and tgl_h='$tgl' ");
   $tp5=mysqli_fetch_assoc($tampi5);
   
	  $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_8a VALUES('$tp5[id_hadir]','$jam_k','$kdmpl','$status','')");
   }
   if($tpk>=1){
   
   $tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir_8a WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
   $tpk2=mysqli_num_rows($tampi2);
   
   if($tpk2<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_8a VALUES('$tp[id_hadir]','$jam_k','$kdmpl','$status','')"); 
	 } 
   if($tpk2>=1){
      mysqli_query($koneksi, "UPDATE detail_hadir_8a SET status='$status' WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
     }
   }    
	}
 }
if($rekam=="hapus"){

   $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_hadir_8a WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and pkn_h='$pknk' and tgl_h='$tgl' ");
   $tpk2=mysqli_fetch_assoc($tampi2);
	 
   mysqli_query($koneksi, "DELETE FROM tb_hadir_8a WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and    
    pkn_h='$pknk' and tgl_h='$tgl' ");
	
   mysqli_query($koneksi, "DELETE FROM detail_hadir_8a WHERE kd_hadir='$tpk2[id_hadir]' ");
}
 header("Location: ../home.php?home=khs&nis_k=$nis_k&blnk=$blnk&pknk=$pknk&tgl=$tgl&kdmpl=$kdmpl&jam_k=$jam_k&status=$status&klsk=$klsk");

}


if($klsk=="VIIIB"){

if($rekam=="Simpan"){
   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_hadir_8b WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and    
    pkn_h='$pknk' and tgl_h='$tgl' ");
   

   $tp=mysqli_fetch_assoc($tampi);
   $tpk=mysqli_num_rows($tampi);
   
   if($tpk<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO tb_hadir_8b VALUES('','$nis_k','$thaj','$sem','$blnk','$pknk','$tgl')");
	  
	$tampi5=mysqli_query($koneksi, "SELECT * FROM tb_hadir_8b WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and
    pkn_h='$pknk' and tgl_h='$tgl' ");
   $tp5=mysqli_fetch_assoc($tampi5);
   
	  $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_8b VALUES('$tp5[id_hadir]','$jam_k','$kdmpl','$status','')");
   }
   if($tpk>=1){
   
   $tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir_8b WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
   $tpk2=mysqli_num_rows($tampi2);
   
   if($tpk2<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_8b VALUES('$tp[id_hadir]','$jam_k','$kdmpl','$status','')"); 
	 } 
   if($tpk2>=1){
      mysqli_query($koneksi, "UPDATE detail_hadir_8b SET status='$status' WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
     }
   }
   
 }
if($rekam=="Simpans"){
    $sltbs=mysqli_query($koneksi, "SELECT nis,kelas_st,status FROM tb_santri WHERE kelas_st='$klsk' AND status='a' ");
    while($tpn=mysqli_fetch_assoc($sltbs)){
	
	$tampi=mysqli_query($koneksi, "SELECT * FROM tb_hadir_8b WHERE nis_h='$tpn[nis]' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and
    pkn_h='$pknk' and tgl_h='$tgl' ");
   
   $tp=mysqli_fetch_assoc($tampi);
   $tpk=mysqli_num_rows($tampi);
   
   if($tpk<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO tb_hadir_8b VALUES('','$tpn[nis]','$thaj','$sem','$blnk','$pknk','$tgl')");
	  
	$tampi5=mysqli_query($koneksi, "SELECT * FROM tb_hadir_8b WHERE nis_h='$tpn[nis]' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and
    pkn_h='$pknk' and tgl_h='$tgl' ");
   $tp5=mysqli_fetch_assoc($tampi5);
   
	  $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_8b VALUES('$tp5[id_hadir]','$jam_k','$kdmpl','$status','')");
   }
   if($tpk>=1){
   
   $tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir_8b WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
   $tpk2=mysqli_num_rows($tampi2);
   
   if($tpk2<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_8b VALUES('$tp[id_hadir]','$jam_k','$kdmpl','$status','')"); 
	 } 
   if($tpk2>=1){
      mysqli_query($koneksi, "UPDATE detail_hadir_8b SET status='$status' WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
     }
   }    
	}
 }
if($rekam=="hapus"){

   $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_hadir_8b WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and pkn_h='$pknk' and tgl_h='$tgl' ");
   $tpk2=mysqli_fetch_assoc($tampi2);
	 
   mysqli_query($koneksi, "DELETE FROM tb_hadir_8b WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and    
    pkn_h='$pknk' and tgl_h='$tgl' ");
	
   mysqli_query($koneksi, "DELETE FROM detail_hadir_8b WHERE kd_hadir='$tpk2[id_hadir]' ");
}
 header("Location: ../home.php?home=khs&nis_k=$nis_k&blnk=$blnk&pknk=$pknk&tgl=$tgl&kdmpl=$kdmpl&jam_k=$jam_k&status=$status&klsk=$klsk");

}



if($klsk=="VIIIC"){

if($rekam=="Simpan"){
   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_hadir_8c WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and    
    pkn_h='$pknk' and tgl_h='$tgl' ");
   

   $tp=mysqli_fetch_assoc($tampi);
   $tpk=mysqli_num_rows($tampi);
   
   if($tpk<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO tb_hadir_8c VALUES('','$nis_k','$thaj','$sem','$blnk','$pknk','$tgl')");
	  
	$tampi5=mysqli_query($koneksi, "SELECT * FROM tb_hadir_8c WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and
    pkn_h='$pknk' and tgl_h='$tgl' ");
   $tp5=mysqli_fetch_assoc($tampi5);
   
	  $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_8c VALUES('$tp5[id_hadir]','$jam_k','$kdmpl','$status','')");
   }
   if($tpk>=1){
   
   $tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir_8c WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
   $tpk2=mysqli_num_rows($tampi2);
   
   if($tpk2<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_8c VALUES('$tp[id_hadir]','$jam_k','$kdmpl','$status','')"); 
	 } 
   if($tpk2>=1){
      mysqli_query($koneksi, "UPDATE detail_hadir_8c SET status='$status' WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
     }
   }
   
 }
if($rekam=="Simpans"){
    $sltbs=mysqli_query($koneksi, "SELECT nis,kelas_st,status FROM tb_santri WHERE kelas_st='$klsk' AND status='a' ");
    while($tpn=mysqli_fetch_assoc($sltbs)){
	
	$tampi=mysqli_query($koneksi, "SELECT * FROM tb_hadir_8c WHERE nis_h='$tpn[nis]' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and
    pkn_h='$pknk' and tgl_h='$tgl' ");
   
   $tp=mysqli_fetch_assoc($tampi);
   $tpk=mysqli_num_rows($tampi);
   
   if($tpk<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO tb_hadir_8c VALUES('','$tpn[nis]','$thaj','$sem','$blnk','$pknk','$tgl')");
	  
	$tampi5=mysqli_query($koneksi, "SELECT * FROM tb_hadir_8c WHERE nis_h='$tpn[nis]' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and
    pkn_h='$pknk' and tgl_h='$tgl' ");
   $tp5=mysqli_fetch_assoc($tampi5);
   
	  $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_8c VALUES('$tp5[id_hadir]','$jam_k','$kdmpl','$status','')");
   }
   if($tpk>=1){
   
   $tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir_8c WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
   $tpk2=mysqli_num_rows($tampi2);
   
   if($tpk2<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_8c VALUES('$tp[id_hadir]','$jam_k','$kdmpl','$status','')"); 
	 } 
   if($tpk2>=1){
      mysqli_query($koneksi, "UPDATE detail_hadir_8c SET status='$status' WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
     }
   }    
	}
 }
if($rekam=="hapus"){

   $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_hadir_8c WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and pkn_h='$pknk' and tgl_h='$tgl' ");
   $tpk2=mysqli_fetch_assoc($tampi2);
	 
   mysqli_query($koneksi, "DELETE FROM tb_hadir_8c WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and    
    pkn_h='$pknk' and tgl_h='$tgl' ");
	
   mysqli_query($koneksi, "DELETE FROM detail_hadir_8c WHERE kd_hadir='$tpk2[id_hadir]' ");
}
 header("Location: ../home.php?home=khs&nis_k=$nis_k&blnk=$blnk&pknk=$pknk&tgl=$tgl&kdmpl=$kdmpl&jam_k=$jam_k&status=$status&klsk=$klsk");

}



if($klsk=="IXA"){

if($rekam=="Simpan"){
   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_hadir_9a WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and    
    pkn_h='$pknk' and tgl_h='$tgl' ");
   

   $tp=mysqli_fetch_assoc($tampi);
   $tpk=mysqli_num_rows($tampi);
   
   if($tpk<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO tb_hadir_9a VALUES('','$nis_k','$thaj','$sem','$blnk','$pknk','$tgl')");
	  
	$tampi5=mysqli_query($koneksi, "SELECT * FROM tb_hadir_9a WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and
    pkn_h='$pknk' and tgl_h='$tgl' ");
   $tp5=mysqli_fetch_assoc($tampi5);
   
	  $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_9a VALUES('$tp5[id_hadir]','$jam_k','$kdmpl','$status','')");
   }
   if($tpk>=1){
   
   $tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir_9a WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
   $tpk2=mysqli_num_rows($tampi2);
   
   if($tpk2<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_9a VALUES('$tp[id_hadir]','$jam_k','$kdmpl','$status','')"); 
	 } 
   if($tpk2>=1){
      mysqli_query($koneksi, "UPDATE detail_hadir_9a SET status='$status' WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
     }
   }
   
 }
if($rekam=="Simpans"){
    $sltbs=mysqli_query($koneksi, "SELECT nis,kelas_st,status FROM tb_santri WHERE kelas_st='$klsk' AND status='a' ");
    while($tpn=mysqli_fetch_assoc($sltbs)){
	
	$tampi=mysqli_query($koneksi, "SELECT * FROM tb_hadir_9a WHERE nis_h='$tpn[nis]' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and
    pkn_h='$pknk' and tgl_h='$tgl' ");
   
   $tp=mysqli_fetch_assoc($tampi);
   $tpk=mysqli_num_rows($tampi);
   
   if($tpk<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO tb_hadir_9a VALUES('','$tpn[nis]','$thaj','$sem','$blnk','$pknk','$tgl')");
	  
	$tampi5=mysqli_query($koneksi, "SELECT * FROM tb_hadir_9a WHERE nis_h='$tpn[nis]' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and
    pkn_h='$pknk' and tgl_h='$tgl' ");
   $tp5=mysqli_fetch_assoc($tampi5);
   
	  $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_9a VALUES('$tp5[id_hadir]','$jam_k','$kdmpl','$status','')");
   }
   if($tpk>=1){
   
   $tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir_9a WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
   $tpk2=mysqli_num_rows($tampi2);
   
   if($tpk2<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_9a VALUES('$tp[id_hadir]','$jam_k','$kdmpl','$status','')"); 
	 } 
   if($tpk2>=1){
      mysqli_query($koneksi, "UPDATE detail_hadir_9a SET status='$status' WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
     }
   }    
	}
 }
if($rekam=="hapus"){

   $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_hadir_9a WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and pkn_h='$pknk' and tgl_h='$tgl' ");
   $tpk2=mysqli_fetch_assoc($tampi2);
	 
   mysqli_query($koneksi, "DELETE FROM tb_hadir_9a WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and    
    pkn_h='$pknk' and tgl_h='$tgl' ");
	
   mysqli_query($koneksi, "DELETE FROM detail_hadir_9a WHERE kd_hadir='$tpk2[id_hadir]' ");
}
 header("Location: ../home.php?home=khs&nis_k=$nis_k&blnk=$blnk&pknk=$pknk&tgl=$tgl&kdmpl=$kdmpl&jam_k=$jam_k&status=$status&klsk=$klsk");
 
}


if($klsk=="IXB"){

if($rekam=="Simpan"){
   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_hadir_9b WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and    
    pkn_h='$pknk' and tgl_h='$tgl' ");
   

   $tp=mysqli_fetch_assoc($tampi);
   $tpk=mysqli_num_rows($tampi);
   
   if($tpk<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO tb_hadir_9b VALUES('','$nis_k','$thaj','$sem','$blnk','$pknk','$tgl')");
	  
	$tampi5=mysqli_query($koneksi, "SELECT * FROM tb_hadir_9b WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and
    pkn_h='$pknk' and tgl_h='$tgl' ");
   $tp5=mysqli_fetch_assoc($tampi5);
   
	  $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_9b VALUES('$tp5[id_hadir]','$jam_k','$kdmpl','$status','')");
   }
   if($tpk>=1){
   
   $tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir_9b WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
   $tpk2=mysqli_num_rows($tampi2);
   
   if($tpk2<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_9b VALUES('$tp[id_hadir]','$jam_k','$kdmpl','$status','')"); 
	 } 
   if($tpk2>=1){
      mysqli_query($koneksi, "UPDATE detail_hadir_9b SET status='$status' WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
     }
   }
   
 }
if($rekam=="Simpans"){
    $sltbs=mysqli_query($koneksi, "SELECT nis,kelas_st,status FROM tb_santri WHERE kelas_st='$klsk' AND status='a' ");
    while($tpn=mysqli_fetch_assoc($sltbs)){
	
	$tampi=mysqli_query($koneksi, "SELECT * FROM tb_hadir_9b WHERE nis_h='$tpn[nis]' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and
    pkn_h='$pknk' and tgl_h='$tgl' ");
   
   $tp=mysqli_fetch_assoc($tampi);
   $tpk=mysqli_num_rows($tampi);
   
   if($tpk<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO tb_hadir_9b VALUES('','$tpn[nis]','$thaj','$sem','$blnk','$pknk','$tgl')");
	  
	$tampi5=mysqli_query($koneksi, "SELECT * FROM tb_hadir_9b WHERE nis_h='$tpn[nis]' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and
    pkn_h='$pknk' and tgl_h='$tgl' ");
   $tp5=mysqli_fetch_assoc($tampi5);
   
	  $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_9b VALUES('$tp5[id_hadir]','$jam_k','$kdmpl','$status','')");
   }
   if($tpk>=1){
   
   $tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir_9b WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
   $tpk2=mysqli_num_rows($tampi2);
   
   if($tpk2<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_9b VALUES('$tp[id_hadir]','$jam_k','$kdmpl','$status','')"); 
	 } 
   if($tpk2>=1){
      mysqli_query($koneksi, "UPDATE detail_hadir_9b SET status='$status' WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
     }
   }    
	}
 }
if($rekam=="hapus"){

   $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_hadir_9b WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and pkn_h='$pknk' and tgl_h='$tgl' ");
   $tpk2=mysqli_fetch_assoc($tampi2);
	 
   mysqli_query($koneksi, "DELETE FROM tb_hadir_9b WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and    
    pkn_h='$pknk' and tgl_h='$tgl' ");
	
   mysqli_query($koneksi, "DELETE FROM detail_hadir_9b WHERE kd_hadir='$tpk2[id_hadir]' ");
}
 header("Location: ../home.php?home=khs&nis_k=$nis_k&blnk=$blnk&pknk=$pknk&tgl=$tgl&kdmpl=$kdmpl&jam_k=$jam_k&status=$status&klsk=$klsk");

}

if($klsk=="X"){

if($rekam=="Simpan"){
   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_hadir_10a WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and    
    pkn_h='$pknk' and tgl_h='$tgl' ");
   

   $tp=mysqli_fetch_assoc($tampi);
   $tpk=mysqli_num_rows($tampi);
   
   if($tpk<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO tb_hadir_10a VALUES('','$nis_k','$thaj','$sem','$blnk','$pknk','$tgl')");
	  
	$tampi5=mysqli_query($koneksi, "SELECT * FROM tb_hadir_10a WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and
    pkn_h='$pknk' and tgl_h='$tgl' ");
   $tp5=mysqli_fetch_assoc($tampi5);
   
	  $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_10a VALUES('$tp5[id_hadir]','$jam_k','$kdmpl','$status','')");
   }
   if($tpk>=1){
   
   $tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir_10a WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
   $tpk2=mysqli_num_rows($tampi2);
   
   if($tpk2<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_10a VALUES('$tp[id_hadir]','$jam_k','$kdmpl','$status','')"); 
	 } 
   if($tpk2>=1){
      mysqli_query($koneksi, "UPDATE detail_hadir_10a SET status='$status' WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
     }
   }
   
 }
if($rekam=="Simpans"){
    $sltbs=mysqli_query($koneksi, "SELECT nis,kelas_st,status FROM tb_santri WHERE kelas_st='$klsk' AND status='a' ");
    while($tpn=mysqli_fetch_assoc($sltbs)){
	
	$tampi=mysqli_query($koneksi, "SELECT * FROM tb_hadir_10a WHERE nis_h='$tpn[nis]' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and
    pkn_h='$pknk' and tgl_h='$tgl' ");
   
   $tp=mysqli_fetch_assoc($tampi);
   $tpk=mysqli_num_rows($tampi);
   
   if($tpk<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO tb_hadir_10a VALUES('','$tpn[nis]','$thaj','$sem','$blnk','$pknk','$tgl')");
	  
	$tampi5=mysqli_query($koneksi, "SELECT * FROM tb_hadir_10a WHERE nis_h='$tpn[nis]' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and
    pkn_h='$pknk' and tgl_h='$tgl' ");
   $tp5=mysqli_fetch_assoc($tampi5);
   
	  $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_10a VALUES('$tp5[id_hadir]','$jam_k','$kdmpl','$status','')");
   }
   if($tpk>=1){
   
   $tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir_10a WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
   $tpk2=mysqli_num_rows($tampi2);
   
   if($tpk2<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_10a VALUES('$tp[id_hadir]','$jam_k','$kdmpl','$status','')"); 
	 } 
   if($tpk2>=1){
      mysqli_query($koneksi, "UPDATE detail_hadir_10a SET status='$status' WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
     }
   }    
	}
 }
if($rekam=="hapus"){

   $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_hadir_10a WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and pkn_h='$pknk' and tgl_h='$tgl' ");
   $tpk2=mysqli_fetch_assoc($tampi2);
	 
   mysqli_query($koneksi, "DELETE FROM tb_hadir_10a WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and    
    pkn_h='$pknk' and tgl_h='$tgl' ");
	
   mysqli_query($koneksi, "DELETE FROM detail_hadir_10a WHERE kd_hadir='$tpk2[id_hadir]' ");
}
 header("Location: ../home.php?home=khs&nis_k=$nis_k&blnk=$blnk&pknk=$pknk&tgl=$tgl&kdmpl=$kdmpl&jam_k=$jam_k&status=$status&klsk=$klsk");
 
}




if($klsk=="XI"){

if($rekam=="Simpan"){
   $tampi=mysqli_query($koneksi, "SELECT * FROM tb_hadir_11a WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and    
    pkn_h='$pknk' and tgl_h='$tgl' ");
   

   $tp=mysqli_fetch_assoc($tampi);
   $tpk=mysqli_num_rows($tampi);
   
   if($tpk<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO tb_hadir_11a VALUES('','$nis_k','$thaj','$sem','$blnk','$pknk','$tgl')");
	  
	$tampi5=mysqli_query($koneksi, "SELECT * FROM tb_hadir_11a WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and
    pkn_h='$pknk' and tgl_h='$tgl' ");
   $tp5=mysqli_fetch_assoc($tampi5);
   
	  $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_11a VALUES('$tp5[id_hadir]','$jam_k','$kdmpl','$status','')");
   }
   if($tpk>=1){
   
   $tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir_11a WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
   $tpk2=mysqli_num_rows($tampi2);
   
   if($tpk2<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_11a VALUES('$tp[id_hadir]','$jam_k','$kdmpl','$status','')"); 
	 } 
   if($tpk2>=1){
      mysqli_query($koneksi, "UPDATE detail_hadir_11a SET status='$status' WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
     }
   }
   
 }
if($rekam=="Simpans"){
    $sltbs=mysqli_query($koneksi, "SELECT nis,kelas_st,status FROM tb_santri WHERE kelas_st='$klsk' AND status='a' ");
    while($tpn=mysqli_fetch_assoc($sltbs)){
	
	$tampi=mysqli_query($koneksi, "SELECT * FROM tb_hadir_11a WHERE nis_h='$tpn[nis]' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and
    pkn_h='$pknk' and tgl_h='$tgl' ");
   
   $tp=mysqli_fetch_assoc($tampi);
   $tpk=mysqli_num_rows($tampi);
   
   if($tpk<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO tb_hadir_11a VALUES('','$tpn[nis]','$thaj','$sem','$blnk','$pknk','$tgl')");
	  
	$tampi5=mysqli_query($koneksi, "SELECT * FROM tb_hadir_11a WHERE nis_h='$tpn[nis]' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and
    pkn_h='$pknk' and tgl_h='$tgl' ");
   $tp5=mysqli_fetch_assoc($tampi5);
   
	  $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_11a VALUES('$tp5[id_hadir]','$jam_k','$kdmpl','$status','')");
   }
   if($tpk>=1){
   
   $tampi2=mysqli_query($koneksi, "SELECT * FROM detail_hadir_11a WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
   $tpk2=mysqli_num_rows($tampi2);
   
   if($tpk2<=0){
      $rek=mysqli_query($koneksi, "INSERT INTO detail_hadir_11a VALUES('$tp[id_hadir]','$jam_k','$kdmpl','$status','')"); 
	 } 
   if($tpk2>=1){
      mysqli_query($koneksi, "UPDATE detail_hadir_11a SET status='$status' WHERE kd_hadir='$tp[id_hadir]' and jam='$jam_k' and kd_mpl='$kdmpl' ");
     }
   }    
	}
 }
if($rekam=="hapus"){

   $tampi2=mysqli_query($koneksi, "SELECT * FROM tb_hadir_11a WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and pkn_h='$pknk' and tgl_h='$tgl' ");
   $tpk2=mysqli_fetch_assoc($tampi2);
	 
   mysqli_query($koneksi, "DELETE FROM tb_hadir_11a WHERE nis_h='$nis_k' and thn_ajrh='$thaj' and sem_h='$sem' and bln_h='$blnk' and    
    pkn_h='$pknk' and tgl_h='$tgl' ");
	
   mysqli_query($koneksi, "DELETE FROM detail_hadir_11a WHERE kd_hadir='$tpk2[id_hadir]' ");
}
 header("Location: ../home.php?home=khs&nis_k=$nis_k&blnk=$blnk&pknk=$pknk&tgl=$tgl&kdmpl=$kdmpl&jam_k=$jam_k&status=$status&klsk=$klsk");
 
}
?>