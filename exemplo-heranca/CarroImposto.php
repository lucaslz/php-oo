<?php

include_once("Carro.php");

/**
 * Fazendo o imposto do carro
 */
class CarroImposto extends Carro
{
	public $ipva;
	public $ipi;

	//Fazendo o contrutor da classe CarroImposte
	public function __construct($ano, $modelo, $cor, $fabricante, $ipva, $ipi)
	{
		//Chamado o construtor da classe pai
		parent::__construct($ano, $modelo, $cor, $fabricante);

		//Definindo as propriedades de imposto do carro
		$this->ipva = $ipva;
		$this->ipi = $ipi;
	}

	//Reescrevendo o metodo mostrarDados
	public function mostrarDados()
	{
		//Chamando o método mostrarDados da classe pai e reescrevendo
		//Deixando as propriedades já existentes
		parent::mostrarDados();

		//Imprimindo as propriedades da classe filho
		echo "IPVA: " . $this->ipva . "<br>";
		echo "IPVA: " . $this->ipva . "<br>";
	}
}