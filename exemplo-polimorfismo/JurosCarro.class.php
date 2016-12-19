<?php

/**
 * Classe para calculo de Juros
 */
class JurosCarro
{
	//Atributos
	public $valorVeiculo;

	//Construindo e definindo os atributos
	public function __construct($valorVeiculo)
	{	
		//Setando o valor dos atributos
		$this->valorVeiculo = $valorVeiculo;
	}

	//metodo de calculo de saldo
	public function calculaJurosVeiculo()
	{
		//Calcula e imprime na tela o valor do veiculo
		echo "Total de Juros: " . $this->valorVeiculo * 0.1 . "<br>";
	}
}