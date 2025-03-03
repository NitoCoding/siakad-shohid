<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?
include("../koneksi.php");     
$tmpkls2=mysqli_query($koneksi, "SELECT * FROM tb_baris WHERE idb='1' ");
$ct2=mysqli_fetch_assoc($tmpkls2);
?>
<body>
<div align="center"><strong>===> Baris raport <=== </strong><br />
  <br />
</div>
<form id="form1" name="form1" method="post" action="act_nilai_santri.php">
  kelas 7
  <input name="textfield" type="text" size="1" value="<? echo $ct2['kls7']; ?>" /> 
   kelas 8
   <input name="textfield2" type="text" size="1" value="<? echo $ct2['kls8']; ?>" /> 
   kelas 9
   <input name="textfield3" type="text" size="1" value="<? echo $ct2['kls9']; ?>" />
   Kelas 10
   <input name="textfield4" type="text" size="1" value="<? echo $ct2['kls10']; ?>" /> 
   Kelas 11
   <input name="textfield5" type="text" size="1" value="<? echo $ct2['kls11']; ?>" /> 
   Kelas 12 
   <input name="textfield6" type="text" size="1" value="<? echo $ct2['kls12']; ?>" />
    
   <strong><br /> <br />&nbsp;</strong>&nbsp; Grs1
   <select name="select">
     <option value="k">-</option>
     <option value="a" <? if($ct2['brs1']=='a'){ ?> selected="selected" <? } ?>>Aktif</option>
   </select>
   <input name="textfield62" type="text" size="1" value="<? echo $ct2['p_brs1'] ?>" /> 
  &nbsp;<strong>|</strong>&nbsp; Grs2 
  <select name="select2">
     <option value="k">-</option>
     <option value="a" <? if($ct2['brs2']=='a'){ ?> selected="selected" <? } ?>>Aktif</option>
  </select>
  <input name="textfield63" type="text" size="1" value="<? echo $ct2['p_brs2']; ?>" />
&nbsp;<strong>|</strong>&nbsp; Grs3 
<select name="select3">
  <option value="k">-</option>
  <option value="a" <? if($ct2['brs3']=='a'){ ?> selected="selected" <? } ?>>Aktif</option>
</select>
<input name="textfield64" type="text" size="1" value="<? echo $ct2['p_brs3']; ?>" /> 
&nbsp;<strong>|</strong>&nbsp; Grs4
<select name="select4">
  <option value="k">-</option>
  <option value="a" <? if($ct2['brs4']=='a'){ ?> selected="selected" <? } ?>>Aktif</option>
</select>
<input name="textfield65" type="text" size="1" value="<? echo $ct2['p_brs4']; ?>" /> 
&nbsp;<strong>|</strong>&nbsp; Grs5 
<select name="select5">
  <option value="k">-</option>
  <option value="a" <? if($ct2['brs5']=='a'){ ?> selected="selected" <? } ?>>Aktif</option>
</select>
<input name="textfield66" type="text" size="1" value="<? echo $ct2['p_brs5']; ?>" /> 
&nbsp;<strong>|</strong>&nbsp; Grs6
<select name="select6">
  <option value="k">-</option>
  <option value="a" <? if($ct2['brs6']=='a'){ ?> selected="selected" <? } ?>>Aktif</option>
</select>
<input name="textfield67" type="text" size="1" value="<? echo $ct2['p_brs6']; ?>" />  
  <strong>&nbsp;</strong>
  <strong>|</strong>&nbsp;&nbsp; Grs7
<select name="select7">
  <option value="k">-</option>
  <option value="a" <? if($ct2['brs7']=='a'){ ?> selected="selected" <? } ?>>Aktif</option>
</select>
<input name="textfield672" type="text" size="1" value="<? echo $ct2['p_brs7']; ?>" /> &nbsp;
<input type="submit" name="Submit" value="rekam" />
   <input type="hidden" name="idb" value="1" />
</form>
</body>

</html>
