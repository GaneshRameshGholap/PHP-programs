<?php
     $r=$_GET['txtr'];
     $h=$_GET['txth'];
     define('PI',3.142);
   interface Calculate
	{
        function cal_area();
        function cal_volume();
	}
     class Cylinder implements Calculate
	{
         var $rad,$he;
       function Cylinder($rr,$hh)
        {
         $this->rad=$rr;
         $this->he=$hh;
        }
        function cal_area()
	{
         $area=2*PI*$this->rad*$this->he+2*PI*$this->rad*$this->rad;
          echo "\n area of cylinder=$area";
	}
        function cal_volume()
	{
          $vol=PI*$this->rad*$this->rad*$this->he;
         echo "\nvolume of cylinder=$vol";
	}
	}
       $e1=new Cylinder($r,$h);
        $e1->cal_area();
         $e1->cal_volume();
?>
