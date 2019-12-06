<?php
   $pname=$_GET['q'];
   $db=pg_connect("host=localhost dbname=emp1 user=postgres password=postgres");
   if(!$db)
   {
    die("could not connect");
   }
   $query="select * from Employee where ename='$pname'";
   $result=pg_query($db,"$query");
   if(!$result)
   {
   die("incorrect query");
   }
   echo "<table border=2>";
   echo "<tr><th>eno</th><th>ename</th><th>designation</th><th>salary</th></tr>";
   while($row=pg_fetch_row($result))
   {
   echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>";
   }
   echo "</table>";
?>
