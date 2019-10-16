<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <?php 
        if(!empty($_POST['name'])){
            $name = $_POST['name'];
            if(!empty($_POST['country']) && isset($_POST['button'])){
                $country = $_POST['country'];
                echo "Imię: $name, kraj: $country";
            }
            else{
                ?>
                <form method="post">
                    <input type="text" name="country" placeholder="Podaj kraj"><br>
                    <input type="submit" name="button" value="Zatwierdź">
                    <input type="hidden" name="name" value="<?php echo $name; ?>">
                </form>
                <?php
            }
        }
    ?>
</body>
</html>