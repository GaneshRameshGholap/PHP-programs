<?php
    define('PI',3.14);
    echo"\n accept details of square:";
    $si=fgets(STDIN);
    echo"\naccept radius of circle:";
    $rad=fgets(STDIN);
   echo"\naccept length and breadth of rectangle:";
    $l=fgets(STDIN);
    $b=fgets(STDIN);
     interface  shape
      {
      function area();
      }
      class rectangle
      {
          var $len;
          var $bre;
        function rectangle($l,$b)
        {
        $this->len=$l;
        $this->bre=$b;
        }
      }
     class square extends rectangle  implements shape
        {
          var $s;
      	   	function square($l,$b,$side)
        	 {
        	     $this->Rectangle($l,$b);
       		     $this->s=$side;
                 }
  	      function area()
              {
                 $a=$this->len*$this->bre;
                 echo"\nDisplay area of rectabgle=$a";
                 $sq=$this->s*$this->s;
                  echo"\nDisplay area of square=$sq";    
              }
        }
        class circle implements shape
        {
         var $r;
       		 function circle($rad)
 	         {
       			 $this->r=$rad;
        	 }
        	function area()
                 {	
          		 $a=PI*$this->r*$this->r;
                       echo"\narea of circle=$a";
                 }
	}
$ob=new square($l,$b,$si);
$ob->area();    
$ob1=new circle($rad);
$ob1->area();    
?>
