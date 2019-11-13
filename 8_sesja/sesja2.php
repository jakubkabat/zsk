<?php 
    session_start();
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
    Strona 2<hr>
    Witamy 
    <?php
        echo $_SESSION['name'];
    ?>
    na stronie!<br>
    <?php
        echo "Identyfikator sesji: ",session_id();
    ?><br>
    <a href="./sesja3.php">Strona 3</a>
</body>
</html>