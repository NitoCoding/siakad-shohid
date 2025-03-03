<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" enctype="multipart/form-data" method="post" action="page/act_dt_st.php">
<?	 $idk_dst=$_GET['idk_dst'];   
     $tampil=mysqli_query($koneksi, "SELECT * FROM tb_santri WHERE id_santri='$idk_dst' ");
     $tp=mysqli_fetch_assoc($tampil); ?>
  <table width="100%" border="0" cellspacing="2" cellpadding="2">
    <tr> 
      <td colspan="3" bgcolor="#336600" height="2"></td>
    </tr>
    <tr> 
      <td colspan="3" bgcolor="#B3CF70"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td width="2%" height="32" bgcolor="#FFFFFF">&nbsp;</td>
            <td width="4%" bgcolor="#FFFFFF"><img src="images/image1.gif" width="20" height="22" /></td>
            <td width="60%" bgcolor="#FFFFFF">Edit Data Santri </td>
            <td width="17%" bgcolor="#FFFFFF">&nbsp;</td>
            <td width="17%" bgcolor="#FFFFFF">&nbsp;</td>
          </tr>
        </table></td>
    </tr>
    <tr> 
      <td width="1%" bgcolor="#C6DE8D">&nbsp;</td>
      <td colspan="2" valign="top" bgcolor="#C6DE8D"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td width="86%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="2">
                <tr> 
                  <td width="2%">&nbsp;</td>
                  <td width="8%">&nbsp;</td>
                  <td width="88%">&nbsp;</td>
                  <td width="2%" rowspan="5" valign="top">&nbsp;</td>
                </tr>
                <tr> 
                  <td bgcolor="#EAF1DA">&nbsp;</td>
                  <td bgcolor="#EAF1DA">Nis</td>
                  <td bgcolor="#EAF1DA">: <? echo $tp['nis']; ?></td>
                </tr>
                <tr> 
                  <td>&nbsp;</td>
                  <td>Nama</td>
                  <td>: <? echo $tp['nama']; ?></td>
                </tr>
                <tr> 
                  <td bgcolor="#EAF1DA">&nbsp;</td>
                  <td bgcolor="#EAF1DA">Kelas</td>
                  <td bgcolor="#EAF1DA">: <? echo $tp['kelas_st']; ?>
                    <input type="hidden" name="klsk" value="<? echo $tp['kelas_st']; ?>" /></td>
                </tr>
                <tr> 
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </table></td>
            <td width="14%" valign="top"><img src="foto_santri/<? echo $tp['foto_st']; ?>" width="104" height="130" /></td>
          </tr>
        </table></td>
    </tr>
    <tr bgcolor="#336600"> 
      <td colspan="3" height="2"></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td bgcolor="#C6DE8D">&nbsp;</td>
      <td width="24%" bgcolor="#C6DE8D"><div align="left">Status Santri </div></td>
      <td width="75%" bgcolor="#C6DE8D"><select name="stas">
        <option>-</option>
        <option value="a" <? if($tp['status']=='a'){ echo"selected='selected'"; }?>>Aktif</option>
        <option value="p" <? if($tp['status']=='p'){ echo"selected='selected'"; }?>>Pindahan</option>
        <option value="d" <? if($tp['status']=='d'){ echo"selected='selected'"; }?>>Pindah</option>
        <option value="l" <? if($tp['status']=='l'){ echo"selected='selected'"; }?>>Alumni</option>
      </select></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">NIS Nasional </td>
      <td bgcolor="#ACD75E" <? if($wrna1==1)echo"bgcolor='#FF0000'"; ?>><input name="nn" type="text" value="<? echo $tp['nis_nasional']; ?>" size="35" /></td>
    </tr>
    <tr>
      <td bgcolor="#C6DE8D">&nbsp;</td>
      <td bgcolor="#C6DE8D">Nomor Peserta Ujian SD </td>
      <td bgcolor="#C6DE8D" <? if($wrna1==1)echo"bgcolor='#FF0000'"; ?>><input name="nopessd" type="text" size="35" value="<? echo $tp['n_ujian_sd']; ?>" /></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Nomor Peserta Ujian SMP</td>
      <td bgcolor="#ACD75E" <? if($wrna1==1)echo"bgcolor='#FF0000'"; ?>><input name="nopes" type="text" value="<? echo $tp['n_ujian_smp']; ?>" size="35" /></td>
    </tr>
    <tr>
      <td bgcolor="#C6DE8D">&nbsp;</td>
      <td bgcolor="#C6DE8D">Tahun SKHU</td>
      <td bgcolor="#C6DE8D" <? if($wrna1==1)echo"bgcolor='#FF0000'"; ?>><input name="thn_skhun" type="text" size="35" value="<? echo $tp['tahun_shkun']; ?>" /></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Nomor SKHUN </td>
      <td bgcolor="#ACD75E" <? if($wrna1==1)echo"bgcolor='#FF0000'"; ?>><input name="nomor_skhun" type="text" size="35" value="<? echo $tp['no_skhun']; ?>" /></td>
    </tr>
    <tr>
      <td bgcolor="#C6DE8D">&nbsp;</td>
      <td bgcolor="#C6DE8D">&nbsp;</td>
      <td bgcolor="#C6DE8D" <? if($wrna1==1)echo"bgcolor='#FF0000'"; ?>>&nbsp;</td>
    </tr>
    <tr> 
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E"><div align="left">NIS Sekolah </div></td>
      <td bgcolor="#ACD75E" <? if($wrna1==1)echo"bgcolor='#FF0000'"; ?>><div align="left"> 
          <input name="nis" type="text" value="<? echo $tp['nis']; ?>" size="35" />
          <input type="hidden" name="idk_edt_st" value="<? echo"$tp[id_santri]"; ?>" />
        </div></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><div align="left">Nama </div></td>
      <td <? if($wrna1==2)echo"bgcolor='#FF0000'"; ?>><div align="left"> 
          <label></label>
          <input name="namast" type="text" value="<? echo $tp['nama']; ?>" size="40" />
          <input name="foto" type="file" size="12" />
        </div></td>
    </tr>
    <tr> 
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E"><div align="left">Jenis Kelamin </div></td>
      <td bgcolor="#ACD75E" <? if($wrna1==5)echo"bgcolor='#FF0000'"; ?>><div align="left"> 
          <select name="jkl_st">
            <option value="l" <? if($tp['jkl']=='l'){ echo"selected='selected'"; }?>>Laki-laki</option>
            <option value="p" <? if($tp['jkl']=='p'){ echo"selected='selected'"; }?>>Perempuan</option>
          </select>
        </div></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><div align="left">Tempat Tanggal Lahir </div></td>
      <td><div align="left"> 
          <input name="tmpl_st" type="text" size="35" value="<? echo $tp['tempat_lahir']; ?>" />
          <select name="tgl_st">
            <option>-</option>
            <? for($i=1;$i<=31;$i++){ ?>
            <option <? if($tp['tgl_lahir']=="$i"){ ?>selected="selected" <? } ?> value="<? echo $i; ?>"><? echo $i; ?></option>
            <? } ?>
          </select>
          <select name="bln_st">
            <option>-</option>
            <option <? if($tp['bln_lahir']=="Januari"){ ?>selected="selected" <? } ?> value="Januari">Januari</option>
            <option <? if($tp['bln_lahir']=="Februari"){ ?>selected="selected" <? } ?> value="Februari">Februari</option>
            <option <? if($tp['bln_lahir']=="Maret"){ ?>selected="selected" <? } ?>value="Maret">Maret</option>
            <option <? if($tp['bln_lahir']=="April"){ ?>selected="selected" <? } ?>value="April">April</option>
            <option <? if($tp['bln_lahir']=="Mei"){ ?>selected="selected" <? } ?>value="Mei">Mei</option>
            <option <? if($tp['bln_lahir']=="Juni"){ ?>selected="selected" <? } ?>value="Juni">Juni</option>
            <option <? if($tp['bln_lahir']=="Juli"){ ?>selected="selected" <? } ?>value="Juli">Juli</option>
            <option <? if($tp['bln_lahir']=="Agustus"){ ?>selected="selected" <? } ?>value="Agustus">Agustus</option>
            <option <? if($tp['bln_lahir']=="September"){ ?>selected="selected" <? } ?>value="September">September</option>
            <option <? if($tp['bln_lahir']=="Oktober"){ ?>selected="selected" <? } ?>value="Oktober">Oktober</option>
            <option <? if($tp['bln_lahir']=="November"){ ?>selected="selected" <? } ?>value="November">November</option>
            <option <? if($tp['bln_lahir']=="Desember"){ ?>selected="selected" <? } ?>value="Desember">Desember</option>
          </select>
          <select name="thn_st">
            <option>-</option>
            <? for($b=-20;$b<=1;$b++){ 
		     $tthn=date("Y")+$b;
		  ?>
            <option <? if($tp['tahun_lahir']=="$tthn"){ ?>selected="selected" <? } ?> value="<? echo date("Y")+$b; ?>"><? echo date("Y")+$b; ?></option>
            <? } ?>
          </select>
        </div></td>
    </tr>
    <tr> 
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E"><div align="left">Agama </div></td>
      <td bgcolor="#ACD75E" <? if($wrna1==6)echo"bgcolor='#FF0000'"; ?>><div align="left"> 
          <select name="agama_st">
            <option>-</option>
            <option value="i" <? if($tp['agama']=='i'){ echo"selected='selected'"; }?>>Islam</option>
            <option value="k" <? if($tp['agama']=='k'){ echo"selected='selected'"; }?>>Kristen</option>
            <option value="h" <? if($tp['agama']=='h'){ echo"selected='selected'"; }?>>Hindu</option>
            <option value="b" <? if($tp['agama']=='b'){ echo"selected='selected'"; }?>>Budha</option>
          </select>
        </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Suku</td>
      <td <? if($wrna1==7)echo"bgcolor='#FF0000'"; ?>><input name="suku" type="text" value="<? echo"$tp[kesukuan]"; ?>" size="35"/></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Anak Ke- </td>
      <td bgcolor="#ACD75E" <? if($wrna1==7)echo"bgcolor='#FF0000'"; ?>><input name="anak_k" type="text" value="<? echo"$tp[anak_ke]"; ?>" size="5"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Berat Badan / Tinggi Badan </td>
      <td <? if($wrna1==7)echo"bgcolor='#FF0000'"; ?>><input name="berat" value="<? echo"$tp[berat]"; ?>" type="text" size="7" maxlength="3"/>
