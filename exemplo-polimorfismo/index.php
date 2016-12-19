<?php

//Estanciando as classes
include_once 'JurosCarro.class.php';
include_once 'JurosMoto.class.php';

//Calculando juros do carro
$carro = new JurosCarro(10000);
$carro->calculaJurosVeiculo();

//Calculando juros da moto
$carro = new JurosMoto(5000);
$carro->calculaJurosVeiculo();