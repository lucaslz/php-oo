<?php

//Não é possivel extender classes ou metodos finais
include_once("Carro.php");

class TentaExtenderFinal extends Carro
{
	public function __construct($ano, $modelo, $cor, $fabricante)
	{
		parent::__construct($ano, $modelo, $cor, $fabricante);
	}
}