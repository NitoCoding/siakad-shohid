<?
include("koneksi.php");
$km=$_GET['km'];
$co=$_COOKIE['co'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
	font-size: 24px;
}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="act_penil_pim.php">
  <table width="700" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCC33">
    <tr>
      <td width="792" valign="top"><div align="center">
        <table width="700" border="0" align="center" cellpadding="0" cellspacing="5">
          <tr>
            <td height="41" colspan="3" bgcolor="#CCCC33"><div align="center"><span class="style1">&nbsp;&nbsp;FORM PENILAIAN PIMPINAN </span></div></td>
          </tr>
          <tr>
            <td width="5%">&nbsp;</td>
            <td width="50%">&nbsp;</td>
            <td width="45%">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2">Pimpinan yang dinilai </td>
            <td><select name="nama_p">
                <option>Pilih</option>
                <option value="Muhammad Mukhlis, Lc., MA.">Muhammad Mukhlis, Lc., MA.</option>
                <option value="Ady Mulya Azis, S.Kom.">Ady Mulya Azis, S.Kom.</option>
                <option value="Muh Galib, S.Pd.">Muh Galib, S.Pd.</option>
                <option value="Abdu Rahman T, Lc.">Abdu Rahman T, Lc.</option>
                <option value="Heriyanti, M.Pd.">Heriyanti, M.Pd.</option>
                <option value="Syamsuddin, S.Pd.,MM.">Syamsuddin, S.Pd.,MM.</option>
                <option value="Kamaruddin Muh. Kaddas S.Pd, M.PMat.">Kamaruddin Muh. Kaddas S.Pd, M.PMat.</option>
                <option value="Abdul Wahid, A.Md.">Abdul Wahid, A.Md.</option>
                <option value="Sunandar, S.Pd.I.">Sunandar, S.Pd.I.</option>
                <option value="Nadrah Masnaini, SE., S.Pd.">Nadrah Masnaini, SE., S.Pd.</option>
                <option value="Drs. Med. Syaiful Azmi, S.Ked.">Drs. Med. Syaiful Azmi, S.Ked.</option>
            </select></td>
          </tr>
          <tr>
            <td colspan="2">Unit Kerja Anda </td>
            <td><select name="unitp">
                <option>Pilih</option>
                <option value="SMA">SMA</option>
                <option value="SMP">SMP</option>
                <option value="Kesantrian Putra">Kesantrian Putra</option>
                <option value="Kesantrian Putri">Kesantrian Putri</option>
                <option value="Keuangan">Keuangan</option>
                <option value="Ekonomi">Ekonomi</option>
                <option value="Sarpras">Sarpras</option>
                <option value="Dapur">Dapur</option>
                <option value="Tenaga Kependidikan">Tenaga Kependidikan</option>
            </select></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><? 
			
			
			
			?></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFCC"><div align="center">1.</div></td>
            <td bgcolor="#FFFFCC">Sikap dan perbuatan bisa menjadi teladan
              <input type="hidden" name="hiddenField" value="<? echo $km; ?>" /></td>
            <td bgcolor="#FFFFCC"><select name="p1">
                <option>Pilih</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
              </select>            </td>
          </tr>
          <tr>
            <td><div align="center">2.</div></td>
            <td>Kemampuan analisis dan mengambil keputusan</td>
            <td><select name="p2">
                <option>Pilih</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
            </select></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFCC"><div align="center">3.</div></td>
            <td bgcolor="#FFFFCC">Kemampuan memotivasi</td>
            <td bgcolor="#FFFFCC"><select name="p3">
                <option>Pilih</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
            </select></td>
          </tr>
          <tr>
            <td><div align="center">4.</div></td>
            <td>Kemampuan komunikasi dan mendengarkan</td>
            <td><select name="p4">
                <option>Pilih</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
            </select></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFCC"><div align="center">5.</div></td>
            <td bgcolor="#FFFFCC">Kemampuan menciptakan lingkungan kerja yang sehat</td>
            <td bgcolor="#FFFFCC"><select name="p5">
                <option>Pilih</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
            </select></td>
          </tr>
          <tr>
            <td><div align="center">6.</div></td>
            <td>Kemampuan mendelegasikan tugas atau wewenang</td>
            <td><select name="p6">
                <option>Pilih</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
            </select></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFCC"><div align="center">7.</div></td>
            <td bgcolor="#FFFFCC">Tanggung jawab</td>
            <td bgcolor="#FFFFCC"><select name="p7">
                <option>Pilih</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
            </select></td>
          </tr>
          <tr>
            <td><div align="center">8.</div></td>
            <td>Displin</td>
            <td><select name="p8">
                <option>Pilih</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
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
            <td><input type="submit" name="simpan" value="Kirim" <? if($co>=11){ echo "disabled='disabled'"; } ?>/></td>
          </tr>
          <tr>
            <td><div align="center"></div></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
