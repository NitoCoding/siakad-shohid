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
  <td><strong>PENILAIAN GURU PPMI SHOHWATUL IS'AD </strong></td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td height="31">&nbsp;</td>
  <td valign="middle" bgcolor="#663300"><span class="style1">&nbsp;&nbsp;Guru </span>   &nbsp; <select name="menu1" onchange="MM_jumpMenu('parent',this,0)">
      <option value="page/home.php?home=pgdp">-</option>
      <?  $idgp=$_GET['idgp'];
	      $thaj=$_COOKIE['thaj'];
          $qbln=$_GET['qbln']; 
	      
		  $tampil2=mysqli_query($koneksi, "SELECT * FROM guru_pegawai WHERE (unit='SMP' or unit='SMA') and (status_kp='G')  ");
          while($tp=mysqli_fetch_assoc($tampil2)){
	    ?>
      <option value="home.php?home=pgdp&amp;idgp=<? echo $tp['id_gp']; ?>" <? if($idgp=="$tp[id_gp]"){ echo"selected='selected'"; } ?>><? echo $tp['nama_gp']; ?></option>
      <? } ?>
    </select> 
    &nbsp;<span class="style2">Bulan </span>
    <select name="select" onchange="MM_jumpMenu('parent',this,0)">
      <option value="page/home.php?home=pgdp&idgp=$idgp">-</option>
      <?  
	      
		 for($i=1;$i<=12;$i++){
	    ?>
      <option value="home.php?home=pgdp&idgp=<? echo $idgp; ?>&qbln=<? echo $i; ?>" <? if($qbln=="$i"){ echo"selected='selected'"; } ?>><? echo $i; ?></option>
      <? } ?>
    </select>    &nbsp;&nbsp;<a href="page/raport_guru.php?idgp=<? echo $idgp; ?>&qbln=<? echo $qbln; ?>" class="lk4" target="_blank">Cetak Raport</a> </td>
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
        <td colspan="4" bgcolor="#CCCCCC">&nbsp;&nbsp; <strong>A. IDENTITAS GURU </strong></td>
        </tr>
      <tr>
        <td width="120">&nbsp;</td>
        <td colspan="3">&nbsp;</td>
      </tr>
	  <?
	      $tampi3=mysqli_query($koneksi, "SELECT * FROM guru_pegawai WHERE id_gp='$idgp' ");
          $tp3=mysqli_fetch_assoc($tampi3);
	  ?>
      <tr>
        <td bgcolor="#EEEEEE">NIY</td>
        <td colspan="3" bgcolor="#EEEEEE"><input type="hidden" name="id_guru" value="<? echo $idgp; ?>" />
          <input type="hidden" name="qbln" value="<? echo $qbln; ?>" />          <? echo $tp3['nip']; ?></td>
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
        <td bgcolor="#EEEEEE">TMT Guru</td>
        <td colspan="3" bgcolor="#EEEEEE">&nbsp;<? echo $tp3['thn_trdaftar']; ?></td>
        </tr>
      <tr>
        <td bgcolor="#EEEEEE">Masa Kerja</td>
        <td colspan="3" bgcolor="#EEEEEE">&nbsp;<? $tmt=date(Y)-$tp3['thn_trdaftar'];
		      echo $tmt; ?> Tahun </td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td width="674">&nbsp;</td>
        <td width="73">&nbsp;</td>
        <td width="112">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="4" bgcolor="#CCCCCC">&nbsp; &nbsp; <strong>B. Hasil Penilaian </strong></td>
        </tr>
		<?
		  $tampi4=mysqli_query($koneksi, "SELECT * FROM tb_kp_pedagogik WHERE id_guru='$idgp' and thn_ajaran='$thaj' and bulan='$qbln'");
          $tp4=mysqli_fetch_assoc($tampi4);
		?>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td bgcolor="#EEEEEE"><div align="center">A.Pedagogik</div></td>
        <td bgcolor="#EEEEEE">Mengenal  karakteristik anak didik</td>
        <td bgcolor="#EEEEEE"><input name="textfield" type="text" size="1" value="<? echo $tp4['a1']; ?>" /></td>
        <td rowspan="7" align="center"><input type="submit" name="s1" value="Simpan Pedagogik" /></td>
      </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Menguasai  teori belajar dan prinsip-prinsip pembelajaran</td>
        <td bgcolor="#EEEEEE"><input name="textfield2" type="text" size="1" value="<? echo $tp4['a2']; ?>"/></td>
        </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Mampu  mengembangan kurikulum</td>
        <td bgcolor="#EEEEEE"><input name="textfield3" type="text" size="1" value="<? echo $tp4['a3']; ?>"/></td>
        </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Kegiatan  pembelajaran yang mendidik</td>
        <td bgcolor="#EEEEEE"><input name="textfield4" type="text" size="1" value="<? echo $tp4['a4']; ?>"/></td>
        </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Memahami  dan mengembangkan potensi peserta didik</td>
        <td bgcolor="#EEEEEE"><input name="textfield5" type="text" size="1" value="<? echo $tp4['a5']; ?>"/></td>
        </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Komunikasi  dengan peserta didik</td>
        <td bgcolor="#EEEEEE"><input name="textfield6" type="text" size="1" value="<? echo $tp4['a6']; ?>"/></td>
        </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Penilaian  dan evaluasi pembelajaran</td>
        <td bgcolor="#EEEEEE"><input name="textfield7" type="text" size="1" value="<? echo $tp4['a7']; ?>"/></td>
        </tr>
		<?
		  $tampi5=mysqli_query($koneksi, "SELECT * FROM tb_kp_keperibadian WHERE id_guru='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
          $tp5=mysqli_fetch_assoc($tampi5);
		?>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td rowspan="6" align="center"><input type="submit" name="s8" value="Simpan Kepribadian" /></td>
      </tr>
      <tr>
        <td bgcolor="#EEEEEE"><div align="center">B. Keperibadian</div></td>
        <td bgcolor="#EEEEEE">Kepribadian yang mantap dan stabil</td>
        <td bgcolor="#EEEEEE"><input name="textfield8" type="text" size="1" value="<? echo $tp5['b1']; ?>" /></td>
        </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Kepribadian yang dewasa</td>
        <td bgcolor="#EEEEEE"><input name="textfield9" type="text" size="1" value="<? echo $tp5['b2']; ?>"/></td>
        </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Kepribadian yang arif</td>
        <td bgcolor="#EEEEEE"><input name="textfield10" type="text" size="1" value="<? echo $tp5['b3']; ?>"/></td>
        </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Kepribadian yang berwibawa</td>
        <td bgcolor="#EEEEEE"><input name="textfield11" type="text" size="1" value="<? echo $tp5['b4']; ?>"/></td>
        </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Akhlak mulia dan dapat menjadi teladan</td>
        <td bgcolor="#EEEEEE"><input name="textfield12" type="text" size="1" value="<? echo $tp5['b5']; ?>"/></td>
        </tr>
		<?
		  $tampi6=mysqli_query($koneksi, "SELECT * FROM tb_kp_sosial WHERE id_guru='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
          $tp6=mysqli_fetch_assoc($tampi6);
		?>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td rowspan="6" align="center"><div align="left">
          <input type="submit" name="s13" value="Simpan Sosial" />
        </div></td>
      </tr>
      <tr>
        <td bgcolor="#EEEEEE"><div align="center">C. Sosial</div></td>
        <td bgcolor="#EEEEEE">Terampil  berkomunikasi dengan peserta didik dan orang tua peserta didik</td>
        <td bgcolor="#EEEEEE"><input name="textfield13" type="text" size="1" value="<? echo $tp6['c1']; ?>"/></td>
        </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Bersikap  simpatik</td>
        <td bgcolor="#EEEEEE"><input name="textfield14" type="text" size="1" value="<? echo $tp6['c2']; ?>"/></td>
        </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Dapat  bekerja sama dengan dewan pendidikan/komite sekolah</td>
        <td bgcolor="#EEEEEE"><input name="textfield15" type="text" size="1" value="<? echo $tp6['c3']; ?>"/></td>
        </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Pandai  bergaul dengan kawan sekerja dan mitra pendidikan</td>
        <td bgcolor="#EEEEEE"><input name="textfield16" type="text" size="1" value="<? echo $tp6['c4']; ?>" /></td>
        </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Memahami  dunia sekitarnya (lingkungannya)</td>
        <td bgcolor="#EEEEEE"><input name="textfield17" type="text" size="1" value="<? echo $tp6['c5']; ?>"/></td>
        </tr>
		<?
		  $tampi7=mysqli_query($koneksi, "SELECT * FROM tb_kp_profesional WHERE id_guru='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
          $tp7=mysqli_fetch_assoc($tampi7);
		?>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td rowspan="6" align="center"><input type="submit" name="s18" value="Simpan Profesional" /></td>
      </tr>
      <tr>
        <td bgcolor="#EEEEEE"><div align="center">D. Profesional</div></td>
        <td bgcolor="#EEEEEE">Menguasai  materi, struktur, konsep, dan pola pikir keilmuan yang mendukung mata pelajaran  yang diampu</td>
        <td bgcolor="#EEEEEE"><input name="textfield18" type="text" size="1" value="<? echo $tp7['d1']; ?>"/></td>
        </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Menguasai  standar kompetensi dan kompetensi dasar mata pelajaran yang diampu</td>
        <td bgcolor="#EEEEEE"><input name="textfield19" type="text" size="1" value="<? echo $tp7['d2']; ?>"/></td>
        </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Mengembangkan  materi pembelajaran yang diampu secara kreatif</td>
        <td bgcolor="#EEEEEE"><input name="textfield20" type="text" size="1" value="<? echo $tp7['d3']; ?>"/></td>
        </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Mengembangkan  keprofesionalan secara berkelanjutan dengan melakukan tindakan reflektif</td>
        <td bgcolor="#EEEEEE"><input name="textfield21" type="text" size="1" value="<? echo $tp7['d4']; ?>"/></td>
        </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Memanfaatkan  teknologi informasi dan komunikasi untuk mengembangkan diri </td>
        <td bgcolor="#EEEEEE"><input name="textfield22" type="text" size="1" value="<? echo $tp7['d5']; ?>"/></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
	  <?
		  $tampi8=mysqli_query($koneksi, "SELECT * FROM tb_administratif_g WHERE id_guru='$idgp' and thn_ajaran='$thaj' and bulan='$qbln' ");
          $tp8=mysqli_fetch_assoc($tampi8);
		?>
      <tr>
        <td bgcolor="#EEEEEE"><div align="center">E. Administratif</div></td>
        <td bgcolor="#EEEEEE">Tertib Absensi kehadiran harian</td>
        <td bgcolor="#EEEEEE"><input name="textfield182" type="text" size="1" value="<? echo $tp8['j1']; ?>"/></td>
        <td rowspan="3"><div align="center">
          <input type="submit" name="s19" value="Simpan Administratif" />
        </div></td>
      </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Tertib Absensi kehadiran rapat-rapat </td>
        <td bgcolor="#EEEEEE"><input name="textfield1822" type="text" size="1" value="<? echo $tp8['j2']; ?>"/></td>
        </tr>
      <tr>
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">Kelengkapan Administrasi Perangkat Pembelajaran </td>
        <td bgcolor="#EEEEEE"><input name="textfield1823" type="text" size="1" value="<? echo $tp8['j3']; ?>"/></td>
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
