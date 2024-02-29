<?php

if( isset($_GET['funcao']) ){
	$funcao = $_GET['funcao'];
	if (!function_exists($funcao) || !is_callable($funcao))
		$funcao ='invalida';
}
else 
	$funcao ='invalida';

$funcao();

function minhaFuncao(){
	$msg = 'Entrou na minha Função Mesmo';
	include '../view/templateMinhaFuncao.php';
}

function outraFuncao(){
	$msg = 'Entrou na outra Função';
	include '../view/templateOutraFuncao.php';
}

function invalida(){
	echo 'Opção Inválida';
}

function formulario(){
	include '../view/templateFormulario.php ';
}

function soma(){
	$tipo = 'SOMA';
	$n1 = '';
	if(isset($_GET['n1']))
		$n1 = $_GET['n1'];
	$n2 = '';
	if(isset($_GET['n2']))
		$n2 = $_GET['n2'];	
	
     $resultado = $n1 + $n2 ;

	include '../view/templateResultado.php';
}
?>