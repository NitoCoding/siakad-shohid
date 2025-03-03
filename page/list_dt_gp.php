<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<script language="JavaScript" type="text/javascript">
function konfirmasi(pesan) { 
  var is_confirmed=confirm(pesan);      
  if(!is_confirmed){    
   return false;
	}	
}
</script>
<body>
<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#B3CF70">
  <tr>
    <td width="3%" rowspan="2" bgcolor="#B3CF70">No</td>
    <td width="11%" rowspan="2" bgcolor="#B3CF70"><div align="center">NIY</div></td>
    <td width="24%" rowspan="2" bgcolor="#B3CF70"><div align="center">Nama</div></td>
    <td width="9%" rowspan="2" bgcolor="#B3CF70"><div align="center">Tahun Terdaftar </div></td>
    <td width="24%" rowspan="2" bgcolor="#B3CF70"><div align="center">Jabatan</div></td>
    <td width="13%" rowspan="2" bgcolor="#B3CF70"><div align="center">Status </div></td>
    <td colspan="2" bgcolor="#9EC249"><div align="center">Action</div>      
    <div align="center"></div></td>
  </tr>
  <tr>
    <td width="8%" bgcolor="#99CC66"><div align="center">Edit</div></td>
    <td width="8%" bgcolor="#99CC66"><div align="center">Hapus</div></td>
  </tr>
  
   
    <tr>
      <td colspan="8" height="5"></td>
    </tr>
	 <? $no=1;
     $tampil=mysqli_query($koneksi, "SELECT * FROM guru_pegawai ORDER BY id_gp DESC ");
     while($tp=mysqli_fetch_assoc($tampil)){
  ?>
  <tr>
    <td><div align="center"><? echo"$no"; ?></div>    </td>
    <td><div align="center"><? echo"$tp[nip]"; ?></div></td>
    <td><? echo"$tp[nama_gp]"; ?></td>
    <td><div align="center"><? echo"$tp[thn_trdaftar]"; ?></div></td>
    <td><? echo"$tp[ket_jabatan]"; ?></td>
    <td><div align="center">
      <? if($tp['status_pg']=='t')echo"Tetap"; 
	       if($tp['status_pg']=='k')echo"Kontrak"; 
		   if($tp['status_pg']=='h')echo"Honor"; 
		   if($tp['status_pg']=='p')echo"Percobaan"; 
	?>
    </div></td>
    <td bordercolor="#B3CF70"><div align="center"><a href="home.php?home=gp&dpn_pg=edt&id_kgp=<? echo"$tp[id_gp]"; ?>"><img src="images/image1.gif" width="20" height="22" border="0" align="absmiddle" /></a></div></td>
    <td><div align="center"><a href="page/act_dt_pg.php?del=oke&id_pgk=<? echo"$tp[id_gp]"; ?>" onClick="return konfirmasi('yakin data akan dihapus ?');"><img src="images/actionCancel.gif" width="18" height="18" border="0" align="absbottom" /></a> </div></td>
  </tr>
  <? $no+=1; } ?>
  <tr>
    <td colspan="8">&nbsp;</td>
  </tr>
</table>

</body>
</html>
