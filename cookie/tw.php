<?php
	$fontcolor=$_GET['cmbcolor'];
        $text=$_GET['txttext'];
        $fontstyle=$_GET['cmbstyle'];
        $fontsize=$_GET['cmbsize'];
        $bgcolor=$_GET['cmbcolor1'];
        setcookie('fcolor',$fontcolor);
        setcookie('text',$text);
        setcookie('fstyle',$fontstyle);
        setcookie('fsize',$fontsize);
        setcookie('bgcolor',$bgcolor);
?>
<html>
<head></head>
<body>
<form method=GET action="thre.php">
<input type=submit value=implement>
</form>
</body>
</html>
