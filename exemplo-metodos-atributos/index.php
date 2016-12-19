<?php

include_once("Carro.class.php");

$carro = new Carro();

$carro->ano = "2016";
$carro->modelo = "Camaro";
$carro->cor = "Amarelo";
$carro->fabricante = "Chevrolet";

$carro->mostrarDados();

$carro->desligar();

