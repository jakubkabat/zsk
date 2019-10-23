<?php
    function value($a):string{
        if($a < 0){
            return "Ujemna";
        }
        elseif($a > 0){
            return "Dodatnia";
        }
        else{
            return "Zero";
        }
        $x = value(-5);
        echo $x;
        echo gettype($x);
    }

    function getValue():int{
        return 10.50;
    }
    echo getValue(),"<br>";

    //zasięg zmiennych
    $x = 10;
    function show(){
        echo "Wartość zmiennej \$x wynosi: <br>";
        $GLOBALS['x']=20;
        echo $GLOBALS['x'], "<br>";
    }
    show();
    echo $x,"<br>";


    function show1(){
        global $x;
        echo "Wartość zmiennej \$x wynosi: <br>";
        echo $x;
    }
    show1();

    #############################################
    function suma(){
        $liczba = 10;
        echo "<br>\$liczba = $liczba<br>";
        $liczba +=10;
    }
    function suma1(){
        $liczba = 10;
        echo "<br>\$liczba = $liczba<br>";
        $liczba +=10;
    }
    suma();
    suma();
    suma1();
?>