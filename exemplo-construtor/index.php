<?php

include_once('Carro.construtor.php');

$carro = new Carro(1999, "Tincoetienco", "Preto", "Fiat");

$carro->mostrarDados();

$carro = new Carro(2015, "Fusion", "Prata", "Ford");

$carro->mostrarDados();