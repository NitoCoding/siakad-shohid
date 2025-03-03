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
$idk_t=$_GET['idk_t'];
$idgp=$_GET['idgp'];
$idtjk=$_GET['idtjk'];
?>
<body>
<form id="form1" name="form1" enctype="multipart/form-data" method="post" action="page/act_dt_gaji.php">
  <table width="100%" border="0" cellspacing="0" cellpadding="3">
    <tr>
      <td bgcolor="#666633">&nbsp;</td>
      <td colspan="2" bgcolor="#666633"><span class="style1">POTONGAN</span></td>
    </tr>
    <tr>
      <td width="2%" bgcolor="#ACD75E">&nbsp;</td>
      <td width="16%" bgcolor="#ACD75E">&nbsp;</td>
      <td width="82%" bgcolor="#ACD75E">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="left">Nama</div></td>
      <td><div align="left">
        <select name="nm_pt">
          <option value="-">-</option>
          <option value="Potongan Koperasi">Potongan Koperasi</option>
          <option value="Potongan Pajak">Potongan Pajak</option>
          <option value="Potongan BPJS Ketenagakerjaan">Potongan BPJS Ketenagakerjaan</option>
          <option value="Potongan Sumbangan">Potongan Sumbangan</option>
          <option value="Potongan Zakat/Infak/Sedekah">Potongan Zakat/Infak/Sedekah</option>
		  <option value="Potongan Cuti Full">Potongan Cuti Full</option>
		  <option value="Potongan Cuti Setengah">Potongan Cuti Setengah</option>
        </select>
        </div></td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td><div align="left">Jumlah</div></td>
      <td><div align="left">
        <input name="jml_pt" type="text" size="50" />
      </div></td>
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
          <td width="357" bgcolor="#CCCCCC"><div align="center">POTONGAN </div></td>
          <td width="279" bgcolor="#CCCCCC"><div align="center">JUMLAH</div></td>
          </tr>
		  <?  $no=1;
		  $tampil=mysqli_query($koneksi, "SELECT * FROM tb_potongan ");
          while($tp=mysqli_fetch_assoc($tampil)){
		  
		  ?>
        <tr>
          <td><div align="center"><? echo $no; ?></div></td>
          <td><? echo"$tp[nama_pt]"; ?></td>
          <td><div align="right"><?  
		  
		  if($tp['jumlah_pt']!=0){
		  
		              if(strlen($tp['jumlah_pt'])==5){
						   $ptot=substr($tp['jumlah_pt'],0,2);
						   $ptot2=substr($tp['jumlah_pt'],2,3);
						   $gtot=$ptot.",".$ptot2;
						}
						
					  if(strlen($tp['jumlah_pt'])==6){
						   $ptot=substr($tp['jumlah_pt'],0,3);
						   $ptot2=substr($tp['jumlah_pt'],3,3);
						   $gtot=$ptot.",".$ptot2;
						}
						
						if(strlen($tp['jumlah_pt'])==7){
						   $ptot=substr($tp['jumlah_pt'],0,1);
						   $ptot2=substr($tp['jumlah_pt'],1,3);
						   $ptot3=substr($tp['jumlah_pt'],4,3);
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
      <td><input type="submit" name="rekam3" value="Simpan" onclick="cek();" /></td>
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
	 <?   if($edt=='y'){
	      $tjc=mysqli_query($koneksi, "SELECT * FROM tb_potongan_gk WHERE id_pot_gr='$idk_t' ");
          $ttjc=mysqli_fetch_assoc($tjc);
		  }
	      ?>
    <tr>
      <td>&nbsp;</td>
      <td>Nama Guru/Karyawan</td>
      <td><select name="id_grk">
        <option>-</option>
        <?
	       if($edt=='y'){ $tampil2=mysqli_query($koneksi, "SELECT * FROM guru_pegawai WHERE id_gp='$idgp' "); }else{ $tampil2=mysqli_query($koneksi, "SELECT * FROM guru_pegawai "); }
          while($tp=mysqli_fetch_assoc($tampil2)){
	      ?>
        <option value="<? echo $tp['id_gp']; ?>" <?  if($edt=='y'){ ?> selected="selected" <? } ?>><? echo $tp['nama_gp']; ?></option>
        <? } ?>
      </select>
        <a href="home.php?home=gjk&amp;dpn_pg=id&amp;edt=y&amp;idg=<? echo"$cgk[id_gp]&idgp=$tp[id_gapok]&kgp=$tp[kenaikan]"; ?>">
        <input type="hidden" name="idxk" value="<? echo $ttjc['id_pot_gr']; ?>" />
      </a></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Potongan Tetap </td>
      <td><select name="id_gpg">
        <option>-</option>
        <?
	      $tampil2=mysqli_query($koneksi, "SELECT * FROM tb_potongan ");
          while($tp=mysqli_fetch_assoc($tampil2)){
	      ?>
        <option value="<? echo $tp['id_pt']; ?>" <? if($edt=='y' AND $tp['id_pt']==$idtjk){ ?> selected="selected" <? } ?>><? echo $tp['nama_pt']." -  ".$tp['jumlah_pt']; ?></option>
        <? } ?>
      </select></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Potongan Listrik </td>
      <td><input type="text" name="pt_lis" value="<? if($edt=='y'){ echo $ttjc['p_listrik']; } ?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Potongan BPJS Kesehatan </td>
      <td><input type="text" name="pt_bpjs_ks" value="<? if($edt=='y'){ echo $ttjc['p_kesehatan']; } ?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Potongan Pinjaman </td>
      <td><input type="text" name="pp" value="<? if($edt=='y'){ echo $ttjc['p_pinjaman']; } ?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><? if($edt=='y'){ ?>
        <input type="submit" name="Submit3" value="Ubah" />
        <? }else{ ?>
<input type="submit" name="rekam6" value="Simpan" onclick="cek();" />
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
          <td width="32" height="24" bgcolor="#CCCCCC"><div align="center">NO.</div></td>
            <td width="332" bgcolor="#CCCCCC"><div align="center">NAMA GURU/KARYAWAN </div></td>
            <td width="255" bgcolor="#CCCCCC"><div align="center">Pot. BPJS KT  </div></td>
            <td width="209" bgcolor="#CCCCCC"><div align="center">Pot. Listrik </div></td>
            <td width="216" bgcolor="#CCCCCC"><div align="center">Pot. BPJS Kesehatan </div></td>
            <td width="210" bgcolor="#CCCCCC"><div align="center">Pot. Pinjaman  </div></td>
          </tr>
        <?  $no=1;
		  $tampil=mysqli_query($koneksi, "SELECT * FROM tb_potongan_gk ");
          while($tp=mysqli_fetch_assoc($tampil)){
		        $ntgk=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$tp[id_gr]'");
                $cgk=mysqli_fetch_assoc($ntgk);
		  
		  ?>
        <tr>
          <td><div align="center"><a href="page/act_dt_gaji.php?del_p=oke&idk_t=<? echo $tp['id_pot_gr']; ?>" onClick="return konfirmasi('Yakinmi mau dihapus ces..?');"><? echo $no; ?></a></div></td>
            <td><a href="home.php?home=gjk&dpn_pg=pp&edt=y&idk_t=<? echo "$tp[id_pot_gr]&idgp=$cgk[id_gp]&idtjk=$tp[id_pot]"; ?>"><? echo"$cgk[nama_gp]"; ?></a></td>
            <td><div align="center">
              <?  
		        $gtot=0;
		        $ntgk2=mysqli_query($koneksi, "SELECT * FROM tb_potongan WHERE id_pt='$tp[id_pot]'");
                $cgk2=mysqli_fetch_assoc($ntgk2);
				
				
				if($cgk2['jumlah_pt']!=0){
				
				 if(strlen($cgk2['jumlah_pt'])==5){
						   $ptot=substr($cgk2['jumlah_pt'],0,2);
						   $ptot2=substr($cgk2['jumlah_pt'],2,3);
						   $gtot=$ptot.",".$ptot2;
						}
					  if(strlen($cgk2['jumlah_pt'])==6){
						   $ptot=substr($cgk2['jumlah_pt'],0,3);
						   $ptot2=substr($cgk2['jumlah_pt'],3,3);
						   $gtot=$ptot.",".$ptot2;
						}
						
						if(strlen($cgk2['jumlah_pt'])==7){
						   $ptot=substr($cgk2['jumlah_pt'],0,1);
						   $ptot2=substr($cgk2['jumlah_pt'],1,3);
						   $ptot3=substr($cgk2['jumlah_pt'],4,3);
						   $gtot=$ptot.",".$ptot2.",".$ptot3;
						} }
					  echo $gtot;
		        
		  ?>
            </div></td>
            <td><div align="center">
              <?  
		  
		        	$lis=0;
				if($tp['p_listrik']!=0){
				
				 if(strlen($tp['p_listrik'])==5){
						   $ptot=substr($tp['p_listrik'],0,2);
						   $ptot2=substr($tp['p_listrik'],2,3);
						   $lis=$ptot.",".$ptot2;
						}
					  if(strlen($tp['p_listrik'])==6){
						   $ptot=substr($tp['p_listrik'],0,3);
						   $ptot2=substr($tp['p_listrik'],3,3);
						   $lis=$ptot.",".$ptot2;
						}
						
						if(strlen($tp['p_listrik'])==7){
						   $ptot=substr($tp['p_listrik'],0,1);
						   $ptot2=substr($tp['p_listrik'],1,3);
						   $ptot3=substr($tp['p_listrik'],4,3);
						   $lis=$ptot.",".$ptot2.",".$ptot3;
						} }
					  echo $lis;
		        
		  ?>
            </div></td>
            <td><div align="center">
              <?  
		  
		        	$bks=0;
				if($tp['p_kesehatan']!=0){
				
				 if(strlen($tp['p_kesehatan'])==5){
						   $ptot=substr($tp['p_kesehatan'],0,2);
						   $ptot2=substr($tp['p_kesehatan'],2,3);
						   $bks=$ptot.",".$ptot2;
						}
					  if(strlen($tp['p_kesehatan'])==6){
						   $ptot=substr($tp['p_kesehatan'],0,3);
						   $ptot2=substr($tp['p_kesehatan'],3,3);
						   $bks=$ptot.",".$ptot2;
						}
						
						if(strlen($tp['p_kesehatan'])==7){
						   $ptot=substr($tp['p_kesehatan'],0,1);
						   $ptot2=substr($tp['p_kesehatan'],1,3);
						   $ptot3=substr($tp['p_kesehatan'],4,3);
						   $bks=$ptot.",".$ptot2.",".$ptot3;
						} }
					  echo $bks;
		        
		  ?>
            </div></td>
            <td>
              <div align="center">
                <?  
		  
		        	$pp=0;
				if($tp['p_pinjaman']!=0){
				
				 if(strlen($tp['p_pinjaman'])==5){
						   $ptot=substr($tp['p_pinjaman'],0,2);
						   $ptot2=substr($tp['p_pinjaman'],2,3);
						   $pp=$ptot.",".$ptot2;
						}
					  if(strlen($tp['p_pinjaman'])==6){
						   $ptot=substr($tp['p_pinjaman'],0,3);
						   $ptot2=substr($tp['p_pinjaman'],3,3);
						   $pp=$ptot.",".$ptot2;
						}
						
						if(strlen($tp['p_pinjaman'])==7){
						   $ptot=substr($tp['p_pinjaman'],0,1);
						   $ptot2=substr($tp['p_pinjaman'],1,3);
						   $ptot3=substr($tp['p_pinjaman'],4,3);
						   $pp=$ptot.",".$ptot2.",".$ptot3;
						} }
					  echo $pp;
		        
		  ?>
            </div></td>
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
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#996600">&nbsp;</td>
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
      <td>Nama Guru/Karyawan</td>
      <td><select name="nm_gr_p">
        <option>-</option>
        <?
	      $tampil2=mysqli_query($koneksi, "SELECT * FROM guru_pegawai ");
          while($tp=mysqli_fetch_assoc($tampil2)){
	      ?>
        <option value="<? echo $tp['id_gp']; ?>" <? if($id_gk==$tp['id_gp']){ echo "selected='selected'"; }?>><? echo $tp['nama_gp']; ?></option>
        <? } ?>
      </select>
	  <?
	  if($id_gk!=0){
	  $ntgk2=mysqli_query($koneksi, "SELECT * FROM tb_pinjaman WHERE id_gr='$id_gk'");
      $cgk2=mysqli_fetch_assoc($ntgk2);
	  }
	  ?>
	  <input type="hidden" name="id_pinjaman" value="<? echo $id_pnj; ?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Potongan </td>
      <td><input name="pinjaman" type="text" size="50" value="<? echo $cgk2['nama_pinjaman']; ?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Jumlah</td>
      <td><input name="jumlah" type="text" value="<? echo $cgk2['jumlah']; ?>" /></td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td>Jenis Potongan </td>
      <td><select name="ketp">
        <option value="-">-</option>
        <option value="pb">Pinjaman Pribadi</option>
        <option value="pl">Potongan Listrik</option>
      </select>      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><table width="90%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td width="61" height="24" bgcolor="#CCCCCC"><div align="center">NO.</div></td>
          <td width="342" bgcolor="#CCCCCC"><div align="center">NAMA GURU/KARYAWAN </div></td>
          <td width="362" bgcolor="#CCCCCC"><div align="center">NAMA PINJAMAN </div></td>
          <td width="179" bgcolor="#CCCCCC"><div align="center">JUMLAH</div></td>
          </tr>
        <?  $no=1;
		  $tampil=mysqli_query($koneksi, "SELECT * FROM tb_pinjaman ");
          while($tp=mysqli_fetch_assoc($tampil)){
		        $ntgk=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$tp[id_gr]'");
                $cgk=mysqli_fetch_assoc($ntgk);
		  
		  ?>
        <tr>
          <td><div align="center"><a href="page/act_dt_gaji.php?del=oke3&idk_t=<? echo $tp['id_pjm']; ?>"><? echo $no; ?></a></div></td>
          <td><a href="home.php?home=gjk&dpn_pg=pp&id_gk=<? echo"$cgk[id_gp]&id_pnj=$tp[id_pjm]"; ?>">&nbsp;<? echo"$cgk[nama_gp]"; ?></a></td>
          <td>&nbsp;<? echo"$tp[nama_pinjaman]"; ?></td>
          <td><div align="right"><? echo"$tp[jumlah]"; ?></div></td>
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
      <td><? if($id_gk!=0){ ?>
        <input type="submit" name="rekam8" value="ubah" onclick="cek();" /><? }else{ ?>
        <input type="submit" name="rekam7" value="Simpan" onclick="cek();" />
      <? } ?></td>
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
