<!-- 
Użytkownik wprowadza z klawiatury swoje imię w textarea po podaniu danych zostanie przekierowany do pliku 5_2_1_form.php
Na stronie będzie wyświetlone jego imię, wyświetli się nowy formularz z krajem, który po wpisaniu danych i zatwierdzeniu wyświetli
na stronie tylko imię i kraj
-->
<form action="5_2_1_form.php" method="post">
    <textarea name="name" cols="30" rows="8" placeholder="Wprowadź swoje dane..."></textarea><br><br>
    <input type="submit" name="button" value="Zatwierdź">
</form>