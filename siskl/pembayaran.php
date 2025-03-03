<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style5 {color: #FFFFFF}
.style7 {font-size: 12px}
-->
</style>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="75%" height="33"><span class="style7">&nbsp;&nbsp;<strong>Pembayaran &amp; Tunggakan Santri </strong> </span></td>
        <td width="14%"><span class="style7"><strong>Bulan :</strong> <? echo $bulan; ?></span></td>
        <td width="11%"><span class="style7"><strong>Pekan :</strong> 
            <? if($pekan=='I'){ echo $pekan." (Pertama)"; }else{ echo $pekan." (Kedua)"; }  ?>
        </span></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="22" colspan="3" valign="top" bgcolor="#DCF3AF"><table width="100%" border="0" cellspacing="0" cellpadding="3">
      <tr>
        <td width="28%" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#B3CF70">
            <tr>
              <td colspan="2" bgcolor="#B3CF70"><div align="center"><strong>Syahriah &amp; Komite</strong></div></td>
            </tr>
            <tr>
              <td width="40%" bgcolor="#669966"><div align="center" class="style5">Bulan</div></td>
              <td width="60%" bgcolor="#669966"><div align="center" class="style5">Telah di Bayar</div></td>
            </tr>
            <tr>
              <td><div align="center">Januari</div></td>
              <td><div align="right"> Rp.
                <? 
			  $tot2=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE 
		  kd_santri='$id_santri' and bln_bayar='Januari' and thn_b='$thn_ajaran' ");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		     $tot2=$tot2+$ctp2['jml_bayar'];
		  } echo $tot2; if($bulan_ak>=1 and $tot2==0) { echo"<font color='#FF000'> (Menunggak)</font>"; }
			  ?>
              </div></td>
            </tr>
            <tr>
              <td><div align="center">Februari</div></td>
              <td><div align="right"> Rp.
                <? 
			  $thnbp=substr($thaj,0,3);
			  $tot2=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE 
		  kd_santri='$id_santri' and bln_bayar='Februari' and thn_b='$thn_ajaran'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  } echo $tot2; if($bulan_ak >=2 and $tot2==0) { echo"<font color='#FF000'> (Menunggak)</font>"; }
			  ?>
              </div></td>
            </tr>
            <tr>
              <td><div align="center">Maret</div></td>
              <td><div align="right"> Rp.
                <? 
			  $thnbp=substr($thaj,0,3);
			  $tot2=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE 
		  kd_santri='$id_santri' and bln_bayar='Maret' and thn_b='$thn_ajaran'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  } echo $tot2; if($bulan_ak >=3 and $tot2==0) { echo"<font color='#FF000'> (Menunggak)</font>"; }
			  ?>
              </div></td>
            </tr>
            <tr>
              <td><div align="center">April</div></td>
              <td><div align="right"> Rp.
                <? 
			  $thnbp=substr($thaj,0,3);
			  $tot2=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE 
		  kd_santri='$id_santri' and bln_bayar='April' and thn_b='$thn_ajaran'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  } echo $tot2; if($bulan_ak >=4 and $tot2==0) { echo"<font color='#FF000'> (Menunggak)</font>"; }
			  ?>
              </div></td>
            </tr>
            <tr>
              <td><div align="center">Mei</div></td>
              <td><div align="right"> Rp.
                <? 
			  $thnbp=substr($thaj,0,3);
			  $tot2=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE 
		  kd_santri='$id_santri' and bln_bayar='Mei' and thn_b='$thn_ajaran'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  } echo $tot2; if($bulan_ak >=5 and $tot2==0) { echo"<font color='#FF000'> (Menunggak)</font>"; }
			  ?>
              </div></td>
            </tr>
            <tr>
              <td><div align="center">Juni</div></td>
              <td><div align="right"> Rp.
                <? 
			  $thnbp=substr($thaj,0,3);
			  $tot2=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE 
		  kd_santri='$id_santri' and bln_bayar='Juni' and thn_b='$thn_ajaran'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  } echo $tot2; if($bulan_ak >=6 and $tot2==0) { echo"<font color='#FF000'> (Menunggak)</font>"; }
			  ?>
              </div></td>
            </tr>
            <tr>
              <td><div align="center">Juli</div></td>
              <td><div align="right"> Rp.
                <? 
			  $thnbp=substr($thaj,0,3);
			  $tot2=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE 
		  kd_santri='$id_santri' and bln_bayar='Juli' and thn_b='$thn_ajaran'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  } echo $tot2;  if($bulan_ak >=7 and $tot2==0) { echo"<font color='#FF000'> (Menunggak)</font>"; }
			  ?>
              </div></td>
            </tr>
            <tr>
              <td><div align="center">Agustus</div></td>
              <td><div align="right"> Rp.
                <? 
			  $thnbp=substr($thaj,0,3);
			  $tot2=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE 
		  kd_santri='$id_santri' and bln_bayar='Agustus' and thn_b='$thn_ajaran'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  } echo $tot2;  if($bulan_ak >=8 and $tot2==0) { echo"<font color='#FF000'> (Menunggak)</font>"; }
			  ?>
              </div></td>
            </tr>
            <tr>
              <td><div align="center">September</div></td>
              <td><div align="right"> Rp.
                <? 
			  $thnbp=substr($thaj,0,3);
			  $tot2=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE 
		  kd_santri='$id_santri' and bln_bayar='September' and thn_b='$thn_ajaran'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  } echo $tot2; if($bulan_ak >=9 and $tot2==0) { echo"<font color='#FF000'> (Menunggak)</font>"; }
			  ?>
              </div></td>
            </tr>
            <tr>
              <td><div align="center">Oktober</div></td>
              <td><div align="right"> Rp.
                <? 
			  $thnbp=substr($thaj,0,3);
			  $tot2=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE 
		  kd_santri='$id_santri' and bln_bayar='Oktober' and thn_b='$thn_ajaran'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  } echo $tot2;  if($bulan_ak >=10 and $tot2==0) { echo"<font color='#FF000'> (Menunggak)</font>"; }
			  ?>
              </div></td>
            </tr>
            <tr>
              <td><div align="center">November</div></td>
              <td><div align="right"> Rp.
                <? 
			  $thnbp=substr($thaj,0,3);
			  $tot2=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE 
		  kd_santri='$id_santri' and bln_bayar='November' and thn_b='$thn_ajaran'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  } echo $tot2;  if($bulan_ak >=11 and $tot2==0) { echo"<font color='#FF000'> (Menunggak)</font>"; }
			  ?>
              </div></td>
            </tr>
            <tr>
              <td><div align="center">Desember</div></td>
              <td><div align="right"> Rp.
                <? 
			  $thnbp=substr($thaj,0,3);
			  $tot2=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE 
		  kd_santri='$id_santri' and bln_bayar='Desember' and thn_b='$thn_ajaran'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  } echo $tot2;  if($bulan_ak >=12 and $tot2==0) { echo"<font color='#FF000'> (Menunggak)</font>"; }
			  ?>
              </div></td>
            </tr>
        </table></td>
        <td width="72%" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#B3CF70">
            <tr>
              <td width="31%" bgcolor="#B3CF70"><div align="center"><strong>Pembayaran</strong></div></td>
              <td width="23%" bgcolor="#B3CF70"><div align="center"><strong>Jumlah</strong></div></td>
              <td width="24%" bgcolor="#B3CF70"><div align="center"><strong>Telah di Bayar </strong></div></td>
              <td width="22%" bgcolor="#B3CF70"><div align="center"><strong>Sisa</strong></div></td>
            </tr>
            <?
			$pmb=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran,rincian_bayar WHERE rincian_bayar.kd_kls='$id_kk' and tb_pembayaran.ket!='b' and tb_pembayaran.kd_pembayaran=rincian_bayar.kd_bayar");
          while($ctp=mysqli_fetch_assoc($pmb)){
			 ?>
            <tr>
              <td><? echo $ctp['pembayaran']; ?></td>
              <td><div align="right">Rp. <? echo $ctp['jumlah']; ?> </div></td>
              <td><div align="right">Rp.
                <? 
			  $tot=0;
			  $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE 
		  kd_santri='$id_santri' and semester_b='$semester' and thn_b='$thn_ajaran' and kd_bayar='$ctp[kd_pembayaran]'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		  $tot=$tot+$ctp2['jml_bayar'];
		  } echo $tot; ?>
              </div></td>
              <td><div align="right">Rp.
                    <? $sisa=$ctp['jumlah']-$tot; echo $sisa; ?>
              </div></td>
            </tr>
            <? } ?>
        </table></td>
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
