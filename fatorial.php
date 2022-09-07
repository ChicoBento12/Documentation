<?php
    $n = 6;
   
    $result = 1;
    do {
        $result *= $n;
        $n--;
    } while ($n > 0);

    echo "O fatorial de é $result";
?>