<?php 
echo "<h1><center>Product Bill Generation For Customer</center></h1>";
echo "<table border=1>";
echo "<tr><th>name</th><th>address</th><th>phoneno</th><th>pname</th><th>Pqty</th><th>Prate</th><th>total</th></tr>"; 
$total=$_GET['pqty']*$_GET['prate'];
echo "<tr><td>$_COOKIE[name]</td><td>$_COOKIE[add]</td><td>$_COOKIE[phone]</td><td>$_GET[pname]</td><td>$_GET[pqty]</td><td>$_GET[prate]</td><td>$total</td></tr>";
echo "</table>";
?>

