<?php
  $d=$_GET['txtdir'];
  $dir=opendir($d);
   while($name=readdir($dir))
   {
        echo "$name<br>";
   }
?>
