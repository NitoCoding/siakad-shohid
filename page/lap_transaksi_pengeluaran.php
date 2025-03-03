<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="1200" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
      <tr>
        <td width="4%" height="34" bgcolor="#CCCC66"><div align="center"><strong>NO</strong></div></td>
        <td width="16%" bgcolor="#CCCC66"><div align="center">TANGGAL</div></td>
        <td width="61%" bgcolor="#CCCC66"><div align="center"><strong>PENGELUARAN</strong></div></td>
        <td width="19%" bgcolor="#CCCC66"><div align="center"><strong>JUMLAH</strong></div></td>
      </tr>
      <tr>
        <td height="3" colspan="4" bgcolor="#333333"></td>
        </tr>
      <tr>
        <td height="21" colspan="4" bordercolor="#FFFFFF">&nbsp;</td>
      </tr>
      <tr>
        <td height="21" colspan="4" bgcolor="#CCCC99">Pangkal</td>
        </tr>
		<?       
	  		   $no=1;
			   $tot=0;
			   $tpg=mysqli_query($koneksi, "SELECT * FROM tb_pengeluaran WHERE mata_anggaran='Pangkal' ");
			   while($ctpms=mysqli_fetch_assoc($tpg)){
			   
			  ?>
        <tr>
          <td height="28" bgcolor="#CCFFCC"><div align="center"><? echo $no; ?></div></td>
          <td bgcolor="#CCFFCC"><div align="center"><? echo $ctpms['tgl_k']."-".$ctpms['bln_k']."-".$ctpms['thn_k']; ?></div></td>
          <td bgcolor="#CCFFCC"><? echo $ctpms['nama_transaksi']; ?></td>
          <td bgcolor="#CCFFCC"><div align="right">
            <? 
		$bs=format_agk($ctpms['jumlah_k']); 
		echo $bs; ?>
          </div></td>
        </tr>
		 <? 
	  $tot=$tot+$ctpms['jumlah_k'];
	  $no+=1; } ?>
        <tr>
        <td height="21" colspan="3" bgcolor="#CCCC99"><div align="center">TOTAL</div></td>
        <td bgcolor="#CCCC99"><div align="right">
          <? 
		$bs=format_agk($tot); 
		echo $bs; ?>
        </div></td>
      </tr>
	  
        <tr>
          <td height="21" colspan="4" bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr>
        <td height="21" colspan="4" bgcolor="#CCCC99">Syahriah</td>
        </tr>
		<?       
	  		   $no=1;
			   $tot=0;
			   $tpg=mysqli_query($koneksi, "SELECT * FROM tb_pengeluaran WHERE mata_anggaran='Syahriah' ");
			   while($ctpms=mysqli_fetch_assoc($tpg)){
			   
			  ?>
        <tr>
          <td height="28" bgcolor="#CCFFCC"><div align="center"><? echo $no; ?></div></td>
          <td bgcolor="#CCFFCC"><div align="center"><? echo $ctpms['tgl_k']."-".$ctpms['bln_k']."-".$ctpms['thn_k']; ?></div></td>
          <td bgcolor="#CCFFCC"><? echo $ctpms['nama_transaksi']; ?></td>
          <td bgcolor="#CCFFCC"><div align="right">
            <? 
		$bs=format_agk($ctpms['jumlah_k']); 
		echo $bs; ?>
          </div></td>
        </tr>
		<? 
	  $tot=$tot+$ctpms['jumlah_k'];
	  $no+=1; } ?>
        <tr>
        <td height="21" colspan="3" bgcolor="#EEEEEE"><div align="center">TOTAL</div></td>
        <td bgcolor="#EEEEEE"><div align="right">
          <? 
		$bs=format_agk($tot); 
		echo $bs; ?>
        </div></td>
      </tr>
	   
        <tr>
          <td height="28" colspan="4" bordercolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr>
        <td height="21" colspan="4" bgcolor="#CCCC99">Semester</td>
        </tr>
		<?       
	  		   $no=1;
			   $tot=0;
			   $tpg=mysqli_query($koneksi, "SELECT * FROM tb_pengeluaran WHERE mata_anggaran='Semester' ");
			   while($ctpms=mysqli_fetch_assoc($tpg)){
			   
			  ?>
      <tr>
        <td height="28" bgcolor="#CCFFCC"><div align="center"><? echo $no; ?></div></td>
        <td bgcolor="#CCFFCC"><div align="center"><? echo $ctpms['tgl_k']."-".$ctpms['bln_k']."-".$ctpms['thn_k']; ?></div></td>
        <td bgcolor="#CCFFCC"><? echo $ctpms['nama_transaksi']; ?></td>
        <td bgcolor="#CCFFCC"><div align="right">
            <? 
		$bs=format_agk($ctpms['jumlah_k']); 
		echo $bs; ?>
        </div></td>
      </tr>
	  <? 
	  $tot=$tot+$ctpms['jumlah_k'];
	  $no+=1; } ?>
      <tr>
        <td height="21" colspan="3" bgcolor="#EEEEEE"><div align="center">TOTAL</div></td>
        <td bgcolor="#EEEEEE"><div align="right">
            <? 
		$bs=format_agk($tot); 
		echo $bs; ?>
        </div></td>
      </tr>
      <tr>
        <td height="28" colspan="4" bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
      <tr>
        <td height="21" colspan="4" bgcolor="#CCCC99">Buku</td>
        </tr>
		<?       
	  		   $no=1;
			   $tot=0;
			   $tpg=mysqli_query($koneksi, "SELECT * FROM tb_pengeluaran WHERE mata_anggaran='Buku' ");
			   while($ctpms=mysqli_fetch_assoc($tpg)){
			   
			  ?>
      <tr>
        <td height="28" bgcolor="#CCFFCC"><div align="center"><? echo $no; ?></div></td>
        <td bgcolor="#CCFFCC"><div align="center"><? echo $ctpms['tgl_k']."-".$ctpms['bln_k']."-".$ctpms['thn_k']; ?></div></td>
        <td bgcolor="#CCFFCC"><? echo $ctpms['nama_transaksi']; ?></td>
        <td bgcolor="#CCFFCC"><div align="right">
            <? 
		$bs=format_agk($ctpms['jumlah_k']); 
		echo $bs; ?>
        </div></td>
      </tr>
	  <? 
	  $tot=$tot+$ctpms['jumlah_k'];
	  $no+=1; } ?>
      <tr>
        <td height="21" colspan="3" bgcolor="#EEEEEE"><div align="center">
          <div align="center">TOTAL</div>
        </div></td>
        <td bgcolor="#EEEEEE"><div align="right">
          <? 
		$bs=format_agk($tot); 
		echo $bs; ?>
        </div></td>
      </tr>
      <tr>
        <td height="28" colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td height="21" colspan="4" bgcolor="#CCCC99">Fasilitas Asrama</td>
        </tr>
		<?       
	  		   $no=1;
			   $tot=0;
			   $tpg=mysqli_query($koneksi, "SELECT * FROM tb_pengeluaran WHERE mata_anggaran='Fasilitas Asrama' ");
			   while($ctpms=mysqli_fetch_assoc($tpg)){
			   
			  ?>
      <tr>
        <td height="28" bgcolor="#CCFFCC"><div align="center"><? echo $no; ?></div></td>
        <td bgcolor="#CCFFCC"><div align="center"><? echo $ctpms['tgl_k']."-".$ctpms['bln_k']."-".$ctpms['thn_k']; ?></div></td>
        <td bgcolor="#CCFFCC"><? echo $ctpms['nama_transaksi']; ?></td>
        <td bgcolor="#CCFFCC"><div align="right">
            <? 
		$bs=format_agk($ctpms['jumlah_k']); 
		echo $bs; ?>
        </div></td>
      </tr>
	  <? 
	  $tot=$tot+$ctpms['jumlah_k'];
	  $no+=1; } ?>
      <tr>
        <td height="21" colspan="3" bgcolor="#eeeeee"><div align="center">
          <div align="center">TOTAL</div>
        </div></td>
        <td bgcolor="#eeeeee"><div align="right">
          <? 
		$bs=format_agk($tot); 
		echo $bs; ?>
        </div></td>
      </tr>
      <tr>
        <td height="28" colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td height="21" colspan="4" bgcolor="#CCCC99">Pengembangan Diri dan Eskul</td>
        </tr>
		<?       
	  		   $no=1;
			   $tot=0;
			   $tpg=mysqli_query($koneksi, "SELECT * FROM tb_pengeluaran WHERE mata_anggaran='Pengembangan Diri dan Eskul' ");
			   while($ctpms=mysqli_fetch_assoc($tpg)){
			   
			  ?>
      <tr>
        <td height="28" bgcolor="#CCFFCC"><div align="center"><? echo $no; ?></div></td>
        <td bgcolor="#CCFFCC"><div align="center"><? echo $ctpms['tgl_k']."-".$ctpms['bln_k']."-".$ctpms['thn_k']; ?></div></td>
        <td bgcolor="#CCFFCC"><? echo $ctpms['nama_transaksi']; ?></td>
        <td bgcolor="#CCFFCC"><div align="right">
            <? 
		$bs=format_agk($ctpms['jumlah_k']); 
		echo $bs; ?>
        </div></td>
      </tr>
	  <? 
	  $tot=$tot+$ctpms['jumlah_k'];
	  $no+=1; } ?>
      <tr>
        <td height="21" colspan="3" bgcolor="#EEEEEE"><div align="center">TOTAL</div></td>
        <td bgcolor="#EEEEEE"><div align="right">
          <? 
		$bs=format_agk($tot); 
		echo $bs; ?>
        </div></td>
      </tr>
      <tr>
        <td height="28" colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td height="21" colspan="4" bgcolor="#CCCC99">Seragam</td>
        </tr>
		<?       
	  		   $no=1;
			   $tot=0;
			   $tpg=mysqli_query($koneksi, "SELECT * FROM tb_pengeluaran WHERE mata_anggaran='Seragam' ");
			   while($ctpms=mysqli_fetch_assoc($tpg)){
			   
			  ?>
      <tr>
        <td height="28" bgcolor="#CCFFCC"><div align="center"><? echo $no; ?></div></td>
        <td bgcolor="#CCFFCC"><div align="center"><? echo $ctpms['tgl_k']."-".$ctpms['bln_k']."-".$ctpms['thn_k']; ?></div></td>
        <td bgcolor="#CCFFCC"><? echo $ctpms['nama_transaksi']; ?></td>
        <td bgcolor="#CCFFCC"><div align="right">
            <? 
		$bs=format_agk($ctpms['jumlah_k']); 
		echo $bs; ?>
        </div></td>
      </tr>
	   <? 
	  $tot=$tot+$ctpms['jumlah_k'];
	  $no+=1; } ?>
      <tr>
        <td height="21" colspan="3" bgcolor="#EEEEEE"><div align="center">TOTAL</div></td>
        <td bgcolor="#EEEEEE"><div align="right">
            <? 
		$bs=format_agk($tot); 
		echo $bs; ?>
        </div></td>
      </tr>
      <tr>
        <td height="28" colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td height="21" colspan="4" bgcolor="#CCCC99">Kesehatan</td>
        </tr>
		<?       
	  		   $no=1;
			   $tot=0;
			   $tpg=mysqli_query($koneksi, "SELECT * FROM tb_pengeluaran WHERE mata_anggaran='Kesehatan' ");
			   while($ctpms=mysqli_fetch_assoc($tpg)){
			   
			  ?>
      <tr>
        <td height="28" bgcolor="#CCFFCC"><div align="center"><? echo $no; ?></div></td>
        <td bgcolor="#CCFFCC"><div align="center"><? echo $ctpms['tgl_k']."-".$ctpms['bln_k']."-".$ctpms['thn_k']; ?></div></td>
        <td bgcolor="#CCFFCC"><? echo $ctpms['nama_transaksi']; ?></td>
        <td bgcolor="#CCFFCC"><div align="right">
            <? 
		$bs=format_agk($ctpms['jumlah_k']); 
		echo $bs; ?>
        </div></td>
      </tr>
	  <? 
	  $tot=$tot+$ctpms['jumlah_k'];
	  $no+=1; } ?>
      <tr>
        <td height="21" colspan="3" bgcolor="#EEEEEE"><div align="center">TOTAL</div></td>
        <td bgcolor="#EEEEEE"><div align="right">
          <? 
		$bs=format_agk($tot); 
		echo $bs; ?>
        </div></td>
      </tr>
      <tr>
        <td height="28" colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td height="21" colspan="4" bgcolor="#CCCC99">Taaruf dan orientasi santri</td>
        </tr>
		<?       
	  		   $no=1;
			   $tot=0;
			   $tpg=mysqli_query($koneksi, "SELECT * FROM tb_pengeluaran WHERE mata_anggaran='Taaruf dan orientasi santri' ");
			   while($ctpms=mysqli_fetch_assoc($tpg)){
			   
			  ?>
      <tr>
        <td height="28" bgcolor="#CCFFCC"><div align="center"><? echo $no; ?></div></td>
        <td bgcolor="#CCFFCC"><div align="center"><? echo $ctpms['tgl_k']."-".$ctpms['bln_k']."-".$ctpms['thn_k']; ?></div></td>
        <td bgcolor="#CCFFCC"><? echo $ctpms['nama_transaksi']; ?></td>
        <td bgcolor="#CCFFCC"><div align="right">
            <? 
		$bs=format_agk($ctpms['jumlah_k']); 
		echo $bs; ?>
        </div></td>
      </tr>
	   <? 
	  $tot=$tot+$ctpms['jumlah_k'];
	  $no+=1; } ?>
      <tr>
        <td height="21" colspan="3" bgcolor="#EEEEEE"><div align="center">TOTAL</div></td>
        <td bgcolor="#EEEEEE"><div align="right">
          <? 
		$bs=format_agk($tot); 
		echo $bs; ?>
        </div></td>
      </tr>
      <tr>
        <td height="28" colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td height="21" colspan="4" bgcolor="#CCCC99">Komite</td>
        </tr>
		<?       
	  		   $no=1;
			   $tot=0;
			   $tpg=mysqli_query($koneksi, "SELECT * FROM tb_pengeluaran WHERE mata_anggaran='Komite' ");
			   while($ctpms=mysqli_fetch_assoc($tpg)){
			   
			  ?>
      <tr>
        <td height="28" bgcolor="#CCFFCC"><div align="center"><? echo $no; ?></div></td>
        <td bgcolor="#CCFFCC"><div align="center"><? echo $ctpms['tgl_k']."-".$ctpms['bln_k']."-".$ctpms['thn_k']; ?></div></td>
        <td bgcolor="#CCFFCC"><? echo $ctpms['nama_transaksi']; ?></td>
        <td bgcolor="#CCFFCC"><div align="right">
            <? 
		$bs=format_agk($ctpms['jumlah_k']); 
		echo $bs; ?>
        </div></td>
      </tr>
	  <? 
	  $tot=$tot+$ctpms['jumlah_k'];
	  $no+=1; } ?>
      <tr>
        <td height="21" colspan="3" bgcolor="#EEEEEE"><div align="center">TOTAL</div></td>
        <td bgcolor="#EEEEEE"><div align="right">
            <? 
		$bs=format_agk($tot); 
		echo $bs; ?>
        </div></td>
      </tr>
      
      <tr>
        <td height="28" colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td height="21" colspan="4" bgcolor="#CCCC99">Kalender</td>
        </tr>
		<?       
	  		   $no=1;
			   $tot=0;
			   $tpg=mysqli_query($koneksi, "SELECT * FROM tb_pengeluaran WHERE mata_anggaran='Kalender' ");
			   while($ctpms=mysqli_fetch_assoc($tpg)){
			   
			  ?>
      <tr>
        <td height="28" bgcolor="#CCFFCC"><div align="center"><? echo $no; ?></div></td>
        <td bgcolor="#CCFFCC"><div align="center"><? echo $ctpms['tgl_k']."-".$ctpms['bln_k']."-".$ctpms['thn_k']; ?></div></td>
        <td bgcolor="#CCFFCC"><? echo $ctpms['nama_transaksi']; ?></td>
        <td bgcolor="#CCFFCC"><div align="right">
            <? 
		$bs=format_agk($ctpms['jumlah_k']); 
		echo $bs; ?>
        </div></td>
      </tr>
	  <? 
	  $tot=$tot+$ctpms['jumlah_k'];
	  $no+=1; } ?>
      <tr>
        <td height="21" colspan="3" bgcolor="#EEEEEE"><div align="center">TOTAL</div></td>
        <td bgcolor="#EEEEEE"><div align="right">
            <? 
		$bs=format_agk($tot); 
		echo $bs; ?>
        </div></td>
      </tr>
      
      
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
