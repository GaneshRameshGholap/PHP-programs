<?php
	  $f=$_GET['txtdir'];
	  $fp=file($f);
  		 echo "<table border=1>";
       		 echo "<tr><th>rollNo</th><th>Name</th><th>Syspro</th><th>Tcs</th><th>CN</th><th>PHP</th><th>JAVA</th><th>BA</th><th>Total</th><th>average</th></tr>";
             print_r($fp);
   	for($i=0;$i<count($fp);$i++)
  	{
   		$arr=explode(' ',$fp[$i]);
   		$sum=0;
   		for($j=2;$j<8;$j++)
  		{
   		$sum=$sum+$arr[$j];
 	        }
  		$avg=($sum/600)*100;    
        	  echo "<tr><td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td><td>$arr[3]</td><td>$arr[4]</td><td>$arr[5]</td><td>$arr[6]</td><td>$arr[7]</td><td>$sum</td><td>$avg</td> </tr>";
       }
  echo "</table>";
?>

