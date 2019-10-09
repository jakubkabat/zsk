<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <?php
        ob_clean();
        $form = <<< T
        <form method="post">
            <input type="text" name="data">Podaj tekst do cenzury<br>
            <input type="submit" name="check">
        </form>
        T;
        echo $form,'<br>';
        if(isset($_POST['data'])){
            $text = $_POST["data"];
            $censore = array('biały','czarny');
            $replace = ' ###### ';
            $newData = str_replace($censore, $replace, $text);
            echo "Niesprawdzone dane: $text<br>";
            echo "Sprawdzone dane: $newData<br>"
            
            
            ;
        }
    ?>
</body>
</html>





















