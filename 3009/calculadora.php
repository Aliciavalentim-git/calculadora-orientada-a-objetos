<?php

class Calculadora{

public $numero1;
public $numero2;
public $resultado;
public $operacao;

public function somar(){
    $this->resultado = $this->numero1 + $this->numero2;
    echo $this->exibir();
}
public function subtrair(){
    $this->resultado = $this->numero1 - $this->numero2;
    echo $this->exibir();
}
public function multiplicar(){
    $this->resultado = $this->numero1 * $this->numero2;
    echo $this->exibir();
}

public function dividir()
{
    if ($this->numero2 == 0) {
        echo "Nao foi possivel realizar a divisao por zero.";
    } else {
        $this->resultado = $this->numero1 / $this->numero2;
        echo $this->exibir();
    }
}

public function exibir(){
    echo $this->resultado;
}

public function chapeuSelector(){
    switch($this->operacao) {
    case '+':
        $this->somar();
        break;
         case '-':
        $this->subtrair();
        break;
         case '*':
        $this->multiplicar();
        break;
         case '/':
        $this->dividir();
        break;

        default:
        echo "operacao invalida";
        break;
}
}
} 

