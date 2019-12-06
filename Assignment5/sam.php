<?php
   $dname=$_GET['txtdep'];
   $db=pg_connect("host=localhost dbname=html user=postgres password=postgres");
   if(!$db)
   {
     die("could not connect");
   }
  $query="select max(salary),min(salary),sum(salary) from Emp,Dept where Dept.dno=Emp.dno and dname='$dname'";
  $result=pg_query($db,"$query");
  if(!$result)
  {
       die("incorrect query");
  }
  	  echo "<table border=1>";
	  echo "<tr><th>Maximum Salary</th><th>Minimum Salary</th><th>Sum Salary</th></tr>";
  while($row=pg_fetch_row($result))
  {
 	echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
  }
  echo "</table>";
?>
