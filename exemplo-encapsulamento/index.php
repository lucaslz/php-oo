<?php

include_once("CarroImposto.php");

$CarroImposto = new CarroImposto("Preto", "Fiat", "Saveiro", 25.50, 1000, 200);
// $CarroImposto->preco = 30;
$CarroImposto->mostrarDados();