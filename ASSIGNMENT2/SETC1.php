<?php
	do
	{
        echo"\n1.create array:";
 	echo"\n2.insert an element in stack:";
	echo"\n3.Delete an element from stack:";
	echo"\n4.Display the contents of stack;";
        echo"\n5.Insert an element in queue:";
	echo"\n6.Delete an element in queue:";
	echo"\n7.display the contents of queue:";
        echo"\n8.exit:";
        echo"\n Enter the choice:";
        $ch=fgets(STDIN);
        switch($ch)
	{
         case 1:echo"\nEnter the how many elements:";
                 $a=fgets(STDIN);
                for($i=0;$i<$a;$i++)
                {
                $ele=fgets(STDIN);
                $arr[$i]=$ele;
                }
                print_r($arr);
                     break;
        case 2:echo"\nEnter the element to insert:";
                $ele=fgets(STDIN);
                Array_push($arr,$ele);
                print_r($arr);
                   break;
        case 3:echo"\npop the element form stack:";
               $ele=Array_pop($arr);
               echo"\poped element is=$ele";
               print_r($arr);
               break;
        case 4:echo"\ncontents of stack are:";
              print_r($arr);
               break;
        case 5:echo"\nEnter the element to insert:";
                  $ele=fgets(STDIN);
                Array_unshift($arr,$ele);
                print_r($arr);
                  break;
        case 6:echo"\ndelete the element from queue:";
                 $ele=Array_shift($arr);
                  echo"$ele";
                 print_r($arr);
                  break;
        case 7:echo"\ndisplay contents of queue:";
                print_r($arr);
                  break;         
	}
	}while($ch!=8);
?>
