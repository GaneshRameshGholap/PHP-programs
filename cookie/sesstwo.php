<?php
  $sname=$_GET['txtname'];
  $sclass=$_GET['txtclass'];
   session_start();
   session_register('sname');
   session_register('sclass');
   $_SESSION['sname']=$sname;
   $_SESSION['sclass']=$sclass;
?>
<html>
<head></head>
<body>
<form method=GET action="sessthree.php">
<input type=submit value=submit>
</form>
</body>
</html>

