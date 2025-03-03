<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
td {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000000;
	text-decoration: none;
}
.style5 {font-size: 16px}
.style15 {font-size: 18px; font-weight: bold; }
.style17 {font-size: 20px}
.style18 {font-size: 14px}
.style21 {font-size: 9px}
-->
</style>
</head>
<?
include("../koneksi.php");
include("../function.php");
$tg_bayar=$_GET['tg_bayar'];
$thaj=$_COOKIE['thaj'];
$sem=$_COOKIE['sem']; 
$idgurp=$_COOKIE['idgurp']; 
?>
<body>
<table width="700" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="6" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="12%" height="89" valign="top"><img src="../images/LOGO-SHOID2.jpg" width="76" height="89" /></td>
        <td width="88%" valign="top"><div align="left"><span class="style5"><span class="style18">Pondok Pesantren Modern Islam </span><br />
            <span class="style17">SHOHWATUL IS'AD </span><br />
            <br />
          </span><span class="style21">Jl. Sipitto Ma'rang Kabupaten Pangkep Sulawesi Selatan <br />
          Telp.(0410)2315599,   Fax(0410)2317977, www.shohwatulisad.com</span></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="63">&nbsp;</td>
    <td width="127">&nbsp;</td>
    <td width="184">&nbsp;</td>
    <td width="164">&nbsp;</td>
    <td width="58">&nbsp;</td>
    <td width="104">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6"><div align="center" class="style15">BUKTI KAS MASUK </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Tanggal</td>
    <td>: <? echo $tg_bayar; ?></td>
  </tr>
  <tr>
    <td colspan="6" valign="top"><? 
	
	$tampil=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran  ");
    while($tp=mysqli_fetch_assoc($tampil)){
	?>
      <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
        <tr>
          <td colspan="4" bordercolor="#FFFFFF" bgcolor="#FFFFFF">Pembayaran
            <?
		 echo $tp['pembayaran'];
		?></td>
        </tr>
        <tr>
          <td width="5%" bgcolor="#EEEEEE"><div align="center"><strong>NO</strong></div></td>
          <td width="44%" bgcolor="#EEEEEE"><div align="center"><strong>NAMA SANTRI </strong></div></td>
          <td width="22%" bgcolor="#EEEEEE"><div align="center"><strong>NOMOR KWITANSI </strong></div></td>
          <td width="29%" bgcolor="#EEEEEE"><div align="center"><strong>JUMLAH</strong></div></td>
        </tr>
        <? 
	      $no=1;
		  $tot_slr=0;
		  
	      $tmpkls=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_bayar='$tp[kd_pembayaran]' AND semester_b='$sem' AND thn_b='$thaj' AND tgl_bayar='$tg_bayar' ");
          while($ct=mysqli_fetch_assoc($tmpkls)){
		  
		  if($tp['kd_pembayaran']!=$tp_kdstr or $ct['kd_santri']!=$kdstrk ){
		  $tp_kdstr=$ct['kd_bayar'];  
		  $kdstrk=$ct['kd_santri'];
	   ?>
        <tr>
          <td bgcolor="#FFFFFF"><div align="center">
            <?   echo $no;  ?>
          </div></td>
          <td bgcolor="#FFFFFF"><div align="left">
            <?
		 $tpids=$ct2['id_santri'];
		 $tmpkls2=mysqli_query($koneksi, "SELECT id_santri,nama FROM tb_santri WHERE id_santri='$ct[kd_santri]' ");
         $ct2=mysqli_fetch_assoc($tmpkls2);
		  echo $ct2['nama'];
		?>
          </div></td>
          <td bgcolor="#FFFFFF"><div align="center">
            <?
		 $tp_nw=$ct3['kd_kwi'];
		 $tmpkls3=mysqli_query($koneksi, "SELECT * FROM rincian_nota  WHERE kd_transaksi='$ct[id_transaksi]' ");
         $ct3=mysqli_fetch_assoc($tmpkls3);
		 echo $ct3['kd_kwi']; 
		?>
          </div></td>
          <td bgcolor="#FFFFFF"><div align="right">Rp. <?
		 $tot_bkwi=0;
		 $tmpkls4=mysqli_query($koneksi, "SELECT * FROM rincian_nota WHERE kd_kwi='$ct3[kd_kwi]' ");
         while($ct4=mysqli_fetch_assoc($tmpkls4)){
		       $tmpkls5=mysqli_query($koneksi, "SELECT id_transaksi,jml_bayar,kd_bayar FROM tb_transaksi  WHERE id_transaksi='$ct4[kd_transaksi]' and 
			                         kd_bayar='$tp[kd_pembayaran]' AND tgl_bayar='$tg_bayar'");
               $ct5=mysqli_fetch_assoc($tmpkls5);
		       $tot_bkwi=$tot_bkwi+$ct5['jml_bayar'];
		 }
		
		            $h=format_agk($tot_bkwi); 
					if($tot_bkwi!=0){  echo $h; }else{ echo 0; }
		
		           $tot_slr=$tot_slr+$tot_bkwi;
		           $no+=1;  
		?>
</div></td>
        </tr>
		 <?  }  } ?>
        <tr>
          <td colspan="3" bgcolor="#EEEEEE"><div align="center"><strong>Total </strong></div></td>
          <td bgcolor="#EEEEEE"><div align="right"><b>Rp. <? if($tot_slr!=0){
		   $h2=format_agk($tot_slr); 
		   echo $h2;
		  }else{ echo 0; }
		   ?></b></div></td>
        </tr>
      </table>
      <? } ?></td>
  </tr>
  <tr>
    <td colspan="6"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td width="71%" height="30"><div align="center"><strong>Total Kas Masuk </strong></div></td>
        <td width="29%"><div align="right"><b>Rp.
          <? 
		$tot_kas_m=0;
		$tmpkls6=mysqli_query($koneksi, "SELECT tgl_bayar,jml_bayar,semester_b,thn_b FROM tb_transaksi  WHERE semester_b='$sem' AND thn_b='$thaj' AND tgl_bayar='$tg_bayar'");
        while($ct6=mysqli_fetch_assoc($tmpkls6)){
		$tot_kas_m=$tot_kas_m+$ct6['jml_bayar'];
		}
		 $h=format_agk($tot_kas_m);
		 if($tot_kas_m!=0){ echo $h;   }else{ echo 0; }
		 ?>
        </b></div></td>
      </tr>
      <tr>
        <td height="30" colspan="2"> &nbsp;<strong>Terbilang :</strong>          <? $a=angka_huruf($tot_kas_m); echo $a; ?></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3"><div align="center">Di bukukan oleh </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3"><div align="center">(
        <?
 
           $tampil=mysqli_query($koneksi, "SELECT nama_gp FROM guru_pegawai WHERE id_gp='$idgurp' ");
           $tp=mysqli_fetch_assoc($tampil);
		   echo $tp['nama_gp']; 
  
        ?>
)</div></td>
  </tr>
</table>

</body>
</html>
