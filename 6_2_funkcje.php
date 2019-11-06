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
    echo "<br>";
    #######################################33
    //argumenty
    function add($x, $y = 1){
        return $x + $y;
    }
    $z = 20;
    echo add(2, 6),"<br>";//8
    echo add(2), "<br>";//3
    echo add($z, 6), "<br>";//26
    echo add($z), "<br>";//21

    ##################################3
    //argumenty i funkcje
    function multi(float $x, int $y){
        return $x*$y;
    }
    echo multi(2,4),"<br>";//8
    echo multi(2.5,4), "<br>";//10
    echo multi(4, 2.5),"<br>";//8
?>