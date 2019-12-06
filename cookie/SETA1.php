<?php
session_start();
session_register('time');
if($_SERVER['REQUEST_METHOD']=='GET')
{
	?>
		<form method=POST action="<?php echo $_SERVER['PHP_SELF'] ?>">
		Enter the username:<input type=text name="t1"><br>
		Enter the Password:<input type=password name="t2"><br>
		<input type=submit value="Login">
		</form>
		<?php
		$_SESSION['time']=time();
}
else if($_SERVER['REQUEST_METHOD']=='POST')
{         
        $st=time();
	$name=$_POST['t1'];
	$pwd=$_POST['t2'];
	echo "
		<html>
		<head>
		</head>
		<body>
		<form method=GET action='SETA2.php'>
		Enter the name:<input type=text name=nm><br>
		Enter the city:<input type=text name=ct><br>
		Enter the phono:<input type=text name=ph><br>
		<input type=submit value=submit>
		</form>
		</body>
		</html>
		";
}
else
{
	die("Error occured");
}
?>
