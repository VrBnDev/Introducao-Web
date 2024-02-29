<?php
	
	if( isset($_GET['funcao']) ){
	$funcao = $_GET['funcao'];
	if (!function_exists($funcao) || !is_callable($funcao))
			$funcao ='invalida';
	}
	else 
		$funcao ='invalida';

	$funcao();

	function formulario(){
		$n1 = '';
		if(isset($_GET['n1']))
			$n1 = $_GET['n1'];
		$n2 = '';
		if(isset($_GET['n2']))
			$n2 = $_GET['n2'];	
		include '../view/templateCalculadora.php';
	}

	function calcular(){
		$tipo= ''

	}

?>