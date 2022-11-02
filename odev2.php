<?php

use Sinif as GlobalSinif;

    class Sinif{
        
        public function __construct(){
            $welcome="Hoşgeldiniz Construct Metodu Çalıştı";
            echo $welcome;
            echo "<br>";
        }

        public function __destruct()
        {
            echo "Destruct Metot Çalıştı";
            echo "<br>";
        }

        public function Grade($vize,$final){
            
            $not=$vize*0.3 + $final*0.7;
            if ($not>=50) {
                echo "Geçtiniz,notunuz: " . $not;  
                echo "<br>";  
            }
            else{
                echo "Kaldınız";
                echo "<br>";
            }
        }

        public function factoriel($sayı){
            $total=1;
           for ($i=1; $i <= $sayı; $i++) { 
            $total=$i*$total;
           }
           echo "$sayı'ın faktöryeli ".$total;
           echo "<br>";
        }
    }

    $myClass = new Sinif();
    $myClass->Grade(50,80);
    $myClass->factoriel(5);
?>