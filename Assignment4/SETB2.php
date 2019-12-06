<?php 
  $d=$_GET['txtdir'];
  $ext=$_GET['txtext'];
  $dir=opendir($d);
   while($name=readdir($dir))
   { 
      $arr=explode('.',$name);
     if($arr[1]==$ext)
      {
        echo "$name<br>";
      }
   }
?>

