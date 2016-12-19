<?php

/**
 * Classe que cadastra e mostra os dados do usuario de conta corrente
 */
include_once("Pessoa.php");

class ContaCorrente extends Pessoa
{
	//Definindo atributos
	public $banco;
	public $agencia;
	public $conta;

	//Fazendo o construtor da classe filha
	public function __construct(
		$nome, 
		$cpf, 
		$rg, 
		$endereco, 
		$bairro, 
		$cidade,
		$uf,
		$cep,
		$telefone,
		$celular,
		$email,
		$banco,
		$agencia,
		$conta		
	)
	{
		//Definindo os atributos da classe pai
		parent::__construct(
			$nome, 
			$cpf, 
			$rg, 
			$endereco, 
			$bairro, 
			$cidade,
			$uf,
			$cep,
			$telefone,
			$celular,
			$email
		);

		//Denindo os atributos da classe filha
		$this->banco = $banco;
		$this->agencia = $agencia;
		$this->conta = $conta;
	}

	//Reescrevendo o metodo abstrato PessoaContaCorrente
	public function PessoaContaCorrente()
	{
		echo "<br><br><h1>Conta Corrente</h1><br>";
		echo "Banco: " . $this->banco . "<br>";

		echo "Agencia: " . $this->agencia . "<br>";

		echo "Conta: " . $this->conta . "<br>";
	}
}