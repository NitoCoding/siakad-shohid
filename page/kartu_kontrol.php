<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<script type="text/javascript">
function printpage()
{
window.print();
return;
}
</script>
<? 
  include("../koneksi.php"); 
  include("../function.php");
?>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onload="printpage()">
<table width="500" border="0" cellspacing="6" cellpadding="0">
  <tr> 
    <td width="188">&nbsp;</td>
    <td width="162">&nbsp;</td>
    <td width="126">&nbsp;</td>
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
  <tr> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td height="19">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <?
  $gb_nota=$_GET['gb_nota'];
  $tgl=$_GET['tgl'];
  $jpb1=mysqli_query($koneksi, "SELECT * FROM rincian_nota WHERE kd_kwi='$gb_nota' ");
  while($crp1=mysqli_fetch_assoc($jpb1)){
  
  $jpb=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE id_transaksi='$crp1[kd_transaksi]' AND kd_bayar='1'");
  $crp2=mysqli_fetch_assoc($jpb);
  if($crp2['bln_bayar']=="Januari") $b1="$crp2[jml_bayar]";
  if($crp2['bln_bayar']=="Februari") $b2="$crp2[jml_bayar]";
  if($crp2['bln_bayar']=="Maret") $b3="$crp2[jml_bayar]";
  if($crp2['bln_bayar']=="April") $b4="$crp2[jml_bayar]";
  if($crp2['bln_bayar']=="Mei") $b5="$crp2[jml_bayar]";
  if($crp2['bln_bayar']=="Juni") $b6="$crp2[jml_bayar]";
  if($crp2['bln_bayar']=="Juli") $b7="$crp2[jml_bayar]";
  if($crp2['bln_bayar']=="Agustus") $b8="$crp2[jml_bayar]";
  if($crp2['bln_bayar']=="September") $b9="$crp2[jml_bayar]";
  if($crp2['bln_bayar']=="Oktober") $b10="$crp2[jml_bayar]";
  if($crp2['bln_bayar']=="November") $b11="$crp2[jml_bayar]";
  if($crp2['bln_bayar']=="Desember") $b12="$crp2[jml_bayar]";
  }
  ?>
  <tr> 
    <td> 
      <? if($b7!="") echo $tgl; ?>
    </td>
    <td><? echo $b7;?></td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td> 
      <? if($b8!="") echo $tgl; ?>
    </td>
    <td><? echo $b8;?></td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td> 
      <? if($b9!="") echo $tgl; ?>
    </td>
    <td><? echo $b9;?></td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td> 
      <? if($b10!="") echo $tgl; ?>
    </td>
    <td><? echo $b10;?></td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td> 
      <? if($b11!="") echo $tgl; ?>
    </td>
    <td><? echo $b11;?></td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td> 
      <? if($b12!="") echo $tgl; ?>
    </td>
    <td><? echo $b12;?></td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td> 
      <? if($b1!="") echo $tgl; ?>
    </td>
    <td><? echo $b1;?></td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td> 
      <? if($b2!="") echo $tgl; ?>
    </td>
    <td><? echo $b2;?></td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td> 
      <? if($b3!="") echo $tgl; ?>
    </td>
    <td><? echo $b3;?></td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td> 
      <? if($b4!="") echo $tgl; ?>
    </td>
    <td><? echo $b4;?></td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td> 
      <? if($b5!="") echo $tgl; ?>
    </td>
    <td><? echo $b5;?></td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td> 
      <? if($b6!="") echo $tgl; ?>
    </td>
    <td><? echo $b6;?></td>
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

</body>
</html>
