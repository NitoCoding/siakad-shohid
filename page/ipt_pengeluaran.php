<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style3 {
	font-family: "Courier New", Courier, monospace;
	font-weight: bold;
	color: #FFFFFF;
}
-->
</style>
</head>
<script language="JavaScript" type="text/javascript">
function angka(){
  if(isNaN(form1.jml_transaksi.value)) { form1.jml_transaksi.value='';  }
  
}
function konfirmasi(pesan) { 
  var is_confirmed=confirm(pesan);      
  if(!is_confirmed){    
   return false;
	}	
}
</script>
<body>
<table width="1200" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="19" height="29" bgcolor="#336633">&nbsp;</td>
    <td width="981" bgcolor="#336633"><span class="style3"><img src="images/box1.gif" width="20" height="22" align="absmiddle" /> PENGELUARAN </span></td>
  </tr>
  <tr>
    <td bgcolor="#ACD75E">&nbsp;</td>
    <td bgcolor="#ACD75E"><form id="form1" name="form1" method="post" action="page/act_dt_pembayaran.php">
      <table width="100%" border="0" cellspacing="5" cellpadding="0">
        <tr>
          <td width="11%">&nbsp;</td>
          <td width="56%">&nbsp;</td>
          <td width="33%">&nbsp;</td>
        </tr>
        <tr>
          <td>Tanggal Transaksi </td>
          <td><select name="tgl">
              <option>-</option>
              <? 
			  $thi=date("j")+1;
			  for($i=1;$i<=31;$i++){ 
		   
		?>
              <option value="<? echo $i; ?>" <? if($thi=="$i"){ ?> selected="selected"<? } ?>><? echo $i; ?></option>
              <? } ?>
            </select>
			<? $blnx=date("M"); ?>
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
			<? $tts=date("Y");  ?>
            <select name="thn">
              <option>-</option>
              <? for($b=-2;$b<=1;$b++){  
			     $th=date("Y")+$b;
			  ?>
              <option value="<? echo date("Y")+$b; ?>" <? if($tts=="$th"){ ?> selected="selected"<? } ?>><? echo date("Y")+$b; ?></option>
              <? } ?>
            </select> </td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Nama Transaksi </td>
          <td colspan="2"><textarea name="transaksi" cols="105"></textarea></td>
          </tr>
        <tr>
          <td>Jumlah</td>
          <td><input type="text" onKeyUp="return angka();" name="jml_transaksi" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Sumber Dana </td>
          <td><label>
            <select name="anggran">
              <option>Pilih</option>
			  <? 
			   $tpms=mysqli_query($koneksi, "SELECT * FROM tb_saldo ");
			   while($cma=mysqli_fetch_assoc($tpms)){
			   
			  ?>
              <option value="<? echo $cma['ket'];  ?>"><? echo $cma['ket'];  ?></option>
			  <? } ?>
            </select>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="Submit" value="Simpan" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
        </form>    </td>
  </tr>
  <tr>
    <td bgcolor="#99CC99">&nbsp;</td>
    <td bgcolor="#99CC99">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#99CC99">&nbsp;</td>
    <td valign="top" bgcolor="#99CC99"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="56%" valign="top"><table width="99%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
          <tr>
            <td width="5%" height="34" bgcolor="#CCCCFF"><div align="center"><strong>NO</strong></div></td>
            <td width="18%" bgcolor="#CCCCFF"><div align="center"><strong>TANGGAL  </strong></div></td>
            <td width="56%" bgcolor="#CCCCFF"><div align="center"><strong>NAMA TRANSAKSI </strong></div></td>
            <td width="21%" bgcolor="#CCCCFF"><div align="center"><strong>JUMLAH</strong></div></td>
          </tr>
          <?       
	  		   $no=1;
			   $tpg=mysqli_query($koneksi, "SELECT * FROM tb_pengeluaran ");
			   while($ctpms=mysqli_fetch_assoc($tpg)){
			   
			  ?>
          <tr>
            <td height="28"><div align="center"><? echo $no; ?></div></td>
            <td><div align="center"><? echo $ctpms['tgl_k']."-".$ctpms['bln_k']."-".$ctpms['thn_k']; ?></div></td>
            <td><? echo $ctpms['nama_transaksi']; ?></td>
            <td><div align="right">
              <? 
		$bs=format_agk($ctpms['jumlah_k']); 
		echo $bs; ?>
            </div></td>
          </tr>
          <? $no+=1; } ?>
          <tr>
            <td bgcolor="#CCCCFF">&nbsp;</td>
            <td bgcolor="#CCCCFF">&nbsp;</td>
            <td bgcolor="#CCCCFF">&nbsp;</td>
            <td bgcolor="#CCCCFF">&nbsp;</td>
          </tr>
        </table></td>
        <td width="44%" valign="top"><table width="99%" border="1" cellpadding="0" cellspacing="0" bordercolor="#99CC66">
          <tr>
            <td width="7%" height="34" bgcolor="#99CC66"><div align="center"><strong>NO</strong></div></td>
            <td width="67%" bgcolor="#99CC66"><div align="center"><strong>PEMASUKAN</strong></div></td>
            <td width="26%" bgcolor="#99CC66"><div align="center"><strong>JUMLAH</strong></div></td>
          </tr>
          <?       
	  		   $no2=1;
			   $tpms=mysqli_query($koneksi, "SELECT * FROM tb_saldo ");
			   while($ctpms=mysqli_fetch_assoc($tpms)){
			   
			  ?>
          <tr>
            <td height="28" bgcolor="#CCFFCC"><div align="center"><? echo $no2; ?></div></td>
            <td bgcolor="#CCFFCC"><? echo $ctpms['ket']; ?></td>
            <td bgcolor="#CCFFCC"><div align="right">
                <? 
		$bs=format_agk($ctpms['jumlah_total']); 
		echo $bs; ?>
            </div></td>
          </tr>
          <? $no2+=1; } ?>
          <tr>
            <td bgcolor="#99CC66">&nbsp;</td>
            <td bgcolor="#99CC66">&nbsp;</td>
            <td bgcolor="#99CC66">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
