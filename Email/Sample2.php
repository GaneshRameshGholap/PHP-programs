<html>
	<head>
	<title>Sending email using PHP</title>
	</head>
	<body>
	<?php
	$to="snaketingale830@gmail.com";
 	$subject="Sending email using PHP";
	$message="This is simple text message sending via php script";
	$header="From:ganesh.gholap@iccs.ac.in\r\n";
	$mail=mail($to,$subject,$message,$header);
	if($mail==true)
	{
	echo "Message sent successfully..";
	}
	else
	{
	echo "Message sending Error..";
	}
	?>
       </body>
</html>
