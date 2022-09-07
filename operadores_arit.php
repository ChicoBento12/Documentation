<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operadores Ari</title>
</head>
<body>
    <div>
        <?php
        $n1 = $_GET['a'];
        $n2 = $_GET['b'];

        echo "$n1 + $n2 = ".($n1+$n2);
        echo "</br>$n1 - $n2 = ".($n1-$n2);
        echo "</br>$n1 * $n2 = ".($n1*$n2);
        echo "</br>$n1 / $n2 = ".($n1/$n2);
        echo "</br>$n1 % $n2 = ".($n1%$n2);
        ?>
    </div>
</body>
</html>