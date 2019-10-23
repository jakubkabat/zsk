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
    $sum = 0;
    $j = 1;
    if(!empty($size)){
        do{
            echo "<tr>";
            $i = 1;
            do{
                if($j!=$i && $i!=$size) echo "<td>",$j*$i,"</td>";
                   
                else if($i == $j){
                    echo "<td class='red'>",$j*$i,"</td>";
                }
                else{
                    
                    echo "<td class='red'>",$j*$i,"</td>";
                    $sum += ($i * $j);
                }
                
                $i++;
            }
            while($i<=$size);
            echo "</tr>";
            $j++;
        }
        while($j<=$size);
    }
  ?>
  </table>
  <?php echo "<p>Suma wyrazów na przekątnej wynosi: $sum </p>"; ?>
</body>
</html>