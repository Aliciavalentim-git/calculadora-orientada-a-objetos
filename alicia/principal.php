<?php

class Calculadora {
    public $numero1;
    public $numero2;

    public function __construct($num1, $num2) {
        $this->numero1 = $num1;
        $this->numero2 = $num2;
    }

    public function somar() {
        return $this->numero1 + $this->numero2;
    }

    public function subtrair() {
        return $this->numero1 - $this->numero2;
    }

    public function multiplicar() {
        return $this->numero1 * $this->numero2;
    }

    public function dividir() {
        if ($this->numero2 == 0) {
            return "operação invalida";
        }
        return $this->numero1 / $this->numero2;
    }

    public function mostrarResultado(){
        echo "seu resultado é" .$resultado 
    }
}

    ?>