<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style5 {color: #FFFFFF}
-->
</style>
</head>
<script language="JavaScript" type="text/javascript">
function angka(){
  if(isNaN(form1.jmlb.value)) { form1.jmlb.value='';  }
  
}
function konfirmasi(pesan) { 
  var is_confirmed=confirm(pesan);      
  if(!is_confirmed){    
   return false;
	}	
}
</script>

<?
$id_k=$_GET['id_k'];
$ed_k=$_GET['ed_k'];
$edt=$_GET['edt'];
$klkk=$_GET['klkk'];
$idpbyr=$_GET['idpbyr'];
$bnlk=$_GET['bnlk']; 
$psn=$_GET['psn'];
$notak=$_GET['notak'];
$notak2=$_GET['notak2'];
$gb_nota=$_GET['gb_nota'];
$nlk=$_GET['nlk'];
$tmb=$_GET['tmb'];
$id_tra=$_GET['id_tra']; 
//pmb=4&id_k=$id_str&idpbyr=$sidp&klkk=$kodek
?>
<body>
<form id="form1" name="form1" enctype="multipart/form-data" method="post" action="page/act_dt_pembayaran.php">
  <table width="100%" border="0" cellspacing="0" cellpadding="2">
    <tr>
      <td height="23" colspan="3" bgcolor="#B3CF70"><strong>&nbsp;Input Data Pembayaran </strong></td>
    </tr>
	<?
	if($edt=='1'){
	  if($id_tra!=""){ $tid="id_transaksi='$id_tra' and"; }
	  $tmpkls1=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE $tid kd_bayar='$idpbyr' and kd_santri='$id_k' and bln_bayar='$bnlk' and semester_b='$sem' and thn_b='$thaj'");
      $cpr1=mysqli_fetch_assoc($tmpkls1);
	  if($cpr1['kd_santri']!=""){$id_k=$cpr1['kd_santri']; }
	}
$tmpkls=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st FROM tb_santri WHERE id_santri='$id_k' ");
    $cpr=mysqli_fetch_assoc($tmpkls);
	?>
    <tr>
      <td colspan="3" height="7"></td>
    </tr>
    <tr>
      <td colspan="3" bgcolor="#ACD75E"><div align="center"><font color="#FF0000" size="+1">
          <? if($psn==1){ echo"Silahkan pilih pembayaran!"; } ?>
      </font></div></td>
    </tr>
    <tr>
      <td width="2%" bgcolor="#DCF3AF">&nbsp;</td>
      <td width="19%" bgcolor="#DCF3AF">Nis</td>
      <td width="79%" bgcolor="#DCF3AF"><? echo $cpr['nis']; ?>
      <input type="hidden" name="id_str" value="<? echo $cpr['id_santri']; ?>" />
      <input type="hidden" name="semb" value="<? echo $sem; ?>" />
      <input type="hidden" name="thnb" value="<? echo $thaj; ?>" /></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Nama Santri </td>
      <td bgcolor="#ACD75E"><? echo $cpr['nama']; ?></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">Kelas</td>
      <td bgcolor="#DCF3AF"><? echo $cpr['kelas_st']; ?></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Pembayaran</td>
      <td bgcolor="#ACD75E"><? 
	  if($edt==2 || $edt==1){
	    $cc=mysqli_query($koneksi, "SELECT kd_pembayaran,pembayaran FROM tb_pembayaran WHERE  kd_pembayaran='$idpbyr' ");
        $ctc=mysqli_fetch_assoc($cc);
		echo "$ctc[pembayaran]"; if($bnlk!=""){ echo" Bulan $bnlk"; }
	  }
	  ?>
      <input type="hidden" name="sidp" value="<? echo"$idpbyr"; ?>" />
      <input type="hidden" name="sblnb" value="<? echo"$bnlk"; ?>" /></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td valign="top" bgcolor="#DCF3AF">Tanggal Bayar </td>
      <td bgcolor="#DCF3AF"><? if($edt=="1"){ echo $cpr1['tgl_bayar']."&nbsp;"; } ?><select name="tgl">
        <option>-</option>
        <? for($i=1;$i<=31;$i++){ 
		   if($cpr1['tgl_bayar']==""){ $tglx=date("d")+1-1; }
		?>
        <option value="<? echo $i; ?>" <? if($i==$tglx){ ?> selected="selected" <? } ?>><? echo $i; ?></option>
        <? } ?>
      </select>
	  <? if($cpr1['tgl_bayar']==""){ $blnx=date("M"); }else{ $blnx=""; } ?>
        <select name="bln">
          <option>-</option>
          <option value="Januari" <? if($blnx=="Jan"){ ?> selected="selected"<? } ?>>Januari</option>
          <option value="Februari" <? if($blnx=="Feb"){ ?> selected="selected"<? } ?>>Februari</option>
          <option value="Maret" <? if($blnx=="Mar"){ ?> selected="selected"<? } ?>>Maret</option>
          <option value="April" <? if($blnx=="Apr"){ ?> selected="selected"<? } ?>>April</option>
          <option value="Mei" <? if($blnx=="May"){ ?> selected="selected"<? } ?>>Mei</option>
          <option value="Juni" <? if($blnx=="Jun"){ ?> selected="selected"<? } ?>>Juni</option>
          <option value="Juli" <? if($blnx=="Jul"){ ?> selected="selected"<? } ?>>Juli</option>
          <option value="Agustus" <? if($blnx=="Aug"){ ?> selected="selected"<? } ?>>Agustus</option>
          <option value="September" <? if($blnx=="Sep"){ ?> selected="selected"<? } ?>>September</option>
          <option value="Oktober" <? if($blnx=="Oct"){ ?> selected="selected"<? } ?>>Oktober</option>
          <option value="November" <? if($blnx=="Nov"){ ?> selected="selected"<? } ?>>November</option>
          <option value="Desember" <? if($blnx=="Dec"){ ?> selected="selected"<? } ?>>Desember</option>
        </select>
        <select name="thn">
          <option>-</option>
          <? for($b=-3;$b<=3;$b++){ 
		     if($cpr1['tgl_bayar']==""){ $thnx=date("Y"); }else{ $thnx=""; } 
		  ?>
          <option value="<? echo date("Y")+$b; ?>" <? if($thnx==date("Y")+$b){ ?> selected="selected" <? } ?>><? echo date("Y")+$b; ?></option>
          <? } ?>
        </select></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td valign="top" bgcolor="#ACD75E">Jumlah</td>
      <td bgcolor="#ACD75E"><input type="text" name="jmlb" onKeyUp="return angka();" value="<? if($cpr1['jml_bayar']!=""){ echo $cpr1['jml_bayar']; }else{ echo $nlk; }?>" /></td>
    </tr>
    
    
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF"><? 
				   $bl=date("m");
				   $th=date("y");
				   if($notak==""){ 
				      $crint=$bl.$th;
				      $pmb=mysqli_query($koneksi, "SELECT * FROM tb_nokwi WHERE no_kwitansi1='$crint' ");
					  $qct=mysqli_fetch_assoc($pmb);
					  $ctp=mysqli_num_rows($pmb)+1;
				      if($ctp<=9) { $notak=$bl.$th; $notak2="000".$ctp; }
				      if($ctp<=99 AND $ctp>=10) { $notak=$bl.$th; $notak2="00".$ctp; }
					  if($ctp<=999 AND $ctp>=100) { $notak=$bl.$th; $notak2="0".$ctp; }
					  if($ctp<=9999 AND $ctp>=1001) { $notak=$bl.$th; $notak2=$ctp; }
					  $gb_nota=$notak.$notak2;
				   }
				   
				   ?>
      <input type="hidden" name="notak" value="<? echo $notak; ?>" />
	  <input type="hidden" name="notak2" value="<? echo $notak2; ?>" />
	  <input type="hidden" name="gb_nota" value="<? echo $gb_nota; ?>" />
	  <input type="hidden" name="tmbk" value="<? echo $tmb; ?>" />
	  <input type="hidden" name="e_idtrs" value="<? echo $id_tra; ?>" /></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF"><input name="rekam4" type="submit" value="Simpan" /></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF"><input type="hidden" name="kodek" value="<? echo $klkk; ?>" /></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td colspan="2" bgcolor="#DCF3AF"><table width="100%" border="0" cellspacing="0" cellpadding="3">
        <tr>
          <td width="36%" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#B3CF70">
                <tr> 
                  <td colspan="3" bgcolor="#B3CF70"><div align="center"><strong>Syahriah 
                      &amp; Komite</strong></div></td>
                </tr>
                <tr> 
                  <td width="27%" bgcolor="#669966"><div align="center" class="style5">Bulan</div></td>
                  <td width="36%" bgcolor="#669966"><div align="center"><font color="#FFFFFF">Tgl 
                      Bayar</font></div></td>
                  <td width="37%" bgcolor="#669966"><div align="center" class="style5">Telah 
                      di Bayar</div></td>
                </tr>
                <?
			 $pmb9=mysqli_query($koneksi, "SELECT * FROM rincian_bayar WHERE kd_kls='$klkk' AND kd_bayar='1'");
             $c9=mysqli_fetch_assoc($pmb9);
		  
			   $qtpy=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran  WHERE kd_pembayaran='$c9[kd_bayar]' ");
			   $cqtpy=mysqli_fetch_assoc($qtpy);
			   
			$bea8=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE kd_santri='$id_k' AND kd_bayar='1' AND thn_ajaran='$thaj'                          AND semester='$sem' ");
            $cbea8=mysqli_fetch_assoc($bea8);
			$jpsk=$cqtpy['jumlah']-$cbea8['jml_beasiswa'];
			?>
                <tr> 
                  <td><div align="center"><a href="home.php?home=byr&pmb=4&id_k=<? echo"$id_k&klkk=$klkk&notak=$notak&notak2=$notak2&gb_nota=$gb_nota&bnlk=Januari&idpbyr=1&nlk=$jpsk&edt=1&tmb=s"; ?>" class="lk">Januari</a></div></td>
                  <td align="center">
                    <? 
			 
			  $tbl_2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$id_k' and kd_bayar='1' and bln_bayar='Januari' and semester_b='$sem' and thn_b='$thaj'");
              $ctbl_2=mysqli_fetch_assoc($tbl_2);
		      echo $ctbl_2['tgl_bayar'];
		  
			  ?>
                  </td>
                  <td><div align="right">Rp. 
                      <? 
			  $tot2=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$id_k' and kd_bayar='1' and bln_bayar='Januari' and semester_b='$sem' and thn_b='$thaj'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  } 
		  
		  $b1=format_agk($tot2); 
		  echo $b1;
		  $tgsl=date("d");
		  if($qbln>=1 and $tot2<$jpsk and $jpsk>=1) { echo"<font color='#FF000'> (Menunggak)</font>"; }
			  ?>
                    </div></td>
                </tr>
                <tr> 
                  <td><div align="center"><a href="home.php?home=byr&pmb=4&id_k=<? echo"$id_k&notak=$notak&notak2=$notak2&gb_nota=$gb_nota&klkk=$klkk&bnlk=Februari&idpbyr=1&nlk=$jpsk&edt=1&tmb=s"; ?>" class="lk">Februari</a></div></td>
                  <td align="center">
                    <? 
			 
			  $tbl_1=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$id_k' and kd_bayar='1' and bln_bayar='Februari' and semester_b='$sem' and thn_b='$thaj'");
              $ctbl_1=mysqli_fetch_assoc($tbl_1);
		      echo $ctbl_1['tgl_bayar'];
		  
			  ?>
                  </td>
                  <td><div align="right">Rp. 
                      <? 
			  $thnbp=substr($thaj,0,3);
			  $tot2=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$id_k' and kd_bayar='1' and bln_bayar='Februari' and semester_b='$sem' and thn_b='$thaj'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  } 
		  $b2=format_agk($tot2); 
		  echo $b2;
		  $tgsl=date("d");
		  if($qbln>=2 and $tot2<$jpsk and $jpsk>=1) { echo"<font color='#FF000'> (Menunggak)</font>"; }
			  ?>
                    </div></td>
                </tr>
                <tr> 
                  <td><div align="center"><a href="home.php?home=byr&pmb=4&id_k=<? echo"$id_k&klkk=$klkk&notak=$notak&notak2=$notak2&gb_nota=$gb_nota&bnlk=Maret&idpbyr=1&edt=1&nlk=$jpsk&edt=1&tmb=s"; ?>" class="lk">Maret</a></div></td>
                  <td align="center">
                    <? 
			 
			  $tbl_3=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$id_k' and kd_bayar='1' and bln_bayar='Maret' and semester_b='$sem' and thn_b='$thaj'");
              $ctbl_3=mysqli_fetch_assoc($tbl_3);
		      echo $ctbl_3['tgl_bayar'];
		  
			  ?>
                  </td>
                  <td><div align="right">Rp. 
                      <? 
			  $thnbp=substr($thaj,0,3);
			  $tot2=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE 
		  kd_santri='$id_k' and bln_bayar='Maret' and kd_bayar='1' and semester_b='$sem' and thn_b='$thaj'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  } 
		  $b3=format_agk($tot2); 
		  echo $b3;
		  $tgsl=date("d");
		  if($qbln>=3 and $tot2<$jpsk and $jpsk>=1) { echo"<font color='#FF000'> (Menunggak)</font>"; }
			  ?>
                    </div></td>
                </tr>
                <tr> 
                  <td><div align="center"><a href="home.php?home=byr&pmb=4&id_k=<? echo"$id_k&klkk=$klkk&notak=$notak&notak2=$notak2&gb_nota=$gb_nota&bnlk=April&idpbyr=1&edt=1&nlk=$jpsk&edt=1&tmb=s"; ?>" class="lk">April</a></div></td>
                  <td align="center">
                    <? 
			 
			  $tbl_4=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$id_k' and kd_bayar='1' and bln_bayar='April' and semester_b='$sem' and thn_b='$thaj'");
              $ctbl_4=mysqli_fetch_assoc($tbl_4);
		      echo $ctbl_4['tgl_bayar'];
		  
			  ?>
                  </td>
                  <td><div align="right">Rp. 
                      <? 
			  $thnbp=substr($thaj,0,3);
			  $tot2=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE 
		  kd_santri='$id_k' and bln_bayar='April' and kd_bayar='1' and semester_b='$sem' and thn_b='$thaj'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  } 
		  $b4=format_agk($tot2); 
		  echo $b4;
		  $tgsl=date("d");
		  if($qbln>=4 and $tot2<$jpsk and $jpsk>=1) { echo"<font color='#FF000'> (Menunggak)</font>"; }
			  ?>
                    </div></td>
                </tr>
                <tr> 
                  <td><div align="center"><a href="home.php?home=byr&pmb=4&id_k=<? echo"$id_k&klkk=$klkk&notak=$notak&notak2=$notak2&gb_nota=$gb_nota&bnlk=Mei&idpbyr=1&edt=1&nlk=$jpsk&edt=1&tmb=s"; ?>" class="lk">Mei</a></div></td>
                  <td align="center">
                    <? 
			 
			  $tbl_5=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$id_k' and kd_bayar='1' and bln_bayar='Mei' and semester_b='$sem' and thn_b='$thaj'");
              $ctbl_5=mysqli_fetch_assoc($tbl_5);
		      echo $ctbl_5['tgl_bayar'];
		  
			  ?>
                  </td>
                  <td><div align="right">Rp. 
                      <? 
			  $thnbp=substr($thaj,0,3);
			  $tot2=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE 
		  kd_santri='$id_k' and bln_bayar='Mei' and kd_bayar='1' and semester_b='$sem' and thn_b='$thaj'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  } 
		  $b5=format_agk($tot2); 
		  echo $b5;
		  $tgsl=date("d");
		  if($qbln>=5 and $tot2<$jpsk and $jpsk>=1) { echo"<font color='#FF000'> (Menunggak)</font>"; }
			  ?>
                    </div></td>
                </tr>
                <tr> 
                  <td><div align="center"><a href="home.php?home=byr&pmb=4&id_k=<? echo"$id_k&klkk=$klkk&notak=$notak&notak2=$notak2&gb_nota=$gb_nota&bnlk=Juni&idpbyr=1&edt=1&nlk=$jpsk&edt=1&tmb=s"; ?>" class="lk">Juni</a></div></td>
                  <td align="center">
                    <? 
			 
			  $tbl_6=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$id_k' and kd_bayar='1' and bln_bayar='Juni' and semester_b='$sem' and thn_b='$thaj'");
              $ctbl_6=mysqli_fetch_assoc($tbl_6);
		      echo $ctbl_6['tgl_bayar'];
		  
			  ?>
                  </td>
                  <td><div align="right">Rp. 
                      <? 
			  $thnbp=substr($thaj,0,3);
			  $tot2=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE 
		  kd_santri='$id_k' and bln_bayar='Juni' and kd_bayar='1' and semester_b='$sem' and thn_b='$thaj'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  } 
		  $b6=format_agk($tot2); 
		  echo $b6;
		  $tgsl=date("d");
		  if($qbln>=6 and $tot2<$jpsk and $jpsk>=1) { echo"<font color='#FF000'> (Menunggak)</font>"; }
			  ?>
                    </div></td>
                </tr>
                <tr> 
                  <td><div align="center"><a href="home.php?home=byr&pmb=4&id_k=<? echo"$id_k&klkk=$klkk&notak=$notak&notak2=$notak2&gb_nota=$gb_nota&bnlk=Juli&idpbyr=1&edt=1&nlk=$jpsk&edt=1&tmb=s"; ?>" class="lk">Juli</a></div></td>
                  <td align="center">
                    <? 
			 
			  $tbl_7=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$id_k' and kd_bayar='1' and bln_bayar='Juli' and semester_b='$sem' and thn_b='$thaj'");
              $ctbl_7=mysqli_fetch_assoc($tbl_7);
		     echo $ctbl_7['tgl_bayar'];
		  
			  ?>
                  </td>
                  <td><div align="right"> Rp. 
                      <? 
			  $thnbp=substr($thaj,0,3);
			  $tot2=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE 
		  kd_santri='$id_k' and bln_bayar='Juli' and kd_bayar='1' and semester_b='$sem' and thn_b='$thaj'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  } 
		  $b7=format_agk($tot2); 
		  echo $b7;  
		  $tgsl=date("d");
		  if($qbln>=7 and $tot2<$jpsk and $jpsk>=1) { echo"<font color='#FF000'> (Menunggak)</font>"; }
			  ?>
                    </div></td>
                </tr>
                <tr> 
                  <td><div align="center"><a href="home.php?home=byr&pmb=4&id_k=<? echo"$id_k&klkk=$klkk&notak=$notak&notak2=$notak2&gb_nota=$gb_nota&bnlk=Agustus&idpbyr=1&edt=1&nlk=$jpsk&edt=1&tmb=s"; ?>" class="lk">Agustus</a></div></td>
                  <td align="center">
                    <? 
			 
			  $tbl_8=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$id_k' and kd_bayar='1' and bln_bayar='Agustus' and semester_b='$sem' and thn_b='$thaj'");
              $ctbl_8=mysqli_fetch_assoc($tbl_8);
		     echo $ctbl_8['tgl_bayar'];
		  
			  ?>
                  </td>
                  <td><div align="right"> Rp. 
                      <? 
			  $thnbp=substr($thaj,0,3);
			  $tot2=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE 
		  kd_santri='$id_k' and bln_bayar='Agustus' and kd_bayar='1' and semester_b='$sem' and thn_b='$thaj'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  } 
		  $b8=format_agk($tot2); 
		  echo $b8;
		  $tgsl=date("d");
		  if($qbln>=8 and $tot2<$jpsk and $jpsk>=1) { echo"<font color='#FF000'> (Menunggak)</font>"; }
			  ?>
                    </div></td>
                </tr>
                <tr> 
                  <td><div align="center"><a href="home.php?home=byr&pmb=4&id_k=<? echo"$id_k&klkk=$klkk&notak=$notak&notak2=$notak2&gb_nota=$gb_nota&bnlk=September&idpbyr=1&edt=1&nlk=$jpsk&edt=1&tmb=s"; ?>" class="lk">September</a></div></td>
                  <td align="center">
                    <? 
			 
			  $tbl_9=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$id_k' and kd_bayar='1' and bln_bayar='September' and semester_b='$sem' and thn_b='$thaj'");
              $ctbl_9=mysqli_fetch_assoc($tbl_9);
		     echo $ctbl_9['tgl_bayar'];
		  
			  ?>
                  </td>
                  <td><div align="right"> Rp. 
                      <? 
			  $thnbp=substr($thaj,0,3);
			  $tot2=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE 
		  kd_santri='$id_k' and bln_bayar='September' and kd_bayar='1' and semester_b='$sem' and thn_b='$thaj'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  } 
		  $b9=format_agk($tot2); 
		  echo $b9;  
		  $tgsl=date("d");
		  if($qbln>=9 and $tot2<$jpsk and $jpsk>=1) { echo"<font color='#FF000'> (Menunggak)</font>"; }
			  ?>
                    </div></td>
                </tr>
                <tr> 
                  <td><div align="center"><a href="home.php?home=byr&pmb=4&id_k=<? echo"$id_k&klkk=$klkk&notak=$notak&notak2=$notak2&gb_nota=$gb_nota&bnlk=Oktober&idpbyr=1&edt=1&nlk=$jpsk&edt=1&tmb=s"; ?>" class="lk">Oktober</a></div></td>
                  <td align="center">
                    <? 
			 
			  $tbl_10=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$id_k' and kd_bayar='1' and bln_bayar='Oktober' and semester_b='$sem' and thn_b='$thaj'");
              $ctbl_10=mysqli_fetch_assoc($tbl_10);
		      echo $ctbl_10['tgl_bayar'];
		  
			  ?>
                  </td>
                  <td><div align="right"> Rp. 
                      <? 
			  $thnbp=substr($thaj,0,3);
			  $tot2=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE 
		  kd_santri='$id_k' and bln_bayar='Oktober' and kd_bayar='1' and semester_b='$sem' and thn_b='$thaj'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  } 
		  $b10=format_agk($tot2); 
		  echo $b10;
		  $tgsl=date("d");
		  if($qbln>=10 and $tot2<$jpsk and $jpsk>=1) { echo"<font color='#FF000'> (Menunggak)</font>"; }
			  ?>
                    </div></td>
                </tr>
                <tr> 
                  <td><div align="center"><a href="home.php?home=byr&pmb=4&id_k=<? echo"$id_k&klkk=$klkk&notak=$notak&notak2=$notak2&gb_nota=$gb_nota&bnlk=November&idpbyr=1&edt=1&nlk=$jpsk&edt=1&tmb=s"; ?>" class="lk">November</a></div></td>
                  <td align="center">
                    <? 
			 
			  $tbl_11=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$id_k' and kd_bayar='1' and bln_bayar='November' and semester_b='$sem' and thn_b='$thaj'");
              $ctbl_11=mysqli_fetch_assoc($tbl_11);
		     echo $ctbl_11['tgl_bayar'];
		  
			  ?>
                  </td>
                  <td><div align="right"> Rp. 
                      <? 
			  $thnbp=substr($thaj,0,3);
			  $tot2=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE 
		  kd_santri='$id_k' and bln_bayar='November' and kd_bayar='1' and semester_b='$sem' and thn_b='$thaj'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  } 
		  $b11=format_agk($tot2); 
		  echo $b11;
		  $tgsl=date("d");
		   if($qbln>=11 and $tot2<$jpsk and $jpsk>=1) { echo"<font color='#FF000'> (Menunggak)</font>"; }
			  ?>
                    </div></td>
                </tr>
                <tr> 
                  <td><div align="center"><a href="home.php?home=byr&pmb=4&id_k=<? echo"$id_k&klkk=$klkk&notak=$notak&notak2=$notak2&gb_nota=$gb_nota&bnlk=Desember&idpbyr=1&edt=1&nlk=$jpsk&edt=1&tmb=s"; ?>" class="lk">Desember</a></div></td>
                  <td align="center">
                    <? 
			 
			  $tbl_12=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$id_k' and kd_bayar='1' and bln_bayar='Desember' and semester_b='$sem' and thn_b='$thaj'");
              $ctbl_12=mysqli_fetch_assoc($tbl_12);
		      echo $ctbl_12['tgl_bayar'];
		  
			  ?>
                  </td>
                  <td><div align="right"> Rp. 
                      <? 
			  $thnbp=substr($thaj,0,3);
			  $tot2=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE 
		  kd_santri='$id_k' and bln_bayar='Desember' and kd_bayar='1' and semester_b='$sem' and thn_b='$thaj'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  } 
		  $b12=format_agk($tot2); 
		  echo $b12;
		  $tgsl=date("d");
		  if($qbln>=12 and $tot2<$jpsk and $jpsk>=1) { echo"<font color='#FF000'> (Menunggak)</font>"; }
			  ?>
                    </div></td>
                </tr>
              </table></td>
          <td width="64%" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#B3CF70">
                <tr>
                  <td width="31%" bgcolor="#B3CF70"><div align="center"><strong>Biaya</strong></div></td>
                  <td width="23%" bgcolor="#B3CF70"><div align="center"><strong>Jumlah</strong></div></td>
                  <td width="24%" bgcolor="#B3CF70"><div align="center"><strong>Telah di Bayar </strong></div></td>
                  <td width="22%" bgcolor="#B3CF70"><div align="center"><strong>Sisa</strong></div></td>
                </tr>
                <?
				//$pmb11=mysqli_query($koneksi, "SELECT * FROM rincian_bayar WHERE kd_kls='$tp[kd_kls]' AND kd_bayar='3'");
                //$c11=mysqli_fetch_assoc($pmb11);
		  
			$pmb=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran,rincian_bayar WHERE rincian_bayar.kd_kls='$klkk' and  
			                  tb_pembayaran.kd_pembayaran=rincian_bayar.kd_bayar and (tb_pembayaran.ket='t' or tb_pembayaran.ket='a' )");
          while($ctp=mysqli_fetch_assoc($pmb)){
			 ?>
                <tr>
                  <td><a href="home.php?home=byr&pmb=4&id_k=<? echo"$id_k&klkk=$klkk&notak=$notak&notak2=$notak2&gb_nota=$gb_nota&idpbyr=$ctp[kd_pembayaran]&bnlk=&edt=2&tmb=m"; ?>" class="lk"><? echo $ctp['pembayaran']; ?></a></td>
                  <td><div align="right">Rp. <?  
		
		$bea=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE kd_santri='$id_k' AND kd_bayar='$ctp[kd_pembayaran]' ");
        $cbea=mysqli_fetch_assoc($bea);  
		$jmby=$ctp['jumlah']-$cbea['jml_beasiswa'];
				  $bs=format_agk($jmby); 
		          echo $bs;
				   
				  ?> </div></td>
                  <td><div align="right">Rp.
                      <? 
			  $tot=0;
			  $gtot2=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$id_k' and semester_b='$sem' and thn_b='$thaj' and kd_bayar='$ctp[kd_pembayaran]'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		  $tot=$tot+$ctp2['jml_bayar'];
		  } 
		  
		   $bs2=format_agk($tot); 
		   echo $bs2;
		  
		  ?>
                  </div></td>
                  <td><div align="right">Rp.
                        <? $sisa=$jmby-$tot; 
						if($sisa!=0){
						  $bs3=format_agk($sisa); 
		                  echo $bs3;
		                } else{ echo 0; }?>
                  </div></td>
                </tr>
                <? } ?>
              </table></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td colspan="4" bgcolor="#B3CF70"><strong>&nbsp;Pembayaran </strong></td>
                  </tr>
                <tr>
                  <td bgcolor="#FFFFCC">&nbsp;</td>
                  <td bgcolor="#FFFFCC">&nbsp;</td>
                  <td bgcolor="#FFFFCC">&nbsp;</td>
                  <td bgcolor="#FFFFCC">&nbsp;</td>
                </tr>
                <tr>
                  <td width="1%" bgcolor="#FFFFCC"></td>
                  <td width="7%" bgcolor="#FFFFCC">Nomor</td>
                        <td width="43%" bgcolor="#FFFFCC">: 
                          <? 
				   $bl=date("m");
				   $th=date("y");
				   if($notak==""){ 
				      $crint=$bl.$th;
				      $pmb=mysqli_query($koneksi, "SELECT * FROM tb_nokwi WHERE no_kwitansi1='$crint' ");
					  $qct=mysqli_fetch_assoc($pmb);
					  $ctp=mysqli_num_rows($pmb)+1;
				      if($ctp<=9) { $notak=$bl.$th; $notak2="000".$ctp; }
				      if($ctp<=99 AND $ctp>=10) { $notak=$bl.$th; $notak2="00".$ctp; }
					  if($ctp<=999 AND $ctp>=100) { $notak=$bl.$th; $notak2="0".$ctp; }
					  if($ctp<=9999 AND $ctp>=1001) { $notak=$bl.$th; $notak2=$ctp; }
					  $gb_nota=$notak.$notak2;
				   }
				   echo $gb_nota;
				   
				   ?>
                        </td>
                  <td width="49%" bgcolor="#FFFFCC">&nbsp;</td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFCC"></td>
                  <td bgcolor="#FFFFCC">Tanggal</td>
                  <td bgcolor="#FFFFCC">:
                    <? $tgl=date("d-m-Y"); echo $tgl; ?></td>
                  <td bgcolor="#FFFFCC">&nbsp;</td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFCC">&nbsp;</td>
                  <td bgcolor="#FFFFCC">&nbsp;</td>
                  <td bgcolor="#FFFFCC">&nbsp;</td>
                  <td bgcolor="#FFFFCC">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="4" bgcolor="#B3CF70" height="2"></td>
                  </tr>
                <tr>
                  <td colspan="2">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3"><strong>Rincian Pembayaran</strong></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="4"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#B3CF70">
                    <tr>
                      <td width="5%" bgcolor="#B3CF70"><div align="center"><strong>No.</strong></div></td>
                      <td width="10%" bgcolor="#B3CF70"><div align="center"><strong>Hapus</strong></div></td>
                      <td width="55%" bgcolor="#B3CF70"><div align="center"><strong>Jenis Pembayaran </strong></div></td>
                      <td width="30%" bgcolor="#B3CF70"><div align="center"><strong>Jumlah</strong></div></td>
                    </tr>
					<?  $no=1; $totb=0;
					    $rp=mysqli_query($koneksi, "SELECT * FROM rincian_nota WHERE kd_kwi='$gb_nota'  ");
                        while($crp=mysqli_fetch_assoc($rp)){
					
						$jpb1=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE id_transaksi='$crp[kd_transaksi]' ");
                        $crp1=mysqli_fetch_assoc($jpb1);
						
					    $jpb=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$crp1[kd_bayar]' ");
                        $crp2=mysqli_fetch_assoc($jpb);
					     
					  ?>
                    <tr>
                      <td bgcolor="#FFFFCC"><div align="center"><? echo $no; ?></div></td>
                      <td bgcolor="#FFFFCC"><div align="center"><a href="page/act_dt_pembayaran.php?del_tr=1&id_trs=<? echo "$crp1[id_transaksi]&id_str=$id_k&sidp=$crp2[kd_pembayaran]&kodek=$klkk&sblnb=$crp1[bln_bayar]&notak=$notak&notak2=$notak2&gb_nota=$gb_nota"; ?>" onClick="return konfirmasi('yakin teransaksi akan dihapus ?');"><img src="images/actionCancel.gif" width="18" height="18" border="0" /></a></div></td>
                      <td bgcolor="#FFFFCC"><div align="center">
                        <a href="home.php?home=byr&pmb=4&id_k=<? echo"$id_k&klkk=$klkk&notak=$notak&notak2=$notak2&gb_nota=$gb_nota&idpbyr=$crp2[kd_pembayaran]&bnlk=$crp1[bln_bayar]&id_tra=$crp1[id_transaksi]&edt=1&tmb=u"; ?>"><? echo $crp2['pembayaran']; ?></a>
                      </div></td>
                      <td bgcolor="#FFFFCC"><div align="right">Rp. <? 
					  //echo $crp1['jml_bayar']; 
					  $bs4=format_agk($crp1['jml_bayar']); 
		              echo $bs4;
					  ?></div></td>
                    </tr>
					<? $totb=$totb+$crp1['jml_bayar'];
					  $no+=1; } ?>
                    <tr>
                      <td colspan="3" bgcolor="#B3CF70"><div align="center"><strong>Total Bayar </strong></div></td>
                      <td bgcolor="#B3CF70"><div align="right">
                        Rp. <?
					   // echo $totb;
						if($totb!=0){
						$bs5=format_agk($totb); 
		                echo $bs5;
						 }else{ echo 0; }
					  ?>
                      </div></td>
                    </tr>
					
                  </table></td>
                  </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                        <td><a href="page/kartu_kontrol.php?<? echo "tgl=$tgl&gb_nota=$gb_nota "; ?>" class="lk" target="_blank">Cetak</a></td>
                  <td><div align="right"> <a href="page/report_bukti_pembayaran.php?<? echo"id_k=$id_k&gb_nota=$gb_nota"; ?>" class="lk" target="_blank"><img src="images/index.gif" width="20" height="22" align="absmiddle" border="0" />&nbsp;Priview Bukti Pembayaran</a> </div></td>
                </tr>
              </table></td>
            </tr>
          </table></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
    </tr>
  </table>
</form>

</body>
</html>
