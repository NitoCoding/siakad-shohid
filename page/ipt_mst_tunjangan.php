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
	font-size: 14px;
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
function konfirmasi(pesan) { 
  var is_confirmed=confirm(pesan);      
  if(!is_confirmed){    
   return false;
	}	
}
</script>
<?
$edt=$_GET['edt'];
$edt2=$_GET['edt2'];
$idk_t=$_GET['idk_t'];
$idgp=$_GET['idgp'];
$idtjk=$_GET['idtjk'];
?>
<body>
<form id="form1" name="form1" enctype="multipart/form-data" method="post" action="page/act_dt_gaji.php">
  <table width="100%" border="0" cellspacing="0" cellpadding="3">
    <tr>
      <td bgcolor="#666633">&nbsp;</td>
      <td colspan="2" bgcolor="#666633"><span class="style1">TUNJANGAN - TUNJANGAN </span></td>
    </tr>
	<? if($edt2!='y'){ ?>
    <tr>
      <td width="2%" bgcolor="#ACD75E">&nbsp;</td>
      <td width="22%" bgcolor="#ACD75E">&nbsp;</td>
      <td width="76%" bgcolor="#ACD75E">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="left">Nama</div></td>
      <td><div align="left">
        <select name="nm_tj">
          <option value="-">-</option>
          <option value="Tunjangan Mudir/Direktur">Tunjangan Mudir/Direktur</option>
          <option value="Tunjangan Dewan kiyai">Tunjangan Dewan kiyai</option>
          <option value="Tunjangan Wadir">Tunjangan Wadir</option>
          <option value="Tunjangan Sekretaris">Tunjangan Sekretaris</option>
          <option value="Tunjangan Kepala Urusan">Tunjangan Kepala Urusan</option>
          <option value="Tunjangan Wakil KU">Tunjangan Wakil KU</option>
          <option value="Tunjangan Pegawai Tetap">Tunjangan Pegawai Tetap</option>
          <option value="Tunjangan BPJS KTJ">Tunjangan BPJS KTJ</option>
          <option value="Tunjangan BPJS KS">Tunjangan BPJS KS</option>
		  <option value="Tunjangan Wali Asrama">Tunjangan Wali Asrama</option>
		  <option value="Tunjangan Wali Kelas">Tunjangan Wali Kelas</option>
        </select>
        </div></td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td><div align="left">Jumlah</div></td>
      <td><div align="left">
        <input name="jml_tj" type="text" size="50" />
      </div></td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><select name="jt">
        <option value="-">-</option>
        <option value="s">Struktural</option>
        <option value="w">Wali</option>
        <option value="s">Staff</option>
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
      <td><table width="61%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td width="50" height="24" bgcolor="#CCCCCC"><div align="center">NO.</div></td>
          <td width="357" bgcolor="#CCCCCC"><div align="center">TUNJANGAN JABATAN </div></td>
          <td width="279" bgcolor="#CCCCCC"><div align="center">JUMLAH</div></td>
          </tr>
		  <?  $no=1;
		  $tampil=mysqli_query($koneksi, "SELECT * FROM tb_tunjangan ");
          while($tp=mysqli_fetch_assoc($tampil)){
		  
		  ?>
        <tr>
          <td><div align="center"><? echo $no; ?></div></td>
          <td><a href="page/act_dt_gaji.php?del=oke4&idk_t=<? echo $tp['id_tj']; ?>" onClick="return konfirmasi('Yakinmi mau dihapus broo..?');"><? echo"$tp[nama_tj]"; ?></a></td>
          <td><div align="right"><?  
		  
		  if($tp['jumlah_tj']!=0){
					  if(strlen($tp['jumlah_tj'])==6){
						   $ptot=substr($tp['jumlah_tj'],0,3);
						   $ptot2=substr($tp['jumlah_tj'],3,3);
						   $gtot=$ptot.",".$ptot2;
						}
						
						if(strlen($tp['jumlah_tj'])==7){
						   $ptot=substr($tp['jumlah_tj'],0,1);
						   $ptot2=substr($tp['jumlah_tj'],1,3);
						   $ptot3=substr($tp['jumlah_tj'],4,3);
						   $gtot=$ptot.",".$ptot2.",".$ptot3;
						} }
					  echo $gtot;
		  
		  ?></div></td>
          </tr>
		  <? $no+=1; } ?>
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
      <td><input type="submit" name="rekam2" value="Simpan" onclick="cek();" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	<? } ?>
	
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
	 <?   if($edt2=='y'){
	      $tjc=mysqli_query($koneksi, "SELECT * FROM tb_tunjangan_gk WHERE id_tj_gk='$idk_t' ");
          $ttjc=mysqli_fetch_assoc($tjc);
		  }
	      ?>
    <tr>
      <td>&nbsp;</td>
      <td>Nama Guru/Karyawan</td>
      <td><select name="id_grk">
        <option>-</option>
        <?
		  if($edt2=='y'){ $tampil2=mysqli_query($koneksi, "SELECT * FROM guru_pegawai WHERE id_gp='$idgp' "); }else{ $tampil2=mysqli_query($koneksi, "SELECT * FROM guru_pegawai "); }
	      
          while($tp=mysqli_fetch_assoc($tampil2)){
	      ?>
        <option value="<? echo $tp['id_gp']; ?>" <?  if($edt2=='y'){ ?> selected="selected" <? } ?> ><? echo $tp['nama_gp']; ?></option>
        <? } ?>
      </select>
        <a href="home.php?home=gjk&amp;dpn_pg=id&amp;edt2=y&amp;idg=<? echo"$cgk[id_gp]&idgp=$tp[id_gapok]&kgp=$tp[kenaikan]"; ?>">
        <input type="hidden" name="idxk" value="<? echo $ttjc['id_tj_gk']; ?>" />
      </a></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Tunjangan</td>
      <td><select name="id_gpg">
        <option>-</option>
        <?
		
	      $tampil2=mysqli_query($koneksi, "SELECT * FROM tb_tunjangan "); 
          while($tp=mysqli_fetch_assoc($tampil2)){
	      ?>
        <option value="<? echo $tp['id_tj']; ?>" <? if($edt2=='y' AND $tp['id_tj']==$idtjk){ ?> selected="selected" <? } ?> ><? echo $tp['nama_tj']." -  ".$tp['jumlah_tj']; ?></option>
        <? } ?>
      </select></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Tunjangan Istri/Suami </td>
      <td><input type="text" name="tj_si" value="<? if($edt2=='y'){ echo $ttjc['tj_istri_suami']; } ?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Tunjangan Anak </td>
      <td><input type="text" name="tj_anak" value="<? if($edt2=='y'){ echo $ttjc['tj_anak']; } ?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Tunjangan Guru/Pegawai Tetap Yayasan</td>
      <td><input type="text" name="tj_gt" value="<? if($edt2=='y'){ echo $ttjc['tj_gp_tetap']; } ?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Tunjangan Kompetensi </td>
      <td><input type="text" name="tj_kompetensi" value="<? if($edt2=='y'){ echo $ttjc['tj_kompetensi']; } ?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Tunjangan Lain-lain </td>
      <td><input type="text" name="tj_lain" value="<? if($edt2=='y'){ echo $ttjc['tj_lain']; } ?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><? if($edt2=='y'){ ?>
        <input type="submit" name="Submit2" value="Ubah" />
        <? }else{ ?>
      <input type="submit" name="rekam5" value="Simpan" onclick="cek();" />
      <? } ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td width="35" height="24" bgcolor="#CCCCCC"><div align="center">NO.</div></td>
            <td width="244" bgcolor="#CCCCCC"><div align="center">NAMA GURU/KARYAWAN </div></td>
            <td width="188" bgcolor="#CCCCCC"><div align="center">Tj. Jabatan </div></td>
            <td width="155" bgcolor="#CCCCCC"><div align="center">Tj. Istri/Suami </div></td>
            <td width="146" bgcolor="#CCCCCC"><div align="center">Tj. Anak </div></td>
            <td width="148" bgcolor="#CCCCCC"><div align="center">Tj. GT </div></td>
            <td width="169" bgcolor="#CCCCCC"><div align="center">Tj. Kompetensi </div></td>
            <td width="165" bgcolor="#CCCCCC"><div align="center">Tj. Lain-lain </div></td>
          </tr>
        <?  $no=1;
		  $tampil=mysqli_query($koneksi, "SELECT * FROM tb_tunjangan_gk ");
          while($tp=mysqli_fetch_assoc($tampil)){
		        $ntgk=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$tp[id_gr]'");
                $cgk=mysqli_fetch_assoc($ntgk);
		  
		  ?>
        <tr>
          <td><div align="center"><a href="page/act_dt_gaji.php?del=oke&idk_t=<? echo $tp['id_tj_gk']; ?>" onClick="return konfirmasi('Yakinmi mau dihapus broo...?');"><? echo $no; ?></a></div></td>
            <td><a href="home.php?home=gjk&dpn_pg=ld&edt2=y&idk_t=<? echo "$tp[id_tj_gk]&idgp=$cgk[id_gp]&idtjk=$tp[id_tj]"; ?>"><? echo"$cgk[nama_gp]"; ?></a></td>
            <td><div align="right">
              <?  
		  
		        $ntgk2=mysqli_query($koneksi, "SELECT * FROM tb_tunjangan WHERE id_tj='$tp[id_tj]'");
                $cgk2=mysqli_fetch_assoc($ntgk2);
				
				
				if($cgk2['jumlah_tj']!=0){
					  if(strlen($cgk2['jumlah_tj'])==6){
						   $ptot=substr($cgk2['jumlah_tj'],0,3);
						   $ptot2=substr($cgk2['jumlah_tj'],3,3);
						   $tjb=$ptot.",".$ptot2;
						}
						
						if(strlen($cgk2['jumlah_tj'])==7){
						   $ptot=substr($cgk2['jumlah_tj'],0,1);
						   $ptot2=substr($cgk2['jumlah_tj'],1,3);
						   $ptot3=substr($cgk2['jumlah_tj'],4,3);
						   $tjb=$ptot.",".$ptot2.",".$ptot3;
						} }
					  echo $tjb;
		        
		  ?>
            </div></td>
            <td><div align="right">
              <?  
		  
				if($tp['tj_istri_suami']!=0){
					  if(strlen($tp['tj_istri_suami'])==6){
						   $ptot=substr($tp['tj_istri_suami'],0,3);
						   $ptot2=substr($tp['tj_istri_suami'],3,3);
						   $tis=$ptot.",".$ptot2;
						}
						
						if(strlen($tp['tj_istri_suami'])==7){
						   $ptot=substr($tp['tj_istri_suami'],0,1);
						   $ptot2=substr($tp['tj_istri_suami'],1,3);
						   $ptot3=substr($tp['tj_istri_suami'],4,3);
						   $tis=$ptot.",".$ptot2.",".$ptot3;
						} }
					  echo $tis;
		        
		  ?>
            </div></td>
            <td><div align="right">
              <?  
		  
				if($tp['tj_anak']!=0){
					  if(strlen($tp['tj_anak'])==6){
						   $ptot=substr($tp['tj_anak'],0,3);
						   $ptot2=substr($tp['tj_anak'],3,3);
						   $ta=$ptot.",".$ptot2;
						}
						
						if(strlen($tp['tj_anak'])==7){
						   $ptot=substr($tp['tj_anak'],0,1);
						   $ptot2=substr($tp['tj_anak'],1,3);
						   $ptot3=substr($tp['tj_anak'],4,3);
						   $ta=$ptot.",".$ptot2.",".$ptot3;
						} }
					  echo $ta;
		        
		  ?>
            </div></td>
            <td><div align="right">
              <?  
		  
				if($tp['tj_gp_tetap']!=0){
					  if(strlen($tp['tj_gp_tetap'])==6){
						   $ptot=substr($tp['tj_gp_tetap'],0,3);
						   $ptot2=substr($tp['tj_gp_tetap'],3,3);
						   $tty=$ptot.",".$ptot2;
						}
						
						if(strlen($tp['tj_gp_tetap'])==7){
						   $ptot=substr($tp['tj_gp_tetap'],0,1);
						   $ptot2=substr($tp['tj_gp_tetap'],1,3);
						   $ptot3=substr($tp['tj_gp_tetap'],4,3);
						   $tty=$ptot.",".$ptot2.",".$ptot3;
						} }
					  echo $tty;
		        
		  ?>
            </div></td>
            <td><div align="right">
              <?  
		  
				if($tp['tj_kompetensi']!=0){
					  if(strlen($tp['tj_kompetensi'])==6){
						   $ptot=substr($tp['tj_kompetensi'],0,3);
						   $ptot2=substr($tp['tj_kompetensi'],3,3);
						   $tk=$ptot.",".$ptot2;
						}
						
						if(strlen($tp['tj_kompetensi'])==7){
						   $ptot=substr($tp['tj_kompetensi'],0,1);
						   $ptot2=substr($tp['tj_kompetensi'],1,3);
						   $ptot3=substr($tp['tj_kompetensi'],4,3);
						   $tk=$ptot.",".$ptot2.",".$ptot3;
						} }
					  echo $tk;
		        
		  ?>
            </div></td>
            <td><div align="right">
              <?  
		  
				if($tp['tj_lain']!=0){
					  if(strlen($tp['tj_lain'])==6){
						   $ptot=substr($tp['tj_lain'],0,3);
						   $ptot2=substr($tp['tj_lain'],3,3);
						   $tll=$ptot.",".$ptot2;
						}
						
						if(strlen($tp['tj_lain'])==7){
						   $ptot=substr($tp['tj_lain'],0,1);
						   $ptot2=substr($tp['tj_lain'],1,3);
						   $ptot3=substr($tp['tj_lain'],4,3);
						   $tll=$ptot.",".$ptot2.",".$ptot3;
						} }
					  echo $tll;
		        
		  ?>
            </div></td>
          </tr>
        <? 
		$tjb=0;
		$tty=0;
		$tk=0;
		$tis=0;
		$ta=0;
		$no+=1; } ?>
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
      <td>&nbsp;</td>
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
