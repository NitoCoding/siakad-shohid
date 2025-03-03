<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #EAF1DA}
.style2 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" enctype="multipart/form-data" action="page/act_dt_pg.php">
  <table width="100%" border="0" cellspacing="0" cellpadding="3">
   <? 
     $id_kgp=$_GET['id_kgp'];
     $tampil=mysqli_query($koneksi, "SELECT * FROM guru_pegawai WHERE id_gp='$id_kgp' ");
     $tp=mysqli_fetch_assoc($tampil);
  ?>
    
    
    <tr>
      <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="4%" height="35" bgcolor="#B3CF70"><div align="center"><img src="images/image1.gif" width="20" height="22" /></div></td>
          <td colspan="2" bgcolor="#B3CF70"><span class="style2">Edit Data Guru </span></td>
          <td bgcolor="#B3CF70">&nbsp;</td>
        </tr>
        
        <tr>
          <td colspan="3" valign="top" bgcolor="#C6DE8D"><table width="100%" border="0" cellspacing="0" cellpadding="2">
            <tr>
              <td width="3%">&nbsp;</td>
              <td width="9%">&nbsp;</td>
              <td width="88%">&nbsp;</td>
            </tr>
            <tr>
              <td bgcolor="#EAF1DA">&nbsp;</td>
              <td bgcolor="#EAF1DA">Nip</td>
              <td bgcolor="#EAF1DA">: <? echo $tp['nip']; ?></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>Nama</td>
              <td>: <? echo $tp['nama_gp']; ?></td>
            </tr>
            <tr>
              <td bgcolor="#EAF1DA">&nbsp;</td>
              <td bgcolor="#EAF1DA">Jabatan</td>
              <td bgcolor="#EAF1DA">: <? echo $tp['jabatan_gp']; ?></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table></td>
          <td width="13%" valign="top" bgcolor="#C6DE8D"><div align="center"><img src="foto_gp/<? echo $tp['foto_gp']; ?>" width="100" height="130"/></div></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="22%" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="77%" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    
	<tr>
      <td bgcolor="#C6DE8D"><div align="left">Nip</div></td>
      <td bgcolor="#C6DE8D" <? if($wrna1==1)echo"bgcolor='#FF0000'"; ?>><div align="left">
        <input name="nip" type="text" value="<? echo $tp['nip']; ?>" size="15" />
        <input type="hidden" name="idk_edt" value="<? echo $tp['id_gp']; ?>" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#EAF1DA"><div align="left">Tahun Terdaftar </div></td>
      <td bgcolor="#EAF1DA" <? if($wrna1==2)echo"bgcolor='#FF0000'"; ?>><div align="left">
        <label></label>
        <select name="thn_dftr">
		<option value="<? echo $tp['thn_trdaftar']; ?>"><? echo $tp['thn_trdaftar']; ?></option>
		<option>-</option>
          <? for($b=-11;$b<=0;$b++){ 
		  ?>
          <option value="<? echo date("Y")+$b; ?>"><? echo date("Y")+$b; ?></option>
          <? } ?>
        </select>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#C6DE8D"><div align="left">Nama </div></td>
      <td bgcolor="#C6DE8D" <? if($wrna1==5)echo"bgcolor='#FF0000'"; ?>><div align="left">
        <input name="namapg" type="text" value="<? echo $tp['nama_gp']; ?>" size="35"/>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#EAF1DA">Foto</td>
      <td bgcolor="#EAF1DA" <? if($wrna3==1)echo"bgcolor='#FF0000'"; ?>><input name="foto" type="file" size="12" /></td>
    </tr>
    <tr>
      <td bgcolor="#C6DE8D"><div align="left">Jenis Kelamin </div></td>
      <td bgcolor="#C6DE8D" <? if($wrna3==1)echo"bgcolor='#FF0000'"; ?>><div align="left">
        <select name="jkl_pg">
          <option value="l" <? if($tp['jkl_gp']=='l'){ echo"selected='selected'"; }?>>Laki-laki</option>
          <option value="p" <? if($tp['jkl_gp']=='p'){ echo"selected='selected'"; }?>>Perempuan</option>
        </select>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#EAF1DA"><div align="left">Tempat Tanggal Lahir </div></td>
      <td bgcolor="#EAF1DA" <? if($wrna1==6)echo"bgcolor='#FF0000'"; ?>><div align="left">
        <input name="tempatl" type="text" size="15" value="<? echo $tp['tempat_ttl']; ?>" />
        <select name="tgl">
          <option>-</option>
          <? for($i=1;$i<=31;$i++){ ?>
          <option <? if($tp['tgl_ttl']=="$i"){ ?>selected="selected" <? } ?> value="<? echo $i; ?>"><? echo $i; ?></option>
          <? } ?>
        </select>
        <select name="bln">
          <option>-</option>
          <option <? if($tp['bln_ttl']=="Januari"){ ?>selected="selected" <? } ?> value="Januari">Januari</option>
          <option <? if($tp['bln_ttl']=="Februari"){ ?>selected="selected" <? } ?> value="Februari">Februari</option>
          <option <? if($tp['bln_ttl']=="Maret"){ ?>selected="selected" <? } ?>value="Maret">Maret</option>
          <option <? if($tp['bln_ttl']=="April"){ ?>selected="selected" <? } ?>value="April">April</option>
          <option <? if($tp['bln_ttl']=="Mei"){ ?>selected="selected" <? } ?>value="Mei">Mei</option>
          <option <? if($tp['bln_ttl']=="Juni"){ ?>selected="selected" <? } ?>value="Juni">Juni</option>
          <option <? if($tp['bln_ttl']=="Juli"){ ?>selected="selected" <? } ?>value="Juli">Juli</option>
          <option <? if($tp['bln_ttl']=="Agustus"){ ?>selected="selected" <? } ?>value="Agustus">Agustus</option>
          <option <? if($tp['bln_ttl']=="September"){ ?>selected="selected" <? } ?>value="September">September</option>
          <option <? if($tp['bln_ttl']=="Oktober"){ ?>selected="selected" <? } ?>value="Oktober">Oktober</option>
          <option <? if($tp['bln_ttl']=="November"){ ?>selected="selected" <? } ?>value="November">November</option>
          <option <? if($tp['bln_ttl']=="Desember"){ ?>selected="selected" <? } ?>value="Desember">Desember</option>
        </select>
        <select name="thn">
          <option>-</option>
          <? for($b=50;$b>=10;$b--){ 
		     $tthn=date("Y")-$b;
		  ?>
          <option <? if($tp['thn_ttl']=="$tthn"){ ?>selected="selected" <? } ?> value="<? echo date("Y")-$b; ?>"><? echo date("Y")-$b; ?></option>
          <? } ?>
        </select>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#C6DE8D"><div align="left">Status Pernikahan </div></td>
      <td bgcolor="#C6DE8D" <? if($wrna1==7)echo"bgcolor='#FF0000'"; ?>><div align="left">
        <select name="sta_gp">
          <option>-</option>
          <option value="m" <? if($tp['status_pernikahan']=='m'){ echo"selected='selected'"; }?>>Menikah</option>
          <option value="b" <? if($tp['status_pernikahan']=='b'){ echo"selected='selected'"; }?>>Belum Menikah</option>
        </select>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#EAF1DA"><div align="left">Jumlah Anak </div></td>
      <td bgcolor="#EAF1DA" <? if($wrna1==8)echo"bgcolor='#FF0000'"; ?>><div align="left">
        <input name="jml_anak" type="text" size="3" value="<? echo $tp['jml_anak']; ?>" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#C6DE8D">Pendidikan Terakhir </td>
      <td bgcolor="#C6DE8D" <? if($wrna1==9)echo"bgcolor='#FF0000'"; ?>><div align="left">
        <select name="pendidikan">
          <option value="<? echo $tp['pendidikan']; ?>" selected="selected"><? echo $tp['pendidikan']; ?></option>
          <option>-</option>
          <option value="Prof">Prof</option>
          <option value="S3">S3</option>
          <option value="S2">S2</option>
          <option value="S1">S1</option>
          <option value="D4">D4</option>
          <option value="D3">D3</option>
          <option value="D2">D2</option>
          <option value="D1">D1</option>
          <option value="SMU">SMU</option>
          <option value="SMP">SMP</option>
          <option value="SD">SD</option>
        </select>
      </div></td>
    </tr>
    <tr>
      <td height="22" valign="top" bgcolor="#EAF1DA">Jabatan</td>
      <td valign="top" bgcolor="#EAF1DA" <? if($wrna1==10)echo"bgcolor='#FF0000'"; ?>><div align="left">
        <select name="jabatan">
          <option value="<? echo $tp['Jabatan']; ?>" selected="selected"><? echo $tp['Jabatan']; ?></option>
          <option>-</option>
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
        <input name="ket_jabatan" type="text" value="<? echo $tp['ket_jabatan']; ?>" size="45" />
      Unit 
      <select name="unit">
	  <option value="<? echo $tp['unit']; ?>" selected="selected"><? echo $tp['unit']; ?></option>
	  <option value=""></option>
        <option value="-">Pilih Perubahan Unit</option>
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
      </select>
      </div></td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#C6DE8D">Status</td>
      <td valign="top" bgcolor="#C6DE8D" <? if($wrna1==11)echo"bgcolor='#FF0000'"; ?>><div align="left">
        <select name="sts_p">
          <option value="-">Pilih</option>
          <option value="g" <? if($tp['status_kp']=='g'){ echo"selected='selected'"; }?>>Guru</option>
          <option value="p" <? if($tp['status_kp']=='p'){ echo"selected='selected'"; }?>>Pegawai</option>
          <option value="k" <? if($tp['status_kp']=='k'){ echo"selected='selected'"; }?>>Karyawan</option>
        </select>
        <select name="status_pg">
          <option>-</option>
          <option value="t" <? if($tp['status_pg']=='t'){ echo"selected='selected'"; }?>>Tetap</option>
          <option value="k" <? if($tp['status_pg']=='k'){ echo"selected='selected'"; }?>>Kontrak</option>
          <option value="h" <? if($tp['status_pg']=='h'){ echo"selected='selected'"; }?>>Honor</option>
          <option value="p" <? if($tp['status_pg']=='p'){ echo"selected='selected'"; }?>>Percobaan</option>
        </select>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#EAF1DA">Telpon/HP</td>
      <td bgcolor="#EAF1DA"><input type="text" name="telpon" value="<? echo $tp['telpon']; ?>" /></td>
    </tr>
    <tr>
      <td bgcolor="#C6DE8D"><div align="left">Alamat</div></td>
      <td bgcolor="#C6DE8D"><input name="alamat" type="text" value="<? echo $tp['alamat']; ?>" size="100" /></td>
    </tr>
    <tr>
      <td bgcolor="#EAF1DA">&nbsp;</td>
      <td bgcolor="#EAF1DA">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#663333">&nbsp;</td>
      <td bgcolor="#663333">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#EAF1DA">&nbsp;</td>
      <td bgcolor="#EAF1DA">&nbsp;</td>
    </tr>
    
    <tr>
      <td bgcolor="#C6DE8D"><span class="style1"></span></td>
      <td bgcolor="#C6DE8D"><input name="rubah" type="submit" value="Simpan" /></td>
    </tr>
    <tr>
      <td bgcolor="#C6DE8D"><div align="left"><span class="style1"></span></div></td>
      <td bgcolor="#C6DE8D"><div align="left"><span class="style1"></span></div></td>
    </tr>
  </table>
</form>

</body>
</html>
