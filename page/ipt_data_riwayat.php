<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="JavaScript" type="text/javascript">
function konfirmasi(pesan) { 
  var is_confirmed=confirm(pesan);      
  if(!is_confirmed){    
   return false;
	}	
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
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
      
 	 $idk_dst=$_GET['idk_dst'];   
     $tampil=mysqli_query($koneksi, "SELECT * FROM tb_santri WHERE id_santri='$idk_dst' ");
     $tp=mysqli_fetch_assoc($tampil); 
	 
	 
?>

<body>
<table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td height="134" bgcolor="#FFFFFF">&nbsp;</td>
    <td colspan="2" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="86%" valign="top" bgcolor="#ACD75E"><table width="100%" border="0" cellspacing="0" cellpadding="2">
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
        <td width="14%" valign="top" bgcolor="#ACD75E"><img src="foto_santri/<? echo $tp['foto_st']; ?>" width="104" height="130" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="1%" height="32">&nbsp;</td>
    <td colspan="2"><strong><img src="images/btn1.gif" width="12" height="13" />&nbsp; Riwayat Kelas </strong></td>
  </tr>
  <tr>
    <td height="101" bgcolor="#ACD75E">&nbsp;</td>
    <td colspan="2" bgcolor="#ACD75E"><form id="form1" name="form1" method="post" action="page/act_dt_riwayat.php">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="42">&nbsp;</td>
          <td width="293">&nbsp;</td>
          <td width="945"><input type="hidden" name="id_s1" value="<? echo $tp['id_santri']; ?>" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Tahun Pelajaran </td>
          <td><select name="thn_p">
            <? for($b=-3;$b<=3;$b++){ $th2=(date("Y")+$b)+1;?>
            <option value="<? echo date("Y")+$b."/".$th2; ?>"><? echo date("Y")+$b."/".$th2; ?></option>
            <? } ?>
          </select></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Kelas</td>
          <td><select name="kelas">
            <option>-</option>
            <?
	      $tampi3=mysqli_query($koneksi, "SELECT * FROM master_kelas ");
          while($tp3=mysqli_fetch_assoc($tampi3)){
	    ?>
            <option value="<? echo $tp3['kelas']; ?>" <? if($kp['kd_kelas']=="$tp3[kd_kls]"){ echo"selected='selected'"; } ?>><? echo $tp3['kelas']; ?></option>
            <? } ?>
          </select></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="43">&nbsp;</td>
          <td>&nbsp;</td>
          <td valign="top"><table width="500" border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
            <tr>
              <td width="48" bgcolor="#669900"><div align="center" class="style1">NO</div></td>
              <td width="197" bgcolor="#669900"><div align="center" class="style1">KELAS</div></td>
              <td width="247" bgcolor="#669900"><div align="center" class="style1">TAHUN PELAJARAN </div></td>
            </tr>
			<? 
			$ktr=mysqli_query($koneksi, "SELECT * FROM riwayat_kelas WHERE id_santri='$idk_dst'");
            while($cktr=mysqli_fetch_assoc($ktr)){
			?>
            <tr>
              <td><div align="center"><a href="page/act_dt_riwayat.php?del=oke&idk=<? echo "$cktr[id_rk]&idk_dst=$idk_dst"; ?>" onclick="return konfirmasi('Yakin Data Akan Dihapus ?');"><? echo $cktr['id_rk']; ?></a></div></td>
              <td><div align="center"><? echo $cktr['kelas']; ?></div></td>
              <td><div align="center"><? echo $cktr['tahun_pelajaran']; ?></div></td>
            </tr>
			<? } ?>
            
          </table></td>
        </tr>
        <tr>
          <td height="29">&nbsp;</td>
          <td>&nbsp;</td>
          <td valign="bottom"><input type="submit" name="rekam1" value="Simpan" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </form>    </td>
  </tr>
  <tr>
    <td colspan="3" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="32">&nbsp;</td>
    <td colspan="2"><strong><img src="images/btn1.gif" width="12" height="13" />&nbsp; Riwayat Pendidikan </strong></td>
  </tr>
  <tr>
    <td bgcolor="#ACD75E">&nbsp;</td>
    <td colspan="2" bgcolor="#ACD75E"><form id="form2" name="form2" method="post" action="page/act_dt_riwayat.php">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="39">&nbsp;</td>
          <td width="293">&nbsp;</td>
          <td width="948"><input type="hidden" name="id_s2" value="<? echo $tp['id_santri']; ?>" /></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Jenjang Pendidikan </td>
          <td><select name="jenjang">
            <option value="-">-</option>
            <option value="TK">TK</option>
            <option value="SD">SD</option>
            <option value="SMP/Mts">SMP/Mts</option>
            <option value="SMA/MA">SMA/MA</option>
          </select></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Nama Sekolah </td>
          <td><input name="nama_sekolah" type="text" size="50" /></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Tahun Masuk </td>
          <td><input name="tahun_masuk" type="text" size="15" /></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Tahun Keluar </td>
          <td><input name="tahun_keluar" type="text" size="15" /></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Tinggal Kelas di </td>
          <td><input name="tinggal_kelas" type="text" size="15" /></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Lama Penyelesaian </td>
          <td><input name="lama" type="text" size="15" /></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>No. STTB/Ijazah </td>
          <td><input name="sttb" type="text" size="50" /></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Kelas dan tahun jika pernah pindah sekolah </td>
          <td><input name="pindah" type="text" size="50" /></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td colspan="2"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
            <tr>
              <td width="86" bgcolor="#669900"><div align="center" class="style1">JENJANG</div></td>
              <td width="407" bgcolor="#669900"><div align="center" class="style1">NAMA SEKOLAH </div></td>
              <td width="95" bgcolor="#669900"><div align="center" class="style1">THN. MASUK </div></td>
              <td width="90" bgcolor="#669900"><div align="center" class="style1">THN. KELUAR </div></td>
              <td width="97" bgcolor="#669900"><div align="center" class="style1">TNGL. KELAS DI </div></td>
              <td width="97" bgcolor="#669900"><div align="center"><span class="style1">LAMA SELESAI </span></div></td>
              <td width="156" bgcolor="#669900"><div align="center" class="style1">NO. IJAZAH </div></td>
              <td width="195" bgcolor="#669900"><div align="center" class="style1">KELAS &amp; TAHUN JIKA PINDAH </div></td>
            </tr>
            <? 
			$ktr=mysqli_query($koneksi, "SELECT * FROM riwayat_pendidikan WHERE id_santri='$idk_dst'");
            while($cktr=mysqli_fetch_assoc($ktr)){
			?>
            <tr>
              <td><div align="center"><a href="page/act_dt_riwayat.php?del2=oke&idk=<? echo "$cktr[id_rp]&idk_dst=$idk_dst"; ?>" onclick="return konfirmasi('Yakin Data Akan Dihapus ?');"><? echo $cktr['jenjang']; ?></a></div></td>
              <td><div align="center"><? echo $cktr['nama_sekolah']; ?></div></td>
              <td><div align="center"><? echo $cktr['tahun_masuk']; ?></div></td>
              <td><div align="center"><? echo $cktr['tahun_keluar']; ?></div></td>
              <td><div align="center"><? echo $cktr['tingal_kelas']; ?></div></td>
              <td><div align="center"><? echo $cktr['lama_selesai']; ?></div></td>
              <td><div align="center"><? echo $cktr['no_sttb']; ?></div></td>
              <td><div align="center"><? echo $cktr['pindah_skl']; ?></div></td>
            </tr>
            <? } ?>
          </table></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><input type="submit" name="rekam2" value="Simpan" /></td>
          </tr>
      </table>
    </form>    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td colspan="2" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="33">&nbsp;</td>
    <td colspan="2"><strong><img src="images/btn1.gif" width="12" height="13" />&nbsp; Riwayat Kesehatan </strong></td>
  </tr>
  <tr>
    <td bgcolor="#ACD75E">&nbsp;</td>
    <td colspan="2" bgcolor="#ACD75E"><form id="form3" name="form3" method="post" action="page/act_dt_riwayat.php">
      <table width="1169" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="46">&nbsp;</td>
          <td width="105">&nbsp;</td>
          <td width="1018"><input type="hidden" name="id_s3" value="<? echo $tp['id_santri']; ?>" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Jenis Penyakit </td>
          <td><input name="jn_penyakit" type="text" size="50" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Lama Sakit </td>
          <td><input type="text" name="lama_s" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Tahun</td>
          <td><input type="text" name="tahun_s" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><table width="820" border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
            <tr>
              <td width="481" bgcolor="#669900"><div align="center" class="style1">Jenis Penyakit yang Pernah Diderita </div></td>
              <td width="221" bgcolor="#669900"><div align="center" class="style1">Lama Sakit </div></td>
              <td width="110" bgcolor="#669900"><div align="center" class="style1">Tahun </div></td>
            </tr>
            <? 
			$ktr=mysqli_query($koneksi, "SELECT * FROM riwayat_kesehatan WHERE id_santri='$idk_dst'");
            while($cktr=mysqli_fetch_assoc($ktr)){
			?>
            <tr>
              <td><div align="center"><a href="page/act_dt_riwayat.php?del3=oke&idk=<? echo "$cktr[id_ks]&idk_dst=$idk_dst"; ?>" onclick="return konfirmasi('Yakin Data Akan Dihapus ?');"><? echo $cktr['j_penyakit']; ?></a></div></td>
              <td><div align="center"><? echo $cktr['lama']; ?></div></td>
              <td><div align="center"><? echo $cktr['tahun']; ?></div></td>
            </tr>
            <? } ?>
          </table></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><input type="submit" name="rekam3" value="Simpan" /></td>
        </tr>
      </table>
        </form>    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF" <? if($wrna1==1)echo"bgcolor='#FF0000'"; ?>>&nbsp;</td>
  </tr>
  <tr>
    <td height="33">&nbsp;</td>
    <td><strong><img src="images/btn1.gif" width="12" height="13" />&nbsp; Prestasi Yang Pernah di raih </strong></td>
    <td <? if($wrna1==1)echo"bgcolor='#FF0000'"; ?>>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#ACD75E">&nbsp;</td>
    <td colspan="2" bgcolor="#ACD75E"><form id="form4" name="form4" method="post" action="">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="31">&nbsp;</td>
          <td width="348">&nbsp;</td>
          <td width="662">&nbsp;</td>
          <td width="239">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Prestasi</td>
          <td colspan="2"><input name="textfield11" type="text" size="111" /></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Bidang</td>
          <td><input type="text" name="textfield12" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Tingkat</td>
          <td><input type="text" name="textfield13" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Tahun</td>
          <td><input type="text" name="textfield14" /></td>
          <td>&nbsp;</td>
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
          <td><input type="submit" name="Submit4" value="Simpan" /></td>
          <td>&nbsp;</td>
        </tr>
      </table>
        </form>    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td colspan="2" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="27">&nbsp;</td>
    <td colspan="2"><strong><img src="images/btn1.gif" width="12" height="13" />&nbsp; Mata Pelajaran Yang disukai / tidak disukai </strong></td>
  </tr>
  <tr>
    <td bgcolor="#ACD75E">&nbsp;</td>
    <td colspan="2" bgcolor="#ACD75E"><form id="form5" name="form5" method="post" action="">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="60">&nbsp;</td>
          <td width="303">&nbsp;</td>
          <td width="917">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Mata Pelajaran </td>
          <td><select name="select4">
            <option value="-">-</option>
		<?	$tampi5=mysqli_query($koneksi, "SELECT kd_mp,nama_mp FROM mata_pelajaran WHERE ket='MD' or ket='MP'");
          while($tp5=mysqli_fetch_assoc($tampi5)){
	    ?>  
                <option value="<? echo $tp5['nama_mp'] ?>"><? echo $tp5['nama_mp']; ?></option>
                <? } ?>
          </select>          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td valign="top">Alasan</td>
          <td><textarea name="textarea" cols="50" rows="5"></textarea></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Keterangan</td>
          <td><select name="select3">
            <option value="-">-</option>
            <option value="Disukai">Disukai</option>
            <option value="Tidak Disukai">Tidak Disukai</option>
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
          <td><input type="submit" name="Submit6" value="Simpan" /></td>
        </tr>
      </table>
        </form>    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF" <? if($wrna1==1)echo"bgcolor='#FF0000'"; ?>>&nbsp;</td>
  </tr>
  <tr>
    <td height="31">&nbsp;</td>
    <td colspan="2"><strong><img src="images/btn1.gif" width="12" height="13" />&nbsp; </strong>Ekskul / Kegiatan luar sekolah yang diikuti </td>
  </tr>
  <tr>
    <td bgcolor="#ACD75E">&nbsp;</td>
    <td colspan="2" bgcolor="#ACD75E"><form id="form6" name="form6" method="post" action="">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="59">&nbsp;</td>
          <td width="305">&nbsp;</td>
          <td width="916">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Jenis Ekskul / Kegiatan </td>
          <td><input name="textfield15" type="text" size="50" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Periode</td>
          <td><input type="text" name="textfield16" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Sebagai</td>
          <td><input name="textfield17" type="text" size="50" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Keterangan</td>
          <td><select name="select5">
            <option value="-">-</option>
            <option value="Ekskul">Ekskul</option>
            <option value="Kegiatan Luar Sekolah">Kegiatan Luar Sekolah</option>
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
          <td><input type="submit" name="Submit5" value="Simpan" /></td>
        </tr>
      </table>
        </form>
    </td>
  </tr>
  <tr>
    <td bgcolor="#DCF3AF">&nbsp;</td>
    <td width="24%" bgcolor="#DCF3AF">&nbsp;</td>
    <td width="75%" bgcolor="#DCF3AF" <? if($wrna1==1)echo"bgcolor='#FF0000'"; ?>><label></label></td>
  </tr>
  <tr>
    <td height="31" bgcolor="#FFFFFF">&nbsp;</td>
    <td colspan="2" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>
</body>
</html>