Kg /
  <input name="tinggi" type="text" size="7" value="<? echo"$tp[tinggi]"; ?>" maxlength="3" />
CM </td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Golongan Darah </td>
      <td bgcolor="#ACD75E" <? if($wrna1==7)echo"bgcolor='#FF0000'"; ?>><select name="gol_d">
        <option value=" ">Pilih</option>
        <option value="A" <? if($tp['g_darah']=='A'){ echo"selected='selected'"; }?>>A</option>
        <option value="B" <? if($tp['g_darah']=='B'){ echo"selected='selected'"; }?>>B</option>
        <option value="O" <? if($tp['g_darah']=='O'){ echo"selected='selected'"; }?>>O</option>
        <option value="AB" <? if($tp['g_darah']=='AB'){ echo"selected='selected'"; }?>>AB</option>
      </select></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Warna Kulit </td>
      <td <? if($wrna1==7)echo"bgcolor='#FF0000'"; ?>><select name="w_kulit">
        <option value=" ">Pilih</option>
        <option value="Putih" <? if($tp['warna_kulit']=='Putih'){ echo"selected='selected'"; }?>>Putih</option>
        <option value="Hitam" <? if($tp['warna_kulit']=='Hitam'){ echo"selected='selected'"; }?>>Hitam</option>
        <option value="Sawo Matang" <? if($tp['warna_kulit']=='Sawo Matang'){ echo"selected='selected'"; }?>>Sawo Matang</option>
      </select></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Hoby</td>
      <td bgcolor="#ACD75E" <? if($wrna1==7)echo"bgcolor='#FF0000'"; ?>><input name="hoby" type="text" size="35" value="<? echo"$tp[hoby]"; ?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Penyakit Yang pernah di derita </td>
      <td <? if($wrna1==7)echo"bgcolor='#FF0000'"; ?>><input name="penyakit" type="text" size="35" value="<? echo"$tp[penyakit]"; ?>" /></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Telpon / Hp </td>
      <td bgcolor="#ACD75E" <? if($wrna1==7)echo"bgcolor='#FF0000'"; ?>><input name="tlp_st" type="text" size="35" value="<? echo"$tp[telpon]"; ?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Alamat Rumah (lengkap) </td>
      <td <? if($wrna1==7)echo"bgcolor='#FF0000'"; ?>><input name="almt_st" type="text" size="111" value="<? echo"$tp[alamat]"; ?>" /></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Kota</td>
      <td bgcolor="#ACD75E" <? if($wrna1==7)echo"bgcolor='#FF0000'"; ?>><input name="kota_st" type="text" size="35" value="<? echo"$tp[kota]"; ?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="left">Propinsi</div></td>
      <td <? if($wrna1==7)echo"bgcolor='#FF0000'"; ?>><input name="pro_st" type="text" value="<? echo"$tp[propinsi]"; ?>" size="35"/></td>
    </tr>
    <tr> 
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E"><div align="left">Kode Pos </div></td>
      <td bgcolor="#ACD75E" <? if($wrna1==7)echo"bgcolor='#FF0000'"; ?>><input name="pos_st" type="text" value="<? echo"$tp[pos]"; ?>" size="35"/></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>E-mail</td>
      <td <? if($wrna1==8)echo"bgcolor='#FF0000'"; ?>><input name="mail_st" type="text" value="<? echo"$tp[email]"; ?>" size="35"/></td>
    </tr>
    <tr> 
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Asal Sekolah </td>
      <td bgcolor="#ACD75E" <? if($wrna1==9)echo"bgcolor='#FF0000'"; ?>><input name="asl_skl" type="text" size="50" value="<? echo $tp['asal_sekolah']; ?>" /></td>
    </tr>
    <tr> 
      <td valign="top">&nbsp;</td>
      <td height="22" valign="top">Alamat Sekolah </td>
      <td valign="top" <? if($wrna1==10)echo"bgcolor='#FF0000'"; ?>><div align="left">
        <input name="almt_skla" type="text" size="50" value="<? echo $tp['asl_skl']; ?>" />
      </div></td>
    </tr>
    
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
    </tr>
    
    <tr> 
      <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
      <td colspan="2" bgcolor="#FFFFFF"><strong><img src="images/btn1.gif" width="12" height="13" /> 
        &nbsp;History Santri </strong></td>
    </tr>
    <tr> 
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E"><div align="left">Tanggal Masuk </div></td>
      <td bgcolor="#ACD75E"><div align="left"> 
          <select name="tglm">
            <option>-</option>
            <? for($i=1;$i<=31;$i++){ ?>
            <option <? if($tp['tgl_masuk']=="$i"){ ?>selected="selected" <? } ?> value="<? echo $i; ?>"><? echo $i; ?></option>
            <? } ?>
          </select>
          <select name="blnm">
            <option>-</option>
            <option <? if($tp['bln_masuk']=="Januari"){ ?>selected="selected" <? } ?> value="Januari">Januari</option>
            <option <? if($tp['bln_masuk']=="Februari"){ ?>selected="selected" <? } ?> value="Februari">Februari</option>
            <option <? if($tp['bln_masuk']=="Maret"){ ?>selected="selected" <? } ?>value="Maret">Maret</option>
            <option <? if($tp['bln_masuk']=="April"){ ?>selected="selected" <? } ?>value="April">April</option>
            <option <? if($tp['bln_masuk']=="Mei"){ ?>selected="selected" <? } ?>value="Mei">Mei</option>
            <option <? if($tp['bln_masuk']=="Juni"){ ?>selected="selected" <? } ?>value="Juni">Juni</option>
            <option <? if($tp['bln_masuk']=="Juli"){ ?>selected="selected" <? } ?>value="Juli">Juli</option>
            <option <? if($tp['bln_masuk']=="Agustus"){ ?>selected="selected" <? } ?>value="Agustus">Agustus</option>
            <option <? if($tp['bln_masuk']=="September"){ ?>selected="selected" <? } ?>value="September">September</option>
            <option <? if($tp['bln_masuk']=="Oktober"){ ?>selected="selected" <? } ?>value="Oktober">Oktober</option>
            <option <? if($tp['bln_masuk']=="November"){ ?>selected="selected" <? } ?>value="November">November</option>
            <option <? if($tp['bln_masuk']=="Desember"){ ?>selected="selected" <? } ?>value="Desember">Desember</option>
          </select>
          <select name="thnm">
            <option>-</option>
            <? for($b=5;$b>=0;$b--){ 
		     $tthn=date("Y")-$b;
		  ?>
            <option <? if($tp['thn_masuk']=="$tthn"){ ?>selected="selected" <? } ?> value="<? echo date("Y")-$b; ?>"><? echo date("Y")-$b; ?></option>
            <? } ?>
          </select>
        </div></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><div align="left">Tanggal Keluar </div></td>
      <td><div align="left"> 
          <select name="tglk">
            <option>-</option>
            <? for($i=1;$i<=31;$i++){ ?>
            <option <? if($tp['tgl_keluar']=="$i"){ ?>selected="selected" <? } ?> value="<? echo $i; ?>"><? echo $i; ?></option>
            <? } ?>
          </select>
          <select name="blnk">
            <option>-</option>
            <option <? if($tp['bln_keluar']=="Januari"){ ?>selected="selected" <? } ?> value="Januari">Januari</option>
            <option <? if($tp['bln_keluar']=="Februari"){ ?>selected="selected" <? } ?> value="Februari">Februari</option>
            <option <? if($tp['bln_keluar']=="Maret"){ ?>selected="selected" <? } ?>value="Maret">Maret</option>
            <option <? if($tp['bln_keluar']=="April"){ ?>selected="selected" <? } ?>value="April">April</option>
            <option <? if($tp['bln_keluar']=="Mei"){ ?>selected="selected" <? } ?>value="Mei">Mei</option>
            <option <? if($tp['bln_keluar']=="Juni"){ ?>selected="selected" <? } ?>value="Juni">Juni</option>
            <option <? if($tp['bln_keluar']=="Juli"){ ?>selected="selected" <? } ?>value="Juli">Juli</option>
            <option <? if($tp['bln_keluar']=="Agustus"){ ?>selected="selected" <? } ?>value="Agustus">Agustus</option>
            <option <? if($tp['bln_keluar']=="September"){ ?>selected="selected" <? } ?>value="September">September</option>
            <option <? if($tp['bln_keluar']=="Oktober"){ ?>selected="selected" <? } ?>value="Oktober">Oktober</option>
            <option <? if($tp['bln_keluar']=="November"){ ?>selected="selected" <? } ?>value="November">November</option>
            <option <? if($tp['bln_keluar']=="Desember"){ ?>selected="selected" <? } ?>value="Desember">Desember</option>
          </select>
          <select name="thnk">
            <option>-</option>
            <? for($b=5;$b>=0;$b--){ 
		     $tthn=date("Y")-$b;
		  ?>
            <option <? if($tp['thn_keluar']=="$tthn"){ ?>selected="selected" <? } ?> value="<? echo date("Y")-$b; ?>"><? echo date("Y")-$b; ?></option>
            <? } ?>
          </select>
        </div></td>
    </tr>
    <tr> 
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E"><div align="left">Tahun Ajaran Masuk </div></td>
      <td bgcolor="#ACD75E"><div align="left"> 
          <select name="thnajr">
            <option value="<? echo $tp['thn_ajaranmsk']; ?>"><? echo $tp['thn_ajaranmsk']; ?></option>
            <option>-</option>
            <? for($b=-5;$b<=5;$b++){ $th2=(date("Y")+$b)+1;?>
            <option value="<? echo date("Y")+$b."/".$th2; ?>"><? echo date("Y")+$b."/".$th2; ?></option>
            <? } ?>
          </select>
          Tahun Ajaran Tamat 
          <select name="tat">
            <option value="<? echo $tp['ta_tamat']; ?>"><? echo $tp['ta_tamat']; ?></option>
            <option>-</option>
            <? for($b=-5;$b<=5;$b++){ $th2=(date("Y")+$b)+1;?>
            <option value="<? echo date("Y")+$b."/".$th2; ?>"><? echo date("Y")+$b."/".$th2; ?></option>
            <? } ?>
          </select>
        </div></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><div align="left">Pindahan Dari (khusus pindahan) </div></td>
      <td><div align="left"> 
          <input name="sekolah_asal_p" type="text" value="<? echo"$tp[pindahan]"; ?>" size="50"/>
        Alsan Pindah 
        <input name="alsn_pindah" type="text" size="60" value="<? echo"$tp[alasan_pindah]"; ?>" />
      </div></td>
    </tr>
    <tr> 
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E"><div align="left">Melanjutkan</div></td>
      <td bgcolor="#ACD75E"><div align="left">
        <input name="lanjut" type="text" value="<? echo"$tp[lanjut_ke]"; ?>" size="50"/>
      </div></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>Tidak Melanjutkan/Kerja di </td>
      <td><div align="left">
        <input name="krjdi" type="text" value="<? echo"$tp[kerja]"; ?>" size="50"/>
      </div></td>
    </tr>
    <tr> 
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E"><div align="left">
        <div align="left">Catatan</div>
      </div></td>
      <td bgcolor="#ACD75E"><div align="left">
        <textarea name="catatan" cols="35" rows="5"><? echo"$tp[note]"; ?></textarea>
      </div></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td valign="top">&nbsp;</td>
      <td><div align="left"></div></td>
    </tr>
    <tr> 
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
    </tr>
    <tr> 
      <td height="33" bgcolor="#FFFFFF">&nbsp;</td>
      <td colspan="2" bgcolor="#FFFFFF"><strong><img src="images/btn1.gif" width="12" height="13" /> 
        &nbsp;Data Orang Tua</strong></td>
    </tr>
    <tr> 
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>Nama Ayah </td>
      <td><input name="nmort" type="text" value="<? echo"$tp[nama_ort]"; ?>" size="40"/></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Nama Ibu </td>
      <td bgcolor="#ACD75E"><input name="nm_ibu" type="text" size="40" value="<? echo"$tp[nama_ibu]"; ?>" /></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>Pendidikan Ayah </td>
      <td><select name="pd_ayah">
        <option value="SD" <? if($tp['p_ayah']=='SD'){ echo"selected='selected'"; }?>>SD</option>
        <option value="SMP" <? if($tp['p_ayah']=='SMP'){ echo"selected='selected'"; }?>>SMP</option>
        <option value="SMA" <? if($tp['p_ayah']=='SMA'){ echo"selected='selected'"; }?>>SMA</option>
        <option value="D1" <? if($tp['p_ayah']=='D1'){ echo"selected='selected'"; }?>>D1</option>
        <option value="D2" <? if($tp['p_ayah']=='D2'){ echo"selected='selected'"; }?>>D2</option>
        <option value="D3" <? if($tp['p_ayah']=='D3'){ echo"selected='selected'"; }?>>D3</option>
        <option value="S1" <? if($tp['p_ayah']=='S1'){ echo"selected='selected'"; }?>>S1</option>
        <option value="S2" <? if($tp['p_ayah']=='S2'){ echo"selected='selected'"; }?>>S2</option>
        <option value="S3" <? if($tp['p_ayah']=='S3'){ echo"selected='selected'"; }?>>S3</option>
        <option value="Prof" <? if($tp['p_ayah']=='Prof'){ echo"selected='selected'"; }?>>Prof</option>
      </select></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Pendidikan Ibu </td>
      <td bgcolor="#ACD75E"><select name="pd_ibu">
        <option value="SD" <? if($tp['p_ibu']=='SD'){ echo"selected='selected'"; }?>>SD</option>
        <option value="SMP" <? if($tp['p_ibu']=='SMP'){ echo"selected='selected'"; }?>>SMP</option>
        <option value="SMA" <? if($tp['p_ibu']=='SMA'){ echo"selected='selected'"; }?>>SMA</option>
        <option value="D1" <? if($tp['p_ibu']=='D1'){ echo"selected='selected'"; }?>>D1</option>
        <option value="D2" <? if($tp['p_ibu']=='D2'){ echo"selected='selected'"; }?>>D2</option>
        <option value="D3" <? if($tp['p_ibu']=='D3'){ echo"selected='selected'"; }?>>D3</option>
        <option value="S1" <? if($tp['p_ibu']=='S1'){ echo"selected='selected'"; }?>>S1</option>
        <option value="S2" <? if($tp['p_ibu']=='S2'){ echo"selected='selected'"; }?>>S2</option>
        <option value="S3" <? if($tp['p_ibu']=='S3'){ echo"selected='selected'"; }?>>S3</option>
        <option value="Prof" <? if($tp['p_ibu']=='Prof'){ echo"selected='selected'"; }?>>Prof</option>
      </select></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Pekerjaan Ayah </td>
      <td><input name="krjort" type="text" value="<? echo"$tp[pekerjaan_ayah]"; ?>" size="60"/></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Pekerjaan Ibu </td>
      <td bgcolor="#ACD75E"><input name="krj_ibu" type="text" size="60" value="<? echo"$tp[pekerjaan_ibu]"; ?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Suku</td>
      <td><input name="suku_ayah" type="text" size="35" value="<? echo"$tp[suku]"; ?>" /></td>
    </tr>
    <tr> 
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Alamat Tempat Tinggal </td>
      <td bgcolor="#ACD75E"><input name="almtort" type="text" value="<? echo"$tp[alamat_ort]"; ?>" size="111"/></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>Telpon / Hp Ayah </td>
      <td><input name="tlp_ayah" type="text" value="<? echo"$tp[tlp_ayah]"; ?>" size="35"/></td>
    </tr>
    <tr> 
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Telpon / Hp Ibu </td>
      <td bgcolor="#ACD75E"><input name="tlp_ibu" type="text" size="35" value="<? echo"$tp[tlp_ibu]"; ?>" /></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>Penghasilan Ayah </td>
      <td><select name="phasil_ayah">
        <option value="< Rp. 1.000.000" <? if($tp['phasil_ayah']=='< Rp. 1.000.000'){ echo"selected='selected'"; }?>> < Rp. 1.000.000</option>
        <option value="Rp. 1.000.000" <? if($tp['phasil_ayah']=='Rp. 1.000.000'){ echo"selected='selected'"; }?>>Rp. 1.000.000</option>
        <option value="Rp. 2.000.000" <? if($tp['phasil_ayah']=='Rp. 2.000.000'){ echo"selected='selected'"; }?>>Rp. 2.000.000</option>
        <option value="Rp. 3.000.000" <? if($tp['phasil_ayah']=='Rp. 3.000.000'){ echo"selected='selected'"; }?>>Rp. 3.000.000</option>
        <option value="Rp. 4.000.000" <? if($tp['phasil_ayah']=='Rp. 4.000.000'){ echo"selected='selected'"; }?>>Rp. 4.000.000</option>
        <option value="Rp. 5.000.000" <? if($tp['phasil_ayah']=='Rp. 5.000.000'){ echo"selected='selected'"; }?>>Rp. 5.000.000</option>
        <option value="Rp. 6.000.000" <? if($tp['phasil_ayah']=='Rp. 6.000.000'){ echo"selected='selected'"; }?>>Rp. 6.000.000</option>
        <option value="Rp. 7.000.000" <? if($tp['phasil_ayah']=='Rp. 7.000.000'){ echo"selected='selected'"; }?>>Rp. 7.000.000</option>
        <option value="Rp. 8.000.000" <? if($tp['phasil_ayah']=='Rp. 8.000.000'){ echo"selected='selected'"; }?>>Rp. 8.000.000</option>
        <option value="Rp. 9.000.000" <? if($tp['phasil_ayah']=='Rp. 9.000.000'){ echo"selected='selected'"; }?>>Rp. 9.000.000</option>
        <option value="Rp. 10.000.000" <? if($tp['phasil_ayah']=='Rp. 10.000.000'){ echo"selected='selected'"; }?>>Rp. 10.000.000</option>
        <option value="> Rp. 10.000.000" <? if($tp['phasil_ayah']=='> Rp. 10.000.000'){ echo"selected='selected'"; }?>> > Rp. 10.000.000</option>
      </select></td>
    </tr>
    <tr> 
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Penghasilan Ibu </td>
      <td bgcolor="#ACD75E"><select name="phasil_ibu">
         <option value="< Rp. 1.000.000" <? if($tp['phasil_ibu']=='< Rp. 1.000.000'){ echo"selected='selected'"; }?>> < Rp. 1.000.000</option>
        <option value="Rp. 1.000.000" <? if($tp['phasil_ibu']=='Rp. 1.000.000'){ echo"selected='selected'"; }?>>Rp. 1.000.000</option>
        <option value="Rp. 2.000.000" <? if($tp['phasil_ibu']=='Rp. 2.000.000'){ echo"selected='selected'"; }?>>Rp. 2.000.000</option>
        <option value="Rp. 3.000.000" <? if($tp['phasil_ibu']=='Rp. 3.000.000'){ echo"selected='selected'"; }?>>Rp. 3.000.000</option>
        <option value="Rp. 4.000.000" <? if($tp['phasil_ibu']=='Rp. 4.000.000'){ echo"selected='selected'"; }?>>Rp. 4.000.000</option>
        <option value="Rp. 5.000.000" <? if($tp['phasil_ibu']=='Rp. 5.000.000'){ echo"selected='selected'"; }?>>Rp. 5.000.000</option>
        <option value="Rp. 6.000.000" <? if($tp['phasil_ibu']=='Rp. 6.000.000'){ echo"selected='selected'"; }?>>Rp. 6.000.000</option>
        <option value="Rp. 7.000.000" <? if($tp['phasil_ibu']=='Rp. 7.000.000'){ echo"selected='selected'"; }?>>Rp. 7.000.000</option>
        <option value="Rp. 8.000.000" <? if($tp['phasil_ibu']=='Rp. 8.000.000'){ echo"selected='selected'"; }?>>Rp. 8.000.000</option>
        <option value="Rp. 9.000.000" <? if($tp['phasil_ibu']=='Rp. 9.000.000'){ echo"selected='selected'"; }?>>Rp. 9.000.000</option>
        <option value="Rp. 10.000.000" <? if($tp['phasil_ibu']=='Rp. 10.000.000'){ echo"selected='selected'"; }?>>Rp. 10.000.000</option>
        <option value="> Rp. 10.000.000" <? if($tp['phasil_ibu']=='> Rp. 10.000.000'){ echo"selected='selected'"; }?>> &gt; Rp. 10.000.000</option>
      </select></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>E-mail Ayah </td>
      <td><input name="mailort" type="text" value="<? echo"$tp[mail_ort]"; ?>" size="35"/></td>
    </tr>
    
    <tr> 
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
    </tr>
    
    
    
    
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="32">&nbsp;</td>
      <td><strong><img src="images/btn1.gif" width="12" height="13" /> &nbsp;Data Orang Tua/Wali Santri </strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Nama Wali</td>
      <td bgcolor="#ACD75E"><input name="nm_ayah_tri" type="text" size="60" value="<? echo"$tp[nm_wali]"; ?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Alamat Wali </td>
      <td><input name="nm_ibu_tri" type="text" size="60" value="<? echo"$tp[alamat_wali]"; ?>" /></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Pekerjaan Wali </td>
      <td bgcolor="#ACD75E"><input name="pkerja_wali" type="text" size="60" value="<? echo"$tp[pkerja_wali]"; ?>" /></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="rubah" value="Simpan" /></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><div align="left"></div></td>
      <td><div align="left"></div></td>
    </tr>
  </table>
</form>

</body>
</html>
