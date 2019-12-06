<?php
$text=$_GET['txtn'];
$color=$_GET['cmbcolor'];
$font=$_GET['cmbfont'];
echo "<body bgcolor=$color";
echo "<font face=$font>$text</font>";
?>
