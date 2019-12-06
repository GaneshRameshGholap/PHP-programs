<html>
<head>
<title>Self Processing Page</title>
</head>
<body>
<form method=GET action="<?php echo $_SERVER['PHP_SELF'] ?>">
Enter the temp in fahrenheit:<input type=text name=txttemp><br>
<input type=submit value=submit>
</form>
</body>
<?php
  $temp=$_GET['txttemp'];
  $res=($temp-32)*(5/9);
  echo "$res";
?>
</html>
