<?php

class Carro
{
    public $capacidadeTanque;
    public $tipoCombustivel;
    public $qtdeCombustivel;
    public $statusCarro==0;

    public function ligar(){

    if ($this->statusCarro==0){
        $$this->statusCrro = 1;
        echo "Ligando carro...";
    } else {
        echo "Ligado";
    }
    }

   public function desligar(){
        if($this->statusCarro==0){
            echo"Carro desligado";
        } else{
            $this->statusCarro==0
            echo "desligando carro"
        }
    }

    public function encherTanque($litros){
        
        if($this->qtdeCombustivel==0){
            echo "Precisa encher o tanque";
        } else{
            $this->qtdeCombustivel==0
            echo "tanque enchendo"
        }
    }
}

?>
 