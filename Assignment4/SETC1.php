<?php
do
{
	echo "\n1.Display size of file";
	echo "\n2.Display Last Access,changed,modified time of file:";
	echo "\n3.Display Detail about owner and user of File:";
	echo "\n4.Display type of file";
	echo "\n5.Delete a file:";
	echo "\n6.copy a file:";
	echo "\n7.traverse  a directory in hierarchy:";
	echo "\n8.Remove a directory:";
       echo "\n9.Exit:";
       echo "\nEnter the choice:";
       $ch=fgets(STDIN);
      switch($ch)
      {
        case 1:echo "Enter the file name\n";
               $file=fgets(STDIN);
               $str=trim($file);
               echo "\nfile name is=$str";
              $n=filesize($str);
              echo "\nSize of file =$n";
               break;
        case 2:echo "\nDisplay Last ,Changed,modified time of file:";
              echo "\nEnter the file name:";
               $file=fgets(STDIN);
                $str=trim($file);
              echo "\naccess time=".fileatime($str);
               echo "\nchanged time=".filectime($str);
              echo "\nmodified time=".filemtime($str);
               break;
        case 3:echo "\nEnter the file name:";
                $file=fgets(STDIN);
                $str=trim($file);
                 $uid=fileowner($str);
                echo "\nowner and user of file=";
                $dir=posix_getpwuid($uid);
                 print_r($dir);
                $uid=filegroup($str);
                $dir=posix_getgrgid($uid);
               echo "\ngroup id of the owner for file =$str is=";
                 print_r($dir);
                 break;
        case 4:echo "Enter the file name:";
               $file=fgets(STDIN);
               $str=trim($file);
               echo"Type of file is=".filetype($str);
                break;
        case 5:echo "Enter the file to delete:";
              $file=fgets(STDIN);
              $str=trim($file);
              if(unlink($str))
               {
                echo "$str is deleted:";
               }
             else
             {
                echo "$str is not deleted:";
             }
              break;
        case 6:echo "Enter the the source file to copy:";
                $file=fgets(STDIN);
                $str=trim($file);
                echo "Enter the destination file in which file $str is copied";
                $str1=fgets(STDIN);
               $str1=trim($str1);
                 $ele=copy($str,$str1);
                  if($ele)
                    {
                  echo "\nFile is copied:";
                    }   
                   else
                    {
                   echo "\nFile is not copied:";
                  }   
                  break;
        
        case 8:echo "Enter  the Directory name to delete:";
                $dir=fgets(STDIN);
               $str=trim($dir);
               $ele=rmdir($str);
                if($ele)
               {
                echo "\ndirectory is deleted:";
               }
               else
              {
            echo "\ndirectory is not deleted:";
              }
               break;
      }
}while($ch!=9);
?>
