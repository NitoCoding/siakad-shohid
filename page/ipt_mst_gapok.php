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
$idg=$_GET['idg'];
$idgp=$_GET['idgp'];
$kgp=$_GET['kgp'];
$kig=$_GET['kig'];
?>
<body>
<form id="form1" name="form1" enctype="multipart/form-data" method="post" action="page/act_dt_gaji.php">
  <table width="100%" border="0" cellspacing="0" cellpadding="3">
    <tr>
      <td bgcolor="#666633">&nbsp;</td>
      <td colspan="2" bgcolor="#666633"><span class="style1">GAJI POKOK </span></td>
    </tr>
	<? if ($edt2!="y"){?>
    <tr>
      <td width="2%" bgcolor="#ACD75E">&nbsp;</td>
      <td width="15%" bgcolor="#ACD75E">&nbsp;</td>
      <td width="83%" bgcolor="#ACD75E">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	 <?   if($edt=='y'){
	      $tjc=mysqli_query($koneksi, "SELECT * FROM tb_gapok WHERE id_gp='$idgp' ");
          $ttjc=mysqli_fetch_assoc($tjc);
		  }
	      ?>
    <tr>
      <td>&nbsp;</td>
      <td><div align="left">Nama</div></td>
      <td><div align="left">
        <select name="nm_gp">
          <option value="-">-</option>
          <option value="SD">SD</option>
          <option value="SMP">SMP</option>
          <option value="SMA">SMA</option>
		  <option value="D1">D1</option>
		  <option value="D2">D2</option>
		  <option value="D3">D3</option>
		  <option value="D4">D4</option>
          <option value="S1">S1</option>
          <option value="S2">S2</option>
          <option value="S3">S3</option>
          <option value="a1">Tenaga Ahli 1</option>
          <option value="a2">Tenaga ahli 2</option>
          <option value="a3">Tenaga Ahli 3</option>
        </select>
       <? if($edt=='y'){ echo "- $ttjc[nama_gp]"; } ?> 
       <a href="home.php?home=gjk&amp;dpn_pg=id&amp;edt=y&amp;idg=<? echo"$cgk[id_gp]&idgp=$tp[id_gapok]&kgp=$tp[kenaikan]"; ?>">
       <input type="hidden" name="idxk2" value="<? echo $ttjc['id_gp']; ?>" />
       </a></div></td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td><div align="left">Jumlah</div></td>
      <td><div align="left">
        <input name="jml_gp" type="text" value="<? if($edt=='y'){ echo $ttjc['gapok']; } ?>" />
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
          <td width="357" bgcolor="#CCCCCC"><div align="center">GAJI POKOK </div></td>
          <td width="279" bgcolor="#CCCCCC"><div align="center">JUMLAH</div></td>
          </tr>
		  <?  $no=1;
		  $tampil=mysqli_query($koneksi, "SELECT * FROM tb_gapok ");
          while($tp=mysqli_fetch_assoc($tampil)){
		  
		  ?>
        <tr>
          <td><div align="center"><? echo $no; ?></div></td>
          <td><a href="home.php?home=gjk&dpn_pg=id&edt=y&idgp=<? echo $tp['id_gp']; ?>"><? echo"$tp[nama_gp]"; ?></a></td>
          <td><div align="right"><?  
		  
		              if($tp['gapok']!=0){
					  if(strlen($tp['gapok'])==6){
						   $ptot=substr($tp['gapok'],0,3);
						   $ptot2=substr($tp['gapok'],3,3);
						   $gtot=$ptot.",".$ptot2;
						}
						
						if(strlen($tp['gapok'])==7){
						   $ptot=substr($tp['gapok'],0,1);
						   $ptot2=substr($tp['gapok'],1,3);
						   $ptot3=substr($tp['gapok'],4,3);
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
      <td><? if($edt=='y'){ ?>
          <input type="submit" name="Submit4" value="Ubah" />
          <? }else{ ?>
        <input type="submit" name="rekam" value="Simpan" onclick="cek();" />
        <? } ?></td>
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
  <?	if($edt!='y'){  ?>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Nama Guru/Karyawan</td>
      <td><select name="id_grk">
        <option>-</option>
        <?
	      if($edt2=='y'){ $tampil2=mysqli_query($koneksi, "SELECT * FROM guru_pegawai WHERE id_gp='$idg' "); }else{
		  $tampil2=mysqli_query($koneksi, "SELECT * FROM guru_pegawai "); }
          while($tp=mysqli_fetch_assoc($tampil2)){
	      ?>
        <option value="<? echo $tp['id_gp']; ?>" <? if($edt=='y'){ ?> selected="selected" <? } ?>><? echo $tp['nama_gp']; ?></option>
        <? } ?>
      </select>
        <a href="home.php?home=gjk&amp;dpn_pg=id&amp;edt=y&amp;idg=<? echo"$cgk[id_gp]&idgp=$tp[id_gapok]&kgp=$tp[kenaikan]"; ?>">
        <input type="hidden" name="idxk" value="<? echo $kig; ?>" />
      </a></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Gaji Pokok </td>
      <td><select name="id_gpg">
        <option>-</option>
        <?
	       $tampil2=mysqli_query($koneksi, "SELECT * FROM tb_gapok "); 
          while($tp=mysqli_fetch_assoc($tampil2)){
	      ?>
        <option value="<? echo $tp['id_gp']; ?>" <? if($edt2=='y' AND $tp['id_gp']==$idgp){ ?> selected="selected" <? } ?>><? echo $tp['nama_gp']." -  ".$tp['gapok']; ?></option>
        <? } ?>
      </select></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Kenaikan Gaji Pokok </td>
      <td><input name="kenaikan" type="text" value="<? if($edt2=='y'){ echo $kgp; } ?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><? if($edt2=='y'){ ?>   <input type="submit" name="Submit" value="Ubah" /> <? }else{ ?>
      <input type="submit" name="rekam4" value="Simpan" onclick="cek();" />
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
      <td><table width="61%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td width="50" height="24" bgcolor="#CCCCCC"><div align="center">NO.</div></td>
          <td width="357" bgcolor="#CCCCCC"><div align="center">NAMA GURU/KARYAWAN  </div></td>
          <td width="279" bgcolor="#CCCCCC"><div align="center">GAJI POKOK </div></td>
        </tr>
        <?  $no=1;
		  $tampil=mysqli_query($koneksi, "SELECT * FROM tb_gapok_gk ");
          while($tp=mysqli_fetch_assoc($tampil)){
		        $ntgk=mysqli_query($koneksi, "SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$tp[id_gr]'");
                $cgk=mysqli_fetch_assoc($ntgk);
		  
		  ?>
        <tr>
          <td><div align="center"><a href="page/act_dt_gaji.php?del=oke2&idk_t=<? echo $tp['id_ggk']; ?>" onClick="return konfirmasi('Yakinmi mau dihapus ?');"><? echo $no; ?></a></div></td>
          <td><a href="home.php?home=gjk&dpn_pg=id&edt2=y&idg=<? echo"$cgk[id_gp]&idgp=$tp[id_gapok]&kgp=$tp[kenaikan]&kig=$tp[id_ggk]"; ?>"><? echo"$cgk[nama_gp]"; ?></a></td>
          <td><div align="right">
            <?  
		  
		        $ntgk2=mysqli_query($koneksi, "SELECT * FROM tb_gapok WHERE id_gp='$tp[id_gapok]'");
                $cgk2=mysqli_fetch_assoc($ntgk2);
				$tot_gk=$cgk2['gapok']+$tp['kenaikan'];
				
				if($tot_gk!=0){
					  if(strlen($tot_gk)==6){
						   $ptot=substr($tot_gk,0,3);
						   $ptot2=substr($tot_gk,3,3);
						   $gtot=$ptot.",".$ptot2;
						}
						
						if(strlen($tot_gk)==7){
						   $ptot=substr($tot_gk,0,1);
						   $ptot2=substr($tot_gk,1,3);
						   $ptot3=substr($tot_gk,4,3);
						   $gtot=$ptot.",".$ptot2.",".$ptot3;
						} }
					  echo $gtot;
		        
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
      <td bgcolor="#666633">&nbsp;</td>
      <td bgcolor="#666633"><div align="left"></div></td>
      <td bgcolor="#666633"><div align="left"></div></td>
    </tr> <? } ?>
  </table>
</form>

</body>
</html>
