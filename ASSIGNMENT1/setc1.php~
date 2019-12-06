<?php
	$codedata=$_GET['txtcode'];
   	$namedata=$_GET['txtname'];
	$solddata=$_GET['txtsold'];
        $ratedata=$_GET['txtrate'];
	echo "Code data=$codedata<br>";
	echo "namedata=$namedata<br>";
	echo "solddata=$solddata<br>";
	echo "ratedata=$ratedata<br>";
        $code=explode(' ',$codedata);
        $name=explode(',',$namedata);
     	$unit=explode('/',$solddata);
 	$rate=explode('.',$ratedata);
        //$amount=(($unit[0]*$rate[0])+($unit[1]*$rate[1])+($unit[2]*$rate[2])+($unit[3]*$rate[3])+($unit[4]*$rate[4]));
        $amount=0;
        for($i=0;$i<5;$i++)
        {
          $amount=$amount+($unit[$i]*$rate[$i]);
        }
        echo "<table border=1>";
        echo "<tr><th>Code</th><th>Name</th><th>Unit</th><th>Rate</th></tr>";
        for($i=0;$i<5;$i++)
        {
          echo "<tr><td>$code[$i]</td> <td>$name[$i]</td> <td>$unit[$i]</td><td>$rate[$i]</td> </tr>";
	}
        echo "<tr><td colspan=1>Total amount=$amount</td></tr>";
        echo "</table>";
?>
