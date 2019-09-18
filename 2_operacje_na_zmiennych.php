<?php
   //operatory
   $potega = 2 ** 10;
   echo $potega, "<br>";
   
   //operatory bitowe: and &&, or |, not ~, xor ^, >>, <<

   $x = 0b1010;
   $x = $x >> 1;//101(2);
   $x = $x << 2;//10100(2);
   echo $x, "<br>";

   #####################################

   $x = 1;
   $y = 1;
   $wynik = $x <=> $y;//x=y -0, x<y - -1, x>y - 1
   echo $wynik, "<br>";
    #################################

    $x = 1;
    $y = 1.0;

    if($x === $y){
        echo "Identyczne <br>";
    }
    else
        echo "Różne <br>";

    ##############################

    echo gettype($x), "<br>";
    echo gettype($y), "<br>";

    ##############################

    $x = 2;
    echo $x++, "<br>";//2
    echo ++$x, "<br>";//4
    echo $x, "<br>";//4
    $y = $x++;
    echo $y, "<br>";//4
    $y = ++$x;
    echo $y, "<br>";//6
    echo ++$y, "<br>";//7

    //operatory rzutowania
    //bool, int, float, string, array, object, unset
?>