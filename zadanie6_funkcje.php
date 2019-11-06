<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="number" name="ages">Podaj liczbę członków rodziny<br>
        <input type="submit" value="Prześlij">
    </form>
    <?php
        $fam = $_POST["ages"];
        function age($fam){
            echo "<form method='get'>";
            for($i=1;$i<=$fam;$i++){
                echo "<input type='number' name='person$i' min='0' max='120'>";
            }
            echo "<input type='submit' value='policz'></form>";
            for($i=1;$i<=$fam;$i++){
                $family[$i] = array($_GET["person$i"]);
            }
            foreach($family as $newfamily){
                echo $newfamily,"<br>";
            }
        }
        if($fam>0 && $fam<71){
        age($fam);
        }
    ?>
</body>
</html>