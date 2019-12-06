<?php
   	$large=$_GET['txtlarge'];
   	$small=$_GET['txtsmall'];
   	$replace=$_GET['txtreplace'];
         echo "Large string is:$large<br>";
 	 echo "Small string is:$small<br>";
  	 echo "Replace string is:$replace<br>";
  	 $pos=strpos($large,$small);
         $pos1=strrpos($large,$small);
         echo "<b><h3>First occerence of small string=<u>$small</u> in large string=<u>$large</u>  is at :$pos<b></h3><br>";
         echo "<b><h3>Last occerenceof small string<u>$small</u> in large string<u>$large</u>is at $pos1<b></h3><br>";
         $count=substr_count($large,$small);
         echo "<h2><i>Number of times small string=<u>$small</u> occurs in a  large string=<u>$large</u> is=$count</i></h2><br>";
         echo "Replace all occurence of small string=<u>$small</u> in large string=<u>$large</u><br>";
         $str=str_replace($small,$replace,$large);
         echo "display replaced string<br>";
         echo "$str";        
?>
