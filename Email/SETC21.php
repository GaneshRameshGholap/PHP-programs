<?php
	$user=$_POST['txtmail'];
	$pass=$_POST['pwd'];
	$str="ganesh.gholap5555@gmail.com";
	$psd="Ganesh@5555";
	if((strcmp($user,$str)==0)&&(strcmp($psd,$pass)==0))
	{
	echo "<html>";
	echo "<head>";
	echo "</head>";
	echo "<body>";
	echo "<form method=POST action='SETC22.php'>";
	echo "TO:<br>";
        echo "<input type=text name=to><br>";
        /*echo "<input type=text name=to[]><br>";
        echo "<input type=text name=to[]><br>";
        echo "<input type=text name=to[]><br>";
        echo "<input type=text name=to[]><br>";*/
	echo "FROM:<input tupe=text name=from><br>";
	echo "MESSAGE:<input type=text name=msg><br>";
	echo "SUBJECT:<input type=text name=subject><br>";
	echo "<input name='filea' type='file' size=16><br>";
	echo "<input type=submit value=submit>";
	echo "</form>";
	echo "</body>";
	echo "</html>";

       }
      else
               echo "Enter valid user name password:";
?>
