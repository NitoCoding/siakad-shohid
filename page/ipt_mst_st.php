<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
</head>
<script language="JavaScript" type="text/javascript">
function cek(){
  if(form1.nis.value=='') { 
    form1.nis.focus;
	return;
  }
}
function ksong() { 
  if(isNaN(form1.nis.value)) { form1.nis.value='';  }	
}


</script>

<? 
if($nis!=""){ ?>
<script type="text/javascript">
window.history.go(-2);
</script>
<? 
 } 
  $psn=$_GET['psn'];
?> 
<body>
<form id="form1" name="form1" enctype="multipart/form-data" method="post" action="page/act_dt_st.php">
  <table width="100%" border="0" cellspacing="2" cellpadding="2">
    
    <tr>
      <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
      <td colspan="2" bgcolor="#FFFFFF"><strong><img src="images/btn1.gif" width="12" height="13" />&nbsp; Data Pribadi </strong></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
    </tr>
    <tr>
      <td width="1%" bgcolor="#ACD75E">&nbsp;</td>
      <td width="24%" bgcolor="#ACD75E">Status Santri </td>
      <td width="75%" bgcolor="#ACD75E"><select name="stas">
        <option>-</option>
        <option value="a">Aktif</option>
        <option value="p">Pindahan</option>
        <option value="d">Pindah Sekolah</option>
        <option value="l">Alumni</option>
      </select> 
        <span class="style1">Wajib di isi </span></td>
    </tr>
    
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">NIS Nasional </td>
      <td bgcolor="#DCF3AF" <? if($wrna1==1)echo"bgcolor='#FF0000'"; ?>><label>
        <input name="nn" type="text" size="35" />
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Nomor Peserta Ujian SD </td>
      <td bgcolor="#ACD75E" <? if($wrna1==1)echo"bgcolor='#FF0000'"; ?>><input name="nopessd" type="text" size="35" /></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">Nomor Peserta Ujian SMP </td>
      <td bgcolor="#DCF3AF" <? if($wrna1==1)echo"bgcolor='#FF0000'"; ?>><label>
        <input name="nopes" type="text" size="35" />
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Tahun SKHU</td>
      <td bgcolor="#ACD75E" <? if($wrna1==1)echo"bgcolor='#FF0000'"; ?>><input name="thn_skhun" type="text" size="35" /></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">Nomor SKHUN </td>
      <td bgcolor="#DCF3AF" <? if($wrna1==1)echo"bgcolor='#FF0000'"; ?>><input name="nomor_skhun" type="text" size="35" /></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E" <? if($wrna1==1)echo"bgcolor='#FF0000'"; ?>>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF"><div align="left">NIS Sekolah </div></td>
      <td bgcolor="#DCF3AF" <? if($wrna1==1)echo"bgcolor='#FF0000'"; ?>><div align="left">
        <input name="nis" type="text" size="35" onKeyUp="return ksong();" />
      <? if($nis=="p"){ echo "$nis"."NIS ini Telah digunakan Ustad..."; }  ?>  
        <span class="style1">Wajib di isi <? if($psn=='1'){ echo " -> (NIS Sekolah Telah di Gunakan, GANTI!!!)"; } ?></span></div></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E"><div align="left">Nama </div></td>
      <td bgcolor="#ACD75E" <? if($wrna1==2)echo"bgcolor='#FF0000'"; ?>><div align="left">
        <label></label>
        <input name="namast" type="text" size="35" />
        <span class="style1">Wajib di isi</span></div></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">Foto</td>
      <td bgcolor="#DCF3AF" <? if($wrna1==5)echo"bgcolor='#FF0000'"; ?>><input name="foto" type="file" size="35" /></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E"><div align="left">Jenis Kelamin </div></td>
      <td bgcolor="#ACD75E" <? if($wrna1==5)echo"bgcolor='#FF0000'"; ?>><div align="left">
        <select name="jkl_st">
		<option>-</option>
          <option value="l">Laki-laki</option>
          <option value="p">Perempuan</option>
        </select>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF"><div align="left">Tempat Tanggal Lahir </div></td>
      <td bgcolor="#DCF3AF" <? if($wrna3==1)echo"bgcolor='#FF0000'"; ?>><div align="left">
        <input name="tmpl_st" type="text" size="35" />
        <select name="tgl_st">
          <option>-</option>
          <? for($i=1;$i<=31;$i++){ ?>
          <option value="<? echo $i; ?>"><? echo $i; ?></option>
          <? } ?>
        </select>
        <select name="bln_st">
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
        <select name="thn_st">
          <option>-</option>
          <? for($b=-18;$b<=1;$b++){ ?>
          <option value="<? echo date("Y")+$b; ?>"><? echo date("Y")+$b; ?></option>
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
          <option value="i">Islam</option>
          <option value="k">Kristen</option>
          <option value="h">Hindu</option>
          <option value="b">Budha</option>
        </select>
        </div></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">Kesukuan</td>
      <td bgcolor="#DCF3AF" <? if($wrna1==7)echo"bgcolor='#FF0000'"; ?>><input name="suku" type="text" size="35" /></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Anak Ke </td>
      <td bgcolor="#ACD75E" <? if($wrna1==7)echo"bgcolor='#FF0000'"; ?>><select name="anak_k">
        <option value="">Pilih</option>
		<option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
      </select>      </td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">Berat / Tinggi Badan </td>
      <td bgcolor="#DCF3AF" <? if($wrna1==7)echo"bgcolor='#FF0000'"; ?>><input name="berat" type="text" size="7" maxlength="3" /> 
        Kg / 
        <input name="tinggi" type="text" size="7" maxlength="3" /> 
        CM </td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Golongan Darah </td>
      <td bgcolor="#ACD75E" <? if($wrna1==7)echo"bgcolor='#FF0000'"; ?>><select name="gol_d">
        <option value=" ">Pilih</option>
		<option value="A">A</option>
        <option value="B">B</option>
        <option value="O">O</option>
        <option value="AB">AB</option>
      </select>      </td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">Warna Kulit </td>
      <td bgcolor="#DCF3AF" <? if($wrna1==7)echo"bgcolor='#FF0000'"; ?>><select name="w_kulit">
        <option value=" ">Pilih</option>
	    <option value="Putih">Putih</option>
        <option value="Hitam">Hitam</option>
        <option value="Sawo Matang">Sawo Matang</option>
      </select>      </td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Hobby</td>
      <td bgcolor="#ACD75E" <? if($wrna1==7)echo"bgcolor='#FF0000'"; ?>><input name="hoby" type="text" size="60" /></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Penyakit Yg Pernah diderita </td>
      <td bgcolor="#ACD75E" <? if($wrna1==7)echo"bgcolor='#FF0000'"; ?>><input name="penyakit" type="text" size="60" /></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF"><div align="left">Telpon / Hp </div></td>
      <td bgcolor="#DCF3AF" <? if($wrna1==7)echo"bgcolor='#FF0000'"; ?>><div align="left">
        <input name="tlp_st" type="text" size="60" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E"><div align="left">Alamat Rumah (lengkap) </div></td>
      <td bgcolor="#ACD75E" <? if($wrna1==8)echo"bgcolor='#FF0000'"; ?>><div align="left">
        <input name="almt_st" type="text" size="60" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF"><div align="left">Kota</div></td>
      <td bgcolor="#DCF3AF" <? if($wrna1==9)echo"bgcolor='#FF0000'"; ?>><div align="left">
        <input name="kota_st" type="text" size="60" />
      </div></td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#ACD75E">&nbsp;</td>
      <td height="22" valign="top" bgcolor="#ACD75E"><div align="left">Propinsi</div></td>
      <td valign="top" bgcolor="#ACD75E" <? if($wrna1==10)echo"bgcolor='#FF0000'"; ?>><div align="left">
        <input name="pro_st" type="text" size="60" />
      </div></td>
    </tr>
    <tr>
      <td height="22" bgcolor="#DCF3AF">&nbsp;</td>
      <td valign="top" bgcolor="#DCF3AF"><div align="left">Kode Pos </div></td>
      <td valign="top" bgcolor="#DCF3AF" <? if($wrna1==11)echo"bgcolor='#FF0000'"; ?>><div align="left">
        <input name="pos_st" type="text" size="60" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">E-mail</td>
      <td bgcolor="#ACD75E"><input name="mail_st" type="text" size="60" /></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">Asal Sekolah </td>
      <td bgcolor="#DCF3AF"><input name="asl_skl" type="text" size="60" /></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E"><div align="left">Alamat Sekolah </div></td>
      <td bgcolor="#ACD75E"><div align="left">
        <label></label>
        <input name="almt_skla" type="text" size="60" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td colspan="2" bgcolor="#ACD75E">&nbsp;</td>
    </tr>
    
    <tr>
      <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
      <td colspan="2" bgcolor="#FFFFFF"><strong><img src="images/btn1.gif" width="12" height="13" /> History Santri </strong></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF"><div align="left">Tanggal Masuk </div></td>
      <td bgcolor="#DCF3AF"><div align="left">
        <select name="tglm">
          <option>-</option>
          <? for($i=1;$i<=31;$i++){ ?>
          <option value="<? echo $i; ?>"><? echo $i; ?></option>
          <? } ?>
        </select>
        <select name="blnm">
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
        <select name="thnm">
          <option>-</option>
          <? for($b=-4;$b<=5;$b++){ ?>
          <option value="<? echo date("Y")+$b; ?>"><? echo date("Y")+$b; ?></option>
          <? } ?>
        </select>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E"><div align="left">Tanggal Keluar </div></td>
      <td bgcolor="#ACD75E"><div align="left">
        <select name="tglk">
          <option>-</option>
          <? for($i=1;$i<=31;$i++){ ?>
          <option value="<? echo $i; ?>"><? echo $i; ?></option>
          <? } ?>
        </select>
        <select name="blnk">
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
        <select name="thnk">
          <option>-</option>
           <? for($b=-4;$b<=5;$b++){ ?>
          <option value="<? echo date("Y")+$b; ?>"><? echo date("Y")+$b; ?></option>
          <? } ?>
        </select>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF"><div align="left">Tahun Ajaran Masuk </div></td>
      <td bgcolor="#DCF3AF"><div align="left">
        <select name="thnajr">
		   <option>-</option>
          <? for($b=-5;$b<=5;$b++){ $th2=(date("Y")+$b)+1;?>
          <option value="<? echo date("Y")+$b."/".$th2; ?>"><? echo date("Y")+$b."/".$th2; ?></option>
          <? } ?>
        </select>
          Tahun Ajaran Tamat 
          <select name="tat">
		  <option>Pilih</option>
            <? for($b=-5;$b<=5;$b++){ $th2=(date("Y")+$b)+1;?>
            <option value="<? echo date("Y")+$b."/".$th2; ?>"><? echo date("Y")+$b."/".$th2; ?></option>
            <? } ?>
          </select>
        </div></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E"><div align="left">Pindahan Dari (khusus pindahan) </div></td>
      <td bgcolor="#ACD75E"><div align="left">
        <input name="sekolah_asal_p" type="text" size="40" />
      Alsan Pindah 
      <input name="alsn_pindah" type="text" size="60" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF"><div align="left">
        <div align="left">Melanjutkan</div>
      </div></td>
      <td bgcolor="#DCF3AF"><div align="left">
        <input name="lanjut" type="text" size="55" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E"><div align="left">Tidak Melanjutkan / Kerja di </div></td>
      <td bgcolor="#ACD75E"><div align="left">
        <input name="krjdi" type="text" size="55" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF"><div align="left">Catatan</div></td>
      <td bgcolor="#DCF3AF"><div align="left">
        <textarea name="catatan" cols="35" rows="5"></textarea>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td valign="top" bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E"><div align="left"></div></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
    </tr>
    <tr>
      <td height="31" bgcolor="#FFFFFF">&nbsp;</td>
      <td colspan="2" bgcolor="#FFFFFF"><strong><img src="images/btn1.gif" width="12" height="13" /> Data Orang Tua</strong></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Nama Ayah </td>
      <td bgcolor="#ACD75E"><input name="nmort" type="text" size="35" /></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">Nama Ibu </td>
      <td bgcolor="#DCF3AF"><input name="nm_ibu" type="text" size="35" /></td>
    </tr>
    
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Pendidikan Ayah </td>
      <td bgcolor="#ACD75E"><select name="pd_ayah">
        <option>-</option>
		<option value="SD">SD</option>
        <option value="SMP">SMP</option>
        <option value="SMA">SMA</option>
        <option value="D1">D1</option>
        <option value="D2">D2</option>
        <option value="D3">D3</option>
        <option value="S1">S1</option>
        <option value="S2">S2</option>
        <option value="S3">S3</option>
        <option value="Prof">Prof</option>
      </select>      </td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">Pendidikan Ibu </td>
      <td bgcolor="#DCF3AF"><select name="pd_ibu">
        <option>-</option>	  
        <option value="SD">SD</option>
        <option value="SMP">SMP</option>
        <option value="SMA">SMA</option>
        <option value="D1">D1</option>
        <option value="D2">D2</option>
        <option value="D3">D3</option>
        <option value="S1">S1</option>
        <option value="S2">S2</option>
        <option value="S3">S3</option>
        <option value="Prof">Prof</option>
      </select></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Pekerjaan Ayah </td>
      <td bgcolor="#ACD75E"><input name="krjort" type="text" size="60" /></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">Pekerjaan Ibu </td>
      <td bgcolor="#DCF3AF"><input name="krj_ibu" type="text" size="60" /></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Suku/Marga</td>
      <td bgcolor="#ACD75E"><input name="suku_ayah" type="text" size="60" /></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">Alamat Tempat Tinggal </td>
      <td bgcolor="#DCF3AF"><input name="almtort" type="text" size="111" /></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Telpon / Hp Ayah </td>
      <td bgcolor="#ACD75E"><input name="tlp_ayah" type="text" size="60" /></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">Telpon / Hp Ibu </td>
      <td bgcolor="#DCF3AF"><input name="tlp_ibu" type="text" size="60" /></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Penghasilan Ayah </td>
      <td bgcolor="#ACD75E"><select name="phasil_ayah">
	    <option>-</option>
        <option value="< Rp. 1.000.000">< Rp. 1.000.000</option>
        <option value="Rp. 1.000.000">Rp. 1.000.000</option>
        <option value="Rp. 2.000.000">Rp. 2.000.000</option>
        <option value="Rp. 3.000.000">Rp. 3.000.000</option>
        <option value="Rp. 4.000.000">Rp. 4.000.000</option>
        <option value="Rp. 5.000.000">Rp. 5.000.000</option>
        <option value="Rp. 6.000.000">Rp. 6.000.000</option>
        <option value="Rp. 7.000.000">Rp. 7.000.000</option>
        <option value="Rp. 8.000.000">Rp. 8.000.000</option>
        <option value="Rp. 9.000.000">Rp. 9.000.000</option>
        <option value="Rp. 10.000.000">Rp. 10.000.000</option>
        <option value="> Rp. 10.000.000"> > Rp. 10.000.000</option>
      </select></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">Penghasilan Ibu </td>
      <td bgcolor="#DCF3AF"><select name="phasil_ibu">
	    <option>-</option>
        <option value="< Rp. 1.000.000">< Rp. 1.000.000</option>
        <option value="Rp. 1.000.000">Rp. 1.000.000</option>
        <option value="Rp. 2.000.000">Rp. 2.000.000</option>
        <option value="Rp. 3.000.000">Rp. 3.000.000</option>
        <option value="Rp. 4.000.000">Rp. 4.000.000</option>
        <option value="Rp. 5.000.000">Rp. 5.000.000</option>
        <option value="Rp. 6.000.000">Rp. 6.000.000</option>
        <option value="Rp. 7.000.000">Rp. 7.000.000</option>
        <option value="Rp. 8.000.000">Rp. 8.000.000</option>
        <option value="Rp. 9.000.000">Rp. 9.000.000</option>
        <option value="Rp. 10.000.000">Rp. 10.000.000</option>
        <option value="> Rp. 10.000.000"> > Rp. 10.000.000</option>
      </select></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">E-mail Ayah </td>
      <td bgcolor="#ACD75E"><input name="mailort" type="text" size="60" /></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
    </tr>
    <tr>
      <td height="32">&nbsp;</td>
      <td><strong><img src="images/btn1.gif" width="12" height="13" /> Data Wali Santri </strong></td>
      <td><label></label></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td valign="top" bgcolor="#ACD75E">Nama Wali</td>
      <td bgcolor="#ACD75E"><input name="nm_ayah_tri" type="text" size="60" /></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">Alamat Wali </td>
      <td bgcolor="#DCF3AF"><input name="nm_ibu_tri" type="text" size="60" /></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Pekerjaan Wali </td>
      <td bgcolor="#ACD75E"><input name="pkerja_wali" type="text" size="60" /></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
    </tr>
    
    
    
    
    <tr>
      <td height="34" colspan="2" bgcolor="#996600">&nbsp;</td>
      <td bgcolor="#996600"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="19%"><input type="submit" name="rekam" value="Simpan Data Santri" onclick="cek();" /></td>
            <td width="22%"><a href="page/report_formulir.php" target="_blank">Cetak Formulir</a> </td>
            <td width="59%"><a href="page/daftar_pendaftar.php" target="_blank"></a></td>
          </tr>
        </table></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" bgcolor="#B3CF70"><div align="left"></div>
        <div align="left"></div></td>
    </tr>
  </table>
</form>

</body>
</html>
