<?php 
    session_start();
    unset($_SESSION['name']);
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesja 2</title>
</head>
<body>
    Strona 3<hr>
    Witamy 
    <?php
        echo $_SESSION['name'];
    ?>
    na stronie!<br>
    <?php
        echo "Identyfikator sesji: ",session_id();
    ?><br>
    <a href="./sesja1.php">Strona startowa</a>
</body>
</html>