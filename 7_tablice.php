<?php
    //tablice indeksowane numerycznie
    $colors = array('Red', 'Green', 'Blue');
    $colors[3] = 'Magenta';

    for($i=0;$i<count($colors);$i++){
        $elem = $i + 1;
        echo "Element $elem: $colors[$i] <br>";
    }
    echo "<hr>";
    function showArray($table){
        foreach($table as $element){
            echo $element, '<br>';
        }
    }
    echo showArray($colors),"<hr>";

    //foreach
    foreach ($colors as $key => $value) {
        $elem = $key + 1;
        echo "Element $elem: $value<br>";
    }
    echo "<hr>";

    //tablice asocjacyjne

    $data = array(
        'imie'=> 'Janusz',
        'nazwisko'=> 'Nowak',
        'wiek'=> '30'
    );
    function showArrayAssoc($tab){
        foreach ($tab as $key => $value) {
            echo "$key: $value<br>";
        }
    }
    showArrayAssoc($data);
    echo "<hr>";
    echo "nazwisko: $data[nazwisko]<br>";
    echo "nazwisko: $data[nazwisko]<br>";
    echo '<hr>';

    //tablice wielowymiarowe

    $student = array(
    array('Katarzyna', 'Nowak', 30),
    array('Anna'),
    array('Anna', 'Nowak', 20),
    array('Anna', 'Nowak')
);
echo count($student),"<hr>";

function showArrayNew($tab){
    for($i = 0;$i<count($tab);$i++){
        for($j = 0;$j<count($tab[$i]);$j++){
            echo $tab[$i][$j]," ";
    }
    echo "<br>";
}
}
showArrayNew($student);
echo "<hr>";
function showArrayForeach($tab){
    foreach ($tab as $key => $value) {
        foreach ($value as $value1) {
            echo $value1," ";
        }
        echo "<br>";
    }
}
showArrayForeach($student);
echo "<hr>";

//utwórz tablice trójwymiarową i napisz dla niej funkcję wyświetlającą zawartośc (foreach)
$newData = array('szkoła',
    array('klasa',
        array('Maciej','Nowak', 19),
        array('Karol', 'Marciniak', 20)
),
    array('Marian', 'Dworczak', 22),
    array('Szymon', 'Frankowski', 29)
);
function tripleArray($tab){
    foreach ($tab as $key => $value) {
        echo "<div style='margin-left: 20px;'>";
        if(is_array($value)) tripleArray($value);
        else echo "<p>$value</p>";
        echo "</div>";
    }
}
tripleArray($newData);
echo "<hr>";

//sortowanie
$tablica_sortowanie = [10,2,5,75,-4,100];
function wyswietl($tab){
    foreach ($tab as $key => $value) {
        echo $value," ";
    }
    echo "<br>";
}
wyswietl($tablica_sortowanie);
echo "<br>";
sort($tablica_sortowanie);
wyswietl($tablica_sortowanie);
echo "<br>";
rsort($tablica_sortowanie);
wyswietl($tablica_sortowanie);
echo "<br>";

//sortowanie tablic asocjacyjnych 
$tabAssoc = [
    'imie' => 'Kuba',
    'nazwisko' => 'Kabat',
    'wiek' => '19'
];
function showAssoc($tab){
    foreach ($tab as $key => $value) {
        echo $value," ";
    }
    echo "<br>";
}
showAssoc($tabAssoc);
echo "<br>";
asort($tabAssoc);
showAssoc($tabAssoc);
echo "<hr>";

function zmianaLiterMale($tab){
    foreach ($tab as $key => $value) {
        $str = strtolower($value);
        echo $str," ";
    }
    echo "<br>";
}
zmianaLiterMale($tabAssoc);
?>