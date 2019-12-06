<?php
   $dname=$_GET['txthos'];
   $db=pg_connect("host=localhost dbname=html user=postgres password=postgres");
   if(!$db)
   {
    die("could not connect");
   }
   $query="select * from Doctor where dno in(select dno from Hospital,DH where Hospital.hno=DH.hno and hname='$dname')";
   $result=pg_query($db,"$query");
   if(!$result)
   {
   die("incorrect query");
   }
   echo "<table border=2>";
   echo "<tr><th>DNO</th><th>Dname</th><th>Dadd</th><th>Dcity</th><th>area</th></tr>";
   while($row=pg_fetch_row($result))
   {
   echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[3]</td><td>$row[4]</td></tr>";
   }
   echo "</table>";
?>
