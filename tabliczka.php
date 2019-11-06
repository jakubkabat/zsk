<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, tr, td, th {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }

        td, td {
            width: 50px;
            height: 50px;
        }

        .red {
            background-color: red;
        }

        .blue {
            background-color: blue;
        }
    </style>
</head>
<body>
    <form method="post">
      <input type="number" name="liczba1" autofocus placeholder="ile liczb?">
    </form>
    <table>
    <?php
    if (!empty($_POST['liczba1'])) {
        $num = $_POST['liczba1'];
        $i = 1;
        $j = 1;
        $k = 0;
        $l1 = 0;
        $l2 = 0;
        echo "<tr>";
        do{
            if ($k === 0) {
              echo "<td></td>";
            } else {
                echo "<th>" . $k . "</th>";
            }
          $k++;
        } while ($k <= $num);
        echo "</tr>";
        do { 
            echo "<th>" . $i . "</th>";
            do {
                if ($i === $j) {
                    echo "<td class=\"red\">"; 
                    echo $i * $j;
                    $l1 += $i * $j;
                    echo "</td>";
                } else if ($i + $j == $num + 1) {
                    echo "<td class=\"blue\">"; 
                    echo $i * $j;
                    $l2 += $i * $j;
                    echo "</td>";
                } else {
                    echo "<td>"; 
                    echo $i * $j;
                    echo "</td>";
                }
                $j++;
            } while ($j <= $num);
            echo "<tr>";
            echo "</tr>";
            $j = 1; 
            $i++;
        } while ($i <= $num);
        $suma = $l1 + $l2;
        echo "Suma czerwonej przekątnej to: " . $l1 . "<br>";
        echo "Suma niebiekiej przekątnej to: " . $l2 . "<br>";
        echo "Suma obu przekątnych to: " . $suma. "<br>";
    }
    ?>
    </table>
</body>
</html>