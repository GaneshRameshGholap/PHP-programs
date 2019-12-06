<?php
	$to="ganesh.gholap@iccs.ac.in";
	$subject="Sending email using php";
	$message="This is simple text message sending via php script";
	$bool=mail($to,$subject,$message);
	if($bool)
	{
		echo "success";
	}
	else
	{
		echo "failure";
	}
?>
