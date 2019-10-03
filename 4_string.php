<?php
    $text = <<< T
    zsk - Zespół
    szkół
    komunikacji
    T;
    echo "przed wywołaniem funkcji nl2br: <br> $text <br>";
    echo "Po wywołaniu funkcji nl2br: <br>";
    echo nl2br($text), "<br>";

    $text = "Janusz";
    //zamiana na małe litery
    echo strtolower($text),"<br>";
    //zamiana na duże litery
    echo strtoupper($text), "<br>";
    $text = 'anna Janusz krystian';
    //zamiana pierwszej litery na dużą
    echo ucfirst($text),'<br>';
    //zamiana każdej pierwszej litery na dużą
    echo ucwords($text),'<br>';
    #######################################
    $lorem ="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae laoreet leo, at convallis quam. Maecenas nec lacus id nisi gravida fermentum. Maecenas dictum odio arcu, eu porta enim ultrices pretium. Maecenas volutpat eros placerat, congue risus sed, ullamcorper lorem. Duis maximus est et quam finibus facilisis. Sed at turpis eleifend, pretium lacus rhoncus, pulvinar est. In pretium ex vel aliquet luctus. Etiam nec mattis ligula, ut ultrices neque. Sed vestibulum, ex in efficitur maximus, augue ex vehicula enim, et egestas neque lacus vitae dolor. Phasellus interdum venenatis convallis. ";
    echo $lorem, '<br>';
    $col = wordwrap($lorem, 40, '<hr>');
    echo $col;
    //czyszczenie zawartości bufora
    ob_clean();
    #######################################
    //usuwanie białych znaków
    $name = "Tomasz";
    $name1 = " Tomasz ";
    echo 'Długość zmiennej $name: ',strlen($name),'<br>';
    echo 'Długość zmiennej $name1: ',strlen($name1),'<br>';
    echo strlen(ltrim($name1)),'<br>';//7
    echo strlen(rtrim($name1)),'<br>';//7
    echo strlen(trim($name1)),'<br>';//6
    //przeszukiwanie ciągów znaków
    $address = 'Poznań, ul. Fredry 13, tel. (61) 445-44-58';
    $search = strstr($address, 'tel');
    echo $search, '<br>';

    $address = 'Poznań, ul. Fredry 13, tel. (61) 445-44-58';
    $search = strstr($address, 'tel', true);
    echo $search, '<br>';

    $address = 'Poznań, ul. Fredry 13, tel. (61) 445-44-58';
    $search = stristr($address, 'Tel');
    echo $search, '<br>';

    $mail = strstr('zsk@gmail.com', '@');
    echo $mail, '<br>';

    
    $mail = strstr('zsk@gmail.com', 64);
    echo $mail, '<br>';
    #########################################

    $ciag1 = 'a';
    $ciag2 = 'b';
    echo strcmp($ciag1, $ciag2),'<br>';
    echo strcmp('a','a'),'<br>';
    echo strcmp('b','a'),'<br>';
    echo strcmp('bba','bb'),'<br>';

    //pozycja

    $pos = strpos('abcd', 'bc');
    echo $pos,'<br>';
    echo strpos('abcabc','ab'),'<br>';
    

    //sprawdź czy w ciągu o nazwie text1 znajduje się ciąg text2

    $text1 = 'abcdabcd';
    $text2 = 'abc';
    if(strpos($text1, $text2,true)){
        echo "Ciąg został znaleziony",'<br>';
    }
    else{
        echo "Ciąg nie został znaleziony",'<br>';
    }

    //przetwarzanie ciągów znaków 

    $replace = str_replace('%name%', 'Krystyna', 'Mam na imię %name%');
    echo $replace,'<br>';

    //substring
    $surname = substr("Janusz Kowalski", 3);
    echo $surname, '<br>';
    $surname = substr("Janusz Kowalski", -3);
    echo $surname, '<br>';
    $surname = substr("Janusz Kowalski", 7,5);
    echo $surname, '<br>';
    ##################################

    //zamiana polskich znaków 
    $login = "żakol";
    $censore = array('ą', 'ę', 'ś', 'ż', 'ź', 'ć', 'ó', 'ń', 'ł');
    $replace = array('a', 'e', 's', 'z', 'z', 'c', 'o', 'n', 'l');

    $newLogin = str_replace($censore, $replace, $login);
    echo ucfirst($newLogin),'<br>';

    /* Napisz aplikację cenzurującą zdanie podane przez użytkownika.
    Użytkownik podaje dane w formularzu.
    Zamień słowa: biały, czarny na ciąg znaków ' #### '
    */
    
?>