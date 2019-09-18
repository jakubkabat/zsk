<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php
        $connection = new mysqli('localhost', 'root', '', 'zsk');//nazwa serwera, nazwa uzytkownika, haslo, nazwa bazy danych
        if($connection -> connect_error) //sprawdzenie czy połączenie nastąpiło
        {
            echo ('<p>Błąd połączenia z bazą danych</p>');
        }
        else
        {
            echo ('<p>Nastąpiło połączenie z bazą danych</p>');
            $wynik = mysqli_query($connection, "SELECT Numer, Imie, Nazwisko FROM klasa"); //pobranie całej zawartości tabeli "Klasa"
            while($row = mysqli_fetch_array($wynik)) //ma wypisywać dopóki będą wiersze w tabeli
            {
                echo $row['Numer']." ".$row['Imie']." ".$row['Nazwisko']." ".$row['Tak/Nie']; //Wypisuje kolejne pola 
                echo "<br>";
            }
            mysqli_close($connection); //zamknięcie połączenia
        }
    ?>
</body>

</html>