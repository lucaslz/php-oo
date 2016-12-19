<?php

//incluindo a classe imposto
include_once("CarroImposto.php");

//Instanciando a classe CarroImposto
$carro = new CarroImposto(2004, "Chincoetienco", "Preto", "Kia", 2300, 2500);

//Imprimindo os dados
$carro->mostrarDados();