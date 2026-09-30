<?php

function somar($n1, $n2) {
    return $n1 + $n2;
}

function subtrair($n1, $n2) {
    return $n1 - $n2;
}

function multiplicar($n1, $n2) {
    return $n1 * $n2;
}

function dividir($n1, $n2) {
    return $n1 / $n2;
}

$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];
$operação = $_POST["operação"];

if ($operação == "soma")
    {
        $resultado= somar ($numero1, $numero2);
    }

elseif ($operação == "subtração")
    {
        $resultado= subtrair($numero1, $numero2);
    }

elseif ($operação == "multiplicação")
    {
        $resultado= multiplicar($numero1, $numero2);
    }
    

if ($numero2 == 0)
    $resultado = "indefinido";
else {
    $resultado = dividir($numero1, $numero2);
}
    
    
echo "O resultado da sua conta é: " .$resultado;

?>