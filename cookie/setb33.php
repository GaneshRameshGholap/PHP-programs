<?php 
echo "<h1><center>Student Result Information</center></h1>";
echo "<table border=1>";
echo "<tr><th>name</th><th>class</th><th>add</th><th>Phy</th><th>Bio</th><th>Chem</th><th>Maths</th><th>Marathi</th><th>English</th><th>total</th><th>Percentage</th></tr>"; 
$total=$_GET['phy']+$_GET['bio']+$_GET['chem']+$_GET['math']+$_GET['marathi']+$_GET['english'];
$per=($total/600)*100;
echo "<tr><td>$_COOKIE[sname]</td><td>$_COOKIE[class]</td><td>$_COOKIE[add]</td><td>$_GET[phy]</td><td>$_GET[bio]</td><td>$_GET[chem]</td><td>$_GET[math]</td><td>$_GET[marathi]</td><td>$_GET[english]</td><td>$total</td><td>$per</td></tr>";
echo "</table>";
?>

