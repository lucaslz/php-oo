<?php

/**
 * Classe que herda o metodo calculaJurosVeiculo da classe JurosCarro.class.php
 * para calcular o valor de juros de um veículo 
 */
class JurosMoto extends JurosCarro
{
	public function calculaJurosVeiculo()
	{
		echo "Total de Juros: " . $this->valorVeiculo * 0.5 . "<br>";
	}
}