<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/5_form.css">
</head>
<body>
<?php

echo <<< F
<form method="post">
    <input type="text" name="name" placeholder="Imię"><br><br>
    <input type="text" name="surname" placeholder="Nazwisko"><br><br>
    <input type="number" name="age" placeholder="Wiek"><br><br>
    <input type="submit" name="button" value="Zatwierdź">
</form>
F;
$name = $_POST['name'];
$surname = $_POST['surname'];
$age = $_POST['age'];
if(!empty($name) && !empty($surname) && !empty($age) && $age<130){
 $nameNew = ucfirst(strtolower(substr(trim($name), 0, 10)));
 $surnameNew = ucfirst(strtolower(substr(trim($surname), 0, 10)));
 $ageNew = trim($age);
 echo "\$name przed czyszczeniem kodu: $name<br>";
 echo "\$surname przed czyszczeniem kodu: $surname<br>";
 echo "\$age przed czyszczeniem kodu: $age<br><hr>";

 echo "\$name po czyszczeniu kodu: $nameNew<br>";
 echo "\$surname po czyszczeniu kodu: $surnameNew<br>";
 echo "\$age po czyszczeniu kodu: $ageNew<br><hr>";
}
else{
    ob_clean();
    echo <<< F
<form method="post">
    <input type="text" name="name" placeholder="Imię"><br><br>
    <input type="text" name="surname" placeholder="Nazwisko"><br><br>
    <input type="number" name="age" placeholder="Wiek"><br><br>
    <input type="submit" name="button" value="Zatwierdź">
</form>
F;
}
?>
<table>
<tr>
<th>Imię</th>
<th>Nazwisko</th>
<th>Wiek</th>
</tr>
<tr>
<td><?php echo $nameNew ?></td>
<td><?php echo $surnameNew ?></td>
<td><?php echo $ageNew ?></td>
</tr>
</table>

</body>
</html>
