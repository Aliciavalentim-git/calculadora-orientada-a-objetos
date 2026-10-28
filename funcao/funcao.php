<?php

function msg (){
    echo "Boa noite<br>";
}

for ($i = 0; $i<10; $i++){
    msg();
}

msg();

function msg2($nome, $sobrenome){ 
    echo "Boa noite " . $nome . " " . $sobrenome . "<br>"; 
}


msg2("Neymar", "Junior");

function valordepi(){
    $pi = 3.14;
    return $pi;
}

echo "o valor de pi é:" .valordepi();

function calcularValorProdutoComDesconto($valorProduto, $valorDesconto){
    $valorFinal = $valorProduto - $valorDesconto;
    return $valorFinal;
}

function pagtoPix($valorProduto, $taxaDesconto){
    $valorPix = $valorProduto - ($valorProduto * $taxaDesconto);
    echo "Valor Final:" .$valorPix;
}

pagtoPix(calcularValorProdutoComDesconto(2000,10), 0.10);