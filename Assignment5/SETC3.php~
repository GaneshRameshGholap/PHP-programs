<?php
   $cname=$_GET['txtcom'];
   $db=pg_connect("host=localhost dbname=stud user=postgres password=postgres");
   if(!$db)
   {
    die("could not connect");
   }
   $query="select * from Student where Student.sid in(select Student.sid from Student, Competition,SC where Student.sid=SC.sid and Competition.cno=SC.cno and cname='$cname' and rank=1);
";
   $result=pg_query($db,"$query");
   if(!$result)
   {
   die("incorrect query");
   }
   echo "<table border=2>";
   echo "<tr><th>sid</th><th>sname</th><th>class</th></tr>";
   while($row=pg_fetch_row($result))
   {
   echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
   }
   echo "</table>";
?>
