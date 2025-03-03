<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style6 {	font-size: 16px;
	color: #336600;
}
.style8 {font-size: 18px; color: #336600; }
.style9 {color: #336600; font-size: 24px;}
.style13 {
	font-size: 16px;
	color: #FF0000;
	cursor: text;
}
.style15 {color: #33663A}
-->
</style>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  
  <?
     
     $tampil=mysqli_query($koneksi, "SELECT id_gp,nip,nama_gp,foto_gp FROM guru_pegawai WHERE id_gp='$idgurp' ");
     $tp=mysqli_fetch_assoc($tampil);
  
  ?>
  <tr>
    <td height="22" colspan="2" background="images/background.JPG" bgcolor="#B7CE86"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="4"><div align="center">
          <? if($phk==1){ ?>
          <img src="images/warning.jpg" />
          <? } ?>
        </div></td>
      </tr>
      <tr>
        <td colspan="4">&nbsp;</td>
        </tr>
      <tr>
        <td width="2%">&nbsp;</td>
        <td width="6%">&nbsp;</td>
        <td width="1%">&nbsp;</td>
        <td width="91%">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><img src="images/sohidl.png" width="100" height="113" /></td>
        <td>&nbsp;</td>
        <td valign="top"><span class="style6"><span class="style9"> Sistem Informasi Sekolah </span> <span class="style9">PPMI Shohwatul Is'ad </span><span class="style9"></span><span class="style8"><br />
          <br />
          <span class="style15">Pondok Pesantren Modern Islam Shohwatul Is'ad <br />Jl. Sipitto Ma'rang 
            Kabupaten Pangkep Sulawesi Selatan<br /> Telp.(0410)2315599, Fax(0410)2317977, 
          www.shohwatulisad.sch.id </span></span></span></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2" height="22"></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#B7CE86" height="5" background="images/background.jpg"></td>
  </tr>
  <tr>
    <td width="1%" rowspan="2" valign="top" background="images/background.jpg">&nbsp;</td>
    <td width="99%" valign="top" bgcolor="#B7CE86" background="images/background.jpg"><table width="99%" border="0" cellspacing="2" cellpadding="0">
        <tr>
          <td width="11%" bgcolor="#C6DE8D">&nbsp;Nip</td>
          <td width="88%" bgcolor="#C6DE8D"><? echo $tp['nip']; ?></td>
        </tr>
        <tr>
          <td bgcolor="#EAF1DA">&nbsp;Nama</td>
          <td bgcolor="#EAF1DA"><? echo $tp['nama_gp']; ?></td>
        </tr>
        <tr>
          <td bgcolor="#C6DE8D">&nbsp;Jabatan</td>
          <td bgcolor="#C6DE8D"><? echo $tp['jabatan_gp']; ?></td>
        </tr>
        <tr>
          <td colspan="2" bgcolor="#EAF1DA">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" bgcolor="#C6DE8D">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" bgcolor="#EAF1DA">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" bgcolor="#C6DE8D">&nbsp;Tahun Ajaran : <? echo $thaj; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Semester : <? if($sem=="I"){ $s="(Pertama)";}else{ $s="(Kedua)"; }  echo $sem." $s"; ?></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td background="images/background.jpg">&nbsp;</td>
  </tr>
  
  
  
  <tr>
    <td colspan="2" height="19"></td>
  </tr>
</table>

</body>
</html>
