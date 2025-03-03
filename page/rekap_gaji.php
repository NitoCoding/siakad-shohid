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
td {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	text-decoration: none;
	color: #333333;
}
</style>
</head>

<body>
<table width="1544" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="2%" >&nbsp;</td>
    <td width="91%">&nbsp;</td>
    <td width="7%"></td>
  </tr>
  <tr>
    <td >&nbsp;</td>
    <td>Bulan
      <select name="select" onchange="MM_jumpMenu('parent',this,0)">
        <option value="home.php?home=gjk&dpn_pg=rg" <? if($blnk==""){ echo"selected='selected'"; } ?>>Pilih</option>
        <option value="home.php?home=gjk&amp;blnk=1&dpn_pg=rg" <? if($blnk=="1"){ echo"selected='selected'"; } ?>>Januari</option>
        <option value="home.php?home=gjk&amp;blnk=2&dpn_pg=rg" <? if($blnk=="2"){ echo"selected='selected'"; } ?>>Februari</option>
        <option value="home.php?home=gjk&amp;blnk=3&dpn_pg=rg" <? if($blnk=="3"){ echo"selected='selected'"; } ?>>Maret</option>
        <option value="home.php?home=gjk&amp;blnk=4&dpn_pg=rg" <? if($blnk=="4"){ echo"selected='selected'"; } ?>>April</option>
        <option value="home.php?home=gjk&amp;blnk=5&dpn_pg=rg" <? if($blnk=="5"){ echo"selected='selected'"; } ?>>Mei</option>
        <option value="home.php?home=gjk&amp;blnk=6&dpn_pg=rg" <? if($blnk=="6"){ echo"selected='selected'"; } ?>>Juni</option>
        <option value="home.php?home=gjk&amp;blnk=7&dpn_pg=rg" <? if($blnk=="7"){ echo"selected='selected'"; } ?>>Juli</option>
        <option value="home.php?home=gjk&amp;blnk=8&dpn_pg=rg" <? if($blnk=="8"){ echo"selected='selected'"; } ?>>Agustus</option>
        <option value="home.php?home=gjk&amp;blnk=9&dpn_pg=rg" <? if($blnk=="9"){ echo"selected='selected'"; } ?>>September</option>
        <option value="home.php?home=gjk&amp;blnk=10&dpn_pg=rg" <? if($blnk=="10"){ echo"selected='selected'"; } ?>>Oktober</option>
        <option value="home.php?home=gjk&amp;blnk=11&dpn_pg=rg" <? if($blnk=="11"){ echo"selected='selected'"; } ?>>Nopember</option>
        <option value="home.php?home=gjk&amp;blnk=12&dpn_pg=rg" <? if($blnk=="12"){ echo"selected='selected'"; } ?>>Desember</option>
      </select>
Tahun
<select name="select2" onchange="MM_jumpMenu('parent',this,0)">
  <option value="home.php?home=gjk&dpn_pg=rg" <? if($taj==""){ echo"selected='selected'"; } ?>>Pilih</option>
  <option value="home.php?home=gjk&taj=2021&dpn_pg=rg&blnk=<? echo $blnk; ?>" <? if($taj=="2021"){ echo"selected='selected'"; } ?>>2021</option>
  <option value="home.php?home=gjk&taj=2022&dpn_pg=rg&blnk=<? echo $blnk; ?>" <? if($taj=="2022"){ echo"selected='selected'"; } ?>>2022</option>
  <option value="home.php?home=gjk&taj=2023&dpn_pg=rg&blnk=<? echo $blnk; ?>" <? if($taj=="2023"){ echo"selected='selected'"; } ?>>2023</option>
  <option value="home.php?home=gjk&taj=2024&dpn_pg=rg&blnk=<? echo $blnk; ?>" <? if($taj=="2024"){ echo"selected='selected'"; } ?>>2024</option>
