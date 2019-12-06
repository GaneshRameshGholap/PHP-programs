<?php
session_start();
session_register('tuth');
session_register('oil');
session_register('sugar');
session_register('salt');
session_register('shurt');
session_register('total');
$_SESSION['tuth']=$_GET['tuth'];
$_SESSION['oil']=$_GET['oil'];
$_SESSION['sugar']=$_GET['sugar'];
$_SESSION['salt']=$_GET['salt'];
$_SESSION['shurt']=$_GET['shurt'];
$total=0;
if($_GET['tuth']!=NULL)
$total+=$_GET['tuth'];
if($_GET['oil']!=NULL)
$total+=$_GET['oil'];
if($_GET['sugar']!=NULL)
$total+=$_GET['sugar'];
if($_GET['salt']!=NULL)
$total+=$_GET['salt'];
if($_GET['shurt']!=NULL)
$total+=$_GET['shurt'];
$_SESSION['total']=$total;
?>
<html>
<head>
</head>
<body>
<form method=GET action="setc22.php">
<input type="checkbox" name="jurking" value="500">Jurking(Rs.500)<br>
<input type="checkbox" name="shooes" value="1000">shooes(Rs.1000)<br>
<input type=submit value=submit>
</form>
</body>
</html>
<?php echo "page1 total is=$total";
?>


