<?php
	$xml=simplexml_load_file("book.xml");
	echo "<center><table border=1>";
	echo "<tr><th>name</th><th>author</th><th>publication</th><th>year</th><th>price</th></tr>";
	foreach($xml->children() as $x)
	{
		echo "<tr>";
		foreach($x as $child)
		{
			echo "<td>".$child."</td>";
		}		
		echo "</tr>";
	}
	echo "</center></table>";
?>
