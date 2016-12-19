<?php

include_once("ContaCorrente.php");

//Instanciando classe ContaCorrente
$conta = new ContaCorrente(
	"Lucas Lima", 
	"111.111.111-11", 
	"MG:17.530-08", 
	"Rua do Programador", 
	"Centro", 
	"Alvinópolis",
	"Minas Gerais",
	"35950-000",
	"(33) 3333-3333",
	"(22) 2222-2222",
	"lucas@lucas.com.br",
	"Banco do Lucas",
	"22.222-2",
	"11.111-1"
);

//Chamando os metodos para imprimir os dados
$conta->mostrarDados();
$conta->PessoaContaCorrente();