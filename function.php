<?
function angka_huruf($n){
	$nilx=strrev($n);
	$panjang=strlen($nilx);
	$total=0;$hurufkomplit="";
	for($jum=0;$jum<$panjang;$jum+=3){
		$nilai=substr($nilx,$jum,3);
		//echo $nilai."<br>";

		$temp_nil=0;$hrf="";$h="";$slip="";$huruf="";
		$n=$nilai;
		$pjg=$nilai;

		for($a=0;$a<3;$a++){
			$nil=substr($n,$a,1);
			if($nil==0)$h="";if($nil==1)$h="satu ";if($nil==2)$h="dua ";if($nil==3)$h="tiga ";if($nil==4)$h="empat ";
			if($nil==5)$h="lima ";if($nil==6)$h="enam ";if($nil==7)$h="tujuh ";if($nil==8)$h="delapan ";if($nil==9)$h="sembilan ";

			if(($nil==1 AND $temp_nil==0 AND $a!=0) OR ($nil==1 AND $a==2) OR ($nil==1 AND $total==1))$h="se";
			if($a==1 AND $nil!=0)$slip="puluh ";if($a==2 AND $nil!=0)$slip="ratus ";
			if($a==1 AND $nil==1)$slip="belas ";

			$slip=strrev($slip);
			$h=strrev($h);
			//------------gabung kata----------------------------------------------------
			if($nil!=0){
				if($a==1 AND $nil==1)
					if($temp_nil==1)$hrf=strrev("sebelas ");	else $hrf=$slip.$hrf; 
				else 
					$hrf=$hrf.$slip.$h;
			}
			//--------------------------------------------------------------------
			$temp_nil=$nil;
		}		
			
		if($total==1)$slip2="ribu ";if($total==2)$slip2="juta ";if($total==3)$slip2="milyar ";if($total==4)$slip2="triliun ";
		if(!empty($hrf))
			$huruf=strrev($slip2).$hrf;
			//echo "angka=".strrev($nilai)."<br>huruf=".$huruf."<br>";
			$hurufkomplit=$hurufkomplit.$huruf;
			$total++;
	}
	$huruf_nilai=strrev($hurufkomplit);
	return $huruf_nilai;
}

function format_agk($k)
{
                        if(strlen($k)==4){
						   $ptot=substr($k,0,1);
						   $ptot2=substr($k,1,3);
						   $gtot=$ptot.",".$ptot2;
						}
                        if(strlen($k)==5){
						   $ptot=substr($k,0,2);
						   $ptot2=substr($k,2,3);
						   $gtot=$ptot.",".$ptot2;
						}
                       if(strlen($k)==6){
						   $ptot=substr($k,0,3);
						   $ptot2=substr($k,3,3);
						   $gtot=$ptot.",".$ptot2;
						}
						
						if(strlen($k)==7){
						   $ptot=substr($k,0,1);
						   $ptot2=substr($k,1,3);
						   $ptot3=substr($k,4,3);
						   $gtot=$ptot.",".$ptot2.",".$ptot3;
						}
						
						if(strlen($k)==8){
						   $ptot=substr($k,0,2);
						   $ptot2=substr($k,2,3);
						   $ptot3=substr($k,5,3);
						   $gtot=$ptot.",".$ptot2.",".$ptot3;
						}
						if(strlen($k)==9){
						   $ptot=substr($k,0,3);
						   $ptot2=substr($k,3,3);
						   $ptot3=substr($k,6,3);
						   $gtot=$ptot.",".$ptot2.",".$ptot3;
						} 
						echo $gtot;
}

function format_agk2($k,$blnb,$qbln)
{

                        if(strlen($k)==4){
						   $ptot=substr($k,0,1);
						   $ptot2=substr($k,1,3);
						   $gtot=$ptot.".".$ptot2;
						}
                        if(strlen($k)==5){
						   $ptot=substr($k,0,2);
						   $ptot2=substr($k,2,3);
						   $gtot=$ptot.".".$ptot2;
						}
                       if(strlen($k)==6){
						   $ptot=substr($k,0,3);
						   $ptot2=substr($k,3,3);
						   $gtot=$ptot.".".$ptot2;
						}
						
						if(strlen($k)==7){
						   $ptot=substr($k,0,1);
						   $ptot2=substr($k,1,3);
						   $ptot3=substr($k,4,3);
						   $gtot=$ptot.".".$ptot2.".".$ptot3;
						}
						
						if(strlen($k)==8){
						   $ptot=substr($k,0,2);
						   $ptot2=substr($k,2,3);
						   $ptot3=substr($k,5,3);
						   $gtot=$ptot.".".$ptot2.".".$ptot3;
						}
						if(strlen($k)==9){
						   $ptot=substr($k,0,3);
						   $ptot2=substr($k,3,3);
						   $ptot3=substr($k,6,3);
						   $gtot=$ptot.".".$ptot2.".".$ptot3;
						} 
						
						
   if($blnb=="Januari"){ $nbk=1;  }
   if($blnb=="Februari"){  $nbk=2;  }
   if($blnb=="Maret"){  $nbk=3;  }
   if($blnb=="April"){  $nbk=4;  }
   if($blnb=="Mei"){  $nbk=5;  }
   if($blnb=="Juni"){  $nbk=6;  }
   if($blnb=="Juli"){  $nbk=7; }
   if($blnb=="Agustus"){  $nbk=8;  }
   if($blnb=="September"){  $nb=9; }
   if($blnb=="Oktober"){ $nbk=10; }
   if($blnb=="Nopember"){ $nbk=11; }
   if($blnb=="Desember"){ $nbk=12; }
   $gg=date(d)+1-1; 
   
   	if($qbln==$nbk and $gg<=10){
		 echo $gtot;
		 }
	if($qbln==$nbk and $gg>=11){
		 if($gtot>=1){echo "<font color='#ff0000'>$gtot</font>"; }else{ echo 0; }
		 }
	if($qbln<$nbk){
		  echo $gtot;
		 }
	if($qbln>$nbk){
	      if($gtot>=1){echo "<font color='#ff0000'>$gtot</font>"; }else{ echo 0; }
	}  
}

function format_predikat($np,$kls)
{
        if($kls=='VIIA' or $kls=='VIIB' or $kls=='VIIC' or $kls=='VIID' or $kls=='VIIE'){
		    if($np <=74 ){ echo"D";  } 
			if($np >= 75 and $np <=82 ){ echo"C";  } 
		    if($np >= 83 and $np <=91 ){ echo"B";  } 
		    if($np >= 92 and $np <=100){ echo"A";  }
		  }
		if($kls=='VIIIA' or $kls=='VIIIB' or $kls=='VIIIC' or $kls=='VIIID' or $kls=='VIIIE'){
		    if($np <=77 ){ echo"D";  }
			if($np >= 78 and $np <=84 ){ echo"C";  } 
		    if($np >= 85 and $np <=92 ){ echo"B";  } 
		    if($np >= 93 and $np <=100){ echo"A";  }
		  }
		if($kls=='IXA' or $kls=='IXB' or $kls=='IXC' or $kls=='IXD' or $kls=='IXE'){
		    if($np <=79 ){ echo"D";  }
			if($np >= 80 and $np <=86 ){ echo"C";  } 
		    if($np >= 87 and $np <=93 ){ echo"B";  } 
		    if($np >= 94 and $np <=100){ echo"A";  }
		  }
}

?>