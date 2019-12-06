<?php
	$large=$_GET['txtlarge'];
	$small=$_GET['txtsmall'];
	$replace=$_GET['txtreplace'];
	echo "Large string=$large<br>";
	echo "Small string=$small<br>";
	echo "Replace string=$replace<br>";
	$pos=strpos($large,$small);
	if($pos==0)
	{
		echo "small string <u>$small</u> appears at the start of the string large string <u>$large</u><br>";
	}
	else
	{
		echo "small string <u>$small</u> not appears at the start of the string large string <u>$large</u><br>";
	}
	echo "<h2>Replace small string=$small by using replace string=$replace in large string=$large</h2><br>"; 
	$str=str_replace($small,$replace,$large);
	echo "<h3>$str</h3>";
	echo "split large string into words<br>";
	$arr=split(' ',$str);
	echo "Array is:<br>";
	print_r($arr);
?>


