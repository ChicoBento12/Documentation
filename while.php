<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../teste/_css/estilo.css">
    <title>Contador</title>
</head>
<body>
    <div>
        <?php
            $inc = $_GET['inc'];
            $fim = $_GET['and'];  
            $sec = $_GET['sec'];

            if ($inc<$fim) {
                #laço de impressão 1
                while ($inc <= $fim) {
                    echo " $inc ";
                    $inc += $sec;
                }

            } else if ($inc>$fim) {
                #lço de impressão 2
                while ($inc >= $fim) {
                   echo " $inc ";
                   $inc -= $sec;
                }
                
            } else {
                echo "valores iguais";
            }
            
        
        ?>
    </div>
</body>
</html>