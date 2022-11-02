<?php
class Calculator {
   private $sayı1,$sayı2,$sayı3;
   public function __construct($number1,$number2,$number3)
   {
    $sayı1=$number1;
    $sayı2=$number2;
    $sayı3=$number3;
   }

   
   public function TakeSquare($inputnum){
    return $inputnum*$inputnum;
   }

    public function Total($inputnum){
    for ($i=0; $i < $inputnum; $i++) { 
        echo $i*$i;
        echo "<br>";
    }
    }
}

$myclass = new Calculator(1,2,3);
$myclass->Total(10);
?>