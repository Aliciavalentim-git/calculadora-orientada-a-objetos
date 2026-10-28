<?php
require_once "Calculadora.php";
$n1 = $_POST["numero1"];
$n2 = $_POST["numero2"];
$op= $_POST["op"];

$casio = new Calculadora();

$casio->numero1 = $n1;
$casio->numero2 = $n2;
$casio->operacao = $_POST["op"];
$casio->chapeuSelector();
