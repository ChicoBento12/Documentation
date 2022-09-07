<?php
    // $n1 = $_POST['inp'];
    // echo sqrt($n1);

    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
    $sexo = $_GET['sexo'];

    echo "$nome é um $sexo <br>Eh tem " . (date("Y") - $idade);
?>