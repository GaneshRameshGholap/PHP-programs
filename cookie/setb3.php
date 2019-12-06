<?php
	setcookie('sname',$_GET['txtname']);
	setcookie('class',$_GET['txtclass']);
        setcookie('add',$_GET['txtadd']);
?>
<html>
<head></head>
<body>
<form method=GET action="setb33.php">
<center><h1>Enter the marks of subject</h1></center>
Phy:<input type=text name=phy><br>
Bio:<input type=text name=bio><br>
Chem:<input type=text name=chem><br>
Maths:<input type=text name=math><br>
Marathi:<input type=text name=marathi><br>
English:<input type=text name=english><br>
<input type=submit value=submit>
</form>
</body>
</html>


