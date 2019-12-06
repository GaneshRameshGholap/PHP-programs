<?php
session_start();
if(time()-$_SESSION['time']<10)
{
	echo "Name=".$_GET['nm'];
	echo "City=".$_GET['ct'];
	echo "Phone no=".$_GET['ph'];
}
else
{
	unset($_SESSION['time']);
	echo "SESSION EXPIRED";
	session_destroy();
}
?>

