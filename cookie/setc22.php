<?php
	session_start();
	session_register('jurking');
	session_register('shooes');
	$_SESSION['jurking']=$_GET['jurking'];
	$_SESSION['shooes']=$_GET['shooes'];
	$total1=0;
	if($_GET['jurking']!=NULL)
		$total1+=$_GET['jurking'];
	if($_GET['shooes']!=NULL)
		$total1+=$_GET['shooes'];
	echo "<center><h1>BILL</h1></center>";
	echo "<table border=1>";
	echo "<tr><th>Product name</th><th>Value</th></tr>";
	foreach($_SESSION as $key=>$val)
	{
		if($key!='total')
		{
                       if($val!=NULL)
			echo "<tr><td>$key</td><td>$val</td></tr>";
		}
	}
        echo "</table>";
	echo "page1 total=".$_SESSION['total'];
	echo "<br>";
	echo "page2 total=$total1<br>";
	$gtotal=$_SESSION['total']+$total1;
	echo "total of page1 and page2=".$gtotal;
?>


