<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style4 {color: #000000; font-weight: bold; }
.style5 {
	font-size: 24px;
	font-weight: bold;
}
-->
</style>
</head>
<? include("../koneksi.php");
 include("../function.php");
 
 $idgp_cg=$_GET['idgp_cg'];
 ?>
<body>
<table width="750" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <?   $tam=mysqli_query($koneksi, "SELECT * FROM guru_pegawai WHERE id_gp='$idgp_cg' ");
       $tp=mysqli_fetch_assoc($tam);
	 ?>
	  <tr>
        <td width="327">YAYASAN SHOHWATUL  IS&rsquo;AD</td>
        <td width="23">&nbsp;</td>
        <td width="156">&nbsp;</td>
        <td width="115">Bulan</td>
        <td width="9">:</td>
        <td width="120"><? echo date('M - Y') ?></td>
      </tr>
      <tr>
        <td>Jl. Poros Padanglampe  Kec. Ma&rsquo;rang Pangkep</td>
        <td colspan="2"><div align="center" class="style5">SLIP GAJI</div></td>
        <td>No. Referensi</td>
        <td>:</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Telp. 081 241 200 583</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>Kode Karyawan</td>
        <td>:</td>
        <td>&nbsp;</td>
      </tr>

      <tr>
        <td colspan="6">===============================================================================</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="750" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="80">NIY</td>
        <td width="11">:</td>
        <td width="254"><? echo $tp['nip'];?></td>
        <td width="156">&nbsp;</td>
        <td width="52">Alamat</td>
        <td width="10">:</td>
        <td width="187">&nbsp;</td>
      </tr>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><? echo $tp['nama_gp'];?></td>
        <td>&nbsp;</td>
        <td>Telpon</td>
        <td>:</td>
        <td><? echo $tp['telpon'];?></td>
      </tr>
      <tr>
        <td>Jabatan</td>
        <td>:</td>
        <td><? echo $tp['Jabatan'];?></td>
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
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="750" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="39" height="24" bgcolor="#CCCCCC"><span class="style4">&nbsp;NO.</span></td>
        <td width="261" bgcolor="#CCCCCC"><span class="style4">&nbsp;KETERANGAN</span></td>
        <td width="223" bgcolor="#CCCCCC">&nbsp;</td>
        <td width="98" bgcolor="#CCCCCC"><span class="style4">JUMLAH</span></td>
        <td width="129" bgcolor="#CCCCCC">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2"><strong>PENDAPATAN</strong></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center">1.</div></td>
        <td>Gaji Pokok </td>
        <td><div align="right">Rp.</div></td>
        <td><div align="right">
          <? 
		  $ntgk=mysqli_query($koneksi, "SELECT * FROM tb_gapok WHERE nama_gp='$tp[pendidikan]'");
          $cgk=mysqli_fetch_assoc($ntgk);
		  
		  $ntgk2=mysqli_query($koneksi, "SELECT * FROM tb_gapok_gk WHERE id_gr='$tp[id_gp]'");
          $cgk2=mysqli_fetch_assoc($ntgk2);
		  $tgp=$cgk['gapok']+$cgk2['kenaikan'];  
		  
		  $bs1=format_agk($tgp); 
		  echo $bs1; 
		  
		  ?>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center">2.</div></td>
        <td>Tunjangan Jabatan </td>
        <td><div align="right">Rp.</div></td>
        <td><div align="right">
          <? 
		  $ntgk3=mysqli_query($koneksi, "SELECT * FROM tb_tunjangan_gk WHERE id_gr='$tp[id_gp]'");
          $cgk3=mysqli_fetch_assoc($ntgk3);
		  
		  $ntgk4=mysqli_query($koneksi, "SELECT * FROM tb_tunjangan WHERE id_tj='$cgk3[id_tj]' ");
          $cgk4=mysqli_fetch_assoc($ntgk4);
		  $gjstr=$cgk4['jumlah_tj'];
		  
		  $bs2=format_agk($gjstr); 
		  echo $bs2; 
					  
		   ?>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center">3.</div></td>
        <td>Tunjangan Istri/Suami </td>
        <td><div align="right">Rp. </div></td>
        <td><div align="right">
          <? 
		  
				
				$bs=format_agk($cgk3['tj_istri_suami']); 
				echo $bs;
				 
		   ?>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center">4.</div></td>
        <td>Tunjangan Anak </td>
        <td><div align="right">Rp.</div></td>
        <td><div align="right">
          <? 
		       
				$bs4=format_agk($cgk3['tj_anak']); 
		        echo $bs4; 
				 
		   ?>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center">5.</div></td>
        <td>Tunjangan Guru/Pegawai Tetap </td>
        <td><div align="right">Rp. </div></td>
        <td><div align="right">
          <? 
		  
		  
		  $bs3=format_agk($cgk3['tj_gp_tetap']); 
		  echo $bs3; 
					  
		   ?>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center">6.</div></td>
        <td>Tunjangan Kompetensi </td>
        <td><div align="right">Rp. </div></td>
        <td><div align="right">
          <? 
		       
				$bs4=format_agk($cgk3['tj_kompetensi']); 
		        echo $bs4; 
				 
		   ?>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center">7.</div></td>
        <td>Tunjangan Lain-lain </td>
        <td><div align="right">Rp. </div></td>
        <td><div align="right">
          <?
		  
		 
		 $bs5=format_agk($cgk3['tj_lain']); 
		  echo $bs5;
		  ?>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
        <td><div align="right"></div></td>
        <td><div align="right"></div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2"><strong>TOTAL PENDAPATAN </strong></td>
        <td><div align="right"><strong>Rp.</strong></div></td>
        <td><div align="right"><strong>
          <?
		  
		  $tot_g=$tgp+$gjstr+$cgk3['tj_gp_tetap']+$cgk3['tj_istri_suami']+$cgk3['tj_anak']+$cgk3['tj_kompetensi']+$cgk3['tj_lain'];
		 
		  $bs6=format_agk($tot_g); 
		  echo $bs6;
		  
		  ?>
        </strong></div></td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td><table width="750" border="0" cellspacing="0" cellpadding="0">
      
      <tr>
        <td width="39">&nbsp;</td>
        <td width="261">&nbsp;</td>
        <td width="223">&nbsp;</td>
        <td width="97">&nbsp;</td>
        <td width="130">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2"><strong>POTONGAN</strong></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center">1.</div></td>
        <td>Pinjaman Guru/Pegawai </td>
        <td><div align="right">Rp. </div></td>
        <td><div align="right">
          <? 
		  $ntgk3=mysqli_query($koneksi, "SELECT * FROM tb_potongan_gk WHERE id_gr='$tp[id_gp]' ");
          $cgk3=mysqli_fetch_assoc($ntgk3);
		  
		  $ntgk=mysqli_query($koneksi, "SELECT * FROM tb_potongan WHERE id_pt='$cgk3[id_pot]' ");
          $cgk=mysqli_fetch_assoc($ntgk);
		  
		  $pj_kar=$cgk3['p_pinjaman'];
		  
		  $bs7=format_agk($pj_kar); 
		  echo $bs7; 
					  
		   ?>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center">2.</div></td>
        <td>BPJS Kesehatan </td>
        <td><div align="right">Rp.</div></td>
        <td><div align="right">
          <? 
		
		  
		  $bs8=format_agk($cgk3['p_kesehatan']); 
		  echo $bs8; 
					  
		   ?>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center">3.</div></td>
        <td>BPJS Ketenaga Kerjaan </td>
        <td><div align="right">Rp. </div></td>
        <td><div align="right">
          <? 
		  
		  $pot1=$cgk['jumlah_pt'];
		  
		  $bs8=format_agk($pot1); 
		  echo $bs8; 
					  
		   ?>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center">4.</div></td>
        <td>Listrik</td>
        <td><div align="right">Rp. </div></td>
        <td><div align="right">
          <? 
		  
		  
		  $bs9=format_agk($cgk3['p_listrik']); 
		  echo $bs9; 
					  
		   ?>
        </div></td>
        <td>&nbsp;</td>
      </tr>

      <tr>
        <td colspan="2">&nbsp;</td>
        <td><div align="right"></div></td>
        <td><div align="right"></div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2"><strong>TOTAL POTONGAN </strong></td>
        <td><div align="right"><strong>Rp.</strong></div></td>
        <td><div align="right"><strong>
          <?
		  
		  $tot_p=$cgk3['p_pinjaman']+$cgk3['p_kesehatan']+$cgk['jumlah_pt']+$cgk3['p_listrik'];
		 
		  $bs7=format_agk($tot_p); 
		  echo $bs7;
		  
		  ?>
        </strong></div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
        <td><div align="right"></div></td>
        <td><div align="right"></div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="23" colspan="2" bgcolor="#999999"><strong>&nbsp;PENDAPATAN BERSIH </strong></td>
        <td bgcolor="#999999"><div align="right"><strong>Rp. </strong></div></td>
        <td bgcolor="#999999"><div align="right"><strong>
          <?
		  
		  $pend_b=round($tot_g-$tot_p);
		 
		  $bs8=format_agk($pend_b); 
		  echo $bs8;
		  
		  ?>
        </strong></div></td>
        <td bgcolor="#999999">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="750" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="31">&nbsp;</td>
        <td width="343">PENERIMA</td>
        <td width="120">&nbsp;</td>
        <td width="256">HRD. PPMI Shohwatul Is'ad </td>
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
        <td>( <? echo $tp['nama_gp'];?> )</td>
        <td>&nbsp;</td>
        <td>(Ady Mulya Azis, S.Kom.) </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>NIY. <? echo $tp['nip'];?></td>
        <td>&nbsp;</td>
        <td>NIY.&nbsp; 200907 1 1 007</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
