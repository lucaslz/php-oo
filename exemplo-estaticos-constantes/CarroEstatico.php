<?php

include_once("Carro.php");

class CarroEstatico extends Carro
{
	public static $nomeCompleto = "Lucas Lima";

	public static function mostrarDados()
	{
		echo Carro::NOME . "<br>";
		echo Carro::AUTOR . "<br>";
		echo Carro::DATA_LACAMENTO . "<br>";
		echo Carro::VERSAO . "<br>";
		echo CarroEstatico::$nomeCompleto . "<br>";			
	}
}