</select>
<a href="page/report_rekap_gaji_bulanan.php?<? echo"bulan=$blnk&tahun=$taj"; ?>" target="_blank">Cetak Rekap Gaji  </a> - <a href="page/report_slip_gaji.php?<? echo"bulan=$blnk&tahun=$taj";?>" target="_blank">Cetak Slip Gaji</a> </td>
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
          <td width="4%" rowspan="2"><div align="center">STATUS PEGAWAI </div></td>
          <td width="3%" rowspan="2"><div align="center">NIKAH</div></td>
          <td width="3%" rowspan="2"><div align="center">ANAK</div></td>
          <td colspan="8"><div align="center">PENDAPATAN</div></td>
          <td colspan="5"><div align="center">POTONGAN</div></td>
          <td width="5%" rowspan="2"><div align="center">PENDAPATAN BERSIH </div>            <div align="center"></div></td>
        </tr>
        <tr>
          <td width="4%"><div align="center">Gaji Pokok </div></td>
          <td width="4%"><div align="center">Tunj. Jabatan </div></td>
          <td width="4%"><div align="center">Tunj. GR/PG Tetap </div></td>
          <td width="4%"><div align="center">Tunj. Istri </div></td>
          <td width="4%"><div align="center">Tunj. Anak </div></td>
          <td width="4%"><div align="center">Tunj. Komp </div></td>
          <td width="4%"><div align="center">Tunj. lain2 </div></td>
          <td width="5%"><div align="center">Total Pendapatan </div></td>
          <td width="4%"><div align="center">Pinj. Karyawan </div></td>
          <td width="3%"><div align="center">Bpjs KT </div></td>
          <td width="4%"><div align="center">Listrik</div></td>
          <td width="4%"><div align="center">BPJS KS </div></td>
          <td width="4%"><div align="center">Total Potongan </div></td>
        </tr>
		<? 
		 
		  $no=1;
		  $tam=mysqli_query($koneksi, "SELECT * FROM guru_pegawai ");
          while($tp=mysqli_fetch_assoc($tam)){
		       
		  
		  ?>
        <tr>
          <td><div align="center"><a href="page/slip_gaji.php?<? echo"idgp_cg=$tp[id_gp]"; ?>" target="_blank"><? echo $no; ?></a></div></td>
          <td><? if($blnk!="" and $taj!=""){  ?><a href="page/act_dt_gaji.php?<? echo "idgp_cg=$tp[id_gp]&bulan=$blnk&tahun=$taj&tot_tj=$tot_g&tot_pt=$tot_p&rekam9=Simpan";?>"><? } ?><? echo $tp['nama_gp']; ?><? if($blnk!="" and $taj!=""){  ?></a><? } ?></td>
          <td><div align="center"><? echo $tp['ket_jabatan']; ?></div></td>
          <td><div align="center"><? $tm=date('Y')-$tp['thn_trdaftar']; echo $tm." thn"; ?></div></td>
          <td><div align="center"><? 
		  if($tp['status_pg']=='t'){ echo"Tetap";}
		  if($tp['status_pg']=='k'){ echo"Kontrak";}
		  if($tp['status_pg']=='h'){ echo"Honor";}
		  if($tp['status_pg']=='p'){ echo"Percobaan";}
		   ?></div></td>
          <td><div align="center"><? echo $tp['status_pernikahan']; ?></div></td>
          <td><div align="center"><? echo $tp['jml_anak']; ?></div></td>
          <td><div align="center"><? 
		  $ntgk=mysqli_query($koneksi, "SELECT * FROM tb_gapok WHERE nama_gp='$tp[pendidikan]'");
          $cgk=mysqli_fetch_assoc($ntgk);
		  
		  $ntgk2=mysqli_query($koneksi, "SELECT * FROM tb_gapok_gk WHERE id_gr='$tp[id_gp]'");
          $cgk2=mysqli_fetch_assoc($ntgk2);
		  $tgp=$cgk['gapok']+$cgk2['kenaikan'];  
		  
		  $bs1=format_agk($tgp); 
		  echo $bs1; 
		  
		  ?></div></td>
          <td><div align="right"><? 
		  $ntgk3=mysqli_query($koneksi, "SELECT * FROM tb_tunjangan_gk WHERE id_gr='$tp[id_gp]'");
          $cgk3=mysqli_fetch_assoc($ntgk3);
		  
		  $ntgk4=mysqli_query($koneksi, "SELECT * FROM tb_tunjangan WHERE id_tj='$cgk3[id_tj]' ");
          $cgk4=mysqli_fetch_assoc($ntgk4);
		  $gjstr=$cgk4['jumlah_tj'];
		  
		  $bs2=format_agk($gjstr); 
		  echo $bs2; 
					  
		   ?></div></td>
          <td><div align="right">
            <? 
		  
		  
		  $bs3=format_agk($cgk3['tj_gp_tetap']); 
		  echo $bs3; 
					  
		   ?>
          </div></td>
          <td><div align="right">
            <? 
		  
				
				$bs=format_agk($cgk3['tj_istri_suami']); 
				echo $bs;
				 
		   ?>
          </div></td>
          <td><div align="right">
            <? 
		       
				$bs4=format_agk($cgk3['tj_anak']); 
		        echo $bs4; 
				 
		   ?>
          </div></td>
          <td><div align="right">
            <? 
		       
				$bs4=format_agk($cgk3['tj_kompetensi']); 
		        echo $bs4; 
				 
		   ?>
          </div></td>
          <td><div align="right"><?
		  
		 
		 $bs5=format_agk($cgk3['tj_lain']); 
		  echo $bs5;
		  ?></div></td>
          <td><div align="right"><?
		  
		  $tot_g=$tgp+$gjstr+$cgk3['tj_gp_tetap']+$cgk3['tj_istri_suami']+$cgk3['tj_anak']+$cgk3['tj_kompetensi']+$cgk3['tj_lain'];
		 
		  $bs6=format_agk($tot_g); 
		  echo $bs6;
		  
		  ?></div></td>
          <td><div align="right">
            <? 
		  $ntgk3=mysqli_query($koneksi, "SELECT * FROM tb_potongan_gk WHERE id_gr='$tp[id_gp]' ");
          $cgk3=mysqli_fetch_assoc($ntgk3);
		  
		  $ntgk=mysqli_query($koneksi, "SELECT * FROM tb_potongan WHERE id_pt='$cgk3[id_pot]' ");
          $cgk=mysqli_fetch_assoc($ntgk);
		  
		  $pj_kar=$cgk3['pt_pinjaman'];
		  
		  $bs7=format_agk($pj_kar); 
		  echo $bs7; 
					  
		   ?>
          </div></td>
          <td><div align="right">
            <? 
		  
		  $pot1=$cgk['jumlah_pt'];
		  
		  $bs8=format_agk($pot1); 
		  echo $bs8; 
					  
		   ?>
          </div></td>
          <td><div align="right">
            <? 
		  
		  
		  $bs9=format_agk($cgk3['pt_listrik']); 
		  echo $bs9; 
					  
		   ?>
          </div></td>
          <td><div align="right">
            <? 
		
		  
		  $bs8=format_agk($cgk3['pt_bpjs_kes']); 
		  echo $bs8; 
					  
		   ?>
          </div></td>
          <td><div align="right">
            <?
		  
		  $tot_p=$pj_kar+$pot1+$cgk3['pt_listrik']+$cgk3['pt_bpjs_kes'];
		 
		  $bs7=format_agk($tot_p); 
		  echo $bs7;
		  
		  ?>
          </div></td>
          <td><div align="right">
            <?
		  
		  $pend_b=round($tot_g-$tot_p);
		 
		  $bs8=format_agk($pend_b); 
		  echo $bs8;
		  
		  ?>
          </div></td>
        </tr>
		<? $no+=1;  $tgp=0;$gjstr=0; $tj_wli=0; $ti=0; $ja=0; $tj_vrb=0; 
		  // }
		
		 } ?>
      </table>   <? } ?> </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
