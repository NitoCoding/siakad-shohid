<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<? include("../koneksi.php"); 
  include("../function.php"); 
 $blnk=$_GET['blnk'];
 $pknk=$_GET['pknk'];
 $klsk=$_GET['klsk'];
 $thaj=$_COOKIE['thaj'];
 $sem=$_COOKIE['sem'];
 
 ?>
<body>
<table width="85%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr> 
    <td colspan="6"><div align="left" class="style4">&nbsp;<font color="#FF0000">Tunggakan 
        Kelas :</font> <? echo $klsk; ?>&nbsp;&nbsp; <font color="#FF0000">Bulan 
        : </font> 
        <? 
		$tgl=date("d");
   if($tgl<=7){ $pkn="I"; }
   if($tgl<=14 and $tgl>=8){ $pkn="II"; }
   if($tgl<=21 and $tgl>=15){ $pkn="III"; }
   if($tgl<=30 and $tgl>=22){ $pkn="IV"; }
		echo $blnk; ?>
        <font color="#FF0000">&nbsp;&nbsp;Pekan :</font> <? echo $pkn;  ?></div></td>
  </tr>
  <tr> 
    <td width="6%"><div align="center"><span class="style3">NIS</span></div></td>
    <td width="27%"><div align="center"><span class="style3">Nama 
        Lengkap </span></div></td>
    <td width="18%"><div align="center"><span class="style3">Tunggakan 
        Syahriah &amp; Komite (Bulanan)</span></div></td>
    <td width="17%"><div align="center"><span class="style3">Tunggakan 
        semester (Pertahun) </span></div></td>
    <td width="16%"><div align="center" class="style3">Tunggakan 
        Buku <br />
        (Pertahun) </div></td>
    <td width="16%"><div align="center" class="style3"> 
        <div align="center">Tunggakan Bimbel<br />
          (Pertahun) </div>
      </div></td>
  </tr>
  <? 
         
	      $tampil=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$klsk' ");
          while($tp=mysqli_fetch_assoc($tampil)){
  
		  $thnbp=substr($thaj,0,3);
	      $tmpkls=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='$tp[kelas]' and (status='a' or status='p')  ");
          while($ct=mysqli_fetch_assoc($tmpkls)){
	   
	   ?>
  <tr> 
    <td bgcolor="#FFFFFF"><div align="center"><? echo"$ct[nis]"; ?></div></td>
    <td bgcolor="#FFFFFF"><div align="left">&nbsp;<? echo"$ct[nama]"; ?></div></td>
    <td bgcolor="#FFFFFF"><div align="right"> Rp. 
        <?
		  $tot=0; $tot2=0; $gb1=0; $tot3=0;
	      
		  $pmb9=mysqli_query($koneksi, "SELECT * FROM rincian_bayar WHERE kd_kls='$tp[kd_kls]' AND kd_bayar='1'");
          $c9=mysqli_fetch_assoc($pmb9);
		  
		  $pmb7=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$c9[kd_bayar]'");
          $c7=mysqli_fetch_assoc($pmb7);
		 
        $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$ct[id_santri]' and kd_bayar='1' and bln_bayar='$blnk' and 
		                   semester_b='$sem' and thn_b='$thaj'");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  }
		  
		$bea=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE kd_santri='$ct[id_santri]' AND kelas='$tp[kelas]' AND thn_ajaran='$thaj'                          AND semester='$sem' AND kd_bayar='1' ");
        $cbea=mysqli_fetch_assoc($bea);  
		  
		  $tot3=$tot2+$cbea['jml_beasiswa'];
		  
		  $gb1=$c7['jumlah']-$tot3;
        //  $hs1=format_agk2($gb1,$blnb,$qbln); 
			
		 echo $gb1;
		  ?>
      </div></td>
    <td bgcolor="#FFFFFF"><div align="right"> Rp. 
        <?
		  $tot=0; $tot2=0; $tots=0;
		  $pmb10=mysqli_query($koneksi, "SELECT * FROM rincian_bayar WHERE kd_kls='$tp[kd_kls]' AND kd_bayar='4'");
          $c10=mysqli_fetch_assoc($pmb10);
		  
		  $pmb7=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$c10[kd_bayar]'");
          $c7=mysqli_fetch_assoc($pmb7);
           
          $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$ct[id_santri]' and semester_b='$sem' and thn_b='$thaj' and kd_bayar='4' ");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  }
		  
	$bea2=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE kd_santri='$ct[id_santri]' AND kelas='$tp[kelas]' AND thn_ajaran='$thaj'                          AND semester='$sem' AND kd_bayar='4' ");
    $cbea2=mysqli_fetch_assoc($bea2); 
	$tots=$tot2+$cbea2['jml_beasiswa'];
		
		  $gb=$c7['jumlah']-$tots;
		  
		echo $gb;
		  ?>
      </div></td>
    <td bgcolor="#FFFFFF"><div align="right">Rp. 
        <?
		  $tot=0; $tot2=0; $totb=0;
	      $pmb11=mysqli_query($koneksi, "SELECT * FROM rincian_bayar WHERE kd_kls='$tp[kd_kls]' AND kd_bayar='3'");
          $c11=mysqli_fetch_assoc($pmb11);
		  
		  $pmb7=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$c11[kd_bayar]' ");
          $c7=mysqli_fetch_assoc($pmb7);
		 
          $pmb2=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$ct[id_santri]' and semester_b='$sem' and thn_b='$thaj' and kd_bayar='3' ");
          while($ctp2=mysqli_fetch_assoc($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  }
		  
	
	$bea3=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE kd_santri='$ct[id_santri]' AND kelas='$tp[kelas]' AND thn_ajaran='$thaj'                          AND semester='$sem' AND kd_bayar='3' ");
    $cbea3=mysqli_fetch_assoc($bea3); 
	$totb=$tot2+$cbea3['jml_beasiswa'];
	
	$gb=$c7['jumlah']-$totb;
	echo $gb;
	
		  ?>
      </div></td>
    <td bgcolor="#FFFFFF"><div align="right">Rp. 
        <?
		  $tot=0; $tot2=0; $tott=0;
	     $pmb12=mysqli_query($koneksi, "SELECT * FROM rincian_bayar WHERE kd_kls='$tp[kd_kls]' AND kd_bayar='6'");
          $c12=mysqli_fetch_assoc($pmb12);
		  
		     $pmb7=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$c12[kd_bayar]' ");
             $c7=mysqli_fetch_assoc($pmb7);

          $pmb8=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$ct[id_santri]' and semester_b='$sem' and thn_b='$thaj' and kd_bayar='6' ");
          while($ctp2=mysqli_fetch_assoc($pmb8)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  }
		  
	$bea4=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE kd_santri='$ct[id_santri]' AND kelas='$tp[kelas]' AND thn_ajaran='$thaj'                          AND semester='$sem' AND kd_bayar='6' ");
    $cbea4=mysqli_fetch_assoc($bea4); 
	$tott=$tot2+$cbea4['jml_beasiswa'];
		  
		  $gb=$c7['jumlah']-$tott;
		  
		  if($tp['kelas']=='IXA' or $tp['kelas']=='IXB') {echo $gb;  }else{ echo"0"; }
		  ?>
      </div></td>
  </tr>
  <? } ?>
  <tr> 
    <td height="116" colspan="6" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td width="1%">&nbsp;</td>
          <td width="31%">&nbsp;</td>
          <td width="1%">&nbsp;</td>
          <td width="67%">&nbsp;</td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
          <td>Total Tunggakan Syahria &amp; Komite </td>
          <td>:</td>
          <td>Rp. 
            <? 
				 $tot_sk=0;
			     $jml_t=0;
				 $jml_t2=0;
				 $totts=0;
				 $tot_tsy=0;
		         $tgks=mysqli_query($koneksi, "SELECT id_santri,kelas_st,status FROM tb_santri WHERE kelas_st='$tp[kelas]' and (status='a' or 
				                    status='p') ");
                 $ctgks=mysqli_num_rows($tgks); // jumlah santri kelas $tp[kelas]
				 
				 $tgks2=mysqli_query($koneksi, "SELECT kd_pembayaran,jumlah FROM tb_pembayaran WHERE kd_pembayaran='1' ");
                 $ctgks2=mysqli_fetch_assoc($tgks2); // jumlah pembayaran syariah kode 1
				 $tot_sk=$ctgks*$ctgks2['jumlah'];
				 
			while($ctgks4=mysqli_fetch_assoc($tgks)){	
			$tgks3=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$ctgks4[id_santri]' and kd_bayar='1' and 
			                    bln_bayar='$blnk' and semester_b='$sem' and thn_b='$thaj' ");
            $ctgks3=mysqli_fetch_assoc($tgks3);
			$jml_t=$jml_t+$ctgks3['jml_bayar'];
		    } 
			
			$bea5=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE thn_ajaran='$thaj' AND semester='$sem' AND kelas='$tp[kelas]' AND 
			                   kd_bayar='1' ");
            while($cbea5=mysqli_fetch_assoc($bea5)){ 
	        $tot_tsy=$tot_tsy+$cbea5['jml_beasiswa'];
			}
			  
			$jml_t2=$tot_sk-($jml_t+$tot_tsy);
			
			$hs2=format_agk2($jml_t2,$blnb,$qbln);  
			  
			
			   ?>
          </td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
          <td>Total Tunggakan Semester </td>
          <td>:</td>
          <td>Rp. 
            <? 
				 $tot_byr=0;
				 $jmlb_st=0;
			     $tot_bst=0;
				 $tot_ts=0;
				 
		         $jstr=mysqli_query($koneksi, "SELECT id_santri,kelas_st,status FROM tb_santri WHERE kelas_st='$tp[kelas]' and (status='a' or status='p') ");
                 $ctjstr=mysqli_num_rows($jstr);
				 
				 $jmlb=mysqli_query($koneksi, "SELECT kd_pembayaran,jumlah FROM tb_pembayaran WHERE kd_pembayaran='4' ");
                 $cjmlb=mysqli_fetch_assoc($jmlb);
				 $tot_byr=$ctjstr*$cjmlb['jumlah'];
				 
    		while($ctjst=mysqli_fetch_assoc($jstr)){	
			$jbyr=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$ctjst[id_santri]' and kd_bayar='4' and semester_b='$sem' and thn_b='$thaj' ");
            $cjbyr=mysqli_fetch_assoc($jbyr);
			$jmlb_st=$jmlb_st-$cjbyr['jml_bayar'];
		    } 
			
			$bea6=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE thn_ajaran='$thaj' AND semester='$sem' AND kelas='$tp[kelas]' AND 
			                   kd_bayar='4' ");
            while($cbea6=mysqli_fetch_assoc($bea6)){ 
	        $tot_ts=$tot_ts+$cbea6['jml_beasiswa'];
			 }
			 $tot_bst=$tot_byr-($jmlb_st+$tot_ts);
			 $hs3=format_agk($tot_bst);
			   ?>
          </td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
          <td>Total Tunggakan Buku </td>
          <td>:</td>
          <td>Rp. 
            <? 
				$tot_sk=0;
			     $jml_t=0;
				 $jml_t2=0;
				 $tot_bk=0;
		         $tgks=mysqli_query($koneksi, "SELECT id_santri,kelas_st,status FROM tb_santri WHERE kelas_st='$tp[kelas]' and (status='a' or status='p') ");
                 $ctgks=mysqli_num_rows($tgks);
				 
				 $tgks2=mysqli_query($koneksi, "SELECT kd_pembayaran,jumlah FROM tb_pembayaran WHERE kd_pembayaran='3' ");
                 $ctgks2=mysqli_fetch_assoc($tgks2);
				 $tot_sk=$ctgks*$ctgks2['jumlah'];
				 
				 
			while($ctgks4=mysqli_fetch_assoc($tgks)){	
			$tgks3=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$ctgks4[id_santri]' and kd_bayar='3' and semester_b='$sem' and thn_b='$thaj' ");
            $ctgks3=mysqli_fetch_assoc($tgks3);
			$jml_t=$jml_t-$ctgks3['jml_bayar'];
		    } 
			
			$bea7=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE thn_ajaran='$thaj' AND semester='$sem' AND kelas='$tp[kelas]' AND 
			                   kd_bayar='3' ");
            while($cbea7=mysqli_fetch_assoc($bea7)){
	        $tot_bk=$tot_bk+$cbea7['jml_beasiswa'];
			}
			
			 $jml_t2=$tot_sk-($jml_t+$tot_bk);
			 $hs4=format_agk($jml_t2);
			   ?>
          </td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
          <td>Total Tunggakan Bimbingan Belajar </td>
          <td>:</td>
          <td>Rp. 
            <? 
				 $tot_sk3=0;
			     $jml_t3=0;
				 $jml_t4=0;
				 $tot_tb=0;
		         $tgks4=mysqli_query($koneksi, "SELECT id_santri,kelas_st,status FROM tb_santri WHERE kelas_st='$tp[kelas]' and (status='a' or status='p') ");
                 $ctgks=mysqli_num_rows($tgks4);
				 
				 $tgks5=mysqli_query($koneksi, "SELECT kd_pembayaran,jumlah FROM tb_pembayaran WHERE kd_pembayaran='6' ");
                 $ctgks2=mysqli_fetch_assoc($tgks5);
				 $tot_sk3=$ctgks*$ctgks2['jumlah'];
				 
			while($ctgks4=mysqli_fetch_assoc($tgks4)){	
			$tgks7=mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE kd_santri='$ctgks4[id_santri]' and kd_bayar='6' and semester_b='$sem' and thn_b='$thaj' ");
            $ctgks8=mysqli_fetch_assoc($tgks7);
			$jml_t3=$jml_t3+$ctgks8['jml_bayar'];
		    } 
			
			$bea8=mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE thn_ajaran='$thaj' AND semester='$sem' AND kelas='$tp[kelas]' AND 
			                   kd_bayar='6' ");
            while($cbea8=mysqli_fetch_assoc($bea8)){
	        $tot_tb=$tot_tb+$cbea8['jml_beasiswa'];
			}
			 $jml_t4=$tot_sk3-($jml_t3+tot_tb);
			 if($tp['kelas']=='IXA' or $tp['kelas']=='IXB') { $hs5=format_agk($jml_t4);  }else{ echo "0"; } 
			 
			   ?>
          </td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
  </tr>
</table>
<? } ?>

</body>
</html>
