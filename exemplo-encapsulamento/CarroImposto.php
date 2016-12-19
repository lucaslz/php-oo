<?php

include_once("Carro.php");

class CarroImposto extends Carro
{

	public $ipi;
	public $ipva;

	public function __construct(
		$cor, 
		$fabricante, 
		$modelo, 
		$preco, 
		$ipi, 
		$ipva
	)
	{
		parent::__construct($cor, $fabricante, $modelo, $preco);
		$this->preco = 10;
		$this->ipi = $ipi;
		$this->ipva = $ipva;
	}


	public function mostrarDados()
	{
		parent::mostrarDados();
		echo "IPI: " . $this->ipi . "<br>";
		echo "IPVA: " . $this->ipva . "<br>";	
	}
}