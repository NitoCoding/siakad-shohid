<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistem Informasi Sekolah PPMI Shohwatul Is'ad</title>
<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
</head>
<?
include("../koneksi.php");
$hal=$_GET['hal']; 
$id_str=$_GET['id_str']; 
$nisk=$_GET['nisk']; 
$idkls=$_GET['idkls']; 
$idkls=$_GET['idkls'];
$psn=$_GET['psn'];
?>
<body>
<form id="form1" name="form1" method="post" action="masuk.php">
  <table width="500" border="0" align="center" cellpadding="0" cellspacing="6">
    <? if($psn==1){ ?>
	<tr>
      <td colspan="2"><div align="center" class="style1">Password Anda Salah</div></td>
    </tr>
	<? } ?>
	<? if($psn==2){ ?>
	<tr>
      <td colspan="2"><div align="center" class="style1">Click Login</div></td>
    </tr>
	<? } ?>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td width="225"><div align="right">User</div></td>
      <td width="257">: <? 
	   $msk=mysqli_query($koneksi, "SELECT id_santri,nama FROM tb_santri WHERE id_santri='$id_str' ");
       $cms=mysqli_fetch_assoc($msk);
	   echo $cms['nama']; 
	   ?></td>
    </tr>
    <tr>
      <td><div align="right">Password</div></td>
      <td>: 
        <input type="password" name="pswr" /></td>
    </tr>
    <tr>
      <td><div align="right"></div></td>
      <td><input type="submit" name="masuk" value="Login" /></td>
    </tr>
    <tr>
      <td><div align="right"></div></td>
      <td><input type="hidden" name="hal" value="<? echo $hal; ?>" />
      <input type="hidden" name="id_str" value="<? echo $id_str; ?>" />
      <input type="hidden" name="nisk" value="<? echo $nisk; ?>" />
      <input type="hidden" name="idkls" value="<? echo $idkls; ?>" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center"><a href="masuk.php?logout=1">Kembali</a></div></td>
    </tr>
  </table>
</form>

</body>
</html>
