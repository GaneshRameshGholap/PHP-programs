<?php
$defualt_dir="/var/www/html/GaneshA-31";
function traversedir($dir)
{
	echo "\n\nTravesing directory...\n";
	chdir($dir);
	if(!($dp=opendir($dir)))die("\n\ncant opendir\n\n");
	while($file=readdir($dp))
	{
		if(is_dir($file))
		{
			if($file!='.'&&$file!='..')
			{
				echo "/$file\n";
				traversedir("$dir/$file");
				chdir($dir);
			}
		}
		else
			echo "$file\n";
	}
	closedir($dp);
}
traversedir($defualt_dir);
?>
