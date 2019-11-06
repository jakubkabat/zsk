<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        td{
            border: 1px #000 solid;
            text-align:center;
            width: 30px;
        }
        .red{
            background-color: red;
        }
    </style>
</head>
<body>
<form name="table" method="post">
    <input type="number" name="size">Podaj ilość kolumn i wierszy tabliczki mnożenia<br>
    <input type="submit" value="Generuj">
</form>
<table>
  <?php 
    $size = $_POST["size"];
    $sum1 = 0;
    $num = 0;
    $j = 1;
    $i = 1;
    $sum2 = 0;
    if(!empty($size)){
        echo "<tr>";
        do{
            if ($num === 0) {
              echo "<td></td>";
            } else {
                echo "<th>", $num, "</th>";
            }
          $num++;
        } while ($num <= $size);
        echo "</tr>";
        do { 
            echo "<th>", $i, "</th>";
            do {
                if ($i === $j) {
                    echo "<td class='red'>",$i * $j;
                    $sum1 += $i * $j;
                    echo "</td>";
                } else if ($i + $j == $size + 1) {
                    echo "<td class='red'>",$i * $j;
                    $sum2 += $i * $j;
                    echo "</td>";
                } else {
                    echo "<td>"; 
                    echo $i * $j;
                    echo "</td>";
                }
                $j++;
            } while ($j <= $size);
            echo "<tr>";
            echo "</tr>";
            $j = 1; 
            $i++;
        } while ($i <= $size);
        $suma = $sum1 + $sum2;
    }
    ?>
  </table>
  <?php echo "<p>Suma pierwszej przekątnej wynosi: ", $sum1, "</p>";
        echo "<p>Suma drugiej przekątnej wynosi: ", $sum2, "</p>";
        echo "<p>Suma obu przekątnych wynosi: ", $suma, "</p>";
  ?>
</body>
</html>