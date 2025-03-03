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
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-family: "Times New Roman", Times, serif;
	font-size: 16px;
}
-->
</style>
</head>
<?
$id_lc=$_GET['id_lc'];
$h1=$_GET['h1'];
$h2=$_GET['h2'];
?>
<body>
<table width="1206" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="960">&nbsp;</td>
  </tr>
  <tr>
    <td height="60" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="2%" height="41" bgcolor="#FF6600">&nbsp;</td>
        <td width="12%" bgcolor="#FF6600"><span class="style1">Daerah Chklist </span></td>
        <td width="86%" bgcolor="#FF6600"><select name="select" onchange="MM_jumpMenu('parent',this,0)">
          <option value="home.php?home=ceklst&amp;dpn_st=pg_dckl">-</option>
          <?
	      $tampil=mysqli_query($koneksi, "SELECT * FROM tb_lokasi_ceklist ");
          while($tp=mysqli_fetch_assoc($tampil)){
	    ?>
          <option value="home.php?home=ceklst&amp;dpn_st=pg_dckl&amp;id_lc=<? echo "$tp[id_ceklist]"; ?>" <? if($id_lc=="$tp[id_ceklist]"){ echo"selected='selected'"; } ?>><? echo $tp['lokasi']; ?></option>
          <? } ?>
        </select></td>
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
    </table></td>
  </tr>
  <tr>
    <td>
      <table width="1206" border="0" cellpadding="0" cellspacing="0">
        <? 
	      $no=1;
		  $tgs=date("d");
		  $tampil2=mysqli_query($koneksi, "SELECT * FROM tb_list_lokasi_ceklist WHERE kd_lokasi='$id_lc' ");
          while($tp2=mysqli_fetch_assoc($tampil2)){
		  
$clk=mysqli_query($koneksi, "SELECT * FROM tb_hsl_ceklist WHERE kd_list_lokasi='$tp2[kd_lokasi]' AND kod_list_lokasi='$tp2[id_list_lokasi]' AND tgl='$tgs' AND bln='$blns' AND thn='$thaj' ");
          $crkl=mysqli_fetch_assoc($clk);
	?>
        <form id="form1" name="form1" method="post" enctype="multipart/form-data" action="page/act_dt_usr.php">
		<tr>
		  <td bgcolor="#CCCCCC">&nbsp;</td>
		  <td bgcolor="#CCCCCC">&nbsp;</td>
		  <td bgcolor="#CCCCCC">&nbsp;</td>
		  <td align="right" bgcolor="#CCCCCC">&nbsp;</td>
		  <td align="right" bgcolor="#CCCCCC">&nbsp;</td>
		  <td bgcolor="#CCCCCC">&nbsp;</td>
		  </tr>
		<tr>
		  <td bgcolor="#CCCCCC" width="573"><? echo $tp2['list_lokasi']; ?>
            <input type="hidden" name="id_hsil" value="<? echo $crkl['id_hsl']; ?>" />
            <input type="hidden" name="kd_ls_lokasi" value="<? echo $id_lc; ?>" />
            <input type="hidden" name="id_lc" value="<? echo $id_lc; ?>" />
            <input type="hidden" name="kd_ls_lok" value="<? echo $tp2['id_list_lokasi']; ?>" /></td>
		  <td bgcolor="#CCCCCC"><div align="center">
		    <input type="checkbox" name="checkbox1" value="1" <? if($crkl['hasil_ck']==1){?> checked="checked" <? } ?> />
		  </div></td>
		  <td width="299" bgcolor="#CCCCCC"><textarea name="komen" cols="47" rows="2"><? echo $crkl['komentar_ck']; ?> </textarea></td>
		  <td width="100" align="right" bgcolor="#CCCCCC"><input name="foto" type="file" size="3" /></td>
		  <td width="100" align="right" bgcolor="#CCCCCC"><input name="foto2" type="file" size="3" /></td>
		  <td width="78" bgcolor="#CCCCCC"><input type="submit" name="Submit" value="Simpan" /></td>
		  </tr>
		<tr>
		  <td colspan="6" bgcolor="#CCCCCC" height="9"></td>
		  </tr>
		  <? 
		  if($crkl['foto1']!="" or $crkl['foto2']!=""){
		  ?>
		<tr>
          <td width="573" height="171" bgcolor="#CCCCCC">&nbsp;</td>
          <td width="56" bgcolor="#CCCCCC">&nbsp;</td>
          <td colspan="4" valign="top" bgcolor="#CCCCCC"><table width="100%" border="0" cellspacing="1" cellpadding="1">
            <tr>
              <td width="41%" height="169"><img src="foto_ceklist/<? echo $crkl['foto1']; ?>" height="167" width="230" /></td>
              <td width="59%"><div align="left"><img src="foto_ceklist/<? echo $crkl['foto2']; ?>" height="167" width="230" /></div></td>
            </tr>
          </table></td>
          </tr>
        <?  } ?>
        <tr>
          <td colspan="6" bgcolor="#CCCCCC" height="7"></td>
        </tr>
        <tr>
          <td colspan="6" bgcolor="#FFFFFF" height="7"></td>
          </tr> </form>
        <? $no+=1; } ?>
      </table>
       
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
