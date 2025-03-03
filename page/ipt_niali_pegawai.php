<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
.style2 {color: #FFFFFF}
-->
</style>
</head>

<body>
<table width="1000" border="0" cellpadding="0" cellspacing="0">
<tr>
  <td bgcolor="#993300">&nbsp;</td>
  <td bgcolor="#993300">&nbsp;</td>
  <td bgcolor="#993300">&nbsp;</td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td><strong>PENILAIAN PEGAWAI PPMI SHOHWATUL IS'AD </strong></td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td height="31">&nbsp;</td>
  <td valign="middle" bgcolor="#663300"><span class="style1">&nbsp;&nbsp;Pegawai </span>   &nbsp; <select name="menu1" onchange="MM_jumpMenu('parent',this,0)">
      <option value="page/home.php?home=pgdp">-</option>
      <?  $idgp=$_GET['idgp'];
	      $thaj=$_COOKIE['thaj'];
          $qbln=$_GET['qbln']; 
		  $stat=$_GET['stat'];
		  $unit=$_GET['unit'];
	      
		  $tampil2=mysqli_query($koneksi, "SELECT * FROM guru_pegawai  ");
          while($tp=mysqli_fetch_assoc($tampil2)){
	    ?>
      <option value="home.php?home=fpp&amp;idgp=<? echo $tp['id_gp']; ?>&stat=<? echo $tp['status_kp']; ?>&unit=<? echo $tp['unit']; ?>" <? if($idgp=="$tp[id_gp]"){ echo"selected='selected'"; } ?>><? echo $tp['nama_gp']; ?></option>
      <? } ?>
    </select> 
   &nbsp;&nbsp; <span class="style2">Bulan </span>
    <select name="select" onchange="MM_jumpMenu('parent',this,0)">
      <option value="page/home.php?home=pgdp&amp;idgp=$idgp">-</option>
      <?  
	      
		 for($i=1;$i<=12;$i++){
	    ?>
      <option value="home.php?home=fpp&idgp=<? echo $idgp; ?>&stat=<? echo "$stat"; ?>&qbln=<? echo $i; ?>&unit=<? echo $unit; ?>" <? if($qbln=="$i"){ echo"selected='selected'"; } ?>><? echo $i; ?></option>
      <? } ?>
    </select>
&nbsp;&nbsp;
	<?
	   if(($stat=='p' and $unit=='STR') or ($stat=='g' and $unit=='STR')){
	?>
    &nbsp;&nbsp;&nbsp;<a href="page/raport_pegawai.php?idgp=<? echo $idgp; ?>&stat=<? echo $tp['status_kp']; ?>&qbln=<? echo $qbln; ?>" class="lk4" target="_blank">Cetak Raport</a> 
	<? } ?>
	<?
	   if($unit=='SMP' or $unit=='SMA' or $unit=='KSP' or $unit=='KSI' or $unit=='KEU' or $unit=='SPR' or $unit=='KDA' or $unit=='DPR'){ 
	?>
	&nbsp;&nbsp;&nbsp;<a href="page/raport_karyawan.php?idgp=<? echo $idgp; ?>&stat=<? echo $tp['status_kp']; ?>&qbln=<? echo $qbln; ?>" class="lk4" target="_blank">Cetak Raport</a> 
	<? } ?>	</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td width="21">&nbsp;</td>
  <td width="591">&nbsp;</td>
  <td width="388">&nbsp;</td>
</tr>
<tr>
  <td height="19">&nbsp;</td>
  <td colspan="2"><form id="form1" name="form1" method="post" action="page/act_penilaian_guru.php">
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="4" bgcolor="#CCCCCC">&nbsp;&nbsp; <strong>A. IDENTITAS PEGAWAI </strong></td>
        </tr>
      <tr>
        <td width="167">&nbsp;</td>
        <td colspan="3">&nbsp;</td>
      </tr>
	  <?
	      $tampi3=mysqli_query($koneksi, "SELECT * FROM guru_pegawai WHERE id_gp='$idgp' ");
          $tp3=mysqli_fetch_assoc($tampi3);
	  ?>
      <tr>
        <td bgcolor="#EEEEEE">NIY</td>
        <td colspan="3" bgcolor="#EEEEEE"><input type="hidden" name="id_guru" value="<? echo $idgp; ?>" /> 
          <input type="hidden" name="qbln" value="<? echo $qbln; ?>" />
          <input type="hidden" name="stky" value="<? echo $stat; ?>" />
        <? echo $tp3['nip']; ?></td>
      </tr>
      <tr>
        <td bgcolor="#EEEEEE">Nama Lengkap </td>
        <td colspan="3" bgcolor="#EEEEEE">&nbsp;<? echo $tp3['nama_gp']; ?></td>
      </tr>
      <tr>
        <td bgcolor="#EEEEEE">Jabatan </td>
        <td colspan="3" bgcolor="#EEEEEE">&nbsp;<? echo $tp3['ket_jabatan']; ?></td>
      </tr>
      <tr>
        <td bgcolor="#EEEEEE">Pendidikan</td>
        <td colspan="3" bgcolor="#EEEEEE">&nbsp;<? echo $tp3['pendidikan']; ?></td>
      </tr>
      <tr>
        <td bgcolor="#EEEEEE">Tempat, Tgl. Lahir</td>
        <td colspan="3" bgcolor="#EEEEEE">&nbsp;<? echo $tp3['tempat_ttl'].",".$tp3['tgl_ttl']." ".$tp3['bln_ttl']." ".$tp3['thn_ttl']; ?></td>
        </tr>
      <tr>
        <td bgcolor="#EEEEEE">TMT Pegawai </td>
        <td colspan="3" bgcolor="#EEEEEE">&nbsp;<? echo $tp3['thn_trdaftar']; ?></td>
        </tr>
      <tr>
        <td bgcolor="#EEEEEE">Masa Kerja</td>
        <td colspan="3" bgcolor="#EEEEEE">&nbsp;<? $tmt=date(Y)-$tp3['thn_trdaftar'];
		      echo $tmt; ?> Tahun </td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td width="609">&nbsp;</td>
        <td width="71">&nbsp;</td>
        <td width="132">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="4" bgcolor="#CCCCCC">&nbsp; &nbsp; <strong>B. Hasil Penilaian </strong></td>
        </tr>
		<?
		  $tampi4=mysqli_query($koneksi, "SELECT * FROM tb_kp_aspek_teknis WHERE id_pg='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
          $tp4=mysqli_fetch_assoc($tampi4);
		?>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td bgcolor="#EEEEEE"><div align="center">A.Aspek Teknis </div></td>
        <td bgcolor="#EEEEEE">Efektifitas dan Efesiensi kerja </td>
        <td bgcolor="#EEEEEE"><input name="textfield" type="text" size="1" value="<? echo $tp4['e1']; ?>" /></td>
        <td rowspan="4" align="center"><input type="submit" name="s1" value="Simpan Asp. Teknis" /></td>
      </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Ketepatan waktu dalam menyelesaikan tugas</td>
        <td bgcolor="#EEEEEE"><input name="textfield2" type="text" size="1" value="<? echo $tp4['e2']; ?>"/></td>
        </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Kemampuan mencapai target standar tugas</td>
        <td bgcolor="#EEEEEE"><input name="textfield3" type="text" size="1" value="<? echo $tp4['e3']; ?>"/></td>
        </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">&nbsp;</td>
      </tr>
      
		<?
		  $tampi5=mysqli_query($koneksi, "SELECT * FROM tb_kp_aspek_non WHERE id_pg='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
          $tp5=mysqli_fetch_assoc($tampi5);
		?>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td rowspan="9" align="center"><input type="submit" name="s8" value="Simpan Asp. non Teknis" /></td>
      </tr>
      <tr>
        <td bgcolor="#EEEEEE"><div align="center">B. Aspek non Teknis </div></td>
        <td bgcolor="#EEEEEE">Tertib Administrasi</td>
        <td bgcolor="#EEEEEE"><input name="textfield8" type="text" size="1" value="<? echo $tp5['f1']; ?>" /></td>
        </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Inisiatif</td>
        <td bgcolor="#EEEEEE"><input name="textfield9" type="text" size="1" value="<? echo $tp5['f2']; ?>"/></td>
        </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Kerjasama dan Koordinasi antar bagian</td>
        <td bgcolor="#EEEEEE"><input name="textfield10" type="text" size="1" value="<? echo $tp5['f3']; ?>"/></td>
        </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">&nbsp;</td>
      </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Tertib  Absensi kehadiran harian</td>
        <td bgcolor="#EEEEEE"><input name="textfield102" type="text" size="1" value="<? echo $tp5['f4']; ?>"/></td>
      </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Tertib  Absensi kehadiran Pengajian pekanan dan bulanan</td>
        <td bgcolor="#EEEEEE"><input name="textfield1022" type="text" size="1" value="<? echo $tp5['f5']; ?>"/></td>
      </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Tertib  Absensi kehadiran rapat-rapat sekolah/pondok</td>
        <td bgcolor="#EEEEEE"><input name="textfield10222" type="text" size="1" value="<? echo $tp5['f6']; ?>"/></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      
		<?
		  $tampi6=mysqli_query($koneksi, "SELECT * FROM tb_kp_kepribadian WHERE id_pg='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
          $tp6=mysqli_fetch_assoc($tampi6);
		?>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td rowspan="6" align="center"><input type="submit" name="s13" value="Simpan Kepribadian" /></td>
      </tr>
      <tr>
        <td bgcolor="#EEEEEE"><div align="center">C. Aspek Kepribadian </div></td>
        <td bgcolor="#EEEEEE">Prilaku</td>
        <td bgcolor="#EEEEEE"><input name="textfield13" type="text" size="1" value="<? echo $tp6['g1']; ?>"/></td>
        </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Kedisiplinan</td>
        <td bgcolor="#EEEEEE"><input name="textfield14" type="text" size="1" value="<? echo $tp6['g2']; ?>"/></td>
        </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Tanggung Jawab dan Loyalitas</td>
        <td bgcolor="#EEEEEE"><input name="textfield15" type="text" size="1" value="<? echo $tp6['g3']; ?>"/></td>
        </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Ketaatan terhadap Instruksi kerja Atasan</td>
        <td bgcolor="#EEEEEE"><input name="textfield16" type="text" size="1" value="<? echo $tp6['g4']; ?>" /></td>
        </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">&nbsp;</td>
      </tr>
		<?
		  $tampi7=mysqli_query($koneksi, "SELECT * FROM tb_kp_kepemimpinan WHERE id_pg='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
          $tp7=mysqli_fetch_assoc($tampi7);
		?>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td rowspan="6" align="center"><input type="submit" name="s18" value="Simpan Kepemimpinan" <?  if($stat=='k' or $stat=='g'){ ?>disabled="disabled" <? } ?> /></td>
      </tr>
      <tr>
        <td bgcolor="#EEEEEE"><div align="center">D. Aspek Kepemimpinan </div></td>
        <td bgcolor="#EEEEEE">Koordinasi  Anggota</td>
        <td bgcolor="#EEEEEE"><input name="textfield18" type="text" size="1" value="<? echo $tp7['h1']; ?>"/></td>
        </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Kontrol Anggota</td>
        <td bgcolor="#EEEEEE"><input name="textfield19" type="text" size="1" value="<? echo $tp7['h2']; ?>"/></td>
        </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Evaluasi dan Pembinaan Anggota</td>
        <td bgcolor="#EEEEEE"><input name="textfield20" type="text" size="1" value="<? echo $tp7['h3']; ?>"/></td>
        </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Delegasi/Tanggung Jawab &amp; Wewenang</td>
        <td bgcolor="#EEEEEE"><input name="textfield21" type="text" size="1" value="<? echo $tp7['h4']; ?>"/></td>
        </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Kecepatan dan Ketepatan Pemngambilan Keputusan</td>
        <td bgcolor="#EEEEEE"><input name="textfield22" type="text" size="1" value="<? echo $tp7['h5']; ?>"/></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
    </form>  </td>
  </tr>
<tr>
  <td bgcolor="#663300">&nbsp;</td>
  <td bgcolor="#663300">&nbsp;</td>
  <td bgcolor="#663300">&nbsp;</td>
</tr>
</table>
</body>
</html>
