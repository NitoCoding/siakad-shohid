<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
td {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	text-decoration: none;
	color: #333333;
}
.style1 {
	font-size: 14px;
	font-weight: bold;
}
-->
</style></head>
<?
include("../koneksi.php");
include("../function.php");
$bulan=$_GET['bulan'];
$tahun=$_GET['tahun'];
?>
<body>
<table width="1157" border="0" cellpadding="0" cellspacing="0">
  <?
  $tampil=mysqli_query($koneksi, "SELECT * FROM guru_pegawai,tb_rekap_gaji WHERE  guru_pegawai.id_gp=tb_rekap_gaji.id_gr and tb_rekap_gaji.bulan='$bulan' and tb_rekap_gaji.tahun='$tahun'");
  while($tp=mysqli_fetch_assoc($tampil)){
  $tot_gk=0; $jmt=0; $ti=0; $ja=0; $tj_vrb=0; $pot27=0; $pot1=0; $pj_kar=0;
  
  ?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="264">&nbsp;</td>
    <td valign="top"><table width="100%" height="261" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td height="259" valign="top"><table width="100%" border="0" cellpadding="2" cellspacing="0">
            <tr>
              <td height="28" colspan="2" bgcolor="#FFFFFF"><div align="center"><img src="../images/logo2.jpg" width="70" height="83" /></div></td>
            </tr>
            <tr>
              <td height="28" colspan="2" bgcolor="#FFFFFF"><div align="center" class="style1">YAYASAN SHOHWATUL IS'AD</div></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#FFFFFF"><div align="center" class="style1">PONDOK PESANTREN MODREN ISLAM SHOHWATUL IS'AD </div></td>
            </tr>
            <tr>
              <td height="30" colspan="2" bgcolor="#FFFFFF"><div align="center" class="style1">SLIP GAJI GURU DAN KARYAWAN</div></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#CCCCCC"><div align="center"></div></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#000000" height="1"></td>
            </tr>
            <tr>
              <td colspan="2" height="7"></td>
            </tr>
            <tr>
              <td>&nbsp;NIY</td>
              <td>: <? echo $tp['nip']; ?></td>
            </tr>
            <tr>
              <td>&nbsp;Nama</td>
              <td>: <? echo $tp['nama_gp']; ?></td>
            </tr>
            <tr>
              <td>&nbsp;Jabatan</td>
              <td>: <? echo $tp['ket_jabatan']; ?></td>
            </tr>
            <tr>
              <td>&nbsp;Bulan</td>
              <td>:
                <? 
			if($bulan=="1"){ $pbbln="Januari"; }
   if($bulan=="2"){    $pbbln="Februari";}
   if($bulan=="3"){   $pbbln="Maret"; }
   if($bulan=="4"){   $pbbln="April"; }
   if($bulan=="5"){   $pbbln="Mei"; }
   if($bulan=="6"){   $pbbln="Juni"; }
   if($bulan=="7"){   $pbbln="Juli"; }
   if($bulan=="8"){   $pbbln="Agustus"; }
   if($bulan=="9"){   $pbbln="September";}
   if($bulan=="10"){  $pbbln="Oktober";}
   if($bulan=="11"){  $pbbln="Nopember";}
   if($bulan=="12"){  $pbbln="Desember";}
			 echo $pbbln." "; echo date(Y); ?></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#000000" height="1"></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#CCCCCC"><div align="center"><strong>PENDAPATAN</strong></div></td>
            </tr>
            <tr>
              <td>&nbsp;Gaji Pokok </td>
              <td><div align="right">Rp.
                <?
			 
			$tampil2=mysqli_query($koneksi, "SELECT * FROM tb_gapok_gk WHERE id_gr='$tp[id_gp]' ");
            $tp2=mysqli_fetch_assoc($tampil2);
			
			$tampil3=mysqli_query($koneksi, "SELECT * FROM tb_gapok WHERE id_gp='$tp2[id_gapok]' ");
            $tp3=mysqli_fetch_assoc($tampil3);
			
			$tot_gk=$tp3['gapok']+$tp2['kenaikan'];
			
			$ctgj1=format_agk($tot_gk); 
		    echo $ctgj1;
			?>
              </div></td>
            </tr>
            <tr>
              <td>&nbsp;Tunjangan Struktural </td>
              <td><div align="right">Rp.
                <?
			$tampil4=mysqli_query($koneksi, "SELECT * FROM tb_tunjangan_gk WHERE id_gr='$tp[id_gp]' ");
            $tp4=mysqli_fetch_assoc($tampil4);
			
			$tampil5=mysqli_query($koneksi, "SELECT * FROM tb_tunjangan WHERE id_tj='$tp4[id_tj]' ");
            $tp5=mysqli_fetch_assoc($tampil5);
			$jmt=$tp5['jumlah_tj'];
			$ctgj2=format_agk($jmt); 
			
		    echo $ctgj2;
			?>
              </div></td>
            </tr>
            <tr>
              <td>&nbsp;Tunjangan Istri </td>
              <td><div align="right">Rp.
                <? 
		  
				if($tp['status_pernikahan']=='m') { $ti=ceil(($tot_gk*10)/100); 
				$bs=format_agk($ti); 
				echo $bs;
				 }  
		   ?>
              </div></td>
            </tr>
            <tr>
              <td>&nbsp;Tunjangan Anak</td>
              <td><div align="right">Rp.
                <? 
		        if($tp['jml_anak']=='') { $ja=0; }
				if($tp['jml_anak']=='1') { $ja=ceil(($tot_gk*5)/100); }
				if($tp['jml_anak']=='2') { $ja=ceil(($tot_gk*10)/100); }
				if($tp['jml_anak']=='3') { $ja=ceil(($tot_gk*15)/100); }
				
				$bs4=format_agk($ja); 
		        echo $bs4; 
				 
		   ?>
              </div></td>
            </tr>
            <tr>
              <td>&nbsp;Tunjagan Guru/Pegawai Tetap </td>
              <td><div align="right">Rp.
                <? 
		        
				 
		   ?>
              </div></td>
            </tr>
            <tr>
              <td>&nbsp;Tunjagan Lain-lain </td>
              <td><div align="right">Rp.
                <?
		 $tj_vrb=$tp4['tunjangan_variabel'];
		 $bs5=format_agk($tj_vrb); 
		  echo $bs5;
		  ?>
              </div></td>
            </tr>
            <tr>
              <td bgcolor="#eeeeee"><strong>&nbsp;Jumlah</strong></td>
              <td bgcolor="#eeeeee"><div align="right">Rp.
                <?
		  
		  $tot_g=$tot_gk+$jmt+$ti+$ja+$tj_vrb;
		 
		  $bs6=format_agk($tot_g); 
		  echo $bs6;
		  
		  ?>
              </div></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#000000" height="1"></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#CCCCCC"><div align="center"><strong>POTONGAN</strong></div></td>
            </tr>
            <tr>
              <td>&nbsp;Pajak PPH </td>
              <td><div align="right">Rp. </div></td>
            </tr>
            <tr>
              <td>&nbsp;BPJS Kesehatan </td>
              <td><div align="right">Rp.
                <? 
		  
		  $ntgk27=mysqli_query($koneksi, "SELECT * FROM tb_potongan,tb_potongan_gk WHERE tb_potongan.id_pt='3' and tb_potongan_gk.id_pot='3' and tb_potongan_gk.id_gr='$tp[id_gp]'");
          $cgk27=mysqli_fetch_assoc($ntgk27);
		  $pot27=$cgk27['jumlah_pt'];
		  
		  $bs18=format_agk($pot27); 
		  echo $bs18; 
					  
		   ?>
              </div></td>
            </tr>
            <tr>
              <td>&nbsp;BPJS Ketenagakerjaan </td>
              <td><div align="right"> Rp.
                <? 
		  
		  $ntgk9=mysqli_query($koneksi, "SELECT * FROM tb_potongan,tb_potongan_gk WHERE tb_potongan.id_pt='1' and tb_potongan_gk.id_pot='1' and tb_potongan_gk.id_gr='$tp[id_gp]'");
          $cgk9=mysqli_fetch_assoc($ntgk9);
		  $pot9=$cgk9['jumlah_pt'];
		  
		  $bs9=format_agk($pot9); 
		  echo $bs9; 
					  
		   ?>
              </div></td>
            </tr>
            <tr>
              <td>&nbsp;Pinjaman Guru/Karyawan </td>
              <td><div align="right"> Rp.
                <? 
		  $ntgk13=mysqli_query($koneksi, "SELECT * FROM tb_pinjaman WHERE id_gr='$tp[id_gp]' AND ket='pb'");
          $cgk13=mysqli_fetch_assoc($ntgk13);
		  
		  $pj_kar=$cgk13['jumlah'];
		  
		  $bs10=format_agk($pj_kar); 
		  echo $bs10; 
					  
		   ?>
              </div></td>
            </tr>
            <tr>
              <td>&nbsp;Listrik</td>
              <td><div align="right">Rp.
                  <? 
		  $ntgk13=mysqli_query($koneksi, "SELECT * FROM tb_pinjaman WHERE id_gr='$tp[id_gp]' AND ket='pl'");
          $cgk13=mysqli_fetch_assoc($ntgk13);
		  
		  $listrik=$cgk13['jumlah'];
		  
		  $bs10=format_agk($listrik); 
		  echo $bs10; 
					  
		   ?>
</div></td>
            </tr>
            
            <tr>
              <td bgcolor="#eeeeee"><strong>&nbsp;Jumlah</strong></td>
              <td bgcolor="#eeeeee"><div align="right">Rp.
                <?
		  
		  $tot_p11=$pot27+$pot9+$pj_kar+$listrik;
		 
		  $bs11=format_agk($tot_p11); 
		  echo $bs11;
		  
		  ?>
              </div></td>
            </tr>
            <tr>
              <td colspan="2" height="6"></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#000000" height="1"></td>
            </tr>
            <tr>
              <td width="154" bgcolor="#CCCCCC"><strong>PENDAPATAN BERSIH </strong></td>
              <td width="332" bgcolor="#CCCCCC"><div align="right">Rp.:
                <?
		  
		  $tot_pb=$tot_g-$tot_p11;
		 
		  $pb_gp=format_agk($tot_pb); 
		  echo $pb_gp;
		  
		  ?>
              </div></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
    <td valign="top">&nbsp;</td>
    <td>&nbsp;</td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td><table width="494" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td width="217">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Penerima,</td>
            <td width="156">Kepala HRD ,</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<? echo $tp['nama_gp']; ?>)</td>
            <td>(Ady Mulya Azis,S.Kom) </td>
          </tr>
          <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NIY. <? echo $tp['nip']; ?></td>
            <td>NIY. <strong>200907 1 1 007</strong></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <?
  }
  ?>
  <tr>
    <td width="13"><div align="center"></div></td>
    <td width="498">&nbsp;</td>
    <td width="55">&nbsp;</td>
    <td width="384">&nbsp;</td>
    <td width="207"><div align="right"></div></td>
  </tr>
</table>
</body>
</html>
