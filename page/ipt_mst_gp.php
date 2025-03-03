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
}
.style2 {color: #FFFFFF}
.style3 {color: #996600}
-->
</style>
</head>
<script language="JavaScript" type="text/javascript">
function angka(){
  if(isNaN(form1.nip.value)) { form1.nip.value='';  }
  
}
function cek(){
  if(form1.nis.value=='') { 
    form1.nis.focus;
	return;
  }
}
</script>
<body>
<form id="form1" name="form1" enctype="multipart/form-data" method="post" action="page/act_dt_pg.php">
  <table width="100%" border="0" cellspacing="0" cellpadding="3">
    <tr>
      <td bgcolor="#666633">&nbsp;</td>
      <td colspan="2" bgcolor="#666633"><span class="style1">DATA PRIBADI </span></td>
    </tr>
    <tr>
      <td width="2%" bgcolor="#ACD75E">&nbsp;</td>
      <td width="19%" bgcolor="#ACD75E">&nbsp;</td>
      <td width="79%" bgcolor="#ACD75E">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="left">Niy</div></td>
      <td <? if($wrna1==1)echo"bgcolor='#FF0000'"; ?>><div align="left">
        <input name="nip" type="text" size="15"/>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E"><div align="left">Tahun Masuk </div></td>
      <td bgcolor="#ACD75E" <? if($wrna1==2)echo"bgcolor='#FF0000'"; ?>><div align="left">
        <label></label>
        <select name="thn_dftr">
		<option>-</option>
		  <? for($b=-13;$b<=0;$b++){ $th2=(date("Y")+$b)+1;?>
          <option value="<? echo date("Y")+$b; ?>"><? echo date("Y")+$b; ?></option>
          <? } ?>
        </select>
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="left">Nama </div></td>
      <td <? if($wrna1==5)echo"bgcolor='#FF0000'"; ?>><div align="left">
        <input name="namapg" type="text" size="50" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Foto</td>
      <td bgcolor="#ACD75E" <? if($wrna3==1)echo"bgcolor='#FF0000'"; ?>><input name="foto" type="file" size="10" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="left">Jenis Kelamin </div></td>
      <td <? if($wrna3==1)echo"bgcolor='#FF0000'"; ?>><div align="left">
        <select name="jkl_pg">
		<option>-</option>
          <option value="l">Laki-laki</option>
          <option value="p">Perempuan</option>
        </select>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E"><div align="left">Tempat Tanggal Lahir </div></td>
      <td bgcolor="#ACD75E" <? if($wrna1==6)echo"bgcolor='#FF0000'"; ?>><div align="left">
        <input type="text" name="tempatl" />
        <select name="tgl">
		<option>-</option>
          <? for($i=1;$i<=31;$i++){ ?>
          <option value="<? echo $i; ?>"><? echo $i; ?></option>
          <? } ?>
        </select>
        <select name="bln">
		<option>-</option>
          <option value="Januari">Januari</option>
          <option value="Februari">Februari</option>
          <option value="Maret">Maret</option>
          <option value="April">April</option>
          <option value="Mei">Mei</option>
          <option value="Juni">Juni</option>
          <option value="Juli">Juli</option>
          <option value="Agustus">Agustus</option>
          <option value="September">September</option>
          <option value="Oktober">Oktober</option>
          <option value="November">November</option>
          <option value="Desember">Desember</option>
        </select>
        <select name="thn">
		<option>-</option>
          <? for($b=60;$b>=5;$b--){ ?>
          <option value="<? echo date("Y")-$b; ?>"><? echo date("Y")-$b; ?></option>
          <? } ?>
        </select>
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="left">Status Pernikahan </div></td>
      <td <? if($wrna1==7)echo"bgcolor='#FF0000'"; ?>><div align="left">
        <select name="sta_gp">
          <option>-</option>
          <option value="m">Menikah</option>
          <option value="b">Belum Menikah</option>
		   <option value="d">Duda</option>
		    <option value="j">Janda</option>
        </select>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Jumlah Anak </td>
      <td bgcolor="#ACD75E"><input name="jml_anak" type="text" size="3" /> 
        Orang </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Pendidikan Terakhir </td>
      <td <? if($wrna1==8)echo"bgcolor='#FF0000'"; ?>><div align="left">
        <select name="pendidikan">
          <option>-</option>
		  <option value="SD">SD</option>
		  <option value="SMP">SMP</option>
		  <option value="SMA">SMA</option>
		  <option value="D1">Diploma (D1)</option>
		  <option value="D2">Diploma (D2)</option>
		  <option value="D3">Diploma (D3)</option>
		  <option value="D4">Diploma (D4)</option>
          <option value="S1">Strata Satu (S1)</option>
          <option value="S2">Strata Dua (S2)</option>
          <option value="S3">Strata Tiga (S3)</option>
          <option value="Prof">Prof</option>
		  <option value="Tenaga Ahli">Tenaga Ahli</option>
        </select>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E"><div align="left">Jabatan</div></td>
      <td bgcolor="#ACD75E" <? if($wrna1==9)echo"bgcolor='#FF0000'"; ?>><div align="left">
        <select name="jabatan">
          <option value=" ">-</option>
          <option value="Yayasan">Yayasan</option>
		  <option value="Mudir/Direktur">Mudir/Direktur</option>
          <option value="Dewan Kiyai">Dewan kiyai</option>
          <option value="Wakil Direktur">Wakil Direktur</option>
          <option value="Sekretaris">Sekretaris</option>
          <option value="Kepala Urusan">Kepala Urusan</option>
          <option value="Wakil Kepala Urusan">Wakil Kepala Urusan</option>
		  <option value="Wali Asrama">Wali Asrama</option>
		  <option value="Wali Kelas">Wali Kelas</option>
		  <option value="Staff">Staff</option>
        </select>
        <input name="ket_jabatan" type="text" size="50" />
      </div></td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
      <td height="22" valign="middle">Status Pegawai/Guru </td>
      <td valign="middle"><select name="sts_p">
        <option value="-">Pilih</option>
        <option value="g">Guru</option>
        <option value="p">Pegawai</option>
        <option value="k">Karyawan</option>
      </select>
      <select name="status_pg">
        <option value="-">Pilih</option>
        <option value="t">Tetap</option>
        <option value="k">Kontrak</option>
        <option value="h">Honorer</option>
        <option value="p">Percobaan</option>
      </select>
      Unit       <select name="unit">
        <option value="-">Pilih</option>
		<option value="STR">STRUKTURAL PONDOK</option>
        <option value="SMP">SMP</option>
        <option value="SMA">SMA</option>
        <option value="KSP">KESANTRIAN PUTRA</option>
        <option value="KSI">KESANTRIAN PUTRI</option>
		<option value="KEU">KEUANGAN</option>
		<option value="SPR">SARPRAS</option>
		<option value="SDM">SUMBER DAYA MANUSIA</option>
		<option value="DPR">DAPUR</option>
		<option value="KDA">UNIT EKONOMI (KDA)</option>
		<option value="HMS">KEHUMASAN</option>
		<option value="SCR">KEAMANAN/SECURITY</option>
		<option value="KDR">DRIVER/KENDARAAN</option>
      </select></td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#ACD75E">&nbsp;</td>
      <td height="22" valign="middle" bgcolor="#ACD75E">Alamat Tetap </td>
      <td valign="middle" bgcolor="#ACD75E" <? if($wrna1==10)echo"bgcolor='#FF0000'"; ?>><div align="left">
        <textarea name="alamat" cols="35" rows="5"></textarea>
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td valign="middle"><div align="left">Telpon Kontak </div></td>
      <td valign="middle" <? if($wrna1==11)echo"bgcolor='#FF0000'"; ?>><input name="telpon" type="text" size="30" /></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td valign="middle" bgcolor="#ACD75E">&nbsp;</td>
      <td valign="middle" bgcolor="#ACD75E" <? if($wrna1==11)echo"bgcolor='#FF0000'"; ?>><div align="left"></div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
    
    
    <tr>
      <td bgcolor="#996600"><span class="style3"></span></td>
      <td bgcolor="#996600">&nbsp;</td>
      <td bgcolor="#996600">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="left"></div></td>
      <td><div align="left">
        <input type="submit" name="rekam" value="Simpan" onclick="cek();" />
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#666633">&nbsp;</td>
      <td bgcolor="#666633"><div align="left"></div></td>
      <td bgcolor="#666633"><div align="left"></div></td>
    </tr>
  </table>
</form>

</body>
</html>
