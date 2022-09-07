<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../teste/_css/estilo.css">
    <title>Meida</title>

    <style>
        span{
            color: red;
            font-weight: bold;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div>
<?php
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $m = ($n1 +$n2)/2;
    echo 'Sua notas foram <span id="red">'.$n1.'</span> e <span id="red"> '.$n2.'</span> - média final de <span id="red">'.$m.'</span></br>';
    
    if ($m>7) {
        echo 'A situação do aluno é APROVADO';
    } else if ($m>5) {
        echo 'A situação do aluno é RECUPERAÇÃO';
    } else {
        echo 'A situação do aluno é REPROVADO';
    }

?>
</div>
</body>
</html>
