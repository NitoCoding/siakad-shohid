<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style5 {font-size: 16px}
td {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000000;
	text-decoration: none;
}
.style15 {
	font-size: 11px;
	font-weight: bold;
}
.style18 {font-size: 9px}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style21 {font-size: 11px}
-->
</style>
</head>
<script type="text/javascript">
function printpage()
{
window.print();
return;
}
</script>
<? 
  include("../koneksi.php"); 
  include("../function.php");
?>
<body onload="printpage()">
<table width="600" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="11%" height="64" valign="top" bordercolor="#FFFFFF"><img src="../images/LOGO-SHOID2.jpg" width="50" height="56" /></td>
    <td width="89%" colspan="2" valign="top" bordercolor="#FFFFFF"><div align="left"><span class="style5"><span class="style21">Pondok Pesantren Modern Islam </span><br />  
          <strong>SHOHWATUL IS'AD</strong><br />
      </span><span class="style18">Jl. Sipitto Ma'rang Kabupaten Pangkep Sulawesi Selatan <br />
    Telp.(0410)2315599,   Fax(0410)2317977, www.shohwatulisad.com</span></div></td>
  </tr>
  <tr>
    <td colspan="3" bordercolor="#FFFFFF" height="2"></td>
  </tr>
  <tr>
    <td height="13" colspan="3" bgcolor="#CCCCCC"><div align="center" class="style15">BUKTI PEMBAYARAN SANTRI </div></td>
  </tr>
  
  <tr>
    <td colspan="3" bordercolor="#FFFFFF" height="12"></td>
  </tr>
  <?
  $id_k=$_GET['id_k'];
  $idgurp=$_COOKIE['idgurp'];
  $gb_nota=$_GET['gb_nota'];
  
  $tmpkls=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st FROM tb_santri WHERE id_santri='$id_k' ");
  $cpr=mysqli_fetch_assoc($tmpkls);
  ?>
  <tr>
    <td colspan="3" bordercolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="1%" rowspan="3"></td>
        <td width="7%">Nis</td>
        <td width="2%">:</td>
        <td width="63%"><? echo $cpr['nis']; ?></td>
        <td width="9%">Nomor</td>
        <td width="2%">:</td>
        <td width="16%"><? 
				      /* $bl=date("m");
				      $th=date("y");
				    
				      $crint=$bl.$th;
				      $pmb=mysqli_query($koneksi, "SELECT * FROM tb_nokwi WHERE no_kwitansi1='$crint' ");
					  $ctp=mysqli_num_rows($pmb);
				      if($ctp<=9) { $notak=$bl.$th; $notak2="00".$ctp; }
				      if($ctp<=99 and $ctp>=10) { $notak=$bl.$th; $notak2="0".$ctp; }
					  $gb_nota=$notak.$notak2; */
				  
				      echo $gb_nota;
				   
				   ?></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><? echo $cpr['nama']; ?></td>
        <td>Tanggal</td>
        <td>:</td>
        <td><? $tgl=date("d-m-Y"); echo $tgl; ?></td>
      </tr>
      <tr>
        <td>Kelas</td>
        <td>:</td>
        <td><? echo $cpr['kelas_st']; ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="3" bordercolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" bordercolor="#FFFFFF"><table width="100%" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td width="4%"><div align="center"><strong>No.</strong></div></td>
        <td width="39%"><div align="center"><strong>Jenis Pembayaran </strong></div></td>
        <td width="21%"><div align="center"><strong>Waktu</strong></div></td>
        <td width="36%"><div align="center"><strong>Jumlah</strong></div></td>
      </tr>
      <?                $no=1; $totb=0;
					    $rp=mysqli_query($koneksi, "SELECT * FROM rincian_nota WHERE kd_kwi='$gb_nota'  ");
                        while($crp=mysqli_fetch_assoc($rp)){
					?>
      <tr bordercolor="#FFFFFF">
        <td height="20"><div align="center"><? echo $no; ?></div></td>
        <td>
            <div align="left">
              <?
						$jpb1=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE id_transaksi='$crp[kd_transaksi]' ");
                        $crp1=mysqli_fetch_assoc($jpb1);
						
					    $jpb=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$crp1[kd_bayar]' ");
                        $crp2=mysqli_fetch_assoc($jpb);
					    echo $crp2['pembayaran']; 
					  ?>
            </div></td>
        <td><div align="center"><? if($crp2['ket']=='b') {echo $crp1['bln_bayar']; }else{ echo $crp1['thn_b']; }?></div></td>
        <td><div align="right">Rp.
          <? 
					if($crp1['jml_bayar']!=0){
					  if(strlen($crp1['jml_bayar'])==6){
						   $ptot=substr($crp1['jml_bayar'],0,3);
						   $ptot2=substr($crp1['jml_bayar'],3,3);
						   $gtot=$ptot.",".$ptot2;
						}
						
						if(strlen($crp1['jml_bayar'])==7){
						   $ptot=substr($crp1['jml_bayar'],0,1);
						   $ptot2=substr($crp1['jml_bayar'],1,3);
						   $ptot3=substr($crp1['jml_bayar'],4,3);
						   $gtot=$ptot.",".$ptot2.",".$ptot3;
						}
					  echo $gtot;
					  }else{ echo 0; }
					  ?>
        </div></td>
      </tr>
      <? $totb=$totb+$crp1['jml_bayar'];
					  $no+=1; } ?>
      <tr>
        <td height="20" colspan="3"><div align="center"><strong>Total Bayar </strong></div></td>
        <td><div align="right"><b>Rp.
              <?
					   // echo $totb;
					if($totb!=0){	
						if(strlen($totb)==6){
						   $ptot=substr($totb,0,3);
						   $ptot2=substr($totb,3,3);
						   $gtot=$ptot.",".$ptot2;
						}
						
						if(strlen($totb)==7){
						   $ptot=substr($totb,0,1);
						   $ptot2=substr($totb,1,3);
						   $ptot3=substr($totb,4,3);
						   $gtot=$ptot.",".$ptot2.",".$ptot3;
						}
						
						if(strlen($totb)==8){
						   $ptot=substr($totb,0,2);
						   $ptot2=substr($totb,2,3);
						   $ptot3=substr($totb,5,3);
						   $gtot=$ptot.",".$ptot2.",".$ptot3;
						}
						
						echo $gtot; }else{ echo 0; }
					  ?>
        </b></div></td>
      </tr>
      <tr>
        <td height="20" colspan="4">
          <table width="597" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="11%"><strong>Terbilang</strong></td>
              <td width="89%">: <? $a=angka_huruf($totb); echo $a; ?></td>
            </tr>
          </table>
        <div align="right"></div></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="3" bordercolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="1%" rowspan="9"></td>
        <td width="30%">&nbsp;</td>
        <td width="39%">&nbsp;</td>
        <td width="26%">&nbsp;</td>
        <td width="4%">&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center">Diterimah Oleh</div></td>
        <td>&nbsp;</td>
        <td><div align="center">Diserahkan Oleh</div></td>
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
        <td>&nbsp;</td>
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
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>
		  <div align="center">
	      ( <?
 
           $tampil=mysqli_query($koneksi, "SELECT nama_gp FROM guru_pegawai WHERE id_gp='$idgurp' ");
           $tp=mysqli_fetch_assoc($tampil);
		   echo $tp['nama_gp']; 
  
        ?> )	        </div></td>
        <td>&nbsp;</td>
        <td><div align="center">( &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
        <td>&nbsp;</td>
        <td><div align="center"></div></td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>

</body>
</html>
