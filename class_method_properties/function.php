<?php 
 class Calculation
 {
     public function add($a, $b)
     {
        echo "Summation = ".($a+$b)."<br>";
     }

     public function sub($a,$b)
     {
        echo "Subtraction = ".($a-$b)."<br>";
     }
     public function mul($a,$b)
     {
        echo "multification = ".($a*$b)."<br>";
     }
     public function div($a,$b)
     {
        echo "division = ".($a/$b)."<br>";
     }
 }
?>