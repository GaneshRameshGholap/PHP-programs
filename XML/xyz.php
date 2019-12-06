<?php
$dom=new DomDocument();
$dom->load("book.xml");
$t=$dom->getElementsByTagName("name");
foreach($t as $name)
{
echo "<br>";
echo $name->textContent;
}
?>
