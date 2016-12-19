<?php

class Carro
{
	public $cor;
	public $fabricante;
	public $modelo;
	public $preco;

	public function __construct($cor, $fabricante, $modelo, $preco)
	{
		$this->cor = $cor;
		$this->fabricante = $fabricante;
		$this->modelo = $modelo;
		$this->preco = $preco;
	}

	public function mostrarDados()
	{
		echo "<br><h1>Dados do carro</h1><hr>";
		echo "Cor: " . $this->cor . "<br>";
		echo "Fabricante: " . $this->fabricante . "<br>";
		echo "Modelo: " . $this->modelo . "<br>";
		echo "Preco: " . $this->preco . "<br>";						
	}
}