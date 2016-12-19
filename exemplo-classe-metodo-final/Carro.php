<?php
/**
 * Classes finais não podem ser extendidas
 */
final class Carro
{
	//Definindo os atributos
	public $ano;
	public $modelo;
	public $cor;
	public $fabricante;

	public function __construct($ano, $modelo, $cor, $fabricante)
	{
		$this->ano = $ano;
		$this->modelo = $modelo;
		$this->cor = $cor;
		$this->fabricante = $fabricante;
	}

	/**
	 * Metodos finais não podem ser visualizados e usados em outras calsses
	 */
	final function mostrarDados()
	{
		echo "Ano: " . $this->ano . "<br>";
		echo "Modelo: " . $this->modelo . "<br>";
		echo "Cor: " . $this->cor . "<br>";	
		echo "Fabricante: " . $this->fabricante . "<br>";	
	}
}