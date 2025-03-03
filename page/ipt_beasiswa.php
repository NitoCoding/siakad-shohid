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
$id_k=$_GET['id_k'];
$kkb=$_GET['kkb'];
?>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="2%" height="29" bgcolor="#B3CF70">&nbsp;</td>
    <td width="56%" bgcolor="#B3CF70"><strong>Input Data Beasiswa</strong> </td>
    <td width="42%" bgcolor="#B3CF70">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" height="6"></td>
  </tr>
  <tr>
    <td colspan="3" valign="top" bgcolor="#ACD75E"><form id="form1" name="form1" method="post" action="page/act_dt_pembayaran.php">
      <table width="100%" border="0" cellspacing="0" cellpadding="2">
       <?
	    $tmpkls=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st FROM tb_santri WHERE id_santri='$id_k' ");
        $cpr=mysqli_fetch_assoc($tmpkls);
		
		$jbea=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE thn_ajaran='$thaj' AND semester='$sem' AND kd_santri='$id_k' AND 
		                   kd_bayar='$kkb'");
        $cjb=mysqli_fetch_assoc($jbea);
	   ?>
	    <tr>
          <td width="2%" bgcolor="#ACD75E">&nbsp;</td>
          <td width="12%" bgcolor="#ACD75E">Nis</td>
          <td width="86%" bgcolor="#ACD75E"><? echo $cpr['nis']; ?>
            <input type="hidden" name="id_strbea" value="<? echo $cpr['id_santri']; ?>" /></td>
        </tr>
        <tr>
          <td bgcolor="#DCF3AF">&nbsp;</td>
          <td bgcolor="#DCF3AF">Nama</td>
          <td bgcolor="#DCF3AF"><? echo $cpr['nama']; ?></td>
        </tr>
        <tr>
          <td bgcolor="#ACD75E">&nbsp;</td>
          <td bgcolor="#ACD75E">Kelas</td>
          <td bgcolor="#ACD75E"><? echo $cpr['kelas_st']; ?>
            <input type="hidden" name="klsst" value="<? echo $cpr['kelas_st']; ?>" /></td>
        </tr>
        <tr>
          <td bgcolor="#DCF3AF">&nbsp;</td>
          <td bgcolor="#DCF3AF">Beasiswa Untuk </td>
          <td bgcolor="#DCF3AF"><select name="menu1" onchange="MM_jumpMenu('parent',this,0)">
		  <option value="home.php?home=byr&pmb=7&<? echo"id_k=$id_k"; ?>">-</option>
		 <? $cc=mysqli_query($koneksi, "SELECT kd_pembayaran,pembayaran FROM tb_pembayaran ");
            while($ctc=mysqli_fetch_assoc($cc)){ ?>
            <option value="home.php?home=byr&pmb=7&<? echo"id_k=$id_k&kkb=$ctc[kd_pembayaran]"; ?>" <? if($kkb=="$ctc[kd_pembayaran]"){ echo"selected='selected'"; } ?>><? echo $ctc['pembayaran']; ?></option>
		 <? } ?>	
          </select>
            <input type="hidden" name="pmbyrbea" value="<? echo"$kkb"; ?>" />
            <input type="hidden" name="kbs" value="<? echo $cjb['id_bea'] ?>" /></td>
        </tr>
        
        <tr>
          <td bgcolor="#ACD75E">&nbsp;</td>
          <td bgcolor="#ACD75E">Jumlah</td>
          <td bgcolor="#ACD75E"><input type="text" name="jml_byrbea" value="<? echo $cjb['jml_beasiswa']; ?>" /></td>
        </tr>
        <tr>
          <td bgcolor="#DCF3AF">&nbsp;</td>
          <td bgcolor="#DCF3AF">&nbsp;</td>
          <td bgcolor="#DCF3AF">&nbsp;</td>
        </tr>
        <tr>
          <td height="28" bgcolor="#ACD75E">&nbsp;</td>
          <td bgcolor="#ACD75E">&nbsp;</td>
          <td bgcolor="#ACD75E"><input type="submit" name="sbea" value="Simpan" /></td>
        </tr>
      </table>
        </form>    </td>
  </tr>
  
  <tr>
    <td colspan="3" bgcolor="#ACD75E" height="7"></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" bgcolor="#ACD75E" height="7"></td>
  </tr>
  <tr>
    <td bgcolor="#ACD75E">&nbsp;</td>
    <td colspan="2" valign="top" bgcolor="#ACD75E"><table width="99%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCC99">
      <tr>
        <td width="4%" bgcolor="#CCCC99"><div align="center">No</div></td>
        <td width="63%" bgcolor="#CCCC99"><div align="center">Beasiswa</div></td>
        <td width="33%" bgcolor="#CCCC99"><div align="center">Jumlah</div></td>
      </tr>
	  <? $no=1;
	    $tbea=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE kd_santri='$id_k' AND thn_ajaran='$thaj' AND semester='$sem'");
        while($cbea=mysqli_fetch_assoc($tbea)){
	   ?>
      <tr>
        <td bgcolor="#FFFFFF"><div align="center"><? echo $no; ?></div></td>
        <td bgcolor="#FFFFFF"><? 
		 $tbea2=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$cbea[kd_bayar]' ");
         $cbea2=mysqli_fetch_assoc($tbea2);
		       echo $cbea2['pembayaran']; ?></td>
        <td bgcolor="#FFFFFF"><div align="right">Rp. <? echo $cbea['jml_beasiswa']; ?>&nbsp;</div></td>
      </tr>
	  <? $no+=1; } ?>
    </table></td>
  </tr>
  <tr>
    <td bgcolor="#ACD75E">&nbsp;</td>
    <td bgcolor="#ACD75E">&nbsp;</td>
    <td bgcolor="#ACD75E">&nbsp;</td>
  </tr>
</table>

</body>
</html>
