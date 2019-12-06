<?php
	$s=$_GET['txtnam'];
	$s1=array();
	for($i=0;$i<strlen($s);$i++)
	{
         array_push($s1,$s[$i]);
	}
         print_r($s1);
        for($i=0;$i<strlen($s);$i++)	
	{
	$rev=array_pop($s1);
        echo "<br>rev=$rev";
        if(strcmp($rev,$s[$i])==0)
         {
        $flag=1;
	}
        else
	{
         $flag=0;
        echo "<br>NOT Palindrome";
        exit();
	}
	}
        if($flag==1)
        echo "<br>Palindrome:";
?>
