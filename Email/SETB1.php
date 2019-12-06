<?php
	$to=$_POST['to'];
	$from=$_POST['from'];
	$message=$_POST['msg'];
	$subject=$_POST['subject'];
	$filea=$_FILES['filea'];
	if(!filter_var($to,FILTER_VALIDATE_EMAIL))
	{
	die("Invalid email to");
	}
	else if(!filter_var($from,FILTER_VALIDATE_EMAIL))
	{
	die("Invalid email from");
	}
	else
	{
	$file=file_get_contents($filea['name']);
	
	$header="MIME-version:1.0\r\n"."Content-Type:multipart/mix;boundary=\"1a2a3a\"";
	
	$message="$filea[name]".chunk_split(base64_encode($file));

	$mail=mail($to,$subject,$message,$header);

	if($mail)
	echo "success";
	else
	echo "not";
	}
?>

