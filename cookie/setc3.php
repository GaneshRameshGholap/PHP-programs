<?php
	setcookie('name',$_GET['txtname']);
	setcookie('add',$_GET['txtadd']);
        setcookie('phone',$_GET['txtphon']);
?>
<html>
<head></head>
<body>
<form method=GET action="setc33.php">
<center><h1>Enter the product Details</h1></center>
Product name:<input type=text name=pname><br>
Product Qty:<input type=text name=pqty><br>
Product Rate:<input type=text name=prate><br>
<input type=submit value=submit>
</form>
</body>
</html>


