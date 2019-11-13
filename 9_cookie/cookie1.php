<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php 
    // setcookie("name", "Anna");
    // setcookie("age", 20, time()+ 60*60*24);
    // echo $_COOKIE['age'];

    /*
    utwórz licznik na stronie, wykorzystak pliki cookie
    */ 
    // setcookie('wejscia', 0);
    // setcookie('wejscia', $_COOKIE['wejscia']+1);
    // echo $_COOKIE['wejscia'];

    /*
    użytkownik podaje swoje imie i nazwisko w formularzu utwórz zmienną sesyjną w której będzie przechowywane imię oraz cookie dla nazwiska a 2 dni
    wyświetl dane poid formularzem pobierając je ze zmiennej sesyjnej i ciasteczka
    imie: ....
    nazwisko: .....
    */
?>
<form method="post">
    <input type="text" name="imie">Podaj imie<br>
    <input type="text" name="nazwisko">Podaj nazwisko<br>
    <input type="submit" value="Prześlij">
</form>
<?php
    if(isset($_POST['imie']) && isset($_POST['nazwisko'])){
        $_SESSION['name'] = $_POST['imie'];
        setcookie('lastname', $_POST['nazwisko'], time()+60*60*24*2);
        echo "Imię: ", $_SESSION['name'],"<br>";
        echo "Nazwisko: ", $_COOKIE['lastname'];
    }
?>
</body>
</html>