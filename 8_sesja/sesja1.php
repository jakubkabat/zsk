<?php 
    session_start();
    $_SESSION['name'] = "Anna";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesja 1</title>
</head>
<body>
    Strona startowa<hr>
    Witamy 
    <?php
        echo $_SESSION['name'];
    ?>
    na stronie!<br>
    <?php
        echo "Identyfikator sesji: ",session_id();
    ?><br>
    <a href="./sesja2.php">Strona 2</a>
</body>
</html>