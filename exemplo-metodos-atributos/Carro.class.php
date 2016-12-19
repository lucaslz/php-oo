<?php

class Carro {

	//Atributos da classe carro
	public $ano;
	public $modelo;
	public $cor;
	public $fabricante;

	//Criando os metodos
	public function mostrarDados() {
		echo "Ano: " . $this->ano . "<br>";
		echo "Modelo: " . $this->modelo . "<br>";
		echo "Cor: " . $this->cor . "<br>";
		echo "Fabricante: " . $this->fabricante . "<br>";
	}

	public function ligar() {
		echo "O Carro está Ligado !!!";
	}

	public function desligar() {
		echo "O Carro está Desligado !!!";
	}

	public function acelerar() {
		echo "O carro esta acelerando !!!";
	}

	public function frear() {
		echo "O carro esta freiando !!!";
	}
}