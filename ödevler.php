<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
     $rastgleSayi = rand(0, 100);

     echo "Rastgele üretilen sayı =" . $rastgleSayi;
     echo "<br>";
     if ($rastgleSayi % 2 == 0) {
         echo "Sayi Çifttir";
     } else {
         echo "Sayi Tektir";}

    echo "</br></br></br>";

    $not = rand(0,100);
    if ($not >= 50) {
        echo "Geçtiniz-Notunuz:$not";
    } else {
        echo "Kaldınız-Notunuz:$not";
    }

    echo "</br></br></br>";


    $yas  = rand(0, 100);

        echo "Ehliyet almak isteyenin Yaşı = " . $yas;
        echo "<br>";

        if ($yas <= 18) {
            echo "Ehliyet Alamaz";
        } else {
            echo "Ehliyet Alabilir";
        }
        echo "<hr>";

    


    ?>
    
</body>
</html>