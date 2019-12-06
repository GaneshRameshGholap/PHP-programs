<?php
   $pname=$_GET['txttn'];
   $db=pg_connect("host=localhost dbname=html user=postgres password=postgres");
   if(!$db)
   {
    die("could not connect");
   }
   $query="select sname,subject from student,ST,teacher where student.sno=ST.sno and teacher.tno=ST.tno and tname='$pname'";
   $result=pg_query($db,"$query");
   if(!$result)
   {
   die("incorrect query");
   }
   echo "<table border=2>";
   echo "<tr><th>sname</th><th>subject</th></tr>";
   while($row=pg_fetch_row($result))
   {
   echo "<tr><td>$row[0]</td><td>$row[1]</td></tr>";
   }
   echo "</table>";
?>
