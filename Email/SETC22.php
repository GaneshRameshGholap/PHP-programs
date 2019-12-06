<?php
	$to=$_POST['to'];
	$from=$_POST['from'];
	$message=$_POST['msg'];
	$subject=$_POST['subject'];
	$filea=$_FILES['filea'];
        if(strlen($to))
        {
               $to=explode(";",$to);
     
        	for($i=0;$i<count($to);$i++)
        	{
//                    echo $to[$i];

			if(!filter_var($to[$i],FILTER_VALIDATE_EMAIL))
			{
			die("Invalid email to");
                        }
		}
        }
        if(!filter_var($from,FILTER_VALIDATE_EMAIL))
	{
	die("Invalid email from");
	}
	$file=file_get_contents($filea['name']);
	
	$header="MIME-version:1.0\r\n"."Content-Type:multipart/mix;boundary=\"1a2a3a\"";
	
	$message="$filea[name]".chunk_split(base64_encode($file));

        for($i=0;$i<count($to);$i++)
        {
	$mail=mail($to[$i],$subject,$message,$header);

	if($mail)
	echo "mail send to $to[$i]<br>";
	else
	echo "mail not send to $to[$i]<br>";

	}
        
?>

