<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
}
.style3 {font-size: 16px}
td {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	text-decoration: none;
}
.style4 {font-size: 12px}
.style5 {
	font-size: 14px;
	font-weight: bold;
}
-->
</style>
</head>
<?
include("../koneksi.php");
 $blnk=$_GET['blnk'];
 $pknk=$_GET['pknk'];
 $klsk=$_GET['klsk'];
 $klsk2=$_GET['klsk2'];
 $kdmpl=$_GET['kdmpl']; 
 $thaj=$_COOKIE['thaj'];
 $sem=$_COOKIE['sem'];
 $idgurp=$_COOKIE['idgurp'];
 ini_set('max_execution_time',300);
?>
<body>
<table width="1350" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="6" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="7%" valign="top"><img src="../images/LOGO-SHOID2.jpg" width="95" height="108" /></td>
                <td width="1%">&nbsp;</td>
                <td width="92%"><span class="style3">YAYASAN SHOHWATUL IS'AD</span><br />
                    <span class="style1">SMP - SMA IT SHOHWATUL IS'AD</span><br />
                    <br />
                    <br />
                    <span class="style4">Alamat:  Jl. Poros Padanglampe&nbsp; KM  . 3&nbsp; Ma&rsquo;rang&nbsp;  Pangkep&nbsp; Sulawesi -Selatan 90645  P.O. Box 300<br />
                      http://www.shohwatulisad.com e-mail : shohwatulisad@gmail.com</span></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td colspan="6"><hr /></td>
      </tr>
      <tr>
        <td colspan="6">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="6"><div align="center" class="style5">REKAP NILAI PENGETAHUAN DAN KETERAMPILAN SMP IT SHOHWATUL IS'AD  </div></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
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
      </tr>
      <tr>
        <td width="10%">KELAS</td>
        <td width="1%">:</td>
        <td width="54%"><? 
		
		echo $klsk2;
		 ?></td>
        <td width="4%">&nbsp;</td>
        <td width="11%">SEMSTER</td>
        <td width="20%">: <? echo $sem; ?></td>
      </tr>
      <tr>
        <td>WALI KELAS </td>
        <td>:</td>
        <td><?
		 
	      $tampi5=mysqli_query($koneksi, "SELECT id_gp,nip,nama_gp FROM guru_pegawai WHERE id_gp='$idgurp' ");
          $tp5=mysqli_fetch_assoc($tampi5);
		  echo $tp5['nama_gp']; 
	    ?></td>
        <td>&nbsp;</td>
        <td>TAHUN PELAJARAN </td>
        <td>: <? echo $thaj; ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      
      <tr>
        <td valign="top">&nbsp;</td>
        <td valign="top">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td valign="top"><table width="1328" border="1" cellspacing="0" cellpadding="0">
      
      
      <tr>
        <td width="25" rowspan="3"><div align="center">NO</div></td>
        <td width="63" rowspan="3"><div align="center">NIS</div></td>
        <td width="262" rowspan="3"><div align="center">NAMA</div></td>
        <td colspan="11"><div align="center">NILAI PENGETAHUAN </div></td>
        <td colspan="11"><div align="center">NILAI KETERAMPILAN </div></td>
        <td colspan="2"><div align="center">JUMLAH</div></td>
        <td width="52" rowspan="3"><div align="center">RERATA</div></td>
        <td width="56" rowspan="3"><div align="center">RANK</div></td>
      </tr>
      <tr>
        <td><div align="center">PABP</div></td>
        <td><div align="center">PPKN</div></td>
        <td><div align="center">BIND</div></td>
        <td width="31"><div align="center">MAT</div></td>
        <td width="29"><div align="center">IPA</div></td>
        <td width="35"><div align="center">IPS</div></td>
        <td width="33"><div align="center">BING</div></td>
        <td width="39"><div align="center">SNBD</div></td>
        <td width="36"><div align="center">PJOK</div></td>
        <td width="28"><div align="center">PKR</div></td>
        <td width="29"><div align="center">MLK</div></td>
        <td width="37"><div align="center">PABP</div></td>
        <td width="36"><div align="center">PPKN</div></td>
        <td width="32"><div align="center">BIND</div></td>
        <td width="35"><div align="center">MAT</div></td>
        <td width="24"><div align="center">IPA</div></td>
        <td width="29"><div align="center">IPS</div></td>
        <td width="35"><div align="center">BING</div></td>
        <td width="39"><div align="center">SNBD</div></td>
        <td width="36"><div align="center">PJOK</div></td>
        <td width="35"><div align="center">PKR</div></td>
        <td width="29"><div align="center">MLK</div></td>
        <td width="37" rowspan="2"><div align="center">PENG</div></td>
        <td width="36" rowspan="2"><div align="center">KETR</div></td>
        </tr>
      <tr>
        <td width="35"><div align="center">1</div></td>
        <td width="38"><div align="center">2</div></td>
        <td width="37"><div align="center">3</div></td>
        <td><div align="center">4</div></td>
        <td><div align="center">5</div></td>
        <td><div align="center">6</div></td>
        <td><div align="center">7</div></td>
        <td><div align="center">8</div></td>
        <td><div align="center">9</div></td>
        <td><div align="center">10</div></td>
        <td><div align="center">11</div></td>
        <td><div align="center">1</div></td>
        <td><div align="center">2</div></td>
        <td><div align="center">3</div></td>
        <td><div align="center">4</div></td>
        <td><div align="center">5</div></td>
        <td><div align="center">6</div></td>
        <td><div align="center">7</div></td>
        <td><div align="center">8</div></td>
        <td><div align="center">9</div></td>
        <td><div align="center">10</div></td>
        <td><div align="center">11</div></td>
      </tr>
     
      <tr>
        <td colspan="29" height="2"></td>
        </tr>
	   <? 
	      $tdth=mysqli_query($koneksi, "SELECT * FROM tb_rangking WHERE  thn_plj='$thaj' and sem_plj='$sem' and kls_r='$klsk2' ");
	      $jmld2=mysqli_num_rows($tdth); 
		  
	      $rk=$jmld2;
	  	  $tmp=mysqli_query($koneksi, "SELECT * FROM tb_rangking WHERE  thn_plj='$thaj' and sem_plj='$sem' and kls_r='$klsk2' ORDER BY tot_raport ");
          while($ct=mysqli_fetch_assoc($tmp)){
		  
		        mysqli_query($koneksi, "UPDATE tb_rangking SET rangking='$rk' WHERE nis='$ct[nis]' and thn_plj='$thaj' and sem_plj='$sem' and kls_r='$ct[kls_r]'"); 
				$rk-=1;
		  }
		
		$no=1;
		$ntgs=mysqli_query($koneksi, "SELECT id_santri,nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='$klsk2' AND status='a' ORDER BY nama");
	    while($cnt=mysqli_fetch_assoc($ntgs)){
		
		?>
      <tr>
        <td><div align="center"><? echo $no; ?></div></td>
        <td><div align="center"><? echo $cnt['nis']; ?> </div></td>
        <td>&nbsp; <? echo $cnt['nama']; ?></td>
        
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$cnt[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MP006' and kd='3' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $p1=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center"><?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$cnt[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD013' and kd='3' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $p2=$cpg['nir'];
		?></div></td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$cnt[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD003' and kd='3' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $p3=$cpg['nir'];
		?>
        </div></td>
       
       
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$cnt[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD005' and kd='3' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $p4=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$cnt[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD006' and kd='3' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $p5=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$cnt[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD007' and kd='3' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $p6=$cpg['nir'];
		?>
        </div></td>
       
        
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$cnt[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD004' and kd='3' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $p7=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$cnt[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD012' and kd='3' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $p8=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$cnt[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD009' and kd='3' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $p9=$cpg['nir'];
		?>
        </div></td>
        
        
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$cnt[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD011' and kd='3' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $p10=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$cnt[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MP003' and kd='3' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $p11=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$cnt[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MP006' and kd='4' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $k1=$cpg['nir'];
		?>
        </div></td>
        
        
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$cnt[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD013' and kd='4' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $k2=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$cnt[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD003' and kd='4' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $k3=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$cnt[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD005' and kd='4' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $k4=$cpg['nir'];
		?>
        </div></td>
        
        
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$cnt[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD006' and kd='4' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $k5=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$cnt[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD007' and kd='4' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $k6=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$cnt[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD004' and kd='4' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $k7=$cpg['nir'];
		?>
        </div></td>
        
       
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$cnt[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD012' and kd='4' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $k8=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$cnt[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD009' and kd='4' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $k9=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$cnt[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD011' and kd='4' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $k10=$cpg['nir'];
		?>
        </div></td>
        
       
        <td><div align="center">
          <?
		$npg=mysqli_query($koneksi, "SELECT * FROM tb_raport_k13 WHERE id_santri='$cnt[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MP003' and kd='4' ");
  		$cpg=mysqli_fetch_assoc($npg);
		echo $cpg['nir']; $k11=$cpg['nir'];
		?>
        </div></td>
        <td><div align="center"><? $tp=$p1+$p2+$p3+$p4+$p5+$p6+$p7+$p8+$p9+$p10+$p11; if($tp){ echo $tp; }  ?></div></td>
        <td><div align="center">
          <? $tk=$p1+$k2+$k3+$k4+$k5+$k6+$k7+$k8+$k9+$k10+$k11; if($tk) {echo $tk; }  ?>
        </div></td>
        <td><div align="center"><? $rer=round(($tp+$tk)/2); if($rer){ echo $rer; } ?></div></td>
        <td><div align="center"> <?
		    $tdth=mysqli_query($koneksi, "SELECT * FROM tb_rangking WHERE kls_r='$klsk2' and thn_plj='$thaj' and sem_plj='$sem' and nis='$cnt[nis]' ");
	        $jmld2=mysqli_num_rows($tdth);   // rangking
			
		    if($jmld2==0){
			       $rek=mysqli_query($koneksi, "INSERT INTO tb_rangking VALUES('','$thaj','$sem','$klsk2','$cnt[nis]','$rer','')");
		    }else{
				   mysqli_query($koneksi, "UPDATE tb_rangking SET tot_raport='$rer' WHERE nis='$cnt[nis]' and thn_plj='$thaj' and sem_plj='$sem' and kls_r='$klsk2'"); 
			} 
			
			$tmp=mysqli_query($koneksi, "SELECT * FROM tb_rangking WHERE nis='$cnt[nis]' and thn_plj='$thaj' and sem_plj='$sem' and kls_r='$klsk2'");
            $ct2=mysqli_fetch_assoc($tmp); // rangking
			if($rer >=1){ echo $ct2['rangking']; }
			?>
		</div></td>
      </tr>
      <? $no+=1; } ?>
    </table></td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
  </tr>
</table>

</body>
</html>
