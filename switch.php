<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../teste/_css/estilo.css">
    <title>Região</title>

       
</head>
<body>
    <div>
<?php
    $estado = $_GET['op'];
    
    switch ($estado) {
        case 1:
            echo 'Você mora na Região NORTE';
            break;
        case 2:
            echo 'Você mora na Região NORDESTE';
            break;
        case 3:
            echo 'Você mora na Região CENTRO-OESTE';
            break;
        case 4:
            echo 'Você mora na Região SUDESTE';
            break;
        case 5:
            echo 'Você mora na região SUL';
            break;
    }

?>
</div>
</body>
</html>
