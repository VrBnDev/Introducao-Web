<?php

include '../model/Calculadora.php';

$funcao = isset($_GET['funcao']) ? $_GET['funcao'] : 'listar';

// Chama o método correspondente ao valor do parâmetro 'action' usando reflexão
if (function_exists($funcao) && is_callable($funcao)) {
    $funcao();
} else {
    echo "Ação inválida";
}



function minhafuncao(){
	$msg = '';
	if(isset($_GET['msg']))
		$msg = $_GET['msg'];
	include '../view/minhafuncao_view.php';
}

function outrafuncao(){
	$msg = '';
	if(isset($_GET['msg']))
		$msg = $_GET['msg'];
	include '../view/outrafuncao_view.php';
}

function formulario(){
	$n1 = '';
	if(isset($_GET['n1']))
		$n1 = $_GET['n1'];
	$n2 = '';
	if(isset($_GET['n2']))
		$n2 = $_GET['n2'];	
	include '../view/formulario.php';
}


function soma(){
	$tipo = 'SOMA';
	$n1 = '';
	if(isset($_GET['n1']))
		$n1 = $_GET['n1'];
	$n2 = '';
	if(isset($_GET['n2']))
		$n2 = $_GET['n2'];	
	$resultado = Calculadora::somar($n1,$n2);
	include '../view/resultado.php';
}

function subtrair(){
	$tipo = 'SUBTRAÇÃO';
	$n1 = '';
	if(isset($_GET['n1']))
		$n1 = $_GET['n1'];
	$n2 = '';
	if(isset($_GET['n2']))
		$n2 = $_GET['n2'];	
	$resultado = Calculadora::subtrair($n1,$n2);
	include '../view/resultado.php';
}

function multiplicar(){
	$tipo = 'MULTIPLICAÇÃO';
	$n1 = '';
	if(isset($_GET['n1']))
		$n1 = $_GET['n1'];
	$n2 = '';
	if(isset($_GET['n2']))
		$n2 = $_GET['n2'];	
	$resultado = Calculadora::multiplicar($n1,$n2);
	include '../view/resultado.php';
}

function dividir(){
	$tipo = 'DIVISÃO';
	$n1 = '';

	if(isset($_GET['n1']))
		$n1 = $_GET['n1'];
	$n2 = '';
	if(isset($_GET['n2']))
		$n2 = $_GET['n2'];	
	$resultado = Calculadora::dividir($n1,$n2);
	include '../view/resultado.php';
}

?>