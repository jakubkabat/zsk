<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php 
        //echo phpinfo();
        $name = 'Janusz';
        $name1 = 'Janusz';
        $imię = 'Janusz';

        echo "$name "." nazwisko:"." Nowak";
        echo ' $name '," nazwisko: "," Nowak ";
        //typ integer
        $int = 10;
        $hex = 0xA;//10
        $oct = 021;//17
        $bin = 0b1010;//10
        echo '<hr>',$oct, '<hr>', $bin, '<hr>', $hex, '<hr>';


        //skladnia heredoc

        $name = "Kasia";
        $surname = "Kowalska";
        $city = "Poznań";
        echo <<< ETYKIETA
        <hr>Heredoc<hr>
        Imię: $name<br>
        Nazwisko: $surname<br>
        Miasto: $city<br>
        ETYKIETA;

        //skladnia nowdoc
        echo <<< 'E'
        <hr>Nowdoc<hr>
        Imię: $name<br>
        Nazwisko: $surname<br>
        Miasto: $city<br>
        E;

        echo "Zmienna w nazwie: \$city ma wartość: $city <br>";
        echo 'Zmienna w nazwie: $city ma wartość: ' ,$city;
    ?>
</body>
</html>