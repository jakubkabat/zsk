<?php
if(!empty($_GET['name']) && !empty($_GET['country'])){
    $name = $_GET['name'];
    $country = $_GET['country'];
    switch ($country) {
        case 'pl':
            $country = "Polska";
            break;
        case 'en':
            $country = "Anglia";
            break;
        case 'uk':
            $country = "Ukraina";
            break;
    }
    echo $name, $country;
}
else{
    header('location: ./5_1_form.php');
}