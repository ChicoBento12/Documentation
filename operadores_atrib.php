<?php
    $n = $_GET['p'];
    $c = $_GET['c'];

    echo "Número 1 = $n </br>Número 2 = $c";

    echo "</br>". $n += $c; // n = 2 + 2 -> 4
    echo "</br>". $n -= $c; // n = 4 - 2 -> 2
    echo "</br>". $n *= $c; // n = 2 * 2 -> 4
    echo "</br>". $n /= $c; // n = 4 / 2 -> 2
    echo "</br>". $n %= $c; // n = 2 % 2 -> 0

    $name = 'charlon ';
    $secon_name = 'fernandes';
    $name .= $secon_name;
    echo "</br></br>" . $name;
    
    #parte 2 - CHATAA - pos e pre incremento -> ++ ou pre 

    $c1 = 3; $c2 = &$c1; 
    $c2 = 8;
    echo "</br></br> c1 vale $c1 e c2 vale $c2"
?>