<?php 
$valor = 1 ;

if ($valor == 1) {
    echo"O valor é igual 1";
} else {
   echo"O valor não é igual a 1";
}

$valor =11;

do{
    echo"<br> o valor é: $valor";
    //$valor <= 10;
} while ($valor <= 10);

while($valor <= 10){
    echo"<br> o valor é:$valor";
    $valor++;
}