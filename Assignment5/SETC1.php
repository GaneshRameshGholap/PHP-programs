<?php
   $op=$_GET['radstr'];
   $db=pg_connect("host=localhost dbname=movie user=postgres password=postgres");
   if(!$db)
   {
    die("could not connect");
   }
   switch($op)
   {
   case 1:$actor=$_GET['txtact'];
          $query="select mname from Movie,Actor,MA where Movie.mno=MA.mno and Actor.ano=MA.ano and aname='$actor'";
          $result=pg_query($db,"$query");
          if(!$result)
          {
           die("incorrect query");
          } 
          while($row=pg_fetch_row($result))
          {
             echo "$row[0]<br>";
          }
         break;
   case 2:$mno=$_GET['txtmno'];
           $mname=$_GET['txtmname'];
           $year=$_GET['txtyear'];
           $query="insert into Movie values($mno,'$mname',$year);";
           $res=pg_query($db,"$query");
           if($res)
           { 
               $query="select * from Movie;";
               $res=pg_query($db,"$query");
               if(!$res)
                {
                 die("incorrect query");
                }
                echo "<table border=1>";
                echo "<tr><th>mno</th><th>mname</th><th>year</th></tr>";
                while($row=pg_fetch_row($res))
                 {
                 echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
                 }
           }
           else
           {
           echo "record is not inserted:";
           }          
           break;
   case 3:$mname=$_GET['txtmnam'];
          $query="update Movie set ryear=2014 where mname='$mname'";
           $res=pg_query($db,"$query");
           if($res)
           {
           $query="select * from Movie where mname='$mname';";
           $res=pg_query($db,"$query");
           if(!$res)
           {
            die("incorrect query");
           }
           echo "<table border=1>";
           echo "<tr><th>mno</th><th>mname</th><th>year</th></tr>";
           while($row=pg_fetch_row($res))
           {
             echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
           }
           }
          else
          {
          echo "year is not updated";
          }
          break;
    }
?>
