<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style5 {color: #FFFFFF}
-->
</style>
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>
<?
$kdkls=$_GET['kdkls'];
?>
<body>
<form id="form1" name="form1" method="post" action="page/act_dt_rbg.php">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
      <td colspan="4"></td>
    </tr>
    

    <tr>
      <td colspan="4" bgcolor="#B3CF70"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="1%" height="27">&nbsp;</td>
          <td width="2%"><img src="images/collapsed.gif" width="16" height="12" /></td>
          <td width="97%">Rincian Pembayaran  Santri </td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td colspan="4" height="7"></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td width="2%" valign="top" bgcolor="#ACD75E">&nbsp;</td>
      <td width="42%" valign="top" bgcolor="#ACD75E">&nbsp;</td>
      <td valign="top" bgcolor="#ACD75E">&nbsp;</td>
    </tr>
    <tr>
      <td width="2%" height="35" bgcolor="#DCF3AF">&nbsp;</td>
      <td colspan="2" bgcolor="#DCF3AF"><div align="left">Kelas
        <select name="menu1" onchange="MM_jumpMenu('parent',this,0)">
          <option value="home.php?home=byr&pmb=2&klsk=">-</option>
          <?
	      $tampi3=mysqli_query($koneksi, "SELECT kd_kls,kelas FROM master_kelas ");
          while($tp3=mysqli_fetch_assoc($tampi3)){
	    ?>
          <option value="home.php?home=byr&pmb=2&kdkls=<? echo $tp3['kd_kls']; ?>" <? if($kdkls=="$tp3[kd_kls]"){ echo"selected='selected'"; } ?>><? echo $tp3['kelas']; ?></option>
          <? } ?>
          </select>
      </div></td>
      <td width="54%" valign="top" bgcolor="#DCF3AF"><label></label></td>
    </tr>
    
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td valign="top" bgcolor="#ACD75E">&nbsp;</td>
      <td valign="top" bgcolor="#ACD75E">&nbsp;</td>
      <td valign="top" bgcolor="#ACD75E">&nbsp;</td>
    </tr>
    
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td valign="top" bgcolor="#DCF3AF">&nbsp;</td>
      <td valign="top" bgcolor="#DCF3AF">&nbsp;</td>
      <td valign="top" bgcolor="#DCF3AF">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td colspan="3" valign="top" bgcolor="#DCF3AF"><table width="60%" border="1" cellpadding="0" cellspacing="0" bordercolor="#B3CF70">
        <tr>
          <td width="7%" bgcolor="#B3CF70"><div align="center">No</div></td>
          <td width="68%" bgcolor="#B3CF70"><div align="center">Pembayaran</div></td>
          <td width="25%" bgcolor="#B3CF70"><div align="center">Jumlah</div></td>
        </tr>
		<? $no=1;
		  $pmb=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran ");
          while($cpmb=mysqli_fetch_assoc($pmb)){
		?>
        <tr>
          <td><div align="center"><? echo $no; ?></div>            </td>
          <td><a href="page/act_dt_pembayaran.php?rekam2=1&<? echo"kdkls=$kdkls&kdbyr=$cpmb[kd_pembayaran]"; ?>"><? echo $cpmb['pembayaran']; ?></a></td>
          <td><div align="right">Rp. <? $bs13=format_agk($cpmb['jumlah']); 
		          echo $bs13;   ?></div>            </td>
        </tr>
		<? $no+=1;} ?>
      </table></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td valign="top" bgcolor="#DCF3AF">&nbsp;</td>
      <td valign="top" bgcolor="#DCF3AF">&nbsp;</td>
      <td valign="top" bgcolor="#DCF3AF">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td height="29" bgcolor="#DCF3AF">&nbsp;</td>
      <td colspan="2" bgcolor="#DCF3AF">Rincian Pembayaran Tiap Kelas </td>
      <td valign="top" bgcolor="#DCF3AF">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td colspan="3" valign="top" bgcolor="#DCF3AF"><table width="60%" border="1" cellpadding="0" cellspacing="0" bordercolor="#B3CF70">
        <tr>
          <td width="19%" bgcolor="#B3CF70"><div align="center">Kelas</div></td>
          <td width="81%" bgcolor="#B3CF70"><div align="center">Pembayaran</div></td>
        </tr>
        <tr>
          <td><div align="center">VIIA</div></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <? $no2=1;  $tot=0;
		  $rp1=mysqli_query($koneksi, "SELECT * FROM rincian_bayar WHERE kd_kls='1'");
          while($crp=mysqli_fetch_assoc($rp1)){
		?>
			<tr>
			  <td width="6%"><div align="center"><? echo $no2; ?></div>			    </td>
			  <td width="63%"><a href="page/act_dt_pembayaran.php?rekam3=1&<? echo"kdkls=$crp[kd_kls]&kdbyr=$crp[kd_bayar]"; ?>">
			    <?
			   $pmb3=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$crp[kd_bayar]'  ");
               $cpmb3=mysqli_fetch_assoc($pmb3);
			   echo $cpmb3['pembayaran'];
			  ?>
			  </a></td>
			  <td>Rp. 
			    <? 
			  $bs=format_agk($cpmb3['jumlah']); 
		          echo $bs;
			   ?></td>
			  </tr>
			  <? $no2+=1; $tot=$tot+$cpmb3['jumlah'];} ?>
			<tr>
              <td colspan="2" bgcolor="#99CC66"><div align="center" class="style5">Total Bayar </div></td>
              <td width="31%" bgcolor="#99CC66"><span class="style5"><b>Rp. <? $bs2=format_agk($tot); 
		          echo $bs2;  ?></b></span></td>
            </tr>
			
          </table></td>
        </tr>
        <tr>
          <td><div align="center">VIIB</div></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <? $no2=1; $tot=0;
		  $rp1=mysqli_query($koneksi, "SELECT * FROM rincian_bayar WHERE kd_kls='2'");
          while($crp=mysqli_fetch_assoc($rp1)){
		?>
            <tr>
              <td width="6%"><div align="center"><? echo $no2; ?></div></td>
              <td width="63%"><a href="page/act_dt_pembayaran.php?rekam3=1&amp;<? echo"kdkls=$crp[kd_kls]&kdbyr=$crp[kd_bayar]"; ?>">
                <?
			   $pmb3=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$crp[kd_bayar]'  ");
               $cpmb3=mysqli_fetch_assoc($pmb3);
			   echo $cpmb3['pembayaran'];
			  ?>
              </a></td>
              <td>Rp. <? $bs3=format_agk($cpmb3['jumlah']); 
		          echo $bs3; ?></td>
            </tr>
			<? $no2+=1; $tot=$tot+$cpmb3['jumlah']; } ?>
            <tr>
              <td colspan="2" bgcolor="#99CC66"><div align="center" class="style5">Total Bayar </div></td>
              <td width="31%" bgcolor="#99CC66"><span class="style5"><b>Rp. <? $bs4=format_agk($tot); 
		          echo $bs4; ?></b></span></td>
            </tr>
            
          </table></td>
        </tr>
        <tr>
          <td><div align="center">VIIC</div></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <? $no2=1; $tot=0;
		  $rp1=mysqli_query($koneksi, "SELECT * FROM rincian_bayar WHERE kd_kls='8'");
          while($crp=mysqli_fetch_assoc($rp1)){
		?>
            <tr>
              <td width="6%"><div align="center"><? echo $no2; ?></div></td>
              <td width="63%"><a href="page/act_dt_pembayaran.php?rekam3=1&amp;<? echo"kdkls=$crp[kd_kls]&kdbyr=$crp[kd_bayar]"; ?>">
                <?
			   $pmb3=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$crp[kd_bayar]'  ");
               $cpmb3=mysqli_fetch_assoc($pmb3);
			   echo $cpmb3['pembayaran'];
			  ?>
              </a></td>
              <td>Rp. <? $bs5=format_agk($cpmb3['jumlah']); 
		          echo $bs5;  ?></td>
            </tr>
            <? $no2+=1; $tot=$tot+$cpmb3['jumlah']; } ?>
            <tr>
              <td colspan="2" bgcolor="#99CC66"><div align="center" class="style5">Total Bayar </div></td>
              <td width="31%" bgcolor="#99CC66"><span class="style5"><b>Rp. <? $bs6=format_agk($tot); 
		          echo $bs6; ?></b></span></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><div align="center">VIID</div></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <? $no2=1; $tot=0;
		  $rp1=mysqli_query($koneksi, "SELECT * FROM rincian_bayar WHERE kd_kls='20'");
          while($crp=mysqli_fetch_assoc($rp1)){
		?>
            <tr>
              <td width="6%"><div align="center"><? echo $no2; ?></div></td>
              <td width="63%"><a href="page/act_dt_pembayaran.php?rekam3=1&amp;<? echo"kdkls=$crp[kd_kls]&kdbyr=$crp[kd_bayar]"; ?>">
                <?
			   $pmb3=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$crp[kd_bayar]'  ");
               $cpmb3=mysqli_fetch_assoc($pmb3);
			   echo $cpmb3['pembayaran'];
			  ?>
              </a></td>
              <td>Rp. <? $bs7=format_agk($cpmb3['jumlah']); 
		          echo $bs7;  ?></td>
            </tr>
            <? $no2+=1; $tot=$tot+$cpmb3['jumlah']; } ?>
            <tr>
              <td colspan="2" bgcolor="#99CC66"><div align="center" class="style5">Total Bayar </div></td>
              <td width="31%" bgcolor="#99CC66"><span class="style5"><b>Rp. <? $bs8=format_agk($tot); 
		          echo $bs8;  ?></b></span></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><div align="center">VIIE</div></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <? $no2=1; $tot=0;
		  $rp1=mysqli_query($koneksi, "SELECT * FROM rincian_bayar WHERE kd_kls='23'");
          while($crp=mysqli_fetch_assoc($rp1)){
		?>
            <tr>
              <td width="6%"><div align="center"><? echo $no2; ?></div></td>
              <td width="63%"><a href="page/act_dt_pembayaran.php?rekam3=1&amp;<? echo"kdkls=$crp[kd_kls]&kdbyr=$crp[kd_bayar]"; ?>">
                <?
			   $pmb3=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$crp[kd_bayar]'  ");
               $cpmb3=mysqli_fetch_assoc($pmb3);
			   echo $cpmb3['pembayaran'];
			  ?>
              </a></td>
              <td>Rp. <? $bs9=format_agk($cpmb3['jumlah']); 
		          echo $bs9;  ?></td>
            </tr>
            <? $no2+=1; $tot=$tot+$cpmb3['jumlah']; } ?>
            <tr>
              <td colspan="2" bgcolor="#99CC66"><div align="center" class="style5">Total Bayar </div></td>
              <td width="31%" bgcolor="#99CC66"><span class="style5"><b>Rp. <? $bs10=format_agk($tot); 
		          echo $bs10;  ?></b></span></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><div align="center">VIIIA</div></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <? $no2=1; $tot=0;
		  $rp1=mysqli_query($koneksi, "SELECT * FROM rincian_bayar WHERE kd_kls='3'");
          while($crp=mysqli_fetch_assoc($rp1)){
		?>
            <tr>
              <td width="6%"><div align="center"><? echo $no2; ?></div></td>
              <td width="63%"><a href="page/act_dt_pembayaran.php?rekam3=1&amp;<? echo"kdkls=$crp[kd_kls]&kdbyr=$crp[kd_bayar]"; ?>">
                <?
			   $pmb3=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$crp[kd_bayar]'  ");
               $cpmb3=mysqli_fetch_assoc($pmb3);
			   echo $cpmb3['pembayaran'];
			  ?>
              </a></td>
              <td>Rp.
                <? $bs11=format_agk($cpmb3['jumlah']); 
		          echo $bs11;  ?></td>
            </tr>
            <? $no2+=1; $tot=$tot+$cpmb3['jumlah']; } ?>
            <tr>
              <td colspan="2" bgcolor="#99CC66"><div align="center" class="style5">Total Bayar </div></td>
              <td width="31%" bgcolor="#99CC66"><span class="style5"><b>Rp.
                <? $bs12=format_agk($tot); 
		          echo $bs12;    ?>
              </b></span></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><div align="center">VIIIB</div></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <? $no2=1; $tot=0;
		  $rp1=mysqli_query($koneksi, "SELECT * FROM rincian_bayar WHERE kd_kls='4'");
          while($crp=mysqli_fetch_assoc($rp1)){
		?>
            <tr>
              <td width="6%"><div align="center"><? echo $no2; ?></div></td>
              <td width="63%"><a href="page/act_dt_pembayaran.php?rekam3=1&amp;<? echo"kdkls=$crp[kd_kls]&kdbyr=$crp[kd_bayar]"; ?>">
                <?
			   $pmb3=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$crp[kd_bayar]'  ");
               $cpmb3=mysqli_fetch_assoc($pmb3);
			   echo $cpmb3['pembayaran'];
			  ?>
              </a></td>
              <td>Rp.
                <? $bs11=format_agk($cpmb3['jumlah']); 
		          echo $bs11;  ?></td>
            </tr>
            <? $no2+=1; $tot=$tot+$cpmb3['jumlah']; } ?>
            <tr>
              <td colspan="2" bgcolor="#99CC66"><div align="center" class="style5">Total Bayar </div></td>
              <td width="31%" bgcolor="#99CC66"><span class="style5"><b>Rp.
                <? $bs12=format_agk($tot); 
		          echo $bs12;    ?>
              </b></span></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><div align="center">VIIIC</div></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <? $no2=1; $tot=0;
		  $rp1=mysqli_query($koneksi, "SELECT * FROM rincian_bayar WHERE kd_kls='13'");
          while($crp=mysqli_fetch_assoc($rp1)){
		?>
            <tr>
              <td width="6%"><div align="center"><? echo $no2; ?></div></td>
              <td width="63%"><a href="page/act_dt_pembayaran.php?rekam3=1&amp;<? echo"kdkls=$crp[kd_kls]&kdbyr=$crp[kd_bayar]"; ?>">
                <?
			   $pmb3=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$crp[kd_bayar]'  ");
               $cpmb3=mysqli_fetch_assoc($pmb3);
			   echo $cpmb3['pembayaran'];
			  ?>
              </a></td>
              <td>Rp.
                <? $bs11=format_agk($cpmb3['jumlah']); 
		          echo $bs11;  ?></td>
            </tr>
            <? $no2+=1; $tot=$tot+$cpmb3['jumlah']; } ?>
            <tr>
              <td colspan="2" bgcolor="#99CC66"><div align="center" class="style5">Total Bayar </div></td>
              <td width="31%" bgcolor="#99CC66"><span class="style5"><b>Rp.
                <? $bs12=format_agk($tot); 
		          echo $bs12;    ?>
              </b></span></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><div align="center">VIIID</div></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <? $no2=1; $tot=0;
		  $rp1=mysqli_query($koneksi, "SELECT * FROM rincian_bayar WHERE kd_kls='24'");
          while($crp=mysqli_fetch_assoc($rp1)){
		?>
            <tr>
              <td width="6%"><div align="center"><? echo $no2; ?></div></td>
              <td width="63%"><a href="page/act_dt_pembayaran.php?rekam3=1&amp;<? echo"kdkls=$crp[kd_kls]&kdbyr=$crp[kd_bayar]"; ?>">
                <?
			   $pmb3=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$crp[kd_bayar]'  ");
               $cpmb3=mysqli_fetch_assoc($pmb3);
			   echo $cpmb3['pembayaran'];
			  ?>
              </a></td>
              <td>Rp.
                <? $bs11=format_agk($cpmb3['jumlah']); 
		          echo $bs11;  ?></td>
            </tr>
            <? $no2+=1; $tot=$tot+$cpmb3['jumlah']; } ?>
            <tr>
              <td colspan="2" bgcolor="#99CC66"><div align="center" class="style5">Total Bayar </div></td>
              <td width="31%" bgcolor="#99CC66"><span class="style5"><b>Rp.
                <? $bs12=format_agk($tot); 
		          echo $bs12;    ?>
              </b></span></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><div align="center">VIIIE</div></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <? $no2=1; $tot=0;
		  $rp1=mysqli_query($koneksi, "SELECT * FROM rincian_bayar WHERE kd_kls='25'");
          while($crp=mysqli_fetch_assoc($rp1)){
		?>
            <tr>
              <td width="6%"><div align="center"><? echo $no2; ?></div></td>
              <td width="63%"><a href="page/act_dt_pembayaran.php?rekam3=1&amp;<? echo"kdkls=$crp[kd_kls]&kdbyr=$crp[kd_bayar]"; ?>">
                <?
			   $pmb3=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$crp[kd_bayar]'  ");
               $cpmb3=mysqli_fetch_assoc($pmb3);
			   echo $cpmb3['pembayaran'];
			  ?>
              </a></td>
              <td>Rp.
                <? $bs11=format_agk($cpmb3['jumlah']); 
		          echo $bs11;  ?></td>
            </tr>
            <? $no2+=1; $tot=$tot+$cpmb3['jumlah']; } ?>
            <tr>
              <td colspan="2" bgcolor="#99CC66"><div align="center" class="style5">Total Bayar </div></td>
              <td width="31%" bgcolor="#99CC66"><span class="style5"><b>Rp.
                <? $bs12=format_agk($tot); 
		          echo $bs12;    ?>
              </b></span></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><div align="center">IXA</div></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <? $no2=1; $tot=0;
		  $rp1=mysqli_query($koneksi, "SELECT * FROM rincian_bayar WHERE kd_kls='5'");
          while($crp=mysqli_fetch_assoc($rp1)){
		?>
            <tr>
              <td width="6%"><div align="center"><? echo $no2; ?></div></td>
              <td width="63%"><a href="page/act_dt_pembayaran.php?rekam3=1&amp;<? echo"kdkls=$crp[kd_kls]&kdbyr=$crp[kd_bayar]"; ?>">
                <?
			   $pmb3=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$crp[kd_bayar]'  ");
               $cpmb3=mysqli_fetch_assoc($pmb3);
			   echo $cpmb3['pembayaran'];
			  ?>
              </a></td>
              <td>Rp.
                <? $bs11=format_agk($cpmb3['jumlah']); 
		          echo $bs11;  ?></td>
            </tr>
            <? $no2+=1; $tot=$tot+$cpmb3['jumlah']; } ?>
            <tr>
              <td colspan="2" bgcolor="#99CC66"><div align="center" class="style5">Total Bayar </div></td>
              <td width="31%" bgcolor="#99CC66"><span class="style5"><b>Rp.
                <? $bs12=format_agk($tot); 
		          echo $bs12;    ?>
              </b></span></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><div align="center">IXB</div></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <? $no2=1; $tot=0;
		  $rp1=mysqli_query($koneksi, "SELECT * FROM rincian_bayar WHERE kd_kls='6'");
          while($crp=mysqli_fetch_assoc($rp1)){
		?>
            <tr>
              <td width="6%"><div align="center"><? echo $no2; ?></div></td>
              <td width="63%"><a href="page/act_dt_pembayaran.php?rekam3=1&amp;<? echo"kdkls=$crp[kd_kls]&kdbyr=$crp[kd_bayar]"; ?>">
                <?
			   $pmb3=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$crp[kd_bayar]'  ");
               $cpmb3=mysqli_fetch_assoc($pmb3);
			   echo $cpmb3['pembayaran'];
			  ?>
              </a></td>
              <td>Rp.
                <? $bs11=format_agk($cpmb3['jumlah']); 
		          echo $bs11;  ?></td>
            </tr>
            <? $no2+=1; $tot=$tot+$cpmb3['jumlah']; } ?>
            <tr>
              <td colspan="2" bgcolor="#99CC66"><div align="center" class="style5">Total Bayar </div></td>
              <td width="31%" bgcolor="#99CC66"><span class="style5"><b>Rp.
                <? $bs12=format_agk($tot); 
		          echo $bs12;    ?>
              </b></span></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><div align="center">IXC</div></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <? $no2=1; $tot=0;
		  $rp1=mysqli_query($koneksi, "SELECT * FROM rincian_bayar WHERE kd_kls='15'");
          while($crp=mysqli_fetch_assoc($rp1)){
		?>
            <tr>
              <td width="6%"><div align="center"><? echo $no2; ?></div></td>
              <td width="63%"><a href="page/act_dt_pembayaran.php?rekam3=1&amp;<? echo"kdkls=$crp[kd_kls]&kdbyr=$crp[kd_bayar]"; ?>">
                <?
			   $pmb3=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$crp[kd_bayar]'  ");
               $cpmb3=mysqli_fetch_assoc($pmb3);
			   echo $cpmb3['pembayaran'];
			  ?>
              </a></td>
              <td>Rp.
                <? $bs11=format_agk($cpmb3['jumlah']); 
		          echo $bs11;  ?></td>
            </tr>
            <? $no2+=1; $tot=$tot+$cpmb3['jumlah']; } ?>
            <tr>
              <td colspan="2" bgcolor="#99CC66"><div align="center" class="style5">Total Bayar </div></td>
              <td width="31%" bgcolor="#99CC66"><span class="style5"><b>Rp.
                <? $bs12=format_agk($tot); 
		          echo $bs12;    ?>
              </b></span></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><div align="center">IXD</div></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <? $no2=1; $tot=0;
		  $rp1=mysqli_query($koneksi, "SELECT * FROM rincian_bayar WHERE kd_kls='26'");
          while($crp=mysqli_fetch_assoc($rp1)){
		?>
            <tr>
              <td width="6%"><div align="center"><? echo $no2; ?></div></td>
              <td width="63%"><a href="page/act_dt_pembayaran.php?rekam3=1&amp;<? echo"kdkls=$crp[kd_kls]&kdbyr=$crp[kd_bayar]"; ?>">
                <?
			   $pmb3=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$crp[kd_bayar]'  ");
               $cpmb3=mysqli_fetch_assoc($pmb3);
			   echo $cpmb3['pembayaran'];
			  ?>
              </a></td>
              <td>Rp.
                <? $bs11=format_agk($cpmb3['jumlah']); 
		          echo $bs11;  ?></td>
            </tr>
            <? $no2+=1; $tot=$tot+$cpmb3['jumlah']; } ?>
            <tr>
              <td colspan="2" bgcolor="#99CC66"><div align="center" class="style5">Total Bayar </div></td>
              <td width="31%" bgcolor="#99CC66"><span class="style5"><b>Rp.
                <? $bs12=format_agk($tot); 
		          echo $bs12;    ?>
              </b></span></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><div align="center">IXE</div></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <? $no2=1; $tot=0;
		  $rp1=mysqli_query($koneksi, "SELECT * FROM rincian_bayar WHERE kd_kls='27'");
          while($crp=mysqli_fetch_assoc($rp1)){
		?>
            <tr>
              <td width="6%"><div align="center"><? echo $no2; ?></div></td>
              <td width="63%"><a href="page/act_dt_pembayaran.php?rekam3=1&amp;<? echo"kdkls=$crp[kd_kls]&kdbyr=$crp[kd_bayar]"; ?>">
                <?
			   $pmb3=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$crp[kd_bayar]'  ");
               $cpmb3=mysqli_fetch_assoc($pmb3);
			   echo $cpmb3['pembayaran'];
			  ?>
              </a></td>
              <td>Rp.
                <? $bs11=format_agk($cpmb3['jumlah']); 
		          echo $bs11;  ?></td>
            </tr>
            <? $no2+=1; $tot=$tot+$cpmb3['jumlah']; } ?>
            <tr>
              <td colspan="2" bgcolor="#99CC66"><div align="center" class="style5">Total Bayar </div></td>
              <td width="31%" bgcolor="#99CC66"><span class="style5"><b>Rp.
                <? $bs12=format_agk($tot); 
		          echo $bs12;    ?>
              </b></span></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><div align="center">XA</div></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <? $no2=1; $tot=0;
		  $rp1=mysqli_query($koneksi, "SELECT * FROM rincian_bayar WHERE kd_kls='9'");
          while($crp=mysqli_fetch_assoc($rp1)){
		?>
            <tr>
              <td width="6%"><div align="center"><? echo $no2; ?></div></td>
              <td width="63%"><a href="page/act_dt_pembayaran.php?rekam3=1&amp;<? echo"kdkls=$crp[kd_kls]&kdbyr=$crp[kd_bayar]"; ?>">
                <?
			   $pmb3=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$crp[kd_bayar]'  ");
               $cpmb3=mysqli_fetch_assoc($pmb3);
			   echo $cpmb3['pembayaran'];
			  ?>
              </a></td>
              <td>Rp.
                <? $bs11=format_agk($cpmb3['jumlah']); 
		          echo $bs11;  ?></td>
            </tr>
            <? $no2+=1; $tot=$tot+$cpmb3['jumlah']; } ?>
            <tr>
              <td colspan="2" bgcolor="#99CC66"><div align="center" class="style5">Total Bayar </div></td>
              <td width="31%" bgcolor="#99CC66"><span class="style5"><b>Rp.
                <? $bs12=format_agk($tot); 
		          echo $bs12;    ?>
              </b></span></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><div align="center">XB</div></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <? $no2=1; $tot=0;
		  $rp1=mysqli_query($koneksi, "SELECT * FROM rincian_bayar WHERE kd_kls='18'");
          while($crp=mysqli_fetch_assoc($rp1)){
		?>
            <tr>
              <td width="6%"><div align="center"><? echo $no2; ?></div></td>
              <td width="63%"><a href="page/act_dt_pembayaran.php?rekam3=1&amp;<? echo"kdkls=$crp[kd_kls]&kdbyr=$crp[kd_bayar]"; ?>">
                <?
			   $pmb3=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$crp[kd_bayar]'  ");
               $cpmb3=mysqli_fetch_assoc($pmb3);
			   echo $cpmb3['pembayaran'];
			  ?>
              </a></td>
              <td>Rp.
                <? $bs11=format_agk($cpmb3['jumlah']); 
		          echo $bs11;  ?></td>
            </tr>
            <? $no2+=1; $tot=$tot+$cpmb3['jumlah']; } ?>
            <tr>
              <td colspan="2" bgcolor="#99CC66"><div align="center" class="style5">Total Bayar </div></td>
              <td width="31%" bgcolor="#99CC66"><span class="style5"><b>Rp.
                <? $bs12=format_agk($tot); 
		          echo $bs12;    ?>
              </b></span></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><div align="center">XC</div></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <? $no2=1; $tot=0;
		  $rp1=mysqli_query($koneksi, "SELECT * FROM rincian_bayar WHERE kd_kls='22'");
          while($crp=mysqli_fetch_assoc($rp1)){
		?>
            <tr>
              <td width="6%"><div align="center"><? echo $no2; ?></div></td>
              <td width="63%"><a href="page/act_dt_pembayaran.php?rekam3=1&amp;<? echo"kdkls=$crp[kd_kls]&kdbyr=$crp[kd_bayar]"; ?>">
                <?
			   $pmb3=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$crp[kd_bayar]'  ");
               $cpmb3=mysqli_fetch_assoc($pmb3);
			   echo $cpmb3['pembayaran'];
			  ?>
              </a></td>
              <td>Rp.
                <? $bs11=format_agk($cpmb3['jumlah']); 
		          echo $bs11;  ?></td>
            </tr>
            <? $no2+=1; $tot=$tot+$cpmb3['jumlah']; } ?>
            <tr>
              <td colspan="2" bgcolor="#99CC66"><div align="center" class="style5">Total Bayar </div></td>
              <td width="31%" bgcolor="#99CC66"><span class="style5"><b>Rp.
                <? $bs12=format_agk($tot); 
		          echo $bs12;    ?>
              </b></span></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><div align="center">XD</div></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <? $no2=1; $tot=0;
		  $rp1=mysqli_query($koneksi, "SELECT * FROM rincian_bayar WHERE kd_kls='28'");
          while($crp=mysqli_fetch_assoc($rp1)){
		?>
            <tr>
              <td width="6%"><div align="center"><? echo $no2; ?></div></td>
              <td width="63%"><a href="page/act_dt_pembayaran.php?rekam3=1&amp;<? echo"kdkls=$crp[kd_kls]&kdbyr=$crp[kd_bayar]"; ?>">
                <?
			   $pmb3=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$crp[kd_bayar]'  ");
               $cpmb3=mysqli_fetch_assoc($pmb3);
			   echo $cpmb3['pembayaran'];
			  ?>
              </a></td>
              <td>Rp.
                <? $bs11=format_agk($cpmb3['jumlah']); 
		          echo $bs11;  ?></td>
            </tr>
            <? $no2+=1; $tot=$tot+$cpmb3['jumlah']; } ?>
            <tr>
              <td colspan="2" bgcolor="#99CC66"><div align="center" class="style5">Total Bayar </div></td>
              <td width="31%" bgcolor="#99CC66"><span class="style5"><b>Rp.
                <? $bs12=format_agk($tot); 
		          echo $bs12;    ?>
              </b></span></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><div align="center">XIA</div></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <? $no2=1; $tot=0;
		  $rp1=mysqli_query($koneksi, "SELECT * FROM rincian_bayar WHERE kd_kls='19'");
          while($crp=mysqli_fetch_assoc($rp1)){
		?>
            <tr>
              <td width="6%"><div align="center"><? echo $no2; ?></div></td>
              <td width="63%"><a href="page/act_dt_pembayaran.php?rekam3=1&amp;<? echo"kdkls=$crp[kd_kls]&kdbyr=$crp[kd_bayar]"; ?>">
                <?
			   $pmb3=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$crp[kd_bayar]'  ");
               $cpmb3=mysqli_fetch_assoc($pmb3);
			   echo $cpmb3['pembayaran'];
			  ?>
              </a></td>
              <td>Rp.
                <? $bs11=format_agk($cpmb3['jumlah']); 
		          echo $bs11;  ?></td>
            </tr>
            <? $no2+=1; $tot=$tot+$cpmb3['jumlah']; } ?>
            <tr>
              <td colspan="2" bgcolor="#99CC66"><div align="center" class="style5">Total Bayar </div></td>
              <td width="31%" bgcolor="#99CC66"><span class="style5"><b>Rp.
                <? $bs12=format_agk($tot); 
		          echo $bs12;    ?>
              </b></span></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><div align="center">XIB</div></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <? $no2=1; $tot=0;
		  $rp1=mysqli_query($koneksi, "SELECT * FROM rincian_bayar WHERE kd_kls='12'");
          while($crp=mysqli_fetch_assoc($rp1)){
		?>
            <tr>
              <td width="6%"><div align="center"><? echo $no2; ?></div></td>
              <td width="63%"><a href="page/act_dt_pembayaran.php?rekam3=1&amp;<? echo"kdkls=$crp[kd_kls]&kdbyr=$crp[kd_bayar]"; ?>">
                <?
			   $pmb3=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$crp[kd_bayar]'  ");
               $cpmb3=mysqli_fetch_assoc($pmb3);
			   echo $cpmb3['pembayaran'];
			  ?>
              </a></td>
              <td>Rp.
                <? $bs11=format_agk($cpmb3['jumlah']); 
		          echo $bs11;  ?></td>
            </tr>
            <? $no2+=1; $tot=$tot+$cpmb3['jumlah']; } ?>
            <tr>
              <td colspan="2" bgcolor="#99CC66"><div align="center" class="style5">Total Bayar </div></td>
              <td width="31%" bgcolor="#99CC66"><span class="style5"><b>Rp.
                <? $bs12=format_agk($tot); 
		          echo $bs12;    ?>
              </b></span></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><div align="center">XIC</div></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <? $no2=1; $tot=0;
		  $rp1=mysqli_query($koneksi, "SELECT * FROM rincian_bayar WHERE kd_kls='29'");
          while($crp=mysqli_fetch_assoc($rp1)){
		?>
            <tr>
              <td width="6%"><div align="center"><? echo $no2; ?></div></td>
              <td width="63%"><a href="page/act_dt_pembayaran.php?rekam3=1&amp;<? echo"kdkls=$crp[kd_kls]&kdbyr=$crp[kd_bayar]"; ?>">
                <?
			   $pmb3=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$crp[kd_bayar]'  ");
               $cpmb3=mysqli_fetch_assoc($pmb3);
			   echo $cpmb3['pembayaran'];
			  ?>
              </a></td>
              <td>Rp.
                <? $bs11=format_agk($cpmb3['jumlah']); 
		          echo $bs11;  ?></td>
            </tr>
            <? $no2+=1; $tot=$tot+$cpmb3['jumlah']; } ?>
            <tr>
              <td colspan="2" bgcolor="#99CC66"><div align="center" class="style5">Total Bayar </div></td>
              <td width="31%" bgcolor="#99CC66"><span class="style5"><b>Rp.
                <? $bs12=format_agk($tot); 
		          echo $bs12;    ?>
              </b></span></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><div align="center">XID</div></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <? $no2=1; $tot=0;
		  $rp1=mysqli_query($koneksi, "SELECT * FROM rincian_bayar WHERE kd_kls='30'");
          while($crp=mysqli_fetch_assoc($rp1)){
		?>
            <tr>
              <td width="6%"><div align="center"><? echo $no2; ?></div></td>
              <td width="63%"><a href="page/act_dt_pembayaran.php?rekam3=1&amp;<? echo"kdkls=$crp[kd_kls]&kdbyr=$crp[kd_bayar]"; ?>">
                <?
			   $pmb3=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$crp[kd_bayar]'  ");
               $cpmb3=mysqli_fetch_assoc($pmb3);
			   echo $cpmb3['pembayaran'];
			  ?>
              </a></td>
              <td>Rp.
                <? $bs11=format_agk($cpmb3['jumlah']); 
		          echo $bs11;  ?></td>
            </tr>
            <? $no2+=1; $tot=$tot+$cpmb3['jumlah']; } ?>
            <tr>
              <td colspan="2" bgcolor="#99CC66"><div align="center" class="style5">Total Bayar </div></td>
              <td width="31%" bgcolor="#99CC66"><span class="style5"><b>Rp.
                <? $bs12=format_agk($tot); 
		          echo $bs12;    ?>
              </b></span></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><div align="center">XIIA</div></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <? $no2=1; $tot=0;
		  $rp1=mysqli_query($koneksi, "SELECT * FROM rincian_bayar WHERE kd_kls='21'");
          while($crp=mysqli_fetch_assoc($rp1)){
		?>
            <tr>
              <td width="6%"><div align="center"><? echo $no2; ?></div></td>
              <td width="63%"><a href="page/act_dt_pembayaran.php?rekam3=1&amp;<? echo"kdkls=$crp[kd_kls]&kdbyr=$crp[kd_bayar]"; ?>">
                <?
			   $pmb3=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$crp[kd_bayar]'  ");
               $cpmb3=mysqli_fetch_assoc($pmb3);
			   echo $cpmb3['pembayaran'];
			  ?>
              </a></td>
              <td>Rp.
                <? $bs11=format_agk($cpmb3['jumlah']); 
		          echo $bs11;  ?></td>
            </tr>
            <? $no2+=1; $tot=$tot+$cpmb3['jumlah']; } ?>
            <tr>
              <td colspan="2" bgcolor="#99CC66"><div align="center" class="style5">Total Bayar </div></td>
              <td width="31%" bgcolor="#99CC66"><span class="style5"><b>Rp.
                <? $bs12=format_agk($tot); 
		          echo $bs12;    ?>
              </b></span></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><div align="center">XIIB</div></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <? $no2=1; $tot=0;
		  $rp1=mysqli_query($koneksi, "SELECT * FROM rincian_bayar WHERE kd_kls='14'");
          while($crp=mysqli_fetch_assoc($rp1)){
		?>
            <tr>
              <td width="6%"><div align="center"><? echo $no2; ?></div></td>
              <td width="63%"><a href="page/act_dt_pembayaran.php?rekam3=1&amp;<? echo"kdkls=$crp[kd_kls]&kdbyr=$crp[kd_bayar]"; ?>">
                <?
			   $pmb3=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$crp[kd_bayar]'  ");
               $cpmb3=mysqli_fetch_assoc($pmb3);
			   echo $cpmb3['pembayaran'];
			  ?>
              </a></td>
              <td>Rp.
                <? $bs11=format_agk($cpmb3['jumlah']); 
		          echo $bs11;  ?></td>
            </tr>
            <? $no2+=1; $tot=$tot+$cpmb3['jumlah']; } ?>
            <tr>
              <td colspan="2" bgcolor="#99CC66"><div align="center" class="style5">Total Bayar </div></td>
              <td width="31%" bgcolor="#99CC66"><span class="style5"><b>Rp.
                <? $bs12=format_agk($tot); 
		          echo $bs12;    ?>
              </b></span></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><div align="center">XIIC</div></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <? $no2=1; $tot=0;
		  $rp1=mysqli_query($koneksi, "SELECT * FROM rincian_bayar WHERE kd_kls='31'");
          while($crp=mysqli_fetch_assoc($rp1)){
		?>
            <tr>
              <td width="6%"><div align="center"><? echo $no2; ?></div></td>
              <td width="63%"><a href="page/act_dt_pembayaran.php?rekam3=1&amp;<? echo"kdkls=$crp[kd_kls]&kdbyr=$crp[kd_bayar]"; ?>">
                <?
			   $pmb3=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$crp[kd_bayar]'  ");
               $cpmb3=mysqli_fetch_assoc($pmb3);
			   echo $cpmb3['pembayaran'];
			  ?>
              </a></td>
              <td>Rp.
                <? $bs11=format_agk($cpmb3['jumlah']); 
		          echo $bs11;  ?></td>
            </tr>
            <? $no2+=1; $tot=$tot+$cpmb3['jumlah']; } ?>
            <tr>
              <td colspan="2" bgcolor="#99CC66"><div align="center" class="style5">Total Bayar </div></td>
              <td width="31%" bgcolor="#99CC66"><span class="style5"><b>Rp.
                <? $bs12=format_agk($tot); 
		          echo $bs12;    ?>
              </b></span></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><div align="center">XIID</div></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <? $no2=1; $tot=0;
		  $rp1=mysqli_query($koneksi, "SELECT * FROM rincian_bayar WHERE kd_kls='32'");
          while($crp=mysqli_fetch_assoc($rp1)){
		?>
            <tr>
              <td width="6%"><div align="center"><? echo $no2; ?></div></td>
              <td width="63%"><a href="page/act_dt_pembayaran.php?rekam3=1&amp;<? echo"kdkls=$crp[kd_kls]&kdbyr=$crp[kd_bayar]"; ?>">
                <?
			   $pmb3=mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$crp[kd_bayar]'  ");
               $cpmb3=mysqli_fetch_assoc($pmb3);
			   echo $cpmb3['pembayaran'];
			  ?>
              </a></td>
              <td>Rp.
                <? $bs11=format_agk($cpmb3['jumlah']); 
		          echo $bs11;  ?></td>
            </tr>
            <? $no2+=1; $tot=$tot+$cpmb3['jumlah']; } ?>
            <tr>
              <td colspan="2" bgcolor="#99CC66"><div align="center" class="style5">Total Bayar </div></td>
              <td width="31%" bgcolor="#99CC66"><span class="style5"><b>Rp.
                <? $bs12=format_agk($tot); 
		          echo $bs12;    ?>
              </b></span></td>
            </tr>
          </table></td>
        </tr>
        
       
      </table></td>
    </tr>
    <tr>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td valign="top" bgcolor="#DCF3AF">&nbsp;</td>
      <td valign="top" bgcolor="#DCF3AF">&nbsp;</td>
      <td valign="top" bgcolor="#DCF3AF">&nbsp;</td>
    </tr>
  </table>
</form>

</body>
</html>
