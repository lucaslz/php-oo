<?php

class Carro {

	//Atributos da classe carro
	public $ano;
	public $modelo;
	public $cor;
	public $fabricante;

	//Fazendo o construtor da classe
	public function __construct($ano, $modelo, $cor, $fabricante) {
		$this->ano = $ano;
		$this->modelo = $modelo;
		$this->cor = $cor;
		$this->fabricante = $fabricante;
	}

	public function mostrarDados() {

		echo "Ano: " . $this->ano . "<br>";
		echo "Modelo: " . $this->modelo . "<br>";
		echo "Cor: " . $this->cor . "<br>";
		echo "Fabricante: " . $this->fabricante . "<br>";
	}

	public function __destruct() {

		echo "O carro foi destruido com sucesso !!!";
	}
}