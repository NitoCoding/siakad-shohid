<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
td {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	text-decoration: none;
	color: #333333;
}
.style1 {color: #FF0000}
</style>
</head>
<?
include("../koneksi.php");
include("../function.php");
$bulan=$_GET['bulan'];
$tahun=$_GET['tahun'];
?>
<body>
<table width="1544" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="2%" >&nbsp;</td>
    <td width="92%"></td>
    <td width="6%"></td>
  </tr>
  <tr>
    <td >&nbsp;</td>
    <td><div align="center">REKAP GAJI GURU DAN KARYAWAN PPMI SHOHWATUL IS'AD </div></td>
    <td><div align="center" class="style1">RAHASIA</div></td>
  </tr>
  <tr>
    <td >&nbsp;</td>
    <td><div align="center">BULAN <? echo"$bulan"; ?> TAHUN <? echo"$tahun"; ?></div></td>
    <td></td>
  </tr>
  <tr>
    <td >&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  
  <tr>
    <td colspan="3" > <?  if($idgurp=='7'){  ?>
      <table width="1541" border="1" cellspacing="0" cellpadding="0">
        <tr>
          <td width="2%" rowspan="2" ><div align="center">NO</div>            <div align="center"></div></td>
          <td width="12%" rowspan="2"><div align="center">NAMA GURU / KARYAWAN </div></td>
          <td width="10%" rowspan="2"><div align="center">JABATAN</div></td>
          <td width="3%" rowspan="2"><div align="center">MASA KERJA </div></td>
          <td width="3%" rowspan="2"><div align="center">STATUS PEGAWAI </div></td>
          <td width="3%" rowspan="2"><div align="center">NIKAH</div></td>
          <td width="3%" rowspan="2"><div align="center">ANAK</div></td>
          <td colspan="7"><div align="center">PENDAPATAN</div></td>
          <td colspan="7"><div align="center">POTONGAN</div></td>
          <td width="4%" rowspan="2"><div align="center">PENDAPATAN BERSIH </div>            <div align="center"></div></td>
        </tr>
        <tr>
          <td width="4%"><div align="center">Gaji Pokok </div></td>
          <td width="4%"><div align="center">Tunj. Struktural </div></td>
          <td width="4%"><div align="center">Tunj. wali /staff </div></td>
          <td width="4%"><div align="center">Tunj. Istri </div></td>
          <td width="4%"><div align="center">Tunj. Anak </div></td>
          <td width="4%"><div align="center">Tunj. lain2 </div></td>
          <td width="4%"><div align="center">Total Pendapatan </div></td>
          <td width="4%"><div align="center">Pinj. Karyawan </div></td>
          <td width="4%"><div align="center">Cuti</div></td>
          <td width="3%"><div align="center">Pajak</div></td>
          <td width="4%"><div align="center">Bpjs KK </div></td>
          <td width="4%"><div align="center">Masjid</div></td>
          <td width="4%"><div align="center">Bpjs KS </div></td>
          <td width="4%"><div align="center">Total Potongan </div></td>
        </tr>
		<? 
		
		  $no=1;
		  $tampil=mysqli_query($koneksi, "SELECT * FROM guru_pegawai,tb_rekap_gaji WHERE guru_pegawai.id_gp=tb_rekap_gaji.id_gr and tb_rekap_gaji.bulan='$bulan' and tb_rekap_gaji.tahun='$tahun'");
          while($tp=mysqli_fetch_assoc($tampil)){
		
		  ?>
        <tr>
          <td><div align="center"><? echo $no; ?></div></td>
          <td><? echo $tp['nama_gp']; ?></td>
          <td><div align="center"><? echo $tp['ket_jabatan']; ?></div></td>
          <td><div align="center">
            <? $tm=date('Y')-$tp['thn_trdaftar']; echo $tm." thn"; ?>
          </div></td>
          <td><div align="center">
            <? 
		  if($tp['status_pg']=='t'){ echo"Tetap";}
		  if($tp['status_pg']=='k'){ echo"Kontrak";}
		  if($tp['status_pg']=='h'){ echo"Honor";}
		  if($tp['status_pg']=='p'){ echo"Percobaan";}
		   ?>
          </div></td>
          <td><div align="center"><? echo $tp['status_pernikahan']; ?></div></td>
          <td><div align="center"><? echo $tp['jml_anak']; ?></div></td>
          <td><div align="center">
            <? 
		  $ntgk=mysqli_query($koneksi, "SELECT * FROM tb_gapok WHERE nama_gp='$tp[pendidikan]'");
          $cgk=mysqli_fetch_assoc($ntgk);
		  
		  $ntgk2=mysqli_query($koneksi, "SELECT * FROM tb_gapok_gk WHERE id_gr='$tp[id_gp]'");
          $cgk2=mysqli_fetch_assoc($ntgk2);
		  $tgp=$cgk['gapok']+$cgk2['kenaikan'];  
		  
		  $bs1=format_agk($tgp); 
		  echo $bs1; 
		  $ttgp=$ttgp+$tgp;
		  ?>
          </div></td>
          <td><div align="right">
            <? 
		  $ntgk3=mysqli_query($koneksi, "SELECT * FROM tb_tunjangan_gk WHERE id_gr='$tp[id_gp]'");
          $cgk3=mysqli_fetch_assoc($ntgk3);
		  
		  $ntgk4=mysqli_query($koneksi, "SELECT * FROM tb_tunjangan WHERE id_tj='$cgk3[id_tj]' and ket='s'");
          $cgk4=mysqli_fetch_assoc($ntgk4);
		  $gjstr=$cgk4['jumlah_tj'];
		  
		  $bs2=format_agk($gjstr); 
		  echo $bs2; 
		  $tjstr=$tjstr+$gjstr;		  
		   ?>
          </div></td>
          <td><div align="right">
            <? 
		  $ntgk3=mysqli_query($koneksi, "SELECT * FROM tb_tunjangan_gk WHERE id_gr='$tp[id_gp]'");
          $cgk3=mysqli_fetch_assoc($ntgk3);
		  
		  $ntgk4=mysqli_query($koneksi, "SELECT * FROM tb_tunjangan WHERE id_tj='$cgk3[id_tj]' and ket='w'");
          $cgk4=mysqli_fetch_assoc($ntgk4);
		  $tj_wli=$cgk4['jumlah_tj'];
		  
		  $bs3=format_agk($tj_wli); 
		  echo $bs3; 
			$tjws=$tjws+$tj_wli;
		   ?>
          </div></td>
          <td><div align="right">
            <? 
		  
				if($tp['status_pernikahan']=='m') { $ti=ceil(($tgp*10)/100); 
				$bs=format_agk($ti); 
				echo $bs;
				$tjsp=$tjsp+$ti;
				 }  
		   ?>
          </div></td>
          <td><div align="right">
            <? 
		        if($tp['jml_anak']=='') { $ja=0; }
				if($tp['jml_anak']=='1') { $ja=ceil(($tgp*5)/100); }
				if($tp['jml_anak']=='2') { $ja=ceil(($tgp*10)/100); }
				if($tp['jml_anak']=='3') { $ja=ceil(($tgp*15)/100); }
				
				$bs4=format_agk($ja); 
		        echo $bs4; 
				 $tan=$tan+$ja;
		   ?>
          </div></td>
          <td><div align="right">
            <?
		  $ntgk4=mysqli_query($koneksi, "SELECT * FROM tb_tunjangan_gk WHERE id_gr='$tp[id_gp]'");
          $cgk4=mysqli_fetch_assoc($ntgk4);
		  $tj_vrb=$cgk4['tunjangan_variabel'];
		 
		 $bs5=format_agk($tj_vrb); 
		  echo $bs5;
		  $tll=$tll+$tj_vrb;
		  ?>
          </div></td>
          <td><div align="right">
            <?
		  
		  $tot_g=$tgp+$gjstr+$tj_wli+$ti+$ja+$tj_vrb;
		 
		  $bs6=format_agk($tot_g); 
		  echo $bs6;
		  $ttppg=$ttppg+$tot_g;
		  ?>
          </div></td>
          <td><div align="right">
            <? 
		  $ntgk3=mysqli_query($koneksi, "SELECT * FROM tb_pinjaman WHERE id_gr='$tp[id_gp]'");
          $cgk3=mysqli_fetch_assoc($ntgk3);
		  
		  $pj_kar=$cgk3['jumlah']-$cgk3['telah_dibayar'];
		  
		  $bs7=format_agk($pj_kar); 
		  echo $bs7; 
			$pkar=$pkar+$pj_kar;		  
		   ?>
          </div></td>
          <td><div align="right">
            <? 
		 // $ntgk3=mysqli_query($koneksi, "SELECT * FROM tb_potongan_gk WHERE id_gr='$tp[id_gp]' and id_pot='1'");
         // $cgk3=mysqli_fetch_assoc($ntgk3);
		  
		  $ntgk6=mysqli_query($koneksi, "SELECT * FROM tb_potongan,tb_potongan_gk WHERE tb_potongan.id_pt='4' and tb_potongan_gk.id_pot='4' and tb_potongan_gk.id_gr='$tp[id_gp]'");
          $cgk6=mysqli_fetch_assoc($ntgk6);
		  $pot3=$cgk6['jumlah_pt'];
		  
		  $bs21=format_agk($pot3); 
		  echo $bs21; 
					  
		   ?>
          </div></td>
          <td><div align="right"></div></td>
          <td><div align="right">
            <? 
		 // $ntgk3=mysqli_query($koneksi, "SELECT * FROM tb_potongan_gk WHERE id_gr='$tp[id_gp]' and id_pot='1'");
         // $cgk3=mysqli_fetch_assoc($ntgk3);
		  
		  $ntgk4=mysqli_query($koneksi, "SELECT * FROM tb_potongan,tb_potongan_gk WHERE tb_potongan.id_pt='1' and tb_potongan_gk.id_pot='1' and tb_potongan_gk.id_gr='$tp[id_gp]'");
          $cgk4=mysqli_fetch_assoc($ntgk4);
		  $pot1=$cgk4['jumlah_pt'];
		  
		  $bs8=format_agk($pot1); 
		  echo $bs8; 
			$bpjskk=$bpjskk+$pot1;		  
		   ?>
          </div></td>
          <td><div align="right"></div></td>
          <td><div align="right">
            <? 
		 // $ntgk3=mysqli_query($koneksi, "SELECT * FROM tb_potongan_gk WHERE id_gr='$tp[id_gp]' and id_pot='1'");
         // $cgk3=mysqli_fetch_assoc($ntgk3);
		  
		  $ntgk4=mysqli_query($koneksi, "SELECT * FROM tb_potongan,tb_potongan_gk WHERE tb_potongan.id_pt='3' and tb_potongan_gk.id_pot='3' and tb_potongan_gk.id_gr='$tp[id_gp]'");
          $cgk4=mysqli_fetch_assoc($ntgk4);
		  $pot2=$cgk4['jumlah_pt'];
		  
		  $bs8=format_agk($pot2); 
		  echo $bs8; 
			$bpjske=$bpjske+$pot2;		  
		   ?>
          </div></td>
          <td><div align="right">
            <?
		  
		  $tot_p=$pj_kar+$pot1+$pot2+$pot3;
		 
		  $bs7=format_agk($tot_p); 
		  echo $bs7;
		  $ttpot=$ttpot+$tot_p;
		  ?>
          </div></td>
          <td><div align="right">
            <?
		  
		  $pend_b=$tot_g-$tot_p;
		 
		  $bs8=format_agk($pend_b); 
		  echo $bs8;
		  $penbrs=$penbrs+$pend_b;
		  ?>
          </div></td>
        </tr>
		<? $no+=1; $tgp=0;$gjstr=0; $tj_wli=0; $ti=0; $ja=0; $tj_vrb=0; } ?>
        <tr>
          <td height="30" colspan="7"><div align="center">T O T A L </div>            <div align="center"></div>            <div align="center"></div>            <div align="center"></div>            <div align="center"></div></td>
          <td bgcolor="#CCCCCC"><div align="center"><? $cttgp=format_agk($ttgp); echo $cttgp; ?></div></td>
          <td bgcolor="#CCCCCC"><div align="right">
            <? $ctjstr=format_agk($tjstr); echo $ctjstr; ?>
          </div></td>
          <td bgcolor="#CCCCCC"><div align="right">
            <? $ctjws=format_agk($tjws); echo $ctjws; ?>
          </div></td>
          <td bgcolor="#CCCCCC"><div align="right">
            <? $ctjsp=format_agk($tjsp); echo $ctjsp; ?>
          </div></td>
          <td bgcolor="#CCCCCC"><div align="right">
            <? $ctan=format_agk($tan); echo $ctan; ?>
          </div></td>
          <td bgcolor="#CCCCCC"><div align="right">
            <? $ctll=format_agk($tll); echo $ctll; ?>
          </div></td>
          <td bgcolor="#CCCCCC"><div align="right">
            <? $cttppg=format_agk($ttppg); echo $cttppg; ?>
          </div></td>
          <td bgcolor="#CCCCCC"><div align="right">
            <? $cpkar=format_agk($pkar); echo $cpkar; ?>
          </div></td>
          <td bgcolor="#CCCCCC"><div align="right"></div></td>
          <td bgcolor="#CCCCCC"><div align="right"></div></td>
          <td bgcolor="#CCCCCC"><div align="right">
            <? $cbpjskk=format_agk($bpjskk); echo $cbpjskk; ?>
          </div></td>
          <td bgcolor="#CCCCCC"><div align="right"></div></td>
          <td bgcolor="#CCCCCC"><div align="right">
            <? $cbpjske=format_agk($bpjske); echo $cbpjske; ?>
          </div></td>
          <td bgcolor="#CCCCCC"><div align="right">
            <? $cttpot=format_agk($ttpot); echo $cttpot; ?>
          </div></td>
          <td bgcolor="#CCCCCC"><div align="right">
            <? $cpenbrs=format_agk($penbrs); echo $cpenbrs; ?>
          </div></td>
        </tr>
      </table>  <? } ?>  </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Bagian SDI PPMI Shohwatul Is'ad </td>
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
    <td>&nbsp;</td>
    <td>Ady Mulya Azis, S.Kom. </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>NIY : 200907 1 1 007</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
