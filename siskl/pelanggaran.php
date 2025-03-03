<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style7 {font-size: 12px}
-->
</style>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="75%" height="33">&nbsp;&nbsp;<strong>Pelanggaran yang dilakukan </strong> </td>
        <td width="14%"><strong>Bulan :</strong> <? echo $bulan; ?></td>
        <td width="11%"><strong>Pekan :</strong><span class="style7">
          <? if($pekan=='I'){ echo $pekan." (Pertama)"; }else{ echo $pekan." (Kedua)"; }  ?>
        </span></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="22" colspan="3" valign="top" bgcolor="#DCF3AF"><table width="100%" border="2" cellpadding="0" cellspacing="0" bordercolor="#B3CF70">
        <tr> 
          <td height="29" bgcolor="#B3CF70"><div align="center">No</div></td>
          <td bgcolor="#B3CF70"><div align="center">Hari/Tanggal</div></td>
          <td bgcolor="#B3CF70"><div align="center">Foto Pelanggaran </div></td>
          <td bgcolor="#B3CF70"><div align="center">Pelanggaran yang dilakukan 
            </div></td>
          <td bgcolor="#B3CF70"><div align="center">Sangksih yang diberikan</div></td>
        </tr>
        <?
		   $no=1;
		  $tampil3=mysqli_query($koneksi, "SELECT * FROM tb_prpl WHERE kd_st='$id_santri' and ket='p' ");
          while($tp3=mysqli_fetch_assoc($tampil3)){
		?>
        <tr> 
          <td width="2%" height="135" valign="top"><div align="center"><br />
              <? echo $no; ?></div></td>
          <td width="15%" valign="top"><div align="center"><br />
              <?
		echo $tp3['hari'].", ".$tp3['tgl']."-".$tp3['bln']."-".$tp3['thn'];
		?>
            </div></td>
          <td width="18%"><div align="center"><img src="../foto_kegiatan/<? echo$tp3['foto']; ?>" width="120" height="130"/></div></td>
          <td width="37%" valign="top"> <br />
            &nbsp; 
            <?
		echo $tp3['perihal'];
		?>
          </td>
          <td width="28%" valign="top"> <br />
            &nbsp; 
            <?
		echo $tp3['hkuman'];
		?>
          </td>
        </tr>
        <? $no+=1; } ?>
      </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</body>
</html>
