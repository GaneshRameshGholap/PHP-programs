<?php
	$name=$_POST['name'];
	$msg=$_POST['msg'];
	$email=$_POST['email'];
	for($i=0;$i<count($email);$i++)
	{
		if(strlen($email[$i]))
		{
			sendmail($email[$i],$name,$msg);
		}
	}
	function sendmail($email,$name,$msg)
	{
		$bool=mail($email,$name,$msg);
		if($bool)
			echo "<br>message send for $email";
		else
			echo "message not send";
	}
?>
