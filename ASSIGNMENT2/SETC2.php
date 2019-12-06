<?php
	do
	{
        echo"\n1.create array:";
 	echo"\nSort array by values asscending or descending:";
	echo"\n3.Sort array by values without changing the keys:";
	echo"\n4.Filter the odd elements from an array:";
        echo"\n5.Sort the different arrays at a glance using single function";
	echo"\n6.Merge the given arrays:";
	echo"\n7.Find the intersection of two arrays:";
        echo"\n8.Find the union of two arrays:";
        echo"\n9.Find the Set Difference of two arrays:";
        echo"\n10.exit:";
        echo"\n Enter the choice:";
        $ch=fgets(STDIN);
        switch($ch)
	{
         case 1:$arr=array("karnatak"=>"Banglore","Maharashtra"=>"Mumbai","Goa"=>"panjim");
                $arr1=array("cover"=>"bird","shape"=>"reactangle","Goa"=>"panjim");
                $a1=array(1,5,8,2,7,9);
                $a2=array(10,24,56,78,7,2);
                  print_r($arr);
                  print_r($arr1);
                 print_r($num);
                  print_r($a1);
                 print_r($a2);
                     break;
        case 2:echo"\nSort the array by values changing the keys in asscending:";
                sort($arr);
                echo"\nDisplay array in asscending order:";
                print_r($arr);
                echo"\nSort the array by values changing the keys in desscending:";
                rsort($arr);
                echo"\nDisplay array in desscending order:";
                print_r($arr);
                   break;
        case 3:echo"\ndisplay the array which is to be sort:";
                 print_r($arr1);
               echo"\nDisplay array in asscending order:";
                asort($arr1);
                print_r($arr1);
                echo"\n Display array in desscending order:";
                arsort($arr1);
                print_r($arr1);
                break;
        case 4:function is_odd($ele)
                {
                 if($ele%2!=0)
                   {
                     return $ele;
                   }
                }
               $odd=array_filter($a1,'is_odd');
               print_r($odd);
               break;
        case 5:echo"\n Sort the different arrays at a glance using single function:";
                   echo"\n display the unsorted array:";
                  print_r($a1);
                  print_r($a2);
                  array_multisort($a1,$a2);
                  echo"\n print the sorted arrays:";
                 print_r($a1);
                 print_r($a2);
                  break;
        case 6:echo"\nMerge the two arrays which are:";
                 print_r($a1);
                 print_r($a2);
                 $ele=array_merge($a1,$a2);
                  echo"\nDisplay merge array:";
                 print_r($ele);
                  break;
        case 7:echo"\nIntersect the two arrays which are:";
                print_r($a1);
                print_r($a2);
                $ele=array_intersect($a1,$a2);
              echo"\n display intersection of two arrays:";
             print_r($ele);
                  break; 
        case 8:echo"\nDisplay the two arrays which are:";
               print_r($a1);
               print_r($a2);
              echo"\nDisplay the union are:";
              $ele=array_unique(array_merge($a1,$a2));
              print_r($ele);
                 break;
        case 9:echo"\nDifference between two array is:";
                 print_r($a1);
                 print_r($a2);
                $ele=array_diff($a1,$a2);
                print_r($ele);
                 break;               
	}
	}while($ch!=10);
?>
