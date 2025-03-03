<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>
<script language="JavaScript" type="text/javascript">
function angka(){
  if(isNaN(form1.jml_rp.value)) { form1.jml_rp.value='';  }
  
}
function preventBack()
{window.history.forward();}
setTimeout("preventBack(),0");
window.onunload=function(){null};
</script>
<body>
<form id="form1" name="form1" method="post" action="page/act_dt_pembayaran.php">
  <table width="100%" border="0" cellspacing="0" cellpadding="2">
    <?    $idbyr=$_GET['idbyr'];
          $edt=$_GET['edt'];	
	      if($edt=="y"){
		  $tamp=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$idbyr'");
          $kp=mysqli_fetch_assoc($tamp); }
		?>
	
	<tr>
      <td width="2%" bgcolor="#ACD75E">&nbsp;</td>
      <td width="19%" bgcolor="#ACD75E">&nbsp;</td>
      <td width="79%" bgcolor="#ACD75E">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF"><div align="left">Pembayaran</div></td>
      <td bgcolor="#DCF3AF"><div align="left">
        <input name="pembayaran" type="text" size="45" value="<? echo $kp['pembayaran']; ?>" />
        <input type="hidden" name="kdpk" value="<? echo $kp['kd_pembayaran']; ?>" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E"><div align="left">Jumlah (Rp.) </div></td>
      <td bgcolor="#ACD75E"><div align="left">
        <label></label>
        <input type="text" name="jml_rp" onKeyUp="return angka();" value="<? echo $kp['jumlah']; ?>" />
      </div></td>
    </tr>
    
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF"><div align="left"></div></td>
      <td bgcolor="#DCF3AF"><div align="left">
        <select name="ketp">
          <option <? if($kp['ket']=='b'){ ?> selected="selected" <? } ?> value="b">Bulanan</option>
          <option <? if($kp['ket']=='s'){ ?> selected="selected" <? } ?> value="s">Persemester</option>
          <option <? if($kp['ket']=='t'){ ?> selected="selected" <? } ?> value="t">Pertahun</option>
		  <option <? if($kp['ket']=='a'){ ?> selected="selected" <? } ?> value="a">Satu Kali Bayar</option>
        </select>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E" <? if($wrna1==6)echo"bgcolor='#FF0000'"; ?>><div align="left">
        <input type="submit" <? if($edt!="y"){ echo"name='rekam'"; } if($edt=="y"){ echo "name='ubah'"; } ?>  value="Simpan" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E" <? if($wrna1==7)echo"bgcolor='#FF0000'"; ?>>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td <? if($wrna1==7)echo"bgcolor='#FF0000'"; ?>>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">Pembayaran</td>
      <td bgcolor="#DCF3AF" <? if($wrna1==7)echo"bgcolor='#FF0000'"; ?>>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td colspan="2" bgcolor="#DCF3AF"><table width="80%" border="1" cellpadding="0" cellspacing="0" bordercolor="#B3CF70">
        <tr>
          <td width="22%" bordercolor="#B3CF70" bgcolor="#B3CF70"><div align="center"><span class="style1">Kode Pembayaran </span> </div></td>
          <td width="53%" bordercolor="#B3CF70" bgcolor="#B3CF70"><div align="center"><span class="style1">Pembayaran</span></div></td>
          <td width="25%" bordercolor="#B3CF70" bgcolor="#B3CF70"><div align="center"><span class="style1">Jumlah Pembayaran  </span></div></td>
        </tr>
        <?
		  $tampil3=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran ");
          while($tp3=mysqli_fetch_assoc($tampil3)){
		?>
        <tr>
          <td bgcolor="#FFFFFF"><div align="center"><a href="home.php?home=byr&edt=y&idbyr=<? echo"$tp3[kd_pembayaran]"; ?>">
            <? 
		  echo $tp3['kd_pembayaran']; ?>
          </a></div></td>
          <td bgcolor="#FFFFFF"><div align="center"><? echo $tp3['pembayaran'] ?></div>            </td>
          <td bgcolor="#FFFFFF"><div align="right">
            Rp. <? $bs=format_agk($tp3['jumlah']); 
		          echo $bs; ?>
          </div>            </td>
        </tr>
        <? } ?>
        <tr>
          <td bordercolor="#B3CF70" bgcolor="#B3CF70">&nbsp;</td>
          <td bordercolor="#B3CF70" bgcolor="#B3CF70">&nbsp;</td>
          <td bordercolor="#B3CF70" bgcolor="#B3CF70">&nbsp;</td>
        </tr>
      </table></td>
    </tr>
    
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF" <? if($wrna1==7)echo"bgcolor='#FF0000'"; ?>><div align="left"></div></td>
    </tr>
  </table>
</form>

</body>
</html>
