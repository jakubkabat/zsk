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

    $text1 = '123ssd';
    $x1 = (int)$text1;
    echo $x1,'<br>';

    
    $text2 = -1; //1- true nic- false
    $x2 = (bool)$text2;
    echo $x2,'<br>';
    
    $text3 = 10; //1- true nic- false
    $x3 = (unset)$text3;
    echo gettype($x3),'<br>';

    //rozmiar typu integer

    echo PHP_INT_SIZE,'<br>';
    //kontrola typu zmiennych
    $x=10;
    echo is_int($x); //1- true
    echo is_string($x);//false
    echo is_bool($x);//false
    echo is_float($x);//false
    echo is_null($x);//false

    //operatory ignorowania błędów
    $w;
    echo @$w, '<br>';
    echo @gettype($w),'<br>';
    echo @is_null($w),'<br>';
    //zmienne superglobalne

    //$_GET, $_POST, $_COOKIE, $_FILES, $_SESSION, $_SERVER
    echo $_SERVER['SERVER_PORT'],'<br>';//80
    echo $_SERVER['SERVER_NAME'],'<br>';//127.0.0.1
    echo $_SERVER['SCRIPT_NAME'],'<br>';///zsk/2_operacje_na_zmiennych.php
    echo $_SERVER['DOCUMENT_ROOT'],'<br>';//E:/xampp/htdocs

    $lokalPliku = $_SERVER['DOCUMENT_ROOT'];
    $lokalPliku .=$_SERVER['SCRIPT_NAME'];
    echo $lokalPliku, '<br>';

    //stałe
    //nazwy z dużych liter!!!
    define('NAZWISKO','Kowal');
    echo NAZWISKO, '<br>';
    define('nazwisko','Nowak');
    echo nazwisko, '<br>';
    define('imie', 'Janusz', true);//od wersji 8 PHP brak trzeciego argumentu
    echo imIe, '<br>';
    echo PHP_VERSION,'<br>';//7.3.8
    echo gettype(PHP_VERSION), '<br>';//string
    if(PHP_VERSION > 5.6){
        echo "Nowa wersja PHP<br>";
    }
    else{
        echo "Stara wersja PHP<br>";
    }

    echo PHP_OS, '<br>';//WINNT
    echo __LINE__,'<br>';//109
    echo __FILE__,'<br>';//E:\xampp\htdocs\zsk\2_operacje_na_zmiennych.php
    echo __DIR__,'<br>';//E:\xampp\htdocs\zsk
?>