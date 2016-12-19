<?php

/**
 * Classe que faz referencia a um carro
 */
class Carro
{
	//Definindo atributos
	public $ano;
	public $modelo;
	public $cor;
	public $fabricante;

	//Defininco o construtor da classe
	public function __construct($ano, $modelo, $cor, $fabricante)
	{
		$this->ano = $ano;
		$this->modelo = $modelo;
		$this->cor = $cor;
		$this->fabricante = $fabricante;
	}

	//Metodo que mostrará os dados na tela
	public function mostrarDados()
	{
		echo "Ano: " . $this->ano . "<br>";
		echo "Modelo: " . $this->modelo . "<br>";
		echo "Cor: " . $this->cor . "<br>";	
		echo "Fabricante: " . $this->fabricante . "<br>";						
	}
}