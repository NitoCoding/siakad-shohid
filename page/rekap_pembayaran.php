<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>
<?
$blnb=$_GET['blnb'];
$tgls=$_GET['tgls'];
$th_bayar=$_GET['th_bayar'];
?>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  
  <tr>
    <td width="3%" height="28" bgcolor="#B3CF70"><div align="center"><img src="images/collapsed.gif" width="16" height="12" /></div></td>
    <td colspan="6" bgcolor="#B3CF70"><strong>Rekapitulasi Pembayaran Santri Per Hari </strong></td>
  </tr>
  
  
  <tr>
    <td>&nbsp;</td>
    <td width="11%">&nbsp;</td>
    <td>&nbsp;</td>
    <td width="15%">&nbsp;</td>
    <td width="18%">&nbsp;</td>
    <td width="19%">&nbsp;</td>
    <td width="22%">&nbsp;</td>
  </tr>
  <tr>
    <td height="40" colspan="2" bgcolor="#CCFF66">&nbsp;Tahun Ajaran : <? echo $thaj; ?></td>
    <td width="12%" bgcolor="#CCFF66">Semester : <? echo $sem; ?></td>
    <td bgcolor="#CCFF66">Tahun Bayar
      <select name="select2" onchange="MM_jumpMenu('parent',this,0)">
	  <option value="home.php?home=byr&pmb=5&th_bayar=<? echo "$thx&blnb=$blnb&tgls=$tgls"; ?>">-</option>
        <? for($c=-4;$c<=5;$c++){  
		  $thx=date("Y")+$c;
		?>
        <option value="home.php?home=byr&pmb=5&th_bayar=<? echo "$thx&blnb=$blnb&tgls=$tgls"; ?>" <? if($th_bayar=="$thx"){ echo"selected='selected'"; } ?>><? echo $thx; ?></option>
        <? } ?>
      </select></td>
    <td bgcolor="#CCFF66">Bulan Bayar
      <select name="select" onchange="MM_jumpMenu('parent',this,0)">
        <option value="home.php?home=byr&pmb=5&<? echo"tgls=$tgls&th_bayar=$th_bayar"; ?>">-</option>
        <option value="home.php?home=byr&pmb=5&blnb=Januari<? echo"&tgls=$tgls&th_bayar=$th_bayar"; ?>" <? if($blnb=="Januari"){ echo"selected='selected'"; } ?>>Januari</option>
        <option value="home.php?home=byr&pmb=5&blnb=Februari<? echo"&tgls=$tgls&th_bayar=$th_bayar"; ?>" <? if($blnb=="Februari"){ echo"selected='selected'"; } ?>>Februari</option>
        <option value="home.php?home=byr&pmb=5&blnb=Maret<? echo"&tgls=$tgls&th_bayar=$th_bayar"; ?>" <? if($blnb=="Maret"){ echo"selected='selected'"; } ?>>Maret</option>
        <option value="home.php?home=byr&pmb=5&blnb=April<? echo"&tgls=$tgls&th_bayar=$th_bayar"; ?>" <? if($blnb=="April"){ echo"selected='selected'"; } ?>>April</option>
        <option value="home.php?home=byr&pmb=5&blnb=Mei<? echo"&tgls=$tgls&th_bayar=$th_bayar"; ?>" <? if($blnb=="Mei"){ echo"selected='selected'"; } ?>>Mei</option>
        <option value="home.php?home=byr&pmb=5&blnb=Juni<? echo"&tgls=$tgls&th_bayar=$th_bayar"; ?>" <? if($blnb=="Juni"){ echo"selected='selected'"; } ?>>Juni</option>
        <option value="home.php?home=byr&pmb=5&blnb=Juli<? echo"&tgls=$tgls&th_bayar=$th_bayar"; ?>" <? if($blnb=="Juli"){ echo"selected='selected'"; } ?>>Juli</option>
        <option value="home.php?home=byr&pmb=5&blnb=Agustus<? echo"&tgls=$tgls&th_bayar=$th_bayar"; ?>" <? if($blnb=="Agustus"){ echo"selected='selected'"; } ?>>Agustus</option>
        <option value="home.php?home=byr&pmb=5&blnb=September<? echo"&tgls=$tgls&th_bayar=$th_bayar"; ?>" <? if($blnb=="September"){ echo"selected='selected'"; } ?>>September</option>
        <option value="home.php?home=byr&pmb=5&blnb=Oktober<? echo"&tgls=$tgls&th_bayar=$th_bayar"; ?>" <? if($blnb=="Oktober"){ echo"selected='selected'"; } ?>>Oktober</option>
        <option value="home.php?home=byr&pmb=5&blnb=November<? echo"&tgls=$tgls&th_bayar=$th_bayar"; ?>" <? if($blnb=="November"){ echo"selected='selected'"; } ?>>November</option>
        <option value="home.php?home=byr&pmb=5&blnb=Desember<? echo"&tgls=$tgls&th_bayar=$th_bayar"; ?>" <? if($blnb=="Desember"){ echo"selected='selected'"; } ?>>Desember</option>
      </select></td>
    <td bgcolor="#CCFF66">Tanggal 
      
        <select name="menu1" onchange="MM_jumpMenu('parent',this,0)">
		<option value="home.php?home=byr&pmb=5&blnb=<? echo"$blnb&th_bayar=$th_bayar"; ?>">-</option>
         <? for($i=1;$i<=31;$i++){ ?>
        <option value="home.php?home=byr&pmb=5&blnb=<? echo"$blnb&tgls=$i&th_bayar=$th_bayar"; ?>" <? if($tgls=="$i"){ echo"selected='selected'"; } ?>><? echo $i; ?></option>
        <? } ?>
        </select>      </td>
	<? //$th_bayar=substr($thaj,0,4);
	   $tg_brx=$tgls." ".$blnb." ".$th_bayar; ?>
    <td bgcolor="#CCFF66"><a href="page/report_rekap_pembayaran.php?<? echo"tg_bayar=$tg_brx"; ?>" class="lk" target="_blank"><img src="images/index.gif" width="20" height="22" align="absmiddle" border="0" />&nbsp;Priview Bukti Pembayaran</a></td>
  </tr>
  <tr>
    <td colspan="7" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7" valign="top"><? 
	$tampil=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran  ");
    while($tp=mysqli_fetch_assoc($tampil)){
	?>
        <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#B3CF70">
          <tr>
            <td colspan="4" bordercolor="#FFFFFF" bgcolor="#FFFFFF">Pembayaran <?
		 echo $tp['pembayaran'];
		?></td>
          </tr>
          <tr>
            <td width="4%" bgcolor="#B3CF70"><div align="center">NO</div></td>
            <td width="37%" bgcolor="#B3CF70"><div align="center">NAMA SANTRI </div></td>
            <td width="27%" bgcolor="#B3CF70"><div align="center">NOMOR KWITANSI </div></td>
            <td width="32%" bgcolor="#B3CF70"><div align="center">JUMLAH</div></td>
          </tr>
          <? 
	      $no=1;
		  $tot_slr=0;
		  $tg_bayar=$tgls." ".$blnb." ".$th_bayar;
	      $tmpkls=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_bayar='$tp[kd_pembayaran]' AND semester_b='$sem' AND thn_b='$thaj' AND tgl_bayar='$tg_bayar' ");
          while($ct=mysqli_fetch_assoc($tmpkls)){
		  	 
		  if($tp['kd_pembayaran']!=$tp_kdstr or $ct['kd_santri']!=$kdstrk ){
		  $tp_kdstr=$ct['kd_bayar'];  
		  $kdstrk=$ct['kd_santri'];
	   ?>
          <tr>
            <td bgcolor="#FFFFFF"><div align="center">
              <?  echo $no;   ?>
            </div></td>
            <td bgcolor="#FFFFFF"><?
		 $tpids=$ct2['id_santri'];
		 $tmpkls2=mysqli_query($koneksi, "SELECT id_santri,nama FROM tb_santri WHERE id_santri='$ct[kd_santri]' ");
         $ct2=mysqli_fetch_assoc($tmpkls2);
		 echo $ct2['nama']; 
		?></td>
            <td bgcolor="#FFFFFF"><div align="center">
              <?
		 $tp_nw=$ct3['kd_kwi'];
		 $tmpkls3=mysqli_query($koneksi, "SELECT * FROM rincian_nota  WHERE kd_transaksi='$ct[id_transaksi]' ");
         $ct3=mysqli_fetch_assoc($tmpkls3);
		 echo $ct3['kd_kwi']; 
		?>
            </div></td>
            <td bgcolor="#FFFFFF"><div align="right">Rp.
                <?
		 $tot_bkwi=0;
		 $tmpkls4=mysqli_query($koneksi, "SELECT * FROM rincian_nota WHERE kd_kwi='$ct3[kd_kwi]' ");
         while($ct4=mysqli_fetch_assoc($tmpkls4)){
		       $tmpkls5=mysqli_query($koneksi, "SELECT id_transaksi,jml_bayar,kd_bayar FROM tb_transaksi  WHERE id_transaksi='$ct4[kd_transaksi]' and 
			                         kd_bayar='$tp[kd_pembayaran]' AND tgl_bayar='$tg_bayar' ");
               $ct5=mysqli_fetch_assoc($tmpkls5);
		       $tot_bkwi=$tot_bkwi+$ct5['jml_bayar'];
		 }
					  $h=format_agk($tot_bkwi);  
		              echo $h;
		$tot_slr=$tot_slr+$tot_bkwi;
		 $no+=1;  
		?>
            </div></td>
          </tr>
		  <? }  }  ?>
          <tr>
            <td colspan="3" bgcolor="#B3CF70"><div align="center"><strong>Total </strong></div>
            <div align="left"></div>            <div align="center"></div></td>
            <td bgcolor="#B3CF70">
                <div align="right"><b>Rp.
                    <? if($tot_slr!=0){
					  $h2=format_agk($tot_slr);  
		              echo $h2;
		  }else{ echo 0; }
		   ?>
                </b></div></td>
          </tr>
        </table>
    <? } ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</body>
</html>
